-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 12:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CAR_LICENSE_NO` varchar(50) NOT NULL,
  `CAR_NAME` varchar(20) DEFAULT NULL,
  `CAR_COLOR` varchar(10) DEFAULT NULL,
  `OWNER_FIRST_NAME` varchar(10) DEFAULT NULL,
  `OWNER_LAST_NAME` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`CAR_LICENSE_NO`, `CAR_NAME`, `CAR_COLOR`, `OWNER_FIRST_NAME`, `OWNER_LAST_NAME`) VALUES
('Dhaka meto-KA 04-0052', 'Toyota Axio', 'White', 'Abu', 'Ahmed'),
('Dhaka metro-GA 15-4919', 'Toyota Noah', 'White', 'Fahim ', 'Hasan'),
('Dhaka metro-GA 20-0061', 'Toyota Corolla', 'Black', 'Riyad', 'Mahmud'),
('Dhaka metro-GA 20-0116', 'Toyota Allion', 'White', 'Niaz', 'Khan'),
('Dhaka metro-GA 21-8571', 'Toyota Corolla', 'Black', 'Saad', 'Pasha');

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
  `FIRST_NAME` varchar(25) NOT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `DRIVER_ADDRESS` varchar(70) DEFAULT NULL,
  `PHONE_NO` varchar(20) NOT NULL,
  `DRIVEN_CAR_NO` varchar(50) DEFAULT NULL,
  `HIRE_DATE` date DEFAULT NULL,
  `MONTHLY_EARNING` double(8,2) DEFAULT NULL,
  `UBER_CONTRIBUTION` double(8,2) DEFAULT NULL,
  `RIDE_NO` int(100) DEFAULT NULL,
  `RATING` double(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DRIVER_ID`, `FIRST_NAME`, `LAST_NAME`, `DRIVER_ADDRESS`, `PHONE_NO`, `DRIVEN_CAR_NO`, `HIRE_DATE`, `MONTHLY_EARNING`, `UBER_CONTRIBUTION`, `RIDE_NO`, `RATING`) VALUES
(101, 'Abdul', 'Jalil', '32/A south mughdapara,Dhaka', '+8801921384671', 'Dhaka metro-GA 15-0568', '2017-03-05', 10000.50, 2500.12, 35, 4.50),
(102, 'Saad', 'Pasha', '13/3 simson road,Puran Dhaka', '+8801872230823', 'Dhaka metro-GA 21-8571', '2018-01-02', 12000.75, 3000.18, 40, 3.50),
(103, 'Abdul', 'Hakim', '30/1 purana paltan,Dhaka', '+8801932764521', 'Dhaka metro-GA 20-0016', '2017-11-01', 15000.56, 3750.14, 36, 5.00),
(104, 'Niya', 'Sultana', '15/C Khilgaon Dhaka', '+8801682327464', 'Dhaka metro-KHA 37-9637', '2019-03-06', 20000.75, 5000.18, 42, 4.50),
(105, 'Fahim', 'Hasan', '20/A khan bari,kalachandpur', '+8801715368169', 'Dhaka metro-GA 15-4919', '2017-07-02', 90000.50, 2250.12, 25, 3.50);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OWNER_ID` int(15) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(70) DEFAULT NULL,
  `CAR_NO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OWNER_ID`, `FIRST_NAME`, `LAST_NAME`, `ADDRESS`, `CAR_NO`) VALUES
(101, 'Niaz', 'Khan', 'Bashundhaka R/A block b', 'Dhaka metro-GA 20-0116'),
(102, 'Saad', 'Pasha', '13/3 simson road,Puran Dhaka', 'Dhaka metro-GA 21-8571'),
(103, 'Abid', 'Rahman', 'House 20 (3rd Floor) Road 17,Nikanjia-2 Dhaka', 'Dhaka metro-KHA 13-1265'),
(104, 'Abu', 'Ahmed', 'Outer Circular Rd,Motijheel,Dhaka', 'Dhaka metro -KA 04-0052'),
(105, 'Fahim', 'Hasan', '20/A khan bari,kalachandpur', 'Dhaka metro-GA 15-4919');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CAR_LICENSE_NO`);

--
-- Indexes for table `complain_box`
--
ALTER TABLE `complain_box`
  ADD PRIMARY KEY (`DRIVER_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DRIVER_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OWNER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
