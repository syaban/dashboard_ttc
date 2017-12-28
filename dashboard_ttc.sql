-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 02:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dashboard_ttc`
--

-- --------------------------------------------------------

--
-- Table structure for table `capacity_references`
--

CREATE TABLE IF NOT EXISTS `capacity_references` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `subclass` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capacity_references`
--

INSERT INTO `capacity_references` (`id`, `name`, `class`, `subclass`, `capacity`, `unit`) VALUES
(1, 'pln', 'power_plant', '', 6600, 'kva'),
(2, 'genset', 'power_plant', '', 5475, 'kva'),
(3, 'fueltank', 'power_plant', '', 35000, 'L'),
(4, 'lvmdp1', 'power_plant', '', 572, 'kva'),
(5, 'lvmdp2', 'power_plant', '', 705, 'kva'),
(6, 'lvmdp3', 'power_plant', '', 452, 'kva'),
(7, 'level3', 'cooling', '', 641456, 'percent'),
(8, 'level4', 'cooling', '', 2219164, 'percent'),
(9, 'level6', 'cooling', '', 1801536, 'percent'),
(10, 'level7', 'cooling', '', 1012007, 'percent'),
(11, 'level8', 'cooling', '', 100, 'percent'),
(12, 'level9_bss', 'cooling', '', 100, 'percent'),
(13, 'level9_transmisi', 'cooling', '', 100, 'percent'),
(15, 'level3_r', 'rack_space', '', 40, 'rack'),
(16, 'level4_r', 'rack_space', '', 129, 'rack'),
(17, 'level6_r', 'rack_space', '', 104, 'rack'),
(18, 'level7_r', 'rack_space', '', 151, 'rack'),
(19, 'level8_r', 'rack_space', '', 159, 'rack'),
(20, 'level9_bss_r', 'rack_space', '', 36, 'rack'),
(21, 'level9_transmisi_r', 'rack_space', '', 60, 'rack'),
(22, 'level4_nonprod_r', 'rack_space', '', 40, 'rack');

-- --------------------------------------------------------

--
-- Table structure for table `cooling`
--

