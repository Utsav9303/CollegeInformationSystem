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
-- Table structure for table `faculty_ec`
--

CREATE TABLE `faculty_ec` (
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
-- Dumping data for table `faculty_ec`
--

INSERT INTO `faculty_ec` (`id`, `img`, `name`, `role`, `Experience`, `qualification`, `aoi`, `workexp`) VALUES
('ECO1', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f5f32303138303731325f3132353930372e4a5047, 'Mrs. Varshaben Bhatt', 'LECTURER', '18 YEARS', 'POST GRADUATION', 'DIGITAL COMMUNICATION, OPTICAL COMMUNICATION, WIRELESS COMMUNICATION', '13 years'),
('ECO2', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f727376312e6a7067, 'Mr. Ratansang Vaghela', 'LECTURER', '14 YEARS', 'ME IN VLSI SYSTEM DESIGN', 'COMMUNICATION', 'Lecturer (Electronics & Communication)\r\n\r\n                                K. D.Polytecnnic, patan (2009 – 13)\r\n\r\n                                Government Polytechnic, Palanpur (2014 – 2016)\r\n\r\n K. D.Polytecnnic, patan (2016 – 2023)'),
('ECO3', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f736470312e6a7067, 'Mr. Sargam Parmar', 'LECTURER', '12 YEARS', 'M.TECH', 'SIGNAL PROCESSING', 'Lecturer (Electronics & Communication)\r\n                                Government Polytechnic, Gandhinagar (2011 – 2015)\r\n\r\n                                   K.D.Polytechnic, Patan (2015 - Continue)'),
('ECO4', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f556e7469746c6564342e6a7067, 'Mr. NitamKuumar Desai', 'LECTURER', '12 YEARS', 'M. TECH.', 'IMAGE PROCESSING, VLSI', 'Lecturer\r\n\r\nElectrical Engineering Department, VBTP, Umarakh (2002 - 2008)\r\n\r\nWork as I/C HOD during 2006 - 2007\r\n\r\n\r\nSr. Lecturer\r\n \r\nElectrical Engineering Department, VBTP, Umarakh (2008 - 2011)\r\n\r\n\r\nLecturer \r\n\r\nElectronics and Communication Departmart,\r\n \r\nGovernment Polytechnic for Girls, Ahmedabad (2011 onwards)'),
('ECO5', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f64705f70686f746f312e6a7067, 'Mr. UnmeshKumar Patel', 'LECTURER', '7 YEARS', 'BE IN ELECTRONICS AND COMMUNICATION', '\r\nEMBEDDED SYSTEM DESIGN.', 'Supervisor Instructor (Electronics Mechanics)\r\n\r\nIndustrial Training Institute,  Palanpur ( 2014 -  2016)\r\n\r\nLecturer (Electronics & Communication)\r\n\r\n K. D. Polytechnic, Patan (2016 to present)'),
('ECO6', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d475f32303137303533305f3134343230352e6a7067, 'Mr. RohitKumar Prajapati', 'LECTURER', '7 YEARS', 'M. E (E. C)', 'SIGNAL PROCESSING AND VLSI', 'Assistant Professor (Electronics & Communication)\r\n\r\n L. E. College, Morbi ( 2013 -  2016)\r\n\r\nLecturer (Electronics & Communication)\r\n\r\n K. D. Polytechnic, Patan (2016 to present)'),
('ECO7', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f556e7469746c6465642e6a7067, 'Mr. VinodKumar Bamaniya', 'ASST.LECTURER', '31 YEARS', 'DIPLOMA ELECTRONICS', 'ELECTRONICS DEVICE CIRCUITS', 'Assistant Lecturer (EFAM)\r\n\r\n Govt. Vocational Training Center, Bhavanagar (1992 – 1994)\r\n\r\nShri Laxmichand Jhaveri  Foundation Vocational Training Center, Patan (1994 – 2014)   Government Engg. College, Patan (2014)\r\n\r\nGovt. Technical Cum Commercial Center, Modasa (2014 – 2017)  \r\n\r\nK. D. Polytechnic, Patan (2017 – Present) ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
