<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//listing all admin
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tabel_pengunjung');
		$this->db->order_by('create_at','desc');
		$query = $this->db->get();
		return $query->result();
	}
//detail data pengunjung
	public function detail($id_booking)
	{
		$this->db->select('*');
		$this->db->from('tabel_pengunjung');
		$this->db->where('id_booking', $id_booking);
		$this->db->order_by('id_booking','asc');
		$query = $this->db->get();
		return $query->row();
	}

//Tambah Data
	public function tambah($data)
	{
		$this->db->insert('tabel_pengunjung', $data);
	}

//Edit
	public function edit($data)
	{
		$this->db->where('id_booking',$data['id_booking']);
		$this->db->update('tabel_pengunjung',$data);
	}

	public function satuData($value)
	{
		return $this->db->where(['id_booking'=> $value])->get('tabel_pengunjung')->row_object();

	}
	

	//hapus data
	public function HapusData($data)
	{
		$this->db->where('id_booking', $data['id_booking']);
		return $this->db->delete('tabel_pengunjung',$data);
	}


	public function getMAx($table=null, $field=null)
	{
		$this->db->select_max($field);
		return $this->db->get($table)->row_array()[$field];
	}

}

/* End of file Pengunjung_model.php */
/* Location: ./application/models/Pengunjung_model.php */