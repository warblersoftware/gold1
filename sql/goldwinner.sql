-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2014 at 12:02 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `goldwinner`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `description` text NOT NULL,
  `parent` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `top` int(2) NOT NULL,
  `sort_order` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cat`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `description` text NOT NULL,
  `parent` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `top` int(2) NOT NULL,
  `sort_order` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `meta_description`, `meta_keyword`, `description`, `parent`, `image`, `top`, `sort_order`, `status`) VALUES
(1, 'dfds', '													fsfdsf													', 'dfdsf', 'dsf', '0', 'htc_logo.jpg', 1, 1, 1),
(2, 'fff', '																										', '', '', '1', 'ipod_touch_7.jpg', 1, 1, 0),
(3, 'oooooo', '', '', '', '0', '0', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories1`
--

CREATE TABLE IF NOT EXISTS `categories1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `description` text NOT NULL,
  `parent` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `top` int(2) NOT NULL,
  `sort_order` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories1`
--

INSERT INTO `categories1` (`id`, `category_name`, `meta_description`, `meta_keyword`, `description`, `parent`, `image`, `top`, `sort_order`, `status`) VALUES
(1, 'Desktop', '																																																																																																																																																																																																																																																																																																																																																																												kjhkj																																																																																																																																																																																																																																																																																																																																																																												', 'lkhkjl', 'kjhkjh', 0, 'canon_logo.jpg', 1, 1, 1),
(2, 'Laptop', '																																							kjhkj																																							', 'lkhkjl', 'kjhkjh', 0, '0', 1, 1, 1),
(5, 'Dell', '																																							kjhkj																																							', 'lkhkjl', 'kjhkjh', 1, '0', 1, 1, 1),
(9, 'test', 'fdsf', 'fsdfs', 'dsdfsd', 2, '0', 1, 4, 1),
(10, 'test', 'fdsf', 'fsdfs', 'dsdfsd', 2, '0', 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `latest_products`
--

CREATE TABLE IF NOT EXISTS `latest_products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `latest_products`
--


-- --------------------------------------------------------

--
-- Table structure for table `mainadmin`
--

CREATE TABLE IF NOT EXISTS `mainadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mainadmin`
--

INSERT INTO `mainadmin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'vinoth@warblerit.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `meta_tag_description` text NOT NULL,
  `meta_tag_keywords` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `product_tags` varchar(255) NOT NULL,
  `model` varchar(20) NOT NULL,
  `sku` varchar(5) NOT NULL,
  `upc` varchar(5) NOT NULL,
  `ean` varchar(5) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `isbn` varchar(5) NOT NULL,
  `mpn` varchar(5) NOT NULL,
  `price` varchar(6) NOT NULL,
  `quantity` int(3) NOT NULL,
  `minium_quantity` int(2) NOT NULL,
  `subtract_stock` varchar(10) NOT NULL,
  `out_of_stock_status` varchar(10) NOT NULL,
  `requires_shipping` varchar(10) NOT NULL,
  `seo_keyword` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `dimensions` varchar(10) NOT NULL,
  `length_class` varchar(10) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `weight_class` varchar(10) NOT NULL,
  `status` int(1) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `related_products` text NOT NULL,
  `discount_quantity` int(3) NOT NULL,
  `discount_price` varchar(10) NOT NULL,
  `special_price` varchar(10) NOT NULL,
  `multiple_image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--


-- --------------------------------------------------------

--
-- Table structure for table `product_fields`
--

CREATE TABLE IF NOT EXISTS `product_fields` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `filed_name` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `product_fields`
--

INSERT INTO `product_fields` (`id`, `filed_name`, `is_active`) VALUES
(1, 'Product Name', 1),
(2, 'Meta Tag Description', 1),
(3, 'Meta Tag Keywords', 1),
(4, 'Description', 1),
(5, 'Product Tags', 1),
(6, 'Model', 1),
(7, 'SKU', 1),
(8, 'UPC', 1),
(9, 'EAN', 1),
(10, 'JAN', 1),
(11, 'ISBN', 1),
(12, 'MPN', 1),
(13, 'Price', 1),
(14, 'Quantity', 1),
(15, 'Minimum Quantity', 1),
(16, 'Subtract Stock', 1),
(17, 'Out Of Stock Status', 1),
(18, 'Requires Shipping', 1),
(19, 'SEO Keyword', 1),
(20, 'Image', 1),
(21, 'Dimensions (L x W x H)', 1),
(22, 'Length Class', 1),
(23, 'Weight', 1),
(24, 'Weight Class', 1),
(25, 'Status', 1),
(26, 'Categories', 1),
(27, 'Related Products', 1),
(28, 'Discount Quantity', 1),
(29, 'Discount Price', 1),
(30, 'Special Price', 1),
(31, 'Multiple Image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sub_categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `zipcode`
--

CREATE TABLE IF NOT EXISTS `zipcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zip` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `county` varchar(75) NOT NULL,
  `fips` int(11) NOT NULL,
  `areacode` varchar(3) NOT NULL,
  `dst` enum('Y','N') NOT NULL,
  `timezone` varchar(20) NOT NULL,
  `lat` varchar(25) NOT NULL,
  `lon` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `zipcode`
--

INSERT INTO `zipcode` (`id`, `zip`, `city`, `state`, `county`, `fips`, `areacode`, `dst`, `timezone`, `lat`, `lon`) VALUES
(1, '21235', 'fssdf', 'sfsfds', 'sdfsfdsf', 0, '212', 'Y', 'fdsf', 'fsfsf', 'sdfsdf');
