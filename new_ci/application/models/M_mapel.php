<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {

	public function getMapel()
	{
		$data = $this->db->get('mapel');
		return $data->result();
	}

	public function act_tambah($param)
	{

		$this->db->insert('mapel', $param);
		return  $this->db->affected_rows();
	}

	public function getDetailMapel($id)
	{
		$this->db->where('id_mapel', $id);
		$data = $this->db->get('mapel');

		return $data->row();
	}

	public function act_edit($param)
	{
		$object = [
		 			'nama_mapel' => $param['nama']
				  ];
		$this->db->where('id_mapel', $param['id']);
		$this->db->update('mapel', $object);

		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_mapel', $id);
		$this->db->delete('mapel');

		return $this->db->affected_rows();
	}

}
