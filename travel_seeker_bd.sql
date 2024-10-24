-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2024 at 11:35 PM
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
-- Database: `travel_seeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_plans` int(11) DEFAULT 0,
  `total_companies` int(11) DEFAULT 0,
  `avg_price` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `total_plans`, `total_companies`, `avg_price`) VALUES
(1, 'Cox\'s Bazar', 10, 5, 3000),
(2, 'Sundarbans', 8, 4, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `description`, `end_date`) VALUES
(1, 'Summer Special', 'Get 10% off on all tours booked by July 2024.', '2024-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `tour_plans`
--

CREATE TABLE `tour_plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `organizing_agency` varchar(255) DEFAULT NULL,
  `pickup_location` varchar(255) DEFAULT NULL,
  `around_locations` text DEFAULT NULL,
  `inclusion` text DEFAULT NULL,
  `exclusion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_plans`
--

INSERT INTO `tour_plans` (`id`, `title`, `destination`, `price`, `duration`, `description`, `organizing_agency`, `pickup_location`, `around_locations`, `inclusion`, `exclusion`) VALUES
(1, 'Cox\'s Bazar Trip', 'Cox\'s Bazar', 3000, '2 Days & 1 Night', 'Enjoy the beauty of Cox\'s Bazar with our exclusive package.', 'Travel Seeker BD', 'Cox\'s Bazar Airport', 'Kolatoli Beach, Himchari, Marine Drive', 'Transportation, Accommodation, Breakfast', 'Lunch, Dinner'),
(2, 'Sundarbans Adventure', 'Sundarbans', 5000, '3 Days & 2 Nights', 'Explore the largest mangrove forest with expert guides.', 'EcoTour BD', 'Khulna Train Station', 'Katka Beach, Karamjol, Herbaria Forest', 'Guide, Accommodation, Meals', 'Personal expenses, Entry fees');

-- --------------------------------------------------------

--
-- Table structure for table `tour_statistics`
--

CREATE TABLE `tour_statistics` (
  `id` int(11) NOT NULL,
  `tours_completed` int(11) DEFAULT 0,
  `total_tourists` int(11) DEFAULT 0,
  `total_plans` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_statistics`
--

INSERT INTO `tour_statistics` (`id`, `tours_completed`, `total_tourists`, `total_plans`) VALUES
(1, 130, 110, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_plans`
--
ALTER TABLE `tour_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_statistics`
--
ALTER TABLE `tour_statistics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_plans`
--
ALTER TABLE `tour_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_statistics`
--
ALTER TABLE `tour_statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
