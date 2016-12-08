-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 02:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dob` date DEFAULT NULL,
  `years_of_experience` varchar(100) CHARACTER SET utf8 NOT NULL,
  `industry` varchar(100) CHARACTER SET utf8 NOT NULL,
  `location` varchar(100) CHARACTER SET utf8 NOT NULL,
  `about_me` varchar(100) CHARACTER SET utf8 NOT NULL,
  `profile_picture` varchar(300) CHARACTER SET utf8 NOT NULL,
  `professional_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `career_level` int(100) NOT NULL,
  `communication_level` int(200) NOT NULL,
  `organizational_level` int(200) NOT NULL,
  `job_related_level` int(200) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone_number` int(200) NOT NULL,
  `website` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `full_name`, `gender`, `dob`, `years_of_experience`, `industry`, `location`, `about_me`, `profile_picture`, `professional_title`, `career_level`, `communication_level`, `organizational_level`, `job_related_level`, `address`, `phone_number`, `website`, `email`) VALUES
(10, 'McDonald', 'Male', '2016-12-14', '3', 'Telecommunication', 'Kingston', 'I am a good guy', 'uploads/picturefolder/75untitled.png', 'Engineer', 50, 30, 30, 40, '33 Canary Avenue Kingston 11', 2147483647, 'seprod.com', '  rmcdonald@seprod.com'),
(7, 'McDonald', 'Male', '2016-12-28', '4', 'Agriculture', 'Kingston', 'iguyg', 'uploads/picturefolder/19untitled.png', 'Mis Manager', 90, 90, 90, 90, '33 Canary Avenue Kingston 11', 2147483647, 'www.dfdf.com', 'hrepoewr0qu@hotmail.com'),
(8, 'McDonald', 'male', '2016-12-08', '90', 'computer', 'clarendon', 'iguyg', 'uploads/picturefolder/18untitled.png', 'kjhkjhk', 90, 90, 90, 90, '33 Canary Avenue Kingston 11', 2147483647, ';jotuotj0wu.com', 'rmcdonald@email.com'),
(9, 'Ricardo McDonald', 'Male', '2016-03-01', '3', 'Telecommunication', 'Kingston', 'I am a good guy', 'uploads/picturefolder/56untitled.png', 'Engineer', 80, 80, 80, 60, '33 Canary Avenue Kingston 11', 3772521, 'seprod.com', '  rmcdonald@seprod.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
