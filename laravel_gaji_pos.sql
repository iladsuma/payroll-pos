-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_gaji_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cabang` varchar(255) NOT NULL,
  `gaji_pokok` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nama`, `cabang`, `gaji_pokok`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', 'Srengat', '2000000.00', '2024-07-15 05:53:49', '2024-07-16 16:42:05'),
(2, 'Siti Aminah', 'Srengat', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:42:42'),
(3, 'Joko Susilo', 'Srengat', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:43:05'),
(4, 'Rini Setiawati', 'Srengat', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:42:37'),
(5, 'Andi Wijaya', 'Srengat', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:42:31'),
(6, 'Ahmad Fauzi', 'Wonodadi', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:15:48'),
(7, 'Lina Indah', 'Wonodadi', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:16:21'),
(8, 'Surya Nugraha', 'Wonodadi', '2000000.00', '2024-07-15 05:53:49', '2024-07-16 17:16:10'),
(9, 'Fitriani Wulandari', 'Wonodadi', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:16:30'),
(10, 'Hendra Wijaya', 'Wonodadi', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:16:39'),
(11, 'Dewi Lestari', 'Sanankulon', '2000000.00', '2024-07-15 05:53:49', '2024-07-16 07:35:37'),
(12, 'Arief Gunawan', 'Sanankulon', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:42:59'),
(13, 'Fitri Handayani', 'Sanankulon', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:54:45'),
(14, 'Eko Prasetyo', 'Sanankulon', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:54:56'),
(15, 'Siti Rahayu', 'Sanankulon', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:56:14'),
(16, 'Agus Salim', 'Ponggok', '2000000.00', '2024-07-15 05:53:49', '2024-07-16 16:56:27'),
(17, 'Rina Fitriani', 'Ponggok', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:56:37'),
(18, 'Dedi Prasetya', 'Ponggok', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:56:49'),
(19, 'Nina Kusuma', 'Ponggok', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:57:04'),
(20, 'Yanto Wijaya', 'Ponggok', '500000.00', '2024-07-15 05:53:49', '2024-07-16 16:57:10'),
(21, 'Putri Anggraini', 'Kademangan', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:16:50'),
(22, 'Joko Santoso', 'Kademangan', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:16:59'),
(23, 'Lia Fitriani', 'Kademangan', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:17:14'),
(24, 'Rudi Hartono', 'Kademangan', '2000000.00', '2024-07-15 05:53:49', '2024-07-16 17:17:23'),
(25, 'Dewi Rahayu', 'Kademangan', '500000.00', '2024-07-15 05:53:49', '2024-07-16 17:17:29');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_02_131648_create_karyawan_table', 2),
(5, '2024_07_03_004945_create_pengiriman_table', 3),
(6, '2024_07_03_011946_create_potongan_gaji_table', 4);

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
-- Table structure for table `pengirimen`
--

CREATE TABLE `pengirimen` (
  `id` int(11) NOT NULL,
  `karyawan_id` int(11) DEFAULT NULL,
  `jumlah_pengiriman` int(11) DEFAULT NULL,
  `resi` varchar(255) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengirimen`
--

INSERT INTO `pengirimen` (`id`, `karyawan_id`, `jumlah_pengiriman`, `resi`, `tanggal_pengiriman`, `created_at`, `updated_at`) VALUES
(2, 2, 16, 'RES223', '2024-07-02', '2024-07-15 05:53:49', '2024-07-21 03:23:39'),
(3, 3, 12, 'RESI003', '2024-07-03', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(7, 7, 17, 'RESI007', '2024-07-07', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(8, 8, 14, 'RESI008', '2024-07-08', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(9, 9, 16, 'RESI009', '2024-07-09', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(10, 10, 13, 'RESI010', '2024-07-10', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(11, 11, 30, 'RESI011', '2024-07-01', '2024-07-15 05:53:49', '2024-07-21 03:23:33'),
(12, 12, 15, 'RESI012', '2024-07-02', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(14, 14, 18, 'RESI014', '2024-07-04', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(15, 15, 20, 'RESI015', '2024-07-05', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(16, 16, 11, 'RESI016', '2024-07-06', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(17, 17, 17, 'RESI017', '2024-07-07', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(18, 18, 14, 'RESI018', '2024-07-08', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(19, 19, 16, 'RESI019', '2024-07-09', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(20, 20, 13, 'RESI020', '2024-07-10', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(21, 21, 10, 'RESI021', '2024-07-01', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(22, 22, 15, 'RESI022', '2024-07-02', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(23, 23, 12, 'RESI023', '2024-07-03', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(24, 24, 18, 'RESI024', '2024-07-04', '2024-07-15 05:53:49', '2024-07-15 05:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL,
  `karyawan_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `potongan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id`, `karyawan_id`, `jumlah`, `potongan`, `created_at`, `updated_at`) VALUES
(3, 3, 3, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-16 18:17:40'),
(4, 4, 8, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(5, 5, 6, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(6, 6, 4, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(7, 7, 7, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(8, 8, 0, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-16 17:20:52'),
(9, 9, 8, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(10, 10, 5, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(12, 12, 0, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-16 17:20:28'),
(13, 13, 8, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(14, 14, 5, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(15, 15, 4, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(16, 16, 9, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(17, 17, 3, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(18, 18, 9, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(19, 19, 9, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(20, 20, 1, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(21, 21, 6, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(22, 22, 3, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(23, 23, 7, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49'),
(24, 24, 0, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-16 17:20:35'),
(25, 25, 3, 'Potongan Absensi', '2024-07-15 05:53:49', '2024-07-15 05:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1XzOrHbZsWyopwL9FDZYNchE5zFkspoNn41cDzEC', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUkJXNmZaVHgzTjJQN3IybVpOZWwzc2xqZmF4bHkxYlpxbzVER2hHSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1721565071);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-07-02 06:17:11', '$2y$12$SOvv0.o/J5UTfvlT3vyhPuRT9MUm9b1SOxGdCdDtPN37gTXxff2ge', 'zvJgqW1fca', '2024-07-02 06:17:11', '2024-07-02 06:17:11'),
(2, 'Admin', 'admin@example.com', NULL, '$2y$12$V/tUR22/oOxKd.oWnkMz0e73GTyh0K8yAif.uUIkj0HghONIWo3.u', NULL, '2024-07-02 06:19:47', '2024-07-02 06:19:47'),
(3, 'User1', 'user1@example.com', NULL, '$2y$12$KoKG9g6Bkb6CkeM.r1XF3eRk0aeib1tupZ4XoiAWxDcXHLaV.SE4K', NULL, '2024-07-02 06:19:47', '2024-07-02 06:19:47'),
(4, 'User2', 'user2@example.com', NULL, '$2y$12$HzwXYXgsPrrRRfJlFWl2b.q5ABHguHbEvKAvQL6qdEzlPIvkOsaz2', NULL, '2024-07-02 06:19:48', '2024-07-02 06:19:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pengirimen`
--
ALTER TABLE `pengirimen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengirimen_ibfk_1` (`karyawan_id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `potongan_gaji_ibfk_1` (`karyawan_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengirimen`
--
ALTER TABLE `pengirimen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengirimen`
--
ALTER TABLE `pengirimen`
  ADD CONSTRAINT `pengirimen_ibfk_1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD CONSTRAINT `potongan_gaji_ibfk_1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
