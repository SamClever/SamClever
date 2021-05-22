-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2021 at 07:12 AM
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
-- Database: `swahaba_muslim`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attendence`
--

CREATE TABLE `Attendence` (
  `Date` varchar(20) NOT NULL,
  `Weakno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `Classno` varchar(20) NOT NULL,
  `Classname` varchar(20) NOT NULL,
  `Teacherid` int(11) NOT NULL,
  `stuid` int(11) NOT NULL,
  `Subjectid` varchar(20) NOT NULL,
  `examid` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL
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
('sam', '123', 0);

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
  `parentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `Subjectid` varchar(20) NOT NULL,
  `Subjectname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `Teacherid` int(11) NOT NULL,
  `Fistname` int(11) NOT NULL,
  `Middlename` int(11) NOT NULL,
  `Lastname` int(11) NOT NULL
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
  ADD KEY `Weakno_4` (`Weakno`);

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`Classno`),
  ADD KEY `Teacherid` (`Teacherid`,`stuid`,`Subjectid`,`examid`,`Date`),
  ADD KEY `stuid` (`stuid`),
  ADD KEY `Date` (`Date`),
  ADD KEY `Subjectid` (`Subjectid`),
  ADD KEY `examid` (`examid`);

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
  ADD PRIMARY KEY (`stuid`),
  ADD KEY `parentid` (`parentid`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`Subjectid`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
  ADD PRIMARY KEY (`Teacherid`);

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
  MODIFY `stuid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Attendence`
--
ALTER TABLE `Attendence`
  ADD CONSTRAINT `Attendence_ibfk_2` FOREIGN KEY (`Weakno`) REFERENCES `WeaklyAttendence` (`Weakno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Attendence_ibfk_3` FOREIGN KEY (`Date`) REFERENCES `Daillyattendence` (`Date`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Class`
--
ALTER TABLE `Class`
  ADD CONSTRAINT `Class_ibfk_1` FOREIGN KEY (`stuid`) REFERENCES `student` (`stuid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_ibfk_2` FOREIGN KEY (`Date`) REFERENCES `Daillyattendence` (`Date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_ibfk_3` FOREIGN KEY (`Subjectid`) REFERENCES `Subject` (`Subjectid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_ibfk_4` FOREIGN KEY (`Teacherid`) REFERENCES `Teacher` (`Teacherid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Class_ibfk_5` FOREIGN KEY (`examid`) REFERENCES `Examresult` (`examid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Exams`
--
ALTER TABLE `Exams`
  ADD CONSTRAINT `Exams_ibfk_2` FOREIGN KEY (`examid`) REFERENCES `Examresult` (`examid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Exams_ibfk_3` FOREIGN KEY (`Muhulano`) REFERENCES `Examtype` (`Muhulano`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`parentid`) REFERENCES `Parent` (`parentid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
