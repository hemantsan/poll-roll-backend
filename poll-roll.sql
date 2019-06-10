-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 09:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poll-roll`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `question`, `created_by`, `created_at`, `updated_at`, `is_active`, `is_deleted`) VALUES
(1, 'Demo question', 1, '2019-02-19 11:47:41', '2019-02-19 11:47:41', 1, 0),
(2, 'Demo question', 1, '2019-02-19 11:48:13', '2019-02-19 11:48:13', 1, 0),
(3, 'Demo question', 1, '2019-02-19 11:48:43', '2019-02-19 11:48:43', 1, 0),
(4, 'Demo question', 1, '2019-02-19 12:22:44', '2019-02-19 12:22:44', 1, 0),
(5, 'Demo question', 1, '2019-02-19 12:23:29', '2019-02-19 12:23:29', 1, 0),
(6, 'Demo question', 1, '2019-02-19 12:24:10', '2019-02-19 12:24:10', 1, 0),
(7, 'Demo question', 1, '2019-02-19 12:24:22', '2019-02-19 12:24:22', 1, 0),
(8, 'Demo question', 1, '2019-02-19 12:24:45', '2019-02-19 12:24:45', 1, 0),
(9, 'Demo question', 1, '2019-02-19 12:29:17', '2019-02-19 12:29:17', 1, 0),
(10, 'Demo question', 1, '2019-02-19 12:29:50', '2019-02-19 12:29:50', 1, 0),
(11, 'Demo question', 1, '2019-02-19 12:48:52', '2019-02-19 12:48:52', 1, 0),
(12, 'Demo question', 1, '2019-02-19 12:58:07', '2019-02-19 12:58:07', 1, 0),
(13, 'Demo question', 1, '2019-02-19 13:01:35', '2019-02-19 13:01:35', 1, 0),
(14, 'Demo question', 1, '2019-02-19 13:03:20', '2019-02-19 13:03:20', 1, 0),
(15, 'Demo question', 1, '2019-02-19 13:04:40', '2019-02-19 13:04:40', 1, 0),
(16, 'Demo question', 1, '2019-02-19 13:05:22', '2019-02-19 13:05:22', 1, 0),
(17, 'Demo question', 1, '2019-02-20 10:06:50', '2019-02-20 10:06:50', 1, 0),
(18, 'Demo question', 1, '2019-02-20 10:09:30', '2019-02-20 10:09:30', 1, 0),
(19, 'Demo question', 1, '2019-02-20 10:10:15', '2019-02-20 10:10:15', 1, 0),
(20, 'Demo question', 1, '2019-02-20 10:13:41', '2019-02-20 10:13:41', 1, 0),
(21, 'Demo question', 1, '2019-02-20 10:14:07', '2019-02-20 10:14:07', 1, 0),
(22, 'Demo question', 1, '2019-02-20 10:14:28', '2019-02-20 10:14:28', 1, 0),
(23, 'Demo question', 1, '2019-02-20 10:21:00', '2019-02-20 10:21:00', 1, 0),
(24, 'Demo question', 1, '2019-02-20 10:21:16', '2019-02-20 10:21:16', 1, 0),
(25, 'Demo question', 1, '2019-02-20 10:21:31', '2019-02-20 10:21:31', 1, 0),
(26, 'Demo question', 1, '2019-02-20 10:21:50', '2019-02-20 10:21:50', 1, 0),
(27, 'Demo question', 1, '2019-02-20 10:24:36', '2019-02-20 10:24:36', 1, 0),
(28, 'Demo question', 1, '2019-02-20 10:27:30', '2019-02-20 10:27:30', 1, 0),
(29, 'Demo question', 1, '2019-02-20 10:28:59', '2019-02-20 10:28:59', 1, 0),
(30, 'Demo question', 1, '2019-02-20 10:44:28', '2019-02-20 10:44:28', 1, 0),
(31, 'Demo question', 1, '2019-02-20 10:46:12', '2019-02-20 10:46:12', 1, 0),
(32, 'Demo question', 1, '2019-02-20 10:55:15', '2019-02-20 10:55:15', 1, 0),
(33, 'Demo question', 1, '2019-02-20 10:55:26', '2019-02-20 10:55:26', 1, 0),
(34, 'Demo question', 1, '2019-02-20 10:55:45', '2019-02-20 10:55:45', 1, 0),
(35, 'Demo question', 1, '2019-02-20 11:03:43', '2019-02-20 11:03:43', 1, 0),
(36, 'Demo question', 1, '2019-02-20 11:09:52', '2019-02-20 11:09:52', 1, 0),
(37, 'Demo question', 1, '2019-02-20 12:40:09', '2019-02-20 12:40:09', 1, 0),
(38, 'Demo question', 1, '2019-02-20 12:51:55', '2019-02-20 12:51:55', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE `poll_options` (
  `id` int(11) NOT NULL,
  `option_title` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll_options`
--

