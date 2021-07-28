<?php
defined('BASEPATH') or exit('No direct script allowed');

class Claporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlaporan');
	}

	public function index()
	{
		$data['title'] = "Laporan Transaksi";
		$data['tahun'] = $this->Mlaporan->gettahun();
		$data = array(
			'title' => 'Halaman Utama',
			'isi' => 'vlaporan/laporan'
		);
		$data['tahun'] = $this->Mlaporan->gettahun();
//		var_dump($data);
//		die();

		$this->load->view('admin/wrapper', $data, FALSE);

	}

//Barang Masuk
	function filter()
	{
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');
		$tahun1 = $this->input->post('tahun1');
		$bulanawal = $this->input->post('bulanawal');
		$bulanakhir = $this->input->post('bulanakhir');
		$tahun2 = $this->input->post('tahun2');
		$nilaifilter = $this->input->post('nilaifilter');

		if ($nilaifilter == 1) {

			$data['title'] = "Laporan Data Pengunjung Berdasarkan Tanggal";
			$data['subtitle'] = "Dari Tanggal : " . $tanggalawal . " Sampai Tanggal : " . $tanggalakhir;
			$data['datafilter'] = $this->Mlaporan->bytanggal($tanggalawal, $tanggalakhir);
			$data['jumlah_pengunjung'] = $this->Mlaporan->jumlah_pengunjung();
			$data['total_pendapatan'] = $this->Mlaporan->total_pendapatan();
			// var_dump($data['jumlah_pengunjung']); die();

			$this->load->view('vlaporan/cetak_laporan_pengunjung', $data);

		} elseif ($nilaifilter == 2) {

			$data['title'] = "Laporan Data Pengunjung Berdasarkan Bulan";
			$data['subtitle'] = "Dari Bulan : " . $bulanawal . " Sampai Bulan : " . $bulanakhir . " Tahun : " . $tahun1;
			$data['datafilter'] = $this->Mlaporan->bybulan($tahun1, $bulanawal, $bulanakhir);

			$this->load->view('vlaporan/cetak_laporan_pengunjung', $data);

		} elseif ($nilaifilter == 3) {

			$data['title'] = "Laporan Data Pengunjung Per Tahun";
			$data['subtitle'] = "Tahun : " . $tahun2;
			$data['datafilter'] = $this->Mlaporan->bytahun($tahun2);

			$this->load->view('vlaporan/cetak_laporan_pengunjung', $data);
		}

	}

}
