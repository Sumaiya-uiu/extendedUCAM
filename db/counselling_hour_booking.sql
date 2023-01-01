-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 04:40 PM
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
-- Table structure for table `counselling_booking`
--

CREATE TABLE `counselling_booking` (
  `counselling_booking_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `counsellingDay` varchar(45) DEFAULT NULL,
  `startTime` varchar(100) DEFAULT NULL,
  `endTime` varchar(100) DEFAULT NULL,
  `counsellingDate` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counselling_booking`
--

INSERT INTO `counselling_booking` (`counselling_booking_id`, `teacher_id`, `counsellingDay`, `startTime`, `endTime`, `counsellingDate`, `course`) VALUES
(5, 102, 'Tue', '1:00', '01:30', '', 'Object Oriented Programming'),
(7, 102, 'Sat ', '1:00', '01:30', '', 'Machine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `teacherinformation`
--

CREATE TABLE `teacherinformation` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `counselling_date` varchar(45) DEFAULT NULL,
  `counselingDay` varchar(45) DEFAULT NULL,
  `startTime` varchar(100) DEFAULT NULL,
  `endTime` varchar(100) DEFAULT NULL,
  `room_Number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherinformation`
--

INSERT INTO `teacherinformation` (`id`, `teacher_id`, `counselling_date`, `counselingDay`, `startTime`, `endTime`, `room_Number`) VALUES
(1, 101, '12/19/2022', 'Sat ', '9:00', '10:00', '430'),
(3, 103, '12/15/2022', 'Sun', '2:00', '4:00', '420'),
(4, 101, '12/20/2022', 'Wed', '9:00', '11:00', '430'),
(5, 102, '12/19/2022', 'Sat ', '1:00', '2:00', '525'),
(6, 102, '12/19/2022', 'Tue', '1:00', '3:00', '525');

-- --------------------------------------------------------

--
-- Table structure for table `teacherunavailable`
--

CREATE TABLE `teacherunavailable` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `start_time` varchar(100) DEFAULT NULL,
  `end_time` varchar(100) DEFAULT NULL,
  `selectDate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

CREATE TABLE `teacher_courses` (
  `teacher_course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_courses`
--

INSERT INTO `teacher_courses` (`teacher_course_id`, `teacher_id`, `course_name`, `section`) VALUES
(1115, 102, 'Object Oriented Programming', 'C'),
(3811, 101, 'Artificial Intelligence', 'B'),
(4883, 101, 'Digital Image Processing', 'A'),
(4889, 102, 'Machine Learning', 'A');

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
-- Indexes for table `counselling_booking`
--
ALTER TABLE `counselling_booking`
  ADD PRIMARY KEY (`counselling_booking_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacherinformation`
--
ALTER TABLE `teacherinformation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacherunavailable`
--
ALTER TABLE `teacherunavailable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD PRIMARY KEY (`teacher_course_id`),
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
-- AUTO_INCREMENT for table `counselling_booking`
--
ALTER TABLE `counselling_booking`
  MODIFY `counselling_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacherinformation`
--
ALTER TABLE `teacherinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacherunavailable`
--
ALTER TABLE `teacherunavailable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  MODIFY `teacher_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4890;

--
-- AUTO_INCREMENT for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counselling_booking`
--
ALTER TABLE `counselling_booking`
  ADD CONSTRAINT `counselling_booking_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacherinformation`
--
ALTER TABLE `teacherinformation`
  ADD CONSTRAINT `teacherinformation_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacherunavailable`
--
ALTER TABLE `teacherunavailable`
  ADD CONSTRAINT `teacherunavailable_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_courses`
--
ALTER TABLE `teacher_courses`
  ADD CONSTRAINT `teacher_courses_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