INSERT INTO `poll_options` (`id`, `option_title`, `question_id`) VALUES
(1, 'option 4', 8),
(2, 'option 1', 9),
(3, 'option 2', 9),
(4, 'option 3', 9),
(5, 'option 4', 9),
(6, 'option 1', 10),
(7, 'option 2', 10),
(8, 'option 3', 10),
(9, 'option 4', 10),
(10, 'sdfdf', 10),
(11, 'sdfdsf', 10),
(12, 'erwer', 10),
(13, 'xcv', 10),
(14, 'option 1', 11),
(15, 'option 2', 11),
(16, 'option 3', 11),
(17, 'option 4', 11),
(18, 'option 1', 12),
(19, 'option 2', 12),
(20, 'option 3', 12),
(21, 'option 4', 12),
(22, 'option 1', 13),
(23, 'option 2', 13),
(24, 'option 3', 13),
(25, 'option 4', 13),
(26, 'option 1', 14),
(27, 'option 2', 14),
(28, 'option 3', 14),
(29, 'option 4', 14),
(30, 'option 1', 15),
(31, 'option 2', 15),
(32, 'option 3', 15),
(33, 'option 4', 15),
(34, 'option 1', 16),
(35, 'option 2', 16),
(36, 'option 3', 16),
(37, 'option 4', 16),
(38, 'option 1', 25),
(39, 'option 2', 25),
(40, 'option 3', 25),
(41, 'option 4', 25),
(42, 'option 1', 26),
(43, 'option 2', 26),
(44, 'option 3', 26),
(45, 'option 4', 26),
(46, 'option 1', 27),
(47, 'option 2', 27),
(48, 'option 3', 27),
(49, 'option 4', 27),
(50, 'option 1', 28),
(51, 'option 2', 28),
(52, 'option 3', 28),
(53, 'option 4', 28),
(54, 'option 1', 29),
(55, 'option 2', 29),
(56, 'option 3', 29),
(57, 'option 4', 29),
(58, 'option 1', 30),
(59, 'option 2', 30),
(60, 'option 3', 30),
(61, 'option 4', 30),
(62, 'option 1', 31),
(63, 'option 2', 31),
(64, 'option 3', 31),
(65, 'option 4', 31),
(66, 'option 1', 32),
(67, 'option 2', 32),
(68, 'option 3', 32),
(69, 'option 4', 32),
(70, 'option 1', 33),
(71, 'option 2', 33),
(72, 'option 3', 33),
(73, 'option 4', 33),
(74, 'option 1', 34),
(75, 'option 2', 34),
(76, 'option 3', 34),
(77, 'option 4', 34),
(78, 'option 1', 35),
(79, 'option 2', 35),
(80, 'option 3', 35),
(81, 'option 4', 35),
(82, 'option 1', 36),
(83, 'option 2', 36),
(84, 'option 3', 36),
(85, 'option 4', 36),
(86, 'option 1', 37),
(87, 'option 2', 37),
(88, 'option 3', 37),
(89, 'option 4', 37),
(90, 'option 1', 38),
(91, 'option 2', 38),
(92, 'option 3', 38),
(93, 'option 4', 38);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'na',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `pic`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hemant Sankhla', 'hemant@gmail.com', '$2y$10$yNcntFW1CeAg5nD4E38Bv.AGToXgdSzSmyq4I3jhRI2dXSH5KddOu', 'https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png', '0', '2019-02-01 07:26:43', '2019-02-01 07:26:43'),
(7, 'Ankit', 'ankit@gmail.com', '$2y$10$FtdhUFSw2aBsf2DnWK11XeD5DhGyM3kYIWjWD54B1YW6rsYFXmXBe', 'https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png', '0', '2019-02-05 07:00:09', '2019-02-05 07:00:09'),
(8, 'demo', 'demo@gmail.com', '$2y$10$T6pN7bXV9V0EfU8Meo/G7ehMzC5twEBPEO69eQu5FAAtE2Hjuj2i6', 'na', '0', '2019-02-15 05:03:51', '2019-02-15 05:03:51'),
(9, 'uuu', 'uuu@gmail.com', '$2y$10$G.IGqiUrB.3.DktR/LrfuuxvpGNwNnyiC765BmqI2KhZxgYPnLnBO', 'na', '0', '2019-02-15 05:09:52', '2019-02-15 05:09:52'),
(10, 'uuuff', 'uuffu@gmail.com', '$2y$10$yfptMRO/3KQq.jsvBaU6QuBrgOheO/Mx1NqM0r459T4NlBxQwHIiq', 'na', '0', '2019-02-15 05:10:38', '2019-02-15 05:10:38'),
(11, 'iooioi', 'icici@gmail.com', '$2y$10$7G7DjHRDuvg4v4vNTGxUheGJwCWfyWFlMCmb/vXYZFe7f7/HuaNGa', 'na', '0', '2019-02-15 06:11:01', '2019-02-15 06:11:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
