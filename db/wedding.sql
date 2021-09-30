-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  10, 2021 at 10:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilefor` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `subcommunity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `contact`, `email`, `password`, `profilefor`, `gender`, `dob`, `religion`, `community`, `subcommunity`) VALUES
('Saurabh', '0987', 'saurabh@gmail.com', 'Pass@123', 'Self', 'Male', '2021-07-08', 'Hindu', 'Garo', 'Brahmin-Gowd Saraswat');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `withfamily` varchar(255) NOT NULL,
  `maritalstatus` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `diet` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `subcommunity` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `clg` varchar(255) NOT NULL,
  `workswith` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `aas` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name`, `contact`, `email`, `age`, `gender`, `city`, `state`, `withfamily`, `maritalstatus`, `child`, `diet`, `height`, `weight`, `religion`, `community`, `subcommunity`, `qualification`, `clg`, `workswith`, `company`, `aas`, `income`, `about`, `image`) VALUES
('ABC', '1234', 'abc@gmail.com', '26', 'Male', 'Mumbai', 'Maharashtra', 'Yes', 'Never married', 'No', 'Non-veg', '5ft 8in - 172cm', '67', 'Hindu', 'Marathi', 'Brahmin-Anavil', 'B.E/B.Tech', 'JNEC', 'Private Company', 'ABC', 'Mechanical/Production Engineer', '2 to 4 Lakh Yearly', 'I am outgoing, dedicated, and open-minded. I get across to people and adjust to changes with ease. I believe that a person should work on developing their professional skills and learning new things all the time.', '1.jpg'),
('DEF', '3456', 'def@gmail.com', '24', 'Male', 'Kolkata', 'Bengal', 'Yes', 'Never married', 'No', 'Eggetarian', '5ft 10in - 177cm', '67', 'Hindu', 'Bengali', 'Brahmin-Dhiman', 'D.Pharma', 'VDG', 'Private Company', 'XYZ', 'Pharmacist', '2 to 4 Lakh Yearly', 'I am outgoing, dedicated, and open-minded. I get across to people and adjust to changes with ease. I believe that a person should work on developing their professional skills and learning new things all the time.', '2.jpg'),
('JKL', '5678', 'jkl1@gmail.com', '30', 'Female', 'Chennai', 'Madras', 'Yes', 'Never married', 'No', 'Veg', '5ft 6in - 167cm', '50', 'Hindu', 'Tamil', 'Brahmin-Vyas', 'M.Arch', 'STU', 'Private Company', 'STU', 'Architect', '7 to 10 Lakh Yearly', 'I am outgoing, dedicated, and open-minded. I get across to people and adjust to changes with ease. I believe that a person should work on developing their professional skills and learning new things all the time.', '4.jpg'),
('JKL', '5678', 'jkl@gmail.com', '30', 'Female', 'Chennai', 'Madras', 'Yes', 'Never married', 'No', 'Veg', '5ft 6in - 167cm', '50', 'Hindu', 'Tamil', 'Brahmin-Vyas', 'M.Arch', 'STU', 'Private Company', 'STU', 'Architect', '7 to 10 Lakh Yearly', 'I am outgoing, dedicated, and open-minded. I get across to people and adjust to changes with ease. I believe that a person should work on developing their professional skills and learning new things all the time.', '4.jpg'),
('PQR', '4567', 'pqr@gmail.com', '30', 'Female', 'Pune', 'Aurangabad', 'No', 'Divorced', 'Yes. Living togather', 'Veg', '5ft 4in - 162cm', '31', 'Hindu', 'Marathi', 'Brahmin-Gour', 'LLB (Hons)', 'DEF', 'Government/Public Sector', 'PQR', 'Legal Assistant', '4 to 7 Lakh Yearly', 'I am outgoing, dedicated, and open-minded. I get across to people and adjust to changes with ease. I believe that a person should work on developing their professional skills and learning new things all the time.', '5.jpg'),
('STU', '1245', 'stu@gmail.com', '28', 'Male', 'Aurangabad', 'Maharashtra', 'Yes', 'Awaiting divorce', 'Yes. Not living togather', 'Ocassionally Non-veg', '5ft 2in - 157cm', '75', 'Hindu', 'Malayalam', 'Brahmin-Bhumihar', 'B.IT', 'FJK', 'Business/Self Employed', 'PQR', 'Media Professional', '7 to 10 Lakh Yearly', 'I am STU hWKDJHKSAJHSLKDCNKDSJBCNMDSVBH', '1.jpg'),
('XYZ', '3456', 'xyz@gmail.com', '28', 'Female', 'Pune', 'Maharashtra', 'Yes', 'Never married', 'No', 'Veg', '5ft 5in - 165cm', '55', 'Hindu', 'Arunachali', 'Brahmin-Audichya', 'BHMS', 'JKL', 'Business/Self Employed', 'Clinic', 'Doctor', '2 to 4 Lakh Yearly', 'kjdjvjmfnv,bm,mn,mn ,vbmbcvbnnmcxvnjcvnmfnmbfdvbjfbvbfdn, mv,nm,nm,kjdjvjmfnv,bm,mn,mn,vbmbcvbnnmcxvnjcvnmfnmbfdvbjf bvbfdn,mv,nm,nm,kjdjvjm f', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`)
--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
