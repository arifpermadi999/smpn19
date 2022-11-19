<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilesCtrl extends MY_Controller {

	public function index($id_profile = NULL) {
		if ($this->input->post('id_profile')) {
            $dataUpdate = $this->input->post();
            $dataUpdate['profile_slug'] = str_replace(' ', '-', str_replace('/','-',$this->input->post('profile_name')));
			$this->profile->updateProfile($dataUpdate);
			$this->message('success','Data profile behasil diubah..');
			redirect('C_home/profile_sp');
		} elseif($this->input->post()) {
			$this->imageConf($dir = 'profile'); // Validation image
            if(!$this->upload->do_upload('profile_picture')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/profile_sp');
            else :
                $dataUpload = $this->upload->data();
            	$dataProfiles = [
            		'profile_name' => $this->input->post('profile_name'),
            		'profile_picture' => str_replace(' ', '_', $_FILES['profile_picture']['name']),
            		'profile_content' => $this->input->post('profile_content'),
            		'profile_date' => date('Y-m-d'),
            		'profile_author' => $this->session->userdata('full_name'),
                    'profile_slug' => str_replace(' ', '-', str_replace('/','-',$this->input->post('profile_name'))),
            	];
            	$this->profile->insertProfile($dataProfiles);
            	$this->message('success','Data profile behasil ditambhakan..');
				redirect('C_home/profile_sp');
            endif;
		} elseif($id_profile) {
			$this->profile->deleteProfile($id_profile);
			$this->message('success','Data profile behasil dihapus..');
			redirect('C_home/profile_sp');
		} else {
			redirect('C_home/profile_sp');
		}
	}
	public function updateImage() {
		if ($this->input->post()) {
			$this->imageConf($dir = 'profile'); // Validation image
            if(!$this->upload->do_upload('profile_picture')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/profile_sp');
            else :
                $dataUpload = $this->upload->data();
            	$dataProfiles = [
            		'id_profile' => $this->input->post('id_profile'),
            		'profile_picture' => str_replace(' ', '_', $_FILES['profile_picture']['name']),
            	];
            	$this->profile->updateProfile($dataProfiles);
            	$this->message('success','Data profile behasil ditambhakan..');
				redirect('C_home/profile_sp');
            endif;
		} else {
			redirect('C_home/profile_sp');
		}
	}

}

/* End of file ProfilesCtrl.php */
/* Location: ./application/controllers/profile/ProfilesCtrl.php */