-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 09:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `site_id` int(100) NOT NULL,
  `site-measurement` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `owner-name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `site-measurement`, `price`, `owner-name`, `address`, `place`) VALUES
(1, '20*40', '500/sq. feet', 'mahalakshmi', '2nd cross,5th main,vivek nagar', 'sira'),
(2, '30*40', '500/sq. feet', 'vidyadevi', '3rd cross, 4th main, shanthi nivas layout', 'sira'),
(3, '60*40', '500/sq. feet', 'govindappa', '2nd cross', 'sira'),
(4, '50*80', '500/sq. feet', 'chikkanna', '9th cross', 'sira'),
(5, '30*40', '750/sq. feet', 'mahesh', '2th cross', 'sahakar'),
(6, '20*40', '750/sq. feet', 'ganesh', '6th cross', 'sahakar'),
(7, '60*40', '750/sq. feet', 'abhishek', '4th cross', 'sahakar'),
(8, '50*80', '750/sq. feet', 'muniyamma', '8th cross', 'sahakar'),
(9, '20*40', '5000/sq. feet', 'maramma', '5th cross', 'jakkur'),
(10, '30*40', '5000/sq. feet', 'joseph', '2nd cross', 'jakkur'),
(11, '60*40', '5000/sq. feet', 'peter', '1st cross', 'jakkur'),
(12, '50*80', '5000/sq. feet', 'mohammed shoib', '6th cross', 'jakkur'),
(13, '30*40', 'Rs. 2500/sq. feet', 'nagesh', '4th cross', 'attur'),
(14, '60*40', 'Rs. 2500/sq. feet', 'veeresh', '6th cross', 'attur'),
(15, '20*40', 'Rs. 2500/sq. feet', 'ravi', '12th cross', 'attur'),
(16, '60*40', 'Rs. 2500/sq. feet', 'kiran', '14th cross', 'attur');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(100) NOT NULL,
  `site_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `site_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
