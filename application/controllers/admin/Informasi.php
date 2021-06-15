<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Informasi_model');
	}
	//data Informasi
	public function index()
	{
		$informasi = $this->Informasi_model->listing();
		$data = array('title' => 'Data Informasi', 
			'informasi' => $informasi,
			'isi'	=> 'informasi/list'
		);
		$this->load->view('admin/wrapper', $data, FALSE);
	}


	//tambah data informasi
	public function tambah()
	{
		//validasi input
		$valid = $this->form_validation;
		
		$valid->set_rules('id_informasi','judul','required',
			array('required' => '%s Harus Diisi' ));
		$valid->set_rules('ket','tanggal','required',
			array('required' => '%s Harus Diisi' ));
		
		if ($valid->run()===FALSE) {
			//end validasi
			$data = array('title' => 'Tambah Data Informasi', 
				'isi'	=> 'informasi/tambah'
			);
			$this->load->view('admin/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array(
				'id_informasi' => $i->post('id_informasi'),
				'judul' => $i->post('judul'),
				'gambar' => $i->post('gambar'),
				'ket' => $i->post('ket'),
				'tanggal' => $i->post('tanggal')
			);
			$this->Informasi_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data Telah di Tambahkan');
			redirect(base_url('admin/informasi'),'refresh');
		}
	}


	//Edit Informais
	public function edit($id_informasi){
		$supplier = $this->Pengunjung_model->detail($id_informasi);
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('id_informasi','id_informasi','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('judul','judul','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('ket','ket','required',
			array('required' => '%s Harus Diisi' ));

		$valid->set_rules('tanggal','tanggal','required',
			array('required' => '%s Harus Diisi' ));
		if ($valid->run()===FALSE) {
			$data = array('title' => 'Edit Data Informasi', 
				'informasi' => $informasi,
				'isi'	=> 'informasi/edit'
			);
			$this->load->view('admin/wrapper', $data, FALSE);
		}else{
			$i = $this->input;
			$data = array('id_informasi' => $id_informasi,
				'judul' => $i->post('judul'),
				'ket' => $i->post('ket'),
				'tanggal' => $i->post('tanggal')
			);
			$this->Informasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah di Edit');
			redirect(base_url('admin/informasi'),'refresh');
		}
	}
	

	//delete data informasi
	public function delete($id_informasi){

		$data = array('id_informasi' => $id_informasi);
		$this->Informasi_model->HapusData($data);
		redirect('admin/informasi','refresh');
	}


}

/* End of file Informasi.php */
/* Location: ./application/controllers/admin/Informasi.php */