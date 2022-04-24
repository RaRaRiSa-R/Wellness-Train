-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 03:54 PM
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
-- Table structure for table `personalized_playlist`
--

CREATE TABLE `personalized_playlist` (
  `Sno` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Scid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personalized_playlist`
--

INSERT INTO `personalized_playlist` (`Sno`, `Name`, `Image`, `Link`, `Scid`) VALUES
(1, 'what are Type1 & Type2 Diabetes', 'youtube.jpeg', 'https://www.youtube.com/watch?v=XfyGv-xwjlI', 1),
(2, '5 Best Foods for Diabetes Control', 'youtube.jpeg', 'https://www.youtube.com/watch?v=SdxnHXDBOV4', 1),
(3, 'Reverse Your Diabetes in 5 Steps', 'youtube.jpeg', 'https://www.youtube.com/watch?v=QN2arSLKqS8', 1),
(4, '3 Yoga Poses to Cure Diabetes', 'youtube.jpeg', 'https://www.youtube.com/watch?v=VNnI4H6L_NM', 1),
(5, 'Yoga for diabetes', 'youtube.jpeg', 'https://www.youtube.com/watch?v=_TjfUKb5CS0', 1),
(6, 'Gestational Diabetes & how to deal with it during pregnancy', 'youtube.jpeg', 'https://www.youtube.com/watch?v=gT6QaZd9NpY', 1),
(7, 'Gestational Diabetes | Symptoms & Treatment', 'youtube.jpeg', 'https://www.youtube.com/watch?v=3oG6hLlWAqc', 1),
(8, 'Introduction to Diabetes', 'articlef.png', 'https://www.breathewellbeing.in/blog/introduction-to-diabetes/?utm_source=search&utm_medium=India&utm_campaign=DSA_AllCategories_India&utm_content=131274890806&utm_term=&gclid=CjwKCAjwx46TBhBhEiwArA_DjFZKfSIqI0-yghJoVtBRlBaYJs1BvgqEejvqoWplCj2qWxfiHM4vfRo', 1),
(9, 'Diabetes Types & Treatments Overview', 'articlef.png', 'https://www.medicalnewstoday.com/articles/323627', 1),
(10, 'Gluten free diets', 'articlef.png', 'https://www.medicalnewstoday.com/articles/326199#summary', 1),
(11, 'Knee Pain: all articles', 'articlef.png', 'https://www.everydayhealth.com/knee-pain/all-articles/', 2),
(12, 'Exercises for Knee pain', 'youtube.jpeg', 'https://www.youtube.com/watch?v=XUNqAsH1kyA&t=309s', 2),
(13, 'Young painful knee', 'youtube.jpeg', 'https://www.youtube.com/watch?v=BejO-R9HtMI', 2),
(14, '5 Knee Pain Relief Exercise', 'youtube.jpeg\r\n', 'https://www.youtube.com/watch?v=F0NQI0j1Esw', 2),
(15, 'Foods for Knee pain and Arthritis', 'youtube.jpeg\r\n', 'https://www.youtube.com/watch?v=ZoLZNOHAWJQ', 2),
(16, 'Yoga remedies for knee pain', 'youtube.jpeg\r\n', 'https://www.youtube.com/watch?v=IhCdwKNnxHA', 2),
(17, '12 Easy Yoga Poses For Obesity & Weight Loss | Swami Ramdev', 'youtube.jpeg\r\n', 'https://youtu.be/qLigjccYrSg', 3),
(18, 'Effective breathing Exercises for Weight Loss | Dr. Hansaji Yogendra', 'youtube.jpeg\r\n', 'https://youtu.be/mVD60_A17ig', 3),
(19, 'Yoga For Weight Loss', 'youtube.jpeg\r\n', 'https://youtu.be/mfGMYe_tJdo', 3),
(20, 'Full Body Weight Loss Exercise', 'youtube.jpeg\r\n', 'https://youtu.be/YPrfcHKC1tc', 3),
(21, 'WEIGHT LOSS - Indian Weight Loss Diet', 'youtube.jpeg\r\n', ' https://youtu.be/-X6395gykhg', 3),
(22, 'Can Drinking Coffee Lead to Weight Loss?', 'articlef.png', 'https://www.everydayhealth.com/diet-nutrition/can-drinking-coffee-lead-to-weight-loss/', 3),
(23, '5 Types of Tea That May Help With Weight Loss', 'articlef.png', 'https://www.everydayhealth.com/weight/types-of-tea-that-may-help-with-weight-loss/', 3),
(24, '7 Dos and Don\'ts for Talking to a Loved One About Weight Loss', 'articlef.png', 'https://www.everydayhealth.com/weight-pictures/the-dos-and-donts-of-talking-to-a-loved-one-about-weight-loss.aspx', 3),
(25, 'Can You Lose Weight by Drinking Water?', 'articlef.png', 'https://www.everydayhealth.com/weight/can-you-lose-weight-by-drinking-water/', 3),
(26, '7 Essential Facts About Metabolism and Weight Loss', 'articlef.png', 'https://www.everydayhealth.com/news/essential-facts-about-your-metabolism-weight-loss/', 3),
(27, '30 mins BEGINNERS Workout | Lose 3-5 kgs in 1 month', 'youtube.jpeg', 'https://youtu.be/-UqOkg4NBd4', 3),
(28, 'Foods that helps to Reduce Weight', 'youtube.jpeg', 'https://youtu.be/Tuz9YGtfTII', 3),
(29, '15 Minute Belly Burn Workout', 'youtube.jpeg', 'https://youtu.be/8MAtXXXUvqo', 4),
(30, '15MINS FAT BURN WORKOUT FOR BEGINNERS', 'youtube.jpeg', 'https://youtu.be/9kdjy6TEttU', 4),
(31, '40 MIN Flat Belly ', 'youtube.jpeg', 'https://youtu.be/04iicH0zYAE', 4),
(32, 'How to Lose Arm Fat In 7 Days ', 'youtube.jpeg', 'https://youtu.be/03eoSGpUPgM', 4),
(33, '5 Simple Exercises to Lose Thigh Fat Fast ', 'youtube.jpeg', 'https://youtu.be/-RfsfNsp1vs', 4),
(34, '5 Powerful Asanas to get rid of Thigh fat Naturally at Home ', 'youtube.jpeg', 'https://youtu.be/9tr1DxHWgnY', 4),
(35, '8 Super Easy Ways To Reduce Side Fat ', 'youtube.jpeg', 'https://youtu.be/pJaCxQqSN8Y', 4),
(36, '3 Fat Burning drink  ', 'youtube.jpeg', 'https://youtu.be/zAC9xdbQ3sc', 4),
(37, 'Ayurvedic Diet Plan for Extreme Fat Loss (Healthy & Effective) ', 'youtube.jpeg', 'https://youtu.be/JlMtsyXkxQE', 4),
(38, 'Fastest way to Reduce Belly fat ', 'youtube.jpeg', 'https://youtu.be/718DNxSWPe4', 4),
(39, '15 Tips to Gain Muscle Fast ', 'youtube.jpeg', 'https://youtu.be/xLuILbm4cGg', 5),
(40, '7 Exercises to Build Bigger Arms Without Heavy Weights ', 'youtube.jpeg', 'https://youtu.be/YMD6bCudpQI', 5),
(41, 'Homemade Mass Gainer Shake ', 'youtube.jpeg', 'https://youtu.be/PMqBAVIdj04', 5),
(42, '19 Foods to Build Muscle and Gain Weight Faster ', 'youtube.jpeg', 'https://youtu.be/NM4iBO3_N-k', 5),
(43, 'The Menstrual Cycle: An Overview ', 'articlef.png\r\n', 'https://www.stanfordchildrens.org/en/topic/default?id=menstrual-cycle-an-overview-85-P00553 ', 6),
(44, 'How menstruation works ', 'youtube.jpeg', 'https://youtu.be/ayzN5f3qN8g', 6),
(45, 'Animation Film Menstrual Hygiene ', 'youtube.jpeg', 'https://youtu.be/W-CGhmKHWb0', 6),
(46, 'Say Good Bye to Irregular Periods Problem | Dr. Hansaji Yogendra ', 'youtube.jpeg', 'https://youtu.be/SSC12rZdU6M', 6),
(47, 'SAY GOODBYE to Period Problems Forever (Irregular Periods, Menstrual Cramps, PMS, Over Bleeding, etc.) ', 'youtube.jpeg', 'https://youtu.be/lGUoBm0FCZQ', 6),
(48, ' Tips to Avoid Heavy Menstrual Bleeding| Dr. Hansaji Yogendra ', 'youtube.jpeg', 'https://youtu.be/5QRo-u5WktA', 6),
(49, 'How to Manage Period Pain? ', 'youtube.jpeg', 'https://youtu.be/vU3LmEc-hCI', 6),
(50, 'Redefining the Indian Myths and Beliefs about Menstruation  ', 'youtube.jpeg', 'https://youtu.be/VYSGDIq-HVA', 6),
(51, 'Should Women Be Kept Separate During Menstruation – Sadhguru ', 'youtube.jpeg', 'https://youtu.be/xb927D0qXTU', 6),
(52, '8 Period Myths We Need to Set Straight ', 'articlef.png', 'https://www.healthline.com/health/womens-health/period-myths', 6),
(53, 'Tampons, Pads, and Other Period Supplies ', 'articlef.png', 'https://kidshealth.org/en/teens/supplies.html#:~:text=Most%20girls%20use%20on%20or,menstrual%20cups', 6),
(54, '4 Abnormal Types of Menstrual Period \r\n', 'articlef.png', 'https://www.kcobgyn.com/blog/four-abnormal-menstrual-periods ', 6),
(55, 'Menstrual Diet: Expert Tips, Dos And Don\'ts For Healthy And Comfortable Periods ', 'articlef.png', 'https://food.ndtv.com/food-drinks/menstrual-diet-expert-tips-dos-and-donts-for-healthy-and-comfortable-periods-2278439 ', 6),
(56, '8 things you should not do on your Periods ', 'articlef.png', 'https://timesofindia.indiatimes.com/life-style/health-fitness/web-stories/8-things-you-should-not-do-on-your-period/photostory/86888816.cms', 6),
(57, 'Menstrual health: Dos and don\'ts to ensure a healthy and happy period ', 'articlef.png', 'https://www.timesnownews.com/health/article/menstrual-health-dos-and-donts-to-ensure-a-healthy-and-happy-period/802888', 6),
(58, 'Baba Ramdev\'s Yog Yatra - How to control Blood Pressure & Hypertension', 'youtube.jpeg', 'https://www.youtube.com/watch?v=KcKhtzsQ-pk', 7),
(59, 'Hypertension: Definition, Causes & Prevention ', 'youtube.jpeg', 'https://www.youtube.com/watch?v=NOPu5xKCzdE', 7),
(60, '10 Diet Tips To Reduce Hypertension | High Blood Pressure', 'youtube.jpeg', 'https://www.youtube.com/watch?v=65zPRWK41B4', 7),
(61, '10 Home Remedies for Low Blood Pressure', 'youtube.jpeg', 'https://www.youtube.com/watch?v=-89R3aKPEos', 7),
(62, 'Understanding Low Blood Pressure', 'youtube.jpeg', 'https://www.youtube.com/watch?v=-CppaK-pdkk', 7),
(63, 'What can cause low BP in Pregnancy?', 'youtube.jpeg', 'https://www.youtube.com/watch?v=klL_zhgZcFk', 7),
(64, 'Fight the battle against low blood pressure', 'youtube.jpeg', 'https://www.youtube.com/watch?v=eVbgqXp4An0', 7),
(65, 'High Blood Pressure| Dr. Hansaji Yogendra', 'youtube.jpeg', 'https://www.youtube.com/watch?v=e3KPU-ZyrGk', 7),
(66, '10 Foods To Control Blood Pressure ', 'youtube.jpeg', 'https://www.youtube.com/watch?v=MbHOpesQAjY', 7),
(67, 'Diet plan to manage high BP', 'youtube.jpeg', 'https://www.youtube.com/watch?v=vWJRPUPAkDs', 7),
(68, 'Understanding Blood Pressure', 'articlef.png', 'https://www.medicalnewstoday.com/articles/270644#low-blood-pressure', 7),
(69, 'High Blood Pressure', 'articlef.png', 'https://www.medicalnewstoday.com/articles/159283#blood-pressure-chart', 7),
(70, 'Low Blood Pressure', 'articlef.png', 'https://www.medicalnewstoday.com/articles/159609#causes', 7),
(71, 'High Blood Pressure diet', 'articlef.png', 'https://www.webmd.com/hypertension-high-blood-pressure/high-blood-pressure-diet', 7),
(72, 'Diet for Low Blood Pressure', 'articlef.png', 'https://manhattancardiology.com/what-to-eat-to-help-raise-low-blood-pressure/', 7),
(73, 'Acidity - Quick Relief Yoga Poses ', 'youtube.jpeg', 'https://www.youtube.com/watch?v=rSwxM0VeEQY&t=53s', 8),
(74, 'Pranayamas to relieve acidity', 'youtube.jpeg', 'https://www.youtube.com/watch?v=fhxxhhBozug', 8),
(75, 'Are you suffering from Acidity?', 'youtube.jpeg', 'https://www.youtube.com/watch?v=huD9Ye1ZcUM', 8),
(76, '5 Asanas to reduce Acidity', 'youtube.jpeg', 'https://www.youtube.com/watch?v=Z9CJo1PR0u8', 8),
(77, 'Quick relief for acidity', 'youtube.jpeg', 'https://www.youtube.com/watch?v=OHkufzsZuIk', 8),
(78, 'Quick remedies for acidity and heartburn', 'youtube.jpeg', 'https://www.youtube.com/watch?v=urpXa7KCdkQ', 8),
(79, 'Home remedies for Acidity', 'articlef.png', 'https://www.health-total.com/acidity-articles/13-amazing-home-remedies-for-managing-acidity/', 8),
(80, 'Foods that causes Heartburn', 'articlef.png', 'https://www.health-total.com/acidity-articles/19-foods-trigger-heartburn/', 8),
(81, 'Is Acidity The Cause of Ulcers?', 'articlef.png', 'https://www.health-total.com/acidity-articles/acidity-cause-ulcers/', 8),
(82, 'Acidity Symptoms', 'articlef.png', 'https://byjus.com/biology/acidity-symptoms/', 8),
(83, '10 Eye Care Habits Ranked from Worst to Best', 'youtube.jpeg', 'https://www.youtube.com/watch?v=TmYbdBFxx20', 9),
(84, '10 BEST EYE CARE TIPS DURING ONLINE CLASSES', 'youtube.jpeg', 'https://www.youtube.com/watch?v=Z-bwBlTErdY', 9),
(85, 'How to Keep Your Eyes Healthy?', 'youtube.jpeg', 'https://www.youtube.com/watch?v=dr-LjK6BpFQ', 9),
(86, 'Dry eyes - Natural remedies', 'youtube.jpeg', 'https://www.youtube.com/watch?v=TfuTSXY4kCI', 9),
(87, 'Natural and Safe tips to Prevent and Relieve Redness in the eyes', 'youtube.jpeg', 'https://www.youtube.com/watch?v=nTyhymWBbNI', 9),
(88, 'Improve Eyesight', 'youtube.jpeg', 'https://www.youtube.com/watch?v=KeWBWZGH_Rc', 9),
(89, 'How to Improve Eyesight in 5 Steps', 'youtube.jpeg', 'https://www.youtube.com/watch?v=3QDxwMk0FRQ', 9),
(90, 'Rajiv Dixit- How to improve Eyesight', 'youtube.jpeg', 'https://www.youtube.com/watch?v=y9FAq2xLGhI', 9),
(91, 'Eye Care through Healthy Diet & Lifestyle', 'youtube.jpeg', 'https://www.youtube.com/watch?v=BmoxJAAEvN4', 9),
(92, '10 Minute Eye Exercises to Improve Eyesight', 'youtube.jpeg', 'https://www.youtube.com/watch?v=-qkx4CdBMnM', 9),
(93, 'Facial Yoga to Improve Eyesight & Eye Health', 'youtube.jpeg', 'https://www.youtube.com/watch?v=dkXh6ChCdmo', 9),
(94, 'Facial Yoga for Highlighting Eyes', 'youtube.jpeg', 'https://www.youtube.com/watch?v=HrJUXEpADVI', 9),
(95, 'Facial Yoga to Get Rid of Under Eye Wrinkle', 'youtube.jpeg', 'https://www.youtube.com/watch?v=rEexlfopT6o', 9),
(96, 'Yoga To Improve Vision & Eye Health', 'youtube.jpeg', 'https://www.youtube.com/watch?v=LRZssQTDl9U', 9),
(97, 'What are the different types of eye diseases?', 'youtube.jpeg', 'https://www.youtube.com/watch?v=V2FtOJzTjLo', 9),
(98, 'Common Eye problems', 'articlef.png', 'https://www.medicalnewstoday.com/articles/eye-problems#when-to-contact-a-doctor', 9),
(99, 'Top Causes of Eye problems', 'articlef.png', 'https://www.webmd.com/eye-health/common-eye-problems', 9),
(100, 'Home remedies for removing dark circles', 'youtube.jpeg', 'https://www.youtube.com/watch?v=6QAnli3soAo', 9),
(101, 'Acupressure Points For All EAR Problems', 'youtube.jpeg', 'https://www.youtube.com/watch?v=bDPNZmUwQ6E', 10),
(102, 'How to take care of your Ears?', 'youtube.jpeg', 'https://www.youtube.com/watch?v=UBZdJR5zEBk', 10),
(103, 'Yoga for Ear problems', 'youtube.jpeg', 'https://www.youtube.com/watch?v=9iioN-YmM2M', 10),
(104, 'Increase hearing power', 'youtube.jpeg', 'https://www.youtube.com/watch?v=4voyl6W0UUM', 10),
(105, 'Should We Clean Ears at Home?', 'youtube.jpeg', 'https://www.youtube.com/watch?v=BIsBpPg7hzY', 10),
(106, 'Ear Care Tips', 'articlef.png', 'https://my.clevelandclinic.org/health/articles/13076-ear-care-tips', 10),
(107, 'How to Clean Your Ears safely', 'articlef.png', 'https://www.medicalnewstoday.com/articles/323024', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalized_playlist`
--
ALTER TABLE `personalized_playlist`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalized_playlist`
--
ALTER TABLE `personalized_playlist`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
