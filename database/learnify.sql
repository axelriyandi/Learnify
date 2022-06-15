-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 12:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnify`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, '10'),
(2, '11'),
(3, '12');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `url` varchar(256) NOT NULL,
  `judul` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_pelajaran`, `id_kelas`, `url`, `judul`) VALUES
(1, 2, 1, 'bin-kls10-2.mp4', 'Bahasa Indonesia Kelas 10 SMA SMK Rangkuman Materi Semester 1 dan 2 - Video Pelajaran Sekolah K13'),
(2, 2, 1, 'bin-kls10-1.mp4', 'Materi Bahasa Indonesia kelas X | Laporan Hasil Observasi'),
(3, 2, 2, 'bin-kls11-1.mp4', 'Materi Proposal Kelas 11 SMA ~ Pelajaran Bahasa Indonesia'),
(4, 2, 2, 'bin-kls11-2.mp4', 'Bahasa Indonesia Kelas 11 - Pengertian dan Isi Teks Prosedur - SMA Doa Bangsa | Ismiati S P'),
(5, 2, 3, 'bin-kls12-1.mp4', 'Bahasa Indonesia Kelas 12 - Buku Fiksi'),
(6, 2, 3, 'bin-kls12-2.mp4', 'Bahasa Indonesia Kelas 12 - Menikmati Novel'),
(7, 1, 1, 'mtk-kls10-1.mp4', 'Matematika Kelas 10 SMA SMK Rangkuman Materi Semester 1 dan 2'),
(8, 1, 1, 'mtk-kls10-2.mp4', 'Matematika Kelas 10| Fungsi Linier'),
(9, 1, 2, 'mtk-kls12-1.mp4', 'Matematika Kelas 12| Pythagoras'),
(10, 1, 3, 'mtk-kls12-1.mp4', ''),
(11, 1, 3, 'mtk-kls12-2.mp4', ''),
(12, 3, 1, 'eng-kls10-1.mp4', 'Bahasa inggris Kelas 10 - Desriptive Text'),
(13, 3, 1, 'eng-kls10-2.mp4', 'Bahasa inggris Kelas 10 - Recount Text'),
(14, 3, 2, 'eng-kls11-1.mp4', 'Bahasa inggris Kelas 10 - Passive Voice'),
(15, 3, 1, 'eng-kls11-2.mp4', 'Bahasa inggris Kelas 11 - Letter'),
(16, 3, 3, 'eng-kls12-1.mp4', 'Bahasa inggris Kelas 12 - If Clauses & If Conditional'),
(17, 4, 1, 'bio-kls10-1.mp4', 'Biologi Kelas 10 - Pengertian Biologi'),
(18, 4, 1, 'bio-kls10-2.mp4', 'Biologi Kelas 10 - Jamur'),
(19, 4, 2, 'bio-kls11-1.mp4', 'Biologi Kelas 11 - Fungsi Sel'),
<<<<<<< HEAD
(20, 4, 2, 'bio-kls11-2.mp4', 'Biologi Kelas 11 - Sismtem Ekskresi'),
=======
(20, 4, 2, 'bio-kls11-2.mp4', 'Biologi Kelas 11 - Sistem Ekskresi'),
>>>>>>> 73f71ad (Tugas Uas)
(21, 4, 3, 'bio-kls12-1.mp4', 'Biologi Kelas 12 - Bioteknologi'),
(22, 4, 3, 'bio-kls12-2.mp4', 'Biologi Kelas 12 - Materi Genetika');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `message` varchar(256) NOT NULL,
  `attach` varchar(128) NOT NULL,
  `date_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `attach`, `date_message`) VALUES
(7, 'admin', 'admin@gmail.com', 'test', 'bg.jpeg', 1654507537);

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(11) NOT NULL,
  `pelajaran` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `pelajaran`, `foto`) VALUES
(1, 'Matematika', 'mat.jpg'),
(2, 'Bahasa Indonesia', 'bin.jpg'),
(3, 'Bahasa Inggris', 'eng.jpg'),
(4, 'Biologi', 'bio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$0RdUOvJv6nvNXVzyvj8CIumc36tucNzuYHzLydDK4.VqlbG3dS2V2', 1, 1, 1635680420);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Home', 'user', 'fas fa-fw fa-home', 1),
(3, 2, 'Pelajaran', 'user/pelajaran', 'fas fa-fw fa-book', 1),
(8, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(9, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(10, 2, 'Kontak Kami', 'user/kontak', 'fas fa-fw fa-phone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'wildanfm6@gmail.com', 'IiLbWVEJQFAubpwGuwTGYB3aJS2TLLbG48OxmrK8qjk=', 1636364157);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
