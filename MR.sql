-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2018 pada 13.13
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `harga` int(12) NOT NULL,
  `image` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `produk`, `spesifikasi`, `harga`, `image`) VALUES
(24, 'Smartphone LG pro', 'Ram 2gb Internal 64', 80, 'hp LG.jpg'),
(25, 'Keyboard and Mouse', 'DPI 1600 sensitif', 50, 'keybd1.jpg'),
(26, 'Keyboard Gaming', 'Sensitifity', 90, 'kb.jpg'),
(27, 'Mophone', 'Ram 4gb Internal 32', 100, 'mophone.jpg'),
(28, 'Mouse', 'DPI 2700', 40, 'mouse.jpg'),
(29, 'Camera Sony', 'Good View', 150, 'sony.jpg'),
(30, 'Speaker Gaming', 'Bass TRible', 200, 'speak.jpg'),
(32, 'Ultra HD Go Pro', '4k ultra high', 100, 'uh.jpg'),
(36, 'Smartphone Nubia', 'Network 4G', 90, 'nubia.jpg'),
(37, 'Mophone', 'Ram 2gb', 85, 'mp1.jpg'),
(38, 'Smartphone OPPO', 'Ram 2gb', 76, 'oppo.jpg'),
(39, 'Smartphone Nubia', 'Ram 2gb', 89, 'nubia.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `info` varchar(100) NOT NULL,
  `harga` int(16) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `produk`, `info`, `harga`, `image`) VALUES
(5, 'Asus ROG Pro v4', 'Diskon 15%', 450, 'rog2.jpg'),
(6, 'Asus ROG Ultra HD', 'bonus 40% beli 2', 500, 'rog2.jpg'),
(7, 'Asus Core i3', 'Legendary Diskon 20%', 100, 'basus.jpg'),
(8, 'Smartphone Mophone', 'Network 4G ram 2gb', 99, 'mp1.jpg'),
(9, 'Smartphone OPPO', 'Ram 4gb', 80, 'oppo.jpg'),
(10, 'HT50_HOMTOM Smartphone', 'Network 4G Ram 2gb', 85, 'HT50_HOMTOM.jpg'),
(11, 'Smartphone Nubia', 'Network 4G', 100, 'nubia.jpg'),
(12, 'Asus Zenfone 3', 'Ram 3gb', 75, 'Asus.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(20) NOT NULL,
  `pesan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `telpon`, `email`, `subjek`, `pesan`) VALUES
(6, 'Akhmad', '089778665', 'nur.aminnudin02@gmail.com', 'Complain', 'Pelayanan  Kurang Baik'),
(7, 'Syahreza Panca', '089776655', 'dul@gmail.com', 'Pelayanan', 'Pelayanan Sangat Baik Trimakasih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_pelanggan`
--

CREATE TABLE `list_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telpon` varchar(25) NOT NULL,
  `alamat` varchar(6) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `tipe_alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_pelanggan`
--

INSERT INTO `list_pelanggan` (`id`, `nama`, `telpon`, `alamat`, `kota`, `tipe_alamat`) VALUES
(1, 'Nur Amin Nudin', '089777777', '', 'suroboyo', 'Home'),
(2, 'Nur Amin Nudin jjj', '089777777', '', 'suroboyo', 'Home'),
(3, 'Nur Amin Nudin bbbb', '0897777770000', 'semara', 'suroboyo', 'Home');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_pesanan`
--

CREATE TABLE `list_pesanan` (
  `id` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$z1QKIM0g3hXtVgeQ8mtcBeqhHTD4L4udZNdtoi1ZDxy9EBmZF3dES'),
(4, 'super', '$2y$10$ita3xMSzrW8S/AUO8PLOWOQACuadMC1F2XOe9VZVlgzTV2ENMaIQ2'),
(7, 'pakijo', '$2y$10$09F5qjekgi9EtiDnmhbUJ.2nFS3XOmxVoRizLmmmQMSjT5QYQFB0m');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pelanggan`
--

CREATE TABLE `user_pelanggan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_pelanggan`
--

INSERT INTO `user_pelanggan` (`id`, `username`, `email`, `password`) VALUES
(1, 'aminnudin', 'amin@gmail.com', '$2y$10$vjcXf5kSmY1QgWp/YtThgeez1Jm3op4zW/xw45tGClxl57PvCMDOC'),
(2, 'pakijo', 'ijo@gmail.com', '$2y$10$d22v94pPSR0iG1yTwGOTLu.crpDtgzSzBNFcYQ4KGmnzEjm2W3ws2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_pelanggan`
--
ALTER TABLE `list_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_pesanan`
--
ALTER TABLE `list_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pelanggan`
--
ALTER TABLE `user_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_pelanggan`
--
ALTER TABLE `list_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_pesanan`
--
ALTER TABLE `list_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_pelanggan`
--
ALTER TABLE `user_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
