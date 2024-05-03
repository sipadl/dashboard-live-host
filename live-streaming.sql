-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live-streaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

CREATE TABLE `affiliates` (
  `id` int(11) NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `affiliates`
--

INSERT INTO `affiliates` (`id`, `link`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '123456', 22, '2024-03-24 11:28:51', '2024-03-24 11:28:51'),
(4, '4567', 22, '2024-03-24 20:20:38', '2024-03-24 20:20:38'),
(5, '1234567', 31, '2024-03-25 10:08:19', '2024-03-25 10:08:19'),
(6, '123', 31, '2024-03-25 10:12:53', '2024-03-25 10:12:53'),
(7, '54321', 31, '2024-03-25 10:13:36', '2024-03-25 10:13:36'),
(8, '567890', 31, '2024-03-25 10:14:17', '2024-03-25 10:14:17'),
(9, 'rrr212', 31, '2024-03-25 10:17:21', '2024-03-25 10:17:21'),
(10, 'KASI', 31, '2024-03-25 10:18:41', '2024-03-25 10:18:41'),
(11, 'KASI', 31, '2024-03-25 10:18:49', '2024-03-25 10:18:49'),
(12, '!!@ASD', 31, '2024-03-25 10:19:47', '2024-03-25 10:19:47'),
(13, '!!@ASSAZ', 31, '2024-03-25 10:20:02', '2024-03-25 10:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `pengirim` int(11) DEFAULT NULL,
  `penerima` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tgl_terkirim` bigint(20) DEFAULT NULL,
  `id_room` varchar(100) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `is_read` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `pengirim`, `penerima`, `isi`, `tgl_terkirim`, `id_room`, `file`, `is_read`) VALUES
(31, 25, 22, 'awas bro', NULL, '8476', '', 1),
(34, 25, 22, '1234', NULL, '8476', '', 1),
(35, 25, 22, 'a', NULL, '8476', '', 1),
(36, 25, 22, 'p', NULL, '8476', '', 1),
(37, 25, 22, '1234', NULL, '8476', '', 1),
(38, 25, 22, 'a', NULL, '8476', '', 1),
(39, 25, 22, '1', NULL, '8476', '', 1),
(40, 25, 22, 'p', NULL, '8476', '', 1),
(41, 25, 22, '1', NULL, '8476', '', 1),
(42, 25, 22, '2', NULL, '8476', '', 1),
(43, 25, 22, 'awas', NULL, '8476', '', 1),
(44, 25, 22, '123', NULL, '8476', '', 1),
(45, 25, 22, '345', NULL, '8476', '', 1),
(46, 25, 22, 'aaa', NULL, '8476', '', 1),
(47, 25, 22, 'q', NULL, '8476', '', 1),
(48, 25, 22, 'x', NULL, '8476', '', 1),
(49, 25, 22, 'x', NULL, '8476', '', 1),
(50, 25, 22, 'y', NULL, '8476', '', 1),
(51, 25, 22, 'p', NULL, '8476', '', 1),
(52, 25, 22, 'x', NULL, '8476', '', 1),
(53, 25, 22, 'k', NULL, '8476', '', 1),
(54, 25, 22, 'oi', NULL, '8476', '', 1),
(55, 25, 22, 'a', NULL, '8476', '', 1),
(56, 25, 22, 'x', NULL, '8476', '', 1),
(57, 25, 22, 'a', NULL, '8476', NULL, 1),
(58, 25, 22, 'as', NULL, '8476', NULL, 1),
(59, 25, 22, 'aaaa', NULL, '8476', NULL, 1),
(60, 25, 22, 'bbbb', NULL, '8476', NULL, 1),
(61, 25, 22, 'P', NULL, '8476', NULL, 1),
(62, 25, 22, 'ass', NULL, '8476', NULL, 1),
(63, 25, 22, NULL, NULL, '8476', NULL, 1),
(64, 25, 22, 'asx', NULL, '8476', NULL, 1),
(68, 22, 25, 'awaas', NULL, '8476', NULL, 1),
(69, 22, 25, 'awas', NULL, '8476', NULL, 1),
(70, 22, 25, 'awas mas', NULL, '1215', NULL, 1),
(71, 22, 25, 'awas', NULL, '8476', NULL, 1),
(72, 22, 25, 'mas', NULL, '8476', NULL, 1),
(73, 22, 25, 'awas', NULL, '8476', NULL, 1),
(74, 25, 22, '1234', NULL, '8476', NULL, 1),
(75, 25, 24, 'qqq', NULL, '4574', NULL, 1),
(76, 25, 27, 'aszzz', NULL, '2573', NULL, 1),
(77, 25, 14, 'lip', NULL, '6236', NULL, 1),
(78, 25, 14, 'woi lip', NULL, '6236', NULL, 1),
(79, 25, 14, 'undefined', 1711551113, '6236', NULL, 1),
(80, 25, 14, 'undefined', 1711551328, '6236', NULL, 1),
(81, 25, 14, '11', 1711551370, '6236', NULL, 1),
(82, 25, 14, '1234', 1711551401, '6236', NULL, 1),
(83, 25, 14, 'p', 1711551451, '6236', NULL, 1),
(84, 25, 14, 'paa', 1711551673, '6236', NULL, 1),
(85, 25, 14, 'woi', 1711551699, '6236', NULL, 1),
(86, 25, 14, 'undefined', 1711551735, '6236', NULL, 1),
(87, 25, 14, 'woiaaa', 1711551739, '6236', NULL, 1),
(88, 25, 14, 'p', 1711551802, '6236', 'chat/1711551802.png', 1),
(89, 25, 14, 'a', 1711552124, '6236', 'chat/1711552124.png', 1),
(90, 25, 14, 'xxxx', 1711552163, '6236', NULL, 1),
(91, 25, 14, 'awas', 1711552199, '6236', NULL, 1),
(92, 25, 14, 'aaaaa', 1711552359, '6236', NULL, 1),
(93, 25, 14, 'aws', 1711552408, '6236', NULL, 1),
(94, 25, 14, '111', 1711552503, '6236', NULL, 1),
(95, 25, 14, '11122', 1711552508, '6236', NULL, 1),
(96, 25, 14, 'mas bro', 1711552754, '6236', NULL, 1),
(97, 25, 14, 'xxxx', 1711552833, '6236', 'chat/1711552833.png', 1),
(98, 25, 14, 'p', 1711552882, '6236', 'chat/1711552882.png', 1),
(99, 25, 14, 'y', 1711553035, '6236', NULL, 1),
(100, 25, 14, 'awas', 1711553041, '6236', 'chat/1711553041.png', 1),
(101, 25, 14, 'undefined', 1711553123, '6236', 'chat/1711553123.png', 1),
(102, 25, 14, 'x', 1711553167, '6236', 'chat/1711553167.png', 1),
(103, 25, 14, 'awas', 1711553802, '6236', 'chat/1711553802.png', 1),
(104, 14, 25, 'awas', 1711553802, '6236', 'chat/1711553802.png', 0),
(105, 22, 25, 'awas', 1711557292, '8476', NULL, 1),
(106, 25, 22, 'xx', 1711557677, '8476', NULL, 1),
(107, 25, 22, 'xxawas', 1711557696, '8476', NULL, 1),
(108, 25, 22, 'awas', 1711557746, '8476', NULL, 1),
(109, 22, 25, 'aw', 1711557871, '8476', NULL, 1),
(110, 22, 25, 'wew', 1711559627, '8476', NULL, 1),
(111, 25, 22, 'dir', 1711559655, '8476', NULL, 1),
(112, 25, 22, 'diraaaaa', 1711559663, '8476', NULL, 1),
(113, 25, 22, 'weeee', 1711559770, '8476', NULL, 1),
(114, 25, 22, 'weeeeee', 1711559783, '8476', NULL, 1),
(115, 25, 22, 'Assalamualaikum dira', 1711559796, '8476', NULL, 1),
(116, 25, 22, '123', 1711559937, '8476', NULL, 1),
(117, 25, 22, '12345', 1711560061, '8476', NULL, 1),
(118, 25, 22, 'x', 1711560130, '8476', NULL, 1),
(119, 25, 22, 'awas', 1711560366, '8476', NULL, 1),
(120, 25, 22, 'awassss', 1711560411, '8476', NULL, 1),
(121, 25, 22, 'awas', 1711560426, '8476', NULL, 1),
(122, 25, 22, 'awas', 1711560430, '8476', NULL, 1),
(123, 25, 22, 'q', 1711560498, '8476', NULL, 1),
(124, 25, 22, 'p', 1711560826, '8476', NULL, 1),
(125, 22, 25, 'p', 1711639244, '8476', NULL, 0),
(126, 22, 25, 'mas', 1711639248, '8476', NULL, 0),
(127, 22, 25, 'tes', 1711639273, '8476', NULL, 0),
(128, 22, 25, 'tes', 1711639275, '8476', NULL, 0),
(129, 22, 25, 'p', 1711639276, '8476', NULL, 0),
(130, 22, 25, 'p', 1711639278, '8476', NULL, 0),
(131, 22, 25, 'p', 1711639280, '8476', NULL, 0),
(132, 22, 25, 'p', 1711639281, '8476', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tarif` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`id`, `foto`, `keterangan`, `tarif`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'edit keterangan', '90000', 10, NULL, '2024-03-15 23:13:06'),
(2, NULL, NULL, NULL, 14, '2024-03-17 20:35:36', '2024-03-17 20:35:36'),
(3, NULL, NULL, NULL, 15, '2024-03-17 20:37:43', '2024-03-17 20:37:43'),
(4, 'public/foto/e5UPZsn1GAb3fF3Terl5vPkaqnLecnELz8LRTM1x.png', 'test3456', '80.000', 16, '2024-03-17 20:38:47', '2024-03-17 21:21:05'),
(5, NULL, NULL, NULL, 19, '2024-03-17 22:33:29', '2024-03-17 22:33:29'),
(6, NULL, NULL, NULL, 21, '2024-03-18 10:28:00', '2024-03-18 10:28:00'),
(7, NULL, NULL, NULL, 22, '2024-03-24 10:47:04', '2024-03-24 10:47:04'),
(8, NULL, NULL, NULL, 37, '2024-03-28 07:46:36', '2024-03-28 07:46:36'),
(9, NULL, NULL, NULL, 39, '2024-04-01 08:37:49', '2024-04-01 08:37:49'),
(10, NULL, NULL, NULL, 40, '2024-04-01 08:38:26', '2024-04-01 08:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_16_054818_host', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_chats`
--

CREATE TABLE `room_chats` (
  `id` int(11) NOT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_chats`
--

INSERT INTO `room_chats` (`id`, `penerima`, `pengirim`, `created_at`, `slug`, `updated_at`) VALUES
(4, '22', '25', '2024-03-28 08:21:21', '8476', '2024-03-28 08:21:21'),
(9, '24', '25', '2024-03-26 07:58:17', '4574', '2024-03-26 07:58:17'),
(10, '27', '25', '2024-03-26 07:58:34', '2573', '2024-03-26 07:58:34'),
(11, '14', '25', '2024-03-26 07:58:45', '6236', '2024-03-26 07:58:45'),
(12, '25', '25', '2024-03-30 22:06:58', '9967', '2024-03-30 22:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `host_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `experience` text NOT NULL,
  `niche` text DEFAULT NULL,
  `categories` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `rate_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `other_details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `image`, `video`, `host_name`, `age`, `experience`, `niche`, `categories`, `rate_card`, `other_details`, `created_at`, `updated_at`, `deleted_at`, `rating`) VALUES
(10, 25, 'images/h3yGn9lRhFUij2xeintahqBA5FFCOmJkT3yc91f7.png', 'videos/aAx50k8BBaPAdDylCWfNIW6lC3mXoWh3GfgUzBYs.mp4', 'Rudyard Leblanc', 33, 'Id voluptatem Nisi', NULL, 'Kosmetik', NULL, 'Modi voluptatem Mol', '2024-03-25 04:43:36', '2024-03-25 04:43:36', NULL, 5),
(11, 25, 'images/fYnOppTmpjMAxzWTQypzxGiBzVQPrFdcZ9eA6Pn2.png', 'videos/jRUqt4jawppETErKylsSINPXbKyDycKjM4EzirBk.mp4', 'Barry Farley', 76, 'Eum voluptatem Poss', NULL, 'Kosmetik', NULL, 'Aliqua Vel id delen', '2024-03-25 04:48:22', '2024-03-25 04:48:22', NULL, 5),
(12, 25, 'images/y5J9KK6ZONe3u1ISkmHKUqRX4kuMoHj6EDTcDFco.png', 'videos/bvALc0E3rXGDgNsaDahK6hKyfqA6GKPlcg6p4Qvf.mp4', 'Brittany Bradley', 67, 'Nihil adipisicing vo', NULL, 'Kosmetik', NULL, 'Reprehenderit beata', '2024-03-25 04:49:22', '2024-03-25 04:49:22', NULL, 5),
(13, 25, 'images/igX7OPHHhQe0F2aGcWMOUyRRK9ZRQfhzIgsFR6Ru.png', 'videos/AIq5aoABdr0mJ2P2NVdUytnSbilXsoi8ta8OafHu.mp4', 'Keegan Tran', 89, 'In laboriosam facil', NULL, 'Fashion', '[{\"hour\":\"01.00-05.00\",\"price\":\"146\"}]', 'Quas rem cupidatat d', '2024-03-25 04:52:04', '2024-03-25 04:52:04', NULL, 5),
(14, 22, 'images/Screenshot (1).png', '/video/VALORANT_replay_2023.04.29-17.17.mp4', 'Hermione Sharpe', 1, 'Sit vel autem ut as', NULL, 'Fashion', '[{\"start\":\"00:00\",\"end\":\"01:00\",\"price\":\"848\",\"hour\":\"Blanditiis velit id\"}]', 'Deserunt voluptatem', '2024-03-26 08:30:22', '2024-03-31 06:22:23', NULL, 5),
(15, 22, 'images/Screenshot (1).png', '/video/VALORANT_replay_2023.04.29-17.17.mp4', 'Yvonne Hubbard', 33, 'Minus quas molestiae', NULL, 'Fashion', '[{\"start\":\"00:02\",\"end\":\"00:04\",\"price\":\"655\"}]', 'Quo elit placeat f', '2024-03-26 08:39:39', '2024-03-31 06:22:23', NULL, 5),
(17, 22, 'images/1711866120.png', 'video/1711866120.mp4', 'Mursid', 13, 'LC', NULL, 'undefined', '[{\"start\":\"00:00\",\"end\":\"01:00\",\"price\":\"5000\"}]', 'Berhijab', '2024-03-30 23:22:00', '2024-03-30 23:22:00', NULL, 5),
(18, 22, 'images/1711866339.png', 'video/1711866339.mp4', 'Imam', 30, 'LC', NULL, 'undefined', '[{\"start\":\"00:00\",\"end\":\"01:00\",\"price\":\"122\"},{\"start\":\"01:00\",\"end\":\"02:00\",\"price\":\"500\"}]', 'Hehe', '2024-03-30 23:25:39', '2024-03-30 23:25:39', NULL, 5),
(19, 22, 'images/1711866792.png', 'video/1711866792.mp4', 'Rhonda Bright', 98, 'Nam ut velit dolore', NULL, 'Barang Elektronik', '[{\"start\":\"Sed in culpa et pla\",\"end\":\"Quibusdam sit id es\",\"price\":\"971\"},{\"start\":\"Debitis aperiam volu\",\"end\":\"Sint enim numquam r\",\"price\":\"5\"}]', 'Dolor quia inventore', '2024-03-30 23:33:12', '2024-03-30 23:33:12', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `sebagai` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `isOnline` int(11) DEFAULT 0,
  `isAgency` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `sebagai`, `code`, `isOnline`, `isAgency`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$s7O4Ijp3D6qNZduQdB5P1ec8EesO0Z60oB4L2lriAWQvMGw3LLYMi', NULL, '2024-03-15 20:12:36', '2024-03-15 20:12:36', '081256125979', 'admin', NULL, 0, 0),
(4, 'asd', 'qqq', NULL, '$2y$12$2/JC9TPJrMVzYjzDo7pDNe2JUVOFiDw/n0xQQgo0cfecm0/P.UuEy', NULL, '2024-03-15 14:56:44', '2024-03-15 14:56:44', NULL, NULL, NULL, 0, 0),
(7, 'aku_host', 'aku_host@gmail.com', NULL, '$2y$12$c8OQ51ja7kVtZ9YZ8/zssOKuLevGFvWHDC28lFxENLZZrRrp/xxPu', NULL, '2024-03-14 14:43:46', '2024-03-14 14:43:46', '0823232323', 'host', NULL, 0, 0),
(10, 'test host', 'host@gmail.com', NULL, '$2y$12$h6B4HT36qmTkV8JP3wflpuBMzuSKnhrIbmlh5pvkpTdJm8PdkZ6JW', NULL, '2024-03-15 22:44:15', '2024-03-15 22:44:15', '089612781284', 'host', NULL, 0, 0),
(11, 'lesa', 'sasa@gmail.com', NULL, '$2y$12$KRPlWG9gQ8orrG41a8v3i.gYSO3dVY96TkQLyM4sSU1uY3eHMbfcu', NULL, '2024-03-17 20:28:56', '2024-03-17 20:28:56', '08970081849', 'client', NULL, 0, 0),
(12, 'test', 'romlahtaufik83@gmail.com', NULL, '$2y$12$vowOgiBxghHe2YAdDn4C3OUzLf9NIsk473UAQVyw8hndzGa3jvtoW', NULL, '2024-03-17 20:32:55', '2024-03-17 20:32:55', '086517612589', 'client', NULL, 0, 0),
(13, 'Taufik Maulana Hidayat', 'maulanataufik089700@gmail.com', NULL, '$2y$12$ZUJM55Mk4xdlQClUK9t87ucKba9KjdLNpeko5XZbxEeNnAe42oBKm', NULL, '2024-03-17 20:34:26', '2024-03-17 20:34:26', NULL, 'client', NULL, 0, 0),
(14, 'alip', 'p90110@listrindo.com', NULL, '$2y$12$dNfyuqn.ghbSIrgQLr4bjuI08mtzhcnVOsiZi8ow9WnVKMH7fjTj2', NULL, '2024-03-17 20:35:36', '2024-03-17 20:35:36', '21212121', 'host', NULL, 0, 0),
(15, 'hasan', 'hasasan@gmail.com', NULL, '$2y$12$kZLQLTs17cmoqIIzuoQ.8OvIhmHoaOBBf4cA5.A16pBMS8BuQcT.i', NULL, '2024-03-17 20:37:43', '2024-03-17 20:37:43', '3232323233', 'host', NULL, 0, 0),
(16, 'rina', 'rina@gmail.com', NULL, '$2y$12$uDmupzzxOUsqKVwR5oi/zOq68skGg2aInoaizGqFb2YA78hRbT.5W', NULL, '2024-03-17 20:38:47', '2024-03-17 21:21:05', '3232323232', 'host', '4567', 0, 0),
(17, 'annju', 'anju@gmail.com', NULL, '$2y$12$.QGtOWJiDztSWVa8xGrdv.MAr8I3lAwNhw9QvZ5GRMMeN68ukuh5.', NULL, '2024-03-17 20:40:42', '2024-03-17 20:40:42', '4343434', 'client', NULL, 0, 0),
(18, 'anji', 'anji@gmail.com', NULL, '$2y$12$ed50CJjYDtSMJW4Rwu53pOPNDcvovFuvK10HSg9jbQf86w5.ADVa.', NULL, '2024-03-17 22:17:43', '2024-03-17 22:17:43', '23223323', 'client', NULL, 0, 0),
(19, 'lina', 'lina@gmail.com', NULL, '$2y$12$TsxebZr8Vmb5YGpqQvZF9OnEM8L7aKPJWHPSsBgLWoeEHyfj6kL2S', NULL, '2024-03-17 22:33:29', '2024-03-17 22:33:29', '43434343434', 'host', '123456', 0, 0),
(20, 'alex', 'alex@gmail.com', NULL, '$2y$12$C.vVzbcdgOjt3sG5OI8fmeR3w34MwQhzGJIj86y8YYLQYem64E2Hi', NULL, '2024-03-18 10:23:42', '2024-03-18 10:23:42', '323232323', 'client', NULL, 0, 0),
(21, 'ali', 'ali12@gmail.com', NULL, '$2y$12$gwKuPIHeAaB4C34wK0GZT.wjbdQtgYEjqVdAfFihbTPHYLRn.mb.C', NULL, '2024-03-18 10:28:00', '2024-03-18 10:28:00', '343434', 'host', '123456', 0, 0),
(22, 'Nadira', 'nadira01@gmail.com', NULL, '$2y$12$lMgnAzAYNSfltrmyNfvCq.Qggmeo/cIsCVlos9Grj2iIjzaDhrcfK', NULL, '2024-03-24 10:47:04', '2024-03-24 10:47:04', '12341234', 'host', NULL, 1, 1),
(23, 'Nadira', 'nadira02@gmail.com', NULL, '$2y$12$lMgnAzAYNSfltrmyNfvCq.Qggmeo/cIsCVlos9Grj2iIjzaDhrcfK', NULL, '2024-03-24 10:47:04', '2024-03-24 10:47:04', '12341234', 'admin', NULL, 1, 0),
(24, 'Nadira', 'nadira03@gmail.com', NULL, '$2y$12$lMgnAzAYNSfltrmyNfvCq.Qggmeo/cIsCVlos9Grj2iIjzaDhrcfK', NULL, '2024-03-24 10:47:04', '2024-03-24 10:47:04', '12341234', 'host', '1234567', 1, 0),
(25, 'ipo', 'ipo@gmail.com', NULL, '$2y$12$RhczvlVrHUcyxVRcQyAesuP6T8NjUCQxn4KphtkforwrRU7zw1Piu', NULL, '2024-03-24 22:09:00', '2024-03-24 22:09:00', '1234512345', 'client', NULL, 1, 0),
(27, 'Nadira', 'nadira04@gmail.com', NULL, '$2y$12$lMgnAzAYNSfltrmyNfvCq.Qggmeo/cIsCVlos9Grj2iIjzaDhrcfK', NULL, '2024-03-24 10:47:04', '2024-03-24 10:47:04', '12341234', 'host', '1234567', 0, 0),
(29, '1234', 'poipoi@gmail.com', NULL, '$2y$12$Q/F98tI11qmboqx95ScKM.mDJv4EeSjGMUs9HAEZvXojiVg8Cozz6', NULL, '2024-03-25 09:45:03', '2024-03-25 09:45:03', '12341234', 'affiliate', '1234567', 0, 0),
(30, '1234', '1234@gmail.com', NULL, '$2y$12$JLe91xeawA5cFxViNNcImuECFQzfL591ujhet5xkwE.ontvnv4KzW', NULL, '2024-03-25 09:46:37', '2024-03-25 09:46:37', '12341234', 'affiliate', '1234567', 0, 0),
(31, '123123', '123123@gmail.com', NULL, '$2y$12$dmnxDpnJUCf8tRBZ7cBh8.N5nFVXO6g2LbLOclxCzDTWu20JsKv2a', NULL, '2024-03-25 09:48:55', '2024-03-25 09:48:55', '123123', 'affiliate', '123456', 1, 0),
(32, 'wefu@mailinator.com', 'juwuq@mailinator.com', NULL, '$2y$12$PLNfyX.h5RO.RTHdPtpbmOLatNtNPx6Kp/uprU294sr.mLmYVKnDC', NULL, '2024-03-25 09:54:39', '2024-03-25 09:54:39', 'tezyt@mailinator.com', 'affiliate', '123456', 0, 0),
(34, 'hekeke@mailinator.com', 'mywybiwuk@mailinator.com', NULL, '$2y$12$lBU1N0xlOtJZmW2goCSr9eM1Bo.tklEHlbJ/NSVCgYBPKPoT7kkH6', NULL, '2024-03-25 19:18:31', '2024-03-25 19:18:31', 'numyg@mailinator.com', 'affiliate', '1234567', 0, 0),
(35, 'luwagaf@mailinator.com', 'xusyhafi@mailinator.com', NULL, '$2y$12$Rdj1ra2daz3EDQ5shuiW..CpeHvj2bXH4pfXlP6i9CoU9M2j9Nqj2', NULL, '2024-03-25 19:19:08', '2024-03-25 19:19:08', 'roqi@mailinator.com', 'affiliate', '1234567', 0, 0),
(36, 'fumizizyl@mailinator.com', 'wipyr@mailinator.com', NULL, '$2y$12$WpXUA1C1mxyveMynpCeemOGxWMDhNYlsVaeZzn4y1iL1eCiBgno6S', NULL, '2024-03-28 07:46:07', '2024-03-28 07:46:07', 'fireke@mailinator.com', 'client', NULL, 0, 0),
(37, 'nicetyt@mailinator.com', 'jimufiwypy@mailinator.com', NULL, '$2y$12$cy2nPaKhYV1nZ.y7H6jnWePnfyCsMupCokBAJvydQ8ymDWzrmq9sG', NULL, '2024-03-28 07:46:36', '2024-03-28 07:46:36', 'keta@mailinator.com', 'host', NULL, 0, 0),
(38, 'bonejel@mailinator.com', 'rijehediwa@mailinator.com', NULL, '$2y$12$V.ZaoH1yg5uLEpy9zQYqp.y3GQ1sCztn4ZlaeddQCkAu8zn/cAtfK', NULL, '2024-03-28 07:46:52', '2024-03-28 07:46:52', 'kinof@mailinator.com', 'affiliate', 'sagurevys@mailinator.com', 0, 0),
(39, 'tigute@mailinator.com', 'rijerivin@mailinator.com', NULL, '$2y$12$rvs3JUq.jwsziZkve5WmKOe2jAajdrUFQk/Y8TQ2ktpK1fXYypWCW', NULL, '2024-04-01 08:37:49', '2024-04-01 08:37:49', 'rotasuz@mailinator.com', 'host', NULL, 0, 0),
(40, 'tadi@mailinator.com', 'rulezuja@mailinator.com', NULL, '$2y$12$vctd9TIpYmXb8g3uHVUb6e//pDUk9pcQBh4UIzqkRY7ggMzxKkqCa', NULL, '2024-04-01 08:38:26', '2024-04-01 08:38:26', 'javuwy@mailinator.com', 'host', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `room_chats`
--
ALTER TABLE `room_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `room_chats`
--
ALTER TABLE `room_chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `host`
--
ALTER TABLE `host`
  ADD CONSTRAINT `host_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
