-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2013 at 12:10 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbs`
--
CREATE DATABASE IF NOT EXISTS `dbs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbs`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `sold`, `category`, `picture`) VALUES
(1, 'Gelatinous Milk', 'This milk has been mixed with gelatin, making it gelatinous (don''t worry about health risk though, because it is pasteurized).', 10, 3, 'Dairy', '-'),
(2, 'Longevity Cheese', 'This particular cheese has been mixed with an organic material to ensure that anyone (or anything) that eats it will be blessed with longevity.', 15, 12, 'Dairy', '-'),
(3, 'Rainbow Butter', 'This is one of those unique kinds of butter that will change its color to the opposite of its surface (amazing, right?).', 12, 8, 'Dairy', '-'),
(4, 'Nutrient Yogurt', 'This yogurt contains everything that you need to consume in a day (although it won''t make you full).', 69, 184, 'Dairy', '-'),
(5, 'Jack-o''-Pumpkin', 'If you don''t have time to craft pumpkins for Halloween, fear not! This pumpkin will craft itself into a Jack-o''-lantern.\r\nWarning : Only use it on your cooking on days other than  Halloween day. You have been warned.', 43, 20, 'Fruit', '-'),
(6, 'StarFruit', 'This is literally a star fruit. Make sure that you don''t keep it in the open so that it doesn''t go out into the sky. It tastes divine though!', 62, 31, 'Fruit', '-'),
(7, 'Annoying Orange', 'This orange will emit a strange sound that definitely will annoy you, hence the name.', 32, 10, 'Fruit', '-'),
(8, 'Truth and Lie Apple', 'This unique apple will make you always tell truth when you eat one side, and will always make you lie when you eat the other side.', 30, 51, 'Fruit', '-'),
(9, 'Popeye Spinach', 'Most people that were born on late 20th century should know about this. This particular spinach will increase your energy by an amazing 1000%!', 164, 100, 'Vegetable', '-'),
(10, 'Peashooter', 'Plants vs. Zombies fans familiar with this? Like in the game, this will shoot a pea for you to cook (not to kill zombies, sorry...).', 251, 56, 'Vegetable', '-'),
(11, 'Cornpop', 'Don''t be startled when you cook this, because it will turn into a popcorn in an instant when cooked!', 45, 72, 'Vegetable', '-'),
(12, 'Fishy Meat', 'This fish meat looks really fishy that you will think twice before using it to cook. It''s actually edible though.', 12, 2, 'Meat', '-'),
(13, 'T-Bone Steak', 'This is a bone-in meat that looks like letter T... unnaturally. It tasted like other fantastic steaks though.', 20, 43, 'Meat', '-'),
(14, 'Lame Steak', 'This particular lamb meat will make your cooking feel lame, no matter how good you do it...', 31, 23, 'Meat', '-'),
(15, 'Curly Powder', 'This is actually a curry powder, but somehow... This powder will fuse into each other, making something like a long string.', 50, 29, 'Spice', '-'),
(16, 'Six-Spice Powder', 'This is actually five-spice powder that is mixed with another ingredient, which is... salt.', 64, 38, 'Spice', '-'),
(17, 'Negative Powder', 'Another unique powder. This one will always reverse the taste of a cooking. In other words : Use this ONLY in a REALLY, REALLY, BAD cooking, which will make it taste fantastic (health risk not gone though...).', 86, 89, 'Spice', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
