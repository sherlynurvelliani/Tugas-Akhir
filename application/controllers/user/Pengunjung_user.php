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

	public function cek_harga($tipe, $jml)
	{
		$data = $this->db->get_where('tabel_tiket', ['kategori'=> $tipe])->row_object();
		echo $data->harga*$jml;
	}


	//tambah data pengunjung
	public function tambah()
	{
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
		redirect(base_url('user/Pengunjung_user'),'refresh');

	}


	
}

/* End of file Pengunjung_user.php */
/* Location: ./application/controllers/admin/Pengunjung.php */
