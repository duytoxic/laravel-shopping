-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 01:31 AM
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
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 495, 495, '2022-12-19 18:31:04', '2022-12-19 18:31:04'),
(2, 2, 2, 1, 13, 13, '2022-12-21 02:32:31', '2022-12-21 02:32:31'),
(3, 2, 8, 1, 35, 35, '2022-12-21 02:32:31', '2022-12-21 02:32:31'),
(4, 2, 3, 1, 34, 34, '2022-12-21 02:32:31', '2022-12-21 02:32:31'),
(5, 3, 1, 1, 550000, 550000, '2022-12-21 03:59:52', '2022-12-21 03:59:52'),
(6, 4, 2, 1, 450000, 450000, '2023-01-05 10:12:48', '2023-01-05 10:12:48'),
(7, 5, 2, 1, 450000, 450000, '2023-01-05 12:08:41', '2023-01-05 12:08:41'),
(8, 6, 4, 1, 400000, 400000, '2023-01-06 16:55:45', '2023-01-06 16:55:45'),
(9, 7, 3, 1, 300000, 300000, '2023-01-06 16:57:17', '2023-01-06 16:57:17'),
(10, 8, 3, 1, 300000, 300000, '2023-01-06 16:58:52', '2023-01-06 16:58:52'),
(11, 9, 2, 1, 450000, 450000, '2023-01-06 17:03:28', '2023-01-06 17:03:28'),
(12, 10, 2, 1, 450000, 450000, '2023-01-06 17:04:53', '2023-01-06 17:04:53'),
(13, 11, 2, 1, 450000, 450000, '2023-01-06 17:05:00', '2023-01-06 17:05:00'),
(14, 12, 2, 1, 450000, 450000, '2023-01-06 17:06:05', '2023-01-06 17:06:05'),
(15, 13, 2, 1, 450000, 450000, '2023-01-06 17:07:09', '2023-01-06 17:07:09'),
(16, 14, 2, 1, 450000, 450000, '2023-01-06 17:07:33', '2023-01-06 17:07:33'),
(17, 15, 2, 1, 450000, 450000, '2023-01-06 17:08:03', '2023-01-06 17:08:03'),
(18, 16, 2, 1, 450000, 450000, '2023-01-06 17:08:58', '2023-01-06 17:08:58'),
(19, 17, 2, 1, 450000, 450000, '2023-01-06 17:09:49', '2023-01-06 17:09:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
