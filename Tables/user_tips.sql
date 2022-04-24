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
-- Table structure for table `user_tips`
--

CREATE TABLE `user_tips` (
  `id` int(10) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tips`
--

INSERT INTO `user_tips` (`id`, `Title`, `content`, `email`, `added_on`) VALUES
(1, '5 health tips for 2020', '<p>The start of a new decade brings with it new resolutions to improve one&rsquo;s life, including a healthier lifestyle. Here are 20 practical health tips to help you start off toward healthy living in 2020.</p>\n\n<h2><strong>1. Eat a healthy diet</strong></h2>\n\n<p><img alt=\"1_20190529_091438_LR\" src=\"https://www.who.int/images/default-source/wpro/countries/philippines/feature-stories/1-20190529-091438-lr.tmb-1366v.jpg?sfvrsn=9ba890c9_2\" /><br />\n<em>Photo:&nbsp;FAO/J. Grey</em><br />\nEat a combination of different foods, including fruit, vegetables, legumes, nuts, and whole grains. Adults should eat at least five portions (400g) of fruit and vegetables per day. You can improve your intake of fruits and vegetables by always including veggies in your meal; eating fresh fruit and vegetables as snacks; eating a variety of fruits and vegetables, and eating them in season. By&nbsp;<a href=\"https://www.who.int/news-room/fact-sheets/detail/healthy-diet\" target=\"_blank\">eating healthy</a>, you will reduce your risk of malnutrition and non-communicable diseases (NCDs) such as diabetes, heart disease, stroke, and cancer.</p>\n\n<h2><strong>2. Consume less salt and sugar</strong></h2>\n\n<p><img alt=\"2_WHO_056764.orig\" src=\"https://www.who.int/images/default-source/wpro/countries/philippines/feature-stories/2-who-056764-orig.tmb-1366v.jpg?sfvrsn=c20a162e_2\" /><br />\n<em>Photo:&nbsp;WHO/C. Black</em><br />\nFilipinos consume twice the recommended amount of sodium, putting them at risk of high blood pressure, which in turn increases the risk of heart disease and stroke. Most people get their sodium through salt. Reduce your salt intake to 5g per day, equivalent to about one teaspoon. It&rsquo;s easier to do this by limiting the amount of salt, soy sauce, fish sauce, and other high-sodium condiments when preparing meals; removing salt, seasonings, and condiments from your meal table; avoiding salty snacks; and choosing low-sodium products.<br />\n<br />\nOn the other hand, consuming excessive amounts of sugars increases the risk of tooth decay and unhealthy weight gain. In both adults and children, the intake of free sugars should be reduced to less than 10% of total energy intake. This is equivalent to 50g or about 12 teaspoons for an adult. WHO recommends consuming less than 5% of total energy intake for additional health benefits. You can reduce your sugar intake by limiting the consumption of sugary snacks, candies, and sugar-sweetened beverages.</p>\n\n<h2><strong>3. Reduce intake of harmful fats</strong></h2>\n\n<p><img alt=\"3_WHO_056149.img\" src=\"https://www.who.int/images/default-source/wpro/countries/philippines/feature-stories/3-who-056149-img.tmb-1366v.jpg?sfvrsn=c0dc2291_2\" /><br />\n<em>Photo:&nbsp;WHO/S. Volkov</em><br />\nFats consumed should be less than 30% of your total energy intake. This will help prevent unhealthy weight gain and NCDs. There are different types of fats, but unsaturated fats are preferable to saturated fats and trans fats. WHO recommends reducing saturated fats to less than 10% of total energy intake; reducing trans fats to less than 1% of total energy intake, and replacing both saturated fats and trans fats with unsaturated fats.<br />\n<br />\nThe preferable unsaturated fats are found in fish, avocado, and nuts, and in sunflower, soybean, canola, and olive oils; saturated fats are found in fatty meat, butter, palm and coconut oil, cream, cheese, ghee, and lard; and trans-fats are found in baked and fried foods, and pre-packaged snacks and foods, such as frozen pizza, cookies, biscuits, and cooking oils and spreads.</p>\n\n<h2><strong>4. Avoid harmful use of alcohol</strong></h2>\n\n<p><img alt=\"4_WHO_056030.img\" src=\"https://www.who.int/images/default-source/wpro/countries/philippines/feature-stories/4-who-056030-img.tmb-1366v.jpg?sfvrsn=227d74e_2\" /><br />\n<em>Photo:&nbsp;WHO/S. Volkov</em><br />\nThere is no safe level for drinking&nbsp;<a href=\"https://www.who.int/news-room/fact-sheets/detail/alcohol\" target=\"_blank\">alcohol</a>. Consuming alcohol can lead to health problems such as mental and behavioral disorders, including alcohol dependence, major NCDs such as liver cirrhosis, some cancers, and heart diseases, as well as injuries resulting from violence and road clashes and collisions.</p>\n\n<h2><strong>5. Don&rsquo;t smoke</strong></h2>\n\n<p><img alt=\"5_F9_05052016_PH_03850_LR\" src=\"https://www.who.int/images/default-source/wpro/countries/philippines/feature-stories/5-f9-05052016-ph-03850-lr.tmb-1366v.jpg?sfvrsn=835b05bf_2\" /><br />\n<em>Photo:&nbsp;WHO/Y. Shimizu</em><br />\nSmoking tobacco causes NCDs such as lung disease, heart disease, and stroke. Tobacco kills not only the direct smokers but even non-smokers through second-hand exposure. Currently, there are around 15.9 million Filipino adults who smoke tobacco but 7 in 10 smokers are interested or plan to quit.<br />\n<br />\nIf you are currently a smoker, it&rsquo;s not too late to quit. Once you do, you will experience immediate and long-term&nbsp;<a href=\"https://www.who.int/tobacco/quitting/benefits/en/\" target=\"_blank\">health benefits</a>. If you are not a smoker, that&rsquo;s great! Do not start smoking and fight for your right to breathe tobacco-smoke-free air.</p>\n\n', 'sakshig077@gmail.com', '2022-04-19'),
(3, 'Path to improved health', '<h3>Eat healthy.</h3>\r\n\r\n<p>What you eat is closely linked to your health. Balanced nutrition has many benefits. By making&nbsp;<a href=\"https://familydoctor.org/prevention-and-wellness/food-and-nutrition/healthy-food-choices/\">healthier food choices</a>, you can prevent or treat some conditions. These include heart disease, stroke, and diabetes. A healthy diet can help you lose weight and lower your cholesterol, as well.</p>\r\n\r\n<h3>Get regular exercise.</h3>\r\n\r\n<p>Exercise can help prevent heart disease, stroke, diabetes, and colon cancer. It can help treat depression, osteoporosis, and high blood pressure. People who exercise also get injured less often.&nbsp;<a href=\"https://familydoctor.org/prevention-and-wellness/exercise-and-fitness/exercise-basics/\">Routine exercise</a>&nbsp;can make you feel better and keep your weight under control. Try to be active for 30 to 60 minutes about 5 times a week. Remember, any amount of exercise is better than none.</p>\r\n\r\n<h3>Lose weight if you&rsquo;re overweight.</h3>\r\n\r\n<p>Many Americans are overweight. Carrying too much weight increases your risk for several health conditions. These include:</p>\r\n\r\n<ul>\r\n	<li>high blood pressure</li>\r\n	<li>high cholesterol</li>\r\n	<li>type 2 diabetes</li>\r\n	<li>heart disease</li>\r\n	<li>stroke</li>\r\n	<li>some cancers</li>\r\n	<li>gallbladder disease</li>\r\n</ul>\r\n\r\n<p>Being overweight also can lead to weight-related injuries. A common problem is arthritis in the weight-bearing joints, such as your spine, hips, or knees. There are several things you can try to help you&nbsp;<a href=\"https://familydoctor.org/what-you-should-know-before-you-start-a-weight-loss-plan/\">lose weight</a>&nbsp;and keep it off.</p>\r\n\r\n<h3>Protect your skin.</h3>\r\n\r\n<p><a href=\"https://familydoctor.org/effects-early-sun-exposure/\">Sun exposure</a>&nbsp;is linked to skin cancer. This is the most common type of cancer in the United States. It&rsquo;s best to limit your time spent in the sun. Be sure to wear protective clothing and hats when you are outside. Use sunscreen year-round on exposed skin, like your face and hands. It protects your skin and helps prevent skin cancer. Choose a broad-spectrum sunscreen that blocks both UVA and UVB rays. It should be at least an SPF 15. Do not sunbathe or use tanning booths.</p>\r\n\r\n<h3>Practice safe sex.</h3>\r\n\r\n<p><a href=\"https://familydoctor.org/health-benefits-good-sex-life/\">Safe sex</a>&nbsp;is good for your emotional and physical health. The safest form of sex is between 2 people who only have sex with each other. Use protection to prevent sexually transmitted diseases (STDs). Condoms are the most effective form of prevention. Talk to your doctor if you need to be tested for STDs.</p>\r\n\r\n<h3>Don&rsquo;t smoke or use tobacco.</h3>\r\n\r\n<p>Smoking and tobacco use are harmful habits. They can cause heart disease and mouth, throat, or lung cancer. They also are leading factors of emphysema and chronic obstructive pulmonary disease (COPD). The sooner&nbsp;<a href=\"https://familydoctor.org/condition/tobacco-addiction/\">you quit</a>, the better.</p>\r\n\r\n<h3>Limit how much alcohol you drink.</h3>\r\n\r\n<p>Men should have no more than 2 drinks a day. Women should have no more than 1 drink a day. One drink is equal to 12 ounces of beer, 5 ounces of wine, or 1.5 ounces of liquor.&nbsp;<a href=\"https://familydoctor.org/condition/alcohol-abuse/\">Too much alcohol</a>&nbsp;can damage your liver. It can cause some cancers, such as throat, liver, or pancreas cancer. Alcohol abuse also contributes to deaths from car wrecks, murders, and suicides.</p>\r\n\r\n<h2>Things to consider</h2>\r\n\r\n<p>In addition to the factors listed above, you should make time for whole body health. Visit your doctors for regular checkups. This includes your primary doctor, as well as your dentist and eye doctor. Let your health benefits and preventive care services work for you. Make sure you know what your health insurance plan involves. Preventive care can detect disease or prevent illness before they start. This includes certain doctor visits and screenings.</p>\r\n\r\n<p>You need to make time for breast health. Breast cancer is a leading cause of death for women. Men can get breast cancer, too. Talk to your doctor about when you should start getting mammograms. You may need to start screening early if you have risk factors, such as family history. One way to detect breast cancer is to do a monthly self-exam.</p>\r\n\r\n<p>Women should get routine pap smears, as well. Women ages 21 to 65 should get tested every 3 years. This may differ if you have certain conditions or have had your cervix removed.</p>\r\n\r\n<p>Ask your doctor about other cancer screenings. Adults should get screened for colorectal cancer starting at age 50. Your doctor may want to check for other types of cancer. This will depend on your risk factors and family history.</p>\r\n\r\n<p>Keep a list of current medicines you take. You also should stay up to date on shots, including getting an annual flu shot. Adults need a Td booster every 10 years. Your doctor may substitute it with Tdap. This also protects against whooping cough (pertussis). Women who are pregnant need the Tdap vaccine. People who are in close contact with babies should get it, as well.</p>\r\n\r\n<h3>Questions to ask your doctor</h3>\r\n\r\n<ul>\r\n	<li>How many calories should I eat and how often should I exercise to maintain my current weight?</li>\r\n	<li>Should I have a yearly physical exam?</li>\r\n	<li>What types of preventive care does my insurance cover?</li>\r\n	<li>When should I start getting screened for certain cancers and conditions?</li>\r\n	<li>Which healthy choice is the most important for me?</li>\r\n</ul>\r\n', 'sakshig077@gmail.com', '2022-04-19'),
(4, 'Sample', '<p>sample</p>\r\n', 'sakshig077@gmail.com', '2022-04-19'),
(5, 'Sample', '<p>Sample text data</p>\r\n', 'sakshig077@gmail.com', '2022-04-19'),
(6, 'date check', '<p>Sample text for date checking</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'sakshig077@gmail.com', '2022-04-20'),
(7, 'Personalized Section', '<p>You can add following eye care video.</p>\r\n', 'ratna.priya2091@gmail.com', '2022-04-21'),
(8, 'sample', '<p>sample</p>\r\n', 'ratna.priya2091@gmail.com', '2022-04-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tips`
--
ALTER TABLE `user_tips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tips`
--
ALTER TABLE `user_tips`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
