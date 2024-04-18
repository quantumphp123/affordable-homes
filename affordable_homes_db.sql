-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2023 at 03:29 AM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `affordable_homes_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Awesome', 'Admin', 'admin@gmail.com', '$2y$10$a9dkvpxzwCLbEdlp0SDoj.bO4XC95uzuOF0u4mnSJ8Ov.BG2nbMdC', '2023-01-19 04:19:24', '2023-01-19 09:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`id`, `name`, `email`, `phone_number`, `created_at`, `updated_at`) VALUES
(2, 'Swaraj demo', 'swarajflowpro@gmail.com', '06048595855', '2023-02-27 13:13:46', '2023-02-27 06:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Liversity', 'The Affordable System series showcases our attention to detail with quiet, clean interiors, functional spaces with lots of storage, USB outlets and web connectivity, light neutral colors with warm wood finishes and panorama views of the outdoors. eESCAPE spaces are beautiful, natural and inviting.', '2023-01-19 05:09:02', '2023-01-19 10:39:02'),
(3, 'Flexibility', 'We want everyone to have the ability to customize, to put a personal stamp on their ESCAPE. The Affordable System series was designed with this in mind and provides the space for you to make your statement. No wheel wells in the way, plus lots of shelving and strategic options allow for flexible design and a myriad of uses...AirBnb, ADU, private retreat, guest house, vacation getaway, private office, studio…the uses are almost limitless!', '2023-01-19 05:12:19', '2023-01-19 10:42:19'),
(4, 'Affordability', 'For most companies, EV means you pay more. We believe the opposite and have priced units starting below our basic Affordable System models. This means customers can enjoy the natural, clean aesthetic at an affordable price that fits their individual needs and desires. And yes, long term financing is available with zero down payments for those who qualify.', '2023-01-19 05:12:55', '2023-01-19 10:42:55'),
(5, 'Availability', 'A big problem for many customers buying EVs is time…specifically, getting a unit quickly. EV wait lists and long lead times are common. But Our units are not just a great idea or concept, they already exist. In other words, you normally can have it right now! And if it is not in stock, chances are it will be within weeks…not in six months or a year.', '2023-01-19 05:13:29', '2023-01-19 10:43:29'),
(6, 'Demo', 'To givw ecomonical house with Speed and quality', '2023-02-27 13:23:18', '2023-02-27 06:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `unit` varchar(255) NOT NULL,
  `usag` varchar(255) NOT NULL,
  `budget` decimal(10,2) NOT NULL,
  `financing_need` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `kitchen` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `bathroom_number` varchar(255) NOT NULL,
  `status` enum('pending','completed','','') NOT NULL DEFAULT 'pending',
  `meeting_date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `user_id`, `unit`, `usag`, `budget`, `financing_need`, `goal`, `bedroom`, `kitchen`, `bathroom`, `bathroom_number`, `status`, `meeting_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Work mobile unit to take on the go', 'on the road', '60000.00', 'yes', 'Renting it out on their land', '3', 'half kitchen', 'full bathroom', '2', 'completed', '2023-02-23 20:49:00', '2023-02-20 08:34:12', '2023-02-20 15:34:12'),
(2, 9, 'Cozy tiny home to call your own', 'on the location', '90000.00', 'yes', 'Setting on a plot and renting it to air b and b', '2', 'full kitchen', 'half bathroom', '3', 'pending', '2023-02-27 02:21:00', '2023-02-27 10:02:13', '2023-02-27 17:02:13'),
(3, 9, 'Work mobile unit to take on the go', 'on the road', '89000.00', 'yes', 'Renting it out on their land', '3', 'full kitchen', 'half bathroom', '2', 'pending', '2023-02-26 13:03:00', '2023-02-24 07:33:28', '2023-02-24 14:33:28'),
(4, 9, 'Work mobile unit to take on the go', 'on the location', '89000.00', 'yes', 'Renting it out on their land', '3', 'half kitchen', 'full bathroom', '2', 'pending', '2023-02-26 13:12:00', '2023-02-24 07:42:58', '2023-02-24 14:42:58'),
(5, 4, 'Work mobile unit to take on the go', 'on the road', '1205.00', 'yes', 'Renting it out on their land', '3', 'half kitchen', 'half bathroom', '3', 'pending', '2023-03-08 11:07:00', '2023-02-24 12:40:00', '2023-02-24 19:40:00'),
(6, 4, 'Versatile tiny living unit', 'on the location', '1236.00', 'no', 'Renting it out with a vehicle', '1', 'full kitchen', 'full bathroom', '1', 'pending', '2023-02-09 08:16:00', '2023-02-24 12:46:06', '2023-02-24 19:46:06'),
(7, 4, 'Versatile tiny living unit', 'on the location', '3434.00', 'no', 'Renting it out with a vehicle', '2', 'full kitchen', 'half bathroom', '2', 'pending', '2023-03-03 19:12:00', '2023-02-24 12:59:59', '2023-02-24 19:59:59'),
(8, 4, 'Cozy tiny home to call your own', 'on the location', '12.00', 'no', 'Setting on a plot and renting it to air b and b', '3', 'half kitchen', 'half bathroom', '3', 'completed', '2023-02-28 06:45:00', '2023-02-27 06:16:19', '2023-02-27 13:16:19'),
(9, 4, 'Work mobile unit to take on the go', 'on the road', '12.00', 'no', 'Renting it out on their land', '1', 'full kitchen', 'full bathroom', '1', 'pending', '2023-03-08 14:07:00', '2023-02-27 06:39:17', '2023-02-27 13:39:17'),
(10, 4, 'Cozy tiny home to call your own', 'on the location', '11.00', 'no', 'Setting on a plot and renting it to air b and b', '1', 'full kitchen', 'full bathroom', '1', 'pending', '2023-03-21 00:09:00', '2023-02-27 06:41:11', '2023-02-27 13:41:11'),
(11, 3, 'Work mobile unit to take on the go', 'on the road', '89000.00', 'yes', 'Renting it out on their land', '3', 'full kitchen', 'half bathroom', '2', 'pending', '2023-03-30 13:10:00', '2023-03-01 07:40:47', '2023-03-01 14:40:47'),
(12, 3, 'Work mobile unit to take on the go', 'on the road', '10000.00', 'yes', 'Renting it out on their land', '3', 'full kitchen', 'full bathroom', '2', 'pending', '2023-03-22 13:11:00', '2023-03-01 07:41:38', '2023-03-01 14:41:38'),
(13, 3, 'Versatile tiny living unit', 'on the location', '400.00', 'no', 'Renting it out with a vehicle', '3', 'half kitchen', 'full bathroom', '3', 'pending', '2023-03-04 20:44:00', '2023-03-03 15:17:43', '2023-03-03 22:17:43'),
(14, 10, 'Work mobile unit to take on the go', 'on the location', '4000.00', 'yes', 'Setting on a plot and renting it to air b and b', '2', 'full kitchen', 'full bathroom', '2', 'pending', '2023-03-12 19:28:00', '2023-03-12 13:59:32', '2023-03-12 20:59:32'),
(15, 10, 'Work mobile unit to take on the go', 'on the location', '4000.00', 'yes', 'Setting on a plot and renting it to air b and b', '2', 'full kitchen', 'full bathroom', '2', 'pending', '2023-03-12 19:28:00', '2023-03-12 13:59:33', '2023-03-12 20:59:33'),
(16, 10, 'Work mobile unit to take on the go', 'on the location', '4000.00', 'yes', 'Setting on a plot and renting it to air b and b', '2', 'full kitchen', 'full bathroom', '2', 'pending', '2023-03-12 19:28:00', '2023-03-12 13:59:35', '2023-03-12 20:59:35'),
(17, 10, 'Work mobile unit to take on the go', 'on the location', '4000.00', 'yes', 'Setting on a plot and renting it to air b and b', '2', 'full kitchen', 'full bathroom', '2', 'pending', '2023-03-12 19:28:00', '2023-03-12 13:59:36', '2023-03-12 20:59:36'),
(18, 10, 'Cozy tiny home to call your own', 'on the location', '40000.00', 'yes', 'Setting on a plot and renting it to air b and b', '3', 'half kitchen', 'full bathroom', '3', 'pending', '2023-03-03 12:23:00', '2023-03-13 06:54:14', '2023-03-13 13:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `name`, `price`) VALUES
(1, 'windows', '200.00'),
(2, 'doors', '2500.00'),
(3, 'hatch_skylight_roof', '1500.00'),
(4, 'toilet', '1500.00'),
(5, 'tub', '1100.00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Project 1', '1641700863.webp', '2023-01-19 04:30:27', '2023-01-19 10:00:27'),
(2, 'Project 2', '384318900.webp', '2023-01-19 04:30:38', '2023-01-19 10:00:38'),
(3, 'Project 3', '586922458.webp', '2023-01-19 04:30:50', '2023-01-19 10:00:50'),
(4, 'Project 4', '580105645.webp', '2023-01-19 04:31:03', '2023-01-19 10:01:03'),
(5, 'Project 5', '568294250.webp', '2023-01-19 04:31:50', '2023-01-19 10:01:50'),
(7, 'Project 6', '1973308452.webp', '2023-01-19 04:33:11', '2023-01-19 10:03:11'),
(9, 'demo 1', '874682205.png', '2023-02-27 13:06:34', '2023-02-27 06:06:34'),
(10, 'testing', '538316236.png', '2023-02-28 13:26:49', '2023-02-28 06:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `length` decimal(10,2) NOT NULL,
  `width` decimal(10,2) NOT NULL,
  `level` varchar(255) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `kitchen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `description`, `price`, `length`, `width`, `level`, `bedroom`, `kitchen`, `created_at`, `updated_at`) VALUES
