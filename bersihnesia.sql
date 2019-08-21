-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 01:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id_community` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `name_community` varchar(30) NOT NULL,
  `contac_person` int(12) NOT NULL,
  `description` text NOT NULL,
  `privacy` varchar(30) NOT NULL,
  `legality` varchar(30) DEFAULT NULL,
  `photo` blob NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id_community`, `id_personal`, `name_community`, `contac_person`, `description`, `privacy`, `legality`, `photo`, `status`) VALUES
(1, 1, 'beshihnesia', 0, '', 'invite only', NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `information`
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
-- Dumping data for table `information`
--

INSERT INTO `information` (`id_information`, `name_information`, `description`, `photo`, `date`, `value`, `category`) VALUES
(14, 'Botol Bekas', 'Asiyap', 0x70616e7461692d63656d6172612d62616e797577616e67692e706e67, '2019-08-15', NULL, 'Voucher & Promo'),
(15, 'Botol Bekas', 'Poin yang diperoleh lumayan besar', 0x70656c75616e675f6269736e69735f626f746f6c5f706c617374696b5f62656b61732e6a7067, '2019-08-15', NULL, 'Barang'),
(17, 'Kaca', 'Cukup tinggi poinya', 0x7065636168616e5f6b616361312e6a7067, '2019-08-15', '10', 'Barang');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumlah_community`
-- (See below for the actual view)
--
CREATE TABLE `jumlah_community` (
`jumlah_community` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumlah_event`
-- (See below for the actual view)
--
CREATE TABLE `jumlah_event` (
`jumlah_event` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumlah_personal`
-- (See below for the actual view)
--
CREATE TABLE `jumlah_personal` (
`jumlah_personal` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
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
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id_personal`, `name`, `address`, `contac person`, `email`, `password`, `point`, `role_id`) VALUES
(1, 'Admin', 'Jember', 815158685, 'ajip2606@gmail.com', '12345', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_member`
--

CREATE TABLE `status_member` (
  `id_status` int(11) NOT NULL,
  `id_community` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `status_member` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_announcement`
--

CREATE TABLE `tb_announcement` (
  `id_announcement` bigint(20) NOT NULL,
  `id_community` int(11) DEFAULT NULL,
  `id_personal` int(11) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `announcement` text,
  `picture` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
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

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `id_community`, `name_event`, `photo`, `description`, `address`, `time_date`, `longlat`, `status_event`) VALUES
(1, 1, 'Event 1', '', 'asdasdasd', 'asd', '', '', ''),
(2, NULL, 'Event 2', '', '', 'qewqweqweqwe', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trans_event`
--

CREATE TABLE `trans_event` (
  `id_trans_event` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `jumlah_community`
--
DROP TABLE IF EXISTS `jumlah_community`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah_community`  AS  select count(`community`.`id_community`) AS `jumlah_community` from `community` ;

-- --------------------------------------------------------

--
-- Structure for view `jumlah_event`
--
DROP TABLE IF EXISTS `jumlah_event`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah_event`  AS  select count(`tb_event`.`id_event`) AS `jumlah_event` from `tb_event` ;

-- --------------------------------------------------------

--
-- Structure for view `jumlah_personal`
--
DROP TABLE IF EXISTS `jumlah_personal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah_personal`  AS  select count(`personal`.`id_personal`) AS `jumlah_personal` from `personal` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id_community`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id_information`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indexes for table `status_member`
--
ALTER TABLE `status_member`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `id_community` (`id_community`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indexes for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  ADD PRIMARY KEY (`id_announcement`),
  ADD KEY `id_community` (`id_community`),
  ADD KEY `id_personal` (`id_personal`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_community` (`id_community`);

--
-- Indexes for table `trans_event`
--
ALTER TABLE `trans_event`
  ADD PRIMARY KEY (`id_trans_event`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_personal` (`id_personal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id_community` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_member`
--
ALTER TABLE `status_member`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  MODIFY `id_announcement` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trans_event`
--
ALTER TABLE `trans_event`
  MODIFY `id_trans_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community`
--
ALTER TABLE `community`
  ADD CONSTRAINT `community_ibfk_1` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Constraints for table `status_member`
--
ALTER TABLE `status_member`
  ADD CONSTRAINT `status_member_ibfk_1` FOREIGN KEY (`id_community`) REFERENCES `community` (`id_community`),
  ADD CONSTRAINT `status_member_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Constraints for table `tb_announcement`
--
ALTER TABLE `tb_announcement`
  ADD CONSTRAINT `tb_announcement_ibfk_1` FOREIGN KEY (`id_community`) REFERENCES `community` (`id_community`),
  ADD CONSTRAINT `tb_announcement_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Constraints for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD CONSTRAINT `tb_event_ibfk_1` FOREIGN KEY (`id_community`) REFERENCES `community` (`id_community`);

--
-- Constraints for table `trans_event`
--
ALTER TABLE `trans_event`
  ADD CONSTRAINT `trans_event_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `tb_event` (`id_event`),
  ADD CONSTRAINT `trans_event_ibfk_2` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
