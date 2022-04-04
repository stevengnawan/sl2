-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 07:27 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `namaDepan` varchar(20) NOT NULL,
  `namaTengah` varchar(20) NOT NULL,
  `namaBelakang` varchar(20) NOT NULL,
  `tempatLahir` varchar(30) NOT NULL,
  `tglLahir` date NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `wargaNegara` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `noHP` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` varchar(10) NOT NULL,
  `fotoProfil` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tglLahir`, `NIK`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `fotoProfil`, `username`, `password`) VALUES
('Anton', 'Budi', 'Condet', 'Jakarta', '2022-03-16', '3456321234523443', 'Amerika', 'qqwer@gmail.com', '123412341', 'Jl. Kuta 12', '12345', 'img-anton', 'anton123', 'qwer'),
('HAHA', 'HIHI', 'HOHO', 'Rumah Sakit', '2020-01-04', '3123412341234', 'Indonesia', 'dummy@gmail.com', '081234123412', 'Jl. Dummy No. 14', '34563', 'profilePict/auspicious.png', 'dummy123', '123'),
('HAHAHA', 'Andi', 'Sentosa', 'Surabaya', '2022-03-17', '23451245145', 'Indonesia', 'asdfaqwe@gmail.com', '124315243231', 'Jl. Emas No. 3', '21345', 'profilePict/', 'santoso123', 'santoso'),
('HALOOO', 'Steven', 'Gunawan', 'Malang', '2022-02-08', '1234123412341234', 'Indonesia', 'asdf@gmail.com', '123412342', 'Jl. Sulfat 1234', '12341', 'profilePict/wave3.png', 'steven12', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
