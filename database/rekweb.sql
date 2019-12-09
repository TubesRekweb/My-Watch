-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2019 pada 15.44
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `couple`
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
-- Dumping data untuk tabel `couple`
--

INSERT INTO `couple` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `gambar`) VALUES
(1, 'Alexander Christie Couple 8588', 'Water Resist : 30M\r\nDiameter : 40mm(cowok) dan 32mm(cewek)\r\nMaterial : Rantai\r\nMesin : Baterai', 550000, 'Biru', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
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
-- Struktur dari tabel `laki_laki`
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
-- Dumping data untuk tabel `laki_laki`
--

INSERT INTO `laki_laki` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `gambar`) VALUES
(1, 'SKMEI 1428', 'Strap : PU\r\nDiameter : 48mm\r\nDial Thickness : 16mm\r\nStrap length : 220mm\r\nStrap width : 24mm\r\nWater Resistant : 30M\r\n12/24 Hour Clock', 186000, 'Hitam', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perempuan`
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
-- Dumping data untuk tabel `perempuan`
--

INSERT INTO `perempuan` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `gambar`) VALUES
(1, 'Fossil ES4534', 'Diameter : 38mm\r\nkualitas : original\r\nMovement : japanese Quartz\r\nWater resistant : 3 ATM\r\nMaterial Strap : All Stainless\r\nMesin : baterai\r\nWarranty : 2 Tahun\r\nKaca : mineral Glass', 970000, 'Emas', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_create`) VALUES
(1, 'Gugi Imamudin', 'gugiimamudin@gmail.com', '$2y$10$7jzhSIwOnhalHh.bt3trAelHHSwaUEyhFUJHKh8dXWVV0zqIHZt2O', 'default.jpg', 2, 1, '0000-00-00');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perempuan`
--
ALTER TABLE `perempuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perempuan`
--
ALTER TABLE `perempuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
