<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	public function index()
	{
		//halaman utama User
		$data = array('title' => 'Narmada Park',
			'isi' => 'user/body');
		$this->load->view('user/header', $data, FALSE);
		$this->load->view('user/body', FALSE);
		$this->load->view('user/footer', FALSE);
	}
}

/* End of file Beranda.php */
/* Location: ./application/controllers/User/Beranda.php */