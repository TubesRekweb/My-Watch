-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 12:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(60) NOT NULL,
  `spesifikasi_produk` varchar(200) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `warna_produk` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_produk`, `spesifikasi_produk`, `harga_produk`, `warna_produk`, `stok`, `gambar`, `kategori_produk`, `date_created`) VALUES
(13, 'Alexander Christie', 'Diameter : 3.5 cm', 150000, 'pink', 90, '11.jpg', 'Woman', 1577415173),
(14, 'Alexander Christie', 'Diameter : 3.5 dan 4.0 cm', 400000, 'Hitam, putih, coklat', 40, '2.jpg', 'Couple', 1577415367),
(16, 'Alexander Christie  8492', 'Diameter : 4.0 cm dan 2.8 cm ', 550000, 'hitam', 20, '4.jpg', 'Man', 1577415574),
(17, 'Alexander Christie AC ', 'Diameter : 3.2 cm', 200000, 'hitam, putih, merah', 8, '3.jpg', 'Woman', 1577415651),
(18, 'Alexander Christie Classic Stell Series 8623MD', 'Diameter : 3.2 dan 4.0 cm', 550000, 'Soft Gold', 20, '5.jpg', 'Couple', 1577415866),
(19, 'Alexander Christie Classic Stell', 'Diameter : 3.3 dan 4.2 cm', 150000, 'Biru, Coklat', 10, '6.jpg', 'Couple', 1577416078),
(20, 'Fossil', 'Diameter : 3.8 cm', 90000, 'Gold, Putih', 10, '7.jpg', 'Woman', 1577416154),
(21, 'Swiss Army', 'Diameter : 4.5 cm', 200000, 'Hijau, Hitam', 30, '8.jpg', 'Man', 1577416227),
(22, 'Skmei', 'Diameter : 4.8 cm', 180000, 'Hijau, Hitam, Biru', 80, '111.jpg', 'Man', 1577416377),
(23, 'Seiko', 'Diameter : 5.0 cm', 300000, 'Biru, Hitam', 20, '12.jpg', 'Man', 1577416893),
(24, 'Daniel Wellingtn', 'Diameter : 3.2 dan 4.0 cm', 350000, 'HitamMerahKuning', 28, '15.jpg', 'Couple', 1577416972),
(25, 'Imporjo Armani', 'Diameter : 3.2 dan 4.2 cm', 250000, 'Coklat, Biru', 38, '45.jpg', 'Couple', 1577417071),
(26, 'Daniel Wellingtn', 'Diameter : 3.2 dan 4.0 cm', 350000, 'BiruKuning, HitamPutih', 19, '39.jpg', 'Couple', 1577417171),
(27, 'Adidas', 'Diameter : 3.0 dan 3.8 cm', 450000, 'hitam, putih, merah, Gold', 80, '51.jpg', 'Couple', 1577417314),
(29, 'Ice', 'Diameter : 2.9 cm', 150000, 'Hitam,Putih', 3, '35.jpg', 'Woman', 1577417599),
(30, 'Alexander Christie', 'Diameter : 3.8 cm', 400000, 'Hitam', 10, '53.jpg', 'Man', 1577417681),
(31, 'Suunto', 'Diameter : 4.0 cm', 300000, 'Hitam', 100, '29.jpg', 'Man', 1577417810),
(32, 'Guess', 'Diameter 3.5 cm', 700000, 'Silver', 10, '28.jpg', 'Woman', 1577417886),
(33, 'Fossil', 'Diameter : 3.8 cm', 600000, 'Gold, Brown', 20, '25.jpg', 'Man', 1577417973),
(34, 'Garvinoes', 'Diameter : 4.8 cm', 1000000, 'Hitam', 5, '22.jpg', 'Man', 1577418042),
(35, 'Omega', 'Diameter 2.2 cm', 8000000, 'Gold', 7, '24.jpg', 'Woman', 1577418183),
(36, 'Rolex', 'Diameter : 3.2 dan 4.0 cm', 700000, 'Silver,Gold', 10, '48.jpg', 'Couple', 1577418393),
(37, 'Fossil', 'Diameter : 2.2 cm', 8000000, 'Hitam', 7, '31.jpg', 'Woman', 1577418445),
(38, 'Daniel Wellingtn', 'Diameter 2.0 cm', 300000, 'Hitam,Coklat', 50, '32.jpg', 'Woman', 1577418511);

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

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(23, 'rhexy ilham m', 'acx', '2019-12-26 16:19:32', '2019-12-27 16:19:32'),
(24, '', '', '2019-12-26 16:34:46', '2019-12-27 16:34:46'),
(25, '', '', '2019-12-26 19:22:20', '2019-12-27 19:22:20'),
(26, 'rima rn', 'rima', '2019-12-26 19:54:11', '2019-12-27 19:54:11'),
(27, '', '', '2019-12-27 07:22:27', '2019-12-28 07:22:27'),
(28, 'madany', 'acx', '2019-12-27 15:29:24', '2019-12-28 15:29:24'),
(29, 'waladi widarno', 'rima', '2019-12-27 18:50:06', '2019-12-28 18:50:06');

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

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 2, 'cau', 1, 800000, ''),
(2, 6, 2, 'cau', 1, 800000, ''),
(3, 7, 2, 'cau', 1, 800000, ''),
(4, 7, 3, 'rolex', 1, 2737839, ''),
(5, 7, 4, 'eiger', 1, 256363377, ''),
(6, 9, 4, 'eiger', 1, 256363377, ''),
(7, 9, 2, 'cau', 1, 800000, ''),
(11, 13, 10, 'aceng', 4, 10000, ''),
(13, 15, 9, 'rhexy', 2, 10000, ''),
(14, 16, 11, 'MAWAR', 1, 9999, ''),
(15, 17, 9, 'rhexy', 1, 10000, ''),
(20, 23, 9, 'rhexy', 1, 10000, ''),
(21, 24, 9, 'rhexy', 1, 10000, ''),
(22, 25, 9, 'rhexy', 1, 10000, ''),
(23, 26, 9, 'rhexy', 1, 10000, ''),
(24, 28, 24, 'Daniel Wellingtn', 1, 350000, ''),
(25, 28, 25, 'Imporjo Armani', 2, 250000, ''),
(26, 29, 24, 'Daniel Wellingtn', 1, 350000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
   UPDATE tb_barang SET stok = stoK-NEW.jumlah
   WHERE id = NEW.id;
END
$$
DELIMITER ;

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
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
