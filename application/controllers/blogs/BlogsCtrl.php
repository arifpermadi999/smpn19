<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogsCtrl extends MY_Controller {

	public function index($id_blog = NULL) {
		if ($this->input->post('id_blog'))  :
			$this->imageConf($dir = 'blogs'); // Validation image
            // if(!$this->upload->do_upload('image')) :
            //     $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            // 	redirect('C_home/blogs');
            // else :
            	$dataBlogs = [
            		'id_blog' => $this->input->post('id_blog'),
            		'title' => $this->input->post('title'),
            		'content' => $this->input->post('content'),
            		'slug' => str_replace(' ', '-', str_replace('/','-',$this->input->post('title'))),
            		'created_at' => date('Y-m-d'),
            		'author' => $this->session->userdata('full_name'),
            	];
                if ($_FILES['image']['name']) {
                    $this->upload->do_upload('image');
                    $dataUpload = $this->upload->data();
                    $dataBlogs['image'] = str_replace(' ', '_', $_FILES['image']['name']);
                } 
            	$this->blogs->updateBlogs($dataBlogs);
            	$this->message('success','Data blog berhasil di ubah');
            	redirect('C_home/blogs');
            // endif;
		elseif($this->input->post()) :
			$this->imageConf($dir = 'blogs'); // Validation image
            if(!$this->upload->do_upload('image')) :
                $this->message('danger','Oooppsss terjadi kesalah upload gambar, pastikan format gambar JPG|PNG|JPEG|GIF dan Max. Size 5MB');
            	redirect('C_home/blogs');
            else :
                $dataUpload = $this->upload->data();
            	$dataBlogs = [
            		'title' => $this->input->post('title'),
            		'image' => str_replace(' ', '_', strtolower($_FILES['image']['name'])),
            		'content' => $this->input->post('content'),
            		'slug' => str_replace(' ', '-', str_replace('/','-',$this->input->post('title'))),
            		'created_at' => date('Y-m-d'),
            		'author' => $this->session->userdata('full_name'),
            	];
            	$this->blogs->insertBlogs($dataBlogs);
            	$this->message('success','Blog baru berhasil di publish');
            	redirect('C_home/blogs');
            endif;
		elseif($id_blog) :
			$this->blogs->deleteBlogs($id_blog);
        	$this->message('success','Data blog berhasil dihapus');
        	redirect('C_home/blogs');
		else :
			redirect('C_home/blogs');
		endif;
	}

}

/* End of file BlogsCtrl.php */
/* Location: ./application/controllers/blogs/BlogsCtrl.php */