-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 11:32 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', '2018-07-26 18:12:59', '2018-07-26 18:27:10'),
(2, 'Laptop', '2018-07-26 18:27:02', '2018-07-26 18:27:02'),
(3, 'Television', '2018-07-27 08:55:17', '2018-07-27 08:55:17'),
(4, 'HardDisk', '2018-07-27 08:56:11', '2018-07-27 08:56:11'),
(5, 'Accessories', '2018-07-27 08:56:24', '2018-07-27 08:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_26_181429_create_categories_table', 1),
(4, '2018_07_26_201000_create_products_table', 1),
(5, '2018_08_08_115754_create_user_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `prod_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `prod_code`, `prod_img`, `prod_price`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'samsung j7prime', '257xbfonk656', 'download (2).jpg', '4000', 1, '2018-07-26 18:13:25', '2018-07-26 18:17:42'),
(2, 'iphone 7 plus', '54rg354rd', 'download (3).jpg', '13000', 1, '2018-07-26 18:24:46', '2018-07-26 18:26:21'),
(3, 'pavilion 15', 'flnbldf3654bf', 'download (4).jpg', '12000', 2, '2018-07-26 18:27:35', '2018-07-26 18:28:26'),
(4, 'samsung s8', '54bgdfk65grs', 'download (5).jpg', '16000', 1, '2018-07-27 08:57:18', '2018-07-27 09:27:44'),
(5, 'Dell a5', 'nbdbjbv54554c', 'images.jpg', '15000', 2, '2018-07-27 08:58:16', '2018-07-27 09:27:58'),
(20, 'lenovo l8', 'bkdjbgkb65g4sd5', 'images (1).jpg', '10000', 2, '2018-07-27 09:00:23', '2018-07-27 09:28:14'),
(21, 'LG mono 32inch', '207h0f8b0', 'download (6).jpg', '22000', 3, '2018-07-27 09:01:34', '2018-07-27 09:28:27'),
(22, 'samsung stv 50inch', '374534th43d4h', 'images (2).jpg', '65000', 3, '2018-07-27 09:03:02', '2018-07-27 09:28:38'),
(23, 'jack 50inch', '354grsmg52', 'images (3).jpg', '30000', 3, '2018-07-27 09:05:23', '2018-07-27 09:28:47'),
(24, 'lenovo HD 2Tera', 'bmfbgkjd55454c', 'download (7).jpg', '1200', 4, '2018-07-27 09:10:29', '2018-07-27 09:28:55'),
(25, 'samsung s9', '2dgd543', 'download (5).jpg', '21000', 1, '2018-07-27 17:49:21', '2018-07-27 17:50:14'),
(26, 'samsung prime', '378ghgthtr45', 'download (9).jpg', '2000', 1, '2018-08-02 08:15:32', '2018-08-08 09:54:48'),
(28, 'television LG 32INCH', 'dklfhg35e7hg', 'download (16).jpg', '8500', 3, '2018-08-02 08:19:45', '2018-08-08 09:55:38'),
(29, 'samsung A7', 'kbhgf35d4hdth0yt5htr', 'download (21).jpg', '8500', 1, '2018-08-09 10:08:57', '2018-08-09 10:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed abdo', 'mohamedaldomany60521@yahoo.com', '$2y$10$qU7/XPp375BYFkQGG6V4R.g3r8ojj/pq5J3B.lI2Yg/.37sSpNMbK', 'fvJ2cwxRmv7OTsFHJncKMW23HSD79BAi2s1kH0nKKWpj4eqRlkFzI1X9iqTB', '2018-08-02 09:17:25', '2018-08-02 09:17:25'),
(2, 'mostafa abdo', 'mostafa@yahoo.com', '$2y$10$Ajg1/8Lx59SrYvUd7t.F7OUaRx1bgNDA/tteWNDie0qF49klQQ.4q', 'oTZRAcAuxUQMs65prbBZFRZVmYrNDFxqk5MVD3QrK6JBEpvhKPGuglrceCoq', '2018-08-02 09:21:16', '2018-08-02 09:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

CREATE TABLE `user_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` int(10) UNSIGNED NOT NULL,
  `p_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `u_id`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2018-08-08 10:38:42', '2018-08-08 10:38:42'),
(2, 1, 20, '2018-08-08 10:39:01', '2018-08-08 10:39:01'),
(3, 1, 21, '2018-08-09 10:07:42', '2018-08-09 10:07:42'),
(4, 1, 29, '2018-08-09 10:09:54', '2018-08-09 10:09:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_products`
--
ALTER TABLE `user_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_products_u_id_foreign` (`u_id`),
  ADD KEY `user_products_p_id_foreign` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_products`
--
ALTER TABLE `user_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_products`
--
ALTER TABLE `user_products`
  ADD CONSTRAINT `user_products_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_products_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
