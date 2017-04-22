-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 11:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easybid`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `icon_url` varchar(255) DEFAULT NULL,
  `auctioneer_id` int(11) DEFAULT NULL,
  `list_price` float DEFAULT NULL,
  `min_price` float DEFAULT NULL,
  `item_condition` enum('new','slightlyUsed','collectors') DEFAULT NULL,
  `status` enum('available','inTransit','delivered') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `description`, `icon_url`, `auctioneer_id`, `list_price`, `min_price`, `item_condition`, `status`) VALUES
(1, 'Ghanaian bag', 'Express where you come from. High quality bag with bright colors', '../image/items/1b.jpg', 1, 400, 300, 'slightlyUsed', 'inTransit'),
(2, 'Ghanaian T-SHIRT', 'Pure cotton, high quality t-shirt', '../image/items/2.jpg', 1, 700, 500, 'new', 'available'),
(3, 'Ladies\'s beauty bag', 'Green and beautiful. Made of rare materials form italy', '../image/items/3.jpg', 1, 400, 250, 'new', 'available'),
(4, 'Ultimate perfume', 'A perfume with irresistible scent and impeccable pachage', '../image/items/4.jpg', 1, 1200, 800, 'new', 'available'),
(5, 'EON FLAM Bag', 'Strong, flexible and prestigious bag. ', '../image/items/5.jpg', 1, 850, 550, 'new', 'available'),
(6, 'HP_560', 'RAM:8GB, i7,  500GB Free space. You get power to do any task', '../image/items/6.jpg', 1, 4000, 3000, 'new', 'available'),
(7, 'HP_MONSTER', 'Powerful and affordable, This is of one the best laptops from HP', '../image/items/7.jpg', 1, 2000, 2000, 'new', 'available'),
(8, 'I Phone 7 plus', 'good camera, improved battery life and sleek design', '../image/items/8.jpg', 1, 3000, 2500, 'new', 'available'),
(9, 'I phone 6', 'more processing power, larger screen and great design', '../image/items/9.jpg', 1, 2900, 2800, 'new', 'available'),
(10, 'Bikini', 'soft, beatuful and confortable', '../image/items/10.jpg', 1, 100, 0, 'new', 'available'),
(11, 'Smart TV', 'High Definition Display', '../image/items/11.jpg', 1, 5000, 1500, 'new', 'available'),
(12, 'Sweet Jean', 'Strong and flexible, light blue. ', '../image/items/12.jpg', 1, 200, 150, 'new', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`),
  ADD KEY `items_ibfk_1` (`auctioneer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`auctioneer_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
