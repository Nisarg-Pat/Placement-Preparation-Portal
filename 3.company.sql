-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 07:51 PM
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
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_password` varchar(100) NOT NULL,
  `company_hq` varchar(100) NOT NULL,
  `pointer_criteria` decimal(10,2) DEFAULT NULL,
  `job_profile` varchar(100) NOT NULL,
  `CTC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `email`, `company_password`, `company_hq`, `pointer_criteria`, `job_profile`, `CTC`) VALUES
(1, 'Amazon', 'amazon.gmail.com', 'qwerty', 'Bangalore', '7.50', 'Software Delevopement', 2500000),
(2, 'Flipkart', 'hr_Flipkart@gmail.com', 'asdf12', 'Banglore', NULL, 'Web Developer', 2400000),
(3, 'Morgan Stanley', 'morgan_hr@gmail.com', 'aghagh', 'Kolkatta', '8.00', 'Financial Advisor', 1900000),
(4, 'Big Data', 'motadata@gmail.com', 'qwerty', 'Pune', '7.50', 'Software Developement', 1500000),
(5, 'Open CV', 'opencv_pr@gmail.com', 'asdfter', 'Hyderabad', '7.00', 'Computer Vision', 1000000),
(6, 'Civil Masters', 'civil_masters@gmail.com', 'qwertyqsw', 'Uttarakhand', '7.00', 'Civil Designs', 1000000),
(7, 'Sprinklr', 'sprinlr_pr@gmail.com', 'qwedfg', 'Andheri', '6.50', 'Full Stack Developer', 2200000),
(8, 'FAQ', 'faq_1hr@gmail.com', 'asdrty', 'Banglore', '7.00', 'Software Developement', 1200000),
(9, 'FACTset', 'hr_factset@gmail.com', 'qwerty', 'Panji', '7.50', 'Content Writer', 1000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
