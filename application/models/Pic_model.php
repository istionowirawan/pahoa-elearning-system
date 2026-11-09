<?php
	if (!defined('BASEPATH'))
		exit('No direct script access allowed');

	class pic_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		public function get_all_user_data($iduser) {
			$query = $this->db->query("SELECT a.*, b.jabatan 
			FROM ms_user a
			LEFT JOIN ms_jabatan b
			ON a.id_jabatan=b.id
			WHERE a.id='".$iduser."'");
			return $query;
		}
		
		public function simpan_feed($data) {
			
			$query = $this->db->query("INSERT INTO trx_feed (user_id, feed, date)
			VALUES 
			(
			'".$data['txtIdUser']."',
			'".addslashes($data['txtFeed'])."',
			now()
			)");
			//return $query;
		}
		
		public function get_feed() {
			$q = "SELECT a.*,b.pic, b.nama, (c.id) as id_reply, c.isi, c.user_post, (d.nama) as nama_reply, (d.pic) as pic_reply, (c.date_post) as date_reply, t1.jml_reply 
FROM trx_feed a 
LEFT JOIN ms_user b
ON a.user_id=b.id
LEFT JOIN trx_feed_reply c
ON a.id=c.id_feed
LEFT JOIN ms_user d
On c.user_post=d.id
LEFT JOIN 
(SELECT a.id_feed, count(a.id_feed) as jml_reply
FROM trx_feed_reply a
GROUP BY id_feed) as t1
ON c.id_feed=t1.id_feed
ORDER BY a.date DESC
LIMIT 30";
			$query = $this->db->query($q);
			return $query;
		}
		
		public function simpan_feed_reply($data) {
			$query = $this->db->query("INSERT INTO trx_feed_reply (id_feed, isi, user_post, date_post)
			VALUES 
			(
			'".$data['txtIDfeed']."',
			'".addslashes($data['txtReply'])."',
			'".$this->session->userdata('login_userid')."',
			now()
			)");
			return $query;
		}
		
		public function hapusfeed($data) {
			$query = $this->db->query("DELETE FROM trx_feed WHERE id='".$data['idhapus']."'");
			$hapusdetail = $this->db->query("DELETE FROM trx_feed_reply WHERE id_feed='".$data['idhapus']."'");
			return $query;
		}
		public function hapus_feed_reply($data) {
			$query = $this->db->query("DELETE FROM trx_feed_reply WHERE id='".$data['idhapus']."'");
			return $query;
		}
		
		public function load_ms_closing($jenjang) {
			$q = "SELECT * FROM ms_closing WHERE jenjang='".$jenjang."' ORDER BY id DESC LIMIT 1";
			$query = $this->db->query($q);
			if($query->num_rows()>0) {
				return $query->row(0)->status;
			}
		}
		
	}

?>