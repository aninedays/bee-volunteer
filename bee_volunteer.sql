-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 08:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bee_volunteer`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `organization_id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'Melukis Bersama di Akhir Pekan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\n            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\n            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(2, 2, 'Melukis Bersama di Akhir', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\n            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\n            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-09-22 19:12:42', '2022-09-22 19:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Pendidikan', 'images/edu.jpg', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(2, 'Kesehatan', 'images/health.jpg', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(3, 'Olahraga', 'images/sport.jpg', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(4, 'Seni', 'images/art.jpg', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(5, 'Lingkungan', 'images/env.jpg', '2022-09-22 19:12:42', '2022-09-22 19:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `charities`
--

CREATE TABLE `charities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `charity_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charity_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charity_excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charity_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `charity_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charity_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charities`
--

INSERT INTO `charities` (`id`, `organization_id`, `type_id`, `category_id`, `charity_title`, `charity_img`, `charity_excerpt`, `charity_desc`, `charity_location`, `charity_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 'Belajar Lukis Bersama, Yuk!', 'images/art.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'GBK Senayan, Jakarta', '2022-09-19', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(2, 1, 2, 1, 'Donasi Buku', 'images/book_donations.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Mbloc Blok M, Jakarta Selatan', '2022-09-19', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(3, 2, 1, 5, 'Buat Pantai Kembali Bersih!', 'images/enviVolunteer.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Pantai Ancol, Jakarta Utara', '2022-10-22', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(4, 3, 2, 2, 'Makanan Lezat, Yes! Bergizi? Harus!', 'images/foodDonation.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,\n            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Bintaro, Tangerang Selatan', '2022-11-19', '2022-09-22 19:12:42', '2022-09-22 19:12:42');

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `charity_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `type_id`, `category_id`, `charity_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(2, 2, 2, 2, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(3, 1, 3, 3, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(4, 2, 4, 4, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(5, 1, 5, 3, '2022-09-22 19:12:42', '2022-09-22 19:12:42');

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
(4, '2022_09_01_010139_create_categories_table', 1),
(5, '2022_09_01_010532_create_types_table', 1),
(6, '2022_09_01_020256_create_organizations_table', 1),
(7, '2022_09_02_083036_create_charities_table', 1),
(8, '2022_09_08_014925_create_volunteers_table', 1),
(9, '2022_09_13_165707_create_teams_table', 1),
(10, '2022_09_14_011408_create_articles_table', 1),
(11, '2022_09_15_014649_create_homes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `org_domicile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `user_id`, `category_id`, `org_domicile`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'Jakarta Barat', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(2, 1, 5, 'Bandung', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(3, 3, 2, 'Semarang', '2022-09-22 19:12:42', '2022-09-22 19:12:42');

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `jobdesc`, `created_at`, `updated_at`) VALUES
(1, 'ANINDA HANIFA SARI', 'Back-End Developer', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(2, 'DINDA ALISYA', 'Front-End Developer', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(3, 'YOSIHANA SINAGA', 'UI/UX Designer', '2022-09-22 19:12:42', '2022-09-22 19:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type_name`, `type_image`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'images/Service.jpg', '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(2, 'Donations', 'images/Donation.jpg', '2022-09-22 19:12:42', '2022-09-22 19:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dob` date NOT NULL,
  `user_role` enum('Admin','Organization','Volunteer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Organization',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `password`, `user_address`, `user_phone`, `user_dob`, `user_role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Organisasi A', 'organization@gmail.com', '$2y$10$.mX9j5VvUQq457jXS8RuW.ttXWRHesBiAla8Nmc11r2hFRHfQstKK', 'Kemanggisan, Jakarta Barat', '08123451671', '2010-10-13', 'Organization', NULL, NULL, '2022-09-22 19:12:41', '2022-09-22 19:12:41'),
(2, 'Organisasi B', 'organization_b@gmail.com', '$2y$10$5X4uGWj7bi1nDUEA.eiaQ.M2lpH9LXWv0ui2DCfhs65xOOAAJrj/O', 'Bogor, Jawa Barat', '08123452918', '2017-08-25', 'Organization', NULL, NULL, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(3, 'Organisasi C', 'organization_c@gmail.com', '$2y$10$mQ.GofJXrLFAeymWhZgRxuhphc3ZS6PgI8RzYCtoz9.GzvjHa1e5C', 'Tangerang, Banten', '081234598765', '2015-06-07', 'Organization', NULL, NULL, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(4, 'anindahs', 'anindahs@gmail.com', '$2y$10$rJiiZRjQx17.taLXSQuHEefjFco5zP6Jg8rITACiTz46pjCfdXeE.', 'Ciledug, Kota Tangerang', '08165431213', '2000-09-25', 'Volunteer', NULL, NULL, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(5, 'diisyaa', 'dindaAlisya@gmail.com', '$2y$10$1c1.k3LZX0X2LwiVlNZo.O2AfsoLV7rWz.sCBLyRrqIWZt.DU93z2', 'Perumahan Maharta, Jl. Kejayaan XI', '081654387610', '1998-07-25', 'Volunteer', NULL, NULL, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(6, 'yosihanaaa_', 'ysshana@gmail.com', '$2y$10$YF10yEKNaORrPAX1eItn5.fWOUaErfxUT0gyREOpgxukKGeB9GAG.', 'Komplek Kota Bumi, Kabupaten Tangerang', '08165439018', '1999-12-25', 'Volunteer', NULL, NULL, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(7, 'admin', 'admin@gmail.com', '$2y$10$BnzxO4T.mZ9wDz5CVQfxROjcaUJxclRnAPLgDhtm7z55fgfdwtRx2', 'Surabaya, Jawa Timur', '081809871265', '2002-01-13', 'Admin', NULL, NULL, '2022-09-22 19:12:42', '2022-09-22 19:12:42'),
(11, 'Organisasi D', 'organization_d@gmail.com', '$2y$10$WKHRc9l0GQwMJe3EETsek.Wo/WCy/uIU/Y32TSCUZIQ3IkAw9dwp6', 'Kebayoran Lama, Jakarta Selatan', '0817612019', '2022-07-20', 'Organization', NULL, NULL, '2022-09-22 19:29:57', '2022-09-22 19:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `v_interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_expertise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_domicile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_age` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charities`
--
ALTER TABLE `charities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `charities`
--
ALTER TABLE `charities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
