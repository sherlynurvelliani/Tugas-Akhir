<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengunjung_model');
	}

	//data pengunjung
	public function index()
	{
		$pengunjung = $this->Pengunjung_model->listing();
		$data = array('title' => 'Data pengunjung',
			'pengunjung' => $pengunjung,
			'isi' => 'pengunjung/list'
		);
		$this->load->view('admin/wrapper', $data, FALSE);
	}


	//tambah data pengunjung
	public function tambah()
	{
//		echo '<pre>';
//		var_dump($_POST);
//		die();
		$i = $this->input;
		$data = array(
			'nama' => $i->post('nama'),
			'no_hp' => $i->post('no_hp'),
			'tanggal' => $i->post('tanggal'),
			'jml_anak' => $i->post('jml_anak'),
			'jml_dewasa' => $i->post('jml_dewasa'),
			'jml_wna' => $i->post('jml_wna'),
			'jumlah_pengunjung' => $i->post('jumlah_tiket'),
			'total_harga' => $i->post('total_harga'),
			'catatan' => $i->post('catatan'),
		);
		$this->Pengunjung_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data Telah di Tambahkan');
		redirect(base_url('admin/pengunjung'), 'refresh');

	}


	//Edit Pengunjung
	public function edit($id_booking)
	{
		$pengunjung = $this->Pengunjung_model->detail($id_booking);
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('id_booking', 'id_booking', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('nama', 'nama', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('no_hp', 'no_hp', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('tanggal', 'tanggal', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('kategori', 'kategori', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('jumlah', 'jumlah', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('harga', 'harga', 'required',
			array('required' => '%s Harus Diisi'));

		if ($valid->run() === FALSE) {
			$data = array('title' => 'Edit Data Pengunjung',
				'pengunjung' => $pengunjung,
				'isi' => 'pengunjung/edit'
			);
			$this->load->view('admin/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array('id_booking' => $id_booking,
				'nama' => $i->post('nama'),
				'no_hp' => $i->post('no_hp'),
				'tanggal' => $i->post('tanggal'),
				'kategori' => $i->post('kategori'),
				'jumlah' => $i->post('jumlah'),
				'harga' => $i->post('harga'),
			);
			$this->Pengunjung_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data Telah di Edit');
			redirect(base_url('admin/pengunjung'), 'refresh');
		}
	}


	//delete data pengunjung
	public function delete($id_booking)
	{

		$data = array('id_booking' => $id_booking);
		$this->Pengunjung_model->HapusData($data);
		redirect('admin/pengunjung', 'refresh');
	}
}

/* End of file Pengunjung.php */
/* Location: ./application/controllers/admin/Pengunjung.php */
