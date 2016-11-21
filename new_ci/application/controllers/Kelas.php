<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends Auth_controller {

	public function __CONSTRUCT()
	{
		parent::__CONSTRUCT();
		$this->load->model('M_kelas');
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data['judul']	= 'Data Kelas';
		$data['kelas']	= $this->M_kelas->getkelas();

		$this->load_template('Kelas/Home', $data);
	}

	public function add_kelas()
	{
		$data['judul']	= 'Form Tambah Kelas';
		$data['kelas']	=  $this->M_kelas->getkelas();
		$this->load_template('Kelas/form_tambah_kelas', $data);
	}

	public function act_tambah()
	{
		$param = $this->input->post();
		$proses = $this->M_kelas->act_tambah($param);

		if ($proses >= 0 ) {
			$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil ditambahkan'));

			redirect('Kelas');

		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Kelas Gagal ditambahkan'));

			redirect('Kelas/add_kelas');
		}
	}

	public function edit($id)
	{
		$data['judul'] = 'Form edit kelas';
		$data['kelas'] = $this->M_kelas->getDetailKelas($id);
		$data['guru']  = $this->M_guru->getGuru();
		$this->load_template('kelas/form_edit_kelas', $data);
	}

	public function act_edit($param)
	{
		$param = $this->input->post();
		$proses = $this->M_kelas->act_edit($param);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil di edit'));

			redirect('Kelas');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal di edit'));

			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function act_hapus($id)
	{
		$proses = $this->M_kelas->act_hapus($id);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil Di Hapus'));
			
			redirect('Kelas');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal di hapus'));
			
			redirect($_SERVER,['HTTP_REFERER']);		
		}
	}

}
