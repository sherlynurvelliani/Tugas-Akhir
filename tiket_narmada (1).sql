-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 11:32 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_narmada`
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
  `gambar` varchar(128) NOT NULL,
  `ket` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_paket`
--

CREATE TABLE `tabel_paket` (
  `id_paket` varchar(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengunjung`
--

CREATE TABLE `tabel_pengunjung` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_hp` int(35) NOT NULL,
  `tanggal` date NOT NULL,
  `jml_anak` int(11) DEFAULT NULL,
  `jml_dewasa` int(11) NOT NULL,
  `jml_wna` int(11) DEFAULT NULL,
  `jumlah_pengunjung` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pengunjung`
--

INSERT INTO `tabel_pengunjung` (`id_booking`, `nama`, `no_hp`, `tanggal`, `jml_anak`, `jml_dewasa`, `jml_wna`, `jumlah_pengunjung`, `total_harga`, `catatan`, `create_at`) VALUES
(1, 'Dolor ipsum quia ani', 0, '1973-03-12', 64, 86, 13, 0, 0, 'Et atque sint ea com', '2021-06-23 03:22:01'),
(2, 'Consequatur Aut iru', 23423432, '1994-10-14', 72, 93, 3, 168, 1440000, 'Nihil dolor necessit', '2021-06-23 03:23:39'),
(3, 'Id sed eum dolor con', 435345, '1971-03-03', 96, 96, 23, 215, 2590000, 'Qui sit laborum Se', '2021-06-23 03:24:23'),
(4, 'Nemo non ad nostrud ', 123213, '2002-03-26', 62, 5, 47, 114, 2710000, 'Natus consequatur m', '2021-06-23 03:30:54');

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
('1', 'Anak', '5000'),
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
-- Indexes for table `tabel_paket`
--
ALTER TABLE `tabel_paket`
  ADD PRIMARY KEY (`id_paket`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_informasi`
--
ALTER TABLE `tabel_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_pengunjung`
--
ALTER TABLE `tabel_pengunjung`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
