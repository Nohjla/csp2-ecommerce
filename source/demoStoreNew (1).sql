-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2018 at 01:45 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoStoreNew`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'category 1'),
(2, 'category 2'),
(3, 'category 3');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `description`, `img_path`, `category_id`) VALUES
(1, 'product 1', '600.00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'https://via.placeholder.com/350x250', 1),
(2, 'product 2', '850.00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'https://via.placeholder.com/350x250\r\n', 1),
(3, 'product 3', '456.00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'https://via.placeholder.com/350x250', 2),
(4, 'product 4', '897.00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'https://via.placeholder.com/350x250\r\n', 2),
(5, 'product 5', '542.00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'https://via.placeholder.com/350x250', 3),
(6, 'product 6', '227.00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'https://via.placeholder.com/350x250', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
