-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 06:33 AM
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
-- Database: `edge`
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
  `quarter` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
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
  `classification` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
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
  `classification` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adviser`
--

CREATE TABLE `adviser` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `employment_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL,
  `verified` varchar(255) NOT NULL
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
  `classification` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counselor`
--

CREATE TABLE `counselor` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `employment_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `executive_committee`
--

CREATE TABLE `executive_committee` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `employment_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `employment_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_admin`
--

CREATE TABLE `school_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `employment_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sdo_admin`
--

CREATE TABLE `sdo_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `employment_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL
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
-- Indexes for table `adviser`
--
ALTER TABLE `adviser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `behavioral`
--
ALTER TABLE `behavioral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counselor`
--
ALTER TABLE `counselor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employment_number` (`employment_number`);

--
-- Indexes for table `executive_committee`
--
ALTER TABLE `executive_committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employment_number` (`employment_number`);

--
-- Indexes for table `school_admin`
--
ALTER TABLE `school_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employment_number` (`employment_number`);

--
-- Indexes for table `sdo_admin`
--
ALTER TABLE `sdo_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employment_number` (`employment_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_english`
--
ALTER TABLE `academic_english`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `academic_filipino`
--
ALTER TABLE `academic_filipino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `academic_numeracy`
--
ALTER TABLE `academic_numeracy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `behavioral`
--
ALTER TABLE `behavioral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counselor`
--
ALTER TABLE `counselor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `executive_committee`
--
ALTER TABLE `executive_committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_admin`
--
ALTER TABLE `school_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sdo_admin`
--
ALTER TABLE `sdo_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
