<?php
function madSafety($string) {
	$string = stripslashes($string);
	$string = strip_tags($string);
	//$string = mysql_real_escape_string($string);
	return $string;
}
	
class Login extends CI_Controller 
{
	public function index()
	{
		$this->home("pertama");
	}
	
	public function home($masuk) {
		echo "<script>window.location.href='http://192.168.1.248/elearning'</script>";
		$data['title'] = 'PAHOA Elearning - Login';
		if($masuk=="gagal") {
			$data['ket_login'] = $masuk;
		}
		$this->load->view('login_view',$data);
	}
	
	public function cek_login() {
		if($this->input->post('txtUsername')!=NULL) {
			$data['title'] = 'PAHOA Elearning - Progress';
			
			$username = $this->input->post('txtUsername');
			$pass = $this->input->post('txtPassword');
			
			$query = $this->db->query("SELECT * FROM ms_user WHERE username='".madSafety($username)."' AND password='".md5($pass)."'");
			if($query->num_rows()==0) {
				$this->home("gagal");
			} else {
				//cari tahun Ajaran active
				$this->load->model('login_model');
				$thnAjrActive = $this->login_model->cari_tahunAjr_active();
				$brs = $thnAjrActive->row();
				$thn_ajr_active = $brs->tahun;
				$smstr_active = $brs->semester;
				
				foreach ($query->result() as $row)
				{
					$newdata = array(
						'login_userid'  =>  $row->id,
						'login_username'  =>  $row->username,
						'login_password'  =>  $pass,
						'login_nama'  =>  $row->nama,
						'login_jenjang'  =>  $row->jenjang,
						'login_id_jabatan'  =>  $row->id_jabatan,
						'login_status'  =>  $row->status,
						'tahunAjr_active' => $thn_ajr_active,
						'semester_active' => $smstr_active
					);
				}
				$this->session->set_userdata($newdata);
				redirect('mainmenu/home', 'refresh');
			}
		}
	}
	
	
}

?>