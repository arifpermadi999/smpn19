<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatImageCtrl extends MY_Controller {

	public function index($id_cat = NULL) {
		if ($this->input->post('id_cat')) {
			$this->catImages->updateCatImage($this->input->post());
			$this->message('success','Data kategori gambar behasil diubah..');
			redirect('C_home/image_category');
		} elseif($this->input->post()) {
			$this->catImages->insertCatImage($this->input->post());
			$this->message('success','Data kategori gambar behasil ditambhakan..');
			redirect('C_home/image_category');
		} elseif($id_cat) {
			$this->catImages->deleteCatImage($id_cat);
			$this->message('success','Data kategori gambar behasil dihapus..');
			redirect('C_home/image_category');
		} else {
			redirect('C_home/image_category');
		}
	}

}

/* End of file CatImageCtrl.php */
/* Location: ./application/controllers/cat_image/CatImageCtrl.php */