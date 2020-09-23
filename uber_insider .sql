-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 05:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uber_insider`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CAR_LICENSE_NO` varchar(50) NOT NULL,
  `CAR_NAME` varchar(20) DEFAULT NULL,
  `CAR_COLOR` varchar(10) DEFAULT NULL,
  `OWNER_ID` int(7) DEFAULT NULL,
  `DRIVER_ID` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complain_box`
--

CREATE TABLE `complain_box` (
  `DRIVER_ID` int(10) NOT NULL,
  `CAR_LICENSE_NO` varchar(50) DEFAULT NULL,
  `COMPLAIN_TIME` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRIVER_ID` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `DRIVER_ADDRESS` varchar(70) DEFAULT NULL,
  `PHONE_NO` varchar(20) NOT NULL,
  `DRIVEN_CAR_NO` varchar(50) DEFAULT NULL,
  `HIRE_DATE` date DEFAULT NULL,
  `MONTHLY_EARNING` double(8,2) DEFAULT NULL,
  `UBER_CONTRIBUTION` double(8,2) DEFAULT NULL,
  `RIDE_NO` int(100) DEFAULT NULL,
  `RATING` double(4,2) DEFAULT NULL,
  `OWNER_ID` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OWNER_ID` int(15) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(70) DEFAULT NULL,
  `PHONE_NO` varchar(30) DEFAULT NULL,
  `CAR_NO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CAR_LICENSE_NO`),
  ADD KEY `OWNER_ID` (`OWNER_ID`),
  ADD KEY `DRIVER_ID` (`DRIVER_ID`);

--
-- Indexes for table `complain_box`
--
ALTER TABLE `complain_box`
  ADD PRIMARY KEY (`DRIVER_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DRIVER_ID`),
  ADD KEY `OWNER_ID` (`OWNER_ID`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OWNER_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`DRIVER_ID`) REFERENCES `driver` (`DRIVER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
