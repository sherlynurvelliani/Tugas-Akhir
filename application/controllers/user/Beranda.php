<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('informasi_model', 'im');
	}
	public function index()
	{
		//halaman utama User
		$model['user'] = $this->im->listing();
		$data = array('title' => 'Narmada Park',
			'isi' => 'user/body');
		$this->load->view('user/header', $data, FALSE);
		$this->load->view('user/body',$model);
		$this->load->view('user/footer', FALSE);
	}

	
}

/* End of file Beranda.php */
/* Location: ./application/controllers/User/Beranda.php */