-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 09:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camsdb`
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
  `Nationality` varchar(120) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `CorrespondenceAdd` varchar(350) NOT NULL,
  `PermanentAdd` varchar(350) NOT NULL,
  `SecondaryBoard` varchar(120) DEFAULT NULL,
  `SecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SecondaryBoardper` varchar(120) DEFAULT NULL,
  `SecondaryBoardstream` varchar(120) DEFAULT NULL,
  `SSecondaryBoard` varchar(120) DEFAULT NULL,
  `SSecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SSecondaryBoardper` varchar(120) DEFAULT NULL,
  `SSecondaryBoardstream` varchar(120) DEFAULT NULL,
  `adhar_no` varchar(20) DEFAULT NULL,
  `cap_dsy` varchar(120) DEFAULT NULL,
  `GraUnidper` varchar(120) DEFAULT NULL,
  `GraUnistream` varchar(120) DEFAULT NULL,
  `PGUni` varchar(120) DEFAULT NULL,
  `PGUniyop` varchar(120) DEFAULT NULL,
  `PGUniper` varchar(120) DEFAULT NULL,
  `PGUnistream` varchar(120) DEFAULT NULL,
  `TransferCertificate` varchar(120) DEFAULT NULL,
  `TenMarksheeet` varchar(120) DEFAULT NULL,
  `TwelveMarksheet` varchar(120) DEFAULT NULL,
  `adharimage` varchar(120) DEFAULT NULL,
  `CasteCertificate` varchar(120) DEFAULT NULL,
  `Declaration` varchar(120) DEFAULT NULL,
  `Signature` varchar(120) DEFAULT NULL,
  `CourseApplieddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` varchar(255) DEFAULT NULL,
  `FeeAmount` decimal(10,0) DEFAULT NULL,
  `AdminStatus` varchar(20) DEFAULT NULL,
  `AdminRemarkDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `UserPic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--


-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--


-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `PhoneNumber` bigint(10) DEFAULT NULL,
  `Message` mediumtext,
  `EnquiryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
--


-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID` int(11) NOT NULL,
  `CourseName` varchar(90) DEFAULT NULL,
  `CourseDescription` mediumtext,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--


-- --------------------------------------------------------

--
-- Table structure for table `tblfees`
--

CREATE TABLE `tblfees` (
  `ID` int(5) NOT NULL,
  `UserID` int(5) DEFAULT NULL,
  `PaymentAmount` decimal(10,0) DEFAULT NULL,
  `ModeofPayments` varchar(200) DEFAULT NULL,
  `TransactionNumber` int(10) DEFAULT NULL,
  `DateofTransaction` date DEFAULT NULL,
  `SubmissionDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--


-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Decription` varchar(350) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--


-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext,
  `PageDescription` mediumtext,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--


-- --------------------------------------------------------

--
-- Table structure for table `tblsubscriber`
--

CREATE TABLE `tblsubscriber` (
  `ID` int(5) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DateofSub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
--


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
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--


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
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CourseName` (`CourseName`);

--
-- Indexes for table `tblfees`
--
ALTER TABLE `tblfees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblfees`
--
ALTER TABLE `tblfees`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
