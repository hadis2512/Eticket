-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2018 at 05:48 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwf`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `start` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `price_early` int(11) NOT NULL,
  `price_reg` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `quota` int(11) NOT NULL,
  `speaker` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `venue`, `start`, `enddate`, `price_early`, `price_reg`, `picture`, `content`, `quota`, `speaker`) VALUES
(1, 'Conference + Masterclass', 'Amphitheater - Ciputra Artpreneur Floor 13 & Ciputra Artpreneur Floor 11', '2018-11-08 10:00:00', '2018-11-08 18:00:00', 1000001, 2000001, '', '1', 1, '1'),
(2, 'Conference', 'Amphitheater - Ciputra Artpreneur Floor 13', '2018-11-08 11:00:00', '2018-11-08 13:00:00', 0, 100000, '', '', 0, ''),
(3, 'Masterclass', 'Ciputra Artpreneur Floor 11', '2018-11-08 13:00:00', '2018-11-08 17:00:00', 0, 100000, '', '', 0, ''),
(4, 'IWF Fest: DIY', 'Ciputra Artpreneur Floor 11', '2018-11-08 10:00:00', '2018-11-08 21:00:00', 50000, 50000, '', '', 0, ''),
(5, 'IWF Fest: Mini Workshop', 'Ciputra Artpreneur Floor 11', '2018-11-08 10:00:00', '2018-11-08 21:00:00', 50000, 50000, '', '', 0, ''),
(6, 'IWF Fest: Mini Talkshow', 'Ciputra Artpreneur Floor 11', '2018-11-08 10:00:00', '2018-11-08 21:00:00', 50000, 50000, '', '', 0, ''),
(7, 'IWF Fest: 1 on 1 Consultation', 'Ciputra Artpreneur Floor 11', '2018-11-08 10:00:00', '2018-11-08 21:00:00', 50000, 50000, '', '', 0, ''),
(8, 'IWF Fest: Meet & Greet', 'Ciputra Artpreneur Floor 11', '2018-11-08 10:00:00', '2018-11-08 21:00:00', 50000, 50000, '', '', 0, ''),
(9, 'Conference + Masterclass', 'Amphitheater - Ciputra Artpreneur Floor 13 & Ciputra Artpreneur Floor 11', '2018-11-09 09:00:00', '2018-11-09 17:00:00', 100000, 200000, '', '', 0, ''),
(10, 'Conference', 'Amphitheater - Ciputra Artpreneur Floor 13', '2018-11-09 11:00:00', '2018-11-09 13:00:00', 0, 100000, '', '', 0, ''),
(11, 'Masterclass', 'Ciputra Artpreneur Floor 11', '2018-11-09 13:00:00', '2018-11-09 17:00:00', 0, 100000, '', '', 0, ''),
(12, 'IWF Fest: DIY', 'Ciputra Artpreneur Floor 11', '2018-11-09 10:00:00', '2018-11-09 21:00:00', 50000, 50000, '', '', 0, ''),
(13, 'IWF Fest: Mini Workshop', 'Ciputra Artpreneur Floor 11', '2018-11-09 10:00:00', '2018-11-09 21:00:00', 50000, 50000, '', '', 0, ''),
(14, 'IWF Fest: Mini Talkshow', 'Ciputra Artpreneur Floor 11', '2018-11-09 10:00:00', '2018-11-09 21:00:00', 50000, 50000, '', '', 0, ''),
(15, 'IWF Fest: 1 on 1 Consultation', 'Ciputra Artpreneur Floor 11', '2018-11-09 10:00:00', '2018-11-09 21:00:00', 50000, 50000, '', '', 0, ''),
(16, 'IWF Fest: Meet & Greet', 'Ciputra Artpreneur Floor 11', '2018-11-09 10:00:00', '2018-11-09 21:00:00', 50000, 50000, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `salutation` tinyint(4) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `address3` varchar(255) NOT NULL,
  `city` int(11) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `secret_code` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `order` tinyint(4) NOT NULL,
  `path` varchar(255) NOT NULL,
  `menu` tinyint(4) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `action` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tran_hdr`
--

CREATE TABLE `tran_hdr` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_pay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tran_lin`
--

CREATE TABLE `tran_lin` (
  `id` int(11) NOT NULL,
  `id_tran` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `qty` tinyint(4) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `access`) VALUES
('pl5151', 'Patrick Armyn Lerapatty', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `group` tinyint(4) NOT NULL,
  `menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tran_hdr`
--
ALTER TABLE `tran_hdr`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tran_lin`
--
ALTER TABLE `tran_lin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event` (`event`),
  ADD UNIQUE KEY `id_tran` (`id_tran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_hdr`
--
ALTER TABLE `tran_hdr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_lin`
--
ALTER TABLE `tran_lin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tran_hdr`
--
ALTER TABLE `tran_hdr`
  ADD CONSTRAINT `tran_hdr_ibfk_1` FOREIGN KEY (`email`) REFERENCES `member` (`email`);

--
-- Constraints for table `tran_lin`
--
ALTER TABLE `tran_lin`
  ADD CONSTRAINT `tran_lin_ibfk_1` FOREIGN KEY (`event`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `tran_lin_ibfk_2` FOREIGN KEY (`id_tran`) REFERENCES `tran_hdr` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
