<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeachersModel extends CI_Model {

	public function getAllTeachers() {
		return $this->db->get('ms_teacher')->result_object();
	}
	public function insertTeacher($data) {
		return $this->db->insert('ms_teacher', $data);
	}
	public function updateTeacher($data) {
		$this->db->where('id_teacher', $data['id_teacher']);
		return $this->db->update('ms_teacher', $data);
	}
	public function deleteTeacher($id_teacher) {
		$this->db->where('id_teacher', $id_teacher);
		return $this->db->delete('ms_teacher');
	}

}

/* End of file TeachersModel.php */
/* Location: ./application/models/teachers/TeachersModel.php */