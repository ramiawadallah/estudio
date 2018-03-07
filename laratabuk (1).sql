-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 09:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laratabuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `title`, `content`, `photo`, `time`, `stutes`, `created_at`, `updated_at`) VALUES
(2, '2000 employees', '<p>2000 employees</p>', '7527_key10.jpg', '1s', 'active', '2018-02-05 03:11:37', '2018-02-07 06:55:24'),
(3, 'Only facility in KSA for lyophillized injectable', '<p>Only facility in KSA for lyophillized injectable</p>', '5185_key9.jpg', '.75s', 'active', '2018-02-05 03:38:36', '2018-02-07 06:55:47'),
(4, '4 active manufacturing sites, 1 under study', '<p>4 active manufacturing sites, 1 under study</p>', '6369_key8.jpg', '.5s', 'active', '2018-02-05 03:40:07', '2018-02-07 06:56:08'),
(5, 'Commercial operations in 25 countries', '<p>Commercial operations in 25 countries</p>', '6370_key7.jpg', '.25s', 'active', '2018-02-05 03:41:13', '2018-02-07 06:56:28'),
(6, 'More than 250 registered products', '<p>More than 250 registered products</p>', '8595_key5.jpg', '1s', 'active', '2018-02-05 03:42:09', '2018-02-07 06:57:10'),
(7, '+25% CAGR sales growth', '<p>+25% CAGR sales growth</p>', '362_key4.jpg', '.75s', 'active', '2018-02-05 03:42:53', '2018-02-07 06:57:32'),
(8, 'Largest private Saudi Pharmaceutical company', '<p>Largest private Saudi Pharmaceutical company</p>', '1711_key3.jpg', '.5s', 'active', '2018-02-05 03:44:12', '2018-02-07 06:57:55'),
(9, 'Founded in 1994, headquartered in Riyadh, Saudi Arabia', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '1428_key2.jpg', '.25s', 'active', '2018-02-05 03:46:41', '2018-02-07 06:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `footages`
--

CREATE TABLE `footages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footages`
--

INSERT INTO `footages` (`id`, `title`, `link`, `stutes`, `created_at`, `updated_at`) VALUES
(1, 'Packaging Evolution in English', 'https://www.youtube.com/embed/VuAMJfusJP0', 'active', '2018-02-05 18:06:22', '2018-02-05 18:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `generics`
--

CREATE TABLE `generics` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generics`
--

INSERT INTO `generics` (`id`, `title`, `content`, `photo`, `time`, `stutes`, `created_at`, `updated_at`) VALUES
(1, 'HOW GENERICS DIFFER FROM THE ORIGINAL MEDICINE', '<p>While a generic has the same key clinical characteristics as the original medicine, it can differ in the following ways:</p>\r\n<ul>\r\n<li>Shape, color or flavor</li>\r\n<li>&nbsp;Inactive ingredients</li>\r\n<li>Packaging and pack size</li>\r\n</ul>', '4699_gen3.jpg', '.75s', 'active', '2018-02-04 19:56:40', '2018-02-05 19:11:51'),
(2, 'ARE GENERICS SAFE AND EFFECTIVE', '<p>Generic medicines are subject to the same strict controls as original medicines which make them equally effective and safe. In fact, original and generic medicines are often produced by the same company. They work on the same way in the body and they are associated with the same benefits as original medicines</p>', '4622_gen2.jpg', '.5s', 'active', '2018-02-04 19:57:32', '2018-02-06 23:10:21'),
(3, 'WHY GENERICS', '<p>Our generic protfolio delivers quality at cost-effective prices in the regulated markets of the MENA region. Our portfolio offers over 250 SKUs in the major therapeutic areas of GI and diabetes, cardiovascular, musculoskeletal, respiratory, infection, and the central nervous system</p>', '9781_gen1.jpg', '.25s', 'active', '2018-02-04 19:58:13', '2018-02-06 23:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `title`, `date`, `content`, `stutes`, `created_at`, `updated_at`) VALUES
(1, 'Establishment of the first production site in Tabuk, Saudi Arabia', '1994', '<div class=\"\">\r\n<div class=\"wrapper\">\r\n<section class=\"module\">\r\n<div class=\"container\">\r\n<div class=\"timeline-panel\">\r\n<div>\r\n<h4>Establishment of the first production site in Tabuk, Saudi Arabia</h4>\r\n</div>\r\n<div class=\"timeline-body\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n</div>\r\n<footer id=\"footer\" class=\"footer-minimal\">\r\n<div class=\"container\">&nbsp;</div>\r\n</footer>', 'active', '2018-02-07 18:49:25', '2018-02-07 18:49:25'),
(2, 'First export to Algeria', '1997', '<div class=\"timeline-panel\">\r\n<div class=\"timeline-heading\">\r\n<h4 class=\"timeline-title\">First export to Algeria</h4>\r\n</div>\r\n</div>', 'active', '2018-02-07 18:51:20', '2018-02-07 18:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `key_facts`
--

CREATE TABLE `key_facts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_facts`
--

INSERT INTO `key_facts` (`id`, `title`, `content`, `photo`, `time`, `stutes`, `created_at`, `updated_at`) VALUES
(2, '2000 employees', '<p>2000 employees</p>', '7527_key10.jpg', '1s', 'active', '2018-02-04 19:11:37', '2018-02-06 22:55:24'),
(3, 'Only facility in KSA for lyophillized injectable', '<p>Only facility in KSA for lyophillized injectable</p>', '5185_key9.jpg', '.75s', 'active', '2018-02-04 19:38:36', '2018-02-06 22:55:47'),
(4, '4 active manufacturing sites, 1 under study', '<p>4 active manufacturing sites, 1 under study</p>', '6369_key8.jpg', '.5s', 'active', '2018-02-04 19:40:07', '2018-02-06 22:56:08'),
(5, 'Commercial operations in 25 countries', '<p>Commercial operations in 25 countries</p>', '6370_key7.jpg', '.25s', 'active', '2018-02-04 19:41:13', '2018-02-06 22:56:28'),
(6, 'More than 250 registered products', '<p>More than 250 registered products</p>', '8595_key5.jpg', '1s', 'active', '2018-02-04 19:42:09', '2018-02-06 22:57:10'),
(7, '+25% CAGR sales growth', '<p>+25% CAGR sales growth</p>', '362_key4.jpg', '.75s', 'active', '2018-02-04 19:42:53', '2018-02-06 22:57:32'),
(8, 'Largest private Saudi Pharmaceutical company', '<p>Largest private Saudi Pharmaceutical company</p>', '1711_key3.jpg', '.5s', 'active', '2018-02-04 19:44:12', '2018-02-06 22:57:55'),
(9, 'Founded in 1994, headquartered in Riyadh, Saudi Arabia', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '1428_key2.jpg', '.25s', 'active', '2018-02-04 19:46:41', '2018-02-06 22:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` int(11) NOT NULL,
  `direction` enum('rtl','ltr') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `name`, `code`, `flug`, `default`, `direction`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'gb.png', 1, 'ltr', NULL, NULL),
(2, 'العربية', 'ar', 'sa.png', 0, 'rtl', '2018-02-05 18:32:27', '2018-02-05 20:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL,
  `extends` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` int(11) NOT NULL,
  `colum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `parent`, `extends`, `lang`, `colum`, `trans`, `created_at`, `updated_at`) VALUES
(1, 1, 'setting', 1, 'title', 'Tabuk Pharmaceuticals', '2018-02-01 23:35:21', '2018-02-01 23:35:21'),
(2, 1, 'setting', 1, 'subtitle', 'Tabuk Pharmaceuticals', '2018-02-01 23:35:21', '2018-02-01 23:35:21'),
(3, 1, 'setting', 1, 'desc', 'Tabuk Pharmaceuticals', '2018-02-01 23:35:21', '2018-02-01 23:35:21'),
(4, 1, 'pages', 1, 'title', 'Home', '2018-02-01 23:35:22', '2018-02-01 23:35:22'),
(5, 1, 'pages', 1, 'content', 'What is Lorem Ipsum?\n								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-02-01 23:35:22', '2018-02-01 23:35:22'),
(6, 2, 'pages', 1, 'title', 'About Us', '2018-02-01 23:35:22', '2018-02-01 23:35:22'),
(7, 2, 'pages', 1, 'content', 'What is Lorem Ipsum?\n								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-02-01 23:35:22', '2018-02-01 23:35:22'),
(8, 3, 'pages', 1, 'title', 'Products', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(9, 3, 'pages', 1, 'content', 'What is Lorem Ipsum?\n								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(10, 4, 'pages', 1, 'title', 'R & D', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(11, 4, 'pages', 1, 'content', 'What is Lorem Ipsum?\n								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(12, 5, 'pages', 1, 'title', 'Careers', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(13, 5, 'pages', 1, 'content', 'What is Lorem Ipsum?\n								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(14, 6, 'pages', 1, 'title', 'Media', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(15, 6, 'pages', 1, 'content', 'What is Lorem Ipsum?\n								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-02-01 23:35:23', '2018-02-01 23:35:23'),
(16, 14, 'pcat', 1, 'title', 'Various', '2018-02-01 23:37:49', '2018-02-01 23:37:49'),
(17, 13, 'pcat', 1, 'title', 'Systemic hormones', '2018-02-03 05:53:28', '2018-02-03 05:53:28'),
(18, 12, 'pcat', 1, 'title', 'Systemic anti-infectives', '2018-02-03 05:53:43', '2018-02-03 05:53:43'),
(19, 11, 'pcat', 1, 'title', 'Respiratory system', '2018-02-03 05:53:58', '2018-02-03 05:53:58'),
(20, 10, 'pcat', 1, 'title', 'Parasitology', '2018-02-03 05:54:13', '2018-02-03 05:54:13'),
(21, 9, 'pcat', 1, 'title', 'Nervous system', '2018-02-03 05:54:24', '2018-02-03 05:54:24'),
(22, 1, 'pcat', 1, 'title', 'Alimentary tract & metabolism', '2018-02-03 05:54:39', '2018-02-03 05:54:39'),
(23, 1, 'product', 1, 'title', 'Ridon', '2018-02-03 05:55:36', '2018-02-03 05:55:36'),
(24, 1, 'product', 1, 'strength', '0.5mg tablets, 1mg tablets, 2mg tablets, 3mg tablets, 4mg tablets, 6mg tablets', '2018-02-03 05:55:36', '2018-02-06 21:24:40'),
(25, 1, 'product', 1, 'molecule', 'Risperidone', '2018-02-03 05:55:36', '2018-02-06 21:24:40'),
(26, 1, 'product', 1, 'content', '<p>RIDON is used to treat the following:<br />- Schizophrenia, where you may see, hear or feel things that are not there, believe things that are not true or feel unusually suspicious, or confused.<br />- Mania, where you may feel very excited, elated, agitated, enthusiastic or hyperactive. Mania occurs in an illness called &ldquo;bipolar disorder&rdquo;.<br />- Short-term treatment (up to 6 weeks) of long-term aggression in people with Alzheimer&rsquo;s dementia, who harm themselves or others. Alternative (non-drug) treatments should have been used previously.<br />- Short-term treatment (up to 6 weeks) of long-term aggression in intellectually disabled children (at least 5 years of age) and adolescents with conduct disorder.</p>', '2018-02-03 05:55:36', '2018-02-06 21:24:40'),
(31, 2, 'product', 1, 'title', 'Rami', '2018-02-03 07:46:22', '2018-02-03 07:46:22'),
(33, 2, 'product', 1, 'strength', 'Rami', '2018-02-03 07:46:23', '2018-02-03 07:46:23'),
(35, 2, 'product', 1, 'molecule', 'Rami', '2018-02-03 07:46:23', '2018-02-03 07:46:23'),
(37, 2, 'product', 1, 'content', 'Rami', '2018-02-03 07:46:23', '2018-02-03 07:46:23'),
(39, 1, 'keyfacts', 1, 'title', '+25% CAGR sales growth', '2018-02-04 19:04:35', '2018-02-04 19:04:35'),
(41, 1, 'keyfacts', 1, 'content', '+25% CAGR sales growth', '2018-02-04 19:04:35', '2018-02-04 19:04:35'),
(43, 2, 'keyfacts', 1, 'title', '2000 employees', '2018-02-04 19:11:37', '2018-02-04 19:11:37'),
(44, 2, 'keyfacts', 1, 'content', '2000 employees', '2018-02-04 19:11:37', '2018-02-04 19:11:37'),
(45, 3, 'keyfacts', 1, 'title', 'Only facility in KSA for lyophillized injectable', '2018-02-04 19:38:36', '2018-02-04 19:38:36'),
(46, 3, 'keyfacts', 1, 'content', 'Only facility in KSA for lyophillized injectable', '2018-02-04 19:38:36', '2018-02-04 19:38:36'),
(47, 4, 'keyfacts', 1, 'title', '4 active manufacturing sites, 1 under study', '2018-02-04 19:40:07', '2018-02-04 19:40:07'),
(48, 4, 'keyfacts', 1, 'content', '4 active manufacturing sites, 1 under study', '2018-02-04 19:40:07', '2018-02-04 19:40:07'),
(49, 5, 'keyfacts', 1, 'title', 'Commercial operations in 25 countries', '2018-02-04 19:41:13', '2018-02-04 19:41:13'),
(50, 5, 'keyfacts', 1, 'content', 'Commercial operations in 25 countries', '2018-02-04 19:41:14', '2018-02-04 19:41:14'),
(51, 6, 'keyfacts', 1, 'title', 'More than 250 registered products', '2018-02-04 19:42:09', '2018-02-04 19:42:09'),
(52, 6, 'keyfacts', 1, 'content', 'More than 250 registered products', '2018-02-04 19:42:09', '2018-02-04 19:42:09'),
(53, 7, 'keyfacts', 1, 'title', '+25% CAGR sales growth', '2018-02-04 19:42:53', '2018-02-04 19:42:53'),
(54, 7, 'keyfacts', 1, 'content', '+25% CAGR sales growth', '2018-02-04 19:42:53', '2018-02-04 19:42:53'),
(55, 8, 'keyfacts', 1, 'title', 'Largest private Saudi Pharmaceutical company', '2018-02-04 19:44:12', '2018-02-04 19:44:12'),
(56, 8, 'keyfacts', 1, 'content', 'Largest private Saudi Pharmaceutical company', '2018-02-04 19:44:12', '2018-02-04 19:44:12'),
(57, 9, 'keyfacts', 1, 'title', 'Founded in 1994, headquartered in Riyadh, Saudi Arabia', '2018-02-04 19:46:41', '2018-02-04 19:46:41'),
(58, 9, 'keyfacts', 1, 'content', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '2018-02-04 19:46:41', '2018-02-06 23:04:23'),
(59, 1, 'generic', 1, 'title', 'HOW GENERICS DIFFER FROM THE ORIGINAL MEDICINE', '2018-02-04 19:56:40', '2018-02-04 19:56:40'),
(60, 1, 'generic', 1, 'content', '<p>While a generic has the same key clinical characteristics as the original medicine, it can differ in the following ways:</p>\r\n<ul>\r\n<li>Shape, color or flavor</li>\r\n<li>&nbsp;Inactive ingredients</li>\r\n<li>Packaging and pack size</li>\r\n</ul>', '2018-02-04 19:56:40', '2018-02-05 19:11:51'),
(61, 2, 'generic', 1, 'title', 'ARE GENERICS SAFE AND EFFECTIVE', '2018-02-04 19:57:32', '2018-02-04 19:57:32'),
(62, 2, 'generic', 1, 'content', '<p>Generic medicines are subject to the same strict controls as original medicines which make them equally effective and safe. In fact, original and generic medicines are often produced by the same company. They work on the same way in the body and they are associated with the same benefits as original medicines</p>', '2018-02-04 19:57:32', '2018-02-06 23:10:21'),
(63, 3, 'generic', 1, 'title', 'WHY GENERICS', '2018-02-04 19:58:13', '2018-02-04 19:58:13'),
(64, 3, 'generic', 1, 'content', '<p>Our generic protfolio delivers quality at cost-effective prices in the regulated markets of the MENA region. Our portfolio offers over 250 SKUs in the major therapeutic areas of GI and diabetes, cardiovascular, musculoskeletal, respiratory, infection, and the central nervous system</p>', '2018-02-04 19:58:13', '2018-02-06 23:10:53'),
(65, 1, 'news', 1, 'title', 'TABUK ENTERS INTO TRIPARTITE AGREEMENT WITH BOEHRINGER INGELHEIM AND CIGALAH', '2018-02-04 21:52:03', '2018-02-04 21:52:03'),
(66, 1, 'news', 1, 'content', '<p>Tabuk has entered into a tripartite agreement with Boehringer Ingelheim, one of the world&rsquo;s leading pharmaceutical companies, and Cigalah for local production in the Kingdom of Saudi Arabia. With this contract, Cigalah and Tabuk will manage and drive complex secondary packaging projects of 26 products for Boehringer Ingelheim.</p>\r\n<p>The contract between the companies was signed by Dr. Abdul Aziz AL Serafi CEO consultant of Cigalah Group, Dr Hamad Al Khamees, General Manager Saudi Arabia Tabuk and Mohammed Al Tawil, General Manager, Boehringer Ingelheim Middle East and Near East Area. Commenting on the agreement, Dr Hamad Al Khamees, General Manager Saudi Arabia Tabuk said &ldquo;Being associated with a global brand like Boehringer Ingelheim and locally with Cigalah Group gives us an opportunity to best leverage our expertise in the local production space.</p>\r\n<p>We are excited about the opportunity given to us and look forward to more cooperation in the future with Boehringer Ingelheim.&rdquo; Mohammed Al Tawil, General Manager, Boehringer Ingelheim Middle East and Near East Area, commented, &ldquo;We are delighted to enter into an agreement with Cigalah Group and Tabuk. As a leading global pharmaceutical company, we are committed to lead development and optimization of product specifications, testing protocols, qualification and validation of packaging thus ensuring product quality and safety.</p>\r\n<p>With this agreement we aim to reinforce our goal to make quality products and access to medication in the Kingdom.&rdquo; Dr. Abdul Aziz AL Serafi CEO consultant of Cigalah Group, said, &ldquo;We are happy to be associated with Boehringer Ingelheim and are sure that the cooperation between the two companies will be beneficial for the pharmaceutical sector with regards to quality, safety and accessibility of medication in the Kingdom.&rdquo; The tripartite agreement enables Boehringer Ingelheim to contract Cigalah for the secondary packaging and authorizes Cigalah to implement and conduct the packaging production at Tabuk facilities.</p>\r\n<p>Packaging is a highly regulated end stage of the drug production process aimed at not only safeguarding the drug against contamination but also ensuring its durability, visibility, sterility and strength.</p>\r\n<p>The partnership is aimed at optimization of the packaging process and providing medicines as finished goods which can help in reducing costs while maintaining the international product quality.</p>', '2018-02-04 21:52:03', '2018-02-05 17:43:47'),
(67, 2, 'news', 1, 'title', 'TABUK PHARMACEUTICALS ENTERS INTO A PARTNERSHIP WITH Pfizer IN THE KINGDOM OF SAUDI ARABIA TABUK PHARMACEUTICALS ENTERS INTO A PARTNERSHIP WITH Pfizer IN THE KINGDOM OF SAUDI ARABIA', '2018-02-05 17:58:02', '2018-02-05 17:58:02'),
(68, 2, 'news', 1, 'content', '<p>Tabuk Pharmaceuticals has signed a commercial agreement with Pfizer, the US-based global industry leader. The venture leverages the respective companies&rsquo; market leading presence in the Kingdom of Saudi Arabia, to deliver increased value to patients in the Cardiovascular, Central Nervous System, Anti-infective and Respiratory therapeutic areas.</p>\r\n<p>Under this agreement, Pfizer will grant Tabuk exclusive rights to carry out manufacturing processes under license, commercialize and distribute second brand versions of four Pfizer products in the Kingdom of Saudi Arabia. In addition, Tabuk Pharmaceuticals will give Pfizer, rights to twelve high-value generic products in Saudi Arabia. Both companies will seek the relevant authorities&rsquo; approvals for registration, production and commercialization.</p>\r\n<p>This project is aligned with one of Tabuk Pharmaceuticals&rsquo; main strategic objective: to expand its offering of innovative medicines in Saudi Arabia, by strengthening its position in its domestic market through partnerships with multinational companies. In so doing, Tabuk Pharmaceuticals continues to deliver on its mission to help improve the lives of patients, while contributing to the development of KSA&rsquo;s local pharmaceutical industry and manufacturing expertise.</p>\r\n<p>The initiative is also consistent with Pfizer&rsquo;s vision of &ldquo;working together for a healthier world&rdquo;. Pfizer, in line with its strategic commitment to contribute to the Saudi pharmaceutical industry, carefully selected high quality medicinal products to add to its already diverse portfolio in Saudi Arabia. Pfizer intends to leverage its global and local capabilities to bring the value of these products to its Saudi patients and further strengthen its focus in the Saudi market.</p>\r\n<p>The agreement between the companies is endorsed by&nbsp;Dr. Hamad Al Khamees, Senior Executive Vice-President KSA Tabuk Pharmaceuticals, and&nbsp;Guy Lallemand, Head of Global Established Pharma, Pfizer Africa Middle East.&nbsp;</p>', '2018-02-05 17:58:02', '2018-02-05 17:58:02'),
(69, 1, 'footage', 1, 'title', 'Packaging Evolution in English', '2018-02-05 18:06:22', '2018-02-05 18:06:22'),
(70, 1, 'footage', 2, 'title', 'تطوير الغلاف', '2018-02-05 18:34:56', '2018-02-05 18:34:56'),
(71, 1, 'footage', 1, 'link', 'https://www.youtube.com/embed/VuAMJfusJP0', '2018-02-05 18:34:56', '2018-02-05 18:34:56'),
(72, 1, 'footage', 2, 'link', 'https://www.youtube.com/embed/eNe241dLarg', '2018-02-05 18:34:56', '2018-02-05 18:34:56'),
(73, 1, 'news', 2, 'title', 'تبوك تبرم اتفاق ثلاثية الأطراف مع بورينجر انجلهايم ومؤسسة سقالة', '2018-02-05 18:47:28', '2018-02-05 18:47:28'),
(74, 1, 'news', 2, 'content', '<p dir=\"rtl\">أبرمت شركة تبوك للصناعات الدوائية اتفاقية ثلاثية الاطراف مع شركة بورينجر انجلهايم، الرائدة في الصناعة الدوائية في العالم، ومؤسسة سقالة للإنتاج المحلي بالمملكة العربية السعودية. وبموجب هذا العقد، تتولى تبوك إلى جانب سقالة إدارة وتشغيل مشروعات المرحلة الثانية من تغليف ٢٦منتجاً لشركة بورينجر انجلهايم.&nbsp;</p>\r\n<p dir=\"rtl\"><br />وقع العقد الدكتور عبد العزيز الصيرفي مستشار الرئيس التنفيذي لمؤسسات سقالة ودكتور حمد الخميس المدير العام لشركة تبوك للصناعات والسيد محمد الطويل المدير العام لشركة بورينجر انجلهايم الشرق الأوسط والشرق الأدنى.&nbsp;<br />وفي تعليقه على الاتفاقية قال دكتور حمد الخميس المدير العام لشركة تبوك للصناعات \"يتيح لنا التعاون مع شركة بورينجر انجلهايم العالمية ومؤسسات سقالة المحلية الرائدة فرصة توظيف خبراتنا في مجال الصناعة المحلية إلى أبعد الحدود، ونحن متحمسون إزاء هذه الفرصة الثمينة التي أتيحت لنا، ونتطلع لمزيد من التعاون في المستقبل\".</p>\r\n<p dir=\"rtl\"><br />وأضاف محمد الطويل المدير العام لشركة بورينجر انجلهايم الشرق الأوسط والشرق الأدنى، \"يسرنا إبرام هذه الاتفاقية مع مؤسسة سقالة وشركة تبوك، ونلتزم كشركة رائدة في مجال الصناعات الدوائية بإدارة عملية تطوير مواصفات المنتجات وبروتوكولات الاختبارات والتأهيل والتحقق من صلاحية التغليف وضمان جودة المنتج وسلامته. وتهدف هذه الاتفاقية إلى تحقيق هدفنا وهو صناعة منتجات عالية الجودة وتوفير إمكانية للوصول إلى الدواء بالمملكة العربية السعودية\".&nbsp;<br />وبدوره قال عبد العزيز الصيرفي مستشار الرئيس التنفيذي لمؤسسة سقالة: \"يسرنا أن يرتبط اسمنا بشركة مرموقة مثل بورينجر انجلهايم ولدينا ثقة كبيرة بأن هذا التعاون سيعود بفوائد جمّة على قطاع الصناعات الدوائية من حيث الالتزام بمعايير جودة وسلامة المنتجات في المملكة\".</p>\r\n<p dir=\"rtl\">وتتيح هذه الاتفاقية الثلاثية لشركة بورينجر انجلهايم التعاقد مع مؤسسة سقالة لتولي مسؤولية المرحلة الثانية من التغليف وتفويضها بتنفيذ هذه العملية في منشآت شركة تبوك للصناعات الدوائية.&nbsp;</p>\r\n<p dir=\"rtl\"><br />ويعتبر التغليف المرحلة النهائية في عملية صناعة الأدوية ولا توفر هذه العملية فقط حماية المنتج من التلوث، بل تضمن أرقى معايير المتانة والوضوح والتعقيم والفعالية، وترمي هذه الشراكة إلى تحسين عمليات التغليف والتعبئة بما يسهم في خفض التكاليف والحفاظ على جودة المنتج العالمية.</p>', '2018-02-05 18:47:28', '2018-02-05 18:56:56'),
(75, 1, 'page', 1, 'title', 'Home', '2018-02-05 18:58:05', '2018-02-05 18:58:05'),
(76, 1, 'page', 2, 'title', 'الرئيسية', '2018-02-05 18:58:05', '2018-02-05 18:58:05'),
(77, 1, 'page', 1, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 18:58:05', '2018-02-05 18:58:05'),
(78, 1, 'page', 2, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 18:58:05', '2018-02-05 18:58:05'),
(79, 2, 'page', 1, 'title', 'About Us', '2018-02-05 18:59:06', '2018-02-05 18:59:06'),
(80, 2, 'page', 2, 'title', 'نبذة عن الشركة', '2018-02-05 18:59:06', '2018-02-05 18:59:06'),
(81, 2, 'page', 1, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 18:59:06', '2018-02-05 18:59:06'),
(82, 2, 'page', 2, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 18:59:06', '2018-02-05 18:59:06'),
(83, 3, 'page', 1, 'title', 'Products', '2018-02-05 18:59:39', '2018-02-05 18:59:39'),
(84, 3, 'page', 2, 'title', 'منتجاتنا', '2018-02-05 18:59:39', '2018-02-05 18:59:39'),
(85, 3, 'page', 1, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 18:59:39', '2018-02-05 18:59:39'),
(86, 3, 'page', 2, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 18:59:39', '2018-02-05 18:59:39'),
(87, 4, 'page', 1, 'title', 'R & D', '2018-02-05 19:00:11', '2018-02-05 19:00:11'),
(88, 4, 'page', 2, 'title', 'البحث والتطوير', '2018-02-05 19:00:11', '2018-02-05 19:00:11'),
(89, 4, 'page', 1, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 19:00:11', '2018-02-05 19:00:11'),
(90, 4, 'page', 2, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 19:00:11', '2018-02-05 19:00:11'),
(91, 5, 'page', 1, 'title', 'Careers', '2018-02-05 19:02:09', '2018-02-05 19:02:09'),
(92, 5, 'page', 2, 'title', 'الوظائف', '2018-02-05 19:02:09', '2018-02-05 19:02:09'),
(93, 5, 'page', 1, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 19:02:09', '2018-02-05 19:02:09'),
(94, 5, 'page', 2, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 19:02:09', '2018-02-05 19:02:09'),
(95, 6, 'page', 1, 'title', 'Media', '2018-02-05 19:03:19', '2018-02-05 19:03:19'),
(96, 6, 'page', 2, 'title', 'المستجدات والاخبار', '2018-02-05 19:03:19', '2018-02-05 19:03:19'),
(97, 6, 'page', 1, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 19:03:20', '2018-02-05 19:03:20'),
(98, 6, 'page', 2, 'content', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-05 19:03:20', '2018-02-05 19:03:20'),
(99, 1, 'generic', 2, 'title', 'كيف تختلف الأدوية الجنيسة عن الأدوية الأصلية؟', '2018-02-05 19:11:51', '2018-02-06 23:09:17'),
(100, 1, 'generic', 2, 'content', '<p style=\"text-align: right;\">لأدوية الجنيسة لها نفس الخصائص العلاجية الأساسية للأدوية الأصلية، ولكنها قد تختلف عنها من حيث: الشكل أو اللون أو النكهة المكونات غير الفعالة التعبئة وحجم العبوة التكلفة</p>', '2018-02-05 19:11:51', '2018-02-06 23:09:17'),
(101, 1, 'management', 1, 'name', 'RANA AZZAM', '2018-02-05 21:26:36', '2018-02-05 21:26:36'),
(102, 1, 'management', 2, 'name', 'رنا عزام', '2018-02-05 21:26:36', '2018-02-05 21:26:36'),
(103, 1, 'management', 1, 'title', 'Business Development', '2018-02-05 21:26:36', '2018-02-05 21:26:36'),
(104, 1, 'management', 2, 'title', 'نائب أول لرئيس الشركة، تطوير الأعمال', '2018-02-05 21:26:37', '2018-02-05 21:26:37'),
(105, 1, 'management', 1, 'position', 'Business Development', '2018-02-05 21:26:37', '2018-02-05 21:26:37'),
(106, 1, 'management', 2, 'position', 'نائب أول لرئيس الشركة، تطوير الأعمال', '2018-02-05 21:26:37', '2018-02-05 21:26:37'),
(107, 1, 'management', 1, 'content', '<p>Rana has been the Senior Vice President for business development since 2012. She has over 15 years of experience in Business Development, Regulatory Affairs, and Strategic Marketing. She holds a bachelor&rsquo;s degree in Pharmacy from Jordan University, as well as a Master&rsquo;s degree in Pharmacology from University of Bath, UK.</p>', '2018-02-05 21:26:37', '2018-02-05 21:26:37'),
(108, 1, 'management', 2, 'content', '<p style=\"text-align: right;\">تشغل رنا منصب نائب أول لرئيس الشركة لتطوير الأعمال منذ عام ٢٠١٢، ولديها خبرة أكثر من خمسة عشرعاماً في مجال تطوير الأعمال، والشؤون التنظيمية، والتسويق الاستراتيجي، وهي حاصلة على درجة البكالوريوس في الصيدلة من الجامعة الأردنية، ودرجة الماجستير في الصيدلة من جامعة باث بالمملكة المتحدة.</p>', '2018-02-05 21:26:37', '2018-02-05 21:26:37'),
(109, 9, 'pcat', 2, 'title', 'الجهاز العصبي', '2018-02-05 22:21:56', '2018-02-07 17:50:52'),
(110, 8, 'pcat', 1, 'title', 'Musculo-skeletal system', '2018-02-05 22:22:12', '2018-02-05 22:22:12'),
(111, 8, 'pcat', 2, 'title', 'الجهاز العضلي-العظمي', '2018-02-05 22:22:12', '2018-02-07 17:51:25'),
(112, 7, 'pcat', 1, 'title', 'Multivitamin', '2018-02-05 22:23:45', '2018-02-05 22:23:45'),
(113, 7, 'pcat', 2, 'title', 'الفيتامينات', '2018-02-05 22:23:45', '2018-02-07 17:51:44'),
(114, 6, 'pcat', 1, 'title', 'Genito-urinary system & sex hormones', '2018-02-05 22:24:02', '2018-02-05 22:24:02'),
(115, 6, 'pcat', 2, 'title', 'الجهاز البولي التناسبي والهرمونات الجنسية', '2018-02-05 22:24:02', '2018-02-07 17:52:15'),
(116, 5, 'pcat', 1, 'title', 'Dermatologicals', '2018-02-05 22:24:19', '2018-02-05 22:24:19'),
(117, 5, 'pcat', 2, 'title', 'أدوية الأمراض الجلدية', '2018-02-05 22:24:19', '2018-02-07 17:52:40'),
(118, 4, 'pcat', 1, 'title', 'Cardiovascular system', '2018-02-05 22:24:34', '2018-02-05 22:24:34'),
(119, 4, 'pcat', 2, 'title', 'الجهاز القلبي الوعائي', '2018-02-05 22:24:34', '2018-02-07 17:53:17'),
(120, 3, 'pcat', 1, 'title', 'Blood & blood forming organs', '2018-02-05 22:24:55', '2018-02-05 22:24:55'),
(121, 3, 'pcat', 2, 'title', 'الدم وأعضاء تكوين الدّم', '2018-02-05 22:24:55', '2018-02-07 17:53:41'),
(122, 2, 'pcat', 1, 'title', 'Antineoplastic & immunomodulators', '2018-02-05 22:25:09', '2018-02-05 22:25:09'),
(123, 2, 'pcat', 2, 'title', 'العوامل المضادة للسرطان ومعدلات المناعة', '2018-02-05 22:25:09', '2018-02-07 17:54:11'),
(124, 1, 'product', 2, 'title', 'ريدون', '2018-02-06 21:24:40', '2018-02-06 23:07:13'),
(125, 1, 'product', 2, 'strength', '0.5mg tablets, 1mg tablets, 2mg tablets, 3mg tablets, 4mg tablets, 6mg tablets', '2018-02-06 21:24:40', '2018-02-06 21:24:40'),
(126, 1, 'product', 2, 'molecule', 'Risperidone', '2018-02-06 21:24:40', '2018-02-06 21:24:40'),
(127, 1, 'product', 2, 'content', '<p>RIDON is used to treat the following:<br />- Schizophrenia, where you may see, hear or feel things that are not there, believe things that are not true or feel unusually suspicious, or confused.<br />- Mania, where you may feel very excited, elated, agitated, enthusiastic or hyperactive. Mania occurs in an illness called &ldquo;bipolar disorder&rdquo;.<br />- Short-term treatment (up to 6 weeks) of long-term aggression in people with Alzheimer&rsquo;s dementia, who harm themselves or others. Alternative (non-drug) treatments should have been used previously.<br />- Short-term treatment (up to 6 weeks) of long-term aggression in intellectually disabled children (at least 5 years of age) and adolescents with conduct disorder.</p>', '2018-02-06 21:24:41', '2018-02-06 21:24:41'),
(128, 2, 'news', 2, 'title', 'TABUK PHARMACEUTICALS ENTERS INTO A PARTNERSHIP WITH Pfizer IN THE KINGDOM OF SAUDI ARABIA TABUK PHARMACEUTICALS ENTERS INTO A PARTNERSHIP WITH Pfizer IN THE KINGDOM OF SAUDI ARABIA', '2018-02-06 22:04:49', '2018-02-06 22:04:49'),
(129, 2, 'news', 2, 'content', '<p>Tabuk Pharmaceuticals has signed a commercial agreement with Pfizer, the US-based global industry leader. The venture leverages the respective companies&rsquo; market leading presence in the Kingdom of Saudi Arabia, to deliver increased value to patients in the Cardiovascular, Central Nervous System, Anti-infective and Respiratory therapeutic areas.</p>\r\n<p>Under this agreement, Pfizer will grant Tabuk exclusive rights to carry out manufacturing processes under license, commercialize and distribute second brand versions of four Pfizer products in the Kingdom of Saudi Arabia. In addition, Tabuk Pharmaceuticals will give Pfizer, rights to twelve high-value generic products in Saudi Arabia. Both companies will seek the relevant authorities&rsquo; approvals for registration, production and commercialization.</p>\r\n<p>This project is aligned with one of Tabuk Pharmaceuticals&rsquo; main strategic objective: to expand its offering of innovative medicines in Saudi Arabia, by strengthening its position in its domestic market through partnerships with multinational companies. In so doing, Tabuk Pharmaceuticals continues to deliver on its mission to help improve the lives of patients, while contributing to the development of KSA&rsquo;s local pharmaceutical industry and manufacturing expertise.</p>\r\n<p>The initiative is also consistent with Pfizer&rsquo;s vision of &ldquo;working together for a healthier world&rdquo;. Pfizer, in line with its strategic commitment to contribute to the Saudi pharmaceutical industry, carefully selected high quality medicinal products to add to its already diverse portfolio in Saudi Arabia. Pfizer intends to leverage its global and local capabilities to bring the value of these products to its Saudi patients and further strengthen its focus in the Saudi market.</p>\r\n<p>The agreement between the companies is endorsed by&nbsp;Dr. Hamad Al Khamees, Senior Executive Vice-President KSA Tabuk Pharmaceuticals, and&nbsp;Guy Lallemand, Head of Global Established Pharma, Pfizer Africa Middle East.&nbsp;</p>', '2018-02-06 22:04:49', '2018-02-06 22:04:49'),
(130, 2, 'keyfact', 1, 'title', '2000 employees', '2018-02-06 22:55:24', '2018-02-06 22:55:24'),
(131, 2, 'keyfact', 2, 'title', '٢٠٠٠ موظف', '2018-02-06 22:55:24', '2018-02-06 22:55:24'),
(132, 2, 'keyfact', 1, 'content', '<p>2000 employees</p>', '2018-02-06 22:55:24', '2018-02-06 22:55:24'),
(133, 2, 'keyfact', 2, 'content', '<section id=\"facts\">\r\n<div class=\"container\"><center>\r\n<div class=\"col-sm-11\">\r\n<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p style=\"text-align: left;\">٢٠٠٠ موظف&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</center></div>\r\n</section>', '2018-02-06 22:55:24', '2018-02-06 22:55:24'),
(134, 3, 'keyfact', 1, 'title', 'Only facility in KSA for lyophillized injectable', '2018-02-06 22:55:47', '2018-02-06 22:55:47'),
(135, 3, 'keyfact', 2, 'title', 'المصنع الوحيد في المملكة العربية السعودية لصناعة المستحضرات المجفدة', '2018-02-06 22:55:47', '2018-02-06 22:55:47'),
(136, 3, 'keyfact', 1, 'content', '<p>Only facility in KSA for lyophillized injectable</p>', '2018-02-06 22:55:47', '2018-02-06 22:55:47'),
(137, 3, 'keyfact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>المصنع الوحيد في المملكة العربية السعودية لصناعة المستحضرات المجفدة&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-06 22:55:47', '2018-02-06 22:55:47'),
(138, 4, 'keyfact', 1, 'title', '4 active manufacturing sites, 1 under study', '2018-02-06 22:56:08', '2018-02-06 22:56:08'),
(139, 4, 'keyfact', 2, 'title', 'أربع مصانع نشطة، وواحد قيد الدارسة', '2018-02-06 22:56:08', '2018-02-06 22:56:08'),
(140, 4, 'keyfact', 1, 'content', '<p>4 active manufacturing sites, 1 under study</p>', '2018-02-06 22:56:08', '2018-02-06 22:56:08'),
(141, 4, 'keyfact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>أربع مصانع نشطة، وواحد قيد الدارسة&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-06 22:56:08', '2018-02-06 22:56:08'),
(142, 5, 'keyfact', 1, 'title', 'Commercial operations in 25 countries', '2018-02-06 22:56:28', '2018-02-06 22:56:28'),
(143, 5, 'keyfact', 2, 'title', 'عمليات تجارية في ٢٥ دولة', '2018-02-06 22:56:28', '2018-02-06 22:56:28'),
(144, 5, 'keyfact', 1, 'content', '<p>Commercial operations in 25 countries</p>', '2018-02-06 22:56:28', '2018-02-06 22:56:28'),
(145, 5, 'keyfact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>عمليات تجارية في ٢٥ دولة&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-06 22:56:28', '2018-02-06 22:56:28'),
(146, 6, 'keyfact', 1, 'title', 'More than 250 registered products', '2018-02-06 22:57:10', '2018-02-06 22:57:10'),
(147, 6, 'keyfact', 2, 'title', 'أكثر من ٢٥٠ منتجاً مسجلاً', '2018-02-06 22:57:10', '2018-02-06 22:57:10'),
(148, 6, 'keyfact', 1, 'content', '<p>More than 250 registered products</p>', '2018-02-06 22:57:10', '2018-02-06 22:57:10'),
(149, 6, 'keyfact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>أكثر من ٢٥٠ منتجاً مسجلاً&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2018-02-06 22:57:10', '2018-02-06 22:57:10'),
(150, 7, 'keyfact', 1, 'title', '+25% CAGR sales growth', '2018-02-06 22:57:32', '2018-02-06 22:57:32'),
(151, 7, 'keyfact', 2, 'title', '+٢٥% معدل نمو سنوي مركب', '2018-02-06 22:57:32', '2018-02-06 22:57:32'),
(152, 7, 'keyfact', 1, 'content', '<p>+25% CAGR sales growth</p>', '2018-02-06 22:57:32', '2018-02-06 22:57:32'),
(153, 7, 'keyfact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>+٢٥% معدل نمو سنوي مركب</p>\r\n</div>\r\n</div>', '2018-02-06 22:57:32', '2018-02-06 22:57:32'),
(154, 8, 'keyfact', 1, 'title', 'Largest private Saudi Pharmaceutical company', '2018-02-06 22:57:56', '2018-02-06 22:57:56'),
(155, 8, 'keyfact', 2, 'title', 'أكبر شركة سعودية غير حكومية للصناعات الدوائية', '2018-02-06 22:57:56', '2018-02-06 22:57:56'),
(156, 8, 'keyfact', 1, 'content', '<p>Largest private Saudi Pharmaceutical company</p>', '2018-02-06 22:57:56', '2018-02-06 22:57:56'),
(157, 8, 'keyfact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>أكبر شركة سعودية غير حكومية للصناعات الدوائية&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-06 22:57:56', '2018-02-06 22:57:56'),
(158, 9, 'keyfact', 1, 'title', 'Founded in 1994, headquartered in Riyadh, Saudi Arabia', '2018-02-06 22:58:58', '2018-02-06 22:58:58'),
(159, 9, 'keyfact', 2, 'title', 'تأسست الشركة في عام ١٩٩٤', '2018-02-06 22:58:58', '2018-02-06 23:01:04'),
(160, 9, 'keyfact', 1, 'content', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '2018-02-06 22:58:58', '2018-02-06 22:58:58'),
(161, 9, 'keyfact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>تأسست الشركة في عام ١٩٩٤&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-06 22:58:58', '2018-02-06 23:01:04'),
(162, 9, 'keyfacts', 2, 'title', 'الرلارلترلترنلارلارنا', '2018-02-06 23:04:23', '2018-02-06 23:17:18'),
(163, 9, 'keyfacts', 2, 'content', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '2018-02-06 23:04:23', '2018-02-06 23:04:49'),
(164, 2, 'generic', 2, 'title', 'هل الأدوية الجنيسة آمنة وفعّالة؟', '2018-02-06 23:10:21', '2018-02-06 23:10:21'),
(165, 2, 'generic', 2, 'content', '<p style=\"text-align: right;\">تخضع الأدوية الجنيسة لنفس معايير الرقابة والجودة الصارمة التي تخضع لها الأدوية الأصلية، وبالتالي فإنها تكون على نفس الدرجة من الفاعلية والآمان، وفي الواقع، غاللباً ما تنتج نفس الشركة الأدوية الأصلية والأدوية الجنيسة، وهذه الأدوية تعمل بنفس الطريقة في الجسم ويكون لها نفس التأثير العلاجي الخاص بالأدوية الأصلية</p>', '2018-02-06 23:10:21', '2018-02-06 23:10:21'),
(166, 3, 'generic', 2, 'title', 'لماذا الدواء الجنيس؟', '2018-02-06 23:10:53', '2018-02-06 23:10:53'),
(167, 3, 'generic', 2, 'content', '<p style=\"text-align: right;\">ننتج أدوية جنيسة بجودة عالية وأسعار اقتصادية ونصدرها إلى الأسواق في منطقة الشرق الأوسط وشمال إفريقيا، وتحتوى محفظتنا للأدوية الجنيسة على أكثر من ٢٥٠ نوعاً تغطي معظم المجالات العلاجية، مثل أدوية الجهاز الهضمي، وأدوية القلب والأوعية الدموية، ومسكنات الألم، وأدوية الأورام، ومضادات العدوى، وأدوية الأطفال، وأدوية الأمراض الجلدية</p>', '2018-02-06 23:10:53', '2018-02-06 23:10:53'),
(168, 10, 'keyfacts', 1, 'title', 'Nervous system', '2018-02-06 23:14:00', '2018-02-06 23:14:00'),
(169, 10, 'keyfacts', 2, 'title', 'المستجدات والاخبار', '2018-02-06 23:14:00', '2018-02-06 23:14:00'),
(170, 10, 'keyfacts', 1, 'content', '<p>sndulykvghblskjlnkvdsvdvdv</p>', '2018-02-06 23:14:00', '2018-02-06 23:14:00'),
(171, 10, 'keyfacts', 2, 'content', '<p>سشسيسشيشسيشسيشسي</p>', '2018-02-06 23:14:00', '2018-02-06 23:14:00'),
(172, 9, 'key_facts', 1, 'title', 'Founded in 1994, headquartered in Riyadh, Saudi Arabia', '2018-02-06 23:17:49', '2018-02-06 23:17:49'),
(173, 9, 'key_facts', 2, 'title', 'سشسيشيشسيشسيش', '2018-02-06 23:17:50', '2018-02-06 23:17:50'),
(174, 9, 'key_facts', 1, 'content', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '2018-02-06 23:17:50', '2018-02-06 23:17:50'),
(175, 9, 'key_facts', 2, 'content', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '2018-02-06 23:17:50', '2018-02-06 23:17:50'),
(176, 9, 'fact', 1, 'title', 'Founded in 1994, headquartered in Riyadh, Saudi Arabia', '2018-02-07 16:38:28', '2018-02-07 16:38:28'),
(177, 9, 'fact', 2, 'title', 'تأسست الشركة في عام ١٩٩٤, مقرها الرئيسي في الرياض، المملكة العربية السعودية', '2018-02-07 16:38:28', '2018-02-07 16:38:28'),
(178, 9, 'fact', 1, 'content', '<p>Founded in 1994, headquartered in Riyadh, Saudi Arabia</p>', '2018-02-07 16:38:29', '2018-02-07 16:38:29'),
(179, 9, 'fact', 2, 'content', '<p>تأسست الشركة في عام ١٩٩٤, مقرها الرئيسي في الرياض، المملكة العربية السعودية</p>', '2018-02-07 16:38:29', '2018-02-07 16:38:29'),
(180, 10, 'fact', 1, 'title', 'Nervous system', '2018-02-07 16:41:07', '2018-02-07 16:41:07'),
(181, 10, 'fact', 2, 'title', 'المستجدات والاخبار', '2018-02-07 16:41:07', '2018-02-07 16:41:07'),
(182, 10, 'fact', 1, 'content', '<p>kdjashgyflj;lkm</p>', '2018-02-07 16:41:07', '2018-02-07 16:41:07'),
(183, 10, 'fact', 2, 'content', '<ol>\r\n<li>sadsdasdasdasdasdads</li>\r\n</ol>', '2018-02-07 16:41:07', '2018-02-07 16:41:07'),
(184, 8, 'fact', 1, 'title', 'Largest private Saudi Pharmaceutical company', '2018-02-07 16:43:38', '2018-02-07 16:43:38'),
(185, 8, 'fact', 2, 'title', 'أكبر شركة سعودية غير حكومية للصناعات الدوائية', '2018-02-07 16:43:38', '2018-02-07 16:43:38'),
(186, 8, 'fact', 1, 'content', '<p>Largest private Saudi Pharmaceutical company</p>', '2018-02-07 16:43:38', '2018-02-07 16:43:38'),
(187, 8, 'fact', 2, 'content', '<p>أكبر شركة سعودية غير حكومية للصناعات الدوائية</p>', '2018-02-07 16:43:38', '2018-02-07 16:43:38'),
(188, 7, 'fact', 1, 'title', '+25% CAGR sales growth', '2018-02-07 16:44:43', '2018-02-07 16:44:43'),
(189, 7, 'fact', 2, 'title', '+٢٥% معدل نمو سنوي مركب', '2018-02-07 16:44:43', '2018-02-07 16:44:43'),
(190, 7, 'fact', 1, 'content', '<p>+25% CAGR sales growth</p>', '2018-02-07 16:44:43', '2018-02-07 16:44:43'),
(191, 7, 'fact', 2, 'content', '<p>+٢٥% معدل نمو سنوي مركب</p>', '2018-02-07 16:44:43', '2018-02-07 16:44:43'),
(192, 6, 'fact', 1, 'title', 'More than 250 registered products', '2018-02-07 16:46:30', '2018-02-07 16:46:30'),
(193, 6, 'fact', 2, 'title', 'أكثر من ٢٥٠ منتجاً مسجلاً', '2018-02-07 16:46:30', '2018-02-07 16:46:30'),
(194, 6, 'fact', 1, 'content', '<p>More than 250 registered products</p>', '2018-02-07 16:46:30', '2018-02-07 16:46:30'),
(195, 6, 'fact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>أكثر من ٢٥٠ منتجاً مسجلاً&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-07 16:46:30', '2018-02-07 16:46:30'),
(196, 5, 'fact', 1, 'title', 'Commercial operations in 25 countries', '2018-02-07 16:46:52', '2018-02-07 16:46:52'),
(197, 5, 'fact', 2, 'title', 'عمليات تجارية في ٢٥ دولة', '2018-02-07 16:46:52', '2018-02-07 16:46:52'),
(198, 5, 'fact', 1, 'content', '<p>Commercial operations in 25 countries</p>', '2018-02-07 16:46:52', '2018-02-07 16:46:52'),
(199, 5, 'fact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>عمليات تجارية في ٢٥ دولة&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-07 16:46:52', '2018-02-07 16:46:52'),
(200, 4, 'fact', 1, 'title', '4 active manufacturing sites, 1 under study', '2018-02-07 16:47:13', '2018-02-07 16:47:13'),
(201, 4, 'fact', 2, 'title', 'أربع مصانع نشطة، وواحد قيد الدارسة', '2018-02-07 16:47:13', '2018-02-07 16:47:13'),
(202, 4, 'fact', 1, 'content', '<p>4 active manufacturing sites, 1 under study</p>', '2018-02-07 16:47:13', '2018-02-07 16:47:13'),
(203, 4, 'fact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>أربع مصانع نشطة، وواحد قيد الدارسة&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-07 16:47:13', '2018-02-07 16:47:13'),
(204, 3, 'fact', 1, 'title', 'Only facility in KSA for lyophillized injectable', '2018-02-07 16:47:34', '2018-02-07 16:47:34'),
(205, 3, 'fact', 2, 'title', 'المصنع الوحيد في المملكة العربية السعودية لصناعة المستحضرات المجفدة', '2018-02-07 16:47:35', '2018-02-07 16:47:35'),
(206, 3, 'fact', 1, 'content', '<p>Only facility in KSA for lyophillized injectable</p>', '2018-02-07 16:47:35', '2018-02-07 16:47:35'),
(207, 3, 'fact', 2, 'content', '<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p>المصنع الوحيد في المملكة العربية السعودية لصناعة المستحضرات المجفدة&nbsp;</p>\r\n</div>\r\n</div>', '2018-02-07 16:47:35', '2018-02-07 16:47:35'),
(208, 2, 'fact', 1, 'title', '2000 employees', '2018-02-07 16:47:58', '2018-02-07 16:47:58'),
(209, 2, 'fact', 2, 'title', '٢٠٠٠ موظف', '2018-02-07 16:47:58', '2018-02-07 16:47:58'),
(210, 2, 'fact', 1, 'content', '<p>2000 employees</p>', '2018-02-07 16:47:58', '2018-02-07 16:47:58'),
(211, 2, 'fact', 2, 'content', '<section id=\"facts\">\r\n<div class=\"container\"><center>\r\n<div class=\"col-sm-11\">\r\n<div class=\"col-sm-2 column\">\r\n<div class=\"well\">\r\n<p style=\"text-align: left;\">٢٠٠٠ موظف&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</center></div>\r\n</section>', '2018-02-07 16:47:58', '2018-02-07 16:47:58'),
(212, 1, 'pcat', 2, 'title', 'السبيل الهضمي والاستقلاب', '2018-02-07 17:41:50', '2018-02-07 17:54:45'),
(213, 14, 'pcat', 2, 'title', 'متفرقات', '2018-02-07 17:48:19', '2018-02-07 17:48:19'),
(214, 13, 'pcat', 2, 'title', 'المستحضرات الحاثية(الهرمونية) الجهازية', '2018-02-07 17:49:03', '2018-02-07 17:49:03'),
(215, 12, 'pcat', 2, 'title', 'مضادات العدوى للاستخدام الجهازي', '2018-02-07 17:49:40', '2018-02-07 17:49:40'),
(216, 11, 'pcat', 2, 'title', 'الجهاز التنفسي', '2018-02-07 17:50:08', '2018-02-07 17:50:08'),
(217, 10, 'pcat', 2, 'title', 'المنتجات المضادة للطفيليات', '2018-02-07 17:50:28', '2018-02-07 17:50:28'),
(218, 1, 'history', 1, 'title', 'Establishment of the first production site in Tabuk, Saudi Arabia', '2018-02-07 18:49:25', '2018-02-07 18:49:25'),
(219, 1, 'history', 2, 'title', 'تأسيس اول أول موقع للانتاج في تبوك بالمملكة العربية السعودية', '2018-02-07 18:49:25', '2018-02-07 18:49:25'),
(220, 1, 'history', 1, 'content', '<div class=\"\">\r\n<div class=\"wrapper\">\r\n<section class=\"module\">\r\n<div class=\"container\">\r\n<div class=\"timeline-panel\">\r\n<div>\r\n<h4>Establishment of the first production site in Tabuk, Saudi Arabia</h4>\r\n</div>\r\n<div class=\"timeline-body\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n</div>\r\n<footer id=\"footer\" class=\"footer-minimal\">\r\n<div class=\"container\">&nbsp;</div>\r\n</footer>', '2018-02-07 18:49:25', '2018-02-07 18:49:25'),
(221, 1, 'history', 2, 'content', '<div class=\"\">\r\n<div class=\"wrapper\">\r\n<section class=\"module\">\r\n<div class=\"container\">\r\n<div class=\"timeline-panel\">\r\n<div class=\"timeline-heading\">\r\n<h4 class=\"timeline-title\" style=\"text-align: right;\">تأسيس اول أول موقع للانتاج في تبوك بالمملكة العربية السعودية</h4>\r\n</div>\r\n<div class=\"timeline-body\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n</div>\r\n<footer id=\"footer\" class=\"footer-minimal\">\r\n<div class=\"container\">&nbsp;</div>\r\n</footer>', '2018-02-07 18:49:25', '2018-02-07 18:49:25'),
(222, 2, 'history', 1, 'title', 'First export to Algeria', '2018-02-07 18:51:20', '2018-02-07 18:51:20'),
(223, 2, 'history', 2, 'title', 'تأسيس تبوجن فرنسا', '2018-02-07 18:51:20', '2018-02-07 18:51:20'),
(224, 2, 'history', 1, 'content', '<div class=\"timeline-panel\">\r\n<div class=\"timeline-heading\">\r\n<h4 class=\"timeline-title\">First export to Algeria</h4>\r\n</div>\r\n</div>', '2018-02-07 18:51:20', '2018-02-07 18:51:20'),
(225, 2, 'history', 2, 'content', '<p><span style=\"font-family: aileron; font-size: 22px;\">تأسيس تبوجن فرنسا</span></p>\r\n<div class=\"timeline-panel\">\r\n<div class=\"timeline-body\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<p style=\"text-align: right;\">&nbsp;</p>', '2018-02-07 18:51:20', '2018-02-07 18:51:20'),
(226, 7, 'page', 1, 'title', 'History', '2018-02-07 18:59:34', '2018-02-07 18:59:34'),
(227, 7, 'page', 2, 'title', 'مسارنا الزمني', '2018-02-07 18:59:34', '2018-02-07 18:59:34');
INSERT INTO `languages` (`id`, `parent`, `extends`, `lang`, `colum`, `trans`, `created_at`, `updated_at`) VALUES
(228, 7, 'page', 1, 'content', '<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2018-02-07 18:59:34', '2018-02-07 18:59:34'),
(229, 7, 'page', 2, 'content', '<div id=\"Content\">\r\n<div id=\"Panes\">\r\n<div>\r\n<h2 style=\"text-align: right;\">ما فائدته ؟</h2>\r\n<p dir=\"rtl\" style=\"text-align: right;\">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>\r\n</div>\r\n</div>\r\n</div>', '2018-02-07 18:59:34', '2018-02-07 18:59:34'),
(230, 8, 'page', 1, 'title', 'Offices', '2018-02-08 20:33:50', '2018-02-08 20:33:50'),
(231, 8, 'page', 2, 'title', 'مكاتبنا', '2018-02-08 20:33:51', '2018-02-08 20:33:51'),
(232, 1, 'office', 1, 'title', 'Jordan', '2018-02-08 21:15:16', '2018-02-08 21:15:16'),
(233, 1, 'office', 2, 'title', 'الاردن', '2018-02-08 21:15:16', '2018-02-08 21:15:16'),
(234, 1, 'office', 1, 'content', '<p><strong>Tabuk Pharma</strong></p>\r\n<p>P.O.Box&nbsp;17442, Amman 11195, Jordan<br />Mecca Street, Building #25<br />Tel : + 962&nbsp;6&nbsp;553 4441/2<br />Fax: + 962&nbsp;6&nbsp;553 8125</p>\r\n<p><strong>Tabuk R&amp;D</strong></p>\r\n<p>7th Circle, Al Sahil Neighborhood<br />Al Ben Abdessalam Street&nbsp;<br />Zahran Plaza Building, B1 Floor</p>', '2018-02-08 21:15:16', '2018-02-08 21:34:57'),
(235, 1, 'office', 2, 'content', '<p dir=\"rtl\">مكتب تبوك فارما - عمّان&nbsp;</p>\r\n<p dir=\"rtl\">ص. ب: ١٧٤٤٢، عمان ١١١٩٥، الأردن<br />شارع مكة المكرمة، مبنى رقم ٢٥<br />هاتف: &nbsp;٤٤٤١/٢ ٥٥٣ ٦ ٩٦٢ +<br />فاكس: &nbsp;٨١٢٥ ٥٥٣ ٦ ٩٦٢ +</p>\r\n<p dir=\"rtl\">مكتب البحث والتطوير - عمّان &nbsp;&nbsp;</p>\r\n<p dir=\"rtl\">الدوار السابع، حي السهل<br />شارع آل بن عبد السلام&nbsp;<br />مبنى زهران بلازا، الطابق B1<br />عمان، الأردن</p>', '2018-02-08 21:15:16', '2018-02-08 21:15:16'),
(236, 9, 'page', 1, 'title', 'Partnering', '2018-02-10 16:33:28', '2018-02-10 16:33:28'),
(237, 9, 'page', 2, 'title', 'شراكتنا', '2018-02-10 16:33:28', '2018-02-10 16:33:28'),
(238, 9, 'page', 1, 'content', '<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-02-10 16:33:28', '2018-02-10 16:33:28'),
(239, 9, 'page', 2, 'content', '<h2 style=\"text-align: right;\">ما هو \"لوريم إيبسوم\" ؟</h2>\r\n<p dir=\"rtl\" style=\"text-align: right;\">لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', '2018-02-10 16:33:28', '2018-02-10 16:33:28'),
(240, 1, 'whatweoffer', 1, 'title', 'A broad and diverse spanning a range of therapy areas, available for swapping, co-marketing or out-licensing', '2018-02-10 17:34:46', '2018-02-10 17:34:46'),
(241, 1, 'whatweoffer', 2, 'title', 'محفظة منتجات شاملة ومتنوعة تغطي مجموعة واسعة من المجالات العلاجية، متوفرة للمقايضة أو التسويق المشترك أو الترخيص للغير', '2018-02-10 17:34:46', '2018-02-10 17:34:46'),
(242, 1, 'whatweoffer', 1, 'content', '<h4>A broad and diverse spanning a range of therapy areas, available for swapping, co-marketing or out-licensing</h4>', '2018-02-10 17:34:46', '2018-02-10 17:34:46'),
(243, 1, 'whatweoffer', 2, 'content', '<section class=\"module bg-white-dark\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".25s\" data-wow-delay=\".5s\">\r\n<h4 style=\"text-align: right;\">محفظة منتجات شاملة ومتنوعة تغطي مجموعة واسعة من المجالات العلاجية، متوفرة للمقايضة أو التسويق المشترك أو الترخيص للغير</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', '2018-02-10 17:34:46', '2018-02-10 17:34:46'),
(244, 2, 'whatweoffer', 1, 'title', 'Complete and ready to use value chain activities - such as regulatory, marketing and sales, distribution, logistics and warehousing', '2018-02-10 17:40:15', '2018-02-10 17:40:15'),
(245, 2, 'whatweoffer', 2, 'title', 'شبكة كاملة وجاهزة للاستخدام، توفر خدمات التسجيل، التسويق والمبيعات ، التوزيع والخدمات اللوجستية والتخزين', '2018-02-10 17:40:15', '2018-02-10 17:40:15'),
(246, 2, 'whatweoffer', 1, 'content', '<h4>Complete and ready to use value chain activities - such as regulatory, marketing and sales, distribution, logistics and warehousing</h4>', '2018-02-10 17:40:15', '2018-02-10 17:40:15'),
(247, 2, 'whatweoffer', 2, 'content', '<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".25s\" data-wow-delay=\".5s\">\r\n<h4>شبكة كاملة وجاهزة للاستخدام، توفر خدمات التسجيل، التسويق والمبيعات ، التوزيع والخدمات اللوجستية والتخزين</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-3\">&nbsp;</div>', '2018-02-10 17:40:16', '2018-02-10 17:40:16'),
(248, 3, 'whatweoffer', 1, 'title', 'An established legal presence ensuring immediate market access for partners', '2018-02-10 17:41:17', '2018-02-10 17:41:17'),
(249, 3, 'whatweoffer', 2, 'title', 'وجود قانوني يضمن للشركاء وصولاً مباشراً إلى الأسواق', '2018-02-10 17:41:17', '2018-02-10 17:41:17'),
(250, 3, 'whatweoffer', 1, 'content', '<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".5s\" data-wow-delay=\".5s\">\r\n<h4>An established legal presence ensuring immediate market access for partners</h4>\r\n</div>\r\n</div>', '2018-02-10 17:41:18', '2018-02-10 17:41:18'),
(251, 3, 'whatweoffer', 2, 'content', '<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".25s\" data-wow-delay=\".5s\">\r\n<h4>وجود قانوني يضمن للشركاء وصولاً مباشراً إلى الأسواق</h4>\r\n</div>\r\n</div>', '2018-02-10 17:41:18', '2018-02-10 17:41:18'),
(252, 4, 'whatweoffer', 1, 'title', 'A proven, strong operational infrastructure across the Middle-East and North Africa', '2018-02-10 17:42:33', '2018-02-10 17:42:33'),
(253, 4, 'whatweoffer', 2, 'title', 'بنية تشغيلية قوية وفعالة عبر الشرق الأوسط وشمال إفريقيا', '2018-02-10 17:42:33', '2018-02-10 17:42:33'),
(254, 4, 'whatweoffer', 1, 'content', '<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".25s\" data-wow-delay=\".5s\">\r\n<h4>A proven, strong operational infrastructure across the Middle-East and North Africa</h4>\r\n</div>\r\n</div>', '2018-02-10 17:42:33', '2018-02-10 17:42:33'),
(255, 4, 'whatweoffer', 2, 'content', '<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".25s\" data-wow-delay=\".5s\">\r\n<h4 style=\"text-align: right;\">بنية تشغيلية قوية وفعالة عبر الشرق الأوسط وشمال إفريقيا</h4>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-3\">&nbsp;</div>', '2018-02-10 17:42:33', '2018-02-10 17:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `managements`
--

CREATE TABLE `managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managements`
--

INSERT INTO `managements` (`id`, `name`, `title`, `position`, `content`, `photo`, `uri`, `stutes`, `created_at`, `updated_at`) VALUES
(1, 'RANA AZZAM', 'Business Development', 'Business Development', '<p>Rana has been the Senior Vice President for business development since 2012. She has over 15 years of experience in Business Development, Regulatory Affairs, and Strategic Marketing. She holds a bachelor&rsquo;s degree in Pharmacy from Jordan University, as well as a Master&rsquo;s degree in Pharmacology from University of Bath, UK.</p>', '1358_team3.jpg', 'rana-azzam', 'active', '2018-02-05 21:26:36', '2018-02-05 21:30:14');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_05_07_085320_create_settings_table', 1),
(4, '2016_11_10_122713_create_pages_table', 1),
(5, '2017_12_14_122520_create_langs_table', 1),
(6, '2017_12_14_122533_create_languages_table', 1),
(7, '2018_01_16_132402_create_key_facts_table', 1),
(8, '2018_01_16_132427_create_managements_table', 1),
(9, '2018_01_16_132507_create_generics_table', 1),
(10, '2018_01_16_132526_create_histories_table', 1),
(11, '2018_01_16_132553_create_offers_table', 1),
(12, '2018_01_16_132613_create_events_table', 1),
(13, '2018_01_16_132631_create_products_table', 1),
(14, '2018_01_16_132711_create_offices_table', 1),
(15, '2018_01_18_071234_create_publicationes_table', 1),
(16, '2018_01_18_071322_create_footages_table', 1),
(17, '2018_01_18_072823_create_news_table', 1),
(18, '2018_01_24_090425_images', 1),
(19, '2018_02_07_082057_create_facts_table', 2),
(20, '2018_02_10_083654_create_what_we_offers_table', 3),
(21, '2018_02_10_085533_whatweoffers', 4),
(22, '2018_02_13_151847_create_values_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `content`, `link`, `uri`, `photo`, `stutes`, `created_at`, `updated_at`) VALUES
(1, 'TABUK ENTERS INTO TRIPARTITE AGREEMENT WITH BOEHRINGER INGELHEIM AND CIGALAH', '28 Apr, 2014', '<p>Tabuk has entered into a tripartite agreement with Boehringer Ingelheim, one of the world&rsquo;s leading pharmaceutical companies, and Cigalah for local production in the Kingdom of Saudi Arabia. With this contract, Cigalah and Tabuk will manage and drive complex secondary packaging projects of 26 products for Boehringer Ingelheim.</p>\r\n<p>The contract between the companies was signed by Dr. Abdul Aziz AL Serafi CEO consultant of Cigalah Group, Dr Hamad Al Khamees, General Manager Saudi Arabia Tabuk and Mohammed Al Tawil, General Manager, Boehringer Ingelheim Middle East and Near East Area. Commenting on the agreement, Dr Hamad Al Khamees, General Manager Saudi Arabia Tabuk said &ldquo;Being associated with a global brand like Boehringer Ingelheim and locally with Cigalah Group gives us an opportunity to best leverage our expertise in the local production space.</p>\r\n<p>We are excited about the opportunity given to us and look forward to more cooperation in the future with Boehringer Ingelheim.&rdquo; Mohammed Al Tawil, General Manager, Boehringer Ingelheim Middle East and Near East Area, commented, &ldquo;We are delighted to enter into an agreement with Cigalah Group and Tabuk. As a leading global pharmaceutical company, we are committed to lead development and optimization of product specifications, testing protocols, qualification and validation of packaging thus ensuring product quality and safety.</p>\r\n<p>With this agreement we aim to reinforce our goal to make quality products and access to medication in the Kingdom.&rdquo; Dr. Abdul Aziz AL Serafi CEO consultant of Cigalah Group, said, &ldquo;We are happy to be associated with Boehringer Ingelheim and are sure that the cooperation between the two companies will be beneficial for the pharmaceutical sector with regards to quality, safety and accessibility of medication in the Kingdom.&rdquo; The tripartite agreement enables Boehringer Ingelheim to contract Cigalah for the secondary packaging and authorizes Cigalah to implement and conduct the packaging production at Tabuk facilities.</p>\r\n<p>Packaging is a highly regulated end stage of the drug production process aimed at not only safeguarding the drug against contamination but also ensuring its durability, visibility, sterility and strength.</p>\r\n<p>The partnership is aimed at optimization of the packaging process and providing medicines as finished goods which can help in reducing costs while maintaining the international product quality.</p>', NULL, 'tabuk-enters-into-tripartite-agreement-with-boehringer-ingelheim-and-cigalah', '8516_105418.jpg', 'active', '2018-02-04 21:52:03', '2018-02-05 17:43:47'),
(2, 'TABUK PHARMACEUTICALS ENTERS INTO A PARTNERSHIP WITH Pfizer IN THE KINGDOM OF SAUDI ARABIA TABUK PHARMACEUTICALS ENTERS INTO A PARTNERSHIP WITH Pfizer IN THE KINGDOM OF SAUDI ARABIA', '24 Jun, 2014', '<p>Tabuk Pharmaceuticals has signed a commercial agreement with Pfizer, the US-based global industry leader. The venture leverages the respective companies&rsquo; market leading presence in the Kingdom of Saudi Arabia, to deliver increased value to patients in the Cardiovascular, Central Nervous System, Anti-infective and Respiratory therapeutic areas.</p>\r\n<p>Under this agreement, Pfizer will grant Tabuk exclusive rights to carry out manufacturing processes under license, commercialize and distribute second brand versions of four Pfizer products in the Kingdom of Saudi Arabia. In addition, Tabuk Pharmaceuticals will give Pfizer, rights to twelve high-value generic products in Saudi Arabia. Both companies will seek the relevant authorities&rsquo; approvals for registration, production and commercialization.</p>\r\n<p>This project is aligned with one of Tabuk Pharmaceuticals&rsquo; main strategic objective: to expand its offering of innovative medicines in Saudi Arabia, by strengthening its position in its domestic market through partnerships with multinational companies. In so doing, Tabuk Pharmaceuticals continues to deliver on its mission to help improve the lives of patients, while contributing to the development of KSA&rsquo;s local pharmaceutical industry and manufacturing expertise.</p>\r\n<p>The initiative is also consistent with Pfizer&rsquo;s vision of &ldquo;working together for a healthier world&rdquo;. Pfizer, in line with its strategic commitment to contribute to the Saudi pharmaceutical industry, carefully selected high quality medicinal products to add to its already diverse portfolio in Saudi Arabia. Pfizer intends to leverage its global and local capabilities to bring the value of these products to its Saudi patients and further strengthen its focus in the Saudi market.</p>\r\n<p>The agreement between the companies is endorsed by&nbsp;Dr. Hamad Al Khamees, Senior Executive Vice-President KSA Tabuk Pharmaceuticals, and&nbsp;Guy Lallemand, Head of Global Established Pharma, Pfizer Africa Middle East.&nbsp;</p>', NULL, 'tabuk-pharmaceuticals-enters-into-a-partnership-with-pfizer-in-the-kingdom-of-saudi-arabia-tabuk-pharmaceuticals-enters-into-a-partnership-with-pfizer-in-the-kingdom-of-saudi-arabia', '9482_105253.jpg', 'active', '2018-02-05 17:58:01', '2018-02-06 22:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `title`, `content`, `stutes`, `created_at`, `updated_at`) VALUES
(1, 'Jordan', '<p><strong>Tabuk Pharma</strong></p>\r\n<p>P.O.Box&nbsp;17442, Amman 11195, Jordan<br />Mecca Street, Building #25<br />Tel : + 962&nbsp;6&nbsp;553 4441/2<br />Fax: + 962&nbsp;6&nbsp;553 8125</p>\r\n<p><strong>Tabuk R&amp;D</strong></p>\r\n<p>7th Circle, Al Sahil Neighborhood<br />Al Ben Abdessalam Street&nbsp;<br />Zahran Plaza Building, B1 Floor</p>', 'active', '2018-02-08 21:15:16', '2018-02-08 21:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `uri`, `name`, `content`, `photo`, `template`, `stutes`, `parent_id`, `lft`, `rgt`, `depth`, `created_at`, `updated_at`) VALUES
(1, 'Home', '/', NULL, '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'home', 'active', NULL, 1, 2, 0, '2018-02-01 23:35:22', '2018-02-05 18:58:04'),
(2, 'About Us', 'aboutus', NULL, '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'aboutus', 'active', NULL, 3, 8, 0, '2018-02-01 23:35:22', '2018-02-08 20:33:50'),
(3, 'Products', 'product', NULL, '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'product', 'active', NULL, 9, 10, 0, '2018-02-01 23:35:22', '2018-02-08 20:33:50'),
(4, 'R & D', 'r-d', NULL, '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'r&d', 'active', NULL, 13, 14, 0, '2018-02-01 23:35:23', '2018-02-10 16:33:28'),
(5, 'Careers', 'https://careers.tabukpharmaceuticals.com/en/jordan', NULL, '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'career', 'active', NULL, 15, 16, 0, '2018-02-01 23:35:23', '2018-02-10 16:33:28'),
(6, 'Media', 'media', NULL, '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'media', 'active', NULL, 17, 18, 0, '2018-02-01 23:35:23', '2018-02-10 16:33:28'),
(7, 'History', 'history', NULL, '<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, 'timeline', 'active', 2, 4, 5, 1, '2018-02-07 18:59:34', '2018-02-07 18:59:34'),
(8, 'Offices', 'offices', NULL, NULL, NULL, 'office', 'not active', 2, 6, 7, 1, '2018-02-08 20:33:50', '2018-02-08 20:33:50'),
(9, 'Partnering', 'partnering', NULL, '<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'partnering', 'not active', NULL, 11, 12, 0, '2018-02-10 16:33:27', '2018-02-10 16:33:28');

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
-- Table structure for table `pcats`
--

CREATE TABLE `pcats` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pcats`
--

INSERT INTO `pcats` (`id`, `title`, `stutes`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Alimentary tract & metabolism', 'active', NULL, '2018-02-01 23:35:19', '2018-02-03 05:54:39'),
(2, 'Antineoplastic & immunomodulators', 'active', NULL, '2018-02-01 23:35:19', '2018-02-05 22:25:23'),
(3, 'Blood & blood forming organs', 'active', NULL, '2018-02-01 23:35:20', '2018-02-05 22:24:55'),
(4, 'Cardiovascular system', 'active', NULL, '2018-02-01 23:35:20', '2018-02-05 22:24:34'),
(5, 'Dermatologicals', 'active', NULL, '2018-02-01 23:35:20', '2018-02-05 22:24:19'),
(6, 'Genito-urinary system & sex hormones', 'active', NULL, '2018-02-01 23:35:20', '2018-02-05 22:24:02'),
(7, 'Multivitamin', 'active', NULL, '2018-02-01 23:35:20', '2018-02-05 22:23:45'),
(8, 'Musculo-skeletal system', 'active', NULL, '2018-02-01 23:35:20', '2018-02-05 22:22:12'),
(9, 'Nervous system', 'active', NULL, '2018-02-01 23:35:20', '2018-02-05 22:21:56'),
(10, 'Parasitology', 'active', NULL, '2018-02-01 23:35:20', '2018-02-03 05:54:13'),
(11, 'Respiratory system', 'active', NULL, '2018-02-01 23:35:20', '2018-02-03 05:53:57'),
(12, 'Systemic anti-infectives', 'active', NULL, '2018-02-01 23:35:20', '2018-02-03 05:53:42'),
(13, 'Systemic hormones', 'active', NULL, '2018-02-01 23:35:20', '2018-02-03 05:53:28'),
(14, 'Various', 'active', NULL, '2018-02-01 23:35:20', '2018-02-01 23:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strength` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `molecule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `pcats_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `titlear`, `uri`, `strength`, `content`, `molecule`, `photo`, `stutes`, `pcats_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ridon', 'ريدون', 'ridon', '0.5mg tablets, 1mg tablets, 2mg tablets, 3mg tablets, 4mg tablets, 6mg tablets', '<p>RIDON is used to treat the following:<br />- Schizophrenia, where you may see, hear or feel things that are not there, believe things that are not true or feel unusually suspicious, or confused.<br />- Mania, where you may feel very excited, elated, agitated, enthusiastic or hyperactive. Mania occurs in an illness called &ldquo;bipolar disorder&rdquo;.<br />- Short-term treatment (up to 6 weeks) of long-term aggression in people with Alzheimer&rsquo;s dementia, who harm themselves or others. Alternative (non-drug) treatments should have been used previously.<br />- Short-term treatment (up to 6 weeks) of long-term aggression in intellectually disabled children (at least 5 years of age) and adolescents with conduct disorder.</p>', 'Risperidone', '4696_Ridon .jpg', 'active', 9, NULL, '2018-02-06 21:24:40', '2018-02-06 21:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `publicationes`
--

CREATE TABLE `publicationes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pobox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainvideo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maintenance` enum('open','close') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `subtitle`, `email`, `phone`, `address`, `fax`, `pobox`, `map`, `mainvideo`, `desc`, `photo`, `maintenance`, `keywords`, `copyright`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Tabuk Pharmaceuticals', 'Tabuk Pharmaceuticals', 'hr@tabukpharmaceuticals.com ', '+ 962 6 553 4441/2', 'Amman 11195, Jordan Mecca Street, Building #25', '+962 6 553 8125', '17442', 'https://www.google.jo/maps/@31.8357604,35.9476308,10z?hl=en', 'https://www.youtube.com', 'Tabuk Pharmaceuticals', 'logo.png', 'open', NULL, NULL, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.linkedin.com', 'https://www.youtube.com', '2018-02-01 23:35:21', '2018-02-01 23:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rule` enum('admin','editor','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `api_token`, `rule`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$j6HrKbeG4uBF9WyJY4D8YegcQkFf9G9ixqHAYpSB7vqw6aOzW5WTS', NULL, 'admin', 'bzJaqgIE1Oep2DZwiTVbA8pHQY815GpTKSUIhe82UWjzKaYYd64zqqO9YJ5n', '2018-02-01 23:35:22', '2018-02-01 23:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whatweoffers`
--

CREATE TABLE `whatweoffers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutes` enum('active','not active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatweoffers`
--

INSERT INTO `whatweoffers` (`id`, `title`, `content`, `photo`, `time`, `stutes`, `created_at`, `updated_at`) VALUES
(1, 'A broad and diverse spanning a range of therapy areas, available for swapping, co-marketing or out-licensing', '<h4>A broad and diverse spanning a range of therapy areas, available for swapping, co-marketing or out-licensing</h4>', '8003_offer5_image.jpg', '1s', 'active', '2018-02-10 17:34:46', '2018-02-10 17:34:46'),
(2, 'Complete and ready to use value chain activities - such as regulatory, marketing and sales, distribution, logistics and warehousing', '<h4>Complete and ready to use value chain activities - such as regulatory, marketing and sales, distribution, logistics and warehousing</h4>', '9278_offer3_image.jpg', '.75s', 'active', '2018-02-10 17:40:15', '2018-02-10 17:40:15'),
(3, 'An established legal presence ensuring immediate market access for partners', '<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".5s\" data-wow-delay=\".5s\">\r\n<h4>An established legal presence ensuring immediate market access for partners</h4>\r\n</div>\r\n</div>', '6286_offer2_image.jpg', '.5s', 'active', '2018-02-10 17:41:17', '2018-02-10 17:41:17'),
(4, 'A proven, strong operational infrastructure across the Middle-East and North Africa', '<div class=\"col-sm-3\">\r\n<div class=\"feature feature-circle key-fact wow zoomInUp animated animated\" data-wow-duration=\".25s\" data-wow-delay=\".5s\">\r\n<h4>A proven, strong operational infrastructure across the Middle-East and North Africa</h4>\r\n</div>\r\n</div>', '537_offer1_image.jpg', '.25s', 'active', '2018-02-10 17:42:33', '2018-02-10 17:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_uri_unique` (`uri`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footages`
--
ALTER TABLE `footages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generics`
--
ALTER TABLE `generics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_products_id_foreign` (`products_id`);

--
-- Indexes for table `key_facts`
--
ALTER TABLE `key_facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `langs_code_unique` (`code`),
  ADD UNIQUE KEY `langs_flug_unique` (`flug`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managements`
--
ALTER TABLE `managements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `managements_uri_unique` (`uri`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_uri_unique` (`uri`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_uri_unique` (`uri`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pcats`
--
ALTER TABLE `pcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pcats_id_foreign` (`pcats_id`);

--
-- Indexes for table `publicationes`
--
ALTER TABLE `publicationes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatweoffers`
--
ALTER TABLE `whatweoffers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footages`
--
ALTER TABLE `footages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `generics`
--
ALTER TABLE `generics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `key_facts`
--
ALTER TABLE `key_facts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `managements`
--
ALTER TABLE `managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pcats`
--
ALTER TABLE `pcats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicationes`
--
ALTER TABLE `publicationes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whatweoffers`
--
ALTER TABLE `whatweoffers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_pcats_id_foreign` FOREIGN KEY (`pcats_id`) REFERENCES `pcats` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
