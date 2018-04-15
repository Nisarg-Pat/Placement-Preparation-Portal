-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 07:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` int(11) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `Student_Email` varchar(100) NOT NULL,
  `Student_Password` varchar(100) NOT NULL,
  `CPI` decimal(10,2) NOT NULL,
  `10_perc` decimal(10,2) NOT NULL,
  `12_perc` decimal(10,2) NOT NULL,
  `Student_Contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Student_Name`, `Student_Email`, `Student_Password`, `CPI`, `10_perc`, `12_perc`, `Student_Contact`) VALUES
(1, '1', '1', '1', '1.00', '1.00', '1.00', 1),
(2, '2', '2', '2', '2.00', '2.00', '2.00', 2),
(3, '3', '3', '3', '3.00', '3.00', '3.00', 3),
(20, 'q', 'q', 'q', '7.00', '7.00', '7.00', 7),
(201501110, 'Sam', '10', '10', '10.00', '10.00', '10.00', 10),
(201501111, 'Mark', '11', '11', '9.00', '11.00', '11.00', 11),
(201501133, 'Aagam P. Mehta', 'aagammehta1997@gmail.com', 'hello', '10.00', '100.00', '100.00', 7405172912),
(201501134, 'Nisarg Patel', 'patel321nisarg@gmail.com', 'password', '7.80', '95.00', '95.00', 9925158748);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`),
  ADD UNIQUE KEY `Student_Email` (`Student_Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
