-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 05:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_shoplues`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(4, 'Sai Sai', '/storage/brandimg/1608517083_saisai_logo.png', '2020-12-20 19:48:03', '2020-12-20 19:48:03'),
(5, 'Bella', '/storage/brandimg/1608517096_bella_logo.png', '2020-12-20 19:48:16', '2020-12-20 19:48:16'),
(6, 'Giordano', '/storage/brandimg/1608517113_giordano_logo.png', '2020-12-20 19:48:33', '2020-12-20 19:48:33'),
(7, 'Apple', '/storage/brandimg/1608517126_apple_logo.png', '2020-12-20 19:48:46', '2020-12-20 19:48:46'),
(8, 'Acer', '/storage/brandimg/1608517147_acer_logo.png', '2020-12-20 19:49:07', '2020-12-20 19:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(23, 'Beauty', '/storage/categoryimg/1608516922_beauty.png', '2020-12-20 19:45:23', '2020-12-20 19:45:23'),
(24, 'Fashion', '/storage/categoryimg/1608516961_Tshirt.jfif', '2020-12-20 19:46:01', '2020-12-20 19:46:01'),
(25, 'Home Decoration', '/storage/categoryimg/1608516974_furniture.jpg', '2020-12-20 19:46:14', '2020-12-20 19:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `codeno`, `name`, `photo`, `price`, `discount`, `description`, `brand_id`, `subcategory_id`, `created_at`, `updated_at`) VALUES
(6, '101', 'Watch', '/storage/itemimg/1608517233_watch.jfif', 100000, 99000, '-', 7, 10, '2020-12-20 19:50:33', '2020-12-20 19:50:33'),
(7, '102', 'Gown', '/storage/itemimg/1608517271_giordano_two.jpg', 30000, 0, '-', 6, 8, '2020-12-20 19:51:11', '2020-12-20 19:51:11'),
(8, '103', 'Sai Sai Lipstick', '/storage/itemimg/1608517310_saisai_one.jpg', 25000, 23000, '-', 4, 6, '2020-12-20 19:51:50', '2020-12-20 19:51:50'),
(9, '104', 'Foundation', '/storage/itemimg/1608517342_saisai_four.jpg', 20000, NULL, '-', 5, 5, '2020-12-20 19:52:22', '2020-12-20 19:52:22'),
(10, '105', 'Shirt', '/storage/itemimg/1608517380_giordano_four.jpg', 15000, NULL, '-', 6, 7, '2020-12-20 19:53:00', '2020-12-20 19:53:00'),
(11, '106', 'Phone', '/storage/itemimg/1608517454_apple_three.jpg', 1500000, 1450000, '-', 7, 10, '2020-12-20 19:54:14', '2020-12-20 19:54:14'),
(12, '107', 'Table', '/storage/itemimg/1608517508_homedecor.jpg', 100000, NULL, '-', 8, 9, '2020-12-20 19:55:08', '2020-12-20 19:55:08'),
(13, '108', 'Bag', '/storage/itemimg/1608517774_GUEST_9c2a3793-30c8-4b85-af99-5a1806facf25.jfif', 25000, 23000, '-', 6, 9, '2020-12-20 19:59:34', '2020-12-20 19:59:34');

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
(4, '2020_12_15_045552_create_categories_table', 1),
(5, '2020_12_15_045824_create_subcategories_table', 1),
(6, '2020_12_15_045907_create_brands_table', 1),
(7, '2020_12_15_045923_create_items_table', 1),
(8, '2020_12_18_042739_create_permission_tables', 2),
(9, '2020_12_22_080440_create_orders_table', 3),
(10, '2020_12_22_144805_create_orderdetials_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 12),
(2, 'App\\User', 13),
(2, 'App\\User', 14),
(2, 'App\\User', 15),
(2, 'App\\User', 16),
(2, 'App\\User', 17),
(2, 'App\\User', 18);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetials`
--

CREATE TABLE `orderdetials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetials`
--

