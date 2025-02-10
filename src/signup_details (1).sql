-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 09:35 PM
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
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup_details`
--

CREATE TABLE `signup_details` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mnumber` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `repassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_details`
--

INSERT INTO `signup_details` (`firstname`, `lastname`, `gender`, `mnumber`, `email`, `address`, `DOB`, `password`, `repassword`) VALUES
('Mohan', 'Abishek', 'Male', 725576343, 'Abi89@gmail.com', 'No.17, College road, Colombo', '1999-04-22', 'AAbb_12', 'AAbb_12'),
('Amir', 'Assan', 'Male', 778965432, 'assan123@gmail.com', 'No.12, Mosque Lane, Kurunagala', '2000-12-12', 'Abc@123', 'Abc@123'),
('Chandrika', 'Bandara', 'Female', 709845782, 'Chandrika56@gmail.co', 'No.17,Temple Road, Anuradhapura', '1996-08-08', 'ASd@234', 'ASd@234'),
('John', 'Fernando', 'Male', 762356678, 'Fernando34@gmail.com', 'No.77, Samanala Uyana Road, Colombo', '1990-01-10', 'CCc@98', 'CCc@98'),
('Kumarika', 'Kunasekara', 'Female', 725657987, 'Kumarika54@gmail.com', 'No.87, Mirissa road, Mirissa', '2002-07-08', 'Ab@56', 'Ab@56'),
('Ranjuku', 'Raman', 'Male', 721313131, 'Ranjuka27@yahoo.com', 'No.12,Galle Road, Wellawatte, Colombo', '1998-08-11', 'Abcd@1234', 'Abcd@1234'),
('Santhiya', 'Kumaran', 'Female', 721527127, 'santhiya23@gmail.com', 'No.15, College road, Jaffna', '2002-06-06', 'Abcdef@123', 'Abcdef@123'),
('Venu', 'Varathan', 'Male', 782323567, 'varathan1998@yahoo.c', 'No.54, Canal road, Wellawatta, Colombo', '1998-12-28', 'ABc@12345', 'ABc@12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_details`
--
ALTER TABLE `signup_details`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
