-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 03:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Email` varchar(255) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `Comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Email` varchar(255) NOT NULL,
  `comment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loanID` int(11) NOT NULL,
  `AccountNo` int(11) DEFAULT NULL,
  `loanType` varchar(255) NOT NULL,
  `loanAmount` float DEFAULT 0,
  `loanInterestRate` float NOT NULL,
  `loanInterest` float NOT NULL,
  `loanFinalAmount` float NOT NULL,
  `loanPeriod` varchar(255) NOT NULL,
  `loanApplyDate` date NOT NULL,
  `loanExpiresDate` date NOT NULL,
  `peronStatus` varchar(255) NOT NULL,
  `peronIndustry` varchar(255) NOT NULL,
  `income` float NOT NULL,
  `workTelnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `STID` char(20) NOT NULL,
  `Sortname` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `DOB` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `Tphone` int(11) NOT NULL,
  `Saddress` varchar(255) NOT NULL,
  `jobStatus` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `joinDate` date NOT NULL,
  `basicSalary` float NOT NULL,
  `oTHRS` int(11) NOT NULL,
  `monthlySalary` float NOT NULL,
  `userName` varchar(255) NOT NULL,
  `Spassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`STID`, `Sortname`, `fullname`, `DOB`, `email`, `Tphone`, `Saddress`, `jobStatus`, `department`, `joinDate`, `basicSalary`, `oTHRS`, `monthlySalary`, `userName`, `Spassword`) VALUES
('L1001', 'Kosala', 'Kosala Muthugala', '1993-10-31', 'ksdala@gmail.com', 712345678, '12/23 Park Road, Matara', 'Manager', 'Management', '2010-09-11', 100000, 5, 200000, 'user1', 'pass1'),
('L1002', 'Supun', 'Supun Nawarattna', '1993-11-13', 'kosala@gmail.com', 712225638, '31/13 main Road, Kalutara', 'Creator', 'IT', '2011-02-04', 300000, 2, 300000, 'user2', 'pass2'),
('L1003', 'Ravi', 'Ravi karu', '1995-09-22', 'dssddsala@gmail.com', 712225638, '11/23 Temple Road, Kandy', 'Developer', 'IT', '2016-04-02', 400000, 2, 20000, 'user3', 'pass3'),
('L1004', 'Sunil', 'Sunil Rahal', '1993-01-22', 'kdsala@gmail.com', 712321167, '12/123 TRT Road, Badulla', 'Admin', 'Security', '2016-06-01', 500000, 1, 400000, 'user4', 'pass4'),
('L1005', 'Alwis', 'Alwis perera', '1996-02-20', 'kdsfsala@gmail.com', 712341674, '22/23 main Road, Anuradapura', 'Admin', 'Admin', '2013-01-04', 500000, 7, 100000, 'user5', 'pass5'),
('L1006', 'Nimal', 'Nimal Silva', '1996-11-05', 'dfdssala@gmail.com', 712145674, '12/23 Pass Road, Jaffna', 'Chairman', 'Manager', '2012-07-03', 700000, 6, 500000, 'user6', 'pass6'),
('L1007', 'Kevin', 'Kevin Silva', '1996-12-04', 'dffskosala@gmail.com', 711345674, '22/63 rock Road, Colombo', 'Developer', 'IT', '2015-09-02', 700000, 5, 700000, 'user7', 'pass7'),
('L1008', 'Kamal', 'Kamal Rosh', '1996-04-03', 'kosdggla@gmail.com', 711345671, '15/233 Bird Road, Hatton', 'Admin', 'Security', '2014-10-10', 700000, 3, 900000, 'user8', 'pass8'),
('L1009', 'Roshan', 'Roshan Bandara', '1995-06-02', 'kosaldfgd@gmail.com', 712345671, '16/25 Temple Road, Galle', 'Developer', 'IT', '2013-11-12', 200000, 2, 300000, 'user9', 'pass9');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FULLName` varchar(255) NOT NULL,
  `DateOFBirth` date NOT NULL,
  `NIC` char(13) NOT NULL,
  `PassportNO` char(20) DEFAULT '-',
  `Gender` char(7) NOT NULL,
  `Telephone` int(13) NOT NULL,
  `Email` varchar(255) DEFAULT '-',
  `MaritalStatus` char(20) NOT NULL,
  `Home` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Country` varchar(255) DEFAULT 'Sri Lanka',
  `AccountType` varchar(255) NOT NULL,
  `Username` varchar(255) DEFAULT '-',
  `Apassword` varchar(255) DEFAULT '-',
  `AccountNo` int(11) NOT NULL,
  `AccountBalance` float DEFAULT 2000,
  `ZipPostalCode` char(50) DEFAULT '-',
  `EmployeeStatus` varchar(255) DEFAULT '-',
  `EmployeeIndustry` varchar(255) DEFAULT '-',
  `MonthlyIncome` float DEFAULT 0,
  `workTelnumber` int(13) DEFAULT 7,
  `cardType` varchar(255) DEFAULT '',
  `cardBalance` float DEFAULT 2500
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`FirstName`, `LastName`, `FULLName`, `DateOFBirth`, `NIC`, `PassportNO`, `Gender`, `Telephone`, `Email`, `MaritalStatus`, `Home`, `City`, `Province`, `Country`, `AccountType`, `Username`, `Apassword`, `AccountNo`, `AccountBalance`, `ZipPostalCode`, `EmployeeStatus`, `EmployeeIndustry`, `MonthlyIncome`, `workTelnumber`, `cardType`, `cardBalance`) VALUES
('Dumindu', 'Lakshan', 'Dumindu Lakshan', '2022-12-15', '20012341231', '43412412442', 'male', 712312341, 'hello@gmail.com', 'Single', '12/23', 'Colombo', 'Colombo', 'Sri Lanka', 'Saving Account', 'user1', '1234567', 10001, 2000, '-', '-', '-', 0, 7, '', 2500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loanID`),
  ADD KEY `FK_AccountNo` (`AccountNo`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`STID`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`AccountNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1200;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `AccountNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `FK_AccountNo` FOREIGN KEY (`AccountNo`) REFERENCES `useraccount` (`AccountNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
