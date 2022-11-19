<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	// Profile
	public function upProfile()
	{
		$this->db->where('id_admin', $this->input->post('id_admin'));
		$data = array(
				'password' => strtolower(sha1($this->input->post('password'))),
				'full_name' => $this->input->post('full_name'),
			);
		return $this->db->update('admin', $data);
	}	
	public function upSession()
	{
		$this->session->unset_userdata('full_name');
		$data = array(
				'full_name' => $this->input->post('full_name'),
			);
		return $this->session->set_userdata($data);
	}
	// End Profile

	// Users
	public function getAllUsers()
	{
		$this->db->order_by('full_name', 'ASC');
		return $this->db->get('admin')->result_object();
	}
	public function getSingleUsers($id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		return $this->db->get('admin')->row();
	}
	public function updateUser()
	{
		$this->db->where('id_admin', $this->input->post('id_admin'));
		$data = array(
				'username' => strtolower($this->input->post('username')),
				'password' => strtolower($this->input->post('password')),
				'full_name' => $this->input->post('full_name'),
			);
		return $this->db->update('admin', $data);
	}
	public function upSessionUser()
	{
		$this->session->unset_userdata('full_name');
		$this->session->unset_userdata('level');
		$data = array(
				'full_name' => $this->input->post('full_name'),
				'level' => $this->input->post('level'),
			);
		return $this->session->set_userdata($data);
	}
	public function cekUser()
	{
		$this->db->where('username', strtolower($this->input->post('username')));
		$this->db->where('password', strtolower($this->input->post('password')));
		return $this->db->get('admin')->row();
	}
	public function insertUser()
	{
		$data = array(
				'username' => strtolower($this->input->post('username')),
				'password' => strtolower($this->input->post('password')),
				'full_name' => $this->input->post('full_name'),
				'level' => $this->input->post('level'),
				'created_at' => date('d-m-Y'),
			);
		return $this->db->insert('admin', $data);
	}
	public function deleteUser($id_admin)
	{
		$this->db->where('id_admin', $id_admin);
		return $this->db->delete('admin');
	}
	// End Users
	
	// RAPORT PAS //
	public function getRaportByNoIndukpas($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport_smp')->row_object();
	}
	public function updateRaportpas($data) {
		$this->db->where('no_induk', $data['no_induk']);
		return $this->db->update('ms_raport_smp', $data);
	}
	public function insertRaportpas($data) {
		return $this->db->insert('ms_raport_smp', $data);
	}
	public function checkNoIndukpas($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport_smp')->row_object();
	}

	// KELULUSAN //
	public function getKelulusanByNoUjian($no_ujian) {
		$this->db->where('no_ujian', $no_ujian);
		return $this->db->get('ms_kelulusan')->row_object();
	}
	public function updateKelulusan($data) {
		$this->db->where('no_ujian', $data['no_ujian']);
		return $this->db->update('ms_kelulusan', $data);
	}
	public function insertKelulusan($data) {
		return $this->db->insert('ms_kelulusan', $data);
	}
	public function checkNoUjian($no_ujian) {
		$this->db->where('no_ujian', $no_ujian);
		return $this->db->get('ms_kelulusan')->row_object();
	}

	//PPDB//
	public function getPpdbByNoDaftar($no_daftar) {
		$this->db->where('no_daftar', $no_daftar);
		return $this->db->get('ms_ppdb')->row_object();
	}
	public function updatePpdb($data) {
		$this->db->where('no_daftar', $data['no_daftar']);
		return $this->db->update('ms_ppdb', $data);
	}
	public function insertPpdb($data) {
		return $this->db->insert('ms_ppdb', $data);
	}
	public function checkNoDaftar($no_daftar) {
		$this->db->where('no_daftar', $no_daftar);
		return $this->db->get('ms_ppdb')->row_object();
	}


	// RAPORT KELAS 7//
	public function getRaportByNoInduk($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport')->row_object();
	}
	public function updateRaport($data) {
		$this->db->where('no_induk', $data['no_induk']);
		return $this->db->update('ms_raport', $data);
	}
	public function insertRaport($data) {
		return $this->db->insert('ms_raport', $data);
	}
	public function checkNoInduk($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport')->row_object();
	}

	// RAPORT KELAS 8//
	public function getRaportByNoInduk8($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport8')->row_object();
	}
	public function updateRaport8($data) {
		$this->db->where('no_induk', $data['no_induk']);
		return $this->db->update('ms_raport8', $data);
	}
	public function insertRaport8($data) {
		return $this->db->insert('ms_raport8', $data);
	}
	public function checkNoInduk8($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport8')->row_object();
	}

	// RAPORT KELAS 9//
	public function getRaportByNoInduk9($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport9')->row_object();
	}
	public function updateRaport9($data) {
		$this->db->where('no_induk', $data['no_induk']);
		return $this->db->update('ms_raport9', $data);
	}
	public function insertRaport9($data) {
		return $this->db->insert('ms_raport9', $data);
	}
	public function checkNoInduk9($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_raport9')->row_object();
	}

	// KEPEGAWAIAN //
	public function getKepegawaian() {
		return $this->db->query("SELECT id_kp,kp_nama,kp_ttl,kp_status_kepegawaian,kp_mapel,kp_tugas_tambahan FROM ms_kepegawaian ORDER BY kp_nama ASC")->result_object();
	}
	public function checkKtp($kp_ktp) {
		$this->db->where('kp_ktp', $kp_ktp);
		return $this->db->get('ms_kepegawaian')->row_object();
	}
	public function insertKepegawaian($data) {
		return $this->db->insert('ms_kepegawaian', $data);
	}
	public function getKpById($id_kp) {
		$this->db->where('id_kp', $id_kp);
		return $this->db->get('ms_kepegawaian')->row_object();
	}
	public function updateKepegawaian($data) {
		$this->db->where('id_kp', $data['id_kp']);
		return $this->db->update('ms_kepegawaian', $data);
	}
	public function updateKepegawaianByKtp($data) {
		$this->db->where('kp_ktp', $data['kp_ktp']);
		return $this->db->update('ms_kepegawaian', $data);
	}
	public function deletePegawaiById($id_kp) {
		$this->db->where('id_kp', $id_kp);
		return $this->db->delete('ms_kepegawaian');
	}
	public function deleteAllPegawai() {
		return $this->db->query("DELETE FROM ms_kepegawaian");
	}
	
	//SISWA

	public function dataSiswa() {
		$this->db->order_by('ks_nama', 'asc');
		return $this->db->get('ms_kesiswaan')->result_object();
	}
	public function checkNisSiswa($ks_nis) {
		$this->db->where('ks_nis', $ks_nis);
		return $this->db->get('ms_kesiswaan')->row_object();
	}
	public function insertSiswa($data) {
		return $this->db->insert('ms_kesiswaan', $data);
	}
	public function getSiswaById($id_ks) {
		$this->db->where('id_ks', $id_ks);
		return $this->db->get('ms_kesiswaan')->row_object();
	}
	public function updateSiswa($data) {
		$this->db->where('id_ks', $data['id_ks']);
		return $this->db->update('ms_kesiswaan', $data);
	}
	public function deleteSiswaById($id_ks) {
		$this->db->where('id_ks', $id_ks);
		return $this->db->delete('ms_kesiswaan');
	}
	public function deleteAllSiswa() {
		return $this->db->query("DELETE FROM ms_kesiswaan");
	}
	
	//UJIAN KELAS 7//
	public function getUjianByNis($ks_nis) {
		$this->db->where('ks_nis', $ks_nis);
		return $this->db->get('ms_ujian_smp')->row_object();
	}
	public function UpdateUjian($data) {
		$this->db->where('ks_nis', $data['ks_nis']);
		return $this->db->update('ms_ujian_smp', $data);
	}
	public function insertUjian($data) {
		return $this->db->insert('ms_ujian_smp', $data);
	}

	//UJIAN KELAS 8//
	public function getUjianByNis8($ks_nis) {
		$this->db->where('ks_nis', $ks_nis);
		return $this->db->get('ms_ujian8')->row_object();
	}
	public function UpdateUjian8($data) {
		$this->db->where('ks_nis', $data['ks_nis']);
		return $this->db->update('ms_ujian8', $data);
	}
	public function insertUjian8($data) {
		return $this->db->insert('ms_ujian8', $data);
	}

	//UJIAN KELAS 9//
	public function getUjianByNis9($ks_nis) {
		$this->db->where('ks_nis', $ks_nis);
		return $this->db->get('ms_ujian9')->row_object();
	}
	public function UpdateUjian9($data) {
		$this->db->where('ks_nis', $data['ks_nis']);
		return $this->db->update('ms_ujian9', $data);
	}
	public function insertUjian9($data) {
		return $this->db->insert('ms_ujian9', $data);
	}
	
	//LINK UJIAN//
	public function dataLinkUjian($kelas) {
		$this->db->where('kelas', $kelas);
		return $this->db->get('data_linkujian')->result_object();
	}

	// VISI MISI //
	public function dataVisi() {
		$this->db->order_by('kp_nama', 'kp_photo', 'asc');
		return $this->db->get('ms_visi')->result_object();
	}
	public function getAllVisi() {
		$this->db->order_by('id_visi', 'desc');
		return $this->db->get('ms_visi')->result_object();
	}
	public function checkNama($kp_nama) {
		$this->db->where('kp_nama', $kp_nama);
		return $this->db->get('ms_visi')->row_object();
	}
	public function insertVisi($data) {
		return $this->db->insert('ms_visi', $data);
	}
	public function getVisiById($id_visi) {
		$this->db->where('id_visi', $id_visi);
		return $this->db->get('ms_visi')->row_object();
	}
	public function deleteVisiById($id_visi) {
		$this->db->where('id_visi', $id_visi);
		return $this->db->delete('ms_visi');
	}
	public function deleteAllVisi() {
		return $this->db->query("DELETE FROM ms_visi");
	}

	// STRUKTUR //
	public function dataStruktur() {
		$this->db->order_by('kp_nama', 'kp_photo', 'asc');
		return $this->db->get('ms_struktur')->result_object();
	}
	public function getAllStruktur() {
		$this->db->order_by('id_struktur', 'desc');
		return $this->db->get('ms_struktur')->result_object();
	}
	public function checkNamaStruktur($kp_nama) {
		$this->db->where('kp_nama', $kp_nama);
		return $this->db->get('ms_struktur')->row_object();
	}
	public function insertStruktur($data) {
		return $this->db->insert('ms_struktur', $data);
	}
	public function getStrukturById($id_struktur) {
		$this->db->where('id_struktur', $id_struktur);
		return $this->db->get('ms_struktur')->row_object();
	}
	public function deleteStrukturById($id_struktur) {
		$this->db->where('id_struktur', $id_struktur);
		return $this->db->delete('ms_struktur');
	}
	public function deleteAllStruktur() {
		return $this->db->query("DELETE FROM ms_struktur");
	}

	// PROFIL GURU //
	public function dataGuru() {
		$this->db->order_by('kp_nama', 'kp_photo', 'asc');
		return $this->db->get('ms_guru')->result_object();
	}
	public function getAllGuru() {
		$this->db->order_by('id_guru', 'desc');
		return $this->db->get('ms_guru')->result_object();
	}
	public function checkNamaGuru($kp_nama) {
		$this->db->where('kp_nama', $kp_nama);
		return $this->db->get('ms_guru')->row_object();
	}
	public function insertGuru($data) {
		return $this->db->insert('ms_guru', $data);
	}
	public function getGuruById($id_guru) {
		$this->db->where('id_guru', $id_guru);
		return $this->db->get('ms_guru')->row_object();
	}
	public function deleteGuruById($id_guru) {
		$this->db->where('id_guru', $id_guru);
		return $this->db->delete('ms_guru');
	}
	public function deleteAllGuru() {
		return $this->db->query("DELETE FROM ms_guru");
	}

	// PROFIL TU //
	public function dataTu() {
		$this->db->order_by('kp_nama', 'kp_photo', 'asc');
		return $this->db->get('ms_tu')->result_object();
	}
	public function getAllTu() {
		$this->db->order_by('id_tu', 'desc');
		return $this->db->get('ms_tu')->result_object();
	}
	public function checkNamaTu($kp_nama) {
		$this->db->where('kp_nama', $kp_nama);
		return $this->db->get('ms_tu')->row_object();
	}
	public function insertTu($data) {
		return $this->db->insert('ms_tu', $data);
	}
	public function getTuById($id_tu) {
		$this->db->where('id_tu', $id_tu);
		return $this->db->get('ms_tu')->row_object();
	}
	public function deleteTuById($id_tu) {
		$this->db->where('id_tu', $id_tu);
		return $this->db->delete('ms_tu');
	}
	public function deleteAllTu() {
		return $this->db->query("DELETE FROM ms_tu");
	}

	// PROFIL SARANA //
	public function dataSarana() {
		$this->db->order_by('kp_nama', 'kp_photo', 'asc');
		return $this->db->get('ms_sarana')->result_object();
	}
	public function getAllSarana() {
		$this->db->order_by('id_sarana', 'desc');
		return $this->db->get('ms_sarana')->result_object();
	}
	public function checkNamaSarana($kp_nama) {
		$this->db->where('kp_nama', $kp_nama);
		return $this->db->get('ms_sarana')->row_object();
	}
	public function insertSarana($data) {
		return $this->db->insert('ms_sarana', $data);
	}
	public function getSaranaById($id_sarana) {
		$this->db->where('id_sarana', $id_sarana);
		return $this->db->get('ms_sarana')->row_object();
	}
	public function deleteSaranaById($id_sarana) {
		$this->db->where('id_sarana', $id_sarana);
		return $this->db->delete('ms_sarana');
	}
	public function deleteAllSarana() {
		return $this->db->query("DELETE FROM ms_sarana");
	}

	// TRYOUT//
	public function getTryoutByNoInduk($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_tryout')->row_object();
	}
	public function updateTryout($data) {
		$this->db->where('no_induk', $data['no_induk']);
		return $this->db->update('ms_tryout', $data);
	}
	public function insertTryout($data) {
		return $this->db->insert('ms_tryout', $data);
	}
	public function checkNoIndukTryout($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('ms_tryout')->row_object();
	}

	// LeggerNilai//
	public function getLeggerNilaiByNoInduk($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('legger_nilai_pengetahuan')->row_object();
	}
	public function updateLeggerNilai($data) {
		$this->db->where('no_induk', $data['no_induk']);
		return $this->db->update('legger_nilai_pengetahuan', $data);
	}
	public function insertLeggerNilai($data) {
		return $this->db->insert('legger_nilai_pengetahuan', $data);
	}
	public function checkNoIndukLeggerNilai($no_induk) {
		$this->db->where('no_induk', $no_induk);

		$query = "SELECT mtp.*,mtk.* FROM legger_nilai_pengetahuan mtp inner join legger_nilai_keterampilan mtk on mtp.no_induk = mtk.no_induk where mtp.no_induk = '".$no_induk."'";
		$mtp = $this->db->select('*')->get_compiled_select('legger_nilai_pengetahuan');
		$mtk = $this->db->select('*')->get_compiled_select('legger_nilai_keterampilan');
	    //$forum_categories = $this->db->select('name')->get_compiled_select('forum_categories');

		$query = $this->db->query($mtp.' UNION '.$mtk);

		return $query->result_array();
	}

	// LeggerNilai//
	public function getLeggerNilaiByNoIndukKeterampilan($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('legger_nilai_keterampilan')->row_object();
	}
	public function updateLeggerNilaiKeterampilan($data) {
		$this->db->where('no_induk', $data['no_induk']);
		return $this->db->update('legger_nilai_keterampilan', $data);
	}
	public function insertLeggerNilaiKeterampilan($data) {
		return $this->db->insert('legger_nilai_keterampilan', $data);
	}
	public function checkNoIndukLeggerNilaiKeterampilan($no_induk) {
		$this->db->where('no_induk', $no_induk);
		return $this->db->get('legger_nilai_keterampilan')->row_object();
	}

	
}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */ 