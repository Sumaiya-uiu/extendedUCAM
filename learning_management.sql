-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2022 at 12:27 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_code` char(15) NOT NULL,
  `course_name` char(50) DEFAULT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `course_name`) VALUES
('ACT 2111', 'Financial and Managerial Accounting'),
('BAN 2501', 'Bangla'),
('BDS 1201', 'History of the Emergence of Bangladesh'),
('BDS 2201', 'Bangladesh Studies'),
('BIO 3105', 'Biology for Engineers'),
('CSE 1110', 'Introduction to Computer System'),
('CSE 1111', 'Structured Programming Language'),
('CSE 1112', 'Structured Programming Language  Laboratory'),
('CSE 1115', 'Object Oriented Programming'),
('CSE 1116', 'Object Oriented Programming Laboratory'),
('CSE 1325', 'Digital Logic Design'),
('CSE 1326', 'Digital Logic Design Laboratory'),
('CSE 2118', 'Advanced Object Oriented Programming Lab'),
('CSE 2213', 'Discrete Mathematics'),
('CSE 2215', 'Data Structure and Algorithms I'),
('CSE 2216', 'Data Structure and Algorithms I  Laboratory'),
('CSE 2217', 'Data Structure and Algorithms II'),
('CSE 2218', 'Data Structure and Algorithms II Laboratory'),
('CSE 2233', 'Theory of Computation'),
('CSE 3313', 'Computer Architecture'),
('CSE 3411', 'System Analysis and Design'),
('CSE 3412', 'System Analysis and Design Laboratory'),
('CSE 3421', 'Software Engineering'),
('CSE 3422', 'Software Engineering Laboratory'),
('CSE 3521', 'Database Management Systems'),
('CSE 3522', 'Database Management Systems Laboratory'),
('CSE 3711', 'Computer Networks'),
('CSE 3712', 'Computer Networks Laboratory'),
('CSE 3715', 'Data Communication'),
('CSE 3811', 'Artificial Intelligence'),
('CSE 3812', 'Artificial Intelligence Laboratory'),
('CSE 4000A', 'Final Year Design Project – I'),
('CSE 4000B', 'Final Year Design Project – II'),
('CSE 4165', 'Web Programming'),
('CSE 4181', 'Mobile Application Development'),
('CSE 4325', 'Microprocessors and Microcontrollers'),
('CSE 4326', 'Microprocessors and Microcontrollers Laboratory'),
('CSE 4327', 'VLSI Design'),
('CSE 4329', 'Digital System Design'),
('CSE 4337', 'Robotics'),
('CSE 4379', 'Real-time Embedded Systems'),
('CSE 4435', 'Software Architecture'),
('CSE 4451', 'Human Computer Interaction'),
('CSE 44567', 'Advanced Database Management Systems'),
('CSE 4463', 'Electronic Business'),
('CSE 4485', 'Game Design and Development'),
('CSE 4495', 'Software Testing and Quality Assurance'),
('CSE 4497', 'Interfacing'),
('CSE 4509', 'Operating Systems'),
('CSE 4510', 'Operating Systems Laboratory'),
('CSE 4519', 'Distributed Systems'),
('CSE 4521', 'Computer Graphics'),
('CSE 4523', 'Simulation and Modeling'),
('CSE 4531', 'Computer Security'),
('CSE 4547', 'Multimedia Systems Design'),
('CSE 4587', 'Cloud Computing'),
('CSE 4601', 'Mathematical Analysis for Computer Science'),
('CSE 4611', 'Compiler Design'),
('CSE 4612', 'Computer Graphics'),
('CSE 4613', 'Computational Geometry'),
('CSE 4633', 'Basic Graph Theory'),
('CSE 4655', 'Algorithm Engineering'),
('CSE 4759', 'Wireless and Cellular Communication'),
('CSE 4763', 'Electronic Business'),
('CSE 4777', 'Networks Security'),
('CSE 4783', 'Cryptography'),
('CSE 4793', 'Advanced Network Services and Management'),
('CSE 4817', 'Big Data Analytics'),
('CSE 4883', 'Digital Image Processing'),
('CSE 4889', 'Machine Learning'),
('CSE 4891', 'Data Mining'),
('CSE 4893', 'Introduction to Bioinformatics'),
('CSE 4941', 'Enterprise Systems: Concepts and Practice'),
('CSE 4943', 'Web Application Security'),
('CSE 4945', 'UI: Concepts and Design'),
('CSE 4949', 'IT Audit: Concepts and Practice'),
('ECO 4101', 'Economics'),
('EEE 2113', 'Electrical Circuits'),
('EEE 2123', 'Electronics'),
('EEE 2124', 'Electronics Laboratory'),
('EEE 4261', 'Green Computing'),
('ENG 1011', 'Intensive English I'),
('ENG 1013', 'Intensive English II'),
('IPE 3401', 'Industrial and Operational Management'),
('MATH 1151', 'Fundamental Calculus'),
('MATH 2183', 'Calculus and Linear Algebra'),
('MATH 2201', 'Coordinate Geometry and Vector Analysis'),
('MATH 2205', 'Probability and Statistics'),
('PHY 2105', 'Physics'),
('PHY 2106', 'Physics Laboratory'),
('PMG 4101', 'Project Management'),
('SOC 2101', 'Society, Environment and Engineering Ethics'),
('TEC 2499', 'Technology Entrepreneurship'),
('URC 11037', 'Life Skills for Success');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_section`
--

INSERT INTO `course_section` (`course_id`, `section_name`, `course_code`) VALUES
(1, 'A', 'CSE 1111'),
(2, 'B', 'CSE 1111'),
(3, 'A', 'CSE 1115'),
(4, 'A', 'ACT 2111'),
(5, 'A', 'BAN 2501'),
(6, 'A', 'BIO 3105');

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
(6, 12, 13.3, 4);

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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course_section`
--

INSERT INTO `student_course_section` (`student_course_section_id`, `student_id`, `course_id`) VALUES
(2, '011191002', 4),
(28, '011191002', 6);

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
