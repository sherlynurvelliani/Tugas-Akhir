<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket_user extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tiket_model');
	}

	//data tiket
	public function index()
	{
		$tiket = $this->Tiket_model->listing();
		$data = array('title' => 'Data Tiket', 
			'tiket' => $tiket,
			'isi'	=> 'tiket/list'
		);
		$this->load->view('user/tiket_user', $data, FALSE);
	}


	


}

/* End of file Tiket.php */
/* Location: ./application/controllers/admin/Tiket.php */