<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class kelas_model extends CI_Model {
		
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
		
		
		public function all_data() {
			$this->load->model('set_mapel_model');
			$id_tahun_ajr = $this->set_mapel_model->getIdTahunAjaran();
			
			$query = $this->db->query("SELECT a.*, b.tahun, b.semester 
			FROM ms_kelas a
			LEFT JOIN ms_tahun_ajaran b 
			ON a.id_tahun_ajaran=b.id
			WHERE a.jenjang='".$this->session->userdata('login_jenjang')."'
			AND a.id_tahun_ajaran='".$id_tahun_ajr."'
			ORDER BY a.jenjang ASC, a.kelas ASC
			");
			
			return $query->result();
		}
		
		public function all_data_smp() {
			$query = $this->db->query("SELECT a.*, b.tahun FROM ms_kelas a
			LEFT JOIN ms_tahun_ajaran b 
			ON a.id_tahun_ajaran=b.id 
			WHERE a.jenjang='SMP'");
			return $query->result();
		}
		
		public function all_data_sma() {
			$query = $this->db->query("SELECT a.*, b.tahun FROM ms_kelas a
			LEFT JOIN ms_tahun_ajaran b 
			ON a.id_tahun_ajaran=b.id 
			WHERE a.jenjang='SMA'");
			return $query->result();
		}
		
		public function count_data() {
			$query = $this->db->from("ms_kelas");
			return $query->count_all_results();
		}
		
		public function update_kelas($idThn) {
			$query = $this->db->query("UPDATE ms_kelas SET kelas='0'");
			$query = $this->db->query("UPDATE ms_kelas SET kelas='1' WHERE id='".$idThn."'");
			//return $query->result();
		}
		
		public function insert_data_kelas($newKelas) {
			$idThnAjrActive = 0;
			$cariIdThnAjr = $this->db->query("SELECT id FROM ms_tahun_ajaran 
			WHERE tahun='".$this->session->userdata('tahunAjr_active')."'
			AND semester='".$this->session->userdata('semester_active')."'");
			
			foreach ($cariIdThnAjr->result_array() as $row)
			{
				$idThnAjrActive = $row['id'];
			}
			
			$query = $this->db->query("INSERT ms_kelas (jenjang,kelas,id_tahun_ajaran,tahun_ajaran,date,edit_by)
			VALUES ('".$this->session->userdata('login_jenjang')."',
			'".$newKelas."',
			'".$idThnAjrActive."',
			'".$this->session->userdata('tahunAjr_active')."',
			now(),
			'".$this->session->userdata('login_username')."')");
			
			return $query;
		}
		
	}

?>