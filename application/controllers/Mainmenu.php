<?php

class Mainmenu extends CI_Controller 
{
	public function index()
	{
		$this->home();
	}
	
	public function home() {
		if($this->session->userdata('tahunAjr_active')){
			$this->load->model('pic_model');
			$data['data_profile'] = $this->pic_model->get_all_user_data($this->session->userdata('login_userid'));
			$data['stat_closing_jenjang'] = $this->pic_model->load_ms_closing($this->session->userdata('login_jenjang'));
			$this->load->view('mainmenu_view',$data);
			//$this->load->view('content_view');
		} else {
			$this->back_to_login();
		}
	}
	
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}
	public function back_to_login() {
		redirect('login', 'refresh');
	}
	
	public function change_pass() {
		$this->load->view('changepass_view');
	}
	
	public function update_pass() {
		$username = $this->input->post('txtUsername');
		$newpass = $this->input->post('txtNewpass');
		
		//echo $q = "UPDATE ms_user SET password='".md5($newpass)."' WHERE username='".$username."'";
		$query = $this->db->query("UPDATE ms_user SET password='".md5($newpass)."' WHERE username='".$username."'");
		if($query==1) {
			echo "Your password has been updated";
			$newdata = array('login_password'  =>  $newpass);
			$this->session->set_userdata($newdata);
			
		}
	}
	
	//PROFILE CHANGE PIC
	public function profile_change_pic() {
		$this->load->model('pic_model');
		$data['data_profile'] = $this->pic_model->get_all_user_data($this->session->userdata('login_userid'));
		$this->load->view('profile_pic',$data);
	}
	public function profile_change_pic_do() {
		//print_r($_FILES);
		
		$data['txtId'] = $_POST['txtId'];
		$data['txtImg'] = $_FILES["txtImg"];
		$this->load->view('profile_pic_do',$data);
	}
	
	
	//PROFILE FEED
	public function profile_feed() {
		$this->load->model('pic_model');
		$data['data_profile'] = $this->pic_model->get_all_user_data($this->session->userdata('login_userid'));
		$data['feed_data'] = $this->pic_model->get_feed();
		$this->load->view('trx_feed',$data);
	}
	public function insert_feed() {
		$this->load->model('pic_model');
		$simpanfeed = $this->pic_model->simpan_feed($_POST);
		//print_r($simpanfeed);
	}
	public function insert_feed_reply() {
		$this->load->model('pic_model');
		$simpan_feedReply = $this->pic_model->simpan_feed_reply($_POST);
		//print_r($simpan_feedReply);
	}
	public function hapus_feed() {
		$this->load->model('pic_model');
		$hapus_feed = $this->pic_model->hapusfeed($_POST);
	}
	public function hapus_feed_reply() {
		$this->load->model('pic_model');
		$hapus_feedReply = $this->pic_model->hapus_feed_reply($_POST);
	}
	
	
	//MASTER CLOSING
	public function ms_closing() {
		//numpang model tahun ajaran
		$this->load->model('tahun_ajaran_model');
		$data['stat_closing'] = $this->tahun_ajaran_model->load_ms_closing($this->session->userdata('login_jenjang'));
		$data['log_closing'] = $this->tahun_ajaran_model->load_log_closing($this->session->userdata('login_jenjang'));
		$this->load->view('ms_closing_view',$data);
		
	}
	public function change_close_stat() {
		$this->load->model('tahun_ajaran_model');
		$data['close_stat'] = $this->tahun_ajaran_model->input_ms_closing($_POST);
		//print_r($data['close_stat']); 
	}
	
	
	
	//MASTER TAHUN AJARAN
	public function ms_tahunajaran() {
		//$data['dataSiswa'] = $this->load_data_siswa->getAllData();
		$this->load->model('tahun_ajaran_model');
		$data['data_thnAjaran'] = $this->tahun_ajaran_model->all_data();
		$this->load->view('ms_tahunajaran_view',$data);
		
	}
	
	public function update_thn_ajr() {
		//$this->input->post('ThnAjrID');
		
		$this->load->model('tahun_ajaran_model');
		$data['data_thnAjaran'] = $this->tahun_ajaran_model->update_tahun($this->input->post('ThnAjrID'));
		
		//search ulang tahun ajaran yang telah diganti agar session berubah
		$this->load->model('login_model');
		$thnAjrActive = $this->login_model->cari_tahunAjr_active();
		$brs = $thnAjrActive->row();
		$thn_ajr_active = $brs->tahun;
		$smstr_active = $brs->semester;
		
		$newdata = array(
			'tahunAjr_active' => $thn_ajr_active,
			'semester_active' => $smstr_active
		);
		$this->session->set_userdata($newdata);
		
		$this->load->view('ms_tahunajaran_view',$data);
		
	}
	
	public function refresh_session_leftmenu() {
		$this->load->view('session_leftmenu_view');
	}
	
	
	
	//MASTER KELAS
	public function ms_kelas() {
		$this->load->model('kelas_model');
		$data['data_kelas'] = $this->kelas_model->all_data();
		$this->load->view('ms_kelas_view',$data);
	}
	public function insert_kelas() {
		$newKelas = $this->input->post('inputKelas');
		$this->load->model('kelas_model');
		$data['data_new_kelas'] = $this->kelas_model->insert_data_kelas($newKelas);
	}
	
	
	
	
	//MASTER PELAJARAN
	public function ms_pelajaran() {
		$this->load->model('pelajaran_model');
		$data['data_pelajaran'] = $this->pelajaran_model->all_data();
		$this->load->view('ms_pelajaran_view',$data);
	}
	public function update_mapel() {
		$idmapel = $this->input->post('idMapel');
		$namaMapel = $this->input->post('namaMapel');
		//echo $idmapel . " => " . $namaMapel;
		
		$this->load->model('pelajaran_model');
		$data['data_edit_mapel'] = $this->pelajaran_model->update_data_mapel($idmapel,$namaMapel);
		//echo "...".$data['data_edit_mapel'];
		//$this->load->view('ms_pelajaran_view',$data);
	}
	public function insert_mapel() {
		$newmapel = $this->input->post('namaMapel');
		$this->load->model('pelajaran_model');
		$data['data_new_mapel'] = $this->pelajaran_model->insert_data_mapel($newmapel);
		//echo "... " . $data['data_new_mapel'];
	}
		
	
	
	
	//MASTER USER
	public function ms_user() {
		$this->load->model('user_model');
				
		$data['jabatan_user'] = $this->user_model->get_jabatan();
		//$data['jml_baris_user'] = $getJabatan->row();
		$data['jml_user'] = $this->user_model->jml_data();
		
		$barisPerPage = 10;
		$totHal = floor($data['jml_user']/$barisPerPage);
		$data['totHal'] = $totHal;
		//$brs = $this->uri->segment(3) * $barisPerPage;
		$brs = $this->uri->segment(3);
		//echo "baris ::::::: " . $brs;
		$data['data_user'] = $this->user_model->all_data($brs,$barisPerPage);
		$this->load->view('ms_user_view',$data);
		
	}
	public function update_status_user() {
		$userid = $this->input->post('userid');
		$userstatus = $this->input->post('userstatus');
		
		$this->load->model('user_model');
		$data['data_user'] = $this->user_model->update_status_user($userid,$userstatus);
	}
	public function insert_user() {
		$newUsername = $this->input->post('inputUsername');
		$newPass = $this->input->post('inputPassword');
		$newNama = $this->input->post('inputNama');
		$newJabatan = $this->input->post('inputJabatan');
		
		$this->load->model('user_model');
		$data['data_new_user'] = $this->user_model->insert_data_user($newUsername,$newPass,$newNama,$newJabatan);
		//echo "... " . $data['data_new_user'];
		
	}
	
	
	
	
	//Trx Setting Guru Mapel
	public function trx_setting_gurumapel() {
		$this->load->model('set_mapel_model');
		
		$data['data_trx_setmapel'] = $this->set_mapel_model->ambil_data_trx_setmapel();
		$data['data_user'] = $this->set_mapel_model->ambil_data_user();
		$data['data_pelajaran'] = $this->set_mapel_model->ambil_data_pelajaran();
		$data['data_kelas'] = $this->set_mapel_model->ambil_data_kelas();
		$this->load->view('trx_setting_gurumapel_view',$data);
	}
	public function data_json() {
		$this->load->view('first.json');
	}
	public function insert_set_guru_mapel() {
		
		$data = array(
			'userid'=>$this->input->post('setMapel_userid'),
			'usernik'=>$this->input->post('setMapel_usernik'),
			'usernama'=>$this->input->post('setMapel_usernama'),
			'kelas'=>$this->input->post('setMapel_kelas'),
			'pelajaran'=>$this->input->post('setMapel_pelajaran'),
		);
		
		$this->load->model('set_mapel_model');
		//$data['data_setmapel'] = $this->set_mapel_model->insert_data_setmapel($data);
		$rsl = $this->set_mapel_model->insert_data_setmapel($data);
		echo $rsl;
	}
	
	public function delete_set_guru_mapel() {
		$data = array(
			'recordid'=>$this->input->post('idrecord'),
		);
		
		$this->load->model('set_mapel_model');
		$data['data_deletemapel'] = $this->set_mapel_model->delete_data_setmapel($data);
	}
	public function detail_set_gurumapel() {
		$idrecord = $this->uri->segment(3);
		$this->load->model('set_mapel_model');
		$objdata_kelasdetail = $this->set_mapel_model->detail_data_setmapel($idrecord);
		
		echo "<table class='table table-bordered' >";
		echo "<tr style='background-color:#8C3635;color:white;'>";
			echo "<td align='center' colspan='100'>Kelas Diampuh</td>";
		echo "</tr>";
		
		echo "<tr style='background-color:#ffffff;color:#000000;'>";
		foreach($objdata_kelasdetail->result() as $object) {
			echo "<td align='center'>" . $object->kelas . "</td>";
		}
		echo "</tr>";
		echo "</table>";
		//print_r($this->set_mapel_model->detail_data_setmapel($data));
	}
	
	
	
	
	
	
	//Trx Analisis Pemetaan SKKD
	public function trx_peta_skkd() {
		$this->load->model('set_skkd_model');
		
		$data['data_useractive'] = $this->set_skkd_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_skkd_model->ambil_mapel_guru($this->session->userdata('login_userid'));
		//$data['data_kelas'] = $this->set_skkd_model->ambil_data_kelas();
		$this->load->view('trx_setting_skkd_view',$data);
	}
	public function cari_kelas_based_mapel() {
		$this->load->model('set_skkd_model');
		$idTrx=$this->uri->segment(3);
		
		$hasil_cari_kelas = $this->set_skkd_model->cari_kelas_basedmapel($idTrx);
		//print_r($hasil_cari_kelas->result());
		
		echo "<select id='setSKKD_kelas' name='setSKKD_kelas' class='form-control' required >";
		echo "<option value=''>== Pilih Kelas ==</option>";
		foreach($hasil_cari_kelas->result() as $object) {
			echo "<option value='".$object->id_kelas."'>" . $object->kelas . "</option>";
		}
		echo "</select>";
	}
	public function lihat_detail_trx_skkd() {
		$this->load->model('set_skkd_model');
		
		$data['data_mapel'] = ($this->uri->segment(3));
		$data['data_kelas'] = ($this->uri->segment(4));
		$data['data_mapel_pilih'] = $this->set_skkd_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_skkd_model->ambil_kelas_pilih($this->uri->segment(4));
		$this->load->view('trx_setting_skkd_input',$data);
	}
	public function insert_sk() {
		//print_r($this->input->post('txtMapelSK'));
		
		$data = array(
			'txtMapelSK'=>$this->input->post('txtMapelSK'),
			'txtKelasSK'=>$this->input->post('txtKelasSK'),
			'txtNomorSK'=>$this->input->post('txtNomorSK'),
			'txtDescSK'=>$this->input->post('txtDescSK')
		);
		
		$this->load->model('set_skkd_model');
		//$data['data_setmapel'] = $this->set_skkd_model->insert_data_setmapel($data);
		$this->set_skkd_model->insert_data_SK($data);
	}
	public function update_sk() {
		$data = array(
			'txtMapelSK'=>$this->input->post('txtMapelSK'),
			'txtKelasSK'=>$this->input->post('txtKelasSK'),
			'txtNomorSK'=>$this->input->post('txtNomorSK'),
			'txtDescSK'=>$this->input->post('txtDescSK')
		);
		
		$this->load->model('set_skkd_model');
		$this->set_skkd_model->update_data_SK($data);
	}
	
	public function cari_sk_sudah_input() {
		$data = array(
			'txtMapelSK'=>$this->input->post('txtMapelSK'),
			'txtKelasSK'=>$this->input->post('txtKelasSK'),
			'txtNomorSK'=>$this->input->post('txtNomorSK')
		);
		
		$this->load->model('set_skkd_model');
		//echo $this->set_skkd_model->cari_data_SK($data);
		$hasil_cari = $this->set_skkd_model->cari_data_SK($data);
		if($hasil_cari!=NULL) {
			echo json_encode($hasil_cari->result());
		}
	}
	public function hapus_sk() {
		$this->load->model('set_skkd_model');
		$this->set_skkd_model->delete_sk_proses($_POST);
		//print_r($_POST);
	}
	
	//INPUT KD ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	public function lihat_detail_trx_kd() {
		$this->load->model('set_skkd_model');
		
		$data['data_mapel'] = ($this->uri->segment(3));
		$data['data_kelas'] = ($this->uri->segment(4));
		$data['data_mapel_pilih'] = $this->set_skkd_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_skkd_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_sk_isi'] = $this->set_skkd_model->cari_sk_isi($this->uri->segment(3),$this->uri->segment(4));
		$data['data_ranah'] = $this->set_skkd_model->ambil_tbl_ranah();
		
		$this->load->view('trx_setting_kd_input',$data);
	}
	public function cari_sk_desc() {
		$this->load->model('set_skkd_model');
		$sk_pilih_desc = $this->set_skkd_model->sk_pilih_desc($this->uri->segment(3));
		print($sk_pilih_desc);
	}
	public function insert_kd() {
		//print_r($_POST);
		$this->load->model('set_skkd_model');
		$simpan_kd = $this->set_skkd_model->sk_simpan_kd($_POST);
		echo "Sukses Simpan";
		//print_r($simpan_kd);
	}
	public function cari_kd_detail() {
		//print_r($this->input->post('setkd_pilih_sk') . " => " . $this->input->post('setkd_kd'));
		$this->load->model('set_skkd_model');
		$hasil_cari = $this->set_skkd_model->cari_kd_exist($_POST);
		
		//header('Content-Type: application/json');
		echo json_encode($hasil_cari->result());
	}
	public function cari_kd_rlingkup() {
		$this->load->model('set_skkd_model');
		$hasil_cari = $this->set_skkd_model->cari_kd_rlingkup($_POST);
		echo json_encode($hasil_cari->result());
	}
	
	public function update_kd() {
		//print_r($_POST);
		$this->load->model('set_skkd_model');
		$update_kd = $this->set_skkd_model->sk_update_kd($_POST);
		//print_r($update_kd);
	}
	public function hapus_kd() {
		//print_r($_POST);
		$this->load->model('set_skkd_model');
		$hapus_kd = $this->set_skkd_model->sk_hapus_kd($_POST);
	}
	//END Trx Analisis Pemetaan SKKD ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	
	
	
	//Program Tahunan (PROTA) ======================================================
	public function show_prota_page() {
		$this->load->model('set_skkd_model');
		
		$data['data_useractive'] = $this->set_skkd_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_skkd_model->ambil_mapel_guru($this->session->userdata('login_userid'));
		//$data['data_kelas'] = $this->set_skkd_model->ambil_data_kelas();
		$this->load->view('trx_setting_prota_view',$data);
	}
	public function cari_kelas_based_mapel_prota() {
		$this->load->model('set_skkd_model');
		$idTrx=$this->uri->segment(3);
		
		$hasil_cari_kelas = $this->set_skkd_model->cari_kelas_basedmapel($idTrx);
		//print_r($hasil_cari_kelas->result());
		
		echo "<select id='setProta_kelas' name='setProta_kelas' class='form-control' required >";
		echo "<option value=''>== Pilih Kelas ==</option>";
		foreach($hasil_cari_kelas->result() as $object) {
			echo "<option value='".$object->id_kelas."'>" . $object->kelas . "</option>";
		}
		echo "</select>";
	}
	public function show_prota_detail() {
		$this->load->model('set_prota_model');
		
		$data['data_mapel'] = ($this->uri->segment(3));
		$data['data_kelas'] = ($this->uri->segment(4));
		$data['data_mapel_pilih'] = $this->set_prota_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_prota_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_skkd'] = $this->set_prota_model->tampil_data_prota($this->uri->segment(3),$this->uri->segment(4));
		$data['data_prota'] = $this->set_prota_model->cari_prota_exist($this->uri->segment(3),$this->uri->segment(4));
		$this->load->view('trx_setting_prota_input',$data);
	}
	public function insert_prota() {
		$this->load->model('set_prota_model');
		$simpan_prota = $this->set_prota_model->simpan_prota($_POST);
		//print_r($simpan_prota);
	}
	public function update_prota() {
		$this->load->model('set_prota_model');
		$update_prota = $this->set_prota_model->update_prota($_POST);
		//print_r($_POST);
	}
	//END Program Tahunan (PROTA) ======================================================
	
	
	
	
	
	//Program Semester (PROSEM) ##########################################################
	public function show_prosem_page() {
		$this->load->model('set_skkd_model');
		
		$data['data_useractive'] = $this->set_skkd_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_skkd_model->ambil_mapel_guru($this->session->userdata('login_userid'));
		$this->load->view('trx_setting_prosem_view',$data);
	}
	public function cari_kelas_based_mapel_prosem() {
		$this->load->model('set_skkd_model');
		$idTrx=$this->uri->segment(3);
		
		$hasil_cari_kelas = $this->set_skkd_model->cari_kelas_basedmapel($idTrx);
		//print_r($hasil_cari_kelas->result());
		
		echo "<select id='setProsem_kelas' name='setProsem_kelas' class='form-control' required >";
		echo "<option value=''>== Pilih Kelas ==</option>";
		foreach($hasil_cari_kelas->result() as $object) {
			echo "<option value='".$object->id_kelas."'>" . $object->kelas . "</option>";
		}
		echo "</select>";
	}
	public function show_prosem_detail() {
		$this->load->model('set_prosem_model');
		$data['data_mapel'] = ($this->uri->segment(3));
		$data['data_kelas'] = ($this->uri->segment(4));
		$data['data_mapel_pilih'] = $this->set_prosem_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_prosem_model->ambil_kelas_pilih($this->uri->segment(4));
		
		$this->load->view('trx_setting_prosem_input',$data);
	}
	public function show_prosem_detail_sms() {
		$mapel=$this->uri->segment(3);
		$kls=$this->uri->segment(4);
		$semester=$this->uri->segment(5);
		
		$this->load->model('set_prosem_model');
		$data['data_prosem'] = $this->set_prosem_model->tampil_data_prosem($mapel,$kls,$semester);
		$data['data_bulan'] = $this->set_prosem_model->ambil_data_bulan($semester);
		$data['data_prota'] = $this->set_prosem_model->ambil_data_prota($mapel,$kls,$semester);
		
		$this->load->view('trx_setting_prosem_input_detail',$data);
	}
	public function insert_prosem() {
		//print_r($_POST);
		$this->load->model('set_prosem_model');
		$simpan_prosem = $this->set_prosem_model->simpan_prosem($_POST);
		//print_r($simpan_prosem);
	}
	public function update_prosem() {
		//print_r($_POST);
		$this->load->model('set_prosem_model');
		$update_prosem = $this->set_prosem_model->update_prosem($_POST);
		print_r($update_prosem);
	}
	public function tampil_isi_prosem() {
		//print_r($_POST);
		$this->load->model('set_prosem_model');
		$tampildata = $this->set_prosem_model->tampil_prosem_isi($_POST);
		echo json_encode($tampildata->result());
	}
	
	public function tampil_uji_prosem() {
		$this->load->model('set_prosem_model');
		$tampildataUji = $this->set_prosem_model->tampil_prosem_uji($_POST);
		//print_r($_POST);
		echo json_encode($tampildataUji->result());
	}
	
	//END Program Semester (PROSEM)  ##########################################################
	
	
	
	//Silabus +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	public function show_silabus_page() {
		$this->load->model('set_skkd_model');
		
		$data['data_useractive'] = $this->set_skkd_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_skkd_model->ambil_mapel_guru($this->session->userdata('login_userid'));
		$this->load->view('trx_setting_silabus',$data);
	}
	public function show_silabus_detail() {
		$idmapel = $this->uri->segment(3);
		$idkelas = $this->uri->segment(4);
		$idsk = $this->uri->segment(5);
		$idkd = $this->uri->segment(6);
		$nokd = $this->uri->segment(7);
		
		$this->load->model('set_silabus_model');
		$data['data_mapel'] = ($this->uri->segment(3));
		$data['data_kelas'] = ($this->uri->segment(4));
		$data['data_mapel_pilih'] = $this->set_silabus_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_silabus_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_lifeskill'] = ($this->set_silabus_model->ambil_tbl_lifeskill());
		$data['data_confucius'] = ($this->set_silabus_model->ambil_tbl_confucius());
		$data['data_pend_kar'] = $this->set_silabus_model->ambil_tbl_pendkar();
		
		$this->load->view('trx_setting_silabus_input',$data);
	}
	public function cari_silabus_sk() {
		$this->load->model('set_silabus_model');
		$tampilSKsilabus = $this->set_silabus_model->tampil_sk_silabus($_POST);
		echo json_encode($tampilSKsilabus->result());
	}
	public function cari_silabus_kd() {
		$this->load->model('set_silabus_model');
		$tampilKDsilabus = $this->set_silabus_model->tampil_kd_silabus($_POST);
		echo json_encode($tampilKDsilabus->result());
	}
	public function cari_silabus_skkd() {
		$this->load->model('set_silabus_model');
		$tampilSKKDsilabus = $this->set_silabus_model->tampil_skkd_silabus($_POST);
		//print_r($tampilSKKDsilabus);
		echo json_encode($tampilSKKDsilabus->result());
	}
	public function cari_silabus_skkd_uji() {
		$this->load->model('set_silabus_model');
		$tampilSKKDsilabus_uji = $this->set_silabus_model->tampil_skkd_silabus_uji($_POST);
		echo json_encode($tampilSKKDsilabus_uji->result());
	}
	
	public function hit_alokasi_waktu_kd() {
		$this->load->model('set_silabus_model');
		$alokasiWaktuSK = $this->set_silabus_model->hitung_alokasi_waktu($_POST);
		echo json_encode($alokasiWaktuSK);
	}
	public function insert_silabus() {
		$this->load->model('set_silabus_model');
		$insertSilabus = $this->set_silabus_model->insertSilabus($_POST);
		//print_r($_POST);
	}
	public function cari_silabus_isi() {
		$this->load->model('set_silabus_model');
		$tampilisisilabus = $this->set_silabus_model->tampil_isi_silabus($_POST);
		//print_r($tampilisisilabus);
		echo json_encode($tampilisisilabus->result());
	}
	public function update_silabus() {
		$this->load->model('set_silabus_model');
		$updateSilabus = $this->set_silabus_model->updateSilabus($_POST);
		//print_r($_POST);
		//echo json_encode($tampilisisilabus->result());
	}
	
	//END Silabus +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	
	
	
	//Program RPP ---------------------------------------------------------------
	public function show_rpp_page() {
		$this->load->model('set_rpp_model');
		
		$data['data_useractive'] = $this->set_rpp_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_rpp_model->ambil_mapel_guru();
		$this->load->view('trx_setting_rpp',$data);
	}
	
	public function cari_kelas_based_mapel_rpp() {
		$this->load->model('set_rpp_model');
		
		$hasil_cari_kelas = $this->set_rpp_model->cari_kelas_basedmapel($_POST);
		echo json_encode($hasil_cari_kelas->result());
	}
	public function cari_rpp_sk() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$tampilSKrpp = $this->set_rpp_model->tampil_sk_rpp($_POST);
		echo json_encode($tampilSKrpp->result());
		//print_r($tampilSKrpp);
	}
	public function cari_rpp_kd() {
		$this->load->model('set_rpp_model');
		$tampilKDrpp = $this->set_rpp_model->tampil_kd_rpp($_POST);
		echo json_encode($tampilKDrpp->result());
	}
	
	public function show_rpp_page_input() {
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		$sk = $this->uri->segment(6);
		$skno = $this->uri->segment(7);
		$kdid = $this->uri->segment(8);
		
		$this->load->model('set_rpp_model');
		$rppCount = $this->set_rpp_model->cari_trx_rpp($mapel,$kls,$sms,$sk);
		$data['tampilSKjam'] = $this->set_rpp_model->jumlah_jam_sk($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKjamUji'] = $this->set_rpp_model->jumlah_jam_sk_uji($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKrpp'] = $this->set_rpp_model->ambil_data_skkd_rpp($mapel,$kls,$sms,$sk,$kdid);
		
		$data['idTrxRPP'] = -1;
		$data['noTrxRPP'] = -1;
		if($rppCount->num_rows()>0) {
			$data['idTrxRPP'] = $rppCount->row(0)->id;
			$data['noTrxRPP'] = $rppCount->row(0)->no_rpp;
		} 
		
		if($data['tampilSKjam']->num_rows()>0) {
			echo "<input type='hidden' id='idRPP_temp' value='".$data['idTrxRPP']."' >";
			$this->load->view('trx_setting_rpp_detail',$data);
			//print_r($tampilSKjam->row(0)->jmljam);
		} else {
			echo "<p align='center' style='color:red' >Anda belum mengisi Prosem (Program Semester) untuk detail diatas!</p>";
		}
	}
	public function rpp_tujuan_temu() {
		$notemu = $this->uri->segment(3);
		$rppid = $this->uri->segment(4);
		$kdid = $this->uri->segment(5);
		$skid = $this->uri->segment(6);
		
		$this->load->model('set_rpp_model');
		$data['loadTujuanTemu'] = $this->set_rpp_model->loadTujuanTemu($notemu,$rppid,$kdid,$skid);
		$data['loadTujuanIsiTemu'] = $this->set_rpp_model->loadTujuanIsiTemu($notemu,$rppid,$kdid,$skid);
		$data['data_lifeskill'] = $this->set_rpp_model->ambil_tbl_lifeskill();
		$data['data_pend_kar'] = $this->set_rpp_model->ambil_tbl_pendkar();
		$data['data_confucius'] = $this->set_rpp_model->ambil_tbl_confucius();
		$data['data_tujuan_pmbljaran'] = $this->set_rpp_model->ambil_tujuan_pembelajaran($skid,$kdid);
		$data['loadTujuanPertemuan'] = $this->set_rpp_model->loadTujuanPertemuan($rppid,$kdid,$skid);
		
		$data['noTemu'] = $this->uri->segment(3);
		$this->load->view('trx_setting_rpp_tujuan_temu',$data);
	}
	public function rpp_keg_bel() {
		$data['noTemu'] = $this->uri->segment(3);
		$data['rppid'] = $this->uri->segment(4);
		$data['kdid'] = $this->uri->segment(5);
		//print_r($this->uri->segment(3) . " <===> " . $this->uri->segment(4));
		
		$this->load->model('set_rpp_model');
		$data['loadKegbel'] = $this->set_rpp_model->loadKegbel($this->uri->segment(3),$this->uri->segment(4),$this->uri->segment(5));
		
		$this->load->view('trx_setting_rpp_keg_bel',$data);
	}
	
	public function simpan_rpp_header() {
		//$this->input->post
		$this->load->model('set_rpp_model');
		$simpanHeader_part = $this->set_rpp_model->simpanHeader_part($_POST);
		//print_r($_POST);
		//echo $simpanHeader_part;
	}
	
	public function tampilkan_data_rpp() {
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		$sk = $this->uri->segment(6);
		$skno = $this->uri->segment(7);
		$rppid = $this->uri->segment(8);
		$kdid = $this->uri->segment(9);
		
		$this->load->model('set_rpp_model');
		$data['tampilSKjam'] = $this->set_rpp_model->jumlah_jam_sk($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKjamUji'] = $this->set_rpp_model->jumlah_jam_sk_uji($mapel,$kls,$sk,$skno,$kdid);
		
		$data['tampilSKrpp'] = $this->set_rpp_model->ambil_data_skkd($mapel,$kls,$sms,$sk);
		$data['loadRppMateri'] = $this->set_rpp_model->loadRppMateri($rppid,$kdid);
		$data['loadRppMetode'] = $this->set_rpp_model->loadRppMetode($rppid,$kdid);
		$data['loadRppSumber'] = $this->set_rpp_model->loadRppSumber($rppid,$kdid);
		$data['loadRppMedia'] = $this->set_rpp_model->loadRppMedia($rppid,$kdid);
		
		$data['loadRppSumberSilabus'] = $this->set_rpp_model->loadRppSumberSilabus($rppid,$kdid,$sk);
		
		//$data['jml_pertemuan']=$data['tampilSKjam']->row(0)->jmljam;
		$this->load->view('trx_setting_rpp_tujuan',$data);
		$this->load->view('trx_setting_rpp_materi');
		$this->load->view('trx_setting_rpp_keg',$data);
		$this->load->view('trx_setting_rpp_sumber');
		$this->load->view('trx_setting_rpp_penilaian');
	}
	
	public function load_rpp_tujuan_table() {
		$rppid = $this->uri->segment(3);
		$kdid = $this->uri->segment(4);
		$skid = $this->uri->segment(5);
		
		//echo "RPPID : " . $rppid . " / KDID :  " . $kdid + " / SKID : " + $skid;
		$this->load->model('set_rpp_model');
		$loadRppTableTujuan = $this->set_rpp_model->loadRppTableTujuan($rppid,$kdid);
		
		if($loadRppTableTujuan->num_rows()>0) {
			foreach($loadRppTableTujuan->result() as $tb) {
				echo "<tr style='background-color:#ffffff;text-align:center;' >";
				echo "<td>".$tb->pert_ke."</td>";
				echo "<td>".$tb->jml_jam."</td>";
				echo "<td>".$tb->tujuan_moral."</td>";
				echo "<td><input type='button' class='btn btn-danger form-control hps_tbl_rpp_tujuan' value='hapus' title='".$tb->id."' ></td>";
				echo "</tr>";
			}
		} else {
			echo "<tr style='background-color:#ffffff;color:red;text-align:center;' >";
				echo "<td colspan='4'>Belum ada input Tujuan Pembelajaran</td>";
			echo "</tr>";
		}
	}
	public function hapus_rpp_tujuan_table() {
		$this->load->model('set_rpp_model');
		$hpsTblTujuan = $this->set_rpp_model->hpsTblTujuan($_POST);
		return $hpsTblTujuan;
	}
	
	public function cari_rpp_detail_indi() {
		$this->load->model('set_rpp_model');
		
		$loadRppIndi = $this->set_rpp_model->loadRppIndi($_POST);
		echo json_encode($loadRppIndi->result());
	}
	public function cari_rpp_detail_soal() {
		$this->load->model('set_rpp_model');
		
		$loadRppSoal = $this->set_rpp_model->loadRppSoal($_POST);
		echo json_encode($loadRppSoal->result());
	}
	public function cari_rpp_detail_jawaban() {
		$this->load->model('set_rpp_model');
		
		$loadRppJawaban = $this->set_rpp_model->loadRppJawaban($_POST);
		echo json_encode($loadRppJawaban->result());
	}
	
	//RPP : TUJUAN
	public function simpan_tujuan_pembelajaran() {
		//print_r($_POST);
		if(isset($_POST['txtTemuTujuan_pembelajaran'])) {
			$this->load->model('set_rpp_model');
			$simpanTujuan_part = $this->set_rpp_model->simpanTujuan_part($_POST);
		} else {
			echo "Tujuan Pembelajaran belum dipilih satupun";
		}
	}
	
	//RPP : MATERI
	public function simpan_rpp_materi() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanMateri_part = $this->set_rpp_model->simpanMateri_part($_POST);
	}
	
	//RPP : METODE
	public function simpan_rpp_metode() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanMetode_part = $this->set_rpp_model->simpanMetode_part($_POST);
		//echo $simpanMetode_part;
	}
	
	//RPP : KEGIATAN PEMBELAJARAN
	public function simpan_rpp_kegbel() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanMetode_part = $this->set_rpp_model->simpanKegbel_part($_POST);
	}
	public function load_rpp_kegbel_table() {
		$rppid = $this->uri->segment(3);
		$kdid = $this->uri->segment(4);
		$skid = $this->uri->segment(5);
		
		//echo "RPPID : " . $rppid . " / KDID :  " . $kdid + " / SKID : " + $skid;
		$this->load->model('set_rpp_model');
		$loadRppTableKegbel = $this->set_rpp_model->loadRppTableKegbel($rppid,$kdid);
		
		//print_r($loadRppTableKegbel->result());
		if($loadRppTableKegbel->num_rows()>0) {
			foreach($loadRppTableKegbel->result() as $tb) {
				$isiKegiatan = "<u>Pendahuluan</u><br>" . $tb->pendahuluan . "<br>";
				$isiKegiatan .= "<u>Eksplorasi</u><br>" . $tb->eksplor . "<br>";
				$isiKegiatan .= "<u>Elaborasi</u><br>" . $tb->elabor . "<br>";
				$isiKegiatan .= "<u>Konfirmasi</u><br>" . $tb->konfirm . "<br>";
				
				$isiWaktu = $tb->waktu_a . "<br>";
				$isiWaktu .= $tb->waktu_b . "<br>";
				$isiWaktu .= $tb->waktu_c;
				
				$isiMetode = $tb->metode_a . "<br>";
				$isiMetode .= $tb->metode_b . "<br>";
				$isiMetode .= $tb->metode_c;
				
				echo "<tr style='background-color:#ffffff;text-align:center;' >";
				echo "<td>".$tb->pert_ke."</td>";
				echo "<td>".$tb->jml_jam."</td>";
				echo "<td align='left'>".$isiKegiatan."</td>";
				echo "<td>".$isiWaktu."</td>";
				echo "<td>".$isiMetode."</td>";
				echo "<td><input type='button' class='btn btn-danger form-control hps_tbl_rpp_kegbel' value='hapus' title='".$tb->id."' ></td>";
				echo "</tr>";
			}
		} else {
			echo "<tr style='background-color:#ffffff;color:red;text-align:center;' >";
				echo "<td colspan='6'>Belum ada input Kegiatan Pembelajaran</td>";
			echo "</tr>";
		}
	}
	public function hapus_rpp_kegbel_table() {
		$this->load->model('set_rpp_model');
		$hpsTblTujuan = $this->set_rpp_model->hpsTblKegbel($_POST);
		return $hpsTblTujuan;
	}
	
	//RPP : SUMBER
	public function simpan_rpp_sumber() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanSumber_part = $this->set_rpp_model->simpanSumber_part($_POST);
	}
	
	//RPP : MEDIA
	public function simpan_rpp_media() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanMedia_part = $this->set_rpp_model->simpanMedia_part($_POST);
	}
	
	//RPP : INDIKATOR PENILAIAN
	public function simpan_rpp_indi() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanIndi_part = $this->set_rpp_model->simpanIndi_part($_POST);
	}
	
	//RPP : PENILAIAN SOAL
	public function simpan_rpp_soal() {
		print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanSoal_part = $this->set_rpp_model->simpanSoal_part($_POST);
	}
	
	//RPP : PENILAIAN JAWABAN
	public function simpan_rpp_jawaban() {
		//print_r($_POST);
		$this->load->model('set_rpp_model');
		$simpanJawaban_part = $this->set_rpp_model->simpanJawaban_part($_POST);
	}
	//END Program RPP ---------------------------------------------------------------
	
	
	
	//KKM MENU ***********************************************************************
	public function show_kkm_page() {
		$this->load->model('set_kkm_model');
		
		$data['data_useractive'] = $this->set_kkm_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_kkm_model->ambil_mapel_guru();
		$this->load->view('trx_setting_kkm',$data);
	}
	public function cari_kkm_sk() {
		//print_r($_POST);
		$this->load->model('set_kkm_model');
		$tampilSKkkm = $this->set_kkm_model->tampil_sk_kkm($_POST);
		echo json_encode($tampilSKkkm->result());
		//print_r($tampilSKkkm);
	}
	public function show_kkm_input() {
		$this->load->model('set_kkm_model');
		
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		
		$data['detail_kd_indi'] = $this->set_kkm_model->show_skkd_detail($mapel,$kls,$sms);
		$data['data_kkm'] = $this->set_kkm_model->loadKKM($mapel,$kls,$sms);
		$this->load->view('trx_setting_kkm_input',$data);
		//print_r($data['detail_sk']);
	}
	public function simpan_kkm() {
		//print_r($_POST);
		$this->load->model('set_kkm_model');
		$simpanKKM = $this->set_kkm_model->simpanKKM($_POST);
		//echo $simpanKKM;
	}
	
	//END KKM MENU ***********************************************************************
	
	
	
	//KISI MENU ***********************************************************************
	public function show_kisi_page() {
		$this->load->model('set_kisi_model');
		
		$data['data_useractive'] = $this->set_kisi_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_kisi_model->ambil_mapel_guru();
		$this->load->view('trx_setting_kisi',$data);
	}
	
	public function show_kisi_input() {
		$this->load->model('set_kisi_model');
		
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		
		$data['loadKisi'] = $this->set_kisi_model->loadKisi($mapel,$kls,$sms);
		$this->load->view('trx_setting_kisi_input',$data);
		//print_r($data['detail_sk']);
	}
	
	public function load_skkd_kisi() {
		$this->load->model('set_kisi_model');
		
		$load_skkd = $this->set_kisi_model->show_skkd_detail($_POST);
		echo json_encode($load_skkd->result());
	}
	public function load_materi_kisi() {
		$this->load->model('set_kisi_model');
		
		$load_materi = $this->set_kisi_model->load_materi_from_rpp($_POST);
		echo json_encode($load_materi->result());
	}
	public function load_indi_kisi() {
		$this->load->model('set_kisi_model');
		
		$loadindikisi = $this->set_kisi_model->load_indi_kisi($_POST);
		echo json_encode($loadindikisi->result());
	}
	public function load_ranah_kisi() {
		$this->load->model('set_kisi_model');
		
		$loadranahkisi = $this->set_kisi_model->load_ranah_kisi($_POST);
		echo json_encode($loadranahkisi->result());
	}
	public function simpan_frm_kisi() {
		//print_r($_POST);
		$this->load->model('set_kisi_model');
		$simpankisi = $this->set_kisi_model->simpan_trx_kisi($_POST);
		//print_r($simpankisi);
	}
	//END KISI MENU ***********************************************************************
	
	
	
	//REPORT SKKD 
	public function cariulang_mapel_guru() {
		$this->load->model('set_skkd_model');
		$data_mapel_guru = $this->set_skkd_model->ambil_mapel_guru($_POST['txtId']);
		//print_r($data_mapel_guru->result());
		echo json_encode($data_mapel_guru->result());
	}
	public function show_meta_skkd() {
		$this->load->model('set_skkd_model');
		
		$data['all_user'] = $this->set_skkd_model->ambil_all_user();
		$data['data_useractive'] = $this->set_skkd_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_skkd_model->ambil_mapel_guru($this->session->userdata('login_userid'));
		$this->load->view('rpt_skkd',$data);
	}
	public function tampil_lap_skkd() {
		$this->load->model('set_skkd_model');
		
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		
		$data['show_rpt_skkd'] = $this->set_skkd_model->show_report_skkd($mapel,$kls);
		$this->load->view('rpt_skkd_view',$data);
	}
	public function tampil_pdf_skkd() {
		$this->load->model('set_skkd_model');
		
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		
		$data['show_rpt_skkd'] = $this->set_skkd_model->show_report_skkd($mapel,$kls);
		$data['nama_kelas'] = $this->set_skkd_model->ambil_nama_kelas($kls);
		$data['nama_mapel'] = $this->set_skkd_model->ambil_nama_mapel($mapel);
		$this->load->view('rpt_skkd_pdf',$data);
	}
	public function tampil_print_skkd() {
		$this->load->model('set_skkd_model');
		
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		
		$data['show_rpt_skkd'] = $this->set_skkd_model->show_report_skkd($mapel,$kls);
		$data['nama_kelas'] = $this->set_skkd_model->ambil_nama_kelas($kls);
		$data['nama_mapel'] = $this->set_skkd_model->ambil_nama_mapel($mapel);
		$data['data_user_pilih'] = $this->set_skkd_model->ambil_nama_user($this->session->userdata('login_userid'));
		$data['nama_kepsek'] = $this->set_skkd_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
		$this->load->view('rpt_skkd_print',$data);
	}
	
	//END REPORT SKKD
	
	
	
	
	//REPORT PROTA 
	public function show_rpt_prota() {
		$this->load->model('set_prota_model');
		
		$data['all_user'] = $this->set_prota_model->ambil_all_user();
		$data['data_useractive'] = $this->set_prota_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_prota_model->ambil_mapel_guru($this->session->userdata('login_userid'));
		$this->load->view('rpt_prota',$data);
	}
	public function tampil_lap_prota() {
		$this->load->model('set_prota_model');
		
		$data['data_mapel'] = ($this->uri->segment(3));
		$data['data_kelas'] = ($this->uri->segment(4));
		$data['data_mapel_pilih'] = $this->set_prota_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_prota_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_skkd'] = $this->set_prota_model->tampil_data_prota($this->uri->segment(3),$this->uri->segment(4));
		$data['data_prota'] = $this->set_prota_model->cari_prota_exist($this->uri->segment(3),$this->uri->segment(4));
		$this->load->view('rpt_prota_view',$data);
	}
	public function tampil_pdf_prota() {
		$this->load->model('set_prota_model');
		
		$data['data_mapel'] = ($this->uri->segment(3));
		$data['data_kelas'] = ($this->uri->segment(4));
		$data['data_mapel_pilih'] = $this->set_prota_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_prota_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_skkd'] = $this->set_prota_model->tampil_data_prota($this->uri->segment(3),$this->uri->segment(4));
		$data['data_prota'] = $this->set_prota_model->cari_prota_exist($this->uri->segment(3),$this->uri->segment(4));
		$data['data_user_pilih'] = $this->set_prota_model->ambil_nama_user($data['data_prota']->row(0)->user_input);
		$data['nama_kepsek'] = $this->set_prota_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
		$this->load->view('rpt_prota_pdf',$data);
	}
	//END REPORT PROTA 
	
	
	
	//REPORT PROSEM 
	public function show_rpt_prosem() {
		$this->load->model('set_prosem_model');
		
		$data['all_user'] = $this->set_prosem_model->ambil_all_user();
		$data['data_useractive'] = $this->set_prosem_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_prosem_model->ambil_mapel_guru();
		$this->load->view('rpt_prosem',$data);
	}
	public function cari_kelas_dari_mapel() {
		$this->load->model('set_skkd_model');
		$idTrx=$this->uri->segment(3);
		
		$hasil_cari_kelas = $this->set_skkd_model->cari_kelas_basedmapel($idTrx);
		echo "<select id='set_kelas' name='set_kelas' class='form-control' required >";
		echo "<option value=''>== Pilih Kelas ==</option>";
		foreach($hasil_cari_kelas->result() as $object) {
			echo "<option value='".$object->id_kelas."'>" . $object->kelas . "</option>";
		}
		echo "</select>";
	}
	
	public function tampil_lap_prosem() {
		$mapel=$this->uri->segment(3);
		$kls=$this->uri->segment(4);
		$sms=$this->uri->segment(5);
		
		$this->load->model('set_prosem_model');
		$data['data_prosem'] = $this->set_prosem_model->tampil_data_prosem($mapel,$kls,$sms);
		$data['data_bulan'] = $this->set_prosem_model->ambil_data_bulan($this->uri->segment(5));
		$data['prosem_detail'] = $this->set_prosem_model->isi_prosem_all_month($mapel,$kls,$sms);
		$data['prosem_uji_kom'] = $this->set_prosem_model->isi_ujikomp_all_month($mapel,$kls,$sms);
		$data['data_prota'] = $this->set_prosem_model->ambil_data_prota($mapel,$kls,$sms);
		
		$this->load->view('rpt_prosem_view',$data);
	}
	public function tampil_pdf_prosem() {
		$mapel=$this->uri->segment(3);
		$kls=$this->uri->segment(4);
		$sms=$this->uri->segment(5);
		
		$this->load->model('set_prosem_model');
		$data['data_prosem'] = $this->set_prosem_model->tampil_data_prosem($mapel,$kls,$sms);
		$data['data_bulan'] = $this->set_prosem_model->ambil_data_bulan($this->uri->segment(5));
		$data['prosem_detail'] = $this->set_prosem_model->isi_prosem_all_month($mapel,$kls,$sms);
		$data['prosem_uji_kom'] = $this->set_prosem_model->isi_ujikomp_all_month($mapel,$kls,$sms);
		
		$data['data_mapel_pilih'] = $this->set_prosem_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_prosem_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_user_pilih'] = $this->set_prosem_model->ambil_nama_user($this->session->userdata('login_userid'));
		$data['nama_kepsek'] = $this->set_prosem_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
		
		$this->load->view('rpt_prosem_pdf',$data);
	}
	//END REPORT PROSEM
	
	
	
	//REPORT SILABUS
	public function show_rpt_silabus() {
		$this->load->model('set_prosem_model');
		
		$data['all_user'] = $this->set_prosem_model->ambil_all_user();
		$data['data_useractive'] = $this->set_prosem_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_prosem_model->ambil_mapel_guru();
		$this->load->view('rpt_silabus',$data);
	}
	public function tampil_lap_silabus() {
		$mapel=$this->uri->segment(3);
		$kls=$this->uri->segment(4);
		$sms=$this->uri->segment(5);
		$sk=$this->uri->segment(6);
		
		$this->load->model('set_silabus_model');
		$data['lap_skdetail'] = $this->set_silabus_model->report_skdetail($mapel,$kls,$sms,$sk);
		$data['lap_silabus'] = $this->set_silabus_model->report_silabus($mapel,$kls,$sms,$sk);
		$data['data_lifeskill'] = $this->set_silabus_model->ambil_tbl_lifeskill();
		$data['data_pend_kar'] = $this->set_silabus_model->ambil_tbl_pendkar();
		$this->load->view('rpt_silabus_view',$data);
	}
	public function cari_sk() {
		$this->load->model('set_silabus_model');
		$tampilSKsilabus = $this->set_silabus_model->tampil_sk_rpt($_POST);
		echo json_encode($tampilSKsilabus->result());
	}
	public function tampil_pdf_silabus() {
		$mapel=$this->uri->segment(3);
		$kls=$this->uri->segment(4);
		$sms=$this->uri->segment(5);
		$sk=$this->uri->segment(6);
		
		$this->load->model('set_silabus_model');
		$data['alokasiWaktuSK'] = $this->set_silabus_model->hitung_alokasi_waktu($_POST);
		$data['lap_skdetail'] = $this->set_silabus_model->report_skdetail($mapel,$kls,$sms,$sk);
		$data['lap_silabus'] = $this->set_silabus_model->report_silabus($mapel,$kls,$sms,$sk);
		$data['semester'] = $sms;
		$data['data_mapel_pilih'] = $this->set_silabus_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_silabus_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_user_pilih'] = $this->set_silabus_model->ambil_nama_user($data['lap_silabus']->row(0)->user_input);
		$data['nama_kepsek'] = $this->set_silabus_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
		$data['data_lifeskill'] = $this->set_silabus_model->ambil_tbl_lifeskill();
		$data['data_pend_kar'] = $this->set_silabus_model->ambil_tbl_pendkar();
		$this->load->view('rpt_silabus_pdf',$data);
	}
	public function tampil_print_silabus() {
		$mapel=$this->uri->segment(3);
		$kls=$this->uri->segment(4);
		$sms=$this->uri->segment(5);
		$sk=$this->uri->segment(6);
		
		$this->load->model('set_silabus_model');
		//$data['nama_kelas'] = $this->set_silabus_model->ambil_nama_kelas($kls);
		//$data['nama_mapel'] = $this->set_silabus_model->ambil_nama_mapel($mapel);
		
		$data['lap_skdetail'] = $this->set_silabus_model->report_skdetail($mapel,$kls,$sms,$sk);
		$data['lap_silabus'] = $this->set_silabus_model->report_silabus($mapel,$kls,$sms,$sk);
		$data['semester'] = $sms;
		$data['data_mapel_pilih'] = $this->set_silabus_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_silabus_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_user_pilih'] = $this->set_silabus_model->ambil_nama_user($data['lap_silabus']->row(0)->user_input);
		$data['nama_kepsek'] = $this->set_silabus_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
		$data['data_lifeskill'] = $this->set_silabus_model->ambil_tbl_lifeskill();
		$data['data_pend_kar'] = $this->set_silabus_model->ambil_tbl_pendkar();
		$this->load->view('rpt_silabus_print',$data);
	}
	//END REPORT SILABUS
	
	
	
	//REPORT KKM
	public function show_rpt_kkm() {
		$this->load->model('set_prosem_model');
		
		$data['all_user'] = $this->set_prosem_model->ambil_all_user();
		$data['data_useractive'] = $this->set_prosem_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_prosem_model->ambil_mapel_guru();
		$this->load->view('rpt_kkm',$data);
	}
	public function tampil_lap_kkm() {
		$this->load->model('set_kkm_model');
		
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		
		$data['detail_kd_indi'] = $this->set_kkm_model->show_skkd_detail($mapel,$kls,$sms);
		$data['data_kkm'] = $this->set_kkm_model->loadKKM($mapel,$kls,$sms);
		$data['data_mp_smst'] = $this->set_kkm_model->hitung_mp_semester($mapel,$kls);
		$this->load->view('rpt_kkm_view',$data);
	}
	public function tampil_pdf_kkm() {
		$this->load->model('set_kkm_model');
		
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		
		$data['detail_kd_indi'] = $this->set_kkm_model->show_skkd_detail($mapel,$kls,$sms);
		$data['data_kkm'] = $this->set_kkm_model->loadKKM($mapel,$kls,$sms);
		$data['data_mp_smst'] = $this->set_kkm_model->hitung_mp_semester($mapel,$kls);
		$data['semester'] = $sms;
		$data['data_mapel_pilih'] = $this->set_kkm_model->ambil_mapel_pilih($this->uri->segment(3));
		$data['data_kelas_pilih'] = $this->set_kkm_model->ambil_kelas_pilih($this->uri->segment(4));
		$data['data_user_pilih'] = $this->set_kkm_model->ambil_nama_user($data['data_kkm']->row(0)->userinput);
		$data['nama_kepsek'] = $this->set_kkm_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
		$this->load->view('rpt_kkm_pdf',$data);
	}
	//END REPORT KKM
	
	
	//REPORT RPP
	public function show_rpt_rpp() {
		$this->load->model('set_prosem_model');
		
		$data['all_user'] = $this->set_prosem_model->ambil_all_user();
		$data['data_useractive'] = $this->set_prosem_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_prosem_model->ambil_mapel_guru();
		$this->load->view('rpt_rpp',$data);
	}
	public function tampil_lap_rpp() {
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		$sk = $this->uri->segment(6);
		$skno = $this->uri->segment(7);
		$kdid = $this->uri->segment(8);
		
		$this->load->model('set_rpp_model');
		$rppCount = $this->set_rpp_model->cari_trx_rpp($mapel,$kls,$sms,$sk);
		$data['tampilSKjam'] = $this->set_rpp_model->jumlah_jam_sk($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKjamUji'] = $this->set_rpp_model->jumlah_jam_sk_uji($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKrpp'] = $this->set_rpp_model->ambil_data_skkd_rpp($mapel,$kls,$sms,$sk,$kdid);
		
		$data['idTrxRPP'] = -1;
		$data['noTrxRPP'] = -1;
		if($rppCount->num_rows()>0) {
			$data['idTrxRPP'] = $rppCount->row(0)->id;
			$data['noTrxRPP'] = $rppCount->row(0)->no_rpp;
		} 
		
		if($data['tampilSKjam']->num_rows()>0) {
			$data['lap_rpp'] = $this->set_rpp_model->show_report_rpp($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_materi'] = $this->set_rpp_model->show_report_rpp_materi($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_metode'] = $this->set_rpp_model->show_report_rpp_metode($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_media'] = $this->set_rpp_mode->show_report_rpp_media($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_tujuan'] = $this->set_rpp_model->show_report_rpp_tujuan($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_kegbel'] = $this->set_rpp_model->show_report_rpp_kegbel($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_indi'] = $this->set_rpp_model->show_report_rpp_indi($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_soal'] = $this->set_rpp_model->show_report_rpp_soal($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_jawaban'] = $this->set_rpp_model->show_report_rpp_jawaban($mapel,$kls,$sms,$sk,$kdid);
			
			$data['data_lifeskill'] = $this->set_rpp_model->ambil_tbl_lifeskill();
			$data['data_tujbel'] = $this->set_rpp_model->ambil_tbl_tujbel();
			
			$this->load->view('rpt_rpp_view',$data);
		} else {
			echo "<p align='center' style='color:red' >Anda belum mengisi Prosem (Program Semester) untuk detail diatas!</p>";
		} 
	}
	public function tampil_pdf_rpp() {
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		$sk = $this->uri->segment(6);
		$skno = $this->uri->segment(7);
		$kdid = $this->uri->segment(8);
		
		$this->load->model('set_rpp_model');
		$rppCount = $this->set_rpp_model->cari_trx_rpp($mapel,$kls,$sms,$sk);
		$data['tampilSKjam'] = $this->set_rpp_model->jumlah_jam_sk($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKjamUji'] = $this->set_rpp_model->jumlah_jam_sk_uji($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKrpp'] = $this->set_rpp_model->ambil_data_skkd_rpp($mapel,$kls,$sms,$sk,$kdid);
		
		$data['idTrxRPP'] = -1;
		$data['noTrxRPP'] = -1;
		if($rppCount->num_rows()>0) {
			$data['idTrxRPP'] = $rppCount->row(0)->id;
			$data['noTrxRPP'] = $rppCount->row(0)->no_rpp;
		} 
		
		if($data['tampilSKjam']->num_rows()>0) {
			$data['lap_rpp'] = $this->set_rpp_model->show_report_rpp($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_materi'] = $this->set_rpp_model->show_report_rpp_materi($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_metode'] = $this->set_rpp_model->show_report_rpp_metode($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_media'] = $this->set_rpp_mode->show_report_rpp_media($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_tujuan'] = $this->set_rpp_model->show_report_rpp_tujuan($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_kegbel'] = $this->set_rpp_model->show_report_rpp_kegbel($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_indi'] = $this->set_rpp_model->show_report_rpp_indi($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_soal'] = $this->set_rpp_model->show_report_rpp_soal($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_jawaban'] = $this->set_rpp_model->show_report_rpp_jawaban($mapel,$kls,$sms,$sk,$kdid);
			
			$data['data_lifeskill'] = $this->set_rpp_model->ambil_tbl_lifeskill();
			$data['data_tujbel'] = $this->set_rpp_model->ambil_tbl_tujbel();
			
			$data['semester'] = $sms;
			$data['data_mapel_pilih'] = $this->set_rpp_model->ambil_mapel_pilih($this->uri->segment(3));
			$data['data_kelas_pilih'] = $this->set_rpp_model->ambil_kelas_pilih($this->uri->segment(4));
			$data['data_user_pilih'] = $this->set_rpp_model->ambil_nama_user($data['lap_rpp']->row(0)->user_input);
			$data['nama_kepsek'] = $this->set_rpp_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
			$data['lap_rpp_indi'] = $this->set_rpp_model->show_report_rpp_indi($mapel,$kls,$sms,$sk,$kdid);
			
			$this->load->view('rpt_rpp_pdf',$data);
		} else {
			echo "<p align='center' style='color:red' >Anda belum mengisi Prosem (Program Semester) untuk detail diatas!</p>";
		} 
	}
	
	public function tampil_print_rpp() {
		$mapel = $this->uri->segment(3);
		$kls = $this->uri->segment(4);
		$sms = $this->uri->segment(5);
		$sk = $this->uri->segment(6);
		$skno = $this->uri->segment(7);
		$kdid = $this->uri->segment(8);
		
		$this->load->model('set_rpp_model');
		$rppCount = $this->set_rpp_model->cari_trx_rpp($mapel,$kls,$sms,$sk);
		$data['tampilSKjam'] = $this->set_rpp_model->jumlah_jam_sk($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKjamUji'] = $this->set_rpp_model->jumlah_jam_sk_uji($mapel,$kls,$sk,$skno,$kdid);
		$data['tampilSKrpp'] = $this->set_rpp_model->ambil_data_skkd_rpp($mapel,$kls,$sms,$sk,$kdid);
		
		$data['idTrxRPP'] = -1;
		$data['noTrxRPP'] = -1;
		if($rppCount->num_rows()>0) {
			$data['idTrxRPP'] = $rppCount->row(0)->id;
			$data['noTrxRPP'] = $rppCount->row(0)->no_rpp;
		} 
		
		if($data['tampilSKjam']->num_rows()>0) {
			$data['lap_rpp'] = $this->set_rpp_model->show_report_rpp($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_materi'] = $this->set_rpp_model->show_report_rpp_materi($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_metode'] = $this->set_rpp_model->show_report_rpp_metode($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_media'] = $this->set_rpp_mode->show_report_rpp_media($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_tujuan'] = $this->set_rpp_model->show_report_rpp_tujuan($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_kegbel'] = $this->set_rpp_model->show_report_rpp_kegbel($mapel,$kls,$sms,$sk,$kdid);
			
			$data['lap_rpp_indi'] = $this->set_rpp_model->show_report_rpp_indi($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_soal'] = $this->set_rpp_model->show_report_rpp_soal($mapel,$kls,$sms,$sk,$kdid);
			$data['lap_rpp_jawaban'] = $this->set_rpp_model->show_report_rpp_jawaban($mapel,$kls,$sms,$sk,$kdid);
			
			$data['data_lifeskill'] = $this->set_rpp_model->ambil_tbl_lifeskill();
			$data['data_tujbel'] = $this->set_rpp_model->ambil_tbl_tujbel();
			
			$data['semester'] = $sms;
			$data['data_mapel_pilih'] = $this->set_rpp_model->ambil_mapel_pilih($this->uri->segment(3));
			$data['data_kelas_pilih'] = $this->set_rpp_model->ambil_kelas_pilih($this->uri->segment(4));
			$data['data_user_pilih'] = $this->set_rpp_model->ambil_nama_user($data['lap_rpp']->row(0)->user_input);
			$data['nama_kepsek'] = $this->set_rpp_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
			$data['lap_rpp_indi'] = $this->set_rpp_model->show_report_rpp_indi($mapel,$kls,$sms,$sk,$kdid);
			
			$this->load->view('rpt_rpp_print',$data);
		} else {
			echo "<p align='center' style='color:red' >Anda belum mengisi Prosem (Program Semester) untuk detail diatas!</p>";
		} 
	}
	//END REPORT RPP
	
	
	
	
	//REKAP REPORT
	public function show_rpt_rekap() {
		$this->load->model('set_prosem_model');
		$data['data_useractive'] = $this->set_prosem_model->ambil_user_active();
		$data['data_mapel_guru'] = $this->set_prosem_model->ambil_mapel_guru();
		$this->load->view('rpt_rekap',$data);
	}
	public function show_rpt_rekap_view() {
		$this->load->model('set_rekap_model');
		
		$data['mapel_jenjang'] = $this->set_rekap_model->show_mapel_jenjang($this->uri->segment(3));
		$data['kelas_jenjang'] = $this->set_rekap_model->show_kelas_jenjang($this->uri->segment(3));
		$data['jenjang'] = $this->uri->segment(3);
		$this->load->view('rpt_rekap_view',$data);
	}
	//END REKAP REPORT

	
	//REKAP KKM
	public function show_rekap_kkm_view() {
		$this->load->model('set_rekap_model');
		
		$data['mapel_jenjang'] = $this->set_rekap_model->show_mapel_jenjang($this->uri->segment(3));
		$data['kelas_jenjang'] = $this->set_rekap_model->show_kelas_jenjang($this->uri->segment(3));
		$data['jenjang'] = $this->uri->segment(3);
		$data['data_rekap_kkm'] = $this->set_rekap_model->rekap_kkm_jenjang($this->uri->segment(3));
		$this->load->view('rpt_rekap_kkm',$data);
	}
	//END REKAP KKM
	
	
	//MASTER TEMATIK MAPEL
	public function ms_tematik_mapel() {
		$this->load->model('ms_tematik_model');
		$data['all_mapel'] = $this->ms_tematik_model->get_all_pelajaran();
		$data['data_tematik'] = $this->ms_tematik_model->get_data_tematik();
		$this->load->view('ms_tematik_mapel_view',$data);
	}
	
	public function ms_tematik_simpan() {
		//print_r($_POST);
		$this->load->model('ms_tematik_model');
		$ms_tematik_simpan = $this->ms_tematik_model->simpan_tematik($_POST);
	}
	
	public function ms_tematik_hapus() {
		$this->load->model('ms_tematik_model');
		$ms_tematik_hapus = $this->ms_tematik_model->hapus_tematik($_POST);
		
	}
	//END MASTER TEMATIK MAPEL
	
	
	
	
	//MASTER TEMATIK TEMA
	public function ms_tematik_tema() {
		$this->load->model('ms_tematik_model');
		$data['data_tema_tematik'] =  $this->ms_tematik_model->get_data_tematik_tema();
		$data['data_kelas'] =  $this->ms_tematik_model->get_kelas();
		$this->load->view('ms_tematik_tema_view',$data);
	}
	public function cari_no_urut_tema() {
		$this->load->model('ms_tematik_model');
		$data_tema =  $this->ms_tematik_model->get_tema_nomor($_POST);
		echo json_encode($data_tema->result());
	}
	
	public function ms_tematik_tema_simpan() {
		//print_r($_POST);
		$this->load->model('ms_tematik_model');
		$this->ms_tematik_model->simpan_tema_tematik($_POST);
	}
	
	public function ms_tematik_tema_hapus() {
		$this->load->model('ms_tematik_model');
		$ms_tematik_hapus = $this->ms_tematik_model->hapus_tematik_tema($_POST);
	}
	//END MASTER TEMATIK TEMA
	
	
	//MASTER TEMATIK SK
	public function ms_tematik_sk() {
		$this->load->model('ms_tematik_model');
		$data['data_sk_tematik'] =  $this->ms_tematik_model->get_data_tematik_sk();
		$data['data_kelas'] =  $this->ms_tematik_model->get_kelas();
		$this->load->view('ms_tematik_sk_view',$data);
	}
	
	public function ms_tematik_sk_simpan() {
		$this->load->model('ms_tematik_model');
		$this->ms_tematik_model->simpan_sk_tematik($_POST);
	}
	
	public function ms_tematik_sk_hapus() {
		$this->load->model('ms_tematik_model');
		$ms_tematik_sk_hapus = $this->ms_tematik_model->hapus_tematik_sk($_POST);
	}
	public function cari_mapel_tematik() {
		$this->load->model('ms_tematik_model');
		$ms_tematik_cari = $this->ms_tematik_model->cari_tematik_mapel($_POST);
		echo json_encode($ms_tematik_cari->result());
	}
	public function cari_mapel_tematik_kesdan() {
		$this->load->model('ms_tematik_model');
		$ms_tematik_sk_cari = $this->ms_tematik_model->cari_tematik_sk_kesdan($_POST);
		echo json_encode($ms_tematik_sk_cari->result());
	}
	//END MASTER TEMATIK SK
	
	
	
	//TRX TEMATIK SK
	public function trx_tematik_sk() {
		$this->load->model('ms_tematik_model');
		$data['data_kelas'] =  $this->ms_tematik_model->load_guru_mapel_kelas();
		$this->load->view('trx_tematik_sk_view',$data);
	}
	
	public function filter_kesdan_mapel() {
		$this->load->model('ms_tematik_model');
		$data_tematik_keSDan =  $this->ms_tematik_model->load_user_mapel_tematik_dan_kelas($_POST);
		echo json_encode($data_tematik_keSDan->result());
	}
	
	public function filter_mapel_tematik_dari_kelas_jenis() {
		$this->load->model('ms_tematik_model');
		$data_tematik_mapel =  $this->ms_tematik_model->load_mapel_tematik_dari_kelas_jenis($_POST);
		echo json_encode($data_tematik_mapel->result());
	}
	
	public function filter_sk_dari_jenis_kelas_mapel() {
		//print_r($_POST);
		$this->load->model('ms_tematik_model');
		$data_tematik_sk =  $this->ms_tematik_model->load_sk_dari_jenis_kelas($_POST);
		echo json_encode($data_tematik_sk->result());
	}
	
	public function simpan_trx_tematik_sk() {
		$this->load->model('trx_tematik_model');
		$simpantematik =  $this->trx_tematik_model->simpan_tematik_sk($_POST);
	}
	public function update_trx_tematik_sk() {
		$this->load->model('trx_tematik_model');
		$simpantematik =  $this->trx_tematik_model->update_tematik_sk($_POST);
	}
	public function cari_trx_tematik_sk() {
		$this->load->model('trx_tematik_model');
		$carisk_tematik =  $this->trx_tematik_model->cari_tematik_sk($_POST);
		if($carisk_tematik->num_rows()>0) {
			echo $carisk_tematik->row(0)->sk_detail;
		} else {
			echo "";
		}
	}
	
	
	//TRX TEMATIK KD
	public function trx_tematik_kd() {
		$this->load->model('ms_tematik_model');
		$data['data_kelas'] =  $this->ms_tematik_model->load_guru_mapel_kelas();
		$this->load->view('trx_tematik_kd_view',$data);
	}
	public function filter_sk_input() {
		//$this->load->model('ms_tematik_model');
		//$data_tematik_mapel =  $this->ms_tematik_model->load_mapel_tematik_dari_kelas_jenis($_POST);
		
		$this->load->model('trx_tematik_model');
		$data_tematik_sk =  $this->trx_tematik_model->filter_skinput($_POST);
		echo json_encode($data_tematik_sk->result());
	}
	public function simpan_trx_tematik_kd() {
		//print_r($_POST);
		$this->load->model('trx_tematik_model');
		$simpankdindi =  $this->trx_tematik_model->simpan_kd_dan_indi($_POST);
	}
	public function cari_trx_tematik_kd() {
		//print_r($_POST);
		$this->load->model('trx_tematik_model');
		$carikd =  $this->trx_tematik_model->cari_kd($_POST);
		echo json_encode($carikd->result());
	}
	public function cari_trx_tematik_indi() {
		//print_r($_POST);
		$this->load->model('trx_tematik_model');
		$cariindi =  $this->trx_tematik_model->cari_indi($_POST);
		echo json_encode($cariindi->result());
	}
	
	
	
	//TRX TEMATIK TEMA
	public function trx_tematik_tema() {
		$this->load->model('ms_tematik_model');
		$data['data_kelas'] =  $this->ms_tematik_model->load_guru_mapel_kelas();
		$this->load->view('trx_tematik_tema_view',$data);
	}
	public function cari_ms_tematik_tema() {
		$this->load->model('trx_tematik_model');
		$tematik_ms_tema =  $this->trx_tematik_model->load_ms_tematik_tema($_POST);
		echo json_encode($tematik_ms_tema->result());
	}
	public function simpan_trx_tematik_tema() {
		//print_r($_POST);
		$this->load->model('trx_tematik_model');
		$tematik_input_tema =  $this->trx_tematik_model->insert_trx_tema($_POST);
		//print_r($tematik_input_tema);	
	}
	public function cari_tematik_tema_check() {
		//print_r($_POST);
		$this->load->model('trx_tematik_model');
		$tematik_input_tema =  $this->trx_tematik_model->cari_tema_check($_POST);
		echo json_encode($tematik_input_tema->result());
	}
	public function update_trx_tematik_tema() {
		//print_r($_POST);
		$this->load->model('trx_tematik_model');
		$tematik_input_tema =  $this->trx_tematik_model->update_trx_tema($_POST);
	}
	public function rpt_tematik_pemetaan() {
		$this->load->model('ms_tematik_model');
		$data['data_kelas'] =  $this->ms_tematik_model->load_guru_mapel_kelas();
		$this->load->view('rpt_tematik_meta_view',$data);
	}
	public function show_rpt_tematik_skkd() {
		$kls = $this->uri->segment(3);
		$jenis = $this->uri->segment(4);
		
		$this->load->model('trx_tematik_model');
		$data['rpt_tematik_tema'] = $this->trx_tematik_model->show_rpt_tematik_tema($kls,$jenis);
		$data['rpt_tematik_kd_indi'] = $this->trx_tematik_model->show_rpt_tematik_kd_indi($kls,$jenis);
		$this->load->view('rpt_tematik_meta_view_show',$data);
	}
	public function tampil_print_tematik_skkd() {
		$kls = $this->uri->segment(3);
		$jenis = $this->uri->segment(4);
		
		$this->load->model('trx_tematik_model');
		$data['rpt_tematik_tema'] = $this->trx_tematik_model->show_rpt_tematik_tema($kls,$jenis);
		$data['rpt_tematik_kd_indi'] = $this->trx_tematik_model->show_rpt_tematik_kd_indi($kls,$jenis);
		$data['jenis_tematik']=$jenis;
		$data['kelas_tematik']=$this->trx_tematik_model->data_kelas($kls);
		$data['data_user_pilih'] = $this->trx_tematik_model->ambil_nama_user($this->session->userdata('login_userid'));
		$data['nama_kepsek'] = $this->trx_tematik_model->ambil_nama_kepsek($this->session->userdata('login_jenjang'));
		$this->load->view('rpt_tematik_meta_view_print',$data);
	}
	
	
}