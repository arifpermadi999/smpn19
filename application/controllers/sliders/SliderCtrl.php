<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SliderCtrl extends MY_Controller {

	public function index($id_slider = NULL) {
		if ($this->input->post('id_slider')) :
			$this->imageConf($dir = 'sliders'); // Validation image
            // if(!$this->upload->do_upload('slider_image')) :
            //     $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            // 	redirect('C_home/sliders');
            // else :
            	$dataSlider = [
            		'id_slider' => $this->input->post('id_slider'),
            		'slider_desc' => $this->input->post('slider_desc'),
            	];
                if ($_FILES['slider_image']['name']) {
                    $this->upload->do_upload('slider_image');
                    $dataUpload = $this->upload->data('slider_image');
                    $dataSlider['slider_image'] = str_replace(' ', '_', $_FILES['slider_image']['name']);
                } 
            	$this->sliders->updateSlider($dataSlider);
            	$this->message('success','Data slider baru berhasil diubah');
            	redirect('C_home/sliders');
            // endif;
		elseif($this->input->post()) :
			$this->imageConf($dir = 'sliders'); // Validation image
            if(!$this->upload->do_upload('slider_image')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/sliders');
            else :
                $dataUpload = $this->upload->data();
            	$dataSlider = [
            		'slider_image' => str_replace(' ', '_', $_FILES['slider_image']['name']),
            		'slider_desc' => $this->input->post('slider_desc'),
            	];
            	$this->sliders->insertSlider($dataSlider);
            	$this->message('success','Data slider baru berhasil ditambahkan');
            	redirect('C_home/sliders');
            endif;
		elseif($id_slider) :
			$this->sliders->deleteSlider($id_slider);
        	$this->message('success','Data slider baru berhasil dihapus');
        	redirect('C_home/sliders');
		else :
			redirect('C_home/sliders');
		endif;
	}

}

/* End of file SliderCtrl.php */
/* Location: ./application/controllers/sliders/SliderCtrl.php */