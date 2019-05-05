-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 02:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawadikap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@sawadikap.com');

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
(1, '2019_04_02_075405_tbl_user', 1),
(2, '2019_04_02_075444_tbl_pakaian', 1),
(3, '2019_04_02_075536_tbl_kategori', 1),
(4, '2019_04_02_075544_tbl_request', 1),
(5, '2019_04_02_075555_tbl_reward', 1),
(6, '2019_04_02_075603_tbl_reward_sku', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `jenis_pakaian` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `jenis_pakaian`) VALUES
(1, 'kaos'),
(2, 'kemeja'),
(3, 'gaun'),
(4, 'jaket');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pakaian`
--

CREATE TABLE `tbl_pakaian` (
  `id_pakaian` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_request` int(10) UNSIGNED NOT NULL,
  `jenis_ukuran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_usia` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_baju` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_pakaian`
--

INSERT INTO `tbl_pakaian` (`id_pakaian`, `id_user`, `id_request`, `jenis_ukuran`, `jenis_gender`, `jenis_usia`, `jenis_baju`, `foto`, `date_input`, `update_date`, `delete_status`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 0, 's', 'laki-laki', 'Bayi', 'kaos', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=4506103a-fa9e-4092-b0da-3575bf533f83', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'masih bagus', '2019-04-30 07:19:43', '2019-04-30 07:19:43'),
(2, 1, 0, 'xl', 'laki-laki', 'Balita', 'kemeja', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=4415c8ec-3250-4da4-94f5-745a4c27d373', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'layak pakai', '2019-04-30 07:24:11', '2019-04-30 07:24:11'),
(3, 1, 0, 'm', 'laki-laki', 'Balita', 'kemeja', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=d3ddd550-af85-4db6-8f8d-104bf9d6c445', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'masih bagus', '2019-04-30 07:37:11', '2019-04-30 07:37:11'),
(4, 1, 0, 'l', 'laki-laki', 'Dewasa', 'jaket', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=f2a1f1ba-d3be-4f11-a1af-29098ece1c80', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'masih bagus', '2019-04-30 07:51:47', '2019-04-30 07:51:47'),
(5, 1, 0, 'm', 'perempuan', 'Remaja', 'kemeja', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=2c2087d3-4bab-4936-b7a7-9dbe7c08b808', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'masih bagus', '2019-04-30 07:52:45', '2019-04-30 07:52:45'),
(6, 1, 0, 'm', 'perempuan', 'Remaja', 'gaun', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=6ea0b930-ae01-4807-96ed-2748d11f3c8f', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'seperti baru', '2019-04-30 07:57:02', '2019-04-30 07:57:02'),
(7, 1, 0, 'm', 'perempuan', 'Remaja', 'gaun', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=60e6a5c0-a300-405d-bf48-80e5c2a0f073', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'seperti baru', '2019-04-30 07:57:18', '2019-04-30 07:57:18'),
(8, 1, 0, 'm', 'perempuan', 'Remaja', 'gaun', 'https://firebasestorage.googleapis.com/v0/b/sawadikap-image.appspot.com/o/user-image?alt=media&token=5be77b06-2488-48e9-849d-0f20a1cb9e1e', '2019-05-05 12:03:23', '2019-05-05 12:03:23', '', 'seperti baru', '2019-04-30 07:57:39', '2019-04-30 07:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id_request` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reward`
--

CREATE TABLE `tbl_reward` (
  `id_reward` int(10) UNSIGNED NOT NULL,
  `jenis_reward` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reward_sku`
--

CREATE TABLE `tbl_reward_sku` (
  `id_reward_sku` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_reward` int(10) UNSIGNED NOT NULL,
  `date_achieved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `url_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `fullname`, `email`, `username`, `url_foto`, `password`, `phone`, `address`, `remember_token`, `date_join`, `created_at`, `updated_at`) VALUES
(1, '', 'islam2@gmail.com', 'muham_istau', '', '$2y$10$3h1AYxjM13tQ9Y5qdgEkUe455JtdbpJSsPNRssg14GoEHLaW998r.', NULL, '', NULL, '2019-05-05 12:03:24', '2019-04-07 11:51:08', '2019-04-07 11:51:08'),
(2, '', 'test@gmail.com', 'test', '', '$2y$10$cXX2YlqAc3sP7MCjpwRjduFLXU0Gx5J4pk9SnkrepwW8R29zhMamm', NULL, '', NULL, '2019-05-05 12:03:24', '2019-04-07 12:17:31', '2019-04-07 12:17:31'),
(3, '', 'islam3@gmail.com', 'muham_ista', '', '$2y$10$ympXA/Q4jn2itP2xssBgf.Q.usDTHlKeEjGYqYFbt1CBqB80V0vQ2', NULL, '', NULL, '2019-05-05 12:03:24', '2019-04-09 07:08:54', '2019-04-09 07:08:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pakaian`
--
ALTER TABLE `tbl_pakaian`
  ADD PRIMARY KEY (`id_pakaian`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `tbl_reward`
--
ALTER TABLE `tbl_reward`
  ADD PRIMARY KEY (`id_reward`);

--
-- Indexes for table `tbl_reward_sku`
--
ALTER TABLE `tbl_reward_sku`
  ADD PRIMARY KEY (`id_reward_sku`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `tbl_user_email_unique` (`email`),
  ADD UNIQUE KEY `tbl_user_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pakaian`
--
ALTER TABLE `tbl_pakaian`
  MODIFY `id_pakaian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id_request` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reward`
--
ALTER TABLE `tbl_reward`
  MODIFY `id_reward` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reward_sku`
--
ALTER TABLE `tbl_reward_sku`
  MODIFY `id_reward_sku` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
