<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'Halaman Utama',
			'isi' => 'template/list');
		$this->load->view('template/wrapper', $data, FALSE);
		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/template/Dashboard.php */