 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		//halaman utama dashboard
		$data = array('title' => 'Halaman Utama',
			'isi' => 'admin/list');
		// var_dump($data); die();
		$this->load->view('admin/wrapper', $data, FALSE);
	}


}