-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 11:20 AM
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
-- Table structure for table `faculty_mech`
--

CREATE TABLE `faculty_mech` (
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
-- Dumping data for table `faculty_mech`
--

INSERT INTO `faculty_mech` (`id`, `img`, `name`, `role`, `Experience`, `qualification`, `aoi`, `workexp`) VALUES
('ME1', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d472d32303137303231312d5741303030382e6a7067, 'Mr. Hardik Parmar', 'HEAD OF DEPARTMENT', '29 YEARS', 'M.E.(THERMAL SCIENCE)', 'TOOL ENGINEERING, INDUSTRIAL ENGINEERING', 'NA'),
('ME2', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4e65775f446f635f34312e6a7067, 'Mr. HeminKumar Thakkar', 'LECTURER', '26 YEARS', 'M.E.MECHANICAL', 'THERMAL ENGINEERING,SOLAR DESALINATION, CRYOGENIC ENGINEERING', 'NA'),
('ME3', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f5343582d333230305f32303135303232345f313034363439303450484f544f5f444b522e6a7067, 'Mr. DhruvKumar Raval', 'LECTURER', '25 YEARS', 'M.E.(PRODUCTION ENGG.)', 'TOOL ENGINEERING, INDUSTRIAL ENGINEERING', 'Lecturer in Mechanical Engg.\r\n\r\nK.D.Polytechnic-Patan'),
('ME4', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f485f4a5f59616461762e6a7067, 'Mr. HiteshKumar Yadav', 'LECTURER', '21 YEARS', 'ME MECHANICAL', 'THERMAL ENGINEERING', 'NA'),
('ME5', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f536872695f4e5f4a5f5072616a61706174692e4a5047, 'Mr. NiravKumar Prajapati', 'LECTURER', '15 YEARS', 'M.E. MECHANICAL (CAD-CAM)', 'CAD-CAM', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2015-2018)'),
('ME6', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f6b7370312e6a7067, 'Mr. KalpeshKumar Patel', 'LECTURER', '13 YEARS', 'MTECH (MECH)', 'THERMAL , TOM', '1.LECTURER IN GOV.POLYTECHNIC(SINCE 2010)\r\n\r\n2.HEAD OF DEPT. M.L.INSTITUTE OF DIPLOMA STUDIES ,BHANDU (13/02/2009 TO 31/03/2010)\r\n3.LECTURER M.L.INSTITUTE OF DIPLOMA STUDIES ,BHANDU (09/12/2004 TO 12/02/2009)\r\n4.LECTURER N.M.GOPANI POLYTECHNIC,RANPUR (19/06/2000 TO 08/12/2004)\r\n5.ROYAL CASTOR PRODUCTS LTD.'),
('ME7', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f5650432e6a706567, 'Mr. VijayKumar Chaudhari', 'LECTURER', '13 YEARS', 'M.E.', 'THERMAL ENGINEERING', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (From 2010...)'),
('ME8', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f796f70686f746f2e6a7067, 'Mr. YogeshKumar Patel', 'LECTURER', '13 YEARS', 'M.E.(THERMAL ENGINEERING)', 'CAD-CAM,THERMAL,REFRIGERATION,HEAT TRANSFER,DESIGN', '1. Design Engineer at Mak Pump Industries. 2005 to 2006\r\n\r\n2. Lecturer in Mechanical Engineering \" S S P C - Visnagar from 2006 to 2007\r\n3. Lecturer in Mechanical Engineering \" B S P P - Kherva University  from 2007 to 2010\r\n4. Lecturer in Mechanical Engineering \" Dr S & S S Gandhy - Surat from 2010 to 2013\r\n5. Lecturer in Mechanical Engineering \" K D P - Patan from 2013 to till Date'),
('ME9', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f50686f746f37392e6a7067, 'Mr. Gaurangchandra Patel', 'LECTURER', '12 YEARS', 'M.TECH. MECHANICAL (AMT)', 'MANUFACTURING', 'NA'),
('ME10', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f494d475f32303136313132345f3130323435332e6a7067, 'Mr. JigneshKumar Patel', 'LECTURER', '7 YEARS', 'B.E.MECHANICAL', 'MANUFACTURING ENGINEERING', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2018)\r\n\r\nLecturer (Mechanical Engineering)\r\n\r\n B.S.Patel Polytechnic, kherva(2012-2016)'),
('ME11', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f50484f544f33372e6a706567, 'Mr. BrijeshKumar Patel', 'LECTURER', '7 YEARS', 'M.E.MECHANICAL', 'CRYOGENICS', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2018)\r\n\r\nAssistant Professor (Mechanical)\r\n\r\n                       S K Patel,Visanagar (2012 – 2016)'),
('ME12', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4b52505f496d616a652e6a7067, 'Mr. KishanKumar Patel', 'LECTURER', '7 YEARS', 'ME(THERMAL ENGINEERING)', 'THERMAL ENGINEERING', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2018)\r\n\r\nAssistant Professor (Mechanical Engineering)\r\n\r\n                               U.V.Patel College of Engineering, Kherva(2013 – 2016)'),
('ME13', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f31343837343034303732303031313532353832323839312e6a7067, 'Mr. PradipKumar Patel', 'LECTURER', '7 YEARS', 'M.E. (I.C. ENGINE & AUTOMOBILE)', 'THERMAL ENGINEERING, DESIGN OF MACHINE ELEMENTS, ESTIMATING COSTING AND CONTRACTING, I. C. ENGINE, AUTOMOBILE ENGINEERING, ENGINEERING GRAPHICS, ENERGY CONSERVATION AND MANAGEMENT, ELEMENTS OF MECHANICAL ENGINEERING, WORKSHOP', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2018)\r\n\r\nAssistant Professor (Instrumentation & Control)\r\n\r\n                                Government Engineering College, Patan(2013 – 2016)'),
('ME14', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f70686f746f36362e6a7067, 'Mr. RakeshKumar Prajapati', 'LECTURER', '7 YEARS', 'B.E.MECHANICAL', 'BASIC ENGINEERING DRAWING', 'Industrial 9 years\r\n\r\nTeaching 14 years'),
('ME15', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f73686976616d5f6d6f6469312e6a7067, 'Mr. Shivam Modi', 'LECTURER', '7 YEARS', 'M.E. ENERGY (MECHANICAL)', 'ENERGY ENGINEERING', '1. National productivity Council, Gandhinagar \r\n    Designation:- Project Associate in Energy Management Dept (1 year)\r\n\r\n2. Gujarat Energy Development Agency, Gandhinagar\r\n    Designation:- Project Engineer (1 year)\r\n\r\n3. Government Polytechnic Palanpur\r\n     Designation:- Lecturer (5 years)'),
('ME16', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f6a70665f70686f746f2e6a7067, 'Mr. Jayprakash Fudani', 'LECTURER', '7 YEARS', 'B.E.(MECH)', 'THERMAL', 'LECTURER IN  MECHANICAL ENGINEERING  \r\n\r\nGOVT. POLYTECHNIC, PALANPUR (SINCE OCTOBER 2016)\r\n\r\nFOREMAN INSTRUCTOR \r\nITI AMIRGADH  (MAY 2014-OCT 2016)\r\n\r\nLECTURER IN  MECHANICAL ENGINEERING \r\nM L INSTITUTE OF DIPLOMA STUDIES, BHANDU (FEB 2009 - MARCH 2014)\r\n\r\nPRODUCTION ENGINEER\r\nAPOLLO INFRATECH PVT. LTD. (SEPT 2008 - FEB 2009)'),
('ME17', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f41584553485f2e6a7067, 'Mr. AxeshKumar Patel', 'LECTURER', '7 YEARS', 'B.E.MECHANICAL', 'MANUFACTURING SYSTEM', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2023)'),
('ME18', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4d4543485f484952454e5f504154454c2e6a7067, 'Mr. HirenKumar Patel', 'LECTURER', '7 YEARS', 'ME(THERMAL ENGINEERING)', 'REFRIGERATION AND AIR CONDITIONING', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2023)'),
('ME19', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4d6568756c312e6a7067, 'Mr. MehulKumar Modh', 'LECTURER', '7 YEARS', 'M.TECH. MECHANICAL (CAD-CAM)', 'CAD-CAM', '1. Lecturer Mechanical Engineering Department, \r\n\r\n    K.D. Polytechnic, Patan (2016-Till Date).\r\n\r\n2. Assistant Professor Mechanical Engineering Department, \r\n\r\n    LCIT-Bhandu (2010-2016)\r\n\r\n3. Lecturer Mechanical Engineering Department, \r\n\r\n    LCIT-Bhandu (2006-2010)'),
('ME20', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f486974657368322e6a7067, 'Mr. HiteshKumar Patel', 'LECTURER', '7 YEARS', 'M.TECH CAD/CAM, PH. D.', 'MACHINE DESIGN, KINEMATICS, VIBRATION CONTROL', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2018)\r\n\r\nAssistant Professor (Mechanical)\r\n\r\n                                GPERI,Mevad (2013 – 2016)\r\n\r\nNeptune Industry ltd \r\n\r\nProduction Engineer (2009 - 2010)\r\n\r\nElectrotherm India Ltd \r\n\r\nQuality engineer (2010-2011)'),
('ME21', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f444b44414248492e6a7067, 'Mr. DineshKumar Dabhi', 'LECTURER', '7 YEARS', 'M.E.', 'THERMAL', 'Teaching Experience 06 years\r\n\r\nIndustrial Experience 08 years'),
('ME22', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f636e645f666f746f2e6a7067, 'Mr. ChetanKumar DESAI', 'LECTURER', '7 YEARS', 'M.E. MECHANICAL IN THERMAL ENGINEERING', 'THERMAL SCIENCE, SELF EMPLOYMENT AND ENTREPRENEURSHIP DEVELOPMENT, HUMAN RESOURCE MANAGEMENT', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2023)\r\n\r\nAssistant Professor (Mechanical Engineering) \r\n\r\n                                Government Engineering College, Patan(2015 – 2016)\r\n\r\nAssistant Professor (Mechanical Engineering) \r\n\r\n                                Government Engineering College, Bhuj(2011 – 2015)\r\n\r\nAssistant Professor (Mechanical Engineering) \r\n\r\n                                Government Engineering College, Patan(2007 – 2011)\r\n\r\nLecturer (Mechanical Engineering) \r\n\r\n                                Government Engineering College,Modasa(2001 – 2007)\r\n\r\nProject Engineer,Orbit Engineering,Ahmedabad (2000-2001)\r\n\r\nQA/QC Engineer,Dodsal Limited, (1998-1999)'),
('ME23', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f4e65775f446f635f37315f312e6a7067, 'Miss. BhoomiBen Patel', 'LECTURER', '6 YEARS', 'M.E', 'MACHINE DESIGN', 'Lecturer (Mechanical Engineering)\r\n\r\n                               K. D. Polytechnic, Patan (2016-2018)'),
('ME24', 0x687474703a2f2f7777772e6b6470702e63746567756a2e696e2f75706c6f6164732f666163756c74792f70686f746f5f32312e6a7067, 'Mr. MahendraKumar Patel', 'LECTURER', '31 YEARS', 'B.E.MECHANICAL', 'PRODUCTION ENGINEERING', 'Lecturer (Mechanical Engineering)\r\n\r\n (1992-2023)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
