-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 04:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `contact` text DEFAULT NULL,
  `cream` varchar(20) NOT NULL,
  `wt` varchar(10) NOT NULL DEFAULT '1.0',
  `flavour` varchar(20) NOT NULL,
  `design` varchar(10) NOT NULL,
  `shape` varchar(10) NOT NULL,
  `photo` varchar(5) NOT NULL,
  `pic` longblob DEFAULT NULL,
  `ready` varchar(10) NOT NULL DEFAULT 'no',
  `delivered` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `date`, `time`, `contact`, `cream`, `wt`, `flavour`, `design`, `shape`, `photo`, `pic`, `ready`, `delivered`) VALUES
(6, 'kjasdfkjasdbf', '2020-10-18', '16:45:00', '97987', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no'),
(7, 'xkvcjzckjdfhlkjh', '2020-10-18', '16:50:00', '3424', 'Fresh Cream', '1.5', 'F.C Gel Pinaple', 'Novelty', '987', 'Yes', '', 'no', 'no'),
(8, 'Shubhma', '2020-10-21', '07:54:00', '3242424', 'Fresh Cream', '0.5', 'F.C Plain Pinaple', 'Regular', 'Heart', 'Yes', '', 'no', 'no'),
(9, 'Shubham', '2020-10-21', '07:59:00', '24242', 'Butter Cream', '2.5', 'B.C Pure Chocolate', 'Regular', 'Heart', 'Yes', '', 'no', 'no'),
(10, 'Shubham', '2020-10-21', '07:59:00', '24242', 'Butter Cream', '1.0', 'B.C Pure Chocolate', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no'),
(11, 'Shubham', '2020-10-21', '19:13:00', '9384573498', 'Fresh Cream', '2.0', 'F.C Black Forest', 'Regular', 'Heart', 'Yes', NULL, 'no', 'yes'),
(12, 'SHubham', '2020-10-24', '19:55:00', '23432', 'Fresh Cream', '1.0', 'F.C Gel Pinaple', 'Regular', 'Heart', 'Yes', NULL, 'yes', 'no'),
(13, 'lasdkfjadsfkjashfgk', '2020-12-24', '19:55:00', '32424', 'Fresh Cream', '2.0', 'F.C White Forest', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no'),
(14, 'lasdkfjadsfkjashfgk', '2020-12-24', '19:55:00', '32424', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no'),
(15, 'qqqqq', '2020-10-24', '19:57:00', '34234', 'Fresh Cream', '1.5', 'F.C White Forest', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no'),
(16, 'aeoij;lgkjsflkj', '2020-10-24', '19:58:00', '876876', 'Fresh Cream', '1.0', 'F.C White Forest', 'Novelty', 'kjg788', 'Yes', NULL, 'no', 'no'),
(17, 'sldkfjhslkjh', '2020-10-25', '03:34:00', '2309973247', 'Fresh Cream', '1.5', 'F.C White Forest', 'Regular', 'Square', 'Yes', NULL, 'no', 'no'),
(18, 'sdflgkhdfslk', '2020-10-25', '03:34:00', '98809789', 'Butter Cream', '1.5', 'B.C Strawberry', 'Regular', 'round', 'Yes', NULL, 'no', 'no'),
(19, 'dlknsfdgjh', '2020-10-25', '04:02:00', '9867678', 'Fresh Cream', '1.5', 'F.C Plain Pinaple', 'Regular', 'round', 'Yes', NULL, 'no', 'no'),
(20, 'lflghhdkj', '2020-10-25', '04:04:00', '4534346454', 'Fresh Cream', '0.5', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(21, 'lflghhdkj', '2020-10-25', '04:04:00', '4534346454', 'Fresh Cream', '0.5', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(22, 'Td ', '2020-10-16', '17:30:00', '2222570', 'Fresh Cream', '1.0', 'F.C gel strawberry', 'Novelty', 'D10', 'No', NULL, 'no', 'no'),
(23, 'Td', '2020-10-25', '17:30:00', '2263869', 'Fresh Cream', '1.0', 'F.C Black Forest', 'Novelty', 'C6', 'No', NULL, 'no', 'no'),
(24, 'St mak', '2020-10-25', '17:30:00', '8562865', 'Fresh Cream', '1.0', 'F.c Chocolate Troufl', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(25, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(26, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(27, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(28, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(29, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(30, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(31, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(32, '', '0000-00-00', '00:00:00', '', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(33, 'qqqqqqqqqqqqqq', '2021-05-18', '22:30:00', '23423424', 'Fresh Cream', '0.5', 'F.C Black Forest', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(34, 'qqqqqqqqqqqqqq', '2021-05-18', '22:30:00', '23423424', 'Fresh Cream', '0.5', 'F.C Black Forest', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(35, 'qqqqqqqqqqqqqq', '2021-05-18', '22:30:00', '23423424', 'Fresh Cream', '0.5', 'F.C Black Forest', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(36, 'cool', '0000-00-00', '00:00:00', '', 'Fresh Cream', '1.5', 'F.C Plain Pinaple', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(37, 'uuuuuuuqsq', '2021-05-19', '00:40:00', '32432423234', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(38, 'shubham1', '2021-05-19', '00:48:00', '3423424324', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(39, 'gfasdfg', '2021-05-19', '01:39:00', '1231231231', '-NOT SELECTED-', '0.5', '-NOT SELECTED-', '-NOT SELEC', '-NOT SELEC', 'No', NULL, 'no', 'no'),
(40, 'dflgln', '2021-05-19', '01:44:00', '1231231231', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'round', 'No', NULL, 'no', 'no'),
(41, 'sdgkjsfgkjkjfgkjsfg', '2021-05-19', '01:49:00', '1231231231', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(42, 'adfsdkfjjb', '2021-05-19', '01:54:00', '2342342342', 'Butter Cream', '1.0', 'B.C Strawberry', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no'),
(43, 'shubham', '2021-05-19', '02:06:00', '4564564564', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(44, 'fvdfbdfb', '2021-05-19', '02:08:00', '6786786786', 'Fresh Cream', '0.5', 'F.C Black Forest', 'Regular', 'round', 'No', NULL, 'no', 'no'),
(45, 'zzzzzzzzzzzzzzzzz', '2021-05-19', '02:11:00', '6786786786', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(46, 'iguuygv', '2021-05-19', '02:15:00', '1231231231', 'Fresh Cream', '0.5', 'F.C Black Forest', 'Regular', 'round', 'No', NULL, 'no', 'no'),
(47, 'tretrddfd', '2021-05-19', '02:19:00', '6786786786', 'Fresh Cream', '0.5', 'F.C Black Forest', 'Regular', 'round', 'No', NULL, 'no', 'no'),
(48, 'trtrtrtrtrtrtrtr', '2021-05-19', '02:20:00', '8908908908', 'Fresh Cream', '0.5', 'F.C Black Forest', 'Regular', 'round', 'No', NULL, 'no', 'no'),
(49, 'yoshubhs', '2021-05-19', '02:32:00', '5675675675', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'No', NULL, 'no', 'no'),
(50, 'sdfjhsfh', '2021-05-19', '02:34:00', '1234564564', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no'),
(51, 'sdfjhsfh', '2021-05-19', '02:34:00', '1234564564', 'Fresh Cream', '1.0', 'F.C White Forest', 'Regular', 'Heart', 'Yes', NULL, 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
