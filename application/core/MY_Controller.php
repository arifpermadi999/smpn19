<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

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
	}
	public $data = array(
			'namaAplikasi' => '',
			'header' => 'inc/header',
			'sidebar' => 'inc/sidebar',
			'footer' => 'inc/footer',
			'rightBar' => 'inc/rightBar',
			'coreAtas' => 'core/coreAtas',
			'coreBawah' => 'core/coreBawah',
		);
	public function imageConf($dir = NULL, $options = NULL) {
		$conf['upload_path']   = './assets/images/'.$dir;
		$conf['allowed_types'] = 'gif|jpg|png|jpeg';
		$conf['max_size']      = 5000;
		$conf['overwrite']     = TRUE;
		$this->load->library('upload', $conf);
	}
	public function moduleConf($dir = NULL, $options = NULL) {
		$conf['upload_path']   = './assets/images/'.$dir;
		$conf['allowed_types'] = 'pdf';
		$conf['max_size']      = 5000;
		$conf['overwrite']     = TRUE;
		$this->load->library('upload', $conf);
	}
	public function message($alert, $message) {
		return $this->session->set_flashdata(
			[
				'alert' => $alert,
				'message' => $message
			]
		);
	}

	public function index()
	{
		redirect('C_home');
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */