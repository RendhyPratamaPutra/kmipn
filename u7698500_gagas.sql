-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 27 Agu 2019 pada 17.01
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
-- Struktur dari tabel `act_reedem`
--

CREATE TABLE `act_reedem` (
  `id_act` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `jumlah_reedem` int(11) NOT NULL,
  `reedem_point` int(11) NOT NULL,
  `tanggal_reedem` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `act_reedem`
--

INSERT INTO `act_reedem` (`id_act`, `id_personal`, `id_item`, `nama`, `no_hp`, `alamat_pengiriman`, `jumlah_reedem`, `reedem_point`, `tanggal_reedem`) VALUES
(13, 9, 1, 'Rendhy', '0857365746282', 'Sempol', 1, 1000, '2019-08-27'),
(12, 9, 1, 'Rendhy', '0857365746282', 'Sempol', 1, 1000, '2019-08-27'),
(14, 9, 1, 'Rendhy', '0857365746282', 'Sempol', 1, 1000, '2019-08-27'),
(15, 9, 1, 'Rendhy', '0857365746282', 'Sempol', 1, 1000, '2019-08-27'),
(16, 9, 2, 'Rendhy', '0857365746282', 'Sempol', 1, 1500, '2019-08-27'),
(17, 9, 1, 'Rendhy', '0857365746282', 'Sempol', 1, 1000, '2019-08-27'),
(18, 6, 1, 'Ainun Najib', '1', '1', 1, 1000, '2019-08-27'),
(19, 6, 2, 'Ainun Najib', '1', '1', 1, 1500, '2019-08-27'),
(20, 6, 1, 'Ainun Najib', '1', '1', 1, 1000, '2019-08-27'),
(21, 6, 1, 'Ainun Najib', '1', '1', 1, 1000, '2019-08-27');

--
-- Trigger `act_reedem`
--
DELIMITER $$
CREATE TRIGGER `point` AFTER INSERT ON `act_reedem` FOR EACH ROW BEGIN
UPDATE personal SET point=point-NEW.reedem_point WHERE id_personal=NEW.id_personal;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `reedem` BEFORE INSERT ON `act_reedem` FOR EACH ROW BEGIN 
UPDATE item_reedem SET jumlah_item=jumlah_item-NEW.jumlah_reedem
WHERE id_item=NEW.id_item;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `add_item_reedem`
--

CREATE TABLE `add_item_reedem` (
  `id_item` int(11) NOT NULL,
  `jumlah_item` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `add_item_reedem`
--

INSERT INTO `add_item_reedem` (`id_item`, `jumlah_item`) VALUES
(1, 100);

--
-- Trigger `add_item_reedem`
--
DELIMITER $$
CREATE TRIGGER `add_reedem` BEFORE INSERT ON `add_item_reedem` FOR EACH ROW BEGIN 
UPDATE item_reedem SET jumlah_item=jumlah_item+new.jumlah_item
WHERE id_item=NEW.id_item;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `community`
--

CREATE TABLE `community` (
  `id_community` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `name_community` varchar(30) NOT NULL,
  `contact_person` varchar(13) NOT NULL,
  `address` text NOT NULL,
  `latlong` text DEFAULT NULL,
  `description` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `legality` varchar(30) DEFAULT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `community`
--

INSERT INTO `community` (`id_community`, `id_personal`, `name_community`, `contact_person`, `address`, `latlong`, `description`, `status`, `legality`, `photo`) VALUES
(1, 2, 'Silet', '80808', '0', NULL, 'http://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.phphttp://jwpdigitalent.com/gagas/login.php', 'hgf', 'jhggh', ''),
(2, 3, 'Pecinta Alam', '12345678', 'Bwi', '12.2343,12.12323', 'Test', 'Belum Dicek', 'Test', 0x61736961702e6a7067);

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
(15, 'Botol Bekas', 'Poin yang diperoleh lumayan besar', 0x70656c75616e675f6269736e69735f626f746f6c5f706c617374696b5f62656b61732e6a7067, '2019-08-15', NULL, 'organik'),
(17, 'Kaca', 'Cukup tinggi poinya', 0x7065636168616e5f6b616361312e6a7067, '2019-08-15', '10', 'nonorganik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_reedem`
--

CREATE TABLE `item_reedem` (
  `id_item` int(11) NOT NULL,
  `name_item` varchar(25) NOT NULL,
  `photo` blob NOT NULL,
  `jumlah_point` int(11) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `category` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item_reedem`
--

INSERT INTO `item_reedem` (`id_item`, `name_item`, `photo`, `jumlah_point`, `jumlah_item`, `category`) VALUES
(1, 'Kaos Bersihnesia', '', 1000, 96, 'barang'),
(2, 'Topi Bersihnesia', '', 1500, 13, 'barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact_person` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `date_register` date NOT NULL,
  `photo` blob NOT NULL,
  `point` int(11) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `personal`
--

INSERT INTO `personal` (`id_personal`, `name`, `address`, `contact_person`, `email`, `password`, `jk`, `date_register`, `photo`, `point`, `role_id`) VALUES
(2, 'bzbz', 'sbhdhd', '082838', 'hdhd', 'shhshs', 'Perempuan', '0000-00-00', 0x494d475f32303139303831355f3134333634382e6a7067, 0, 2),
(3, 'mega', 'jajaja', '08766', 'mega@yahoo.com', 'mega', 'Laki-laki', '0000-00-00', 0x53637265656e73686f745f323031392d30382d30362d32332d32332d34302d32352e706e67, 100000, 2),
(6, 'Ainun Najib', '1', '1', '1', '1', 'Laki-laki', '0000-00-00', 0x494d475f32303139303831365f3135313133362e6a7067, 5500, 2),
(7, 'Fahrizal Azi ', 'Banyuwangi', '085736586636', 'jiwanrizal5@gmail.com', 'jiwan123', 'Laki-laki', '0000-00-00', 0x53637265656e73686f745f323031392d30372d33312d31322d35312d34312d3338345f636f6d2e696e7374616772616d2e616e64726f69642e706e67, 0, 2),
(8, 'Azi', 'Banyuwangi', '085736586636', 'fahrizalazi1@gmail.com', 'jiwan123', 'Laki-laki', '0000-00-00', 0x53637265656e73686f745f323031392d30382d32302d31382d33352d34382d3837375f636f6d2e616e64726f69642e6368726f6d652e706e67, 0, 2),
(9, 'Rendhy', 'Sempol', '0857365746282', 'rendhypratama880@gmail.com', 'rendhy', 'Laki-laki', '0000-00-00', 0x53637265656e73686f745f323031392d30372d33302d30312d35362d32302d3236385f636f6d2e6d6f62696c652e6c6567656e64732e706e67, 0, 2),
(10, 'Ainun Najib', '12', '12', '12', '12', '12', '0000-00-00', '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `photo` blob NOT NULL,
  `address` text NOT NULL,
  `longlat` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id_report`, `id_personal`, `photo`, `address`, `longlat`, `description`, `date`, `status`) VALUES
(1, 1, 0x72656e6468792e6a7067, 'bwi', '123,123', 'Test', '0000-00-00', ''),
(2, 3, 0x53637265656e73686f745f323031392d30382d32302d31382d33352d34382d3837375f636f6d2e616e64726f69642e6368726f6d652e706e67, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163787500000007,113.72558984374993', 'Test', '0000-00-00', ''),
(15, 9, 0x494d475f32303139303830345f3131303135322e6a7067, 'Jl. Mastrip Gg. VII No.1a, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.164017500000005,113.72479296874994', 'Ahhay', '0000-00-00', 'Belum Diseleksi'),
(14, 9, 0x494d475f32303139303830375f3232333135372e6a7067, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163792500000007,113.72560546874993', 'Ahaay', '0000-00-00', 'Belum Diseleksi'),
(13, 9, 0x494d475f32303139303831345f3233323130335f4848542e6a7067, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163787500000007,113.72558984374993', 'Sangat kotor', '0000-00-00', 'Belum Diseleksi'),
(12, 6, '', 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163787500000007,113.72558984374993', '', '0000-00-00', 'Belum Diseleksi'),
(11, 8, 0x494d475f32303139303832343135333031362e6a7067, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163787500000007,113.72558984374993', 'Siyaap sih', '0000-00-00', 'Belum Diseleksi'),
(10, 8, 0x494d475f32303139303832345f3037303232342e6a7067, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163787500000007,113.72558984374993', 'Siyaaap', '0000-00-00', 'Belum Diseleksi'),
(16, 9, 0x494d475f32303139303832343233343034392e6a7067, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163792500000007,113.72560546874993', 'Sangay kotor pantainya.', '0000-00-00', 'Belum Diseleksi'),
(17, 9, 0x494d475f32303139303732375f3132313031332e6a7067, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.163797500000008,113.72560546874993', 'Ahhaaa rame banget', '0000-00-00', 'Belum Diseleksi'),
(18, 6, 0x494d475f32303139303832365f3233353234342e6a7067, 'Jl. Mastrip Gg. VII No.9A, Krajan Barat, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121, Indonesia ', '-8.1637725,113.72558984374993', 'Cuma Test', '0000-00-00', 'Belum Diseleksi');

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

--
-- Dumping data untuk tabel `status_member`
--

INSERT INTO `status_member` (`id_status`, `id_community`, `id_personal`, `status_member`) VALUES
(1, 2, 6, 'Ketua'),
(2, 2, 8, 'Member'),
(3, 2, 2, 'Member'),
(5, 2, 3, ''),
(6, 2, 3, ''),
(7, 2, 3, 'Member'),
(8, 2, 10, 'Member'),
(9, 1, 3, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_announcement`
--

CREATE TABLE `tb_announcement` (
  `id_announcement` bigint(20) NOT NULL,
  `id_community` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `announcement` text NOT NULL,
  `picture` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `longlat` text NOT NULL,
  `status_event` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `id_community`, `name_event`, `photo`, `description`, `address`, `date`, `time`, `longlat`, `status_event`, `status`) VALUES
(2, 1, 'Event Cobahhh', '', 'http://jwpdigitalent.com/gagas/admin/list_event/\r\nhttp://jwpdigitalent.com/gagas/admin/list_event/', '', '', '', '40.831317158, -74.94631482', '', 0),
(3, 1, 'Event Coba', '', 'http://jwpdigitalent.com/gagas/admin/list_event/\r\nhttp://jwpdigitalent.com/gagas/admin/list_event/http://jwpdigitalent.com/gagas/admin/list_event/\r\nhttp://jwpdigitalent.com/gagas/admin/list_event/', '', '', '', '4.831317158, -73.94631482', '', 0),
(4, 1, 'HUA', '', 'HUA', 'HUA', '', '', '23.12323, 12.43142', '', 0),
(5, 1, 'KNALNS', '', '', '', '', '', '63.1323, 12.12323', '', 0),
(6, 1, 'Pojok', '', '', '', '', '', '123243,12132343', '', 0),
(7, 2, 'Silahkan', '', 'YAHOO', 'HAA', 'JAJJ', '', '21.12323, 12.12323', 'Sudah', 0);

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
-- Dumping data untuk tabel `trans_event`
--

INSERT INTO `trans_event` (`id_trans_event`, `id_event`, `id_personal`) VALUES
(1, 2, 2),
(7, 2, 3),
(8, 2, 6),
(9, 7, 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `act_reedem`
--
ALTER TABLE `act_reedem`
  ADD PRIMARY KEY (`id_act`),
  ADD KEY `FK2` (`id_item`),
  ADD KEY `FK3` (`id_personal`);

--
-- Indeks untuk tabel `add_item_reedem`
--
ALTER TABLE `add_item_reedem`
  ADD PRIMARY KEY (`id_item`);

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
-- Indeks untuk tabel `item_reedem`
--
ALTER TABLE `item_reedem`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `FK` (`id_personal`);

--
-- Indeks untuk tabel `status_member`
--
ALTER TABLE `status_member`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `id_community` (`id_community`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indeks untuk tabel `tb_announcement`
--
ALTER TABLE `tb_announcement`
  ADD PRIMARY KEY (`id_announcement`),
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
-- AUTO_INCREMENT untuk tabel `act_reedem`
--
ALTER TABLE `act_reedem`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `community`
--
ALTER TABLE `community`
  MODIFY `id_community` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `information`
--
ALTER TABLE `information`
  MODIFY `id_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `item_reedem`
--
ALTER TABLE `item_reedem`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `status_member`
--
ALTER TABLE `status_member`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_announcement`
--
ALTER TABLE `tb_announcement`
  MODIFY `id_announcement` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `trans_event`
--
ALTER TABLE `trans_event`
  MODIFY `id_trans_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

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
