<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cekLogin()
	{

		$cek = $this->db->get_where('admin',array('username'=>strtolower($this->input->post('username')),'password'=>strtolower(sha1($this->input->post('password')))));
		if($cek->num_rows()>0)
		{
			$dataAdmin = $cek->row();
			$data = array(
					'id_admin' => $dataAdmin->id_admin,
					'username' => $dataAdmin->username,
					'password' => $dataAdmin->password,
					'full_name' => $dataAdmin->full_name,
					'level' => $dataAdmin->level,
					'logged' => 'TRUE',
				);
			$this->session->set_userdata($data);
			return 1;
		}
		else
		{
			return 0;
		}
	}	

	// Lock Screen
	public function lockScreen()
	{
		if(empty($this->session->userdata('logged')))
		{
			redirect('C_login');
		}
		else
		{
			$this->session->unset_userdata('logged');
			$this->session->unset_userdata('password');
			return TRUE;
		}
	}
	public function lockBack()
	{
		$cek = $this->db->get_where('admin', array('username' => strtolower($this->session->userdata('username')), 'password' => strtolower(sha1($this->input->post('password')))));
		if ($cek->num_rows()>0) {
			$dataAdmin = $cek->row();
			$data = array(
					'password' => $this->input->post('password'),
					'logged' => 'TRUE',
				);
			$this->session->set_userdata($data);
			return 1;
		}
		else
		{
			return 0;
		}
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */