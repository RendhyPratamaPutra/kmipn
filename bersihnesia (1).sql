-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2019 pada 08.39
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bersihnesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `community`
--

CREATE TABLE `community` (
  `id_community` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `name_community` varchar(30) NOT NULL,
  `contac_person` int(12) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `legality` varchar(30) DEFAULT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `information`
--

CREATE TABLE `information` (
  `id_information` int(11) NOT NULL,
  `name_information` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `photo` blob NOT NULL,
  `date` date NOT NULL,
  `value` varchar(10) DEFAULT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `information`
--

INSERT INTO `information` (`id_information`, `name_information`, `description`, `photo`, `date`, `value`, `category`) VALUES
(14, 'Botol Bekas', 'Asiyap', 0x70616e7461692d63656d6172612d62616e797577616e67692e706e67, '2019-08-15', NULL, 'Voucher & Promo'),
(15, 'Botol Bekas', 'Poin yang diperoleh lumayan besar', 0x70656c75616e675f6269736e69735f626f746f6c5f706c617374696b5f62656b61732e6a7067, '2019-08-15', NULL, 'Barang'),
(17, 'Kaca', 'Cukup tinggi poinya', 0x7065636168616e5f6b616361312e6a7067, '2019-08-15', '10', 'Barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contac person` int(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `point` int(11) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `personal`
--

INSERT INTO `personal` (`id_personal`, `name`, `address`, `contac person`, `email`, `password`, `point`, `role_id`) VALUES
(1, 'Admin', 'Jember', 815158685, 'ajip2606@gmail.com', '12345', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_member`
--

CREATE TABLE `status_member` (
  `id_status` int(11) NOT NULL,
  `id_community` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `status_member` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(11) NOT NULL,
  `id_community` int(11) DEFAULT NULL,
  `name_event` varchar(30) NOT NULL,
  `photo` blob NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `time_date` varchar(50) NOT NULL,
  `longlat` text NOT NULL,
  `status_event` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans_event`
--

CREATE TABLE `trans_event` (
  `id_trans_event` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id_community`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indeks untuk tabel `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id_information`);

--
-- Indeks untuk tabel `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indeks untuk tabel `status_member`
--
ALTER TABLE `status_member`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `id_community` (`id_community`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indeks untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_community` (`id_community`);

--
-- Indeks untuk tabel `trans_event`
--
ALTER TABLE `trans_event`
  ADD PRIMARY KEY (`id_trans_event`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_personal` (`id_personal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `community`
--
ALTER TABLE `community`
  MODIFY `id_community` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `information`
--
ALTER TABLE `information`
  MODIFY `id_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `status_member`
--
ALTER TABLE `status_member`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `trans_event`
--
ALTER TABLE `trans_event`
  MODIFY `id_trans_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `community`
--
ALTER TABLE `community`
  ADD CONSTRAINT `community_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Ketidakleluasaan untuk tabel `status_member`
--
ALTER TABLE `status_member`
  ADD CONSTRAINT `status_member_ibfk_1` FOREIGN KEY (`id_community`) REFERENCES `community` (`id_community`),
  ADD CONSTRAINT `status_member_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Ketidakleluasaan untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  ADD CONSTRAINT `tb_event_ibfk_1` FOREIGN KEY (`id_community`) REFERENCES `community` (`id_community`);

--
-- Ketidakleluasaan untuk tabel `trans_event`
--
ALTER TABLE `trans_event`
  ADD CONSTRAINT `trans_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`),
  ADD CONSTRAINT `trans_event_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
