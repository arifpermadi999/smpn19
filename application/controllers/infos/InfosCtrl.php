<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfosCtrl extends MY_Controller {

	public function index($id_info = NULL) {
		if ($this->input->post('id_info')) {
            $dataUpdate = $this->input->post();
            $dataUpdate['info_slug'] = str_replace(' ', '-', str_replace('/','-',$this->input->post('info_title')));
			$this->infos->updateInfo($dataUpdate);
			$this->message('success','Data info kurikulum behasil diubah..');
			redirect('C_home/infos');
		} elseif($this->input->post()) {
			$this->imageConf($dir = 'infos'); // Validation image
            if(!$this->upload->do_upload('info_picture')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/infos');
            else :
                $dataUpload = $this->upload->data();
            	$datainfos = [
            		'info_title' => $this->input->post('info_title'),
            		'info_picture' => str_replace(' ', '_', $_FILES['info_picture']['name']),
            		'info_content' => $this->input->post('info_content'),
            		'info_date' => date('Y-m-d'),
            		'info_author' => $this->session->userdata('full_name'),
                    'info_slug' => str_replace(' ', '-', str_replace('/','-',$this->input->post('info_title'))),
            	];
            	$this->infos->insertInfo($datainfos);
            	$this->message('success','Data info kurikulum behasil ditambhakan..');
				redirect('C_home/infos');
            endif;
		} elseif($id_info) {
			$this->infos->deleteInfo($id_info);
			$this->message('success','Data info kurikulum behasil dihapus..');
			redirect('C_home/infos');
		} else {
			redirect('C_home/infos');
		}
	}
	public function updateImage() {
		if ($this->input->post()) {
			$this->imageConf($dir = 'infos'); // Validation image
            if(!$this->upload->do_upload('info_picture')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/infos');
            else :
                $dataUpload = $this->upload->data();
            	$datainfos = [
            		'id_info' => $this->input->post('id_info'),
            		'info_picture' => str_replace(' ', '_', $_FILES['info_picture']['name']),
            	];
            	$this->infos->updateInfo($datainfos);
            	$this->message('success','Data info kurikulum behasil ditambhakan..');
				redirect('C_home/infos');
            endif;
		} else {
			redirect('C_home/infos');
		}
	}

}

/* End of file InfosCtrl.php */
/* Location: ./application/controllers/infos/InfosCtrl.php */