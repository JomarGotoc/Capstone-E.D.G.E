-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 04:08 PM
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
-- Database: `west_central_ii`
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
  `advice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_english`
--

INSERT INTO `academic_english` (`id`, `fullname`, `lrn`, `grade`, `section`, `date`, `classification`, `quarter`, `status`, `gname`, `number`, `notes`, `intervention`, `topic`, `advice`) VALUES
(35, 'jomar', '688', 'kinder', '1', '', 'Academic - Literacy in English', '1', 'On-going', '', '', '', '', '', '');

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
  `advice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_filipino`
--

INSERT INTO `academic_filipino` (`id`, `lrn`, `fullname`, `grade`, `section`, `date`, `quarter`, `classification`, `status`, `gname`, `number`, `notes`, `intervention`, `topic`, `advice`) VALUES
(3, '383', 'Ian ', 'kinder', '1', '', '1', 'Academic - Literacy in Filipino', 'Resolved', '', '', '', '', '', '');

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
  `advice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_numeracy`
--

INSERT INTO `academic_numeracy` (`id`, `lrn`, `fullname`, `grade`, `section`, `date`, `quarter`, `classification`, `status`, `gname`, `number`, `notes`, `intervention`, `topic`, `advice`) VALUES
(9, '965', 'ivan', 'kinder', '1', '', '1', 'Academic - Numeracy', 'Unresolved', '', '', '', '', '', '');

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
(80, 'Ivan Daniel Carino', '123456', '$2y$10$GSxXAPeSLTg7N2oVKxbVaexG90KIB3UEfFm4EeT9seg3b37JlREvS', '', 'kinder', '1', '2024-03-01', 0, 'no');

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
  `number` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `identification` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adviser_intervention_first_period`
--

INSERT INTO `adviser_intervention_first_period` (`id`, `lrn`, `fullname`, `status`, `grade`, `number`, `gname`, `identification`, `notes`, `intervention`, `topic`, `advice`) VALUES
(19, '688', 'jomar', 'Resolved', 'kinder - 1', '', '', 'Behavioral', '', '', '', '');

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
  `gname` varchar(255) DEFAULT NULL,
  `number` varchar(255) NOT NULL,
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
  `classification` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `intervention` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `behavioral`
--

INSERT INTO `behavioral` (`id`, `lrn`, `fullname`, `grade`, `section`, `date`, `quarter`, `classification`, `status`, `gname`, `number`, `notes`, `intervention`, `topic`, `advice`) VALUES
(6, '847', 'vanessa', 'kinder', '1', '', '1', 'Behavioral', 'Pending', '', '', '', '', '', '');

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
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_1_section_1`
--

