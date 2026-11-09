<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_rekap_model extends CI_Model {
		
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
		
		public function show_mapel_jenjang($jenjang) {
			$query = $this->db->query("SELECT * FROM ms_pelajaran 
			WHERE jenjang='".$jenjang."' 
			AND (tipe='Akademik' or tipe='')
			ORDER BY id ASC");
			return $query;
		}
		
		public function show_kelas_jenjang($jenjang) {
			$query = $this->db->query("SELECT * FROM ms_kelas 
			WHERE jenjang='".$jenjang."' 
			AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."' 
			ORDER BY id ASC");
			return $query;
		}
		
		public function rekap_kkm_jenjang($jenjang) {
			$query = $this->db->query("SELECT *, avg((kp+dd+intake)/3) as kkm_rata 
			FROM trx_kkm 
			WHERE tahun_ajaran='".$this->session->userdata('tahunAjr_active')."' 
			GROUP BY id_kelas, id_mapel");
			return $query;
			
		}
		
	}

?>