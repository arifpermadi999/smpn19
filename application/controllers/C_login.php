<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('login/login');
	}
	public function doLogin()
	{
		if(isset($_POST['login']))
		{
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_message('required','Field tidak boleh kosong');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('login/login');
			} else {
				$cek = $this->M_login->cekLogin();
				if($cek==1) {
					redirect('C_home');
				}
				else
				{
					$this->session->set_flashdata('alert', 'Username dan Password tidak terdaftar');
					redirect('C_login');
				}
			}
		}
		else
		{
			redirect('C_login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('C_home');
	}

	// Lock Screen
	public function lockScreen()
	{
		$lockScreen = $this->M_login->lockScreen();
		$this->load->view('login/lockscreen');
	}
	public function backLock()
	{
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_message('required','Password tidak boleh kosong');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/lockScreen');
		} else {
			$lockBack = $this->M_login->lockBack($username);
			if($lockBack==1)
			{
				redirect('C_home');
			}
			else
			{
				$this->session->sess_destroy();
				$this->session->set_flashdata('alert', 'Login gagal, username dan password salah');
				redirect('C_login');
			}
		}
	}

}

/* End of file C_login.php */
/* Location: ./application/controllers/C_login.php */