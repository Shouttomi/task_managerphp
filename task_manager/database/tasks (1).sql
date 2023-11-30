-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 04:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_task_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_description` text DEFAULT NULL,
  `task_owner` varchar(255) NOT NULL,
  `task_owner_email` varchar(255) NOT NULL,
  `task_eta` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 Inprogress, 1 Done',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_description`, `task_owner`, `task_owner_email`, `task_eta`, `status`, `created_at`, `updated_at`) VALUES
(20, 'cook', 'michael', 'michael@gmail.com', '2023-09-22', 1, '2023-09-19 09:10:43', '2023-09-19 09:11:29'),
(21, 'exercise', 'michael', 'michaeel@gmail.com', '2023-09-23', 0, '2023-09-19 09:11:45', '2023-09-19 09:11:45'),
(22, 'read', 'john', 'johnl@gmail.com', '2023-09-24', 0, '2023-09-19 09:12:10', '2023-09-19 09:12:10'),
(23, 'attend meet', 'john', 'johnl@gmail.com', '2023-09-24', 0, '2023-09-19 09:12:22', '2023-09-19 09:12:22'),
(24, 'pickup letters', 'sean', 'sean@gmail.com', '2023-09-26', 0, '2023-09-19 09:12:48', '2023-09-19 09:13:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
