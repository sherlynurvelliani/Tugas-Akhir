-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 03:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_narmada_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_informasi`
--

CREATE TABLE `tabel_informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_informasi`
--

INSERT INTO `tabel_informasi` (`id_informasi`, `judul`, `gambar`, `ket`, `tanggal`) VALUES
(2, 'Kunjungan', '0-DUTA-BESAR.jpg', 'Kunjungan Duta Besar Ke Taman Narmada ', '2021-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengunjung`
--

CREATE TABLE `tabel_pengunjung` (
  `id_booking` varchar(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jml_anak` int(11) DEFAULT NULL,
  `jml_dewasa` int(11) NOT NULL,
  `jml_wna` int(11) DEFAULT NULL,
  `jumlah_pengunjung` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `status_bayar` enum('belum','sudah') NOT NULL DEFAULT 'belum',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pengunjung`
--

INSERT INTO `tabel_pengunjung` (`id_booking`, `nama`, `no_hp`, `tanggal`, `jml_anak`, `jml_dewasa`, `jml_wna`, `jumlah_pengunjung`, `total_harga`, `catatan`, `status_bayar`, `create_at`) VALUES
('TN-0001', 'dewi', '1810310001', '2021-07-15', 1, 1, 1, 3, 65000, 'sad', 'belum', '2021-07-12 13:09:18'),
('TN-0003', 'hvh', '64', '2021-07-12', 1, 1, 1, 0, 0, 'jb', 'belum', '2021-07-12 13:54:02'),
('TN-0004', 'sherly', '08113831515', '2021-07-14', 1, 2, 1, 4, 0, 'ss', 'belum', '2021-07-13 08:33:38'),
('TN-0005', 'sherly', '08113831515', '2021-07-07', 0, 1, 0, 1, 10000, 'dd', 'belum', '2021-07-13 07:57:40'),
('TN-0006', 'sherly', '08113831515', '2021-07-07', 1, 1, 0, 2, 5000, 'dd', 'belum', '2021-07-13 07:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `kategori`, `harga`) VALUES
('1  ', 'Anak', '5000'),
('2', 'Dewasa', '10000'),
('3', 'WNA', '50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_informasi`
--
ALTER TABLE `tabel_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tabel_pengunjung`
--
ALTER TABLE `tabel_pengunjung`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_informasi`
--
ALTER TABLE `tabel_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
