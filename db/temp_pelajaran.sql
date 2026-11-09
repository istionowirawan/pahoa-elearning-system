-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2015 at 06:54 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistem_nilai_sma`
--

-- --------------------------------------------------------

--
-- Table structure for table `temp_pelajaran`
--

CREATE TABLE IF NOT EXISTS `temp_pelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(8) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `alias` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `temp_pelajaran`
--

INSERT INTO `temp_pelajaran` (`id`, `kode`, `mapel`, `jenjang`, `tipe`, `alias`) VALUES
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
(152, 'AKTIK', 'Keterampilan TIK', 'SMA', 'Akademik', 'Ket#TIK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
