-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 28, 2021 at 08:15 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_01_28_122347_create_user_performancs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sam', 'sam@gmail.com', '$2y$10$PeUSrXMSWZVhGDEWIxpE/.cRxptsThlJAaEilSDSJOB.rwdmOUfD2', 'FStth0v6UuoQAZPcBeHz4tXboSv6diDslw0kziKcGjRhY20PxULIJDrVlmA5', '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(2, 'sam2', 'sam2@gmail.com', '$2y$10$30ycsnaS1Q.nY2IXlhTQvuuO7FSaKKpGoTVozsP/lGkaL1MrL5Wpq', NULL, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(3, 'sam3', 'sam3@gmail.com', '$2y$10$gn9ZZYE0AKVev.wbYsVJx.ryKJrDPUpfUDt/XihhgjRzx9BkEJhKK', NULL, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(4, 'sam4', 'sam4@gmail.com', '$2y$10$FRhrm0tgvUmnro2MPmtNM.IacakxX0mQwkmUyoX9FsSPFLKRVwAUi', NULL, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(5, 'sam5', 'sam5@gmail.com', '$2y$10$RcwvYHcWJctBmWA2jFCYN.VWOYSiNVSsVEPB1jWc8U0BhQDy4IJy2', NULL, '2021-01-28 14:01:20', '2021-01-28 14:01:20'),
(6, 'sam6', 'sam6@gmail.com', '$2y$10$QTVxURqqgAdbPVRN7ECTsebLnr65Q7BV9S55MnntoSkD96VLZrXNO', NULL, '2021-01-28 14:01:20', '2021-01-28 14:01:20'),
(7, 'sam7', 'sam7@gmail.com', '$2y$10$/UcmC.p8Yf1XXccFbc8qc.9xhBRlyz3I3btaFloVz/KQpjQryTsye', NULL, '2021-01-28 14:01:20', '2021-01-28 14:01:20'),
(8, 'sam8', 'sam8@gmail.com', '$2y$10$X2F6yr0ndR1/WY.wmz9DRuutY8OShooIKr.FXJDE3QbGjsok0uOey', NULL, '2021-01-28 14:01:20', '2021-01-28 14:01:20'),
(9, 'sam9', 'sam9@gmail.com', '$2y$10$hcRIUEQG0OVBGkiB0fVNdeX.FowFv5WEW2ixjFWpFnQqU9p9M7Txa', NULL, '2021-01-28 14:01:20', '2021-01-28 14:01:20'),
(10, 'sam10', 'sam10@gmail.com', '$2y$10$20juJPB3spvU5G3UQdeC0e7fCxREmeslbBXB.s3Cno9pDIDUhS7Om', NULL, '2021-01-28 14:01:21', '2021-01-28 14:01:21'),
(11, 'sau', 'sau@gmail.com', '$2y$10$pVZxN05Q0.Lm5CSDs11IxeEUM7a.JeH0dDJDOpgaaBg8bIEhusP5i', 'DN4qYr3jAnO8qPZctXUTsrF8rrtfiV17Pgj3bfTaAhAVgC1Dhjxd5MPtt3xJ', '2021-01-28 14:30:18', '2021-01-28 14:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_performances`
--

DROP TABLE IF EXISTS `user_performances`;
CREATE TABLE IF NOT EXISTS `user_performances` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `performance` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_performances`
--

INSERT INTO `user_performances` (`id`, `user_id`, `performance`, `created_at`, `updated_at`) VALUES
(1, '1', 10, '2021-01-28 14:00:35', '2021-01-28 14:00:35'),
(2, '1', 8, '2021-02-28 14:00:35', '2021-01-28 14:00:35'),
(3, '2', 5, '2021-01-28 14:00:35', '2021-01-28 14:00:35'),
(4, '3', 3, '2021-01-28 14:00:35', '2021-01-28 14:00:35'),
(5, '4', 10, '2021-01-28 14:00:35', '2021-01-28 14:00:35'),
(6, '5', 2, '2021-01-28 14:00:35', '2021-01-28 14:00:35'),
(7, '1', 10, '2021-03-28 14:01:19', '2021-01-28 14:01:19'),
(8, '1', 8, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(9, '2', 5, '2021-02-28 14:01:19', '2021-01-28 14:01:19'),
(10, '3', 3, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(11, '4', 10, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(12, '5', 2, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(13, '6', 9, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(14, '7', 5, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(15, '8', 8, '2021-01-28 14:01:19', '2021-01-28 14:01:19'),
(16, '4', 3, '2021-01-28 14:01:19', '2021-01-28 14:01:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
