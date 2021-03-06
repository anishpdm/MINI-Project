-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 10:45 AM
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
-- Database: `sartorial_space`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `benefits_apply`
--

CREATE TABLE `benefits_apply` (
  `id` int(11) NOT NULL,
  `memb_id` bigint(255) NOT NULL,
  `benefit_type` varchar(255) NOT NULL,
  `amount` bigint(200) NOT NULL,
  `applied_date` date NOT NULL,
  `approved_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benefits_apply`
--

INSERT INTO `benefits_apply` (`id`, `memb_id`, `benefit_type`, `amount`, `applied_date`, `approved_date`, `status`) VALUES
(1, 9, 'Marriage', 5000, '0000-00-00', '0000-00-00', 1),
(4, 9, 'Marriage Benefits', 2300, '0000-00-00', '0000-00-00', -1),
(5, 9, 'Retirement Benefits', 12, '0000-00-00', '0000-00-00', 0),
(6, 9, 'Marriage Benefits', 866, '2019-04-15', '2019-04-15', -1),
(7, 9, 'Retirement Benefits', 12, '2019-04-15', '2019-04-15', 1),
(8, 9, 'Marriage Benefits', 866, '2019-04-15', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` bigint(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `phonenum` bigint(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `applied_date` date NOT NULL,
  `approved_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `dob`, `age`, `address`, `pincode`, `district`, `phonenum`, `emailid`, `username`, `password`, `applied_date`, `approved_date`, `status`) VALUES
(9, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'abcd', 'test', '0000-00-00', '2019-04-15', 1),
(26, 'sdfsf', '', 0, '', 0, '', 0, '', '', '', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_remittance`
--

CREATE TABLE `monthly_remittance` (
  `id` int(11) NOT NULL,
  `memb_id` bigint(255) NOT NULL,
  `month` int(200) NOT NULL,
  `year` year(4) NOT NULL,
  `paid_day` date NOT NULL,
  `amount` bigint(200) NOT NULL,
  `chellan` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly_remittance`
--

INSERT INTO `monthly_remittance` (`id`, `memb_id`, `month`, `year`, `paid_day`, `amount`, `chellan`) VALUES
(1, 9, 5, 2019, '2019-04-15', 21, '7979');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `memb_id` bigint(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits_apply`
--
ALTER TABLE `benefits_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_remittance`
--
ALTER TABLE `monthly_remittance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benefits_apply`
--
ALTER TABLE `benefits_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `monthly_remittance`
--
ALTER TABLE `monthly_remittance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
