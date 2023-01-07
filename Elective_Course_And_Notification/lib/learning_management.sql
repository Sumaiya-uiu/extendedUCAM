--
-- Database: learning_management
--
create database if not exists learning_management;

-- --------------------------------------------------------

--
-- Table structure for table admin
--

CREATE TABLE admin (
  id int(11) NOT NULL,
  admin_id char(15) NOT NULL,
  name char(50) DEFAULT NULL,
  email char(50) DEFAULT NULL,
  phone_no char(15) DEFAULT NULL,
  password varchar(100) DEFAULT NULL
) 

-- --------------------------------------------------------

--
-- Table structure for table electiveadmin
--

CREATE TABLE electiveadmin (
  id int(11) NOT NULL,
  course_code varchar(20) DEFAULT NULL,
  course_title varchar(50) DEFAULT NULL,
  credits float DEFAULT NULL,
  elective_group varchar(10) DEFAULT NULL,
  offered_sem varchar(5) DEFAULT NULL,
  total_request int(100) DEFAULT 0,
  add_advising tinyint(1) DEFAULT 0
) 

-- --------------------------------------------------------

--
-- Table structure for table student
--

CREATE TABLE student (
  id int(11) NOT NULL,
  student_id char(15) NOT NULL,
  name char(50) DEFAULT NULL,
  email char(50) DEFAULT NULL,
  phone_no char(15) DEFAULT NULL,
  password varchar(100) DEFAULT NULL
)

-- --------------------------------------------------------

--
-- Table structure for table teacher
--

CREATE TABLE teacher (
  id int(11) NOT NULL,
  student_id char(15) NOT NULL,
  name char(50) DEFAULT NULL,
  email char(50) DEFAULT NULL,
  phone_no char(15) DEFAULT NULL,
  password varchar(100) DEFAULT NULL
) 

--
-- Indexes for table admin
--
ALTER TABLE admin
  ADD PRIMARY KEY (id);

--
-- Indexes for table electiveadmin
--
ALTER TABLE electiveadmin
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY course_code (course_code);

--
-- Indexes for table student
--
ALTER TABLE student
  ADD PRIMARY KEY (id);

--
-- Indexes for table teacher
--
ALTER TABLE teacher
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table admin
--
ALTER TABLE admin
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table electiveadmin
--
ALTER TABLE electiveadmin
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table student
--
ALTER TABLE student
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table teacher
--
ALTER TABLE teacher
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
