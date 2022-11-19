<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventsCtrl extends MY_Controller {

	public function index($id_event = NULL) {
		if ($this->input->post('id_event')) {
            $dataUpdate = $this->input->post();
            $dataUpdate['event_slug'] = str_replace(' ', '-', str_replace('/','-',$this->input->post('event_name')));
			$this->events->updateEvent($dataUpdate);
			$this->message('success','Data kegiatan behasil diubah..');
			redirect('C_home/events');
		} elseif($this->input->post()) {
			$this->imageConf($dir = 'events'); // Validation image
            if(!$this->upload->do_upload('event_picture')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/events');
            else :
                $dataUpload = $this->upload->data();
            	$dataEvents = [
            		'event_name' => $this->input->post('event_name'),
            		'event_picture' => str_replace(' ', '_', $_FILES['event_picture']['name']),
            		'event_content' => $this->input->post('event_content'),
            		'event_date' => date('Y-m-d'),
            		'event_author' => $this->session->userdata('full_name'),
                    'event_slug' => str_replace(' ', '-', str_replace('/','-',$this->input->post('event_name'))),
            	];
            	$this->events->insertEvent($dataEvents);
            	$this->message('success','Data kegiatan behasil ditambhakan..');
				redirect('C_home/events');
            endif;
		} elseif($id_event) {
			$this->events->deleteEvent($id_event);
			$this->message('success','Data kegiatan behasil dihapus..');
			redirect('C_home/events');
		} else {
			redirect('C_home/events');
		}
	}
	public function updateImage() {
		if ($this->input->post()) {
			$this->imageConf($dir = 'events'); // Validation image
            if(!$this->upload->do_upload('event_picture')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/events');
            else :
                $dataUpload = $this->upload->data();
            	$dataEvents = [
            		'id_event' => $this->input->post('id_event'),
            		'event_picture' => str_replace(' ', '_', $_FILES['event_picture']['name']),
            	];
            	$this->events->updateEvent($dataEvents);
            	$this->message('success','Data kegiatan behasil ditambhakan..');
				redirect('C_home/events');
            endif;
		} else {
			redirect('C_home/events');
		}
	}
}

/* End of file EventsCtrl.php */
/* Location: ./application/controllers/events/EventsCtrl.php */