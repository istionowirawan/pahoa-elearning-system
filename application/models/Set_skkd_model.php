<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');
	
	function madSafety($string) {
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysql_real_escape_string($string);
		return $string;
	}
	
	class set_skkd_model extends CI_Model {
		
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
		public function ambil_mapel_guru($userid) {
			$query = $this->db->query("
			SELECT a.id, a.id_pelajaran, b.mapel 
			FROM trx_guru_mapel a
			LEFT JOIN ms_pelajaran b
			ON a.id_pelajaran=b.id
			WHERE a.id_user='".$userid."'
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
			$query = $this->db->query("SELECT * FROM ms_kelas WHERE id='".$idkelas."' AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'");
			return $query->row(0)->kelas;
		}
		public function insert_data_SK($data) {
			$query = $this->db->query("INSERT INTO trx_skkd (id_mapel, id_kelas, sk_no, sk_detail, tahun_ajaran, user_input, date)
			VALUES (
			'".$data['txtMapelSK']."',
			'".$data['txtKelasSK']."',
			'".$data['txtNomorSK']."',
			'".addslashes($data['txtDescSK'])."',
			'".$this->session->userdata('tahunAjr_active')."',
			'".$this->session->userdata('login_userid')."',
			now()
			)");
			//return $data;
		}
		public function update_data_SK($data) {
			$query = $this->db->query("UPDATE trx_skkd SET sk_detail='".addslashes($data['txtDescSK'])."' 
			WHERE id_mapel='".$data['txtMapelSK']."' 
			AND id_kelas='".$data['txtKelasSK']."'
			AND sk_no='".$data['txtNomorSK']."'");
		}
		public function cari_data_SK($data) {
			$q = "SELECT * FROM trx_skkd 
			WHERE id_mapel='".$data['txtMapelSK']."' 
			AND id_kelas='".$data['txtKelasSK']."' 
			AND sk_no='".$data['txtNomorSK']."'
			AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			$query = $this->db->query($q);
			
			if($query->num_rows()>0) {
				return $query;
			}
		}
		public function delete_sk_proses($data) {
			$idsk = $data['txtIDSK'];
			$qDelete = "INSERT INTO trx_sk_delete_log (sk_id, user_delete, date_delete) 
			VALUES ('".$data['txtIDSK']."','".$this->session->userdata('login_userid')."',now())";
			$query = $this->db->query($qDelete);
			
			$qhapusSK = "DELETE FROM trx_skkd WHERE id='".$data['txtIDSK']."'";
			$queryHapusSK = $this->db->query($qhapusSK);
			
		}
		
		public function cari_sk_isi($mapel_id, $kelas_id) {
			$query = $this->db->query("SELECT * FROM trx_skkd 
			WHERE id_mapel='".$mapel_id."' 
			AND id_kelas='".$kelas_id."'
			AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
			ORDER BY sk_no ASC");
			
			return $query;
		}
		public function sk_pilih_desc($sk_cari) {
			$query = $this->db->query("SELECT * FROM trx_skkd WHERE id='".$sk_cari."' AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'");
			return $query->row(0)->sk_detail;
		}
		
		public function sk_simpan_kd($data) {
			$carilast_id = $this->db->query("SELECT id FROM trx_skkd_kd ORDER BY id DESC LIMIT 1");
			if($carilast_id->num_rows()>0) {
				$carilast_id=$carilast_id->row(0)->id;
				$carilast_id+=1;
			} else {
				$carilast_id=1;
			}
			
			$query = $this->db->query("INSERT INTO trx_skkd_kd 
			(id, id_sk, kd_no, kd_detail, ranah_kd, materi_pokok, ruang_lingkup, semester, tahun_ajaran, user_input, date)
			VALUES
			('".$carilast_id."',
			'".$data['setkd_pilih_sk']."',
			'".$data['setkd_kd']."',
			'".$data['setkd_desc']."',
			'".$data['setkd_ranah_kd']."',
			'".$data['setkd_materi_pokok']."',
			'".$data['setkd_ruanglingkup']."',
			'".$data['setkd_semester']."',
			'".$this->session->userdata('tahunAjr_active')."',
			'".$this->session->userdata('login_userid')."',
			now())
			");
			
			
			for($a=0; $a < count($data['setkd_indi_desc']); $a++) {
				$simpandetail = $this->db->query("INSERT INTO trx_skkd_kd_indi
				(id_skkd_kd, no_indi, desc_indi, ranah_indi, tahun_ajaran, user_input, date)
				VALUES(
				'".$carilast_id."',
				'".$data['setkd_indi_id'][$a]."',
				'".$data['setkd_indi_desc'][$a]."',
				'".$data['setkd_ranahpk'][$a]."',
				'".$this->session->userdata('tahunAjr_active')."',
				'".$this->session->userdata('login_userid')."',
				now())");
			}
			
			for($a=0; $a < count($data['setkd_ruanglingkup_desc']); $a++) {
				$simpanlingkup = $this->db->query("INSERT INTO trx_skkd_kd_rlingkup
				(id_skkd_kd, no_rlingkup, desc_rlingkup, tahun_ajaran, userinput, date_input)
				VALUES(
				'".$carilast_id."',
				'".$data['setkd_ruanglingkup'][$a]."',
				'".$data['setkd_ruanglingkup_desc'][$a]."',
				'".$this->session->userdata('tahunAjr_active')."',
				'".$this->session->userdata('login_userid')."',
				now())");
			}
			
			return $data;
		}
		public function cari_kd_exist($data) {
			$query = $this->db->query("SELECT a.*, b.no_indi, b.desc_indi, b.ranah_indi 
			FROM trx_skkd_kd a
			LEFT JOIN trx_skkd_kd_indi b
			ON a.id=b.id_skkd_kd
			WHERE a.id_sk='".$data['setkd_pilih_sk']."'
			AND a.kd_no='".$data['setkd_kd']."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'");
			
			return $query;
		}
		public function cari_kd_rlingkup($data) {
			$query = $this->db->query("SELECT a.id_sk, a.kd_no, b.no_rlingkup, b.desc_rlingkup 
			FROM trx_skkd_kd a
			LEFT JOIN trx_skkd_kd_rlingkup b
			ON a.id=b.id_skkd_kd
			WHERE a.id_sk='".$data['setkd_pilih_sk']."'
			AND a.kd_no='".$data['setkd_kd']."'
			AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'");
			
			return $query;
		}
		public function sk_update_kd($data) {
			//setkd_pilih_id
			$query = $this->db->query("UPDATE trx_skkd_kd SET
			id_sk='".$data['setkd_pilih_sk']."', 
			kd_no='".$data['setkd_kd']."', 
			kd_detail='".$data['setkd_desc']."', 
			ranah_kd='".$data['setkd_ranah_kd']."', 
			materi_pokok='".$data['setkd_materi_pokok']."', 
			semester='".$data['setkd_semester']."',
			user_input='".$this->session->userdata('login_userid')."', 
			date=now()
			WHERE id='".$data['setkd_pilih_id']."'");
			
			$hapusdetail = $this->db->query("DELETE FROM trx_skkd_kd_indi WHERE id_skkd_kd='".$data['setkd_pilih_id']."'");
			
			for($a=0; $a < count($data['setkd_indi_desc']); $a++) {
				$simpandetail = $this->db->query("INSERT INTO trx_skkd_kd_indi
				(id_skkd_kd, no_indi, desc_indi, ranah_indi, tahun_ajaran, user_input, date)
				VALUES(
				'".$data['setkd_pilih_id']."',
				'".$data['setkd_indi_id'][$a]."',
				'".$data['setkd_indi_desc'][$a]."',
				'".$data['setkd_ranahpk'][$a]."',
				'".$this->session->userdata('tahunAjr_active')."',
				'".$this->session->userdata('login_userid')."',
				now())");
			}
			
			$hapusRlingkup = $this->db->query("DELETE FROM trx_skkd_kd_rlingkup WHERE id_skkd_kd='".$data['setkd_pilih_id']."'");
			for($a=0; $a < count($data['setkd_ruanglingkup_desc']); $a++) {
				$simpanlingkup = $this->db->query("INSERT INTO trx_skkd_kd_rlingkup
				(id_skkd_kd, no_rlingkup, desc_rlingkup, tahun_ajaran, userinput, date_input)
				VALUES(
				'".$data['setkd_pilih_id']."',
				'".$data['setkd_ruanglingkup'][$a]."',
				'".$data['setkd_ruanglingkup_desc'][$a]."',
				'".$this->session->userdata('tahunAjr_active')."',
				'".$this->session->userdata('login_userid')."',
				now())");
			}
			
		}
		
		public function show_report_skkd($mapel,$kls) {
			/*$q = "SELECT a.id, a.id_mapel, a.id_kelas, a.sk_no, a.sk_detail, (b.id) as kdid, b.kd_no, b.kd_detail, b.ranah_kd, b.materi_pokok, b.ruang_lingkup, b.alokasi_waktu, (c.id) as indiid, c.no_indi, c.desc_indi, c.ranah_indi 
			FROM trx_skkd a
			LEFT JOIN trx_skkd_kd b
			ON a.id=b.id_sk
			LEFT JOIN trx_skkd_kd_indi c
			ON b.id=c.id_skkd_kd
			WHERE a.id_mapel='".$mapel."'
			AND a.id_kelas='".$kls."'";*/
			
			$q = "SELECT a.*, (b.id) as kdid, b.kd_no, b.kd_detail, b.ranah_kd, b.materi_pokok, b.ruang_lingkup, (c.id) as indiid, c.no_indi, c.desc_indi, c.ranah_indi, d.jml_indi, e.jml_kd
			FROM 
				(SELECT a.id, a.id_mapel, a.id_kelas, a.sk_no, a.sk_detail, b.semester 
				FROM trx_skkd a
				LEFT JOIN trx_prota b
				ON a.id=b.id_sk
				WHERE a.id_kelas='".$kls."'
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
				AND a.tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'
				GROUP BY a.sk_no
				ORDER BY a.sk_no ASC) as e
			ON a.id=e.id
			GROUP BY c.id
			ORDER BY a.sk_no ASC, b.kd_no ASC";
			
			$query = $this->db->query($q);
			return $query;
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
		
		public function ambil_nama_kelas($kls) {
			$q = "SELECT * FROM ms_kelas WHERE id='".$kls."' AND tahun_ajaran='".$this->session->userdata('tahunAjr_active')."'";
			$query = $this->db->query($q);
			return $query;
		}
		public function ambil_nama_mapel($mapel) {
			$q = "SELECT * FROM ms_pelajaran WHERE id='".$mapel."'";
			$query = $this->db->query($q);
			return $query;
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
		
		public function ambil_tbl_ranah() {
			$q = "SELECT * FROM ms_ranah ORDER BY ranah_jenis ASC";
			$query = $this->db->query($q);
			return $query;
		}
	}

?>