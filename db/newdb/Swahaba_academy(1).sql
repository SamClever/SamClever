-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 07:37 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Swahaba_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attendence`
--

CREATE TABLE `Attendence` (
  `Date` varchar(20) NOT NULL,
  `Weakno` int(11) NOT NULL,
  `stuid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `Classno` varchar(20) NOT NULL,
  `Classname` varchar(20) NOT NULL,
  `Class_category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`Classno`, `Classname`, `Class_category`) VALUES
('Std0001', 'Stadard one B', 'B'),
('Std0002 ', 'Stadard two B', 'B'),
('Std0003', 'Stadard three B', 'B'),
('Std0004', 'Stadard four B', 'B'),
('Std0005', 'Stadard five B', 'B'),
('Std001', 'Standard one A', 'A'),
('Std002', 'Stadard two A', 'A'),
('Std003', 'Stadard three A', 'A'),
('Std004', 'Stadard four A', 'A'),
('Std005', 'Stadard five A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `Class_allocate`
--

CREATE TABLE `Class_allocate` (
  `stuid` int(11) NOT NULL,
  `subjec_id` varchar(20) NOT NULL,
  `Teacherid` int(11) NOT NULL,
  `classno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Daillyattendence`
--

CREATE TABLE `Daillyattendence` (
  `Date` varchar(20) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `present` varchar(20) NOT NULL,
  `Absent` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Examresult`
--

