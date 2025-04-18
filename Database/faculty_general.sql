-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 02:47 PM
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
-- Table structure for table `faculty_general`
--

CREATE TABLE `faculty_general` (
  `id` varchar(10) NOT NULL,
  `img` longblob NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `Experience` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `aoi` varchar(1000) NOT NULL,
  `workexp` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_general`
--

INSERT INTO `faculty_general` (`id`, `img`, `name`, `role`, `Experience`, `qualification`, `aoi`, `workexp`) VALUES
('G01', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f50686f746f34332e6a7067, 'Mr. RITESH REVADIWALA', 'LECTURER', '14 YEARS', 'M.A. , M.PHIL (ENGLISH)', 'INDIAN DIASPORA', 'Has been working as a Lecturer in English in K.D.Polytechnic, Patan since 8th December 2009.'),
('G02', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f50484f544f34342e6a7067, 'Mr. URVESHKUMAR PATEL', 'LECTURER', '12 YEARS', 'M.SC.(INDUSTRIAL CHEMISTRY)', 'INDUSTRIAL CHEMISTRY', 'Worked as Lecturer in chemistry at Government Polytechnic,Vadnagar from 01/02/2011 to 22/01/2015.\r\nWorked as Lecturer in Chemistry at Government Polytechnic,Kheda from 23/01/2015 to 01/06/2015\r\nWorking as Lecturer in Chemistry at K.D.Polytechnic,Patan since 01/07/ 2015'),
('G03', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4841445f32303135303732305f3130353230315f2832292e6a7067, 'Mr. HARSHADKUMAR DARJI', 'LECTURER', '12 YEARS', 'M.SC.(MATHEMATICS), B.ED.', 'PURE MATHEMATICS', 'Worked as a lecturer in Mathematics at Dr.J.N.Mehta Govt.Polytechnic,Amreli from 26/05/2011 to 30/06/2015.\r\nHas been Working as a lecturer in Mathematics at K.D.Polytechnic,Patan since 01/07/2015.'),
('G04', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4142505f2d5f50686f746f2e6a7067, 'Mr. ADITYAKUMAR PATEL', 'LECTURER', '11 YEARS', 'M.SC, (PHYSICS)', 'HIGH ENERGY THEORITICAL PARTICLE PHYSICS', 'Has been working as a lecturer in Physics since 04th June, 2012.'),
('G05', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f524d435f32303135303731375f3039313731355f3034382e6a7067, 'Mr. RAJENDRAKUMAR CHAUDHARY', 'LECTURER', '8 YEARS', 'B.SC (PHYSICS), M.SC(PHYSICS), M.PHIL (PHYSICS)', 'SOLID STATE PHYSICS', 'Has been working as a lecturer in physics since 29th January, 2015.\r\nWorked as a lecturer in Physics from 02/08/2010 to 28/01/2015 at B.S. Patel Polytechnic of Ganapat university, Kherva, Mehsana.'),
('G06', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4d6568756c5f2e6a7067, 'Mr. MEHULKUMAR PATEL', 'LECTURER', '8 YEARS', 'M.SC, (MATHS), NET (JRF)', 'PURE MATHEMATICS', 'Has been working as a lecturer in mathematics in general department at K.D. Polytechnic, patan since 28/05/2015.\r\nWorked as Asst. Prof. in mathematics at GIDC Degree Engg. College, Abrama, Navsari From 01/07/2013 to 27/05/2015.'),
('G07', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f34325f70686f746f2e6a7067, 'Mr. PANKAJKUMAR YADAV', 'LECTURER', '8 YEARS', 'M.A. (ENGLISH),B.ED', 'ENGLISH LITERATURE', 'Has been working as a lecturer in English at K.D.Polytechnic,Patan since 03/07/2015.'),
('G08', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d475f32303138313030345f323134303131312e4a5047, 'Mr. ASHVINKUMAR OZA', 'LECTURER', '5 YEARS', 'M.SC. M.PHIL.(MATHS), UGC-CSIR NET, GSET, GATE', 'PURE MATHEMATICS', 'Recently I am  working as a lecturer in Mathematics in Government Polytechnic, Bhuj since 27th August 2018.  \r\n I served as an Assistant Professor in Mathematics at Laljibhai Chaturbhai Institute of Technology, Bhandu from 10th March 2011 to 17th November 2016.\r\n I served as a Lecturer in Mathematics at Gandhinagar Institute of Technology, MotiBhoyan, Gandhinagar from 13th July 2009 to 9th March 2011.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
