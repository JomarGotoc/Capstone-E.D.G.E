-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 06:46 AM
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
  `quarter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_english`
--

INSERT INTO `academic_english` (`id`, `fullname`, `lrn`, `grade`, `section`, `date`, `classification`, `quarter`) VALUES
(20, 'Adrian Tan', '03-2122-034083', 'Kinder', '1', '2024-02-24', 'Academic - Literacy in English', '1'),
(21, 'Adrian Tan', '03-2122-034083', 'Kinder', '1', '', 'Academic - Literacy in English', '1');

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
  `date` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL,
  `verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adviser`
--

INSERT INTO `adviser` (`id`, `fullname`, `employment_number`, `password`, `email`, `grade`, `section`, `date`, `otp`, `verified`) VALUES
(78, 'Ivan Daniel Carino', '1234567', '$2y$10$Oz4/cpKQYfyF2TYR5f4aSuH2wmWZ3wb3okhNXA7uKhvZuoZrxmGjm', 'ivza.carino.up@phinmaed.com', 'kinder', '1', '2024-02-25', 0, 'yes'),
(79, 'Jomar Gotoc', '123456789999', '$2y$10$tOe6rO6F.UC/orKPVOz3zeerFTVttw.SB/3XAXiRsi2IKjiQFDv2y', 'ivza.carino.up@phinmaed.com', 'kinder', '2', '2024-02-28', 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `adviser_intervention_first_period`
--

CREATE TABLE `adviser_intervention_first_period` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adviser_intervention_fourth_period`
--

CREATE TABLE `adviser_intervention_fourth_period` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `identification` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `intervention` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `advice` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adviser_intervention_second_period`
--

CREATE TABLE `adviser_intervention_second_period` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `identification` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `intervention` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `advice` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adviser_intervention_third_period`
--

CREATE TABLE `adviser_intervention_third_period` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `identification` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `intervention` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `advice` varchar(255) DEFAULT NULL
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
-- Dumping data for table `behavioral`
--

INSERT INTO `behavioral` (`id`, `lrn`, `fullname`, `grade`, `section`, `date`, `quarter`, `classification`) VALUES
(2, '03-2122-034081', 'Carlos Pascual', 'Kinder', '1', '', '1', 'Behavioral');

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
  `date` date NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counselor`
--

INSERT INTO `counselor` (`id`, `fullname`, `employment_number`, `email`, `password`, `date`, `otp`, `verified`) VALUES
(3, 'Hans', '2', 'ivza.carino.up@phinmaed.com', '$2y$10$9GwqQUPSbeGMEbgu/t9LwO0wQ79KX3UPBQqHs8juwXD6yW2t8QMqu', '2024-02-24', NULL, 'yes');

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
  `date` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `executive_committee`
--

INSERT INTO `executive_committee` (`id`, `fullname`, `employment_number`, `email`, `password`, `date`, `otp`, `verified`) VALUES
(7, 'Jomar Gotoc', '1234567', 'ivza.carino.up@phinmaed.com', '$2y$10$D1YIljDHqGhqZ15Ho4JIoeK/4T0XduwdGVM8LCJNVW5ihVCIReMqG', '2024-02-24', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `grade_1_section_1`
--

CREATE TABLE `grade_1_section_1` (
  `id` int(6) UNSIGNED NOT NULL,
  `lrn` varchar(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_1_section_1`
--

INSERT INTO `grade_1_section_1` (`id`, `lrn`, `fullname`, `gender`) VALUES
(1, '121212', 'Ivan Daniel Carino', 'Male'),
(2, '12345', 'Ivan Daniel Carino', 'Male'),
(3, '12345', 'Ivan Daniel Carino', 'Male'),
(4, '12345', 'Ivan Daniel Carino', 'Male'),
(5, '12345', 'Ivan Daniel Carino', 'Male'),
(6, '121212', 'Jomar Gotoc', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `grade_kinder_section_2`
--

CREATE TABLE `grade_kinder_section_2` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_kinder_section_2`
--

INSERT INTO `grade_kinder_section_2` (`id`, `lrn`, `fullname`, `gender`) VALUES
(1, '12345', 'Ivan Daniel Carino', 'Male'),
(2, '12345', 'Ivan Daniel Carino', 'Male'),
(3, '12345', 'Ivan Daniel Carino', 'Male'),
(4, '12345', 'Ivan Daniel Carino', 'Male');

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
  `date` date NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `fullname`, `employment_number`, `email`, `password`, `date`, `otp`, `verified`) VALUES
(5, 'Vanessa Junio', '123456789', 'ivza.carino.up@phinmaed.com', '$2y$10$cBRbgJWCQ9ZxFbYRCnkSreCxhYT80.buW28n2FzMX5XgadR6N5WJa', '2024-02-24', NULL, 'yes');

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
  `division` int(11) NOT NULL,
  `date` date NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_admin`
--

INSERT INTO `school_admin` (`id`, `fullname`, `employment_number`, `email`, `password`, `division`, `date`, `otp`, `verified`) VALUES
(4, 'Stephanie Mislang', '12345678', 'ivza.carino.up@phinmaed.com', '$2y$10$y.FqocKEZHsmk1J1GnxqkObmWtOTGAWRV.NUiLXj/Q2qxLIVnma4S', 0, '2024-02-24', NULL, 'yes'),
(5, '', '', '', '$2y$10$P9cBG5b3M6seakyScNXfxu03mCTlw0Ntp9KSfHWsHK.hRCClvT8v.', 0, '0000-00-00', NULL, '');

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
-- Dumping data for table `sdo_admin`
--

INSERT INTO `sdo_admin` (`id`, `fullname`, `employment_number`, `email`, `password`, `date`, `otp`, `verified`) VALUES
(14, 'Ivan Daniel Carino', '123456', 'ivza.carino.up@phinmaed.com', '$2y$10$07wrOAa.VC5Iz1y.jwDMr.6B/hYSKDnPf5qotOd9gS60q5CZ1pBYe', '2024-02-24', NULL, 'yes');

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
-- Indexes for table `adviser_intervention_first_period`
--
ALTER TABLE `adviser_intervention_first_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adviser_intervention_fourth_period`
--
ALTER TABLE `adviser_intervention_fourth_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adviser_intervention_second_period`
--
ALTER TABLE `adviser_intervention_second_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adviser_intervention_third_period`
--
ALTER TABLE `adviser_intervention_third_period`
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
-- Indexes for table `grade_1_section_1`
--
ALTER TABLE `grade_1_section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_kinder_section_2`
--
ALTER TABLE `grade_kinder_section_2`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `adviser_intervention_first_period`
--
ALTER TABLE `adviser_intervention_first_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `behavioral`
--
ALTER TABLE `behavioral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counselor`
--
ALTER TABLE `counselor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `executive_committee`
--
ALTER TABLE `executive_committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grade_1_section_1`
--
ALTER TABLE `grade_1_section_1`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grade_kinder_section_2`
--
ALTER TABLE `grade_kinder_section_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `school_admin`
--
ALTER TABLE `school_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sdo_admin`
--
ALTER TABLE `sdo_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
