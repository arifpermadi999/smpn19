<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SlidersModel extends CI_Model {

	public function getAllSliders() {
		$this->db->order_by('id_slider', 'desc');
		return $this->db->get('ms_slider')->result_object();
	}
	public function insertSlider($data) {
		return $this->db->insert('ms_slider', $data);
	}
	public function updateSlider($data) {
		$this->db->where('id_slider', $data['id_slider']);
		return $this->db->update('ms_slider', $data);
	}
	public function deleteSlider($id_slider) {
		$this->db->where('id_slider', $id_slider);
		return $this->db->delete('ms_slider');
	}
}

/* End of file SlidersModel.php */
/* Location: ./application/models/sliders/SlidersModel.php */