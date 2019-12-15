-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 08:54 AM
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
  `stok` int(25) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couple`
--

INSERT INTO `couple` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `stok`, `gambar`) VALUES
(1, 'Alexander Christie Couple 8588', 'Water Resist : 30M\r\nDiameter : 40mm(cowok) dan 32mm(cewek)\r\nMaterial : Rantai\r\nMesin : Baterai', 550000, 'Biru', 0, 'alexander_couple.jpg');

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
  `stok` int(25) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laki_laki`
--

INSERT INTO `laki_laki` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `stok`, `gambar`) VALUES
(1, 'SKMEI 1428', 'Strap : PU\r\nDiameter : 48mm\r\nDial Thickness : 16mm\r\nStrap length : 220mm\r\nStrap width : 24mm\r\nWater Resistant : 30M\r\n12/24 Hour Clock', 186000, 'Hitam', 0, '');

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
  `stok` int(25) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perempuan`
--

INSERT INTO `perempuan` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `stok`, `gambar`) VALUES
(1, 'Fossil ES4534', 'Diameter : 38mm\r\nkualitas : original\r\nMovement : japanese Quartz\r\nWater resistant : 3 ATM\r\nMaterial Strap : All Stainless\r\nMesin : baterai\r\nWarranty : 2 Tahun\r\nKaca : mineral Glass', 970000, 'Emas', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(60) NOT NULL,
  `spesifikasi_produk` varchar(200) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `warna_produk` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `stok`, `gambar`) VALUES
(2, 'cau', 'eifhwjwdqagwdqwgdqwgu', 800000, 'merah', 10, 'iconjam.png'),
(3, 'rolex', 'slxckachahcauca', 2737839, 'hitam', 5, 'iconjam.png'),
(4, 'eiger', 'owduqwahdashcsazj', 256363377, 'putih', 190, 'iconjam.png'),
(6, 'iqiwowqiw', 'dsieooao', 10000, 'dsususu', 10, 'Untitled-111.png'),
(7, 'wduqwu', 'dsusu', 9999, 'djsau', 10, 'Untitled-112.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(9, 'Rima Riani', 'rimarn@gmail.com', 'default.jpg', '$2y$10$dvqC/gyLYruLNnOxo7Qnf.uOQ2vSdgkS841ZuOxHFUh1Tqzd1cQ0y', 1, 1, 1575641269),
(10, 'yuda', 'yuda@gmail.com', 'default.jpg', '$2y$10$bZ9ZUha6XdOuiZkqGiRJMOx.jw1MBjYtaCV73W5C/rO50htkwOrwu', 2, 1, 1575641924),
(11, 'rhexy', 'rhexy@gmail.com', 'default.jpg', '$2y$10$3ZN8gLykkHEE4VEEPb16WeapUTWau9U9V.y0B3iZFwZyL6I.xY7/W', 2, 1, 1575735237);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couple`
--
ALTER TABLE `couple`
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
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
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
-- AUTO_INCREMENT for table `laki_laki`
--
ALTER TABLE `laki_laki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perempuan`
--
ALTER TABLE `perempuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
