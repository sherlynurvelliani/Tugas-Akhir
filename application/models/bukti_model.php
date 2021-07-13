<?php
defined('BASEPATH') or exit('No direct script allowed');

class bukti_model extends CI_Model
{
    //Barang Masuk
    function gettahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM tabel_pengunjung GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) ASC");

        return $query->result();
    }

    function bytanggal($nama)
    {
        $query = $this->db->query("SELECT * FROM tabel_pengunjung WHERE nama ='$nama' ");

        return $query->result();
    }

    function bybulan($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT * FROM tabel_pengunjung WHERE YEAR(tanggal) = '$tahun1' AND MONTH(tanggal) BETWEEN '$bulanawal' AND '$bulanakhir' ORDER BY tanggal ASC");

        return $query->result();
    }

    function bytahun($tahun2)
    {
        $query = $this->db->query("SELECT * FROM tabel_pengunjung WHERE YEAR(tanggal) = '$tahun2' ORDER BY tanggal ASC");

        return $query->result();
    }


    /*//Barang Keluar
	function gettahun2()
	{
		$query = $this->db->query("SELECT YEAR(tanggal_keluar) AS tahun FROM barang_keluar GROUP BY YEAR(tanggal_keluar) ORDER BY YEAR(tanggal_keluar) ASC");

		return $query->result();
	}

	function bytanggal2($tanggalawalk, $tanggalakhirk)
	{
		$query = $this->db->query("SELECT * FROM barang_keluar WHERE tanggal_keluar BETWEEN '$tanggalawalk' AND '$tanggalakhirk' ORDER BY tanggal_keluar ASC");

		return $query->result();

	}

	function bybulan2($tahun1k, $bulanawalk, $bulanakhirk)
	{
		$query = $this->db->query("SELECT * FROM barang_keluar WHERE YEAR(tanggal_keluar) = '$tahun1k' AND MONTH(tanggal_keluar) BETWEEN '$bulanawalk' AND '$bulanakhirk' ORDER BY tanggal_keluar ASC");

		return $query->result();

	}

	function bytahun2($tahun2k)
	{
		$query = $this->db->query("SELECT * FROM barang_keluar WHERE YEAR(tanggal_keluar) = '$tahun2k' ORDER BY tanggal_keluar ASC");

		return $query->result();

	}
*/
}
