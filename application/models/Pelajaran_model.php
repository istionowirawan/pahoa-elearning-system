<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class pelajaran_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		function madSafety($string) {
			$string = stripslashes($string);
			$string = strip_tags($string);
			$string = mysql_real_escape_string($string);
			return $string;
		}
		
		public function all_data() {
			$query = $this->db->query("SELECT * 
			FROM ms_pelajaran 
			WHERE jenjang='".$this->session->userdata('login_jenjang')."'
			ORDER BY mapel ASC");
			return $query->result();
		}
		
		public function update_data_mapel($idmapel,$namaMapel) {
			$query = $this->db->query("UPDATE ms_pelajaran SET mapel='".madSafety($namaMapel)."' WHERE id='".$idmapel."'");
			return $query;
		}
		
		public function insert_data_mapel($namaMapel) {
			$query = $this->db->query("INSERT INTO ms_pelajaran (mapel,jenjang) VALUES ('".madSafety($namaMapel)."','".strtoupper($this->session->userdata('login_jenjang'))."')");
			return $query;
		}
		
		
	}

?>