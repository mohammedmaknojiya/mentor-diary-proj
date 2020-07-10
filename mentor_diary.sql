-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 01:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentor_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES
(1234567, 'maths 1', 20, 20, 20, 20, 75, 80);

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester2`
--

INSERT INTO `semester2` (`std_rollno`, `subject_name`, `iae1_marks`, `iae2_marks`, `avg_iae_marks`, `outoff_marks`, `sem_marks`, `outoff_sem_marks`) VALUES
(1234567, 'math2', 20, 20, 20, 20, 79, 80);

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE `semester6` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester7`
--

CREATE TABLE `semester7` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester8`
--

CREATE TABLE `semester8` (
  `std_rollno` int(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `iae1_marks` int(10) NOT NULL,
  `iae2_marks` int(10) NOT NULL,
  `avg_iae_marks` int(10) NOT NULL,
  `outoff_marks` int(10) NOT NULL,
  `sem_marks` int(10) NOT NULL,
  `outoff_sem_marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_certification`
--

CREATE TABLE `std_certification` (
  `std_rollno` int(10) NOT NULL,
  `certificate_course_name` varchar(50) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_from_where` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_certification`
--

INSERT INTO `std_certification` (`std_rollno`, `certificate_course_name`, `course_description`, `course_from_where`) VALUES
(1234567, 'learned basics of ml', 'udemy', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `std_internship`
--

CREATE TABLE `std_internship` (
  `std_rollno` int(10) NOT NULL,
  `int_company_name` varchar(30) NOT NULL,
  `std_position` varchar(30) NOT NULL,
  `std_int_description` varchar(255) NOT NULL,
  `std_int_duration` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_internship`
--

INSERT INTO `std_internship` (`std_rollno`, `int_company_name`, `std_position`, `std_int_description`, `std_int_duration`) VALUES
(1234567, 'tifr', 'full stack web developer', 'developed science news tool', 4);

-- --------------------------------------------------------

--
-- Table structure for table `std_tenth_score`
--

CREATE TABLE `std_tenth_score` (
  `std_rollno` int(10) NOT NULL,
  `std_tenth_board` varchar(50) NOT NULL,
  `std_tenth_passing_year` int(10) NOT NULL,
  `std_tenth_percentage` int(10) NOT NULL,
  `std_tenth_school_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_tenth_score`
--

INSERT INTO `std_tenth_score` (`std_rollno`, `std_tenth_board`, `std_tenth_passing_year`, `std_tenth_percentage`, `std_tenth_school_name`) VALUES
(1234567, 'maharashtra', 2015, 95, 'madni school');

-- --------------------------------------------------------

--
-- Table structure for table `std_twelfth_score`
--

CREATE TABLE `std_twelfth_score` (
  `std_rollno` int(10) NOT NULL,
  `std_twelfth_board` varchar(50) NOT NULL,
  `std_twelfth_passing_year` int(10) NOT NULL,
  `std_twelfth_percentage` int(10) NOT NULL,
  `std_twelfth_college_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_twelfth_score`
--

INSERT INTO `std_twelfth_score` (`std_rollno`, `std_twelfth_board`, `std_twelfth_passing_year`, `std_twelfth_percentage`, `std_twelfth_college_name`) VALUES
(1234567, 'maharashtra', 2017, 84, 'patkar college');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `std_fname` varchar(25) NOT NULL,
  `std_lname` varchar(25) NOT NULL,
  `std_addr` varchar(255) NOT NULL,
  `std_rollno` varchar(10) NOT NULL,
  `std_branch` varchar(30) NOT NULL,
  `std_phoneno` varchar(15) NOT NULL,
  `std_parents_phoneno` varchar(15) NOT NULL,
  `std_password` varchar(25) NOT NULL,
  `std_email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`std_fname`, `std_lname`, `std_addr`, `std_rollno`, `std_branch`, `std_phoneno`, `std_parents_phoneno`, `std_password`, `std_email`) VALUES
('mm', 'mm', 'mmm', '123', 'it', '1234', '1234', '1234', 'abc@gmail.com'),
('mohammed', 'maknojiya', 'abc def ghi jkl', '1234567', 'IT', '7738403932', '7738403932', '1234', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_register`
--

CREATE TABLE `teacher_register` (
  `teacher_fname` varchar(50) NOT NULL,
  `teacher_lname` varchar(50) NOT NULL,
  `teacher_phoneno` int(12) NOT NULL,
  `teacher_designation` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_register`
--

INSERT INTO `teacher_register` (`teacher_fname`, `teacher_lname`, `teacher_phoneno`, `teacher_designation`, `teacher_email`, `teacher_password`) VALUES
('mm', 'mmra', 1234567890, 'masters', 'abc@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_tenth_score`
--
ALTER TABLE `std_tenth_score`
  ADD PRIMARY KEY (`std_rollno`);

--
-- Indexes for table `std_twelfth_score`
--
ALTER TABLE `std_twelfth_score`
  ADD PRIMARY KEY (`std_rollno`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`std_rollno`);

--
-- Indexes for table `teacher_register`
--
ALTER TABLE `teacher_register`
  ADD PRIMARY KEY (`teacher_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
