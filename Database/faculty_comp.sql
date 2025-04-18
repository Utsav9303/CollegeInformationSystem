-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 07:56 PM
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
-- Database: `collageproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `fcomputer`
--

CREATE TABLE `faculty_comp` (
  `id` varchar(15) DEFAULT NULL,
  `img` blob DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `role` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_comp`
--

INSERT INTO `fcomputer` (`id`, `img`, `name`, `role`) VALUES
('CO1', 'http://www.kdpp.cteguj.in/uploads/faculty/PHOTO_RMS.jpg', 'Mr. RiyazAhmed Shaikh', 'HEAD OF DEPARTMENT'),
('CO2', 'http://www.kdpp.cteguj.in/uploads/faculty/cdp_photo.jpg', 'Mr. ChiragKumar Patel', 'LECTURER'),
('CO3', 'http://www.kdpp.cteguj.in/uploads/faculty/photo95.jpg', 'Ms. Pratibha Sharma', 'LECTURER'),
('CO4', 'http://www.kdpp.cteguj.in/uploads/faculty/6_PHOTO.jpg', 'Mr. MayurKumar Thakkar', 'LECTURER'),
('CO5', 'http://www.kdpp.cteguj.in/uploads/faculty/photo_page-0001.jpg', 'Mr. Kaushik Prajapati', 'LECTURER'),
('CO6', 'http://www.kdpp.cteguj.in/uploads/faculty/My_Photo5.jpg', 'Mr. NareshKumar Patel', 'LECTURER'),
('CO7', 'http://www.kdpp.cteguj.in/uploads/faculty/WhatsApp_Image_2022-10-01_at_11_10_33_AM.jpeg', 'Mr. Yagnesh Patel', 'LECTURER'),
('CO8', 'http://www.kdpp.cteguj.in/uploads/faculty/WhatsApp_Image_2022-09-29_at_09_39_43.jpeg', 'Mrs. Jigna Acharya', 'LECTURER'),
('CO9', 'http://www.kdpp.cteguj.in/uploads/faculty/WhatsApp_Image_2022-09-29_at_10_30_571.jpeg', 'Mrs. Baljit Saini', 'LECTURER'),
('CO10', 'http://www.kdpp.cteguj.in/uploads/faculty/foto1.jpg', 'Mr. Piyush Prajapati', 'LECTURER'),
('CO11', 'http://www.kdpp.cteguj.in/uploads/faculty/myphoto11.jpg', 'Mr. SatishKumar Prajapati', 'LECTURER'),
('CO13', 'http://www.kdpp.cteguj.in/uploads/faculty/Ami_Madam.jpg', 'Mrs. Ami Mevada', 'LECTURER'),
('CO14', 'http://www.kdpp.cteguj.in/uploads/faculty/PIC2.png', 'Mr. ParasKumar Joshi', 'LECTURER'),
('CO15', 'http://www.kdpp.cteguj.in/uploads/faculty/mitesh_thakore.jpg', 'Mr. Mitesh Thakore', 'LECTURER'),
('CO16', 'http://www.kdpp.cteguj.in/uploads/faculty/SHYJU_RAJU_.jpg', 'Mr. Shyju Raju', 'LECTURER'),
('CO17', 'http://www.kdpp.cteguj.in/uploads/faculty/DSC01264_(2)_(2).JPG', 'Mr. KaushalKumar Madhu', 'LECTURER'),
('CO12', 'http://www.kdpp.cteguj.in/uploads/faculty/Myphoto5.jpg', 'Ms. Nirvruti Patel', 'LECTURER'),
('CO18', 'http://www.kdpp.cteguj.in/uploads/faculty/PPPP1.jpg', 'Mr. Divyesh Dodiya', 'LECTURER');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
