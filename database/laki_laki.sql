-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2019 pada 15.54
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
-- Struktur dari tabel `laki_laki`
--

CREATE TABLE `laki_laki` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `spesifikasi_produk` varchar(200) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `warna_produk` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laki_laki`
--

INSERT INTO `laki_laki` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `gambar`, `kategori_id`) VALUES
(1, 'SKMEI 1428', 'Strap : PU\r\nDiameter : 48mm\r\nDial Thickness : 16mm\r\nStrap length : 220mm\r\nStrap width : 24mm\r\nWater Resistant : 30M\r\n12/24 Hour Clock', 186000, 'Hitam', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laki_laki`
--
ALTER TABLE `laki_laki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laki_laki`
--
ALTER TABLE `laki_laki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
