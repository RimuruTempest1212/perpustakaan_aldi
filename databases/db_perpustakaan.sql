-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 02:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `gambar`) VALUES
(12406, 'SMK NU TASIKMALAYA', 'sadwad', 'asas', 2025, 'buku_1708585950.png'),
(12407, 'Es Jeruk', 'sadwad', 'asas', 2025, 'buku_1708585964.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `kategori_id` int(11) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`kategori_id`, `namakategori`) VALUES
(1, 'Novel'),
(2, 'Puisi'),
(3, 'Buku Pelajaran'),
(4, 'Komik'),
(5, 'Majalah');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribukurelasi`
--

CREATE TABLE `kategoribukurelasi` (
  `kategoribuku_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `koleksi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `user_id`, `buku_id`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(2, 1111111, 11111, '2024-02-14', '2024-02-29', 'Sudah dikembalikan'),
(3, 222222, 2222222, '2024-02-08', '2024-02-15', 'Sudah dikembalikan'),
(4, 3333, 3333, '2024-02-14', '2024-02-29', 'Sudah dikembalikan'),
(11, 213, 3123, '2024-02-01', '2024-02-02', 'Belum dikembalikan'),
(13, 21112, 213123, '2024-02-14', '2024-02-29', 'Sudah dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `ulasan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `role_id`, `is_active`, `date_created`, `image`) VALUES
(1, 'auf_muhaemin', 'uhuy12345', 'aufmuhaemin15@gmail.com', 'auf muhaemin', 'jalan. paseh gang. fauzan 1', 1, 0, 0, ''),
(2, 'alditempest', 'tempest123', 'tempestaldi12@gmail.com', 'aldi tempest', 'paseh babakan', 1, 0, 0, ''),
(3, 'fareltsanyangkasa', 'dilan1990', 'fareltsany13@gmail.com', 'Farel Tsany Angkasa', 'Bojong Tritura', 1, 0, 0, ''),
(4, 'galihnugraha', 'senpai123', 'galihnugraha14@gmail.com', 'Muhammad Galih Nugraha', 'Leuwianyar', 1, 0, 0, ''),
(5, 'haikalslebew', 'haikalslebew12', 'slebewhaikal@gmail.com', 'Muhammad Haikal ', 'Cihaurbeuti', 1, 0, 0, ''),
(6, '', '$2y$10$HosByebRYOXm0oZSDDEDA.iF5hZ87Yo8kOBM5IGlwQStKK2CRqGie', 'aldianfal3@gmail.com', '???????????????????????? ????????????????????', '', 2, 1, 1708865688, 'default.jpg'),
(9, 'walkers', '$2y$10$x4VG3oLYOng7cJURN.ME/OqGyrMfCvi6z.nA4Q2mKUvxXMn7QTUQm', 'aldisaputrawalker@gmail.com', 'aldi', '', 2, 1, 1708865912, 'default.jpg'),
(12, 'aldi004', '$2y$10$0XhGsF6gkrf.bakr264L.us4I5R.31HPbZEEuVmtjlYmRRYJUdada', 'Levi@gmail.com', 'aldi', '', 2, 1, 1708866879, 'default.jpg'),
(13, 'RA12345678', '$2y$10$UgWnifUdZBhlVmyLVZ1Nuefq/DTUPc/OKVGiuhwk6qEXuFRjCTvU.', 'diszaid@gmail.com', 'rimuru', '', 2, 1, 1708867002, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12408;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
