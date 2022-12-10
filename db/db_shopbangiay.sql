-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 12:26 PM
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
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `image`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'The Personality Trait That Makes People Happier', 'blog-1.jpg', 'TRAVEL', '', NULL, NULL),
(2, 3, 'This was one of our first days in Hawaii last week.', 'blog-2.jpg', 'CodeLeanON', '', NULL, NULL),
(3, 3, 'Last week I had my first work trip of the year to Sonoma Valley', 'blog-3.jpg', 'TRAVEL', '', NULL, NULL),
(4, 3, 'Happppppy New Year! I know I am a little late on this post', 'blog-4.jpg', 'CodeLeanON', '', NULL, NULL),
(5, 3, 'Absolue collection. The Lancome team has been one…', 'blog-5.jpg', 'MODEL', '', NULL, NULL),
(6, 3, 'Writing has always been kind of therapeutic for me', 'blog-6.jpg', 'CodeLeanON', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs_comments`
--

CREATE TABLE `blogs_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_30_121554_create_orders_table', 1),
(6, '2022_11_30_121859_create_order_details_table', 1),
(7, '2022_11_30_122210_create_products_table', 1),
(8, '2022_11_30_123031_create_product_categories_table', 1),
(9, '2022_11_30_123148_create_product_images_table', 1),
(10, '2022_12_02_080934_create_product_details_table', 1),
(11, '2022_12_02_081138_create_product_comments_table', 1),
(12, '2022_12_02_081345_create_blogs_table', 1),
(13, '2022_12_02_081529_create_blogs_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calc_shipping_provinces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calc_shipping_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `calc_shipping_provinces`, `calc_shipping_district`, `street_address`, `postcode_zip`, `email`, `phone`, `payment_type`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Duy', 'Cao Mạnh', '24', 'Huyện Chương Mỹ', '33 Phan Huy Ích', NULL, 'info@invigroup.com', '+84987007985', 'pay_later', NULL, '2022-12-05 04:20:58', '2022-12-05 04:20:58'),
(2, 'Duy', 'Cao Mạnh', '24', 'Huyện Chương Mỹ', '33 Phan Huy Ích', NULL, 'thongthoathich24h@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-05 04:28:11', '2022-12-05 04:28:11'),
(3, 'Duy', 'Cao Mạnh', '41', 'Huyện Quỳ Hợp', '49 Phan Huy Chú, Trung Đô', NULL, 'info@invigroup.com', '123456789', 'pay_later', NULL, '2022-12-06 07:00:50', '2022-12-06 07:00:50'),
(4, 'Duy', 'Cao Mạnh', '41', 'Huyện Quỳ Hợp', '33 Phan Huy Ích', 'abx', 'duy.cm1010@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 05:18:27', '2022-12-10 05:18:27'),
(5, 'Duy', 'Cao Mạnh', '41', 'Huyện Quỳ Hợp', '33 Phan Huy Ích', 'abx', 'duy.cm1010@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 05:32:43', '2022-12-10 05:32:43'),
(6, 'Duy', 'Cao Mạnh', '41', 'Huyện Quỳ Hợp', '33 Phan Huy Ích', 'abx', 'duy.cm1010@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 05:35:16', '2022-12-10 05:35:16'),
(7, 'Duy', 'Cao Mạnh', '41', 'Huyện Quỳ Hợp', '33 Phan Huy Ích', 'abx', 'duy.cm1010@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 05:39:04', '2022-12-10 05:39:04'),
(8, 'Hoàng Đình', 'Bảo Trung', '41', 'Thành phố Vinh', '182 Lê Duẩn', NULL, 'thongthoathich24h@gmail.com', '0987007985', 'pay_later', NULL, '2022-12-10 10:14:03', '2022-12-10 10:14:03'),
(9, 'Hoàng Đình', 'Bảo Trung', '41', 'Thành phố Vinh', '182 Lê Duẩn', NULL, 'thongthoathich24h@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 10:16:47', '2022-12-10 10:16:47'),
(10, 'Duy', 'Cao Mạnh', '41', 'Thành phố Vinh', '33 Phan Huy Ích', NULL, 'thongthoathich24h@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 10:18:43', '2022-12-10 10:18:43'),
(11, 'Duy', 'Cao Mạnh', '41', 'Thành phố Vinh', '33 Phan Huy Ích', NULL, 'thongthoathich24h@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 10:33:11', '2022-12-10 10:33:11'),
(12, 'Hoàng Đình', 'Bảo Trung', '41', 'Thành phố Vinh', 'Quỳ Hợp', NULL, 'thongthoathich24h@gmail.com', '0347108602', 'pay_later', NULL, '2022-12-10 10:36:42', '2022-12-10 10:36:42'),
(13, 'Duy', 'Cao Mạnh', '41', 'Thành phố Vinh', '33 Phan Huy Ích', NULL, 'thongthoathich24h@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 11:01:58', '2022-12-10 11:01:58'),
(14, 'Duy', 'Cao Mạnh', '41', 'Thành phố Vinh', '33 Phan Huy Ích', NULL, 'thongthoathich24h@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 11:02:18', '2022-12-10 11:02:18'),
(15, 'Duy', 'Cao Mạnh', '41', 'Thành phố Vinh', '33 Phan Huy Ích', NULL, 'thongthoathich24h@gmail.com', '+84987007985', 'pay_later', NULL, '2022-12-10 11:15:44', '2022-12-10 11:15:44');

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
(1, 1, 2, 1, 13, 13, '2022-12-05 04:20:58', '2022-12-05 04:20:58'),
(2, 2, 1, 2, 495, 990, '2022-12-05 04:28:11', '2022-12-05 04:28:11'),
(3, 3, 2, 1, 13, 13, '2022-12-06 07:00:50', '2022-12-06 07:00:50'),
(4, 3, 1, 1, 495, 495, '2022-12-06 07:00:50', '2022-12-06 07:00:50'),
(5, 4, 7, 1, 35, 35, '2022-12-10 05:18:27', '2022-12-10 05:18:27'),
(6, 8, 2, 1, 13, 13, '2022-12-10 10:14:03', '2022-12-10 10:14:03'),
(7, 9, 2, 1, 13, 13, '2022-12-10 10:16:47', '2022-12-10 10:16:47'),
(8, 10, 2, 1, 13, 13, '2022-12-10 10:18:43', '2022-12-10 10:18:43'),
(9, 11, 2, 1, 13, 13, '2022-12-10 10:33:11', '2022-12-10 10:33:11'),
(10, 12, 1, 1, 495, 495, '2022-12-10 10:36:42', '2022-12-10 10:36:42'),
(11, 13, 5, 1, 35, 35, '2022-12-10 11:01:58', '2022-12-10 11:01:58'),
(12, 13, 9, 1, 34, 34, '2022-12-10 11:01:58', '2022-12-10 11:01:58'),
(13, 14, 5, 1, 35, 35, '2022-12-10 11:02:18', '2022-12-10 11:02:18'),
(14, 14, 9, 1, 34, 34, '2022-12-10 11:02:18', '2022-12-10 11:02:18'),
(15, 15, 1, 1, 495, 495, '2022-12-10 11:15:44', '2022-12-10 11:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 2, 'Pure Pineapple', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', '', 629.99, 20, 495, '00012', 1, 'Clothing', NULL, NULL),
(2, 2, 'Guangzhou sweater', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 35, 20, 13, NULL, 1, 'Clothing', NULL, NULL),
(3, 2, 'Guangzhou sweater', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 35, 20, 34, NULL, 1, 'Clothing', NULL, NULL),
(4, 1, 'Microfiber Wool Scarf', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 64, 20, 35, NULL, 1, 'Accessories', NULL, NULL),
(5, 3, 'Men\'s Painted Hat', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 44, 20, 35, NULL, 0, 'Accessories', NULL, NULL),
(6, 2, 'Converse Shoes', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 35, 20, 34, NULL, 1, 'Clothing', NULL, NULL),
(7, 1, 'Pure Pineapple', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 64, 20, 35, NULL, 1, 'HandBag', NULL, NULL),
(8, 1, '2 Layer Windbreaker', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 44, 20, 35, NULL, 1, 'Clothing', NULL, NULL),
(9, 1, 'Converse Shoes', 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor', NULL, 35, 20, 34, NULL, 1, 'Shoes', NULL, NULL),
(10, 1, 'Giày Adidas', 'abc', NULL, 1000000, 1, 800000, 'sp002', 1, NULL, '2022-12-06 14:22:12', '2022-12-06 14:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Giày nam', NULL, '2022-12-06 03:35:07'),
(2, 'Women', NULL, NULL),
(3, 'Kids abcdef', NULL, '2022-12-06 03:19:35'),
(5, 'Thời trang', '2022-12-05 11:06:56', '2022-12-05 11:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'BrandonKelley@gmail.com', 'Brandon Kelley', 'Nice !', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `size`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 'blue', 'S', 5, NULL, NULL),
(2, 1, 'blue', 'M', 5, NULL, NULL),
(3, 1, 'blue', 'L', 5, NULL, NULL),
(4, 1, 'blue', 'XS', 5, NULL, NULL),
(5, 1, 'yellow', 'S', 0, NULL, NULL),
(6, 1, 'violet', 'S', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, '1.webp', NULL, NULL),
(2, 1, '1.webp', NULL, NULL),
(3, 1, '1.webp', NULL, NULL),
(4, 2, '1.webp', NULL, NULL),
(5, 3, '1.webp', NULL, NULL),
(6, 4, '1.webp', NULL, NULL),
(7, 5, '1.webp', NULL, NULL),
(8, 6, '1.webp', NULL, NULL),
(9, 7, '1.webp', NULL, NULL),
(10, 8, '1.webp', NULL, NULL),
(11, 9, '1.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'CodeLean', 'CodeLean@gmail.com', NULL, '$2y$10$DgskGVpStFqm4meY95rdHux6osG91PG8QwNEBmL9rkOeamSEO2tw.', NULL, NULL, '0', 'abc', NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$Ij6DjudYnOl5bLUVCvDxE.k60n57bAj3TOEyYQQCnbWpTq8qJMy9G', NULL, NULL, '0', 'toi la adminhh', NULL, '2022-12-06 11:58:52'),
(3, 'Shane Lynch', 'ShaneLynch@gmail.com', NULL, '$2y$10$kGa7ZT2keNeo/HWye.2LlONBCGubXx450IzVqd/7gFd02ZP/UAsGS', NULL, 'avatar-0.png', '1', 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo hihi', NULL, '2022-12-06 11:58:29'),
(4, 'Brandon Kelley', 'BrandonKelley@gmail.com', NULL, '$2y$10$CCVmjpj/WlL32Y1mm75oIO.1NEj0vjqhjJo0vKATCNRBEj/H.s8xC', NULL, 'avatar-1.png', '1', NULL, NULL, NULL),
(6, 'Duy Cao Mạnh', 'thongthoathich24h@gmail.com', NULL, '10102000', NULL, NULL, '1', NULL, '2022-12-06 12:19:19', '2022-12-06 12:19:19'),
(7, 'User', 'user@gmail.com', NULL, '123456', NULL, NULL, '1', NULL, '2022-12-06 12:20:10', '2022-12-06 12:20:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_comments`
--
ALTER TABLE `blogs_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs_comments`
--
ALTER TABLE `blogs_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
