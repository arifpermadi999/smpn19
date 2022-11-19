<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModulesCtrl extends MY_Controller {

	public function index($id_module = NULL) {
		if ($this->input->post('id_module')) :
			$dataModule = [
				'id_module' => $this->input->post('id_module'),
        		'file_title' => $this->input->post('file_title'),
        		'file_desc' => $this->input->post('file_desc'),
        		'file_author' => $this->input->post('file_author'),
        	];
			if ($_FILES['file_name']['name']) {
			 	$this->moduleConf($dir = 'modules'); // Validation image
	            if(!$this->upload->do_upload('file_name')) :
	                $this->message('danger','Oooppsss terjadi kesalah upload, pastikan format PDF dan Max. Size 5MB');
	            	redirect('C_home/modules');
	            else :
	                $dataUpload = $this->upload->data();
                	$dataModule['file_name'] = str_replace(' ', '_', $_FILES['file_name']['name']);
                endif;
            } 
        	$this->modules->updateModule($dataModule);
        	$this->message('success','Data modules berhasil diubah..');
			redirect('C_home/modules');
		elseif($this->input->post()) :
			$this->moduleConf($dir = 'modules'); // Validation image
            if(!$this->upload->do_upload('file_name')) :
                $this->message('danger','Oooppsss terjadi kesalah upload, pastikan format PDF dan Max. Size 5MB');
            	redirect('C_home/modules');
            else :
                $dataUpload = $this->upload->data();
            	$dataModule = [
            		'file_name' => str_replace(' ', '_', $_FILES['file_name']['name']),
            		'file_title' => $this->input->post('file_title'),
            		'file_desc' => $this->input->post('file_desc'),
            		'file_author' => $this->input->post('file_author'),
            	];
            	$this->modules->insertModule($dataModule);
            	$this->message('success','Data modules berhasil ditambahkan..');
				redirect('C_home/modules');
			endif;
		elseif($id_module) :
			$this->modules->deleteModule($id_module);
			$this->message('success','Data modules berhasil dihapus..');
			redirect('C_home/modules');
		else :
			redirect('C_home/modules');
		endif;
	}

}

/* End of file ModulesCtrl.php */
/* Location: ./application/controllers/modules/ModulesCtrl.php */