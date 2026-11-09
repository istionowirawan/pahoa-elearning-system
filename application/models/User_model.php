<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
		
	class user_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		public function all_data($brs,$barisPerPage) {
			$query = $this->db->query("SELECT a.*, b.level, b.jabatan 
			FROM ms_user a
			LEFT JOIN ms_jabatan b
			ON a.id_jabatan=b.id
			WHERE a.id > 1
			AND a.jenjang='".$this->session->userdata('login_jenjang')."'
			ORDER BY a.nama ASC");
			return $query;
		}
		public function jml_data() {
			$query = $this->db->query("SELECT a.id 
			FROM ms_user a
			LEFT JOIN ms_jabatan b
			ON a.id_jabatan=b.id
			WHERE a.id > 1
			AND a.jenjang='".$this->session->userdata('login_jenjang')."'
			ORDER BY a.nama ASC");
			return $query->num_rows();
		}
		
		public function update_status_user($userid,$userstatus) {
			$changestat = 0;
			if($userstatus==1) {
				$changestat=0;
			} else {
				$changestat=1;
			}
			$query = $this->db->query("UPDATE ms_user SET status='".$changestat."' WHERE id='".$userid."'");
			
		}
		
		public function get_jabatan() {
			$query = $this->db->query("SELECT * FROM ms_jabatan");
			return $query;
		}
		
		public function insert_data_user($newUsername,$newPass,$newNama,$newJabatan) 
		{
			$que = "INSERT INTO ms_user 
			(username,password,nama,jenjang,id_jabatan,status,create_by,date)
			VALUES 
			('".madSafety($newUsername)."',
			'".md5($newPass)."',
			'".madSafety($newNama)."',
			'".strtoupper($this->session->userdata('login_jenjang'))."',
			'".$newJabatan."',
			'1',
			'".$this->session->userdata('login_username')."',
			now())";
			$query = $this->db->query($que);
			
			return $query;
		}
		
		
	}

?>