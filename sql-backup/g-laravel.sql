-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2022 at 09:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `small_description`, `status`, `link`, `cover`, `created_at`, `updated_at`) VALUES
(5, 'Lazada', 'Lazada', 'Lazada', 'Enabled', 'https://shopee.co.th/ctelectricshop?smtt=0.0.4', '1667441036.png', '2022-11-02 19:03:56', '2022-11-02 19:03:56'),
(6, 'Shopee', 'Shopee', 'Shopee', 'Enabled', 'https://shopee.co.th/ctelectricshop?smtt=0.0.4', '1667441090.png', '2022-11-02 19:04:50', '2022-11-02 19:04:50'),
(7, 'Global House', 'Global House', 'Global House', 'Enabled', 'https://globalhouse.co.th/', '1667441326.png', '2022-11-02 19:08:46', '2022-11-02 19:08:46'),
(8, 'Home Pro', 'Home Pro', 'Home Pro', 'Enabled', 'https://www.homepro.co.th/', '1667441375.png', '2022-11-02 19:09:35', '2022-11-02 19:09:35'),
(9, 'Thaiwatsadu', 'Thaiwatsadu', 'Thaiwatsadu', 'Enabled', 'https://www.thaiwatsadu.com/', '1667441423.png', '2022-11-02 19:10:23', '2022-11-02 19:10:23'),
(10, 'Yong House', 'Yong House', 'Yong House', 'Enabled', 'https://www.yonghouse.co.th/', '1667441469.png', '2022-11-02 19:11:09', '2022-11-02 19:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `image`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(9, 'สวิตซ์', 'สวิตซ์', 'สวิตซ์', 'Enabled', '1666431435.png', 'สวิตซ์', 'สวิตซ์', '2022-10-22 02:37:15', '2022-10-22 02:37:15'),
(10, 'ปลั๊กไฟ', 'ปลั๊กไฟ', 'ปลั๊กไฟ', 'Enabled', '1666431503.png', 'ปลั๊กไฟ', 'ปลั๊กไฟ', '2022-10-22 02:38:23', '2022-10-27 00:52:13'),
(11, 'เบรกเกอร์', 'เบรกเกอร์', 'เบรกเกอร์', 'Enabled', '1666663990.png', 'เบรกเกอร์', 'เบรกเกอร์', '2022-10-22 02:20:10', '2022-11-02 23:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopee` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lazada` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `slug`, `address`, `phone`, `email`, `map`, `description`, `facebook`, `shopee`, `lazada`, `status`, `created_at`, `updated_at`) VALUES
(6, 'บริษัท จีโนลกรุ๊ป ซีที อิเล็คทริค ฟิเคชั่น จำกัด', 'บริษัทจีโนลกรุ๊ป ซีท อิเล็คทริค ฟิเคชั่น จำกัด เดิมคือ บริษัท ซีที อิเล็ค (ไทยแลนด์) จำกัด', '49/3 หมู่ 8 ตำบล นาดี อำเภอ เมือง จังหวัด สมุทรสาคร', '034-496-686 / 089-763-0055', 'ctthai@hotmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.739714680797!2d100.30288155052877!3d13.612702690390652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bb67fca23323%3A0xe64424eb4f50ee36!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4iOC4teC5guC4meC4pSDguIHguKPguLjguYrguJsg4LiL4Li14LiX4Li1IOC4reC4tOC5gOC4peC5h-C4hOC4l-C4o-C4tOC4hOC4n-C4tOC5gOC4hOC4iuC4seC5iOC4mSDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1666865528993!5m2!1sth!2sth', '<p>บริษัท จีโนลกรุ๊ป ซีที อิเล็คทริค ฟิเคชั่น จำกัด เดิมคือ บริษัท ซีที อิเล็ค (ไทยแลนด์) จำกัด</p>\r\n<p><strong>เวลาทำการ :</strong></p>\r\n<p>จันทร์ - เสาร์ หยุดวันอาทิตย์<br>8:30น. - 17:30 น.</p>', 'https://th-th.facebook.com/GinolrGroup/', 'https://shopee.co.th/ctelectricshop?smtt=0.0.4', 'https://www.lazada.co.th/shop/ct-electric?path=index.htm&langFlag=th&lang=th&pageTypeId=1', 'Enabled', '2022-10-27 01:23:28', '2022-11-01 02:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `post_id`, `created_at`, `updated_at`) VALUES
(28, '1666670464_cws 111-ด้านหลัง.png', 36, '2022-10-24 21:01:04', '2022-10-24 21:01:04'),
(29, '1666670464_LAMP.png', 36, '2022-10-24 21:01:04', '2022-10-24 21:01:04'),
(30, '1666670464_FAN1.png', 36, '2022-10-24 21:01:04', '2022-10-24 21:01:04'),
(31, '1666670464_CWS121.png', 36, '2022-10-24 21:01:04', '2022-10-24 21:01:04'),
(32, '1666670464_CWS111.png', 36, '2022-10-24 21:01:04', '2022-10-24 21:01:04'),
(33, '1666670464_cws-111-side.png', 36, '2022-10-24 21:01:04', '2022-10-24 21:01:04'),
(42, '1666773943_20220121—Dahyun_다현_Campaign_Film,_Pearlygates_x_Twice_2022.jpg', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(43, '1666773943_01-setup-ftp-server-ubuntu-18.04-bionic.png', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(44, '1666773943_Untitled-1.png', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(45, '1666773943_J.jpg', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(46, '1666773943_the-silhouette-of-the-buddha-image_1355212.jpg', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(47, '1666773943_uhdpaper.com-download-4K-5.646-@4936236184851306538.jpg', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(48, '1666773943_Screen Shot 2022-10-15 at 12.09.20 PM.png', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(49, '1666773943_Screen Shot 2022-09-10 at 5.15.54 AM.png', 38, '2022-10-26 01:45:43', '2022-10-26 01:45:43'),
(50, '1666774168_Untitled-1.png', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(51, '1666774168_20220121—Dahyun_다현_Campaign_Film,_Pearlygates_x_Twice_2022.jpg', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(52, '1666774168_01-setup-ftp-server-ubuntu-18.04-bionic.png', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(53, '1666774168_the-silhouette-of-the-buddha-image_1355212.jpg', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(54, '1666774168_uhdpaper.com-download-4K-5.646-@4936236184851306538.jpg', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(55, '1666774168_Screen Shot 2022-09-10 at 5.15.54 AM.png', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(56, '1666774168_Screen Shot 2022-10-15 at 12.09.20 PM.png', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(57, '1666774168_J.jpg', 39, '2022-10-26 01:49:28', '2022-10-26 01:49:28'),
(58, '1666774392_01-setup-ftp-server-ubuntu-18.04-bionic.png', 40, '2022-10-26 01:53:12', '2022-10-26 01:53:12'),
(59, '1666774392_20220121—Dahyun_다현_Campaign_Film,_Pearlygates_x_Twice_2022.jpg', 40, '2022-10-26 01:53:12', '2022-10-26 01:53:12'),
(60, '1666774392_the-silhouette-of-the-buddha-image_1355212.jpg', 40, '2022-10-26 01:53:12', '2022-10-26 01:53:12'),
(62, '1666856938_20220121—Dahyun_다현_Campaign_Film,_Pearlygates_x_Twice_2022.jpg', 42, '2022-10-27 00:48:58', '2022-10-27 00:48:58'),
(63, '1667206280_uhdpaper.com-download-4K-5.646-@4936236184851306538.jpg', 43, '2022-10-31 01:51:20', '2022-10-31 01:51:20'),
(64, '1667272203_logo-Ginolr-1.png', 49, '2022-10-31 20:10:03', '2022-10-31 20:10:03'),
(65, '1667272203_slogan-bg.jpg', 49, '2022-10-31 20:10:03', '2022-10-31 20:10:03'),
(66, '1667272203_PR photo1.jpg', 49, '2022-10-31 20:10:03', '2022-10-31 20:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_etc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `image_etc`, `product_id`, `created_at`, `updated_at`) VALUES
(10, '1666683850_cws-111-side.png', 118, '2022-10-25 00:44:10', '2022-10-25 00:44:10'),
(11, '1666683995_cws 111-ด้านหลัง.png', 119, '2022-10-25 00:46:35', '2022-10-25 00:46:35'),
(12, '1666683995_cws-111-side.png', 119, '2022-10-25 00:46:35', '2022-10-25 00:46:35'),
(17, '1666684587_cws-111-side.png', 121, '2022-10-25 00:56:27', '2022-10-25 00:56:27'),
(18, '1666684587_cws 111-ด้านหลัง.png', 121, '2022-10-25 00:56:27', '2022-10-25 00:56:27'),
(19, '1666684983_cws-111-side.png', 122, '2022-10-25 01:03:03', '2022-10-25 01:03:03'),
(20, '1666684983_cws 111-ด้านหลัง.png', 122, '2022-10-25 01:03:03', '2022-10-25 01:03:03'),
(21, '1666685134_cws-111-side.png', 123, '2022-10-25 01:05:34', '2022-10-25 01:05:34'),
(22, '1666685134_cws 111-ด้านหลัง.png', 123, '2022-10-25 01:05:34', '2022-10-25 01:05:34'),
(23, '1666685494_cws-111-side.png', 124, '2022-10-25 01:11:34', '2022-10-25 01:11:34'),
(24, '1666685494_cws 111-ด้านหลัง.png', 124, '2022-10-25 01:11:34', '2022-10-25 01:11:34'),
(25, '1666685914_cws 111-ด้านหลัง.png', 125, '2022-10-25 01:18:34', '2022-10-25 01:18:34'),
(26, '1666685914_cws-111-side.png', 125, '2022-10-25 01:18:34', '2022-10-25 01:18:34'),
(27, '1666685914_CWS121.png', 125, '2022-10-25 01:18:34', '2022-10-25 01:18:34'),
(28, '1666685914_FAN1.png', 125, '2022-10-25 01:18:34', '2022-10-25 01:18:34'),
(29, '1666685914_LAMP.png', 125, '2022-10-25 01:18:34', '2022-10-25 01:18:34'),
(30, '1666774786_20220121—Dahyun_다현_Campaign_Film,_Pearlygates_x_Twice_2022.jpg', 126, '2022-10-26 01:59:46', '2022-10-26 01:59:46'),
(31, '1666857172_Screen Shot 2022-10-15 at 12.09.20 PM.png', 127, '2022-10-27 00:52:52', '2022-10-27 00:52:52'),
(32, '1667028693_J.jpg', 1, '2022-10-29 00:31:33', '2022-10-29 00:31:33'),
(33, '1667029198_J.jpg', 2, '2022-10-29 00:39:58', '2022-10-29 00:39:58'),
(34, '1667463372_cws 111-ด้านหลัง.png', 3, '2022-11-03 01:16:12', '2022-11-03 01:16:12'),
(35, '1667463372_cws-111-side.png', 3, '2022-11-03 01:16:12', '2022-11-03 01:16:12'),
(36, '1667463394_cws-111-side.png', 4, '2022-11-03 01:16:34', '2022-11-03 01:16:34'),
(37, '1667463394_cws 111-ด้านหลัง.png', 4, '2022-11-03 01:16:34', '2022-11-03 01:16:34'),
(38, '1667466449_IMG_6640.png', 5, '2022-11-03 02:07:29', '2022-11-03 02:07:29'),
(39, '1667466449_IMG_6645.png', 5, '2022-11-03 02:07:29', '2022-11-03 02:07:29'),
(40, '1667466449_IMG_6647.png', 5, '2022-11-03 02:07:29', '2022-11-03 02:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_top` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_footer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `name`, `logo_top`, `logo_footer`, `created_at`, `updated_at`) VALUES
(6, 'logo Company', '1667803596_logo.png', '1667803596_footer.png', '2022-11-06 23:46:36', '2022-11-06 23:46:36'),
(7, 'logo Company', 'logo Company', 'logo Company', '2022-11-06 23:56:02', '2022-11-06 23:56:02');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2022_10_12_082348_create_categories_table', 4),
(22, '2022_10_20_101307_create_post_tag_table', 6),
(26, '2022_10_21_025517_create_images_table', 8),
(27, '2022_10_20_101130_create_posts_table', 9),
(29, '2022_10_20_101227_create_tags_table', 10),
(63, '2022_10_25_032419_create_images_product_table', 12),
(64, '2022_10_25_063756_create_images_products_table', 13),
(65, '2022_10_25_063926_create_image_products_table', 14),
(67, '2022_10_26_041217_create_slideshows_table', 15),
(69, '2022_10_27_044744_create_contacts_table', 16),
(70, '2022_10_27_080605_create_videos_table', 17),
(72, '2022_10_29_022838_create_brands_table', 18),
(73, '2022_10_15_032414_create_products_table', 19),
(75, '2022_11_01_040551_create_contact_us_table', 20),
(77, '2022_11_07_044345_create_logos_table', 21);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `small_description`, `description`, `cover`, `status`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(43, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด', '<p>เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป&nbsp;&nbsp;โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช&nbsp;&nbsp;อภิธารานนท์&nbsp;&nbsp;ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล&nbsp;&nbsp;โรงพยาบาลราชวิถี ก่อนการส่งมอบ&nbsp;&nbsp;&nbsp;โดยบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ได้รับความไว้วางใจให้เป็นผู้ดำเนินการก่อสร้างอาคารหอพักแพทย์และพยาบาลดังกล่าว&nbsp;&nbsp;ซึ่งเป็นอาคารสูง&nbsp;18&nbsp;&nbsp;ชั้น ภายใต้คอนเซ็ปต์อาคารประหยัดพลังงาน ที่ได้รับการออกแบบอย่างดี&nbsp;&nbsp;พร้อมสิ่งอำนายความสะดวกครบครัน ทั้งห้องพัก&nbsp;&nbsp;ห้องอาหาร&nbsp;&nbsp;ห้องประชุมสัมมนา&nbsp;&nbsp;ห้องออกกำลังกายและระบบรักษาความปลอดภัย&nbsp;&nbsp;ฯลฯ&nbsp;&nbsp;&nbsp;โรงพยาบาลราชวิถีจัดสร้างตึกนี้ขึ้นเพื่ออำนวยความสะดวกแก่บุคลากรของโรงพยาบาล&nbsp;&nbsp;ให้สามารถให้บริการตรวจรักษาแก่ประชาชนและผู้ป่วยในซึ่งมีมากกว่า&nbsp;1.5&nbsp;ล้านคนต่อปีได้อย่างมีประสิทธิภาพ&nbsp;&nbsp;&nbsp;อาคารดังกล่าวมีมูลค่า&nbsp;444,223,883.63&nbsp;ล้านบาท&nbsp;&nbsp;&nbsp;โดยมีระยะเวลาก่อสร้าง&nbsp;&nbsp;1076&nbsp;วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้สนใจเกี่ยวกับการดำเนินธุรกิจและผลงานของบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;สามารถศึกษารายละเอียดได้ที่&nbsp;&nbsp;<a href=\"https://www.ginolr.com\">www.ginolr.com</a>&nbsp;หรือที่ฝ่ายข้อมูลการตลาด โทร.&nbsp;034-496-686&nbsp;ทุกวันในเวลาทำการ</p>', '1667206280_PR photo1.jpg', 'Enabled', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', '2018-11-19 01:51:20', '2022-10-31 01:51:20'),
(44, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด', '<p>เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป&nbsp;&nbsp;โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช&nbsp;&nbsp;อภิธารานนท์&nbsp;&nbsp;ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล&nbsp;&nbsp;โรงพยาบาลราชวิถี ก่อนการส่งมอบ&nbsp;&nbsp;&nbsp;โดยบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ได้รับความไว้วางใจให้เป็นผู้ดำเนินการก่อสร้างอาคารหอพักแพทย์และพยาบาลดังกล่าว&nbsp;&nbsp;ซึ่งเป็นอาคารสูง&nbsp;18&nbsp;&nbsp;ชั้น ภายใต้คอนเซ็ปต์อาคารประหยัดพลังงาน ที่ได้รับการออกแบบอย่างดี&nbsp;&nbsp;พร้อมสิ่งอำนายความสะดวกครบครัน ทั้งห้องพัก&nbsp;&nbsp;ห้องอาหาร&nbsp;&nbsp;ห้องประชุมสัมมนา&nbsp;&nbsp;ห้องออกกำลังกายและระบบรักษาความปลอดภัย&nbsp;&nbsp;ฯลฯ&nbsp;&nbsp;&nbsp;โรงพยาบาลราชวิถีจัดสร้างตึกนี้ขึ้นเพื่ออำนวยความสะดวกแก่บุคลากรของโรงพยาบาล&nbsp;&nbsp;ให้สามารถให้บริการตรวจรักษาแก่ประชาชนและผู้ป่วยในซึ่งมีมากกว่า&nbsp;1.5&nbsp;ล้านคนต่อปีได้อย่างมีประสิทธิภาพ&nbsp;&nbsp;&nbsp;อาคารดังกล่าวมีมูลค่า&nbsp;444,223,883.63&nbsp;ล้านบาท&nbsp;&nbsp;&nbsp;โดยมีระยะเวลาก่อสร้าง&nbsp;&nbsp;1076&nbsp;วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้สนใจเกี่ยวกับการดำเนินธุรกิจและผลงานของบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;สามารถศึกษารายละเอียดได้ที่&nbsp;&nbsp;<a href=\"https://www.ginolr.com\">www.ginolr.com</a>&nbsp;หรือที่ฝ่ายข้อมูลการตลาด โทร.&nbsp;034-496-686&nbsp;ทุกวันในเวลาทำการ</p>', '1667206280_PR photo1.jpg', 'Enabled', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', '2022-10-31 01:51:20', '2022-10-31 01:51:20'),
(45, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด', '<p>เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป&nbsp;&nbsp;โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช&nbsp;&nbsp;อภิธารานนท์&nbsp;&nbsp;ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล&nbsp;&nbsp;โรงพยาบาลราชวิถี ก่อนการส่งมอบ&nbsp;&nbsp;&nbsp;โดยบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ได้รับความไว้วางใจให้เป็นผู้ดำเนินการก่อสร้างอาคารหอพักแพทย์และพยาบาลดังกล่าว&nbsp;&nbsp;ซึ่งเป็นอาคารสูง&nbsp;18&nbsp;&nbsp;ชั้น ภายใต้คอนเซ็ปต์อาคารประหยัดพลังงาน ที่ได้รับการออกแบบอย่างดี&nbsp;&nbsp;พร้อมสิ่งอำนายความสะดวกครบครัน ทั้งห้องพัก&nbsp;&nbsp;ห้องอาหาร&nbsp;&nbsp;ห้องประชุมสัมมนา&nbsp;&nbsp;ห้องออกกำลังกายและระบบรักษาความปลอดภัย&nbsp;&nbsp;ฯลฯ&nbsp;&nbsp;&nbsp;โรงพยาบาลราชวิถีจัดสร้างตึกนี้ขึ้นเพื่ออำนวยความสะดวกแก่บุคลากรของโรงพยาบาล&nbsp;&nbsp;ให้สามารถให้บริการตรวจรักษาแก่ประชาชนและผู้ป่วยในซึ่งมีมากกว่า&nbsp;1.5&nbsp;ล้านคนต่อปีได้อย่างมีประสิทธิภาพ&nbsp;&nbsp;&nbsp;อาคารดังกล่าวมีมูลค่า&nbsp;444,223,883.63&nbsp;ล้านบาท&nbsp;&nbsp;&nbsp;โดยมีระยะเวลาก่อสร้าง&nbsp;&nbsp;1076&nbsp;วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้สนใจเกี่ยวกับการดำเนินธุรกิจและผลงานของบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;สามารถศึกษารายละเอียดได้ที่&nbsp;&nbsp;<a href=\"https://www.ginolr.com\">www.ginolr.com</a>&nbsp;หรือที่ฝ่ายข้อมูลการตลาด โทร.&nbsp;034-496-686&nbsp;ทุกวันในเวลาทำการ</p>', '1667206280_PR photo1.jpg', 'Enabled', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', '2018-11-19 01:51:20', '2022-10-31 01:51:20'),
(46, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด', '<p>เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป&nbsp;&nbsp;โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช&nbsp;&nbsp;อภิธารานนท์&nbsp;&nbsp;ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล&nbsp;&nbsp;โรงพยาบาลราชวิถี ก่อนการส่งมอบ&nbsp;&nbsp;&nbsp;โดยบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ได้รับความไว้วางใจให้เป็นผู้ดำเนินการก่อสร้างอาคารหอพักแพทย์และพยาบาลดังกล่าว&nbsp;&nbsp;ซึ่งเป็นอาคารสูง&nbsp;18&nbsp;&nbsp;ชั้น ภายใต้คอนเซ็ปต์อาคารประหยัดพลังงาน ที่ได้รับการออกแบบอย่างดี&nbsp;&nbsp;พร้อมสิ่งอำนายความสะดวกครบครัน ทั้งห้องพัก&nbsp;&nbsp;ห้องอาหาร&nbsp;&nbsp;ห้องประชุมสัมมนา&nbsp;&nbsp;ห้องออกกำลังกายและระบบรักษาความปลอดภัย&nbsp;&nbsp;ฯลฯ&nbsp;&nbsp;&nbsp;โรงพยาบาลราชวิถีจัดสร้างตึกนี้ขึ้นเพื่ออำนวยความสะดวกแก่บุคลากรของโรงพยาบาล&nbsp;&nbsp;ให้สามารถให้บริการตรวจรักษาแก่ประชาชนและผู้ป่วยในซึ่งมีมากกว่า&nbsp;1.5&nbsp;ล้านคนต่อปีได้อย่างมีประสิทธิภาพ&nbsp;&nbsp;&nbsp;อาคารดังกล่าวมีมูลค่า&nbsp;444,223,883.63&nbsp;ล้านบาท&nbsp;&nbsp;&nbsp;โดยมีระยะเวลาก่อสร้าง&nbsp;&nbsp;1076&nbsp;วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้สนใจเกี่ยวกับการดำเนินธุรกิจและผลงานของบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;สามารถศึกษารายละเอียดได้ที่&nbsp;&nbsp;<a href=\"https://www.ginolr.com\">www.ginolr.com</a>&nbsp;หรือที่ฝ่ายข้อมูลการตลาด โทร.&nbsp;034-496-686&nbsp;ทุกวันในเวลาทำการ</p>', '1667206280_PR photo1.jpg', 'Enabled', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', '2022-10-31 01:51:20', '2022-10-31 01:51:20'),
(47, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด', '<p>เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป&nbsp;&nbsp;โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช&nbsp;&nbsp;อภิธารานนท์&nbsp;&nbsp;ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล&nbsp;&nbsp;โรงพยาบาลราชวิถี ก่อนการส่งมอบ&nbsp;&nbsp;&nbsp;โดยบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ได้รับความไว้วางใจให้เป็นผู้ดำเนินการก่อสร้างอาคารหอพักแพทย์และพยาบาลดังกล่าว&nbsp;&nbsp;ซึ่งเป็นอาคารสูง&nbsp;18&nbsp;&nbsp;ชั้น ภายใต้คอนเซ็ปต์อาคารประหยัดพลังงาน ที่ได้รับการออกแบบอย่างดี&nbsp;&nbsp;พร้อมสิ่งอำนายความสะดวกครบครัน ทั้งห้องพัก&nbsp;&nbsp;ห้องอาหาร&nbsp;&nbsp;ห้องประชุมสัมมนา&nbsp;&nbsp;ห้องออกกำลังกายและระบบรักษาความปลอดภัย&nbsp;&nbsp;ฯลฯ&nbsp;&nbsp;&nbsp;โรงพยาบาลราชวิถีจัดสร้างตึกนี้ขึ้นเพื่ออำนวยความสะดวกแก่บุคลากรของโรงพยาบาล&nbsp;&nbsp;ให้สามารถให้บริการตรวจรักษาแก่ประชาชนและผู้ป่วยในซึ่งมีมากกว่า&nbsp;1.5&nbsp;ล้านคนต่อปีได้อย่างมีประสิทธิภาพ&nbsp;&nbsp;&nbsp;อาคารดังกล่าวมีมูลค่า&nbsp;444,223,883.63&nbsp;ล้านบาท&nbsp;&nbsp;&nbsp;โดยมีระยะเวลาก่อสร้าง&nbsp;&nbsp;1076&nbsp;วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้สนใจเกี่ยวกับการดำเนินธุรกิจและผลงานของบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;สามารถศึกษารายละเอียดได้ที่&nbsp;&nbsp;<a href=\"https://www.ginolr.com\">www.ginolr.com</a>&nbsp;หรือที่ฝ่ายข้อมูลการตลาด โทร.&nbsp;034-496-686&nbsp;ทุกวันในเวลาทำการ</p>', '1667206280_PR photo1.jpg', 'Enabled', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', '2022-10-31 01:51:20', '2022-10-31 01:51:20'),
(48, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด', '<p>เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป&nbsp;&nbsp;โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช&nbsp;&nbsp;อภิธารานนท์&nbsp;&nbsp;ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล&nbsp;&nbsp;โรงพยาบาลราชวิถี ก่อนการส่งมอบ&nbsp;&nbsp;&nbsp;โดยบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ได้รับความไว้วางใจให้เป็นผู้ดำเนินการก่อสร้างอาคารหอพักแพทย์และพยาบาลดังกล่าว&nbsp;&nbsp;ซึ่งเป็นอาคารสูง&nbsp;18&nbsp;&nbsp;ชั้น ภายใต้คอนเซ็ปต์อาคารประหยัดพลังงาน ที่ได้รับการออกแบบอย่างดี&nbsp;&nbsp;พร้อมสิ่งอำนายความสะดวกครบครัน ทั้งห้องพัก&nbsp;&nbsp;ห้องอาหาร&nbsp;&nbsp;ห้องประชุมสัมมนา&nbsp;&nbsp;ห้องออกกำลังกายและระบบรักษาความปลอดภัย&nbsp;&nbsp;ฯลฯ&nbsp;&nbsp;&nbsp;โรงพยาบาลราชวิถีจัดสร้างตึกนี้ขึ้นเพื่ออำนวยความสะดวกแก่บุคลากรของโรงพยาบาล&nbsp;&nbsp;ให้สามารถให้บริการตรวจรักษาแก่ประชาชนและผู้ป่วยในซึ่งมีมากกว่า&nbsp;1.5&nbsp;ล้านคนต่อปีได้อย่างมีประสิทธิภาพ&nbsp;&nbsp;&nbsp;อาคารดังกล่าวมีมูลค่า&nbsp;444,223,883.63&nbsp;ล้านบาท&nbsp;&nbsp;&nbsp;โดยมีระยะเวลาก่อสร้าง&nbsp;&nbsp;1076&nbsp;วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้สนใจเกี่ยวกับการดำเนินธุรกิจและผลงานของบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;สามารถศึกษารายละเอียดได้ที่&nbsp;&nbsp;<a href=\"https://www.ginolr.com\">www.ginolr.com</a>&nbsp;หรือที่ฝ่ายข้อมูลการตลาด โทร.&nbsp;034-496-686&nbsp;ทุกวันในเวลาทำการ</p>', '1667206280_PR photo1.jpg', 'Enabled', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', '2018-11-19 01:51:20', '2022-10-31 01:51:20'),
(49, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด', '<p>เมื่อเร็ว ๆ นี้ บริษัท <strong>จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป</strong> &nbsp;โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช&nbsp;&nbsp;อภิธารานนท์&nbsp;&nbsp;ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล&nbsp;&nbsp;โรงพยาบาลราชวิถี ก่อนการส่งมอบ&nbsp;&nbsp;&nbsp;โดยบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;ได้รับความไว้วางใจให้เป็นผู้ดำเนินการก่อสร้างอาคารหอพักแพทย์และพยาบาลดังกล่าว&nbsp;&nbsp;ซึ่งเป็นอาคารสูง&nbsp;18&nbsp;&nbsp;ชั้น ภายใต้คอนเซ็ปต์อาคารประหยัดพลังงาน ที่ได้รับการออกแบบอย่างดี&nbsp;&nbsp;พร้อมสิ่งอำนายความสะดวกครบครัน ทั้งห้องพัก&nbsp;&nbsp;ห้องอาหาร&nbsp;&nbsp;ห้องประชุมสัมมนา&nbsp;&nbsp;ห้องออกกำลังกายและระบบรักษาความปลอดภัย&nbsp;&nbsp;ฯลฯ&nbsp; &nbsp;\"<strong>โรงพยาบาลราชวิถีจัดสร้างตึกนี้ขึ้นเพื่ออำนวยความสะดวกแก่บุคลากรของโรงพยาบาล\"</strong>&nbsp;&nbsp;ให้สามารถให้บริการตรวจรักษาแก่ประชาชนและผู้ป่วยในซึ่งมีมากกว่า&nbsp;1.5&nbsp;ล้านคนต่อปีได้อย่างมีประสิทธิภาพ&nbsp;&nbsp;&nbsp;อาคารดังกล่าวมีมูลค่า&nbsp;444,223,883.63&nbsp;ล้านบาท&nbsp;&nbsp;&nbsp;โดยมีระยะเวลาก่อสร้าง&nbsp;&nbsp;1076&nbsp;วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับผู้สนใจเกี่ยวกับการดำเนินธุรกิจและผลงานของบริษัท จีโนลร์ คอนสตรัคชั่น จำกัด&nbsp;&nbsp;สามารถศึกษารายละเอียดได้ที่&nbsp;&nbsp;<a href=\"https://www.ginolr.com\">www.ginolr.com</a>&nbsp;หรือที่ฝ่ายข้อมูลการตลาด โทร.&nbsp;034-496-686&nbsp;ทุกวันในเวลาทำการ</p>', '1667206280_PR photo1.jpg', 'Enabled', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป', 'บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดยมร.จ้าว จิ้น หยวี่ ประธานบริษัท และนายคมกฤช  อภิธารานนท์  ผู้จัดการ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  ร่วมกันถ่ายภาพที่ระลึกกับทีมงานในโอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', '2022-10-31 01:51:20', '2022-10-31 23:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(55, 43, 1, NULL, NULL),
(56, 45, 2, NULL, NULL),
(57, 45, 3, NULL, NULL),
(58, 44, 1, NULL, NULL),
(59, 44, 4, NULL, NULL),
(60, 46, 1, NULL, NULL),
(61, 46, 2, NULL, NULL),
(62, 46, 3, NULL, NULL),
(63, 46, 4, NULL, NULL),
(64, 47, 2, NULL, NULL),
(65, 47, 3, NULL, NULL),
(66, 48, 2, NULL, NULL),
(67, 48, 3, NULL, NULL),
(68, 48, 4, NULL, NULL),
(69, 49, 2, NULL, NULL),
(70, 49, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `made` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `use` enum('Indoor','Outdoor') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Indoor',
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_dimension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `product_code`, `barcode`, `dimension`, `made`, `use`, `small_description`, `description`, `image`, `image_dimension`, `status`, `meta_title`, `meta_description`, `created_at`, `updated_at`, `category_id`) VALUES
(3, 'สวิตช์ทางเดียว', 'CWS-111สวิตช์ทางเดียว', '8859042811110', '8859042811110', '4x2x3', 'สวิตซ์', 'Indoor', 'CWS-111 สวิตช์ทางเดียว', '<p>CWS-111 สวิตช์ทางเดียว</p>', '1667463372_cws-111-side.png', '1667463372.png', 'Enabled', 'CWS-111 สวิตช์ทางเดียว', 'CWS-111 สวิตช์ทางเดียว', '2022-11-03 01:16:12', '2022-11-03 01:16:12', 9),
(4, 'สวิตช์ทางเดียว', 'CWS-111สวิตช์ทางเดียว', '8859042811110', '8859042811110', '4x2x3', 'สวิตซ์', 'Indoor', 'CWS-111 สวิตช์ทางเดียว', '<p>CWS-111 สวิตช์ทางเดียว</p>', '1667463394_cws-111-side.png', '1667463394.png', 'Enabled', 'CWS-111 สวิตช์ทางเดียว', 'CWS-111 สวิตช์ทางเดียว', '2022-11-03 01:16:34', '2022-11-03 01:16:34', 9),
(5, 'เมนเบรกเกอร์', 'DZ47-63 2P16A เมนเบรกเกอร์', '01-CT02-011005', 'None.', 'None', 'CT-ELETRIC', 'Indoor', '<p>DZ47-63 2P16A เมนเบรกเกอร์</p>', '<p>DZ47-63 2P16A เมนเบรกเกอร์</p>', '1667466448_IMG_6645.png', '1667466448.png', 'Enabled', 'DZ47-63 2P16A เมนเบรกเกอร์ - MINICIRCUTBREAKER DZ47-63-2P16A', '<p>DZ47-63 2P16A เมนเบรกเกอร์</p>', '2022-11-03 02:07:28', '2022-11-03 02:31:58', 11);

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `name`, `slug`, `small_description`, `status`, `link`, `cover`, `created_at`, `updated_at`) VALUES
(7, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร 1', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร 1', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร 1', 'Enabled', 'http://localhost:8000/guest/show-post/%E0%B8%88%E0%B8%B5%E0%B9%82%E0%B8%99%E0%B8%A5%E0%B8%A3%E0%B9%8C%20%E0%B8%84%E0%B8%AD%E0%B8%99%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B8%B1%E0%B8%84%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%20%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%A1%E0%B8%AD%E0%B8%9A%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3', '1667442877.jpg', '2022-11-02 19:34:37', '2022-11-02 19:34:37'),
(8, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร 2', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร 2', 'เมื่อเร็ว ๆ นี้ บริษัท จีโนลร์ คอนสตรัคชั่น จำกัด  บริษัท ผู้ดำเนินธุรกิจก่อสร้างหนึ่งในเครือจีโนลกรุ๊ป  โดย มร.จ้าว จิ้น หยวี่', 'Enabled', 'http://localhost:8000/guest/show-post/%E0%B8%88%E0%B8%B5%E0%B9%82%E0%B8%99%E0%B8%A5%E0%B8%A3%E0%B9%8C%20%E0%B8%84%E0%B8%AD%E0%B8%99%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B8%B1%E0%B8%84%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%20%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%A1%E0%B8%AD%E0%B8%9A%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3', '1667442967.jpg', '2022-11-02 19:36:07', '2022-11-02 19:36:07'),
(9, 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร 3', 'จีโนลร์ คอนสตรัคชั่น ส่งมอบอาคาร 3', 'โอกาสตรวจความพร้อม....อาคารหอพักแพทย์และพยาบาล  โรงพยาบาลราชวิถี ก่อนการส่งมอบ', 'Enabled', 'http://localhost:8000/guest/show-post/%E0%B8%88%E0%B8%B5%E0%B9%82%E0%B8%99%E0%B8%A5%E0%B8%A3%E0%B9%8C%20%E0%B8%84%E0%B8%AD%E0%B8%99%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B8%B1%E0%B8%84%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%99%20%E0%B8%AA%E0%B9%88%E0%B8%87%E0%B8%A1%E0%B8%AD%E0%B8%9A%E0%B8%AD%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%A3', '1667443004.jpg', '2022-11-02 19:36:44', '2022-11-02 19:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Event', 'event', '2022-10-21 23:36:28', '2022-10-21 23:36:28'),
(2, 'ออกบูธ', 'ออกบูธ', '2022-10-21 23:36:43', '2022-10-21 23:36:43'),
(3, 'ทำบุญ', 'ทำบุญ', '2022-10-25 02:57:51', '2022-10-25 02:57:51'),
(4, 'โปรโมชั่น', 'โปรโมชั่น', '2022-10-27 00:47:48', '2022-10-27 00:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'replace', 'cookiesz.blurz@gmail.com', NULL, '$2y$10$jyxM0nU2ivELOGHZdKRLJOqsovvRXdM4Sl18eZtxI7dnJOkJIB66O', 1, NULL, '2022-10-11 22:26:34', '2022-10-11 22:26:34'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$IdkfayShC3FIm0BxaD274.rbLdHI.z/G4H8zqKqFYMFyBbJhO2GgW', 0, NULL, '2022-10-11 23:19:51', '2022-10-11 23:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Enabled','Disabled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Enabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `slug`, `link`, `small_description`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TWICE(ทไวซ์) \"What is Love?\" M/V', 'TWICE What is Love M/V', 'https://youtu.be/c7rCyll5AeY', 'Video', '<div>\r\n<div>Video</div>\r\n</div>', 'Enabled', '2022-10-27 01:50:13', '2022-10-27 02:20:09'),
(2, 'BLACKPINK - \'마지막처럼 (AS IF IT\'S YOUR LAST)\' M/V', 'BLACKPINK - \'마지막처럼 AS IF IT\'S YOUR LAST M/V', 'https://youtu.be/Amq-qlqbjYA', 'BLACKPINK - \'마지막처럼 (AS IF IT\'S YOUR LAST)\' M/V', '<p>BLACKPINK - \'마지막처럼 (AS IF IT\'S YOUR LAST)\' M/V</p>', 'Enabled', '2022-10-27 02:22:24', '2022-10-27 02:22:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
