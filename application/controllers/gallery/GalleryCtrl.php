<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryCtrl extends MY_Controller {

	public function index($id_gallery = NULL) {
		if ($this->input->post('id_gallery')) :
			$this->imageConf($dir = 'gallery'); // Validation image
            // if(!$this->upload->do_upload('photos')) :
            //     $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            // 	redirect('C_home/gallery');
            // else :
            	$dataGallery = [
            		'id_gallery' => $this->input->post('id_gallery'),
            		'category_name' => $this->input->post('category_name'),
            		'photos_desc' => $this->input->post('photos_desc'), //tambahan ket foto
            	];
            	if ($_FILES['photos']['name']) {
                    $this->upload->do_upload('photos');
            		$dataUpload = $this->upload->data();
					$dataGallery['photos'] = str_replace(' ', '_', $_FILES['photos']['name']);
				} 
            	$this->gallery->updateGallery($dataGallery);
            	$this->message('success','Data gallery baru berhasil diubah');
            	redirect('C_home/gallery');
            // endif;
		elseif($this->input->post()) :
			$this->imageConf($dir = 'gallery'); // Validation image
            if(!$this->upload->do_upload('photos')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/gallery');
            else :
                $dataUpload = $this->upload->data();
            	$dataGallery = [
            		'photos' => str_replace(' ', '_', $_FILES['photos']['name']),
            		'category_name' => $this->input->post('category_name'),
            		'photos_desc' => $this->input->post('photos_desc'), //tambahan ket foto
            	];
            	$this->gallery->insertGallery($dataGallery);
            	$this->message('success','Data gallery baru berhasil ditambahkan');
            	redirect('C_home/gallery');
            endif;
		elseif($id_gallery) :
			$this->gallery->deleteGallery($id_gallery);
        	$this->message('success','Data gallery baru berhasil dihapus');
        	redirect('C_home/gallery');
		else :
			redirect('C_home/gallery');
		endif;
	}

}

/* End of file GalleryCtrl.php */
/* Location: ./application/controllers/gallery/GalleryCtrl.php */