CREATE TABLE IF NOT EXISTS `cooling` (
`id` int(11) NOT NULL,
  `level3` double NOT NULL,
  `level3_val` varchar(15) NOT NULL,
  `level4` double NOT NULL,
  `level4_val` varchar(15) NOT NULL,
  `level6` double NOT NULL,
  `level6_val` varchar(15) NOT NULL,
  `level7` double NOT NULL,
  `level7_val` varchar(15) NOT NULL,
  `level8` double NOT NULL,
  `level8_val` varchar(15) NOT NULL,
  `level9_bss` double NOT NULL,
  `level9_bss_val` varchar(15) NOT NULL,
  `level9_transmisi` double NOT NULL,
  `level9_transmisi_val` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cooling`
--

INSERT INTO `cooling` (`id`, `level3`, `level3_val`, `level4`, `level4_val`, `level6`, `level6_val`, `level7`, `level7_val`, `level8`, `level8_val`, `level9_bss`, `level9_bss_val`, `level9_transmisi`, `level9_transmisi_val`) VALUES
(2, 2.3, '23/100', 3.56, '45/100', 78.9, '78/100', 56.98, '123/234', 45.6, '34/120', 50, '100/200', 89.34, '38/40'),
(3, 20, '20/100', 30, '30/100', 40, '40/100', 50, '50/100', 60, '60/100', 70, '70/100', 80, '80/100'),
(4, 45.99, '295002/641456', 41.23, '915030/2219164', 45.17, '813693/1801536', 43.01, '435296/1012007', 40, '40/100', 50, '50/100', 60, '60/100');

-- --------------------------------------------------------

--
-- Table structure for table `power_plant`
--

CREATE TABLE IF NOT EXISTS `power_plant` (
`id` int(11) NOT NULL,
  `pln` double NOT NULL,
  `pln_val` varchar(15) NOT NULL,
  `genset` double NOT NULL,
  `genset_val` varchar(15) NOT NULL,
  `fueltank` double NOT NULL,
  `fueltank_val` varchar(15) NOT NULL,
  `lvmdp1` double NOT NULL,
  `lvmdp1_val` varchar(15) NOT NULL,
  `lvmdp2` double NOT NULL,
  `lvmdp2_val` varchar(15) NOT NULL,
  `lvmdp3` double NOT NULL,
  `lvmdp3_val` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `power_plant`
--

INSERT INTO `power_plant` (`id`, `pln`, `pln_val`, `genset`, `genset_val`, `fueltank`, `fueltank_val`, `lvmdp1`, `lvmdp1_val`, `lvmdp2`, `lvmdp2_val`, `lvmdp3`, `lvmdp3_val`) VALUES
(1, 50, '1200/6000', 12.87, '12/89', 34.9, '34/100', 57.9, '57/99', 80, '80/100', 23.4, '234/1000'),
(2, 83.33, '5000/6000', 51.43, '1800/3500', 72.5, '2900/4000', 94.5, '1890/2000', 53.33, '1600/3000', 98, '2450/2500'),
(12, 38.33, '2300/6000', 34.29, '1200/3500', 25, '1000/4000', 60, '1200/2000', 63, '1890/3000', 84, '2100/2500'),
(16, 50, '3000/6000', 57.14, '2000/3500', 50, '2000/4000', 50, '1000/2000', 43.33, '1300/3000', 93.6, '2340/2500'),
(17, 25, '1500/6000', 10, '350/3500', 75, '3000/4000', 25, '500/2000', 10, '300/3000', 100, '2500/2500');

-- --------------------------------------------------------

--
-- Table structure for table `rack_space`
--

CREATE TABLE IF NOT EXISTS `rack_space` (
`id` int(11) NOT NULL,
  `level3` double NOT NULL,
  `level3_val` varchar(15) NOT NULL,
  `level4` double NOT NULL,
  `level4_val` varchar(15) NOT NULL,
  `level6` double NOT NULL,
  `level6_val` varchar(15) NOT NULL,
  `level7` double NOT NULL,
  `level7_val` varchar(15) NOT NULL,
  `level8` double NOT NULL,
  `level8_val` varchar(15) NOT NULL,
  `level9_bss` double NOT NULL,
  `level9_bss_val` varchar(15) NOT NULL,
  `level9_transmisi` double NOT NULL,
  `level9_transmisi_val` varchar(15) NOT NULL,
  `level4_nonprod` double NOT NULL,
  `level4_nonprod_val` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rack_space`
--

INSERT INTO `rack_space` (`id`, `level3`, `level3_val`, `level4`, `level4_val`, `level6`, `level6_val`, `level7`, `level7_val`, `level8`, `level8_val`, `level9_bss`, `level9_bss_val`, `level9_transmisi`, `level9_transmisi_val`, `level4_nonprod`, `level4_nonprod_val`) VALUES
(4, 20, '20/100', 30, '30/100', 40, '40/100', 50, '50/100', 60, '60/100', 70, '70/100', 80, '80/100', 90, '90/100'),
(5, 20, '20/100', 20, '20/100', 20, '20/100', 20, '20/100', 20, '20/100', 20, '20/100', 20, '20/100', 20, '20/100'),
(11, 100, '40/40', 93.02, '120/129', 94.23, '98/104', 62.25, '94/151', 28.3, '45/159', 52.78, '19/36', 18.33, '11/60', 0, '0/40');

-- --------------------------------------------------------

--
-- Table structure for table `user_application`
--

CREATE TABLE IF NOT EXISTS `user_application` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `user_level` varchar(255) DEFAULT NULL,
  `status_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_application`
--

INSERT INTO `user_application` (`id`, `username`, `password`, `perusahaan`, `last_login`, `user_level`, `status_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Telkomsel', NULL, 'admin', 'Admin Telkomsel'),
(5, 'ts', '6e3072cf0c666aa6f00d7f9395b1a345', 'kam', NULL, 'ts', 'ts'),
(8, 'bm', 'e1984cd183fdc676b3a15e649ec8da5a', 'GSD', NULL, 'bm', 'bm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capacity_references`
--
ALTER TABLE `capacity_references`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cooling`
--
ALTER TABLE `cooling`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `power_plant`
--
ALTER TABLE `power_plant`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rack_space`
--
ALTER TABLE `rack_space`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_application`
--
ALTER TABLE `user_application`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacity_references`
--
ALTER TABLE `capacity_references`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `cooling`
--
ALTER TABLE `cooling`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `power_plant`
--
ALTER TABLE `power_plant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `rack_space`
--
ALTER TABLE `rack_space`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_application`
--
ALTER TABLE `user_application`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
