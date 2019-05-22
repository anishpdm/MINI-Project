-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2019 at 08:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodcollector`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `collect_status`
--

CREATE TABLE `collect_status` (
  `id` int(255) NOT NULL,
  `food_id` int(250) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `id` int(250) NOT NULL,
  `mem_id` int(255) NOT NULL,
  `feed_back_msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`id`, `mem_id`, `feed_back_msg`) VALUES
(1, 1, 'This is a test '),
(2, 1, 'gjhgkjkhklhl');

-- --------------------------------------------------------

--
-- Table structure for table `fooddetails`
--

CREATE TABLE `fooddetails` (
  `id` int(50) NOT NULL,
  `member_id` int(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(444) NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `acknowledgement` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooddetails`
--

INSERT INTO `fooddetails` (`id`, `member_id`, `type`, `quantity`, `description`, `added_date`, `acknowledgement`) VALUES
(11, 1, 'Veg', 2, 'Test Food', '2019-04-25 08:15:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Houseno` varchar(255) NOT NULL,
  `Street` varchar(333) NOT NULL,
  `CityName` varchar(66) NOT NULL,
  `mobno` bigint(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `pincode` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `Houseno`, `Street`, `CityName`, `mobno`, `place`, `pincode`, `username`, `password`, `status`) VALUES
(1, 'Rakesh', 'qwertyuio', '', '', 1234567890, 'qwertyu', 123456, 'anish', 'test', '1'),
(3, 'test', 'qwertyu', '', '', 1234567890, 'qwer', 123456, 'testT1234', 'testT1234', '0'),
(6, 'Aswathy', 'jhqcvjhqs', '', '', 1234567890, 'jsgcvj', 1234566, 'aswathy', 'Qwerty1234', '1'),
(7, 'Ramu', 'hfjhg', '', '', 9526674440, 'Kasaragod', 77888, 'anishtest', 'Dev@12345', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collect_status`
--
ALTER TABLE `collect_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_back`
--
ALTER TABLE `feed_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooddetails`
--
ALTER TABLE `fooddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collect_status`
--
ALTER TABLE `collect_status`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed_back`
--
ALTER TABLE `feed_back`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fooddetails`
--
ALTER TABLE `fooddetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
