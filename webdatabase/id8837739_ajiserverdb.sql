-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2019 at 03:37 PM
-- Server version: 10.3.13-MariaDB
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
-- Database: `id8837739_ajiserverdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_classes`
--

CREATE TABLE `tb_classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_classes`
--

INSERT INTO `tb_classes` (`id`, `class_name`, `teacher_id`) VALUES
(1, 'VIII A', 3),
(2, 'VII A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `waktu`, `caption`, `gambar`, `id_user`) VALUES
(1, '2019-03-18 09:00:00', 'sdfsdfsdfsdfsafsf fs fas fas fsdfsdfsf asfasfsfsa sdfafasf', 'biru.png', 1),
(2, '2019-03-18 09:00:00', 'asdfdsfds dfsdfsdaf dfsfasdf sdfasfaf', 'hijau.png', 1),
(3, '2019-03-18 06:00:00', 'sdfsdfdsfdsfdf', 'biru.png', 2),
(4, '2019-03-25 14:14:03', 'lalallala', 'postgg.png', 1),
(5, '2019-03-27 09:56:26', 'hahahihi', 'postggwp.png', 2),
(6, '2019-03-27 10:35:43', 'asdfasdad', 'kaka.png', 2),
(7, '2019-03-27 10:49:23', 'njnjnjnjnjnjnj', 'uiui.png', 1),
(8, '2019-03-27 11:15:58', 'bnbnbn', 'oo.png', 2),
(9, '2019-04-01 20:58:24', 'kokokoko', 'postggwp.png', 2),
(10, '2019-04-03 21:02:54', 'hhghjjjjj', 'gmk.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_students`
--

CREATE TABLE `tb_students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` enum('active','nonactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_students`
--

INSERT INTO `tb_students` (`id`, `name`, `address`, `class_id`, `status`) VALUES
(1, 'Abdullah', 'Depok', 1, 'active'),
(2, 'Ali Zainal A', 'Bekasi', 1, 'active'),
(3, 'Ammar K', 'Tangerang', 2, 'active'),
(4, 'M Afiq A', 'Jakarta', 1, 'nonactive'),
(5, 'Furqon A', 'Samarinda', 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `p_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama`, `username`, `email`, `password`, `p_image`) VALUES
(1, 'aji', 'ajisetya07', 'aji@g.c', 'aji', 'biru.png'),
(2, 'abdullah', 'abdul', 'abdul@g.c', 'abdul', 'hijau.png'),
(3, 'ali', 'ali', 'ali@g.c', '86318e52f5ed4801abe1d13d509443de', 'ali.png'),
(4, 'ammar', 'ammar', 'ammar@g.c', 'fed5de04cbba88aae4fa4b1d370dde5c', 'ammar.png'),
(5, NULL, 'afiq', 'afiq@g.c', '35bbf5fc2389c0a570a16d2fd3e9c71e', NULL),
(6, 'zen', 'zen', 'zen@g.c', '7e9aedd97b5ec4590edb8281ff12b168', 'zen.png'),
(7, '', 'furqon', 'furqon@gmail.com', '4dd10d2cadaf7481add48cac12c40df7', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_classes`
--
ALTER TABLE `tb_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tb_students`
--
ALTER TABLE `tb_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_classes`
--
ALTER TABLE `tb_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_students`
--
ALTER TABLE `tb_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
