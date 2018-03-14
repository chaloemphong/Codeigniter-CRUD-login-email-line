-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 05:07 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id_auto` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `sc` varchar(30) CHARACTER SET utf8 NOT NULL,
  `file_pdf` varchar(150) CHARACTER SET utf8 NOT NULL,
  `statun` varchar(50) CHARACTER SET utf8 NOT NULL,
  `comment` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id_auto`, `date`, `time`, `sc`, `file_pdf`, `statun`, `comment`) VALUES
(310, '2018-03-13', '10:10:00', '180630', '1_Cocoa_Powder_12_Feb_20183.pdf', '', 'ทดสอบระบบ'),
(311, '2018-03-13', '10:11:00', '19000', '1_Cocoa_Powder_12_Feb_20185.pdf', '', 'ทดสอบ email '),
(314, '2018-03-13', '10:33:00', '180600', '1_Cocoa_Powder_12_Feb_20181.pdf', '', 'ทดสอบ email'),
(315, '2018-03-13', '10:42:00', '180600', '1_Cocoa_Powder_12_Feb_20182.pdf', '', 'test'),
(327, '2018-03-13', '11:18:00', 'fgh', '1_Cocoa_Powder_12_Feb_201816.pdf', '', 'hfgh'),
(334, '2018-03-13', '11:49:00', '78654', '1_Cocoa_Powder_12_Feb_20188.pdf', '', '789789'),
(335, '2018-03-13', '11:52:00', '169200', '1_Cocoa_Powder_12_Feb_20184.pdf', '', '456456456'),
(336, '2018-03-13', '11:54:00', '456', '1_Cocoa_Powder_12_Feb_20189.pdf', '', 'ทดสอบ น่าจ่า'),
(338, '2018-03-13', '13:57:00', '18900', '1_Cocoa_Powder_12_Feb_2018.pdf', '', 'เปลี่ยน  bact 422 เป็น 50 เพิ่ม 5กโล');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 11:26:05'),
(2, 2, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Manager\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 11:26:31'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 14:26:32'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 16:16:21'),
(5, 2, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Manager\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 16:24:08'),
(6, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 16:32:42'),
(7, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 16:36:39'),
(8, 2, '{\"role\":\"2\",\"roleText\":\"WH\",\"name\":\"WH\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 16:44:17'),
(9, 3, '{\"role\":\"3\",\"roleText\":\"PD\\r\\n\",\"name\":\"Pd\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 16:54:34'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-05 16:55:06'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-07 14:42:49'),
(12, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-07 15:04:24'),
(13, 2, '{\"role\":\"2\",\"roleText\":\"WH\",\"name\":\"Wh\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-07 15:31:05'),
(14, 3, '{\"role\":\"3\",\"roleText\":\"PD\\r\\n\",\"name\":\"Pd\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-07 15:31:17'),
(15, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-07 15:35:13'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-07 15:52:26'),
(17, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-07 15:59:06'),
(18, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 08:36:41'),
(19, 2, '{\"role\":\"2\",\"roleText\":\"WH\",\"name\":\"Wh\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 11:32:36'),
(20, 3, '{\"role\":\"3\",\"roleText\":\"PD\\r\\n\",\"name\":\"Pd\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 11:33:07'),
(21, 2, '{\"role\":\"2\",\"roleText\":\"WH\",\"name\":\"Wh\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 11:33:22'),
(22, 3, '{\"role\":\"3\",\"roleText\":\"PD\\r\\n\",\"name\":\"Pd\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 11:36:23'),
(23, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 11:38:23'),
(24, 2, '{\"role\":\"2\",\"roleText\":\"WH\",\"name\":\"Wh\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 14:38:35'),
(25, 2, '{\"role\":\"2\",\"roleText\":\"WH\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 14:41:50'),
(26, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 14:42:50'),
(27, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-08 14:43:34'),
(28, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-09 09:03:03'),
(29, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-09 15:28:17'),
(30, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 08:46:50'),
(31, 9, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Production\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 13:39:38'),
(32, 2, '{\"role\":\"2\",\"roleText\":\"WH\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 13:40:36'),
(33, 2, '{\"role\":\"2\",\"roleText\":\"Warehouse\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 13:42:28'),
(34, 3, '{\"role\":\"3\",\"roleText\":\"Production\",\"name\":\"Production\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:02:12'),
(35, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:02:43'),
(36, 2, '{\"role\":\"2\",\"roleText\":\"Warehouse\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:05:32'),
(37, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:06:18'),
(38, 3, '{\"role\":\"3\",\"roleText\":\"Production\",\"name\":\"Production\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:20:26'),
(39, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:20:58'),
(40, 3, '{\"role\":\"3\",\"roleText\":\"Production\",\"name\":\"Production\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:37:41'),
(41, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:41:57'),
(42, 3, '{\"role\":\"2\",\"roleText\":\"Production\",\"name\":\"Production\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:42:07'),
(43, 2, '{\"role\":\"3\",\"roleText\":\"Warehouse\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:44:53'),
(44, 3, '{\"role\":\"2\",\"roleText\":\"Production\",\"name\":\"Production\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:51:58'),
(45, 2, '{\"role\":\"3\",\"roleText\":\"Warehouse\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:52:08'),
(46, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 14:52:33'),
(47, 2, '{\"role\":\"3\",\"roleText\":\"Warehouse\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 15:59:23'),
(48, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 16:20:18'),
(49, 2, '{\"role\":\"3\",\"roleText\":\"Warehouse\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 16:22:07'),
(50, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 16:22:44'),
(51, 2, '{\"role\":\"3\",\"roleText\":\"Warehouse\",\"name\":\"Warehouse\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-12 16:22:56'),
(52, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-13 08:57:28'),
(53, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-13 10:42:20'),
(54, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Chaloemphong Saetiao\"}', '::1', 'Chrome 64.0.3282.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36', 'Windows 10', '2018-03-14 10:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Production'),
(3, 'Warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'itadmin@example.com', '$2y$10$u0YBwSEJCeiI4JkTznayIOppJ9GqzxniLmDOfIHYt0ETXMzcjO2ae', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-03-05 10:33:52'),
(2, 'wh@example.com', '$2y$10$fQ02UCOnZbKAh0oKEPjYQu2nZFIHPbU4Hh7qO5X.GkxpgSz7gxFha', 'Warehouse', '9890098900', 3, 0, 1, '2016-12-09 17:49:56', 1, '2018-03-05 10:55:23'),
(3, 'pd01@example.com', '$2y$10$uL08gWBeZZ3BY08mZNWNjuc8vT2d4wAK5NrDGH6a..vUvyAqSDJJu', 'Production', '9890098900', 2, 0, 1, '2016-12-09 17:50:22', 1, '2018-03-05 10:55:33'),
(9, 'pd02@example.com', '$2y$10$fQ02UCOnZbKAh0oKEPjYQu2nZFIHPbU4Hh7qO5X.GkxpgSz7gxFha', 'Production', '0984525800', 2, 0, 0, '2018-03-12 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `date_time`, `level`) VALUES
(1, 'System Administrator', 'admin', '1234', '2018-02-06 00:00:00', 'admin'),
(2, 'Employee', 'wh', '1234', '2018-02-07 00:00:00', 'wh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id_auto`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
