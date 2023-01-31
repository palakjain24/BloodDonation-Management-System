-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 05:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdonatetheblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `id` int(11) NOT NULL,
  `bloodBankName` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `pin_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`id`, `bloodBankName`, `city`, `address`, `phone_no`, `pin_code`) VALUES
(1, 'BHARAT BLOOD BANK', 'MUMBAI', 'ABC', 2147483647, 122001),
(2, 'BHARAT BLOOD BANK', 'GURGAON', 'ABC', 2147483647, 122001),
(3, 'BHARAT BLOOD BANK', 'NEW DELHI', 'ABC', 2147483647, 122001),
(4, 'BHARAT BLOOD BANK', 'NOIDA', 'ABC', 2147483647, 122001),
(5, 'BHARAT BLOOD BANK', 'PUNE', 'ABC', 2147483647, 122001),
(6, 'BHARAT BLOOD BANK', 'BANGALORE', 'ABC', 2147483647, 122001);

-- --------------------------------------------------------

--
-- Table structure for table `blood_unit`
--

CREATE TABLE `blood_unit` (
  `id` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `no_of_units` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_unit`
--

INSERT INTO `blood_unit` (`id`, `blood_group`, `no_of_units`, `city`) VALUES
(1, 'A+', 5, 'NEW DELHI'),
(2, 'A-', 5, 'NEW DELHI'),
(3, 'B+', 5, 'NEW DELHI'),
(4, 'B-', 5, 'NEW DELHI'),
(5, 'O+', 5, 'NEW DELHI'),
(6, 'O-', 5, 'NEW DELHI'),
(7, 'AB+', 8, 'NEW DELHI'),
(8, 'AB-', 5, 'NEW DELHI'),
(9, 'A+', 4, 'NOIDA'),
(10, 'A-', 5, 'NOIDA'),
(11, 'B+', 5, 'NOIDA'),
(12, 'B-', 4, 'NOIDA'),
(13, 'O+', 5, 'NOIDA'),
(14, 'O-', 5, 'NOIDA'),
(15, 'AB+', 5, 'NOIDA'),
(16, 'AB-', 5, 'NOIDA'),
(17, 'A+', 5, 'GURGAON'),
(18, 'A-', 5, 'GURGAON'),
(19, 'B+', 5, 'GURGAON'),
(20, 'B-', 5, 'GURGAON'),
(21, 'O+', 5, 'GURGAON'),
(22, 'O-', 4, 'GURGAON'),
(23, 'AB+', 5, 'GURGAON'),
(24, 'AB-', 4, 'GURGAON'),
(25, 'A+', 5, 'MUMBAI'),
(26, 'A-', 5, 'MUMBAI'),
(27, 'B+', 6, 'MUMBAI'),
(28, 'B-', 6, 'MUMBAI'),
(29, 'O+', 5, 'MUMBAI'),
(30, 'O-', 6, 'MUMBAI'),
(31, 'AB+', 5, 'MUMBAI'),
(32, 'AB-', 5, 'MUMBAI'),
(33, 'A+', 5, 'PUNE'),
(34, 'A-', 6, 'PUNE'),
(35, 'B+', 5, 'PUNE'),
(36, 'B-', 5, 'PUNE'),
(37, 'O+', 5, 'PUNE'),
(38, 'O-', 5, 'PUNE'),
(39, 'AB+', 6, 'PUNE'),
(40, 'AB-', 5, 'PUNE'),
(41, 'A+', 5, 'CHENNAI'),
(42, 'A-', 5, 'CHENNAI'),
(43, 'B+', 5, 'CHENNAI'),
(44, 'B-', 5, 'CHENNAI'),
(45, 'O+', 5, 'CHENNAI'),
(46, 'O-', 5, 'CHENNAI'),
(47, 'AB+', 4, 'CHENNAI'),
(48, 'AB-', 5, 'CHENNAI'),
(49, 'A+', 5, 'BANGALORE'),
(50, 'A-', 5, 'BANGALORE'),
(51, 'B+', 6, 'BANGALORE'),
(52, 'B-', 5, 'BANGALORE'),
(53, 'O+', 5, 'BANGALORE'),
(54, 'O-', 7, 'BANGALORE'),
(55, 'AB+', 5, 'BANGALORE'),
(56, 'AB-', 5, 'BANGALORE'),
(57, 'A+', 5, 'CHANDIGARH'),
(58, 'A-', 5, 'CHANDIGARH'),
(59, 'B+', 5, 'CHANDIGARH'),
(60, 'B-', 5, 'CHANDIGARH'),
(61, 'O+', 5, 'CHANDIGARH'),
(62, 'O-', 5, 'CHANDIGARH'),
(63, 'AB+', 5, 'CHANDIGARH'),
(64, 'AB-', 5, 'CHANDIGARH');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact_No` varchar(16) NOT NULL,
  `save_life_date` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `no_of_units` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `gender`, `email`, `city`, `dob`, `contact_No`, `save_life_date`, `password`, `blood_group`, `no_of_units`) VALUES
(1, 'Palak Jain', 'Female', 'abc@gmail.com', 'NEW DELHI', '1975-11-17', '7563214758', '2022-11-27', 'e10adc3949ba59abbe56e057f20f883e', 'A-', 1),
(2, 'chinmayi ', 'Female', 'asd@gmail.com', 'NOIDA', '1991-03-15', '7563214758', '0', 'e10adc3949ba59abbe56e057f20f883e', 'A-', 1),
(3, 'test', 'Male', 'test@test.com', 'PUNE', '1970-08-07', '8127827187', '0', 'e10adc3949ba59abbe56e057f20f883e', 'B-', 1),
(4, 'tests', 'Female', 'test3@test.com', 'GURGAON', '1973-11-15', '8127827187', '0', 'e10adc3949ba59abbe56e057f20f883e', 'A-', 1),
(8, 'world', 'Female', 'world@tpc.com', 'PUNE', '1964-08-10', '8343949394', '2022-11-27', 'e10adc3949ba59abbe56e057f20f883e', 'A-', 1),
(9, 'hello', 'Female', 'hello@gmail.com', 'MUMBAI', '1993-08-19', '7456321548', '2022-11-27', 'e10adc3949ba59abbe56e057f20f883e', 'O-', 1),
(10, 'Abhay Aggarwal', 'Male', 'abhay@gmail.com', 'NEW DELHI', '2001-08-11', '9910341455', '2022-11-27', 'e10adc3949ba59abbe56e057f20f883e', 'B+', 1),
(11, 'Varun Dixit', 'Male', 'varunn@gmail.com', 'PUNE', '1999-06-15', '0987654321', '2022-11-27', 'e10adc3949ba59abbe56e057f20f883e', 'AB+', 1),
(13, 'abc', 'Male', 'abcd@gmail.com', 'BANGALORE', '1973-02-15', '0987654321', '2022-11-27', 'e10adc3949ba59abbe56e057f20f883e', 'B+', 1),
(14, 'Aru ', 'Female', 'aru@gmail.com', 'MUMBAI', '1996-08-19', '6448984946', '2022-11-28', 'e10adc3949ba59abbe56e057f20f883e', 'B+', 1),
(15, 'Vidhi ', 'Female', 'vidhi1@gmail.com', 'BANGALORE', '1988-09-12', '1321651657', '2022-11-28', 'e10adc3949ba59abbe56e057f20f883e', 'O-', 1),
(16, 'Pranshu', 'Male', 'pranshu@gmail.com', 'NEW DELHI', '1972-09-18', '4645546545', '2023-05-28', 'e10adc3949ba59abbe56e057f20f883e', 'AB+', 1);

--
-- Triggers `donor`
--
DELIMITER $$
CREATE TRIGGER `blood_unit_update` AFTER UPDATE ON `donor` FOR EACH ROW BEGIN
    UPDATE blood_unit SET no_of_units = no_of_units + 1 WHERE blood_group = NEW.blood_group && city = NEW.city;
  END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Receiver`
