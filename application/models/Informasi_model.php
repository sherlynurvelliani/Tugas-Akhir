<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//listing all admin
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tabel_informasi');
		$this->db->order_by('id_informasi','asc');
		$query = $this->db->get();
		return $query->result();
	}
//detail data informasi
	public function detail($id_informasi)
	{
		$this->db->select('*');
		$this->db->from('tabel_informasi');
		$this->db->where('id_informasi', $id_informasi);
		$this->db->order_by('id_informasi','asc');
		$query = $this->db->get();
		return $query->row();
	}

//Tambah Data
	public function tambah($data)
	{
		$this->db->insert('tabel_informasi', $data);
	}

//Edit
	public function edit($data)
	{
		$this->db->where('id_informasi',$data['id_informasi']);
		$this->db->update('tabel_informasi',$data);
	}

	//hapus data
	public function HapusData($data)
	{
		$this->db->where('id_informasi', $data['id_informasi']);
		return $this->db->delete('tabel_informasi',$data);
	}


}

/* End of file Informasi_model.php */
/* Location: ./application/models/Informasi_model.php */