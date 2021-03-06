-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 02:57 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` varchar(11) NOT NULL,
  `item_id` varchar(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `item_id`, `qty`) VALUES
('cu103', 'i_104', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `cid` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`first_name`, `last_name`, `cid`, `email`, `address`) VALUES
('DIPSHI', 'SHETTY', 'cu103', '2015dipshi.shetty@ves.ac.in', NULL),
('Sneha', 'Roundhal', 'c_101', '2015sneha.round', ''),
('Dipshi', 'Shetty', 'c_102', '2015dipshi.shet', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_name` varchar(100) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `is_stock` int(10) NOT NULL DEFAULT '1',
  `quantity` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_name`, `item_id`, `category`, `description`, `images`, `price`, `is_stock`, `quantity`, `rating`) VALUES
('Leather bag', 'i_101', 'bags', 'Good quality leather bag for daily use without using animal leather ', 'leather_bag.jpg', 600, 1, 1, 0),
('Brown bag', 'i_102', 'bags', 'God quality brown bag for daily use', 'brown_handbag.jpg', 300, 1, 1, 4),
('Floor Mat', 'i_103', 'mats', 'Daily use floor mat with good quality cloth', 'floor_mat.jpg', 100, 1, 1, 3),
('Black Handbag', 'i_104', 'bags', 'Daily purpose sleek black bag', 'black_bag.jpg', 150, 1, 1, 2),
('Woollen Doll', 'i_105', 'toys', 'Kids friendly doll to play with', 'chick.jpg', 400, 0, 0, 0),
('Dinousaur toy', 'i_106', 'toys', 'Dinosaur toy made from wool.', 'dinosaur.jpg', 150, 0, 0, 0),
('Designer Purse', 'i_107', 'bags', 'Best quality handmade designer bag for every age groyp girl', 'designer_purse.jpg', 200, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` varchar(10) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `item_id` varchar(10) NOT NULL,
  `review` text NOT NULL,
  `rating` float NOT NULL,
  `cid` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `cid` (`cid`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `item_id` (`item_id`),
  ADD KEY `cid` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
