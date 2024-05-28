-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 09:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_203040177`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `deksripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `gambar`, `nama`, `merek`, `warna`, `deksripsi`, `harga`) VALUES
(1, '609f70b07af63.jpg', 'Nike Joyride Dual Run', 'Nike', 'Black/Barely Volt/Glacier Ice/White', 'Speed and movement is number 1', 'Rp. 3.000.000'),
(2, '2.jpg', 'RESPONSE RUN SHOES', 'Adidas', 'Pink', 'comfortable to use when running on any terrain', 'Rp. 480.000'),
(3, '3.png', 'Nike Air Zoom Pegasus', 'Nike', 'Pink', 'Your workhorse with wings returns.The Nike Air Zoom Pegasus continues to put a spring in your step, using the same responsive foam as its predecessor', 'Rp. 1.799.000'),
(4, '4.jpg', 'Nike Air Zoom Tempo NEXT%', 'Nike', 'Hyper Turquoise/Chlorine Blue/White/Black', 'The Nike Air Zoom Tempo NEXT% mixes durability with a design that helps push you towards your personal best.', 'Rp. 2.999.000'),
(5, '5.jpg', 'Nike Zoom', 'Nike', 'Grey/Blue/Black', 'The Nike Zoom gives distance runners race-day comfort and durability.', 'Rp. 2.499.000'),
(6, '6.jpg', 'Nike Air Zoom Pegasus 38', 'Nike', 'White/Pure Platinum/Midnight Navy/Wolf Grey', 'Your workhorse with wings returns.The Nike Air Zoom Pegasus 38 continues to put a spring in your step, using the same responsive foam as its predecessor', 'Rp. 1.799.000'),
(7, '7.jpg', 'UltraBoost Shoes', 'Adidas', 'White', 'These running shoes combine comfort and high-performance technology for a best-ever-run feeling', 'Rp. 2.240.000'),
(8, '8.jpg', 'Nike Air Zoom Pegasus 38 FlyEase', 'Nike', 'Black/White/Chlorine Blue/Metallic Silver', 'The Nike Air Zoom Pegasus 38 continues to put a spring in your step, using the same responsive foam as its predecessor. ', 'Rp. 1.799.000'),
(9, '9.jpg', 'UltraBoost Shoes', 'Adidas', 'Black', 'These running shoes combine comfort and high-performance technology for a best-ever-run feeling', 'Rp. 2.240.000'),
(10, '10.jpg', 'Nike Air Zoom X', 'Nike', 'White/Red/Blue Ice', 'The Nike Air Zoom Pegasus 38 continues to put a spring in your step, using the same responsive foam as its predecessor', 'Rp. 2.199.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'kikiki', '$2y$10$46ledLCblH6qFDvSq7sdSOWD4tHdBebKSo7FX92t81tOhpyuhATjS'),
(3, 'ssslwa123', '$2y$10$hvnZRsASkZi05/1GkPG2IO/Ni0z/DYKzX9jX1zT6bHJnYNY4VWrcW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
