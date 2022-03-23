-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 07:12 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--
CREATE DATABASE IF NOT EXISTS `inventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `tdc`
--

DROP TABLE IF EXISTS `tdc`;
CREATE TABLE IF NOT EXISTS `tdc` (
  `username` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `quantitydc` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tdc`
--

INSERT INTO `tdc` (`username`, `type`, `quantitydc`) VALUES
('jayxcoder', 'VGA to HDMI', 4),
('jayxcoder', 'HDMI to DP', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tlc`
--

DROP TABLE IF EXISTS `tlc`;
CREATE TABLE IF NOT EXISTS `tlc` (
  `username` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `saiz` varchar(50) DEFAULT NULL,
  `quantitylc` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlc`
--

INSERT INTO `tlc` (`username`, `type`, `saiz`, `quantitylc`) VALUES
('jayxcoder', 'Cat7', '1 Meter', 3),
('jayxcoder', 'Cat5e', '2 Meter', 1),
('jayxcoder', 'Cat8', '0.5Meter', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tm`
--

DROP TABLE IF EXISTS `tm`;
CREATE TABLE IF NOT EXISTS `tm` (
  `username` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `saiz` varchar(50) DEFAULT NULL,
  `quantitymon` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm`
--

INSERT INTO `tm` (`username`, `brand`, `saiz`, `quantitymon`) VALUES
('jayxcoder', 'Acer', '27"', 1),
('jayxcoder', 'AOC', '27"', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tpc`
--

DROP TABLE IF EXISTS `tpc`;
CREATE TABLE IF NOT EXISTS `tpc` (
  `username` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `quantitypc` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpc`
--

INSERT INTO `tpc` (`username`, `type`, `quantitypc`) VALUES
('jayxcoder', '3 Pin Power Plug', 4),
('jayxcoder', 'Monitor Adapter', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ttmk`
--

DROP TABLE IF EXISTS `ttmk`;
CREATE TABLE IF NOT EXISTS `ttmk` (
  `username` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `quantitymk` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttmk`
--

INSERT INTO `ttmk` (`username`, `brand`, `quantitymk`) VALUES
('jayxcoder', 'Acer', 2),
('jayxcoder', 'Asus', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ttpc`
--

DROP TABLE IF EXISTS `ttpc`;
CREATE TABLE IF NOT EXISTS `ttpc` (
  `username` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `cpuspec` varchar(50) DEFAULT NULL,
  `quantitypc` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttpc`
--

INSERT INTO `ttpc` (`username`, `brand`, `cpuspec`, `quantitypc`) VALUES
('jayxcoder', 'Acer', 'i5 10th Gen', 2),
('jayxcoder', 'asus', 'i5 11th Gen', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tulc`
--

DROP TABLE IF EXISTS `tulc`;
CREATE TABLE IF NOT EXISTS `tulc` (
  `username` varchar(50) DEFAULT NULL,
  `quantityulc` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tulc`
--

INSERT INTO `tulc` (`username`, `quantityulc`) VALUES
('jayxcoder', 2),
('jayxcoder', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tvhd`
--

DROP TABLE IF EXISTS `tvhd`;
CREATE TABLE IF NOT EXISTS `tvhd` (
  `username` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `saiz` varchar(50) DEFAULT NULL,
  `quantityvhd` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvhd`
--

INSERT INTO `tvhd` (`username`, `type`, `saiz`, `quantityvhd`) VALUES
('jayxcoder', 'DP', '2 Meter', 2),
('jayxcoder', 'HDMI', '1 Meter', 4),
('jayxcoder', 'VGA', '5 Meter', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `empnom` varchar(10) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `sname`, `cemail`, `empnom`, `type`) VALUES
('jayxcoder', 'aaf60587bd0a61bf83a3ed1e8a15c29bc1adff5e', 'Jawahar Ganesh', 'Jay', 'jawahar.ganesh@echobroadband.com.my', 'MY9610', 'Admin'),
('test', '8cb2237d0679ca88db6464eac60da96345513964', 'bla', 'doc', 'Oof@nigga.com', 'Hehe', 'Production');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tdc`
--
ALTER TABLE `tdc`
  ADD KEY `username` (`username`);

--
-- Indexes for table `tlc`
--
ALTER TABLE `tlc`
  ADD KEY `username` (`username`);

--
-- Indexes for table `tm`
--
ALTER TABLE `tm`
  ADD KEY `username` (`username`);

--
-- Indexes for table `tpc`
--
ALTER TABLE `tpc`
  ADD KEY `username` (`username`);

--
-- Indexes for table `ttmk`
--
ALTER TABLE `ttmk`
  ADD KEY `username` (`username`);

--
-- Indexes for table `ttpc`
--
ALTER TABLE `ttpc`
  ADD KEY `username` (`username`);

--
-- Indexes for table `tulc`
--
ALTER TABLE `tulc`
  ADD PRIMARY KEY (`quantityulc`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tvhd`
--
ALTER TABLE `tvhd`
  ADD PRIMARY KEY (`quantityvhd`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tdc`
--
ALTER TABLE `tdc`
  ADD CONSTRAINT `tdc_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `tlc`
--
ALTER TABLE `tlc`
  ADD CONSTRAINT `tlc_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `tm`
--
ALTER TABLE `tm`
  ADD CONSTRAINT `tm_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `tpc`
--
ALTER TABLE `tpc`
  ADD CONSTRAINT `tpc_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `ttmk`
--
ALTER TABLE `ttmk`
  ADD CONSTRAINT `ttmk_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `ttpc`
--
ALTER TABLE `ttpc`
  ADD CONSTRAINT `ttpc_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `tulc`
--
ALTER TABLE `tulc`
  ADD CONSTRAINT `tulc_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `tvhd`
--
ALTER TABLE `tvhd`
  ADD CONSTRAINT `tvhd_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
