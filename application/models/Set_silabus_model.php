<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_silabus_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		function getIdTahunAjaran() {
			$query = $this->db->query("SELECT * FROM ms_tahun_ajaran 
			WHERE tahun='".$this->session->userdata('tahunAjr_active')."' 
			AND semester='".$this->session->userdata('semester_active')."'");
			
			foreach ($query->result_array() as $row)
			{
				$idThnAjaran = $row['id'];
			}
			return $idThnAjaran;
		}
		function ambil_tbl_lifeskill() {
			$query = $this->db->query("SELECT * FROM ms_lifeskill");
			return $query;
		}
		function ambil_tbl_pendkar() {
			$query = $this->db->query("SELECT * FROM ms_pend_kar");
			return $query;
		}
		function ambil_tbl_confucius() {
			$query = $this->db->query("SELECT * FROM ms_confucius");
			return $query;
		}
		
		public function ambil_user_active() {
			$query = $this->db->query("SELECT * FROM ms_user WHERE id='".$this->session->userdata('login_userid')."'");
			return $query;
		}
		public function ambil_mapel_guru() {
			$query = $this->db->query("
			SELECT a.id, a.id_pelajaran, b.mapel 
			FROM trx_guru_mapel a
			LEFT JOIN ms_pelajaran b
			ON a.id_pelajaran=b.id
			WHERE a.id_user='".$this->session->userdata('login_userid')."'");

			return $query;
		}
		
		public function cari_kelas_basedmapel($idTrx) {
			$query = $this->db->query("
			SELECT a.*, b.kelas 
			FROM trx_guru_mapel_detail a
			LEFT JOIN ms_kelas b
			ON a.id_kelas=b.id
			WHERE a.id_trx='".$idTrx."'");

			return $query;
		}
		
		public function ambil_mapel_pilih($idmapel) {
			$query = $this->db->query("SELECT * FROM ms_pelajaran WHERE id='".$idmapel."'");
			return $query->row(0)->mapel;
		}
		
		public function ambil_kelas_pilih($idkelas) {
			$query = $this->db->query("SELECT * FROM ms_kelas WHERE id='".$idkelas."'");
			return $query->row(0)->kelas;
		}
		
		public function tampil_sk_silabus() {
			$q = "SELECT a.*,b.semester FROM trx_skkd a 
			LEFT JOIN trx_prota b
			ON a.id=b.id_sk
			WHERE a.id_mapel='".$_POST['silabusMapel']."' 
			AND a.id_kelas='".$_POST['silabusKelas']."'
			AND b.semester='".$_POST['silabusSms']."'
			ORDER BY sk_no ASC";
			$query = $this->db->query($q);
			
			return $query;
		}
		public function tampil_sk_rpt() {
			$q = "SELECT a.*,b.semester FROM trx_skkd a 
			LEFT JOIN trx_prota b
			ON a.id=b.id_sk
			WHERE a.id_mapel='".$_POST['mapel']."' 
			AND a.id_kelas='".$_POST['kelas']."'
			AND b.semester='".$_POST['smstr']."'
			ORDER BY sk_no ASC";
			$query = $this->db->query($q);
			
			return $query;
		}
		public function tampil_kd_silabus($data) {
			$q = "SELECT * FROM trx_skkd_kd WHERE id_sk='".$data['silabusSKid']."' AND semester='".$data['silabusSms']."' ORDER BY kd_no ASC";
			$query = $this->db->query($q);
			
			return $query;
		}
		public function tampil_skkd_silabus($data) {
			$q = "SELECT DISTINCT (a.id) as skid, a.sk_no, a.sk_detail, (b.id) as kdid, b.kd_no, b.kd_detail, b.materi_pokok, (c.id) as indiid, c.no_indi, c.desc_indi, (e.sk_sm1+e.sk_sm2) as jam_sk, t1.jam_kd
FROM trx_skkd a
LEFT JOIN trx_skkd_kd b
ON a.id=b.id_sk
LEFT JOIN trx_skkd_kd_indi c
ON b.id=c.id_skkd_kd
LEFT JOIN trx_prosem_detail d
ON b.id=d.kd_id
LEFT JOIN trx_prota e
ON a.id=e.id_sk
LEFT JOIN 
(SELECT b.id, b.id_sk, b.kd_no, b.kd_detail, d.id_prosem, 
sum(d.week1) as week1, 
sum(d.week2) as week2, 
sum(d.week3) as week3, 
sum(d.week4) as week4, 
sum(week1+week2+week3+week4) as jam_kd
FROM trx_skkd_kd b
LEFT JOIN trx_prosem_detail d
ON b.id=d.kd_id
GROUP BY b.id) as t1
ON t1.id=b.id
WHERE a.id='".$_POST['silabusSKid']."'
AND b.id='".$_POST['silabusKDid']."'
GROUP BY c.id";
			
			$query = $this->db->query($q);
			
			return $query;
		}
		
		public function tampil_skkd_silabus_uji($data) {
			$q = "SELECT *, SUM(b.week1+b.week2+b.week3+b.week4+b.week5) as jml_uji_kd 
			FROM trx_prosem a 
			LEFT JOIN trx_prosem_uji b 
			ON a.id=b.id_prosem 
			WHERE a.id_mapel='".$data['silabusMapel']."' 
			AND a.id_kelas='".$data['silabusKelas']."' 
			AND a.semester='".$data['silabusSms']."' 
			AND b.sk_no='".$data['silabusSKid']."' 
			AND b.kd_id='".$data['silabusKDid']."' 
			GROUP BY kd_id";
			
			$query = $this->db->query($q);
			
			return $query;
		}
		
		public function hitung_alokasi_waktu($data) {
			/*$q = "SELECT *, sum(t1.jam_kd) as tot_kd FROM
(SELECT b.id, b.id_sk, (b.id) as kdid, b.kd_no, b.kd_detail, d.id_prosem, 
sum(d.week1) as week1, 
sum(d.week2) as week2, 
sum(d.week3) as week3, 
sum(d.week4) as week4, 
sum(week1+week2+week3+week4) as jam_kd
FROM trx_skkd_kd b
LEFT JOIN trx_prosem_detail d
ON b.id=d.kd_id
WHERE b.id_sk='".$data['silabusSKid']."'
GROUP BY b.id) as t1";*/
			
			$q1 = "SELECT * FROM (
SELECT a.id, a.id_sk, b.kd_id, b.sk_no, SUM(b.week1+b.week2+b.week3+b.week4+b.week5) as jml_meet 
FROM trx_skkd_kd a
LEFT JOIN trx_prosem_detail b
ON a.id=b.kd_id
WHERE a.id_sk='1'
GROUP BY id_sk) as t1
";
			$query1 = $this->db->query($q1);
			
			$q2 = "SELECT * FROM (
SELECT a.id, a.id_sk, b.kd_id, b.sk_no, SUM(b.week1+b.week2+b.week3+b.week4+b.week5) as jml_meet 
FROM trx_skkd_kd a
LEFT JOIN trx_prosem_uji b
ON a.id=b.kd_id
WHERE a.id_sk='1'
GROUP BY id_sk) as t1
";
			$query2 = $this->db->query($q2);
			
			$totKD_alokasi_waktu = $query1->row(0)->jml_meet + $query2->row(0)->jml_meet;
			
			return $totKD_alokasi_waktu;
		}
		
		public function insertSilabus($data) {
			$lastid=1;
			$cari_id = $this->db->query("SELECT id FROM trx_silabus ORDER BY id DESC LIMIT 1");
			if($cari_id->num_rows()>0) {
				$lastid = $cari_id->row(0)->id;
				$lastid += 1;
			}
			
			$lifeSkill = "";
			for ($i=0; $i<count($data['txtLifeSkill']); $i++) {
				$lifeSkill .= $data['txtLifeSkill'][$i] . ";";
			}
			
			$penkar = "";
			for ($j=0; $j<count($data['txtSilabus_karakter']); $j++) {
				$penkar .= $data['txtSilabus_karakter'][$j] . ";";
			}
			
			$silTujuan = "";
			for ($k=0; $k < count($data['txtSilabus_tujuan']); $k++) {
				$silTujuan .= $data['txtSilabus_tujuan'][$k] . ";";
			}
			
			$simpanSilabus = "INSERT INTO trx_silabus 
			(id, id_mapel, id_kelas, id_sk, id_kd, semester, materi_pokok, tujuan_pembelajaran, 
			life_skill, nilai_moral, pendidikan_karakter, kegiatan_pembelajaran, sumber_belajar, 
			tahun_ajaran, user_input, date)
			VALUES (
			'".$lastid."',
			'".$data['txtMapelSilabus_input']."',
			'".$data['txtKelasSilabus_input']."',
			'".$data['txtSilabusSK']."',
			'".$data['txtSilabusKD']."',
			'".$data['txtPilihSms']."',
			'".addslashes($data['txtSilabus_mapok'])."',
			'".addslashes($silTujuan)."',
			'".addslashes($lifeSkill)."',
			'".addslashes($data['txtSilabus_moral'])."',
			'".addslashes($penkar)."',
			'".addslashes($data['txtSilabus_kegbel'])."',
			'".addslashes($data['txtSilabus_sumbel'])."',
			'".$this->session->userdata('tahunAjr_active')."',
			'".$this->session->userdata('login_userid')."',
			now()
			)";
			$qSimpan = $this->db->query($simpanSilabus);
			
			for ($k=0; $k < count($data['txtSilabus_tujuan']); $k++) {
				$simpanTujuan = "INSERT INTO trx_silabus_tujuan 
				(id_silabus, tujuan)
				VALUES (
				'".$lastid."',
				'".addslashes($data['txtSilabus_tujuan'][$k])."'
				)";
				$qDetail = $this->db->query($simpanTujuan);
			}
			
			for ($a=0; $a < count($data['txtPenilaian']); $a++) {
				$simpanDetail = "INSERT INTO trx_silabus_detail 
				(id_silabus, id_indi, penilaian_indi)
				VALUES (
				'".$lastid."',
				'".$data['txtIndiID'][$a]."',
				'".$data['txtPenilaian'][$a]."'
				)";
				$qDetail = $this->db->query($simpanDetail);
			}
			
			
			return $data;
		}
		
		 
		
		public function updateSilabus($data) {
			$lifeSkill = "";
			for ($i=0; $i<count($data['txtLifeSkill']); $i++) {
				$lifeSkill .= $data['txtLifeSkill'][$i] . ";";
			}
			
			$penkar = "";
			for ($j=0; $j<count($data['txtSilabus_karakter']); $j++) {
				$penkar .= $data['txtSilabus_karakter'][$j] . ";";
			}
			
			$silTujuan = "";
			for ($k=0; $k < count($data['txtSilabus_tujuan']); $k++) {
				$silTujuan .= $data['txtSilabus_tujuan'][$k] . ";";
			}
			
			$qUpdate = "UPDATE trx_silabus SET
			id_mapel='".$data['txtMapelSilabus_input']."', 
			id_kelas='".$data['txtKelasSilabus_input']."', 
			id_sk='".$data['txtSilabusSK']."', 
			id_kd='".$data['txtSilabusKD']."', 
			semester='".$data['txtPilihSms']."', 
			materi_pokok='".addslashes($data['txtSilabus_mapok'])."', 
			tujuan_pembelajaran='".addslashes($silTujuan)."', 
			life_skill='".$lifeSkill."', 
			nilai_moral='".addslashes($data['txtSilabus_moral'])."', 
			pendidikan_karakter='".$penkar."', 
			kegiatan_pembelajaran='".addslashes($data['txtSilabus_kegbel'])."', 
			sumber_belajar='".addslashes($data['txtSilabus_sumbel'])."', 
			tahun_ajaran='".$this->session->userdata('tahunAjr_active')."',
			user_input='".$this->session->userdata('login_userid')."', 
			date=now()
			WHERE id='".$data['txtSilabus_id']."'";
			$queryUpdate = $this->db->query($qUpdate);
			
			$qDeleteTujuan = "DELETE FROM trx_silabus_tujuan WHERE id_silabus='".$data['txtSilabus_id']."'";
			$queryDelete = $this->db->query($qDeleteTujuan);
			for ($k=0; $k < count($data['txtSilabus_tujuan']); $k++) {
				$simpanTujuan = "INSERT INTO trx_silabus_tujuan 
				(id_silabus, tujuan)
				VALUES (
				'".$data['txtSilabus_id']."',
				'".addslashes($data['txtSilabus_tujuan'][$k])."'
				)";
				$qDetail = $this->db->query($simpanTujuan);
			}
			
			
			$qDeleteDetail = "DELETE FROM trx_silabus_detail WHERE id_silabus='".$data['txtSilabus_id']."'";
			$queryDelete = $this->db->query($qDeleteDetail);
			
			for ($a=0; $a < count($data['txtPenilaian']); $a++) {
				$simpanDetail = "INSERT INTO trx_silabus_detail 
				(id_silabus, id_indi, penilaian_indi)
				VALUES (
				'".$data['txtSilabus_id']."',
				'".$data['txtIndiID'][$a]."',
				'".addslashes($data['txtPenilaian'][$a])."'
				)";
				$qDetail = $this->db->query($simpanDetail);
			}
			
			return $data;
		}
		
		public function ambil_data_bulan($smspilih) {
			$query = $this->db->query("SELECT * FROM ms_bulan WHERE semester='".$smspilih."'");
			return $query;
		}
		
		
		public function report_skdetail($mapel,$kls,$sms,$sk) {
			$q = "SELECT DISTINCT (a.id) as skid, a.sk_no, a.sk_detail, (b.id) as kdid, b.kd_no, b.kd_detail, (c.id) as indiid, c.no_indi, c.desc_indi, (e.sk_sm1+e.sk_sm2) as jam_sk, t1.jam_kd
FROM trx_skkd a
LEFT JOIN trx_skkd_kd b
ON a.id=b.id_sk
LEFT JOIN trx_skkd_kd_indi c
ON b.id=c.id_skkd_kd
LEFT JOIN trx_prosem_detail d
ON b.id=d.kd_id
LEFT JOIN trx_prota e
ON a.id=e.id_sk
LEFT JOIN 
(SELECT b.id, b.id_sk, b.kd_no, b.kd_detail, d.id_prosem, 
sum(d.week1) as week1, 
sum(d.week2) as week2, 
sum(d.week3) as week3, 
sum(d.week4) as week4, 
sum(week1+week2+week3+week4) as jam_kd
FROM trx_skkd_kd b
LEFT JOIN trx_prosem_detail d
ON b.id=d.kd_id
GROUP BY b.id) as t1
ON t1.id=b.id
WHERE a.id='".$sk."'
AND a.id_mapel='".$mapel."' 
AND a.id_kelas='".$kls."'";
			
			$query = $this->db->query($q);
			
			return $query;
		}
		
		public function tampil_isi_silabus($data) {
			$qCari = "SELECT a.*,b.id_indi, b.penilaian_indi 
			FROM trx_silabus a
			LEFT JOIN trx_silabus_detail b
			ON a.id=b.id_silabus
			WHERE a.id_mapel='".$data['silabusMapel']."'
			AND a.id_kelas='".$data['silabusKelas']."'
			AND a.id_sk='".$data['silabusSKid']."'
			AND a.id_kd='".$data['silabusKDid']."'
			AND a.semester='".$data['silabusSms']."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			
			$qCariHasil = $this->db->query($qCari);
			
			return $qCariHasil;
		}
		
		public function report_silabus($mapel,$kls,$sms,$sk) {
			$q = "SELECT a.*, (b.id) as kdid, b.kd_no, b.kd_detail 
FROM trx_silabus a
LEFT JOIN trx_skkd_kd b
ON a.id_kd=b.id
WHERE a.id_mapel='".$mapel."'
AND a.id_kelas='".$kls."'
AND a.id_sk='".$sk."'
AND a.semester='".$sms."'
AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			$query = $this->db->query($q);
			return $query;
		}
		
		public function ambil_nama_user($id) {
			$q = $this->db->query("SELECT * FROM ms_user 
			WHERE id='".$id."'");
			return $q->row(0)->nama;
		}
		public function ambil_nama_kepsek($jenjang) {
			$kepsek = $this->db->query("SELECT * FROM ms_kepsek 
			WHERE jenjang='".$jenjang."'");
			return $kepsek->row(0)->nama_kepsek;
		}
		
		
		public function ambil_all_user() {
			$q = "SELECT * FROM ms_user";
			if($this->session->userdata('login_id_jabatan')==1
			|| $this->session->userdata('login_id_jabatan')==2
			|| $this->session->userdata('login_id_jabatan')==3) {
				$q .= " WHERE jenjang='".$this->session->userdata('login_jenjang')."'";
			}
			$q .= " ORDER BY jenjang ASC, nama ASC";
			$query = $this->db->query($q);
			return $query;
		}
		
		public function ambil_mapok_skkd($idmapel,$idkelas,$idsk,$idkd,$nokd) {
			$q = "SELECT * FROM trx_skkd a
			LEFT JOIN trx_skkd_kd b
			ON a.id=b.id_sk
			WHERE a.id_mapel='".$idmapel."' AND a.id_kelas='".$idkelas."'
			AND b.id_sk='".$idsk."' AND b.kd_no='".$nokd."'";
			echo $q;
			$query = $this->db->query($q);
			return $query;
		}

	}

?>