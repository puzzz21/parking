-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2018 at 04:54 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `spaces`
--

CREATE TABLE `spaces` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `opening_time` varchar(10) DEFAULT NULL,
  `closing_time` varchar(10) DEFAULT NULL,
  `price_bike_day_hr` int(11) DEFAULT NULL,
  `price_car_day_hr` int(11) DEFAULT NULL,
  `price_bike_night_hr` int(11) DEFAULT NULL,
  `price_car_night_hr` int(11) DEFAULT NULL,
  `latitude` varchar(15) DEFAULT NULL,
  `longitude` varchar(15) DEFAULT NULL,
  `description` text,
  `car_ability` int(11) DEFAULT NULL,
  `bike_ability` int(11) DEFAULT NULL,
  `current_car_ability` int(11) DEFAULT NULL,
  `current_bike_ability` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spaces`
--

INSERT INTO `spaces` (`id`, `name`, `image1`, `opening_time`, `closing_time`, `price_bike_day_hr`, `price_car_day_hr`, `price_bike_night_hr`, `price_car_night_hr`, `latitude`, `longitude`, `description`, `car_ability`, `bike_ability`, `current_car_ability`, `current_bike_ability`) VALUES
(1, 'civil mall', 'a.jpg', '9', '10', 10, 30, 20, 60, '27.6991671', '85.3107782', 'This is parking', 10, 100, 5, 10),
(2, 'NITV', 'b.jpg', '9', '9', 20, 50, 40, 100, '27.7164265', '85.3248345', 'This is parking.', 10, 30, 4, 23),
(3, 'Basantapur', 'c.jpg', '8', '11', 10, 40, 20, 80, '27.703435', '85.3071856', 'This is parking', 30, 40, 10, 20),
(4, 'Mangal bazar', 'd.jpg', '8', '11', 20, 40, 40, 100, '27.672625', '85.3246988', 'This is parking.', 10, 20, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_number` int(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'puja', 'puja', 'puja@puja.com', '$2y$10$cafBUe7pEvIHtITUF9PyGuuCqOMONIeFhKI6LpuCeGgru7NlIAP0m', 'asd', 123123123, '2018-02-02 05:22:54', '2018-02-02 05:22:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
