-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 02:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `userid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `book_date` date NOT NULL,
  `journey_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `pid` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(11) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `adults` int(2) DEFAULT NULL,
  `children` int(2) DEFAULT NULL,
  `bookingdate` date NOT NULL,
  `journeydate` date NOT NULL,
  `enquiry` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `fullname`, `pid`, `gender`, `mobile`, `email`, `address`, `birthday`, `adults`, `children`, `bookingdate`, `journeydate`, `enquiry`) VALUES
(1, 'Sayef Sarkar Eshan', 1, 'male', 1768732021, 's@gmail.com', 'Bhairab', '1995-08-11', 2, 0, '2017-08-19', '2017-08-26', ''),
(25, 'dnasjkdnjk', 2, 'male', 56878798, 'msdm@gmail.com', 'ahjadh', '2017-08-07', 1, 1, '2017-08-22', '2017-08-31', ''),
(26, 'asd', 2, 'male', 213, 'sd@gmail.com', 'asd', '2017-08-18', 1, 1, '2017-08-23', '2017-08-17', ''),
(27, 'asd', 2, 'male', 213, 'sd@gmail.com', 'asd', '2017-08-18', 1, 1, '2017-08-23', '2017-08-17', ''),
(28, 'kdasjdkj', 12, 'male', 2312, 'sd@gmail.com', ';ads;m', '0036-08-29', 12, 1, '2613-07-07', '2122-06-27', ''),
(29, 'Jabid Pappo', 6, 'male', 2132, 'asd@gmail.com', '', '0000-00-00', 1, 1, '2017-08-03', '2017-09-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(20) DEFAULT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `mobile`, `comment`) VALUES
('Sayef', 'sb@gmail.com', 10238230, 'Hello'),
('Sarkar', 'ssdasb@gmail.com', 231132, 'This is test text'),
('Eshan', 'ikkhk@gmail.com', 2312334, 'This is our database project');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pid` int(4) NOT NULL,
  `package_name` varchar(30) DEFAULT NULL,
  `tour_place` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pid`, `package_name`, `tour_place`, `division`, `category`, `days`, `amount`) VALUES
(1, 'Best place in Dhaka', 'Ahsan Manjil', 'Dhaka', 'Family Tours', 1, 2000),
(2, 'Tour to ancient place', 'Lalbagh Fort', 'Dhaka', 'Small group Tours', 1, 2500),
(3, 'Travel to longest sea beach', 'Coxs Bazar', 'Chittagong', 'Themed Vacations', 5, 9000),
(4, 'Best in Bangladesh', 'Bandarban', 'Chittagong', 'Adventure Tours', 7, 12000),
(5, 'Tour to city of tea', 'Srimongol', 'Sylhet', 'Family Tours', 2, 6000),
(6, 'waterfall in Sylhet', 'Jaflong', 'Sylhet', 'Small Group Tours', 3, 7000),
(7, 'Tour to forest', 'Sundarban', 'Khulna', 'Adventure Tours', 8, 14000),
(8, 'Tour to port', 'Mongla', 'Khulna', 'Small group Tours', 5, 7000),
(9, 'Beauty of North Bengal', 'Mahasthangar', 'North Bengal', 'family Tours', 4, 6000),
(10, 'Paharpur', 'Paharpur Buddhist Mo', 'North Bengal', 'Religious Tours', 3, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userid` int(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `NID` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userid`, `fullname`, `NID`, `username`, `password`, `usertype`, `email`, `address`) VALUES
(1, 'Sayef Sarkar', 1234, 'admin', '1212', 'admin', 'eshan@gmail.com', 'Bhairab'),
(12, 'Sharif Ahmed', 7896, 'sh', '4855', 'user', 's@gmail.com', 'bashundhara'),
(13, 'Jabid Pappo', 5555, 'papo', 'papo', 'user', 'p@gmail.com', 'Barishal'),
(14, 'sdfkl', 44967, 'fd', '77', 'user', 'da', 'ads'),
(15, 'sd', 49577, 'qw', 'aa', 'user', 'asd@gmail.com', 'sdfa'),
(16, 'ghashdfg ghasdgj', 5454, 'qq', 'qq', 'user', 'asd@gmail.com', 'dhaka'),
(17, 'saadn', 1221, 'adf', 'adf', 'user', 'da@gmail.com', 'adsda'),
(18, 'dhsadl', 4654, 'po', 'po', 'user', 'snds@gmail.com', 'sdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
