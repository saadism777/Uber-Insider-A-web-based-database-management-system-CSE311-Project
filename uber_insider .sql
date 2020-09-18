-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 08:39 PM
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

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`CAR_LICENSE_NO`, `CAR_NAME`, `CAR_COLOR`, `OWNER_ID`, `DRIVER_ID`) VALUES
('Dhaka metro-GA 15-4919', 'Toyota Corolla', 'Black', 2, 101),
('Dhaka metro-GA 21-8571', 'Toyota Noah', 'White', 2, 101);

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

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DRIVER_ID`, `NAME`, `DRIVER_ADDRESS`, `PHONE_NO`, `DRIVEN_CAR_NO`, `HIRE_DATE`, `MONTHLY_EARNING`, `UBER_CONTRIBUTION`, `RIDE_NO`, `RATING`, `OWNER_ID`) VALUES
(101, 'Saad Pasha', '32/A south mughdapara,Dhaka', '01921384671', 'Dhaka metro-GA 15-4919', '2017-07-02', 12000.75, 3000.18, 40, 4.50, 2);

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
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OWNER_ID`, `NAME`, `ADDRESS`, `PHONE_NO`, `CAR_NO`) VALUES
(1, 'Abul Hakim', '13/3 simson road,Puran Dhaka', '01921384671', 'Dhaka metro-GA 15-4919'),
(2, 'Saad Pasha', '32/A south mughdapara,Dhaka', '01921384671', 'Dhaka metro-GA 15-4919');

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
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`DRIVER_ID`) REFERENCES `driver` (`DRIVER_ID`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
