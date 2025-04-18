-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 09:45 AM
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
-- Table structure for table `circular`
--

CREATE TABLE `circular` (
  `c_id` varchar(10) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_date` date NOT NULL,
  `c_href` varchar(1000) NOT NULL,
  `c_dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `circular`
--

INSERT INTO `circular` (`c_id`, `c_name`, `c_date`, `c_href`, `c_dept`) VALUES
('1', 'Alumni 2017-18 ( K.D.Polytechnic - Patan )', '2017-12-31', 'http://www.kdpp.cteguj.in/uploads/9919/Alumni_2017-18_(_K_D_Polytechnic-_Patan_).pdf', 'ALL'),
('10', '27_06_2020_Regarding Remedial & Special term extension students of all semesters of UG/Diploma courses', '2020-06-27', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Circular%20UG%20Diploma%20Remedial%20STE_998429.pdf', 'ALL'),
('11', 'Regarding Cancellation of UG/Diploma - Final Semester Summer 2020 Examination for Regular Students commencing from 02/07/2020 or 03/07/2020 till further orders', '2020-07-01', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/doc01096520200701195853_554981.pdf', 'ALL'),
('12', 'GUIDELINES AND INSTRUCTIONS REGARDING ONLINE MARKS ENTRY FOR DIPLOMA (Sem 1 to 8 Remedial/Special Term Extension Only), D.Arch. (Sem 1 to 6 Remedial / Special Term Extension Only) D.VOC (Sem 1 to 4 Remedial Only)', '2020-07-10', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Scan_20200708%20(5)_268733.pdf', 'ALL'),
('13', 'Option selection for Summer -2020 Examination', '2020-07-21', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/option_selection_250288.pdf', 'ALL'),
('14', 'Extension of last date to select option for Online MCQ exam, Offline exam starting from 17/08/2020 and Special Offline Exam in September 2020 & Guidelines and Important Instructions regarding Online MCQ Summer - 2020 Examination for Students', '2020-07-24', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Circular_MCQ_509891.pdf', 'ALL'),
('15', 'Regarding Institute/University Transfer through Online portal', '2020-07-24', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Institute_University_Transfer_portal_398080.pdf', 'ALL'),
('16', 'Option Selection for Summer 2020 Examination.', '2020-08-07', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/option_Selection_P2_122547.pdf', 'ALL'),
('17', 'ADMISSION NOTICE', '2020-10-01', 'http://www.kdpp.cteguj.in/uploads/9919/Notice_new_reg_form.pdf', 'ALL'),
('18', '18/11/2020_Regarding WINTER 2020 University Examination', '2020-11-18', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/doc01251620201107182747_290311.pdf', 'ALL'),
('19', 'Instructions for filling the exam forms of WINTER 2020 examination', '2020-11-18', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Diploma_Exam_Form_W2020_114880.pdf', 'ALL'),
('2', 'KARUNA ABHIYAN WORKSHOP 2018', '2018-01-11', 'https://www.youtube.com/watch?v=UsVEYveDtiU&t=3s', 'COMPUTER ENGINEERING'),
('20', 'Circular for 10th Annual Convocation', '2020-11-27', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Circular%20for%2010th%20annual%20convocation_726317.pdf', 'ALL'),
('21', 'Extension in dates for filling the Exam Forms of Winter-2020 Examination', '2020-11-27', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Exam%20Form%20Extension%20All%20Course_WI20_658393.pdf', 'ALL'),
('22', 'Instructions for filling the Exam Forms of Winter-2020 Examination Term Extension Diploma Eng.(DE) Diploma Arch.(DA)Remedial (All Semesters) Winter 2020', '2020-11-27', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/te_372410.pdf', 'ALL'),
('23', 'Commencement of Online classes for all courses', '2020-12-01', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Commencement%20of%20Online%20classes_644048.PDF', 'ALL'),
('24', 'Commencement of Online Classes for all courses (Revised)', '2020-12-02', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/img20201202_0001_380527.pdf', 'ALL'),
('25', 'Important notice for students of electrical department', '2020-12-03', 'http://www.kdpp.cteguj.in/uploads/9919/Important_notice_for_students_of_electrical_department_.pdf', 'ELECTRICAL ENGINEERING'),
('26', 'Fees: Pay all semester College and GTU Exam fees', '2020-12-03', 'http://www.kdpp.cteguj.in/uploads/9919/HDFC_PAYMENT_GUIDELINE.pdf', 'CIVIL ENGINEERING'),
('27', 'Fees: Pay all semester College and GTU Exam fees', '2020-12-03', 'http://www.kdpp.cteguj.in/uploads/9919/HDFC_PAYMENT_GUIDELINE.pdf', 'ALL'),
('28', 'Fee Collection Notice for 2nd Semester Completed and currently in 3rd Semester Students', '2020-12-03', 'http://www.kdpp.cteguj.in/uploads/9919/FEE_COLLE_2ND.PDF', 'ALL'),
('29', 'Fee collection notice for 3rd & 5th SEM Students', '2020-12-04', 'http://www.kdpp.cteguj.in/uploads/9919/NEW_FEE_COLLE_3_TO__5.PDF', 'ALL'),
('3', 'Pradhan Mantri Kaushal Vikas Yojana (PMKVY) - Course Details', '2018-02-08', 'http://www.kdpp.cteguj.in/uploads/9919/PMKVY_ADVERTISE_KDP.pdf', 'ELECTRICAL ENGINEERING'),
('30', 'Important notice for electrical department students', '2020-12-21', 'http://www.kdpp.cteguj.in/uploads/9919/Imp__Notice_for_electrical_dept__students_21_12_2020.pdf', 'ELECTRICAL ENGINEERING'),
('31', 'Fee Collection Notice for students SEM 2 Completed and currently in SEM 4', '2021-01-08', 'http://www.kdpp.cteguj.in/uploads/9919/Sem_2_completed_and_currently_in_sem_4.pdf', 'ALL'),
('32', 'Fee Collection Notice for students SEM 3 & 5 Completed and currently in SEM 4 & 6', '2021-01-08', 'http://www.kdpp.cteguj.in/uploads/9919/sem_35_completed_and_current_in_sem_46.pdf', 'ALL'),
('33', 'Important Circular for Special term extension whose validity of enrollment number has expired in Academic year 2019-20 ie Summer 2020', '2021-01-08', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Special_extension_916938.pdf', 'ALL'),
('34', 'Regarding Winter 2020 Examination', '2021-02-01', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/doc01382520210129185518_726544.pdf', 'ELECTRICAL ENGINEERING'),
('35', 'Important instruction for 1st SEM Student of Electrical Dept.', '2021-02-01', 'http://www.kdpp.cteguj.in/uploads/9919/Important_instruction_for_1st_SEM_Student_of_Electrical_Dept.pdf', 'ELECTRICAL ENGINEERING'),
('36', 'Hostel Notice for New Students', '2021-02-11', 'http://www.kdpp.cteguj.in/uploads/9919/Hostel_Notice_For_New_Students.pdf', 'ALL'),
('37', 'Postponement of Examination scheduled on 22nd and 23rd February-2021 (Winter 2020)', '2021-02-19', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Exam%20Postponed%20Circular%20for%2022-23%20Feb_598262.pdf', 'ALL'),
('4', 'Report of Disaster Management and training program', '2019-03-08', 'http://www.kdpp.cteguj.in/uploads/9919/GSDMA_08032019_-_final.pdf', 'ALL'),
('5', 'Celebration of World Women\'s Day 2019', '2019-03-08', 'http://www.kdpp.cteguj.in/uploads/9919/celebrationWWD2019.pdf', 'ALL'),
('6', 'Fees', '2019-03-28', 'https://www.eduqfix.com/PayDirect/#/student/pay/wtldj2los3A4rE42PbWuPkYCHxT1lLblPFFbybo1J71g2K8eflLA3ccWFp5hOuNj/1707', 'ALL'),
('7', 'GTU latest circular regarding postponed exam due to cyclone', '2019-06-11', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Circular_885950.pdf', 'ALL'),
('8', 'C2D Admission after ITI/TEB (Second Year Diploma)', '2019-07-24', 'https://drive.google.com/open?id=1tGGptSknSuIS2WdwHCndAecIlkOKSdsn', 'ALL'),
('9', 'GTU | Exam Form | Hall Ticket', '2019-10-16', 'https://drive.google.com/open?id=1vhi2txOiEUNIv59Ry90NSCstsDdgcrr3', 'ALL'),
('38', 'Merit List for Boys Hostel', '2021-02-26', 'http://www.kdpp.cteguj.in/uploads/9919/Merit_List_for_Boys_Hostel.pdf', 'ALL'),
('39', 'Merit List for Girls Hostel', '2021-02-26', 'http://www.kdpp.cteguj.in/uploads/9919/Merit_List_for_Girls_Hostel.pdf', 'ALL'),
('40', 'Important notice for less attendance students of electrical dept. Sem-4', '2021-03-01', 'http://www.kdpp.cteguj.in/uploads/9919/Less_Attendance_Notice_for_4th_semester-_Electrical.pdf', 'ELECTRICAL ENGINEERING'),
('41', 'PLC_SCADA_7_Days-Workshop', '2021-03-05', 'http://www.kdpp.cteguj.in/uploads/9919/PLC_SCADA_7_Days-Workshop.pdf', 'ELECTRICAL ENGINEERING'),
('42', 'Online Fee Pay_Students admitted in 1st Sem during year 2020-21', '2021-03-06', 'http://www.kdpp.cteguj.in/uploads/9919/Online_Fee_Pay_Students_admitted_in_1st_Sem_during_year_2020-21.pdf', 'ALL'),
('43', 'Pay Fee Online_ C To D Students in 4th Sem and admitted in 3rd Sem during year 2020-21', '2021-03-06', 'http://www.kdpp.cteguj.in/uploads/9919/Pay_Fee_Online__C_To_D_Students_in_4th_Sem_and_admitted_in_3rd_Sem_during_year_2020-21.pdf', 'ALL'),
('44', 'Webinar - Celebration of 75 Years of Independence of India', '2021-03-11', 'http://www.kdpp.cteguj.in/uploads/9919/???????_-_?????_??_????_???????-12-03-2021.pdf', 'ALL'),
('45', 'Imp. Circular for special extension to the students whose validity of enrollment number has expired', '2021-03-25', 'http://www.kdpp.cteguj.in/uploads/9919/Sp_Term_extension_circular_2020_826361.pdf', 'ALL'),
('46', 'Instruction for filling exam form of winter-2020 exam diploma engg. sem-1 regular and C2D, diploma engg. sem-1 regular/remedial and sem-2 remedial.', '2021-04-05', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Cricular_Diploma_Remaing_Exam%20_From_Winter%202020_919584.pdf', 'ALL'),
('47', 'Guidelines and important institute regarding online MCQ winter 2020 examination for students', '2021-04-18', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Students%20Guidelines_926937.pdf', 'ALL'),
('48', 'Guidelines for institute regarding online MCQ type winter 2020 Examination', '2021-04-18', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Institute%20Guidelines_811810.pdf', 'ALL'),
('49', 'Postponement of all Online Examination scheduled in the month of May, 2021', '2021-05-23', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Circular_Online_Postpone_209316.pdf', 'ALL'),
('50', 'Guidelines regarding summer 2021 examination', '2021-05-26', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/20210524_871481.pdf', 'ALL'),
('51', 'INSTRUCTION FOR FILLING THE REGISTRATION FORM OF MERIT-BASED PROGRESSION FOR SUMMER-2021 EXAMINATION DIPLOMA ENGINEERING', '2021-06-11', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Diploma%20sem-4%20and%206%20Exam%20Form%20cirucular%20of%20summer%202020%20Examination(1)_398325.pdf', 'ALL'),
('52', 'Free Vaccination Campaign', '2021-06-22', 'http://www.kdpp.cteguj.in/uploads/9919/Free_Vaccination_banner.pdf', 'ALL'),
('53', 'Computer Department E-Magazine', '2021-07-03', 'https://drive.google.com/file/d/1WPLuo_XGebhoyyYoQ0Qh2I4-zZMh5WjY/view?usp=sharing', 'COMPUTER ENGINEERING'),
('54', 'INSTRUCTIONS REGARDING REMEDIAL EXAMINATION FOR DIPLOMA ENGINEERING(DE) - SUMMER 2021', '2021-07-27', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/circular_874726.pdf', 'ALL'),
('55', 'INSTRUCTION FOR FILLING THE REGISTRATION FORM OF MERIT-BASED PROGRESSION FOR SUMMER-2021 EXAMINATION DIPLOMA ENGINEERING (DE) SEM-2 (REGULAR STUDENTS) ,DIPLOMA VOCATION(DV) SEM-2 (REGULAR STUDENTS)', '2021-08-03', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Diploma%20sem-2%20regualr%20exam%20form%20of%20summer%202021%20exam_441212.pdf', 'ALL'),
('56', 'Preponement of University Theory Examination Schedule on 20th August (Friday),2021', '2021-08-17', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/SKM_36721081317590_694058.pdf', 'ALL'),
('57', 'Regarding Winter - 2021 University Examination', '2021-09-21', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Regarding%20Winter%20-%202021%20University%20Examination._303326.pdf', 'ALL'),
('58', 'Hostel Admission Notice for New Students', '2021-10-14', 'https://drive.google.com/file/d/1Z5_spgJno1gctTdt6-ss_d5Yz3K5WWgK/view?usp=sharing', 'ALL'),
('59', 'DIPLOMA ENGINEERING (DE) SEMESTER-5 and 7 (Regular) (Only applicable for Detain release Students due to result declaration of Summer 2021 sem-3 examination on dated: 25-10-2021)', '2021-10-27', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/Scan_20211026%20(4)_123263.pdf', 'ALL'),
('60', 'Extension of Enrollment Form dates for Diploma (sem-1) for Academic Year 2021-22 (From 20/01/2022 to 31/01/2022)', '2022-01-20', 'https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/extension%20circular_318417.pdf', 'ALL'),
('61', 'Hostel Notice - New Students', '2022-03-23', 'https://drive.google.com/file/d/1Jgt4Sb1VldOsv_0kwmKxgO-_UrIDPxDD/view?usp=sharing', 'ALL'),
('62', 'New Boys Hostel Fee', '2022-03-28', 'https://www.eduqfix.com/PayDirect/#/student/pay/wtldj2los3A4rE42PbWuPkYCHxT1lLblPFFbybo1J71g2K8eflLA3ccWFp5hOuNj/1707', 'ALL'),
('63', 'Girls Hostel Fee Notice', '2022-04-19', 'https://drive.google.com/file/d/1yi1lr7meFAehwAoMqEtALGJ8Zj0tFKns/view?usp=sharing', 'ALL'),
('64', 'New & Old Boys Hostel Fee Notice', '2022-04-25', 'https://drive.google.com/file/d/1ZHewsaTM-gXb0UVQXZP5e7LjUqwsjZSC/view?usp=sharing', 'ALL'),
('65', 'Hostel Fee Notice (New Boys Hostel - 5th Sem.)', '2022-08-24', 'https://drive.google.com/file/d/1Gf7zVTlyDOkf0vl0eyV3Odj5Gk4pT3Y-/view?usp=sharing', 'ALL'),
('66', 'First Semester Students Hostel Fee Notice_2022', '2022-09-13', 'https://drive.google.com/file/d/1NHd-UEQi-kep1vmLBo4Eq81zUyJhbTBQ/view?usp=sharing', 'ALL'),
('67', 'Hostel Notice for Students of Semester 3 & 5', '2022-10-01', 'https://drive.google.com/file/d/1DgzkbaeeqGHfls_x2jknriNHahDesVyt/view?usp=sharing', 'ALL'),
('68', 'Hostel Admission List (Semester 1) Batch 2022', '2020-10-01', 'https://drive.google.com/file/d/19tFyJknLiPNwqa1re788rD_sNIoPji2L/view?usp=sharing', 'ALL'),
('68', 'Boy\'s Hostel Fee notice for Semester 1, 3 & 5', '2022-10-13', 'https://drive.google.com/file/d/1l5wH08ayr9cV5yFGD2xWtxDuvL2_MkbY/view?usp=sharing', 'ALL'),
('69', 'Hostel Notice for 3rd Round Students of 1st Semester', '2022-10-16', 'https://drive.google.com/file/d/1dYZ2MeuayXj1Q6vrGqJLWlMFlgLGIOi7/view?usp=sharing', 'ALL'),
('70', 'Hostel Admission List First Semester_2022', '2022-10-18', 'https://drive.google.com/file/d/1DgzkbaeeqGHfls_x2jknriNHahDesVyt/view?usp=sharing', 'ALL'),
('71', 'Girls Hostel Notice for 3rd & 5th Semester Students', '2022-11-14', 'https://drive.google.com/file/d/15K-6WqmYis_eUvCBxFIIKMoZBhRbsMIl/view?usp=share_link', 'ALL'),
('72', 'Hostel Fee Notice for Boys & Girls Hostel_24/03/2023', '2023-03-24', 'https://drive.google.com/file/d/12WOXbDNFWoa6Qj4ML2nNQZw8UReHt8ij/view?usp=share_link', 'ALL'),
('73', 'Admission Awareness Seminar in diploma after 10std', '2023-04-26', 'https://drive.google.com/file/d/1BqqyJO_5_8TbtqKoXA7bqvBiHiWEGCR5/view?usp=sharing', 'ALL'),
('74', 'Admission Awareness Seminar in diploma after 10std', '2023-04-26', 'https://drive.google.com/file/d/1YXTT-sKfjnoZ0yN9nv6OK2Rx6YJw1Nxv/view?usp=sharing', 'ALL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
