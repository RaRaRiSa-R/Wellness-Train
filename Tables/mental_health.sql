-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 03:26 PM
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
-- Table structure for table `mental_health`
--

CREATE TABLE `mental_health` (
  `sno` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mental_health`
--

INSERT INTO `mental_health` (`sno`, `name`, `category`, `Description`, `image`) VALUES
(1, 'Post Traumatic Stress Disorder', 'videos', 'Post-traumatic stress disorder (PTSD) is a mental health condition that\'s triggered by a terrifying event — either experiencing it or witnessing it. Symptoms may include flashbacks, nightmares and severe anxiety, as well as uncontrollable thoughts about the event.\r\nPTSD can last for months or even years, and interfere with your day-to-day functioning.', 'mentalhealth6.jpg'),
(2, 'Anger Management', 'videos', 'Anger is an emotional state that varies in intensity from mild irritation to intense fury and rage and is accompanied by physiological and biological changes.\r\nThe goal of anger management is to reduce both your emotional feelings and the physiological arousal that is caused by anger.', 'mentalhealth8.jpg'),
(3, 'Stress Management', 'videos', 'Stress management is defined as the tools, strategies, or techniques that reduce stress and reduce the negative impacts, the stress has on your mental or physical well-being. A variety of techniques can be used to manage stress. These include mental, emotional, and behavioral strategies.\r\nStress management is highly important in today\'s scenario for peaceful mind.', 'mentalhealth13.jpg'),
(4, 'Anxiety', 'videos', 'Anxiety is your body’s natural response to stress. It’s a feeling of fear or apprehension about what’s to come. Situations like, first day of school, going to a job interview, or giving a speech may cause most people to feel fearful and nervous.\r\n\r\nBut if your feelings of anxiety are extreme, i.e., lasts longer than six months, and are interfering with your life, you may have an anxiety disorder.', 'mentalhealth9.jpg'),
(5, 'Overthinking', 'videos', 'Overthinking is simply what its name suggests – thinking way too much. It is going over the same thought again and again, analyzing the simplest of situations or events until all sense of proportion has gone. The overthinking brain cannot translate these thoughts into actions or positive outcomes, so therefore creates feelings of stress and anxiety.', 'mentahealth4.jpg'),
(7, 'Importance of Mental Health ', 'articles', 'Mental health refers to a person’s emotional, psychological and social well-being. It impacts how one thinks, feels and acts. Thus it is very important to be mentally healthy along being physically healthy.', 'mentalhealth10.jpg'),
(8, 'Meditation & Mental Health', 'articles', 'Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act as we cope with life. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood and aging.\r\nThe mental health benefits of meditation include better focus and concentration, improved self-awareness and self-esteem, lower levels of stress and anxiety, and fostering kindness. Meditation also has benefits for your physical health, as it can improve your tolerance for pain and help fight substance addiction.', 'mentalhealth1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mental_health`
--
ALTER TABLE `mental_health`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mental_health`
--
ALTER TABLE `mental_health`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