INSERT INTO `grade_1_section_1` (`id`, `lrn`, `fullname`, `gender`, `grade`, `section`) VALUES
(0, '1212', 'Ivan Daniel Carino', 'Male', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `grade_1_section_2`
--

CREATE TABLE `grade_1_section_2` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_1_section_3`
--

CREATE TABLE `grade_1_section_3` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_1_section_4`
--

CREATE TABLE `grade_1_section_4` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_1_section_5`
--

CREATE TABLE `grade_1_section_5` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_1_section_6`
--

CREATE TABLE `grade_1_section_6` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_2_section_1`
--

CREATE TABLE `grade_2_section_1` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_2_section_2`
--

CREATE TABLE `grade_2_section_2` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_2_section_3`
--

CREATE TABLE `grade_2_section_3` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_2_section_4`
--

CREATE TABLE `grade_2_section_4` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_2_section_5`
--

CREATE TABLE `grade_2_section_5` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_2_section_6`
--

CREATE TABLE `grade_2_section_6` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_3_section_1`
--

CREATE TABLE `grade_3_section_1` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_3_section_2`
--

CREATE TABLE `grade_3_section_2` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_3_section_3`
--

CREATE TABLE `grade_3_section_3` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_3_section_4`
--

CREATE TABLE `grade_3_section_4` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_3_section_5`
--

CREATE TABLE `grade_3_section_5` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_3_section_6`
--

CREATE TABLE `grade_3_section_6` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_kinder_section_1`
--

CREATE TABLE `grade_kinder_section_1` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade_kinder_section_1`
--

INSERT INTO `grade_kinder_section_1` (`id`, `lrn`, `fullname`, `gender`, `grade`, `section`) VALUES
(47, '383', 'Ian ', 'Male', 'kinder', '1'),
(48, '965', 'ivan', 'Male', 'kinder', '1'),
(49, '847', 'vanessa', 'female', 'kinder', '1'),
(50, '347', 'stephanie', 'female', 'kinder', '1'),
(51, '688', 'jomar', 'male', 'kinder', '1'),
(52, '324', 'vangie', 'female', 'kinder', '1'),
(53, '383', 'Ian ', 'Male', 'kinder', '1'),
(54, '965', 'ivan', 'Male', 'kinder', '1'),
(55, '847', 'vanessa', 'female', 'kinder', '1'),
(56, '347', 'stephanie', 'female', 'kinder', '1'),
(57, '688', 'jomar', 'male', 'kinder', '1'),
(58, '324', 'vangie', 'female', 'kinder', '1'),
(59, '111', 'Ivan Daniel Carino', 'Male', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grade_kinder_section_2`
--

CREATE TABLE `grade_kinder_section_2` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_kinder_section_3`
--

CREATE TABLE `grade_kinder_section_3` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_kinder_section_4`
--

CREATE TABLE `grade_kinder_section_4` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_kinder_section_5`
--

CREATE TABLE `grade_kinder_section_5` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_kinder_section_6`
--

CREATE TABLE `grade_kinder_section_6` (
  `id` int(11) NOT NULL,
  `lrn` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
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
-- Indexes for table `grade_1_section_2`
--
ALTER TABLE `grade_1_section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_1_section_3`
--
ALTER TABLE `grade_1_section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_1_section_4`
--
ALTER TABLE `grade_1_section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_1_section_5`
--
ALTER TABLE `grade_1_section_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_1_section_6`
--
ALTER TABLE `grade_1_section_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_2_section_1`
--
ALTER TABLE `grade_2_section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_2_section_2`
--
ALTER TABLE `grade_2_section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_2_section_3`
--
ALTER TABLE `grade_2_section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_2_section_4`
--
ALTER TABLE `grade_2_section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_2_section_5`
--
ALTER TABLE `grade_2_section_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_2_section_6`
--
ALTER TABLE `grade_2_section_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_3_section_1`
--
ALTER TABLE `grade_3_section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_3_section_2`
--
ALTER TABLE `grade_3_section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_3_section_3`
--
ALTER TABLE `grade_3_section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_3_section_4`
--
ALTER TABLE `grade_3_section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_3_section_5`
--
ALTER TABLE `grade_3_section_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_3_section_6`
--
ALTER TABLE `grade_3_section_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_kinder_section_1`
--
ALTER TABLE `grade_kinder_section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_kinder_section_2`
--
ALTER TABLE `grade_kinder_section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_kinder_section_3`
--
ALTER TABLE `grade_kinder_section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_kinder_section_4`
--
ALTER TABLE `grade_kinder_section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_kinder_section_5`
--
ALTER TABLE `grade_kinder_section_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_kinder_section_6`
--
ALTER TABLE `grade_kinder_section_6`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `academic_filipino`
--
ALTER TABLE `academic_filipino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `academic_numeracy`
--
ALTER TABLE `academic_numeracy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `adviser_intervention_first_period`
--
ALTER TABLE `adviser_intervention_first_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `behavioral`
--
ALTER TABLE `behavioral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `grade_kinder_section_1`
--
ALTER TABLE `grade_kinder_section_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
