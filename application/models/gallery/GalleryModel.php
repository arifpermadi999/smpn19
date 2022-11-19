<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryModel extends CI_Model {

	public function getAllGalleries() {
		$this->db->order_by('id_gallery', 'desc');
		return $this->db->get('ms_gallery')->result_object();
	}
	public function getGalleryByCat($category_name) {
		$this->db->order_by('id_gallery', 'desc');
		$this->db->where('category_name', $category_name);
		return $this->db->get('ms_gallery')->result_object();
	}
	public function insertGallery($data) {
		return $this->db->insert('ms_gallery', $data);
	}
	public function updateGallery($data) {
		$this->db->where('id_gallery', $data['id_gallery']);
		return $this->db->update('ms_gallery', $data);
	}
	public function deleteGallery($id_gallery) {
		$this->db->where('id_gallery', $id_gallery);
		return $this->db->delete('ms_gallery');
	}
	public function getAllGalleriesByCat($cat_name) {
		$this->db->order_by('id_gallery', 'desc');
		$this->db->where('category_name', $cat_name);
		return $this->db->get('ms_gallery')->result_object();
	}
}

/* End of file GalleryModel.php */
/* Location: ./application/models/gallery/GalleryModel.php */