-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 04:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `megacart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_rate` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `user_name`, `item_id`, `item_rate`, `item_qty`) VALUES
(1, 'ram', 21, 10450, 1),
(3, 'ram', 26, 140000, 25),
(4, 'ram', 21, 10450, 1),
(6, 'roy', 7, 9800, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_dname` varchar(40) NOT NULL,
  `image_path` text NOT NULL,
  `cat_type` varchar(10) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `image_path`, `cat_type`, `cat_parent_id`, `reg_date`) VALUES
(1, 'Electronics', 'Electronics', 'e.jpg', 'Primary', 0, '2022-06-29'),
(2, 'Furniture', 'Furniture', 'f.jpeg', 'Primary', 0, '2022-07-01'),
(5, 'Jewellary', 'Jewellary', 'j.jpg', 'Primary', 0, '2022-07-01'),
(8, 'Clothing', 'Clothing', 'c.jpg', 'Primary', 0, '2022-07-03'),
(13, 'Soft Toys', 'Toys', 't.webp', 'Primary', 0, '2022-07-03'),
(14, 'Stationery', 'Stationery', 's.jpg', 'Primary', 0, '2022-07-03'),
(17, 'Mobile', 'Mobile', '', 'Secondary', 1, '2022-07-13'),
(19, 'TV', 'TV', '', 'Secondary', 1, '2022-07-13'),
(20, 'Sofa', 'Sofa', 'f.jpeg', 'Secondary', 2, '2022-07-13'),
(21, 'recliner', 'Furniture', '3e228310a685729909797075b46d8c12.jpg', 'Secondary', 2, '2022-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_mobile` varchar(20) NOT NULL,
  `cust_address` text NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`cust_id`, `cust_name`, `cust_email`, `cust_mobile`, `cust_address`, `user_name`, `user_pass`, `user_type`, `reg_date`) VALUES
(4, 'Ram Sharma', 'ram123@gmail.com', '7896245166', 'Bhilai', 'ram', '1', 'user', '2022-06-29'),
(5, 'Rudra Roy', 'rudra@gmail.com', '7984651325', 'Bhilai', 'roy', 'r', 'user', '2022-06-29'),
(6, 'Rudra Roy', 'rudra@gmail.com', '7984651325', 'Bhilai', 'roy', '1', 'user', '2022-06-29'),
(7, 'sonu sen', 'sonu234@gmail.com', '6987452315', 'durg', 'sonu', 'sonu', 'user', '2022-06-29'),
(11, 'Ankita Das', 'ankita@gmail.com', '7089161879', 'Bangalore', 'piyapiya', '2123', 'user', '2022-06-29'),
(21, 'Golu', 'golu@gmail.com', '7896541235', 'Hudco', 'golu', '10', 'user', '2022-06-30'),
(22, 'mohan', 'mohan21@gmail.com', '7777777777', 'agra', 'm', 'm', 'admin', '2022-06-30'),
(23, 'Ipshita', 'ipshi@gmail.com', '8523697412', 'Bhilai-3', 'i', 'i', 'admin', '2022-07-12'),
(27, 'piya', 'piya@00000', '09876543210', 'lkjhgfdsaoi iuytrew, bhilai', 'piya', 'p', 'user', '2022-07-13'),
(28, 'ABCD', 'A@', '7896541235', 'JSCKJA', 'ABCD', 'ABCD', 'user', '2022-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE IF NOT EXISTS `item_info` (
  `It_id` int(11) NOT NULL AUTO_INCREMENT,
  `It_name` varchar(20) NOT NULL,
  `It_dname` varchar(20) NOT NULL,
  `image_path` varchar(30) NOT NULL,
  `It_parent_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `It_price` int(11) NOT NULL,
  `It_dprice` int(11) NOT NULL,
  PRIMARY KEY (`It_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`It_id`, `It_name`, `It_dname`, `image_path`, `It_parent_id`, `reg_date`, `It_price`, `It_dprice`) VALUES
(5, 'Tops', 'White, Butterfly sle', 'top.jpg', 8, '2022-07-03', 1000, 2),
(7, 'Ring', 'Silver', '', 5, '2022-07-03', 10000, 2),
(18, 'Soft Toys', 'teddy', 't.webp', 13, '2022-07-03', 1000, 2),
(21, 'Redmi Note 4', '64 GB ROM | 4 GB RAM', '', 17, '2022-07-13', 11000, 5),
(22, 'SONY TV', 'Bravia | 44 inch', '', 19, '2022-07-13', 30000, 2),
(24, 'Wrist Watch', 'TITAN ', 'watch.webp', 0, '2022-07-13', 2500, 5),
(25, 'Wooden Set', '5 seater', '', 20, '2022-07-13', 150000, 25),
(26, 'Luxury Set', '5 seater', '', 20, '2022-07-13', 200000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `message_info`
--

CREATE TABLE IF NOT EXISTS `message_info` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_heading` text NOT NULL,
  `msg_detail` text NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `receiver_name` varchar(30) NOT NULL,
  `sent_date` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `message_info`
--

INSERT INTO `message_info` (`msg_id`, `msg_heading`, `msg_detail`, `sender_name`, `receiver_name`, `sent_date`) VALUES
(1, 'Titan Dealer ', 'Bad packaging of product', 'ram', 'admin', '2022-07-20 00:00:00'),
(2, 'gkbk', 'jhvj', 'ram', 'admin', '2022-07-23 00:00:00'),
(4, 'abcd', 'abcd efgh', 'ram', 'admin', '2022-07-23 00:00:00'),
(7, 'Defective product', 'hgvhgv uygtyfy nnnnnnn mmmmmm kkkkkkk jjjjjjjj hhhhhhhhhh ggggggggggfffffffff lllll', 'ram', 'admin', '2022-07-23 19:52:05'),
(8, 'nnnnn', 'aaaaaaaaaaaaa', 'i', 'ram', '2022-07-23 22:22:06'),
(9, 'nnnnnnn', 'mmmmmmm', 'i', 'ram', '2022-07-23 22:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_heading` text NOT NULL,
  `news_detail` text NOT NULL,
  `reg_date` date NOT NULL,
  `del_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_heading`, `news_detail`, `reg_date`, `del_status`) VALUES
