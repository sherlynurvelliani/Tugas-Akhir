<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//listing all user
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tabel_tiket');
		$this->db->order_by('id_tiket','asc');
		$query = $this->db->get();
		return $query->result();
	}
//detail tiket
	public function detail($id_tiket)
	{
		$this->db->where('id_tiket',$id_tiket);
		$this->db->from('tabel_tiket');
		
		$this->db->order_by('id_tiket','asc');
		$query = $this->db->get();
		return $query->row();
	}

//Tambah Data
	public function tambah($data)
	{
		$this->db->insert('tabel_tiket', $data);
	}

//Edit
	public function edit($data)
	{
		$this->db->where('id_tiket',$data['id_tiket']);
		$this->db->update('tabel_tiket',$data);
	}

	//update
	

	//hapus data
	public function HapusData($data)
	{
		$this->db->where('id_tiket', $data['id_tiket']);
		return $this->db->delete('tabel_tiket',$data);
	}


}

/* End of file Tiket_model.php */
/* Location: ./application/models/Tiket_model.php */