(19, 'TRAVELER XL', 'Before you can begin to determine what the composition of a particular paragraph will be, you must first decide on an argument and a working thesis statement for your paper. What is the most important idea that you are trying to convey to your reader? The information in each paragraph must be related to that idea. In other words, your paragraphs should remind your reader that there is a recurrent relationship between your thesis and the information in each paragraph. A working thesis functions like a seed from which your paper, and your ideas, will grow. The whole process is an organic one—a natural progression from a seed to a full-blown paper where there are direct, familial relationships between all of the ideas in the paper.\r\n\r\nThe decision about what to put into your paragraphs begins with the germination of a seed of ideas; this “germination process” is better known as brainstorming. There are many techniques for brainstorming; whichever one you choose, this stage of paragraph development cannot be skipped. Building paragraphs can be like building a skyscraper: there must be a well-planned foundation that supports what you are building. Any cracks, inconsistencies, or other corruptions of the foundation can cause your whole paper to crumble.\r\n\r\nSo, let’s suppose that you have done some brainstorming to develop your thesis. What else should you keep in mind as you begin to create paragraphs? Every paragraph in a paper should be:\r\n\r\nUnified: All of the sentences in a single paragraph should be related to a single controlling idea (often expressed in the topic sentence of the paragraph).\r\nClearly related to the thesis: The sentences should all refer to the central idea, or thesis, of the paper (Rosen and Behrens 119).\r\nCoherent: The sentences should be arranged in a logical manner and should follow a definite plan for development (Rosen and Behrens 119).\r\nWell-developed: Every idea discussed in the paragraph should be adequately explained and supported through evidence and details that work together to explain the paragraph’s controlling idea (Rosen and Behrens 119).', '89000.00', '25.00', '15.00', '2', '4', '1', '2023-02-13 13:40:54', '2023-02-13 08:28:17'),
(21, 'Swaraj Demo Row House', '2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet v2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet 2 story building , 3 BHK on Each floor 2 Master bedroom , 1 guest toilet', '250000.00', '400.00', '140.00', '2', '6', '1', '2023-02-24 20:52:03', '2023-02-24 13:52:03'),
(22, 'swaraj demo', 'fsdfdsfdsf', '2300.00', '23.00', '23.00', '1', '1', '1', '2023-02-27 12:24:52', '2023-02-27 05:24:52'),
(23, 'Traffic Violations', 'kjglhjgkhljkljljl', '15000.00', '25.00', '15.00', '2', '2', '2', '2023-02-27 13:34:28', '2023-02-27 06:34:28'),
(24, 'Traffic Violations', 'hjffggj', '15000.00', '25.00', '15.00', '1', '2', '1', '2023-02-27 13:35:19', '2023-02-27 06:35:19'),
(25, 'Swaraj Demo Testing', 'TO Test demo', '1234.00', '110.00', '40.00', '2', '4', '1', '2023-02-27 13:52:39', '2023-02-27 06:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `name`, `property_id`, `created_at`, `updated_at`) VALUES
(7, '1676276897.webp', 19, '2023-02-13 15:28:17', '2023-02-13 08:28:17'),
(8, '1676276898.webp', 19, '2023-02-13 15:28:18', '2023-02-13 08:28:18'),
(9, '1676276899.webp', 19, '2023-02-13 15:28:19', '2023-02-13 08:28:19'),
(10, '1677246723.png', 21, '2023-02-24 20:52:03', '2023-02-24 13:52:03'),
(11, '1677475492.png', 22, '2023-02-27 12:24:52', '2023-02-27 05:24:52'),
(12, '1677479668.jpg', 23, '2023-02-27 13:34:28', '2023-02-27 06:34:28'),
(13, '1677479719.jpg', 24, '2023-02-27 13:35:19', '2023-02-27 06:35:19'),
(14, '1677480759.png', 25, '2023-02-27 13:52:39', '2023-02-27 06:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `property_maps`
--

CREATE TABLE `property_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_maps`
--

INSERT INTO `property_maps` (`id`, `name`, `property_id`, `created_at`, `updated_at`) VALUES
(2, '1676291279.webp', 19, '2023-02-13 19:27:59', '2023-02-13 12:27:59'),
(3, '1677246724.png', 21, '2023-02-24 20:52:04', '2023-02-24 13:52:04'),
(4, '1677475493.png', 22, '2023-02-27 12:24:53', '2023-02-27 05:24:53'),
(5, '1677480760.png', 25, '2023-02-27 13:52:40', '2023-02-27 06:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `windows` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `hatch_skylight_roof` int(11) NOT NULL,
  `toilet` int(11) NOT NULL,
  `tub` int(11) NOT NULL,
  `contract_date` date NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `user_id`, `property_id`, `windows`, `doors`, `hatch_skylight_roof`, `toilet`, `tub`, `contract_date`, `address`, `created_at`, `updated_at`) VALUES
(2, 4, 19, 2, 4, 2, 4, 4, '2023-02-28', 'jabfsdjkahj, njdhkjlaf, aoidjo', '2023-02-24 05:47:36', '2023-02-24 05:47:36'),
(3, 9, 19, 0, 0, 0, 0, 0, '2023-02-27', 'dsffgdg', '2023-02-24 06:54:19', '2023-02-24 06:54:19'),
(4, 9, 19, 0, 0, 0, 0, 0, '2023-02-28', 'dfsggggh', '2023-02-24 06:55:01', '2023-02-24 06:55:01'),
(5, 9, 19, 0, 0, 0, 0, 0, '2023-02-27', 'dfgs', '2023-02-24 06:56:24', '2023-02-24 06:56:24'),
(6, 9, 19, 0, 0, 0, 0, 0, '2023-02-27', 'fdsgdgdd', '2023-02-24 07:00:37', '2023-02-24 07:00:37'),
(7, 10, 19, 0, 0, 0, 0, 0, '2023-02-08', 'ghaziabad', '2023-02-24 07:39:49', '2023-02-24 07:39:49'),
(8, 4, 25, 2, 2, 0, 0, 0, '2023-02-28', 'Maharashtra', '2023-02-27 07:03:16', '2023-02-27 07:03:16'),
(9, 4, 25, 0, 0, 0, 0, 0, '2023-02-27', 'Noida', '2023-02-27 07:05:46', '2023-02-27 07:05:46'),
(10, 4, 25, 0, 0, 0, 0, 0, '2023-02-27', 'Noida', '2023-02-27 07:05:46', '2023-02-27 07:05:46'),
(11, 4, 25, 0, 0, 0, 0, 0, '2023-02-27', 'Noida', '2023-02-27 07:05:46', '2023-02-27 07:05:46'),
(12, 3, 19, 0, 0, 0, 0, 0, '2023-02-28', 'ergdhdghfghjg jhhhhhhhhhhhhhhhhh \r\nhhhhhhhhhhhh hhhhhhhhhhhhh hhhhhhhhhhh hhhhhhhhhhhhh', '2023-03-06 06:51:17', '2023-02-27 10:29:53'),
(13, 4, 25, 1, 1, 1, 1, 1, '2023-02-28', 'Maharashtra', '2023-02-28 06:17:33', '2023-02-28 06:17:33'),
(14, 4, 25, 0, 0, 0, 0, 0, '2023-03-01', 'testing', '2023-02-28 06:31:31', '2023-02-28 06:31:31'),
(15, 10, 19, 0, 0, 0, 0, 0, '2023-02-01', 'ghaziabad', '2023-02-28 07:04:48', '2023-02-28 07:04:48'),
(16, 10, 19, 0, 0, 0, 0, 0, '2023-02-01', 'ghaziabad', '2023-02-28 10:46:53', '2023-02-28 10:46:53'),
(17, 10, 19, 0, 0, 0, 0, 0, '2023-02-28', 'ghaziabad', '2023-03-01 06:14:56', '2023-03-01 06:14:56'),
(18, 3, 25, 1, 1, 0, 0, 0, '2023-03-16', 'India', '2023-03-03 12:35:08', '2023-03-03 12:35:08'),
(19, 3, 25, 1, 1, 0, 0, 0, '2023-03-14', 'India', '2023-03-03 12:36:32', '2023-03-03 12:36:32'),
(20, 3, 25, 1, 1, 0, 0, 0, '2023-03-15', 'India', '2023-03-03 12:37:27', '2023-03-03 12:37:27'),
(21, 3, 25, 2, 2, 0, 0, 0, '2023-03-06', 'testing', '2023-03-03 12:40:36', '2023-03-03 12:40:36'),
(22, 3, 22, 1, 2, 1, 1, 1, '2023-03-03', 'Delhi', '2023-03-03 15:20:21', '2023-03-03 15:20:21'),
(23, 3, 22, 1, 1, 1, 1, 1, '2023-03-09', 'Delhi', '2023-03-06 04:59:59', '2023-03-06 04:59:59'),
(24, 3, 22, 1, 0, 0, 0, 0, '2023-03-07', 'delhi india', '2023-03-06 05:00:42', '2023-03-06 05:00:42'),
(25, 4, 25, 1, 1, 0, 0, 0, '2023-03-28', 'India', '2023-03-06 10:15:57', '2023-03-06 10:15:57'),
(26, 4, 25, 1, 1, 0, 0, 0, '2023-03-21', 'testing', '2023-03-06 11:52:45', '2023-03-06 11:52:45'),
(27, 3, 22, 0, 0, 0, 7, 0, '2023-03-07', 'banglore', '2023-03-07 09:43:08', '2023-03-07 09:43:08'),
(28, 10, 19, 0, 0, 0, 1, 0, '2023-03-09', 'ghaziabad', '2023-03-13 06:58:04', '2023-03-13 06:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Traffic Violations', 'chloe@gmail.com', 'fjkablfnvcxjbvakjlsdhlvkfa;vfagv564fd6gdf6gdf654hg65fd4f54f56g4f564gs65f4ds65f4sd5f456f4s1f322f4xv254fs542sv534fghfigfgdhbfyfidjksdbjkdk h', '2023-01-19 05:14:07', '2023-01-19 10:44:07'),
(2, 'swaraj demo', 'swarajflowpro@gmail.com', 'To get estimate for Construction of new home Demo', '2023-02-07 13:54:28', '2023-02-07 06:54:28'),
(3, 'swaraj', 'swarajflowpro@gmail.com', 'sdsfdgdg', '2023-02-07 13:56:40', '2023-02-07 06:56:40'),
(4, 'swaraj', 'swarajflowpro@gmail.com', 'ddfdfdf', '2023-02-24 20:19:50', '2023-02-24 13:19:50'),
(5, 'Swaraj Demo', 'swaraj.demo26@gmail.com', 'to test message flow', '2023-02-24 20:45:49', '2023-02-24 13:45:49'),
(6, 'Swaraj Demo', 'swarajflowpro@gmail.com', 'To test flow msg', '2023-02-24 21:09:04', '2023-02-24 14:09:04'),
(7, 'Traffic Violations', 'admin@gmail.com', 'fbnhfh', '2023-02-24 23:51:52', '2023-02-24 16:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'New Home Construction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '866625470.jpg', '2023-02-27 10:01:27', '2023-02-27 17:01:27'),
(2, 'Home Additions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2026301960.jpg', '2023-01-19 04:35:33', '2023-01-19 10:05:33'),
(3, 'Bathroom Remodels', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '1156696271.jpg', '2023-01-19 04:36:06', '2023-01-19 10:06:06'),
(4, 'Kitchen Remodels', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '2118636764.jpg', '2023-01-19 04:36:29', '2023-01-19 10:06:29'),
(5, 'Windows & Doors', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '1176274007.jpg', '2023-01-19 04:36:50', '2023-01-19 10:06:50'),
(6, 'Decks & Porches', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '795954394.jpg', '2023-01-19 04:37:34', '2023-01-19 10:07:34'),
(8, 'Swaraj Demo', 'dsdad', '314426681.png', '2023-02-27 12:59:54', '2023-02-27 05:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `email` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `email`, `name`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 'johndoe@gmail.com', 'John Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '1855429004.jpg', '2023-01-19 04:40:03', '2023-01-19 10:10:03'),
(2, 'admin@gmail.com', 'Jonathan Doe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis.', '1020091894.jpg', '2023-01-19 04:40:51', '2023-01-19 10:10:51'),
(3, 'hg@gmail.com', 'Harmonie Granger', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '1011156166.jpg', '2023-01-19 04:42:07', '2023-01-19 10:12:07'),
(4, 'jw@gmail.com', 'Jinny Wisley', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '1979848112.jpg', '2023-01-19 04:42:36', '2023-01-19 10:12:36'),
(5, 'dm@gmail.com', 'Draco Malfoy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.', '2057326351.jpg', '2023-01-19 04:43:57', '2023-01-19 10:13:57'),
(6, 'hr@gmail.com', 'Harry Redcliff', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis.', '970878093.jpg', '2023-01-19 04:44:37', '2023-01-19 10:14:37'),
(7, 'swarajflowpro@gmail.com', 'demo 1', 'to check flow', '537328036.png', '2023-02-27 13:20:27', '2023-02-27 06:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Anand', 'Bairagi', '8910849215', 'anandbairagi500@gmail.com', '$2y$10$GjJlxoJmRcLEuPjDE9PAf.gcurJEsnGrnUuampxoILIfmLrx0Gf6i', '2023-01-19 06:28:17', '2023-01-19 11:58:17'),
(3, 'Yashika', 'Vaishnav', '5678942056', 'yashikavaishnav@gmail.com', '$2y$10$LsHoEN.3axNnr/2dWK9RTeiC2g3SMT/zh/4aj3xBlUTvFrm420/XS', '2023-01-19 11:59:22', '2023-01-19 17:29:22'),
(4, 'Swaraj', 'Demo', '9404689585', 'swarajflowpro@gmail.com', '$2y$10$7iicbOhGul7yr57L4VzsJ.liM42tgFgIMz.kZp.ZfIpRzi.QQBmnC', '2023-02-07 13:06:57', '2023-02-07 06:06:57'),
(5, 'Swaraj', 'Demo', '9404689585', 'swarajflowpro@gmail.com', '$2y$10$Rt.eu6ssB7OL6VlxeVXGm.8Z66x88vmyzA1TPWC/eXCYnspGXoeIa', '2023-02-07 13:08:15', '2023-02-07 06:08:15'),
(6, 'Anand', 'Bairagi', '8910849215', 'anandbairagi500@gmail.com', '$2y$10$6EOIce8KQ5s9wwFESho7O.HVzQGsuJAP9TfBlqsl1vs5eekB3RwLO', '2023-02-24 03:52:12', '2023-02-23 20:52:12'),
(7, 'Anand', 'Bairagi', '8910849215', 'anandbairagi500@gmail.com', '$2y$10$X2cll7PEMrqSFfPf6./KA.SmY8FHVKJtXPvFFhqWMTAvJ54hXUcOe', '2023-02-24 03:56:29', '2023-02-23 20:56:29'),
(8, 'Anand', 'Bairagi', '5678942056', 'yashikavaishnav@gmail.com', '$2y$10$A2LQz56OTSa3tgm.VdNqPuJaJOsHjMAiDXzUj8xkRE80KvchvRd2a', '2023-02-24 04:05:56', '2023-02-23 21:05:56'),
(9, 'Anand', 'Bairagi', '8910849215', 'chloe@gmail.com', '$2y$10$P0U/W02RiaZUu8Md1BdCZu8J/nn6n3CYAadG8Aj7D8E2eS9.PbU7m', '2023-02-24 04:07:22', '2023-02-23 21:07:23'),
(10, 'ashish', 'sharma', 'ashishsharma2472000@gmail.com', 'ashishsharma2472000@gmail.com', '$2y$10$vVZdQiYgVz5MpYsdJqRX.OYddrhx1ikoSdcgFVCq6kL/rLJZnV8V2', '2023-02-24 12:03:40', '2023-02-24 05:03:40'),
(11, 'Anand', 'Solanki', '5982564851', 'admin@gmail.com', '$2y$10$oM/dXFAYNQkUXh4aYyYN.u4kD0pF9D7vdeo24Q91FF.w7yYsU48gW', '2023-02-24 15:47:41', '2023-02-24 08:47:41'),
(12, 'Anand', 'Solanki', '5678942056', 'yashikavaishnav@gmail.com', '$2y$10$ThYIgHnBnaOZTm/m/fs9gOrJYQSnDUtSvhZDtAg0aMDKp4/ZTKLbS', '2023-02-24 15:51:32', '2023-02-24 08:51:32'),
(13, 'Anand', 'Solanki', '5678942056', 'chloe@gmail.com', '$2y$10$kLOVwc8NEiW/C.fsc5tjVej08dUO29Yzn/ZJw6e9F2eK.p3B.80TW', '2023-02-24 15:53:53', '2023-02-24 08:53:53'),
(14, 'Anand', 'Bairagi', '5982564851', 'chloe@gmail.com', '$2y$10$m43KeXQ96R9APYbKyuu89eYbgpHgtm8zcxR83r0AeTBlQGhfnsNc6', '2023-02-24 15:56:22', '2023-02-24 08:56:22'),
(15, 'ashish', 'sharma', 'ashishsharma2472000@gmail.com', 'ashishsharma2472000@gmail.com', '$2y$10$5irMDgmZ4O8OvNWyYwF0zumSEXIWNv3FV1V3gQQPEaMZ.rooEyJIm', '2023-02-28 14:03:50', '2023-02-28 07:03:50'),
(16, 'ashish', 'sharma', '91052121', 'ashishsharma2472000@gmail.com', '$2y$10$WDMz3zwD2sBt4FY9P7EmJeVODp2AJmIUUevfvG3cJsy0dDYY2Vwlq', '2023-03-13 13:57:15', '2023-03-13 06:57:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_user_id` (`user_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_property_id` (`property_id`);

--
-- Indexes for table `property_maps`
--
ALTER TABLE `property_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_user_id` (`user_id`),
  ADD KEY `foreign_key_property_id` (`property_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contractors`
--
ALTER TABLE `contractors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `property_maps`
--
ALTER TABLE `property_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `infos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `property_images_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchase_details_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
