-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 05:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucsc_canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(10) NOT NULL,
  `item` varchar(50) NOT NULL,
  `side_item` varchar(50) DEFAULT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `date` datetime(6) NOT NULL,
  `food_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_id`, `item`, `side_item`, `quantity`, `price`, `date`, `food_id`, `user_id`) VALUES
(1, 'Noodles', 'Polsumbola', 0, 0, '0000-00-00 00:00:00.000000', 1, 4),
(2, 'Normal Curry Rice', 'Kirihodda', 2, 100, '0000-00-00 00:00:00.000000', 2, 4),
(3, 'half Bread', 'Kirihodda', 3, 120, '0000-00-00 00:00:00.000000', 3, 4),
(4, 'half Bread', 'Kirihodda', 3, 120, '0000-00-00 00:00:00.000000', 3, 4),
(5, 'half Bread', 'Kirihodda', 3, 120, '0000-00-00 00:00:00.000000', 3, 4),
(6, 'half Bread', 'Kirihodda', 3, 120, '0000-00-00 00:00:00.000000', 3, 4),
(7, 'half Bread', 'Kirihodda', 3, 120, '0000-00-00 00:00:00.000000', 3, 4),
(8, 'half Bread', 'Kirihodda', 3, 120, '0000-00-00 00:00:00.000000', 3, 4),
(9, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(10, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(11, 'String Hoppers', 'Kirihodda', 1, 40, '0000-00-00 00:00:00.000000', 4, 4),
(12, 'String Hoppers', 'Kirihodda', 1, 40, '0000-00-00 00:00:00.000000', 4, 4),
(13, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(14, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(15, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(16, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(17, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(18, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(19, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(20, 'Noodles', 'Polsumbola', 1, 40, '0000-00-00 00:00:00.000000', 1, 4),
(21, 'Normal Curry Rice', 'Polsumbola', 3, 150, '0000-00-00 00:00:00.000000', 2, 4),
(22, ' Normal Curry Rice', 'Polsumbola', 1, 50, '0000-00-00 00:00:00.000000', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `userName` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `feedBack` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `date` date NOT NULL,
  `income` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`date`, `income`) VALUES
('2017-11-01', 5000),
('2017-11-02', 5500),
('2017-11-03', 6000),
('2017-11-04', 5400),
('2017-11-05', 3000),
('2017-11-06', 4500),
('2017-11-07', 5432);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `foodid` int(100) NOT NULL,
  `items` varchar(45) NOT NULL,
  `mainCourse` varchar(20) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`foodid`, `items`, `mainCourse`, `price`) VALUES
(1, 'Noodles', 'breakfast', 40),
(2, 'Normal Curry Rice', 'breakfast', 50),
(3, 'half Bread', 'breakfast', 40),
(4, 'String Hoppers', 'breakfast', 40),
(5, ' Normal Curry Rice', 'lunch', 50),
(6, 'Fried Rice with Fried Egg', 'lunch', 80),
(7, 'Normal Rice with Fried Chicken', 'lunch', 90),
(8, 'Fried Rice with Fried Chicken', 'lunch', 110),
(9, 'Roti', 'evening', 50),
(10, 'Biththara Roti', 'evening', 80),
(11, 'Elawalu Roti', 'evening', 90),
(12, 'Parata', 'evening', 110),
(13, 'Uludu Wade', 'evening', 110),
(14, 'Egg Bun', 'shorteats', 50),
(15, 'Sausage Bun', 'shorteats', 80),
(16, 'Normal Roles', 'shorteats', 90),
(17, 'Prima Roles', 'shorteats', 110),
(18, 'Patties', 'shorteats', 110),
(19, 'Tea Bun', 'shorteats', 110),
(20, 'Pancakes', 'shorteats', 110),
(21, 'Cutlets', 'shorteats', 110),
(22, 'Bread Toast', 'shorteats', 110),
(23, 'Drumsticks', 'shorteats', 110),
(24, 'Cake slices', 'shorteats', 110),
(25, 'Soft Drinks-Buddy', 'beverages', 50),
(26, 'Home Made Juices', 'beverages', 50),
(27, 'Nescafe', 'beverages', 60),
(28, 'Tea', 'beverages', 15),
(29, 'Plain Tea', 'beverages', 5),
(30, 'coffee', 'beverages', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `username` varchar(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `food_id` int(5) NOT NULL,
  `main_item` varchar(50) NOT NULL,
  `side_item` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `actor` varchar(10) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`username`, `order_id`, `food_id`, `main_item`, `side_item`, `quantity`, `actor`, `time`) VALUES
('supun123', 1, 1, 'fish bun', '----', 2, 'false', '2017-11-01 08:14:13'),
('nadunaa', 1, 1, 'egg rolls', '----', 3, 'false', '2017-11-02 08:08:18'),
('saman', 1, 1, 'toast bread', '--', 4, 'true', '2017-11-02 11:15:25'),
('Maneesha', 0, 1, 'Noodles', 'Polsumbola', 1, 'false', '0000-00-00 00:00:00'),
('Thilan', 0, 1, 'Noodles', 'Kiri Hodda', 3, 'false', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userName` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` varchar(30) NOT NULL,
  `phoneNumber` int(14) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `name`, `nic`, `phoneNumber`, `password`, `status`, `id`) VALUES
('Maneesha', 'Rajaratne', '965200193V', 767712152, 'c9bd008ef837071c5bc78d4e45e74938c1d1337f', 'admin', 1),
('Thilan', 'Costa', '943572860V', 775048462, '8cb2237d0679ca88db6464eac60da96345513964', 'customer', 2),
('senali123', 'Senali Rajaratne', '978900123V', 767712152, 'ccfd4d8034544c92bc7e9394a87ad4a902e9aad8', 'admin', 3),
('dimz123', 'Dimantha', '943572860V', 775048462, '697cb0b6340c5df0d0b05a73540aef29d27c80d3', 'customer', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`username`,`order_id`,`food_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
