-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2019 at 11:04 AM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friends_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_order`
--

DROP TABLE IF EXISTS `client_order`;
CREATE TABLE IF NOT EXISTS `client_order` (
  `pro_name` varchar(50) NOT NULL,
  `item_num` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `acc_num` int(11) NOT NULL,
  `mob_num` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `order_num` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`order_num`,`item_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcatg` varchar(50) NOT NULL,
  `img` varchar(250) NOT NULL,
  `price` varchar(60) NOT NULL,
  `describtion` varchar(35) NOT NULL,
  `info` varchar(150) NOT NULL,
  `item_date` varchar(14) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `subcatg`, `img`, `price`, `describtion`, `info`, `item_date`) VALUES
(1, 'Coats&Jackets', 'Images/jackets/Military_Jacket.jpg', 'LE 400.50 EGP', 'Military Jacket', 'Short, thin windbreaker jacket with zipper closure', '2019-07-28'),
(2, 'Coats&Jackets', 'Images/jackets/Casual_Windbreaker_jacket.jpg', 'LE 600 EGP', 'Casual Windbreaker Jacket', 'Short, thin windbreaker jacket with Mandarin collar.Polyester, Cotton', '2019-07-28'),
(3, 'Coats&Jackets', 'Images/jackets/Casual_Winter_Coat.png', 'LE 450 EGP', 'Casual Winter Coat', 'Warm, quilted and padded short winter jacket with zipper closure.Nylon, Cotton ', '2019-07-28'),
(4, 'Coats&Jackets', 'Images/jackets/Casual_Autumn_Jacket.jpg', 'LE 400 EGP', 'Casual_Autumn_Jacket', 'Short fleece jacket with Mandarin collar and button-down closure.Polyester, Cotton', '2019-07-28'),
(5, 'Coats&Jackets', 'Images/jackets/Casual_Baseball_Jacket.jpg', 'LE 480.50 EGP', 'Casual_Baseball_Jacket', 'Short slim-fit jacket with Mandarin collar and zipper closure.Acetate', '2019-07-29'),
(6, 'Coats&Jackets', 'Images/jackets/Emiliano_Jackets.jpg', 'LE 520.50 EGP', 'Emiliano Jackets', 'Faux leather slim-fit bomber jacket with zipper closure. Polyester', '2019-07-29'),
(7, 'Coats&Jackets', 'Images/jackets/Gentleman_Jacket.jpg', 'LE 600 EGP', 'Gentleman Jacket', 'Short, thin windbreaker jacket with standing collar and zipper closure. Polyester', '2019-07-29'),
(8, 'Coats&Jackets', 'Images/jackets/Ivano_Jacket.png', 'LE 470 EGP', 'Ivano Jacket', 'Regular-fit faux leather jacket with zipper closure. Cotton', '2019-07-30'),
(9, 'Coats&Jackets', 'Images/jackets/Jenson_Denim_Jacket.jpg', ' LE 600 EGP', 'Jenson Denim Jacket', 'A regular fit denim jacket with metallic button front. Cotton, Spandex', '2019-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_info` varchar(150) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `sub_info`) VALUES
(1, 'Accessories'),
(2, 'Coats&Jackets'),
(3, 'Hoodies'),
(4, 'Jeans&Pants'),
(5, 'Shoes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
