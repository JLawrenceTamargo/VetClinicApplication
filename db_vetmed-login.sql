-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2021 at 03:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vetmed-login`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminUsers`
--

CREATE TABLE `adminUsers` (
  `adminID` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminUsers`
--

INSERT INTO `adminUsers` (`adminID`, `fullname`, `password`, `email`, `dateCreated`) VALUES
(1, 'admin1', 'password', 'admin1@gmail.com', '2021-09-28 16:45:34'),
(2, 'admin2', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin2@gmail.com', '2021-09-28 18:14:34'),
(3, 'admin3', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin3@gmail.com', '2021-09-28 18:32:01'),
(4, 'Admin 4', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin4@gmail.com', '2021-09-30 11:49:21'),
(5, 'Soliel Mutya', '5f4dcc3b5aa765d61d8327deb882cf99', 'soladmin@gmail.com', '2021-09-30 11:50:56'),
(6, 'Jhon Lawrence', '5f4dcc3b5aa765d61d8327deb882cf99', 'john.admin@gmail.com', '2021-09-30 14:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `apptID` int(11) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `patientFirstname` varchar(100) NOT NULL,
  `patientLastname` varchar(100) NOT NULL,
  `patientPet` varchar(150) NOT NULL,
  `dateAppt` date NOT NULL,
  `timeAppt` time NOT NULL,
  `serviceAvail` varchar(150) NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `patientEmail` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `remarks` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apptID`, `userID`, `patientFirstname`, `patientLastname`, `patientPet`, `dateAppt`, `timeAppt`, `serviceAvail`, `dateCreated`, `patientEmail`, `status`, `remarks`) VALUES
(1, '11', 'Nikko', 'Ibias', ' Abba', '2021-09-30', '17:30:00', 'Grooming', '2021-09-24 14:31:44', 'j.ibias@gmail.com', 'Cancelled', 'The doctor is not available.'),
(2, '9', 'Testing3', 'Testing3', ' Pulgoso', '2021-09-28', '11:00:00', 'Laboratories', '2021-09-24 15:34:46', 'test3@gmail.com', 'Pending', ''),
(3, '10', 'Jaime', 'Ferrer', ' Snowy', '2021-09-30', '13:00:00', 'Consultation', '2021-09-27 11:53:28', 'j.ferrer@gmail.com', 'Pending', '-'),
(4, '11', 'Nikko', 'Ibias', ' Bailey', '2021-10-07', '13:30:00', 'Vaccination', '2021-09-28 12:29:28', 'j.ibias@gmail.com', 'Approved', ''),
(5, '9', 'Testing3', 'Testing3', ' Baboy', '2021-10-11', '14:00:00', 'Laboratories', '2021-09-28 12:37:15', 'test3@gmail.com', 'Pending', '-'),
(6, '11', 'Nikko', 'Ibias', ' Daisy', '2021-10-08', '07:00:00', 'Grooming', '2021-09-28 17:01:04', 'j.ibias@gmail.com', 'Approved', ''),
(7, '12', 'Jhon', 'Tamargo', ' Mingming', '2021-10-09', '09:00:00', 'Home Service', '2021-09-28 22:38:08', 'j.tamargo@gmail.com', 'Cancelled', 'Cancelled by the client'),
(8, '12', 'Jhon', 'Tamargo', ' Muning', '2021-10-08', '10:06:00', 'Consultation', '2021-09-29 10:06:47', 'j.tamargo@gmail.com', 'Approved', '-'),
(9, '9', 'Testing3', 'Testing3', ' Pulgoso', '2021-10-01', '10:33:00', 'Vaccination', '2021-09-30 09:31:39', 'test3@gmail.com', 'Pending', '-'),
(10, '10', 'Jaime', 'Ferrer', 'Chuchay', '2021-09-30', '15:50:00', 'Confinement', '2021-09-30 10:47:23', 'j.ferrer@gmail.com', 'Approved', ''),
(11, '10', 'Jaime', 'Ferrer', ' doopy', '2021-09-30', '12:48:00', 'Laboratories', '2021-09-30 10:47:48', 'j.ferrer@gmail.com', 'Pending', '-'),
(12, '10', 'Jaime Ann', 'Ferrer', ' Pulgoso', '2021-09-30', '08:30:00', 'Grooming', '2021-09-30 14:42:27', 'j.ferrer@gmail.com', 'Pending', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `petID` int(11) NOT NULL,
  `petName` varchar(100) DEFAULT NULL,
  `petGender` varchar(100) DEFAULT NULL,
  `petBdate` date DEFAULT NULL,
  `petBreed` varchar(100) DEFAULT NULL,
  `userID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petID`, `petName`, `petGender`, `petBdate`, `petBreed`, `userID`) VALUES
(2, 'Chuchay', 'Female', '2021-09-09', 'Siamese Cat', '10'),
(3, 'Power', 'Male', '2021-09-13', 'Siberian Husky', '10'),
(4, 'doopy', 'Male', '2021-05-04', 'Pomeranian', '10'),
(5, 'Bruno', 'Male', '2020-11-04', 'Pug', '10'),
(6, 'Ken', 'Male', '2019-07-18', 'Labrador', '9'),
(7, 'Abba', 'Female', '2015-07-08', 'Siberian Husky', '11'),
(8, 'Bailey', 'Female', '2019-08-16', 'Pug', '11'),
(9, 'Pulgoso', 'Female', '2017-07-19', 'Askal', '9'),
(10, 'Summer', 'Female', '2018-10-01', 'Pomeranian', '10'),
(11, 'Snowy', 'Female', '2012-06-19', 'Askal', '10'),
(12, 'Baboy', 'Female', '2014-03-15', 'Shih-Tzu', '9'),
(13, 'Daisy', 'Female', '2021-04-01', 'Maltese', '11'),
(14, 'Puti', 'Male', '2021-08-31', 'Askal', '9'),
(15, 'Power', 'Female', '2021-06-08', 'Bengal Cat', '9'),
(16, 'Snoopy', 'Male', '2015-06-11', 'Siberian Husky', '12'),
(17, 'Mingming', 'Female', '2020-04-10', 'Balinese Cat', '12'),
(18, 'Muning', 'Male', '2017-11-15', 'Persian Cat', '12'),
(19, 'Pulgoso', 'Male', '2019-03-08', 'Siberian Husky', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `email`, `password`, `dateCreated`) VALUES
(9, 'Testing3', 'Testing3', 'test3@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-09-23 08:53:42'),
(10, 'Jaime', 'Ferrer', 'j.ferrer@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-09-23 09:59:38'),
(11, 'John Micro Nikko', 'Ibias', 'j.ibias@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-09-24 06:30:27'),
(12, 'Jhon', 'Tamargo', 'j.tamargo@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-09-28 14:35:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminUsers`
--
ALTER TABLE `adminUsers`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`apptID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminUsers`
--
ALTER TABLE `adminUsers`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `apptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
