<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GraduatedModel extends CI_Model {

	public function getAllGraduated() {
		return $this->db->get('ms_graduated')->result_object();
	}
	public function insertGraduated($data) {
		unset($data['_wysihtml5_mode']);
		return $this->db->insert('ms_graduated', $data);
	}
	public function updateGraduated($data) {
		$this->db->where('id_graduated', $data['id_graduated']);
		return $this->db->update('ms_graduated', $data);
	}
	public function deleteGraduated($id_graduated) {
		$this->db->where('id_graduated', $id_graduated);
		return $this->db->delete('ms_graduated');
	}
	
	// RAPORT PAS //
	public function dataRaportpas() {
		$this->db->order_by('id_raport', 'desc');
		return $this->db->get('ms_raport_smp')->result_object();
	}
	public function getRaportByIdpas($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->get('ms_raport_smp')->row_object();
	}
	public function checkNoIndukpas($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport_smp')->row_object();
	}
	public function insertRaportpas($data) {
		return $this->db->insert('ms_raport_smp', $data);
	}
	public function updateRaportpas($data) {
		$this->db->where('id_raport', $data['id_raport']);
		return $this->db->update('ms_raport_smp', $data);
	}
	public function deleteRaportpas($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->delete('ms_raport_smp');
	}

	//KELULUSAN//
	public function dataKelulusan() {
		$this->db->order_by('id_kelulusan', 'desc');
		return $this->db->get('ms_kelulusan')->result_object();
	}
	public function getKelulusanById($id_kelulusan) {
		$this->db->where('id_kelulusan', $id_kelulusan);
		return $this->db->get('ms_kelulusan')->row_object();
	}
	public function checkNoUjian($no_ujian) {
		$this->db->where('no_ujian', $no_ujian);
		return $this->db->get('ms_kelulusan')->row_object();
	}
	public function insertKelulusan($data) {
		return $this->db->insert('ms_kelulusan', $data);
	}
	public function updateKelulusan($data) {
		$this->db->where('id_kelulusan', $data['id_kelulusan']);
		return $this->db->update('ms_kelulusan', $data);
	}
	public function deleteKelulusan($id_kelulusan) {
		$this->db->where('id_kelulusan', $id_kelulusan);
		return $this->db->delete('ms_kelulusan');
	}

	//PPDB//
	public function dataPpdb() {
		$this->db->order_by('id_ppdb', 'desc');
		return $this->db->get('ms_ppdb')->result_object();
	}
	public function getPpdbById($id_ppdb) {
		$this->db->where('id_ppdb', $id_ppdb);
		return $this->db->get('ms_ppdb')->row_object();
	}
	public function checkNoDaftar($no_daftar) {
		$this->db->where('no_daftar', $no_daftar);
		return $this->db->get('ms_ppdb')->row_object();
	}
	public function insertPpdb($data) {
		return $this->db->insert('ms_ppdb', $data);
	}
	public function updatePpdb($data) {
		$this->db->where('id_ppdb', $data['id_ppdb']);
		return $this->db->update('ms_ppdb', $data);
	}
	public function deletePpdb($id_ppdb) {
		$this->db->where('id_ppdb', $id_ppdb);
		return $this->db->delete('ms_ppdb');
	}


	// RAPORT KELAS 7//
	public function dataRaport() {
		$this->db->order_by('id_raport', 'desc');
		return $this->db->get('ms_raport')->result_object();
	}
	public function getRaportById($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->get('ms_raport')->row_object();
	}
	public function checkNoInduk($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport')->row_object();
	}
	public function insertRaport($data) {
		return $this->db->insert('ms_raport', $data);
	}
	public function updateRaport($data) {
		$this->db->where('id_raport', $data['id_raport']);
		return $this->db->update('ms_raport', $data);
	}
	public function deleteRaport($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->delete('ms_raport');
	}

	// RAPORT KELAS 8 //
	public function dataRaport8() {
		$this->db->order_by('id_raport', 'desc');
		return $this->db->get('ms_raport8')->result_object();
	}
	public function getRaportById8($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->get('ms_raport8')->row_object();
	}
	public function checkNoInduk8($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport8')->row_object();
	}
	public function insertRaport8($data) {
		return $this->db->insert('ms_raport8', $data);
	}
	public function updateRaport8($data) {
		$this->db->where('id_raport', $data['id_raport']);
		return $this->db->update('ms_raport8', $data);
	}
	public function deleteRaport8($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->delete('ms_raport8');
	}

	// RAPORT KELAS 9 //
	public function dataRaport9() {
		$this->db->order_by('id_raport', 'desc');
		return $this->db->get('ms_raport9')->result_object();
	}
	public function getRaportById9($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->get('ms_raport9')->row_object();
	}
	public function checkNoInduk9($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport9')->row_object();
	}
	public function insertRaport9($data) {
		return $this->db->insert('ms_raport9', $data);
	}
	public function updateRaport9($data) {
		$this->db->where('id_raport', $data['id_raport']);
		return $this->db->update('ms_raport9', $data);
	}
	public function deleteRaport9($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->delete('ms_raport9');
	}
	
	//UJIAN KELAS 7//
	public function dataUjian() {
		$this->db->order_by('id_ujian', 'desc');
		return $this->db->get('ms_ujian_smp')->result_object();
	}
	public function getUjianById($id_ujian) {
		$this->db->where('id_ujian', $id_ujian);
		return $this->db->get('ms_ujian_smp')->row_object();
	}
	public function checkNisUjian($ks_nis) {
		$this->db->where('ks_nis', $ks_nis);
		return $this->db->get('ms_ujian_smp')->row_object();
	}
	public function insertUjian($data) {
		return $this->db->insert('ms_ujian_smp', $data);
	}
	public function UpdateUjian($data) {
		$this->db->where('id_ujian', $data['id_ujian']);
		return $this->db->update('ms_ujian_smp', $data);
	}
	public function deleteUjian($id_ujian) {
		$this->db->where('id_ujian', $id_ujian);
		return $this->db->delete('ms_ujian_smp');
	}

	//UJIAN KELAS 8//
	public function dataUjian8() {
		$this->db->order_by('id_ujian', 'desc');
		return $this->db->get('ms_ujian8')->result_object();
	}
	public function getUjianById8($id_ujian) {
		$this->db->where('id_ujian', $id_ujian);
		return $this->db->get('ms_ujian8')->row_object();
	}
	public function checkNisUjian8($ks_nis) {
		$this->db->where('ks_nis', $ks_nis);
		return $this->db->get('ms_ujian8')->row_object();
	}
	public function insertUjian8($data) {
		return $this->db->insert('ms_ujian8', $data);
	}
	public function UpdateUjian8($data) {
		$this->db->where('id_ujian', $data['id_ujian']);
		return $this->db->update('ms_ujian8', $data);
	}
	public function deleteUjian8($id_ujian) {
		$this->db->where('id_ujian', $id_ujian);
		return $this->db->delete('ms_ujian8');
	}

	//UJIAN KELAS 9//
	public function dataUjian9() {
		$this->db->order_by('id_ujian', 'desc');
		return $this->db->get('ms_ujian9')->result_object();
	}
	public function getUjianById9($id_ujian) {
		$this->db->where('id_ujian', $id_ujian);
		return $this->db->get('ms_ujian9')->row_object();
	}
	public function checkNisUjian9($ks_nis) {
		$this->db->where('ks_nis', $ks_nis);
		return $this->db->get('ms_ujian9')->row_object();
	}
	public function insertUjian9($data) {
		return $this->db->insert('ms_ujian9', $data);
	}
	public function UpdateUjian9($data) {
		$this->db->where('id_ujian', $data['id_ujian']);
		return $this->db->update('ms_ujian9', $data);
	}
	public function deleteUjian9($id_ujian) {
		$this->db->where('id_ujian', $id_ujian);
		return $this->db->delete('ms_ujian9');
	}
	
	//LINK UJIAN KELAS //
	public function datalinkujian($kelas) {
		$this->db->order_by('id_linkujian', 'desc');
		$this->db->where('kelas', $kelas);
		return $this->db->get('data_linkujian')->result_object();
	}
	public function getLinkujianById($id_linkujian) {
		$this->db->where('id_linkujian', $id_linkujian);
		return $this->db->get('data_linkujian')->row_object();
	}
	public function insertLinkujian($data) {
		return $this->db->insert('data_linkujian', $data);
	}
	public function UpdateLinkujian($data) {
		$this->db->where('id_linkujian', $data['id_linkujian']);
		return $this->db->update('data_linkujian', $data);
	}
	public function deleteLinkujian($id_linkujian,$kelas) {
		$this->db->where('id_linkujian', $id_linkujian);
		$this->db->where('kelas', $kelas);
		return $this->db->delete('data_linkujian');
	}

	// TRYOUT//
	public function dataTryout() {
		$this->db->order_by('id_tryout', 'desc');
		return $this->db->get('ms_tryout')->result_object();
	}
	public function getTryoutById($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->get('ms_raport')->row_object();
	}
	public function checkNoIndukTryout($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport')->row_object();
	}
	public function insertTryout($data) {
		return $this->db->insert('ms_raport', $data);
	}
	public function updateTryout($data) {
		$this->db->where('id_raport', $data['id_raport']);
		return $this->db->update('ms_raport', $data);
	}
	public function deleteTryout($id_raport) {
		$this->db->where('id_raport', $id_raport);
		return $this->db->delete('ms_raport');
	}

	// LeggerNilai//
	public function dataLeggerNilai() {
		$this->db->order_by('id_legger_nilai', 'desc');
		return $this->db->get('legger_nilai_pengetahuan')->result_object();
	}
	public function getLeggerNilaiById($id_legger_nilai) {
		$this->db->where('id_legger_nilai', $id_legger_nilai);
		return $this->db->get('ms_raport')->row_object();
	}
	public function checkNoIndukLeggerNilai($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport')->row_object();
	}
	public function insertLeggerNilai($data) {
		return $this->db->insert('ms_raport', $data);
	}
	public function updateLeggerNilai($data) {
		$this->db->where('id_legger_nilai', $data['id_legger_nilai']);
		return $this->db->update('legger_nilai_pengetahuan', $data);
	}
	public function deleteLeggerNilai($id_legger_nilai) {
		$this->db->where('id_legger_nilai', $id_legger_nilai);
		return $this->db->delete('legger_nilai_pengetahuan');
	}

}

/* End of file GraduatedModel.php */
/* Location: ./application/models/graduated/GraduatedModel.php */