-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 08:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prezzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `session` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `new_price` int(100) NOT NULL,
  `sizes` int(100) NOT NULL,
  `total_number` int(250) NOT NULL,
  `product_id` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session`, `image`, `title`, `new_price`, `sizes`, `total_number`, `product_id`, `time`) VALUES
(1, 'onarjjgbtrvr3fq9g997l1unje', 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 16, 1, 43, '2023-09-08 01:50:23'),
(2, 'onarjjgbtrvr3fq9g997l1unje', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 8, 1, 44, '2023-09-08 01:53:02'),
(3, 'onarjjgbtrvr3fq9g997l1unje', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 6, 3, 44, '2023-09-08 02:01:49'),
(4, 'onarjjgbtrvr3fq9g997l1unje', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 14, 2, 41, '2023-09-08 02:02:18'),
(5, 'onarjjgbtrvr3fq9g997l1unje', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 6, 2, 41, '2023-09-08 02:02:18'),
(6, 'onarjjgbtrvr3fq9g997l1unje', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 10, 2, 41, '2023-09-08 02:02:18'),
(7, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 6, 1, 44, '2023-09-09 06:51:05'),
(8, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 8, 1, 44, '2023-09-09 07:25:59'),
(9, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 10, 1, 44, '2023-09-09 07:25:59'),
(10, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 10, 1, 41, '2023-09-09 07:34:34'),
(11, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 6, 1, 41, '2023-09-09 07:34:34'),
(12, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 14, 1, 41, '2023-09-09 07:34:34'),
(13, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693764067blog-post-06-92x92.jpg', 'Trouser top', 6800, 6, 1, 42, '2023-09-09 07:37:29'),
(14, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693764067blog-post-06-92x92.jpg', 'Trouser top', 6800, 8, 1, 42, '2023-09-09 07:37:30'),
(15, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 14, 1, 43, '2023-09-09 07:38:12'),
(16, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 6, 1, 43, '2023-09-09 07:38:12'),
(17, 'bmpvogpl88pf1op506ag8ig74o', 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 16, 1, 43, '2023-09-09 07:38:12'),
(18, 'm46s55co44v84trgbngqjag7oi', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 6, 2, 41, '2023-09-12 01:38:54'),
(19, 'm46s55co44v84trgbngqjag7oi', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 12, 1, 44, '2023-09-12 06:20:56'),
(20, 'm46s55co44v84trgbngqjag7oi', 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 16, 1, 43, '2023-09-12 06:21:28'),
(21, '8du36qhguhhq3so0l4egs0vgbn', 'uploads/1693764067blog-post-06-92x92.jpg', 'Trouser top', 6800, 6, 1, 42, '2023-09-12 18:02:27'),
(22, '8du36qhguhhq3so0l4egs0vgbn', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 8, 2, 44, '2023-09-12 18:08:25'),
(23, '66pisohjog93e414dgus7eso28', 'uploads/1693614900about-1-510x268.jpg, uploads/1693614900blog-classic-1-971x649.jpg', 'Quarter trouser', 4000, 8, 1, 40, '2023-09-14 19:18:08'),
(24, '66pisohjog93e414dgus7eso28', 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 16, 1, 43, '2023-09-14 19:51:00'),
(25, '66pisohjog93e414dgus7eso28', 'uploads/1693764067blog-post-06-92x92.jpg', 'Trouser top', 6800, 6, 1, 42, '2023-09-14 19:51:59'),
(26, '66pisohjog93e414dgus7eso28', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 14, 1, 41, '2023-09-14 19:54:52'),
(27, '66pisohjog93e414dgus7eso28', 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 6, 1, 43, '2023-09-14 19:56:03'),
(28, '66pisohjog93e414dgus7eso28', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 10, 1, 41, '2023-09-14 19:56:42'),
(29, '66pisohjog93e414dgus7eso28', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 6, 1, 41, '2023-09-14 19:59:19'),
(30, '66pisohjog93e414dgus7eso28', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 6, 2, 44, '2023-09-14 20:37:57'),
(31, '66pisohjog93e414dgus7eso28', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 8, 1, 44, '2023-09-14 21:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(250) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'active wears'),
(2, 'Bodysuit'),
(3, 'Co-ords'),
(4, 'Dresses'),
(5, 'Jacket'),
(6, 'Jeans'),
(7, 'Jumpsuit/Playsuit'),
(8, 'Pants'),
(9, 'Shorts'),
(10, 'Skirts'),
(11, 'Tops');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(250) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `new_price` int(100) NOT NULL,
  `old_price` int(100) NOT NULL,
  `category_id` int(10) NOT NULL,
  `size_6` int(10) NOT NULL DEFAULT 0,
  `size_8` int(10) NOT NULL DEFAULT 0,
  `size_10` int(10) NOT NULL DEFAULT 0,
  `size_12` int(10) NOT NULL DEFAULT 0,
  `size_14` int(10) NOT NULL DEFAULT 0,
  `size_16` int(10) NOT NULL DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `new_price`, `old_price`, `category_id`, `size_6`, `size_8`, `size_10`, `size_12`, `size_14`, `size_16`, `time`) VALUES
(14, 'uploads/1693389031about-1-510x268.jpg', 'Crop top', 20000, 60000, 1, 0, 0, 0, 12, 0, 0, '2023-08-30 09:50:31'),
(15, 'uploads/1693389977services-1-461x514.jpg', 'Jeans short', 2500, 3800, 1, 6, 8, 0, 0, 0, 0, '2023-08-30 10:06:17'),
(16, 'uploads/1693390014services-1-461x514.jpg', 'Jeans top', 2500, 3800, 10, 0, 0, 0, 0, 14, 16, '2023-08-30 10:06:54'),
(20, 'uploads/1693441980blog-classic-1-971x649.jpg', 'bands shoe', 200, 1200, 9, 6, 0, 10, 0, 0, 0, '2023-08-31 00:33:00'),
(21, 'uploads/1693442036blog-post-01-92x92.jpg', '&lt;Drones&gt;', 290, 300, 9, 0, 8, 0, 0, 0, 0, '2023-08-31 00:33:56'),
(22, 'uploads/1693442537blog-post-01-92x92.jpg', '&lt;Drones&gt;', 290, 300, 9, 0, 8, 0, 0, 0, 0, '2023-08-31 00:42:17'),
(23, 'uploads/1693445658blog-classic-6-970x545.jpg', 'nuke blue suit', 2000, 12000, 8, 0, 8, 10, 0, 0, 0, '2023-08-31 01:34:18'),
(29, 'uploads/1693449573blog-classic-4-970x545.jpg', 'blop', 900, 750, 6, 0, 8, 10, 0, 0, 0, '2023-08-31 02:39:33'),
(30, 'uploads/1693450449blog-classic-4-970x545.jpg', 'blop', 900, 750, 6, 0, 8, 10, 0, 0, 0, '2023-08-31 02:54:09'),
(31, 'uploads/1693450505blog-classic-4-970x545.jpg', 'went', 1200, 1300, 8, 6, 0, 0, 0, 0, 0, '2023-08-31 02:55:05'),
(32, 'uploads/1693451113blog-post-03-92x92.jpg', 'mont', 900, 780, 6, 0, 0, 0, 12, 0, 0, '2023-08-31 03:05:13'),
(34, 'uploads/1693567589about-1-510x268.jpg, uploads/1693567589blog-classic-1-971x649.jpg, uploads/1693567', 'Tangerine top', 800, 1000, 2, 0, 8, 0, 0, 0, 0, '2023-09-01 12:33:42'),
(35, 'uploads/1693567589about-1-510x268.jpg, uploads/1693567589blog-classic-1-971x649.jpg, uploads/1693567', 'titan top', 120, 200, 2, 0, 8, 0, 0, 0, 0, '2023-09-01 11:26:29'),
(36, 'uploads/1693567699about-1-510x268.jpg, uploads/1693567699blog-classic-1-971x649.jpg, uploads/1693567699blog-classic-4-970x545.jpg, uploads/1693567699blog-post-02-92x92.jpg', 'titan top', 120, 200, 2, 0, 8, 0, 0, 0, 0, '2023-09-01 11:28:19'),
(37, 'uploads/1693567878about-1-510x268.jpg', 'titan top nick', 120, 200, 9, 6, 0, 0, 0, 0, 0, '2023-09-01 11:31:18'),
(38, 'uploads/1693605987blog-post-02-92x92.jpg, uploads/1693605987blog-post-03-92x92.jpg, uploads/1693605987blog-post-04-92x92.jpg', 'Sick mad ass top', 5000, 6000, 6, 0, 8, 10, 0, 0, 0, '2023-09-01 22:06:27'),
(39, 'uploads/1693606002blog-post-02-92x92.jpg, uploads/1693606002blog-post-03-92x92.jpg, uploads/1693606002blog-post-04-92x92.jpg', 'Sick mad ass top', 5000, 6000, 6, 0, 8, 10, 0, 0, 0, '2023-09-01 22:06:42'),
(40, 'uploads/1693614900about-1-510x268.jpg, uploads/1693614900blog-classic-1-971x649.jpg', 'Quarter trouser', 4000, 6000, 8, 0, 8, 0, 0, 14, 0, '2023-09-02 00:35:00'),
(41, 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 'Blue  top', 1000, 1500, 11, 6, 0, 10, 0, 14, 0, '2023-09-04 22:35:00'),
(42, 'uploads/1693764067blog-post-06-92x92.jpg', 'Trouser top', 6800, 34800, 8, 6, 8, 0, 0, 0, 0, '2023-09-03 18:01:32'),
(43, 'uploads/1693764209blog-post-06-92x92.jpg', 'Trouser SHORTS', 34800, 34800, 8, 6, 0, 0, 0, 14, 16, '2023-09-03 18:03:29'),
(44, 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 'Wreaked skirt', 30000, 5000, 10, 6, 8, 10, 12, 14, 16, '2023-09-06 23:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(250) NOT NULL,
  `session` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `new_price` int(100) NOT NULL,
  `publish` tinyint(4) NOT NULL DEFAULT 1,
  `product_id` int(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `session`, `title`, `image`, `new_price`, `publish`, `product_id`, `time`) VALUES
(1, '546lmgvovbm4ghif1jns8hlrlf', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 0, 41, '2023-09-05 09:19:38'),
(2, '546lmgvovbm4ghif1jns8hlrlf', 'Trouser SHORTS', 'uploads/1693764209blog-post-06-92x92.jpg', 34800, 0, 43, '2023-09-05 08:47:04'),
(4, 'olq428338tg9kec0lrclhel1ho', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 1, 41, '2023-09-05 01:38:47'),
(7, '546lmgvovbm4ghif1jns8hlrlf', 'Sick mad ass top', 'uploads/1693605987blog-post-02-92x92.jpg, uploads/1693605987blog-post-03-92x92.jpg, uploads/1693605987blog-post-04-92x92.jpg', 5000, 1, 38, '2023-09-05 02:11:11'),
(10, '546lmgvovbm4ghif1jns8hlrlf', 'Sick mad ass top', 'uploads/1693606002blog-post-02-92x92.jpg, uploads/1693606002blog-post-03-92x92.jpg, uploads/1693606002blog-post-04-92x92.jpg', 5000, 1, 39, '2023-09-05 02:24:36'),
(11, '546lmgvovbm4ghif1jns8hlrlf', 'Tangerine top', 'uploads/1693567589about-1-510x268.jpg, uploads/1693567589blog-classic-1-971x649.jpg, uploads/1693567', 800, 1, 34, '2023-09-05 02:43:46'),
(12, 'olq428338tg9kec0lrclhel1ho', 'Trouser SHORTS', 'uploads/1693764209blog-post-06-92x92.jpg', 34800, 1, 43, '2023-09-05 02:46:25'),
(13, 'olq428338tg9kec0lrclhel1ho', 'Trouser top', 'uploads/1693764067blog-post-06-92x92.jpg', 6800, 1, 42, '2023-09-05 02:46:55'),
(14, '546lmgvovbm4ghif1jns8hlrlf', 'Quarter trouser', 'uploads/1693614900about-1-510x268.jpg, uploads/1693614900blog-classic-1-971x649.jpg', 4000, 1, 40, '2023-09-05 03:47:56'),
(15, '546lmgvovbm4ghif1jns8hlrlf', 'Trouser top', 'uploads/1693764067blog-post-06-92x92.jpg', 6800, 1, 42, '2023-09-05 09:20:38'),
(16, '546lmgvovbm4ghif1jns8hlrlf', 'Crop top', 'uploads/1693389031about-1-510x268.jpg', 20000, 1, 14, '2023-09-05 09:21:54'),
(17, 'h3vggl3b0j8gt7f0p32ohqhra1', 'Sick mad ass top', 'uploads/1693606002blog-post-02-92x92.jpg, uploads/1693606002blog-post-03-92x92.jpg, uploads/1693606002blog-post-04-92x92.jpg', 5000, 0, 39, '2023-09-05 20:46:59'),
(18, 'h3vggl3b0j8gt7f0p32ohqhra1', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 0, 41, '2023-09-05 22:00:37'),
(19, 'h3vggl3b0j8gt7f0p32ohqhra1', 'Trouser SHORTS', 'uploads/1693764209blog-post-06-92x92.jpg', 34800, 1, 43, '2023-09-05 21:56:08'),
(20, 'h3vggl3b0j8gt7f0p32ohqhra1', 'Trouser top', 'uploads/1693764067blog-post-06-92x92.jpg', 6800, 1, 42, '2023-09-05 21:54:52'),
(21, 'fkpajtbh9fnlchd5h99v2u39l3', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 1, 41, '2023-09-05 22:11:40'),
(22, 'h3vggl3b0j8gt7f0p32ohqhra1', 'titan top nick', 'uploads/1693567878about-1-510x268.jpg', 120, 0, 37, '2023-09-05 20:55:22'),
(23, 'h3vggl3b0j8gt7f0p32ohqhra1', 'Quarter trouser', 'uploads/1693614900about-1-510x268.jpg, uploads/1693614900blog-classic-1-971x649.jpg', 4000, 1, 40, '2023-09-05 21:52:52'),
(24, 'saqta44a825aqrc8ng77kmpucv', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 1, 41, '2023-09-05 22:45:39'),
(25, 'saqta44a825aqrc8ng77kmpucv', 'Trouser SHORTS', 'uploads/1693764209blog-post-06-92x92.jpg', 34800, 1, 43, '2023-09-05 22:44:11'),
(26, 'saqta44a825aqrc8ng77kmpucv', 'Trouser top', 'uploads/1693764067blog-post-06-92x92.jpg', 6800, 0, 42, '2023-09-05 22:44:59'),
(27, 'saqta44a825aqrc8ng77kmpucv', 'Quarter trouser', 'uploads/1693614900about-1-510x268.jpg, uploads/1693614900blog-classic-1-971x649.jpg', 4000, 0, 40, '2023-09-05 22:44:57'),
(28, 'saqta44a825aqrc8ng77kmpucv', 'nuke blue suit', 'uploads/1693445658blog-classic-6-970x545.jpg', 2000, 1, 23, '2023-09-05 22:56:11'),
(29, 'eqge0s8ud5e0e0f351ib1bkikf', 'Trouser top', 'uploads/1693764067blog-post-06-92x92.jpg', 6800, 1, 42, '2023-09-07 01:53:53'),
(30, 'onarjjgbtrvr3fq9g997l1unje', 'Trouser SHORTS', 'uploads/1693764209blog-post-06-92x92.jpg', 34800, 1, 43, '2023-09-08 02:33:04'),
(31, 'onarjjgbtrvr3fq9g997l1unje', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 0, 41, '2023-09-07 20:10:55'),
(35, 'k6jdd8u5od6uvuomjmc06vfl5r', 'Wreaked skirt', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 30000, 0, 44, '2023-09-15 05:55:43'),
(36, 'k6jdd8u5od6uvuomjmc06vfl5r', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 0, 41, '2023-09-15 05:55:42'),
(37, '3mt57oflj5p12he4tpnf25es5t', 'Wreaked skirt', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 30000, 0, 44, '2023-09-16 02:47:29'),
(38, '3mt57oflj5p12he4tpnf25es5t', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 0, 41, '2023-09-16 01:32:17'),
(39, '3mt57oflj5p12he4tpnf25es5t', 'Trouser SHORTS', 'uploads/1693764209blog-post-06-92x92.jpg', 34800, 0, 43, '2023-09-16 02:47:28'),
(40, 'paj491s3orm0i0a9oea0a0heuj', 'Wreaked skirt', 'uploads/1694044274blog-post-03-92x92.jpg, uploads/1694044274blog-post-04-92x92.jpg, uploads/1694044274blog-post-01-92x92.jpg, uploads/1694044274blog-post-02-92x92.jpg', 30000, 0, 44, '2023-09-16 05:50:25'),
(41, 'paj491s3orm0i0a9oea0a0heuj', 'Blue  top', 'uploads/1693734814blog-post-01-92x92.jpg, uploads/1693734814blog-post-03-92x92.jpg, uploads/1693734814blog-post-04-92x92.jpg', 1000, 0, 41, '2023-09-16 05:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category-products` (`category_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category-products` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
