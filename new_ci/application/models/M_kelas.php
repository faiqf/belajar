<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function getKelas()
	{
		$this->db->select('kelas.*, guru.nama_guru');
		$this->db->from('kelas');
		$this->db->join('guru', 'kelas.id_guru = guru.id_guru', 'left');

		$data = $this->db->get();
		return $data->result();
	}

	public function act_tambah($param)
	{
		$this->db->insert('kelas', $param);
		return $this->db->affected_rows();
	}

	public function getDetailKelas($id)
	{	
		$this->db->where('id_kelas', $id);
		$data = $this->db->get('kelas');

		return $data->row();
	}

	public function act_edit($param)
	{
		$object = [
					 'nama_kelas' => $param['nama'],
					 'id_guru' 	 => $param['id_guru']

		    	  ];

		$this->db->where('id_kelas', $param['id']);
		$this->db->update('kelas', $object);

		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');

		return $this->db->affected_rows();
	}
}
