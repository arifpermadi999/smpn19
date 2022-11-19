<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCtrl extends MY_Controller {

	public function index($id_admin = NULL)
	{
		if ($this->input->post('id_admin')) {
			$dataUpdate = [
				'id_admin' => $this->input->post('id_admin'),
				'username' => strtolower($this->input->post('username')),
				'full_name' => $this->input->post('full_name'),
				'level' => $this->input->post('level')
			];
			if($this->input->post('password') == '') :
			else : $dataUpdate['password'] = strtolower(sha1($this->input->post('password')));
			endif;
			if ($this->user->checkUsernameAndId($this->input->post())) {
				$this->user->updateUser($dataUpdate);
				$this->message('success','User berhasil diubah');
				redirect('C_home/users');
			} else {
				if($this->user->checkUsername($this->input->post())) {
					$this->message('danger','username sudah terdaftar');
					redirect('C_home/users');
				} else {
					$this->user->updateUser($dataUpdate);
					$this->message('success','User berhasil diubah');
					redirect('C_home/users');
				}
			}
		} elseif($this->input->post()) {
			if($this->user->checkUsername($this->input->post())) :
				$this->message('danger','Ooopppsss, username sudah terdaftar');
				redirect('C_home/users');
			else :
				$dataUser = [
					'username' => strtolower($this->input->post('username')),
					'full_name' => $this->input->post('full_name'),
					'level' => $this->input->post('level'),
					'password' => strtolower(sha1($this->input->post('password'))),
					'created_at' => date('d-m-Y')
				];
				$this->user->insertUser($dataUser);
				$this->message('success','User baru berhasil ditambahkan');
				redirect('C_home/users');
			endif;
		} elseif($id_admin) {
			$this->user->deleteUser($id_admin);
			$this->message('success','User berhasil dihapus');
			redirect('C_home/users');
		} else {
			redirect('C_home/users');
		}
	}

}

/* End of file UserCtrl.php */
/* Location: ./application/controllers/user/UserCtrl.php */