--

CREATE TABLE `Receiver` (
  `R_id` int(11) NOT NULL,
  `R_name` varchar(50) NOT NULL,
  `R_gender` varchar(10) NOT NULL,
  `R_contact_No` varchar(16) NOT NULL,
  `R_city` varchar(50) NOT NULL,
  `R_dob` varchar(20) NOT NULL,
  `R_password` varchar(100) NOT NULL,
  `R_blood_group` varchar(10) NOT NULL,
  `R_email` varchar(50) DEFAULT NULL,
  `R_medical` varchar(100) DEFAULT NULL,
  `no_of_units` int(1) NOT NULL DEFAULT 1,
  `blood_Received` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Receiver`
--

INSERT INTO `Receiver` (`R_id`, `R_name`, `R_gender`, `R_contact_No`, `R_city`, `R_dob`, `R_password`, `R_blood_group`, `R_email`, `R_medical`, `no_of_units`, `blood_Received`) VALUES
(1, 'Arushi Agarwal', 'Female', '7563214758', 'GURGAON', '1973-10-18', 'e10adc3949ba59abbe56e057f20f883e', 'A+', 'arushi@gmail.com', 'emergency', 1, 0),
(2, 'Bhavik Jain', 'Male', '7456321548', 'BANGALORE', '1994-04-19', 'e10adc3949ba59abbe56e057f20f883e', 'A+', 'bhavik@gmail.com', 'abc', 1, 0),
(7, 'test', 'Male', '8127827187', 'CHENNAI', '1961-09-13', 'e10adc3949ba59abbe56e057f20f883e', 'O-', 'test1@test.com', 'ksakas', 1, 0),
(8, 'test', 'Male', '8127827187', 'MUMBAI', '1966-06-12', 'e10adc3949ba59abbe56e057f20f883e', 'B+', 'test3@test.com', 'ksakas', 1, 0),
(9, 'world', 'Male', '8343949394', 'NOIDA', '1962-08-13', 'e10adc3949ba59abbe56e057f20f883e', 'B-', 'world@tpc.com', 'doctor', 1, 0),
(10, 'hello', 'Male', '7456321548', 'CHENNAI', '2003-02-18', 'e10adc3949ba59abbe56e057f20f883e', 'AB+', 'hello@gmail.com', 'xyz', 1, 0),
(11, 'Bhavik Jainn', 'Male', '9910341466', 'NEW DELHI', '2001-06-12', 'e10adc3949ba59abbe56e057f20f883e', 'B+', 'bhavik1@gmail.com', 'xyz', 1, 0),
(12, 'Varun Dixit', 'Male', '7456321548', 'MUMBAI', '1969-07-12', 'e10adc3949ba59abbe56e057f20f883e', 'B-', 'varunn@gmail.com', 'abc', 1, 0),
(13, 'hii', 'Male', '9123456789', 'NOIDA', '2002-10-27', 'e10adc3949ba59abbe56e057f20f883e', 'A+', 'hey@gmail.com', 'aaa', 1, 0),
(14, 'abc', 'Male', '9869363215', 'GURGAON', '1975-10-17', 'e10adc3949ba59abbe56e057f20f883e', 'O-', 'abcd@gmail.com', 'xyz', 1, 0),
(15, 'anika ', 'Female', '1234567891', 'GURGAON', '2002-07-22', 'e10adc3949ba59abbe56e057f20f883e', 'AB-', 'anika@gmail.com', 'wertyuiolsdfghj', 1, 0);

--
-- Triggers `Receiver`
--
DELIMITER $$
CREATE TRIGGER `blood_unit_update_Receiver` AFTER INSERT ON `Receiver` FOR EACH ROW BEGIN 
UPDATE blood_unit SET no_of_units = no_of_units - 1 WHERE blood_group = NEW.R_blood_group && city = NEW.R_city;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_unit`
--
ALTER TABLE `blood_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Receiver`
--
ALTER TABLE `Receiver`
  ADD PRIMARY KEY (`R_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blood_unit`
--
ALTER TABLE `blood_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Receiver`
--
ALTER TABLE `Receiver`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
