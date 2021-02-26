-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2020 pada 21.31
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `picture` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `quota` int(11) NOT NULL,
  `ticket` int(11) NOT NULL,
  `speaker` varchar(500) NOT NULL,
  `moderator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `name`, `venue`, `start`, `end`, `picture`, `content`, `quota`, `ticket`, `speaker`, `moderator`) VALUES
(15, 'asd', 'asd', '2020-03-17 12:00:00', '2020-03-18 00:00:00', 'assets/img/file_1583786887.jpg', '<p>asd</p>\r\n', 21, 0, 'asd', 'asd'),
(17, 'ddsa', 'asd', '2020-03-29 12:00:00', '2020-12-12 00:00:00', 'assets/img/15130655540122.gif', '<p>asd</p>\r\n', 10, 0, 'asd', 'asd'),
(19, 'asd', 'asd', '2020-03-13 12:00:00', '2020-03-02 00:00:00', 'assets/img/file_1584037696.jpg', '<p>asd</p>\r\n\r\n<div id=\"gtx-trans\" xss=removed>\r\n<div class=\"gtx-trans-icon\"> </div>\r\n</div>\r\n', 5, 0, 'asd', 'asd'),
(21, 'dadas', 'dadas', '2020-03-13 08:15:00', '2020-03-20 08:00:00', 'assets/img/file_1584039384.jpg', '<p>asd</p>\r\n', 121, 0, 'asd', 'asw'),
(27, 'jajang', 'jajas', '2020-03-27 12:00:00', '2020-04-30 11:20:00', 'assets/img/file_1585290131.gif', '<p>AS</p>\r\n', 123, 0, 'awer', 'dede'),
(29, 'asd', 'asd', '2020-04-08 02:00:00', '2020-04-17 08:00:00', 'assets/img/15130655540123.gif', '<p>asd</p>\r\n', 1, 0, 'asdasdasd', 'asd'),
(30, 'jkn', 'babiasd', '2020-03-28 12:00:00', '2020-05-28 11:00:00', 'assets/img/file_1585383983.jpg', '<p>asd</p>\r\n', 61, 0, 'qwecc', 'zxcas'),
(40, 'x', 'x', '2020-08-27 12:00:00', '2020-08-28 19:00:00', 'assets/images/file_1597847233.jpg', '<p>x</p>\r\n', 45, 0, 's', 's'),
(41, 'a', 'a', '2020-08-19 12:00:00', '2020-08-20 03:00:00', 'assets/images/Event_imgfile_1597847856.jpg', '<p>a</p>\r\n', 34, 0, 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
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
  `status` tinyint(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `email`, `password`, `first_name`, `last_name`, `salutation`, `phone`, `address1`, `address2`, `address3`, `city`, `zip_code`, `secret_code`, `status`, `date`) VALUES
(1, 'hadits@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Muhammad', 'Hadits', 2, '1231244412', 'sdasdas', 'asdasdasd', 'asdasdasd', 0, '12314', '12312', 1, '2020-02-14 02:38:41'),
(2, 'hadits@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Muhammad', 'Hadits', 2, '1231244412', 'sdasdas', 'asdasdasd', 'asdasdasd', 0, '12314', '12312', 1, '2020-02-14 02:38:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_trans` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `qty` tinyint(4) NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_trans`, `event`, `qty`, `date`, `email`) VALUES
(1, 1, 30, 21, '2020-05-21 10:19:32', 'hadits@google.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `access`) VALUES
('12333', 'ADES', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('adas', 'Adas a', '202cb962ac59075b964b07152d234b70', 0),
('Albert12', 'Albert Joseph Silitonga', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('asd', 'asw', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('hadis', 'Hadits', '5c37b97ab63a4fecdb409658f08df693', 1),
('jajang', 'jajang sutisna', '5c37b97ab63a4fecdb409658f08df693', 0),
('p123', 'pepek', 'b59c67bf196a4758191e42f76670ceba', 0),
('patrick', 'petrik', '202cb962ac59075b964b07152d234b70', 0),
('petrik', 'Patrick', '81dc9bdb52d04dc20036dbd8313ed055', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trans` (`id_trans`),
  ADD KEY `event` (`event`,`id_trans`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`event`) REFERENCES `event` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
