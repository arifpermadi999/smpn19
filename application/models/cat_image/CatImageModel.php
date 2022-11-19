<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatImageModel extends CI_Model {

	public function getAllCatImages() {
		return $this->db->get('ms_gallery_cat')->result_object();
	}
	public function insertCatImage($data) {
		return $this->db->insert('ms_gallery_cat', $data);
	}
	public function updateCatImage($data) {
		$this->db->where('id_cat', $data['id_cat']);
		return $this->db->update('ms_gallery_cat',$data);
	}
	public function deleteCatImage($id_cat) {
		$this->db->where('id_cat', $id_cat);
		return $this->db->delete('ms_gallery_cat');
	}

}

/* End of file CatImageModel.php */
/* Location: ./application/models/cat_image/CatImageModel.php */