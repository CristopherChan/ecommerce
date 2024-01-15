-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 01:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customersID` int(10) NOT NULL,
  `fname` varchar(220) NOT NULL,
  `lname` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `uname` varchar(220) NOT NULL,
  `pword` varchar(220) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customersID`, `fname`, `lname`, `email`, `uname`, `pword`, `img`) VALUES
(24, 'cristopher', 'chan', 'cristopher12345@gmail.com', 'cristopherchan00', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '61557080.jpg'),
(25, 'dsds', 'dasdasdgfsdgdf', 'dasdasdasfgdfgdfgdf@gmail.com', '32423rffsd', '947dbd612c1ffb2efccc0d2390e1210dffb817d9', '65265627.jpg'),
(27, 'sdasdasd', 'sdasdasdas', 'cfasdasd@gmail.com', 'fgsdfgdfgdfgdfgdfg', '883cf81f24504c000e092356fac17fa2f7e37494', '5606002.png'),
(28, 'weqweqw', 'ewqeqw', 'dedsgdhgfgfgalwqe@gmail.com', 'wqedsasdasdwqe', 'acbb1c9d3899151db71fea72de64b9d54403365c', '6609269.jpg'),
(29, 'uiyuiu', 'yuiyui', 'iu12triui@gmail.com', 'yuiyuiyui', '5d0b0c80673a5da9c46c1577e8967a93aef15f1d', '61241343.png'),
(30, 'cristopher', 'chan', 'cristopher1212@gmail.com', 'cristopherr', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '59367266.jpg'),
(31, 'fgrfgfg', 'dfgdfgfd', 'gfdgfdgfdgdfgfdg@gmail.com', 'cristopherchan12', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '70781244.png'),
(32, 'dfsdfs', 'sdfsdfsdfsd', 'dfsdfsdfd@gmail.com', 'sdf', '036010b3326b6d4b5a20208b5c4f738159673411', '89836451.png'),
(33, 'wwqwq', 'qwqw', 'qwqwqwqwqwqw@gmail.com', 'cristopher', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '69967260.png'),
(34, 'rtert', 'rtre', 'tretertertert@gmail.com', 'cristoherc', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '96484887.jpg'),
(35, 'Cristopher', 'Chan', 'cristopher.chan@tup.edu.ph', 'cristopherchan1212', '6edd1e3a25dcf2baab386ca07f8678d2783f449e', '36228472.jpg'),
(36, 'dfadasd', 'asdasd', 'asdasd@gmail.com', 'asdasd', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', '76246052.png'),
(37, 'cristopher', 'chan', 'cristopherchancc@gmail.com', 'cristopherchanchan', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '30981189.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `fname` varchar(220) NOT NULL,
  `lname` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `uname` varchar(220) NOT NULL,
  `pword` varchar(220) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `fname`, `lname`, `email`, `uname`, `pword`, `img`) VALUES
(8, 'dad', 'dadad', 'adada@gmail.com', 'adadada', '38617675fa03d79775acb954dc21fd3fc07f6605', '806615.jpg'),
(9, 'cristopherchan', 'chan', 'cristopherchan22@gmail.com', 'cristopherchanchan', 'b220ee2eb110e04999d6aaa434a9d965cd98a2e3', '6591555.png'),
(10, 'dad', 'asdasd', 'sdasd@gmail.com', 'sdfrfsdfsdfsdf', '95d1543adea47e88923c3d4ad56e9f65c2b40c76', '72516591.jpg'),
(11, 'Cristopher', 'Chan', 'cristopher.chasdsdfsdan@tup.edu.ph', 'sadasdasdasda', '724af481e6c6c6604249046d5c8f6918f45e272d', '78532922.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customersID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customersID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
