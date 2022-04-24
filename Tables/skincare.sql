-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 03:55 PM
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
-- Table structure for table `skincare`
--

CREATE TABLE `skincare` (
  `sno` int(10) NOT NULL,
  `topicname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`sno`, `topicname`, `image`, `description`, `category`) VALUES
(1, 'Dry Skin', 'shhd.jpg', 'Dry skin is an uncomfortable condition marked by scaling, itching, and cracking. It can occur for a variety of reasons. You might have naturally dry skin. But even if your skin tends to be oily, you can develop dry skin from time to time.\r\nDry skin can affect any part of your body.', 'videos'),
(2, 'Oily Skin', 'skincare11.jpg', 'An oily skin type is exactly what it sounds like – excess oil on the face, which results in shiny or greasy appearance. If you don\'t treat your oily skin, pores can become clogged and enlarged, and dead skin cells may accumulate. Blackheads, pimples and other types of acne are also common with this skin type.', 'videos'),
(3, 'Combination Skin', 'skincare7.jpg', 'Combination skin type tends to display certain characteristics of oily skin (large pores, shine, blackheads) on the forehead, jaw and nose, and other characteristics of dry skin (flakiness, dullness, fine lines and wrinkles) on the cheeks, jawline and hairline.', 'videos'),
(4, 'Food/Drinks for SkinCare', 'skincare2.jpg', 'Your skin is the largest organ in your body. Protecting it from outside pollutants and chemicals can be a challenge, but what you eat each day makes an even bigger difference. The foods/drinks you have plays a vital role in the health of your skin, including in how your skin changes as you get older. Therefore, one should always eat and drink healthy.', 'videos'),
(5, 'Home-made solutions for Skin Care & problems', 'skincare10.jpg', 'Using simple garden or kitchen ingredients you can tackle almost every skin problem: tanning, open pores, acne, oily skin, over-dry skin, blackheads, whiteheads, etc. \r\nName the problem and nature has the solution for you.', 'videos'),
(6, 'Yoga/Massages/Exercises for Skin Betterment', 'skincare16.jpg', 'Facial yoga does to your face what yoga does to your body. Facial exercises and massages have been a secret pathway for healthy, glowing skin since time immemorial. The philosophy of facial yoga and massages is to stretch all the 57 face and neck muscles to tone, firm and boost circulation for a youthful appearance. ', 'videos'),
(7, 'What\'s your Skin Type?', 'skincare3.jpg', 'Every skin is different; and so are it\'s related problems. To solve your skin-related queries, it is extremely crucial to know which type of skin is yours?', 'videos'),
(8, 'Do\'s and Dont\'s: Oily Skin', 'skincare15.jpg', 'Everybody’s skin produces oil. Your sebaceous glands produce sebum, an oily or waxy substance that moisturizes and protects your skin and hair. Oily skin happens when your glands produce too much sebum, which can lead to a greasy surface, clogged pores, and acne.\r\n\r\nOily skin is perfectly normal. But there are several things to keep in mind when caring for oily skin.', 'articles'),
(9, 'Tips for Sensitive Skin', 'skincare9.jpg', 'Sensitive skin is one of the different types of Skin and is prone to inflammation.\r\nPeople with sensitive skin may have acne, rosacea or contact dermatitis, a type of red, itchy rash. \r\nThis skin type might also be especially prone to stinging or burning.', 'articles'),
(10, 'Diet for Healthy Skin', 'skincare8.jpg', 'What we eat can also impact the health and appearance of our skin.\r\nA healthy diet includes raw minerals, vitamins and other nutrients, acids, phytochemicals and other useful compounds that our skin and body needs on a daily basis. There are some foods that are loaded with these essential elements that can help to nurture our skin.', 'articles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skincare`
--
ALTER TABLE `skincare`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skincare`
--
ALTER TABLE `skincare`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
