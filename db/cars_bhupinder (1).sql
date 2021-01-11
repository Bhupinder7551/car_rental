-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2021 at 05:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars_bhupinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `model` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`, `date`, `model`) VALUES
(8, 'Mercedes Benz', 'Mercedes ', '2020-Mercedes-Benz-C-Class-Sedan-Grey-1001x565 (1).jpg', 45000, 4, 'Available', '2019-12-05', 2019),
(9, 'Range Rover', 'Land rover', 'Land_Rover-Range_Rover_Sport_crop (1).jpg', 38000, 6, 'Available', '2020-12-05', 2017),
(10, 'LandCruiser V8', 'LandCruiser ', '2020-Toyota-LandCruiser-Sahara-Horizon-SUV-silver-1001x565-1_0 (1).jpg', 54000, 8, 'Available', '2020-12-05', 2018),
(11, 'Camery', 'Toyota', '-1x-1 (1).jpg', 22000, 4, 'Available', '2020-12-05', 2015),
(12, 'Bugati', 'Bugati', '02-ss300p-3i4-front-1567937037 (1).jpg', 76000, 2, 'Available', '2020-12-05', 2019),
(13, 'Royal royse', 'Royal royse', '_114209474_rollsroyce_reuters (1).jpg', 89000, 2, 'Available', '2020-12-05', 2020),
(14, 'Lambourgini', 'Lambourgini', 'sv (1).jpg', 99000, 2, 'Available', '2020-12-05', 2012),
(15, 'challenger', 'challenger', 'Dodge-Challenger_SRT_Hellcat-2019-1280-11 (1).jpg', 54000, 4, 'Available', '2020-12-05', 2015),
(16, 'Security Vehicles', 'Hammar', 'licensed-1-10th-hummer-h2-rc-diecast-rtr-red-35 (1).jpg', 75000, 8, 'Available', '2020-12-05', 2018),
(17, 'Tesla', 'Tesla', 'ms_fb_s (1).jpg', 87000, 4, 'Available', '2020-12-06', 2020),
(18, 'Mustang', 'Ford', 'ford-mustang-gt-my20-tw-1001x565-(1) (1).jpg', 45000, 4, 'Available', '2020-12-06', 2020),
(19, 'Prius', 'Toyota', 'ecaa763a92a77b1cf8b1cc8042818a6f (1).jpg', 2000, 4, 'Available', '2020-12-08', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) VALUES
(6, 'rr', 'r@gmail.com', 12345, 20414827, 'Auckland ', 'Male', 15, 'Approved', 'QWERTYYYYHR'),
(7, 'Sharry', 'Sharry@gmail.com', 12345, 2041482708, 'Auckland ', 'Male', 9, 'Approved', 'QWERTYYYYHR'),
(11, 'Bhupinder Singh', 'b@gmail.coM', 1234567, 2041482708, 'Auckland ', 'Male', 10, 'Approved', 'QWERTYYU'),
(16, 'Bhupinder Singh', 'bhupindersingh7551@gmail.com', 12345, 2041482708, 'Auckland ', 'Select Gender', 0, 'Available', '');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `client_id`, `message`, `status`, `time`) VALUES
(2, 0, 'Am happy its working?', 'Read', '0000-00-00 00:00:00'),
(3, 0, 'Thanks for that..OK?', 'Read', '0000-00-00 00:00:00'),
(5, 0, 'I love this. It worked the way i want...', 'Read', '2015-08-04 21:45:33'),
(6, 0, 'hii am bhupinder', 'Read', '2020-12-06 14:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`) VALUES
(23, 'BhupinderSingh_CV_2021.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
