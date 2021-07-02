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
 
	public function index()
	{
		$pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,5,'Taman Narmada','0','1','C',false);
        $pdf->SetFont('Arial','i',8);
        $pdf->Cell(0,5,'taman','0','1','c',false);
        $pdf->Cell(0,2,'alamat taman','0','1','c',false);
        $pdf->Ln(3);
        $pdf->Cell(260,06,'','0','1','c',true);
        $pdf->Ln(10);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(50,5,'Laporan Data Pengunjung Taman Narmada',0,1,'L',false);
        $pdf->Ln(3);
 
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(90,6,'Id Booking',1,0,'C');
        $pdf->Cell(120,6,'Nama Pengunjung',1,0,'C');
        $pdf->Cell(120,6,'No Hp',1,0,'C');
        $pdf->Cell(120,6,'Tanggal',1,0,'C');
        $pdf->Cell(120,6,'Jumlah Anak',1,0,'C');
        $pdf->Cell(120,6,'Jumlah Dewasa',1,0,'C');
        $pdf->Cell(120,6,'Jumlah WNA',1,0,'C');
        $pdf->Cell(40,6,'Jumlah Pengunjung',1,1,'C');
        $pdf->Cell(120,6,'Total Harga',1,0,'C');
        $pdf->Cell(120,6,'Catatan',1,0,'C');
        $pdf->Cell(120,6,'Create',1,0,'C');

 
        $pdf->SetFont('Arial','',10);
        $data = $this->db->get('tabel_pengunjung')->result();
        $no=0;
        foreach ($data as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(90,6,$data->id_booking,1,0);
            $pdf->Cell(120,6,$data->nama,1,0);
            $pdf->Cell(40,6,$data->no_hp,1,1);
            $pdf->Cell(40,6,$data->tanggal,1,1);
            $pdf->Cell(40,6,$data->jml_anak,1,1);
            $pdf->Cell(40,6,$data->jml_dewasa,1,1);
            $pdf->Cell(40,6,$data->jml_wna,1,1);
            $pdf->Cell(40,6,$data->jumlah_pengunjung,1,1);
            $pdf->Cell(40,6,$data->total_harga,1,1);
            $pdf->Cell(40,6,$data->catatan,1,1);
            $pdf->Cell(40,6,$data->create_at,1,1);
        }
        $pdf->Output();
    }
	}


/* End of file Laporan_pengunjung.php */
/* Location: ./application/controllers/Laporan_pengunjung.php */