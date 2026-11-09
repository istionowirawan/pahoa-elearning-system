<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_kkm_model extends CI_Model {
		
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
			WHERE a.id_trx='".$idTrx['txtMapel']."'");

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
		
		public function tampil_sk_kkm($data) {
			
			$q = "SELECT a.*,b.semester FROM trx_skkd a 
			LEFT JOIN trx_prota b
			ON a.id=b.id_sk
			WHERE a.id_mapel='".$data['kkmMapel']."' 
			AND a.id_kelas='".$data['kkmKelas']."'
			AND b.semester='".$data['kkmSms']."'
			ORDER BY sk_no ASC";
			$query = $this->db->query($q);
			
			//print_r($data);
			return $query;
		}
		
		public function load_sk_detail($sk) {
			
			$q = "SELECT * FROM trx_skkd WHERE id='".$sk."'";
			$query = $this->db->query($q);
			
			return $query;
		}
		public function show_skkd_detail($mapel,$kls,$sms) {
			/*$q = "SELECT a.id, a.id_sk, a.kd_no, a.kd_detail, (b.id) as indi_id, b.no_indi, b.desc_indi, c.jml_indi 
			FROM trx_skkd_kd a
			LEFT JOIN trx_skkd_kd_indi b
			ON a.id=b.id_skkd_kd
			LEFT JOIN
				(SELECT a.id, a.id_sk, a.kd_no, count(b.id) as jml_indi 
				FROM trx_skkd_kd a
				LEFT JOIN trx_skkd_kd_indi b
				ON a.id=b.id_skkd_kd
				WHERE a.id_sk='".$sk."'
				GROUP BY a.id
				ORDER BY a.kd_no ASC) as c
			ON a.id=c.id
			WHERE a.id_sk='".$sk."' ORDER BY a.kd_no ASC";*/
			
			$q = "SELECT DISTINCT a.*, (b.id) as kdid, b.kd_no, b.kd_detail, c.no_indi, c.desc_indi, d.jml_indi, e.jml_kd 
			FROM 
				(SELECT a.id, a.id_mapel, a.id_kelas, a.sk_no, a.sk_detail, b.semester 
				FROM trx_skkd a
				LEFT JOIN trx_prota b
				ON a.id=b.id_sk
				WHERE b.semester='".$sms."'
				AND a.id_kelas='".$kls."'
				AND a.id_mapel='".$mapel."'
				AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."') as a
			LEFT JOIN trx_skkd_kd b
			ON a.id=b.id_sk
			LEFT JOIN trx_skkd_kd_indi c
			ON b.id=c.id_skkd_kd
			LEFT JOIN
				(SELECT a.id, a.id_sk, a.kd_no, count(b.id) as jml_indi 
				FROM trx_skkd_kd a
				LEFT JOIN trx_skkd_kd_indi b
				ON a.id=b.id_skkd_kd
				WHERE a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
				GROUP BY a.id
				ORDER BY a.kd_no ASC) as d
			ON b.id=d.id
			LEFT JOIN 
				(SELECT a.id,  a.id_mapel, a.id_kelas, a.sk_no, a.sk_detail, b.kd_no, b.kd_detail, c.no_indi, count(sk_no) as jml_kd
				FROM trx_skkd a
				LEFT JOIN trx_skkd_kd b
				ON a.id=b.id_sk
				LEFT JOIN trx_skkd_kd_indi c
				ON b.id=c.id_skkd_kd
				WHERE a.id_mapel='".$mapel."'
				AND a.id_kelas='".$kls."'
				AND b.semester='".$sms."'
				AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
				GROUP BY a.sk_no
				ORDER BY a.sk_no ASC) as e
			ON a.id=e.id
			WHERE b.semester='".$sms."'
			GROUP BY c.id
			ORDER BY a.sk_no ASC, b.kd_no ASC";
			
			$query = $this->db->query($q);
			
			return $query;
		}
		
		
		public function simpanKKM($data) {
			$qCari = "SELECT id FROM trx_kkm 
			WHERE id_mapel='".$data['setKKM_mapel']."' 
			AND id_kelas='".$data['setKKM_kelas']."'
			AND semester='".$data['setKKM_semester']."'
			AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$qDel = "DELETE FROM trx_kkm 
				WHERE id_mapel='".$data['setKKM_mapel']."' 
				AND id_kelas='".$data['setKKM_kelas']."'
				AND semester='".$data['setKKM_semester']."'
				AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
				$queryDel = $this->db->query($qDel);
			}
			
			for ($a=0; $a<count($data['txtNoSK']); $a++) {
				$q = "INSERT INTO trx_kkm (id_mapel, id_kelas, semester, sk_no, kd_no, id_no, kp, dd, intake, tahun_ajaran, userinput, date)
				VALUES
				('".$data['setKKM_mapel']."',
				'".$data['setKKM_kelas']."',
				'".$data['setKKM_semester']."',
				'".$data['txtNoSK'][$a]."',
				'".$data['txtNoKD'][$a]."',
				'".$data['txtNoIN'][$a]."',
				'".$data['txtKP'][$a]."',
				'".$data['txtDD'][$a]."',
				'".$data['txtIN'][$a]."',
				'".$this->session->userdata('tahunAjr_active')."',
				'".$this->session->userdata('login_userid')."',
				now())";
				$query = $this->db->query($q);
			}
			
			return $query;
		}
		
		public function loadKKM($mapel,$kls,$sms) {
			$qLoad = "SELECT * FROM trx_kkm 
			WHERE id_mapel='".$mapel."' 
			AND id_kelas='".$kls."'
			AND semester='".$sms."'
			AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
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
		
		public function hitung_mp_semester($mapel,$kls) {
			$q="SELECT *, ((AVG(kp)+AVG(dd)+AVG(intake))/3) as jml_mp 
			FROM trx_kkm 
			WHERE id_mapel='".$mapel."' 
			AND id_kelas='".$kls."' 
			GROUP BY semester";
			
			$query = $this->db->query($q);
			return $query;
		}
		
	}
?>