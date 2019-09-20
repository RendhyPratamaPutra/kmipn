-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Sep 2019 pada 19.39
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
-- Struktur dari tabel `trans_sampah`
--

CREATE TABLE `trans_sampah` (
  `id_trans_sampah` bigint(20) NOT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `sampah_plastik` int(11) DEFAULT NULL,
  `sampah_logam` int(11) DEFAULT NULL,
  `sampah_lain` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `trans_sampah`
--
ALTER TABLE `trans_sampah`
  ADD PRIMARY KEY (`id_trans_sampah`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_event` (`id_event`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `trans_sampah`
--
ALTER TABLE `trans_sampah`
  MODIFY `id_trans_sampah` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
