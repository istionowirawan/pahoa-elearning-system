<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_rpp_model extends CI_Model {
		
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
			WHERE a.id_user='".$this->session->userdata('login_userid')."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'");

			return $query;
		}
		
		public function cari_kelas_basedmapel($idTrx) {
			$query = $this->db->query("
			SELECT a.*, b.kelas 
			FROM trx_guru_mapel_detail a
			LEFT JOIN ms_kelas b
			ON a.id_kelas=b.id
			WHERE a.id_trx='".$idTrx['txtMapel']."'
			AND b.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'");

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
		
		public function tampil_sk_rpp($data) {
			
			$q = "SELECT a.*,b.semester FROM trx_skkd a 
			LEFT JOIN trx_prota b
			ON a.id=b.id_sk
			WHERE a.id_mapel='".$data['rppMapel']."' 
			AND a.id_kelas='".$data['rppKelas']."'
			AND b.semester='".$data['rppSms']."'
			ORDER BY sk_no ASC";
			$query = $this->db->query($q);
			
			//print_r($data);
			return $query;
		}
		
		public function jumlah_jam_sk($mapel,$kls,$sk,$skno,$kdid) {
			/*$q = "SELECT *, (sk_sm1+sk_sm2) as jmljam FROM trx_prota
WHERE id_mapel='".$mapel."'
AND id_kelas='".$kls."'
AND id_sk='".$sk."'";*/

			$q = "SELECT a.*, b.sk_no, b.kd_id, SUM(b.week1+b.week2+b.week3+b.week4+b.week5) as jmljam 
			FROM trx_prosem a
			LEFT JOIN trx_prosem_detail b
			ON a.id=b.id_prosem
			WHERE a.id_mapel='".$mapel."'
			AND a.id_kelas='".$kls."'
			AND b.sk_no='".$skno."'
			AND b.kd_id='".$kdid."'
			GROUP BY sk_no";
			//echo $q;
			$query = $this->db->query($q);
			return $query;
		}
		
		public function jumlah_jam_sk_uji($mapel,$kls,$sk,$skno,$kdid) {
			$q = "SELECT a.*, b.sk_no, b.kd_id, SUM(b.week1+b.week2+b.week3+b.week4+b.week5) as jmljam 
			FROM trx_prosem a
			LEFT JOIN trx_prosem_uji b
			ON a.id=b.id_prosem
			WHERE a.id_mapel='".$mapel."'
			AND a.id_kelas='".$kls."'
			AND b.sk_no='".$skno."'
			AND b.kd_id='".$kdid."'
			GROUP BY sk_no";
			//echo $q;
			$query = $this->db->query($q);
			return $query;
		}
		
		public function ambil_data_skkd($mapel,$kls,$sms,$sk) {
			$q = "SELECT (a.id) as idsk, a.id_mapel, a.id_kelas, a.sk_no, a.sk_detail,
(b.id) as idkd, b.kd_no, b.kd_detail, 
(c.id) as idindi, c.no_indi, c.desc_indi
FROM trx_skkd a
LEFT JOIN trx_skkd_kd b
ON a.id=b.id_sk
LEFT JOIN trx_skkd_kd_indi c
ON b.id=c.id_skkd_kd
WHERE a.id_mapel='".$mapel."'
AND a.id_kelas='".$kls."'
AND a.id='".$sk."'
";
//echo $q;
			$query = $this->db->query($q);
			return $query;
		}
		
		public function ambil_data_skkd_rpp($mapel,$kls,$sms,$sk,$kd) {
			$q = "SELECT (a.id) as idsk, a.id_mapel, a.id_kelas, a.sk_no, a.sk_detail,
(b.id) as idkd, b.kd_no, b.kd_detail, 
(c.id) as idindi, c.no_indi, c.desc_indi
FROM trx_skkd a
LEFT JOIN trx_skkd_kd b
ON a.id=b.id_sk
LEFT JOIN trx_skkd_kd_indi c
ON b.id=c.id_skkd_kd
WHERE a.id_mapel='".$mapel."'
AND a.id_kelas='".$kls."'
AND a.id='".$sk."'
AND b.id='".$kd."'
";
//echo $q;
			$query = $this->db->query($q);
			return $query;
		}
		
		
		public function simpanHeader_part($data) {
			$lastid=1;
			$cari_id = $this->db->query("SELECT id FROM trx_rpp ORDER BY id DESC LIMIT 1");
			if($cari_id->num_rows()>0) {
				$lastid = $cari_id->row(0)->id;
				$lastid += 1;
			}
			
			$q = "INSERT INTO trx_rpp (id, no_rpp, id_mapel, id_kelas, semester, id_sk, id_kd, jml_temu, tahun_ajaran, user_input, date)
			VALUES 
			(
			'".$lastid."',
			'".$data['norpp']."',
			'".$data['mapelid']."',
			'".$data['kelasid']."',
			'".$data['smst']."',
			'".$data['skid']."',
			'".$data['kdid']."',
			'".$data['temujml']."',
			'".$this->session->userdata('tahunAjr_active')."',
			'".$this->session->userdata('login_userid')."',
			now()
			)";
			$query = $this->db->query($q);
			
			$hasil = "";
			if($query) {
				$hasil = $lastid;
			} else {
				$hasil = mysql_error();
			}
			return $hasil;
		}
		
		
		
		public function cari_trx_rpp($mapel,$kls,$sms,$sk) {
			$q = "SELECT id,no_rpp FROM trx_rpp 
			WHERE id_mapel='".$mapel."' 
			AND id_kelas='".$kls."' 
			AND semester='".$sms."' AND id_sk='".$sk."'
			AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			$query = $this->db->query($q);
			return $query;
		}
		
		
		//TUJUAN
		public function simpanTujuan_part($data) {
			$qCari = "SELECT id FROM trx_rpp_tujuan WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."' AND pert_ke='".$data['txtPertemuanKe']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$qDel = "DELETE FROM trx_rpp_tujuan WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."' AND pert_ke='".$data['txtPertemuanKe']."'";
				$queryDel = $this->db->query($qDel);
			}
			
			$isiTujuan="";
			for($a=0; $a<count($_POST['txtTemuTujuan_pembelajaran']); $a++) {
				$isiTujuan .= $_POST['txtTemuTujuan_pembelajaran'][$a] . ";";
			}
			
			$q = "INSERT INTO trx_rpp_tujuan
			(rpp_id,rpp_no,kd_id,pert_ke,jml_jam,tujuan_skill,tujuan_moral,tujuan_karakter,tujuan_pembelajaran,userinput,date) 
			VALUES
			(
			'".$data['rpp_id']."',
			'".$data['rpp_no']."',
			'".$data['kd_id']."',
			'".$data['txtPertemuanKe']."',
			'".$data['txtJmlJam']."',
			'".$data['txtTemuTujuan_skill']."',
			'".$data['txtTemuTujuan_moral']."',
			'".$data['txtTemuTujuan_karakter']."',
			'".$isiTujuan."',
			'".$this->session->userdata('login_userid')."',
			now()
			)";
			$query = $this->db->query($q);
			return $query;
		}
		public function loadTujuanTemu($notemu,$rppid,$kdid,$skid) {
			//$qLoad = "SELECT * FROM trx_rpp_tujuan WHERE tujuan_no='".$notemu."' AND kd_id='".$kdid."' AND rpp_id='".$rppid."'";
			$qLoad = "SELECT * FROM trx_silabus WHERE id_kd='".$kdid."' AND id_sk='".$skid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		public function loadTujuanIsiTemu($notemu,$rppid,$kdid,$skid) {
			$qLoad = "SELECT * FROM trx_rpp_tujuan WHERE tujuan_no='".$notemu."' AND kd_id='".$kdid."' AND rpp_id='".$rppid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		public function loadTujuanPertemuan($rppid,$kdid,$skid) {
			$qLoad = "SELECT * FROM trx_rpp_tujuan WHERE kd_id='".$kdid."' AND rpp_id='".$rppid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		function ambil_tbl_lifeskill() {
			$query = $this->db->query("SELECT * FROM ms_lifeskill");
			return $query;
		}
		function ambil_tbl_tujbel() {
			$query = $this->db->query("SELECT * FROM trx_silabus_tujuan");
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
		
		
		
		//MATERI
		public function simpanMateri_part($data) {
			$qCari = "SELECT id FROM trx_rpp_materi WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$q = "UPDATE trx_rpp_materi SET
				rpp_no='".$data['rpp_no']."',
				materi='".addslashes($data['txtMateriBelajar'])."',
				userinput='".$this->session->userdata('login_userid')."',
				date=now()
				WHERE rpp_id='".$data['rpp_id']."'
				AND kd_id='".$data['kd_id']."'";
				$query = $this->db->query($q);
			} else {
				$q = "INSERT INTO trx_rpp_materi
				(rpp_id,rpp_no,kd_id,materi,userinput,date) 
				VALUES
				(
				'".$data['rpp_id']."',
				'".$data['rpp_no']."',
				'".$data['kd_id']."',
				'".addslashes($data['txtMateriBelajar'])."',
				'".$this->session->userdata('login_userid')."',
				now()
				)";
				$query = $this->db->query($q);
			}
			
			return $query;			
		}
		public function loadRppMateri($rppid,$kdid) {
			$qLoad = "SELECT * FROM trx_rpp_materi WHERE rpp_id='".$rppid."' AND kd_id='".$kdid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		
		
		//METODE
		public function simpanMetode_part($data) {
			$qCari = "SELECT id FROM trx_rpp_metode WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$q = "UPDATE trx_rpp_metode SET
				rpp_no='".$data['rpp_no']."',
				metode='".addslashes($data['txtMetodeBelajar'])."',
				userinput='".$this->session->userdata('login_userid')."',
				date=now()
				WHERE rpp_id='".$data['rpp_id']."'
				AND kd_id='".$data['kd_id']."'";
				//echo $q;
				$query = $this->db->query($q);
			} else {
				$q = "INSERT INTO trx_rpp_metode
				(rpp_id,rpp_no,kd_id,metode,userinput,date) 
				VALUES
				(
				'".$data['rpp_id']."',
				'".$data['rpp_no']."',
				'".$data['kd_id']."',
				'".addslashes($data['txtMetodeBelajar'])."',
				'".$this->session->userdata('login_userid')."',
				now()
				)";
				//echo $q;
				$query = $this->db->query($q);
			}
			
			return $query;			
		}
		public function loadRppMetode($rppid,$kdid) {
			$qLoad = "SELECT * FROM trx_rpp_metode WHERE rpp_id='".$rppid."' AND kd_id='".$kdid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		
		
		//KEGIATAN PEMBELAJARAN
		public function simpanKegbel_part($data) {
			$qCari = "SELECT id FROM trx_rpp_kegbel WHERE kd_id='".$data['kd_id']."' AND pert_ke='".$data['txtPertemuanKe']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$qDel = "DELETE FROM trx_rpp_kegbel WHERE kd_id='".$data['kd_id']."' AND pert_ke='".$data['txtPertemuanKe']."'";
				$queryDel = $this->db->query($qDel);
			}
			
			$q = "INSERT INTO trx_rpp_kegbel
			(
			rpp_id,
			rpp_no,
			kd_id,
			pert_ke,
			jml_jam,
			pendahuluan,
			waktu_a,
			metode_a,
			eksplor,
			elabor,
			konfirm,
			waktu_b,
			metode_b,
			penutup,
			waktu_c,
			metode_c,
			tujuan,
			waktu_d,
			metode_d,
			userinput,
			date) 
			VALUES
			(
			'".$data['rpp_id']."',
			'".$data['rpp_no']."',
			'".$data['kd_id']."',
			'".$data['txtPertemuanKe']."',
			'".$data['txtJmlJam']."',
			'".$data['txtRPP_kegbel_pendahuluan']."',
			'".$data['txtRPP_kegbel_waktu_a']."',
			'".$data['txtRPP_kegbel_metode_a']."',
			'".$data['txtRPP_kegbel_eksplor']."',
			'".$data['txtRPP_kegbel_elabor']."',
			'".$data['txtRPP_kegbel_konfirm']."',
			'".$data['txtRPP_kegbel_waktu_b']."',
			'".$data['txtRPP_kegbel_metode_b']."',
			'".$data['txtRPP_kegbel_tutup']."',
			'".$data['txtRPP_kegbel_waktu_c']."',
			'".$data['txtRPP_kegbel_metode_c']."',
			'".$data['txtRPP_kegbel_tujuan']."',
			'".$data['txtRPP_kegbel_waktu_d']."',
			'".$data['txtRPP_kegbel_metode_d']."',
			'".$this->session->userdata('login_userid')."',
			now()
			)";
			$query = $this->db->query($q);
		}
		public function loadKegbel($notemu,$rppid,$kdid) {
			$qLoad = "SELECT * FROM trx_rpp_kegbel WHERE kegbel_no='".$notemu."' AND rpp_id='".$rppid."' AND kd_id='".$kdid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		public function hpsTblKegbel($data) {
			$q = "DELETE FROM trx_rpp_kegbel WHERE id='".$data['id']."'";
			$query = $this->db->query($q);
			return $query;
		}
		
		
		
		//SUMBER
		public function simpanSumber_part($data) {
			$qCari = "SELECT id FROM trx_rpp_sumber WHERE rpp_id='".$data['rpp_id']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$q = "UPDATE trx_rpp_sumber SET
				rpp_no='".$data['rpp_no']."',
				sumber='".addslashes($data['txtSumberBelajar'])."',
				userinput='".$this->session->userdata('login_userid')."',
				date=now()
				WHERE rpp_id='".$data['rpp_id']."'
				AND kd_id='".$data['kd_id']."'";
				$query = $this->db->query($q);
			} else {
				$q = "INSERT INTO trx_rpp_sumber
				(rpp_id,rpp_no,kd_id,sumber,userinput,date) 
				VALUES
				(
				'".$data['rpp_id']."',
				'".$data['rpp_no']."',
				'".$data['kd_id']."',
				'".addslashes($data['txtSumberBelajar'])."',
				'".$this->session->userdata('login_userid')."',
				now()
				)";
				$query = $this->db->query($q);
			}
			
			return $query;			
		}
		public function loadRppSumber($rppid,$kdid) {
			$qLoad = "SELECT * FROM trx_rpp_sumber WHERE rpp_id='".$rppid."' AND kd_id='".$kdid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		public function loadRppSumberSilabus($rppid,$kdid,$sk) {
			$qLoad = "SELECT * FROM trx_silabus WHERE id_sk='".$sk."' AND id_kd='".$kdid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		public function loadRppTableTujuan($rppid,$kdid) {
			$qLoad = "SELECT * FROM trx_rpp_tujuan WHERE kd_id='".$kdid."' ORDER BY pert_ke ASC";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		public function hpsTblTujuan($data) {
			$q = "DELETE FROM trx_rpp_tujuan WHERE id='".$data['id']."'";
			$query = $this->db->query($q);
			return $query;
		}
		
		
		public function loadRppTableKegbel($rppid,$kdid) {
			$qLoad = "SELECT * FROM trx_rpp_kegbel WHERE kd_id='".$kdid."' ORDER BY pert_ke ASC";
			//echo $qLoad;
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		
		//MEDIA
		public function simpanMedia_part($data) {
			$qCari = "SELECT id FROM trx_rpp_media WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$q = "UPDATE trx_rpp_media SET
				rpp_no='".$data['rpp_no']."',
				media='".addslashes($data['txtMediaBelajar'])."',
				userinput='".$this->session->userdata('login_userid')."',
				date=now()
				WHERE rpp_id='".$data['rpp_id']."'
				AND kd_id='".$data['kd_id']."'";
				$query = $this->db->query($q);
			} else {
				$q = "INSERT INTO trx_rpp_media
				(rpp_id,rpp_no,kd_id,media,userinput,date) 
				VALUES
				(
				'".$data['rpp_id']."',
				'".$data['rpp_no']."',
				'".$data['kd_id']."',
				'".addslashes($data['txtMediaBelajar'])."',
				'".$this->session->userdata('login_userid')."',
				now()
				)";
				$query = $this->db->query($q);
			}
			
			return $query;			
		}
		public function loadRppMedia($rppid,$kdid) {
			$qLoad = "SELECT * FROM trx_rpp_media WHERE rpp_id='".$rppid."' AND kd_id='".$kdid."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		
		
		//INDIKATOR PENILAIAN
		public function simpanIndi_part($data) {
			$qCari = "SELECT id FROM trx_rpp_indikator WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$qDel = "DELETE FROM trx_rpp_indikator WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
				$queryDel = $this->db->query($qDel);
			}
			
			for($a=0; $a< count($data['txtRPP_nilai_nomor']); $a++) {
				$q = "INSERT INTO trx_rpp_indikator
				(
				rpp_id,
				rpp_no,
				kd_id,
				no,
				indikator,
				teknik,
				bentuk,
				instrument,
				userinput,
				date) 
				VALUES
				(
				'".$data['rpp_id']."',
				'".$data['rpp_no']."',
				'".$data['kd_id']."',
				'".$data['txtRPP_nilai_nomor'][$a]."',
				'".addslashes($data['txtRPP_nilai_indi'][$a])."',
				'".addslashes($data['txtRPP_nilai_teknik'][$a])."',
				'".addslashes($data['txtRPP_nilai_bentuk'][$a])."',
				'".addslashes($data['txtRPP_nilai_instrument'][$a])."',
				'".$this->session->userdata('login_userid')."',
				now()
				)";
				$query = $this->db->query($q);
			}
		}
		public function loadRppIndi($data) {
			$qLoad = "SELECT * FROM trx_rpp_indikator WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		
		
		//PENILAIAN SOAL
		public function simpanSoal_part($data) {
			$qCari = "SELECT id FROM trx_rpp_soal WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$qDel = "DELETE FROM trx_rpp_soal WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
				$queryDel = $this->db->query($qDel);
			}
			
			for($a=0; $a< count($data['txtRPP_soal_nomor']); $a++) {
				$q = "INSERT INTO trx_rpp_soal
				(
				rpp_id,
				rpp_no,
				kd_id,
				no,
				soal,
				bobot,
				userinput,
				date) 
				VALUES
				(
				'".$data['rpp_id']."',
				'".$data['rpp_no']."',
				'".$data['kd_id']."',
				'".$data['txtRPP_soal_nomor'][$a]."',
				'".addslashes($data['txtRPP_soal_isi'][$a])."',
				'".addslashes($data['txtRPP_soal_bobot'][$a])."',
				'".$this->session->userdata('login_userid')."',
				now()
				)";
				$query = $this->db->query($q);
			}
		}
		public function loadRppSoal($data) {
			$qLoad = "SELECT * FROM trx_rpp_soal WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		public function tampil_kd_rpp($data) {
			$q = "SELECT * FROM trx_skkd_kd WHERE id_sk='".$data['rppSKid']."' AND semester='".$data['rppSms']."' ORDER BY kd_no ASC";
			$query = $this->db->query($q);
			
			return $query;
		}
		
		
		//PENILAIAN JAWABAN
		public function simpanJawaban_part($data) {
			$qCari = "SELECT id FROM trx_rpp_jawaban WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$qDel = "DELETE FROM trx_rpp_jawaban WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
				$queryDel = $this->db->query($qDel);
			}
			
			for($a=0; $a< count($data['txtRPP_jawaban_nomor']); $a++) {
				$q = "INSERT INTO trx_rpp_jawaban
				(
				rpp_id,
				rpp_no,
				kd_id,
				no,
				jawaban,
				userinput,
				date) 
				VALUES
				(
				'".$data['rpp_id']."',
				'".$data['rpp_no']."',
				'".$data['kd_id']."',
				'".$data['txtRPP_jawaban_nomor'][$a]."',
				'".addslashes($data['txtRPP_jawaban_isi'][$a])."',
				'".$this->session->userdata('login_userid')."',
				now()
				)";
				$query = $this->db->query($q);
			}
		}
		public function loadRppJawaban($data) {
			$qLoad = "SELECT * FROM trx_rpp_jawaban WHERE rpp_id='".$data['rpp_id']."' AND kd_id='".$data['kd_id']."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		public function show_report_rpp($mapel,$kls,$sms,$sk,$kdid) {
			//print_r($data);
			$qLoad = "SELECT a.*, b.materi, c.metode, d.sumber, e.media
			FROM trx_rpp a
			LEFT JOIN trx_rpp_materi b
			ON a.id=b.rpp_id
			LEFT JOIN trx_rpp_metode c
			ON a.id=c.rpp_id
			LEFT JOIN trx_rpp_sumber d
			ON a.id=d.rpp_id
			LEFT JOIN trx_rpp_media e
			ON a.id=e.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			//echo $qLoad;
			$queryLoad = $this->db->query($qLoad);
			
			return $queryLoad;
		}
		
		public function show_report_rpp_media($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT a.*, (b.kd_id) as kdmedia, b.media
			FROM trx_rpp a
			LEFT JOIN trx_rpp_media b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			//echo $qLoad;
			$queryLoad = $this->db->query($qLoad);
			
			return $queryLoad;
		}
		
		public function show_report_rpp_materi($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT a.*, (b.kd_id) as kdmateri, b.materi
			FROM trx_rpp a
			LEFT JOIN trx_rpp_materi b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			//echo $qLoad;
			$queryLoad = $this->db->query($qLoad);
			
			return $queryLoad;
		}
		
		public function show_report_rpp_metode($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT a.*, (b.kd_id) as kdmetode, b.metode
			FROM trx_rpp a
			LEFT JOIN trx_rpp_metode b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			//echo $qLoad;
			$queryLoad = $this->db->query($qLoad);
			
			return $queryLoad;
		}
		
		public function show_report_rpp_tujuan($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT b.*
			FROM trx_rpp a
			LEFT JOIN trx_rpp_tujuan b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			ORDER BY b.pert_ke ASC,
			b.tujuan_no ASC";
			
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		public function show_report_rpp_kegbel($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT b.*
			FROM trx_rpp a
			LEFT JOIN trx_rpp_kegbel b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			ORDER BY b.pert_ke ASC,
			b.kegbel_no ASC";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		public function show_report_rpp_soal($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT b.*
			FROM trx_rpp a
			LEFT JOIN trx_rpp_soal b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			ORDER BY b.no ASC";
			//echo $qLoad;
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		public function show_report_rpp_jawaban($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT b.*
			FROM trx_rpp a
			LEFT JOIN trx_rpp_jawaban b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			ORDER BY b.no ASC";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		public function show_report_rpp_indi($mapel,$kls,$sms,$sk,$kdid) {
			$qLoad = "SELECT b.*
			FROM trx_rpp a
			LEFT JOIN trx_rpp_indikator b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$mapel."' 
			AND a.id_kelas='".$kls."' 
			AND a.semester='".$sms."' 
			AND a.id_sk='".$sk."'
			AND b.kd_id='".$kdid."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			ORDER BY b.no ASC";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
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
		
		public function ambil_tujuan_pembelajaran($skid,$kdid) {
			$q="SELECT a.id_mapel, a.id_kelas, a.id_sk, a.id_kd, (b.id) as idtujuan, b.tujuan 
			FROM trx_silabus a
			LEFT JOIN trx_silabus_tujuan b
			ON a.id=b.id_silabus
			WHERE a.id_sk='".$skid."'
			AND a.id_kd='".$kdid."'
			";
			$query = $this->db->query($q);
			return $query;
		}
		
		
	}

?>