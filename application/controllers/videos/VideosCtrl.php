<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VideosCtrl extends MY_Controller {

	public function index($id_videos = NULL) {
		if ($this->input->post('id_video')) {
			$this->videos->updateVideo($this->input->post());
			$this->message('success','Tambah data video berhasil..');
			redirect('C_home/videos');
		} elseif($this->input->post()) {
			$this->videos->insertVideo($this->input->post());
			$this->message('success','Tambah data video berhasil..');
			redirect('C_home/videos');
		} elseif($id_videos) {
			$this->videos->deleteVideo($id_videos);
			$this->message('success','Hapus data video berhasil..');
			redirect('C_home/videos');
		} else {
			redirect('C_home/videos');
		}
	}

}

/* End of file VideosCtrl.php */
/* Location: ./application/controllers/videos/VideosCtrl.php */