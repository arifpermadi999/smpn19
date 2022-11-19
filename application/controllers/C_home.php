<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata('logged'))) {
			redirect('C_login');
		}
		$this->load->model('M_home');
	}

	// Master Halaman
	public function index()
	{
		// echo "<pre>";
		$this->data['totalToday'] = 10;
		$this->data['totalPrice'] = 500000;
		$this->data['title'] = 'Dashboard - CLIMBERNET';
		$this->data['banner'] = 'Dashboard';
		$this->data['descBanner'] = 'Proses real time aplikasi';
		$this->data['bread'] = '';
		$this->data['content'] = 'content/default';
		$this->load->view('V_home',$this->data);
	}
	public function profile()
	{
		$this->data['title'] = 'Profile - CLIMBERNET';
		$this->data['banner'] = 'Profile';
		$this->data['descBanner'] = 'Anda bisa mengubah profile anda disini';
		$this->data['bread'] = 'profile';
		$this->data['content'] = 'content/profile/profile';
		$this->load->view('V_home',$this->data);
	}
	public function users()
	{
		$this->data['dataUsers'] = $this->M_home->getAllUsers();
		$this->data['title'] = 'Data Users - CLIMBERNET';
		$this->data['banner'] = 'Users';
		$this->data['descBanner'] = 'Data user yang tersedia di database';
		$this->data['bread'] = 'users';
		$this->data['content'] = 'content/users/users';
		$this->load->view('V_home',$this->data);
	}
	public function teachers() {
		$this->data['dataTeachers'] = $this->teachers->getAllTeachers();
		$this->data['title'] = 'Data guru - CLIMBERNET';
		$this->data['banner'] = 'Data Guru';
		$this->data['descBanner'] = 'Data guru yang terdaftar di database';
		$this->data['content'] = 'content/teachers/teachers';
		$this->load->view('V_home',$this->data);
	}
	public function events() {
		$this->data['dataEvents'] = $this->events->getAllEvents();
		$this->data['title'] = 'Data Kegiatan - CLIMBERNET';
		$this->data['banner'] = 'Data Kegiatan';
		$this->data['descBanner'] = 'Data kegiatan yang tersedia di database';
		$this->data['content'] = 'content/events/events';
		$this->load->view('V_home',$this->data);
	}
	public function infos() {
		$this->data['dataInfos'] = $this->infos->getAllInfos();
		$this->data['title'] = 'Data Info Kurikulum - CLIMBERNET';
		$this->data['banner'] = 'Data Info Kurikulum';
		$this->data['descBanner'] = 'Data Info Kurikulum yang tersedia di database';
		$this->data['content'] = 'content/infos/info';
		$this->load->view('V_home',$this->data);
	}
	public function image_category() {
		$this->data['dataCatImages'] = $this->catImages->getAllCatImages();
		$this->data['title'] = 'Data Kategori Gambar - CLIMBERNET';
		$this->data['banner'] = 'Data Kategori Gambar';
		$this->data['descBanner'] = 'Data kategori gambar yang tersedia di database';
		$this->data['content'] = 'content/cat_image/cat_image';
		$this->load->view('V_home',$this->data);
	}
	public function sliders() {
		$this->data['dataSliders'] = $this->sliders->getAllSliders();
		$this->data['title'] = 'Data Slider - CLIMBERNET';
		$this->data['banner'] = 'Data Slider';
		$this->data['descBanner'] = 'Data slider yang tersedia di database';
		$this->data['content'] = 'content/sliders/sliders';
		$this->load->view('V_home',$this->data);
	}
	public function graduated() {
		$this->data['dataGraduated'] = $this->graduated->getAllGraduated();
		$this->data['title'] = 'Data Alumni - CLIMBERNET';
		$this->data['banner'] = 'Data Alumni';
		$this->data['descBanner'] = 'Data alumni yang tersedia di database';
		$this->data['content'] = 'content/graduated/graduated';
		$this->load->view('V_home',$this->data);
	}
	public function blogs() {
		$this->data['dataBlogs'] = $this->blogs->getAllBlogs();
		$this->data['title'] = 'Data Blog - CLIMBERNET';
		$this->data['banner'] = 'Data Blog';
		$this->data['descBanner'] = 'Data blog yang tersedia di database';
		$this->data['content'] = 'content/blogs/blogs';
		$this->load->view('V_home',$this->data);
	}
	public function gallery() {
		$dataCatImages = $this->catImages->getAllCatImages();
		foreach ($dataCatImages as $rowsCat => $valueCat) {
			$dataGallery = $this->gallery->getAllGalleriesByCat($valueCat->category_name);
			if ($dataGallery) {
				$dataCatImages[$rowsCat]->gallery = [];
				array_push($dataCatImages[$rowsCat]->gallery, $dataGallery);
			} else {
				$dataCatImages[$rowsCat]->gallery = 'empty';
			}
		}
		$this->data['dataGallery'] = $dataCatImages;
		$this->data['dataCatImages'] = $dataCatImages;
		$this->data['title'] = 'Data Gallery - CLIMBERNET';
		$this->data['banner'] = 'Data Gallery';
		$this->data['descBanner'] = 'Data gallery yang tersedia di database';
		$this->data['content'] = 'content/gallery/gallery';
		$this->load->view('V_home',$this->data);
	}
	public function modules() {
		$this->data['dataModules'] = $this->modules->getAllModules();
		$this->data['title'] = 'Data Modules - CLIMBERNET';
		$this->data['banner'] = 'Data Files';
		$this->data['descBanner'] = 'Data modules yang sudah di share';
		$this->data['content'] = 'content/modules/modules';
		$this->load->view('V_home',$this->data);	
	}
	public function videos() {
		$this->data['dataVideos'] = $this->videos->getAllVideos();
		$this->data['title'] = 'Data Videos - CLIMBERNET';
		$this->data['banner'] = 'Data Videos';
		$this->data['descBanner'] = 'Data video yang tersimpan didatabase';
		$this->data['content'] = 'content/videos/videos';
		$this->load->view('V_home',$this->data);	
	}
	public function profile_sp() {
		$this->data['dataProfile'] = $this->profile->getAllProfileSp();
		$this->data['title'] = 'Data Sarana dan Prasarana - CLIMBERNET';
		$this->data['banner'] = 'Data Sarana dan Prasarana';
		$this->data['descBanner'] = 'Data sarana dan prasarana yang tersimpan didatabase';
		$this->data['content'] = 'content/profile/sarana_prasarana';
		$this->load->view('V_home',$this->data);	
	}
	//PROFIL VISI//
	public function visi() {
		$this->data['dataVisi'] = $this->M_home->dataVisi();
		$this->data['title'] = 'Data Visi - SMPN 19 BEKASI';
		$this->data['banner'] = 'Data Visi';
		$this->data['descBanner'] = 'Data Visi';
		$this->data['content'] = 'content/profil/list_visi';
		$this->load->view('V_home',$this->data);
	}
	public function uploadVisi() {
		if (!$this->input->post()) {
			redirect('C_home/visi');
		}
		$data = $this->input->post();
		if ($this->input->post('kp_nama') == '') {
			$this->message('danger','Nama tidak boleh dikosongkan');
			redirect('C_home/visi');
		} else {
			if ($this->M_home->checkNama($this->input->post('kp_nama'))) {
				$this->message('danger','Nama sudah terdaftar');
				redirect('C_home/visi');
			}
		}
		
		$data['kp_created'] = date('Y-m-d H:i:s');
		$this->imageConf($dir = 'profil'); // Validation image
        if(!$this->upload->do_upload('kp_photo')) :
            $this->message('danger',strip_tags($this->upload->display_errors()));
        	redirect('C_home/visi');
        else :
    		$dataUpload = $this->upload->data();
			$data['kp_photo'] = $dataUpload['file_name'];
        endif;
    	$this->M_home->insertVisi($data);
    	$this->message('success','Data visi berhasil ditambah');
    	redirect('C_home/visi');
	}
		
	public function deleteVisi($id_visi = NULL) {
		if (!$id_visi) {
			redirect('C_home/visi');
		}
		$this->M_home->deleteVisiById($id_visi);
		$this->message('success','Data Visi berhasil dihapus');
		redirect('C_home/visi');
	}

	public function deleteAllVisi() {
		$query = "DELETE FROM ms_visi";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data visi berhasil dihapus'
		]);
		redirect('C_home/visi');
	}

	//PROFIL STRUKTUR//
	public function struktur() {
		$this->data['dataStruktur'] = $this->M_home->dataStruktur();
		$this->data['title'] = 'Data struktur - SMPN 19 BEKASI';
		$this->data['banner'] = 'Data struktur';
		$this->data['descBanner'] = 'Data struktur';
		$this->data['content'] = 'content/profil/list_struktur';
		$this->load->view('V_home',$this->data);
	}
	public function uploadStruktur() {
		if (!$this->input->post()) {
			redirect('C_home/struktur');
		}
		$data = $this->input->post();
		if ($this->input->post('kp_nama') == '') {
			$this->message('danger','Nama tidak boleh dikosongkan');
			redirect('C_home/struktur');
		} else {
			if ($this->M_home->checkNama($this->input->post('kp_nama'))) {
				$this->message('danger','Nama sudah terdaftar');
				redirect('C_home/struktur');
			}
		}
		
		$data['kp_created'] = date('Y-m-d H:i:s');
		$this->imageConf($dir = 'profil'); // Validation image
        if(!$this->upload->do_upload('kp_photo')) :
            $this->message('danger',strip_tags($this->upload->display_errors()));
        	redirect('C_home/struktur');
        else :
    		$dataUpload = $this->upload->data();
			$data['kp_photo'] = $dataUpload['file_name'];
        endif;
    	$this->M_home->insertStruktur($data);
    	$this->message('success','Data struktur berhasil ditambah');
    	redirect('C_home/struktur');
	}
	
	public function deleteStruktur($id_struktur = NULL) {
		if (!$id_struktur) {
			redirect('C_home/struktur');
		}
		$this->M_home->deleteStrukturById($id_struktur);
		$this->message('success','Data struktur berhasil dihapus');
		redirect('C_home/struktur');
	}

	public function deleteAllStruktur() {
		$query = "DELETE FROM ms_struktur";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data struktur berhasil dihapus'
		]);
		redirect('C_home/struktur');
	}

	//PROFIL GURU//
	public function guru() {
		$this->data['dataGuru'] = $this->M_home->dataGuru();
		$this->data['title'] = 'Data Guru - SMPN 19 BEKASI';
		$this->data['banner'] = 'Data Guru';
		$this->data['descBanner'] = 'Data Guru';
		$this->data['content'] = 'content/profil/list_guru';
		$this->load->view('V_home',$this->data);
	}
	public function uploadGuru() {
		if (!$this->input->post()) {
			redirect('C_home/guru');
		}
		$data = $this->input->post();
		if ($this->input->post('kp_nama') == '') {
			$this->message('danger','Nama tidak boleh dikosongkan');
			redirect('C_home/guru');
		} else {
			if ($this->M_home->checkNama($this->input->post('kp_nama'))) {
				$this->message('danger','Nama sudah terdaftar');
				redirect('C_home/guru');
			}
		}
		
		$data['kp_created'] = date('Y-m-d H:i:s');
		$this->imageConf($dir = 'profil'); // Validation image
        if(!$this->upload->do_upload('kp_photo')) :
            $this->message('danger',strip_tags($this->upload->display_errors()));
        	redirect('C_home/guru');
        else :
    		$dataUpload = $this->upload->data();
			$data['kp_photo'] = $dataUpload['file_name'];
        endif;
    	$this->M_home->insertGuru($data);
    	$this->message('success','Data Guru berhasil ditambah');
    	redirect('C_home/guru');
	}
	
	public function deleteGuru($id_guru = NULL) {
		if (!$id_guru) {
			redirect('C_home/guru');
		}
		$this->M_home->deleteGuruById($id_guru);
		$this->message('success','Data guru berhasil dihapus');
		redirect('C_home/guru');
	}

	public function deleteAllGuru() {
		$query = "DELETE FROM ms_guru";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data guru berhasil dihapus'
		]);
		redirect('C_home/guru');
	}

	//PROFIL TU//
	public function tu() {
		$this->data['dataTu'] = $this->M_home->dataTu();
		$this->data['title'] = 'Data TU - SMPN 19 BEKASI';
		$this->data['banner'] = 'Data TU';
		$this->data['descBanner'] = 'Data TU';
		$this->data['content'] = 'content/profil/list_tu';
		$this->load->view('V_home',$this->data);
	}
	public function uploadTu() {
		if (!$this->input->post()) {
			redirect('C_home/tu');
		}
		$data = $this->input->post();
		if ($this->input->post('kp_nama') == '') {
			$this->message('danger','Nama tidak boleh dikosongkan');
			redirect('C_home/tu');
		} else {
			if ($this->M_home->checkNama($this->input->post('kp_nama'))) {
				$this->message('danger','Nama sudah terdaftar');
				redirect('C_home/tu');
			}
		}
		
		$data['kp_created'] = date('Y-m-d H:i:s');
		$this->imageConf($dir = 'profil'); // Validation image
        if(!$this->upload->do_upload('kp_photo')) :
            $this->message('danger',strip_tags($this->upload->display_errors()));
        	redirect('C_home/tu');
        else :
    		$dataUpload = $this->upload->data();
			$data['kp_photo'] = $dataUpload['file_name'];
        endif;
    	$this->M_home->insertTu($data);
    	$this->message('success','Data TU berhasil ditambah');
    	redirect('C_home/tu');
	}
	
	public function deleteTu($id_tu = NULL) {
		if (!$id_tu) {
			redirect('C_home/tu');
		}
		$this->M_home->deleteTuById($id_tu);
		$this->message('success','Data TU berhasil dihapus');
		redirect('C_home/tu');
	}

	public function deleteAllTu() {
		$query = "DELETE FROM ms_tu";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data TU berhasil dihapus'
		]);
		redirect('C_home/tu');
	}

	//PROFIL SARANA//
	public function sarana() {
		$this->data['dataSarana'] = $this->M_home->dataSarana();
		$this->data['title'] = 'Data Sarana - SMPN 19 BEKASI';
		$this->data['banner'] = 'Data Sarana';
		$this->data['descBanner'] = 'Data Sarana';
		$this->data['content'] = 'content/profil/list_sarana';
		$this->load->view('V_home',$this->data);
	}
	public function uploadSarana() {
		if (!$this->input->post()) {
			redirect('C_home/sarana');
		}
		$data = $this->input->post();
		if ($this->input->post('kp_nama') == '') {
			$this->message('danger','Nama tidak boleh dikosongkan');
			redirect('C_home/sarana');
		} else {
			if ($this->M_home->checkNama($this->input->post('kp_nama'))) {
				$this->message('danger','Nama sudah terdaftar');
				redirect('C_home/sarana');
			}
		}
		
		$data['kp_created'] = date('Y-m-d H:i:s');
		$this->imageConf($dir = 'profil'); // Validation image
        if(!$this->upload->do_upload('kp_photo')) :
            $this->message('danger',strip_tags($this->upload->display_errors()));
        	redirect('C_home/sarana');
        else :
    		$dataUpload = $this->upload->data();
			$data['kp_photo'] = $dataUpload['file_name'];
        endif;
    	$this->M_home->insertSarana($data);
    	$this->message('success','Data Sarana berhasil ditambah');
    	redirect('C_home/sarana');
	}
	
	public function deleteSarana($id_sarana = NULL) {
		if (!$id_sarana) {
			redirect('C_home/sarana');
		}
		$this->M_home->deleteSaranaById($id_sarana);
		$this->message('success','Data Sarana berhasil dihapus');
		redirect('C_home/sarana');
	}

	public function deleteAllSarana() {
		$query = "DELETE FROM ms_sarana";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data sarana berhasil dihapus'
		]);
		redirect('C_home/sarana');
	}

	//KELULUSAN//
	public function kelulusan() {
		$this->data['dataKelulusan'] = $this->graduated->dataKelulusan();
		$this->data['title'] = 'Data Kelulusan - CLIMBERNET';
		$this->data['banner'] = 'Data Kelulusan';
		$this->data['descBanner'] = 'Data Kelulusan';
		$this->data['content'] = 'content/kelulusan/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_kelulusan($id_kelulusan = NULL) {
		if (!$id_kelulusan) {
			redirect('C_home/kelulusan');
		}
		$dataKelulusan = $this->graduated->getKelulusanById($id_kelulusan);
		if (!$dataKelulusan) {
			redirect('C_home/kelulusan');
		}
		$this->data['dataKelulusan'] = $dataKelulusan;
		$this->data['title'] = 'Edit Kelulusan - CLIMBERNET';
		$this->data['banner'] = 'Edit Kelulusan';
		$this->data['descBanner'] = 'Edit Kelulusan';
		$this->data['content'] = 'content/kelulusan/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllKelulusan() {
		$query = "DELETE FROM ms_kelulusan";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data kelulusan berhasil dihapus'
		]);
		redirect('C_home/kelulusan');
	}

	//PPDB//
	public function ppdb() {
		$this->data['dataPpdb'] = $this->graduated->dataPpdb();
		$this->data['title'] = 'Data PPDB - CLIMBERNET';
		$this->data['banner'] = 'Data Ppdb';
		$this->data['descBanner'] = 'Data Ppdb';
		$this->data['content'] = 'content/ppdb/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_ppdb($id_ppdb = NULL) {
		if (!$id_ppdb) {
			redirect('C_home/ppdb');
		}
		$dataPpdb = $this->graduated->getPpdbById($id_ppdb);
		if (!$dataPpdb) {
			redirect('C_home/ppdb');
		}
		$this->data['dataPpdb'] = $dataPpdb;
		$this->data['title'] = 'Edit PPDB - CLIMBERNET';
		$this->data['banner'] = 'Edit Ppdb';
		$this->data['descBanner'] = 'Edit Ppdb';
		$this->data['content'] = 'content/ppdb/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllPpdb() {
		$query = "DELETE FROM ms_ppdb";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data ppdb berhasil dihapus'
		]);
		redirect('C_home/ppdb');
	}


	// RAPORT KELAS 7//
	public function raport() {
		$this->data['dataRaport'] = $this->graduated->dataRaport();
		$this->data['title'] = 'Data Raport - CLIMBERNET';
		$this->data['banner'] = 'Data Raport KELAS 7';
		$this->data['descBanner'] = 'Data Raport';
		$this->data['content'] = 'content/raport/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_raport($id_raport = NULL) {
		if (!$id_raport) {
			redirect('C_home/raport');
		}
		$dataRaport = $this->graduated->getRaportById($id_raport);
		if (!$dataRaport) {
			redirect('C_home/raport');
		}
		$this->data['dataRaport'] = $dataRaport;
		$this->data['title'] = 'Edit Raport - CLIMBERNET';
		$this->data['banner'] = 'Edit Raport';
		$this->data['descBanner'] = 'Edit Raport';
		$this->data['content'] = 'content/raport/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllRaport() {
		$query = "DELETE FROM ms_raport";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data kelulusan berhasil dihapus'
		]);
		redirect('C_home/raport');
	}

	// RAPORT KELAS 8//
	public function raport8() {
		$this->data['dataRaport8'] = $this->graduated->dataRaport8();
		$this->data['title'] = 'Data Raport - CLIMBERNET';
		$this->data['banner'] = 'Data Raport KELAS 8';
		$this->data['descBanner'] = 'Data Raport';
		$this->data['content'] = 'content/raport8/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_raport8($id_raport = NULL) {
		if (!$id_raport) {
			redirect('C_home/raport8');
		}
		$dataRaport8 = $this->graduated->getRaportById8($id_raport);
		if (!$dataRaport8) {
			redirect('C_home/raport8');
		}
		$this->data['dataRaport8'] = $dataRaport8;
		$this->data['title'] = 'Edit Raport - CLIMBERNET';
		$this->data['banner'] = 'Edit Raport';
		$this->data['descBanner'] = 'Edit Raport';
		$this->data['content'] = 'content/raport8/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllRaport8() {
		$query = "DELETE FROM ms_raport8";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data kelulusan berhasil dihapus'
		]);
		redirect('C_home/raport8');
	}

	// RAPORT KELAS 9//
	public function raport9() {
		$this->data['dataRaport9'] = $this->graduated->dataRaport9();
		$this->data['title'] = 'Data Raport - CLIMBERNET';
		$this->data['banner'] = 'Data Raport KELAS 9';
		$this->data['descBanner'] = 'Data Raport';
		$this->data['content'] = 'content/raport9/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_raport9($id_raport = NULL) {
		if (!$id_raport) {
			redirect('C_home/raport9');
		}
		$dataRaport9 = $this->graduated->getRaportById9($id_raport);
		if (!$dataRaport9) {
			redirect('C_home/raport9');
		}
		$this->data['dataRaport9'] = $dataRaport9;
		$this->data['title'] = 'Edit Raport - CLIMBERNET';
		$this->data['banner'] = 'Edit Raport';
		$this->data['descBanner'] = 'Edit Raport';
		$this->data['content'] = 'content/raport9/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllRaport9() {
		$query = "DELETE FROM ms_raport9";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data kelulusan berhasil dihapus'
		]);
		redirect('C_home/raport9');
	}
	
	//RAPORT PAS//
	public function raportpas() {
		$this->data['dataRaportpas'] = $this->graduated->dataRaportpas();
		$this->data['title'] = 'Data Raport PAS - ClimberNet';
		$this->data['banner'] = 'Data Raport PAS';
		$this->data['descBanner'] = 'Data Raport PAS';
		$this->data['content'] = 'content/raport_pas/raportpas_list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_raportpas($id_raport = NULL) {
		if (!$id_raport) {
			redirect('C_home/raportpas');
		}
		$dataRaportpas = $this->graduated->getRaportByIdpas($id_raport);
		if (!$dataRaportpas) {
			redirect('C_home/raportpas');
		}
		$this->data['dataRaportpas'] = $dataRaportpas;
		$this->data['title'] = 'Edit Raport PAS - ClimberNet';
		$this->data['banner'] = 'Edit Raport PAS';
		$this->data['descBanner'] = 'Edit Raport PAS';
		$this->data['content'] = 'content/raport_pas/raportpas_edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllRaportpas() {
		$query = "DELETE FROM ms_raport_smp";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data raport berhasil dihapus'
		]);
		redirect('C_home/raportpas');
	}

	public function kepegawaian() {
		$this->data['dataKepegawaian'] = $this->M_home->getKepegawaian();
		$this->data['title'] = 'Data Kepegawaian - SMPN 9 BEKASI';
		$this->data['banner'] = 'Data Kepegawaian';
		$this->data['descBanner'] = 'Data Kepegawaian';
		$this->data['content'] = 'content/kepegawaian/list';
		$this->load->view('V_home',$this->data);
	}
	
	///UJIAN KELAS 7//
	public function ujian() {
		$this->data['dataUjian'] = $this->graduated->dataUjian();
		$this->data['title'] = 'Data Ujian - CLIMBERNET';
		$this->data['banner'] = 'Data Kelas 7';
		$this->data['descBanner'] = 'Data Kelas 7';
		$this->data['content'] = 'content/ujian/kelas7/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_ujian($id_ujian = NULL) {
		if (!$id_ujian) {
			redirect('C_home/ujian');
		}
		$dataUjian = $this->graduated->getUjianById($id_ujian);
		if (!$dataUjian) {
			redirect('C_home/ujian');
		}
		$this->data['dataUjian'] = $dataUjian;
		$this->data['title'] = 'Edit Ujian - CLIMBERNET';
		$this->data['banner'] = 'Edit Ujian';
		$this->data['descBanner'] = 'Edit Ujian';
		$this->data['content'] = 'content/ujian/kelas7/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllUjian() {
		$query = "DELETE FROM ms_ujian_smp";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data Ujian berhasil dihapus'
		]);
		redirect('C_home/ujian');
	}

	//UJIAN KELAS 8//
	public function ujian8() {
		$this->data['dataUjian8'] = $this->graduated->dataUjian8();
		$this->data['title'] = 'Data Ujian - CLIMBERNET';
		$this->data['banner'] = 'Data Kelas 8';
		$this->data['descBanner'] = 'Data Kelas 8';
		$this->data['content'] = 'content/ujian/kelas8/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_ujian8($id_ujian = NULL) {
		if (!$id_ujian) {
			redirect('C_home/ujian8');
		}
		$dataUjian8 = $this->graduated->getUjianById8($id_ujian);
		if (!$dataUjian8) {
			redirect('C_home/ujian8');
		}
		$this->data['dataUjian8'] = $dataUjian8;
		$this->data['title'] = 'Edit Ujian - CLIMBERNET';
		$this->data['banner'] = 'Edit Ujian 8';
		$this->data['descBanner'] = 'Edit Ujian 8';
		$this->data['content'] = 'content/ujian/kelas8/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllUjian8() {
		$query = "DELETE FROM ms_ujian8";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data Ujian berhasil dihapus'
		]);
		redirect('C_home/ujian8');
	}

	//UJIAN KELAS 9//
	public function ujian9() {
		$this->data['dataUjian9'] = $this->graduated->dataUjian9();
		$this->data['title'] = 'Data Ujian - CLIMBERNET';
		$this->data['banner'] = 'Data Kelas 9';
		$this->data['descBanner'] = 'Data Kelas 9';
		$this->data['content'] = 'content/ujian/kelas9/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_ujian9($id_ujian = NULL) {
		if (!$id_ujian) {
			redirect('C_home/ujian9');
		}
		$dataUjian9 = $this->graduated->getUjianById9($id_ujian);
		if (!$dataUjian9) {
			redirect('C_home/ujian9');
		}
		$this->data['dataUjian9'] = $dataUjian9;
		$this->data['title'] = 'Edit Ujian - CLIMBERNET';
		$this->data['banner'] = 'Edit Ujian 9';
		$this->data['descBanner'] = 'Edit Ujian 9';
		$this->data['content'] = 'content/ujian/kelas9/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllUjian9() {
		$query = "DELETE FROM ms_ujian9";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data Ujian berhasil dihapus'
		]);
		redirect('C_home/ujian9');
	}
	
	//LINK UJIAN KELAS //
	public function data_linkujian($kelas) {
		$this->data['kelas'] = $kelas;
		$this->data['dataLinkujian'] = $this->graduated->dataLinkujian($kelas);
		$this->data['title'] = 'Link Ujian Kelas '.$kelas.'  - CLIMBERNET';
		$this->data['banner'] = 'Link Ujian Kelas '.$kelas;
		$this->data['descBanner'] = 'Link Ujian Kelas '.$kelas;
		$this->data['content'] = 'content/ujian/link_ujian/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_linkujian($id_linkujian = NULL,$kelas = NULL) {
		if (!$id_linkujian) {
			redirect('C_home/linkujian');
		}
		$datalinkujian = $this->graduated->getLinkujianById($id_linkujian);
		if (!$datalinkujian) {
			redirect('C_home/linkujian');
		}
		$this->data['kelas'] = $kelas;
		$this->data['dataLinkujian'] = $datalinkujian;
		$this->data['title'] = 'Edit link ujian kelas '.$kelas.' - CLIMBERNET';
		$this->data['banner'] = 'Edit link ujian kelas  '.$kelas;
		$this->data['descBanner'] = 'Edit link ujian kelas '.$kelas;
		$this->data['content'] = 'content/ujian/link_ujian/edit';
		$this->load->view('V_home',$this->data);
	}
	public function linkujian_action($id_linkujian = NULL,$kelas = NULL) {

		if ($this->input->post()) {
			$data = $this->input->post();
			$kelas = $this->input->post('kelas');
			if ($this->input->post('id_linkujian')) {
				$this->graduated->UpdateLinkujian($data);
				$this->message('success','Data Link ujian berhasil diubah');
			} else {
				$this->graduated->insertLinkujian($data);
				$this->message('success','Data Link ujian berhasil ditambah');
			}
		} elseif($id_linkujian) {
			$this->graduated->deleteLinkujian($id_linkujian,$kelas);
			exit();
			$this->message('success','Data Link Ujian berhasil dihapus');
		}
		redirect('C_home/data_linkujian/'.$kelas);
	}

	// legger_nilai//
	public function legger_nilai() {
		$this->data['dataLeggerNilai'] = $this->graduated->dataLeggerNilai();
		$this->data['title'] = 'Data Legger Nilai - CLIMBERNET';
		$this->data['banner'] = 'Data Legger Nilai';
		$this->data['descBanner'] = 'Data Legger Nilai';
		$this->data['content'] = 'content/legger_nilai/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_legger_nilai($id_legger_nilai = NULL) {
		if (!$id_legger_nilai) {
			redirect('C_home/legger_nilai');
		}
		$dataLeggerNilai = $this->graduated->getLeggerNilaiById($id_legger_nilai);
		if (!$dataLeggerNilai) {
			redirect('C_home/legger_nilai');
		}
		$this->data['dataLeggerNilai'] = $dataLeggerNilai;
		$this->data['title'] = 'Edit legger nilai - CLIMBERNET';
		$this->data['banner'] = 'Edit Legger Nilai';
		$this->data['descBanner'] = 'Edit legger_nilai';
		$this->data['content'] = 'content/legger_nilai/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllleggerNilai() {
		$query = "DELETE FROM legger_nilai_pengetahuan";
		$query2 = "DELETE FROM legger_nilai_keterampilan";
		$this->db->query($query);
		$this->db->query($query2);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data legger nilai berhasil dihapus'
		]);
		redirect('C_home/legger_nilai');
	}
	public function printPdfleggerNilai()
	{

		$query = "SELECT lnp.*,mtk.* FROM legger_nilai_pengetahuan lnp inner join legger_nilai_keterampilan mtk on lnp.no_induk = mtk.no_induk";
		$lnp = $this->db->select('*')->get_compiled_select('legger_nilai_pengetahuan');
		$mtk = $this->db->select('*')->get_compiled_select('legger_nilai_keterampilan');
	    //$forum_categories = $this->db->select('name')->get_compiled_select('forum_categories');

		$query = $this->db->query($lnp.' UNION '.$mtk.' limit 2');

	    if ($query->num_rows() > 0) {
	        $data = $query->result_array();
	    } else {
	        return false;
	    }
        $this->load->library('Pdf');
        $html = $this->load->view('pdf/legger_nilai_student', ['data'=>$data], true);
        $this->pdf->createPDF($html, 'mypdf', false);

	}

	// TRYOUT//
	public function tryout() {
		$this->data['dataTryout'] = $this->graduated->dataTryout();
		$this->data['title'] = 'Data Tryout - CLIMBERNET';
		$this->data['banner'] = 'Data Tryout';
		$this->data['descBanner'] = 'Data Tryout';
		$this->data['content'] = 'content/tryout/list';
		$this->load->view('V_home',$this->data);	
	}
	public function edit_tryout($id_tryout = NULL) {
		if (!$id_tryout) {
			redirect('C_home/tryout');
		}
		$dataTryout = $this->graduated->getTryoutById($id_tryout);
		if (!$dataTryout) {
			redirect('C_home/tryout');
		}
		$this->data['dataTryout'] = $dataTryout;
		$this->data['title'] = 'Edit Tryout - CLIMBERNET';
		$this->data['banner'] = 'Edit Tryout';
		$this->data['descBanner'] = 'Edit Tryout';
		$this->data['content'] = 'content/tryout/edit';
		$this->load->view('V_home',$this->data);
	}
	public function deleteAllTryout() {
		$query = "DELETE FROM ms_tryout";
		$this->db->query($query);
		$this->session->set_flashdata([
				'alert' => 'success',
				'message' => 'Data Tryout berhasil dihapus'
		]);
		redirect('C_home/tryout');
	}
	
	// End Master Halaman

	// Profile
	public function editProfile()
	{
		if(isset($_POST['editProfile'])) {
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('full_name', 'full_name', 'required');
			$this->form_validation->set_message('required','Data tidak boleh kosong');
			if ($this->form_validation->run() == FALSE) {
				$this->data['title'] = 'Profile - CLIMBERNET';
				$this->data['banner'] = 'Profile';
				$this->data['descBanner'] = 'Anda bisa mengubah profile anda disini';
				$this->data['bread'] = 'profile';
				$this->data['content'] = 'content/profile/profile';
				$this->load->view('V_home',$this->data);
			} else {
				$upProfile = $this->M_home->upProfile();
				if($upProfile) {
					// Ubah Session
					$upSession = $this->M_home->upSession();
					$this->session->set_flashdata('alert-success', 'Profile berhasil diubah');
					redirect('C_home/profile');
				}
			}
		} else {
			redirect('C_home/profile');
		}
	}
	// End Profile

	// Users
	public function editUsers($id_admin)
	{
		if (empty($id_admin)) {
			redirect('C_home/users');
		} else {
			$getSingleUsers = $this->M_home->getSingleUsers($id_admin);
			$dUsers = array(
					'id_admin' => $id_admin,
					'username' => $getSingleUsers->username,
					'password' => $getSingleUsers->password,
					'nama_lengkap' => $getSingleUsers->nama_lengkap,
					'jabatan' => $getSingleUsers->jabatan,
					'level' => $getSingleUsers->level,
				);
			$this->data['dataUsers'] = $dUsers;
			$this->data['title'] = 'Edit Users '.$dUsers['nama_lengkap']. ' - CLIMBERNET';
			$this->data['banner'] = 'Edit User '.$dUsers['nama_lengkap'].'';
			$this->data['descBanner'] = 'Form edit user';
			$this->data['bread'] = '<a href="'.site_url('C_home/users').'">Users</a> > Edit User';
			$this->data['content'] = 'content/users/formEditUsers';
			$this->load->view('V_home',$this->data);
		}
	}
	public function doEditUser()
	{
		if (isset($_POST['editUser'])) {
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
			$this->form_validation->set_rules('level', 'level', 'required');
			$this->form_validation->set_message('required','Data tidak boleh kosong');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('alert-danger', 'Terjadi kesalahan saat mengubah data');
				redirect('C_home/users');
			} else {
				$upUser = $this->M_home->updateUser();
				if($this->input->post('id_admin')==$this->session->userdata('id_admin')) {
					$upSessionUser = $this->M_home->upSessionUser();
				} else {

				}
				$this->session->set_flashdata('alert-success', 'User berhasil diubah..');
				redirect('C_home/users');
			}
		} else {
			redirect('C_home/users');
		}
	}
	public function tambahUser()
	{
		if(isset($_POST['tambahUser'])) {
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
			$this->form_validation->set_rules('level', 'level', 'required');
			$this->form_validation->set_message('required','Data tidak boleh kosong');
			if ($this->form_validation->run() == FALSE) {
				$this->data['title'] = 'Tambah Users - CLIMBERNET';
				$this->data['banner'] = 'Tambah Users';
				$this->data['descBanner'] = 'Anda bisa menambah user di sini';
				$this->data['bread'] = '<a href="'.site_url('C_home/users').'">Users</a> > Tambah User';
				$this->data['content'] = 'content/users/formTambahUsers';
				$this->load->view('V_home',$this->data);
			} else {
				$cekUser = $this->M_home->cekUser();
				if($cekUser) {
					$this->session->set_flashdata('alert-danger', 'Maaf, username dan password sudah terdaftar..');
					redirect('C_home/users');
				} else {
					$tambahUser = $this->M_home->insertUser();
					$this->session->set_flashdata('alert-success', 'User berhasil ditambah..');
					redirect('C_home/users');
				}
				
			}
		} else {
			$this->data['title'] = 'Tambah Users - CLIMBERNET';
			$this->data['banner'] = 'Tambah Users';
			$this->data['descBanner'] = 'Anda bisa menambah user di sini';
			$this->data['bread'] = '<a href="'.site_url('C_home/users').'">Users</a> > Tambah User';
			$this->data['content'] = 'content/users/formTambahUsers';
			$this->load->view('V_home',$this->data);
		}
		
	}
	public function hapusUSers($id_admin)
	{
		if(empty($id_admin)) {
			redirect('C_home/users');
		} else {
			if($id_admin==$this->session->userdata('id_admin')) {
				$hapusUsers = $this->M_home->deleteUser($id_admin);
				$this->session->sess_destroy();
				$this->session->set_flashdata('alert', 'User anda telah terhapus, anda harus login dengan akun lain ...');
				redirect('C_home');
			} else {
				$hapusUsers = $this->M_home->deleteUser($id_admin);
				$this->session->set_flashdata('alert-success', 'User berhasil dihapus ...');
				redirect('C_home/users');
			}
		}
	}
	// End Users
	
	// IMPORT RAPORT PAS//
	public function import_raportpas() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$status = 'no';
		                	if ($sheet[$i]['G'] == 'yes') {
		                		$status = 'yes';
		                	}
		                	$single = [
		                		'no_induk' => $sheet[$i]['A'],
		                		'password' => crypt($sheet[$i]['B'],''),
		                		'nama_siswa' => $sheet[$i]['C'],
		                		'kelas' => $sheet[$i]['D'],
		                		'walas' => $sheet[$i]['E'],
		                		'no_raport' => $sheet[$i]['F'],
		                		'status' => $status,
		                		
		                	];
		                	if ($single['no_induk'] != '' OR $single['nama_siswa'] != '' OR $single['kelas'] != '' OR $single['walas'] != '' OR $single['no_raport'] != '') {
		                		if ($this->M_home->getRaportByNoIndukpas($single['no_induk'])) {
		                			$this->M_home->updateRaportpas($single);
		                		} else {
			                		$this->M_home->insertRaportpas($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data raport berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/raportpas');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/raportpas');
		}
	}

	//IMPORT KELULUSAN//
	public function import() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$lulus = 'no';
		                	if ($sheet[$i]['AA'] == 'yes') {
		                		$lulus = 'yes';
		                	}
		                	$single = [
		                		'no_ujian' => $sheet[$i]['A'],
								'nisn' => $sheet[$i]['B'],
		                		'nama_siswa' => $sheet[$i]['C'],
		                		'tempat_lahir' => $sheet[$i]['D'],
		                		'tanggal_lahir' => $sheet[$i]['E'],
								'asal_sekolah' => $sheet[$i]['F'],
		                		'n01' => $sheet[$i]['G'],
		                		'n02' => $sheet[$i]['H'],
		                		'n03' => $sheet[$i]['I'],
		                		'n04' => $sheet[$i]['J'],
		                		'n05' => $sheet[$i]['K'],
		                		'n06' => $sheet[$i]['L'],
		                		'n07' => $sheet[$i]['M'],
		                		'n08' => $sheet[$i]['N'],
		                		'n09' => $sheet[$i]['O'],
		                		'n10' => $sheet[$i]['P'],
		                		'n11' => $sheet[$i]['Q'],
		                		'rata' => $sheet[$i]['R'],
		                		'foto' => $sheet[$i]['S'],
								'no_surat' => $sheet[$i]['T'],
								'tanggal_rapat' => $sheet[$i]['U'],
								'tanggal_surat' => $sheet[$i]['V'],
								'tahun' => $sheet[$i]['W'],
								'kelas' => $sheet[$i]['X'],
								'ortu' => $sheet[$i]['Y'],
								'no_us' => $sheet[$i]['Z'],
		                		'lulus' => $lulus,
		                		'password' => crypt($sheet[$i]['AB'],'')
		                	];
		                	if ($single['no_ujian'] != '' OR $single['nama_siswa'] != '' OR $single['tempat_lahir'] != '' OR $single['tanggal_lahir'] != '' OR $single['nisn'] != '' OR $single['n01'] != '' OR $single['n02'] != '' OR $single['n03'] != '' OR $single['n04'] != '' OR $single['n05'] != '' OR $single['n06'] != '' OR $single['n07'] != '' OR $single['n08'] != '' OR $single['n09'] != '' OR $single['n10'] != '' OR $single['n11'] != '' OR $single['rata'] != '' OR $single['kelas'] != '' OR $single['no_un'] != '' OR $single['ortu'] != '' OR $single['foto'] != '') {
		                		if ($this->M_home->getKelulusanByNoUjian($single['no_ujian'])) {
		                			$this->M_home->updateKelulusan($single);
		                		} else {
			                		$this->M_home->insertKelulusan($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data siswa berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/kelulusan');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/kelulusan');
		}
	}

	//IMPORT EXCEL PPDB//
	public function importppdb() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$lulus = 'no';
		                	if ($sheet[$i]['E'] == 'yes') {
		                		$lulus = 'yes';
		                	}
		                	$single = [
		                		'no_daftar' => $sheet[$i]['A'],
		                		'nama_siswa' => $sheet[$i]['B'],
		                		'asal_sekolah' => $sheet[$i]['C'],
		                		'nisn' => $sheet[$i]['D'],
		                		'lulus' => $lulus,
		                	];
		                	if ($single['no_daftar'] != '' OR $single['nama_siswa'] != '' OR $single['asal_sekolah'] != '' OR $single['nisn'] != '') {
		                		if ($this->M_home->getPpdbByNoDaftar($single['no_daftar'])) {
		                			$this->M_home->updatePpdb($single);
		                		} else {
			                		$this->M_home->insertPpdb($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data siswa berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/ppdb');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/ppdb');
		}
	}

	// IMPORT RAPORT KELAS 7 //
	public function import_raport() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$lulus = 'no';
		                	if ($sheet[$i]['H'] == 'yes') {
		                		$lulus = 'yes';
		                	}
		                	$single = [
		                		'no_induk' => $sheet[$i]['A'],
		                		'nama_siswa' => $sheet[$i]['B'],
		                		'kelas' => $sheet[$i]['C'],
		                		'walas' => $sheet[$i]['D'],
		                		'P01' => $sheet[$i]['E'],
		                		'P02' => $sheet[$i]['F'],
		                		'P03' => $sheet[$i]['G'],
		                		'P04' => $sheet[$i]['H'],
		                		'P05' => $sheet[$i]['I'],
		                		'P06' => $sheet[$i]['J'],
		                		'P07' => $sheet[$i]['K'],
		                		'P08' => $sheet[$i]['L'],
		                		'P09' => $sheet[$i]['M'],
		                		'P10' => $sheet[$i]['N'],
		                		'P11' => $sheet[$i]['O'],
		                		'K01' => $sheet[$i]['P'],
		                		'K02' => $sheet[$i]['Q'],
		                		'K03' => $sheet[$i]['R'],
		                		'K04' => $sheet[$i]['S'],
		                		'K05' => $sheet[$i]['T'],
		                		'K06' => $sheet[$i]['U'],
		                		'K07' => $sheet[$i]['V'],
		                		'K08' => $sheet[$i]['W'],
		                		'K09' => $sheet[$i]['X'],
		                		'K10' => $sheet[$i]['Y'],
		                		'K11' => $sheet[$i]['Z'],
		                		'PTS01' => $sheet[$i]['AA'],
		                		'PTS02' => $sheet[$i]['AB'],
		                		'PTS03' => $sheet[$i]['AC'],
		                		'PTS04' => $sheet[$i]['AD'],
		                		'PTS05' => $sheet[$i]['AE'],
		                		'PTS06' => $sheet[$i]['AF'],
		                		'PTS07' => $sheet[$i]['AG'],
		                		'PTS08' => $sheet[$i]['AH'],
		                		'PTS09' => $sheet[$i]['AI'],
		                		'PTS10' => $sheet[$i]['AJ'],
		                		'PTS11' => $sheet[$i]['AK'],
		                		'sakit' => $sheet[$i]['AL'],
		                		'ijin' => $sheet[$i]['AM'],
		                		'alpa' => $sheet[$i]['AN'],
		                		
		                	];
		                	if ($single['no_induk'] != '' OR $single['nama_siswa'] != '' OR $single['kelas'] != '' OR $single['walas'] != '' OR $single['P01'] != '' OR $single['P02'] != '' OR $single['P03'] != '' OR $single['P04'] != ''  OR $single['P05'] != '' OR $single['P06'] != '' OR $single['P07'] != '' OR $single['P08'] != '' OR $single['P09'] != '' OR $single['P10'] != '' OR $single['P11'] != '' OR $single['K01'] != '' OR $single['K02'] != '' OR $single['K03'] != '' OR $single['K04'] != ''  OR $single['K05'] != '' OR $single['K06'] != '' OR $single['K07'] != '' OR $single['K08'] != '' OR $single['K09'] != '' OR $single['K10'] != '' OR $single['K11'] != '' OR $single['PTS01'] != '' OR $single['PTS02'] != '' OR $single['PTS03'] != '' OR $single['PTS04'] != ''  OR $single['PTS05'] != '' OR $single['PTS06'] != '' OR $single['PTS07'] != '' OR $single['PTS08'] != '' OR $single['PTS09'] != '' OR $single['PTS10'] != '' OR $single['PTS11'] != '' OR $single['sakit'] != '' OR $single['ijin'] != '' OR $single['alpa'] != '') {
		                		if ($this->M_home->getRaportByNoInduk($single['no_induk'])) {
		                			$this->M_home->updateRaport($single);
		                		} else {
			                		$this->M_home->insertRaport($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data raport berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/raport');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/raport');
		}
	}

	// IMPORT RAPORT KELAS 8 //
	public function import_raport8() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$lulus = 'no';
		                	if ($sheet[$i]['H'] == 'yes') {
		                		$lulus = 'yes';
		                	}
		                	$single = [
		                		'no_induk' => $sheet[$i]['A'],
		                		'nama_siswa' => $sheet[$i]['B'],
		                		'kelas' => $sheet[$i]['C'],
		                		'walas' => $sheet[$i]['D'],
		                		'P01' => $sheet[$i]['E'],
		                		'P02' => $sheet[$i]['F'],
		                		'P03' => $sheet[$i]['G'],
		                		'P04' => $sheet[$i]['H'],
		                		'P05' => $sheet[$i]['I'],
		                		'P06' => $sheet[$i]['J'],
		                		'P07' => $sheet[$i]['K'],
		                		'P08' => $sheet[$i]['L'],
		                		'P09' => $sheet[$i]['M'],
		                		'P10' => $sheet[$i]['N'],
		                		'P11' => $sheet[$i]['O'],
		                		'K01' => $sheet[$i]['P'],
		                		'K02' => $sheet[$i]['Q'],
		                		'K03' => $sheet[$i]['R'],
		                		'K04' => $sheet[$i]['S'],
		                		'K05' => $sheet[$i]['T'],
		                		'K06' => $sheet[$i]['U'],
		                		'K07' => $sheet[$i]['V'],
		                		'K08' => $sheet[$i]['W'],
		                		'K09' => $sheet[$i]['X'],
		                		'K10' => $sheet[$i]['Y'],
		                		'K11' => $sheet[$i]['Z'],
		                		'PTS01' => $sheet[$i]['AA'],
		                		'PTS02' => $sheet[$i]['AB'],
		                		'PTS03' => $sheet[$i]['AC'],
		                		'PTS04' => $sheet[$i]['AD'],
		                		'PTS05' => $sheet[$i]['AE'],
		                		'PTS06' => $sheet[$i]['AF'],
		                		'PTS07' => $sheet[$i]['AG'],
		                		'PTS08' => $sheet[$i]['AH'],
		                		'PTS09' => $sheet[$i]['AI'],
		                		'PTS10' => $sheet[$i]['AJ'],
		                		'PTS11' => $sheet[$i]['AK'],
		                		'sakit' => $sheet[$i]['AL'],
		                		'ijin' => $sheet[$i]['AM'],
		                		'alpa' => $sheet[$i]['AN'],
		                		
		                	];
		                	if ($single['no_induk'] != '' OR $single['nama_siswa'] != '' OR $single['kelas'] != '' OR $single['walas'] != '' OR $single['P01'] != '' OR $single['P02'] != '' OR $single['P03'] != '' OR $single['P04'] != ''  OR $single['P05'] != '' OR $single['P06'] != '' OR $single['P07'] != '' OR $single['P08'] != '' OR $single['P09'] != '' OR $single['P10'] != '' OR $single['P11'] != '' OR $single['K01'] != '' OR $single['K02'] != '' OR $single['K03'] != '' OR $single['K04'] != ''  OR $single['K05'] != '' OR $single['K06'] != '' OR $single['K07'] != '' OR $single['K08'] != '' OR $single['K09'] != '' OR $single['K10'] != '' OR $single['K11'] != '' OR $single['PTS01'] != '' OR $single['PTS02'] != '' OR $single['PTS03'] != '' OR $single['PTS04'] != ''  OR $single['PTS05'] != '' OR $single['PTS06'] != '' OR $single['PTS07'] != '' OR $single['PTS08'] != '' OR $single['PTS09'] != '' OR $single['PTS10'] != '' OR $single['PTS11'] != '' OR $single['sakit'] != '' OR $single['ijin'] != '' OR $single['alpa'] != '') {
		                		if ($this->M_home->getRaportByNoInduk8($single['no_induk'])) {
		                			$this->M_home->updateRaport8($single);
		                		} else {
			                		$this->M_home->insertRaport8($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data raport berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/raport8');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/raport8');
		}
	}

	// IMPORT RAPORT KELAS 9 //
	public function import_raport9() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$lulus = 'no';
		                	if ($sheet[$i]['H'] == 'yes') {
		                		$lulus = 'yes';
		                	}
		                	$single = [
		                		'no_induk' => $sheet[$i]['A'],
		                		'nama_siswa' => $sheet[$i]['B'],
		                		'kelas' => $sheet[$i]['C'],
		                		'walas' => $sheet[$i]['D'],
		                		'P01' => $sheet[$i]['E'],
		                		'P02' => $sheet[$i]['F'],
		                		'P03' => $sheet[$i]['G'],
		                		'P04' => $sheet[$i]['H'],
		                		'P05' => $sheet[$i]['I'],
		                		'P06' => $sheet[$i]['J'],
		                		'P07' => $sheet[$i]['K'],
		                		'P08' => $sheet[$i]['L'],
		                		'P09' => $sheet[$i]['M'],
		                		'P10' => $sheet[$i]['N'],
		                		'P11' => $sheet[$i]['O'],
		                		'K01' => $sheet[$i]['P'],
		                		'K02' => $sheet[$i]['Q'],
		                		'K03' => $sheet[$i]['R'],
		                		'K04' => $sheet[$i]['S'],
		                		'K05' => $sheet[$i]['T'],
		                		'K06' => $sheet[$i]['U'],
		                		'K07' => $sheet[$i]['V'],
		                		'K08' => $sheet[$i]['W'],
		                		'K09' => $sheet[$i]['X'],
		                		'K10' => $sheet[$i]['Y'],
		                		'K11' => $sheet[$i]['Z'],
		                		'PTS01' => $sheet[$i]['AA'],
		                		'PTS02' => $sheet[$i]['AB'],
		                		'PTS03' => $sheet[$i]['AC'],
		                		'PTS04' => $sheet[$i]['AD'],
		                		'PTS05' => $sheet[$i]['AE'],
		                		'PTS06' => $sheet[$i]['AF'],
		                		'PTS07' => $sheet[$i]['AG'],
		                		'PTS08' => $sheet[$i]['AH'],
		                		'PTS09' => $sheet[$i]['AI'],
		                		'PTS10' => $sheet[$i]['AJ'],
		                		'PTS11' => $sheet[$i]['AK'],
		                		'sakit' => $sheet[$i]['AL'],
		                		'ijin' => $sheet[$i]['AM'],
		                		'alpa' => $sheet[$i]['AN'],
		                		
		                	];
		                	if ($single['no_induk'] != '' OR $single['nama_siswa'] != '' OR $single['kelas'] != '' OR $single['walas'] != '' OR $single['P01'] != '' OR $single['P02'] != '' OR $single['P03'] != '' OR $single['P04'] != ''  OR $single['P05'] != '' OR $single['P06'] != '' OR $single['P07'] != '' OR $single['P08'] != '' OR $single['P09'] != '' OR $single['P10'] != '' OR $single['P11'] != '' OR $single['K01'] != '' OR $single['K02'] != '' OR $single['K03'] != '' OR $single['K04'] != ''  OR $single['K05'] != '' OR $single['K06'] != '' OR $single['K07'] != '' OR $single['K08'] != '' OR $single['K09'] != '' OR $single['K10'] != '' OR $single['K11'] != '' OR $single['PTS01'] != '' OR $single['PTS02'] != '' OR $single['PTS03'] != '' OR $single['PTS04'] != ''  OR $single['PTS05'] != '' OR $single['PTS06'] != '' OR $single['PTS07'] != '' OR $single['PTS08'] != '' OR $single['PTS09'] != '' OR $single['PTS10'] != '' OR $single['PTS11'] != '' OR $single['sakit'] != '' OR $single['ijin'] != '' OR $single['alpa'] != '') {
		                		if ($this->M_home->getRaportByNoInduk9($single['no_induk'])) {
		                			$this->M_home->updateRaport9($single);
		                		} else {
			                		$this->M_home->insertRaport9($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data raport berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/raport9');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/raport9');
		}
	}

	//KEPEGAWAIAN
	public function uploadKepegawaian() {
		if (!$this->input->post()) {
			redirect('C_home/kepegawaian');
		}
		$data = $this->input->post();
		if ($this->input->post('kp_ktp') == '') {
			$this->message('danger','KTP tidak boleh dikosongkan');
			redirect('C_home/kepegawaian');
		} else {
			if ($this->M_home->checkKtp($this->input->post('kp_ktp'))) {
				$this->message('danger','KTP sudah terdaftar');
				redirect('C_home/kepegawaian');
			}
		}

		// $data['kp_password'] = crypt($data['kp_password'],'');
		$data['kp_created'] = date('Y-m-d H:i:s');
		$this->imageConf($dir = 'kepegawaian'); // Validation image
        if(!$this->upload->do_upload('kp_photo')) :
            $this->message('danger',strip_tags($this->upload->display_errors()));
        	redirect('C_home/kepegawaian');
        else :
    		$dataUpload = $this->upload->data();
			$data['kp_photo'] = $dataUpload['file_name'];
        endif;
    	$this->M_home->insertKepegawaian($data);
    	$this->message('success','Data kepegawaian berhasil ditambah');
    	redirect('C_home/kepegawaian');
	}
	public function edit_kepegawaian($id_kp = NULL) {
		if (!$id_kp) {
			redirect('C_home/kepegawaian');
		}
		$dataKp = $this->M_home->getKpById($id_kp);
		if (!$dataKp) {
			redirect('C_home/kepegawaian');
		}
		$this->data['dataKp'] = $dataKp;
		$this->data['title'] = 'Data Kepegawaian - CLIMBERNET';
		$this->data['banner'] = 'Data Kepegawaian';
		$this->data['descBanner'] = 'Data Kepegawaian';
		$this->data['content'] = 'content/kepegawaian/edit';
		$this->load->view('V_home',$this->data);
	}
	public function updateKepegawaian() {
		if (!$this->input->post()) {
			redirect('C_home/kepegawaian');
		}
		$data = $this->input->post();
		if ($this->input->post('kp_ktp') == '') {
			$this->message('danger','KTP tidak boleh kosong');
			redirect('C_home/kepegawaian');
		}

		// if ($data['kp_password'] != '') {
		// 	$data['kp_password'] = crypt($data['kp_password'],'');
		// } else {
		// 	unset($data['kp_password']);
		// }

		if ($_FILES['kp_photo']['name']) {
			$this->imageConf($dir = 'kepegawaian'); // Validation image
	        if(!$this->upload->do_upload('kp_photo')) :
	            $this->message('danger',strip_tags($this->upload->display_errors()));
	        	redirect('C_home/kepegawaian');
	        else :
	    		$dataUpload = $this->upload->data();
				$data['kp_photo'] = $dataUpload['file_name'];
	        endif;
		}

    	$this->M_home->updateKepegawaian($data);
    	$this->message('success','Data kepegawaian berhasil diubah');
    	redirect('C_home/kepegawaian');
	}
	public function importKepegawaian() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
		                		'kp_nama' => $sheet[$i]['A'],
								// 'kp_password' => $sheet[$i]['B'],
								'kp_ttl' => $sheet[$i]['B'],
								'kp_ktp' => $sheet[$i]['C'],
								'kp_status_kepegawaian' => $sheet[$i]['D'],
								'kp_sk_kepegawaian' => $sheet[$i]['E'],
								'kp_tahun_bekerja' => $sheet[$i]['F'],
								'kp_asal_kuliah' => $sheet[$i]['G'],
								'kp_ijasah' => $sheet[$i]['H'],
								'kp_program_studi' => $sheet[$i]['I'],
								'kp_seri_ijasah' => $sheet[$i]['J'],
								'kp_mapel' => $sheet[$i]['K'],
								'kp_tugas_tambahan' => $sheet[$i]['L'],
								'kp_nip' => $sheet[$i]['M'],
								'kp_nuptk' => $sheet[$i]['N'],
								'kp_no_sertifikat_guru' => $sheet[$i]['O'],
		                	];
		                	// if ($single['kp_password'] == '') {
		                	// 	$single['kp_password'] = crypt('admin123','');
		                	// } else {
		                	// 	$single['kp_password'] = crypt($single['kp_password'],'');
		                	// }
		                	if ($single['kp_ktp'] != '' OR $single['kp_nama'] != '') {
		                		if ($this->M_home->checkKtp($single['kp_ktp'])) {
		                			$this->M_home->updateKepegawaianByKtp($single);
		                		} else {
			                		$this->M_home->insertKepegawaian($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data kepegawaian berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/kepegawaian');
	        }
		} else {
			$this->message('danger','Tidak ada file yang dipilih');
			redirect('C_home/kepegawaian');
		}
	}
	public function deleteKepegawaian($id_kp = NULL) {
		if (!$id_kp) {
			redirect('C_home/kepegawaian');
		}
		$this->M_home->deletePegawaiById($id_kp);
		$this->message('success','Data pegawai berhasil dihapus');
		redirect('C_home/kepegawaian');
	}
	public function deleteAllPegawai() {
		$this->M_home->deleteAllPegawai();
		$this->message('success','Data kepegawaian berhasil dihapus');
		redirect('C_home/kepegawaian');
	}

	//SISWA
	public function siswa() {
		$this->data['dataSiswa'] = $this->M_home->dataSiswa();
		$this->data['title'] = 'Data Siswa - CLIMBERNET';
		$this->data['banner'] = 'Data Siswa';
		$this->data['descBanner'] = 'Data Siswa';
		$this->data['content'] = 'content/siswa/list';
		$this->load->view('V_home',$this->data);	
	}
	public function uploadSiswa() {
		if (!$this->input->post()) {
			redirect('C_home/siswa');
		}
		$data = $this->input->post();
		if ($data['ks_nama'] == '' OR $data['ks_nis'] == '') {
			$this->message('success','Nama dan NIS tidak boleh kosong');
			redirect('C_home/siswa');
		} elseif ($this->M_home->checkNisSiswa($data['ks_nis'])) {
			$this->message('success','NIS telah terdaftar');
			redirect('C_home/siswa');
		}
		$data['ks_created'] = date('Y-m-d H:i:s');
		$this->M_home->insertSiswa($data);
		$this->message('success','Data siswa berhasil ditambah');
		redirect('C_home/siswa');
	}
	public function edit_siswa($id_ks = NULL) {
		if (!$id_ks) {
			redirect('C_home/siswa');
		}
		$dataKs = $this->M_home->getSiswaById($id_ks);
		if (!$dataKs) {
			redirect('C_home/siswa');
		}
		$this->data['dataKs'] = $dataKs;
		$this->data['title'] = 'Data Siswa - CLIMBERNET';
		$this->data['banner'] = 'Data Siswa';
		$this->data['descBanner'] = 'Data Siswa';
		$this->data['content'] = 'content/siswa/edit';
		$this->load->view('V_home',$this->data);
	}
	public function updateSiswa() {
		if (!$this->input->post()) {
			redirect('C_home/siswa');
		}
		$data = $this->input->post();
		if ($data['ks_nama'] == '' OR $data['ks_nis'] == '') {
			$this->message('success','Nama dan NIS tidak boleh kosong');
			redirect('C_home/siswa');
		}

		$this->M_home->updateSiswa($data);
		$this->message('success','Data siswa berhasil diubah');
		redirect('C_home/siswa');
	}
	public function deleteSiswa($id_ks = NULL) {
		if (!$id_ks) {
			redirect('C_home/siswa');
		}
		$this->M_home->deleteSiswaById($id_ks);
		$this->message('success','Data siswa berhasil dihapus');
		redirect('C_home/siswa');
	}
	public function importSiswa() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
		                		'ks_nis' => $sheet[$i]['A'],
								'ks_nisn' => $sheet[$i]['B'],
								'ks_nama' => $sheet[$i]['C'],
								'ks_jk' => $sheet[$i]['D'],
								'ks_kelas' => $sheet[$i]['E'],
								'ks_tempat_lahir' => $sheet[$i]['F'],
								'ks_tanggal_lahir' => $sheet[$i]['G'],
								'ks_alamat' => $sheet[$i]['H'],
								'ks_created' => date('Y-m-d H:i:s')
		                	];
		                	if ($single['ks_nis'] != '' OR $single['ks_nama'] != '') {
		                		if ($this->M_home->checkNisSiswa($single['ks_nis'])) {
		                			$this->M_home->updateSiswa($single);
		                		} else {
			                		$this->M_home->insertSiswa($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data siswa berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/siswa');
	        }
		} else {
			$this->message('danger','Tidak ada file yang dipilih');
			redirect('C_home/kepegawaian');
		}
	}
	public function deleteAllSiswa() {
		$this->M_home->deleteAllSiswa();
		$this->message('success','Data siswa berhasil dihapus');
		redirect('C_home/siswa');
	}
	
	//import UJIAN KELAS 7//
	public function import_ujian() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
					for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
								'ks_nis' => $sheet[$i]['A'],
								'ks_nisn' => $sheet[$i]['B'],
								'ks_nama' => $sheet[$i]['C'],
								'ks_kelas' => $sheet[$i]['D'],
								'ks_walas' => $sheet[$i]['E'],
								'ks_password' => crypt($sheet[$i]['F'],''),
								'ks_created' => date('Y-m-d H:i:s')
							];
		                	if ($single['ks_nis'] != '' OR $single['ks_nisn'] != '' OR $single['ks_nama'] != '' OR $single['ks_kelas'] != '' OR $single['ks_walas'] != ''  ) {
		                		if ($this->M_home->getUjianByNis($single['ks_nis'])) {
		                			$this->M_home->updateUjian($single);
		                		} else {
			                		$this->M_home->insertUjian($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data Ujian berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/ujian');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/ujian');
		}
	}

	//import UJIAN KELAS 8//
	public function import_ujian8() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
					for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
								'ks_nis' => $sheet[$i]['A'],
								'ks_nisn' => $sheet[$i]['B'],
								'ks_nama' => $sheet[$i]['C'],
								'ks_kelas' => $sheet[$i]['D'],
								'ks_walas' => $sheet[$i]['E'],
								'ks_password' => crypt($sheet[$i]['F'],''),
								'ks_created' => date('Y-m-d H:i:s')
							];
		                	if ($single['ks_nis'] != '' OR $single['ks_nisn'] != '' OR $single['ks_nama'] != '' OR $single['ks_kelas'] != '' OR $single['ks_walas'] != ''  ) {
		                		if ($this->M_home->getUjianByNis8($single['ks_nis'])) {
		                			$this->M_home->updateUjian8($single);
		                		} else {
			                		$this->M_home->insertUjian8($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data Ujian berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/ujian8');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/ujian8');
		}
	}

	//import UJIAN KELAS 9//
	public function import_ujian9() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
					for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
								'ks_nis' => $sheet[$i]['A'],
								'ks_nisn' => $sheet[$i]['B'],
								'ks_nama' => $sheet[$i]['C'],
								'ks_kelas' => $sheet[$i]['D'],
								'ks_walas' => $sheet[$i]['E'],
								'ks_password' => crypt($sheet[$i]['F'],''),
								'ks_created' => date('Y-m-d H:i:s')
							];
		                	if ($single['ks_nis'] != '' OR $single['ks_nisn'] != '' OR $single['ks_nama'] != '' OR $single['ks_kelas'] != '' OR $single['ks_walas'] != ''  ) {
		                		if ($this->M_home->getUjianByNis9($single['ks_nis'])) {
		                			$this->M_home->updateUjian9($single);
		                		} else {
			                		$this->M_home->insertUjian9($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data Ujian berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/ujian9');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/ujian9');
		}
	}
	
	// IMPORT NILAI TRYOUT //
	public function import_tryout() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
		                		'no_induk' => $sheet[$i]['A'],
								'no_peserta' => $sheet[$i]['B'],
		                		'nama_siswa' => $sheet[$i]['C'],
		                		'kelas' => $sheet[$i]['D'],
		                		'walas' => $sheet[$i]['E'],
								'nip' => $sheet[$i]['F'],
								'semester' => $sheet[$i]['G'],
								'tahun' => $sheet[$i]['H'],
								'tanggal' => $sheet[$i]['I'],
								'a01' => $sheet[$i]['J'],
								'a02' => $sheet[$i]['K'],
								'a03' => $sheet[$i]['L'],
								'a04' => $sheet[$i]['M'],
								'a05' => $sheet[$i]['N'],
								'a06' => $sheet[$i]['O'],
								'a07' => $sheet[$i]['P'],
								'a08' => $sheet[$i]['Q'],
								'a09' => $sheet[$i]['R'],
								'a10' => $sheet[$i]['S'],
								'a11' => $sheet[$i]['T'],
								'jumlah_a' => $sheet[$i]['U'],
								'rata_a' => $sheet[$i]['V'],
								'b01' => $sheet[$i]['W'],
								'b02' => $sheet[$i]['X'],
								'b03' => $sheet[$i]['Y'],
								'b04' => $sheet[$i]['Z'],
								'b05' => $sheet[$i]['AA'],
								'b06' => $sheet[$i]['AB'],
								'b07' => $sheet[$i]['AC'],
								'b08' => $sheet[$i]['AD'],
								'b09' => $sheet[$i]['AE'],
								'b10' => $sheet[$i]['AF'],
								'b11' => $sheet[$i]['AG'],
								'jumlah_b' => $sheet[$i]['AH'],
								'rata_b' => $sheet[$i]['AI'],
								'c01' => $sheet[$i]['AJ'],
								'c02' => $sheet[$i]['AK'],
								'c03' => $sheet[$i]['AL'],
								'c04' => $sheet[$i]['AM'],
								'c05' => $sheet[$i]['AN'],
								'c06' => $sheet[$i]['AO'],
								'c07' => $sheet[$i]['AP'],
								'c08' => $sheet[$i]['AQ'],
								'c09' => $sheet[$i]['AR'],
								'c10' => $sheet[$i]['AS'],
								'c11' => $sheet[$i]['AT'],
								'jumlah_c' => $sheet[$i]['AU'],
								'rata_c' => $sheet[$i]['AV'],
								'd01' => $sheet[$i]['AW'],
								'd02' => $sheet[$i]['AX'],
								'd03' => $sheet[$i]['AY'],
								'd04' => $sheet[$i]['AZ'],
								'd05' => $sheet[$i]['BA'],
								'd06' => $sheet[$i]['BB'],
								'd07' => $sheet[$i]['BC'],
								'd08' => $sheet[$i]['BD'],
								'd09' => $sheet[$i]['BE'],
								'd10' => $sheet[$i]['BF'],
								'd11' => $sheet[$i]['BG'],
								'jumlah_d' => $sheet[$i]['BH'],
								'rata_d' => $sheet[$i]['BI'],
								'e01' => $sheet[$i]['BJ'],
								'e02' => $sheet[$i]['BK'],
								'e03' => $sheet[$i]['BL'],
								'e04' => $sheet[$i]['BM'],
								'e05' => $sheet[$i]['BN'],
								'e06' => $sheet[$i]['BO'],
								'e07' => $sheet[$i]['BP'],
								'e08' => $sheet[$i]['BQ'],
								'e09' => $sheet[$i]['BR'],
								'e10' => $sheet[$i]['BS'],
								'e11' => $sheet[$i]['BT'],
								'jumlah_e' => $sheet[$i]['BU'],
								'rata_e' => $sheet[$i]['BV'],
		                	];
		                	if ($single['no_induk'] != '' OR $single['nama_siswa'] != '' OR $single['kelas'] != '' OR $single['walas'] != '' ) {
		                		if ($this->M_home->getTryoutByNoInduk($single['no_induk'])) {
		                			$this->M_home->updateTryout($single);
		                		} else {
			                		$this->M_home->insertTryout($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }
	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data Tryout berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload');
				redirect('C_home/tryout');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/tryout');
		}
	}
	
	// IMPORT LEGGER NILAI //
	public function import_legger_nilai() {
		// ACTIONS //
		if ($_FILES['fileExcel']['name']) {
			ini_set('memory_limit', '-1');
	        $filer = "";
	        $path = 'assets/uploads';
	        $config['upload_path'] = $path;
	        $config['allowed_types'] = 'xlsx|xls|csv';
	        $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('fileExcel')){
	            echo $this->upload->display_errors();
	            die;
	        } else {
	            $data = array('upload_data' => $this->upload->data());
	            $upload_data = $this->upload->data();
	            $filer = $upload_data['file_name'];
	            $thefile = $path.'/'.$filer;
	            try {
	                $obj = PHPExcel_IOFactory::load($thefile);
	                //LeggerNilai pengetahuan
	                $obj->setActiveSheetIndex(0);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failure = 0;
	                $success = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
		                		'no_induk' => $sheet[$i]['A'],
								'no_peserta' => $sheet[$i]['B'],
								'nama_siswa' => $sheet[$i]['C'],
								'kelas' => $sheet[$i]['D'],
								'nis' => $sheet[$i]['E'],
								'nisn' => $sheet[$i]['F'],
								'jenis_kelamin' => $sheet[$i]['G'],
								'agama' => $sheet[$i]['H'],
								'alamat' => $sheet[$i]['I'],
								'nama_orangtua' => $sheet[$i]['J'],
								'walas' => $sheet[$i]['K'],
								'nip' => $sheet[$i]['L'],
								'semester' => $sheet[$i]['M'],
								'tahun' => $sheet[$i]['N'],
								'tanggal' => $sheet[$i]['O'],
								'a01' => $sheet[$i]['P'],
								'a02' => $sheet[$i]['Q'],
								'a03' => $sheet[$i]['R'],
								'a04' => $sheet[$i]['S'],
								'a05' => $sheet[$i]['T'],
								'a06' => $sheet[$i]['U'],
								'a07' => $sheet[$i]['V'],
								'a08' => $sheet[$i]['W'],
								'a09' => $sheet[$i]['X'],
								'a10' => $sheet[$i]['Y'],
								'a11' => $sheet[$i]['Z'],
								'jumlah_a' => $sheet[$i]['AA'],
								'rata_a' => $sheet[$i]['AB'],
								'b01' => $sheet[$i]['AC'],
								'b02' => $sheet[$i]['AD'],
								'b03' => $sheet[$i]['AE'],
								'b04' => $sheet[$i]['AF'],
								'b05' => $sheet[$i]['AG'],
								'b06' => $sheet[$i]['AH'],
								'b07' => $sheet[$i]['AI'],
								'b08' => $sheet[$i]['AJ'],
								'b09' => $sheet[$i]['AK'],
								'b10' => $sheet[$i]['AL'],
								'b11' => $sheet[$i]['AM'],
								'jumlah_b' => $sheet[$i]['AN'],
								'rata_b' => $sheet[$i]['AO'],
								'c01' => $sheet[$i]['AP'],
								'c02' => $sheet[$i]['AQ'],
								'c03' => $sheet[$i]['AR'],
								'c04' => $sheet[$i]['AS'],
								'c05' => $sheet[$i]['AT'],
								'c06' => $sheet[$i]['AU'],
								'c07' => $sheet[$i]['AV'],
								'c08' => $sheet[$i]['AW'],
								'c09' => $sheet[$i]['AX'],
								'c10' => $sheet[$i]['AY'],
								'c11' => $sheet[$i]['AZ'],
								'jumlah_c' => $sheet[$i]['BA'],
								'rata_c' => $sheet[$i]['BB'],
								'd01' => $sheet[$i]['BC'],
								'd02' => $sheet[$i]['BD'],
								'd03' => $sheet[$i]['BE'],
								'd04' => $sheet[$i]['BF'],
								'd05' => $sheet[$i]['BG'],
								'd06' => $sheet[$i]['BH'],
								'd07' => $sheet[$i]['BI'],
								'd08' => $sheet[$i]['BJ'],
								'd09' => $sheet[$i]['BK'],
								'd10' => $sheet[$i]['BL'],
								'd11' => $sheet[$i]['BM'],
								'jumlah_d' => $sheet[$i]['BN'],
								'rata_d' => $sheet[$i]['BO'],
								'e01' => $sheet[$i]['BP'],
								'e02' => $sheet[$i]['BQ'],
								'e03' => $sheet[$i]['BR'],
								'e04' => $sheet[$i]['BS'],
								'e05' => $sheet[$i]['BT'],
								'e06' => $sheet[$i]['BU'],
								'e07' => $sheet[$i]['BV'],
								'e08' => $sheet[$i]['BW'],
								'e09' => $sheet[$i]['BX'],
								'e10' => $sheet[$i]['BY'],
								'e11' => $sheet[$i]['BZ'],
								'jumlah_e' => $sheet[$i]['CA'],
								'rata_e' => $sheet[$i]['CB'],
								'f01' => $sheet[$i]['CC'],
								'f02' => $sheet[$i]['CD'],
								'f03' => $sheet[$i]['CE'],
								'f04' => $sheet[$i]['CF'],
								'f05' => $sheet[$i]['CG'],
								'f06' => $sheet[$i]['CH'],
								'f07' => $sheet[$i]['CI'],
								'f08' => $sheet[$i]['CJ'],
								'f09' => $sheet[$i]['CK'],
								'f10' => $sheet[$i]['CL'],
								'f11' => $sheet[$i]['CM'],
								'jumlah_f' => $sheet[$i]['CN'],
								'rata_f' => $sheet[$i]['CO']
		                	];
		                	if ($single['no_induk'] != '' OR $single['nama_siswa'] != '' OR $single['kelas'] != '' OR $single['walas'] != '' ) {
		                		if ($this->M_home->getLeggerNilaiByNoInduk($single['no_induk'])) {
		                			$this->M_home->updateLeggerNilai($single);
		                		} else {
			                		$this->M_home->insertLeggerNilai($single);
		                		}
			                	$success++;
		                	} else {
		                		$failure++;
		                	}
	                	}
	                }

	                //LeggerNilai keterampilan
	                $obj->setActiveSheetIndex(1);
	                $sheet = $obj->getActiveSheet()->toArray(null,true,true,true);
	                $hirow = $obj->getActiveSheet()->getHighestRow();
	                $rows = count($sheet);
	                $rower = array();
	                $failureKeterampilan = 0;
	                $successKeterampilan = 0;
	                //get year
	                for ($i=1; $i < ($rows+1) ; $i++) {
	                	if ($i > 1) {
		                	$single = [
		                		'no_induk' => $sheet[$i]['A'],
								'no_peserta' => $sheet[$i]['B'],
								'nama_siswa' => $sheet[$i]['C'],
								'kelas' => $sheet[$i]['D'],
								'nis' => $sheet[$i]['E'],
								'nisn' => $sheet[$i]['F'],
								'jenis_kelamin' => $sheet[$i]['G'],
								'agama' => $sheet[$i]['H'],
								'alamat' => $sheet[$i]['I'],
								'nama_orangtua' => $sheet[$i]['J'],
								'walas' => $sheet[$i]['K'],
								'nip' => $sheet[$i]['L'],
								'semester' => $sheet[$i]['M'],
								'tahun' => $sheet[$i]['N'],
								'tanggal' => $sheet[$i]['O'],
								'a01' => $sheet[$i]['P'],
								'a02' => $sheet[$i]['Q'],
								'a03' => $sheet[$i]['R'],
								'a04' => $sheet[$i]['S'],
								'a05' => $sheet[$i]['T'],
								'a06' => $sheet[$i]['U'],
								'a07' => $sheet[$i]['V'],
								'a08' => $sheet[$i]['W'],
								'a09' => $sheet[$i]['X'],
								'a10' => $sheet[$i]['Y'],
								'a11' => $sheet[$i]['Z'],
								'jumlah_a' => $sheet[$i]['AA'],
								'rata_a' => $sheet[$i]['AB'],
								'b01' => $sheet[$i]['AC'],
								'b02' => $sheet[$i]['AD'],
								'b03' => $sheet[$i]['AE'],
								'b04' => $sheet[$i]['AF'],
								'b05' => $sheet[$i]['AG'],
								'b06' => $sheet[$i]['AH'],
								'b07' => $sheet[$i]['AI'],
								'b08' => $sheet[$i]['AJ'],
								'b09' => $sheet[$i]['AK'],
								'b10' => $sheet[$i]['AL'],
								'b11' => $sheet[$i]['AM'],
								'jumlah_b' => $sheet[$i]['AN'],
								'rata_b' => $sheet[$i]['AO'],
								'c01' => $sheet[$i]['AP'],
								'c02' => $sheet[$i]['AQ'],
								'c03' => $sheet[$i]['AR'],
								'c04' => $sheet[$i]['AS'],
								'c05' => $sheet[$i]['AT'],
								'c06' => $sheet[$i]['AU'],
								'c07' => $sheet[$i]['AV'],
								'c08' => $sheet[$i]['AW'],
								'c09' => $sheet[$i]['AX'],
								'c10' => $sheet[$i]['AY'],
								'c11' => $sheet[$i]['AZ'],
								'jumlah_c' => $sheet[$i]['BA'],
								'rata_c' => $sheet[$i]['BB'],
								'd01' => $sheet[$i]['BC'],
								'd02' => $sheet[$i]['BD'],
								'd03' => $sheet[$i]['BE'],
								'd04' => $sheet[$i]['BF'],
								'd05' => $sheet[$i]['BG'],
								'd06' => $sheet[$i]['BH'],
								'd07' => $sheet[$i]['BI'],
								'd08' => $sheet[$i]['BJ'],
								'd09' => $sheet[$i]['BK'],
								'd10' => $sheet[$i]['BL'],
								'd11' => $sheet[$i]['BM'],
								'jumlah_d' => $sheet[$i]['BN'],
								'rata_d' => $sheet[$i]['BO'],
								'e01' => $sheet[$i]['BP'],
								'e02' => $sheet[$i]['BQ'],
								'e03' => $sheet[$i]['BR'],
								'e04' => $sheet[$i]['BS'],
								'e05' => $sheet[$i]['BT'],
								'e06' => $sheet[$i]['BU'],
								'e07' => $sheet[$i]['BV'],
								'e08' => $sheet[$i]['BW'],
								'e09' => $sheet[$i]['BX'],
								'e10' => $sheet[$i]['BY'],
								'e11' => $sheet[$i]['BZ'],
								'jumlah_e' => $sheet[$i]['CA'],
								'rata_e' => $sheet[$i]['CB'],
								'f01' => $sheet[$i]['CC'],
								'f02' => $sheet[$i]['CD'],
								'f03' => $sheet[$i]['CE'],
								'f04' => $sheet[$i]['CF'],
								'f05' => $sheet[$i]['CG'],
								'f06' => $sheet[$i]['CH'],
								'f07' => $sheet[$i]['CI'],
								'f08' => $sheet[$i]['CJ'],
								'f09' => $sheet[$i]['CK'],
								'f10' => $sheet[$i]['CL'],
								'f11' => $sheet[$i]['CM'],
								'jumlah_f' => $sheet[$i]['CN'],
								'rata_f' => $sheet[$i]['CO']
		                	];
		                	if ($single['no_induk'] != '' OR $single['nama_siswa'] != '' OR $single['kelas'] != '' OR $single['walas'] != '' ) {
		                		if ($this->M_home->getLeggerNilaiByNoIndukKeterampilan($single['no_induk'])) {
		                			$this->M_home->updateLeggerNilaiKeterampilan($single);
		                		} else {
			                		$this->M_home->insertLeggerNilaiKeterampilan($single);
		                		}
			                	$successKeterampilan++;
		                	} else {
		                		$failureKeterampilan++;
		                	}
	                	}
	                }

	            } catch(Exception $e) {
	                die('Error loading file :' . $e->getMessage());
	                $echo .= $e;
	            }
	            chmod($thefile,0777);
	            unlink($thefile);
	            $this->message('success','Import data LeggerNilai berhasil '.$success.' berhasil terupload '.$failure.' gagal terupload  dan Import data LeggerNilai Keterampilan berhasil '.$successKeterampilan.' berhasil terupload '.$failureKeterampilan.' gagal terupload');
				redirect('C_home/legger_nilai');
	        }
		} else {
			$this->message('1','Tidak ada file yang dipilih');
			redirect('C_home/legger_nilai');
		}
	}
	

}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */