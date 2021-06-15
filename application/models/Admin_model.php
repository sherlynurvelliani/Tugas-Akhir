<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
// listing semua admin
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tabel_admin');
		$this->db->order_by('id_admin', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	// detail user
	public function detail($id_admin)
	{
		$this->db->select('*');
		$this->db->from('tabel_admin');
		$this->db->where('id_admin', $id_user);
		$this->db->order_by('id_admin', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

	// login user
	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('tabel_admin');
		$this->db->where(array( 'username'  => $username,
			'password'  => SHA1($password)));
		$this->db->order_by('id_admin', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

// tambah
	public function tambah($data)
	{
		$this->db->insert('tabel_admin', $data);
	}

// delete user
	public function edit($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update('tabel_admin', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->delete('tabel_admin', $data);
	} 

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */