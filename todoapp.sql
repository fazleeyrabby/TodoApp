-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 08:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$CGTGuQxac1PhINzn0pO.AekR7CdK70xGi2NGHCa..lxX3CvpFOjlq', NULL, '2020-03-05 18:47:57', '2020-03-05 18:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `entry_date`, `created_at`, `updated_at`) VALUES
(384, 'Attendance Monitoring  System', '2020-08-31', '2020-03-11 07:20:38', '2020-08-31 00:15:42'),
(390, 'Employee Time Management System', '2020-08-31', '2020-08-28 03:24:26', '2020-08-30 23:16:26'),
(392, 'School Management System', '2020-08-31', '2020-08-30 23:55:11', '2020-08-30 23:55:11'),
(393, 'Question Bank', '2020-09-02', '2020-09-02 06:13:55', '2020-09-02 06:14:17'),
(396, 'Todo App', '2020-09-02', '2020-09-02 12:26:41', '2020-09-02 12:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `entry_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `brand_id`, `model_id`, `name`, `description`, `status`, `entry_date`, `created_at`, `updated_at`) VALUES
(85, 390, 3, 'Todo-1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, '2020-08-31 08:45:11', '2020-08-31 02:45:11', '2020-08-31 02:45:11'),
(87, 386, 4, 'Todo-3', 'Yes,Todo 3', NULL, '2020-08-31 08:54:44', '2020-08-31 02:54:44', '2020-08-31 02:54:44'),
(88, 385, 2, 'Todo-4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, '2020-08-31 08:55:14', '2020-08-31 02:55:14', '2020-09-02 06:00:51'),
(95, 396, 1, 'Todo-2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', NULL, '2020-09-02 18:27:16', '2020-09-02 12:27:16', '2020-09-02 12:27:16'),
(96, 392, 2, 'Todo-5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 1, '2020-09-02 18:28:02', '2020-09-02 12:28:02', '2020-09-02 12:34:19'),
(97, 384, 4, 'Todo-6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', NULL, '2020-09-02 18:28:21', '2020-09-02 12:28:21', '2020-09-02 12:28:21'),
(98, 393, 5, 'Todo-7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', NULL, '2020-09-02 18:28:45', '2020-09-02 12:28:45', '2020-09-02 12:28:45');

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
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2014_10_12_100000_create_password_resets_table', 3),
(8, '2019_08_19_000000_create_failed_jobs_table', 3),
(9, '2020_01_16_073354_create_admins_table', 3),
(20, '2020_03_05_133830_create_brand_table', 12),
(21, '2020_03_05_134643_create_models_table', 13),
(22, '2020_03_05_135434_create_items_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `brand_id`, `name`, `user_id`, `description`, `entry_date`, `created_at`, `updated_at`) VALUES
(50, 385, 'M-2020', 0, '', '2020-03-11 02:21:55', '2020-03-11 07:21:55', '2020-03-11 07:21:55'),
(51, 384, 'K-2019', 0, '', '2020-03-11 02:22:11', '2020-03-11 07:22:11', '2020-03-11 07:22:11'),
(52, 386, 'M-2021', 0, '', '2020-03-11 02:22:24', '2020-03-11 07:22:24', '2020-03-11 07:22:24'),
(54, 387, 'C-2018', 0, '', '2020-03-11 09:58:03', '2020-03-11 14:58:03', '2020-03-11 14:58:03'),
(55, 387, 'S-2011', 0, '', '2020-03-11 09:58:21', '2020-03-11 14:58:21', '2020-03-11 14:58:21'),
(56, 386, 'W-2019', 0, '', '2020-03-11 09:58:36', '2020-03-11 14:58:36', '2020-03-11 14:58:36'),
(57, 385, 'D-2012', 0, '', '2020-03-11 09:58:52', '2020-03-11 14:58:52', '2020-03-11 14:58:52'),
(58, 387, 'R-2019', 0, '', '2020-03-11 09:59:03', '2020-03-11 14:59:03', '2020-03-11 14:59:03'),
(59, 384, 'O-2013', 0, '', '2020-03-11 09:59:15', '2020-03-11 14:59:15', '2020-03-11 14:59:15'),
(60, 387, 'L-2016', 0, '', '2020-03-11 09:59:28', '2020-03-11 14:59:28', '2020-03-11 14:59:28');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md. Fazley Rabbi', 'fazleyrabbicse@gmail.com', NULL, '$2y$10$cFjH50/dZ6We7FKwjzB8Jur6erhKyawKMDN3ILGYtjV261FO104fu', NULL, '2020-01-20 00:43:51', '2020-01-20 00:43:51'),
(2, 1, 'User', 'user@gmail.com', NULL, '$2y$10$nng6GKOiZuAME3Txy8VKY.I3HRtzR0qTfguFCtrcdEIOxhAlNkNrq', NULL, '2020-08-28 02:31:55', '2020-08-28 02:31:55'),
(3, 1, 'Raihan', 'fazley@gmail.com', NULL, '$2y$10$.o1..AXyV84uGQ6y/b/wO.r.WVDoTvddRdpgVJQtmlaMoV6Z4qoYS', NULL, '2020-08-30 23:58:07', '2020-08-30 23:58:07'),
(4, 1, 'Rabbi', 'rabbi@gmail.com', NULL, '$2y$10$.y5Xg7Z7hq74VkyGo6GTvOlnz77/sYw8dw.QvqPrNQyYqmwvU2.Gi', NULL, '2020-08-30 23:58:42', '2020-08-30 23:58:42'),
(5, 1, 'FR', 'fr@gmail.com', NULL, '$2y$10$hfV54RlSSkv57NI2ZxKXeeb4LLAuvpdQkd1zVob4jbNT3ESS0zDSu', NULL, '2020-08-30 23:59:22', '2020-08-30 23:59:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=398;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
