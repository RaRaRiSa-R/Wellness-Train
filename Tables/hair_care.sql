-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 03:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsabtu`
--

-- --------------------------------------------------------

--
-- Table structure for table `hair_care`
--

CREATE TABLE `hair_care` (
  `sno` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hair_care`
--

INSERT INTO `hair_care` (`sno`, `Name`, `Description`, `Category`, `image`) VALUES
(1, 'Hair Oils/ Hair Masks', 'Oils play an important role in protecting hair from regular wear and tear. Oiling hair regularly reduces hygral fatigue , or the swelling and drying of hair. Hair masks helps to moisturize and nourish your hair. They are especially beneficial for dry, damaged, or frizzy hair. Some of these may even improve the health of your scalp and boost the strength of your hair.', 'videos', 'hairoil.jpg'),
(2, 'Home Remedies And Treatments', 'Hair care is important for not only our appearance, but also for our overall hygiene. Having healthy hair allows us to look our best and ensure our hair and scalp is healthy. It is important to visit a reputable salon and utilize quality hair care products to ensure your hair is as healthy as possible. Here are some of these remedies and treatments for betterment of your hairs.', 'videos', 'biotinsake1.jpg'),
(3, 'Hair Diet', 'A healthy diet can help your hair stay strong and shiny. What you eat can also keep you from losing your locks. If you are not getting certain nutrients from food, you might see the effects in your hair. Essential fatty acids, especially omega-3s, play a key role in the health of your hair.', 'videos', 'damagehair4.jpg'),
(4, 'Tips: Dry Scalp', 'A dry scalp occurs when the scalp does not have enough oil for the skin to feel lubricated. Like other forms of dry skin, this can cause itching, flaking, and irritation. It can also cause the hair to look dry, since oil from the scalp helps condition the hair. People with dry skin are more prone to dry scalp.', 'articles', 'dryscalp.jfif'),
(5, 'Importance of Oiling for Hair', 'In hair care, the importance of oiling hair is just like out regular diet and you can never ignore oiling if you want to have shiny, healthy and great hair.  Oiling hair  is one of the basic and most useful techniques for maintaining hair. There is an equal importance of oiling for each man and woman. The more regular you are with it, the better hair care you will achieve.', 'articles', 'hairiolandmask2.jpg'),
(6, 'Do\'s & Dont\'s for Healthy Hair', 'Achieving healthy hair doesn’t have to be a complex task.  It really all comes down to following a few consistent healthy hair maintenance guidelines to ensure your properly caring for your strands.', 'articles', 'hairdamage3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hair_care`
--
ALTER TABLE `hair_care`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hair_care`
--
ALTER TABLE `hair_care`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
