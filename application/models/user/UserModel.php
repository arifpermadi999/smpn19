<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function checkUsername($data) {
		$this->db->where('username', $data['username']);
		return $this->db->get('admin')->row_object();
	}
	public function insertUser($data) {
		return $this->db->insert('admin', $data);
	}	
	public function deleteUser($id_admin) {
		$this->db->where('id_admin', $id_admin);
		return $this->db->delete('admin');
	}
	public function checkUsernameAndId($data) {
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->where('username', $data['username']);
		return $this->db->get('admin')->result_object();
	}
	public function updateUser($data) {
		$this->db->where('id_admin', $data['id_admin']);
		return $this->db->update('admin', $data);
	}
}

/* End of file UserModel.php */
/* Location: ./application/models/user/UserModel.php */