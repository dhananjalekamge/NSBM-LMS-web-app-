-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 02:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsbmlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `leclog`
--

CREATE TABLE `leclog` (
  `ID` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leclog`
--

INSERT INTO `leclog` (`ID`, `username`, `name`, `email`, `password`) VALUES
('lec1', 'lec', 'lec', 'lec@nsbm.lk', 'nsbmlec123'),
('nsbm-lec-001', 'chaminda', 'chaminda', 'chaminda@nsbm.lk', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `username`, `name`, `email`, `password`) VALUES
('12345', 'sajana', 'g sajana', 'hdjdhsj', '123456'),
('a', 'a', 'a', 'a', 'aaa'),
('BSC-PLY-COM-16.2-035', 'prakash', 'P.L.W. Dahanayake', 'prakashlakshitha@gmail.com', '123456'),
('BSC-PLY-COM-16.2-157', 'dhananja', 'D. Y. S. Lekamge', 'dhananjalekamge123@gmail.com', '123456'),
('bsc-ugc-se16.2-005', 'sajana githosha', 's githosha', '1234@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leclog`
--
ALTER TABLE `leclog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
