<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GraduatedCtrl extends MY_Controller {

	public function index($id_graduated = NULL) {
		if ($this->input->post('id_graduated')) {
			$this->graduated->updateGraduated($this->input->post());
			$this->message('success','Data alumni berhasil diubah');
			redirect('C_home/graduated');
		} elseif($this->input->post()) {
			$this->graduated->insertGraduated($this->input->post());
			$this->message('success','Data alumni berhasil ditambahkan');
			redirect('C_home/graduated');
		} elseif($id_graduated) {
			$this->graduated->deleteGraduated($id_graduated);
			$this->message('success','Data alumni berhasil dihapus');
			redirect('C_home/graduated');
		} else {
			redirect('C_home/graduated');
		}
	}
	
	//RAPORT PAS//
	public function raportpas($id_raport = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_raport')) {
				if ($this->input->post('password')) {
					$data['password'] = crypt($data['password'],'');
				} else {
					unset($data['password']);
				}
				$this->graduated->updateRaportpas($data);
				$this->message('success','Data Raport berhasil diubah');
			} else {
				if ($this->graduated->checkNoIndukpas($this->input->post('no_induk'))) {
					$this->message('danger','Ooppss no induk sudah terdaftar');
				} else {
					$data['password'] = crypt($data['password'],'');
					$this->graduated->insertRaportpas($data);
					$this->message('success','Data Raport berhasil ditambahkan');
				}
			}
		} elseif($id_raport) {
			$this->graduated->deleteRaportpas($id_raport);
			$this->message('success','Data raport berhasil dihapus');
		}
		redirect('C_home/raportpas');
	}

	//KELULUSAN//
	public function kelulusan($id_kelulusan = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_kelulusan')) {
				if ($this->input->post('password')) {
					$data['password'] = crypt($data['password'],'');
				} else {
					unset($data['password']);
				}
				$this->graduated->updateKelulusan($data);
				$this->message('success','Data kelulusan berhasil diubah');
			} else {
				if ($this->graduated->checkNoUjian($this->input->post('no_ujian'))) {
					$this->message('danger','Ooppss no ujian sudah terdaftar');
				} else {
					$data['password'] = crypt($data['password'],'');
					$this->graduated->insertKelulusan($data);
					$this->message('success','Data kelulusan berhasil ditambahkan');
				}
			}
		} elseif($id_kelulusan) {
			$this->graduated->deleteKelulusan($id_kelulusan);
			$this->message('success','Data kelulusan berhasil dihapus');
		}
		redirect('C_home/kelulusan');
	}

	//PPDB//
	public function ppdb($id_ppdb = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_ppdb')) {
				$this->graduated->updatePpdb($data);
				$this->message('success','Data ppdb berhasil diubah');
			} else {
				if ($this->graduated->checkNoDaftar($this->input->post('no_daftar'))) {
					$this->message('danger','Ooppss no pendaftaran sudah terdaftar');
				} else {
					$this->graduated->insertPpdb($data);
					$this->message('success','Data ppdb berhasil ditambahkan');
				}
			}
		} elseif($id_ppdb) {
			$this->graduated->deletePpdb($id_ppdb);
			$this->message('success','Data ppdb berhasil dihapus');
		}
		redirect('C_home/ppdb');
	}

	//Raport Kelas 7//
	public function raport($id_raport = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_raport')) {
				$this->graduated->updateRaport($data);
				$this->message('success','Data raport berhasil diubah');
			} else {
				if ($this->graduated->checkNoInduk($this->input->post('no_induk'))) {
					$this->message('danger','Ooppss no induk sudah terdaftar');
				} else {
					$this->graduated->insertRaport($data);
					$this->message('success','Data raport berhasil ditambahkan');
				}
			}
		} elseif($id_raport) {
			$this->graduated->deleteRaport($id_raport);
			$this->message('success','Data raport berhasil dihapus');
		}
		redirect('C_home/raport');
	}

	//Raport Kelas 8//
	public function raport8($id_raport = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_raport')) {
				$this->graduated->updateRaport8($data);
				$this->message('success','Data raport berhasil diubah');
			} else {
				if ($this->graduated->checkNoInduk8($this->input->post('no_induk'))) {
					$this->message('danger','Ooppss no induk sudah terdaftar');
				} else {
					$this->graduated->insertRaport8($data);
					$this->message('success','Data raport berhasil ditambahkan');
				}
			}
		} elseif($id_raport) {
			$this->graduated->deleteRaport8($id_raport);
			$this->message('success','Data raport berhasil dihapus');
		}
		redirect('C_home/raport8');
	}

	//Raport Kelas 9//
	public function raport9($id_raport = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_raport')) {
				$this->graduated->updateRaport9($data);
				$this->message('success','Data raport berhasil diubah');
			} else {
				if ($this->graduated->checkNoInduk9($this->input->post('no_induk'))) {
					$this->message('danger','Ooppss no induk sudah terdaftar');
				} else {
					$this->graduated->insertRaport9($data);
					$this->message('success','Data raport berhasil ditambahkan');
				}
			}
		} elseif($id_raport) {
			$this->graduated->deleteRaport9($id_raport);
			$this->message('success','Data raport berhasil dihapus');
		}
		redirect('C_home/raport9');
	}
	
	//UJIAN KELAS 7//
	public function ujian($id_ujian = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_ujian')) {
				if ($this->input->post('ks_password')) {
					$data['ks_password'] = crypt($data['ks_password'],'');
				} else {
					unset($data['ks_password']);
				}
				$this->graduated->UpdateUjian($data);
				$this->message('success','Data Ujian berhasil diubah');
			} else {
				if ($this->graduated->checkNisUjian($this->input->post('ks_nis'))) {
					$this->message('danger','Ooppss no nis sudah terdaftar');
				} else {
					$data['ks_password'] = crypt($data['ks_password'],'');
					$this->graduated->insertUjian($data);
					$this->message('success','Data Ujian berhasil ditambahkan');
				}
			}
		} elseif($id_ujian) {
			$this->graduated->deleteUjian($id_ujian);
			$this->message('success','Data Ujian berhasil dihapus');
		}
		redirect('C_home/ujian');
	}

	//UJIAN KELAS 8//
	public function ujian8($id_ujian = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_ujian')) {
				if ($this->input->post('ks_password')) {
					$data['ks_password'] = crypt($data['ks_password'],'');
				} else {
					unset($data['ks_password']);
				}
				$this->graduated->UpdateUjian8($data);
				$this->message('success','Data Ujian berhasil diubah');
			} else {
				if ($this->graduated->checkNisUjian8($this->input->post('ks_nis'))) {
					$this->message('danger','Ooppss no nis sudah terdaftar');
				} else {
					$data['ks_password'] = crypt($data['ks_password'],'');
					$this->graduated->insertUjian8($data);
					$this->message('success','Data Ujian berhasil ditambahkan');
				}
			}
		} elseif($id_ujian) {
			$this->graduated->deleteUjian8($id_ujian);
			$this->message('success','Data Ujian berhasil dihapus');
		}
		redirect('C_home/ujian8');
	}

	//UJIAN KELAS 9//
	public function ujian9($id_ujian = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_ujian')) {
				if ($this->input->post('ks_password')) {
					$data['ks_password'] = crypt($data['ks_password'],'');
				} else {
					unset($data['ks_password']);
				}
				$this->graduated->UpdateUjian9($data);
				$this->message('success','Data Ujian berhasil diubah');
			} else {
				if ($this->graduated->checkNisUjian9($this->input->post('ks_nis'))) {
					$this->message('danger','Ooppss no nis sudah terdaftar');
				} else {
					$data['ks_password'] = crypt($data['ks_password'],'');
					$this->graduated->insertUjian9($data);
					$this->message('success','Data Ujian berhasil ditambahkan');
				}
			}
		} elseif($id_ujian) {
			$this->graduated->deleteUjian9($id_ujian);
			$this->message('success','Data Ujian berhasil dihapus');
		}
		redirect('C_home/ujian9');
	}
	
	//JADWAL & LINK SOAL//
	public function linkujian7($id_linkujian7 = NULL) {
		if ($this->input->post('id_linkujian7')) {
			$this->graduated->updateLinkujian7($this->input->post());
			$this->message('success','Data Link Ujian berhasil diubah');
			redirect('C_home/linkujian7');
		} elseif($this->input->post()) {
			$this->graduated->insertLinkujian7($this->input->post());
			$this->message('success','Data Link Ujian berhasil ditambahkan');
			redirect('C_home/linkujian7');
		} elseif($id_linkujian7) {
			$this->graduated->deleteLinkujian7($id_linkujian7);
			$this->message('success','Data Link Ujian berhasil dihapus');
			redirect('C_home/linkujian7');
		} else {
			redirect('C_home/linkujian7');
		}
	}

	//TRYOUT//
	public function tryout($id_tryout = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_tryout')) {
				$this->graduated->updateTryout($data);
				$this->message('success','Data tryout berhasil diubah');
			} else {
				if ($this->graduated->checkNoIndukTryout($this->input->post('no_induk'))) {
					$this->message('danger','Ooppss no induk sudah terdaftar');
				} else {
					$this->graduated->insertTryout($data);
					$this->message('success','Data tryout berhasil ditambahkan');
				}
			}
		} elseif($id_tryout) {
			$this->graduated->deleteTryout($id_tryout);
			$this->message('success','Data tryout berhasil dihapus');
		}
		redirect('C_home/tryout');
	}

	//LeggerNilai//
	public function legger_nilai($id_legger_nilai = NULL) {
		if ($this->input->post()) {
			$data = $this->input->post();
			if ($this->input->post('id_legger_nilai')) {
				$this->graduated->updateLeggerNilai($data);
				$this->message('success','Data LeggerNilai berhasil diubah');
			} else {
				if ($this->graduated->checkNoIndukLeggerNilai($this->input->post('no_induk'))) {
					$this->message('danger','Ooppss no induk sudah terdaftar');
				} else {
					$this->graduated->insertLeggerNilai($data);
					$this->message('success','Data LeggerNilai berhasil ditambahkan');
				}
			}
		} elseif($id_legger_nilai) {
			$this->graduated->deleteLeggerNilai($id_legger_nilai);
			$this->message('success','Data LeggerNilai berhasil dihapus');
		}
		redirect('C_home/LeggerNilai');
	}

}

/* End of file GraduatedCtrl.php */
/* Location: ./application/controllers/graduated/GraduatedCtrl.php */