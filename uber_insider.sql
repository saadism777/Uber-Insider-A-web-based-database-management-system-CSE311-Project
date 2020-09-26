-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 11:22 AM
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
('Dhaka metro-GA 20-0016', 'Toyota Corolla', 'Black', 1, 102),
('Dhaka-metro ga 135678', 'toyota noah', '', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complain_box`
--

CREATE TABLE `complain_box` (
  `complain_no` int(10) NOT NULL,
  `driver_id` int(20) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `car_no` varchar(70) DEFAULT NULL,
  `complain_time` date NOT NULL,
  `my_complain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(102, 'Anim Hasan', '12/A south jatrabari,dhaka', '01872230823', 'Dhaka metro-GA 20-0016', '2018-05-03', 10000.50, 2500.12, 35, 4.00, 1),
(103, 'Abid', '3/1 mugda,Dhaka', '01715364179', 'Dhaka-metro ga 135678', '2020-09-10', 12000.00, 3000.00, 7, 4.20, 3);

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
(4, 'nian2', '$2y$10$miLJeRXycPhq2WjwnAZIYuH9k.Dk2YCE/olMBoarLZ0M6278X.dq6'),
(5, 'raisachowdhury', '$2y$10$80sFBSpcGPf2/G.YOA4u4.FryGHDFndttLjQ9MM1EqJIstqvGlqkG'),
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
(1, 'Abul Hakim', '13/3 simson road,Puran Dhaka', '01921384671', 'Dhaka metro-GA 15-4919'),
(2, 'Saad Pasha', '32/A south mughdapara,Dhaka', '01921384671', 'Dhaka metro-GA 15-4919'),
(3, 'Fahim Hasan', '20/A khan bari,kalachandpur', '+8801715368169', 'Dhaka metro-GA 21-8571'),
(4, 'Abdul Jalil', 'Bashundhara R/A,block-B,road-18,house-567A', '01682327464', 'Dhaka metro-GA 20-0061');

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
  ADD PRIMARY KEY (`complain_no`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DRIVER_ID`),
  ADD UNIQUE KEY `UC_Drivers` (`PHONE_NO`),
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
-- AUTO_INCREMENT for table `complain_box`
--
ALTER TABLE `complain_box`
  MODIFY `complain_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `DRIVER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `OWNER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`DRIVER_ID`) REFERENCES `driver` (`DRIVER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `car_ibfk_3` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `complain_box`
--
ALTER TABLE `complain_box`
  ADD CONSTRAINT `complain_box_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`DRIVER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`OWNER_ID`) REFERENCES `owner` (`OWNER_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
