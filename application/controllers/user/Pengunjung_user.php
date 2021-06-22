<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung_user extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengunjung_model');
		$this->load->model('Tiket_model', 'tm');
	}
	//data pengunjung
	public function index()
	{
		$tiket = $this->tm->listing();
		$data = array(
			'title' => 'Data pengunjung', 
			'tiket' => $tiket,
			'isi'	=> 'pengunjung/list'
		);
		$this->load->view('user/pengunjung_user', $data, FALSE);
	}


	//tambah data pengunjung
	public function tambah()
	{
		//validasi input
		$valid = $this->form_validation;
		
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama','nama','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('no_hp','no_hp','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('tanggal','tanggal','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('kategori','kategori','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('jumlah','jumlah','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('harga','harga','required',
			array('required' => '%s Harus Diisi' ));


		if ($valid->run()===FALSE) {
			//end validasi
			// $data = array('title' => 'Tambah Data Pengunjung', 
			// 	'isi'	=> 'pengunjung/tambah'
			// );
			// $this->load->view('user/Beranda', $data, FALSE);
			$this->index();
		}else{
			$i = $this->input;
			$data = array(
				'nama' => $i->post('nama'),
				'no_hp' => $i->post('no_hp'),
				'tanggal' => $i->post('tanggal'),
				'kategori' => $i->post('kategori'),
				'jumlah' => $i->post('jumlah'),
				'harga' => $i->post('harga'),
			);
			$this->Pengunjung_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah di Tambahkan');
			redirect(base_url('user/Beranda'),'refresh');
		}
	}


	
}

/* End of file Pengunjung_user.php */
/* Location: ./application/controllers/admin/Pengunjung.php */