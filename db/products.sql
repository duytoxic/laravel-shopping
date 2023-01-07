-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 01:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shopbangiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `sku`, `status`, `tag`, `created_at`, `updated_at`) VALUES
(1, 2, 'Nike Jordan 1 Low Đen Trắng REP', NULL, '', 850000, 20, 550000, '00012', 0, 'Giay', NULL, '2023-01-06 16:40:10'),
(2, 2, 'Adidas 8681 Ghi Kẻ Trắng SF', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 500000, 20, 450000, NULL, 1, 'Clothing', NULL, '2022-12-21 02:44:33'),
(3, 2, 'Nike Jordan 1 Low Xám REP', 'Giày Nike Jordan 1 Low Xám REP chất lượng cao', NULL, 350000, 20, 300000, NULL, 1, 'Clothing', NULL, '2023-01-06 16:38:13'),
(4, 1, 'Adidas Ultra Boost 6.0 Trắng Xanh REP', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 400000, 20, 400000, NULL, 1, 'Accessories', NULL, '2022-12-21 02:45:13'),
(5, 5, 'Giày MLB Mustard NY Da Lộn Kem REP 1:1', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 900000, 20, 650000, NULL, 0, 'Accessories', NULL, '2023-01-06 16:37:36'),
(6, 2, 'Adidas Alphabounce Beyond REP Đen Kem', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 1000000, 20, 640000, NULL, 1, 'Clothing', NULL, '2022-12-21 02:45:53'),
(7, 7, 'Giày MLB Bigball Chunky Mono B Nâu REP', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 1000000, 20, 580000, NULL, 1, 'HandBag', NULL, '2023-01-06 16:37:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
