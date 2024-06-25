-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 05:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hfc-cis`
--

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE `menuitem` (
  `menuitem_id` int(10) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vegan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`menuitem_id`, `name`, `category_id`, `price`, `description`, `picture_file`, `vegan`) VALUES
(1, 'Crab Cakes', 1, '15.99', 'Crab cakes are a style of fishcake popular in the United States', 'crabcake.jpg', 0),
(2, 'Pineapple Upside-Down Cake', 3, '4.99', 'This cake is baked with its toppings at the bottom of the pan', 'pineappleupsidedowncake.jpg', 1),
(3, 'Chicken Biryani', 2, '21.99', 'A dish originating from the Indian subcontinent, made with chicken', 'biryani.jpg', 0),
(4, 'Lasagne', 2, '15.99', 'An Italian dish made with stacked layers of the pasta lasagne', 'lasagne.jpg', 0),
(5, 'Coffee', 4, '2.00', 'Brewed fresh from roasted coffee beans', 'cola.jpg', 1),
(6, 'Key Lime Pie', 3, '4.00', 'An American dessert pie, with a graham cracker crust and topped with whipped cream', 'keylimepie.jpg', 0),
(7, 'Tabbouleh', 2, '12.50', 'From the eastern Mediterranean, this salad is made from bulgur, parsely, tomatoes, and other ingredients', 'tabouleh.jpg', 1),
(8, 'Pizza', 2, '15.98', 'Of Italian origin, you choose from a variety of toppings', 'pizza.jpg', 0),
(9, 'Tea', 4, '2.00', 'An aromatic beverage made from carefully selected leaves', 'tea.jpg', 1),
(10, 'Ratatouille', 2, '11.00', 'This French Provencal dish is made from eggplants, tomatoes, onions, and other ingredients', 'ratatouille.jpg', 1),
(11, 'Coca Cola', 4, '1.50', 'The world famous soft drink', 'cola.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menuitem`
--
ALTER TABLE `menuitem`
  ADD PRIMARY KEY (`menuitem_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menuitem`
--
ALTER TABLE `menuitem`
  MODIFY `menuitem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menuitem`
--
ALTER TABLE `menuitem`
  ADD CONSTRAINT `menuitem_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
