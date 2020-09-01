-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 11:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `kd_absensi` int(11) NOT NULL,
  `Admin` varchar(25) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `Keterangan` enum('Hadir','Sakit','Izin','Alfa','Cuti') NOT NULL,
  `Tanggal` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`kd_absensi`, `Admin`, `NIK`, `Keterangan`, `Tanggal`, `Status`) VALUES
(241, 'IWANGUNAWAN, SE', '013116-A', 'Hadir', '2017-12-28', 'iya'),
(242, 'IWANGUNAWAN, SE', '014400-A', 'Hadir', '2017-12-28', 'iya'),
(243, 'IWANGUNAWAN, SE', '071443-A', 'Hadir', '2017-12-28', 'iya'),
(244, 'IWANGUNAWAN, SE', '071446-A', 'Hadir', '2017-12-28', 'iya'),
(245, 'IWANGUNAWAN, SE', '071449-A', 'Hadir', '2017-12-28', 'iya'),
(246, 'IWANGUNAWAN, SE', '071450-A', 'Hadir', '2017-12-28', 'iya'),
(247, 'IWANGUNAWAN, SE', '663', 'Sakit', '2017-12-28', 'iya'),
(248, 'IWANGUNAWAN, SE', '664', 'Sakit', '2017-12-28', 'iya'),
(249, 'IWANGUNAWAN, SE', '668', 'Sakit', '2017-12-28', 'iya'),
(250, 'IWANGUNAWAN, SE', '669', 'Sakit', '2017-12-28', 'iya'),
(251, 'IWANGUNAWAN, SE', '670', 'Sakit', '2017-12-28', 'iya'),
(252, 'IWANGUNAWAN, SE', '671', 'Sakit', '2017-12-28', 'iya'),
(253, 'IWANGUNAWAN, SE', '824', 'Sakit', '2017-12-28', 'iya'),
(254, 'IWANGUNAWAN, SE', '880752-A', 'Hadir', '2017-12-28', 'iya'),
(255, 'IWANGUNAWAN, SE', '880813-A', 'Hadir', '2017-12-28', 'iya'),
(256, 'IWANGUNAWAN, SE', '890894-A', 'Hadir', '2017-12-28', 'iya'),
(257, 'IWANGUNAWAN, SE', '890920-A', 'Hadir', '2017-12-28', 'iya'),
(258, 'IWANGUNAWAN, SE', '890938-A', 'Hadir', '2017-12-28', 'iya'),
(259, 'IWANGUNAWAN, SE', '910987-A', 'Hadir', '2017-12-28', 'iya'),
(260, 'IWANGUNAWAN, SE', '931066-A', 'Hadir', '2017-12-28', 'iya'),
(261, 'IWANGUNAWAN, SE', '931071-A', 'Hadir', '2017-12-28', 'iya'),
(262, 'IWANGUNAWAN, SE', '951180-A', 'Sakit', '2017-12-28', 'iya'),
(263, 'IWANGUNAWAN, SE', '013116-A', 'Hadir', '2017-12-27', ''),
(264, 'IWANGUNAWAN, SE', '014400-A', 'Izin', '2017-12-27', ''),
(265, 'IWANGUNAWAN, SE', '071443-A', 'Hadir', '2017-12-27', ''),
(266, 'IWANGUNAWAN, SE', '071446-A', 'Hadir', '2017-12-27', ''),
(267, 'IWANGUNAWAN, SE', '071449-A', 'Hadir', '2017-12-27', ''),
(268, 'IWANGUNAWAN, SE', '071450-A', 'Hadir', '2017-12-27', ''),
(269, 'IWANGUNAWAN, SE', '663', 'Hadir', '2017-12-27', ''),
(270, 'IWANGUNAWAN, SE', '664', 'Hadir', '2017-12-27', ''),
(271, 'IWANGUNAWAN, SE', '668', 'Hadir', '2017-12-27', ''),
(272, 'IWANGUNAWAN, SE', '669', 'Hadir', '2017-12-27', ''),
(273, 'IWANGUNAWAN, SE', '670', 'Hadir', '2017-12-27', ''),
(274, 'IWANGUNAWAN, SE', '671', 'Hadir', '2017-12-27', ''),
(275, 'IWANGUNAWAN, SE', '824', 'Hadir', '2017-12-27', ''),
(276, 'IWANGUNAWAN, SE', '880752-A', 'Hadir', '2017-12-27', ''),
(277, 'IWANGUNAWAN, SE', '880813-A', 'Hadir', '2017-12-27', ''),
(278, 'IWANGUNAWAN, SE', '890894-A', 'Hadir', '2017-12-27', ''),
(279, 'IWANGUNAWAN, SE', '890920-A', 'Hadir', '2017-12-27', ''),
(280, 'IWANGUNAWAN, SE', '890938-A', 'Hadir', '2017-12-27', ''),
(281, 'IWANGUNAWAN, SE', '910987-A', 'Hadir', '2017-12-27', ''),
(282, 'IWANGUNAWAN, SE', '931066-A', 'Hadir', '2017-12-27', ''),
(283, 'IWANGUNAWAN, SE', '931071-A', 'Hadir', '2017-12-27', ''),
(284, 'IWANGUNAWAN, SE', '951180-A', 'Hadir', '2017-12-27', ''),
(285, 'PRASETYADI', '013116-A', 'Hadir', '2017-12-29', ''),
(286, 'PRASETYADI', '014400-A', 'Izin', '2017-12-29', ''),
(287, 'PRASETYADI', '071443-A', 'Hadir', '2017-12-29', ''),
(288, 'PRASETYADI', '071446-A', 'Hadir', '2017-12-29', ''),
(289, 'PRASETYADI', '071449-A', 'Hadir', '2017-12-29', ''),
(290, 'PRASETYADI', '071450-A', 'Hadir', '2017-12-29', ''),
(291, 'PRASETYADI', '663', 'Hadir', '2017-12-29', ''),
(292, 'PRASETYADI', '664', 'Hadir', '2017-12-29', ''),
(293, 'PRASETYADI', '668', 'Hadir', '2017-12-29', ''),
(294, 'PRASETYADI', '669', 'Hadir', '2017-12-29', ''),
(295, 'PRASETYADI', '670', 'Hadir', '2017-12-29', ''),
(296, 'PRASETYADI', '671', 'Hadir', '2017-12-29', ''),
(297, 'PRASETYADI', '824', 'Hadir', '2017-12-29', ''),
(298, 'PRASETYADI', '880752-A', 'Hadir', '2017-12-29', ''),
(299, 'PRASETYADI', '880813-A', 'Hadir', '2017-12-29', ''),
(300, 'PRASETYADI', '890894-A', 'Hadir', '2017-12-29', ''),
(301, 'PRASETYADI', '890920-A', 'Hadir', '2017-12-29', ''),
(302, 'PRASETYADI', '890938-A', 'Hadir', '2017-12-29', ''),
(303, 'PRASETYADI', '910987-A', 'Hadir', '2017-12-29', ''),
(304, 'PRASETYADI', '931066-A', 'Hadir', '2017-12-29', ''),
(305, 'PRASETYADI', '931071-A', 'Hadir', '2017-12-29', ''),
(306, 'PRASETYADI', '951180-A', 'Hadir', '2017-12-29', ''),
(307, 'PRASETYADI', '013116-A', 'Hadir', '2017-12-30', ''),
(308, 'PRASETYADI', '014400-A', 'Cuti', '2017-12-30', ''),
(309, 'PRASETYADI', '071443-A', 'Hadir', '2017-12-30', ''),
(310, 'PRASETYADI', '071446-A', 'Hadir', '2017-12-30', ''),
(311, 'PRASETYADI', '071449-A', 'Hadir', '2017-12-30', ''),
(312, 'PRASETYADI', '071450-A', 'Hadir', '2017-12-30', ''),
(313, 'PRASETYADI', '663', 'Hadir', '2017-12-30', ''),
(314, 'PRASETYADI', '664', 'Hadir', '2017-12-30', ''),
(315, 'PRASETYADI', '668', 'Hadir', '2017-12-30', ''),
(316, 'PRASETYADI', '669', 'Hadir', '2017-12-30', ''),
(317, 'PRASETYADI', '670', 'Hadir', '2017-12-30', ''),
(318, 'PRASETYADI', '671', 'Hadir', '2017-12-30', ''),
(319, 'PRASETYADI', '824', 'Hadir', '2017-12-30', ''),
(320, 'PRASETYADI', '880752-A', 'Hadir', '2017-12-30', ''),
(321, 'PRASETYADI', '880813-A', 'Hadir', '2017-12-30', ''),
(322, 'PRASETYADI', '890894-A', 'Hadir', '2017-12-30', ''),
(323, 'PRASETYADI', '890920-A', 'Hadir', '2017-12-30', ''),
(324, 'PRASETYADI', '890938-A', 'Hadir', '2017-12-30', ''),
(325, 'PRASETYADI', '910987-A', 'Hadir', '2017-12-30', ''),
(326, 'PRASETYADI', '931066-A', 'Hadir', '2017-12-30', ''),
(327, 'PRASETYADI', '931071-A', 'Hadir', '2017-12-30', ''),
(328, 'PRASETYADI', '951180-A', 'Hadir', '2017-12-30', ''),
(329, 'IWANGUNAWAN, SE', '013116-A', 'Cuti', '2017-12-31', ''),
(330, 'IWANGUNAWAN, SE', '014400-A', 'Cuti', '2017-12-31', ''),
(331, 'IWANGUNAWAN, SE', '071443-A', 'Cuti', '2017-12-31', ''),
(332, 'IWANGUNAWAN, SE', '071446-A', 'Cuti', '2017-12-31', ''),
(333, 'IWANGUNAWAN, SE', '071449-A', 'Cuti', '2017-12-31', ''),
(334, 'IWANGUNAWAN, SE', '071450-A', 'Cuti', '2017-12-31', ''),
(335, 'IWANGUNAWAN, SE', '663', 'Cuti', '2017-12-31', ''),
(336, 'IWANGUNAWAN, SE', '664', 'Cuti', '2017-12-31', ''),
(337, 'IWANGUNAWAN, SE', '668', 'Cuti', '2017-12-31', ''),
(338, 'IWANGUNAWAN, SE', '669', 'Cuti', '2017-12-31', ''),
(339, 'IWANGUNAWAN, SE', '670', 'Cuti', '2017-12-31', ''),
(340, 'IWANGUNAWAN, SE', '671', 'Cuti', '2017-12-31', ''),
(341, 'IWANGUNAWAN, SE', '824', 'Cuti', '2017-12-31', ''),
(342, 'IWANGUNAWAN, SE', '880752-A', 'Cuti', '2017-12-31', ''),
(343, 'IWANGUNAWAN, SE', '880813-A', 'Cuti', '2017-12-31', ''),
(344, 'IWANGUNAWAN, SE', '890894-A', 'Cuti', '2017-12-31', ''),
(345, 'IWANGUNAWAN, SE', '890920-A', 'Cuti', '2017-12-31', ''),
(346, 'IWANGUNAWAN, SE', '890938-A', 'Cuti', '2017-12-31', ''),
(347, 'IWANGUNAWAN, SE', '910987-A', 'Cuti', '2017-12-31', ''),
(348, 'IWANGUNAWAN, SE', '931066-A', 'Cuti', '2017-12-31', ''),
(349, 'IWANGUNAWAN, SE', '931071-A', 'Cuti', '2017-12-31', ''),
(350, 'IWANGUNAWAN, SE', '951180-A', 'Cuti', '2017-12-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `kd_cuti` int(11) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `dari` date NOT NULL,
  `sampai` varchar(30) NOT NULL,
  `jenis_cuti` varchar(50) NOT NULL,
  `lama` varchar(25) NOT NULL,
  `sisa` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('Pending','iya','tidak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`kd_cuti`, `NIK`, `dari`, `sampai`, `jenis_cuti`, `lama`, `sisa`, `keterangan`, `status`) VALUES
(326, '014400-A', '2018-01-01', '2018-04-01', 'Cuti Hamil', '90', -17528, 'Diterima', 'iya'),
(327, '071446-A', '2017-12-28', '2018-01-09', 'Cuti Tahunan', '12', -17528, '', 'Pending'),
(328, '670', '2018-02-01', '2018-02-13', 'Cuti Tahunan', '12', -17528, 'pegawai kontrak', 'tidak'),
(329, '663', '2018-01-01', '2018-01-13', 'Cuti Tahunan', '12', -17528, '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kd_jabatan` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `jabatan`) VALUES
('JB003', 'AST ANALIS'),
('JB001', 'KEPALA SEKSI'),
('JB006', 'KONTRAK'),
('JB007', 'OPERATOR'),
('JB005', 'PELAKSANA'),
('JB004', 'PENYELIA'),
('JB002', 'SUPERVISOR');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `kd_laporan` int(11) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `kd_rutinitas` int(11) NOT NULL,
  `kd_absensi` int(11) NOT NULL,
  `kd_cuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIK` varchar(25) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `jk` enum('Perempuan','Laki-Laki','','') NOT NULL,
  `Tgl_lhr` date NOT NULL,
  `Alamat` text NOT NULL,
  `No_tlp` int(15) NOT NULL,
  `Foto` varchar(50) NOT NULL,
  `Status` enum('Pending','iya','tidak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIK`, `Nama`, `jabatan`, `jk`, `Tgl_lhr`, `Alamat`, `No_tlp`, `Foto`, `Status`) VALUES
('013116-A', 'IWANGUNAWAN, SE', 'KEPALA SEKSI', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('014400-A', 'USEP DERAJAT', 'OPERATOR', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'tidak'),
('071443-A', 'UUS SUHERMAN', 'OPERATOR', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('071446-A', 'UCI SAPAAT', 'PELAKSANA', 'Perempuan', '2017-12-28', '.', 0, 'user.png', 'Pending'),
('071449-A', 'ASEP MULYANA', 'PELAKSANA', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('071450-A', 'IHIN SOLIHIN', 'PELAKSANA', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('663', 'ASEP RATMITA', 'KONTRAK', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'Pending'),
('664', 'HARIS RAMLI', 'KONTRAK', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('668', 'IDANG RUDI S', 'KONTRAK', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('669', 'CHANDRA YOGA', 'KONTRAK', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('670', 'NURBANI', 'KONTRAK', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('671', 'RANU ILYA K', 'KONTRAK', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('824', 'RIZAL PAMUNGKAS', 'KONTRAK', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('880752-A', 'RUSMANA', 'PELAKSANA', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('880813-A', 'RUKMA', 'PELAKSANA', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('890894-A', 'SYAPRUDIN', 'SUPERVISOR', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('890920-A', 'HENDRA GUMIRA', 'AST ANALIS', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('890938-A', 'SUNARTO', 'PELAKSANA', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('910987-A', 'PRASETYADI', 'PENYELIA', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('931066-A', 'WAHYUDI', 'OPERATOR', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('931071-A', 'UJANG SURYADI', 'OPERATOR', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya'),
('951180-A', 'ASEP NANDANG G', 'PELAKSANA', 'Laki-Laki', '2017-12-28', '.', 0, 'user.png', 'iya');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `kd_pekerjaan` int(11) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`kd_pekerjaan`, `NIK`, `pekerjaan`, `tanggal`, `foto`, `keterangan`) VALUES
(16, '951180-A', 'Perbaikan', '2017-12-01', 'pipa-bocor-di-bone.jpg', 'Pipa bocor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `lvl_akses` enum('Admin','Pegawai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `NIK`, `Password`, `lvl_akses`) VALUES
(14, '013116-A', '013116-A', 'Admin'),
(15, '890894-A', '890894-A', 'Pegawai'),
(16, '890920-A', '890920-A', 'Pegawai'),
(17, '910987-A', '910987-A', 'Admin'),
(18, '890938-A', '890398-A', 'Pegawai'),
(19, '951180-A', '951180-A', 'Pegawai'),
(20, '880813-A', '880813-A', 'Pegawai'),
(21, '071449-A', '071449-A', 'Pegawai'),
(22, '880752-A', '880752-A', 'Pegawai'),
(23, '071446-A', '071446-A', 'Pegawai'),
(24, '071450-A', '071450-A', 'Pegawai'),
(25, '931071-A', '931071-A', 'Pegawai'),
(26, '071443-A', '071443-A', 'Pegawai'),
(27, '014400-A', '0144-A', 'Pegawai'),
(28, '931066-A', '931066-A', 'Pegawai'),
(29, '663', '663', 'Pegawai'),
(30, '664', '664', 'Pegawai'),
(31, '668', '668', 'Pegawai'),
(32, '671', '671', 'Pegawai'),
(33, '824', '000181-A', 'Pegawai'),
(34, '669', '669', 'Pegawai'),
(35, '670', '670', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`kd_absensi`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`kd_cuti`),
  ADD KEY `NIK` (`NIK`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kd_jabatan`),
  ADD KEY `jabatan` (`jabatan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`kd_laporan`),
  ADD KEY `NIK` (`NIK`),
  ADD KEY `Nama` (`Nama`),
  ADD KEY `kd_rutinitas` (`kd_rutinitas`),
  ADD KEY `kd_absensi` (`kd_absensi`),
  ADD KEY `kd_cuti` (`kd_cuti`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `status` (`Status`),
  ADD KEY `jabatan` (`jabatan`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`kd_pekerjaan`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `NIK` (`NIK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `kd_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;
--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `kd_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;
--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `kd_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `pegawai` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `pegawai` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD CONSTRAINT `pekerjaan_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `pegawai` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `pegawai` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
