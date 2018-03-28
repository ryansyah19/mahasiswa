-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 10:36 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `harga` varchar(35) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `deskripsi`) VALUES
(6, 'Penggaris', '3500', 'butterfly'),
(7, 'crayon', '35000', 'titi'),
(8, 'Meja', '1200000', 'Kuatott');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nis` char(50) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `hoby` varchar(15) NOT NULL,
  `ekstrakulikuler` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nis`, `nama`, `alamat`, `email`, `kelas`, `tempat`, `tanggal`, `jenkel`, `hoby`, `ekstrakulikuler`) VALUES
(1, '123', 'ryan', 'bawang', 'rty@gmail.com', 'XRPLA', 'malang', '0000-00-00', 'L', 'menyanyi', 'pramuka'),
(3, '123', 'Ryansyah', 'Jl Bawang', 'ryansyah123@gmail.com', 'XI RPL A', 'Malang', '2001-04-22', 'Laki-Laki', 'membaca, menyan', 'pramuka, basket'),
(13, '111', 'enricho', 'letjen', 'rty@gamaill.com', 'XI RPL A', 'jakarta', '2017-10-01', 'Laki-Laki', 'membaca', 'badminton');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `nisn` int(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `sekolah` varchar(15) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `nohp` int(20) NOT NULL,
  `namaguru` varchar(35) NOT NULL,
  `nohpguru` int(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `urlfoto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `nisn`, `kelas`, `sekolah`, `alamat`, `nohp`, `namaguru`, `nohpguru`, `foto`, `urlfoto`) VALUES
(1, 'farhan', 1, 'rpla', 'SMKN 4 Malang', 'kasin', 89, 'sda', 89, '48Foto0194.jpg', 'data/48Foto0194.jpg'),
(2, 'Nayla', 11, '1 A', 'SDN Bumiayu 2', 'Jl Bayam Dalam', 12, 'Bu Rosida', 121, '36IMG-20171224-WA0008.jpg', 'data/36IMG-20171224-WA0008.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `deskripsi` text NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `urlthumbnail` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `urlpdf` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `deskripsi`, `thumbnail`, `urlthumbnail`, `pdf`, `urlpdf`) VALUES
(66, 'lalalammm', '46697412b1216ba22bda3b57f3c27a1e.jpg', 'data/46697412b1216ba22bda3b57f3c27a1e.jpg', '301080p-desktop-hd-wallpaper.jpg', 'data/301080p-desktop-hd-wallpaper.jpg'),
(67, 'ryansyah', '1080p-desktop-hd-wallpaper.jpg', 'data/521080p-desktop-hd-wallpaper.jpg', 'JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf', 'data/JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf'),
(68, 'farhan', 's.jpg', 'data/s.jpg', 'JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf', 'data/JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf'),
(69, 'asda', 'desert.jpg', 'data/desert.jpg', 'free-download-full-hd-nature-wallpapers-for-pc-wallpaper-1.jpg', 'data/free-download-full-hd-nature-wallpapers-for-pc-wallpaper-1.jpg'),
(73, 'ini bagus sekali', '2.PNG', 'data/2.PNG', 'JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf', 'data/JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf'),
(74, 'lumayan cuyy', '12.jpg', 'data/12.jpg', 'JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf', 'data/JUKLAK JUKNIS LOMBA PRAMUKA LSC paling baru.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, 'X RPL A'),
(2, 'X RPL B'),
(3, 'X RPL C'),
(4, 'X RPL D'),
(5, 'XI RPL A'),
(6, 'XI RPL B'),
(7, 'XI RPL C'),
(8, 'XI RPL D'),
(9, 'XII RPL A'),
(10, 'XII RPL B'),
(11, 'XII RPL C'),
(12, 'XII RPL D');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
  `id` int(20) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `kategori`, `isi`) VALUES
(1, 'about', 'ini adalah halaman about');

-- --------------------------------------------------------

--
-- Table structure for table `lain`
--

CREATE TABLE IF NOT EXISTS `lain` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nis` char(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `hoby` varchar(20) NOT NULL,
  `ekstrakulikuler` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=390 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `nama`, `harga`, `deskripsi`, `gambar`) VALUES
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, '', '', '', ''),
(74, '', '', '', ''),
(75, '', '', '', ''),
(76, '', '', '', ''),
(77, '', '', '', ''),
(78, '', '', '', ''),
(79, '', '', '', ''),
(80, '', '', '', ''),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, '', '', '', ''),
(96, '', '', '', ''),
(97, '', '', '', ''),
(98, '', '', '', ''),
(99, '', '', '', ''),
(100, '', '', '', ''),
(101, '', '', '', ''),
(102, '', '', '', ''),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, '', '', '', ''),
(106, '', '', '', ''),
(107, '', '', '', ''),
(108, '', '', '', ''),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, '', '', '', ''),
(114, '', '', '', ''),
(115, '', '', '', ''),
(116, '', '', '', ''),
(117, '', '', '', ''),
(118, '', '', '', ''),
(119, '', '', '', ''),
(120, '', '', '', ''),
(121, '', '', '', ''),
(122, '', '', '', ''),
(123, '', '', '', ''),
(124, '', '', '', ''),
(125, '', '', '', ''),
(126, '', '', '', ''),
(127, '', '', '', ''),
(128, '', '', '', ''),
(129, '', '', '', ''),
(130, '', '', '', ''),
(131, '', '', '', ''),
(132, '', '', '', ''),
(133, '', '', '', ''),
(134, '', '', '', ''),
(135, '', '', '', ''),
(136, '', '', '', ''),
(137, '', '', '', ''),
(138, '', '', '', ''),
(139, '', '', '', ''),
(140, '', '', '', ''),
(141, '', '', '', ''),
(142, '', '', '', ''),
(143, '', '', '', ''),
(144, '', '', '', ''),
(145, '', '', '', ''),
(146, '', '', '', ''),
(147, '', '', '', ''),
(148, '', '', '', ''),
(149, '', '', '', ''),
(150, '', '', '', ''),
(151, '', '', '', ''),
(152, '', '', '', ''),
(153, '', '', '', ''),
(154, '', '', '', ''),
(155, '', '', '', ''),
(156, '', '', '', ''),
(157, '', '', '', ''),
(158, '', '', '', ''),
(159, '', '', '', ''),
(160, '', '', '', ''),
(161, '', '', '', ''),
(162, '', '', '', ''),
(163, '', '', '', ''),
(164, '', '', '', ''),
(165, '', '', '', ''),
(166, '', '', '', ''),
(167, '', '', '', ''),
(168, '', '', '', ''),
(169, '', '', '', ''),
(170, '', '', '', ''),
(171, '', '', '', ''),
(172, '', '', '', ''),
(173, '', '', '', ''),
(174, '', '', '', ''),
(175, '', '', '', ''),
(176, '', '', '', ''),
(177, '', '', '', ''),
(178, '', '', '', ''),
(179, '', '', '', ''),
(180, '', '', '', ''),
(181, '', '', '', ''),
(182, '', '', '', ''),
(183, '', '', '', ''),
(184, '', '', '', ''),
(185, '', '', '', ''),
(186, '', '', '', ''),
(187, '', '', '', ''),
(188, '', '', '', ''),
(189, '', '', '', ''),
(190, '', '', '', ''),
(191, '', '', '', ''),
(192, '', '', '', ''),
(193, '', '', '', ''),
(194, '', '', '', ''),
(195, '', '', '', ''),
(196, '', '', '', ''),
(197, '', '', '', ''),
(198, '', '', '', ''),
(199, '', '', '', ''),
(200, '', '', '', ''),
(201, '', '', '', ''),
(202, '', '', '', ''),
(203, '', '', '', ''),
(204, '', '', '', ''),
(205, '', '', '', ''),
(206, '', '', '', ''),
(207, '', '', '', ''),
(208, '', '', '', ''),
(209, '', '', '', ''),
(210, '', '', '', ''),
(211, '', '', '', ''),
(212, '', '', '', ''),
(213, '', '', '', ''),
(214, '', '', '', ''),
(215, '', '', '', ''),
(216, '', '', '', ''),
(217, '', '', '', ''),
(218, '', '', '', ''),
(219, '', '', '', ''),
(220, '', '', '', ''),
(221, '', '', '', ''),
(222, '', '', '', ''),
(223, '', '', '', ''),
(224, '', '', '', ''),
(225, '', '', '', ''),
(226, '', '', '', ''),
(227, '', '', '', ''),
(228, '', '', '', ''),
(229, '', '', '', ''),
(230, '', '', '', ''),
(231, '', '', '', ''),
(232, '', '', '', ''),
(233, '', '', '', ''),
(234, '', '', '', ''),
(235, '', '', '', ''),
(236, '', '', '', ''),
(237, '', '', '', ''),
(238, '', '', '', ''),
(239, '', '', '', ''),
(240, '', '', '', ''),
(241, '', '', '', ''),
(242, '', '', '', ''),
(243, '', '', '', ''),
(244, '', '', '', ''),
(245, '', '', '', ''),
(246, '', '', '', ''),
(247, '', '', '', ''),
(248, '', '', '', ''),
(249, '', '', '', ''),
(250, '', '', '', ''),
(251, '', '', '', ''),
(252, '', '', '', ''),
(253, '', '', '', ''),
(254, '', '', '', ''),
(255, '', '', '', ''),
(256, '', '', '', ''),
(257, '', '', '', ''),
(258, '', '', '', ''),
(259, '', '', '', ''),
(260, '', '', '', ''),
(261, '', '', '', ''),
(262, '', '', '', ''),
(263, '', '', '', ''),
(264, '', '', '', ''),
(265, '', '', '', ''),
(266, '', '', '', ''),
(267, '', '', '', ''),
(268, '', '', '', ''),
(269, '', '', '', ''),
(270, '', '', '', ''),
(271, '', '', '', ''),
(272, '', '', '', ''),
(273, '', '', '', ''),
(274, '', '', '', ''),
(275, '', '', '', ''),
(276, '', '', '', ''),
(277, '', '', '', ''),
(278, '', '', '', ''),
(279, '', '', '', ''),
(280, '', '', '', ''),
(281, '', '', '', ''),
(282, '', '', '', ''),
(283, '', '', '', ''),
(284, '', '', '', ''),
(285, '', '', '', ''),
(286, '', '', '', ''),
(287, '', '', '', ''),
(288, '', '', '', ''),
(289, '', '', '', ''),
(290, '', '', '', ''),
(291, '', '', '', ''),
(292, '', '', '', ''),
(293, '', '', '', ''),
(294, '', '', '', ''),
(295, '', '', '', ''),
(296, '', '', '', ''),
(297, '', '', '', ''),
(298, '', '', '', ''),
(299, '', '', '', ''),
(300, '', '', '', ''),
(301, '', '', '', ''),
(302, '', '', '', ''),
(303, '', '', '', ''),
(304, '', '', '', ''),
(305, '', '', '', ''),
(306, '', '', '', ''),
(307, '', '', '', ''),
(308, '', '', '', ''),
(309, '', '', '', ''),
(310, '', '', '', ''),
(311, '', '', '', ''),
(312, '', '', '', ''),
(313, '', '', '', ''),
(314, '', '', '', ''),
(315, '', '', '', ''),
(316, '', '', '', ''),
(317, '', '', '', ''),
(318, '', '', '', ''),
(319, '', '', '', ''),
(320, '', '', '', ''),
(321, '', '', '', ''),
(322, '', '', '', ''),
(323, '', '', '', ''),
(324, '', '', '', ''),
(325, '', '', '', ''),
(326, '', '', '', ''),
(327, '', '', '', ''),
(328, '', '', '', ''),
(329, '', '', '', ''),
(330, '', '', '', ''),
(331, '', '', '', ''),
(332, '', '', '', ''),
(333, '', '', '', ''),
(334, '', '', '', ''),
(335, '', '', '', ''),
(336, '', '', '', ''),
(337, '', '', '', ''),
(338, '', '', '', ''),
(339, '', '', '', ''),
(340, '', '', '', ''),
(341, '', '', '', ''),
(342, '', '', '', ''),
(343, '', '', '', ''),
(344, '', '', '', ''),
(345, '', '', '', ''),
(346, '', '', '', ''),
(347, '', '', '', ''),
(348, '', '', '', ''),
(349, '', '', '', ''),
(350, '', '', '', ''),
(351, '', '', '', ''),
(352, '', '', '', ''),
(353, '', '', '', ''),
(354, '', '', '', ''),
(355, '', '', '', ''),
(356, '', '', '', ''),
(357, '', '', '', ''),
(358, '', '', '', ''),
(359, '', '', '', ''),
(360, '', '', '', ''),
(361, '', '', '', ''),
(362, '', '', '', ''),
(363, '', '', '', ''),
(364, '', '', '', ''),
(365, '', '', '', ''),
(366, '', '', '', ''),
(367, '', '', '', ''),
(368, '', '', '', ''),
(369, '', '', '', ''),
(370, '', '', '', ''),
(371, '', '', '', ''),
(372, '', '', '', ''),
(373, '', '', '', ''),
(374, '', '', '', ''),
(375, '', '', '', ''),
(376, '', '', '', ''),
(377, '', '', '', ''),
(378, '', '', '', ''),
(379, '', '', '', ''),
(380, '', '', '', ''),
(381, '', '', '', ''),
(382, '', '', '', ''),
(383, '', '', '', ''),
(384, '', '', '', ''),
(385, '', '', '', ''),
(386, 'buku', '12000', 'bagus', ''),
(387, '', '', '', ''),
(388, '', '', '', ''),
(389, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(10) NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `id`) VALUES
('', 'ecce5320263d7004f404de7888c0f9e6', 'user', 0),
('adam', '44748bae0034e7c8714902c51dfc33bf', 'admin', 3),
('farhan', '44748bae0034e7c8714902c51dfc33bf', 'user', 1),
('ryan', '44748bae0034e7c8714902c51dfc33bf', 'user', 2),
('ryansyah', '1111', 'admin', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
