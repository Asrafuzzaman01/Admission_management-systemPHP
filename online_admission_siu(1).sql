-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 06:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_admission_siu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmapplications`
--

CREATE TABLE `tbladmapplications` (
  `ID` int(11) NOT NULL,
  `UserId` char(10) NOT NULL,
  `CourseApplied` varchar(120) DEFAULT NULL,
  `FatherName` varchar(120) DEFAULT NULL,
  `MotherName` varchar(120) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `regno` int(30) NOT NULL,
  `Nationality` varchar(120) DEFAULT NULL,
  `districtname` varchar(100) NOT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `CorrespondenceAdd` varchar(350) NOT NULL,
  `PermanentAdd` varchar(350) NOT NULL,
  `Board` varchar(120) DEFAULT NULL,
  `year` varchar(120) DEFAULT NULL,
  `Institution` varchar(120) DEFAULT NULL,
  `gpa` varchar(120) DEFAULT NULL,
  `h_Board` varchar(120) DEFAULT NULL,
  `h_year` varchar(120) DEFAULT NULL,
  `h_Institution` varchar(120) DEFAULT NULL,
  `h_gpa` varchar(120) DEFAULT NULL,
  `Declaration` varchar(120) DEFAULT NULL,
  `Signature` varchar(120) DEFAULT NULL,
  `CourseApplieddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` varchar(255) DEFAULT NULL,
  `AdminStatus` varchar(20) DEFAULT NULL,
  `AdminRemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `UserPic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmapplications`
--

