-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 11:32 AM
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
-- Database: `uber_insider`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CAR_LICENSE_NO` varchar(255) NOT NULL,
  `CAR_NAME` varchar(255) DEFAULT NULL,
  `CAR_COLOR` varchar(255) DEFAULT NULL,
  `OWNER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`CAR_LICENSE_NO`, `CAR_NAME`, `CAR_COLOR`, `OWNER_ID`) VALUES
('DHAKA METRO CHA-81-8634', 'TOYOTA COROLLA', 'White', 2),
('DHAKA METRO HA-22-8634', 'MITSHUBISHI', 'Red', 1),
('DHAKA METRO PA-81-5534', 'TOYOTA ALLION', 'Silver', 4);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `PHONE_NO` varchar(255) NOT NULL,
  `CAR_NO` varchar(255) DEFAULT NULL,
  `CUST_NAME` varchar(255) DEFAULT NULL,
  `CUST_PHONE_NO` varchar(255) DEFAULT NULL,
  `TEXT` varchar(255) DEFAULT NULL,
  `REPORTED_AT` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`PHONE_NO`, `CAR_NO`, `CUST_NAME`, `CUST_PHONE_NO`, `TEXT`, `REPORTED_AT`) VALUES
('01951860618', 'DHAKA METRO CHA-76-8976', 'Sakib Ahmed', '01854722658', 'He was very late and behavior was poor.', '2020-09-27 15:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRIVER_ID` int(11) NOT NULL,
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
(100, 'Hasin Bhai', 'Mirpur-10', '01951860618', 'GA-0098', '2020-08-30', 2000.00, 500.00, 50, 5.00, 2),
(104, 'Punim Hasan ', '12/A south jatrabari,dhaka', '01872230823', 'Dhaka metro-GA 20-0016', '2018-05-03', 10000.50, 2500.12, 35, 4.00, 1),
(105, 'Taher Shah', 'Road-2,Mohammadpur,Dhaka', '0195463258', 'DHAKA METRO GA-21-8634', '2020-09-26', 12000.00, 3000.00, 70, 4.60, 2),
(107, 'Bakir Khan', 'Shewrapara,Mirpur,Dhaka', '0184578521', 'DHAKA METRO GHA-21-2534', '2020-01-28', 8000.00, 2000.00, 20, 4.25, 4),
(108, 'Khandakar Sharif', 'Road-3,Mohammadpur,Dhaka', '+880184576547', 'DHAKA METRO HA-81-8634', '2020-08-31', 13000.00, 3250.00, 26, 4.25, 3),
(109, 'Khandakar Latif', 'Road-2,Mohammadpur,Dhaka', '+880174576547', 'DHAKA METRO KA-82-8634', '2020-08-31', 13000.00, 3250.00, 26, 4.25, 4),
(110, 'AbidulSharif', 'Road-12,Mohammadpur,Dhaka', '01951860619', 'DHAKA METRO PA-81-5534', '2020-08-31', 5000.00, 1250.00, 5, 3.50, 4),
(111, 'Gordon Ramsay', 'North Carolina, US', '8545232545', 'DHAKA METRO HA-22-8634', '2020-09-27', 25000.00, 6250.00, 56, 4.70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `username`, `password`) VALUES
(3, 'raisan', '$2y$10$MPrHIj0BxZpJQGIU8ub9L.RErh0/BFUaD2AHwKJAolC8pxkTC2Lwe'),
(2, 'saadism7', '$2y$10$rwfsznzFUTyV9poSeMKn9ORwwNxgJyGFVM95Nn0.Sh6hEdqNE8YzC'),
(1, 'test', '$2y$10$.POWRtCUkuU6mv4j5rDAW.PGmBH5Jcf4YYB0TDJsnAItxWzfJuqa2');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OWNER_ID` int(11) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(70) DEFAULT NULL,
  `PHONE_NO` varchar(30) DEFAULT NULL,
  `CAR_NO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OWNER_ID`, `NAME`, `ADDRESS`, `PHONE_NO`, `CAR_NO`) VALUES
(1, 'Abul Hakimss', '13/3 simson road,Puran Dhaka', '01921384671', 'Dhaka metro-GA 15-4919'),
(2, 'Saad Pasha', '32/A south mughdapara,Dhaka', '01921384671', 'Dhaka metro-GA 15-4919'),
(3, 'Fahim Hasan', '20/A khan bari,kalachandpur', '+8801715368169', 'Dhaka metro-GA 21-8571'),
(4, 'Abdul Jalil', 'Bashundhara R/A,block-B,road-18,house-567A', '01682327464', 'Dhaka metro-GA 20-0061'),
(6, 'Raisa', 'blablablass', '01951860617', 'DHAKA METRO KHA-77-8976'),
(7, 'Hamim', 'banani', '8887885555', 'DHAKA METRO CHA-96-7976');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CAR_LICENSE_NO`),
  ADD KEY `OWNER_ID` (`OWNER_ID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`PHONE_NO`);

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
  ADD PRIMARY KEY (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OWNER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `DRIVER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `OWNER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
