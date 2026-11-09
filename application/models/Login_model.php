<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class login_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		public function cari_tahunAjr_active() {
			$query = $this->db->query("SELECT * FROM ms_tahun_ajaran WHERE status='1'");
			//$row = $query->row(); 
			return $query;
		}
		
		
	}

?>