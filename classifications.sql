-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 05:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classifications`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_english`
--

CREATE TABLE `academic_english` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `academic_filipino`
--

CREATE TABLE `academic_filipino` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `academic_numeracy`
--

CREATE TABLE `academic_numeracy` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `behavioral`
--

CREATE TABLE `behavioral` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_english`
--
ALTER TABLE `academic_english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_filipino`
--
ALTER TABLE `academic_filipino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_numeracy`
--
ALTER TABLE `academic_numeracy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `behavioral`
--
ALTER TABLE `behavioral`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_english`
--
ALTER TABLE `academic_english`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `academic_filipino`
--
ALTER TABLE `academic_filipino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academic_numeracy`
--
ALTER TABLE `academic_numeracy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `behavioral`
--
ALTER TABLE `behavioral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
