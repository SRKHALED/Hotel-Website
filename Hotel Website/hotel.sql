-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 04:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserv`
--

CREATE TABLE `reserv` (
  `room_id` int(5) NOT NULL,
  `type_of_room` varchar(20) DEFAULT NULL,
  `is_booked` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserv`
--

INSERT INTO `reserv` (`room_id`, `type_of_room`, `is_booked`) VALUES
(101, 'Presidential Suite', 'no'),
(102, 'Presidential Suite', 'no'),
(103, 'Presidential Suite', 'no'),
(104, 'Presidential Suite', 'yes'),
(105, 'Presidential Suite', 'yes'),
(201, 'Family Suite', 'no'),
(202, 'Family Suite', 'no'),
(203, 'Family Suite', 'no'),
(204, 'Family Suite', 'no'),
(205, 'Family Suite', 'no'),
(301, 'Standard Double Room', 'no'),
(302, 'Standard Double Room', 'no'),
(303, 'Standard Double Room', 'no'),
(304, 'Standard Double Room', 'no'),
(305, 'Standard Double Room', 'no'),
(401, 'Standard Single Room', 'no'),
(402, 'Standard Single Room', 'no'),
(403, 'Standard Single Room', 'no'),
(404, 'Standard Single Room', 'no'),
(405, 'Standard Single Room', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `type_of_room` varchar(20) DEFAULT NULL,
  `cost` int(6) DEFAULT NULL,
  `available_room` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`type_of_room`, `cost`, `available_room`) VALUES
('Presidential Suite', 22000, 3),
('Family Suite', 16500, 5),
('Standard Double Room', 14300, 5),
('Standard Single Room', 11000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `type_of_room` varchar(20) DEFAULT NULL,
  `number_of_room` int(100) DEFAULT NULL,
  `number_of_person` int(100) DEFAULT NULL,
  `check_in_date` varchar(20) DEFAULT NULL,
  `check_out_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`user_id`, `name`, `email`, `address`, `country`, `mobile`, `type_of_room`, `number_of_room`, `number_of_person`, `check_in_date`, `check_out_date`) VALUES
(73, 'Sadikur Rahman Khaled', 'khaledur8rahman@gmail.com', '30,lamabazar,Sylhet', 'Bangladesh', '+8801638721763', 'Presidential Suite', 2, 6, '19-12-2017', '21-12-2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserv`
--
ALTER TABLE `reserv`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
