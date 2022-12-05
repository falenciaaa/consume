-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 22.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datajson`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `consume`
--

CREATE TABLE `consume` (
  `id` int(20) NOT NULL,
  `productId` int(20) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `transactionDate` datetime NOT NULL,
  `createBy` varchar(255) NOT NULL,
  `createOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `consume`
--

INSERT INTO `consume` (`id`, `productId`, `productName`, `amount`, `customerName`, `status`, `transactionDate`, `createBy`, `createOn`) VALUES
(1372, 10001, 'Test 1', 1000, 'abc', 0, '2022-07-10 11:14:52', 'abc', '2022-07-10 11:14:52'),
(1373, 10002, 'Test 2', 2000, 'abc', 0, '2022-07-11 13:14:52', 'abc', '2022-07-10 13:14:52'),
(1374, 10001, 'Test 1', 1000, 'abc', 0, '2022-08-10 12:14:52', 'abc', '2022-07-10 12:14:52'),
(1375, 10002, 'Test 2', 1000, 'abc', 1, '2022-08-10 13:10:52', 'abc', '2022-07-10 13:10:52'),
(1376, 10001, 'Test 1', 1000, 'abc', 0, '2022-08-10 13:11:52', 'abc', '2022-07-10 13:11:52'),
(1377, 10002, 'Test 2', 2000, 'abc', 0, '2022-08-12 13:14:52', 'abc', '2022-07-10 13:14:52'),
(1378, 10001, 'Test 1', 1000, 'abc', 0, '2022-08-12 14:11:52', 'abc', '2022-07-10 14:11:52'),
(1379, 10002, 'Test 2', 1000, 'abc', 1, '2022-09-13 11:14:52', 'abc', '2022-07-10 11:14:52'),
(1380, 10001, 'Test 1', 1000, 'abc', 0, '2022-09-13 13:14:52', 'abc', '2022-07-10 13:14:52'),
(1381, 10002, 'Test 2', 2000, 'abc', 0, '2022-09-14 09:11:52', 'abc', '2022-07-10 09:11:52'),
(1382, 10001, 'Test 1', 1000, 'abc', 0, '2022-09-14 10:14:52', 'abc', '2022-07-10 10:14:52'),
(1383, 10002, 'Test 2', 1000, 'abc', 1, '2022-08-15 13:14:52', 'abc', '2022-07-10 13:14:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `consume`
--
ALTER TABLE `consume`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
