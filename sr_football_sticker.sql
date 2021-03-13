-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2021 at 06:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sr_football_sticker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `password` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `password`, `created_date`, `modified_date`) VALUES
(1, 'admin', 123456, '2021-01-28 15:50:21', '2021-02-02 14:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `cate_pic` varchar(255) COLLATE utf8_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_date`, `modified_date`, `cate_pic`) VALUES
(38, 'England Premier League Sp', '2021-01-22 21:59:22', '2021-02-27 23:09:12', 'Panini-Tiles_3_Multipack.jpg'),
(40, 'Bundesliga Mach Attax', '2021-01-22 22:08:42', '2021-02-27 23:06:41', 'topps-bundesliga-sticker-2019-2020-album-1-display.jpg'),
(42, 'Champion League', '2021-01-22 22:14:11', '2021-02-27 23:03:58', 'topps-champions-league-best-of-the-best-2020-21-multipack.jpg'),
(43, 'Bundesliga', '2021-01-22 22:14:57', '2021-02-27 23:02:12', 'topps-bundesliga-stickers-2020-2021-album-display.jpg'),
(52, 'England Premier League ', '2021-02-27 22:57:23', '2021-02-27 23:09:50', 'HEADER_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `funiture_products`
--

CREATE TABLE `funiture_products` (
  `funi_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `funi_item` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `price` float NOT NULL,
  `maker` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `numbers` float NOT NULL,
  `picture` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `comment` text COLLATE utf8_myanmar_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `funiture_products`
--

INSERT INTO `funiture_products` (`funi_id`, `category_id`, `funi_item`, `price`, `maker`, `numbers`, `picture`, `comment`, `created_date`, `modified_date`) VALUES
(24, 44, 'FALTSESSEL', 100000, 'Meyanano Co.Lt,d.', 20, 'h_WEST-Pouf-Minotti-389428-relbdf6d3ed.jpg', '            PUPPY XS | Game By Magis\r\nType\r\nPolypropylene game\r\nMaterials\r\nPolypropylene (PP)\r\nDesigners\r\nEero Aarnio\r\nManufacture year\r\n2019\r\nCreated by Eero Aarnio, master of Scandinavian design culture and innovator on the international scene ever since the sixties, Puppy is a little dog as imagined by the great designer, whose aim was to see through children’s eyes when they draw puppies.‎ A head, a body and legs: essential, rounded shapes that come to life in a friendly, playful, durable and colourful object, ready for endless .', '2021-01-22 22:17:15', '2021-01-22 22:18:07'),
(25, 44, 'POER OEW', 400000, 'Woka Lamps Vienna', 50, 'h_TORII-Leather-sofa-Minotti-456269-rel3e1ad224.jpg', 'PUPPY XS | Game By Magis\r\nType\r\nPolypropylene game\r\nMaterials\r\nPolypropylene (PP)\r\nDesigners\r\nEero Aarnio\r\nManufacture year\r\n2019\r\nCreated by Eero Aarnio, master of Scandinavian design culture and innovator on the international scene ever since the sixties, Puppy is a little dog as imagined by the great designer, whose aim was to see through children’s eyes when they draw puppies.‎ A head, a body and legs: essential, rounded shapes that come to life in a friendly, playful, durable and colourful object, ready for endless .', '2021-01-22 22:19:15', '2021-01-22 22:19:15'),
(26, 44, 'Ball chair', 5000, 'Vincent Blouin, Julien Legras', 100, 'h_stov-hock-style-in-motion-333525-reld92d0dd3.jpg', 'PUPPY XS | Game By Magis\r\nType\r\nPolypropylene game\r\nMaterials\r\nPolypropylene (PP)\r\nDesigners\r\nEero Aarnio\r\nManufacture year\r\n2019\r\nCreated by Eero Aarnio, master of Scandinavian design culture and innovator on the international scene ever since the sixties, Puppy is a little dog as imagined by the great designer, whose aim was to see through children’s eyes when they draw puppies.‎ A head, a body and legs: essential, rounded shapes that come to life in a friendly, playful, durable and colourful object, ready for endless .', '2021-01-22 22:20:11', '2021-01-22 22:20:11'),
(27, 44, 'POER OEW', 150000, 'Sebastian Herkner', 30, 'h_MAD-CHAISE-LONGUE-Poliform-225967-reld4753eb9 (1).jpg', 'PUPPY XS | Game By Magis\r\nType\r\nPolypropylene game\r\nMaterials\r\nPolypropylene (PP)\r\nDesigners\r\nEero Aarnio\r\nManufacture year\r\n2019\r\nCreated by Eero Aarnio, master of Scandinavian design culture and innovator on the international scene ever since the sixties, Puppy is a little dog as imagined by the great designer, whose aim was to see through children’s eyes when they draw puppies.‎ A head, a body and legs: essential, rounded shapes that come to life in a friendly, playful, durable and colourful object, ready for endless .', '2021-01-22 22:20:44', '2021-01-22 22:20:44'),
(28, 42, 'Champion Edition', 52000, 'Meyanano Co.Lt,d.', 500, 'topps-champions-league-stickers-2020-2021-mini-tin.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:21:23', '2021-02-27 23:40:02'),
(29, 42, 'Champion Edition', 64000, 'Vincent Blouin, Julien Legras', 20000, 'topps-champions-league-match-attax-2020-21-starterpack-display.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:21:56', '2021-02-27 23:38:51'),
(30, 42, 'Roche Boboie', 85000, 'Meyanano Co.Lt,d.', 70000, 'topps-champions-league-best-of-the-best-2020-2021-display.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:22:41', '2021-02-27 23:36:47'),
(31, 42, 'Champion Edition', 400000, 'Vincent Blouin, Julien Legras', 32000, 'topps-champions-league-match-attax-2020-2021-mega-tin-set.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:28:45', '2021-02-27 23:39:23'),
(32, 42, 'Champion Edition', 70000, 'Woka Lamps Vienna', 30000, 'topps-champions-league-match-attax-2020-21-display.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:29:18', '2021-02-27 23:38:20'),
(33, 42, 'Champion Edition', 100000, 'Meyanano Co.Lt,d.', 500, 'topps-champions-league-match-attax-2019-20-starterpack.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:29:44', '2021-02-27 23:37:24'),
(34, 40, 'Bundesliga team ed', 100000, 'Woka Lamps Vienna', 4000, 'topps-bundesliga-match-attax-2020-2021-mini-tin-set.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:30:12', '2021-02-27 23:35:55'),
(35, 40, 'Bundesliga team ed', 400000, 'Meyanano Co.Lt,d.', 30, 'topps-bundesliga-match-attax-2020-2021-mega-tin.jpg', '            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?            ', '2021-01-22 22:30:52', '2021-02-27 23:36:05'),
(36, 40, 'Bundesliga team ed', 80000, 'Stool By Leam', 80, 'topps-bundesliga-match-attax-2020-2021-advent-calendar.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:34:20', '2021-02-27 23:35:07'),
(37, 40, 'Attx Bundesliga', 100000, 'Meyanano Co.Lt,d.', 40, 'topps-bundesliga-match-attax-2019-2020-mini-tin.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:34:45', '2021-02-27 23:34:22'),
(38, 43, 'Bundesliga team ed', 150000, 'Sebastian Herkner', 500, 'topps-bundesliga-match-attax-extra-2020-2021-starterpack.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:35:09', '2021-02-27 23:33:15'),
(39, 43, 'Bundesliga team ed', 400000, 'Woka Lamps Vienna', 300, 'topps-bundesliga-sticker-2019-2020-2-displays-50-packs.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:35:30', '2021-02-27 23:32:34'),
(40, 43, 'Bundesliga team ed', 4000, 'Woka Lamps Vienna', 500, 'topps-bundesliga-match-attax-extra-2018-2019-blister.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:35:57', '2021-02-27 23:31:36'),
(41, 43, 'Bundesliga team ed', 50000, 'Sebastian Herkner', 554, 'topps-bundesliga-match-attax-action-2019-2020-box.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:36:38', '2021-02-27 23:31:02'),
(42, 40, 'Bundesliga team ed', 100000, 'Meyanano Co.Lt,d.', 500, 'topps-bundesliga-match-attax-action-2018-2019-packet.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:38:13', '2021-02-27 23:30:34'),
(43, 40, 'Bundesliga team ed', 150000, 'Woka Lamps Vienna', 5000, 'topps-bundesliga-match-attax-2018-2019-blister.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:38:48', '2021-02-27 23:29:55'),
(44, 43, 'Bundesliga team ed', 10000, 'Stool By Leam', 5000, 'topps-bundesliga-match-attax-2020-2021-display.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:39:10', '2021-02-27 23:29:30'),
(45, 38, 'EPL Limiet ed', 400000, 'Woka Lamps Vienna', 100, '003969TINPUKY_0.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:39:32', '2021-02-27 23:27:57'),
(46, 38, 'EPL Limiet ed', 100000, 'Vincent Blouin, Julien Legras', 500, '003969TINPUKG_0.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:40:02', '2021-02-27 23:27:12'),
(47, 38, 'Go Go Ticket', 400000, 'Sebastian Herkner', 1000, 'topps-premier-league-match-attax-extra-2016-2017-xxl-tin.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:40:27', '2021-02-27 23:25:34'),
(48, 38, 'Great Team', 100000, 'Vincent Blouin, Julien Legras', 5000, 'topps-premier-league-match-attax-2017-2018-nordic-edition-starter-pack.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:43:12', '2021-02-27 23:24:52'),
(49, 38, 'XP Collection', 400000, 'Meyanano Co.Lt,d.', 5000, 'topps-premier-league-match-attax-2017-2018-nordic-edition-display.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:43:38', '2021-02-27 23:24:04'),
(50, 52, 'Arsenal FC', 400000, 'Woka Lamps Vienna', 20000, 'Panini-Tiles_6_Pocket-Tins3.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:44:20', '2021-02-27 23:22:40'),
(51, 52, 'Man United', 10000, 'Sebastian Herkner', 10000, 'Panini-Tiles_4_Pocket-Tins.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:44:42', '2021-02-27 23:21:51'),
(52, 52, 'Tottenham', 150000, 'Stool By Leam', 5000, 'Panini-Tiles_7_Pocket-Tins4.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:45:06', '2021-02-27 23:21:03'),
(53, 52, 'Eveton SP', 400000, 'Meyanano Co.Lt,d.', 200, 'Panini-Tiles_8_Classic-Tins.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:45:32', '2021-02-27 23:20:23'),
(54, 52, 'Mancity', 150000, 'Sebastian Herkner', 10000, 'Panini-Tiles_9_Classic-Tins2.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:46:04', '2021-02-27 23:19:39'),
(55, 52, 'Chelsea', 100000, 'Sebastian Herkner', 5000, 'Panini-Tiles_10_Classic-Tins3.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:46:26', '2021-02-27 23:18:53'),
(56, 52, 'Worl Cup Champion', 150000, 'Sebastian Herkner', 5000, 'Panini-Tiles_11_Classic-Tins4.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:48:49', '2021-02-27 23:17:50'),
(57, 52, 'Eveton', 10000, 'Sebastian Herkner', 30000, 'Panini-Tiles_13_Bundles.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:49:17', '2021-02-27 23:15:31'),
(58, 52, 'Newcastle', 150000, 'Stool By Leam', 5000, 'Panini-Tiles_15_Bundles3.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:49:39', '2021-02-27 23:14:47'),
(59, 52, 'West Ham', 100000, 'Sebastian Herkner', 100, 'Panini-Tiles_16_Bundles4.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?', '2021-01-22 22:49:57', '2021-02-27 23:13:49'),
(60, 52, 'Liverpool Fc', 8000, 'Meyanano Co.Lt,d.', 500, 'Panini-Tiles_5_Pocket-Tins2.jpg', '            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores voluptatum dolore impedit doloremque, illum iure minus nisi quisquam quo quibusdam veniam quam reiciendis sed vitae laboriosam? Necessitatibus illum eius sunt?            ', '2021-01-22 22:51:08', '2021-02-27 23:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `name`, `address`, `phone`, `email`, `created_date`, `modified_date`, `status`) VALUES
(68, 'naythan', 'Woe Pura', '09 258369147', 'naythan@web.com', '2021-02-02 15:29:10', '2021-02-02 14:13:10', 1),
(69, 'Hal IELO', 'Magwe', '09 772356981', 'halielo@gmail.com', '2021-02-02 15:38:34', '2021-02-02 15:38:34', 0),
(70, 'sett', 'Woe Pura', '09 258369147', 'naythan@web.com', '2021-02-02 16:12:39', '2021-02-02 16:12:39', 0),
(71, 'naythan', 'Magwe.', '09 258369147', 'naythan@web.com', '2021-02-02 13:45:43', '2021-02-02 13:45:43', 0),
(72, 'settran', 'Dawpon', '09 772356981', 'lulu@gamil.com', '2021-02-02 14:11:32', '2021-02-02 14:11:32', 0),
(73, 'php', 'Newyork', '09 772356981', 'php@example.com', '2021-02-10 10:20:50', '2021-02-10 10:20:50', 0),
(74, 'sett', 'Rangon', '03 526399863', 'settrannaing@gamil.com', '2021-02-27 20:32:54', '2021-02-27 20:32:54', 0),
(75, 'zarni', 'Arngon', '032659393', 'settrannaing11@gmail.com', '2021-02-27 22:36:07', '2021-02-27 22:36:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `furniture_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `orders_id`, `furniture_id`, `qty`) VALUES
(41, 68, 60, 1),
(42, 68, 59, 1),
(43, 69, 59, 1),
(44, 69, 60, 1),
(45, 69, 57, 1),
(46, 70, 58, 15),
(47, 71, 60, 1),
(48, 71, 59, 15),
(49, 72, 60, 15),
(50, 72, 59, 1),
(51, 73, 60, 5),
(52, 74, 30, 1),
(53, 75, 30, 1),
(54, 75, 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funiture_products`
--
ALTER TABLE `funiture_products`
  ADD PRIMARY KEY (`funi_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `funiture_products`
--
ALTER TABLE `funiture_products`
  MODIFY `funi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