INSERT INTO `orderdetials` (`id`, `item_id`, `order_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 10, 5, 1, '2020-12-23 08:11:25', '2020-12-23 08:11:25'),
(2, 12, 5, 1, '2020-12-23 08:11:25', '2020-12-23 08:11:25'),
(3, 9, 6, 1, '2020-12-23 08:22:53', '2020-12-23 08:22:53'),
(4, 10, 6, 1, '2020-12-23 08:22:53', '2020-12-23 08:22:53'),
(5, 12, 7, 1, '2020-12-23 08:29:01', '2020-12-23 08:29:01'),
(6, 10, 8, 1, '2020-12-23 14:23:22', '2020-12-23 14:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderdate` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 0,
  `orderno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `user_id`, `total`, `status`, `orderno`, `note`, `created_at`, `updated_at`) VALUES
(5, '2020-12-23', 15, 115000, 0, '5fe2fbad0f397', 'my note', '2020-12-23 08:11:25', '2020-12-23 08:11:25'),
(6, '2020-12-23', 16, 35000, 0, '5fe2fe5dcfd1e', 'my note', '2020-12-23 08:22:53', '2020-12-23 08:22:53'),
(7, '2020-12-23', 10, 100000, 0, '5fe2ffcd02aa7', 'notes.', '2020-12-23 08:29:01', '2020-12-23 08:29:01'),
(8, '2020-12-23', 10, 15000, 0, '5fe352dae6fd4', 'my notes.', '2020-12-23 14:23:22', '2020-12-23 14:23:22');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-12-18 09:27:13', '2020-12-18 09:27:13'),
(2, 'customer', 'web', '2020-12-18 09:27:35', '2020-12-18 09:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Foundation', 23, '2020-12-20 19:46:28', '2020-12-20 19:49:29'),
(6, 'Lipstick', 23, '2020-12-20 19:46:37', '2020-12-20 19:49:18'),
(7, 'Man Fashion', 24, '2020-12-20 19:46:47', '2020-12-20 19:46:51'),
(8, 'Woman Fashion', 24, '2020-12-20 19:47:04', '2020-12-20 19:47:04'),
(9, 'Furniture', 25, '2020-12-20 19:47:15', '2020-12-20 19:47:15'),
(10, 'Electronic Devices', 25, '2020-12-20 19:47:25', '2020-12-20 19:47:25');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'admin@gmail.com', '2020-12-01 04:22:21', '$2y$10$xrWOilI3culboIA8LPJw8uy5o3G1J6M6wrdfDlO5g6MeCd8bP2W/q', NULL, '2020-12-20 08:36:05', '2020-12-20 08:36:05'),
(10, 'susu', 'susu@gmail.com', '2020-12-03 08:28:20', '$2y$10$o.V/JYpAoPMoxHYvV/urF.p4SxdR9sqK4nXDfWLRpJ8wzCafruc1W', NULL, '2020-12-20 08:37:27', '2020-12-20 08:37:27'),
(12, 'susandi', 'susandi@gmail.com', NULL, '$2y$10$70a3rQzK7ax8Ju0n0cr3l.8.rlIbPF7MFe0HG8INp0coDYv2dNBhW', NULL, '2020-12-20 19:17:24', '2020-12-20 19:17:24'),
(13, 'susandi', 'susandi12@gmail.com', NULL, '$2y$10$tCA3hEP2s1PxWxQvRVqxv.DSwV40qDpUoiFrgFa7/1u8imoBfdTE2', NULL, '2020-12-20 22:40:10', '2020-12-20 22:40:10'),
(14, 'susandi12', 'susandi123@gmail.com', NULL, '$2y$10$ky6J.lVfblHOvgAKDliCvuBGZ0LuZAFFqruewGYDdBfaiiOZHZCDe', NULL, '2020-12-20 22:53:19', '2020-12-20 22:53:19'),
(15, 'user', 'user@gmail.com', '2020-12-01 04:22:16', '$2y$10$RDDHgvvPbtXZL8DOtuj8pudLE2IEhLkAsHRcUoHJXrGSyr53GlWxK', NULL, '2020-12-20 22:55:21', '2020-12-20 22:55:21'),
(16, 'user1', 'user1@gmail.com', '2020-12-03 08:13:55', '$2y$10$0x0ECGXb1bHsuMnSKYCsqef/ZLc4teMGhj0uwxuGWQvWcuqrSp.6m', NULL, '2020-12-20 23:11:44', '2020-12-20 23:11:44'),
(17, 'user3', 'user3@gmail.com', NULL, '$2y$10$Xdp0GEv/M6pUZS0HgBfpgergsRmmsxsVmGUlVwW5ni4dEPkMS5hpK', NULL, '2020-12-20 23:15:16', '2020-12-20 23:15:16'),
(18, 'user4', 'user4@gmail.com', NULL, '$2y$10$UD7x.VVpjuY/ZajDoAQFm.yA2lg830HoiVPqxKeAKv/bx4CovFfCi', NULL, '2020-12-21 00:15:59', '2020-12-21 00:15:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_brand_id_foreign` (`brand_id`),
  ADD KEY `items_subcategory_id_foreign` (`subcategory_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orderdetials`
--
ALTER TABLE `orderdetials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetials_item_id_foreign` (`item_id`),
  ADD KEY `orderdetials_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderdetials`
--
ALTER TABLE `orderdetials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orderdetials`
--
ALTER TABLE `orderdetials`
  ADD CONSTRAINT `orderdetials_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderdetials_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
