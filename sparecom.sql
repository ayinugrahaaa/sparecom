-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 11:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`) VALUES
(1, 'admin', 'admin', 'BAF');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `br_id` int(6) NOT NULL,
  `br_nm` varchar(50) NOT NULL,
  `br_item` int(4) NOT NULL,
  `br_hrg` int(10) NOT NULL,
  `br_stok` int(9) NOT NULL,
  `br_satuan` varchar(20) NOT NULL,
  `br_gbr` varchar(100) NOT NULL,
  `ket` varchar(250) NOT NULL,
  `br_sts` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`br_id`, `br_nm`, `br_item`, `br_hrg`, `br_stok`, `br_satuan`, `br_gbr`, `ket`, `br_sts`) VALUES
(7, 'Fantech GP 11', 1, 175000, 20, 'Pcs', 'gambar/4.jpg', 'Speksifikasi: \r\nUsb Wired Gaming Controller, Buttons:14 Pcs, Vibration:Yes, Cable Length:2M, Weight:-+230Gr', 'Y'),
(8, 'Logitech F710', 1, 800000, 12, 'Pcs', 'gambar/3.jpg', 'DESAIN DAN FITUR YANG KOMPLIT\r\nTidak hanya menghadirkan desain produk yang serupa dengan controller pada umumnya, F710 juga menghadirkan fitur vibration untuk merasakan sensasi lebih seru dalam bermain game\r\n\r\n', 'Y'),
(6, 'RAM Dark 8GB', 1, 1750000, 20, 'Pcs', 'gambar/5.jpg', 'Team Dark Pro DDR4 2x4GB 3000MHz adalah memori keluaran Dark pro yang memiliki ultra high speed DDR4 3.000 MHz dengan kapasitas memori 8 GB ', 'Y'),
(5, 'GeForce GTX 1080', 1, 2600000, 30, 'Pcs', 'gambar/2.jpg', 'Integrated with 11GB GDDR5X 352-bit memory interface\r\nWINDFORCE Stack 3X 100mm Fan Cooling System\r\nAdvanced Copper ', 'Y'),
(4, 'Gaming Controller GP-11', 1, 340000, 20, 'Pcs', 'gambar/7.jpg', 'Speksifikasi: \r\nUsb Wired Gaming Controller, Buttons:14 Pcs, Vibration:Yes, Cable Length:2M, Weight:-+230Gr', 'Y'),
(3, 'Intel Core i9 Extreme', 1, 6740000, 30, 'Pcs', 'gambar/6.jpg', 'Core i9-7900X 3.3GHz (Skylake X / Basin Falls) Socket LGA2066 Processor', 'Y'),
(2, 'Game Controller', 1, 650000, 24, 'Pcs', 'gambar/9.jpg', 'Standar baru dalam kontrol game dengan kabel, Xbox 360 Controller ini akurat, nyaman dan tidak memerlukan baterai', 'Y'),
(1, 'MSI Graphic', 1, 3200000, 12, 'Pcs', 'gambar/8.png', ' RX580 OC 8GB', 'Y'),
(9, 'Ryzen 7 1800X', 1, 3200000, 20, 'Pcs', 'gambar/1.jpg', 'AMD Ryzen 7, Clock / Turbo: 3.6GHz / 4.0GHz, 20MB Total Cache\r\nOcta Core, Summit Ridge, 95W, AM4 ', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `no` int(1) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `total` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`no`, `user`, `email`, `alamat`, `total`, `tanggal`) VALUES
(69, 'bustomi', 'tomblok.id@gmail.com', 'Jl Douglas D8 No8 Kemiling Ber', NULL, NULL),
(68, 'bustomi', 'tomblok.id@gmail.com', 'Jl Douglas D8 No8 Kemiling Ber', NULL, NULL),
(67, 'bustomi', 'tomblok.id@gmail.com', 'Jl Douglas D8 No8 Kemiling Ber', NULL, NULL),
(66, 'bustomi', 'tomblok.id@gmail.com', 'Jl Douglas D8 No8 Kemiling Ber', NULL, NULL),
(65, 'bustomi', 'tomblok.id@gmail.com', 'Jl Douglas D8 No8 Kemiling Ber', NULL, NULL),
(64, 'bustomi', 'tomblok.id@gmail.com', 'Jl Douglas D8 No8 Kemiling Ber', NULL, NULL),
(63, 'bustomi', 'tomblok.id@gmail.com', 'Jl Douglas D8 No8 Kemiling Ber', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_usr` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `alamat` text,
  `user` varchar(20) DEFAULT NULL,
  `kota_usr` varchar(25) DEFAULT NULL,
  `kode_pos` varchar(30) DEFAULT NULL,
  `tlp` varchar(20) DEFAULT NULL,
  `nmrek` varchar(30) DEFAULT NULL,
  `bank` varchar(30) DEFAULT NULL,
  `norek` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_usr`, `email`, `password`, `alamat`, `user`, `kota_usr`, `kode_pos`, `tlp`, `nmrek`, `bank`, `norek`, `nama_lengkap`) VALUES
(62030, 'tomblok.id@gmail.com', 'elangputih', 'Jl Douglas D8 No8 Kemiling Beringin Raya Bandar Lampung Indonesia', 'bustomi', 'Bandar Lampung', NULL, '085369578510', '12534567', 'BNI', NULL, NULL),
(62031, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_usr`),
  ADD UNIQUE KEY `pengguna` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `br_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62032;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
