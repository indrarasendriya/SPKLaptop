-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:05 PM
-- Server version: 10.1.38-MariaDB
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
-- Database: `spk_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses_menu_user`
--

CREATE TABLE `akses_menu_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses_menu_user`
--

INSERT INTO `akses_menu_user` (`id`, `role_id`, `id_menu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(128) NOT NULL,
  `nama_kriteria` varchar(128) NOT NULL,
  `attribut` varchar(128) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `attribut`, `bobot_kriteria`) VALUES
(1, 'C01', 'Prosesor', 'Benefit', 3),
(2, 'C02', 'RAM', 'Benefit', 1.5),
(3, 'C03', 'Memory', 'Benefit', 0.5),
(4, 'C04', 'Grapichs', 'Benefit', 1),
(5, 'C05', 'Layar', 'Benefit', 0.5),
(6, 'C06', 'Harga', 'Cost', 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `tipe` varchar(128) NOT NULL,
  `prosesor` varchar(128) NOT NULL,
  `ram` varchar(128) NOT NULL,
  `memory` varchar(128) NOT NULL,
  `graphics` varchar(128) NOT NULL,
  `layar` varchar(128) NOT NULL,
  `harga` varchar(128) NOT NULL,
  `kebutuhan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `merk`, `tipe`, `prosesor`, `ram`, `memory`, `graphics`, `layar`, `harga`, `kebutuhan`) VALUES
(1, 'Lenovo', 'S145', 'Intel Celeron N4205U 1,8Ghz', '4GB DDR4 2666Mhz', '256GB SSD', 'Intel UHD Graphics 610', '14', 'Rp. 3.999.999', '1'),
(2, 'Asus', 'AF32UL', 'Core I7 8550U', '16GB Dual Channel 2400Mhz', '512 NVME PCIE', 'Nvidia MX 150 2gb DDR5', '14\" 1080p IPS', 'Rp.15.499.000', '1'),
(3, 'Dell', 'Latitude', 'Intel Core I5 2400 2,6Ghz', '8GB DDR3', '500GB HDD', 'Intel HD2400', '14\" 1337x768', 'Rp.5.000.000', '1'),
(4, 'Lenovo', 'Ideapad 130', 'Intel Core I3 6200U ', '4GB DDR4 2666Mhz', '500GB HDD', 'Intel UHD Graphics 520', '14', 'Rp. 6.000.000', '3'),
(9, 'Toshiba', 'Satelite', 'Intel Core i3 4200u', '4gb DDR3', '500gb HDD', 'Intel Graphics', '15.6\" FHD (1920x1080), 144Hz, IPS-Level', 'Rp. 7.500.000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu_user`
--

CREATE TABLE `menu_user` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_user`
--

INSERT INTO `menu_user` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(5) NOT NULL,
  `id_laptop` int(5) NOT NULL,
  `C1` double NOT NULL,
  `C2` double NOT NULL,
  `C3` double NOT NULL,
  `C4` double NOT NULL,
  `C5` double NOT NULL,
  `C6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_laptop`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`) VALUES
(1, 1, 30, 20, 20, 10, 10, 3.999),
(2, 2, 25, 20, 10, 10, 10, 3.649),
(3, 3, 60, 40, 20, 10, 15, 5.425),
(4, 4, 60, 20, 20, 20, 30, 5.349),
(9, 9, 40, 20, 20, 10, 30, 4.999),
(10, 11, 40, 40, 30, 50, 50, 16.5),
(11, 11, 30, 20, 30, 20, 20, 3.3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `role_kebutuhan`
--

CREATE TABLE `role_kebutuhan` (
  `id` int(11) NOT NULL,
  `kebutuhan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_kebutuhan`
--

INSERT INTO `role_kebutuhan` (`id`, `kebutuhan`) VALUES
(1, 'Design'),
(2, 'Office'),
(3, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu_user`
--

CREATE TABLE `sub_menu_user` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu_user`
--

INSERT INTO `sub_menu_user` (`id`, `id_menu`, `judul`, `url`, `icon`) VALUES
(1, 1, 'Dashboard', 'admin/index', 'fa fa-home'),
(2, 1, 'Data Kriteria', 'admin/kriteria', 'fa fa-asterisk'),
(3, 1, 'Data Laptop', 'admin/laptop', 'fa fa-laptop'),
(4, 1, 'Penilaian Laptop', 'admin/nilaiLaptop', 'fa fa-calculator'),
(6, 1, 'Perhitungan SAW', 'admin/perhitungan', 'fa fa-book'),
(7, 1, 'Kelola Member', 'admin/member', 'fa fa-user'),
(8, 2, 'Home', 'member/index', 'fa fa-home'),
(9, 2, 'Perhitungan SAW', 'member/perhitungan', 'fa fa-calculator');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_laptop`
--

CREATE TABLE `tipe_laptop` (
  `id_tipe` int(11) NOT NULL,
  `merk_laptop` varchar(128) NOT NULL,
  `tipe_laptop` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_laptop`
--

INSERT INTO `tipe_laptop` (`id_tipe`, `merk_laptop`, `tipe_laptop`) VALUES
(1, 'Asus', 'ROG Strix Hero 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'indra', 'indra@gmail.com  ', 'userlogin2.png', '$2y$10$W5ijM6f7jIehZlU00FAVN.WAXMlm0/UWSVACxFQ4Pqk3IyW22t50q', 1, 1, '2020-01-07'),
(13, 'Indra Rasendriya', 'indra.rasendriya@students.amikom.ac.id   ', 'userlogin1.png', '$2y$10$hhcn/CMw72FJSE0wnARQyu9h0aWF2dY5s50qvEVisMB/fNucX7o06', 2, 1, '1111-11-11'),
(14, 'Indra Rasendriya', 'indra.rasendriya@students.amikom.ac.id', 'laptop_2.jpeg', '$2y$10$F4oUSi/nPUfMpeE.vH2if.GuPMvVf2NW8Ua3JkXjrFmZ1hgQ9B1WK', 2, 1, '2019-12-07'),
(15, 'Andrianno', 'andrian@gmail.com', 'userlogin.png', '$2y$10$Z.vhPcvaMksohr6hI/.qBumUMGWID631vlHv1MeqGdfwcCzGo.TTq', 2, 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses_menu_user`
--
ALTER TABLE `akses_menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indexes for table `menu_user`
--
ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_laptop` (`id_laptop`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_kebutuhan`
--
ALTER TABLE `role_kebutuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu_user`
--
ALTER TABLE `sub_menu_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_laptop`
--
ALTER TABLE `tipe_laptop`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses_menu_user`
--
ALTER TABLE `akses_menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu_user`
--
ALTER TABLE `menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_kebutuhan`
--
ALTER TABLE `role_kebutuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_menu_user`
--
ALTER TABLE `sub_menu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tipe_laptop`
--
ALTER TABLE `tipe_laptop`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
