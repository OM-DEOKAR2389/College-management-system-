-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 09, 2025 at 04:13 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `project2025`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_login`
-- 

CREATE TABLE `admin_login` (
  `id` int(50) NOT NULL auto_increment,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `admin_login`
-- 

INSERT INTO `admin_login` (`id`, `email`, `pass`) VALUES 
(1, 'omdeokar3106@gmail.com', '2389');

-- --------------------------------------------------------

-- 
-- Table structure for table `class_assigning`
-- 

CREATE TABLE `class_assigning` (
  `id` int(50) NOT NULL auto_increment,
  `course` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `sub` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

-- 
-- Dumping data for table `class_assigning`
-- 

INSERT INTO `class_assigning` (`id`, `course`, `tid`, `class`, `sub`) VALUES 
(39, 'BCA', '26', 'I', 'IT security'),
(40, 'BCA', '31', 'II', 'R programming'),
(41, 'Bcom', '31', 'II I', 'finance'),
(42, 'BCA', '31', 'II', 'R programming'),
(43, 'BCA', '31', 'III', 'java'),
(44, 'BCA', '31', 'III', 'c');

-- --------------------------------------------------------

-- 
-- Table structure for table `course`
-- 

CREATE TABLE `course` (
  `id` int(50) NOT NULL auto_increment,
  `course` varchar(50) NOT NULL,
  `course_fee` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `course`
-- 

INSERT INTO `course` (`id`, `course`, `course_fee`) VALUES 
(9, 'BCA', '21000'),
(15, 'BCS', '15000'),
(16, 'BBA', '23000'),
(17, 'BA', '18000'),
(18, 'Bcom', '22000');

-- --------------------------------------------------------

-- 
-- Table structure for table `student_attendance`
-- 

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL auto_increment,
  `attendance_date` varchar(20) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

-- 
-- Dumping data for table `student_attendance`
-- 

INSERT INTO `student_attendance` (`id`, `attendance_date`, `teacher_id`, `student_id`, `sname`, `course`, `class`, `subject`, `status`) VALUES 
(80, '25-03-01', '31', 15, 'om deokar', 'BCA', 'III', '''R programming''', 'Present'),
(81, '01-03-25252525', '31', 15, 'om deokar', 'BCA', 'III', 'R programming', 'Present'),
(82, '01-03-20252025202520', '31', 15, 'om deokar', 'BCA', 'III', 'R programming', 'Present'),
(83, '01-03-2025', '31', 15, 'om deokar', 'BCA', 'III', 'R programming', 'Present'),
(84, '03-03-2025', '31', 15, 'om deokar', 'BCA', 'III', 'R programming', 'Present');

-- --------------------------------------------------------

-- 
-- Table structure for table `student_register`
-- 

CREATE TABLE `student_register` (
  `id` int(50) NOT NULL auto_increment,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bloodg` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `10marks` varchar(50) NOT NULL,
  `10year` varchar(50) NOT NULL,
  `12mark` varchar(50) NOT NULL,
  `12year` varchar(50) NOT NULL,
  `ffname` varchar(50) NOT NULL,
  `flname` varchar(50) NOT NULL,
  `fmobile` varchar(50) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `foccupation` varchar(50) NOT NULL,
  `mfname` varchar(50) NOT NULL,
  `mlname` varchar(50) NOT NULL,
  `mmobile` varchar(50) NOT NULL,
  `memail` varchar(50) NOT NULL,
  `moccupation` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `course_fee` varchar(50) NOT NULL,
  `fee_paid` varchar(20) NOT NULL,
  `due_fee` varchar(50) NOT NULL,
  `adm_date` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `student_register`
-- 

INSERT INTO `student_register` (`id`, `fname`, `lname`, `dob`, `gender`, `bloodg`, `nationality`, `religion`, `catagory`, `10marks`, `10year`, `12mark`, `12year`, `ffname`, `flname`, `fmobile`, `femail`, `foccupation`, `mfname`, `mlname`, `mmobile`, `memail`, `moccupation`, `course`, `class`, `course_fee`, `fee_paid`, `due_fee`, `adm_date`) VALUES 
(15, 'om', 'deokar', '2004-08-08', 'male', 'O+', 'indian', 'hindu', 'open', '80%', '2020', '60%', '2024', 'ganesh', 'deokar', '9561195994', 'omdeokar12@gmail.com', 'teacher', 'rupali', 'deokar', '987456321', 'omdeokar12@gmail.com', 'housewife', 'BCA', 'III', '', '', '', '17/02/2025'),
(16, 'vi', 'P', '2025-03-20', 'female', 'O-', 'i', 'h', 'o', '8', '2', '6', '2', 'R', 'P', '93225', 'm619@gmail.com', 'f', 'Si', 'P', '5662', 'sa55@gmail.com', 'h', 'BC', 'II', '2100', '2100', '0', '04/03/2025');

-- --------------------------------------------------------

-- 
-- Table structure for table `subjects`
-- 

CREATE TABLE `subjects` (
  `id` int(50) NOT NULL auto_increment,
  `subjects` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `subjects`
-- 

INSERT INTO `subjects` (`id`, `subjects`, `course`, `class`) VALUES 
(7, 'C++', 'BCA', 'II'),
(8, 'java', 'BCA', 'III'),
(9, 'R programming', 'BCA', 'III'),
(10, 'IT security', 'BCA', 'III'),
(11, 'linux', 'BCA', 'II'),
(12, 'c', 'BCA', 'I'),
(13, 'Accounting', 'BBA', 'II'),
(14, 'finance', 'BBA', 'II'),
(15, 'C++', 'BCS', 'II');

-- --------------------------------------------------------

-- 
-- Table structure for table `teacher_register`
-- 

CREATE TABLE `teacher_register` (
  `id` int(50) NOT NULL auto_increment,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `bloodg` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL default 'teacher',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

-- 
-- Dumping data for table `teacher_register`
-- 

INSERT INTO `teacher_register` (`id`, `fname`, `lname`, `dob`, `gender`, `addres`, `photo`, `bloodg`, `nationality`, `religion`, `catagory`, `qualification`, `mobile`, `email`, `pass`, `cpassword`, `course`, `class`, `subject`, `type`) VALUES 
(26, 'om', 'deokar', '2004-08-08', 'male', 'Mohi', '', 'Select blood group', 'india', 'hind', 'open', 'Bca', '99756564663456', 'omdeokar23@gmail.com', '11111', '11111', 'BCA', 'II', 'java', 'teacher'),
(31, 'vitthal', 'Rupnavar', '1983-10-12', 'male', 'a/p -pharatadi , dist solapur,', '', 'B-', 'india', 'hindu', 'ntc', 'mcs', '9168790114', 'rupnavarvitthal@gmail.com', '123', '123', 'BCA', 'III', 'C++', 'teacher');
