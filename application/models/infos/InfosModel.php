<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfosModel extends CI_Model {

	public function getAllInfos() {
		$this->db->order_by('id_info', 'desc');
		return $this->db->get('ms_info')->result_object();
	}
	public function insertInfo($data) {
		return $this->db->insert('ms_info', $data);
	}
	public function updateInfo($data) {
		$this->db->where('id_info', $data['id_info']);
		return $this->db->update('ms_info', $data);
	}
	public function deleteInfo($id_info) {
		$this->db->where('id_info', $id_info);
		return $this->db->delete('ms_info');
	}
	public function getInfoBySlug($info_slug) {
		$this->db->where('info_slug', $info_slug);
		return $this->db->get('ms_info')->row_object();
	}
	public function otherInfos() {
		$this->db->order_by('id_info', 'random');
		return $this->db->get('ms_info')->result_object();
	}
}

/* End of file InfosModel.php */
/* Location: ./application/models/infos/InfosModel.php */