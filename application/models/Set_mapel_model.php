<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_mapel_model extends CI_Model {
		
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
		
		
		public function ambil_data_trx_setmapel() {
			/*SELECT a.id, a.id_user, b.username, b.nama, d.tahun, e.mapel, c.id_kelas, f.kelas 
FROM trx_guru_mapel a
LEFT JOIN ms_user b
ON a.id_user=b.id
LEFT JOIN ms_tahun_ajaran d
ON a.id_tahun_ajaran=d.id
LEFT JOIN ms_pelajaran e
ON a.id_pelajaran=e.id
RIGHT JOIN trx_guru_mapel_detail c
ON a.id=c.id_trx
LEFT JOIN ms_kelas f
ON c.id_kelas=f.id
ORDER BY b.nama ASC, f.kelas ASC*/

			$query = $this->db->query("
SELECT a.id, a.id_user, b.username, b.nama, d.tahun, e.mapel 
FROM trx_guru_mapel a
LEFT JOIN ms_user b
ON a.id_user=b.id
LEFT JOIN ms_tahun_ajaran d
ON a.id_tahun_ajaran=d.id
LEFT JOIN ms_pelajaran e
ON a.id_pelajaran=e.id
WHERE b.jenjang='".$this->session->userdata('login_jenjang')."'
AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
ORDER BY b.nama ASC
			");

			return $query->result();
		}
		public function ambil_data_user() {
			$query = $this->db->query("SELECT * FROM ms_user WHERE jenjang='".$this->session->userdata('login_jenjang')."'");
			return $query->result();
		}
		public function ambil_data_pelajaran() {
			$query = $this->db->query("SELECT * FROM ms_pelajaran 
			WHERE jenjang='".$this->session->userdata('login_jenjang')."' 
			ORDER BY mapel ASC");
			return $query->result();
		}
		public function ambil_data_kelas() {
			$this->load->model('set_mapel_model');
			$id_tahun_ajr = $this->set_mapel_model->getIdTahunAjaran();
			
			$query = $this->db->query("SELECT * FROM ms_kelas 
			WHERE jenjang='".$this->session->userdata('login_jenjang')."' 
			AND id_tahun_ajaran='".$id_tahun_ajr."'
			ORDER BY jenjang ASC, kelas ASC");
			return $query->result();
		}
		
		
		
		public function insert_data_setmapel($data) {
			//return count($data['kelas']);
			$hasil="";
			
			$caridata_exist = $this->db->query("SELECT * FROM trx_guru_mapel WHERE nik='".$data['usernik']."' AND id_pelajaran='".$data['pelajaran']."'");
			if($caridata_exist->num_rows() > 0) {
				$hasil = "duplicate";
			} else {
			
				$get_lastid_trxmapel = $this->db->query("SELECT id FROM trx_guru_mapel ORDER BY id DESC LIMIT 1");
				$lastid = $get_lastid_trxmapel->row(0)->id;
				$lastid+=1;
				
				//echo $data['usernama'];
				$this->load->model('set_mapel_model');
				$id_tahun_ajr = $this->set_mapel_model->getIdTahunAjaran();
				//echo "==>" . $id_tahun_ajr;
				
				$query = $this->db->query("INSERT INTO trx_guru_mapel (id, id_user, nik, nama, id_tahun_ajaran, tahun_ajaran, id_pelajaran, create_by, date)
				VALUES (
					'".$lastid."',
					'".$data['userid']."',
					'".$data['usernik']."',
					'".$data['usernama']."',
					'".$id_tahun_ajr."',
					'".$this->session->userdata('tahunAjr_active')."',
					'".$data['pelajaran']."',
					'".$this->session->userdata('login_username')."',
					now()
				)");
				
				for($a=0; $a<count($data['kelas']); $a++) {
					$simpandetail = $this->db->query("INSERT INTO trx_guru_mapel_detail (id_trx, id_kelas) 
					VALUES ('".$lastid."','".$data['kelas'][$a]."')");
				}
				
				$hasil = 'sukses';
			}
			
			return $hasil;
		}
		
		
		public function delete_data_setmapel($data) {
			$query = $this->db->query("DELETE FROM trx_guru_mapel WHERE id='".$data['recordid']."'");
			$delete_detail = $this->db->query("DELETE FROM trx_guru_mapel_detail WHERE id_trx='".$data['recordid']."'");
		}
		
		public function detail_data_setmapel($data) {
			$query = $this->db->query("
SELECT a.*, b.kelas 
FROM trx_guru_mapel_detail a
LEFT JOIN ms_kelas b
ON a.id_kelas=b.id 
WHERE a.id_trx='".$data."'");
			return $query;
		}
		
	}

?>