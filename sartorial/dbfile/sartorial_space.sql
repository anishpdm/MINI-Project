-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 12:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

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
(1, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 1),
(2, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(3, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(4, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(5, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(6, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(7, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(8, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(9, 'rakesh', '0000-00-00', 24, 'whbdwhb', 45768876, 'gfxfcfghcg', 8568785787, 'chxchgjvvjv', 'vjgghchchcgchg', 'vjvgggcg', '0000-00-00', '2019-04-06', 0),
(10, 'hahahah', '0000-00-00', 24, 'dvdvdv', 0, '', 0, '', '', '', '0000-00-00', '2019-04-06', 0),
(11, 'hahahah', '0000-00-00', 0, '', 0, '', 0, '', '', '', '0000-00-00', '2019-04-06', 0),
(12, '', '0000-00-00', 0, '', 0, '', 0, '', '', '', '2019-04-06', '2019-04-06', 0),
(13, 'kiratnnn Th', '0000-00-00', 34, 'scljbhsjkcb, ksjbckhjsbcsv', 54665, 'sdfghjk', 6546554123, 'kirattt@gmail.com', 'hdchbv', 'qawsedrftg1234Q', '2019-04-06', '2019-04-06', 1),
(14, 'kiratnnn Th', '', 34, 'scljbhsjkcb, ksjbckhjsbcsv', 54665, 'sdfghjk', 6546554123, 'kirattt@gmail.com', 'hdchbv', 'qawsedrftg1234Q', '2019-04-06', '2019-04-06', 0),
(15, 'Raj', '0002-02-22', 34, 'khscjx, kbschx', 66555, 'sdfghjk', 7634761543, 'gintussz@clevero.coms', 'raj', 'Qwerty1234', '2019-04-06', '2019-04-06', 0),
(16, 'Rakesh R', '1994-04-24', 25, 'Choorelackal', 690514, 'Alappuzha', 8034084766, 'rakesh@gmail.com', 'rakesh', 'Rakesh1234', '2019-04-06', '2019-04-06', 1),
(17, 'vishnu', '0002-02-22', 34, 'asdfghj', 56465, 'Ala', 1234567890, 'vkv@gmail.com', 'vkv', 'Vkvvkv1925', '2019-04-06', '2019-04-06', 0),
(18, 'vishnu', '0002-02-22', 34, 'asdfghj', 56465, 'Ala', 1234567890, 'vkv@gmail.com', 'vkv', 'Vkvvkv1925', '2019-04-06', '2019-04-06', 0),
(19, 'Rahul', '24/04/1994', 23, 'hscvhsc', 867867, 'hcvhsc', 9090909090, 'rakesh@gmail.com', 'rahulr', 'Rahulr12345', '2019-04-06', '2019-04-06', 1),
(20, 'vishnu', '0002-02-22', 34, 'asdfghj', 56465, 'Ala', 1234567890, 'vkv@gmail.com', 'vkv', '', '2019-04-06', '2019-04-06', 0),
(21, 'test', '2211-03-23', 345, 'jswbcdjk, kjsbckjbsc', 56465, 'scqdc', 1234567890, 'joji@gmail.com', 'test', 'testT1234', '2019-04-07', '0000-00-00', 1),
(22, 'Rakesh R', '2222-02-24', 27, 'Choorelackal pilappuzha haripad p.o, dsdsd', 690514, 'Alappuzha', 7034084766, 'rakeshramesh2000@gmail.com', 'admin', 'Rakesh1234', '2019-04-07', '0000-00-00', 1),
(23, 'abhiraj', '0012-12-12', 21, 'dzxgfchvhb', 123456, '', 123457890, 'abhi@gmail.com', 'abhiraj', 'Abhiraj1234', '2019-04-07', '0000-00-00', 1),
(24, 'abhi', '23/34/45', 25, 'jhscvshqc', 123456, 'hjsqvchjsq', 1234567890, 'abhi@g.com', 'abhiraj', 'Abhiraj1234', '2019-04-07', '0000-00-00', 1),
(25, 'qwerty', '21/21/21', 21, 'fxcjhxbskx', 123456, 'Alappuzha', 1234567890, 'qwerty@g.com', 'qwerty', 'Qwerty123', '2019-04-07', '2019-04-07', 1);

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
  `amount` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `monthly_remittance`
--
ALTER TABLE `monthly_remittance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
