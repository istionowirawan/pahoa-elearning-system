<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class tahun_ajaran_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		public function all_data() {
			$query = $this->db->query("SELECT * FROM ms_tahun_ajaran");
			return $query->result();
		}
		
		public function count_data() {
			$query = $this->db->from("ms_tahun_ajaran");
			return $query->count_all_results();
		}
		
		public function update_tahun($idThn) {
			$query = $this->db->query("UPDATE ms_tahun_ajaran SET status='0'");
			$query = $this->db->query("UPDATE ms_tahun_ajaran SET status='1' WHERE id='".$idThn."'");
			//return $query->result();
			//$this->cari_tahunAjr_active();
		}
		
		public function load_ms_closing($jenjang) {
			$q = "SELECT * FROM ms_closing WHERE jenjang='".$jenjang."' ORDER BY id DESC LIMIT 1";
			$query = $this->db->query($q);
			return $query->row(0)->status;
		}
		
		public function load_log_closing($jenjang) {
			$q = "SELECT * FROM ms_closing WHERE jenjang='".$jenjang."' ORDER BY id DESC";
			$query = $this->db->query($q);
			return $query;
		}
		
		public function input_ms_closing($data) {
			$q = "INSERT INTO ms_closing (jenjang, status, date_execute, user_change)
			VALUES ('".$data['jenjang']."','".$data['statClosing']."',now(),'".$this->session->userdata('login_nama')."')";
			$query = $this->db->query($q);
			return $data;
		}
		
	}

?>