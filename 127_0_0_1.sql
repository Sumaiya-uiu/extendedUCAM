-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 01:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_ticket_management`
--
CREATE DATABASE IF NOT EXISTS `bus_ticket_management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bus_ticket_management`;

-- --------------------------------------------------------

--
-- Table structure for table `ticketbooking`
--

CREATE TABLE `ticketbooking` (
  `ID` int(10) NOT NULL,
  `NAME` char(50) DEFAULT NULL,
  `APPT_DATE` char(30) DEFAULT NULL,
  `FROM_LOCATION` char(50) DEFAULT NULL,
  `TO_LOCATION` char(50) DEFAULT NULL,
  `STATUS` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketbooking`
--

INSERT INTO `ticketbooking` (`ID`, `NAME`, `APPT_DATE`, `FROM_LOCATION`, `TO_LOCATION`, `STATUS`) VALUES
(2, 'theaaa', '22', '24', '25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `hr_leave`
--
CREATE DATABASE IF NOT EXISTS `hr_leave` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hr_leave`;

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `Employee_ID` int(10) NOT NULL,
  `Employee_Name` char(40) DEFAULT NULL,
  `Leave_Application_Date` char(20) DEFAULT NULL,
  `Leave_Request_Date` char(20) DEFAULT NULL,
  `Leave_Approval_Date` char(20) DEFAULT NULL,
  `Cause_Of_Leave` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `Employee_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- Database: `learning_managemant`
--
CREATE DATABASE IF NOT EXISTS `learning_managemant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `learning_managemant`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` char(15) NOT NULL,
  `course_name` char(50) DEFAULT NULL
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
-- Table structure for table `course_section`
--

CREATE TABLE `course_section` (
  `course_id` int(10) NOT NULL,
  `section_name` char(10) DEFAULT NULL,
  `starting_time` float DEFAULT NULL,
  `ending_time` float DEFAULT NULL,
  `day1` char(15) DEFAULT NULL,
  `day2` char(15) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `helper`
--

CREATE TABLE `helper` (
  `student_id` char(15) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` char(15) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `phone_no` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `phone_no`) VALUES
('011191001', 'Spondon Islam', 'spondon@gmail.com', '01234567899'),
('011191002', 'Juairia', 'juairia@gmail.com', '01753023763'),
('011191003', 'Ritu', 'ritu@gmail.com', '01753029963'),
('011191004', 'kamal', 'kamal@gmail.com', '01753021113'),
('011191005', 'Mitu', 'mitu@gmail.com', '01113029963'),
('011191006', 'Nitu', 'nitu@gmail.com', '01333029963'),
('011191007', 'Jitu', 'jitu@gmail.com', '01353029963'),
('011191008', 'Titu', 'titu@gmail.com', '0175369963'),
('011191009', 'Amit', 'amit@gmail.com', '0189898922'),
('011191010', 'Promit', 'promit@gmail.com', '0189998922'),
('011191011', 'Dipto', 'dipto@gmail.com', '0189998922'),
('011191012', 'Sagor', 'sagor@gmail.com', '0189828922'),
('011191013', 'Mainul', 'mainul@gmail.com', '0129898922'),
('011191014', 'Sara', 'sara@gmail.com', '0183898922'),
('011191015', 'Biva', 'biva@gmail.com', '0189898972'),
('011191016', 'Rhit', 'rhit@gmail.com', '0189898927'),
('011191017', 'Borsha', 'borsha@gmail.com', '0177778922'),
('011191018', 'Ali', 'ali@gmail.com', '0166898922'),
('011191019', 'Shuvo', 'shuvo@gmail.com', '0155898922'),
('011191020', 'Naimul', 'naimul@gmail.com', '0189898962'),
('011191021', 'Puja', 'puja@gmail.com', '0189897622'),
('011191022', 'Dia', 'Dia@gmail.com', '0189898972'),
('011191023', 'Niloy', 'niloy@gmail.com', '0189898002'),
('011191024', 'Rifat', 'rifat@gmail.com', '0189899992'),
('011191025', 'Rafi', 'rafi@gmail.com', '0189897822'),
('011191026', 'Sami', 'sami@gmail.com', '0182222922'),
('011191027', 'Fahim', 'fahim@gmail.com', '01811198922'),
('011191028', 'Sharita', 'sharita@gmail.com', '0111198922'),
('011191029', 'Orthy', 'orthy@gmail.com', '0122898922'),
('011191030', 'Amitra', 'amitra@gmail.com', '018982922'),
('011191031', 'Amita', 'amita@gmail.com', '0189899922'),
('011191033', 'Riya', 'riya@gmail.com', '0189899902'),
('011191034', 'Priya', 'priya@gmail.com', '0189099902'),
('011191035', 'Piya', 'piya@gmail.com', '0189899907'),
('011191036', 'Riya', 'riya@gmail.com', '0189899933'),
('011191037', 'Wakiya', 'wakiya@gmail.com', '0189899944'),
('011191038', 'Fatia', 'fatia@gmail.com', '0189899955'),
('011191039', 'Sumkiaa', 'sumkiaa@gmail.com', '0189899966'),
('011191040', 'Keya', 'keya@gmail.com', '0189899977'),
('011191041', 'Arefin', 'arefina@gmail.com', '0189899977'),
('011191042', 'Aapta', 'aapta@gmail.com', '0189899977'),
('011191043', 'Sabuj', 'sabuj@gmail.com', '0111899977'),
('011191044', 'Keya', 'maun@gmail.com', '0122899977'),
('011191045', 'Maun', 'keya@gmail.com', '0133899977'),
('011191046', 'Ava', 'ava@gmail.com', '0133399977'),
('011191047', 'Fatema', 'fatemaa@gmail.com', '0189559977'),
('011191048', 'Musa', 'musaa@gmail.com', '0189444477'),
('011191049', 'Irin', 'irin@gmail.com', '0189800977'),
('011191050', 'Rejab', 'rejab@gmail.com', '0189899977'),
('011191051', 'refin', 'refina@gmail.com', '0109899977'),
('011191052', 'Rapta', 'rapta@gmail.com', '0389899977'),
('011191053', 'Mabuj', 'mabuj@gmail.com', '0311899977'),
('011191054', 'Preya', 'preya@gmail.com', '0123899977'),
('011191055', 'Mamuun', 'maaun@gmail.com', '0134899977'),
('011191056', 'Avni', 'avnia@gmail.com', '0133309977'),
('011191057', 'Fahema', 'fahemaa@gmail.com', '0191559977'),
('011191058', 'Musafi', 'musaafi@gmail.com', '0189488477'),
('011191059', 'Irina', 'irina@gmail.com', '0189805577'),
('011191060', 'Rejib', 'rejib@gmail.com', '0189559977'),
('011191061', 'Aran', 'arana@gmail.com', '0149899977'),
('011191062', 'Supti', 'supti@gmail.com', '018959977'),
('011191063', 'Munmun', 'munmun@gmail.com', '0110099977'),
('011191064', 'Joti', 'joti@gmail.com', '0122800977'),
('011191065', 'Sezan', 'sezan@gmail.com', '0133894977'),
('011191066', 'Mim', 'mim@gmail.com', '0133399907'),
('011191067', 'Meem', 'Meem@gmail.com', '0289559977'),
('011191068', 'Masafi', 'masaa@gmail.com', '0189424477'),
('011191069', 'Irinaa', 'irinaa@gmail.com', '0189802977'),
('011191070', 'Wejab', 'Wejab@gmail.com', '01898299977');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_section`
--

CREATE TABLE `student_course_section` (
  `student_course_section_id` int(10) NOT NULL,
  `student_id` char(15) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `course_section`
--
ALTER TABLE `course_section`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `helper`
--
ALTER TABLE `helper`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_course_section`
--
ALTER TABLE `student_course_section`
  ADD PRIMARY KEY (`student_course_section_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_code` (`course_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_section`
--
ALTER TABLE `course_section`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_course_section`
--
ALTER TABLE `student_course_section`
  MODIFY `student_course_section_id` int(10) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `student_course_section`
--
ALTER TABLE `student_course_section`
  ADD CONSTRAINT `student_course_section_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `student_course_section_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);
--
-- Database: `learning_management`
--
CREATE DATABASE IF NOT EXISTS `learning_management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `learning_management`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_code` char(15) NOT NULL,
  `course_name` char(50) DEFAULT NULL
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
-- Table structure for table `course_section`
--

CREATE TABLE `course_section` (
  `course_id` int(10) NOT NULL,
  `section_name` char(10) DEFAULT NULL,
  `starting_time` float DEFAULT NULL,
  `ending_time` float DEFAULT NULL,
  `day1` char(15) DEFAULT NULL,
  `day2` char(15) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `helper`
--

CREATE TABLE `helper` (
  `student_id` char(15) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL
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

CREATE TABLE `student` (
  `student_id` char(15) NOT NULL,
  `name` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `phone_no` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `phone_no`) VALUES
('011191001', 'Spondon Islam', 'spondon@gmail.com', '01234567899'),
('011191002', 'Juairia', 'juairia@gmail.com', '01753023763'),
('011191003', 'Ritu', 'ritu@gmail.com', '01753029963'),
('011191004', 'kamal', 'kamal@gmail.com', '01753021113'),
('011191005', 'Mitu', 'mitu@gmail.com', '01113029963'),
('011191006', 'Nitu', 'nitu@gmail.com', '01333029963'),
('011191007', 'Jitu', 'jitu@gmail.com', '01353029963'),
('011191008', 'Titu', 'titu@gmail.com', '0175369963'),
('011191009', 'Amit', 'amit@gmail.com', '0189898922'),
('011191010', 'Promit', 'promit@gmail.com', '0189998922'),
('011191011', 'Dipto', 'dipto@gmail.com', '0189998922'),
('011191012', 'Sagor', 'sagor@gmail.com', '0189828922'),
('011191013', 'Mainul', 'mainul@gmail.com', '0129898922'),
('011191014', 'Sara', 'sara@gmail.com', '0183898922'),
('011191015', 'Biva', 'biva@gmail.com', '0189898972'),
('011191016', 'Rhit', 'rhit@gmail.com', '0189898927'),
('011191017', 'Borsha', 'borsha@gmail.com', '0177778922'),
('011191018', 'Ali', 'ali@gmail.com', '0166898922'),
('011191019', 'Shuvo', 'shuvo@gmail.com', '0155898922'),
('011191020', 'Naimul', 'naimul@gmail.com', '0189898962'),
('011191021', 'Puja', 'puja@gmail.com', '0189897622'),
('011191022', 'Dia', 'Dia@gmail.com', '0189898972'),
('011191023', 'Niloy', 'niloy@gmail.com', '0189898002'),
('011191024', 'Rifat', 'rifat@gmail.com', '0189899992'),
('011191025', 'Rafi', 'rafi@gmail.com', '0189897822'),
('011191026', 'Sami', 'sami@gmail.com', '0182222922'),
('011191027', 'Fahim', 'fahim@gmail.com', '01811198922'),
('011191028', 'Sharita', 'sharita@gmail.com', '0111198922'),
('011191029', 'Orthy', 'orthy@gmail.com', '0122898922'),
('011191030', 'Amitra', 'amitra@gmail.com', '018982922'),
('011191031', 'Amita', 'amita@gmail.com', '0189899922'),
('011191033', 'Riya', 'riya@gmail.com', '0189899902'),
('011191034', 'Priya', 'priya@gmail.com', '0189099902'),
('011191035', 'Piya', 'piya@gmail.com', '0189899907'),
('011191036', 'Riya', 'riya@gmail.com', '0189899933'),
('011191037', 'Wakiya', 'wakiya@gmail.com', '0189899944'),
('011191038', 'Fatia', 'fatia@gmail.com', '0189899955'),
('011191039', 'Sumkiaa', 'sumkiaa@gmail.com', '0189899966'),
('011191040', 'Keya', 'keya@gmail.com', '0189899977'),
('011191041', 'Arefin', 'arefina@gmail.com', '0189899977'),
('011191042', 'Aapta', 'aapta@gmail.com', '0189899977'),
('011191043', 'Sabuj', 'sabuj@gmail.com', '0111899977'),
('011191044', 'Keya', 'maun@gmail.com', '0122899977'),
('011191045', 'Maun', 'keya@gmail.com', '0133899977'),
('011191046', 'Ava', 'ava@gmail.com', '0133399977'),
('011191047', 'Fatema', 'fatemaa@gmail.com', '0189559977'),
('011191048', 'Musa', 'musaa@gmail.com', '0189444477'),
('011191049', 'Irin', 'irin@gmail.com', '0189800977'),
('011191050', 'Rejab', 'rejab@gmail.com', '0189899977'),
('011191051', 'refin', 'refina@gmail.com', '0109899977'),
('011191052', 'Rapta', 'rapta@gmail.com', '0389899977'),
('011191053', 'Mabuj', 'mabuj@gmail.com', '0311899977'),
('011191054', 'Preya', 'preya@gmail.com', '0123899977'),
('011191055', 'Mamuun', 'maaun@gmail.com', '0134899977'),
('011191056', 'Avni', 'avnia@gmail.com', '0133309977'),
('011191057', 'Fahema', 'fahemaa@gmail.com', '0191559977'),
('011191058', 'Musafi', 'musaafi@gmail.com', '0189488477'),
('011191059', 'Irina', 'irina@gmail.com', '0189805577'),
('011191060', 'Rejib', 'rejib@gmail.com', '0189559977'),
('011191061', 'Aran', 'arana@gmail.com', '0149899977'),
('011191062', 'Supti', 'supti@gmail.com', '018959977'),
('011191063', 'Munmun', 'munmun@gmail.com', '0110099977'),
('011191064', 'Joti', 'joti@gmail.com', '0122800977'),
('011191065', 'Sezan', 'sezan@gmail.com', '0133894977'),
('011191066', 'Mim', 'mim@gmail.com', '0133399907'),
('011191067', 'Meem', 'Meem@gmail.com', '0289559977'),
('011191068', 'Masafi', 'masaa@gmail.com', '0189424477'),
('011191069', 'Irinaa', 'irinaa@gmail.com', '0189802977'),
('011191070', 'Wejab', 'Wejab@gmail.com', '01898299977');

-- --------------------------------------------------------

--
-- Table structure for table `student_course_section`
--

CREATE TABLE `student_course_section` (
  `student_course_section_id` int(10) NOT NULL,
  `student_id` char(15) DEFAULT NULL,
  `course_code` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `course_section`
--
ALTER TABLE `course_section`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `helper`
--
ALTER TABLE `helper`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_course_section`
--
ALTER TABLE `student_course_section`
  ADD PRIMARY KEY (`student_course_section_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_code` (`course_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_section`
--
ALTER TABLE `course_section`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_course_section`
--
ALTER TABLE `student_course_section`
  MODIFY `student_course_section_id` int(10) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `student_course_section`
--
ALTER TABLE `student_course_section`
  ADD CONSTRAINT `student_course_section_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `student_course_section_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`);
--
-- Database: `leave_management`
--
CREATE DATABASE IF NOT EXISTS `leave_management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `leave_management`;

-- --------------------------------------------------------

--
-- Table structure for table `leave_enrty`
--

CREATE TABLE `leave_enrty` (
  `ID` int(10) NOT NULL,
  `NAME` char(15) DEFAULT NULL,
  `LEAVE_START` char(30) DEFAULT NULL,
  `LEAVE_END` char(30) DEFAULT NULL,
  `STATUS` char(30) DEFAULT NULL,
  `REMARKS` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_enrty`
--

INSERT INTO `leave_enrty` (`ID`, `NAME`, `LEAVE_START`, `LEAVE_END`, `STATUS`, `REMARKS`) VALUES
(1, 'thea', '12', '14', 'REJECTED', 'hmm'),
(2, 'Juairia', '', '', 'APPROVED', ''),
(3, 'jani a', 'aa', 'ss', 'APPROVED', 'ss'),
(4, 'ss', '33', '2', 'PENDING', ''),
(5, 'ccc', 'cc', 's', 'PENDING', ''),
(6, '', '', '', 'PENDING', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leave_enrty`
--
ALTER TABLE `leave_enrty`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leave_enrty`
--
ALTER TABLE `leave_enrty`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"helpdesk\",\"table\":\"course\"},{\"db\":\"helpdesk\",\"table\":\"student\"},{\"db\":\"helpdesk\",\"table\":\"helper\"},{\"db\":\"leave_management\",\"table\":\"leave_enrty\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-12-04 03:48:39', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
