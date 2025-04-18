-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 02:48 PM
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
-- Database: `college_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_applied`
--

CREATE TABLE `faculty_applied` (
  `id` varchar(15) DEFAULT NULL,
  `img` blob DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `role` varchar(150) DEFAULT NULL,
  `Experience` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `aoi` varchar(1000) NOT NULL,
  `workexp` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_applied`
--

INSERT INTO `faculty_applied` (`id`, `img`, `name`, `role`, `Experience`, `qualification`, `aoi`, `workexp`) VALUES
('AO1', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4d44505f50686f746f312e6a7067, 'Mr. MohanBhai Parmar', 'HEAD OF DEPARTMENT', '32 YEARS', 'M.E. CIVIL (CASAD)', 'CONCRETE TECHNOLGY, STRUCTURE ANALYSIS & DESIGN', 'NA'),
('AO2', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f7072675f312e6a7067, 'Mrs. Pragnya Patankar', 'LECTURER', '13 YEARS', 'ME (STRUCTURAL ENGINEERING) - PERSUING', 'STRUCTURAL DESIGN', 'NA'),
('AO3', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f5049435f322e6a7067, 'Mr. Chirag Patel', 'LECTURER', '7 YEARS', 'M.E. (CIVIL-CASAD)', 'STRUCTURAL DESIGN', 'K D Polytechnic Patan (Since 2016)'),
('AO4', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d475f32303139313231355f3039323333362e6a7067, 'Mr. Nayankumar Prajapati', 'LECTURER', '7 YEARS', 'B.E. (CIVIL)', 'CONCRETE TECHNOLOGY', 'Junior Engineer-Civil\r\n\r\nGujarat Energy Transmission Compony.\r\nGujarat\r\n(2012-13)\r\n\r\nAssistant Engineer (Class-2)\r\nNarmada Water Supply Water Resources & Kalpsar Department\r\nGoverment Of Gujarat.\r\n(2013-16)\r\n\r\nLecturer Applied Mechanics\r\nK.D.Polytechnic\r\nPatan\r\n(2016-23)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
