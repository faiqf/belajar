<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends Auth_controller{

	public function __CONSTRUCT()
	{
		parent:: __CONSTRUCT();
		$this->load->model('M_guru');
		$this->load->model('M_mapel');
	}

	public function index()
	{
		$data['judul']   	= 'Menu guru';
		$data['data_guru']  = $this->M_guru->getguru();
		$this->load_template('Guru/Home', $data);
	}
	
	public function add_guru()
	{
		$data['judul']		 = 'Form Tambah Guru';
		$data['mapel']    	 = $this->M_mapel->GetMapel();
		$this->load_template('Guru/form_tambah_guru', $data);
	}

	public function act_tambah()
	{
		$param  = $this->input->POST();
		$proses = $this->M_guru->act_tambah($param);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('guru berhasil ditambahkan'));
			redirect('Guru');
		}else{

		$this->session->set_flashdata('alert_msg', err_msg('guru gagal ditambahkan'));
		redirect('Guru/add_guru');
		}
	}

	public function edit($id)
	{
		$data['judul']		= 'form edit guru';
		$data['data_guru']  = $this->M_guru->getDetailGuru($id);
		$data['mapel'] 		= $this->M_mapel->getMapel();
		$this->load_template('Guru/form_edit_guru', $data);
	}

	public function act_edit()
	{
		$param = $this->input->post();
		$proses = $this->M_guru->act_edit($param);

		if ($proses >= 0 ) {
			$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil di edit'));
			redirect('Guru');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Guru gagal di edit'));
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function Hapus($id)
	{
		$proses = $this->M_guru->act_hapus($id);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil dihapus'));
			
			redirect('Guru');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal mengpus guru'));
		
		redirect($_SERVER['HTTP_REFERER']);
		}

	}

}
