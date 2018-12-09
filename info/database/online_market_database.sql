-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 02:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_market_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `NPM` char(13) NOT NULL,
  `id_kategori` char(3) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `foto_barang1` text NOT NULL,
  `foto_barang2` text,
  `foto_barang3` text,
  `foto_barang4` text,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `tanggal_jual` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `NPM`, `id_kategori`, `nama_barang`, `foto_barang1`, `foto_barang2`, `foto_barang3`, `foto_barang4`, `deskripsi`, `harga`, `tanggal_jual`) VALUES
(13, '140810170019', 'FA1', 'Hayabusa', '1544355179hayabusa-med.jpg', '1544355179download (1).jpg', NULL, NULL, 'Jual motor seken langka', 60000000, '2018-12-09 12:32:59'),
(14, '140810170019', 'MM1', 'Ayam Geprek', '15443552928f0d6b5248ac4de6eab3932b7b2ee7ae-8fd9f35d2f2d83c2afdcf77932ccd0bf_600x400.jpg', NULL, NULL, NULL, 'Ayam Geprek + Nasi 1 Porsi 15000', 15000, '2018-12-09 12:34:52'),
(15, '140810170019', 'SE1', 'Gitar', '1544355397download (2).jpg', NULL, NULL, NULL, 'Gitar akustik elektrik', 700000, '2018-12-09 12:36:37'),
(16, '140810170019', 'BU1', 'Ensiklopedia Matematika', '1544355482BUKU_ENSIKLOPEDIA_MATEMATIKA_EDISI_KETIGA___ST_NEGORO_wr.jpg', NULL, NULL, NULL, 'Limited', 500000, '2018-12-09 12:38:02'),
(17, '140810170013', 'FA1', 'Apple Watch', '154435557344-alu-space-sport-black-nc-s4-grid.jpg', NULL, NULL, NULL, 'Jam Terkini', 5000000, '2018-12-09 12:39:33'),
(18, '140810170013', 'MM1', 'Es Goyobod', '1544355631food-story-es-goyobod-es-khas-sunda-nama-belanda-492lsY5iQS.jpg', NULL, NULL, NULL, '10000/porsi', 10000, '2018-12-09 12:40:31'),
(19, '140810170013', 'GA1', 'Hardisk Eksternal Toshiba', '1544355763Hardisk eksternal toshiba.jpg', NULL, NULL, NULL, 'Hardisk Eksternal 1TB', 900000, '2018-12-09 12:42:43'),
(20, '140810170013', 'SE1', 'Cat Air', '1544356014cat-air_20151220_164314.jpg', NULL, NULL, NULL, 'Cat air full seluruh warna dasar', 25000, '2018-12-09 12:46:54'),
(21, '140810170013', 'BU1', 'Buku Ekonomi Publik', '1544356099Ekonomi-Publik.jpg', NULL, NULL, NULL, 'Karya Padil Toto', 100000, '2018-12-09 12:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('BU1', 'Buku'),
('FA1', 'Fashion'),
('GA1', 'Gadget'),
('MM1', 'Makanan & Minuman'),
('SE1', 'Karya Seni');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NPM` char(12) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `foto_User` varchar(255) NOT NULL,
  `tanggal_Bergabung` date NOT NULL,
  `login_Terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NPM`, `Username`, `Nama_Lengkap`, `password`, `email`, `alamat`, `no_hp`, `fakultas`, `foto_User`, `tanggal_Bergabung`, `login_Terakhir`) VALUES
('140810170013', 'dimas.tauruzz', 'Diemas Aksya', 'Admin12345678', 'dimaz@gmail.com', 'Jln. Cicalengka Indah No.2', '081809917504', 'FMIPA', '', '2018-12-09', '0000-00-00 00:00:00'),
('140810170019', 'fadhlihh', 'Fadhli Hibatul Haqqi', 'Admin12345678', 'fadhlimorth5@gmail.com', 'Jln.Gedebage Selatan', '081809917509', 'FMIPA', '1544355022IMG_20140619_0721252.jpg', '2018-12-08', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `NPM` (`NPM`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NPM`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`NPM`) REFERENCES `user` (`NPM`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
