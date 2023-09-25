-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2021 at 08:04 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `children_vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `md_addlist`
--

CREATE TABLE `md_addlist` (
  `id` int(11) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `date1` varchar(15) NOT NULL,
  `date2` varchar(15) NOT NULL,
  `date3` varchar(15) NOT NULL,
  `date4` varchar(15) NOT NULL,
  `date5` varchar(15) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_addlist`
--

INSERT INTO `md_addlist` (`id`, `pid`, `dob`, `date1`, `date2`, `date3`, `date4`, `date5`, `rdate`) VALUES
(1, 'P1', '20-02-2021', '27-02-2021', '20-03-2021', '20-05-2021', '20-08-2021', '20-02-2022', '26-02-2021');

-- --------------------------------------------------------

--
-- Table structure for table `md_admin`
--

CREATE TABLE `md_admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_admin`
--

INSERT INTO `md_admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `md_appoint`
--

CREATE TABLE `md_appoint` (
  `id` int(11) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `adate` varchar(15) NOT NULL,
  `atime` varchar(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_appoint`
--

INSERT INTO `md_appoint` (`id`, `pid`, `doctor`, `adate`, `atime`, `amount`, `rdate`) VALUES
(1, 'P1', 'D3', '27-02-2021', '10.00AM', 100, '26-02-2021'),
(2, 'P1', 'D3', '27-02-2021', '10.15AM', 100, '26-02-2021'),
(3, 'P1', 'D3', '27-02-2021', '10.30AM', 100, '26-02-2021');

-- --------------------------------------------------------

--
-- Table structure for table `md_doctor`
--

CREATE TABLE `md_doctor` (
  `id` int(11) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_doctor`
--

INSERT INTO `md_doctor` (`id`, `hname`, `name`, `specialist`, `contact`, `email`, `uname`, `pass`) VALUES
(1, 'kmc', 'Aravindhan', 'Cardiologist', '9976570906', 'a@gmail.com', 'D1', '1234'),
(2, 'kmc', 'Kannan', 'Podiatrist', '9976570006', 'a@gmail.com', 'D2', '1234'),
(3, 'apollo', 'Rajesh', 'Cardiologist', '9911442278', 'sa@gmail.com', 'D3', '1234'),
(4, 'apollo', 'Mohankumar', 'Ophthalmologist', '9911442278', 'aaa@gmail.com', 'D4', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `md_hospital`
--

CREATE TABLE `md_hospital` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY  (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_hospital`
--

INSERT INTO `md_hospital` (`id`, `hname`, `address`, `city`, `contact`, `email`, `uname`, `pass`) VALUES
(2, 'Apollo', 'Palpannai', 'Trichy', '9976570006', 'a@gmail.com', 'apollo', '123456'),
(1, 'KMC', 'Tennur', 'Trichy', '9078906050', 'kmc@gmail.com', 'kmc', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `md_medicine`
--

CREATE TABLE `md_medicine` (
  `id` int(11) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `medicine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_medicine`
--


-- --------------------------------------------------------

--
-- Table structure for table `md_patient`
--

CREATE TABLE `md_patient` (
  `id` int(11) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `rdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_patient`
--

INSERT INTO `md_patient` (`id`, `hname`, `uname`, `name`, `fname`, `mname`, `gender`, `dob`, `address`, `city`, `contact`, `email`, `blood_grp`, `disease`, `doctor`, `status`, `rdate`) VALUES
(1, 'apollo', 'P1', 'Raj', 'Kumar', 'Santhi', 'Male', '20-02-2021', '12,ss nagar', 'Trichy', '9976570006', 'raj@gmail.com', 'A+ve', '', 'D3', 1, '26-02-2021');
