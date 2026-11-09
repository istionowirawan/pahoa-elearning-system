<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_prota_model extends CI_Model {
		
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
			WHERE a.id_trx='".$idTrx."'
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
		
		public function tampil_data_prota($idmapel, $idkelas) {
			$query = $this->db->query("SELECT a.id, a.id_mapel, c.mapel, a.id_kelas, d.kelas, a.sk_no, COUNT(b.kd_no) as jml_kd, a.sk_detail, a.user_input, a.date  
			FROM trx_skkd a
			LEFT JOIN trx_skkd_kd b
			ON a.id=b.id_sk
			LEFT JOIN ms_pelajaran c
			ON a.id_mapel=c.id
			LEFT JOIN ms_kelas d
			ON a.id_kelas=d.id
			WHERE a.id_kelas='".$idkelas."' 
			AND a.id_mapel='".$idmapel."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			GROUP BY a.id
			ORDER BY a.sk_no ASC");
			
			return $query;
		}
		public function simpan_prota($data) {
			
			for ($a=0; $a<count($_POST['txtSKNo']); $a++) {
				if($_POST['txtChxSms_SK'][$a]==12) {
					for($b=0; $b<2; $b++) {
						$q = "INSERT INTO trx_prota (id_mapel, id_kelas, id_sk, sk_no, sk_sm1, sk_sm2, semester, tahun_ajaran, user_input, date)
						VALUES
						('".$_POST['txtMapelProta_input']."',
						'".$_POST['txtKelasProta_input']."',
						'".$_POST['txtIDSK'][$a]."',
						'".$_POST['txtSKNo'][$a]."',";
						
						if($b==0) {
							$q .= "'".$_POST['txtSKsm1'][$a]."',
							'0',
							'1',";
						} else {
							$q .= "'0',
							'".$_POST['txtSKsm2'][$a]."',
							'2',";
						}
						$q .= "
						'".$this->session->userdata('tahunAjr_active')."',
						'".$this->session->userdata('login_userid')."',
						now()
						)";
						$simpanProta = $this->db->query($q);
					}
				} else {
					$q = "INSERT INTO trx_prota (id_mapel, id_kelas, id_sk, sk_no, sk_sm1, sk_sm2, semester, tahun_ajaran, user_input, date)
					VALUES
					('".$_POST['txtMapelProta_input']."',
					'".$_POST['txtKelasProta_input']."',
					'".$_POST['txtIDSK'][$a]."',
					'".$_POST['txtSKNo'][$a]."',
					'".$_POST['txtSKsm1'][$a]."',
					'".$_POST['txtSKsm2'][$a]."',
					'".$_POST['txtChxSms_SK'][$a]."',
					'".$this->session->userdata('tahunAjr_active')."',
					'".$this->session->userdata('login_userid')."',
					now()
					)";
					$simpanProta = $this->db->query($q);
				}
				
			}
			
			//return $simpanProta;
		}
		public function update_prota($data) {
			//return $data;
			
			$hapusProta = $this->db->query("DELETE FROM trx_prota 
			WHERE id_mapel='".$_POST['txtMapelProta_input']."' AND id_kelas='".$_POST['txtKelasProta_input']."'");
			
			for ($a=0; $a<count($_POST['txtSKNo']); $a++) {
				if($_POST['txtChxSms_SK'][$a]==12) {
					for($b=0; $b<2; $b++) {
						$q = "INSERT INTO trx_prota (id_mapel, id_kelas, id_sk, sk_no, sk_sm1, sk_sm2, semester, tahun_ajaran, user_input, date)
						VALUES
						('".$_POST['txtMapelProta_input']."',
						'".$_POST['txtKelasProta_input']."',
						'".$_POST['txtIDSK'][$a]."',
						'".$_POST['txtSKNo'][$a]."',";
						
						if($b==0) {
							$q .= "'".$_POST['txtSKsm1'][$a]."',
							'0',
							'1',";
						} else {
							$q .= "'0',
							'".$_POST['txtSKsm2'][$a]."',
							'2',";
						}
						$q .= "
						'".$this->session->userdata('tahunAjr_active')."',
						'".$this->session->userdata('login_userid')."',
						now()
						)";
						$simpanProta = $this->db->query($q);
					}
				} else {
					$q = "INSERT INTO trx_prota (id_mapel, id_kelas, id_sk, sk_no, sk_sm1, sk_sm2, semester, tahun_ajaran, user_input, date)
					VALUES
					('".$_POST['txtMapelProta_input']."',
					'".$_POST['txtKelasProta_input']."',
					'".$_POST['txtIDSK'][$a]."',
					'".$_POST['txtSKNo'][$a]."',
					'".$_POST['txtSKsm1'][$a]."',
					'".$_POST['txtSKsm2'][$a]."',
					'".$_POST['txtChxSms_SK'][$a]."',
					'".$this->session->userdata('tahunAjr_active')."',
					'".$this->session->userdata('login_userid')."',
					now()
					)";
					$simpanProta = $this->db->query($q);
				}
				
			}
			
		}
		public function ambil_nama_user($id) {
			$qProta = $this->db->query("SELECT * FROM ms_user 
			WHERE id='".$id."'");
			return $qProta->row(0)->nama;
		}
		public function ambil_nama_kepsek($jenjang) {
			$kepsek = $this->db->query("SELECT * FROM ms_kepsek 
			WHERE jenjang='".$jenjang."'");
			return $kepsek->row(0)->nama_kepsek;
		}
		
		
		
		public function cari_prota_exist($idmapel, $idkelas) {
			$q = "SELECT id, id_mapel, id_sk, sk_no, SUM(sk_sm1) as sk_sm1, SUM(sk_sm2) as sk_sm2, semester, tahun_ajaran, user_input
FROM trx_prota WHERE id_mapel='".$idmapel."' AND id_kelas='".$idkelas."' AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
GROUP BY id_sk, sk_no";

			$cari_prota_sudah_input = $this->db->query($q);
			return $cari_prota_sudah_input;	
		}
		
		public function show_report_prota($mapel,$kls) {
			
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
		

	}

?>