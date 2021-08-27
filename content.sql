-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2019 at 01:15 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content`
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
  `item_date` varchar(14) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `subcatg`, `img`, `price`, `describtion`, `item_date`) VALUES
(1, 'Coats&Jackets', 'Images/jackets/Military_Jacket.jpg', 'LE 400.50 EGP', 'Military Jacket', '2019-07-28'),
(2, 'Coats&Jackets', 'Images/jackets/Casual_Windbreaker_jacket.jpg', 'LE 600 EGP', 'Casual Windbreaker Jacket', '2019-07-28'),
(3, 'Coats&Jackets', 'Images/jackets/Casual_Winter_Coat.png', 'LE 450 EGP', 'Casual Winter Coat', '2019-07-28'),
(4, 'Coats&Jackets', 'Images/jackets/Casual_Autumn_Jacket.jpg', 'LE 400 EGP', 'Casual_Autumn_Jacket', '2019-07-28'),
(5, 'Coats&Jackets', 'Images/jackets/Casual_Baseball_Jacket.jpg', 'LE 480.50 EGP', 'Casual_Baseball_Jacket', '2019-07-29'),
(6, 'Coats&Jackets', 'Images/jackets/Emiliano_Jackets.jpg', 'LE 520.50 EGP', 'Emiliano Jackets', '2019-07-29'),
(7, 'Coats&Jackets', 'Images/jackets/Gentleman_Jacket.jpg', 'LE 600 EGP', 'Gentleman Jacket', '2019-07-29'),
(8, 'Coats&Jackets', 'Images/jackets/Ivano_Jacket.png', 'LE 470 EGP', 'Ivano Jacket', '2019-07-30'),
(9, 'Coats&Jackets', 'Images/jackets/Jenson_Denim_Jacket.jpg', ' LE 600 EGP', 'Jenson Denim Jacket', '2019-07-30'),
(10, 'Accessories', 'Images/Accessories/Be_ltramo_Wallet.png', 'LE 150.50 EGP', 'Be Itramo Wallet', '2019-07-28'),
(11, 'Accessories', 'Images/Accessories/Classic_Polarized_Sunglasses.jpg', 'LE 140 EGP', 'Classic_Polarized_Sunglasses', '2019-07-28'),
(12, 'Accessories', 'Images/Accessories/Di_Bello_Wallet.png', 'LE 150 EGP', 'Di_Bello_Wallet', '2019-07-28'),
(13, 'Accessories', 'Images/Accessories/Elogio_Watch.jpg', 'LE 175 EGP', 'Elogio_Watch', '2019-07-28'),
(14, 'Accessories', 'Images/Accessories/Jeans_Baseball_Cap.jpg', 'LE 180 EGP', 'Jeans_Baseball_Cap', '2019-07-29'),
(15, 'Accessories', 'Images/Accessories/Jeffery_Polarized_Sunglasses.jpg', 'LE 200 EGP', 'Jeffery_Polarized_Sunglasses', '2019-07-29'),
(16, 'Accessories', 'Images/Accessories/Joy_Belt.jpg', 'LE 135 EGP', 'Joy_Belt', '2019-07-29'),
(17, 'Accessories', 'Images/Accessories/Newman_Baseball_Cap.jpg', 'LE 90 EGP', 'Marcus_sunglasses', '2019-07-29'),
(18, 'Accessories', 'Images/Accessories/Newman_Baseball_Cap.jpg', 'LE 90 EGP', 'Newman_Baseball_Cap', '2019-07-30'),
(19, 'jeans', 'Images/jeans/Agildo_Jeans.jpg', 'LE 150.50 EGP', 'Agildo Jeans', '2019-07-30'),
(20, 'jeans', 'Images/jeans/Genziano_jeans.jpg', 'LE 400 EGP', 'Genziano jeans', '2019-07-30'),
(21, 'jeans', 'Images/jeans/Giovane_Jeans.jpg', 'LE 450 EGP', 'Giovane Jeans ', '2019-07-30'),
(22, 'jeans', 'Images/jeans/Mancio_jeans.jpg', 'LE 400 EGP', 'Mancio jeans', '2019-07-30'),
(23, 'jeans', 'Images/jeans/Marco_pants.jpg', 'LE 520.50 EGP', 'Marco pants', '2019-07-30'),
(24, 'jeans', 'Images/jeans/Topered_Stretchy_Joggers.png', ' LE 600 EGP', 'Topered Stretchy Joggers', '2019-07-30'),
(25, 'jeans', 'Images/jeans/Urban_pants.jpg', 'LE 470 EGP', 'Urban pants', '2019-07-30'),
(26, 'jeans', 'Images/jeans/Black_Jeans.jpg', 'LE 400 EGP', 'Black Jeans', '2019-07-30'),
(27, 'Hoodies', 'Images/Hoodies/AlvieroHoodie.jpg', 'LE 250.50 EGP', 'Alviero Hoodie', ' 2019-07-28'),
(28, 'Hoodies', 'Images/Hoodies/Carponio_slim_Hoodie.jpg', 'LE 250.50 EGP', 'Carponio slim Hoodie', '2019-07-28'),
(29, 'Hoodies', 'Images/Hoodies/Ettore_Zipper_Hoodie.png', 'LE 450.50 EGP', 'Ettore Zipper Hoodie', ' 2019-07-29'),
(30, 'Hoodies', 'Images/Hoodies/Gilberto_Hoodie.jpg', 'LE 326 EGP', ' Gilberto Hoodie', ' 2019-07-29'),
(31, 'Hoodies', 'Images/Hoodies/Olivier_Hoodie.jpg', 'LE 246 EGP', 'Olivier Hoodie', ' 2019-07-29'),
(32, 'Hoodies', 'Images/Hoodies/Riccardo_Hoodie.jpg', 'LE 420 EGP', 'Riccardo Hoodie', '2019-07-29'),
(33, 'Hoodies', 'Images/Hoodies/Fulvio_Hoodie.jpg', 'LE 520 EGP', 'Fulvio Hoodie', '2019-07-29'),
(34, 'Hoodies', 'Images/Hoodies/Three_Colored_Hoodie.jpg', 'LE 350 EGP', 'Three Colored Hoodie', '2019-07-30'),
(35, 'Hoodies', 'Images/Hoodies/Roberti_Hoodie.jpg', 'LE 415.5 EGP', 'Roberti Hoodie', '2019-07-30');

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
