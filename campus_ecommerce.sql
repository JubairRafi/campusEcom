-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 09:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `teacherId` int(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`teacherId`, `name`, `sex`, `password`) VALUES
(17339401, 'ashik', 'male', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `commodities`
--

CREATE TABLE `commodities` (
  `commoditiesId` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `studentId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commodities`
--

INSERT INTO `commodities` (`commoditiesId`, `name`, `price`, `picture`, `quantity`, `studentId`) VALUES
(1, 'Body spray', 50, '', 2, 1),
(2, 'Guitar', 2000, '', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `orderid` int(5) NOT NULL,
  `commodityName` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionid` int(10) NOT NULL,
  `commodiesName` varchar(10) NOT NULL,
  `studentId` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionid`, `commodiesName`, `studentId`, `price`, `date`) VALUES
(1, 'Guitar', 1, 2000, '2020-12-08'),
(2, 'Body spray', 2, 50, '2020-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `studentId` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `collage` varchar(50) NOT NULL,
  `major` varchar(9) NOT NULL,
  `dormitory` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`studentId`, `name`, `sex`, `collage`, `major`, `dormitory`, `password`, `mobile`) VALUES
(1, 'jubair', 'male', 'ABC', 'CSE', 'Yes', '12345', ''),
(2, 'pial', 'male', 'dfr', 'unselect', '5', '1234567', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`teacherId`);

--
-- Indexes for table `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`commoditiesId`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `teacherId` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17339402;

--
-- AUTO_INCREMENT for table `commodities`
--
ALTER TABLE `commodities`
  MODIFY `commoditiesId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `orderid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `studentId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
