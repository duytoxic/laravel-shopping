-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 10:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `level`, `description`, `created_at`, `updated_at`) VALUES
(1, 'CodeLean', 'CodeLean@gmail.com', NULL, '$2y$10$eFsq6BtnOo.WMi2cFDhBfe7z89Jc78jmUhiTN4htuSmu.QUw6XLvC', NULL, NULL, '1', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$zn9sXMu1bL80Gtxc9ZqveOoP1bIXQ7L8oA.FvOuFxXLwap4f8Mc0i', NULL, NULL, '1', NULL, NULL, NULL),
(3, 'Shane Lynch', 'ShaneLynch@gmail.com', NULL, '$2y$10$aMvPMkl/FXXfGkfu8k.NkuZbg8LH90hHFtlBb5EToqC7Ah/kyRC6a', NULL, 'avatar-0.png', '1', 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo', NULL, NULL),
(4, 'Brandon Kelley', 'BrandonKelley@gmail.com', NULL, '$2y$10$Pl10FO/eOwYdd/7mN3oJZO0aIdFKClwCblfLkU3Tt4OwO8z0nde.6', NULL, 'avatar-1.png', '1', NULL, NULL, NULL),
(5, 'Roy Banks', 'RoyBanks@gmail.com', NULL, '$2y$10$K90wiAZekCnExWlKDZAyvOwrrs42VYyF1VxbrF9aKVinOCVPA1eaC', NULL, 'avatar-2.png', '1', NULL, NULL, NULL),
(6, 'Duy', 'user2022@gmail.com', NULL, '$2y$10$day9iM1tdTdz82PXS2hAkebT1JjJpuZm1hjRpKdv1OqgF5O6YU7qm', NULL, NULL, '2', NULL, '2022-12-19 17:50:56', '2022-12-19 17:50:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;