CREATE TABLE `Examresult` (
  `examid` varchar(20) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Exams`
--

CREATE TABLE `Exams` (
  `Muhulano` int(11) NOT NULL,
  `examid` varchar(20) NOT NULL,
  `Startdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Examtype`
--

CREATE TABLE `Examtype` (
  `Muhulano` int(11) NOT NULL,
  `Examname` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `Username` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`Username`, `Password`, `Position`) VALUES
('sam', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Parent`
--

CREATE TABLE `Parent` (
  `parentid` int(11) NOT NULL,
  `Fistname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuid` int(11) NOT NULL,
  `Fistname` varchar(20) NOT NULL,
  `Middlename` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Dateofbirth` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuid`, `Fistname`, `Middlename`, `Lastname`, `Gender`, `Dateofbirth`, `Address`) VALUES
(1, 'salum', ' Maulid', ' Salum', ' Male', '2021-05-05 ', 'magogoni'),
(2, 'Omar', ' Mkubwa', ' Omar', ' Male', '2021-05-11 ', 'M/kidatu'),
(3, 'Asya', ' Haji', ' Haji', ' Female', '2021-05-11 ', 'Saateni'),
(4, 'Habil', ' Said', ' Omar', ' Male', '2021-05-04 ', 'Fuoni');

-- --------------------------------------------------------

--
-- Table structure for table `studentclass`
--

CREATE TABLE `studentclass` (
  `stuid` int(11) NOT NULL,
  `classno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentclass`
--

INSERT INTO `studentclass` (`stuid`, `classno`) VALUES
(1, 'Std005'),
(2, 'Std004'),
(3, 'Std001'),
(4, 'Std0004');

-- --------------------------------------------------------

--
-- Table structure for table `StuParent_realtion`
--

CREATE TABLE `StuParent_realtion` (
  `stuid` int(11) NOT NULL,
  `Parentid` int(11) NOT NULL,
  `Relation_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `subject_id` varchar(20) NOT NULL,
  `subjectname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `Teacherid` int(11) NOT NULL,
  `Fistname` int(11) NOT NULL,
  `Middlename` int(11) NOT NULL,
  `Lastname` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Teacherclass`
--

CREATE TABLE `Teacherclass` (
  `Teacherid` int(11) NOT NULL,
  `classno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `WeaklyAttendence`
--

CREATE TABLE `WeaklyAttendence` (
  `Weakno` int(11) NOT NULL,
  `Daypresent` varchar(20) NOT NULL,
  `Dayabsent` varchar(20) NOT NULL,
  `Totaldaypresent` int(11) NOT NULL,
  `Totaldayabsent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Attendence`
--
ALTER TABLE `Attendence`
  ADD UNIQUE KEY `Weakno_5` (`Weakno`),
  ADD KEY `Date` (`Date`,`Weakno`),
  ADD KEY `Weakno` (`Weakno`),
  ADD KEY `Weakno_2` (`Weakno`),
  ADD KEY `Weakno_3` (`Weakno`),
  ADD KEY `Weakno_4` (`Weakno`),
  ADD KEY `stuid` (`stuid`);

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`Classno`);

--
-- Indexes for table `Class_allocate`
--
ALTER TABLE `Class_allocate`
  ADD UNIQUE KEY `subjectid` (`subjec_id`),
  ADD UNIQUE KEY `subjectid_3` (`subjec_id`),
  ADD KEY `stuid` (`stuid`,`subjec_id`,`Teacherid`,`classno`),
  ADD KEY `classno` (`classno`),
  ADD KEY `subjectid_2` (`subjec_id`),
  ADD KEY `Teacherid` (`Teacherid`);

--
-- Indexes for table `Daillyattendence`
--
ALTER TABLE `Daillyattendence`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `Examresult`
--
ALTER TABLE `Examresult`
  ADD PRIMARY KEY (`examid`);

--
-- Indexes for table `Exams`
--
ALTER TABLE `Exams`
  ADD KEY `Muhulano` (`Muhulano`,`examid`),
  ADD KEY `examid` (`examid`);

--
-- Indexes for table `Examtype`
--
ALTER TABLE `Examtype`
  ADD PRIMARY KEY (`Muhulano`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Parent`
--
ALTER TABLE `Parent`
  ADD PRIMARY KEY (`parentid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuid`);

--
-- Indexes for table `studentclass`
--
ALTER TABLE `studentclass`
  ADD KEY `stuid` (`stuid`,`classno`),
  ADD KEY `classno` (`classno`);

--
-- Indexes for table `StuParent_realtion`
--
ALTER TABLE `StuParent_realtion`
  ADD PRIMARY KEY (`stuid`),
  ADD UNIQUE KEY `stuid` (`stuid`),
  ADD KEY `stuid_2` (`stuid`),
  ADD KEY `Parentid` (`Parentid`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`Teacherid`);

--
-- Indexes for table `Teacherclass`
--
ALTER TABLE `Teacherclass`
  ADD KEY `Teacherid` (`Teacherid`,`classno`),
  ADD KEY `classno` (`classno`);

--
-- Indexes for table `WeaklyAttendence`
--
ALTER TABLE `WeaklyAttendence`
  ADD PRIMARY KEY (`Weakno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Parent`
--
ALTER TABLE `Parent`
  MODIFY `parentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Attendence`
--
ALTER TABLE `Attendence`
  ADD CONSTRAINT `Attendence_ibfk_1` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Attendence_ibfk_2` FOREIGN KEY (`Weakno`) REFERENCES `WeaklyAttendence` (`Weakno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Attendence_ibfk_3` FOREIGN KEY (`Date`) REFERENCES `Daillyattendence` (`Date`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Class_allocate`
--
ALTER TABLE `Class_allocate`
  ADD CONSTRAINT `Class_allocate_ibfk_2` FOREIGN KEY (`classno`) REFERENCES `Class` (`Classno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_allocate_ibfk_3` FOREIGN KEY (`subjec_id`) REFERENCES `Subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_allocate_ibfk_4` FOREIGN KEY (`Teacherid`) REFERENCES `Teacher` (`Teacherid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_allocate_ibfk_5` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentclass`
--
ALTER TABLE `studentclass`
  ADD CONSTRAINT `studentclass_ibfk_1` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentclass_ibfk_2` FOREIGN KEY (`classno`) REFERENCES `Class` (`Classno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `StuParent_realtion`
--
ALTER TABLE `StuParent_realtion`
  ADD CONSTRAINT `StuParent_realtion_ibfk_1` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `StuParent_realtion_ibfk_2` FOREIGN KEY (`Parentid`) REFERENCES `Parent` (`parentid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Teacherclass`
--
ALTER TABLE `Teacherclass`
  ADD CONSTRAINT `Teacherclass_ibfk_1` FOREIGN KEY (`Teacherid`) REFERENCES `Teacher` (`Teacherid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Teacherclass_ibfk_2` FOREIGN KEY (`classno`) REFERENCES `Class` (`Classno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
