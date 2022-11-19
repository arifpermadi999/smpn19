<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogsModel extends CI_Model {

	//TODO: Untuk model jumlah dibaca
	public function updateKunjungan($id, $lastNum) {
		$data = array(
			"jumlah_dibaca" => $lastNum + 1
		);
		$this->db->where("id_blog", $id);
		$this->db->update("ms_blog", $data);
	}

	public function getAllBlogs() {
		$this->db->order_by('id_blog', 'desc');
		return $this->db->get('ms_blog')->result_object();
	}
	public function getAllBlogsOld() {
		$this->db->order_by('id_blog', 'asc');
		return $this->db->get('ms_blog')->result_object();
	}
	public function getBlogBySearch($keywords) {
		$query = "SELECT * FROM ms_blog WHERE title like '%$keywords%'";
		return $this->db->query($query)->result_object();
	}
	public function getBlogBySlug($slug) {
		$this->db->where('slug', $slug);
		return $this->db->get('ms_blog')->row_object();
	}
	public function insertBlogs($data) {
		return $this->db->insert('ms_blog', $data);
	}
	public function updateBlogs($data) {
		$this->db->where('id_blog', $data['id_blog']);
		return $this->db->update('ms_blog', $data);
	}
	public function deleteBlogs($id_blog) {
		$this->db->where('id_blog', $id_blog);
		return $this->db->delete('ms_blog');
	}
}

/* End of file BlogsModel.php */
/* Location: ./application/models/blogs/BlogsModel.php */