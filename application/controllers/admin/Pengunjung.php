<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengunjung_model');
		$this->load->model('Tiket_model');
	}

	//data pengunjung
	public function index()
	{
		$pengunjung = $this->Pengunjung_model->listing();
		// echo "<pre>";
		// var_dump($pengunjung);
		// die();
		$data = array('title' => 'Data pengunjung',
			'pengunjung' => $pengunjung,
			'isi' => 'pengunjung/list'
		);
		$this->load->view('admin/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$tiket = $this->Tiket_model->listing();

		$data = array('title' => 'Tambah Data pengunjung',
			'pengunjung' => $tiket,
			'isi' => 'pengunjung/tambah'
		);
		$this->load->view('admin/wrapper', $data, FALSE);
	}

	//tambah data pengunjung
	public function proses_tambah()
	{
		$table = "tabel_pengunjung";
		$field = "id_booking";

		$lastkode = $this->Pengunjung_model->getMax($table, $field);
		$no = (int)substr($lastkode, -4, 4);
		$no++;

		$ket = 'TN';
		$kode = $ket . '-' . sprintf('%04s', $no);
		$i = $this->input;
		$data = array(
			'id_booking' => $kode,
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
		// validasi input
		$valid = $this->form_validation;
		$valid->set_rules('nama', 'nama', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('no_hp', 'no_hp', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('tanggal', 'tanggal', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('catatan', 'catatan', 'required',
			array('required' => '%s Harus Diisi'));

		$valid->set_rules('status_bayar', 'status_bayar', 'required',
			array('required' => '%s Harus Diisi'));

		if ($valid->run() === FALSE) {
			$data = array('title' => 'Edit Data Pengunjung',
				'pengunjung' => $pengunjung,
				'isi' => 'pengunjung/edit'
			);
			$this->load->view('admin/wrapper', $data, FALSE);
		} else {
			$i = $this->input;
			$data = array(
				'id_booking' => $id_booking,
				'nama' => $i->post('nama'),
				'no_hp' => $i->post('no_hp'),
				'tanggal' => $i->post('tanggal'),
				'jml_anak' => $i->post('jml_anak'),
				'jml_dewasa' => $i->post('jml_dewasa'),
				'jml_wna' => $i->post('jml_wna'),
				'jumlah_pengunjung' => $i->post('jumlah_tiket'),
				'total_harga' => $i->post('total_harga'),
				'status_bayar' => $i->post('status_bayar'),
				'catatan' => $i->post('catatan'),
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
