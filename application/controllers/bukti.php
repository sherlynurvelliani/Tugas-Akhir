<?php
defined('BASEPATH') or exit('No direct script allowed');

class bukti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bukti_model');
    }

    public function index()
    {
        $data['title'] = "Laporan Transaksi";
        $data['tahun'] = $this->Mlaporan->gettahun();
        $data = array(
            'title' => 'Halaman Utama',
            'isi' => 'vlaporan/laporan'
        );

        //$data['tahunk'] = $this->Mlaporan->gettahun2();

        $this->load->view('admin/wrapper', $data, FALSE);
    }

    //Barang Masuk
    public function filter()
    {
        $nama = $this->input->post('nama$nama');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');
        $nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 1) {

            $data['title'] = "Bukti Pembayaran";
            $data['subtitle'] = "Dari : " . $nama;
            $data['datafilter'] = $this->bukti_model->bytanggal($nama);
            $this->load->view('user/bukti_tiket', $data);
        } elseif ($nilaifilter == 2) {

            $data['title'] = "Laporan Data Barang By Bulan";
            $data['subtitle'] = "Dari Bulan : " . $bulanawal . " Sampai Bulan : " . $bulanakhir . " Tahun : " . $tahun1;
            $data['datafilter'] = $this->Mlaporan->bybulan($tahun1, $bulanawal, $bulanakhir);

            $this->load->view('vlaporan/cetak_laporan_masuk', $data);
        } elseif ($nilaifilter == 3) {

            $data['title'] = "Laporan Data Barang Masuk Per Tahun";
            $data['subtitle'] = "Tahun : " . $tahun2;
            $data['datafilter'] = $this->Mlaporan->bytahun($tahun2);

            $this->load->view('vlaporan/cetak_laporan_masuk', $data);
        }
    }


    //Barang Keluar
    function filter2()
    {
        $tanggalawalk = $this->input->post('tanggalawalk');
        $tanggalakhirk = $this->input->post('tanggalakhirk');
        $tahun1k = $this->input->post('tahun1k');
        $bulanawalk = $this->input->post('bulanawalk');
        $bulanakhirk = $this->input->post('bulanakhirk');
        $tahun2k = $this->input->post('tahun2k');
        $nilaifilterk = $this->input->post('nilaifilterk');

        if ($nilaifilterk == 1) {

            $data['titlek'] = "Laporan Data Barang By Tanggal";
            $data['subtitlek'] = "Dari Tanggal : " . $tanggalawalk . " Sampai Tanggal : " . $tanggalakhirk;
            $data['datafilterk'] = $this->Mlaporan->bytanggal2($tanggalawalk, $tanggalakhirk);

            $this->load->view('vlaporan/cetak_laporan_keluar', $data);
        } elseif ($nilaifilterk == 2) {

            $data['titlek'] = "Laporan Data Barang By Bulan";
            $data['subtitlek'] = "Dari Bulan : " . $bulanawalk . " Sampai Bulan : " . $bulanakhirk . " Tahun : " . $tahun1k;
            $data['datafilterk'] = $this->Mlaporan->bybulan2($tahun1k, $bulanawalk, $bulanakhirk);

            $this->load->view('vlaporan/cetak_laporan_keluar', $data);
        } elseif ($nilaifilterk == 3) {

            $data['titlek'] = "Laporan Data Barang Keluar Per Tahun";
            $data['subtitlek'] = "Tahun : " . $tahun2k;
            $data['datafilterk'] = $this->Mlaporan->bytahun2($tahun2k);

            $this->load->view('vlaporan/cetak_laporan_keluar', $data);
        }
    }
}
