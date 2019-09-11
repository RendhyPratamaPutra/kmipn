-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Sep 2019 pada 19.33
-- Versi server: 10.2.25-MariaDB
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u7698500_gagas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_point`
--

CREATE TABLE `trans_point` (
  `id_trans_point` bigint(20) NOT NULL,
  `id_trans_sampah` bigint(20) DEFAULT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `total_point` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `trans_point`
--
ALTER TABLE `trans_point`
  ADD PRIMARY KEY (`id_trans_point`),
  ADD KEY `id_trans_sampah` (`id_trans_sampah`),
  ADD KEY `id_personal` (`id_personal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `trans_point`
--
ALTER TABLE `trans_point`
  MODIFY `id_trans_point` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
