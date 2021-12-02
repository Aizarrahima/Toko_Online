-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 02:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `comic`
--

CREATE TABLE `comic` (
  `id_comic` int(11) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `foto_comic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comic`
--

INSERT INTO `comic` (`id_comic`, `pengarang`, `judul`, `harga`, `foto_comic`) VALUES
(1, 'Marvel', 'Shang-Chi', 45000, 'shang-chi.jfif'),
(2, 'Marvel', 'Death of Doctor Strange', 250000, 'the death of doctor strange (marvel).jpg'),
(3, 'DC Comic', 'Batman', 100000, 'Batman.jpg'),
(4, 'Marvel', 'Classics Comics', 2500000, 'classics comics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian_comic`
--

CREATE TABLE `detail_pembelian_comic` (
  `id_detail_pembelian_comic` int(11) NOT NULL,
  `id_pembelian_comic` int(11) NOT NULL,
  `id_comic` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pembelian_comic`
--

INSERT INTO `detail_pembelian_comic` (`id_detail_pembelian_comic`, `id_pembelian_comic`, `id_comic`, `qty`) VALUES
(29, 1, 4, 3),
(30, 21, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kedatangan_comic`
--

CREATE TABLE `kedatangan_comic` (
  `id_kedatangan_comic` int(11) NOT NULL,
  `id_pembelian_comic` int(11) NOT NULL,
  `tanggal_datang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kedatangan_comic`
--

INSERT INTO `kedatangan_comic` (`id_kedatangan_comic`, `id_pembelian_comic`, `tanggal_datang`) VALUES
(10, 1, '2021-12-02'),
(11, 21, '2021-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_comic`
--

CREATE TABLE `pembelian_comic` (
  `id_pembelian_comic` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `tanggal_datang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_comic`
--

INSERT INTO `pembelian_comic` (`id_pembelian_comic`, `id_user`, `tanggal_beli`, `tanggal_datang`) VALUES
(1, 2, '2021-12-02', '2021-12-07'),
(21, 3, '2021-12-02', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `email`, `password`, `confirm_password`, `level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'Aizar', 'Rahima', 'aizar_rahima_29rpl@student.smktelkom-mlg.sch.id', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'user'),
(3, 'Aizar', 'Rahima Suprayitno', 'aizarrahima@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comic`
--
ALTER TABLE `comic`
  ADD PRIMARY KEY (`id_comic`);

--
-- Indexes for table `detail_pembelian_comic`
--
ALTER TABLE `detail_pembelian_comic`
  ADD PRIMARY KEY (`id_detail_pembelian_comic`) USING BTREE,
  ADD KEY `id_pembelian_comic` (`id_pembelian_comic`),
  ADD KEY `id_comic` (`id_comic`);

--
-- Indexes for table `kedatangan_comic`
--
ALTER TABLE `kedatangan_comic`
  ADD PRIMARY KEY (`id_kedatangan_comic`) USING BTREE,
  ADD KEY `id_pembelian_comic` (`id_pembelian_comic`);

--
-- Indexes for table `pembelian_comic`
--
ALTER TABLE `pembelian_comic`
  ADD PRIMARY KEY (`id_pembelian_comic`) USING BTREE,
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comic`
--
ALTER TABLE `comic`
  MODIFY `id_comic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_pembelian_comic`
--
ALTER TABLE `detail_pembelian_comic`
  MODIFY `id_detail_pembelian_comic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kedatangan_comic`
--
ALTER TABLE `kedatangan_comic`
  MODIFY `id_kedatangan_comic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembelian_comic`
--
ALTER TABLE `pembelian_comic`
  MODIFY `id_pembelian_comic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
