<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontCtrl extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user/UserModel','user',TRUE);
		$this->load->model('teachers/TeachersModel','teachers',TRUE);
		$this->load->model('events/EventsModel','events',TRUE);
		$this->load->model('cat_image/CatImageModel','catImages',TRUE);
		$this->load->model('sliders/SlidersModel','sliders',TRUE);
		$this->load->model('graduated/GraduatedModel','graduated',TRUE);
		$this->load->model('blogs/BlogsModel','blogs',TRUE);
		$this->load->model('gallery/GalleryModel','gallery',TRUE);
		$this->load->model('modules/ModulesModel','modules',TRUE);
		$this->load->model('videos/VideosModel','videos',TRUE);
		$this->load->model('infos/InfosModel','infos',TRUE);
		$this->load->model('profile/ProfilesModel','profile',TRUE);
		$this->load->model('M_home','home',TRUE);
		$this->dataFront['dataBlogImage'] = ''; //tambahan untuk share WA

	}

	public $dataFront = [
		'header' => 'front_inc/header',
		'navbar' => 'front_inc/navbar',
		'slider' => 'front_inc/slider',
		'footer' => 'front_inc/footer'
	];
	public function index() {
		// $this->dataFront['advVideo'] = $this->guzzle('get','/api/AdvCtrl/');
		$this->dataFront['title'] = 'SMP NEGERI 19 KOTA BEKASI';
		$this->dataFront['dataSlider'] = $this->sliders->getAllSliders();
		$this->dataFront['dataBlogs'] = $this->blogs->getAllBlogs();
		$this->dataFront['dataVideos'] = $this->videos->getAllVideos();
		$this->dataFront['dataGallery'] = $this->gallery->getAllGalleries();
		$this->dataFront['dataEvents'] = $this->events->getAllEvents();
		$this->dataFront['content'] = 'front_content/home/home';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function berita($slug = NULL) {
		
		$this->dataFront['dataBlogs'] = $this->blogs->getAllBlogs();
		if ($slug) {
			$this->dataFront['title'] = str_replace('-', ' ', $slug).' - SMPN 19 Kota Bekasi';
			$dataBlog= $this->blogs->getBlogBySlug($slug); //coding tambahan utk jumlah pembaca
			$this->dataFront['singleBlog'] = $this->blogs->getBlogBySlug($slug);
			$this->dataFront['content'] = 'front_content/blog/single';

			// TODO: Untuk Melihat Jumlah Pembaca
			$this->blogs->updateKunjungan($dataBlog->id_blog, $dataBlog->jumlah_dibaca);
			
			//Tambahan untuk share WA
			$this->dataFront['singleBlog'] = $this->blogs->getBlogBySlug($slug);
            $this->dataFront['dataBlogImage'] = $this->dataFront['singleBlog']->image; 

		} else {
			$this->dataFront['title'] = 'Berita - SMPN 19 Kota Bekasi';
			$this->dataFront['dataBlogsOld'] = $this->blogs->getAllBlogsOld();
			$this->dataFront['content'] = 'front_content/blog/blog';
		}
		$this->load->view('FrontView',$this->dataFront);
	}
	public function foto($category_name = NULL) {
		
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
		if ($category_name) {
			$this->dataFront['category_name'] = $category_name;
			$dataSingle = $this->gallery->getGalleryByCat(str_replace('_', ' ', $category_name));
			if (empty($dataSingle)) {
				$dataSingle = 'empty';
			}
			$this->dataFront['singleGallery'] = $dataSingle;
			$this->dataFront['title'] = str_replace('_', ' ', $category_name).' - SMPN 19 Kota Bekasi';
			$this->dataFront['content'] = 'front_content/gallery/image_single';
		} else {
			$this->dataFront['title'] = 'Gallery foto - SMPN 19 Kota Bekasi';
			$this->dataFront['content'] = 'front_content/gallery/image';
		}
		$this->dataFront['dataGallery'] = $dataCatImages;
		$this->load->view('FrontView',$this->dataFront);
	}
	public function video() {
		
		$this->dataFront['dataVideo'] = $this->videos->getAllVideos();
		$this->dataFront['title'] = 'Gallery video - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/gallery/video';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function info_kurikulum($info_slug = NULL) {
		
		$this->dataFront['dataBlogs'] = $this->blogs->getAllBlogs();
		$this->dataFront['dataInfos'] = $this->infos->getAllInfos();
		$this->dataFront['otherInfos'] = $this->infos->otherInfos();
		if ($info_slug) {
			$this->dataFront['title'] = str_replace('-', ' ', $info_slug).' - SMPN 19 Kota Bekasi';
			$this->dataFront['singleInfo'] = $this->infos->getInfoBySlug($info_slug);
			$this->dataFront['content'] = 'front_content/info_kurikulum/single';
		} else {
			$this->dataFront['title'] = 'Info Kurikulum - SMPN 19 Kota Bekasi';
			$this->dataFront['content'] = 'front_content/info_kurikulum/info_kurikulum';
		}
		$this->load->view('FrontView',$this->dataFront);
	}
	public function kegiatan_kesiswaan($event_slug = NULL) {
		
		$this->dataFront['dataBlogs'] = $this->blogs->getAllBlogs();
		$this->dataFront['dataEvents'] = $this->events->getAllEvents();
		$this->dataFront['dataEventsOld'] = $this->events->getAllEventsOld();
		if ($event_slug) {
			$this->dataFront['title'] = str_replace('-', ' ', $event_slug).' - SMPN 19 Kota Bekasi';
			$this->dataFront['singleEvent'] = $this->events->getEventBySlug($event_slug);
			$this->dataFront['content'] = 'front_content/event/single';
		} else {
			$this->dataFront['title'] = 'Kegiatan Kesiswaan - SMPN 19 Kota Bekasi';
			$this->dataFront['content'] = 'front_content/event/event';
		}
		$this->load->view('FrontView',$this->dataFront);
	}
	public function visi_misi() {
		$this->dataFront['dataVisi'] = $this->home->getAllVisi();
		$this->dataFront['title'] = 'Visi & Misi - SMPN 19 KOTA BEKASI';
		$this->dataFront['content'] = 'front_content/profile/visi_misi';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function struktur() {
		$this->dataFront['dataStruktur'] = $this->home->getAllStruktur();
		$this->dataFront['title'] = 'Struktur - SMPN 19 KOTA BEKASI';
		$this->dataFront['content'] = 'front_content/profile/struktur_organisasi';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function daftar_guru() {
		$this->dataFront['dataGuru'] = $this->home->getAllGuru();
		$this->dataFront['title'] = 'Guru - SMPN 19 KOTA BEKASI';
		$this->dataFront['content'] = 'front_content/profile/teacher_list';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function daftar_tu() {
		$this->dataFront['dataTu'] = $this->home->getAllTu();
		$this->dataFront['title'] = 'TU - SMPN 19 KOTA BEKASI';
		$this->dataFront['content'] = 'front_content/profile/tu_list';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function sarana() {
		$this->dataFront['dataSarana'] = $this->home->getAllSarana();
		$this->dataFront['title'] = 'Sarana - SMPN 19 KOTA BEKASI';
		$this->dataFront['content'] = 'front_content/profile/sarana';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function sambutan() {
		$this->dataFront['title'] = 'Sambutan - SMPN 19 KOTA BEKASI';
		$this->dataFront['content'] = 'front_content/profile/sambutan';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function year_book() {
		
		$this->dataFront['title'] = 'Year Book - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/profile/year_book';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function web() {
		
		$this->dataFront['title'] = 'Web Guru - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/web';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function maya() {
		
		$this->dataFront['title'] = 'Kelas Maya - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/maya';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function ekskul() {
		
		$this->dataFront['title'] = 'EKSKUL - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/ekskul';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_Mengajar() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_Mengajar';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_Keuangan() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_Keuangan';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_Ekskul() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_Ekskul';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_BK() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_BK';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_Piket() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_Piket';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_Wakasek() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_Wakasek';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_Walikelas() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_Walikelas';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function Lap_Perpus() {
		$this->dataFront['title'] = 'Laporan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/laporan/Lap_Perpus';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function ppdb() {
		$this->dataFront['title'] = 'PPDB - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/ppdb';
		$this->load->view('FrontView',$this->dataFront);
	}
	
	public function raport_pts() {
		$this->dataFront['title'] = 'RAPORT PTS';
		$this->dataFront['content'] = 'front_content/raport_pts';
		$this->load->view('FrontView',$this->dataFront);
	}
	
	public function sarana_prasarana($profile_slug = NULL) {
		
		$this->dataFront['dataProfile'] = $this->profile->getAllProfileSp();
		$this->dataFront['dataProfileOld'] = $this->profile->getAllProfilesOld();
		if ($profile_slug) {
			$this->dataFront['title'] = str_replace('-', ' ', $profile_slug).' - SMPN 19 Kota Bekasi';
			$this->dataFront['singleProfile'] = $this->profile->getProfileSpBySlug($profile_slug);
			$this->dataFront['content'] = 'front_content/profile/single_sp';
		} else {
			$this->dataFront['title'] = 'Sarana & Prasarana - SMPN 19 Kota Bekasi';
			$this->dataFront['content'] = 'front_content/profile/sarana_prasarana';
		}
		$this->load->view('FrontView',$this->dataFront);
	}
	public function search() {
		$this->dataFront['dataBlogs'] = $this->blogs->getAllBlogs();
		$this->dataFront['keywords'] = $this->input->post('search');
		$this->dataFront['dataSearch'] = $this->blogs->getBlogBySearch($this->input->post('search'));
		$this->dataFront['dataSlider'] = $this->sliders->getAllSliders();
		$this->dataFront['title'] = $this->input->post('search').' - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/search/search';
		$this->load->view('FrontView',$this->dataFront);
	}
	
	// RAPORT PAS//
	public function cek_raportpas() {
		if ($this->input->post()) {
			$dataRaportpas = $this->graduated->checkNoIndukpas($this->input->post('no_induk'));
			if (!$dataRaportpas) {
				$this->session->set_flashdata('noInduk', true);
				redirect('raport-pas');
			}
			// CHECK PASSWORD //
			if (!password_verify($this->input->post('password'),$dataRaportpas->password)) {
				$this->session->set_flashdata('noInduk', true);
				redirect('raport-pas');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataRaportpas'] = $dataRaportpas;
			$sess_ = [ 'dataRaportpas' => $dataRaportpas ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Cek Raport - SMPN 19 BEKASI';
		$this->dataFront['content'] = 'front_content/raport_pas/raportpas';
		$this->load->view('FrontView',$this->dataFront);
	}

	//KELULUSAN//
	public function kelulusan() {
		if ($this->input->post()) {
			$dataKelulusan = $this->graduated->checkNoUjian($this->input->post('no_ujian'));
			if (!$dataKelulusan) {
				$this->session->set_flashdata('emptyKelulusan', true);
				redirect('FrontCtrl/kelulusan');
			}
			// CHECK PASSWORD //
			if (!password_verify($this->input->post('password'),$dataKelulusan->password)) {
				$this->session->set_flashdata('emptyKelulusan', true);
				redirect('FrontCtrl/kelulusan');
			}
			// END //
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataKelulusan'] = $dataKelulusan;
			$sess_ = [ 'dataKelulusan' => $dataKelulusan ];
			$this->session->set_userdata( $sess_ );
		}
		
		$this->dataFront['title'] = 'Kelulusan - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/kelulusan/kelulusan';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function printKelulusan() {
		$dataKelulusan = $this->session->userdata('dataKelulusan');
		if (!$dataKelulusan) {
			redirect('FrontCtrl/kelulusan');
		}
		$data['dataKelulusan'] = $dataKelulusan;
		$this->load->view('front_content/kelulusan/kelulusan_print', $data);
	}
	public function printSKHUN() {
		$dataKelulusan = $this->session->userdata('dataKelulusan');
		if (!$dataKelulusan) {
			redirect('FrontCtrl/kelulusan');
		}
		$data['dataKelulusan'] = $dataKelulusan;
		$this->load->view('front_content/kelulusan/skhun_print', $data);
	}
	public function printSKL() {
		$dataKelulusan = $this->session->userdata('dataKelulusan');
		if (!$dataKelulusan) {
			redirect('App');
		}
		$data['dataKelulusan'] = $dataKelulusan;
		$this->load->view('front_content//kelulusan/print_SKL', $data);
	}

	//PPDB//
	public function cek_ppdb() {
		if ($this->input->post()) {
			$dataPpdb = $this->home->checkNoDaftar($this->input->post('no_daftar'));
			if (!$dataPpdb) {
				$this->session->set_flashdata('noDaftar', true);
				redirect('FrontCtrl/cek_ppdb');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataPpdb'] = $dataPpdb;
			$sess_ = [ 'dataPpdb' => $dataPpdb ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Cek PPDB - SMPN 19 Kota Bekasi';
		$this->dataFront['content'] = 'front_content/ppdb/ppdb';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function printPpdb() {
		$dataPpdb = $this->session->userdata('dataPpdb');
		if (!$dataPpdb) {
			redirect('App');
		}
		$data['dataPpdb'] = $dataPpdb;
		$this->load->view('front_content/ppdb/ppdb_print', $data);
	}

	//Kepegawaian
	public function kepegawaian() {
		if ($this->input->post()) {
			$dataKepegawaian = $this->home->checkKtp($this->input->post('kp_ktp'));
			if (!$dataKepegawaian) {
				$this->session->set_flashdata('emptyKepegawaian', true);
				redirect('FrontCtrl/kepegawaian');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataKepegawaian'] = $dataKepegawaian;
			$sess_ = [ 'dataKepegawaian' => $dataKepegawaian ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Data Kepegawaian - SMPN 19 BEKASI';
		$this->dataFront['content'] = 'front_content/kepegawaian/kepegawaian';
		$this->load->view('FrontView', $this->dataFront);
	}
	public function printKepegawaian() {
		$dataKepegawaian = $this->session->userdata('dataKepegawaian');
		if (!$dataKepegawaian) {
			redirect('App');
		}
		$data['dataKepegawaian'] = $dataKepegawaian;
		$this->load->view('front_content/kepegawaian/print', $data);
	}

	//SISWA
	public function siswa() {
		if ($this->input->post()) {
			$dataSiswa = $this->home->checkNisSiswa($this->input->post('ks_nis'));
			if (!$dataSiswa) {
				$this->session->set_flashdata('emptySiswa', true);
				redirect('FrontCtrl/siswa');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataSiswa'] = $dataSiswa;
			$sess_ = [ 'dataSiswa' => $dataSiswa ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Data Siswa - SMPN 19 BEKASI';
		$this->dataFront['content'] = 'front_content/siswa/siswa';
		$this->load->view('FrontView', $this->dataFront);
	}
	public function printSiswa() {
		$dataSiswa = $this->session->userdata('dataSiswa');
		if (!$dataSiswa) {
			redirect('App');
		}
		$data['dataSiswa'] = $dataSiswa;
		$this->load->view('front_content/siswa/print', $data);
	}

	// RAPORT KELAS 7//
	public function cek_raport() {
		if ($this->input->post()) {
			$dataRaport = $this->home->checkNoInduk($this->input->post('no_induk'));
			if (!$dataRaport) {
				$this->session->set_flashdata('noInduk', true);
				redirect('FrontCtrl/cek_raport');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataRaport'] = $dataRaport;
			$sess_ = [ 'dataRaport' => $dataRaport ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Cek Raport - SMPN 19 Bekasi';
		$this->dataFront['content'] = 'front_content/raport/raport';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function printRaport() {
		$dataRaport = $this->session->userdata('dataRaport');
		if (!$dataRaport) {
			redirect('App');
		}
		$data['dataRaport'] = $dataRaport;
		$this->load->view('front_content/raport/raport_print', $data);
	}

	// RAPORT KELAS 8//
	public function cek_raport8() {
		if ($this->input->post()) {
			$dataRaport8 = $this->home->checkNoInduk8($this->input->post('no_induk'));
			if (!$dataRaport8) {
				$this->session->set_flashdata('noInduk', true);
				redirect('FrontCtrl/cek_raport8');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataRaport8'] = $dataRaport8;
			$sess_ = [ 'dataRaport8' => $dataRaport8 ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Cek Raport - SMPN 19 Bekasi';
		$this->dataFront['content'] = 'front_content/raport8/raport';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function printRaport8() {
		$dataRaport8 = $this->session->userdata('dataRaport8');
		if (!$dataRaport8) {
			redirect('App');
		}
		$data['dataRaport8'] = $dataRaport8;
		$this->load->view('front_content/raport8/raport_print', $data);
	}

	// RAPORT KELAS 9//
	public function cek_raport9() {
		if ($this->input->post()) {
			$dataRaport9 = $this->home->checkNoInduk9($this->input->post('no_induk'));
			if (!$dataRaport9) {
				$this->session->set_flashdata('noInduk', true);
				redirect('FrontCtrl/cek_raport9');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataRaport9'] = $dataRaport9;
			$sess_ = [ 'dataRaport9' => $dataRaport9 ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Cek Raport - SMPN 19 Bekasi';
		$this->dataFront['content'] = 'front_content/raport9/raport';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function printRaport9() {
		$dataRaport9 = $this->session->userdata('dataRaport9');
		if (!$dataRaport9) {
			redirect('App');
		}
		$data['dataRaport9'] = $dataRaport9;
		$this->load->view('front_content/raport9/raport_print', $data);
	}
	
	public function ujian_online() {
		$this->dataFront['title'] = 'UJIAN ONLINE  ';
		$this->dataFront['content'] = 'front_content/ujian/ujian_online';
		$this->load->view('FrontView',$this->dataFront);
	}
	
	//UJIAN ONLINE KELAS 7, 8 & 9//
	public function ujian($kelas = NULL) {
		
		if ($this->input->post()) {
			$kelas  = $this->input->post('kelas');
			
			if($kelas == "7"){
				$dataUjian = $this->graduated->checkNisUjian($this->input->post('ks_nis'));
			}else if($kelas == "8"){
				$dataUjian = $this->graduated->checkNisUjian8($this->input->post('ks_nis'));
			}else if($kelas == "9"){
				$dataUjian = $this->graduated->checkNisUjian9($this->input->post('ks_nis'));
			}else{
			
				echo "not found";
				die();
			}	
			if($dataUjian){
				$ks_password = $dataUjian->ks_password;	
			}else{
				$this->session->set_flashdata('emptyUjian', true);
				redirect('Ujian/'.$kelas);
			}

			// CHECK PASSWORD //
			if (!password_verify($this->input->post('ks_password'),$ks_password)){
				$this->session->set_flashdata('emptyUjian', true);
				redirect('Ujian/'.$kelas);
			}

			// END //
			
			//data link ujian
			
			$dataLinkUjian = $this->home->dataLinkUjian($kelas);
			$this->dataFront['dataLinkUjian'] = $dataLinkUjian;
			//===============

			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataUjian'] = $dataUjian;
			$sess_ = [ 'dataUjian' => $dataUjian ];
			$this->session->set_userdata( $sess_ );

		}
		
		$this->dataFront['kelas'] = $kelas;
		$this->dataFront['title'] = 'UJIAN ONLINE ';
		$this->dataFront['content'] = 'front_content/ujian/ujian';
		$this->load->view('FrontView',$this->dataFront);
	}

	// TRYOUT//
	public function cek_tryout() {
		if ($this->input->post()) {
			$dataTryout = $this->home->checkNoIndukTryout($this->input->post('no_induk'));
			if (!$dataTryout) {
				$this->session->set_flashdata('noInduk', true);
				redirect('FrontCtrl/cek_tryout');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataTryout'] = $dataTryout;
			$sess_ = [ 'dataTryout' => $dataTryout ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Cek tryout - SMPN 19 Bekasi';
		$this->dataFront['content'] = 'front_content/tryout/tryout';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function printTryout() {
		$dataTryout = $this->session->userdata('dataTryout');
		if (!$dataTryout) {	
			redirect('App');
		}
		$data['dataTryout'] = $dataTryout;
		$this->load->view('front_content/tryout/tryout_print', $data);
	}

	// LeggerNilai//
	public function cek_legger_nilai() {
		if ($this->input->post()) {
			$dataLeggerNilai = $this->home->checkNoIndukLeggerNilai($this->input->post('no_induk'));
			if (!$dataLeggerNilai) {
				$this->session->set_flashdata('noInduk', true);
				redirect('FrontCtrl/cek_legger_nilai');
			}
			$this->dataFront['post'] = $this->input->post();
			$this->dataFront['dataLeggerNilai'] = $dataLeggerNilai;
			$sess_ = [ 'dataLeggerNilai' => $dataLeggerNilai ];
			$this->session->set_userdata( $sess_ );
		}
		$this->dataFront['title'] = 'Cek Legger Nilai - SMPN 19 Bekasi';
		$this->dataFront['content'] = 'front_content/legger_nilai/legger_nilai';
		$this->load->view('FrontView',$this->dataFront);
	}
	public function printLeggerNilai() {
		$dataLeggerNilai = $this->session->userdata('dataLeggerNilai');
		if (!$dataLeggerNilai) {
			redirect('App');
		}
		$data['dataLeggerNilai'] = $dataLeggerNilai;
		$this->load->view('front_content/legger_nilai/legger_nilai_print', $data);
	}

}

/* End of file FrontCtrl.php */
/* Location: ./application/controllers/FrontCtrl.php */