<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends Auth_controller {

	public function __CONSTRUCT()
	{
		parent:: __CONSTRUCT();

		$this->load->model('M_mapel');
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data['judul'] = 'Data Mapel';
		$data['mapel'] = $this->M_mapel->getmapel();
		$this->load_template('Mapel/Home', $data);

		
	}

	public function add_mapel()
	{
		$data['judul']	= 'Form Tambah Mapel';
		$this->load_template('Mapel/form_tambah_mapel', $data);

	}

	public function act_tambah()
	{
		$param  = $this->input->POST();
		$proses = $this->M_mapel->act_tambah($param);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil Menambahkan Mata Pelajaran Baru'));

			redirect('Mapel');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal Menambahkan Mata Pelajaran Baru'));

			redirect('Mapel/add_mapel');
		}

	}

	public function edit($id)
	{
		$data['judul'] = 'Form Edit Mapel';
		$data['mapel'] = $this->M_mapel->getDetailMapel($id);
		$this->load_template('Mapel/Form_edit_Mapel', $data);

 	}

 	public function act_edit()
 	{
 		$param  = $this->input->POST();
 		$proses = $this->M_mapel->act_edit($param);

 		if ($proses >= 0) {
 		 	$this->session->set_flashdata('alert_msg', succ_msg('Berhasil Mengedit Mata Pelajaran'));
 		 	
 		 	redirect('Mapel');
 		 }else{
 		 	$this->session->set_flashdata('alert_msg', err_msg('Gagal mengedit Mata Pelajaran'));
 		 	redirect($_SERVER['HTTP_REFERER']);
 		 }
 	}

 	public function hapus($id)
 	{
 		$proses = $this->M_mapel->act_hapus($id);

 		if ($proses >= 0) {
 			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil Menghapus Mata Pelajaran'));

 			redirect('mapel');
 		}else{
 			$this->session->set_flashdata('alert_msg', err_msg('Gagal Menghapus MAta pelajaran'));
 			
 			redirect($_SERVER, [HTTP_REFERER]);
 		}
 	}

}
