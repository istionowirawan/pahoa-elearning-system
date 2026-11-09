<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_prosem_model extends CI_Model {
		
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
		
		public function tampil_data_prosem($idmapel, $idkelas, $smspilih) {
			$q = "SELECT a.id, a.id_mapel, a.id_kelas, a.sk_no, (b.id) as kd_id, b.kd_no, b.kd_detail, count(c.no_indi) as jml_indi, d.semester
			FROM trx_skkd a
			LEFT JOIN trx_skkd_kd b
			ON a.id=b.id_sk
			LEFT JOIN trx_skkd_kd_indi c
			ON b.id=c.id_skkd_kd
			LEFT JOIN trx_prota d
			ON a.id=d.id_sk
			WHERE b.kd_no != 'NULL'
			AND a.id_kelas='".$idkelas."'
			AND a.id_mapel='".$idmapel."'";
			
			$q .= " AND d.semester='".$smspilih."'";
			
			$q .= " AND b.semester='".$smspilih."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			GROUP BY b.kd_detail
			ORDER BY a.id_kelas ASC, a.sk_no ASC, b.kd_no ASC";
			//echo $q;
			
			
			$query = $this->db->query($q);
			
			return $query;
		}
		public function ambil_data_bulan($smspilih) {
			$query = $this->db->query("SELECT * FROM ms_bulan WHERE semester='".$smspilih."'");
			return $query;
		}
		public function simpan_prosem($data) {
			$lastid=1;
			$cari_id = $this->db->query("SELECT id FROM trx_prosem ORDER BY id DESC LIMIT 1");
			if($cari_id->num_rows()>0) {
				$lastid = $cari_id->row(0)->id;
				$lastid += 1;
			}
			
			$q = "INSERT INTO trx_prosem (id, id_mapel, id_kelas, semester, bulan, tahun_ajaran, user_input, date)
			VALUES (
			'".$lastid."',
			'".$_POST['txtMapelProsem_input']."',
			'".$_POST['txtKelasProsem_input']."',
			'".$_POST['txtPilihSms']."',
			'".$_POST['cbProsem_bulan']."',
			'".$this->session->userdata('tahunAjr_active')."',
			'".$this->session->userdata('login_userid')."',
			now()
			)";
			$query = $this->db->query($q);
			
			
			for($a=0; $a< count($_POST['txtSKNo']); $a++) {
				$namaSKKD = "sk".$_POST['txtSKNo'][$a]."kd".$_POST['txtKDNo'][$a];
				
				$simpandetail = "
				INSERT INTO trx_prosem_detail (id_prosem, kd_id, sk_no, kd_no, week1, week2, week3, week4, week5, week_status, user_input, date)
				VALUES (
				'".$lastid."',
				'".$_POST['txtKDid'][$a]."',
				'".$_POST['txtSKNo'][$a]."',
				'".$_POST['txtKDNo'][$a]."',
				'".$_POST[$namaSKKD][0]."',
				'".$_POST[$namaSKKD][1]."',
				'".$_POST[$namaSKKD][2]."',
				'".$_POST[$namaSKKD][3]."',
				'".$_POST[$namaSKKD][4]."',
				'regular',
				'".$this->session->userdata('login_userid')."',
				now()
				)
				";
				$queryDetail = $this->db->query($simpandetail);
			}
			
			for($b=0; $b<count($_POST['txtSKNo']); $b++) {
				//$namaSKKDuji = "txtUjiSK".$_POST['txtNoUjiSK'][$b];
				$namaSKKDuji = "uji_sk".$_POST['txtSKNo'][$b]."kd".$_POST['txtKDNo'][$b];
				
				$simpanuji = "
				INSERT INTO trx_prosem_uji (id_prosem, kd_id, sk_no, kd_no, week1, week2, week3, week4, week5, user_input, date)
				VALUES (
				'".$lastid."',
				'".$_POST['txtKDid'][$b]."',
				'".$_POST['txtSKNo'][$b]."',
				'".$_POST['txtKDNo'][$b]."',
				'".$_POST[$namaSKKDuji][0]."',
				'".$_POST[$namaSKKDuji][1]."',
				'".$_POST[$namaSKKDuji][2]."',
				'".$_POST[$namaSKKDuji][3]."',
				'".$_POST[$namaSKKDuji][4]."',
				'".$this->session->userdata('login_userid')."',
				now()
				)
				";
				
				$queryUji = $this->db->query($simpanuji);
			}
			
			
			return $data;
		}
		public function update_prosem($data) {
			
			$q = "UPDATE trx_prosem SET 
			id_mapel='".$_POST['txtMapelProsem_input']."', 
			id_kelas='".$_POST['txtKelasProsem_input']."', 
			semester='".$_POST['txtPilihSms']."', 
			bulan='".$_POST['cbProsem_bulan']."', 
			tahun_ajaran='".$this->session->userdata('tahunAjr_active')."',
			user_input='".$this->session->userdata('login_userid')."', 
			date=now()
			WHERE id='".$_POST['txtProsemMs_id']."'";
			$query = $this->db->query($q);
			
			$hapusDetail = "DELETE FROM trx_prosem_detail WHERE id_prosem='".$_POST['txtProsemMs_id']."'";
			$queryHapus = $this->db->query($hapusDetail);
			for($a=0; $a< count($_POST['txtSKNo']); $a++) {
				$namaSKKD = "sk".$_POST['txtSKNo'][$a]."kd".$_POST['txtKDNo'][$a];
				
				$simpandetail = "
				INSERT INTO trx_prosem_detail (id_prosem, kd_id, sk_no, kd_no, week1, week2, week3, week4, week5, week_status, user_input, date)
				VALUES (
				'".$_POST['txtProsemMs_id']."',
				'".$_POST['txtKDid'][$a]."',
				'".$_POST['txtSKNo'][$a]."',
				'".$_POST['txtKDNo'][$a]."',
				'".$_POST[$namaSKKD][0]."',
				'".$_POST[$namaSKKD][1]."',
				'".$_POST[$namaSKKD][2]."',
				'".$_POST[$namaSKKD][3]."',
				'".$_POST[$namaSKKD][4]."',
				'regular',
				'".$this->session->userdata('login_userid')."',
				now()
				)
				";
				$queryDetail = $this->db->query($simpandetail);
			}
			
			
			$hapusUji = "DELETE FROM trx_prosem_uji WHERE id_prosem='".$_POST['txtProsemMs_id']."'";
			$queryHapusUji = $this->db->query($hapusUji);
			for($b=0; $b<count($_POST['txtSKNo']); $b++) {
				//$namaSKKDuji = "txtUjiSK".$_POST['txtNoUjiSK'][$b];
				$namaSKKDuji = "uji_sk".$_POST['txtSKNo'][$b]."kd".$_POST['txtKDNo'][$b];
				
				$simpanuji = "
				INSERT INTO trx_prosem_uji (id_prosem, kd_id, sk_no, kd_no, week1, week2, week3, week4, week5, user_input, date)
				VALUES (
				'".$_POST['txtProsemMs_id']."',
				'".$_POST['txtKDid'][$b]."',
				'".$_POST['txtSKNo'][$b]."',
				'".$_POST['txtKDNo'][$b]."',
				'".$_POST[$namaSKKDuji][0]."',
				'".$_POST[$namaSKKDuji][1]."',
				'".$_POST[$namaSKKDuji][2]."',
				'".$_POST[$namaSKKDuji][3]."',
				'".$_POST[$namaSKKDuji][4]."',
				'".$this->session->userdata('login_userid')."',
				now()
				)
				";
				
				$queryUji = $this->db->query($simpanuji);
			}
			
			//return $_POST['txtProsemMs_id'];
		}
		
		
		
		public function tampil_prosem_isi($data) {
			$qIsi = "
			SELECT (a.id) as id_ms_prosem, b.* 
			FROM trx_prosem a
			LEFT JOIN trx_prosem_detail b
			ON a.id=b.id_prosem
			WHERE a.id_mapel='".$data['mapelID']."'
			AND a.id_kelas='".$data['kelasID']."'
			AND a.semester='".$data['smsID']."'
			AND a.bulan='".$data['blnID']."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			";
			$queryIsi = $this->db->query($qIsi);
			
			return $queryIsi;
		}
		public function tampil_prosem_uji($data) {
			$qUji = "
			SELECT b.* 
			FROM trx_prosem a
			LEFT JOIN trx_prosem_uji b
			ON a.id=b.id_prosem
			WHERE a.id_mapel='".$data['mapelID']."'
			AND a.id_kelas='".$data['kelasID']."'
			AND a.semester='".$data['smsID']."'
			AND a.bulan='".$data['blnID']."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			";
			$queryUji = $this->db->query($qUji);
			
			return $queryUji;
		}
		
		public function isi_prosem_all_month($mapel,$kls,$sms) {
			$qIsi = "
			SELECT (a.id) as id_ms_prosem, a.bulan, b.*, (b.week1+b.week2+b.week3+b.week4+b.week5) as jml 
			FROM trx_prosem a
			LEFT JOIN trx_prosem_detail b
			ON a.id=b.id_prosem
			WHERE a.id_mapel='".$mapel."'
			AND a.id_kelas='".$kls."'
			AND a.semester='".$sms."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			ORDER BY b.sk_no ASC, kd_no ASC";
			$queryIsi = $this->db->query($qIsi);
			
			return $queryIsi;
		}
		
		public function isi_ujikomp_all_month($mapel,$kls,$sms) {
			$qIsi = "
			SELECT (a.id) as id_ms_prosem, a.bulan, b.*, (b.week1+b.week2+b.week3+b.week4+b.week5) as jml 
			FROM trx_prosem a
			LEFT JOIN trx_prosem_uji b
			ON a.id=b.id_prosem
			WHERE a.id_mapel='".$mapel."'
			AND a.id_kelas='".$kls."'
			AND a.semester='".$sms."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			";
			//echo $qIsi;
			$queryIsi = $this->db->query($qIsi);
			
			return $queryIsi;
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
		
		public function ambil_data_prota($mapel,$kls,$semester) {
			$q = "SELECT * FROM trx_prota 
			WHERE id_mapel='".$mapel."'
			AND id_kelas='".$kls."' 
			AND semester='".$semester."' 
			AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			$query = $this->db->query($q);
			return $query;
		}
		
		
		
		
	}

?>