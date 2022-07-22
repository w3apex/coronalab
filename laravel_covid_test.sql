-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 08:41 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@w3apex.com', 'superadmin', NULL, '$2y$10$GkF8ksDddvvhupJsjQJ5Rez7acazlSIA50AVzF6MFtyzDSFL2Qu/6', NULL, '2021-01-23 12:30:31', '2021-01-23 19:23:44'),
(2, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$/.CR7KOXYRBEUY0zMMNdCuh/f8O5HrSgkYaaRrGEI1rjP5VHad..2', NULL, '2021-01-23 13:01:12', '2021-01-23 13:13:52'),
(3, 'Lab Technician', 'lab@gmail.com', 'lab', NULL, '$2y$10$HZJh.HuRYVu9JKYzLZvzAuQIJEBRJQ/78lEdcxKen.N3qtLkM07pK', NULL, '2021-01-23 13:22:31', '2021-01-23 13:22:31'),
(4, 'Doctor', 'doctor@gmail.com', 'doctor', NULL, '$2y$10$ddZ4VL4XavzuCoGX5wgZQOjTcBs4bsC70k1NqW7m2CnWJQwvjcNpC', NULL, '2021-01-23 13:23:20', '2021-01-23 13:23:20'),
(5, 'doctor1', 'doctor1@gmail.com', 'doctor1', NULL, '$2y$10$j95XmuSh5SwBQq02EKP9k.ZrmnxMZfrOiPuFHpyaXkPNzpue5zUjW', NULL, '2021-01-24 07:43:55', '2021-01-24 07:43:55'),
(6, 'driver 2', 'superaddddmin@w3apex.com', 'driver', NULL, '$2y$10$ie2StUVUjCrmGtZgzKCe8.Txz2s0KC/xQuBYp2v0FWVLkDcNxCERy', NULL, '2021-01-24 08:07:44', '2021-01-24 08:07:44'),
(7, 'New Doc', 'new@w3apex.com', 'new', NULL, '$2y$10$38186aRuffl43yM4uAoqROz35Di3uWvEebhvEDFtqSwn/xFkBG6bu', NULL, '2021-01-25 05:00:44', '2021-01-25 05:00:44'),
(8, 'night', 'superadmfffin@w3apex.com', 'gggggggggg', NULL, '$2y$10$Ny./uZFGkzoZJQTOFmD.Euc/2e.78T23xuECokDIG2Rv4N6SwLnyG', NULL, '2021-01-25 05:02:36', '2021-01-25 05:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ref_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` date NOT NULL,
  `report_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Positive|Negative',
  `lab_tech_sign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_sign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Booked | Collected | Complete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `admin_id`, `ref_id`, `time`, `date`, `report_status`, `lab_tech_sign`, `doctor_sign`, `booking_status`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'BK2921', '2021-01-23 20:52:30', '2021-01-28', 'positive', '1', '1', 'complete', '2021-01-23 14:42:58', '2021-01-23 14:52:30'),
(2, 4, NULL, 'BK690', '2021-01-24 04:54:03', '2021-01-30', NULL, NULL, NULL, 'booked', '2021-01-23 22:54:03', '2021-01-23 22:54:03'),
(3, 5, NULL, 'BK6791', '2021-01-24 04:55:25', '2021-01-30', NULL, NULL, NULL, 'booked', '2021-01-23 22:55:25', '2021-01-23 22:55:25'),
(4, 6, NULL, 'BK7288', '2021-01-24 04:56:56', '2021-01-30', NULL, NULL, NULL, 'booked', '2021-01-23 22:56:56', '2021-01-23 22:56:56'),
(5, 7, NULL, 'BK7308', '2021-01-24 04:59:07', '2021-01-30', NULL, NULL, NULL, 'booked', '2021-01-23 22:59:07', '2021-01-23 22:59:07'),
(6, 15, NULL, 'BK9850', '2021-01-24 05:59:09', '2021-01-30', 'positive', NULL, NULL, 'collected', '2021-01-23 23:56:00', '2021-01-23 23:59:09'),
(7, 16, NULL, 'BK312', '2021-01-24 14:03:58', '2021-01-28', 'negative', '1', NULL, 'complete', '2021-01-24 07:58:18', '2021-01-24 08:03:58'),
(8, 17, NULL, 'BK5681', '2021-01-25 10:56:34', '2021-01-31', 'positive', '1', '1', 'complete', '2021-01-25 04:52:17', '2021-01-25 04:56:34'),
(9, 18, NULL, 'BK2012', '2021-02-08 11:39:29', '2021-02-20', NULL, NULL, NULL, 'booked', '2021-02-08 05:39:29', '2021-02-08 05:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2021-01-23 13:29:20', '2021-01-23 13:29:20'),
(2, 'Faridpur', 1, '2021-01-23 13:32:07', '2021-01-23 13:32:07'),
(3, 'Khulna', 3, '2021-01-23 13:32:28', '2021-01-23 13:32:28'),
(4, 'Gazipur', 1, '2021-01-23 13:32:56', '2021-01-23 13:32:56'),
(5, 'Gopalganj', 1, '2021-01-23 13:33:06', '2021-01-23 13:33:06'),
(6, 'Kishoreganj', 1, '2021-01-23 13:33:16', '2021-01-23 13:33:16'),
(7, 'Madaripur', 1, '2021-01-23 13:33:26', '2021-01-23 13:33:26'),
(8, 'Manikganj', 1, '2021-01-23 13:33:34', '2021-01-23 13:33:34'),
(9, 'Munshiganj', 1, '2021-01-23 13:33:43', '2021-01-23 13:33:43'),
(10, 'Narayanganj', 1, '2021-01-23 13:33:51', '2021-01-23 13:33:51'),
(11, 'Narsingdi', 1, '2021-01-23 13:33:58', '2021-01-23 13:33:58'),
(12, 'Rajbari', 1, '2021-01-23 13:34:07', '2021-01-23 13:34:07'),
(13, 'Shariatpur', 1, '2021-01-23 13:34:18', '2021-01-23 13:34:18'),
(14, 'Tangail', 1, '2021-01-23 13:34:26', '2021-01-23 13:34:26'),
(15, 'Jhenaidah', 3, '2021-01-23 13:34:47', '2021-01-23 13:34:47'),
(16, 'Meherpur', 3, '2021-01-23 13:34:57', '2021-01-23 13:34:57'),
(17, 'Magura', 3, '2021-01-23 13:35:09', '2021-01-23 13:35:09'),
(18, 'Kushtia', 3, '2021-01-23 13:35:18', '2021-01-23 13:35:18'),
(19, 'Jessore', 3, '2021-01-23 13:35:26', '2021-01-23 13:35:26'),
(20, 'Narial', 3, '2021-01-23 13:35:37', '2021-01-23 13:35:37'),
(21, 'Bagerhat', 3, '2021-01-23 13:35:47', '2021-01-23 13:35:47'),
(22, 'Chuadanga', 3, '2021-01-23 13:35:57', '2021-01-23 13:35:57'),
(23, 'Satkhira', 3, '2021-01-23 13:36:09', '2021-01-23 13:36:09'),
(24, 'Maulvibazar', 6, '2021-01-23 13:38:40', '2021-01-23 13:38:40'),
(25, 'Habiganj', 6, '2021-01-23 13:38:50', '2021-01-23 13:38:50'),
(26, 'Sylhet', 6, '2021-01-23 13:38:59', '2021-01-23 13:38:59'),
(27, 'Sunamganj', 6, '2021-01-23 13:39:09', '2021-01-23 13:39:09'),
(28, 'Jamalpur', 8, '2021-01-23 13:39:20', '2021-01-23 13:39:20'),
(29, 'Mymensingh', 8, '2021-01-23 13:39:29', '2021-01-23 13:39:29'),
(30, 'Netrokona', 8, '2021-01-23 13:39:38', '2021-01-23 13:39:38'),
(31, 'Sherpur', 8, '2021-01-23 13:39:49', '2021-01-23 13:39:49'),
(32, 'Patuakhali', 7, '2021-01-23 13:40:24', '2021-01-23 13:40:24'),
(33, 'Kurigram', 5, '2021-01-23 13:40:41', '2021-01-23 13:40:41'),
(34, 'Joypurhat', 4, '2021-01-23 13:40:52', '2021-01-23 13:40:52'),
(35, 'Cox\'s Bazar', 2, '2021-01-23 13:41:05', '2021-01-23 13:41:05'),
(36, 'Khulna', 3, '2021-02-08 05:33:31', '2021-02-08 05:33:31'),
(37, 'Add kartay habay', 8, '2021-02-08 05:35:24', '2021-02-08 05:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2021-01-23 13:26:38', '2021-01-23 13:26:38'),
(2, 'Chittagong', 2, '2021-01-23 13:27:14', '2021-01-23 13:27:14'),
(3, 'Khulna', 3, '2021-01-23 13:27:32', '2021-01-23 13:27:32'),
(4, 'Rajshahi', 4, '2021-01-23 13:27:46', '2021-01-23 13:27:46'),
(5, 'Rangpur', 5, '2021-01-23 13:28:01', '2021-01-23 13:28:01'),
(6, 'Sylhet', 6, '2021-01-23 13:28:16', '2021-01-23 13:28:16'),
(7, 'Barisal', 7, '2021-01-23 13:28:36', '2021-01-23 13:28:36'),
(8, 'Mymensingh', 8, '2021-01-23 13:28:53', '2021-01-23 13:28:53');

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
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_01_11_094522_create_divisions_table', 1),
(15, '2021_01_11_094728_create_districts_table', 1),
(16, '2021_01_12_012552_create_users_table', 1),
(17, '2021_01_14_033208_create_admins_table', 1),
(18, '2021_01_15_112047_create_permission_tables', 1),
(19, '2021_01_16_153909_create_bookings_table', 1),
(20, '2021_01_20_122440_create_payments_table', 1),
(21, '2021_01_21_022932_create_sliders_table', 1),
(22, '2021_01_21_061518_create_services_table', 1);

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
(1, 'App\\Models\\Admin', 1),
(2, 'App\\Models\\Admin', 2),
(3, 'App\\Models\\Admin', 4),
(3, 'App\\Models\\Admin', 5),
(3, 'App\\Models\\Admin', 7),
(4, 'App\\Models\\Admin', 3),
(6, 'App\\Models\\Admin', 6),
(7, 'App\\Models\\Admin', 8);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ref_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online_payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash_payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Success|Fail',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'admin.dashboard', 'admin', 'dashboard', '2021-01-23 12:30:31', '2021-01-23 12:30:31'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(3, 'admins.index', 'admin', 'admin', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(4, 'admins.create', 'admin', 'admin', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(5, 'admins.edit', 'admin', 'admin', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(6, 'admins.delete', 'admin', 'admin', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(7, 'roles.index', 'admin', 'role', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(8, 'roles.create', 'admin', 'role', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(9, 'roles.edit', 'admin', 'role', '2021-01-23 12:30:32', '2021-01-23 12:30:32'),
(10, 'roles.delete', 'admin', 'role', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(11, 'divisions.index', 'admin', 'division', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(12, 'divisions.create', 'admin', 'division', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(13, 'divisions.edit', 'admin', 'division', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(14, 'divisions.delete', 'admin', 'division', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(15, 'districts.index', 'admin', 'district', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(16, 'districts.create', 'admin', 'district', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(17, 'districts.edit', 'admin', 'district', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(18, 'districts.delete', 'admin', 'district', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(19, 'sliders.index', 'admin', 'slider', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(20, 'sliders.create', 'admin', 'slider', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(21, 'sliders.edit', 'admin', 'slider', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(22, 'sliders.delete', 'admin', 'slider', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(23, 'services.index', 'admin', 'service', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(24, 'services.create', 'admin', 'service', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(25, 'services.edit', 'admin', 'service', '2021-01-23 12:30:33', '2021-01-23 12:30:33'),
(26, 'services.delete', 'admin', 'service', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(27, 'bookings.create', 'admin', 'booking', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(28, 'bookings.view', 'admin', 'booking', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(29, 'bookings.edit', 'admin', 'booking', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(30, 'bookings.delete', 'admin', 'booking', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(31, 'booked.list', 'admin', 'labTechnitian', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(32, 'collected.list', 'admin', 'labTechnitian', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(33, 'view.report', 'admin', 'labTechnitian', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(34, 'complete.list', 'admin', 'labTechnitian', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(35, 'view.report.doctor', 'admin', 'labTechnitian', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(36, 'request.list', 'admin', 'doctor', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(37, 'patients.index', 'admin', 'patient', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(38, 'patients.create', 'admin', 'patient', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(39, 'patients.edit', 'admin', 'patient', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(40, 'patients.delete', 'admin', 'patient', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(41, 'transactions.list', 'admin', 'transaction', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(42, 'transactions.edit', 'admin', 'transaction', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(43, 'transactions.refund', 'admin', 'transaction', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(44, 'profile.create', 'admin', 'profile', '2021-01-23 12:30:34', '2021-01-23 12:30:34'),
(45, 'profile.view', 'admin', 'profile', '2021-01-23 12:30:35', '2021-01-23 12:30:35'),
(46, 'profile.edit', 'admin', 'profile', '2021-01-23 12:30:35', '2021-01-23 12:30:35'),
(47, 'blog.create', 'admin', 'blog', '2021-01-23 12:30:35', '2021-01-23 12:30:35'),
(48, 'blog.view', 'admin', 'blog', '2021-01-23 12:30:35', '2021-01-23 12:30:35'),
(49, 'blog.edit', 'admin', 'blog', '2021-01-23 12:30:35', '2021-01-23 12:30:35'),
(50, 'blog.delete', 'admin', 'blog', '2021-01-23 12:30:35', '2021-01-23 12:30:35'),
(51, 'blog.approve', 'admin', 'blog', '2021-01-23 12:30:35', '2021-01-23 12:30:35');

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
(1, 'superadmin', 'admin', '2021-01-23 12:30:31', '2021-01-23 12:30:31'),
(2, 'admin', 'admin', '2021-01-23 12:30:31', '2021-01-23 12:30:31'),
(3, 'doctor', 'admin', '2021-01-23 12:30:31', '2021-01-23 12:30:31'),
(4, 'labtechnitian', 'admin', '2021-01-23 12:30:31', '2021-01-23 12:30:31'),
(6, 'Driver', 'admin', '2021-01-24 08:06:37', '2021-01-24 08:06:37'),
(7, 'night', 'admin', '2021-01-25 05:01:56', '2021-01-25 05:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 4),
(32, 4),
(33, 4),
(34, 1),
(34, 2),
(34, 3),
(34, 4),
(35, 4),
(36, 3),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(41, 1),
(41, 2),
(42, 1),
(43, 1),
(44, 6),
(45, 6),
(46, 6),
(47, 7),
(48, 7),
(49, 7),
(50, 7),
(51, 7);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT 10,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `short_title`, `long_title`, `image`, `button_text`, `button_link`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Covid-19 Alers', 'Save yourself  save the world.', '1611431706.jpg', NULL, NULL, 10, '2021-01-23 13:55:07', '2021-01-23 13:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` tinyint(3) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardian_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0 = Pending | 1 = Approval',
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rememberToken` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `sex`, `date_of_birth`, `phone`, `blood_group`, `gardian`, `gardian_phone_number`, `division_id`, `district_id`, `address`, `profile_status`, `ip_address`, `rememberToken`, `created_at`, `updated_at`) VALUES
(1, 'Gureudas', 'Sana', 'sana@gmail.com', NULL, '$2y$10$Yq7K556fTyw4ShuRGXbCpeEIDzts4blj3Kl0tyq8GSCrJuQ1rewMu', NULL, NULL, '01722211747', NULL, NULL, NULL, 3, 3, '78/11, West Toot Para.', 1, '127.0.0.1', NULL, '2021-01-23 14:38:10', '2021-01-23 14:38:35'),
(2, 'Patient', 'One', 'one@gmail.com', NULL, '$2y$10$j3SUkFrVZ.dM7dnMBgpYk.YrXlEe9wRuVMCb1itijnlb3xnTGQ9Ui', 'male', 56, '01722211748', 'A-', 'Jamal', '01711253698', 1, 1, '85/60, Mali Bag', 1, '127.0.0.1', NULL, '2021-01-23 14:40:29', '2021-01-23 14:42:45'),
(3, 'James', 'Vandermark', 'james@gmail.com', NULL, '$2y$10$GnmtEoGLddn4.57a5KIb1ue6jWLPRYCz2q.MZftBw1ImJ536eYb0u', NULL, NULL, '01722211741', NULL, NULL, NULL, 2, 35, '55/67, new toen', 1, '127.0.0.1', NULL, '2021-01-23 19:28:07', '2021-01-23 19:28:47'),
(4, 'patient', 'three', 'three@gmail.com', NULL, '$2y$10$PT3rZ36RPbQm/15yREtGD.UxSgmEUo538PO62vEAIG67MxZDaT.2y', 'male', 65, '01711254689', 'B+', 'akask', '01754692321', 5, 33, '55/67, new toen', 1, '127.0.0.1', '0hFaZvP9HRXSTUzi3MUsZV0casVc4BL2Wk6pYLyeyKsU7ONQM9', '2021-01-23 19:30:57', '2021-01-23 22:53:43'),
(5, 'patient', 'four', 'four@gmail.com', NULL, '$2y$10$eaoNjwD.eAidPrDSHNNynuE1POAlMgs2jsRGNHf.xZJcBx0ubGrLe', 'female', 23, '01963251478', 'AB+', 'Joy', '01623457896', 5, 33, '55/67, new toen', 1, '127.0.0.1', 'bUKlY35ofDCkQfuJEPVRUYHRDLElwcFYxUfkJ8D6HGiGmLwAMo', '2021-01-23 19:32:29', '2021-01-23 22:55:12'),
(6, 'patient', 'five', 'five@gmail.com', NULL, '$2y$10$oIJ10sj01NfWzwPVB3LDruVkQAlEQtMknW7UxwWPf4Tw6cTUytsiq', NULL, NULL, '01756224595', NULL, NULL, NULL, 1, 11, '55/67, new toen', 1, '127.0.0.1', NULL, '2021-01-23 19:33:29', '2021-01-23 19:43:14'),
(7, 'patient', 'six', 'six@gmail.com', NULL, '$2y$10$xI4WI6XSWX0IJbKOl30oVuEXxD3H98si7XVeEts/MlQ54UDLBcdXS', 'male', NULL, '01963251475', 'O+', 'Mizan', '01754692366', 3, 20, '55/67, new toen', 1, '127.0.0.1', NULL, '2021-01-23 19:34:29', '2021-01-23 22:58:10'),
(8, 'patient', 'Seven', 'seven@gmail.com', NULL, '$2y$10$ftnPzhQwxL0XfpqcJQ4sOOydJrl9Fvk1sex1KP/h/dSu9F9tz0zqa', 'female', 55, '01963251499', 'O-', 'sagor', '01754692789', 3, 16, '55/67, new toen', 1, '127.0.0.1', 'SnwAnkJiX2LaIigVnU7ZXMy7xbu4Q1ExH3v14TmlodqmYnZHRN', '2021-01-23 19:35:57', '2021-01-23 23:01:51'),
(9, 'patient', 'eight', 'eight@gmail.com', NULL, '$2y$10$eQ3gf73BIfjiTb9.Fd2btu.ismhS7O5ZDhx3TYazXc5kC0ZZJofoK', NULL, NULL, '01678451235', NULL, NULL, NULL, 1, 8, '55/67, new toen', 1, '127.0.0.1', 'w4etTrp1djVsSvLd8Vyh9tR22PgB1n58eDkxidioBubSxbTgTp', '2021-01-23 19:37:21', '2021-01-23 19:37:21'),
(12, 'patient', 'nine', 'nine@gmail.com', NULL, '$2y$10$bG2i7Citz1954E3eKaE5sOaoDc2/tXxO48X4VEr4xITa/ucE/5lNC', NULL, NULL, '01756224500', NULL, NULL, NULL, 3, 15, '55/67, new toen', 1, '127.0.0.1', 'pDhBWLsClLhZkaIxBmTFGwibdbc5cQkmZgqSPDhY61eiFSYZvV', '2021-01-23 19:41:09', '2021-01-23 19:41:09'),
(13, 'p', 'ten', 'ten@gmail.com', NULL, '$2y$10$phjOuUyxcfheyFMbKeXDq.cZJi.yNFKfI8puc5BeT9.l.zCQlytgC', NULL, NULL, '01963251466', NULL, NULL, NULL, 3, 23, '55/67, new toen', 1, '127.0.0.1', 'vthWCXmQg6oYKjzc88pmc3EB3TFRv27ucCzsCtW8DD5FfWn3un', '2021-01-23 19:42:43', '2021-01-23 19:42:43'),
(14, 'patient', 'two', 'two@gmail.com', NULL, '$2y$10$U2.qa1/8gBCE2nlOjhBxh.69iu2.qqX4rRzbJfNiNjQp.wzcgK8zy', NULL, NULL, '01963251411', NULL, NULL, NULL, 1, 9, '55/67, new toen', 1, '127.0.0.1', NULL, '2021-01-23 19:45:00', '2021-01-23 19:45:15'),
(15, 'Test', 'Test', 'test@gmail.com', NULL, '$2y$10$ai7ZyDdzpNUGpltPy6MLt../oNMS2Cktk4KOeN2/g1hfJ6oaXdvJu', 'female', 65, '01733254689', 'B+', 'test', '017568985', 3, 19, 'test', 1, '127.0.0.1', NULL, '2021-01-23 23:54:13', '2021-01-23 23:55:31'),
(16, 'Prodip1', 'Das', 'prodip@gmail.com', NULL, '$2y$10$P6bcyWOtjNo3Zoo2a4JUheQtbuNwe7Jub9./QjPwI1L.sETTBYVDe', 'female', 22, '01789562514', 'AB+', 'sagordddddddddd', '01754695555', 3, 21, '55/67, new toen', 1, '127.0.0.1', NULL, '2021-01-24 07:53:35', '2021-01-24 07:56:41'),
(17, 'Kuntal', 'Roy', 'roy@gmail.com', NULL, '$2y$10$1NI6NixEwe6KC5E81IZdfuG0hxl/JyDh2xl.faOL6v6v6tm3BmOYC', 'male', 32, '01755693215', 'O-', 'hhhhhhhhhhhhhhhh', '01754691122', 1, 12, '55/67, new toen', 1, '127.0.0.1', NULL, '2021-01-25 04:50:10', '2021-01-25 04:51:44'),
(18, 'Md', 'Mizan', 'mizan@gmail.com', NULL, '$2y$10$nobxUpgpG27eSDNiiFsJNOoZp6Fi7HSIUVrJDNTqJa3LvvTH1qh9e', 'male', 65, '01736598632', 'A+', 'aaaaaaaaaa', '01754692788', 3, 3, '55/67, new toen', 1, '127.0.0.1', NULL, '2021-02-08 05:37:04', '2021-02-08 05:38:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_gardian_phone_number_unique` (`gardian_phone_number`),
  ADD KEY `users_division_id_foreign` (`division_id`),
  ADD KEY `users_district_id_foreign` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
