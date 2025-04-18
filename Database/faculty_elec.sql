-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 11:21 AM
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
-- Table structure for table `faculty_elec`
--

CREATE TABLE `faculty_elec` (
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
-- Dumping data for table `faculty_elec`
--

INSERT INTO `faculty_elec` (`id`, `img`, `name`, `role`, `Experience`, `qualification`, `aoi`, `workexp`) VALUES
('EL1', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f6a62625f70686f746f2e6a706567, 'Mr. Jignesh Bhati', 'LECTURER', '18 YEARS', 'M.E.(ELECTRICAL)', 'MICROCONTROLLER AND ELECTRONICS', 'NA'),
('EL2', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f5f32303137303231365f3139343535322e4a5047, 'Mr. RakeshKumar Modi', 'LECTURER', '13 YEARS', 'M.E ELECTRICAL POWER SYSTEM', '(1) POWER SYSTEM (2)AUTOMATION IN POWER SYSTEM (3)RESEARCH WORK (4)ENTREPRENEURSHIP TRAINING (5)ADMINISTRATION', '1. Graduate Apprentice Trainee (GAT) from 05/08/2002 to 04/08/2003\r\n\r\n2. Junior Engineer (Vidyut Sahayak) in PGVCL  from 05/06/2004 to 17/06/2006\r\n\r\n3. Lecturer in Electrical Engineering Department in MLIDS, Bhandu from June        2006  to April -2010\r\n\r\n4. Lecturer in Electrical Engineering Department, Gvernment Polytechnic, Rajkot from 28/04/2010 to 12/12/2013\r\n\r\n5. Lecturer in Electrical Engineering Department, K. D.  Polytechnic, Patan from 13/12/2013 to Continue.'),
('EL3', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d475f32303230303930315f3136313633322e6a7067, 'Mr. DhirajKumar Thakkar', 'LECTURER', '12 YEARS', 'MASTER OF ENGINEERING', 'ELECTRICAL POWER SYSTEM', 'NA'),
('EL4', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4d414e4f4a5f4b4445455f49445f50484f544f2e6a7067, 'Mr. ManojKumar Patel', 'LECTURER', '7 YEARS', 'M.E.ELECTRICAL (ELECTRICAL POWER SYSTEM)', 'ELECTRICAL INSTRUMENTS, ELECTRICAL MACHINES, ELECTRICAL POWER SYSTEM', 'Lecturer in Electrical Engineering Department, Swami Sachchidanand Polytechnic College, Visnagar Gujarat, India, from 17-June- 2005 to 26-Oct-2016.\r\nLecturer in  Electrical Engineering Department, Kilachand Devchand Polytechnic, Patan, Gujarat, India, from 28-Oct-2016 to till date.'),
('EL5', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f6272735f70686f746f5f706167652d303030312e6a7067, 'Miss. BhumikaBen Sevkani', 'LECTURER', '7 YEARS', 'BE ELECTRICAL', 'ELECTRICAL MACHINE & POWER SYSTEM', 'Supervisor Instructor\r\n\r\n\r\nIndustrial Training Institute, Godhra (2.5 Years)'),
('EL6', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f64656570312e6a7067, 'Mr. DipKumar Trivedi', 'LECTURER', '7 YEARS', 'M.E.- ELECTRICAL ENGINEERING', 'POWER SYSTEM', '1. As an Asst. Manager in NMSEZ- Reliance Industries, Navi Mumbai\r\n\r\n2. As a Lecturer in Indus University, Ahmedabad'),
('EL7', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f567461614a5866724a614e4e415538373266524d415179372e6a7067, 'Mr. Arpit Joshi', 'LECTURER', '7 YEARS', 'M.E', 'ELECTRICAL MACHINES AND POWER SYSTEM', 'LECTURER  (ELECTRICAL DEPARTMENT)\r\n\r\n GROW MORE COLLEGE OF DIPLOMA ENGINEERING (2011 – 2014)\r\n  K.D.POLYTECHNIC, PATAN (2016-TILL DATE)'),
('EL8', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f5363616e5f32303137303530385f283229312e6a7067, 'Mr. Parth Mishra', 'LECTURER', '7 YEARS', 'M.E. ELECTRICAL (POWER SYSTEM ENGINEERING)', 'POWER SYSTEM', 'Lecturer (Electrical Engineering)\r\n\r\n                                K.D. Polytechnic,  patan (5 year-6 month)'),
('EL9', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f6d795f70686f746f342e6a7067, 'Mr. HardikKumar Patel', 'LECTURER', '7 YEARS', 'B.E.ELECTRICAL', 'ELECTRICAL MACHINES, POWER SYSTEM ANALYSIS, ELECTRICAL CIRCUITS, E-LEARNING', '1. Supervisor Instructor at ITI Modasa 28 February 2014 to 29 October 2016\r\n\r\n2. LEE at  K.D. Polytechnic,Patan 2 November 2016 Onward'),
('EL10', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d475f32303231303130375f3139313935392e6a7067, 'Mr. Ronak Prajapati', 'LECTURER', '7 YEARS', 'B.E ELECTRICAL', 'MICRO PROCESSOR & MICRO CONTROLLER, DIGITAL ELECTRONICS', 'Junior Engineer at PGVCL\r\n1-year Trainee Engineer at Institute for Plasma Research-Bhat\r\n1.5 year as a Technical Supervisor at Ahmedabad Municipal Corporation.\r\nfrom Nov,2016 as Lecturer at K.D Polytechnic,Patan'),
('EL11', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4e65775f50696374757265362e6a7067, 'Mr. KeyurKumar Prajapati', 'LECTURER', '7 YEARS', 'B. E. ELECTRICAL', 'POWER SYSTEM', 'JUNIOR ENGINEER AT \r\n\r\nDakshin Gujarat Vij Company ltd.(JUN-15 TO OCT-16)\r\n\r\nACADEMIC EXPERIENCE\r\n\r\nLECTURER IN ELECTRICAL ENGINEERING\r\n\r\nK.D.POLYTECHNIC PATAN (OCT-13 TO MAY-15 & NOV-16 TO TILL DATE)'),
('EL12', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f50484f544f303030362e4a5047, 'Mr. Hirenkumar Darji', 'LECTURER', '7 YEARS', 'M.TECH(INDUSTRIAL ELECTRONICS)', 'POWER ELECTRONICS, ELECTRICAL DRIVES, FACTS', 'Assistant Professor (Electrical Engineering)\r\n\r\n\r\n                    Engineering college,Tuwa (05-08-2010 to 30-04-2011)\r\n                    \r\n                    U.V.Patel college of engineering,GNU (01-07-2011 to 16-11-2016)\r\n\r\nLecturer (Electrical Engineering)\r\n\r\n                    K.D. Polytechnic, Patan (17/11/2016 to till date)'),
('EL13', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d475f32303138303931355f3037333733352e6a7067, 'Mr. ChetanKumar Patel', 'LECTURER', '6 YEARS', 'B.E ELECTRICAL', 'ELECTRICAL MACHINES AND ELECTRICAL POWER SYSTEM', 'Lecturer in Electrical Engineering Department, Government Polytechnic,Himatnagar Gujarat, India, from 05/02/2009 to 29/06/2015.\r\nLecturer in Electrical Engineering Department, Government Polytechnic,Palanpur, Gujarat, India, from 30/06/2015 to 18/05/2017.\r\nLecturer in Electrical Engineering Department, K.D.Polytechnic,Gujarat, India, from 19/05/2017 till date.'),
('EL14', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d472d333139382e6a7067, 'Mr. SanjayKumar Patel', 'LECTURER', '5 YEARS', 'MASTER OF ENGINEERING', 'POWER SYSTEM, ELECTRICAL MACHINES', '1.Worked as Assistant Professor at \" SHRI STASANGI  RAM ASHRAM  GROUP OF INSTITUTIONS , Vadsama from 01/07/2011 to 31/01/2012.\r\n\r\n\r\n2.Worked as Assistant Professor at \" Gujarat Power Engineering & Research Institute,Mehsana \" from 01/02/2012 to 26/04/2018.\r\n\r\n3. Working as lecturer in Government Polytechnic, Dahod from 27/04/2018 to till date.'),
('EL15', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f64697368612e706e67, 'Mrs. Disha Desai', 'LECTURER', '8 YEARS', 'GRADUATION', 'ELECTRICAL ENGG.', ' 9 years');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
