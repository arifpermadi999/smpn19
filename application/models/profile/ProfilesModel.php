<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilesModel extends CI_Model {

	public function getAllProfileSp() {
		$this->db->order_by('id_profile', 'desc');
		return $this->db->get('ms_profile_sp')->result_object();
	}
	public function getAllProfilesOld() {
		$this->db->order_by('id_profile', 'random');
		return $this->db->get('ms_profile_sp')->result_object();
	}
	public function getProfileSpBySlug($profile_slug) {
		$this->db->where('profile_slug', $profile_slug);
		return $this->db->get('ms_profile_sp')->row_object();
	}
	public function insertProfile($data) {
		return $this->db->insert('ms_profile_sp', $data);
	}
	public function updateProfile($data) {
		$this->db->where('id_profile', $data['id_profile']);
		return $this->db->update('ms_profile_sp', $data);
	}
	public function deleteProfile($id_profile) {
		$this->db->where('id_profile', $id_profile);
		return $this->db->delete('ms_profile_sp');
	}
	public function getProfileBySlug($profile_slug) {
		$this->db->where('profile_slug', $profile_slug);
		return $this->db->get('ms_profile_sp')->row_object();
	}

}

/* End of file ProfilesModel.php */
/* Location: ./application/models/profile/ProfilesModel.php */