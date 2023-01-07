-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2022 at 01:43 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_management`
--
CREATE DATABASE IF NOT EXISTS `learning_management` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `learning_management`;

-- --------------------------------------------------------

--
-- Table structure for table `counselling_booking`
--

DROP TABLE IF EXISTS `counselling_booking`;
CREATE TABLE IF NOT EXISTS `counselling_booking` (
  `counselling_booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `counsellingDay` varchar(45) DEFAULT NULL,
  `startTime` varchar(100) DEFAULT NULL,
  `endTime` varchar(100) DEFAULT NULL,
  `counsellingDate` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`counselling_booking_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselling_booking`
--

INSERT INTO `counselling_booking` (`counselling_booking_id`, `teacher_id`, `counsellingDay`, `startTime`, `endTime`, `counsellingDate`, `course`) VALUES
(5, 102, 'Tue', '1:00', '01:30', '', 'Object Oriented Programming'),
(7, 102, 'Sat ', '1:00', '01:30', '', 'Machine Learning');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_code` char(15) NOT NULL,
  `course_name` char(50) DEFAULT NULL,
  `required_approval` int(11) DEFAULT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_name`, `required_approval`) VALUES
('ACT 2111', 'Financial and Managerial Accounting', NULL),
('BAN 2501', 'Bangla', NULL),
('BDS 1201', 'History of the Emergence of Bangladesh', NULL),
('BDS 2201', 'Bangladesh Studies', NULL),
('BIO 3105', 'Biology for Engineers', NULL),
('CSE 1110', 'Introduction to Computer System', NULL),
('CSE 1111', 'Structured Programming Language', NULL),
('CSE 1112', 'Structured Programming Language  Laboratory', NULL),
('CSE 1115', 'Object Oriented Programming', NULL),
('CSE 1116', 'Object Oriented Programming Laboratory', NULL),
('CSE 1325', 'Digital Logic Design', NULL),
('CSE 1326', 'Digital Logic Design Laboratory', NULL),
('CSE 2118', 'Advanced Object Oriented Programming Lab', NULL),
('CSE 2213', 'Discrete Mathematics', NULL),
('CSE 2215', 'Data Structure and Algorithms I', NULL),
('CSE 2216', 'Data Structure and Algorithms I  Laboratory', NULL),
('CSE 2217', 'Data Structure and Algorithms II', NULL),
('CSE 2218', 'Data Structure and Algorithms II Laboratory', NULL),
('CSE 2233', 'Theory of Computation', NULL),
('CSE 3313', 'Computer Architecture', NULL),
('CSE 3411', 'System Analysis and Design', NULL),
('CSE 3412', 'System Analysis and Design Laboratory', NULL),
('CSE 3421', 'Software Engineering', NULL),
('CSE 3422', 'Software Engineering Laboratory', NULL),
('CSE 3521', 'Database Management Systems', NULL),
('CSE 3522', 'Database Management Systems Laboratory', NULL),
('CSE 3711', 'Computer Networks', NULL),
('CSE 3712', 'Computer Networks Laboratory', NULL),
('CSE 3715', 'Data Communication', NULL),
('CSE 3811', 'Artificial Intelligence', NULL),
('CSE 3812', 'Artificial Intelligence Laboratory', NULL),
('CSE 4000A', 'Final Year Design Project – I', 1),
('CSE 4000B', 'Final Year Design Project – II', 1),
('CSE 4165', 'Web Programming', NULL),
('CSE 4181', 'Mobile Application Development', NULL),
('CSE 4325', 'Microprocessors and Microcontrollers', NULL),
('CSE 4326', 'Microprocessors and Microcontrollers Laboratory', NULL),
('CSE 4327', 'VLSI Design', NULL),
('CSE 4329', 'Digital System Design', NULL),
('CSE 4337', 'Robotics', NULL),
('CSE 4379', 'Real-time Embedded Systems', NULL),
('CSE 4435', 'Software Architecture', NULL),
('CSE 4451', 'Human Computer Interaction', NULL),
('CSE 44567', 'Advanced Database Management Systems', NULL),
('CSE 4463', 'Electronic Business', NULL),
('CSE 4485', 'Game Design and Development', NULL),
('CSE 4495', 'Software Testing and Quality Assurance', NULL),
('CSE 4497', 'Interfacing', NULL),
('CSE 4509', 'Operating Systems', NULL),
('CSE 4510', 'Operating Systems Laboratory', NULL),
('CSE 4519', 'Distributed Systems', NULL),
('CSE 4521', 'Computer Graphics', NULL),
('CSE 4523', 'Simulation and Modeling', NULL),
('CSE 4531', 'Computer Security', NULL),
('CSE 4547', 'Multimedia Systems Design', NULL),
('CSE 4587', 'Cloud Computing', NULL),
('CSE 4601', 'Mathematical Analysis for Computer Science', NULL),
('CSE 4611', 'Compiler Design', NULL),
('CSE 4612', 'Computer Graphics', NULL),
('CSE 4613', 'Computational Geometry', NULL),
('CSE 4633', 'Basic Graph Theory', NULL),
('CSE 4655', 'Algorithm Engineering', NULL),
('CSE 4759', 'Wireless and Cellular Communication', NULL),
('CSE 4763', 'Electronic Business', NULL),
('CSE 4777', 'Networks Security', NULL),
('CSE 4783', 'Cryptography', NULL),
('CSE 4793', 'Advanced Network Services and Management', NULL),
('CSE 4817', 'Big Data Analytics', NULL),
('CSE 4883', 'Digital Image Processing', NULL),
('CSE 4889', 'Machine Learning', NULL),
('CSE 4891', 'Data Mining', NULL),
('CSE 4893', 'Introduction to Bioinformatics', NULL),
('CSE 4941', 'Enterprise Systems: Concepts and Practice', NULL),
('CSE 4943', 'Web Application Security', NULL),
('CSE 4945', 'UI: Concepts and Design', NULL),
('CSE 4949', 'IT Audit: Concepts and Practice', NULL),
('ECO 4101', 'Economics', NULL),
('EEE 2113', 'Electrical Circuits', NULL),
('EEE 2123', 'Electronics', NULL),
('EEE 2124', 'Electronics Laboratory', NULL),
('EEE 4261', 'Green Computing', NULL),
('ENG 1011', 'Intensive English I', NULL),
('ENG 1013', 'Intensive English II', NULL),
('IPE 3401', 'Industrial and Operational Management', NULL),
('MATH 1151', 'Fundamental Calculus', NULL),
('MATH 2183', 'Calculus and Linear Algebra', NULL),
('MATH 2201', 'Coordinate Geometry and Vector Analysis', NULL),
('MATH 2205', 'Probability and Statistics', NULL),
('PHY 2105', 'Physics', NULL),
('PHY 2106', 'Physics Laboratory', NULL),
('PMG 4101', 'Project Management', NULL),
('SOC 2101', 'Society, Environment and Engineering Ethics', NULL),
('TEC 2499', 'Technology Entrepreneurship', NULL),
('URC 11037', 'Life Skills for Success', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_prerequisite`
--

DROP TABLE IF EXISTS `course_prerequisite`;
CREATE TABLE IF NOT EXISTS `course_prerequisite` (
  `course_code` char(15) DEFAULT NULL,
  `prerequisite_course_code` char(15) DEFAULT NULL,
  KEY `course_code` (`course_code`),
  KEY `prerequisite_course_code` (`prerequisite_course_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_prerequisite`
--

INSERT INTO `course_prerequisite` (`course_code`, `prerequisite_course_code`) VALUES
('CSE 1115', 'CSE 1111');

-- --------------------------------------------------------

--
-- Table structure for table `course_section`
--

DROP TABLE IF EXISTS `course_section`;
CREATE TABLE IF NOT EXISTS `course_section` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `section_name` char(10) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL,
  PRIMARY KEY (`course_id`),
  KEY `course_code` (`course_code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_section`
--

INSERT INTO `course_section` (`course_id`, `section_name`, `course_code`) VALUES
(1, 'A', 'CSE 1111'),
(2, 'B', 'CSE 1111'),
(3, 'A', 'CSE 1115'),
(4, 'A', 'ACT 2111'),
(5, 'A', 'BAN 2501'),
(6, 'A', 'BIO 3105'),
(7, 'A', 'CSE 4000A');

-- --------------------------------------------------------

--
-- Table structure for table `course_section_time`
--

DROP TABLE IF EXISTS `course_section_time`;
CREATE TABLE IF NOT EXISTS `course_section_time` (
  `course_id` int(11) DEFAULT NULL,
  `starting_time` float DEFAULT NULL,
  `ending_time` float DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_section_time`
--

INSERT INTO `course_section_time` (`course_id`, `starting_time`, `ending_time`, `day`) VALUES
(1, 11, 12.3, 1),
(1, 11, 12.3, 3),
(2, 10.3, 12, 3),
(2, 10, 11.3, 5),
(3, 9, 10.3, 3),
(4, 9, 10.3, 1),
(5, 9, 10.3, 1),
(6, 12, 13.3, 4),
(7, 15, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `helper`
--

DROP TABLE IF EXISTS `helper`;
CREATE TABLE IF NOT EXISTS `helper` (
  `student_id` char(15) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL,
  KEY `student_id` (`student_id`),
  KEY `course_code` (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helper`
--

INSERT INTO `helper` (`student_id`, `course_code`) VALUES
('011191003', 'CSE 1112'),
('011191009', 'CSE 1111');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` char(15) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `phone_no` char(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `phone_no`, `password`) VALUES
('011191001', 'Spondon Islam', 'spondon@gmail.com', '01234567899', 'abcd'),
('011191002', 'Juairia', 'juairia@gmail.com', '01753023763', '12345'),
('011191003', 'Ritu', 'ritu@gmail.com', '01753029963', NULL),
('011191004', 'kamal', 'kamal@gmail.com', '01753021113', NULL),
('011191005', 'Mitu', 'mitu@gmail.com', '01113029963', NULL),
('011191006', 'Nitu', 'nitu@gmail.com', '01333029963', NULL),
('011191007', 'Jitu', 'jitu@gmail.com', '01353029963', NULL),
('011191008', 'Titu', 'titu@gmail.com', '0175369963', NULL),
('011191009', 'Amit', 'amit@gmail.com', '0189898922', NULL),
('011191010', 'Promit', 'promit@gmail.com', '0189998922', NULL),
('011191011', 'Dipto', 'dipto@gmail.com', '0189998922', NULL),
('011191012', 'Sagor', 'sagor@gmail.com', '0189828922', NULL),
('011191013', 'Mainul', 'mainul@gmail.com', '0129898922', NULL),
('011191014', 'Sara', 'sara@gmail.com', '0183898922', NULL),
('011191015', 'Biva', 'biva@gmail.com', '0189898972', NULL),
('011191016', 'Rhit', 'rhit@gmail.com', '0189898927', NULL),
('011191017', 'Borsha', 'borsha@gmail.com', '0177778922', NULL),
('011191018', 'Ali', 'ali@gmail.com', '0166898922', NULL),
('011191019', 'Shuvo', 'shuvo@gmail.com', '0155898922', NULL),
('011191020', 'Naimul', 'naimul@gmail.com', '0189898962', NULL),
('011191021', 'Puja', 'puja@gmail.com', '0189897622', NULL),
('011191022', 'Dia', 'Dia@gmail.com', '0189898972', NULL),
('011191023', 'Niloy', 'niloy@gmail.com', '0189898002', NULL),
('011191024', 'Rifat', 'rifat@gmail.com', '0189899992', NULL),
('011191025', 'Rafi', 'rafi@gmail.com', '0189897822', NULL),
('011191026', 'Sami', 'sami@gmail.com', '0182222922', NULL),
('011191027', 'Fahim', 'fahim@gmail.com', '01811198922', NULL),
('011191028', 'Sharita', 'sharita@gmail.com', '0111198922', NULL),
('011191029', 'Orthy', 'orthy@gmail.com', '0122898922', NULL),
('011191030', 'Amitra', 'amitra@gmail.com', '018982922', NULL),
('011191031', 'Amita', 'amita@gmail.com', '0189899922', NULL),
('011191033', 'Riya', 'riya@gmail.com', '0189899902', NULL),
('011191034', 'Priya', 'priya@gmail.com', '0189099902', NULL),
('011191035', 'Piya', 'piya@gmail.com', '0189899907', NULL),
('011191036', 'Riya', 'riya@gmail.com', '0189899933', NULL),
('011191037', 'Wakiya', 'wakiya@gmail.com', '0189899944', NULL),
('011191038', 'Fatia', 'fatia@gmail.com', '0189899955', NULL),
('011191039', 'Sumkiaa', 'sumkiaa@gmail.com', '0189899966', NULL),
('011191040', 'Keya', 'keya@gmail.com', '0189899977', NULL),
('011191041', 'Arefin', 'arefina@gmail.com', '0189899977', NULL),
('011191042', 'Aapta', 'aapta@gmail.com', '0189899977', NULL),
('011191043', 'Sabuj', 'sabuj@gmail.com', '0111899977', NULL),
('011191044', 'Keya', 'maun@gmail.com', '0122899977', NULL),
('011191045', 'Maun', 'keya@gmail.com', '0133899977', NULL),
('011191046', 'Ava', 'ava@gmail.com', '0133399977', NULL),
('011191047', 'Fatema', 'fatemaa@gmail.com', '0189559977', NULL),
('011191048', 'Musa', 'musaa@gmail.com', '0189444477', NULL),
('011191049', 'Irin', 'irin@gmail.com', '0189800977', NULL),
('011191050', 'Rejab', 'rejab@gmail.com', '0189899977', NULL),
('011191051', 'refin', 'refina@gmail.com', '0109899977', NULL),
('011191052', 'Rapta', 'rapta@gmail.com', '0389899977', NULL),
('011191053', 'Mabuj', 'mabuj@gmail.com', '0311899977', NULL),
('011191054', 'Preya', 'preya@gmail.com', '0123899977', NULL),
('011191055', 'Mamuun', 'maaun@gmail.com', '0134899977', NULL),
('011191056', 'Avni', 'avnia@gmail.com', '0133309977', NULL),
('011191057', 'Fahema', 'fahemaa@gmail.com', '0191559977', NULL),
('011191058', 'Musafi', 'musaafi@gmail.com', '0189488477', NULL),
('011191059', 'Irina', 'irina@gmail.com', '0189805577', NULL),
('011191060', 'Rejib', 'rejib@gmail.com', '0189559977', NULL),
('011191061', 'Aran', 'arana@gmail.com', '0149899977', NULL),
('011191062', 'Supti', 'supti@gmail.com', '018959977', NULL),
('011191063', 'Munmun', 'munmun@gmail.com', '0110099977', NULL),
('011191064', 'Joti', 'joti@gmail.com', '0122800977', NULL),
('011191065', 'Sezan', 'sezan@gmail.com', '0133894977', NULL),
('011191066', 'Mim', 'mim@gmail.com', '0133399907', NULL),
('011191067', 'Meem', 'Meem@gmail.com', '0289559977', NULL),
('011191068', 'Masafi', 'masaa@gmail.com', '0189424477', NULL),
('011191069', 'Irinaa', 'irinaa@gmail.com', '0189802977', NULL),
('011191070', 'Wejab', 'Wejab@gmail.com', '01898299977', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_course_section`
--

DROP TABLE IF EXISTS `student_course_section`;
CREATE TABLE IF NOT EXISTS `student_course_section` (
  `student_course_section_id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(15) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_course_section_id`),
  KEY `student_id` (`student_id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course_section`
--

INSERT INTO `student_course_section` (`student_course_section_id`, `student_id`, `course_id`) VALUES
(39, '011191002', 3),
(38, '011191002', 1),
(41, '011191002', 7);

-- --------------------------------------------------------

--
-- Table structure for table `teacherinformation`
--

DROP TABLE IF EXISTS `teacherinformation`;
CREATE TABLE IF NOT EXISTS `teacherinformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `counselling_date` varchar(45) DEFAULT NULL,
  `counselingDay` varchar(45) DEFAULT NULL,
  `startTime` varchar(100) DEFAULT NULL,
  `endTime` varchar(100) DEFAULT NULL,
  `room_Number` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

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

DROP TABLE IF EXISTS `teacherunavailable`;
CREATE TABLE IF NOT EXISTS `teacherunavailable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `start_time` varchar(100) DEFAULT NULL,
  `end_time` varchar(100) DEFAULT NULL,
  `selectDate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_courses`
--

DROP TABLE IF EXISTS `teacher_courses`;
CREATE TABLE IF NOT EXISTS `teacher_courses` (
  `teacher_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`teacher_course_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4890 DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `teacher_notification`
--

DROP TABLE IF EXISTS `teacher_notification`;
CREATE TABLE IF NOT EXISTS `teacher_notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`notification_id`),
  KEY `student_id` (`student_id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

DROP TABLE IF EXISTS `teacher_profile`;
CREATE TABLE IF NOT EXISTS `teacher_profile` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(45) DEFAULT NULL,
  `teacher_email` varchar(100) DEFAULT NULL,
  `teacher_title` varchar(100) DEFAULT NULL,
  `teacher_img` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_title`, `teacher_img`, `password`) VALUES
(101, 'Dr. Swakkhar Shatabda', 'swakkhar@cse.uiu.ac.bd', 'Professor', '1.jpg', '12345'),
(102, 'Dr. Dewan Md. Farid', 'dewanfarid@cse.uiu.ac.bd', 'Professor', '2.jpg', NULL),
(103, 'Mr. Md. Rayhan Ahmed', 'rayhan@cse.uiu.ac.bd', 'Assistant Professor', '3.jpg', NULL),
(104, 'Mr. Tapotosh Ghosh', 'tapotosh@cse.uiu.ac.bd', 'Lecturer', '4.jpg', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counselling_booking`
--
ALTER TABLE `counselling_booking`
  ADD CONSTRAINT `counselling_booking_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher_profile` (`teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_section`
--
ALTER TABLE `course_section`
  ADD CONSTRAINT `course_section_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

--
-- Constraints for table `helper`
--
ALTER TABLE `helper`
  ADD CONSTRAINT `helper_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `helper_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);

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
