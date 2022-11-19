<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VideosModel extends CI_Model {

	public function getAllVideos() {
		$this->db->order_by('id_video', 'desc');
		return $this->db->get('ms_video')->result_object();
	}
	public function insertVideo($data) {
		return $this->db->insert('ms_video', $data);
	}
	public function updateVideo($data) {
		$this->db->where('id_video', $data['id_video']);
		return $this->db->update('ms_video', $data);
	}
	public function deleteVideo($id_video) {
		$this->db->where('id_video', $id_video);
		return $this->db->delete('ms_video');
	}
}

/* End of file VideosModel.php */
/* Location: ./application/models/videos/VideosModel.php */