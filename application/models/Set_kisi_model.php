<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_kisi_model extends CI_Model {
		
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
			WHERE a.id_user='".$this->session->userdata('login_userid')."'");

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
		
		public function show_skkd_detail($data) {
			$q = "SELECT a.id, a.id_mapel, a.id_kelas, a.sk_no, a.sk_detail,
			(b.id) as idkd, b.kd_no, b.kd_detail, b.ranah_kd
			FROM trx_skkd a 
			LEFT JOIN trx_skkd_kd b
			ON a.id=b.id_sk
			WHERE a.id_mapel='".$data['txtMapel']."'
			AND a.id_kelas='".$data['txtKls']."'
			ORDER BY a.id ASC, b.kd_no ASC";
			
			$query = $this->db->query($q);
			return $query;
		}
		public function load_indi_kisi($data) {
			$q = "SELECT * FROM trx_skkd_kd_indi WHERE id_skkd_kd='".$data['txtKdid']."'";
			$query = $this->db->query($q);
			return $query;
		}
		public function load_ranah_kisi($data) {
			$q = "SELECT * FROM ms_ranah";
			$query = $this->db->query($q);
			return $query;
		} 
		public function simpan_trx_kisi($data) {
			//return $data['txtKisi_urut'];
			
			$qCari = "SELECT id FROM trx_kisi 
			WHERE id_mapel='".$data['setKisi_mapel']."' 
			AND id_kelas='".$data['setKisi_kelas']."'
			AND semester='".$data['setKisi_semester']."'";
			$queryCari = $this->db->query($qCari);
			
			if($queryCari->num_rows()>0) {
				$qDel = "DELETE FROM trx_kisi 
				WHERE id_mapel='".$data['setKisi_mapel']."' 
				AND id_kelas='".$data['setKisi_kelas']."'
				AND semester='".$data['setKisi_semester']."'";
				$queryDel = $this->db->query($qDel);
			}
			
			for($a=0; $a < count($data['txtKisi_urut']); $a++) {
				
				$q = "INSERT INTO trx_kisi 
				(id_mapel, id_kelas, semester, urut, kd_id, indi_id, materi_rpp_id, indi_soal, ranah, bentuk_soal, soal, tingkat_sukar, no_soal, kunci, buku_sumber, userinput, date)
				VALUES 
				('".$data['setKisi_mapel']."',
				'".$data['setKisi_kelas']."',
				'".$data['setKisi_semester']."',
				'".$data['txtKisi_urut'][$a]."',
				'".$data['txtKisi_kd'][$a]."',
				'".$data['txtKisi_indi'][$a]."',
				'".$data['txtKisi_materi'][$a]."',
				'".$data['txtKisi_indisoal'][$a]."',
				'".$data['txtKisi_ranah'][$a]."',
				'".$data['txtKisi_bentuk'][$a]."',
				'".$data['txtKisi_soal'][$a]."',
				'".$data['txtKisi_sukar'][$a]."',
				'".$data['txtKisi_nomor'][$a]."',
				'".$data['txtKisi_jawab'][$a]."',
				'".$data['txtKisi_buku'][$a]."',
				'".$this->session->userdata('login_userid')."',
				now())";
				
				$query = $this->db->query($q);
				
				//echo $q;
				
			}
			
		}
		
		public function loadKisi($mapel,$kls,$sms) {
			$qLoad = "SELECT * FROM trx_kisi 
			WHERE id_mapel='".$mapel."' 
			AND id_kelas='".$kls."'
			AND semester='".$sms."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		public function load_materi_from_rpp($data) {
			//print_r($data);
			$qLoad = "SELECT a.*,(b.id) as idmateri, b.materi 
			FROM trx_rpp a
			LEFT JOIN trx_rpp_materi b
			ON a.id=b.rpp_id
			WHERE a.id_mapel='".$_POST['txtMapel']."'
			AND a.id_kelas='".$_POST['txtKls']."'";
			$queryLoad = $this->db->query($qLoad);
			return $queryLoad;
		}
		
		
	}
?>