(4, 'Launching new brands of clothings from the next week...', 'chjv vjhvb hbvub jbue bvjk', '2022-07-18', 0),
(5, 'Releasing Offer on next month', 'bhcj uvwv abjkagvye angtf', '2022-07-18', 0),
(6, 'New Collection! New Collection! New Collection!', 'bjbgvgve bvhegyeg mnkuehue khefuhf jhfuig\r\n', '2022-07-18', 0),
(7, 'hcgc', 'hfhf', '2022-07-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_start_dt` datetime NOT NULL,
  `offer_end_dt` datetime NOT NULL,
  `cat_type` text NOT NULL,
  `offer_discount` float NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_start_dt`, `offer_end_dt`, `cat_type`, `offer_discount`, `reg_date`) VALUES
(16, 'Monsoon Dhamaka', '2022-07-14 00:00:00', '2022-07-17 00:00:00', '2-20-', 10, '2022-07-14'),
(21, 'Janmashthami Offer', '2022-07-14 00:00:00', '2022-07-20 00:00:00', '1', 20, '2022-07-14'),
(22, 'Raksha Bandhan Sale', '2022-07-14 00:00:00', '2022-07-16 00:00:00', '1-17-19', 50, '2022-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_rate` float NOT NULL,
  `order_ref_id` int(11) NOT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `item_id`, `item_quantity`, `item_rate`, `order_ref_id`) VALUES
(1, 12, 1, 1960, 2),
(2, 13, 2, 4850, 4),
(3, 19, 2, 13500, 7),
(4, 12, 2, 1960, 8),
(5, 14, 5, 490, 9),
(6, 19, 2, 13500, 10),
(7, 13, 1, 4850, 11),
(8, 19, 2, 13500, 25),
(9, 13, 3, 4850, 26),
(10, 5, 5, 980, 26),
(11, 19, 5, 13500, 27),
(12, 13, 2, 4850, 27),
(13, 13, 2, 4850, 27),
(14, 5, 2, 980, 28),
(15, 13, 1, 4850, 28),
(16, 13, 2, 4850, 28),
(17, 13, 2, 4850, 29),
(18, 13, 2, 4850, 29),
(19, 19, 2, 13500, 30),
(20, 19, 1, 13500, 31),
(21, 13, 2, 4850, 32),
(22, 21, 1, 10450, 33),
(23, 22, 1, 29400, 33),
(24, 21, 5, 10450, 34),
(25, 26, 5, 140000, 38);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `order_date` datetime NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `user_name`, `order_date`, `total`) VALUES
(1, 'piyapiya', '2022-07-05 00:00:00', 1960),
(4, 'golu', '2022-07-05 00:00:00', 9700),
(5, 'golu', '2022-07-05 00:00:00', 9700),
(6, 'golu', '2022-07-05 00:00:00', 0),
(7, 'a', '2022-07-05 00:00:00', 27000),
(8, 'sonu', '2022-07-05 00:00:00', 3920),
(9, 'roy', '2022-07-05 00:00:00', 2450),
(10, 'roy', '2022-07-05 00:00:00', 27000),
(26, 'i', '2022-07-12 00:00:00', 19450),
(27, 'ram', '2022-07-12 00:00:00', 86900),
(28, 'm', '2022-07-12 00:00:00', 16510),
(29, 'ram', '2022-07-12 00:00:00', 19400),
(30, 'm', '2022-07-12 00:00:00', 27000),
(31, 'ram', '2022-07-12 00:00:00', 13500),
(32, 'ram', '2022-07-13 00:00:00', 9700),
(33, 'ram', '2022-07-13 00:00:00', 39850),
(34, 'ram', '2022-07-13 20:51:40', 52250),
(35, 'ram', '2022-07-13 22:15:58', 0),
(36, 'piya', '2022-07-13 22:18:12', 0),
(37, 'piya', '2022-07-13 22:18:17', 0),
(38, 'golu', '2022-07-19 01:06:35', 700000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
