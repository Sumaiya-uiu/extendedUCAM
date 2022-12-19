-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling_hour_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacherinformation`
--

CREATE TABLE `teacherinformation` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `counselingDay` varchar(45) DEFAULT NULL,
  `startTime` varchar(100) DEFAULT NULL,
  `endTime` varchar(100) DEFAULT NULL,
  `room_Number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherinformation`
--

INSERT INTO `teacherinformation` (`id`, `teacher_id`, `counselingDay`, `startTime`, `endTime`, `room_Number`) VALUES
(1, 101, 'Sat', '9AM', '11AM', '425'),
(2, 104, 'Sun', '10:00AM', '11:00AM', '636'),
(4, 104, 'Sat ', '8:30AM', '10AM', '636');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE `teacher_profile` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(45) DEFAULT NULL,
  `teacher_email` varchar(100) DEFAULT NULL,
  `teacher_title` varchar(100) DEFAULT NULL,
  `teacher_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_title`, `teacher_img`) VALUES
(101, 'Dr. Swakkhar Shatabda', 'swakkhar@cse.uiu.ac.bd', 'Professor', '1.jpg'),
(102, 'Dr. Dewan Md. Farid', 'dewanfarid@cse.uiu.ac.bd', 'Professor', '2.jpg'),
(103, 'Mr. Md. Rayhan Ahmed', 'rayhan@cse.uiu.ac.bd', 'Assistant Professor', '3.jpg'),
(104, 'Mr. Tapotosh Ghosh', 'tapotosh@cse.uiu.ac.bd', 'Lecturer', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacherinformation`
--
ALTER TABLE `teacherinformation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacherinformation`
--
ALTER TABLE `teacherinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacherinformation`
--
ALTER TABLE `teacherinformation`
  ADD CONSTRAINT `teacherinformation_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
