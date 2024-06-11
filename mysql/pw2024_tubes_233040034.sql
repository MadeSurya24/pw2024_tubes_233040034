-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 04:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040034`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `foto_admin`) VALUES
(1, 'Admin1', 'admin1@gmail.com', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'foto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foto_produk`
--

CREATE TABLE `foto_produk` (
  `id_foto_produk` int NOT NULL,
  `id_produk` int NOT NULL,
  `nama_foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foto_produk`
--

INSERT INTO `foto_produk` (`id_foto_produk`, `id_produk`, `nama_foto_produk`) VALUES
(1, 30, 'SP522.png'),
(2, 30, 'SP522-black.png'),
(3, 30, 'SP522-white.png'),
(4, 32, 'sp500.png'),
(5, 32, 'sp500black.png'),
(6, 32, 'sp500white.png'),
(7, 33, 'X-Series-black.png'),
(8, 33, 'X-Series-silver.png'),
(9, 33, 'X-Series-gold.png'),
(10, 36, 'VD-black.png'),
(11, 36, 'VD-gold.png'),
(12, 36, 'VD-red.png'),
(13, 37, 'S2LINE.png'),
(14, 37, 'S2-Red.png'),
(15, 37, 'S2-white.png'),
(16, 38, 'S3-Series-red.png'),
(17, 38, 'S3-Series-silver.png'),
(18, 38, 'S3-Series-black.png'),
(19, 39, 'r1-red.png'),
(20, 39, 'r1-blue.png'),
(21, 39, 'r1-black.png'),
(22, 40, 's2-brake-disc-red.png'),
(23, 40, 's2-brake-disc-black.png'),
(24, 40, 's2-brake-disc-gold.png'),
(25, 41, 'S1FULLSET.png'),
(26, 41, 'S1white.png'),
(27, 41, 'S1black.png'),
(34, 44, 'AHG14-silver.png'),
(35, 44, 'AHG14-red.png'),
(36, 44, 'AHG14-blue.png'),
(37, 45, 'HG55-red.png'),
(38, 45, 'HG55-Blue.png'),
(39, 45, 'HG55-black.png'),
(40, 46, 'AHG66-red.png'),
(41, 46, 'AHG66-blue.png'),
(42, 46, 'AHG66-black.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'RIM AND ACCESSORIES'),
(2, 'SUSPENSIONS'),
(5, 'BRAKES SYSTEM'),
(6, 'FOOT CONTROLS'),
(7, 'HAND CONTROLS');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int NOT NULL,
  `id_user` int NOT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int NOT NULL,
  `id_pembelian` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int NOT NULL,
  `id_kategori` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`, `id_kategori`) VALUES
(30, 'SP522', 1700000, 'SP522.png', 'PROVEN ON RACE TRACK AND STREET', 5, 1),
(32, 'SP500', 1900000, 'sp500.png', 'PROVEN ON RACE TRACK AND STREET', 5, 1),
(33, 'X SERIES', 2000000, 'X-Series-black.png', 'PROVEN ON RACE TRACK AND STREET', 5, 1),
(36, 'VD SERIES', 3078000, 'VD-black.png', 'Big Damper Piston Diameter 35mm\r\nAdjustable Spring Preload\r\nPiston Rod Diameter 14mm', 5, 2),
(37, 'S2 LINE', 2200000, 'S2LINE.png', 'Big Damper Piston Diameter 35mm\r\nAdjustable Spring Preload\r\nPiston Rod Diameter 14mm', 5, 2),
(38, 'S3 SERIES', 1600000, 'S3-Series-red.png', '25MM double piston\r\nSingle piece monoblock\r\nPlug and Play\r\nAnnodised aluminium parts', 5, 5),
(39, 'R1 SERIES', 1600000, 'r1-red.png', '25MM double piston\r\nSingle piece monoblock\r\nPlug and Play\r\nAnnodised aluminium parts', 5, 5),
(40, 'S2 SERIES', 1600000, 's2-brake-disc-red.png', '25MM double piston\r\nSingle piece monoblock\r\nPlug and Play\r\nAnnodised aluminium parts', 5, 5),
(41, 'S1 FULL SET', 3200000, 'S1FULLSET.png', 'Made from 7075-T6 aluminium\r\nSleek and sporty design\r\nBetter control and grip\r\nLightweight\r\nRace ready and daily us', 5, 6),
(44, 'AHG14', 160000, 'AHG14-silver.png', 'Available in various anodised colours\r\nErgonomic design and maximum grip\r\nMade from high quality CNC machined billet aluminium', 5, 7),
(45, 'HG55', 130000, 'HG55-red.png', 'Available in various anodised colours\r\nErgonomic design and maximum grip\r\nMade from high quality CNC machined billet aluminium', 5, 7),
(46, 'AHG66', 160000, 'AHG66-red.png', 'Available in various anodised colours\r\nErgonomic design and maximum grip\r\nErgonomic design and maximum grip', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(0, 'admin'),
(1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telpon` varchar(255) NOT NULL,
  `alamat_pelanggan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto_pelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `no_telpon`, `alamat_pelanggan`, `foto_pelanggan`) VALUES
(24, 'Made Surya', 'madesurya24@gmail.com', '0510a2c612b23f00e43f80dedd72b8ff422822ff', '083189458909', 'Kota Bandung, Jl. Setiabudhi, Gegerkalong', 'foto.jpg'),
(25, 'Made Surya', 'made@gmail.com', '0510a2c612b23f00e43f80dedd72b8ff422822ff', '083116548765', 'Jl. Setiabudhi, Gegerkalong, Kota. Bandung', 'WhatsApp Image 2023-10-12 at 21.59.20_45fbaae5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD PRIMARY KEY (`id_foto_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `pembelian_produk_ibfk_2` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `produk_ibfk_1` (`id_kategori`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto_produk`
--
ALTER TABLE `foto_produk`
  MODIFY `id_foto_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD CONSTRAINT `pembelian_produk_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `pembelian_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
