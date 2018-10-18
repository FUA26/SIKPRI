-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 09:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idAnggota` int(11) NOT NULL,
  `idInstansi` int(11) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telpn` varchar(12) DEFAULT NULL,
  `alamat` varchar(150) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status_anggota` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idAnggota`, `idInstansi`, `nama`, `nip`, `tanggal_lahir`, `telpn`, `alamat`, `username`, `password`, `status_anggota`) VALUES
(1, 3, 'Jefri Hanaka', '1985033020031210', '1985-05-30', '085266784687', 'Jln. apel batu', 'jef', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(43, 3, 'Test', '1975033020031211', '2018-01-01', '085266784687', 'Jln. apel batu', 'yes', '4124bc0a9335c27f086f24ba207a4912', 1),
(44, 5, 'final test', '1975033020031211', '2018-01-01', '085266784687', '', 'yeye', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(45, 9, 'coba', '1975033020031220', '2018-01-01', '085266784687', 'jln kenanga', 'coba', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
(46, 4, 'coba2', '1955033020031217', '1977-01-10', '085266784634', 'Jln. apel batu 32', 'coba2', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(47, 1, 'as', '123546', '2018-01-04', '085266784687', 'Jln. apel batu', 'aaa', '4124bc0a9335c27f086f24ba207a4912', 0),
(48, 2, 'Test', '32', '2018-12-01', '12', 'sadjs', 'ewqe', '3c59dc048e8850243be8079a5c74d079', 1),
(49, 7, 'Fatih Ulil', '123566453432', '1995-06-26', '09867543', 'malang', 'kamarkopi', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(50, 1, 'Teta', '2345678', '1996-04-15', '083821382831', 'jl kenanga', 'teta', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(51, 8, 'Ahmad abdullah', '1985033020031211', '1970-01-31', '085266784688', 'Jln. apel', 'ahmad', 'dbfc86cc375fdfc85f5acece0103a01d', 1),
(52, 3, 'Muhammad', '1955033020031213', '1970-01-03', '085266784682', 'Jln. apel batu2', 'muhammad', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
(53, 5, 'final test', '12354622', '2018-01-01', '1323', 'Jln. apel', 'qwer', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detailpinjaman`
--

CREATE TABLE `detailpinjaman` (
  `idDetailPinjaman` int(11) NOT NULL,
  `idPinjaman` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpinjaman`
--

INSERT INTO `detailpinjaman` (`idDetailPinjaman`, `idPinjaman`, `tanggal`, `jumlah`) VALUES
(2, 1, '2018-01-04', 542000),
(3, 1, '2018-01-24', 542000),
(4, 1, '2018-02-10', 542000),
(5, 1, '2018-02-10', 542000),
(6, 1, '2018-03-20', 575000),
(7, 1, '2018-03-21', 542000),
(8, 1, '2018-04-27', 542000),
(9, 1, '2018-04-28', 173000),
(11, 6, '2017-12-18', 560000),
(12, 6, '2018-01-02', 580000),
(13, 7, '2018-03-23', 934000);

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `idInstansi` int(11) NOT NULL,
  `instansi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`idInstansi`, `instansi`) VALUES
(1, 'SDN Sumbermanjing 1'),
(2, 'SDN Sumbermanjing 2'),
(3, 'SDN Sumbermanjing 3'),
(4, 'SDN Ringinsari 1'),
(5, 'SDN Ringinsari 2'),
(6, 'SDN Sitiarjo 1'),
(7, 'SDN Sitiarjo 2'),
(8, 'SDN Tambakasri 1'),
(9, 'SDN Tambakasri 2'),
(10, 'SMP Negeri 1 Sumbermanjing'),
(11, 'SMP Negeri 2 Sumbermanjing');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `idjenis` int(11) NOT NULL,
  `jenis` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`idjenis`, `jenis`) VALUES
(0, 'Penarikan'),
(1, 'Pokok'),
(2, 'Wajib'),
(3, 'Gertab'),
(4, 'Tabungan Hari Raya'),
(5, 'Manasuka'),
(6, 'Sisa Hasil Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuanpinjaman`
--

CREATE TABLE `pengajuanpinjaman` (
  `idPengajuan` int(11) NOT NULL,
  `idAnggota` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `gaji` int(11) DEFAULT NULL,
  `besar_pinjaman` int(11) DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `alasan` varchar(120) DEFAULT NULL,
  `idStatus` int(11) DEFAULT NULL,
  `ket` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuanpinjaman`
--

INSERT INTO `pengajuanpinjaman` (`idPengajuan`, `idAnggota`, `tanggal`, `gaji`, `besar_pinjaman`, `lama`, `alasan`, `idStatus`, `ket`) VALUES
(8, 1, '2018-01-01 00:00:00', 3000000, 4000000, 12, 'assa', 1, 0),
(9, 45, '2018-01-01 00:00:00', 2750000, 5000000, 12, 'butuh', 3, 1),
(10, 1, '2018-01-05 00:00:00', 1, 100000, 1, '11', 3, 0),
(11, 1, '2018-01-22 00:00:00', 3200000, 25000000, 24, 'butuh uang', 2, 0),
(12, 1, '2018-02-12 09:14:43', 3000000, 10000000, 24, 'beli hp', 1, 0),
(13, 1, '2018-02-12 10:47:21', 3000000, 10000000, 12, 'biaya sekolah', 4, 0),
(14, 1, '2018-02-12 13:09:42', 4000000, 10000000, 12, 'biaya anak', 3, 0),
(15, 1, '2018-02-13 09:21:50', 2500000, 6000000, 12, 'BIAYA KULIAH', 1, 0),
(16, 1, '2018-02-13 09:23:05', 4000000, 10000000, 12, 'biaya rumah', 1, 0),
(17, 1, '2018-02-13 11:43:22', 1000000, 4000000, 12, 'butuh uang', 1, 0),
(18, 44, '2018-02-13 17:25:57', 10000000, 1000000, 12, 'SA', 1, 0),
(19, 1, '2018-02-14 08:05:33', 3000000, 600000, 12, 'biaya sekolah anak', 3, 0),
(20, 1, '2018-02-14 09:27:07', 3000000, 12000000, 12, 'biaya sekolah', 2, 0),
(21, 1, '2018-02-16 11:31:26', 3250000, 10000000, 18, 'perbaikan mobil', 1, 0),
(22, 1, '2018-02-17 08:44:56', 2750000, 5000000, 12, 'Butuh uang', 1, 0),
(23, 1, '2018-02-17 09:23:51', 3250000, 7000000, 12, 'kontrakan rumah', 1, 0),
(24, 1, '2018-02-17 12:37:11', 3000000, 5000000, 12, 'pembelian motor', 2, 0),
(25, 1, '2018-02-19 11:43:27', 3500000, 25000000, 36, 'Perbaikan rumah', 3, 0),
(26, 1, '2018-02-19 11:53:29', 2700000, 14000000, 36, 'beli kendaraan bermotor', 1, 0),
(27, 1, '2018-02-19 13:13:34', 3000000, 25000000, 24, 'hajatan', 1, 0),
(28, 1, '2018-02-20 08:13:41', 3500000, 50000000, 36, 'pendaftaran umroh', 2, 0),
(29, 1, '2018-02-20 09:53:26', 3000000, 15000000, 36, 'biaya sekolah anak', 2, 0),
(30, 1, '2018-02-21 13:07:39', 3000000, 20000000, 42, 'perbaikan rumah', 1, 0),
(31, 1, '2018-02-02 09:23:51', 3250000, 7000000, 12, 'kontrakan rumah', 1, 0),
(32, 1, '2018-02-27 19:23:51', 3000000, 7570000, 12, 'dadasd', 1, 0),
(33, 1, '2018-02-27 19:43:23', 5000000, 75000000, 60, 'dwqdqdac', 1, 0),
(34, 1, '2018-03-03 07:54:30', 4000000, 45000000, 42, 'fepsfn', 3, 0),
(35, 1, '2018-03-07 21:03:10', 3000000, 6000000, 12, 'beli spatu', 2, 0),
(36, 1, '2018-04-12 22:39:01', 5000000, 85000000, 60, 'nikahan', 2, 0),
(37, 1, '2018-04-12 22:53:26', 3000000, 6000000, 12, 'ioejoie', 1, 0),
(38, 1, '2018-06-06 09:53:09', 3000000, 12000000, 12, 'dayugasd', 1, 0),
(39, 1, '2018-06-06 10:13:55', 3500000, 10000000, 12, 'kfoksf', 1, 0),
(40, 1, '2018-06-07 08:31:47', 3000000, 6000000, 12, 'biaya sekolah', 1, 0),
(41, 1, '2018-06-19 08:16:15', 2500000, 500000, 6, 'biaya berobat', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `username` varchar(12) NOT NULL,
  `password` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `idPinjaman` int(11) NOT NULL,
  `idAnggota` int(11) DEFAULT NULL,
  `pinjaman` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `potongan` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`idPinjaman`, `idAnggota`, `pinjaman`, `tanggal`, `lama`, `potongan`, `status`) VALUES
(1, 1, 10000000, '2018-01-01', 24, 542000, 0),
(2, 43, 10000000, '2018-01-01', 16, 650000, 0),
(3, 44, 5000000, '2018-04-04', 10, 500000, 0),
(4, 48, 6000000, '2018-03-15', 12, 512000, 0),
(5, 43, 6000000, '2018-05-01', 12, 512000, 0),
(6, 1, 6000000, '2017-12-12', 12, 560000, 1),
(7, 1, 10000000, '2018-02-06', 12, 934000, 0),
(8, 46, 1000000, '2018-05-07', 12, 1000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `idSimpanan` int(11) NOT NULL,
  `idAnggota` int(11) DEFAULT NULL,
  `idJenis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`idSimpanan`, `idAnggota`, `idJenis`, `tanggal`, `jumlah`) VALUES
(4, 1, 1, '2017-12-01', 100000),
(5, 1, 2, '2017-01-01', 150000),
(6, 1, 3, '2017-01-01', 30000),
(7, 1, 2, '2017-02-01', 150000),
(8, 1, 3, '2017-02-01', 30000),
(9, 1, 0, '2017-01-03', 100000),
(12, 1, 2, '2018-01-02', 150000),
(19, 1, 5, '2018-01-02', 4000000),
(20, 1, 3, '2018-01-02', 10000),
(21, 1, 0, '2018-01-02', 25000),
(24, 43, 1, '2018-01-02', 100000),
(25, 43, 2, '2018-01-02', 150000),
(26, 43, 3, '2018-01-02', 30000),
(27, 43, 2, '2018-01-02', 150000),
(28, 43, 0, '2018-01-02', 10000),
(29, 44, 1, '2018-01-02', 100000),
(30, 44, 2, '2018-01-02', 150000),
(31, 44, 3, '2018-01-02', 30000),
(32, 45, 1, '2018-01-02', 100000),
(33, 45, 2, '2018-01-02', 150000),
(34, 45, 3, '2018-01-02', 30000),
(35, 46, 1, '2018-01-02', 100000),
(36, 46, 2, '2018-01-02', 150000),
(37, 46, 3, '2018-01-02', 30000),
(38, 46, 2, '2018-01-02', 150000),
(39, 47, 1, '2018-01-03', 100000),
(40, 47, 2, '2018-01-03', 150000),
(41, 47, 3, '2018-01-03', 30000),
(42, 47, 2, '2018-01-03', 150000),
(43, 48, 1, '2018-01-12', 100000),
(44, 48, 2, '2018-01-12', 150000),
(45, 48, 3, '2018-01-12', 30000),
(46, 1, 2, '2018-01-22', 150000),
(47, 1, 3, '2018-01-22', 30000),
(48, 1, 4, '2018-01-22', 200000),
(49, 43, 3, '2018-01-30', 30000),
(50, 44, 2, '2018-04-27', 150000),
(51, 44, 4, '2018-04-27', 200000),
(52, 49, 1, '2018-04-27', 100000),
(53, 49, 2, '2018-04-27', 150000),
(54, 49, 3, '2018-04-27', 30000),
(55, 50, 1, '2018-04-27', 100000),
(56, 50, 2, '2018-04-27', 150000),
(57, 50, 3, '2018-04-27', 30000),
(59, 1, 2, '2018-05-22', 150000),
(60, 51, 1, '2017-12-01', 100000),
(61, 51, 2, '2017-12-01', 150000),
(62, 51, 3, '2017-12-01', 30000),
(63, 52, 1, '2017-12-01', 100000),
(64, 52, 2, '2017-12-01', 150000),
(65, 52, 3, '2017-12-01', 30000),
(66, 52, 4, '2017-12-01', 200000),
(67, 52, 5, '2017-12-01', 1200000),
(68, 52, 0, '2017-12-22', 500000),
(69, 1, 6, '2018-05-28', 200000),
(70, 53, 1, '2018-05-28', 100000),
(71, 53, 2, '2018-05-28', 150000),
(72, 53, 3, '2018-05-28', 30000),
(73, 43, 5, '2018-05-28', 0),
(74, 43, 3, '2018-05-28', NULL),
(75, 43, 5, '2018-05-28', 0),
(76, 43, 0, '2018-05-28', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idStatus`, `status`) VALUES
(1, 'Menunggu'),
(2, 'Diterima'),
(3, 'Ditolak'),
(4, 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idAnggota`),
  ADD KEY `idInstansi` (`idInstansi`);

--
-- Indexes for table `detailpinjaman`
--
ALTER TABLE `detailpinjaman`
  ADD PRIMARY KEY (`idDetailPinjaman`),
  ADD KEY `idPinjaman` (`idPinjaman`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`idInstansi`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `pengajuanpinjaman`
--
ALTER TABLE `pengajuanpinjaman`
  ADD PRIMARY KEY (`idPengajuan`),
  ADD KEY `idAnggota` (`idAnggota`),
  ADD KEY `idStatus` (`idStatus`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`idPinjaman`),
  ADD KEY `idAnggota` (`idAnggota`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`idSimpanan`),
  ADD KEY `idJenis` (`idJenis`),
  ADD KEY `simpanan_ibfk_1` (`idAnggota`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idAnggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `detailpinjaman`
--
ALTER TABLE `detailpinjaman`
  MODIFY `idDetailPinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `idInstansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pengajuanpinjaman`
--
ALTER TABLE `pengajuanpinjaman`
  MODIFY `idPengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `idPinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `idSimpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`idInstansi`) REFERENCES `instansi` (`idInstansi`);

--
-- Constraints for table `detailpinjaman`
--
ALTER TABLE `detailpinjaman`
  ADD CONSTRAINT `detailpinjaman_ibfk_1` FOREIGN KEY (`idPinjaman`) REFERENCES `pinjaman` (`idPinjaman`);

--
-- Constraints for table `pengajuanpinjaman`
--
ALTER TABLE `pengajuanpinjaman`
  ADD CONSTRAINT `pengajuanpinjaman_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`),
  ADD CONSTRAINT `pengajuanpinjaman_ibfk_2` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`);

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`);

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`) ON DELETE CASCADE,
  ADD CONSTRAINT `simpanan_ibfk_2` FOREIGN KEY (`idJenis`) REFERENCES `jenis` (`idjenis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
