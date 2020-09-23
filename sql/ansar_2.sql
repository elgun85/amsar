-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 15 Sent, 2020 saat 14:24
-- Server versiyası: 10.4.8-MariaDB
-- PHP Versiyası: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `ansar_2`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `admins`
--

INSERT INTO `admins` (`id`, `image`, `name`, `login`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Foto', 'huseyn', 'huseyn', 'huseyn@gmail.com', '$2y$10$ySatxkCg8GJSZnuviwP3a.joBcj96Sm6i.Vy14yoPHX5cTSAEonJy', '1', '2020-07-10 08:59:27', '2020-07-10 08:59:27'),
(2, 'uploads/maqale/elcin-huseynov.jpg', 'elgun huseynov', 'elgun', 'elgunhuseyn55@gmail.com', '$2y$10$a1LRdsCw4PyRmJ5jZdlOse80EiwiqlafCuad1e5pSYkAzAp.vuN3q', '1', '2020-07-10 10:26:05', '2020-07-10 10:26:05');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cins` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dogum_tarixi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teleb_olunan` int(11) DEFAULT NULL,
  `verilen` int(11) DEFAULT NULL,
  `unvani` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xesteliyi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_elaqe1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_elaqe2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elaqe1` int(11) DEFAULT NULL,
  `elaqe2` int(11) DEFAULT NULL,
  `hesab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hesab_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `image`, `ad`, `cins`, `dogum_tarixi`, `teleb_olunan`, `verilen`, `unvani`, `xesteliyi`, `ad_elaqe1`, `ad_elaqe2`, `elaqe1`, `elaqe2`, `hesab`, `hesab_bank`, `status`, `status_2`, `content`, `hit`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(17, 1, 'elcin  Hüseynov', 'uploads/maqale/elcin-huseynov.jpg', 'Elgun Huseynov mese', 'kisi', NULL, 111, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'tecili', NULL, 0, 'elcin-huseynov', NULL, '2020-07-24 12:14:51', '2020-08-06 13:27:25'),
(18, 1, 'elcin  Hüseynov1', 'uploads/maqale/elcin-huseynov1.jpg', 'Elgün Hüseynov Fəxrəddin', 'kisi', NULL, 200, 50, NULL, 'gdgd2', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'tecili', NULL, 0, 'elcin-huseynov1', NULL, '2020-07-24 12:36:48', '2020-08-07 12:37:01'),
(19, 6, '2 millet', 'uploads/maqale/2-millet.jpg', 'ad', 'kisi', NULL, 3535, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'aktiv', NULL, 0, '2-millet', NULL, '2020-07-24 12:45:56', '2020-07-24 12:45:56'),
(20, 4, 'title', 'uploads/maqale/4.jpg', 'ad', 'kisi', NULL, 3535, 5656, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'aktiv', NULL, 1, 'title', NULL, '2020-07-24 13:05:49', '2020-09-01 17:23:32'),
(21, 2, '2 millet454', 'uploads/maqale/2-millet.png', 'xvxv', 'kisi', NULL, 200, 100, 'dfgdg', 'zczxcz', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'tecili', NULL, 0, '2-millet454', NULL, '2020-07-24 13:09:51', '2020-08-07 12:37:15'),
(22, 0, 'title', 'uploads/maqale/title.jpg', 'Elgun Huseynov mese', 'kisi', '09/23/2020', 10, 1, 'dfgfgdg', 'dgdfg', 'elgun', 'vxcv', 556640370, 11111, 'bcb', '4545454', '1', 'tecili', '&nbsp;bnbvvbvvbcvb&nbsp; v vbcvbcvbcvb', 3, 'title', NULL, '2020-09-01 17:25:28', '2020-09-01 17:26:44');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(0, 'Silinenler', 'silinenler', 1, '2020-07-29 12:39:25', '2020-07-29 12:39:25'),
(1, 'Xəstə yardımı', 'xeste-yardimi', 1, '2020-06-11 04:49:05', '2020-06-11 04:49:05'),
(2, 'Sədəqə', 'sedeqe', 1, '2020-06-11 04:49:05', '2020-07-23 12:32:00'),
(4, 'Qan yardımı', 'qan-yardimi', 0, '2020-06-11 04:49:05', '2020-07-23 09:42:56'),
(6, 'Fitre zekati', 'fitre-zekati', 1, '2020-07-23 10:58:28', '2020-07-23 12:30:26');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `configs`
--

INSERT INTO `configs` (`id`, `title`, `active`, `logo`, `url`, `favicon`, `description`, `author`, `keywords`, `tel`, `instagram`, `facebook`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Ansar yardim elanları', 1, 'uploads/config/ansar-yardim-elanlari-logo.png', 'Url', 'uploads/config/ansar-yardim-elanlari-favicon.png', 'Description', 'Author', 'key4545', 556640370, 'https://www.instagram.com/?hl=tr', 'Facebook', 'Youtuber', '2020-08-24 11:08:36', '2020-09-15 11:21:31');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movzu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `telefon`, `movzu`, `metn`, `created_at`, `updated_at`) VALUES
(1, 'Elgun huseynov', 'Elgun huseynov', '0556640370', 'salam', 'saSasASadzczcz', '2020-07-07 13:16:08', '2020-07-07 13:16:08'),
(2, 'Elgun huseynov', 'Elgun huseynov', '0556640370', 'salam', 'saSasASadzczcz', '2020-07-07 13:19:10', '2020-07-07 13:19:10'),
(3, 'Elgun huseynov', 'Elgun huseynov', 'vcxv', 'salam', 'xvxv', '2020-07-08 12:54:17', '2020-07-08 12:54:17'),
(4, 'Elgun huseynov', 'Elgun huseynov', 'bcv', 'sdfsd', 'bcbc', '2020-07-08 12:55:12', '2020-07-08 12:55:12'),
(5, 'Elgun huseynov', 'Elgun huseynov', 'vcxv', 'sdfsd', 'nbvnvn', '2020-07-08 12:57:27', '2020-07-08 12:57:27'),
(6, 'd', 'd', 'bcv', 'salam', 'Zz', '2020-07-08 12:58:24', '2020-07-08 12:58:24'),
(7, 'Huseyn', 'Huseyn', '0556640370', 'xeste', 'size muracietim', '2020-07-09 10:15:13', '2020-07-09 10:15:13');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2020_06_10_132856_categories', 1),
(3, '2020_06_11_123202_articles', 2),
(4, '2020_07_05_153731_pages', 3),
(5, '2020_07_07_170509_cantact', 4),
(6, '2020_07_10_121644_admin', 5),
(7, '2020_08_19_121622_configmigration', 6);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sxemi çıxarılan cedvel `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `image`, `content`, `order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Haqqimizda', 'haqqimizda', 'uploads/page/haqqimizda.jpg', 'bizim haqda', 0, 0, '2020-07-05 11:52:44', '2020-08-13 12:55:29'),
(2, 'Elanlar', 'elanlar', 'uploads/page/elanlar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, sapiente cumque ratione nulla voluptatibus expedita accusantium. Assumenda doloremque, voluptate reprehenderit cumque deleniti aliquid libero delectus obcaecati totam, quas optio. Saepe.', 2, 0, '2020-07-05 11:52:44', '2020-09-01 17:26:39'),
(3, 'Tədbirlər', 'tedbirler', 'uploads/page/tedbirler.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, sapiente cumque ratione nulla voluptatibus expedita accusantium. Assumenda doloremque, voluptate reprehenderit cumque deleniti aliquid libero delectus obcaecati totam, quas optio. Saepe.', 1, 0, '2020-07-05 11:52:44', '2020-09-01 17:26:40'),
(4, 'Əlaqə', 'elaqe', 'uploads/page/elaqe.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, sapiente cumque ratione nulla voluptatibus expedita accusantium. Assumenda doloremque, voluptate reprehenderit cumque deleniti aliquid libero delectus obcaecati totam, quas optio. Saepe.', 3, 0, '2020-07-05 11:52:44', '2020-09-01 17:26:41'),
(5, 'Necə yardım edim?', 'nece-yardim-edim', 'uploads/page/nece-yardim-edim.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, sapiente cumque ratione nulla voluptatibus expedita accusantium. Assumenda doloremque, voluptate reprehenderit cumque deleniti aliquid libero delectus obcaecati totam, quas optio. Saepe.', 4, 1, '2020-07-05 11:52:44', '2020-09-01 17:26:18');

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Cədvəl üçün indekslər `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Cədvəl üçün AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Cədvəl üçün AUTO_INCREMENT `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
