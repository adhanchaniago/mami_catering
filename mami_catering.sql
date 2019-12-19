-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 02:40 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mami_catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `mc_invoice`
--

CREATE TABLE `mc_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_invoice`
--

INSERT INTO `mc_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Eko Syahprianto', 'Medan, Sumatera Utara', '2019-12-04 01:18:42', '2019-12-05 01:18:42'),
(2, 'Joko', 'Solo', '2019-12-04 01:26:20', '2019-12-05 01:26:20'),
(3, '', '', '2019-12-04 08:32:49', '2019-12-05 08:32:49'),
(4, 'budi', 'medan', '2019-12-04 15:19:18', '2019-12-05 15:19:18'),
(5, '', '', '2019-12-10 16:37:53', '2019-12-11 16:37:53'),
(6, '', '', '2019-12-10 18:21:28', '2019-12-11 18:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `mc_menu`
--

CREATE TABLE `mc_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(150) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_menu`
--

INSERT INTO `mc_menu` (`id_menu`, `nama_menu`, `keterangan`, `kategori`, `harga`, `gambar`) VALUES
(1, 'Kwetiau GORENG', 'Terasa kali rasanya dan sayur + bakwan', 'Chinese', 12000, 'cinafood.jpg'),
(2, 'Bento Vegetarian', 'Nasi + sayur yang enak\r\ndengan jeruk nipis', 'Modern', 13000, 'masakanmodern.jpg'),
(3, 'Bento kids mini', 'Nasi cantik + telur gulungsosis + kentang', 'Modern', 12000, 'sarapankids.jpg'),
(4, 'Minuman Pesta', 'Jenis minuman yang segar dan beragam rasanya', 'minuman', 160000, 'minuman.jpg'),
(13, 'Bakmi Mie Asen', 'Mie dengan kua yang nikmat dan sayuran + irisan daging', 'Chinese', 15000, 'cinafood1.jpg'),
(14, 'Kue Box', '1 kotak : isi 4 kue dapat memilih kuenya', 'Coffee and Snack', 6000, 'kuesnack.jpg'),
(15, 'kue Lovers', '1 kotak : 3 kue dan 1 aqua dapat memilih kuenya', 'Coffee and Snack', 5500, 'kuesnack1.jpg'),
(16, 'Masakan Pesta Wedding', '5 Menu + Nasi + Minuman Dingin + Kue + Makan Penutup', 'Tradisional', 8000000, 'masakanpesta.jpg'),
(17, 'Masakan Pernikahan', '6 Menu + Nasi + Minuman Dingin + Kue + Makan Penutup', 'Tradisional', 8700000, 'masakanpesta1.jpg'),
(18, 'Nasi Ayam Penyet', 'Nasi + Ayam penyet dada + Tempe dan sambal pedas', 'Modern', 12000, 'masakmodern.jpg'),
(19, 'Minuman Rasa Kita', '4 Pilihan Rasa Minuman Size : 16 liter', 'Minuman', 170000, 'minuman1.jpg'),
(20, 'Bento kids sehat', 'Nasi + ayam dengan telur dan cocok buat bekal anak', 'Modern', 14000, 'sarapankids1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mc_pesanan`
--

CREATE TABLE `mc_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_pesanan`
--

INSERT INTO `mc_pesanan` (`id`, `id_invoice`, `id_menu`, `nama_menu`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Kwetiau GORENG', 1, 12000, ''),
(2, 1, 2, 'Bento Vegetarian', 1, 13000, ''),
(3, 1, 3, 'Bento kids mini', 1, 12000, ''),
(4, 1, 4, 'Minuman Pesta', 1, 4000, ''),
(5, 2, 3, 'Bento kids mini', 1, 12000, ''),
(6, 3, 1, 'Kwetiau GORENG', 1, 12000, ''),
(7, 3, 2, 'Bento Vegetarian', 1, 13000, ''),
(8, 3, 3, 'Bento kids mini', 1, 12000, ''),
(9, 3, 4, 'Minuman Pesta', 1, 4000, ''),
(10, 4, 4, 'Minuman Pesta', 1, 4000, ''),
(11, 4, 3, 'Bento kids mini', 1, 12000, ''),
(12, 4, 2, 'Bento Vegetarian', 1, 13000, ''),
(13, 4, 1, 'Kwetiau GORENG', 1, 12000, ''),
(14, 5, 1, 'Kwetiau GORENG', 1, 12000, ''),
(15, 6, 1, 'Kwetiau GORENG', 1, 12000, '');

-- --------------------------------------------------------

--
-- Table structure for table `mc_user`
--

CREATE TABLE `mc_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mc_user`
--

INSERT INTO `mc_user` (`id`, `nama`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Eko Syahprianto', 'eko.syahprianto@gmail.com', '1234', 1, 1, 1576508969),
(8, 'erik', 'erik@gmail.com', '1234', 2, 1, 1576538805);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mc_invoice`
--
ALTER TABLE `mc_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_menu`
--
ALTER TABLE `mc_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mc_pesanan`
--
ALTER TABLE `mc_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_user`
--
ALTER TABLE `mc_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mc_invoice`
--
ALTER TABLE `mc_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mc_menu`
--
ALTER TABLE `mc_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mc_pesanan`
--
ALTER TABLE `mc_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mc_user`
--
ALTER TABLE `mc_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
