<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller {

	public function __CONSTRUCT()
	{
		parent::__CONSTRUCT();
		$this->load->model('M_siswa');
		$this->load->model('M_kelas');
	}

	public function index()
	{
			$data['judul'] 		= 'Menu siswa';
			$data['data_siswa'] = $this->M_siswa->getsiswa();
			$this->load_template('siswa/Home', $data);
	}

	public function add_siswa()
	{
		$data['judul'] 		= 'Tambah siswa';
		$data['kelas']		= $this->M_kelas->getKelas();
		$this->load_template('siswa/form_tambah_siswa', $data);
	}

	public function act_tambah()
	{ 
		$this->form_validation->set_rules('nama', 'NAMA', 'required');
	  	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	  	$this->form_validation->set_rules('id_kelas', 'Kelas', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
		
			redirect('Siswa/add_siswa');

		}else{
		
		$param = $this->input->post();
		$proses = $this->M_siswa->act_tambah($param);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('siswa berhasil di inputkan'));
			redirect('Siswa');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('siswa gagal di inputkan'));
			redirect('Siswa/add_siswa');
			}
		}
	}

	public function edit($id)
	{
		$data['judul']		= 'Edit siswa';
		$data["data_siswa"] = $this->M_siswa->getDetailSiswa($id);
		$data['kelas']		= $this->M_kelas->getKelas();
		$this->load_template('Siswa/form_Edit_siswa', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama', 'NAMA', 'required');
	  	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	  	$this->form_validation->set_rules('id_kelas', 'kelas', 'required');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
		
			redirect('Siswa/add_siswa');

		}else{

		$param = $this->input->post();
		$proses = $this->M_siswa->act_edit($param);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('siswa berhasil di edit'));
			redirect('Siswa');
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('siswa gagal di EDIT'));
			redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id)
	{
		$proses = $this->M_siswa->act_hapus($id);

		if ($proses >= 0) {
			$this->session->set_flashdata('alert_msg', succ_msg('siswa berhasil di Hapus'));
		
		}else{
			$this->session->set_flashdata('alert_msg', err_msg('siswa gagal di Hapus'));
			
		}
			redirect('Siswa');
	}
}

