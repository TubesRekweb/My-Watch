-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 10:46 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamtangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `couple`
--

CREATE TABLE `couple` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(60) NOT NULL,
  `spesifikasi_produk` varchar(200) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `warna_produk` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couple`
--

INSERT INTO `couple` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `gambar`) VALUES
(1, 'Alexander Christie Couple 8588', 'Water Resist : 30M\r\nDiameter : 40mm(cowok) dan 32mm(cewek)\r\nMaterial : Rantai\r\nMesin : Baterai', 550000, 'Biru', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laki_laki`
--

CREATE TABLE `laki_laki` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `spesifikasi_produk` varchar(200) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `warna_produk` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laki_laki`
--

INSERT INTO `laki_laki` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `gambar`) VALUES
(1, 'SKMEI 1428', 'Strap : PU\r\nDiameter : 48mm\r\nDial Thickness : 16mm\r\nStrap length : 220mm\r\nStrap width : 24mm\r\nWater Resistant : 30M\r\n12/24 Hour Clock', 186000, 'Hitam', '');

-- --------------------------------------------------------

--
-- Table structure for table `perempuan`
--

CREATE TABLE `perempuan` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(60) NOT NULL,
  `spesifikasi_produk` varchar(200) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `warna_produk` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perempuan`
--

INSERT INTO `perempuan` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `gambar`) VALUES
(1, 'Fossil ES4534', 'Diameter : 38mm\r\nkualitas : original\r\nMovement : japanese Quartz\r\nWater resistant : 3 ATM\r\nMaterial Strap : All Stainless\r\nMesin : baterai\r\nWarranty : 2 Tahun\r\nKaca : mineral Glass', 970000, 'Emas', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couple`
--
ALTER TABLE `couple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laki_laki`
--
ALTER TABLE `laki_laki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perempuan`
--
ALTER TABLE `perempuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couple`
--
ALTER TABLE `couple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laki_laki`
--
ALTER TABLE `laki_laki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perempuan`
--
ALTER TABLE `perempuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
