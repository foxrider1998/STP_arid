-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 04:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--
CREATE DATABASE IF NOT EXISTS `db_siakad` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_siakad`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

DROP TABLE IF EXISTS `tb_mahasiswa`;
CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `password`, `nama`, `nim`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `no_telp`, `foto`) VALUES
(1, '79f6a8779d6f41d312bcd4d72cf66e0f', 'Andy Bogard', '19510001', '1999-01-11', 'Teknik Informatika', 'Jl. Sudirman no. 301', 'andy@gmail.com', '081111111111', 'Andy.png'),
(2, '41f1b79f6392e10a3c4bd10272576826', 'Leona Heidern', '19610002', '1999-02-04', 'Teknik Industri', 'Jl. Kapten Halim No. 221', 'loena@gmail.com', '081222222222', 'Leona.png'),
(3, '27971e2ff09a704920d692798c092edc', 'Ralf Jones', '19510003', '1999-03-14', 'Teknik Informatika', 'Jl. Aceh no 121', 'ralf@gmail.com', '081333333333', 'Ralf.png'),
(4, 'c38b5f1f8617dcc03e1a7e054765e4f2', 'Seirah Whip', '19610004', '1999-04-05', 'Teknik Mesin', 'Jl. Veteran No. 275', 'seirah@gmail.com', '081444444444', 'seirah.png'),
(5, '8f36a2cf13ffe1ec07d123cec0dc0e74', 'Benimaru Nikaido', '19510005', '1999-05-15', 'Teknik Informatika', 'Jl. Pramuka No. 141', 'benimaru@gmail.com', '081550505050', 'Benimaru1.png'),
(6, 'be41ea6b3f8d3a4ab9a6a804505df5b1', 'Albert ', '19610006', '1999-06-10', 'Teknik Industri', 'Jl. Ipik Gandamanah no. 501', 'Albert@gmail.com', '081660606060', 'Albert.jpg'),
(7, '9dfd344da1ab49dc0e920c34c1eb7ec3', 'Donita', '19610007', '1999-07-05', 'Manajemen Industri', 'Jl. Sudirman no. 251', 'donita@gmail.com', '081770707070', 'Donita.jpg'),
(8, 'def9e0c8d763a0316affe4ef8c17df96', 'Joko', '19610008', '1999-08-11', 'Teknik Mesin', 'Jl. Veteran No. 251', 'joko@gmail.com', '081880808080', 'Joko.png'),
(9, 'bb2956ecc0cc18aa38602b74d52ef834', 'Jonny', '19610009', '1999-09-19', 'Teknik Industri', 'Jl. Ipik Gandamanah no. 551', 'Jonny@gmail.com', '081990909090', 'Jonny.jpg'),
(10, 'e5e4be3f52ddd4753360e7cb85eb6fcd', 'Maya', '19610010', '1999-10-23', 'Manajemen Industri', 'Jl. Kapten Halim No. 321', 'maya@gmail.com', '08510110011', 'Maya.jpg'),
(11, 'c5154cc897bf7e1dd2ef8e241393a593', 'Reni', '19310011', '1999-11-08', 'Manajemen Industri', 'Jl. Aceh no 301', 'reni@gmail.com', '081330304040', 'Reni.jpg'),
(12, '935aab32c19f394cbd0189605ffb5b49', 'Roni', '19610012', '1999-12-21', 'Teknik Mesin', 'Jl. Veteran No. 575', 'roni@gmail.com', '081550506070', 'Roni.jpg'),
(13, '30eafeddfc47bb23398e5eeac836d257', 'Ruben', '19510013', '1999-01-13', 'Teknik Informatika', 'Jl. Sudirman No.310', 'ruben@gmail.com', '081430302010', 'Ruben.png'),
(14, 'a8646fb91c24153795fbcb1fec5fefb1', 'Sonia', '19610014', '1999-04-14', 'Manajemen Industri', 'Jl. Ipik Gandamanah no. 401', 'sonia@gmail.com', '081020304050', 'Sonia.png'),
(15, '79f8c2ec62c75677dab41f525935ab85', 'Ujang Rahmat', '19610015', '1999-05-15', 'Teknik Industri', 'Jl. Kapten Halim No. 321', 'ujang@gmail.com', '081870605040', 'Ujang_.png'),
(16, '6364035d6218e2efba86ba27b914518d', 'Alexander Pierce', '19610017', '1999-07-17', 'Teknik Mesin', 'Jl. Aceh no 251', 'alex@gmail.com', '081930405020', 'alex.jpg'),
(17, '514611a87d1f68b547fa6df8d8fba565', 'Tono', '19510016', '1999-06-16', 'Teknik Informatika', 'Jl. Ipik Gandamanah no. 601', 'tono@gmail.com', '081980706070', 'Tono.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
