-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2015 at 08:13 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning_pahoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('08a54393771057c3a35793e64668643427665894', '::1', 1432873993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323837303635373b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('0c0fb4b11708385c9372df49a38c5a5d8be4991e', '::1', 1433125340, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333132323230303b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('0e848d3f79f7ca035ac192aa447aeaba5e904101', '::1', 1433126886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333132353735343b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('25acee199df405fa83f8f5a67e4d6a58bfd40792', '::1', 1432881914, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323838313530333b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('5b75e59098f3e79b889f1fd433f21c1dfedbe5e7', '::1', 1433117347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333131373334373b),
('807e4b85c7bd25b54b462793fe2fb7a13794d1bf', '::1', 1433130720, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333132373338363b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('841c85b4b3d233d079309d188287ad43176653e6', '::1', 1433137500, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333133373436353b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('88a21ad638e6f726518f5ac7710799621e711dac', '::1', 1432885909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323838353930393b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('89da6fcb4054fb61cfcb912e78f0dcc942d6bd50', '::1', 1432881455, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323838313135363b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('9087b46e3e6b64805f5f7928c8cdf57752de01a4', '::1', 1432883696, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323838333434313b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('b780e9c9d3574c936e2074a2c18df00f1d4a227b', '::1', 1432880601, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323837333939363b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('becf2760277bf2445e867ec485bc80dfa7471ac4', '::1', 1433118180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333131373334373b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('bee06d47d4e7b0cfc8fc78a0388c298468038215', '::1', 1432870638, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323836383137303b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('bf9df47393950cf52415ef3bf5fb399b2fb93f9c', '::1', 1433126993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333132363839383b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('d15f28826919604d0a68fadddcae38577a3f3dba', '::1', 1432883271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433323838323938363b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('dd6ba998ec89a5827f549aff134f5c5b04bd17cd', '::1', 1433137227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333133313331333b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('e379c874b703a9657b8a096f1358866dc01ba6f8', '::1', 1433122177, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333131383739313b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('e92bbad6243c8d54e0cacbaff741431414850836', '::1', 1433130909, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333133303732313b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b),
('fdd8857bf20da9f965d6fe4fe365d599fec6f563', '::1', 1433125523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433333132353334363b6c6f67696e5f7573657269647c733a313a2232223b6c6f67696e5f757365726e616d657c733a31303a2238383135303330373132223b6c6f67696e5f70617373776f72647c733a333a22313233223b6c6f67696e5f6e616d617c733a31353a225769726177616e20497374696f6e6f223b6c6f67696e5f6a656e6a616e677c733a333a22534d41223b6c6f67696e5f69645f6a61626174616e7c733a313a2231223b6c6f67696e5f7374617475737c733a313a2231223b746168756e416a725f6163746976657c733a393a22323031342d32303135223b73656d65737465725f6163746976657c733a313a2232223b);

-- --------------------------------------------------------

--
-- Table structure for table `ms_bulan`
--

CREATE TABLE IF NOT EXISTS `ms_bulan` (
  `id` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `ket` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_bulan`
--

INSERT INTO `ms_bulan` (`id`, `bulan`, `semester`, `ket`) VALUES
(1, 'Januari', 2, '0'),
(2, 'Febuari', 2, '0'),
(3, 'Maret', 2, '0'),
(4, 'April', 2, '0'),
(5, 'Mei', 2, '0'),
(6, 'Juni', 2, '0'),
(7, 'July', 1, '0'),
(8, 'Agustus', 1, '0'),
(9, 'September', 1, '0'),
(10, 'Oktober', 1, '0'),
(11, 'November', 1, '0'),
(12, 'Desember', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `ms_jabatan`
--

CREATE TABLE IF NOT EXISTS `ms_jabatan` (
  `id` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `edit_by` varchar(40) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_jabatan`
--

INSERT INTO `ms_jabatan` (`id`, `level`, `jabatan`, `edit_by`, `date`) VALUES
(1, 'pendidikan', 'guru', 'admin', '2015-03-27 13:52:16'),
(2, 'pendidikan', 'kepsek', 'admin', '2015-03-27 13:52:50'),
(3, 'pendidikan', 'wakasek', 'admin', '2015-03-27 13:53:30'),
(4, 'pendidikan', 'bp', 'admin', '2015-03-27 13:53:48'),
(5, 'non-pendidikan', 'dokumen kontrol', 'admin', '2015-03-27 13:54:29'),
(6, 'non-pendidikan', 'direktur', 'admin', '2015-03-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ms_kelas`
--

CREATE TABLE IF NOT EXISTS `ms_kelas` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(7) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `edit_by` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_kelas`
--

INSERT INTO `ms_kelas` (`id`, `jenjang`, `kelas`, `id_tahun_ajaran`, `date`, `edit_by`) VALUES
(1, 'SMA', 'X', 2, '2015-04-10 09:59:37', '8815030712'),
(2, 'SMA', 'XI IPA', 2, '2015-04-10 09:59:50', '8815030712'),
(3, 'SMA', 'XI IPS', 2, '2015-04-10 09:59:58', '8815030712'),
(4, 'SMA', 'XI Bahasa', 2, '2015-04-10 10:00:07', '8815030712'),
(5, 'SMA', 'XII IPA', 2, '2015-04-10 10:00:49', '8815030712'),
(6, 'SMA', 'XII IPS', 2, '2015-04-10 10:00:54', '8815030712'),
(7, 'SMA', 'XII Bahasa', 2, '2015-04-10 10:01:00', '8815030712');

-- --------------------------------------------------------

--
-- Table structure for table `ms_pelajaran`
--

CREATE TABLE IF NOT EXISTS `ms_pelajaran` (
  `id` int(11) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `alias` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_pelajaran`
--

INSERT INTO `ms_pelajaran` (`id`, `kode`, `mapel`, `jenjang`, `tipe`, `alias`) VALUES
(2, 'APAB', 'Pendidikan Agama Buddha', 'SMA', 'Akademikpilihan', 'AG#Bud'),
(3, 'APAKn', 'Pendidikan Agama Kristen', 'SMA', 'Akademikpilihan', 'AG#Kris'),
(4, 'APAKk', 'Pendidikan Agama Katolik', 'SMA', 'Akademikpilihan', 'AG#Kat'),
(5, 'APAI', 'Pendidikan Agama Islam', 'SMA', 'Akademikpilihan', 'AG#Islm'),
(6, 'APKn', 'Pendidikan Kewarganegaraan', 'SMA', 'Akademik', 'Pkn'),
(7, 'ABId', 'Bahasa Indonesia', 'SMA', 'Akademik', 'B.ind'),
(8, 'ASId', 'Sastra Indonesia', 'SMA', 'Akademik', 'Sas'),
(9, 'ABIg', 'Bahasa Inggris', 'SMA', 'Akademik', 'B.ing'),
(10, 'ABIgL', 'Bahasa Inggris Lokal', 'SMA', 'Akademik', 'B.ing'),
(11, 'ABIgN', 'Bahasa Inggris Native', 'SMA', 'Akademik', 'B.ing'),
(12, 'AMAT', 'Matematika', 'SMA', 'Akademik', 'Mat'),
(110, 'PEKSTTT', 'Ekstrakurikuler Tarian Tradisional Tionghoa', 'SMP', 'Non Akademik', 'Eks#TrTiong'),
(14, 'AIPAF', 'Fisika', 'SMA', 'Akademik', 'Fis'),
(15, 'AIPAB', 'Biologi', 'SMA', 'Akademik', 'Bio'),
(16, 'AIPAK', 'Kimia', 'SMA', 'Akademik', 'Kim'),
(18, 'AIPSE', 'Ekonomi', 'SMA', 'Akademik', 'Eko'),
(19, 'AIPSG', 'Geografi', 'SMA', 'Akademik', 'Geo'),
(20, 'AIPSSe', 'Sejarah', 'SMA', 'Akademik', 'Sej'),
(21, 'AIPSAk', 'Akuntansi', 'SMA', 'Akademik', 'Akun'),
(22, 'AIPSSo', 'Sosiologi', 'SMA', 'Akademik', 'Sos'),
(23, 'AIPSAn', 'Antropologi', 'SMA', 'Akademik', 'Antr'),
(25, 'ABMdL', 'Bahasa Mandarin Lokal Grade C', 'SMA', 'Akademik', 'Mand#LGrd C'),
(26, 'ABMdNa', 'Bahasa Mandarin Native Grade A', 'SMA', 'Akademik', 'Mand#NGrd A'),
(27, 'ASB', 'Seni Budaya', 'SMA', 'Akademikpilihan', 'Sen#Bud'),
(28, 'ASBSS', 'Seni Suara', 'SMA', 'Akademikpilihan', 'Sen#Suara'),
(29, 'ASBST', 'Seni Teater', 'SMA', 'Akademikpilihan', 'Sen#Teater'),
(30, 'ASBSM', 'Seni Musik', 'SMA', 'Akademikpilihan', 'Sen#Musik'),
(31, 'ASBSR', 'Seni Rupa', 'SMA', 'Akademikpilihan', 'Sen#Rupa'),
(33, 'AKTBg', 'Keterampilan Tata Boga', 'SMA', 'Akademikpilihan', 'Ket#Boga'),
(34, 'AKTBu', 'Keterampilan  Tata Busana', 'SMA', 'Akademikpilihan', 'Ket#Busana'),
(35, 'AKR', 'Keterampilan  Robotik', 'SMA', 'Akademikpilihan', 'Ket#Robo'),
(36, 'AKTP', 'Keterampilan Teknologi Pangan', 'SMA', 'Akademikpilihan', 'Ket#TPgn'),
(37, 'AKTBd', 'Keterampilan Teknologi Budidaya', 'SMA', 'Akademikpilihan', 'Ket#TBud'),
(38, 'AKDP', 'Keterampilan Desain Produk', 'SMA', 'Akademikpilihan', 'Ket#DP'),
(39, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 'SMA', 'Akademik', 'OR'),
(40, 'ATIK', 'Teknologi Informasi dan Komunikasi', 'SMA', 'Akademik', 'TIK'),
(41, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 'SMA', 'Akademik', 'Paud'),
(43, 'AEKSBB', 'Ekstrakurikuler Bola Basket', 'SMA', 'Non Akademik', 'Eks#Basket'),
(106, 'PEKSEC', 'Ekstrakurikuler English Community', 'SMP', 'Non Akademik', 'Eks#English'),
(46, 'AEKSBV', 'Ekstrakurikuler Bola Voli', 'SMA', 'Non Akademik', 'Eks#Voli'),
(47, 'AEKSWu', 'Ekstrakurikuler Wushu', 'SMA', 'Non Akademik', 'Eks#Wushu'),
(48, 'AEKSBt', 'Ekstrakurikuler Bulutangkis', 'SMA', 'Non Akademik', 'Eks#BlTgks'),
(49, 'AEKSFg', 'Ekstrakurikuler Fotografi', 'SMA', 'Non Akademik', 'Eks#Foto'),
(50, 'AEKSEC', 'Ekstrakurikuler English Community', 'SMA', 'Non Akademik', 'Eks#English'),
(51, 'AEKSMdC', 'Ekstrakurikuler Mandarin Community', 'SMA', 'Non Akademik', 'Eks#Mand'),
(52, 'AEKSTe', 'Ekstrakurikuler Teater', 'SMA', 'Non Akademik', 'Eks#Teater'),
(53, 'AEKSFt', 'Ekstrakurikuler Futsal', 'SMA', 'Non Akademik', 'Eks#Futsal'),
(54, 'AEKSTM', 'Ekstrakurikuler Tenis Meja', 'SMA', 'Non Akademik', 'Eks#TnsMeja'),
(55, 'AEKSCa', 'Ekstrakurikuler Catur', 'SMA', 'Non Akademik', 'Eks#Catur'),
(56, 'AEKSMg', 'Ekstrakurikuler Manga', 'SMA', 'Non Akademik', 'Eks#Manga'),
(57, 'AEKSMD', 'Ekstrakurikuler Modern Dance', 'SMA', 'Non Akademik', 'Eks#MdrnDance'),
(58, 'AEKSPS', 'Ekstrakurikuler Paduan Suara', 'SMA', 'Non Akademik', 'Eks#PdnSuara'),
(59, 'AEKSBn', 'Ekstrakurikuler Band', 'SMA', 'Non Akademik', 'Eks#Band'),
(109, 'PEKSKT', 'Ekstrakurikuler Kaligrafi Tionghoa', 'SMP', 'Non Akademik', 'Eks#Kaligrafi'),
(61, 'PPAI', 'Pendidikan Agama Islam', 'SMP', 'Akademikpilihan', 'AG#Islm'),
(62, 'PPAKn', 'Pendidikan Agama Kristen', 'SMP', 'Akademikpilihan', 'AG'),
(63, 'PPAKk', 'Pendidikan Agama Katolik', 'SMP', 'Akademikpilihan', 'AG#Kat'),
(64, 'PPAB', 'Pendidikan Agama Buddha', 'SMP', 'Akademikpilihan', 'AG#Bud'),
(65, 'PPKn', 'Pendidikan Kewarganegaraan', 'SMP', 'Akademik', 'Pkn'),
(66, 'PBId', 'Bahasa Indonesia', 'SMP', 'Akademik', 'B.ind'),
(67, 'PBIg', 'Bahasa Inggris', 'SMP', 'Akademik', 'B.ing'),
(68, 'PMAT', 'Matematika', 'SMP', 'Akademik', 'Mat'),
(70, 'PIPAF', 'Fisika', 'SMP', 'Akademik', 'IPA'),
(71, 'PIPAB', 'Biologi', 'SMP', 'Akademik', 'IPA'),
(108, 'PEKSTkd', 'Ekstrakurikuler Tae Kwon Do', 'SMP', 'Non Akademik', 'Eks#TaKwDo'),
(73, 'PIPSE', 'Ekonomi', 'SMP', 'Akademik', 'IPS'),
(74, 'PIPSS', 'Sejarah', 'SMP', 'Akademik', 'IPS'),
(75, 'PIPSG', 'Geografi', 'SMP', 'Akademik', 'IPS'),
(76, 'PSB', 'Seni Budaya', 'SMP', 'Akademikpilihan', 'Sen#Bud'),
(77, 'PSBST', 'Seni Teater', 'SMP', 'Akademikpilihan', 'Sen#Teater'),
(78, 'PSBSR', 'Seni Rupa', 'SMP', 'Akademikpilihan', 'Sen#Rupa'),
(79, 'PSBSMA', 'Seni Musik Akustik', 'SMP', 'Akademikpilihan', 'Sen#Akus'),
(80, 'PSBSPS', 'Seni Paduan Suara', 'SMP', 'Akademikpilihan', 'Sen#Suara'),
(81, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 'SMP', 'Akademik', 'OR'),
(82, 'PTIK', 'Teknologi Informasi dan Komunikasi', 'SMP', 'Akademik', 'TIK'),
(84, 'PKTBg', 'Keterampilan Tata Boga', 'SMP', 'Akademikpilihan', 'Ket#Boga'),
(85, 'PKTBu', 'Keterampilan Tata Busana', 'SMP', 'Akademikpilihan', 'Ket#Busana'),
(86, 'PKDP', 'Keterampilan Disain Produk', 'SMP', 'Akademikpilihan', 'Ket#DP'),
(87, 'PKTP', 'Keterampilan Teknologi Pangan', 'SMP', 'Akademikpilihan', 'Ket#TekPgn'),
(88, 'PKTBd', 'Keterampilan Teknologi Budidaya', 'SMP', 'Akademikpilihan', 'Ket#TekBud'),
(89, 'PKR', 'Keterampilan Robotik', 'SMP', 'Akademikpilihan', 'Ket#Robo'),
(90, 'PBMda1', 'Muatan Lokal: Bahasa Mandarin Grade A1', 'SMP', 'Akademikpilihan', 'Mand#A1'),
(92, 'PEKSBPa', 'Ekstrakurikuler Basket', 'SMP', 'Non Akademik', 'Eks#Basket'),
(94, 'PEKSFt', 'Ekstrakurikuler Futsal', 'SMP', 'Non Akademik', 'Eks#Futsal'),
(95, 'PEKSFg', 'Ekstrakurikuler Fotografi', 'SMP', 'Non Akademik', 'Eks#Foto'),
(96, 'PEKSMg', 'Ekstrakurikuler Manga', 'SMP', 'Non Akademik', 'Eks#Manga'),
(97, 'PEKSTM', 'Ekstrakurikuler Tenis Meja', 'SMP', 'Non Akademik', 'Eks#TnsMeja'),
(98, 'PEKSBt', 'Ekstrakurikuler Bulutangkis', 'SMP', 'Non Akademik', 'Eks#BlTgks'),
(99, 'PEKSMaC', 'Ekstrakurikuler Math Club', 'SMP', 'Non Akademik', 'Eks#Math'),
(100, 'PEKSSiC', 'Ekstrakurikuler Science Club', 'SMP', 'Non Akademik', 'Eks#Science'),
(101, 'PEKSKi', 'Ekstrakurikuler KIR', 'SMP', 'Non Akademik', 'Eks#KIR'),
(102, 'PEKSTe', 'Ekstrakurikuler Teater', 'SMP', 'Non Akademik', 'Eks#Teater'),
(103, 'PEKSWu', 'Ekstrakurikuler Wushu', 'SMP', 'Non Akademik', 'Eks#Wushu'),
(104, 'PEKSMD', 'Ekstrakurikuler Modern Dance', 'SMP', 'Non Akademik', 'Eks#MdrnDance'),
(105, 'PEKSBb', 'Ekstrakurikuler Bola Basket', 'SMP', 'Non Akademik', 'Eks#Basket'),
(107, 'PEKSJ', 'Ekstrakurikuler Jurnalistik', 'SMP', 'Non Akademik', 'Eks#Jurnal'),
(111, 'PEKSPMR', 'Ekstrakurikuler PMR', 'SMP', 'Non Akademik', 'Eks#PMR'),
(113, 'APAH', 'Pendidikan Agama Hindu', 'SMA', 'Akademikpilihan', 'AG#Hin'),
(114, 'PPAH', 'Pendidikan Agama Hindu', 'SMP', 'Akademikpilihan', 'AG#Hin'),
(115, 'ABMdNb', 'Bahasa Mandarin Native Grade B', 'SMA', 'Akademik', 'Mand#NGrd B'),
(116, 'PBMdb1', 'Muatan Lokal: Bahasa Mandarin Grade B1', 'SMP', 'Akademikpilihan', 'Mand#B1'),
(117, 'PBMdc1', 'Muatan Lokal: Bahasa Mandarin Grade C1', 'SMP', 'Akademikpilihan', 'Mand#C1'),
(118, 'PBMda2', 'Muatan Lokal: Bahasa Mandarin Grade A2', 'SMP', 'Akademikpilihan', 'Mand#A2'),
(119, 'PBMdb2', 'Muatan Lokal: Bahasa Mandarin Grade B2', 'SMP', 'Akademikpilihan', 'Mand#B2'),
(120, 'PBMdb3', 'Muatan Lokal: Bahasa Mandarin Grade B3', 'SMP', 'Akademikpilihan', 'Mand#B3'),
(121, 'PEKSBn', 'Ekstrakurikuler Band', 'SMP', 'Non Akademik', 'Eks#Band'),
(122, 'PEKSBV', 'Ekstrakurikuler Bola Voli', 'SMP', 'Non Akademik', 'Eks#Voli'),
(123, 'PPAKhc', 'Pendidikan Agama Khonghucu', 'SMP', 'Akademikpilihan', 'AG#Khc'),
(124, 'AEKSGd', 'Ekstrakurikuler Game Development', 'SMA', 'Non Akademik', 'Eks#Game'),
(125, 'AEKSDg', 'Ekstrakurikuler Desain Grafis', 'SMA', 'Non Akademik', 'Eks#Dg'),
(126, 'PEKSGd', 'Ekstrakurikuler Game Development', 'SMP', 'Non Akademik', 'Eks#Gdev'),
(127, 'PEKSVb', 'Ekstrakurikuler Visual Basic', 'SMP', 'Non Akademik', 'Eks#Vb'),
(128, 'PEKSDeGr', 'Ekstrakurikuler Desain Grafis', 'SMP', 'Non Akademik', 'Eks#DeGra'),
(129, 'AEKSTd', 'Ekstrakurikuler Tradisional Dance', 'SMA', 'Non Akademik', 'Eks#Td'),
(130, 'PBMda', 'Muatan Lokal: Bahasa Mandarin Grade A', 'SMP', 'Akademik', 'Mand#A'),
(131, 'PBMdb', 'Muatan Lokal: Bahasa Mandarin Grade B', 'SMP', 'Akademik', 'Mand#B'),
(132, 'PBMdc', 'Muatan Lokal: Bahasa Mandarin Grade C', 'SMP', 'Akademik', 'Mand#C'),
(133, 'ABMda1', 'Bahasa Mandarin Grade A1', 'SMA', 'Akademik', 'Mand#Grda1'),
(134, 'ABMda2', 'Bahasa Mandarin Grade A2', 'SMA', 'Akademik', 'Mand#Grda2'),
(135, 'ABMdb1', 'Bahasa Mandarin Grade B1', 'SMA', 'Akademik', 'Mand#Grdb1'),
(136, 'ABMdb2', 'Bahasa Mandarin Grade B2', 'SMA', 'Akademik', 'Mand#Grdb2'),
(137, 'ABMdb3', 'Bahasa Mandarin Grade B3', 'SMA', 'Akademik', 'Mand#Grdb3'),
(138, 'PEKSPRAM', 'Ekstrakurikuler Pramuka', 'SMP', 'Non Akademik', 'Eks#Pramu'),
(139, 'APAKh', 'Pendidikan Agama Konghucu', 'SMA', 'Akademikpilihan', 'AG#Kong'),
(140, 'ASBSL', 'Seni Lukis', 'SMA', 'Akademikpilihan', 'Sen#Lukis'),
(141, 'PBMdbb1', 'Muatan Lokal : Bahasa Mandarin Grade b1', 'SMP', 'Akademik', 'Mand#b1'),
(142, 'AEKSTKD', 'Ekstrakurikuler Tae Kwon Do', 'SMA', 'Non Akademik', 'Eks#TaeKwonDo'),
(143, 'AEKSFB', 'Ekstrakurikuler Floor Ball', 'SMA', 'Non Akademik', 'Eks#FloorBall'),
(144, 'AEKSChAr', 'Ekstrakurikuler Kaligrafi & Chinese Art', 'SMA', 'Non Akademik', 'Eks#ChineseArt'),
(145, 'AEKSKf', 'Ekstrakurikuler Kungfu', 'SMA', 'Non Akademik', 'Eks#Kungfu'),
(146, 'AEKSJur', 'Ekstrakurikuler Jurnalistik', 'SMA', 'Non Akademik', 'Eks#Jurnalistik'),
(147, 'PEKSWD', 'Ekstrakurikuler Web Design', 'SMP', 'Non Akademik', 'Eks#WD'),
(148, 'PEKSMF', 'Ekstrakurikuler Macromedia Flash', 'SMP', 'Non Akademik', 'Eks#MF'),
(149, 'PEKSSOC', 'Ekstrakurikuler Social Studies Club', 'SMP', 'Non Akademik', 'EKS#Social'),
(150, 'AEKSPs', 'Ekstrakurikuler Public Speaking', 'SMA', 'Non Akademik', 'Eks#PubSpeaking'),
(151, 'AEKSAd', 'Ekstrakurikuler Adventing', 'SMA', 'Non Akademik', 'Eks#Adventing'),
(152, 'AKTIK', 'Keterampilan TIK', 'SMA', 'Akademik', 'Ket#TIK'),
(160, '', 'asalan aja', 'SMA', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ms_pelajaran_cad`
--

CREATE TABLE IF NOT EXISTS `ms_pelajaran_cad` (
  `id` int(11) NOT NULL,
  `kd_mapel` varchar(8) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kkm` int(3) NOT NULL DEFAULT '0',
  `tipe` varchar(12) NOT NULL,
  `tahunajaran` varchar(9) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `id_user` int(9) NOT NULL,
  `hari` varchar(8) DEFAULT NULL,
  `jam` varchar(8) DEFAULT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `update_by` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4227 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_pelajaran_cad`
--

INSERT INTO `ms_pelajaran_cad` (`id`, `kd_mapel`, `nama_mapel`, `kkm`, `tipe`, `tahunajaran`, `jenjang`, `kelas`, `id_user`, `hari`, `jam`, `ruang`, `created_by`, `created_date`, `updated_by`, `update_by`) VALUES
(2923, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 20, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2924, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 19, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(1845, 'PMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMP', 'VII.1', 80, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1846, 'PIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMP', 'VII.1', 52, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1847, 'PIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.1', 54, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1848, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.1', 61, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1849, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VII.1', 56, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1850, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.1', 53, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1851, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VII.1', 87, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1852, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.1', 55, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(2869, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 36, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2870, 'ABId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 21, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2993, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 18, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2873, 'AMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 11, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2874, 'AIPSE', 'Ekonomi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 33, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2875, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 22, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2876, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 37, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2878, 'AIPSSo', 'Sosiologi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 14, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2879, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 20, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2880, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 19, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2901, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 72, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 161, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2900, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 19, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2899, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 20, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2810, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 36, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2811, 'ABId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 21, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2756, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'X.1', 195, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2002, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 56, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2003, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 63, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2004, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 86, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2005, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 60, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2006, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 64, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2007, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 62, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2008, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 61, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2009, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 102, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2010, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 53, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2011, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 81, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(2012, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.7', 55, '0', '', '', 75, '2011-08-23 12:27:41', 0, '0000-00-00 00:00:00'),
(1724, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.1', 71, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1723, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.1', 87, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1720, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.1', 58, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1721, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.1', 102, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1722, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.1', 53, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1719, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.1', 50, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(2800, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 15, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2989, 'ABIg', 'Bahasa Inggris', 66, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 27, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2984, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'X.1', 41, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(1740, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.2', 71, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1739, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.2', 87, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1733, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.2', 65, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1734, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.2', 64, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1735, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.2', 50, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1736, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.2', 58, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1737, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.2', 102, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(2959, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 19, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2920, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 37, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2922, 'AIPSSo', 'Sosiologi', 67, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 14, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2919, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 22, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2917, 'AMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 26, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2918, 'AIPSE', 'Ekonomi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 33, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2914, 'ABId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 23, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2913, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 36, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(1756, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.3', 71, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1755, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.3', 87, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1753, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.3', 102, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1754, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.3', 53, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1752, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.3', 58, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1751, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.3', 50, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1750, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.3', 70, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1749, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.3', 65, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(2983, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 70, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 118, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2944, 'AIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 24, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2948, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 19, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2947, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 20, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2946, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 37, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2945, 'AIPAK', 'Kimia', 70, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 16, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2943, 'AIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 17, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2942, 'AMAT', 'Matematika', 70, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 25, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2997, 'ABIg', 'Bahasa Inggris', 66, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 27, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2939, 'ABIg', 'Bahasa Inggris', 66, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 18, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(2938, 'ABId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 23, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(1738, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.2', 53, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1732, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.2', 66, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1748, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.3', 66, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1747, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.3', 67, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1746, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.3', 56, '0', '', '', 75, '2011-08-23 12:16:24', 0, '0000-00-00 00:00:00'),
(1714, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.1', 56, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1764, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.4', 66, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1765, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.4', 65, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1766, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.4', 70, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1767, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.4', 50, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1768, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.4', 58, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1769, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.4', 102, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1770, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.4', 53, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1771, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.4', 87, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1772, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.4', 71, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(2912, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 19, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2911, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 20, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2910, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 37, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2996, 'ABIg', 'Bahasa Inggris', 66, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPS', 27, '0', '', '', 149, '2011-10-05 15:54:27', 0, '0000-00-00 00:00:00'),
(2906, 'AMAT', 'Matematika', 70, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 25, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2907, 'AIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 17, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2908, 'AIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 24, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2909, 'AIPAK', 'Kimia', 70, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 16, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2868, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 19, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2866, 'AIPSSo', 'Sosiologi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 14, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2867, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 20, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2864, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 37, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2863, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 22, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2862, 'AIPSE', 'Ekonomi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 33, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2861, 'AMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 11, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2858, 'ABId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 21, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2857, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 36, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(1844, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VII.1', 86, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1843, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VII.1', 51, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(1842, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VII.1', 103, '0', '', '', 75, '2011-08-23 12:20:00', 0, '0000-00-00 00:00:00'),
(3002, 'AIPSAn', 'Antropologi', 67, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 14, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2755, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'X.1', 194, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(1718, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.1', 64, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1717, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.1', 65, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1716, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.1', 66, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(1730, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.2', 56, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1731, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.2', 67, '0', '', '', 75, '2011-08-23 12:15:43', 0, '0000-00-00 00:00:00'),
(1762, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.4', 56, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(1763, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.4', 67, '0', '', '', 75, '2011-08-23 12:17:20', 0, '0000-00-00 00:00:00'),
(2786, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'X.3', 109, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2903, 'ABId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 23, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(1788, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.5', 71, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1787, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.5', 87, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1786, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.5', 53, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1785, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.5', 102, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1784, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.5', 58, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1783, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.5', 50, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1782, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.5', 70, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1781, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.5', 69, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1779, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.5', 67, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1780, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.5', 68, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(1778, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.5', 56, '0', '', '', 75, '2011-08-23 12:17:44', 0, '0000-00-00 00:00:00'),
(3000, 'AIPSSo', 'Sosiologi', 65, 'Akademik', '2011-2012', 'SMA', 'X.3', 14, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2771, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'X.2', 109, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2770, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'X.2', 114, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(1804, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.6', 71, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1803, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.6', 87, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1801, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.6', 102, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1802, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.6', 53, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1800, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.6', 58, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1799, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.6', 50, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1798, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.6', 70, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1797, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.6', 69, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1796, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.6', 68, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1795, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.6', 63, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(1794, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.6', 56, '0', '', '', 75, '2011-08-23 12:18:12', 0, '0000-00-00 00:00:00'),
(2627, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 19, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2626, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 20, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2623, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 37, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2622, 'AIPAK', 'Kimia', 68, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 16, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2621, 'AIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 24, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2620, 'AIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 17, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2619, 'AMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 25, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2897, 'AMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 10, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(1820, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.7', 71, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1819, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.7', 87, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1818, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.7', 53, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1817, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.7', 102, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1816, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.7', 58, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1815, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.7', 50, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1814, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.7', 70, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1813, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.7', 69, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1811, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.7', 63, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1812, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.7', 68, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(1868, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.2', 55, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1867, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VII.2', 87, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1865, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VII.2', 56, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1866, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.2', 53, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1864, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.2', 61, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1863, 'PIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.2', 54, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1862, 'PIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMP', 'VII.2', 52, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1858, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VII.2', 103, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1859, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VII.2', 51, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1860, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VII.2', 86, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1861, 'PMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMP', 'VII.2', 80, '0', '', '', 75, '2011-08-23 12:20:42', 0, '0000-00-00 00:00:00'),
(1884, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.3', 55, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1882, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.3', 53, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1883, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VII.3', 87, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1881, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VII.3', 56, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1880, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.3', 61, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1879, 'PIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.3', 54, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1878, 'PIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMP', 'VII.3', 52, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1877, 'PMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMP', 'VII.3', 80, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1876, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VII.3', 86, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1875, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VII.3', 51, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(1874, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VII.3', 103, '0', '', '', 75, '2011-08-23 12:21:38', 0, '0000-00-00 00:00:00'),
(2891, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 19, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2889, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 37, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2890, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 20, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(1900, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.4', 55, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1899, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VII.4', 87, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1898, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.4', 53, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1897, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VII.4', 56, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1896, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.4', 61, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1895, 'PIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.4', 54, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1894, 'PIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMP', 'VII.4', 52, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1893, 'PMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMP', 'VII.4', 80, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1892, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VII.4', 86, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1891, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VII.4', 51, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1890, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VII.4', 103, '0', '', '', 75, '2011-08-23 12:22:12', 0, '0000-00-00 00:00:00'),
(1715, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.1', 67, '0', '', '', 74, '2011-08-23 12:15:00', 0, '0000-00-00 00:00:00'),
(2887, 'AIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 24, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2992, 'ABIg', 'Bahasa Inggris', 66, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPS', 27, '0', '', '', 149, '2011-10-04 15:43:30', 0, '0000-00-00 00:00:00'),
(2615, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 15, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2816, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 22, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2817, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 37, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(1932, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 55, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1931, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 81, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1929, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 102, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1930, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 53, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1928, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 58, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1927, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 62, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1925, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 59, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1926, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 57, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(2752, 'AIPSSe', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMA', 'X.1', 189, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(1922, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 56, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1923, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 72, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(1924, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.1', 73, '0', '', '', 75, '2011-08-23 12:23:44', 0, '0000-00-00 00:00:00'),
(2821, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 19, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2820, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 20, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2819, 'AIPSSo', 'Sosiologi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 14, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2815, 'AIPSE', 'Ekonomi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 33, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(1948, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 55, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1946, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 53, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1947, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 81, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1945, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 102, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1944, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 58, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1943, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 62, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1942, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 57, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1940, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 73, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1941, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 59, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1939, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 72, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(1938, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.2', 56, '0', '', '', 163, '2012-06-14 07:19:35', 0, '0000-00-00 00:00:00'),
(2888, 'AIPAK', 'Kimia', 68, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 16, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2886, 'AIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 17, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2882, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 15, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2994, 'ABIg', 'Bahasa Inggris', 68, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 27, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2885, 'AMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 25, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(1964, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 55, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1963, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 81, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1962, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 53, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1960, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 58, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1961, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 102, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1959, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 62, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1958, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 57, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1957, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 59, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1955, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 72, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1956, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 73, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(1954, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.3', 56, '0', '', '', 75, '2011-08-23 12:25:19', 0, '0000-00-00 00:00:00'),
(2785, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'X.3', 114, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2998, 'AIPSSo', 'Sosiologi', 65, 'Akademik', '2011-2012', 'SMA', 'X.1', 14, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2999, 'AIPSSo', 'Sosiologi', 65, 'Akademik', '2011-2012', 'SMA', 'X.2', 14, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2779, 'AIPAK', 'Kimia', 65, 'Akademik', '2011-2012', 'SMA', 'X.3', 12, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2782, 'AIPSSe', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMA', 'X.3', 37, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2781, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'X.3', 22, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2780, 'AIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMA', 'X.3', 33, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(1980, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 55, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1979, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 81, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1978, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 53, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1977, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 102, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1975, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 62, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1976, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 61, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1974, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 57, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1973, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 59, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1972, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 73, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1970, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 56, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(1971, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.4', 72, '0', '', '', 75, '2011-08-23 12:26:03', 0, '0000-00-00 00:00:00'),
(2809, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 19, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2808, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 20, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2807, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 37, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2806, 'AIPAK', 'Kimia', 68, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 16, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(1996, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 55, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1995, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 81, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1994, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 53, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1993, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 102, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1991, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 62, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1992, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 61, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1990, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 64, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1989, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 60, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1988, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 73, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1986, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 56, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(1987, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.5', 72, '0', '', '', 75, '2011-08-23 12:27:04', 0, '0000-00-00 00:00:00'),
(2767, 'AIPSSe', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMA', 'X.2', 37, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2766, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'X.2', 22, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2765, 'AIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMA', 'X.2', 33, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2764, 'AIPAK', 'Kimia', 65, 'Akademik', '2011-2012', 'SMA', 'X.2', 12, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2763, 'AIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMA', 'X.2', 116, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2762, 'AIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMA', 'X.2', 117, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2986, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'X.3', 41, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2987, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 27, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2761, 'AMAT', 'Matematika', 66, 'Akademik', '2011-2012', 'SMA', 'X.2', 34, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2028, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 55, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2027, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 81, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2026, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 53, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2025, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 102, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2023, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 62, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2024, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 61, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2022, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 64, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2021, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 60, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2020, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 73, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2018, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 56, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2019, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.6', 72, '0', '', '', 75, '2011-08-23 12:28:45', 0, '0000-00-00 00:00:00'),
(2832, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 19, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2827, 'AIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 17, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2828, 'AIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 24, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2829, 'AIPAK', 'Kimia', 68, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 16, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2830, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 37, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2831, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 20, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2990, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 18, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2044, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 55, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2043, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 81, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2042, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 53, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2041, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 102, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2039, 'PIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 62, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2040, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 61, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2038, 'PIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 64, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2037, 'PMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 60, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2036, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 86, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2034, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 56, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2035, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VIII.8', 63, '0', '', '', 75, '2011-08-23 12:29:27', 0, '0000-00-00 00:00:00'),
(2979, 'AIPSAn', 'Antropologi', 65, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 14, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2980, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 20, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2981, 'ATIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 19, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2978, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 37, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00');
INSERT INTO `ms_pelajaran_cad` (`id`, `kd_mapel`, `nama_mapel`, `kkm`, `tipe`, `tahunajaran`, `jenjang`, `kelas`, `id_user`, `hari`, `jam`, `ruang`, `created_by`, `created_date`, `updated_by`, `update_by`) VALUES
(2977, 'AMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 34, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2988, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 18, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2974, 'ASId', 'Sastra Indonesia', 69, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 15, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2973, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 23, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2898, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 37, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2995, 'ABIg', 'Bahasa Inggris', 66, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 18, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(2894, 'ASId', 'Sastra Indonesia', 69, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 15, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2892, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 36, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(2893, 'ABId', 'Bahasa Indonesia', 68, 'Akademik', '2011-2012', 'SMA', 'XII Bhs', 23, '0', '', '', 33, '2011-10-10 15:24:23', 0, '0000-00-00 00:00:00'),
(1836, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'IX.8', 71, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1834, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.8', 53, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1835, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'IX.8', 87, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1827, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'IX.8', 63, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1828, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'IX.8', 68, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1829, 'PMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMP', 'IX.8', 69, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1830, 'PIPAF', 'Fisika', 70, 'Akademik', '2011-2012', 'SMP', 'IX.8', 70, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1831, 'PIPAB', 'Biologi', 70, 'Akademik', '2011-2012', 'SMP', 'IX.8', 62, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1832, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'IX.8', 58, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(1833, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'IX.8', 102, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(2937, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPA', 36, '0', '', '', 5, '2011-09-26 11:42:29', 0, '0000-00-00 00:00:00'),
(1916, 'PTIK', 'Teknologi Informasi dan Komunikasi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.5', 55, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1915, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMP', 'VII.5', 87, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1913, 'PIPSS', 'Sejarah', 64, 'Akademik', '2011-2012', 'SMP', 'VII.5', 56, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1914, 'PIPSG', 'Geografi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.5', 53, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1912, 'PIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMP', 'VII.5', 61, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1911, 'PIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMP', 'VII.5', 54, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1910, 'PIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMP', 'VII.5', 52, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1909, 'PMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMP', 'VII.5', 80, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1908, 'PBIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMP', 'VII.5', 86, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1907, 'PBId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMP', 'VII.5', 51, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(1906, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'VII.5', 103, '0', '', '', 75, '2011-08-23 12:22:55', 0, '0000-00-00 00:00:00'),
(2805, 'AIPAB', 'Biologi', 68, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 24, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2804, 'AIPAF', 'Fisika', 68, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 17, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2751, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'X.1', 22, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2750, 'AIPSE', 'Ekonomi', 64, 'Akademik', '2011-2012', 'SMA', 'X.1', 33, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2749, 'AIPAK', 'Kimia', 65, 'Akademik', '2011-2012', 'SMA', 'X.1', 12, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2748, 'AIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMA', 'X.1', 0, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2747, 'AIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMA', 'X.1', 0, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2746, 'AMAT', 'Matematika', 66, 'Akademik', '2011-2012', 'SMA', 'X.1', 34, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2985, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'X.2', 41, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2743, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'X.1', 21, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(2742, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'X.1', 36, '0', '', '', 167, '2012-11-26 07:50:35', 0, '0000-00-00 00:00:00'),
(1826, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.8', 56, '0', '', '', 75, '2011-08-23 12:18:57', 0, '0000-00-00 00:00:00'),
(2823, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 15, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2991, 'ABIg', 'Bahasa Inggris', 66, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPS', 27, '0', '', '', 149, '2011-10-04 15:43:10', 0, '0000-00-00 00:00:00'),
(2616, 'ABIg', 'Bahasa Inggris', 67, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 18, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(1810, 'PPKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMP', 'IX.7', 56, '0', '', '', 75, '2011-08-23 12:18:37', 0, '0000-00-00 00:00:00'),
(2758, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'X.2', 21, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2757, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'X.2', 36, '0', '', '', 27, '2011-10-10 16:45:46', 0, '0000-00-00 00:00:00'),
(2778, 'AIPAB', 'Biologi', 65, 'Akademik', '2011-2012', 'SMA', 'X.3', 116, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2777, 'AIPAF', 'Fisika', 65, 'Akademik', '2011-2012', 'SMA', 'X.3', 117, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2776, 'AMAT', 'Matematika', 66, 'Akademik', '2011-2012', 'SMA', 'X.3', 34, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2773, 'ABId', 'Bahasa Indonesia', 67, 'Akademik', '2011-2012', 'SMA', 'X.3', 21, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2772, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'X.3', 36, '0', '', '', 27, '2011-10-10 16:45:53', 0, '0000-00-00 00:00:00'),
(2958, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 67, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 20, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2957, 'AIPSSo', 'Sosiologi', 67, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 14, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2955, 'AIPSSe', 'Sejarah', 65, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 37, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2954, 'AIPSG', 'Geografi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 22, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2952, 'AMAT', 'Matematika', 68, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 26, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2953, 'AIPSE', 'Ekonomi', 65, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 33, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2950, 'ABId', 'Bahasa Indonesia', 66, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 23, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2949, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XII.2 IPS', 36, '0', '', '', 149, '2011-10-05 13:42:18', 0, '0000-00-00 00:00:00'),
(2972, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI Bhs', 36, '0', '', '', 149, '2011-10-11 14:40:32', 0, '0000-00-00 00:00:00'),
(2803, 'AMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 26, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2799, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPA', 36, '0', '', '', 5, '2011-10-07 08:46:44', 0, '0000-00-00 00:00:00'),
(2826, 'AMAT', 'Matematika', 69, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 26, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2822, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI.2 IPA', 36, '0', '', '', 5, '2011-09-26 11:15:34', 0, '0000-00-00 00:00:00'),
(2614, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI.3 IPA', 36, '0', '', '', 149, '2011-10-05 15:53:36', 0, '0000-00-00 00:00:00'),
(2814, 'AMAT', 'Matematika', 67, 'Akademik', '2011-2012', 'SMA', 'XI.1 IPS', 11, '0', '', '', 5, '2011-10-11 07:26:22', 0, '0000-00-00 00:00:00'),
(2881, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XI.4 IPA', 36, '0', '', '', 5, '2011-10-07 09:01:53', 0, '0000-00-00 00:00:00'),
(2902, 'APKn', 'Pendidikan Kewarganegaraan', 64, 'Akademik', '2011-2012', 'SMA', 'XII.1 IPA', 36, '0', '', '', 5, '2011-09-26 11:40:33', 0, '0000-00-00 00:00:00'),
(3003, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.1', 56, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3004, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.1', 67, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3005, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.1', 66, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3006, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.1', 69, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3007, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.1', 64, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3008, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.1', 62, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3009, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.1', 58, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3010, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.1', 102, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3011, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.1', 53, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3012, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.1', 87, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3013, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.1', 71, '0', '', '', 0, '2012-08-09 14:12:20', 0, '0000-00-00 00:00:00'),
(3014, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.2', 56, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3015, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.2', 67, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3016, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.2', 66, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3017, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.2', 69, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3018, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.2', 64, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3019, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.2', 62, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3020, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.2', 58, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3021, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.2', 102, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3022, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.2', 53, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3023, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.2', 87, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3024, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.2', 71, '0', '', '', 6, '2012-08-14 07:49:08', 0, '0000-00-00 00:00:00'),
(3025, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.3', 56, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3026, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.3', 67, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3027, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.3', 66, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3028, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.3', 69, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3029, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.3', 64, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3030, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.3', 62, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3031, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.3', 58, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3032, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.3', 102, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3033, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.3', 53, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3034, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.3', 87, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3035, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.3', 71, '0', '', '', 0, '2012-08-09 14:29:30', 0, '0000-00-00 00:00:00'),
(3036, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.4', 56, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3037, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.4', 67, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3038, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.4', 66, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3039, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.4', 69, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3040, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.4', 52, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3041, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.4', 62, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3042, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.4', 58, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3043, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.4', 102, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3044, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.4', 53, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3045, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.4', 87, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3046, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.4', 71, '0', '', '', 0, '2012-08-09 14:29:11', 0, '0000-00-00 00:00:00'),
(3047, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.5', 56, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3048, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.5', 63, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3049, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.5', 68, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3050, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.5', 59, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3051, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.5', 52, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3052, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.5', 62, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3053, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.5', 58, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3054, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.5', 102, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3055, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.5', 53, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3056, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.5', 87, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3057, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.5', 71, '0', '', '', 6, '2012-08-09 14:50:12', 0, '0000-00-00 00:00:00'),
(3058, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.6', 56, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3059, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.6', 63, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3060, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.6', 68, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3061, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.6', 59, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3062, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.6', 52, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3063, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.6', 62, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3064, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.6', 58, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3065, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.6', 102, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3066, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.6', 53, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3067, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.6', 87, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3068, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.6', 71, '0', '', '', 6, '2012-08-14 07:56:57', 0, '0000-00-00 00:00:00'),
(3069, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.7', 56, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3070, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.7', 63, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3071, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.7', 68, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3072, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.7', 59, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3073, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.7', 52, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3074, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.7', 54, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3075, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.7', 58, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3076, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.7', 102, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3077, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.7', 53, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3078, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.7', 87, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3079, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.7', 71, '0', '', '', 6, '2012-08-14 07:57:10', 0, '0000-00-00 00:00:00'),
(3080, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.8', 56, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3081, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMP', 'IX.8', 63, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3082, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'IX.8', 68, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3083, 'PMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMP', 'IX.8', 59, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3084, 'PIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMP', 'IX.8', 52, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3085, 'PIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.8', 54, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3086, 'PIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.8', 58, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3087, 'PIPSS', 'Sejarah', 72, 'Akademik', '2012-2013', 'SMP', 'IX.8', 102, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3088, 'PIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMP', 'IX.8', 53, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3089, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'IX.8', 87, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3090, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'IX.8', 71, '0', '', '', 6, '2012-08-14 07:57:28', 0, '0000-00-00 00:00:00'),
(3091, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 56, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3092, 'PBId', 'Bahasa Indonesia', 67, 'Akademik', '2012-2013', 'SMP', 'VII.1', 200, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3093, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 174, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3094, 'PMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 60, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3095, 'PIPAF', 'Fisika', 67, 'Akademik', '2012-2013', 'SMP', 'VII.1', 57, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3096, 'PIPAB', 'Biologi', 67, 'Akademik', '2012-2013', 'SMP', 'VII.1', 181, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3097, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 61, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3098, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 56, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3099, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 53, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3100, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 81, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3101, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.1', 55, '0', '', '', 55, '2012-08-13 14:06:43', 0, '0000-00-00 00:00:00'),
(3102, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 56, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3103, 'PBId', 'Bahasa Indonesia', 67, 'Akademik', '2012-2013', 'SMP', 'VII.2', 200, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3104, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 174, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3105, 'PMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 60, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3106, 'PIPAF', 'Fisika', 67, 'Akademik', '2012-2013', 'SMP', 'VII.2', 57, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3107, 'PIPAB', 'Biologi', 67, 'Akademik', '2012-2013', 'SMP', 'VII.2', 181, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3108, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 61, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3109, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 56, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3110, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 53, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3111, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 81, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3112, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.2', 55, '0', '', '', 55, '2012-08-13 14:07:02', 0, '0000-00-00 00:00:00'),
(3113, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 56, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3114, 'PBId', 'Bahasa Indonesia', 67, 'Akademik', '2012-2013', 'SMP', 'VII.3', 200, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3115, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 174, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3116, 'PMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 172, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3117, 'PIPAF', 'Fisika', 67, 'Akademik', '2012-2013', 'SMP', 'VII.3', 57, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3118, 'PIPAB', 'Biologi', 67, 'Akademik', '2012-2013', 'SMP', 'VII.3', 181, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3119, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 61, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3120, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 56, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3121, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 53, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3122, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 81, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3123, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.3', 55, '0', '', '', 6, '2012-08-14 07:47:18', 0, '0000-00-00 00:00:00'),
(3124, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 56, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3125, 'PBId', 'Bahasa Indonesia', 67, 'Akademik', '2012-2013', 'SMP', 'VII.4', 200, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3126, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 174, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3127, 'PMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 172, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3128, 'PIPAF', 'Fisika', 67, 'Akademik', '2012-2013', 'SMP', 'VII.4', 57, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3129, 'PIPAB', 'Biologi', 67, 'Akademik', '2012-2013', 'SMP', 'VII.4', 181, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3130, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 61, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3131, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 56, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3132, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 53, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3133, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 81, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3134, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.4', 55, '0', '', '', 6, '2012-08-14 07:46:27', 0, '0000-00-00 00:00:00'),
(3135, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 56, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3136, 'PBId', 'Bahasa Indonesia', 67, 'Akademik', '2012-2013', 'SMP', 'VII.5', 200, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3137, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 174, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3138, 'PMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 172, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3139, 'PIPAF', 'Fisika', 67, 'Akademik', '2012-2013', 'SMP', 'VII.5', 57, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3140, 'PIPAB', 'Biologi', 67, 'Akademik', '2012-2013', 'SMP', 'VII.5', 181, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3141, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 61, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3142, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 56, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3143, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 53, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3144, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 81, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3145, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.5', 55, '0', '', '', 6, '2012-08-14 07:46:33', 0, '0000-00-00 00:00:00'),
(3146, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 56, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3147, 'PBId', 'Bahasa Indonesia', 67, 'Akademik', '2012-2013', 'SMP', 'VII.6', 200, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3148, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 174, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3149, 'PMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 172, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3150, 'PIPAF', 'Fisika', 67, 'Akademik', '2012-2013', 'SMP', 'VII.6', 57, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3151, 'PIPAB', 'Biologi', 67, 'Akademik', '2012-2013', 'SMP', 'VII.6', 181, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3152, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 61, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3153, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 56, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3154, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 53, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3155, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 81, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3156, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VII.6', 55, '0', '', '', 55, '2012-08-13 14:19:45', 0, '0000-00-00 00:00:00'),
(3157, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 56, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3158, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 51, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3159, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 205, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3160, 'PMAT', 'Matematika', 71, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 65, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3161, 'PIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 180, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3162, 'PIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 54, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3163, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 58, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3164, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 102, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3165, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 53, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3166, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 81, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3167, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.1', 55, '0', '', '', 55, '2012-08-13 14:06:15', 0, '0000-00-00 00:00:00'),
(3168, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 56, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3169, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 51, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3170, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 205, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3171, 'PMAT', 'Matematika', 71, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 65, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3172, 'PIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 180, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3173, 'PIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 54, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3174, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 58, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3175, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 102, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3176, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 53, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3177, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 81, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3178, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.2', 55, '0', '', '', 55, '2012-08-13 14:04:27', 0, '0000-00-00 00:00:00'),
(3179, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 56, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3180, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 51, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3181, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 205, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3182, 'PMAT', 'Matematika', 71, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 65, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3183, 'PIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 180, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3184, 'PIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 54, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3185, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 61, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3186, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 102, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3187, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 53, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3188, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 81, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3189, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.3', 55, '0', '', '', 6, '2012-08-14 07:51:19', 0, '0000-00-00 00:00:00'),
(3190, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 56, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3191, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 51, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3192, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 205, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3193, 'PMAT', 'Matematika', 71, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 60, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3194, 'PIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 180, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3195, 'PIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 54, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3196, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 61, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3197, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 102, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3198, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 53, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3199, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 81, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3200, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.4', 71, '0', '', '', 6, '2012-08-14 07:51:40', 0, '0000-00-00 00:00:00'),
(3201, 'PPKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 56, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3202, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 51, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3203, 'PBIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 205, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3204, 'PMAT', 'Matematika', 71, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 60, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3205, 'PIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 180, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3206, 'PIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 54, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3207, 'PIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 61, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3208, 'PIPSS', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 102, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3209, 'PIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 53, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3210, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 81, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3211, 'PTIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMP', 'VIII.5', 71, '0', '', '', 6, '2012-08-14 07:57:48', 0, '0000-00-00 00:00:00'),
(3212, 'APKn', 'Pendidikan Kewarganegaraan', 68, 'Akademik', '2012-2013', 'SMA', 'X.1', 36, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3213, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'X.1', 182, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3214, 'APKn', 'Pendidikan Kewarganegaraan', 68, 'Akademik', '2012-2013', 'SMA', 'X.2', 36, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3215, 'AIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMA', 'X.2', 188, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3216, 'AIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMA', 'X.1', 184, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3217, 'ABIg', 'Bahasa Inggris', 69, 'Akademik', '2012-2013', 'SMA', 'X.1', 221, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3218, 'AIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMA', 'X.1', 188, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3219, 'AIPSE', 'Ekonomi', 68, 'Akademik', '2012-2013', 'SMA', 'X.1', 33, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3220, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'X.1', 22, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3221, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'X.1', 189, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3222, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'X.1', 224, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3223, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMA', 'X.1', 194, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3224, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'X.1', 195, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3408, 'AIPAK', 'Kimia', 69, 'Akademik', '2012-2013', 'SMA', 'X.2', 16, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3225, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'X.2', 182, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3226, 'AIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMA', 'X.2', 184, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3227, 'AIPSE', 'Ekonomi', 68, 'Akademik', '2012-2013', 'SMA', 'X.2', 33, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3228, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'X.2', 22, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3229, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'X.2', 189, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3230, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMA', 'X.2', 194, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3231, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'X.2', 195, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3232, 'APKn', 'Pendidikan Kewarganegaraan', 68, 'Akademik', '2012-2013', 'SMA', 'X.3', 36, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3233, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'X.3', 182, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3234, 'ABIg', 'Bahasa Inggris', 69, 'Akademik', '2012-2013', 'SMA', 'X.3', 221, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3235, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'X.3', 186, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3236, 'AIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMA', 'X.3', 184, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3237, 'AIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMA', 'X.3', 188, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3238, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'X.1', 186, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3407, 'AIPAK', 'Kimia', 69, 'Akademik', '2012-2013', 'SMA', 'X.1', 16, '0', '', '', 167, '2012-11-26 08:28:46', 0, '0000-00-00 00:00:00'),
(3239, 'ABIg', 'Bahasa Inggris', 69, 'Akademik', '2012-2013', 'SMA', 'X.2', 221, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3240, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'X.2', 186, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3241, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'X.2', 224, '0', '', '', 167, '2012-11-26 07:56:14', 0, '0000-00-00 00:00:00'),
(3242, 'APKn', 'Pendidikan Kewarganegaraan', 68, 'Akademik', '2012-2013', 'SMA', 'X.4', 36, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3243, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'X.4', 182, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3244, 'ABIg', 'Bahasa Inggris', 69, 'Akademik', '2012-2013', 'SMA', 'X.4', 221, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3245, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'X.4', 186, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3246, 'AIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMA', 'X.4', 184, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3247, 'AIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMA', 'X.4', 188, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3248, 'AIPSE', 'Ekonomi', 68, 'Akademik', '2012-2013', 'SMA', 'X.4', 33, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3249, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'X.4', 22, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3250, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'X.4', 189, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3251, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'X.4', 224, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3252, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMA', 'X.4', 194, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3253, 'APKn', 'Pendidikan Kewarganegaraan', 68, 'Akademik', '2012-2013', 'SMA', 'X.5', 36, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3254, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'X.5', 182, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3255, 'ABIg', 'Bahasa Inggris', 69, 'Akademik', '2012-2013', 'SMA', 'X.5', 193, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3256, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'X.5', 186, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3257, 'AIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMA', 'X.5', 184, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3258, 'AIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMA', 'X.5', 188, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3259, 'AIPSE', 'Ekonomi', 68, 'Akademik', '2012-2013', 'SMA', 'X.5', 33, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3260, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'X.5', 22, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3261, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'X.5', 189, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3262, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'X.5', 224, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3263, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMA', 'X.5', 194, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00');
INSERT INTO `ms_pelajaran_cad` (`id`, `kd_mapel`, `nama_mapel`, `kkm`, `tipe`, `tahunajaran`, `jenjang`, `kelas`, `id_user`, `hari`, `jam`, `ruang`, `created_by`, `created_date`, `updated_by`, `update_by`) VALUES
(3264, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'X.5', 195, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3265, 'APKn', 'Pendidikan Kewarganegaraan', 68, 'Akademik', '2012-2013', 'SMA', 'X.6', 36, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3266, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'X.6', 197, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3267, 'ABIg', 'Bahasa Inggris', 69, 'Akademik', '2012-2013', 'SMA', 'X.6', 193, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3268, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'X.6', 26, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3269, 'AIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMA', 'X.6', 17, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3270, 'AIPSE', 'Ekonomi', 68, 'Akademik', '2012-2013', 'SMA', 'X.6', 33, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3271, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'X.6', 22, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3272, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'X.6', 189, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3273, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMA', 'X.6', 194, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3274, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'X.6', 195, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3275, 'APKn', 'Pendidikan Kewarganegaraan', 68, 'Akademik', '2012-2013', 'SMA', 'X.7', 36, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3276, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'X.7', 197, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3277, 'ABIg', 'Bahasa Inggris', 69, 'Akademik', '2012-2013', 'SMA', 'X.7', 193, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3278, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'X.7', 26, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3279, 'AIPAF', 'Fisika', 69, 'Akademik', '2012-2013', 'SMA', 'X.7', 17, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3280, 'AIPSE', 'Ekonomi', 68, 'Akademik', '2012-2013', 'SMA', 'X.7', 33, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3281, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'X.7', 22, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3282, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'X.7', 189, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3283, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'X.7', 14, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3284, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMA', 'X.7', 194, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3285, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'X.7', 195, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3409, 'AIPAK', 'Kimia', 69, 'Akademik', '2012-2013', 'SMA', 'X.3', 12, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3287, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 36, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3288, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 197, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3289, 'ASId', 'Sastra Indonesia', 71, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 182, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3290, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 221, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3291, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 10, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3292, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 189, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3293, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 194, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3294, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 195, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3295, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 36, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3296, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 197, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3297, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 199, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3298, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 26, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3299, 'AIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 184, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3300, 'AIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 188, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3301, 'AIPAK', 'Kimia', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 12, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3302, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 189, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3303, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 20, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3304, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPA', 19, '0', '', '', 167, '2012-10-02 07:58:56', 0, '0000-00-00 00:00:00'),
(3305, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 36, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3306, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 197, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3307, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 199, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3308, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 11, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3309, 'AIPSE', 'Ekonomi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 33, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3310, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 224, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3311, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 189, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3312, 'AIPSAk', 'Akuntansi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 185, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3313, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 14, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3314, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 20, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3315, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.1 IPS', 19, '0', '', '', 167, '2012-10-08 16:02:23', 0, '0000-00-00 00:00:00'),
(3316, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 36, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3317, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 197, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3318, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 199, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3319, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 26, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3320, 'AIPAF', 'Fisika', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 184, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3321, 'AIPAB', 'Biologi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 188, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3322, 'AIPAK', 'Kimia', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 12, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3323, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 189, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3324, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 20, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3325, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XI.2 IPA', 19, '0', '', '', 167, '2012-10-02 07:59:21', 0, '0000-00-00 00:00:00'),
(3326, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 36, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3327, 'ABId', 'Bahasa Indonesia', 72, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 23, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3328, 'ASId', 'Sastra Indonesia', 72, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 15, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3329, 'ABIg', 'Bahasa Inggris', 72, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 199, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3330, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 10, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3331, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 189, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3332, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 194, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3333, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 19, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3334, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 36, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3335, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 23, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3336, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 199, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3337, 'AMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 25, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3338, 'AIPAF', 'Fisika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 17, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3339, 'AIPAB', 'Biologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 201, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3340, 'AIPAK', 'Kimia', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 16, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3341, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 189, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3342, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 20, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3343, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPA', 19, '0', '', '', 167, '2012-11-26 06:55:54', 0, '0000-00-00 00:00:00'),
(3344, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 36, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3345, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 15, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3346, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 187, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3347, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 11, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3348, 'AIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 33, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3349, 'AIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 22, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3350, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 189, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3351, 'AIPSAk', 'Akuntansi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 185, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3352, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 14, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3353, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 20, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3354, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII.1 IPS', 19, '0', '', '', 167, '2012-11-26 06:56:12', 0, '0000-00-00 00:00:00'),
(3355, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 36, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3356, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 23, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3357, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 199, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3358, 'AMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 25, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3359, 'AIPAF', 'Fisika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 17, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3360, 'AIPAB', 'Biologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 201, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3361, 'AIPAK', 'Kimia', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 16, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3362, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 189, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3363, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 20, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3364, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPA', 19, '0', '', '', 167, '2012-11-26 06:56:33', 0, '0000-00-00 00:00:00'),
(3365, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 36, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3366, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 15, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3367, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 187, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3368, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 11, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3369, 'AIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 33, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3370, 'AIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 22, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3371, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 189, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3372, 'AIPSAk', 'Akuntansi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 185, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3373, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 14, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3374, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 20, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3375, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII.2 IPS', 19, '0', '', '', 167, '2012-11-26 06:56:50', 0, '0000-00-00 00:00:00'),
(3376, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 36, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3377, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 15, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3378, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 193, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3379, 'AMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 25, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3380, 'AIPAF', 'Fisika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 17, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3381, 'AIPAB', 'Biologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 201, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3382, 'AIPAK', 'Kimia', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 16, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3383, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 189, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3384, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 20, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3385, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPA', 19, '0', '', '', 0, '2012-08-08 09:10:37', 0, '0000-00-00 00:00:00'),
(3386, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 36, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3387, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 15, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3388, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 187, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3389, 'AMAT', 'Matematika', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 11, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3390, 'AIPSE', 'Ekonomi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 33, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3391, 'AIPSG', 'Geografi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 22, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3392, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 189, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3393, 'AIPSAk', 'Akuntansi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 185, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3394, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 14, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3395, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 20, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3396, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII.3 IPS', 19, '0', '', '', 167, '2012-08-14 13:57:50', 0, '0000-00-00 00:00:00'),
(3397, 'APKn', 'Pendidikan Kewarganegaraan', 70, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 36, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3398, 'ABId', 'Bahasa Indonesia', 70, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 15, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3399, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 193, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3400, 'AMAT', 'Matematika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 25, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3401, 'AIPAF', 'Fisika', 72, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 17, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3402, 'AIPAB', 'Biologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 201, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3403, 'AIPAK', 'Kimia', 72, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 16, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3404, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 189, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3405, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 20, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3406, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'XII.4 IPA', 19, '0', '', '', 167, '2012-08-14 13:57:54', 0, '0000-00-00 00:00:00'),
(3410, 'AIPSE', 'Ekonomi', 68, 'Akademik', '2012-2013', 'SMA', 'X.3', 33, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3411, 'AIPSG', 'Geografi', 70, 'Akademik', '2012-2013', 'SMA', 'X.3', 22, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3412, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2012-2013', 'SMA', 'X.3', 189, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3413, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'X.3', 224, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3414, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2012-2013', 'SMA', 'X.3', 194, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3415, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'X.3', 195, '0', '', '', 167, '2012-11-26 06:54:49', 0, '0000-00-00 00:00:00'),
(3429, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 75, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 161, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3416, 'AIPAK', 'Kimia', 69, 'Akademik', '2012-2013', 'SMA', 'X.4', 12, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3417, 'ATIK', 'Teknologi Informasi dan Komunikasi', 70, 'Akademik', '2012-2013', 'SMA', 'X.4', 195, '0', '', '', 167, '2012-11-26 06:55:09', 0, '0000-00-00 00:00:00'),
(3418, 'AIPAK', 'Kimia', 69, 'Akademik', '2012-2013', 'SMA', 'X.5', 12, '0', '', '', 0, '2012-10-03 11:51:07', 0, '0000-00-00 00:00:00'),
(3419, 'AIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMA', 'X.6', 24, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3420, 'AIPAK', 'Kimia', 69, 'Akademik', '2012-2013', 'SMA', 'X.6', 12, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3421, 'AIPSSo', 'Sosiologi', 70, 'Akademik', '2012-2013', 'SMA', 'X.6', 14, '0', '', '', 0, '2012-10-03 11:51:20', 0, '0000-00-00 00:00:00'),
(3422, 'AIPAB', 'Biologi', 69, 'Akademik', '2012-2013', 'SMA', 'X.7', 24, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3423, 'AIPAK', 'Kimia', 69, 'Akademik', '2012-2013', 'SMA', 'X.7', 12, '0', '', '', 0, '2012-10-03 11:51:37', 0, '0000-00-00 00:00:00'),
(3424, 'AIPSAn', 'Antropologi', 71, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 14, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3425, 'AIPSAn', 'Antropologi', 72, 'Akademik', '2012-2013', 'SMA', 'XII Bhs', 14, '0', '', '', 7, '2012-12-04 14:57:27', 0, '0000-00-00 00:00:00'),
(3428, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 72, 'Akademik', '2012-2013', 'SMA', 'XI Bhs', 118, '0', '', '', 167, '2012-12-14 11:35:16', 0, '0000-00-00 00:00:00'),
(3430, 'PPKn', 'Pendidikan Kewarganegaraan', 73, 'Akademik', '2013-2014', 'SMP', 'IX.1', 226, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3431, 'PBId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMP', 'IX.1', 63, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3432, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'IX.1', 68, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3433, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'IX.1', 69, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3434, 'PIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMP', 'IX.1', 64, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3435, 'PIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMP', 'IX.1', 54, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3436, 'PIPSE', 'Ekonomi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.1', 61, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3437, 'PIPSS', 'Sejarah', 73, 'Akademik', '2013-2014', 'SMP', 'IX.1', 102, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3438, 'PIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.1', 53, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3439, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'IX.1', 81, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3440, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'IX.1', 71, '0', '', '', 6, '2013-10-08 07:39:39', 0, '0000-00-00 00:00:00'),
(3444, 'PPKn', 'Pendidikan Kewarganegaraan', 73, 'Akademik', '2013-2014', 'SMP', 'IX.2', 226, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3445, 'PBId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMP', 'IX.2', 63, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3446, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'IX.2', 68, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3447, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'IX.2', 69, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3448, 'PIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMP', 'IX.2', 64, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3449, 'PIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMP', 'IX.2', 54, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3450, 'PIPSE', 'Ekonomi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.2', 61, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3451, 'PIPSS', 'Sejarah', 73, 'Akademik', '2013-2014', 'SMP', 'IX.2', 102, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3452, 'PIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.2', 53, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3453, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'IX.2', 81, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3454, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'IX.2', 71, '0', '', '', 6, '2013-10-08 07:36:41', 0, '0000-00-00 00:00:00'),
(3458, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 226, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3459, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 51, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3460, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 66, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3461, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 172, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3462, 'PIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 57, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3463, 'PIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 54, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3464, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 58, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3465, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 102, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3466, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 53, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3467, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 81, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3468, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.6', 71, '0', '', '', 6, '2013-10-09 11:06:24', 0, '0000-00-00 00:00:00'),
(3472, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 226, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3473, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 51, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3474, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 66, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3475, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 172, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3476, 'PIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 57, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3477, 'PIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 54, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3478, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 58, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3479, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 102, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3480, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 53, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3481, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 81, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3482, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.5', 71, '0', '', '', 6, '2013-10-09 11:06:34', 0, '0000-00-00 00:00:00'),
(3486, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 226, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3487, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 51, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3488, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 66, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3489, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 60, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3490, 'PIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 57, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3491, 'PIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 54, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3492, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 61, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3493, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 102, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3494, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 53, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3495, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 81, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3496, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.4', 71, '0', '', '', 6, '2013-10-09 11:06:48', 0, '0000-00-00 00:00:00'),
(3500, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VII.4', 226, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3501, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2013-2014', 'SMP', 'VII.4', 200, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3502, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VII.4', 205, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3503, 'PMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMP', 'VII.4', 59, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3504, 'PIPAF', 'Fisika', 68, 'Akademik', '2013-2014', 'SMP', 'VII.4', 227, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3505, 'PIPAB', 'Biologi', 68, 'Akademik', '2013-2014', 'SMP', 'VII.4', 62, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3506, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.4', 58, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3507, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VII.4', 226, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3508, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.4', 53, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3509, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2013-2014', 'SMP', 'VII.4', 87, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3510, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.4', 55, '0', '', '', 6, '2013-08-26 13:46:05', 0, '0000-00-00 00:00:00'),
(3514, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 226, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3515, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 67, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3516, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 66, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3517, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 60, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3518, 'PIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 57, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3519, 'PIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 62, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3520, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 61, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3521, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 102, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3522, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 53, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3523, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 87, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3524, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.2', 55, '0', '', '', 6, '2013-10-09 11:07:10', 0, '0000-00-00 00:00:00'),
(3528, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VII.1', 226, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3529, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2013-2014', 'SMP', 'VII.1', 67, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3530, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VII.1', 205, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3531, 'PMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMP', 'VII.1', 172, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3532, 'PIPAF', 'Fisika', 68, 'Akademik', '2013-2014', 'SMP', 'VII.1', 227, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3533, 'PIPAB', 'Biologi', 68, 'Akademik', '2013-2014', 'SMP', 'VII.1', 62, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3534, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.1', 58, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3535, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VII.1', 226, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3536, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.1', 53, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3537, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2013-2014', 'SMP', 'VII.1', 87, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3538, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.1', 55, '0', '', '', 6, '2013-08-26 13:44:30', 0, '0000-00-00 00:00:00'),
(3542, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VII.7', 226, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3543, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2013-2014', 'SMP', 'VII.7', 200, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3544, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VII.7', 205, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3545, 'PMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMP', 'VII.7', 69, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3546, 'PIPAF', 'Fisika', 68, 'Akademik', '2013-2014', 'SMP', 'VII.7', 227, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3547, 'PIPAB', 'Biologi', 68, 'Akademik', '2013-2014', 'SMP', 'VII.7', 62, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3548, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.7', 58, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3549, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VII.7', 226, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3550, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.7', 53, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3551, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2013-2014', 'SMP', 'VII.7', 87, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3552, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.7', 55, '0', '', '', 6, '2013-08-26 13:46:22', 0, '0000-00-00 00:00:00'),
(3556, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 226, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3557, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 51, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3558, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 66, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3559, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 60, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3560, 'PIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 57, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3561, 'PIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 54, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3562, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 61, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3563, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 102, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3564, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 53, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3565, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 81, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3566, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.3', 71, '0', '', '', 6, '2013-10-09 11:07:02', 0, '0000-00-00 00:00:00'),
(3570, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VII.6', 226, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3571, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2013-2014', 'SMP', 'VII.6', 200, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3572, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VII.6', 205, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3573, 'PMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMP', 'VII.6', 59, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3574, 'PIPAF', 'Fisika', 68, 'Akademik', '2013-2014', 'SMP', 'VII.6', 227, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3575, 'PIPAB', 'Biologi', 68, 'Akademik', '2013-2014', 'SMP', 'VII.6', 62, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3576, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.6', 58, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3577, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VII.6', 226, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3578, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.6', 53, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3579, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2013-2014', 'SMP', 'VII.6', 87, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3580, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.6', 55, '0', '', '', 6, '2013-08-26 13:46:41', 0, '0000-00-00 00:00:00'),
(3683, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.1', 19, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3584, 'PPKn', 'Pendidikan Kewarganegaraan', 73, 'Akademik', '2013-2014', 'SMP', 'IX.5', 226, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3585, 'PBId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMP', 'IX.5', 63, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3586, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'IX.5', 68, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3587, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'IX.5', 65, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3588, 'PIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMP', 'IX.5', 64, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3589, 'PIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMP', 'IX.5', 54, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3590, 'PIPSE', 'Ekonomi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.5', 61, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3591, 'PIPSS', 'Sejarah', 73, 'Akademik', '2013-2014', 'SMP', 'IX.5', 102, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3592, 'PIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.5', 53, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3593, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'IX.5', 81, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3594, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'IX.5', 71, '0', '', '', 6, '2013-10-08 07:40:17', 0, '0000-00-00 00:00:00'),
(3598, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VII.5', 226, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3599, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2013-2014', 'SMP', 'VII.5', 200, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3600, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VII.5', 205, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3601, 'PMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMP', 'VII.5', 59, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3602, 'PIPAF', 'Fisika', 68, 'Akademik', '2013-2014', 'SMP', 'VII.5', 227, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3603, 'PIPAB', 'Biologi', 68, 'Akademik', '2013-2014', 'SMP', 'VII.5', 62, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3604, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.5', 58, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3605, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VII.5', 226, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3606, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.5', 53, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3607, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2013-2014', 'SMP', 'VII.5', 87, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3608, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.5', 55, '0', '', '', 6, '2013-10-09 11:06:08', 0, '0000-00-00 00:00:00'),
(3612, 'PPKn', 'Pendidikan Kewarganegaraan', 73, 'Akademik', '2013-2014', 'SMP', 'IX.3', 226, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3613, 'PBId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMP', 'IX.3', 63, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3614, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'IX.3', 68, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3615, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'IX.3', 69, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3616, 'PIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMP', 'IX.3', 64, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3617, 'PIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMP', 'IX.3', 54, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3618, 'PIPSE', 'Ekonomi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.3', 61, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3619, 'PIPSS', 'Sejarah', 73, 'Akademik', '2013-2014', 'SMP', 'IX.3', 102, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3620, 'PIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.3', 53, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3621, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'IX.3', 81, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3622, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'IX.3', 71, '0', '', '', 6, '2013-10-08 07:39:55', 0, '0000-00-00 00:00:00'),
(3626, 'PPKn', 'Pendidikan Kewarganegaraan', 73, 'Akademik', '2013-2014', 'SMP', 'IX.4', 226, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3627, 'PBId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMP', 'IX.4', 63, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3628, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'IX.4', 68, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3629, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'IX.4', 65, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3630, 'PIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMP', 'IX.4', 64, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3631, 'PIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMP', 'IX.4', 54, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3632, 'PIPSE', 'Ekonomi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.4', 61, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3633, 'PIPSS', 'Sejarah', 73, 'Akademik', '2013-2014', 'SMP', 'IX.4', 102, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3634, 'PIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMP', 'IX.4', 53, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3635, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'IX.4', 81, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3636, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'IX.4', 71, '0', '', '', 6, '2013-10-08 07:40:08', 0, '0000-00-00 00:00:00'),
(3699, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.2', 36, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3640, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VII.2', 226, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00');
INSERT INTO `ms_pelajaran_cad` (`id`, `kd_mapel`, `nama_mapel`, `kkm`, `tipe`, `tahunajaran`, `jenjang`, `kelas`, `id_user`, `hari`, `jam`, `ruang`, `created_by`, `created_date`, `updated_by`, `update_by`) VALUES
(3641, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2013-2014', 'SMP', 'VII.2', 67, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3642, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VII.2', 205, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3643, 'PMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMP', 'VII.2', 172, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3644, 'PIPAF', 'Fisika', 68, 'Akademik', '2013-2014', 'SMP', 'VII.2', 227, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3645, 'PIPAB', 'Biologi', 68, 'Akademik', '2013-2014', 'SMP', 'VII.2', 62, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3646, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.2', 58, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3647, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VII.2', 226, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3648, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.2', 53, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3649, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2013-2014', 'SMP', 'VII.2', 87, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3650, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.2', 55, '0', '', '', 6, '2013-08-26 13:45:22', 0, '0000-00-00 00:00:00'),
(3694, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.1', 224, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3654, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VII.3', 226, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3655, 'PBId', 'Bahasa Indonesia', 68, 'Akademik', '2013-2014', 'SMP', 'VII.3', 200, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3656, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VII.3', 205, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3657, 'PMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMP', 'VII.3', 59, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3658, 'PIPAF', 'Fisika', 68, 'Akademik', '2013-2014', 'SMP', 'VII.3', 227, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3659, 'PIPAB', 'Biologi', 68, 'Akademik', '2013-2014', 'SMP', 'VII.3', 62, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3660, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.3', 58, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3661, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VII.3', 226, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3662, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.3', 53, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3663, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 70, 'Akademik', '2013-2014', 'SMP', 'VII.3', 87, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3664, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VII.3', 55, '0', '', '', 6, '2013-08-26 13:47:01', 0, '0000-00-00 00:00:00'),
(3693, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.1', 242, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3692, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.1', 224, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3691, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.1', 241, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3690, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.1', 16, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3689, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.1', 201, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3688, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.1', 240, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3684, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.1', 36, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3682, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.1', 20, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3687, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.1', 25, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3686, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.1', 243, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3685, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.1', 15, '0', '', '', 254, '2013-10-04 12:17:12', 0, '0000-00-00 00:00:00'),
(3668, 'PPKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 226, '0', '', '', 6, '2013-10-09 11:07:19', 0, '0000-00-00 00:00:00'),
(3669, 'PBId', 'Bahasa Indonesia', 70, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 67, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3670, 'PBIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 66, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3671, 'PMAT', 'Matematika', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 60, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3672, 'PIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 57, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3673, 'PIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 62, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3674, 'PIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 61, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3675, 'PIPSS', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 102, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3676, 'PIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 53, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3677, 'PPJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 87, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3678, 'PTIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMP', 'VIII.1', 55, '0', '', '', 6, '2013-10-09 11:07:20', 0, '0000-00-00 00:00:00'),
(3700, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.2', 15, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3701, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.2', 243, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3702, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.2', 25, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3703, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.2', 240, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3704, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.2', 201, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3705, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.2', 16, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3706, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.2', 241, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3707, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.2', 224, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3708, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.2', 242, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3709, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.2', 224, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3711, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.2', 20, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3712, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.2', 19, '0', '', '', 254, '2013-10-04 12:17:39', 0, '0000-00-00 00:00:00'),
(3716, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.3', 36, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3717, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.3', 15, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3718, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.3', 243, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3719, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.3', 25, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3720, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.3', 17, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3721, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.3', 201, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3722, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.3', 16, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3723, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.3', 241, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3724, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.3', 224, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3725, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.3', 242, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3726, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.3', 224, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3727, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.3', 20, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3728, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.3', 19, '0', '', '', 254, '2013-10-04 12:19:11', 0, '0000-00-00 00:00:00'),
(3733, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.4', 36, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3734, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.4', 15, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3735, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.4', 243, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3736, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.4', 25, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3737, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.4', 17, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3738, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.4', 201, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3739, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.4', 16, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3740, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.4', 241, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3741, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.4', 224, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3742, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.4', 242, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3743, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.4', 224, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3745, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.4', 20, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3746, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.4', 19, '0', '', '', 254, '2013-10-04 12:19:26', 0, '0000-00-00 00:00:00'),
(3750, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.5', 36, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3751, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.5', 23, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3752, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.5', 243, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3753, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.5', 25, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3754, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.5', 17, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3755, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.5', 201, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3756, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.5', 16, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3757, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.5', 33, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3758, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.5', 22, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3759, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.5', 242, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3760, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.5', 224, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3762, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.5', 20, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3763, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.5', 19, '0', '', '', 254, '2013-10-04 12:19:43', 0, '0000-00-00 00:00:00'),
(3767, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.6', 36, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3768, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.6', 23, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3769, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.6', 221, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3770, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.6', 26, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3771, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.6', 17, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3772, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.6', 201, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3773, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.6', 16, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3774, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.6', 33, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3775, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.6', 22, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3776, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.6', 189, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3777, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.6', 224, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3779, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.6', 20, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3780, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.6', 19, '0', '', '', 254, '2013-10-04 12:20:00', 0, '0000-00-00 00:00:00'),
(3784, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.7', 36, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3785, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.7', 23, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3786, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.7', 221, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3787, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.7', 26, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3788, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.7', 17, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3789, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.7', 24, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3790, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.7', 12, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3791, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.7', 33, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3792, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.7', 22, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3793, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.7', 189, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3794, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.7', 224, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3796, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.7', 20, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3797, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.7', 19, '0', '', '', 254, '2013-10-04 12:20:17', 0, '0000-00-00 00:00:00'),
(3800, 'APKn', 'Pendidikan Kewarganegaraan', 69, 'Akademik', '2013-2014', 'SMA', 'X.8', 36, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3801, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'X.8', 23, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3802, 'ABIg', 'Bahasa Inggris', 70, 'Akademik', '2013-2014', 'SMA', 'X.8', 221, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3803, 'AMAT', 'Matematika', 70, 'Akademik', '2013-2014', 'SMA', 'X.8', 26, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3804, 'AIPAF', 'Fisika', 69, 'Akademik', '2013-2014', 'SMA', 'X.8', 17, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3805, 'AIPAB', 'Biologi', 69, 'Akademik', '2013-2014', 'SMA', 'X.8', 24, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3806, 'AIPAK', 'Kimia', 69, 'Akademik', '2013-2014', 'SMA', 'X.8', 12, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3807, 'AIPSE', 'Ekonomi', 69, 'Akademik', '2013-2014', 'SMA', 'X.8', 33, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3808, 'AIPSG', 'Geografi', 71, 'Akademik', '2013-2014', 'SMA', 'X.8', 22, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3809, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'X.8', 189, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3810, 'AIPSSo', 'Sosiologi', 72, 'Akademik', '2013-2014', 'SMA', 'X.8', 224, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3812, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'X.8', 20, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3813, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'X.8', 19, '0', '', '', 254, '2013-10-04 12:20:29', 0, '0000-00-00 00:00:00'),
(3816, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 36, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3817, 'ABId', 'Bahasa Indonesia', 72, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 197, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3818, 'ASId', 'Sastra Indonesia', 73, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 249, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3819, 'ABIg', 'Bahasa Inggris', 72, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 193, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3820, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 11, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3821, 'AIPSSe', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 189, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3822, 'AIPSAn', 'Antropologi', 72, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 14, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3823, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 194, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3824, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 195, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3825, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 75, 'Akademik', '2013-2014', 'SMA', 'XI BHS', 118, '0', '', '', 254, '2013-10-05 08:56:21', 0, '0000-00-00 00:00:00'),
(3827, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 36, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3828, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 197, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3829, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 243, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3830, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 186, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3831, 'AIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 240, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3832, 'AIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 201, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3833, 'AIPAK', 'Kimia', 70, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 16, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3834, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 189, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3836, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 194, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3837, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPA', 195, '0', '', '', 254, '2013-10-04 12:23:02', 0, '0000-00-00 00:00:00'),
(3840, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 36, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3841, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 197, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3842, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 243, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3843, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 186, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3844, 'AIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 240, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3845, 'AIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 201, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3846, 'AIPAK', 'Kimia', 70, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 16, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3847, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 189, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3849, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 194, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3850, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPA', 195, '0', '', '', 254, '2013-10-04 12:23:53', 0, '0000-00-00 00:00:00'),
(3853, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 36, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3854, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 197, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3855, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 221, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3856, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 186, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3857, 'AIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 240, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3858, 'AIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 188, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3859, 'AIPAK', 'Kimia', 70, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 12, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3860, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 189, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3862, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 194, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3863, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPA', 195, '0', '', '', 254, '2013-10-04 12:24:30', 0, '0000-00-00 00:00:00'),
(3866, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 36, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3867, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 197, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3868, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 221, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3869, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 186, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3870, 'AIPAF', 'Fisika', 70, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 240, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3871, 'AIPAB', 'Biologi', 70, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 188, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3872, 'AIPAK', 'Kimia', 70, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 12, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3873, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 189, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3875, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 194, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3876, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.4 IPA', 195, '0', '', '', 254, '2013-10-04 12:25:07', 0, '0000-00-00 00:00:00'),
(3879, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 36, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3880, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 182, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3881, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 221, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3882, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 11, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3883, 'AIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 33, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3884, 'AIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 22, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3885, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 242, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3886, 'AIPSSo', 'Sosiologi', 73, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 14, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3888, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 194, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3889, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.1 IPS', 195, '0', '', '', 254, '2013-10-04 12:23:33', 0, '0000-00-00 00:00:00'),
(3893, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 36, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3894, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 182, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3895, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 221, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3896, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 11, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3897, 'AIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 33, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3898, 'AIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 0, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3899, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 242, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3900, 'AIPSSo', 'Sosiologi', 73, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 14, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3902, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 194, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3903, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.2 IPS', 195, '0', '', '', 2, '2015-03-30 11:21:47', 0, '0000-00-00 00:00:00'),
(3907, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 36, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3908, 'ABId', 'Bahasa Indonesia', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 182, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3909, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 221, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3910, 'AMAT', 'Matematika', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 11, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3911, 'AIPSE', 'Ekonomi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 33, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3912, 'AIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 22, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3913, 'AIPSSe', 'Sejarah', 70, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 242, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3914, 'AIPSSo', 'Sosiologi', 73, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 14, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3916, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 194, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3917, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XI.3 IPS', 195, '0', '', '', 254, '2013-10-04 12:24:44', 0, '0000-00-00 00:00:00'),
(3921, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 36, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3922, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 23, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3923, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 193, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3924, 'AMAT', 'Matematika', 73, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 186, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3925, 'AIPAF', 'Fisika', 72, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 17, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3926, 'AIPAB', 'Biologi', 72, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 188, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3927, 'AIPAK', 'Kimia', 72, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 16, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3928, 'AIPSSe', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 189, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3930, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 20, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3931, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XII.1 IPA', 19, '0', '', '', 254, '2014-08-26 15:38:17', 0, '0000-00-00 00:00:00'),
(3935, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 36, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3936, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 182, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3937, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 193, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3938, 'AMAT', 'Matematika', 73, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 26, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3939, 'AIPAF', 'Fisika', 72, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 17, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3940, 'AIPAB', 'Biologi', 72, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 188, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3941, 'AIPAK', 'Kimia', 72, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 12, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3942, 'AIPSSe', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 189, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3944, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 20, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3945, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XII.2 IPA', 19, '0', '', '', 254, '2013-10-04 12:26:44', 0, '0000-00-00 00:00:00'),
(3949, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 36, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3950, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 182, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3951, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 193, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3952, 'AMAT', 'Matematika', 73, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 11, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3953, 'AIPSE', 'Ekonomi', 73, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 33, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3954, 'AIPSG', 'Geografi', 73, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 22, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3955, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 189, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3956, 'AIPSSo', 'Sosiologi', 73, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 14, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3958, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 194, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3959, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XII IPS', 19, '0', '', '', 254, '2013-10-04 12:26:14', 0, '0000-00-00 00:00:00'),
(3963, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 36, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3964, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 197, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3965, 'ASId', 'Sastra Indonesia', 73, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 182, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3966, 'ABIg', 'Bahasa Inggris', 73, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 193, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3967, 'AMAT', 'Matematika', 73, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 25, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3968, 'AIPSSe', 'Sejarah', 71, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 189, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3969, 'AIPSAn', 'Antropologi', 73, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 14, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3970, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 72, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 194, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3971, 'ATIK', 'Teknologi Informasi dan Komunikasi', 71, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 19, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3972, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 75, 'Akademik', '2013-2014', 'SMA', 'XII Bhs', 257, '0', '', '', 254, '2013-10-05 08:56:46', 0, '0000-00-00 00:00:00'),
(3974, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 36, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(3975, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 197, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(3977, 'ASId', 'Sastra Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 15, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(3978, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 11, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(3979, 'AIPSAn', 'Antropologi', 73, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 14, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(3980, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 194, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(3981, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 19, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(3983, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 36, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3984, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 23, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3985, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 193, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3986, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 186, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3987, 'AIPAF', 'Fisika', 72, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 17, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3988, 'AIPAB', 'Biologi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 188, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3989, 'AIPAK', 'Kimia', 72, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 16, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3990, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 19, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(3991, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 36, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3992, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 23, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3993, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 193, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3994, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 186, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3995, 'AIPAF', 'Fisika', 72, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 17, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3996, 'AIPAB', 'Biologi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 188, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3997, 'AIPAK', 'Kimia', 72, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 16, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3998, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 194, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(3999, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 19, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(4000, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 36, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4001, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 23, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4002, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 221, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4003, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 26, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4004, 'AIPAF', 'Fisika', 72, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 17, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4005, 'AIPAB', 'Biologi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 188, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4006, 'AIPAK', 'Kimia', 72, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 12, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4007, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 194, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4008, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 19, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4009, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 36, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4010, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 23, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4011, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 221, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4012, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 26, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4013, 'AIPAF', 'Fisika', 72, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 17, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4014, 'AIPAB', 'Biologi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 188, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4015, 'AIPAK', 'Kimia', 72, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 12, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4016, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 194, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4017, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 19, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4018, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 36, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4019, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 15, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4063, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 36, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4021, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 193, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4022, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 25, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4023, 'AIPSE', 'Ekonomi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 264, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4024, 'AIPSSo', 'Sosiologi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 14, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4026, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 20, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4027, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 36, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4028, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 15, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4029, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 193, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4030, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 25, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4031, 'AIPSE', 'Ekonomi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 264, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4032, 'AIPSSo', 'Sosiologi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 14, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4034, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 20, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4035, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 19, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4036, 'APKn', 'Pendidikan Kewarganegaraan', 71, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 36, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4037, 'ABId', 'Bahasa Indonesia', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 15, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4038, 'ABIg', 'Bahasa Inggris', 71, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 193, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4039, 'AMAT', 'Matematika', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 25, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4040, 'AIPSE', 'Ekonomi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 264, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4041, 'AIPSSo', 'Sosiologi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 14, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4062, 'AIPSG', 'Geografi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 275, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4043, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 20, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4044, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 19, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4045, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 189, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4046, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 189, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(4047, 'AIPSSe', 'Sejarah', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 189, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(4048, 'AIPSSe', 'Sejarah', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPA', 189, '0', '', '', 273, '2014-11-07 08:54:32', 0, '0000-00-00 00:00:00'),
(4049, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 189, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00');
INSERT INTO `ms_pelajaran_cad` (`id`, `kd_mapel`, `nama_mapel`, `kkm`, `tipe`, `tahunajaran`, `jenjang`, `kelas`, `id_user`, `hari`, `jam`, `ruang`, `created_by`, `created_date`, `updated_by`, `update_by`) VALUES
(4050, 'AIPSSe', 'Sejarah', 73, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPA', 189, '0', '', '', 273, '2014-08-25 10:34:07', 0, '0000-00-00 00:00:00'),
(4051, 'AIPSSe', 'Sejarah', 72, 'Akademik', '2014-2015', 'SMA', 'XII.3 IPS', 189, '0', '', '', 273, '2014-08-25 11:29:46', 0, '0000-00-00 00:00:00'),
(4052, 'AIPSSe', 'Sejarah', 73, 'Akademik', '2014-2015', 'SMA', 'XII.4 IPA', 189, '0', '', '', 273, '2014-08-25 10:38:01', 0, '0000-00-00 00:00:00'),
(4053, 'ABIg', 'Bahasa Inggris', 73, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 221, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(4064, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 36, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4056, 'APAUD', 'Muatan Lokal : Pendidikan Anak Usia Dini', 75, 'Akademik', '2014-2015', 'SMA', 'XII Bhs', 257, '0', '', '', 273, '2014-12-16 15:48:29', 0, '0000-00-00 00:00:00'),
(4058, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPA', 194, '0', '', '', 273, '2014-11-07 07:33:57', 0, '0000-00-00 00:00:00'),
(4059, 'AIPSG', 'Geografi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 275, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4060, 'ATIK', 'Teknologi Informasi dan Komunikasi', 72, 'Akademik', '2014-2015', 'SMA', 'XII.1 IPS', 19, '0', '', '', 254, '2014-10-08 17:24:06', 0, '0000-00-00 00:00:00'),
(4061, 'AIPSG', 'Geografi', 73, 'Akademik', '2014-2015', 'SMA', 'XII.2 IPS', 275, '0', '', '', 254, '2014-10-08 17:24:18', 0, '0000-00-00 00:00:00'),
(4065, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 36, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4066, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 36, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4067, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 36, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4068, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 36, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4069, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 36, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4070, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 36, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4071, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 267, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4072, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 243, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4073, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 11, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4074, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 17, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4075, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 24, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4076, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 12, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4077, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 33, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4078, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 224, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4079, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 242, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4080, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 224, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4081, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 194, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4082, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'X.1', 282, '0', '', '', 273, '2015-01-07 10:36:00', 0, '0000-00-00 00:00:00'),
(4083, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 267, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4084, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 243, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4085, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 11, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4086, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 17, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4087, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 24, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4088, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 12, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4089, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 33, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4090, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 224, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4091, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 242, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4092, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 224, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4093, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 194, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4094, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 267, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4095, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 243, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4096, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 11, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4097, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 17, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4098, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 24, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4099, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 12, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4100, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 33, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4101, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 224, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4102, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 242, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4103, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 224, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4104, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 194, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4105, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'X.3', 282, '0', '', '', 273, '2015-01-07 10:42:28', 0, '0000-00-00 00:00:00'),
(4226, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 242, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4107, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 243, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4108, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 186, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4109, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 272, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4110, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 285, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4111, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 12, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4112, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 33, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4113, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 284, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4114, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 242, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4115, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 14, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4116, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 194, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4117, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 282, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00'),
(4118, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 197, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4119, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 243, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4120, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 186, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4121, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 272, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4122, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 285, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4123, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 12, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4124, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 33, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4125, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 284, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4126, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 242, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4127, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 14, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4128, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 194, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4129, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'X.5', 282, '0', '', '', 273, '2015-01-07 10:46:21', 0, '0000-00-00 00:00:00'),
(4130, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 197, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4131, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 271, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4132, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 11, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4133, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 272, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4134, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 24, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4135, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 12, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4136, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 33, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4137, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 284, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4138, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 14, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4139, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 194, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4140, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 282, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4141, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 197, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4142, 'ASId', 'Sastra Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 182, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4143, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 271, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4144, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 265, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4145, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 242, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4146, 'AIPSAn', 'Antropologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 14, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4147, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 20, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4148, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 19, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4149, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 182, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4150, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 271, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4151, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 26, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4152, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 272, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4153, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 285, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4154, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 16, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4155, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 242, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4156, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 20, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4157, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 36, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4158, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 271, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4159, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 26, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4160, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 272, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4161, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 285, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4162, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 16, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4163, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 242, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4164, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 20, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4165, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 19, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4166, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 36, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4167, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 182, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4168, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 271, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4169, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 265, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4170, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 272, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4171, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 285, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4172, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 16, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4173, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 242, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4174, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 20, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4175, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPA', 19, '0', '', '', 273, '2015-02-25 12:04:54', 0, '0000-00-00 00:00:00'),
(4176, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 36, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4177, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 182, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4178, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 271, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4179, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 265, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4180, 'AIPAF', 'Fisika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 272, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4181, 'AIPAB', 'Biologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 285, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4182, 'AIPAK', 'Kimia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 16, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4183, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 242, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4184, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 20, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4185, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.4 IPA', 19, '0', '', '', 273, '2015-02-25 12:05:13', 0, '0000-00-00 00:00:00'),
(4186, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 36, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4187, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 267, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4188, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 221, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4189, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 265, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4190, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 33, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4191, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 275, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4192, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 189, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4194, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 224, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4195, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 20, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4196, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPS', 282, '0', '', '', 254, '2015-03-24 12:18:07', 0, '0000-00-00 00:00:00'),
(4197, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 36, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4198, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 267, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4199, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 221, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4200, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 25, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4201, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 33, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4202, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 275, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4203, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 189, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4205, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 224, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4206, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 20, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4207, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPS', 282, '0', '', '', 254, '2015-03-24 12:23:23', 0, '0000-00-00 00:00:00'),
(4208, 'APKn', 'Pendidikan Kewarganegaraan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 36, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4209, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 267, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4210, 'ABIg', 'Bahasa Inggris', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 221, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4211, 'AMAT', 'Matematika', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 25, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4212, 'AIPSE', 'Ekonomi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 33, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4213, 'AIPSG', 'Geografi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 275, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4214, 'AIPSSe', 'Sejarah', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 189, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4216, 'AIPSSo', 'Sosiologi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 224, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4217, 'APJOK', 'Pendidikan Jasmani, Olahraga dan Kesehatan', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 20, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4218, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.3 IPS', 282, '0', '', '', 273, '2015-03-30 12:48:32', 0, '0000-00-00 00:00:00'),
(4219, 'ABMdL', 'Bahasa Mandarin Lokal Grade C', 75, 'Akademik', '2014-2015', 'SMA', 'X.6', 191, '0', '', '', 273, '2015-03-23 11:30:13', 0, '0000-00-00 00:00:00'),
(4224, 'ABMdL', 'Bahasa Mandarin Lokal Grade C', 75, 'Akademik', '2014-2015', 'SMA', 'XI Bhs', 277, '0', '', '', 273, '2015-02-25 12:04:08', 0, '0000-00-00 00:00:00'),
(4221, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'X.2', 282, '0', '', '', 273, '2015-02-16 08:31:36', 0, '0000-00-00 00:00:00'),
(4222, 'ATIK', 'Teknologi Informasi dan Komunikasi', 75, 'Akademik', '2014-2015', 'SMA', 'XI.1 IPA', 19, '0', '', '', 273, '2015-02-25 12:03:54', 0, '0000-00-00 00:00:00'),
(4223, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'XI.2 IPA', 182, '0', '', '', 273, '2015-02-25 12:04:26', 0, '0000-00-00 00:00:00'),
(4225, 'ABId', 'Bahasa Indonesia', 75, 'Akademik', '2014-2015', 'SMA', 'X.4', 197, '0', '', '', 273, '2015-03-23 10:25:19', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ms_ranah`
--

CREATE TABLE IF NOT EXISTS `ms_ranah` (
  `id` int(11) NOT NULL,
  `ranah_jenis` varchar(50) NOT NULL,
  `ranah_kode` varchar(5) NOT NULL,
  `ranah_ket` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_ranah`
--

INSERT INTO `ms_ranah` (`id`, `ranah_jenis`, `ranah_kode`, `ranah_ket`) VALUES
(1, 'Kognitif', 'C1', 'Pengetahuan'),
(2, 'Kognitif', 'C2', 'Pemahaman'),
(3, 'Kognitif', 'C3', 'Penerapan'),
(4, 'Kognitif', 'C4', 'Analisis'),
(5, 'Kognitif', 'C5', 'Sintesis'),
(6, 'Kognitif', 'C6', 'Penilaian'),
(7, 'Psikomotorik', 'P1', 'Peniruan'),
(8, 'Psikomotorik', 'P2', 'Manipulasi'),
(9, 'Psikomotorik', 'P3', 'Pengalamiahan'),
(10, 'Psikomotorik', 'P4', 'Artikulasi'),
(11, 'Afektif', 'A1', 'Menerima'),
(12, 'Afektif', 'A2', 'Menanggapi'),
(13, 'Afektif', 'A3', 'Menilai'),
(14, 'Afektif', 'A4', 'Mengelola'),
(15, 'Afektif', 'A5', 'Menghayati');

-- --------------------------------------------------------

--
-- Table structure for table `ms_tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `ms_tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_tahun_ajaran`
--

INSERT INTO `ms_tahun_ajaran` (`id`, `tahun`, `semester`, `status`, `date`) VALUES
(1, '2014-2015', 1, 0, '2015-03-27 12:46:53'),
(2, '2014-2015', 2, 1, '2015-03-27 12:47:08'),
(3, '2015-2016', 1, 0, '2015-03-27 12:48:05'),
(4, '2015-2016', 2, 0, '2015-03-27 12:48:15'),
(5, '2016-2017', 1, 0, '2015-03-27 12:48:46'),
(6, '2016-2017', 2, 0, '2015-03-27 12:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE IF NOT EXISTS `ms_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_by` varchar(40) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`id`, `username`, `password`, `nama`, `jenjang`, `id_jabatan`, `status`, `create_by`, `date`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin', 'sma', 1, 1, 'admin', '2015-04-06 08:41:22'),
(2, '8815030712', '202cb962ac59075b964b07152d234b70', 'Wirawan Istiono', 'SMA', 1, 1, 'admin', '2015-04-06 08:44:01'),
(3, 'hen', '202cb962ac59075b964b07152d234b70', 'Hendry', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:22'),
(4, 'simon', '202cb962ac59075b964b07152d234b70', 'Simon SMU', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:22'),
(5, 'simon1', '202cb962ac59075b964b07152d234b70', 'Simon SMP', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:22'),
(6, 'paulussma', '202cb962ac59075b964b07152d234b70', 'Paulus Budi', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:22'),
(7, 'wipin', '202cb962ac59075b964b07152d234b70', 'Wipin', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:22'),
(8, 'felix', '202cb962ac59075b964b07152d234b70', 'Felix', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:22'),
(9, 'maria semi', '202cb962ac59075b964b07152d234b70', 'Maria Semi', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:22'),
(10, '8809070059', '202cb962ac59075b964b07152d234b70', 'Hartaty Ashari', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:22'),
(11, 'lia soleman', '202cb962ac59075b964b07152d234b70', 'Lia Soleman', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:22'),
(12, '8811070330', '202cb962ac59075b964b07152d234b70', 'Maria Semi Nuryanti, S.Pd, M.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(13, '8810070291', '202cb962ac59075b964b07152d234b70', 'Wahyono, S.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(14, '8810070275', '202cb962ac59075b964b07152d234b70', 'Rupipen Limbong, S.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(15, '8811070390', '202cb962ac59075b964b07152d234b70', 'Sri Aprilyanti, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(16, '8811070373', '202cb962ac59075b964b07152d234b70', 'Any Mawar Tanjung, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(17, '8810070292', '202cb962ac59075b964b07152d234b70', 'Wita Suciana Dewi, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(18, '8811070360', '202cb962ac59075b964b07152d234b70', 'Bernat Situmorang, S.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(19, '8811070332', '202cb962ac59075b964b07152d234b70', 'Pramasyah Nayon S, S.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(20, '8811070382', '202cb962ac59075b964b07152d234b70', 'Monika Dharmayanti, S.S', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(21, '8810070220', '202cb962ac59075b964b07152d234b70', 'Achmad Cahyadi, S.Kom', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(22, '8809070094', '202cb962ac59075b964b07152d234b70', 'Verry Lie, S.Pd.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(23, '8811070399', '202cb962ac59075b964b07152d234b70', 'Aka Delta Kahesa, S.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:22'),
(24, '8811070331', '202cb962ac59075b964b07152d234b70', 'Sinta Ikawisudawati, S.S', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(25, '8810070268', '202cb962ac59075b964b07152d234b70', 'Pemil Baringin Saragih, S.S.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(26, '8811070388', '202cb962ac59075b964b07152d234b70', 'Justianus Hardmin Ely Matulessy, M.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(27, '8809010029', '202cb962ac59075b964b07152d234b70', 'Jono Setiawan, S.T, M.T', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(28, '8810070286', '202cb962ac59075b964b07152d234b70', 'Thomas Aquino Heri Purnomo, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(29, '8811070363', '202cb962ac59075b964b07152d234b70', 'Andriany Yutanto, S.Pd.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(30, '8809070053', '202cb962ac59075b964b07152d234b70', 'Chandra Wijaya', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(31, '8809070067', '202cb962ac59075b964b07152d234b70', 'Liang Siu Han, B.A', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(32, '9999999999', '202cb962ac59075b964b07152d234b70', 'Fenawati, B.A.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(33, '8811070381', '202cb962ac59075b964b07152d234b70', 'Maria Liony, S.Psi', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(34, '8810070221', '202cb962ac59075b964b07152d234b70', 'Aegidius Sunusmo Kiranasurya, S.E', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(35, '8809070080', '202cb962ac59075b964b07152d234b70', 'Revinawati, S.E', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(36, '8811070356', '202cb962ac59075b964b07152d234b70', 'Martina Grace Geraldine, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(37, '8811070370sma', '202cb962ac59075b964b07152d234b70', 'Yustina Listyani, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(38, '8810070238sma', '202cb962ac59075b964b07152d234b70', 'Ertiningsih, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(39, '8810070304', '202cb962ac59075b964b07152d234b70', 'Robertus Wahyu, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(40, '8811070329sma', '202cb962ac59075b964b07152d234b70', 'Mutiara, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(41, '8810050197sma', '202cb962ac59075b964b07152d234b70', 'Apip Salman, S.P', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(42, '8809070075sma', '202cb962ac59075b964b07152d234b70', 'Michael Devarapriya B, S.Sn', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(43, '8811080403', '202cb962ac59075b964b07152d234b70', 'Greta Andrea Kartika Putri, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(44, '8811070393sma', '202cb962ac59075b964b07152d234b70', 'Albertus Agung Kurniawan, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(45, '8811070394', '202cb962ac59075b964b07152d234b70', 'Suhardy, S.Pd B', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(46, '9909080003', '202cb962ac59075b964b07152d234b70', 'Huo Guo Bao', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(47, '9910030012', '202cb962ac59075b964b07152d234b70', 'Wang Miao', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(48, '9910978427', '202cb962ac59075b964b07152d234b70', 'Li Ze Gang', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(49, '9910938435', '202cb962ac59075b964b07152d234b70', 'Li Ying (Baru)', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(50, '9910948433', '202cb962ac59075b964b07152d234b70', 'Xu Jian Mei', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:23'),
(51, '8809070063', '202cb962ac59075b964b07152d234b70', 'Joice Sisca, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:23'),
(52, '8809070051', '202cb962ac59075b964b07152d234b70', 'Bona Ventura, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:23'),
(53, '8811070335', '202cb962ac59075b964b07152d234b70', 'Athur Franky Tampubolon, S.T', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:23'),
(54, '8810070294', '202cb962ac59075b964b07152d234b70', 'Yessy Rotua Citra Romein N, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:23'),
(55, '8811070341smp', '202cb962ac59075b964b07152d234b70', 'Elisabet Aprilia Reni I, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(56, '8810070287', '202cb962ac59075b964b07152d234b70', 'Tien Long, S.Kom', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(57, '8811070333', '202cb962ac59075b964b07152d234b70', 'Markus Marwanto, S.H', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(58, '8810070277smp', '202cb962ac59075b964b07152d234b70', 'Salvinus Baco, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(59, '8810070252', '202cb962ac59075b964b07152d234b70', 'Kriscensius Andy Subiyantoro, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(60, '8809070081', '202cb962ac59075b964b07152d234b70', 'Roma Uli Pangaribuan, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(61, '8810070274', '202cb962ac59075b964b07152d234b70', 'Ronald Ray, S.Kom', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(62, '8810070273', '202cb962ac59075b964b07152d234b70', 'Robertus Harris Kurniawan, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(63, '8809070092', '202cb962ac59075b964b07152d234b70', 'Tugino, S.Si, M.M', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(64, '8811070372', '202cb962ac59075b964b07152d234b70', 'Narendra, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(65, '8809070045', '202cb962ac59075b964b07152d234b70', 'Drs. Ambrosius Sutarja,  M.M', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(66, '8810070261', '202cb962ac59075b964b07152d234b70', 'Maria Suryaning Hapsari, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(67, '8810070269', '202cb962ac59075b964b07152d234b70', 'Pia Yongkik, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(68, '8810070253', '202cb962ac59075b964b07152d234b70', 'Kristiana Widayanti, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(69, '8810070243', '202cb962ac59075b964b07152d234b70', 'Ignatia Isnawati, S.S', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(70, '8810070283', '202cb962ac59075b964b07152d234b70', 'Sunandar, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(71, '8810070262', '202cb962ac59075b964b07152d234b70', 'Mattias Malanthon, S.T', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(72, '8810070226smp', '202cb962ac59075b964b07152d234b70', 'Antonius Satrio Utomo, S.SI', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(73, '8810070234', '202cb962ac59075b964b07152d234b70', 'Dewinda Febriyanthy, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(74, '8810070244', '202cb962ac59075b964b07152d234b70', 'Indah Puspita, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(75, '8811070334', '202cb962ac59075b964b07152d234b70', 'Lili Suherman Timothy, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(76, '8811070391', '202cb962ac59075b964b07152d234b70', 'Mulyanto, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(77, '8811070337', '202cb962ac59075b964b07152d234b70', 'Risna Olympianah, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(78, '8809070070', '202cb962ac59075b964b07152d234b70', 'Maria Patricia Rotti, S.Th', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(79, '8810070302', '202cb962ac59075b964b07152d234b70', 'Audrey Melissa, S.Psi', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(80, '8810070316', '202cb962ac59075b964b07152d234b70', 'Khaterine Darmawi, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(81, '8811070371', '202cb962ac59075b964b07152d234b70', 'Chandra Sugianto, S.T', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(82, '8810070279smp', '202cb962ac59075b964b07152d234b70', 'Stefanus Mipur Ridwan Obaja, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(83, '8810030189smp', '202cb962ac59075b964b07152d234b70', 'Arianto Widyatmo, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(84, '8809080118smp', '202cb962ac59075b964b07152d234b70', 'Nurimani Gea, S.Th', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:24'),
(85, '8811070336smp', '202cb962ac59075b964b07152d234b70', 'Triyanugerah Harefa, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(86, '8810070237smp', '202cb962ac59075b964b07152d234b70', 'Endri Yanie, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(87, '8811070380', '202cb962ac59075b964b07152d234b70', 'Tri Nurul Handayani, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(88, '8809070091', '202cb962ac59075b964b07152d234b70', 'Tedi Wijaya, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(89, '8810070257smp', '202cb962ac59075b964b07152d234b70', 'Lupmotis Amelia S, S.Th', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(90, '8811070340', '202cb962ac59075b964b07152d234b70', 'Wiardi, S.Ag', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(91, '8811070389smp', '202cb962ac59075b964b07152d234b70', 'Muhamad Fadli Imanullah, S.Pd I', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(92, '8810070249smp', '202cb962ac59075b964b07152d234b70', 'Jenwi, S.Sn', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(93, '9910070054', '202cb962ac59075b964b07152d234b70', 'Jonathan Tinker', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(94, '9911003422', '202cb962ac59075b964b07152d234b70', 'Yang Xiao Dong', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(95, '9910998423', '202cb962ac59075b964b07152d234b70', 'Nie Wen Long', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(96, '9910988425', '202cb962ac59075b964b07152d234b70', 'Zhang Na', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(97, '9910973428', '202cb962ac59075b964b07152d234b70', 'Wang Yan Li', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(98, '9910958431', '202cb962ac59075b964b07152d234b70', 'Zhang Hong Wei', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(99, '9910953432', '202cb962ac59075b964b07152d234b70', 'Zhao Ying Ru', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(100, '9910983426', '202cb962ac59075b964b07152d234b70', 'Yang Xiao Lin', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(101, '9910070043', '202cb962ac59075b964b07152d234b70', 'Liu Yong', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(102, '8811070393smp', '202cb962ac59075b964b07152d234b70', 'Albertus Agung K, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(103, '8810030188', '202cb962ac59075b964b07152d234b70', 'Agustinus Budi Waskitho, S.Pd, M.M', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(104, '8810070238smp', '202cb962ac59075b964b07152d234b70', 'Ertiningsih, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(105, '8809070075smp', '202cb962ac59075b964b07152d234b70', 'Michael D., S.Sn', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(106, '8811070370smp', '202cb962ac59075b964b07152d234b70', 'Yustina Listyani, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(107, '8809050034', '202cb962ac59075b964b07152d234b70', 'Nugraheni Vita, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(108, '8810050197smp', '202cb962ac59075b964b07152d234b70', 'Apip Salman, S.P', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:25'),
(109, '8810070226sma', '202cb962ac59075b964b07152d234b70', 'Antonius Satrio Utomo, S.SI', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:25'),
(110, '8810070237sma', '202cb962ac59075b964b07152d234b70', 'Endri Yanie, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:25'),
(111, '8810070257sma', '202cb962ac59075b964b07152d234b70', 'Lupmotis Amelia S, S.Th', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:25'),
(112, '8811070389sma', '202cb962ac59075b964b07152d234b70', 'Muhamad Fadli Imanulah, S.Pd I', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:25'),
(113, '8809080118sma', '202cb962ac59075b964b07152d234b70', 'Nurimani Gea, S. Th', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:25'),
(114, '8810070279sma', '202cb962ac59075b964b07152d234b70', 'Stefanus Mipur Ridwan Obaja, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:25'),
(115, '8811070336sma', '202cb962ac59075b964b07152d234b70', 'Triyanugerah Harefa, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(116, '8811070341sma', '202cb962ac59075b964b07152d234b70', 'Elisabet Aprillia Reni I, S.Si', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(117, '8810070277sma', '202cb962ac59075b964b07152d234b70', 'Salvinus Baco, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(118, 'Endang', '202cb962ac59075b964b07152d234b70', 'Endang Setyowati', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(119, 'Geraldin', '202cb962ac59075b964b07152d234b70', 'Geraldin', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(120, 'Anto', '202cb962ac59075b964b07152d234b70', 'Anto', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(121, '8810070224', '202cb962ac59075b964b07152d234b70', 'Anggoro Romadhona', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(122, 'Bismari Suherma', '202cb962ac59075b964b07152d234b70', 'Bismari Suherman', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(123, 'Budijono Harton', '202cb962ac59075b964b07152d234b70', 'Budijono Hartono', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(124, 'Budijono', '202cb962ac59075b964b07152d234b70', 'Budijono', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(125, 'Daud Jordan', '202cb962ac59075b964b07152d234b70', 'Daud Jordan', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(126, 'Edwin Richard C', '202cb962ac59075b964b07152d234b70', 'Edwin Richard Carol', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(127, 'Hanta', '202cb962ac59075b964b07152d234b70', 'Hanta', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(128, 'Kurnia Sudaryan', '202cb962ac59075b964b07152d234b70', 'Kurnia Sudaryanti', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(129, 'Ronald', '202cb962ac59075b964b07152d234b70', 'Ronald', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(130, '8809070094', '202cb962ac59075b964b07152d234b70', 'Verry Lie', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(131, 'Wiyoso Adisatri', '202cb962ac59075b964b07152d234b70', 'Wiyoso Adisatrio', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(132, 'Yogus Yuanda', '202cb962ac59075b964b07152d234b70', 'Yogus Yuanda', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:26'),
(133, 'paulussmp', '202cb962ac59075b964b07152d234b70', 'Paulus Budi SMP', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:26'),
(134, 'Gathot', '202cb962ac59075b964b07152d234b70', 'Gathot Tripracoyo', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(135, 'Steven', '202cb962ac59075b964b07152d234b70', 'Steven', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(136, 'Tema', '202cb962ac59075b964b07152d234b70', 'Tema Hikmatullah', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(137, 'Abdul', '202cb962ac59075b964b07152d234b70', 'Abdul Manan', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(138, 'Hanta', '202cb962ac59075b964b07152d234b70', 'Hanta', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(139, 'Wiyoso', '202cb962ac59075b964b07152d234b70', 'Wiyoso Adisatrio', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(140, 'Kurnia', '202cb962ac59075b964b07152d234b70', 'Kurnia Sudaryanti', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(141, 'Alfian', '202cb962ac59075b964b07152d234b70', 'Alfian Juliansyah', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:26'),
(142, 'Ronald', '202cb962ac59075b964b07152d234b70', 'Ronald Budiman', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(143, 'Yogus', '202cb962ac59075b964b07152d234b70', 'Yogus Yuanda', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(144, 'tony', '202cb962ac59075b964b07152d234b70', 'Tony', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:27'),
(145, '8811080403smp', '202cb962ac59075b964b07152d234b70', 'Greta Andrea Kartika Putri, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(146, '8811070329smp', '202cb962ac59075b964b07152d234b70', 'Mutiara, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(147, '8810030189sma', '202cb962ac59075b964b07152d234b70', 'Arianto Widyatmo, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(148, '8810070249sma', '202cb962ac59075b964b07152d234b70', 'Jenwi, S.Sn', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(149, '8811090402', '202cb962ac59075b964b07152d234b70', 'Christin', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:27'),
(150, '10010070316-old', '202cb962ac59075b964b07152d234b70', 'Heribertus Suhartono', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(151, 'wirawan', '202cb962ac59075b964b07152d234b70', 'wirawan istiono', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:27'),
(152, '9911070074', '202cb962ac59075b964b07152d234b70', 'Colm O Mahony', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(153, '9910968429', '202cb962ac59075b964b07152d234b70', 'Zhang Can', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(154, '8811090405sma', '202cb962ac59075b964b07152d234b70', 'Joko Kurniawan', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(155, 'ningrum', '202cb962ac59075b964b07152d234b70', 'Suryaningrum', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(156, '10010070318', '202cb962ac59075b964b07152d234b70', 'Sri Puspita Sari', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(157, 'Bahrudin', '202cb962ac59075b964b07152d234b70', 'Bahrudin', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(158, 'Zhao Ying Ru', '202cb962ac59075b964b07152d234b70', 'Zhao Ying Ru', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(159, '8810030188tu', '202cb962ac59075b964b07152d234b70', 'Agustinus', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:27'),
(160, 'Mr.Colm', '202cb962ac59075b964b07152d234b70', 'Mr.Colm', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:27'),
(161, 'jauri', '202cb962ac59075b964b07152d234b70', 'Muhamad Jauri', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:27'),
(162, 'contoh', '202cb962ac59075b964b07152d234b70', 'contoh', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(163, '8812070453', '202cb962ac59075b964b07152d234b70', 'Theo Phios Yono Purwanto', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(164, '8812070487', '202cb962ac59075b964b07152d234b70', 'Supradi', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(165, '8812070468', '202cb962ac59075b964b07152d234b70', 'Thea Eka Rahmani', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(166, '8812070466', '202cb962ac59075b964b07152d234b70', 'Andi Kristiyanto', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(167, '8812070460', '202cb962ac59075b964b07152d234b70', 'Rini Threesianayati', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(168, '8812070433', '202cb962ac59075b964b07152d234b70', 'Wening Tri Widati', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(169, '9912073442', '202cb962ac59075b964b07152d234b70', 'Dong Yang Ping', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(170, '9912073463', '202cb962ac59075b964b07152d234b70', 'Li Yue', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(171, '8810060216', '202cb962ac59075b964b07152d234b70', 'Desiyanti', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(172, '9912073444', '202cb962ac59075b964b07152d234b70', 'He Jian Hu', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(173, '9912073449', '202cb962ac59075b964b07152d234b70', 'Lv Jian Wei', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(174, '8812070457', '202cb962ac59075b964b07152d234b70', 'Yustina Budi Wijayanti, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:27'),
(175, '8812070490', '202cb962ac59075b964b07152d234b70', 'Nur Alfi Laili, S.Si', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:28'),
(176, '8812070449', '202cb962ac59075b964b07152d234b70', 'Anik Indayani,S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(177, '8812070459', '202cb962ac59075b964b07152d234b70', 'Imelda.S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(178, '8812070488', '202cb962ac59075b964b07152d234b70', 'Joshua Untung Waluyo.S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(179, '8812070486', '202cb962ac59075b964b07152d234b70', 'Dra.Martina Chandra Halim', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(180, '8812070432', '202cb962ac59075b964b07152d234b70', 'Novenda Delianti Sidauruk, M.Pd.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(181, '8812070491', '202cb962ac59075b964b07152d234b70', 'Ratna Susanti.S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(182, '8812070477', '202cb962ac59075b964b07152d234b70', 'Rissa Anggraini Agustina.S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(183, '8812070451', '202cb962ac59075b964b07152d234b70', 'Rr. Mega Trianasari, S.Pd.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(184, '8812070474', '202cb962ac59075b964b07152d234b70', 'Selvy Laura Lim,S.S', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(185, '8812010420', '202cb962ac59075b964b07152d234b70', 'Sri Puspita Sari, B.A.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(186, '8812070484', '202cb962ac59075b964b07152d234b70', 'Taufiq Rachman.S.Sn', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(187, '8812070452', '202cb962ac59075b964b07152d234b70', 'Theresia Ika Yuniarti, M.Hum.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(188, '8812070450', '202cb962ac59075b964b07152d234b70', 'Drs.Triyanta.MM', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(189, '8810070317', '202cb962ac59075b964b07152d234b70', 'Wirawan Istiono', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(190, '8812070456', '202cb962ac59075b964b07152d234b70', 'Yolanda Tanusasmita', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(191, '8812070506', '202cb962ac59075b964b07152d234b70', 'Desi Mirajati, S.Pd.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(192, '88512070499', '202cb962ac59075b964b07152d234b70', 'Bernadeta Timur Anjani, S.S.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(193, '8812070505', '202cb962ac59075b964b07152d234b70', 'Slamet Widodo,S.s', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(194, '8812070489', '202cb962ac59075b964b07152d234b70', 'Erni Dwi Widowati, SP.d', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:28'),
(195, '8812030421', '202cb962ac59075b964b07152d234b70', 'Hotmariana Manurung.S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(196, '8811070370', '202cb962ac59075b964b07152d234b70', 'Yustina Listyani.S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(197, 'SUPRADISMA', '202cb962ac59075b964b07152d234b70', 'Supradi', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(198, '8812070453sma', '202cb962ac59075b964b07152d234b70', 'Theo Phios Yono Purwanto', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(199, '8812030419', '202cb962ac59075b964b07152d234b70', 'Zemi Wahdah, S.Pd', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:28'),
(200, '8809050034sma', '202cb962ac59075b964b07152d234b70', 'Nugraheni Vita.P', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(201, '10010070317', '202cb962ac59075b964b07152d234b70', 'Junisa', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:28'),
(202, '8812070492', '202cb962ac59075b964b07152d234b70', 'Carlos Yordan Hasian', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:28'),
(203, '8810070317smp', '202cb962ac59075b964b07152d234b70', 'Wirawan Istiono', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:28'),
(204, '9910070044', '202cb962ac59075b964b07152d234b70', 'Li Zheng', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(205, '9912073468', '202cb962ac59075b964b07152d234b70', 'Lei Yu', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(206, '9912073461', '202cb962ac59075b964b07152d234b70', 'Zhou  Xin', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(207, 'Teddy', '202cb962ac59075b964b07152d234b70', 'Teddy', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:28'),
(208, 'Verry Lie', '202cb962ac59075b964b07152d234b70', 'Verry Lie', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(209, 'Lastri', '202cb962ac59075b964b07152d234b70', 'Lastri', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(210, 'Alfian J', '202cb962ac59075b964b07152d234b70', 'Alfian Juliansyah', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(211, 'Ronald B', '202cb962ac59075b964b07152d234b70', 'Ronal Budiman', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(212, 'Wiyoso A', '202cb962ac59075b964b07152d234b70', 'Wiyoso Adisatrio', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(213, 'Risky', '202cb962ac59075b964b07152d234b70', 'Risky', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(214, '8812070499', '202cb962ac59075b964b07152d234b70', 'Bernadeta Timur Anjani, S.S.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(215, 'matulessy', '202cb962ac59075b964b07152d234b70', 'Matulessy', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:29'),
(216, 'Suharyono', '202cb962ac59075b964b07152d234b70', 'Suharyono', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(217, '8812100521', '202cb962ac59075b964b07152d234b70', 'Tri Utami.S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(218, 'Yosep', '202cb962ac59075b964b07152d234b70', 'Yosep Suryawan', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(219, '8813070569smp', '202cb962ac59075b964b07152d234b70', 'Agusrini', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(220, '8813070544', '202cb962ac59075b964b07152d234b70', 'Eroh Bayuwati', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(221, '8813070581', '202cb962ac59075b964b07152d234b70', 'Alifa Lovita Sari', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(222, '8813060539', '202cb962ac59075b964b07152d234b70', 'Theresia Lydia F', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:29'),
(223, 'pahoa235', '202cb962ac59075b964b07152d234b70', 'Zhang Ying Hui', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(224, 'pahoa23', '202cb962ac59075b964b07152d234b70', 'Ai Chi Xiang', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(225, 'pahoa1125', '202cb962ac59075b964b07152d234b70', 'Liu Xing Hui', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(226, 'pahoa77', '202cb962ac59075b964b07152d234b70', 'Dun Xiuli', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(227, 'pahoa801', '202cb962ac59075b964b07152d234b70', 'Tan Jiexia', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(228, '9913070008', '202cb962ac59075b964b07152d234b70', 'Zhang Hui Yuan', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(229, '9913070015', '202cb962ac59075b964b07152d234b70', 'Song Wei Ming', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(230, '9913070021', '202cb962ac59075b964b07152d234b70', 'Zhang Ying Hui', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(231, '9912073466', '202cb962ac59075b964b07152d234b70', 'Guo Lin Lin', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(232, '9913070020', '202cb962ac59075b964b07152d234b70', 'Liu Hao Ran', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(233, '9910943434', '202cb962ac59075b964b07152d234b70', 'Meng Fan Yu', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(234, '8813070554', '202cb962ac59075b964b07152d234b70', 'Augustinus Budi Pramana,S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(235, '8813070570', '202cb962ac59075b964b07152d234b70', 'Evalina Pardede, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(236, '8813070563', '202cb962ac59075b964b07152d234b70', 'Indah Setyo Rini, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(237, '8813070558', '202cb962ac59075b964b07152d234b70', 'Imelda Fajar Puspaningrum, S.Pd', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(238, '9913070028', '202cb962ac59075b964b07152d234b70', 'Peter Lawrence Hughes', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(239, '8813070545', '202cb962ac59075b964b07152d234b70', 'Pramana Winardi', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(240, '8813070559', '202cb962ac59075b964b07152d234b70', 'Posianus Kopdya Widianto, S.Kom', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:29'),
(241, '10010070316sma', '202cb962ac59075b964b07152d234b70', 'Hengki Dinata', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(242, '8812070446', '202cb962ac59075b964b07152d234b70', 'R.Y. Hertyanto Reza P, S.S.', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(243, 'bismar', '202cb962ac59075b964b07152d234b70', 'Bismar', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(244, 'andreas', '202cb962ac59075b964b07152d234b70', 'Andreas Tedjasukmana', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(245, 'hioe boen sin', '202cb962ac59075b964b07152d234b70', 'Hioe Boen Sin', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(246, 'Dian', '202cb962ac59075b964b07152d234b70', 'Dian', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(247, 'Pemil Saragih', '202cb962ac59075b964b07152d234b70', 'Pemil Saragih', 'SMA', 2, 1, 'admin', '2015-04-06 09:02:29'),
(248, 'umn', '202cb962ac59075b964b07152d234b70', 'UMN', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(249, 'Li Hai Liang', '202cb962ac59075b964b07152d234b70', 'Li Hai Liang - Wang Yan Ping', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(250, 'suryaningrum', '202cb962ac59075b964b07152d234b70', 'suryaningrum', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:29'),
(251, 'Henki', '202cb962ac59075b964b07152d234b70', 'Henki Dinata', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:29'),
(252, 'lihailiang', '202cb962ac59075b964b07152d234b70', 'Li Hai Liang', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:30'),
(253, '8813100605sma', '202cb962ac59075b964b07152d234b70', 'Irene Noviyanti', 'SMA', 5, 1, 'admin', '2015-04-06 09:02:30'),
(254, '8813100605smp', '202cb962ac59075b964b07152d234b70', 'Irene Noviyanti', 'SMP', 5, 1, 'admin', '2015-04-06 09:02:30'),
(255, '8812070498', '202cb962ac59075b964b07152d234b70', 'Yulia Soviana', 'SMP', 1, 1, 'admin', '2015-04-06 09:02:30'),
(256, 'Stefanus Mipur', '202cb962ac59075b964b07152d234b70', 'Stefanus mipur', 'SMA', 1, 1, 'admin', '2015-04-06 09:02:30'),
(257, 'rudy', '202cb962ac59075b964b07152d234b70', 'rudypranata', 'SMP', 2, 1, 'admin', '2015-04-06 09:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `trx_guru_mapel`
--

CREATE TABLE IF NOT EXISTS `trx_guru_mapel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_guru_mapel`
--

INSERT INTO `trx_guru_mapel` (`id`, `id_user`, `nik`, `nama`, `id_tahun_ajaran`, `id_pelajaran`, `create_by`, `date`) VALUES
(1, 2, '8815030712', 'Wirawan Istiono', 2, 40, '8815030712', '2015-04-10 10:02:11'),
(2, 2, '8815030712', 'Wirawan Istiono', 2, 12, '8815030712', '2015-04-10 10:03:05'),
(3, 21, '8810070220', 'Achmad Cahyadi, S.Kom', 2, 40, '8815030712', '2015-04-17 11:24:43'),
(4, 154, '8811090405sma', 'Joko Kurniawan', 2, 140, '8815030712', '2015-05-25 10:44:27'),
(5, 109, '8810070226sma', 'Antonius Satrio Utomo, S.SI', 2, 40, '8815030712', '2015-05-25 13:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `trx_guru_mapel_detail`
--

CREATE TABLE IF NOT EXISTS `trx_guru_mapel_detail` (
  `id` int(11) NOT NULL,
  `id_trx` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_guru_mapel_detail`
--

INSERT INTO `trx_guru_mapel_detail` (`id`, `id_trx`, `id_kelas`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 4),
(4, 2, 2),
(5, 2, 3),
(6, 3, 1),
(7, 3, 2),
(8, 3, 3),
(9, 3, 7),
(10, 3, 5),
(11, 3, 6),
(12, 4, 1),
(13, 4, 4),
(14, 4, 2),
(16, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trx_kisi`
--

CREATE TABLE IF NOT EXISTS `trx_kisi` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `urut` int(11) NOT NULL,
  `kd_id` int(11) NOT NULL,
  `indi_id` int(11) NOT NULL,
  `materi_rpp_id` int(11) NOT NULL,
  `indi_soal` text NOT NULL,
  `ranah` varchar(20) NOT NULL,
  `bentuk_soal` varchar(10) NOT NULL,
  `soal` text NOT NULL,
  `tingkat_sukar` varchar(20) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `kunci` varchar(150) NOT NULL,
  `buku_sumber` varchar(150) NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_kisi`
--

INSERT INTO `trx_kisi` (`id`, `id_mapel`, `id_kelas`, `semester`, `urut`, `kd_id`, `indi_id`, `materi_rpp_id`, `indi_soal`, `ranah`, `bentuk_soal`, `soal`, `tingkat_sukar`, `no_soal`, `kunci`, `buku_sumber`, `userinput`, `date`) VALUES
(23, 40, 1, 1, 1, 4, 9, 1, 'in iadalah indi soal nomo 1', 'C3', 'Essay', 'ini adalah soal essay nomor 1', 'Sedang', 1, 'kunci nomor soal 1', 'buku sumber dari mana aja', 2, '2015-05-25 10:05:03'),
(24, 40, 1, 1, 2, 3, 16, 2, 'ini adalah indi soal nomor duaaaa', 'P4', 'PG', 'soal nomor duaxx', 'Sulit', 3, 'C', 'internet', 2, '2015-05-25 10:05:04'),
(25, 40, 1, 1, 3, 1, 18, 1, 'as dasd', 'A2', 'Essay', 'a sdasd asd', 'Mudah', 12, 'a dasdasda sd', 'asdasd asdas dasd', 2, '2015-05-25 10:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `trx_kkm`
--

CREATE TABLE IF NOT EXISTS `trx_kkm` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `sk_no` int(11) NOT NULL,
  `kd_no` int(11) NOT NULL,
  `id_no` int(11) NOT NULL,
  `kp` int(11) NOT NULL,
  `dd` int(11) NOT NULL,
  `intake` int(11) NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_kkm`
--

INSERT INTO `trx_kkm` (`id`, `id_mapel`, `id_kelas`, `semester`, `sk_no`, `kd_no`, `id_no`, `kp`, `dd`, `intake`, `userinput`, `date`) VALUES
(7, 40, 1, 2, 4, 1, 1, 70, 80, 80, 2, '2015-05-21 10:23:32'),
(8, 40, 1, 2, 4, 1, 2, 70, 70, 80, 2, '2015-05-21 10:23:32'),
(9, 40, 1, 2, 4, 1, 3, 80, 80, 70, 2, '2015-05-21 10:23:32'),
(34, 40, 1, 1, 1, 1, 1, 70, 70, 70, 2, '2015-05-21 11:43:15'),
(35, 40, 1, 1, 1, 1, 2, 75, 75, 75, 2, '2015-05-21 11:43:16'),
(36, 40, 1, 1, 1, 2, 1, 76, 76, 76, 2, '2015-05-21 11:43:16'),
(37, 40, 1, 1, 1, 2, 2, 80, 80, 85, 2, '2015-05-21 11:43:16'),
(38, 40, 1, 1, 2, 1, 1, 76, 76, 76, 2, '2015-05-21 11:43:16'),
(39, 40, 1, 1, 2, 1, 2, 75, 75, 75, 2, '2015-05-21 11:43:16'),
(40, 40, 1, 1, 2, 1, 3, 60, 60, 60, 2, '2015-05-21 11:43:16'),
(41, 40, 1, 1, 2, 3, 1, 50, 50, 50, 2, '2015-05-21 11:43:16'),
(42, 40, 1, 1, 2, 3, 2, 55, 55, 55, 2, '2015-05-21 11:43:16'),
(43, 40, 1, 1, 2, 5, 1, 60, 55, 50, 2, '2015-05-21 11:43:16'),
(44, 40, 1, 1, 2, 5, 2, 70, 70, 75, 2, '2015-05-21 11:43:16'),
(45, 40, 1, 1, 2, 5, 3, 50, 55, 60, 2, '2015-05-21 11:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `trx_prosem`
--

CREATE TABLE IF NOT EXISTS `trx_prosem` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `bulan` tinyint(2) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_prosem`
--

INSERT INTO `trx_prosem` (`id`, `id_mapel`, `id_kelas`, `semester`, `bulan`, `user_input`, `date`) VALUES
(1, 40, 1, 1, 8, '2', '2015-05-11 16:00:34'),
(2, 40, 1, 1, 7, '2', '2015-05-29 10:17:15'),
(3, 40, 4, 1, 7, '2', '2015-04-27 11:59:01'),
(4, 12, 4, 1, 7, '2', '2015-05-20 15:06:41'),
(5, 12, 4, 1, 8, '2', '2015-05-20 15:07:17'),
(6, 40, 1, 1, 9, '2', '2015-05-29 11:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `trx_prosem_detail`
--

CREATE TABLE IF NOT EXISTS `trx_prosem_detail` (
  `id` int(11) NOT NULL,
  `id_prosem` int(11) NOT NULL,
  `kd_id` int(11) NOT NULL,
  `sk_no` tinyint(3) NOT NULL,
  `kd_no` tinyint(3) NOT NULL,
  `week1` tinyint(4) NOT NULL,
  `week2` tinyint(4) NOT NULL,
  `week3` tinyint(4) NOT NULL,
  `week4` tinyint(4) NOT NULL,
  `week5` tinyint(4) NOT NULL,
  `week_status` varchar(10) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_prosem_detail`
--

INSERT INTO `trx_prosem_detail` (`id`, `id_prosem`, `kd_id`, `sk_no`, `kd_no`, `week1`, `week2`, `week3`, `week4`, `week5`, `week_status`, `user_input`, `date`) VALUES
(36, 3, 5, 1, 1, 13, 14, 15, 14, 13, 'regular', '2', '2015-04-27 11:59:01'),
(52, 1, 6, 1, 1, 0, 0, 0, 0, 0, 'regular', '2', '2015-05-11 16:00:34'),
(53, 1, 7, 1, 2, 0, 0, 0, 0, 0, 'regular', '2', '2015-05-11 16:00:35'),
(54, 1, 4, 2, 1, 0, 0, 0, 0, 0, 'regular', '2', '2015-05-11 16:00:35'),
(55, 1, 3, 2, 5, 0, 0, 0, 0, 0, 'regular', '2', '2015-05-11 16:00:35'),
(56, 1, 1, 2, 3, 2, 1, 0, 0, 0, 'regular', '2', '2015-05-11 16:00:35'),
(57, 4, 8, 1, 1, 2, 0, 0, 0, 0, 'regular', '2', '2015-05-20 15:06:41'),
(58, 4, 9, 1, 2, 0, 2, 0, 0, 0, 'regular', '2', '2015-05-20 15:06:41'),
(59, 5, 8, 1, 1, 0, 0, 0, 0, 0, 'regular', '2', '2015-05-20 15:07:17'),
(60, 5, 9, 1, 2, 0, 0, 2, 0, 0, 'regular', '2', '2015-05-20 15:07:17'),
(76, 2, 6, 1, 1, 2, 0, 0, 0, 0, 'regular', '2', '2015-05-29 10:17:15'),
(77, 2, 7, 1, 2, 5, 3, 0, 0, 0, 'regular', '2', '2015-05-29 10:17:15'),
(78, 2, 4, 2, 1, 0, 0, 0, 5, 0, 'regular', '2', '2015-05-29 10:17:15'),
(79, 2, 3, 2, 5, 0, 0, 3, 0, 6, 'regular', '2', '2015-05-29 10:17:15'),
(80, 2, 1, 2, 3, 0, 0, 0, 0, 0, 'regular', '2', '2015-05-29 10:17:15'),
(81, 6, 6, 1, 1, 3, 0, 0, 0, 0, 'regular', '2', '2015-05-29 11:40:41'),
(82, 6, 7, 1, 2, 0, 5, 0, 0, 0, 'regular', '2', '2015-05-29 11:40:41'),
(83, 6, 4, 2, 1, 0, 0, 0, 5, 0, 'regular', '2', '2015-05-29 11:40:41'),
(84, 6, 3, 2, 5, 0, 0, 2, 0, 0, 'regular', '2', '2015-05-29 11:40:41'),
(85, 6, 1, 2, 3, 0, 0, 0, 6, 0, 'regular', '2', '2015-05-29 11:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `trx_prosem_uji`
--

CREATE TABLE IF NOT EXISTS `trx_prosem_uji` (
  `id` int(11) NOT NULL,
  `id_prosem` int(11) NOT NULL,
  `sk_id` int(11) NOT NULL,
  `sk_no` tinyint(3) NOT NULL,
  `week1` tinyint(4) NOT NULL,
  `week2` tinyint(4) NOT NULL,
  `week3` tinyint(4) NOT NULL,
  `week4` tinyint(4) NOT NULL,
  `week5` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `user_input` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_prosem_uji`
--

INSERT INTO `trx_prosem_uji` (`id`, `id_prosem`, `sk_id`, `sk_no`, `week1`, `week2`, `week3`, `week4`, `week5`, `date`, `user_input`) VALUES
(15, 3, 4, 1, 0, 0, 0, 0, 0, '2015-04-27', '2'),
(22, 1, 1, 1, 0, 0, 0, 0, 0, '2015-05-11', '2'),
(23, 1, 2, 2, 0, 1, 0, 0, 0, '2015-05-11', '2'),
(24, 4, 5, 1, 0, 0, 0, 0, 0, '2015-05-20', '2'),
(25, 5, 5, 1, 0, 0, 0, 3, 0, '2015-05-20', '2'),
(32, 2, 1, 1, 0, 0, 4, 0, 0, '2015-05-29', '2'),
(33, 2, 2, 2, 0, 0, 16, 0, 0, '2015-05-29', '2'),
(34, 6, 1, 1, 0, 0, 4, 2, 0, '2015-05-29', '2'),
(35, 6, 2, 2, 0, 0, 0, 0, 7, '2015-05-29', '2');

-- --------------------------------------------------------

--
-- Table structure for table `trx_prota`
--

CREATE TABLE IF NOT EXISTS `trx_prota` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `sk_no` tinyint(3) NOT NULL,
  `sk_sm1` tinyint(3) NOT NULL,
  `sk_sm2` tinyint(3) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_prota`
--

INSERT INTO `trx_prota` (`id`, `id_mapel`, `id_kelas`, `id_sk`, `sk_no`, `sk_sm1`, `sk_sm2`, `semester`, `user_input`, `date`) VALUES
(21, 40, 4, 4, 1, 20, 0, 1, '2', '2015-04-23 15:27:03'),
(25, 12, 4, 5, 1, 34, 0, 1, '2', '2015-04-23 15:28:04'),
(26, 40, 1, 1, 1, 12, 0, 1, '2', '2015-05-25 10:47:39'),
(27, 40, 1, 2, 2, 25, 0, 1, '2', '2015-05-25 10:47:39'),
(28, 40, 1, 3, 4, 0, 24, 2, '2', '2015-05-25 10:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp`
--

CREATE TABLE IF NOT EXISTS `trx_rpp` (
  `id` int(11) NOT NULL,
  `no_rpp` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `jml_temu` int(11) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp`
--

INSERT INTO `trx_rpp` (`id`, `no_rpp`, `id_mapel`, `id_kelas`, `semester`, `id_sk`, `jml_temu`, `user_input`, `date`) VALUES
(1, 1231, 40, 1, 1, 1, 5, '2', '2015-05-13 11:33:52'),
(2, 777, 40, 1, 1, 2, 7, '2', '2015-05-13 11:35:15'),
(3, 1, 12, 4, 1, 5, 6, '2', '2015-05-20 15:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_indikator`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_indikator` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `indikator` text NOT NULL,
  `teknik` text NOT NULL,
  `bentuk` text NOT NULL,
  `instrument` text NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_indikator`
--

INSERT INTO `trx_rpp_indikator` (`id`, `rpp_id`, `rpp_no`, `no`, `indikator`, `teknik`, `bentuk`, `instrument`, `userinput`, `date`) VALUES
(6, 1, 1231, 1, 'ini indi karot penulaian 1111', 'tek 111', 'benuk1111', 'instr11111', 2, '2015-05-25 11:20:41'),
(7, 1, 1231, 2, 'indi penilaian 22222', 'teknik2222', 'benuk222222', 'instrument222222', 2, '2015-05-25 11:20:41'),
(8, 1, 1231, 3, 'ini tambahan ke 3', 'asal nilai', 'asal bentuk', 'asal instru', 2, '2015-05-25 11:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_jawaban`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_jawaban` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_jawaban`
--

INSERT INTO `trx_rpp_jawaban` (`id`, `rpp_id`, `rpp_no`, `no`, `jawaban`, `userinput`, `date`) VALUES
(5, 1, 1231, 1, 'ini adalah isi dari kunci jawaban..........!!!!', 2, '2015-05-19 19:09:15'),
(6, 1, 1231, 2, 'ini adlaah isi dari kunci nomor dua', 2, '2015-05-19 19:09:15'),
(7, 1, 1231, 3, 'tmabah kunci lagi ke 3', 2, '2015-05-19 19:09:15'),
(8, 1, 1231, 4, 'tambah kunci ke emapt 4', 2, '2015-05-19 19:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_kegbel`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_kegbel` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `kegbel_no` int(11) NOT NULL,
  `pendahuluan` text NOT NULL,
  `waktu_a` int(11) NOT NULL,
  `metode_a` varchar(200) NOT NULL,
  `eksplor` text NOT NULL,
  `elabor` text NOT NULL,
  `konfirm` text NOT NULL,
  `waktu_b` int(11) NOT NULL,
  `metode_b` varchar(200) NOT NULL,
  `penutup` text NOT NULL,
  `waktu_c` int(11) NOT NULL,
  `metode_c` varchar(200) NOT NULL,
  `tujuan` text NOT NULL,
  `waktu_d` int(11) NOT NULL,
  `metode_d` varchar(200) NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_kegbel`
--

INSERT INTO `trx_rpp_kegbel` (`id`, `rpp_id`, `rpp_no`, `kegbel_no`, `pendahuluan`, `waktu_a`, `metode_a`, `eksplor`, `elabor`, `konfirm`, `waktu_b`, `metode_b`, `penutup`, `waktu_c`, `metode_c`, `tujuan`, `waktu_d`, `metode_d`, `userinput`, `date`) VALUES
(2, 1, 1231, 2, 'ini adalah pendahuluan pert2', 10, 'tatap muka1', 'mengekslore pert2 ini', 'meng elaborasi pert2 juga', 'meng konformaso pert2 lha', 80, 'belajar mandiri2', 'kesimpulan pertemuan hari ini pert 2', 10, 'bahas kesimpilan3', 'mecerdaskan kehidupan bangsa pertemuan 2', 10, 'ok udah mantab4', 2, '2015-05-18 13:05:12'),
(3, 1, 1231, 1, 'ini saya ganti di pertemuan 1 untuk pendahuluan', 7, 'metoda pert1 di nomor1', 'ini isi eksplorasi pert1', 'ini isi elaborasi pert1', 'ini isi konfirmasi pertemuan1', 70, 'metoda di nomor 2 pert1', 'penutpu', 10, 'metode di ke 3 pert1', 'tujuan di pert1', 5, 'penkelasan tujuan per1', 2, '2015-05-18 13:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_materi`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_materi` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `materi` text NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_materi`
--

INSERT INTO `trx_rpp_materi` (`id`, `rpp_id`, `rpp_no`, `materi`, `userinput`, `date`) VALUES
(1, 1, 1231, '<p>ini diganti oleh wiraajshdwan kerenzzz!!!</p>\r\n<ul>\r\n<li>ashd asdkl jaksldja lks jdlkajsdlk ajskldjasd</li>\r\n<li>a;sd ;alksd a sdlkjalkjs dlkajsdjadas</li>\r\n<li>akjshd kahsdaskdak sdh kjahs</li>\r\n</ul>\r\n<p>kjash dkahs kjdhajkshd kasjh dkjashjkd asjkdhasd</p>\r\n<ol>\r\n<li>asnd asdalks jdlaksjdlkasj dkljaldjalksd jlasjdl ajsdklasjd</li>\r\n<li>asd lasjdlkaj sdlkja lksjdajsd lj sald</li>\r\n</ol>', 2, '2015-05-18 09:07:54'),
(2, 2, 777, '<p>ini adalah materiiiiiiiiii&nbsp;pembelajaran SK2, pelajaran TIK, kelas X semester 1 (dari RPP)</p>', 2, '2015-05-22 14:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_media`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_media` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `media` text NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_media`
--

INSERT INTO `trx_rpp_media` (`id`, `rpp_id`, `rpp_no`, `media`, `userinput`, `date`) VALUES
(1, 1, 1231, 'ini adalah isi dari media pembelajaran', 2, '2015-05-19 16:22:54'),
(2, 2, 777, 'ini adalah materi pembelajaran SK2, pelajaran TIK, kelas X semester 1 (dari RPP)', 2, '2015-05-22 14:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_metode`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_metode` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `metode` text NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_metode`
--

INSERT INTO `trx_rpp_metode` (`id`, `rpp_id`, `rpp_no`, `metode`, `userinput`, `date`) VALUES
(1, 1, 1231, 'ini adlaah isi untuk metode pembelajarannnnnnnn!!!!!!!!', 2, '2015-05-19 14:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_soal`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_soal` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `soal` text NOT NULL,
  `bobot` int(11) NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_soal`
--

INSERT INTO `trx_rpp_soal` (`id`, `rpp_id`, `no`, `rpp_no`, `soal`, `bobot`, `userinput`, `date`) VALUES
(7, 1, 1, 1231, 'ini ganti jadi soal nomor pertama', 30, 2, '2015-05-19 18:29:42'),
(8, 1, 2, 1231, 'ini adlaah soal nomor keduax', 70, 2, '2015-05-19 18:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_sumber`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_sumber` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `sumber` text NOT NULL,
  `userinput` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_sumber`
--

INSERT INTO `trx_rpp_sumber` (`id`, `rpp_id`, `rpp_no`, `sumber`, `userinput`, `date`) VALUES
(1, 1, 1231, 'ini untuk sumber belajar lho!!!! ini telah dirubah -> sumber belajar2', 2, '2015-05-19 14:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `trx_rpp_tujuan`
--

CREATE TABLE IF NOT EXISTS `trx_rpp_tujuan` (
  `id` int(11) NOT NULL,
  `rpp_id` int(11) NOT NULL,
  `rpp_no` int(11) NOT NULL,
  `tujuan_no` tinyint(4) NOT NULL,
  `tujuan_skill` text NOT NULL,
  `tujuan_moral` text NOT NULL,
  `tujuan_karakter` text NOT NULL,
  `userinput` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_rpp_tujuan`
--

INSERT INTO `trx_rpp_tujuan` (`id`, `rpp_id`, `rpp_no`, `tujuan_no`, `tujuan_skill`, `tujuan_moral`, `tujuan_karakter`, `userinput`, `date`) VALUES
(8, 1, 1231, 2, 'asal asalan untuk life skill', 'asal asalan untuk nilai moral', 'asal asalan untuk pendidikan karakter', '2', '2015-05-13 15:46:23'),
(9, 1, 1231, 1, 'ini saya isi dengan life skill', 'ini adalah isian untuk nilai moral', 'ini isian untuk pendidikan karakter', '2', '2015-05-25 11:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `trx_silabus`
--

CREATE TABLE IF NOT EXISTS `trx_silabus` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `id_kd` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `materi_pokok` text NOT NULL,
  `tujuan_pembelajaran` text NOT NULL,
  `life_skill` text NOT NULL,
  `nilai_moral` text NOT NULL,
  `pendidikan_karakter` text NOT NULL,
  `kegiatan_pembelajaran` text NOT NULL,
  `sumber_belajar` text NOT NULL,
  `user_input` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_silabus`
--

INSERT INTO `trx_silabus` (`id`, `id_mapel`, `id_kelas`, `id_sk`, `id_kd`, `semester`, `materi_pokok`, `tujuan_pembelajaran`, `life_skill`, `nilai_moral`, `pendidikan_karakter`, `kegiatan_pembelajaran`, `sumber_belajar`, `user_input`, `date`) VALUES
(1, 40, 1, 1, 6, 1, 'isi dari materi pokok pembelajaran\r\nini baris ke2 dari materi pokok belajara\r\nini baris ke tigaaaa3', 'isi dari tujuan pembelajarannnnnn23\r\nini baris baru dari tujuan pmbelajaran', 'ini adalah isi life skilll ok23\r\nini adari life skill', 'ini nilai moral ajaran confisius... ciyus???23\r\nini dari nilai moral', 'karateker jujur, pemberani dan ceria2\r\nini juga baris baru dari pen karakter', 'pembelajaran nya ya belajar aja23\r\nbaris baru neh dari kegiatan pembelajaran', 'sumber belajar dari google2\r\ndari yahoo juga ada lho....', '2', '2015-04-30 15:47:10'),
(2, 40, 1, 1, 7, 1, '1. Membuat peta konsep sel\r\n2. membuat peta dae''rah jakarta dan tangerang\r\nlhoo....???', '1. membandingkan str''uktur sel hewan dan tumbuhan\r\n2. membandingkan perbedaan antara cowo dan cewe\r\nOce', 'LC3, LC4, LC se''kian deg', 'Confusius Benevo''lence', 'Jujur dan kerja p''intar', '1. tatap muka\r\n2. tatap tatapan aja\r\n3. trus jadia''n deg\r\n', 'Buku ko''mik\r\nbelajar dari go''ogle lagi???', '2', '2015-05-04 09:38:31'),
(3, 12, 4, 5, 8, 1, 'silabus mapok untuk Matk SK1 KD 1', 'tujuan silabus mapok untuk Matk SK1 KD 1', 'LC3, LC5', 'Nilai moral silabus mapok untuk Matk SK1 KD 1', 'pendiddikan karakter silabus mapok untuk Matk SK1 KD 1', 'kegbel silabus mapok untuk Matk SK1 KD 1', 'Buku komik', '2', '2015-05-20 15:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `trx_silabus_detail`
--

CREATE TABLE IF NOT EXISTS `trx_silabus_detail` (
  `id` int(11) NOT NULL,
  `id_silabus` int(11) NOT NULL,
  `id_indi` int(11) NOT NULL,
  `penilaian_indi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_silabus_detail`
--

INSERT INTO `trx_silabus_detail` (`id`, `id_silabus`, `id_indi`, `penilaian_indi`) VALUES
(1, 1, 22, 'di nilai sikapnya\r\nini bari ke 23'),
(2, 1, 23, 'dinilai PR nya temen\r\nini bari ke 23 juga'),
(7, 2, 24, 'asd''asdasd'),
(8, 2, 25, 'xcvxcv''xcvxcvcxv'),
(9, 3, 26, 'penilaian indi 1 silabus mapok untuk Matk SK1 KD 1'),
(10, 3, 27, 'penilaian indi 2 silabus mapok untuk Matk SK1 KD 1'),
(11, 3, 28, 'penilaian indi 3 silabus mapok untuk Matk SK1 KD 1');

-- --------------------------------------------------------

--
-- Table structure for table `trx_skkd`
--

CREATE TABLE IF NOT EXISTS `trx_skkd` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `sk_no` tinyint(3) NOT NULL,
  `sk_detail` text NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_skkd`
--

INSERT INTO `trx_skkd` (`id`, `id_mapel`, `id_kelas`, `sk_no`, `sk_detail`, `user_input`, `date`) VALUES
(1, 40, 1, 1, '<p>INi testing SK ajaaaaa... okey!!! ini ha''sil editaannnnnn, hore aja!!!!! pakai</p>\n<ol>\n<li>petik satu neh sdfsdfsdfsdffsd f sdfsdfsdfsdfsdfsdf</li>\n<li>ini udah di edit biar lebih jelas aja</li>\n<li>yang baris ke tiga juga saya edit&nbsp;</li>\n</ol>', '2', '2015-04-13 12:53:45'),
(2, 40, 1, 2, '<p>ini adalah sk ke 2 a ini adalah&nbsp;SK ke duaaaxxxx</p>\n<p>ada yang huruf <strong>tebal</strong> dan <em>miring....!!!</em></p>', '2', '2015-04-13 13:55:32'),
(3, 40, 1, 4, 'asik asik aku input data ke SK yang keeeee empattt 4', '2', '2015-04-13 15:36:17'),
(4, 40, 4, 1, '<p>ini SK untuk kelas bahasa pelajaran TIK</p>\n<ul style="list-style-type: disc;">\n<li>Hore</li>\n<li>Hatiku</li>\n<li>gembira</li>\n</ul>\n<p>ada &sum;dan lainnya neh &plusmn;&nbsp;neh</p>', '2', '2015-04-20 09:54:27'),
(5, 12, 4, 1, '<p>ini adalah SK1 untuk pelajaran matematika dan kelas XI Bahasa hahahahahaha</p>', '2', '2015-04-22 11:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `trx_skkd_kd`
--

CREATE TABLE IF NOT EXISTS `trx_skkd_kd` (
  `id` int(11) NOT NULL,
  `id_sk` int(11) NOT NULL,
  `kd_no` int(11) NOT NULL,
  `kd_detail` text NOT NULL,
  `ranah_kd` varchar(3) NOT NULL,
  `materi_pokok` text NOT NULL,
  `ruang_lingkup` tinyint(2) NOT NULL,
  `alokasi_waktu` tinyint(2) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_skkd_kd`
--

INSERT INTO `trx_skkd_kd` (`id`, `id_sk`, `kd_no`, `kd_detail`, `ranah_kd`, `materi_pokok`, `ruang_lingkup`, `alokasi_waktu`, `user_input`, `date`) VALUES
(1, 2, 3, 'asd asd asd asd asdasd asd, oke1', 'C3', ' werwerwerwerwerwerwe rwe rwe rwe rwe rwe r, oke4', 2, 0, '2', '2015-04-17 10:03:06'),
(2, 3, 1, 'adsdas dasdas das das dasdsd asd asd as dasda sd', 'C6', 'sd fsdf sdfsd fsd fsdfs dfs dfsd fsd fsdfsdfsd fsd fsdfsdfewfwfwefewf ', 7, 0, '2', '2015-04-16 14:10:30'),
(3, 2, 5, 'ini isi dari SK2 dan KD5, tambahannnnn..', 'P1', 'ini adalah isi untuk materi pokok!!!, tambah4................................................', 3, 0, '2', '2015-04-17 09:59:47'),
(4, 2, 1, 'ini tesing sk 2 kd ke..... duaaaa 2', 'P3', 'ini isi dari mattteeeeeeeeeriiiiiiii pokkkkkokkkkk 9', 9, 0, '2', '2015-04-16 16:13:47'),
(5, 4, 1, 'ini kd desc untuk kelas bahasa Pel TIK KD1', 'C2', 'ini materi pokok nya,,,, KD1 TIK kelas bhsa', 5, 0, '2', '2015-04-20 09:55:56'),
(6, 1, 1, 'ini adalah isi desc dari SK1 KD1, horeeee', 'C4', 'ini adalah isi materi pokok dari  (SK1KD1)', 8, 0, '2', '2015-04-22 09:16:30'),
(7, 1, 2, 'ini adalah SK1 KD2 description blabla bla', 'P2', 'ini testing isi materi pokok dari sk1 kd2 materi pokok..... ajkshdkjahs kdaskjdh akshd kajsdhkj ahdskajshd', 5, 0, '2', '2015-04-22 09:18:36'),
(8, 5, 1, 'KD1 untuk Matematika kelas XI Bhs', 'C1', 'Materi pokok Matk KD1', 4, 0, '2', '2015-05-20 15:04:02'),
(9, 5, 2, 'ini KD2 untuk Matematika kelas XI Bhs', 'C4', 'ini Mapok KD2 untuk Matematika kelas XI Bhs', 8, 0, '2', '2015-05-20 15:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `trx_skkd_kd_indi`
--

CREATE TABLE IF NOT EXISTS `trx_skkd_kd_indi` (
  `id` int(11) NOT NULL,
  `id_skkd_kd` int(11) NOT NULL,
  `no_indi` tinyint(2) NOT NULL,
  `desc_indi` text NOT NULL,
  `ranah_indi` varchar(5) NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_skkd_kd_indi`
--

INSERT INTO `trx_skkd_kd_indi` (`id`, `id_skkd_kd`, `no_indi`, `desc_indi`, `ranah_indi`, `user_input`, `date`) VALUES
(3, 2, 1, 'asd asdasdas dasd asd asd asda sda sda sdas d', 'C2', '2', '2015-04-16 14:10:30'),
(4, 2, 2, 'gfdgdf gdfgdfg dfgdf gdf gdf gdfg', 'P1', '2', '2015-04-16 14:10:30'),
(5, 2, 3, 'cxvxcv xcvxc vxc vxc xcvxc vxcvx cvxcvxcv xcv', 'C5', '2', '2015-04-16 14:10:30'),
(9, 4, 1, 'ini tingkat pertama c3', 'C3', '2', '2015-04-16 16:13:48'),
(10, 4, 2, 'ini indi kator keduax c5', 'C5', '2', '2015-04-16 16:13:48'),
(11, 4, 3, 'ini yang ketiga deg 33333 - p4', 'P4', '2', '2015-04-16 16:13:48'),
(15, 3, 1, 'isi indi 1 aja, tambah1...', 'C1', '2', '2015-04-17 09:59:47'),
(16, 3, 2, 'ini adalah isi indikator ke 2, tambah2...........', 'C2', '2', '2015-04-17 09:59:47'),
(17, 3, 3, 'yang ketiga adalah yang ini 33333, tambah3....................', 'C3', '2', '2015-04-17 09:59:47'),
(18, 1, 1, 'as d asdasd asd asd, oke2', 'P1', '2', '2015-04-17 10:03:06'),
(19, 1, 2, 'dsfg dfgfdgdfgdf gdf gdfgdfg dfg, oke3', 'P2', '2', '2015-04-17 10:03:06'),
(20, 5, 1, 'ini isi dari indi capai 1 TIK - KD1', 'C4', '2', '2015-04-20 09:55:56'),
(21, 5, 2, 'ini isi dari inci capai 2 TIK KD22222222', 'P2', '2', '2015-04-20 09:55:56'),
(22, 6, 1, 'ini adalah indi pencapaian c3 (SK1KD1)', 'C3', '2', '2015-04-22 09:16:30'),
(23, 6, 2, 'ini adlaah ini pencapaian p1  (SK1KD1)', 'P1', '2', '2015-04-22 09:16:30'),
(24, 7, 1, 'testing indi pencapaian indi1 c2 - sk1kd2', 'C2', '2', '2015-04-22 09:18:37'),
(25, 7, 2, 'testing indi pencapaian indi2 p3 - sk1kd2', 'P3', '2', '2015-04-22 09:18:37'),
(26, 8, 1, 'indi KD1 Matk XI Bhs (1)', 'C2', '2', '2015-05-20 15:04:02'),
(27, 8, 2, 'indi KD1 Matk XI Bhs (2)', 'C6', '2', '2015-05-20 15:04:02'),
(28, 8, 3, 'indi KD1 Matk XI Bhs (3)', 'P3', '2', '2015-05-20 15:04:02'),
(29, 9, 1, 'ini Indi1 KD2 untuk Matematika kelas XI Bhs', 'C2', '2', '2015-05-20 15:05:45'),
(30, 9, 2, 'ini Indi2 KD2 untuk Matematika kelas XI Bhs', 'C4', '2', '2015-05-20 15:05:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ms_bulan`
--
ALTER TABLE `ms_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_jabatan`
--
ALTER TABLE `ms_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_kelas`
--
ALTER TABLE `ms_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_pelajaran`
--
ALTER TABLE `ms_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_pelajaran_cad`
--
ALTER TABLE `ms_pelajaran_cad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_ranah`
--
ALTER TABLE `ms_ranah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_tahun_ajaran`
--
ALTER TABLE `ms_tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_guru_mapel`
--
ALTER TABLE `trx_guru_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_guru_mapel_detail`
--
ALTER TABLE `trx_guru_mapel_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_kisi`
--
ALTER TABLE `trx_kisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_kkm`
--
ALTER TABLE `trx_kkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_prosem`
--
ALTER TABLE `trx_prosem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_prosem_detail`
--
ALTER TABLE `trx_prosem_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_prosem_uji`
--
ALTER TABLE `trx_prosem_uji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_prota`
--
ALTER TABLE `trx_prota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp`
--
ALTER TABLE `trx_rpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_indikator`
--
ALTER TABLE `trx_rpp_indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_jawaban`
--
ALTER TABLE `trx_rpp_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_kegbel`
--
ALTER TABLE `trx_rpp_kegbel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_materi`
--
ALTER TABLE `trx_rpp_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_media`
--
ALTER TABLE `trx_rpp_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_metode`
--
ALTER TABLE `trx_rpp_metode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_soal`
--
ALTER TABLE `trx_rpp_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_sumber`
--
ALTER TABLE `trx_rpp_sumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_rpp_tujuan`
--
ALTER TABLE `trx_rpp_tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_silabus`
--
ALTER TABLE `trx_silabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_silabus_detail`
--
ALTER TABLE `trx_silabus_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_skkd`
--
ALTER TABLE `trx_skkd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_skkd_kd`
--
ALTER TABLE `trx_skkd_kd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_skkd_kd_indi`
--
ALTER TABLE `trx_skkd_kd_indi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_bulan`
--
ALTER TABLE `ms_bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ms_jabatan`
--
ALTER TABLE `ms_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ms_kelas`
--
ALTER TABLE `ms_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ms_pelajaran`
--
ALTER TABLE `ms_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `ms_pelajaran_cad`
--
ALTER TABLE `ms_pelajaran_cad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4227;
--
-- AUTO_INCREMENT for table `ms_ranah`
--
ALTER TABLE `ms_ranah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ms_tahun_ajaran`
--
ALTER TABLE `ms_tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=258;
--
-- AUTO_INCREMENT for table `trx_guru_mapel`
--
ALTER TABLE `trx_guru_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `trx_guru_mapel_detail`
--
ALTER TABLE `trx_guru_mapel_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `trx_kisi`
--
ALTER TABLE `trx_kisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `trx_kkm`
--
ALTER TABLE `trx_kkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `trx_prosem`
--
ALTER TABLE `trx_prosem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trx_prosem_detail`
--
ALTER TABLE `trx_prosem_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `trx_prosem_uji`
--
ALTER TABLE `trx_prosem_uji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `trx_prota`
--
ALTER TABLE `trx_prota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `trx_rpp`
--
ALTER TABLE `trx_rpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trx_rpp_indikator`
--
ALTER TABLE `trx_rpp_indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trx_rpp_jawaban`
--
ALTER TABLE `trx_rpp_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trx_rpp_kegbel`
--
ALTER TABLE `trx_rpp_kegbel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trx_rpp_materi`
--
ALTER TABLE `trx_rpp_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `trx_rpp_media`
--
ALTER TABLE `trx_rpp_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `trx_rpp_metode`
--
ALTER TABLE `trx_rpp_metode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trx_rpp_soal`
--
ALTER TABLE `trx_rpp_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trx_rpp_sumber`
--
ALTER TABLE `trx_rpp_sumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trx_rpp_tujuan`
--
ALTER TABLE `trx_rpp_tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `trx_silabus`
--
ALTER TABLE `trx_silabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trx_silabus_detail`
--
ALTER TABLE `trx_silabus_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `trx_skkd`
--
ALTER TABLE `trx_skkd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `trx_skkd_kd`
--
ALTER TABLE `trx_skkd_kd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `trx_skkd_kd_indi`
--
ALTER TABLE `trx_skkd_kd_indi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
