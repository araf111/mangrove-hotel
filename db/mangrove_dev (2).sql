-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 04:57 AM
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
-- Database: `mangrove_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Management', 'Management', NULL, NULL),
(2, 'Accounts', 'Accounts', NULL, NULL),
(3, 'Marketing', 'Marketing', NULL, NULL),
(4, 'Admin', 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `top_designation_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `department_id`, `top_designation_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Chairman', NULL, NULL),
(2, 1, 1, 'CEO', NULL, NULL),
(3, 1, 2, 'MD', NULL, NULL),
(4, 1, 3, 'Director', NULL, NULL),
(5, 2, 4, 'Account Manager', NULL, NULL),
(6, 3, 4, 'Marketing Manager', NULL, NULL),
(7, 3, 6, 'Marketing Officer', NULL, NULL);

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
-- Table structure for table `home_section`
--

CREATE TABLE `home_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sectionName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_section`
--

INSERT INTO `home_section` (`id`, `sectionName`, `content`, `content_type`, `title`, `created_at`, `updated_at`, `section_type`, `status`) VALUES
(1, 'General', '877253518_1600202681.jpg', 'image', '', '2020-09-15 14:44:41', '2020-09-15 14:44:41', '', 1),
(2, 'General', '168076850_1600303325.jpg', 'icon', '', '2020-09-16 18:42:05', '2020-09-16 18:42:05', 'image', 1),
(3, 'Banner', '1309267063_1600304308.mp4', 'video', '', '2020-09-16 18:58:28', '2020-09-16 18:58:28', 'video', 1),
(4, 'Banner', '813606394_1600304360.mp4', 'video', '', '2020-09-16 18:59:20', '2020-09-16 18:59:20', 'video', 1),
(8, 'tomorrowsCall', 'sdfsdfsdfsd', 'text', '', '2020-09-16 19:34:31', '2020-09-16 19:34:31', 'list', 1),
(18, 'tomorrowsCall', 'dgdfgfgdfgdf', 'text', '', '2020-09-16 19:56:36', '2020-09-16 19:56:36', 'list', 1),
(19, 'tomorrowsCall', 'dgdfgfgdfgdfgdfgfdg', 'text', '', '2020-09-16 19:56:38', '2020-09-16 19:56:38', 'list', 1),
(20, 'tomorrowsCall', 'dgdfgfgdfgdfgdfgfdg', 'text', '', '2020-09-16 20:14:36', '2020-09-16 20:14:36', 'list', 1),
(21, 'tomorrowsCall', 'sdfsdfsdfsd', 'text', '', '2020-09-16 20:15:12', '2020-09-16 20:15:12', 'list', 1),
(22, 'social', 'http://facebook', 'facebook_link', '', '2020-09-16 20:34:35', '2020-09-16 20:34:35', 'social_link', 1),
(23, 'social', '', 'linkdln_link', '', '2020-09-16 20:34:35', '2020-09-16 20:34:35', 'social_link', 1),
(24, 'social', '', 'youtube_link', '', '2020-09-16 20:34:35', '2020-09-16 20:34:35', 'social_link', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `download_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `name`, `mobile`, `email`, `comments`, `user_id`, `download_token`, `created_at`, `updated_at`) VALUES
(1, 'apurba', '01798161526', 'apurbansinghdev@gmail.com', NULL, 1, 'qCL5E1ve5cuI8jxO48lEeCGlBvuH2hpQ', '2020-06-15 20:48:07', '2020-08-30 08:51:33'),
(2, 'Sharif Mahamud Mainul Hossain', '01713464435', 'smainulhossain@gmail.com', NULL, 1, NULL, '2020-06-17 02:54:28', '2020-08-30 08:50:24'),
(3, 'Sharif Mahamud Mainul Hossain', '01842022062', 'mainul@asianetbd.com', NULL, NULL, NULL, '2020-06-20 01:56:41', '2020-06-20 01:56:46'),
(4, 'raafi', 'o1711842430', 'RAAFI@MANGROVE-HOTEL.COM', NULL, 1, NULL, '2020-06-21 07:42:37', '2020-08-30 08:51:46'),
(5, 'sharif', '1679174124', 'sharifcse57@gmail.com', NULL, NULL, 'OgbQL7kIJhooGh3dWsXfPZNZpASo198A', '2020-06-23 03:29:16', '2020-06-23 03:29:16'),
(6, 'sharif', '01679174124', 'sharifcse577@gmail.com', NULL, NULL, NULL, '2020-06-26 09:46:24', '2020-06-26 09:46:40'),
(7, 'sharif', '0167917412', 'sharifcse5777@gmail.com', NULL, NULL, NULL, '2020-06-27 09:14:14', '2020-06-27 09:14:22'),
(8, 'Pujan Majumder', '0185389157', 'pujanmajumdar66@gmail.com', NULL, NULL, NULL, '2020-07-11 03:29:18', '2020-07-11 03:29:21'),
(9, 'fahad', '01717819028', 'Fahad_aw@yahoo.com', NULL, NULL, NULL, '2020-07-11 10:24:29', '2020-07-11 10:24:38'),
(10, 'monjurul hassan', '01713343933', 'kmhassan234@gmail.com', NULL, NULL, NULL, '2020-07-11 13:18:30', '2020-07-11 13:18:39'),
(11, 'Samar Chandra Sowdagar', '01859692225', 'ssowdagar403@gmail.com', NULL, NULL, 'STq0yyruKVCRswoKbCIc9dYgXo2yEsJ5', '2020-07-17 15:34:39', '2020-07-17 15:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `id` int(10) UNSIGNED NOT NULL,
  `investor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `activated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `activate_by` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investors`
--

INSERT INTO `investors` (`id`, `investor_id`, `project_id`, `name`, `email`, `password`, `picture`, `membership`, `active`, `activated_at`, `activate_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '9403113335edfd3b7d7a1c8.65379486', 1, 'Md shariful islam', 'sharifcse57@gmail.com', '$2y$10$.ttGWIrlSg1lIFuQv6AGOuYmyP.q/y6SbqfzxnJKhcz/2nennQELK', 'investors/1jCIk7bvWPF3s98YGcIuTCUjtrCZ8a4W9ctHCoGR.png', NULL, 1, '2020-06-09 18:23:51', 1, NULL, '2020-06-09 17:23:51', '2020-06-09 17:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `investor_addresses`
--

CREATE TABLE `investor_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `investor_id` int(10) UNSIGNED NOT NULL,
  `type` enum('Office','Mailing','Permanent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `thana_id` int(10) UNSIGNED NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investor_addresses`
--

INSERT INTO `investor_addresses` (`id`, `investor_id`, `type`, `country_id`, `division_id`, `district_id`, `thana_id`, `area`, `created_at`, `updated_at`) VALUES
(1, 1, 'Office', 1, 1, 1, 1, NULL, '2020-06-09 17:23:51', '2020-06-09 17:23:51'),
(2, 1, 'Mailing', 1, 1, 1, 1, NULL, '2020-06-09 17:23:51', '2020-06-09 17:23:51'),
(3, 1, 'Permanent', 1, 1, 1, 1, NULL, '2020-06-09 17:23:51', '2020-06-09 17:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `investor_nominees`
--

CREATE TABLE `investor_nominees` (
  `id` int(10) UNSIGNED NOT NULL,
  `investor_id` int(10) UNSIGNED NOT NULL,
  `nominee_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominee_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominee_identity_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investor_nominees`
--

INSERT INTO `investor_nominees` (`id`, `investor_id`, `nominee_name`, `nominee_mobile`, `relation`, `nominee_identity_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hasan', '0156565236', 'elder brother', '234234234234', '2020-06-09 17:23:51', '2020-06-09 17:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `investor_profiles`
--

CREATE TABLE `investor_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `investor_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_primary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_secondary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `identification_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_date_of_birth` date DEFAULT NULL,
  `occupation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investor_profiles`
--

INSERT INTO `investor_profiles` (`id`, `investor_id`, `phone`, `mobile`, `emergency_contact`, `email_primary`, `email_secondary`, `date_of_birth`, `identification_number`, `religion`, `nationality`, `father_name`, `mother_name`, `spouse_name`, `spouse_date_of_birth`, `occupation`, `designation`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 1, '01679174124', '1881509940', '01679174125', 'sharifcse577@gmail.com', 'sharifcse5777@gmail.com', '2020-06-12', '2132132165416', 'Islam', 'Bangladesh', 'Md shahidul islam', 'homaeara begum', 'Mrittika', '2020-07-01', 'Software developer', 'Sr Executive', 'Index', '2020-06-09 17:23:51', '2020-06-09 17:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `investor_shares`
--

CREATE TABLE `investor_shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `investor_id` int(10) UNSIGNED NOT NULL,
  `share_id` int(10) UNSIGNED NOT NULL,
  `share_number` int(11) NOT NULL,
  `grand_total` decimal(13,2) NOT NULL,
  `booking_amount` decimal(8,2) NOT NULL,
  `installment_amount` decimal(8,2) NOT NULL,
  `installment_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investor_shares`
--

INSERT INTO `investor_shares` (`id`, `investor_id`, `share_id`, `share_number`, `grand_total`, `booking_amount`, `installment_amount`, `installment_number`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '200000.00', '50000.00', '500.00', 300, '2020-06-09 17:23:51', '2020-06-09 17:23:51'),
(2, 1, 1, 1, '200000.00', '50000.00', '500.00', 300, '2020-06-09 17:35:59', '2020-06-09 17:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `investor_share_payments`
--

CREATE TABLE `investor_share_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `investor_share_id` int(10) UNSIGNED NOT NULL,
  `investor_id` int(10) UNSIGNED NOT NULL,
  `share_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(13,2) NOT NULL,
  `installment` int(11) NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` enum('Cash','PO','DD','Cheque','Bank','Online') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Cash',
  `status` enum('Paid','Due','NY','Failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NY',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investor_share_payments`
--

INSERT INTO `investor_share_payments` (`id`, `investor_share_id`, `investor_id`, `share_id`, `amount`, `installment`, `bank_name`, `branch_name`, `transaction_id`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '500.00', 0, 'Brac', 'brac', NULL, 'Cash', 'Paid', '2020-06-09 17:23:51', '2020-06-09 18:14:59'),
(2, 1, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Paid', '2020-06-09 17:23:51', '2020-06-09 18:14:59'),
(3, 1, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Paid', '2020-06-09 17:34:21', '2020-06-09 18:14:59'),
(4, 1, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Paid', '2020-06-09 17:35:05', '2020-06-09 18:14:59'),
(5, 1, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Paid', '2020-06-09 17:35:15', '2020-06-09 18:14:59'),
(6, 2, 1, 1, '500.00', 0, 'DBBL', 'uttara', NULL, 'Cash', 'Paid', '2020-06-09 17:35:59', '2020-06-09 18:14:59'),
(7, 2, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Paid', '2020-06-09 17:35:59', '2020-06-09 18:14:59'),
(8, 1, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Paid', '2020-06-09 17:36:24', '2020-06-09 18:14:59'),
(9, 2, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Paid', '2020-06-09 17:36:24', '2020-06-09 18:14:59'),
(10, 1, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Due', '2020-06-09 18:14:59', '2020-06-09 18:14:59'),
(11, 2, 1, 1, '500.00', 1, '', '', NULL, 'Cash', 'Due', '2020-06-09 18:14:59', '2020-06-09 18:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `page_id`, `section_id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Overview', 'overview', NULL, NULL),
(2, 1, 2, 'Modernliving', 'modernliving', NULL, NULL),
(3, 1, 2, 'Map', 'map', NULL, NULL),
(4, 1, 2, 'Login', 'login', NULL, NULL);

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
(127, '2014_10_12_000000_create_users_table', 1),
(128, '2014_10_12_100000_create_password_resets_table', 1),
(129, '2019_08_19_000000_create_failed_jobs_table', 1),
(130, '2020_03_05_205041_create_roles_table', 1),
(131, '2020_03_05_235922_create_departments_table', 1),
(132, '2020_03_06_000017_create_designations_table', 1),
(133, '2020_04_12_162440_create_projects_table', 1),
(134, '2020_04_12_162445_create_investors_table', 1),
(135, '2020_04_12_185956_create_investor_profiles_table', 1),
(136, '2020_04_12_191944_create_investor_addresses_table', 1),
(137, '2020_04_12_192704_create_investor_nominees_table', 1),
(138, '2020_04_12_193750_create_shares_table', 1),
(139, '2020_04_12_193805_create_investor_shares_table', 1),
(140, '2020_04_12_201631_create_investor_share_payments_table', 1),
(141, '2020_04_25_185226_create_pages_table', 1),
(142, '2020_04_25_185227_create_sections_table', 1),
(143, '2020_04_25_185232_create_menus_table', 1),
(144, '2020_04_25_185325_create_posts_table', 1),
(145, '2020_05_23_195533_create_sessions_table', 2),
(146, '2020_09_15_191504_create_home_section_table', 2),
(147, '2020_09_15_205539_add_section_type_in_table', 3),
(148, '2020_09_17_013828_add_status_in_home_section', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`body`)),
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `body`, `published`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '[]', 1, NULL, NULL),
(2, 'Footer', 'footer', '[]', 1, NULL, NULL),
(3, 'About Us', 'about-us', '[]', 1, NULL, NULL),
(4, 'Find a Job', 'find-a-job', '[]', 1, NULL, NULL),
(5, 'Publication', 'publication', '[]', 1, NULL, NULL),
(6, 'Investment', 'investment', '[]', 1, NULL, NULL),
(7, 'Investment Instruction', 'investment-instruction', '[]', 1, NULL, NULL),
(8, 'Phone & Social', 'Phone-&amp;-social', '[]', 1, NULL, NULL);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `category`, `created_at`, `updated_at`) VALUES
(1, 'access-dashboard', 'Access Dashboard', 'settings', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(2, 'manage-users', 'Manage Users', 'settings', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(3, 'manage-roles', 'Manage Roles', 'settings', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(4, 'manage-departments', 'Manage Departments', 'settings', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(5, 'manage-designations', 'Manage Designations', 'settings', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(6, 'manage-backup', 'Manage backup', 'settings', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(7, 'manage-cms', 'Manage Web Content', 'cms', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(8, 'list-investor', 'List investor', 'investor', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(9, 'view-investor', 'Show investor', 'investor', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(10, 'create-investor', 'Create investor', 'investor', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(11, 'update-investor', 'Edit investor', 'investor', '2020-05-17 13:15:11', '2020-05-17 13:15:11'),
(12, 'delete_investor', 'Delete investor', 'investor', '2020-05-17 13:15:11', '2020-05-17 13:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`body`)),
  `published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `page_id`, `section_id`, `menu_id`, `title`, `slug`, `body`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'Logo', 'log', '[]', 1, NULL, NULL),
(2, 1, 1, 0, 'Banners', 'banners', '[]', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `code`, `address`, `description`, `start_date`, `end_date`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Mangrove', 'GJIJKLM4546', 'Kuakata\r\nPatuakhali, Chittagong, Bangladesh 8652', NULL, NULL, NULL, 1, '2020-06-09 17:16:31', '2020-06-09 17:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'superAdmin', 'Super Admin', NULL, NULL),
(2, 'admin', 'Administrators', NULL, NULL),
(3, 'moderator', 'Moderator', NULL, NULL),
(4, 'employee', 'Employee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `page_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Home Sections', NULL, NULL),
(2, 1, 'Details Sections', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6D03Y1CUZda7HiTcUa5DyeiA9kSYmIV3bEiTGZLZ', NULL, '192.168.10.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1ZQbVl6enJIZzl3R25VVHk2Z3NLdUdJZks4aDVKbmV5OHI4a2JHdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9tYW5ncm92ZWhvdGVsLnRlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1600301669),
('RlduBqTZDmteyQMuAwniFBD1OmDTKnaLNboBzoE8', NULL, '192.168.10.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiOFdEZkowd3lGOFg2MG1LOVNnRExXWjlGOU5leUhmejR2cXJvVEYxZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1600301669),
('uVvCrxJYHA8brbpvB9fejPzmOfXBVVLKloKUF0Am', 1, '192.168.10.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTVFWS2JMc3NSek5FOVhvaUJoZmNiNnZvUlQweGhWYWFtYjNGMGlxZSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU0OiJodHRwOi8vbWFuZ3JvdmVob3RlbC50ZXN0L2FkbWluL2Ntcy9ob21lc2VjdGlvbi9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1600310342);

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `grand_total` decimal(13,2) NOT NULL,
  `booking_amount` decimal(11,2) NOT NULL,
  `installment_amount` decimal(8,2) NOT NULL,
  `installment_number` int(11) NOT NULL,
  `continue` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `project_id`, `grand_total`, `booking_amount`, `installment_amount`, `installment_number`, `continue`, `created_at`, `updated_at`) VALUES
(1, 1, '200000.00', '50000.00', '500.00', 300, 1, '2020-06-09 17:18:22', '2020-06-09 17:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `designation_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `department_id`, `designation_id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `photo`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Mangrove Chairman', 'chairman@mangrove-hotel.com', '908045', NULL, '$2y$10$wfOqCS9j9IDrbshbu2IIOeH9888MuhNec0ohLAPC4lIjIuE3ror1G', '', 1, NULL, NULL, '2020-05-17 13:24:52'),
(2, 1, 2, 'Mangrove CEO', 'ceo@mangrove-hotel.com', '+8801798161525', NULL, '$2y$10$KgIPypqw4G/lubud4u7RVu/0hgwGS4Xy5713tcxndwlGg07yz8/KS', NULL, 1, NULL, NULL, NULL),
(3, 1, 3, 'Mangrove MD', 'md@mangrove-hotel.com', '+8801798161527', NULL, '$2y$10$KErC.tNdTtn0xIKtNXu/yug0oGk5GqiXg76oUFyF8.lQCGbKvGJ8y', NULL, 1, NULL, NULL, NULL),
(4, 1, 4, 'Mangrove Director', 'director@mangrove-hotel.com', '+8801798161528', NULL, '$2y$10$3xaj2mMzxjo1E3hQ8XPvKuApQYB4PGn/4rw9c7CMTcziz8.n4CZJq', NULL, 1, NULL, NULL, NULL),
(5, 3, 6, 'Marketing Manager', 'marketing@mangrove-hotel.com', '+8801798161529', NULL, '$2y$10$CeF.lbdtVPsilYBXCU0cneqb5jfrQaZfT5p.5UvzEv89BDlxaKVjK', NULL, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section`
--
ALTER TABLE `home_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inquiries_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `inquiries_email_unique` (`email`);

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `investors_investor_id_unique` (`investor_id`),
  ADD UNIQUE KEY `investors_email_unique` (`email`),
  ADD KEY `investors_investor_id_index` (`investor_id`),
  ADD KEY `investors_project_id_index` (`project_id`),
  ADD KEY `investors_activate_by_index` (`activate_by`);

--
-- Indexes for table `investor_addresses`
--
ALTER TABLE `investor_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `investor_addresses_investor_id_index` (`investor_id`);

--
-- Indexes for table `investor_nominees`
--
ALTER TABLE `investor_nominees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `investor_nominees_investor_id_index` (`investor_id`);

--
-- Indexes for table `investor_profiles`
--
ALTER TABLE `investor_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `investor_profiles_mobile_unique` (`mobile`),
  ADD KEY `investor_profiles_investor_id_index` (`investor_id`);

--
-- Indexes for table `investor_shares`
--
ALTER TABLE `investor_shares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `investor_shares_investor_id_index` (`investor_id`),
  ADD KEY `investor_shares_share_id_index` (`share_id`);

--
-- Indexes for table `investor_share_payments`
--
ALTER TABLE `investor_share_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `investor_share_payments_investor_share_id_index` (`investor_share_id`),
  ADD KEY `investor_share_payments_investor_id_index` (`investor_id`),
  ADD KEY `investor_share_payments_share_id_index` (`share_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_page_id_index` (`page_id`),
  ADD KEY `menus_section_id_index` (`section_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_page_id_index` (`page_id`),
  ADD KEY `posts_section_id_index` (`section_id`),
  ADD KEY `posts_menu_id_index` (`menu_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_code_unique` (`code`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_page_id_index` (`page_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_section`
--
ALTER TABLE `home_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `investors`
--
ALTER TABLE `investors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investor_addresses`
--
ALTER TABLE `investor_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `investor_nominees`
--
ALTER TABLE `investor_nominees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investor_profiles`
--
ALTER TABLE `investor_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investor_shares`
--
ALTER TABLE `investor_shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investor_share_payments`
--
ALTER TABLE `investor_share_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `investors`
--
ALTER TABLE `investors`
  ADD CONSTRAINT `investors_activate_by_foreign` FOREIGN KEY (`activate_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `investors_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `investor_addresses`
--
ALTER TABLE `investor_addresses`
  ADD CONSTRAINT `investor_addresses_investor_id_foreign` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `investor_nominees`
--
ALTER TABLE `investor_nominees`
  ADD CONSTRAINT `investor_nominees_investor_id_foreign` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `investor_profiles`
--
ALTER TABLE `investor_profiles`
  ADD CONSTRAINT `investor_profiles_investor_id_foreign` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `investor_shares`
--
ALTER TABLE `investor_shares`
  ADD CONSTRAINT `investor_shares_investor_id_foreign` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `investor_shares_share_id_foreign` FOREIGN KEY (`share_id`) REFERENCES `shares` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `investor_share_payments`
--
ALTER TABLE `investor_share_payments`
  ADD CONSTRAINT `investor_share_payments_investor_id_foreign` FOREIGN KEY (`investor_id`) REFERENCES `investors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `investor_share_payments_investor_share_id_foreign` FOREIGN KEY (`investor_share_id`) REFERENCES `investor_shares` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `investor_share_payments_share_id_foreign` FOREIGN KEY (`share_id`) REFERENCES `shares` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menus_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
