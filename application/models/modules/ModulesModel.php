<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModulesModel extends CI_Model {

	public function getAllModules() {
		return $this->db->get('ms_module')->result_object();
	}
	public function insertModule($data) {
		return $this->db->insert('ms_module', $data);
	}
	public function updateModule($data) {
		$this->db->where('id_module', $data['id_module']);
		return $this->db->update('ms_module', $data);
	}
	public function deleteModule($id_module) {
		$this->db->where('id_module', $id_module);
		return $this->db->delete('ms_module');
	}

}

/* End of file ModulesModel.php */
/* Location: ./application/models/modules/ModulesModel.php */