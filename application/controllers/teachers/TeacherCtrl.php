<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherCtrl extends MY_Controller {

	public function index($id_teacher = NULL) {
		if ($this->input->post('id_teacher')) {
			$this->teachers->updateTeacher($this->input->post());
			$this->message('success','Data guru behasil diubah..');
			redirect('C_home/teachers');
		} elseif($this->input->post()) {
			$this->teachers->insertTeacher($this->input->post());
			$this->message('success','Data guru behasil ditambhakan..');
			redirect('C_home/teachers');
		} elseif($id_teacher) {
			$this->teachers->deleteTeacher($id_teacher);
			$this->message('success','Data guru behasil dihapus..');
			redirect('C_home/teachers');
		} else {
			redirect('C_home/teachers');
		}
	}

}

/* End of file TeacherCtrl.php */
/* Location: ./application/controllers/teachers/TeacherCtrl.php */