<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {

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
		$this->load->view('admin/wrapper', $data, FALSE);
	}


	//tambah tiket
	public function tambah()
	{
		//validasi input
		$valid = $this->form_validation;
		
		$valid->set_rules('id_tiket','id_tiket','required',
			array('required' => '%s Harus Diisi' ));
		$valid->set_rules('kategori','kategori','required',
			array('required' => '%s Harus Diisi' ));
		$valid->set_rules('harga','harga','required',
			array('required' => '%s Harus Diisi' ));
		if ($valid->run()===FALSE) {
			//end validasi
			$data = array('title' => 'Tambah Data Tiket', 
				'isi'	=> 'tiket/tambah'
			);
			$this->load->view('admin/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array(
				'id_tiket' => $i->post('id_tiket'),
				'kategori' => $i->post('kategori'),
				'harga' => $i->post('harga')
				
			);
			$this->Tiket_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah di Tambahkan');
			redirect(base_url('admin/tiket'),'refresh');
		}
	}


	//Edit tiket
	public function edit($id_tiket){
		$tiket = $this->Tiket_model->detail($id_tiket);
		//validasi input
		$valid = $this->form_validation;
		$valid->set_rules('id_tiket','id_tiket','required',
			array('required' => '%s Harus Diisi' ));
		$valid->set_rules('kategori','kategori','required',
			array('required' => '%s Harus Diisi' ));
		$valid->set_rules('harga','harga','required',
			array('required' => '%s Harus Diisi' ));
		if ($valid->run()===FALSE) {
			//end validasi
			$data = array('title' => 'Edit Data Tiket', 
				'tiket' => $tiket,
				'isi'	=> 'tiket/edit'
			);
			$this->load->view('admin/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array(
				'id_tiket' => $i->post('id_tiket'),
				'kategori' => $i->post('kategori'),
				'harga' => $i->post('harga')
				
			);
			$this->Tiket_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah di Edit');
			redirect(base_url('admin/tiket'),'refresh');
		}
	}
	

	//delete tiket
	public function delete($id_tiket){

		$data = array('id_tiket' => $id_tiket);
		$this->Tiket_model->HapusData($data);
		redirect('admin/tiket','refresh');
	}


}

/* End of file Tiket.php */
/* Location: ./application/controllers/admin/Tiket.php */