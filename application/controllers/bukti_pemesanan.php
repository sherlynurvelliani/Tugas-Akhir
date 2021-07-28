<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pengunjung extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }

    public function tampil()
    {
    	$pengunjung = $this->Pengunjung_model->listing();
		$data = array('title' => 'Data pengunjung',
			'pengunjung' => $pengunjung,
			'isi' => 'pengunjung/list'
		);
		$this->load->view('admin/wrapper', $data, FALSE);
    }
}


/* End of file Laporan_pengunjung.php */
/* Location: ./application/controllers/Laporan_pengunjung.php */