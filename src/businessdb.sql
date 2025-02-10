-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 05:28 PM
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
-- Database: `businessdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `U_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_inquiry` varchar(30) NOT NULL,
  `u_pnumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`U_id`, `u_name`, `u_email`, `u_inquiry`, `u_pnumber`) VALUES
(1, 'wed', 'a@m.c', 'dew', 'wefwef');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `Contestant_ID` int(11) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Password` char(255) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Street_Name` varchar(50) NOT NULL,
  `Postal_Code` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`Contestant_ID`, `F_Name`, `L_Name`, `NIC`, `Gender`, `DOB`, `Password`, `City`, `Street_Name`, `Postal_Code`, `Email`, `Contact_No`) VALUES
(3, 'Nidul', 'nimsara', '200412702332', 'Male', '2004-04-10', '81650736', 'malabe', 'vihara roda', 80365, 'Nidul@thevote.lk', '0776321545'),
(79, 'Rivindu', 'dilochana', '200212702369', 'Male', '2023-06-13', '816507', 'galle', 'wakwella road', 80360, 'Rivindu@gmail.com', '0776908150');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE `judge` (
  `JudgeID` int(11) NOT NULL,
  `F_Name` varchar(25) NOT NULL,
  `L_Name` varchar(25) NOT NULL,
  `NIC` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`JudgeID`, `F_Name`, `L_Name`, `NIC`, `Email`, `Password`) VALUES
(10, 'Muhammed', 'Fahim', '200105701835', 'thanweer@gmail.com', '@123r');

-- --------------------------------------------------------

--
-- Table structure for table `signup_details`
--

CREATE TABLE `signup_details` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mnumber` int(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `repassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_details`
--

INSERT INTO `signup_details` (`userID`, `firstname`, `lastname`, `gender`, `mnumber`, `email`, `address`, `DOB`, `password`, `repassword`) VALUES
(17, 'Mohan', 'Abishek', 'Male', 725576343, 'Abi89@gmail.com', 'No.17, College road, Colombo', '1999-04-22', 'AAbb_12', 'AAbb_12'),
(18, 'Amir', 'Assan', 'Male', 778965432, 'assan123@gmail.com', 'No.12, Mosque Lane, Kurunagala', '2000-12-12', 'Abc@123', 'Abc@123'),
(19, 'Chandrika', 'Bandara', 'Female', 709845782, 'Chandrika56@gmail.co', 'No.17,Temple Road, Anuradhapura', '1996-08-08', 'ASd@234', 'ASd@234'),
(20, 'John', 'Fernando', 'Male', 762356678, 'Fernando34@gmail.com', 'No.77, Samanala Uyana Road, Colombo', '1990-01-10', 'CCc@98', 'CCc@98'),
(21, 'Kumarika', 'Kunasekara', 'Female', 725657987, 'Kumarika54@gmail.com', 'No.87, Mirissa road, Mirissa', '2002-07-08', 'Ab@56', 'Ab@56'),
(22, 'Ranjuku', 'Raman', 'Male', 721313131, 'Ranjuka27@yahoo.com', 'No.12,Galle Road, Wellawatte, Colombo', '1998-08-11', 'Abcd@1234', 'Abcd@1234'),
(23, 'Santhiya', 'Kumaran', 'Female', 721527127, 'santhiya23@gmail.com', 'No.15, College road, Jaffna', '2002-06-06', 'Abcdef@123', 'Abcdef@123'),
(24, 'Venu', 'Varathan', 'Male', 782323567, 'varathan1998@yahoo.c', 'No.54, Canal road, Wellawatta, Colombo', '1998-12-28', 'ABc@12345', 'ABc@12345'),
(25, 'sharan', 'abcd', 'male', 778908015, 'sha@m.c', 'kjdkjqwdk', '2002-12-02', 'Abcd@1234', 'Abcd@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`Contestant_ID`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judge`
--
ALTER TABLE `judge`
  ADD PRIMARY KEY (`JudgeID`);

--
-- Indexes for table `signup_details`
--
ALTER TABLE `signup_details`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `Contestant_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `judge`
--
ALTER TABLE `judge`
  MODIFY `JudgeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup_details`
--
ALTER TABLE `signup_details`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
