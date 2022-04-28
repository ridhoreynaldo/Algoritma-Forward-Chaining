-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 04:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_guppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(50) NOT NULL,
  `rules` varchar(50) NOT NULL,
  `rules1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `rules`, `rules1`) VALUES
(1, 'G1 G10', 'S1'),
(2, 'G2 G10', 'S2'),
(3, 'G3 G10 G11', 'S3'),
(4, 'G4 G12 G13', 'S4'),
(5, 'G5 G8 G9', 'S5'),
(6, 'G6 G7 G10 G11', 'S6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`, `id`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kode`, `gejala`) VALUES
(1, 'G1', 'Munculnya bintik putih pada tubuh ikan'),
(2, 'G2', 'Munculnya bintik berwarna emas pada tubuh ikan'),
(3, 'G3', 'Sirip dan ekor terlihat busuk dan menempel'),
(4, 'G4', 'Adanya parasit yang menempel pada tubuh ikan'),
(5, 'G5', 'Tubuh ikan menjadi bengkak'),
(6, 'G6', 'Ekor atau sirip terlihat kuncup atau melipat '),
(7, 'G7', 'Terdapat warna merah pada ujung ekor'),
(8, 'G8', 'Tubuh ikan berubah warna'),
(9, 'G9', 'Sisik pada tubuh ikan terbuka'),
(10, 'G10', 'Ikan kurang nafsu makan'),
(11, 'G11', 'Ikan berdiam di dasar kolam'),
(12, 'G12', 'Berenang ikan tidak teratur'),
(13, 'G13', 'Ikan berenang sambil menggesekkan badannya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id` int(5) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `solusi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id`, `kode`, `penyakit`, `solusi`) VALUES
(1, 'S1', 'White spots', 'Naikkan suhu air secara perlahan hingga 26 derajat celcius, tambahkan obat Methalyn blue dan garam ikan dalam dosis yang secukupnya, pertahankan cara ini selama 4-7 hari, turunkan suhu air secara perlahan, lakukan pergantian air secara perlahan sebanyak 70% dan sedot kotoran ikan, anda dapat menyembuhkan ikan di tempat karantina, aquarium utama diberikan obat biru dan garam ikan.  '),
(2, 'S2', 'Velvet', 'Jika ditemukan lebih awal dapat menggunakan obat yang mengandung tembaga seperti Seachem Cupramin, matikan lampu aquarium sampai benar-benar sembuh, lakukan pergantian air sebanyak 70%.  '),
(3, 'S3', 'Busuk sirip dan ekor', 'Pisahkan ikan yang sakit di aquarium karantina, dapat di obati dengan antibiotik seperti Maracyn,Tetracyclin,atau seachem paraguard, bila itu jamur dapat diobati dengan methalyn blue, jika ada luka bakar amonia berikan ikan air berkualitas tinggi, disarankan untuk merawat ikan sakit di aquarium terpisah.'),
(4, 'S4', 'Protozoa', 'Pasang pemanas air(heater), berikan obat malachite green, pada tahap selanjutnya berikan obat seachem supramin setelah selesai perawatan, lakukan pergantian air sebanyak 50-70%, dapat dicegah dengan melakukan pergantian air secara teratur.'),
(5, 'S5', 'Dropsy ', 'Memberikan parameter air yang tepat dan kasih pakan yang baik, masukkan 2 sendok garam epsom ke 4 liter air dan masukkan ikan selama 30-40 menit, pastikan air memiliki suhu yang sama dengan tempat sebelumnya, dapat dicegah dengan menjaga kualitas air dan pemberian pakan yang baik.'),
(6, 'S6', 'Fin rot', 'Pisahkan ikan yang sakit pada wadah dengan ketinggian air 3-5cm, berikan garam ikan secukupnya dan biarkan kurang lebih 1-2hari, jika penyakit sudah parah tambahkan obat Tetracylin. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
