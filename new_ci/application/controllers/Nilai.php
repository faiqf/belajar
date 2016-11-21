<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_controller {

	public function __CONSTRUCT()
	{
		parent::__construct();
		$this->load->model('M_nilai');
		$this->load->model('M_siswa');
		$this->load->model('M_mapel');
	}

	public function index()
	{
		$data['judul'] = 'Nilai';
		$data['nilai'] = $this->M_nilai->getNilai();
		$this->load_template('Nilai/Home', $data);
	}

	public function tambah_nilai()
	{
		$data['judul'] = 'Form Tambah Nilai';
		$data['data']  = $this->M_nilai->getNilai();
		$data['mapel'] = $this->M_mapel->getMapel();
		$data['siswa'] = $this->M_siswa->getSiswaS();
		$this->load_template('Nilai/form_tambah_nilai', $data);
	}

	public function act_tambah()
	{
		$param  = $this->input->POST();
		$proses = $this->M_nilai->act_tambah($param);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil Menambahkan  Nilai'));
			
			redirect('Nilai');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal Menambahkan Nilai'));

			redirect($_SERVER['HTTP_REFERER']);
		}

	}
	
	public function edit($id)
	{
		$data['judul']  = 'Form Edit ';
		$data['nilai']  = $this->M_nilai->getDetailNilai($id);
		$data['siswa']  = $this->M_siswa->getSiswaS();
		$data['mapel']  = $this->M_mapel->getMapel();
		$this->load_template('Nilai/form_edit_nilai', $data);
	}

	public function act_edit()
	{
		$param  = $this->input->POST();
		$proses = $this->M_nilai->act_edit($param);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil Mengedit Nilai'));

			redirect('Nilai');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal mengedit Nilai'));

			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function hapus($id)
	{
		$proses = $this->M_nilai->act_hapus($id);

		if ($proses >= 0 ) {
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil MenghapuS Nilai'));

			redirect('Nilai');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal Menghapus Nilai'));

			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}



}