INSERT INTO `tbladmapplications` (`ID`, `UserId`, `CourseApplied`, `FatherName`, `MotherName`, `DOB`, `regno`, `Nationality`, `districtname`, `Gender`, `Category`, `CorrespondenceAdd`, `PermanentAdd`, `Board`, `year`, `Institution`, `gpa`, `h_Board`, `h_year`, `h_Institution`, `h_gpa`, `Declaration`, `Signature`, `CourseApplieddate`, `AdminRemark`, `AdminStatus`, `AdminRemarkDate`, `UserPic`) VALUES
(3, '6', 'B.Tech', 'kk', 'nn', '2000-07-01', 0, 'bangladeshi', '', 'Male', 'General', 'ddscf', 'sdfdsf', 'sylhet', '2000', '20', 'A', 'hghg', '2000', '12', 'A', NULL, '', '2022-11-22 20:12:16', 'welcome ', '1', '2022-11-26 11:43:12', 'fc58492c9f221aa2d7c7927354404856.png'),
(7, '14', 'ENGLISH', 'mr', 'mrs', '2000-07-01', 0, 'bangladeshi', '', 'Male', 'General', 'sylhet', 'sylhet ', 'sylhet', '2016', 'govt echool', '4.00', 'dhaka', '2022', '', '5.00', NULL, 'mmssiii', '2022-11-29 18:36:02', 'welcome', '1', '2022-11-29 19:04:22', '33a9b3574430badb9980ce3f23058b91.jpg'),
(8, '21', 'LLB', 'mr.', 'mrs', '2022-12-21', 14767898, 'Bangladesh', 'sunamgonj', 'Male', 'General', 'sylhet', 'dhaka', 'sylhet', '2012', 'govt', '3.5', 'dhaka', '2014', 'gov', '3.00', NULL, 'hjkhlk', '2022-12-08 15:37:32', 'ewe', '1', '2022-12-08 16:36:02', '06d3bc740e8ba0c8f64427649f537269.jpg'),
(9, '22', 'BBA', 'mr.', 'mrs', '2022-12-07', 14767898, '3', '3', 'Male', 'General', 'sylhet', 'dhaka', 'sylhet', '2012', 'govt', '3.5', 'dhaka', '2014', 'gov', '3.00', NULL, 'hjkhlk', '2022-12-08 16:14:17', 'welcm', '1', '2022-12-10 10:22:13', '453859528b76397a5a12a9d2f36ba702.jpg'),
(10, '15', 'BBA', 'mr.', 'mrs', '2022-12-28', 14767898, '4', '1', 'Male', 'General', 'sylhet', 'dhaka', 'sylhet', '2012', 'govt', '3.5', 'dhaka', '2014', 'gov', '3.00', NULL, 'hjkhlk', '2022-12-08 16:51:55', 'yyr', '1', '2022-12-10 10:22:27', '571e32a9497bc9ce85a05dda04543fd6.jpg'),
(13, '26', 'Computer Science ', 'mr.', 'mrs', '2022-12-28', 14767898, '', 'sylhet', 'Male', 'General', 'sylhet', 'dhaka', 'sylhet', '2012', 'govt', '3.5', '', '2014', 'gov', '3.00', NULL, 'hjkhlk', '2022-12-10 10:17:22', 'gfgh', '2', '2022-12-10 10:22:48', '4f6a306c94af679657ced7273b5ad4ea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` varchar(20) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'mithu', 'mithu', '1234567897', 'mithu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-11-26 04:49:25'),
(3, 'siuadmin', 'siuadmission', '1628415669', 'admission@gmail.com', 'siuadmission', '2022-11-27 19:37:42'),
(4, 'mithu', 'cse', '1628415669', 'mithu@gmail.com', 'admission', '2022-11-27 19:42:06'),
(5, 'durjoy', 'cse', '1628415661', 'durjoy@gmail.com', 'admission', '2022-11-27 19:42:06'),
(6, 'siuadmission office ', 'siuoamsoffice', '1628415669', 'siuoam@gmail.com', 'admissionoffice123', '2022-11-27 19:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `tblcountry`
--

CREATE TABLE `tblcountry` (
  `id` int(11) NOT NULL,
  `countryname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcountry`
--

INSERT INTO `tblcountry` (`id`, `countryname`) VALUES
(2, 'india'),
(3, 'pakistan'),
(4, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID` int(11) NOT NULL,
  `CourseName` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`ID`, `CourseName`) VALUES
(9, 'BBA'),
(12, 'LLB'),
(13, 'Computer Science ');

-- --------------------------------------------------------

--
-- Table structure for table `tbldistrict`
--

CREATE TABLE `tbldistrict` (
  `id` int(11) NOT NULL,
  `districtname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldistrict`
--

INSERT INTO `tbldistrict` (`id`, `districtname`) VALUES
(1, 'sylhet'),
(2, 'sunamgonj'),
(3, 'hobigonj'),
(4, 'moulobibazar'),
(5, 'dhaka'),
(6, 'hobigonj');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocument`
--

CREATE TABLE `tbldocument` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `h_TransferCertificate` varchar(120) DEFAULT NULL,
  `sscMarksheeet` varchar(120) DEFAULT NULL,
  `hscMarksheet` varchar(120) DEFAULT NULL,
  `sscCertificate` varchar(120) DEFAULT NULL,
  `hscCertificate` varchar(120) DEFAULT NULL,
  `UploadDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldocument`
--

INSERT INTO `tbldocument` (`ID`, `UserID`, `h_TransferCertificate`, `sscMarksheeet`, `hscMarksheet`, `sscCertificate`, `hscCertificate`, `UploadDate`) VALUES
(1, 14, '7fb7e49d1224a21cee18456e9b418d14.png', '5b2c51480f4a3df724e385fe77d8049c.png', '5b2c51480f4a3df724e385fe77d8049c.png', '7fb7e49d1224a21cee18456e9b418d14', '', '2022-11-29 19:25:54'),
(3, 21, '453859528b76397a5a12a9d2f36ba702.jpg', '4f6a306c94af679657ced7273b5ad4ea.jpg', 'd41d8cd98f00b204e9800998ecf8427e.jpg', '538dcf9d8b98ac9a193a01f25d975ad2', 'bd6661231506e0fe52c15a3a77ecc1e7', '2022-12-10 14:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `Title`, `Description`, `CreationDate`) VALUES
(6, 'siu admission ', 'fg  gfggh ghgjghy     hfcggt', '2022-11-26 11:46:35'),
(7, 'Admission Fair-2022', ' ??????? ?????: ???% ?????? ?? ????????? ???\r\n\r\n?????: 9th to 14th April 2022\r\n? ????: 10.30 AM to 3.00 PM\r\n\r\n?? ?????:\r\n????????????? ????????:\r\n??.??.(????.) ?? ???????? ??????? ??? ???????????(???)\r\n??.??.(????.) ?? ??????????? ??? ????????????? ???????????(???)\r\n????????? ?? ???(??.?)\r\n??.?.(???????) ?? ???????\r\n????????? ?? ???????? ?????????????? (???)\r\n???????? ????????:\r\n???.? (? ???? ??? ? ?????)\r\n??.?. ?? ??????? (? ????)\r\n??.?. ?? ??????? (??????????? ??? ?????)\r\n??????? ?? ???????? ?????????????? (???) (? ????)\r\n??????? ?? ???????? ?????????????? (???) (?.? ?????)\r\n??????? ?? ???????? ?????????????? (???) (? ?????)\r\n\r\n????????: 01754313182, 01719742626, 01712794133\r\n????????: Shamimabad, Bagbari, Sylhet-3100\r\n???????: 029966-36002\r\n??????: info@siu.edu.bd\r\n????????: www.siu.edu.bd ', '2022-11-26 16:35:43'),
(8, 'hel[p', '\0hdjkmblkn.k,hvf', '2022-12-10 15:05:43'),
(9, 'Admission Fair - 2022', '', '2022-12-11 17:23:35'),
(10, '????????? ????-????', '', '2022-12-11 17:35:03'),
(11, '?? ?????:', '', '2022-12-11 17:37:18'),
(12, '?? ?????:', '', '2022-12-11 17:37:58'),
(13, '?? ?????:', '', '2022-12-11 17:40:08'),
(14, 'hello', '', '2022-12-11 17:40:43'),
(15, 'txtEditor', '', '2022-12-11 17:42:25'),
(16, 'ry', 'ryryry', '2022-12-11 17:43:12'),
(17, 'fgdfg', '', '2022-12-11 17:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`ID`, `Title`, `Description`, `CreationDate`) VALUES
(11, 'about', '    ABOUT ABOUT  Sylhet International University, a privately funded institution of higher learning and research is dedicated to providing quality education commensurate with investment. The university supports its students through', '2022-12-11 10:59:39'),
(12, 'about', 'Welcome To Sylhet International University\r\nThe principal aim of the Sylhet International University (SIU) is to provide high quality education at undergraduate and postgraduate levels relevant to the needs of a dynamic society. The courses and curricula are so designed as to enable a student to enter into the world of work or pursue higher academic and professional goals with a sound academic foundation. The medium of instructions in Sylhet International University is English. The academic goal of the university is not just to make the students pass the examination and get the degree but to equip them with the means to become productive members of the community and continue the practice of lifelong learning.', '2022-12-11 11:29:09'),
(13, 'help', '    Any help please click the link http://siu.edu.bd/contact', '2022-12-11 11:30:39'),
(14, 'about', 'Sylhet International University, a privately funded institution of higher learning and research is dedicated to providing quality education commensurate with', '2022-12-11 11:33:00'),
(15, 'about', '', '2022-12-11 15:36:35'),
(16, 'about', '', '2022-12-11 15:37:17'),
(17, 'about', '', '2022-12-11 15:43:28'),
(18, 'help', '<blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><h3><span style=\"font-size: xx-large; font-weight: bold; font-family: &quot;courier new&quot;, monospace; color: rgb(106, 168, 79);\">help page</span></h3></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote></blockquote>', '2022-12-11 16:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `status` enum('active','pending') NOT NULL DEFAULT 'pending',
  `mid` varchar(100) NOT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `status`, `mid`, `PostingDate`) VALUES
(6, 'mithu', 'sultan', 12345, 'as@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'active', '', '2022-11-22 20:07:49'),
(7, 'mithu', 'hh', 677488490, 'mt@gmail.com', '912e79cd13c64069d91da65d62fbb78c', 'active', '', '2022-11-24 17:49:01'),
(8, 'mm', 'mm', 23456798, 'mtt@gmail.com', '3b712de48137572f3849aabd5666a4e3', 'active', '', '2022-11-25 14:16:47'),
(9, 'mithu', 'hh', 99776523, 'joy@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'active', '', '2022-11-26 10:16:59'),
(11, 'mithu', 'sultan', 111111, '111111as@gmail.com', '96e79218965eb72c92a549dd5a330112', 'active', '', '2022-11-26 16:08:01'),
(14, 'mithu', 'sultan', 6534721, 'cse35@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'active', '', '2022-11-29 18:33:43'),
(15, 'mitu', 'mt', 1345, 'mitu@gmail.com', '202cb962ac59075b964b07152d234b70', 'active', '', '2022-12-07 14:50:09'),
(16, 'mitu', 'mt', 1781314743, 'asrafuzzaman.cse.siu@gmal.com', '202cb962ac59075b964b07152d234b70', 'active', '', '2022-12-08 14:08:00'),
(17, 'mitu', 'mt', 1761814767869, 'habib.cse.sust@gmail.com', '202cb962ac59075b964b07152d234b70', 'active', '', '2022-12-08 14:23:43'),
(18, 'mitu', 'mt', 11, 'asrafuzzaman.3cse.siu@gmal.com', '202cb962ac59075b964b07152d234b70', 'active', '', '2022-12-08 14:40:23'),
(19, 'mitu', 'mt', 11346676767, 'asrafuzzaman.32cse.siu@gmal.com', '202cb962ac59075b964b07152d234b70', 'active', '', '2022-12-08 14:55:16'),
(20, 'mitu', 'mt', 41111111112, 'asrafuzzaman.7cse.siu@gmal.com', '4c01322d8cea15abf2104f7d930abd82', 'active', '', '2022-12-08 15:24:15'),
(21, 'mitu', 'mt', 51111111111, 'asrafuzzaman.9cse.siu@gmal.com', '428f0214b6c1a0b8847c3ab12ecde911', 'active', '', '2022-12-08 15:26:05'),
(22, 'mitu', 'mt', 1628415669, 'asrafuzzaman.acse.siu@gmal.com', '5dc8377b712fe7126ce50dd5046b9a79', 'active', '', '2022-12-08 15:43:37'),
(23, 'mitu', 'mt', 11111111111, 'mitu2@gmail.com', 'fb876ef75a0d73913a98081a46a558b6', 'active', '719912', '2022-12-09 18:28:49'),
(24, 'mitu', 'mt', 22222222222, 'mitu42@gmail.com', 'cc2419fdfd9fe1c0d9d8b6cc79f2ff2c', 'active', '560179', '2022-12-09 18:58:24'),
(25, 'mthu', 'tt', 44444444444, 'asrafuzzaman.45acse.siu@gmal.com', '8f25f887b6e523c34fa6b6c4997f6c1b', 'active', '274192', '2022-12-09 19:01:11'),
(26, 'mitu', 'mt', 33333333333, 'asrafuzzaman.75acse.siu@gmal.com', 'f4e7890b87662ec6a36cdbc5abdf434e', 'active', '786796', '2022-12-10 07:56:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcountry`
--
ALTER TABLE `tblcountry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldistrict`
--
ALTER TABLE `tbldistrict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldocument`
--
ALTER TABLE `tbldocument`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcountry`
--
ALTER TABLE `tblcountry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbldistrict`
--
ALTER TABLE `tbldistrict`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbldocument`
--
ALTER TABLE `tbldocument`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
