-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 04:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlogin`
--

CREATE TABLE `adlogin` (
  `NAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adlogin`
--

INSERT INTO `adlogin` (`NAME`, `PASSWORD`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BOOKID` int(3) NOT NULL,
  `BOOKNAME` varchar(15) NOT NULL,
  `BOOK` varchar(200) NOT NULL,
  `PRICE` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BOOKID`, `BOOKNAME`, `BOOK`, `PRICE`) VALUES
(1, 'OOAD', 'OOAD.pdf', 400),
(2, 'BDA', 'BDA.pdf', 825),
(3, 'CLOUD COMPUTING', 'CLOUD COMPUTING.pdf', 648);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `CONFIRMPASSWORD` varchar(10) NOT NULL,
  `PHONE` int(12) NOT NULL,
  `INTEREST` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`NAME`, `EMAIL`, `PASSWORD`, `CONFIRMPASSWORD`, `PHONE`, `INTEREST`) VALUES
('anu', 'anu@gmail.com', 'anu', 'anu', 84526517, 'dot net'),
('atchiya', 'atchiya@gmail.com', 'atchi', 'atchi', 55485531, 'java'),
('janani', 'janani@gmail.com', 'janani', 'janani', 7423598, 'HTML'),
('madhu', 'madhu@gmail.com', 'madhu', 'madhu', 95234875, 'PHP'),
('mahi', 'mahi@gmail.com', 'mahi', 'mahi', 94366700, 'java'),
('raja', 'raja@gmail.com', 'raja1', 'raja1', 834567890, 'c++'),
('ramya', 'ramya@gmail.com', 'ramya', 'ramya', 87483647, 'software'),
('soundharya', 'sou45@gmail.com', 'sou', 'sou', 814483647, 'c'),
('swathi', 'swathi@gmail.com', 'swathi', 'swathi', 94365542, 'Python');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlogin`
--
ALTER TABLE `adlogin`
  ADD PRIMARY KEY (`PASSWORD`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BOOKID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
