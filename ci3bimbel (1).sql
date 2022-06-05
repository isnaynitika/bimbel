-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 10:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `nip`, `jk`, `tgl_lahir`, `alamat`, `foto`) VALUES
(2, 'Pak Bento', '34343', 'Laki - Laki', '2021-06-12', 'Solo', 'WhatsApp_Image_2021-03-28_at_16_57_11_(2).jpeg'),
(3, 'Pak Muhtadi', '373737', 'Laki - Laki', '2021-06-19', 'Sragen', 'WhatsApp_Image_2021-03-28_at_16_57_11_(2)1.jpeg'),
(4, 'Pak Anjaynudin', '676889', 'Wanita', '2021-06-12', 'Solo', 'foto_pas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `id_kelas` varchar(12) NOT NULL,
  `kode_materi` varchar(12) DEFAULT NULL,
  `nama_materi` varchar(255) DEFAULT NULL,
  `harga` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `id_kelas`, `kode_materi`, `nama_materi`, `harga`, `foto`) VALUES
(5, 'Web Development', '11111', NULL, '', '1000000', '_20210305_124839_823.jpg'),
(6, 'Animasi Grafis', '22222', NULL, '', '2000000', 'animasi.jpg'),
(9, 'C', '213', '14', NULL, '2000', '02-Ke_Klinik3.png');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `kode_materi` varchar(255) NOT NULL,
  `nip` varchar(12) DEFAULT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `isi` text NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `nama_materi`, `kode_materi`, `nip`, `nama_guru`, `isi`, `file`) VALUES
(2, 'Sistem Terdistribusi', '22222', NULL, 'Pak Muhtadi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Sistem_Terdistribusi.pdf'),
(3, 'Pemrogaman Web', '55555', NULL, 'Pak Muhtadi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB-Teori-01_-_Pengantar_Web.pdf'),
(6, 'Aye aye', '123', NULL, 'Pak Bento', 'yayayay', 'lokalisasi.pdf'),
(10, 'A', '14', '676889', '', '1', 'lokalisasi1.pdf'),
(11, 'Pemrogaman Web', '11111', '34343', '', 'Lorem', 'WEB-Teori01-M3119059-Muhammad_Irfan_Pratama2.pdf'),
(12, 'Java', '00009', '34343', NULL, 'afdaabdb', 'M3119059_Muhammad_Irfan_Pratama_Prak02.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `nama`, `nis`, `jk`, `tgl_lahir`, `alamat`, `foto`) VALUES
(15, 'kolo', 'M3222', 'Laki - Laki', '2021-06-19', 'Batam', 'buttonplay.png'),
(16, 'Rara Tara', '123', 'Laki - Laki', '2021-06-09', 'neng di wae', 'Untitled.png'),
(17, 'Irfan', 'M44445', 'Laki - Laki', '2021-06-05', 'asfaasf', 'foto_pas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(12) DEFAULT NULL,
  `id_pembelian` varchar(12) NOT NULL,
  `id_kelas` varchar(12) DEFAULT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `nama`, `nis`, `id_pembelian`, `id_kelas`, `nama_kelas`) VALUES
(2, 'kolo', NULL, '123123', NULL, 'Web Development'),
(3, 'Irfan', NULL, '222233', NULL, 'Animasi Grafis'),
(5, '', NULL, '1234', NULL, NULL),
(6, 'Rara Tara', NULL, '123', NULL, '22222'),
(7, '', NULL, '1234', NULL, NULL),
(8, '', NULL, '33777', NULL, '11111'),
(9, '', NULL, '324234', NULL, '22222'),
(10, 'Rara Tara', NULL, '1236yr5', NULL, NULL),
(11, '', NULL, '876897070', NULL, NULL),
(12, 'Rara Tara', NULL, '768', NULL, NULL),
(13, '', NULL, '1234', NULL, NULL),
(14, 'kolo', NULL, '21123', '11111', NULL),
(15, 'Rara Tara', NULL, '213123', '11111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Irfan', 'aaa@gmail.com', 'admin', '123'),
(2, 'musyaffa choirun man', 'musyaffa220@gmail.com', 'musyaffa', '202cb962ac59075b964b07152d234b70'),
(33, 'Rara Tara', 'rara@gmail.com', 'tera', '202cb962ac59075b964b07152d234b70'),
(34, 'admin', 'asd@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD KEY `keymateri` (`kode_materi`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_materi` (`kode_materi`),
  ADD KEY `keyguru` (`nip`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kode_materi`) REFERENCES `materi` (`kode_materi`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `murid` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
