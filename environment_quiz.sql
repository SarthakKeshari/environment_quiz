-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 09:28 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `environment_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `quiz_id` int(11) NOT NULL,
  `quiz_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`quiz_id`, `quiz_no`) VALUES
(1, 'Quiz 1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz1`
--

CREATE TABLE `quiz1` (
  `ques_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `opta` varchar(100) NOT NULL,
  `optb` varchar(100) NOT NULL,
  `optc` varchar(100) NOT NULL,
  `optd` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz1`
--

INSERT INTO `quiz1` (`ques_id`, `question`, `opta`, `optb`, `optc`, `optd`, `answer`) VALUES
(1, 'Which state is going to observe “No Vehicle Day” on the first day of every month in 2020?', 'Kerala', 'Gujarat', 'Punjab', 'Rajasthan', 'D'),
(2, 'According to the recent data from the Ministry of Forest Environment and Climate Change (MoEFCC), what is the total number of tiger deaths occurred in India during 2019?', '95', '100', '105', '110', 'A'),
(3, 'A one-horned rhinoceros calf was recently born at the Manas National Park. The National park is situated in which state?', 'Arunachal Pradesh', 'Assam', 'Sikkim', 'Himachal Pradesh', 'B'),
(4, 'According to the recent IMD report, which state had the highest number of deaths due to unusual weather conditions?', 'Uttar Pradesh', 'Bihar', 'Rajasthan', 'Himachal Pradesh', 'B'),
(5, 'Which national park recorded 96 unique species of wetland birds, recently?', 'Keoladeo National Park', 'Kaziranga National Park', 'Bannerghatta National Park', 'Buxa National Park', 'B'),
(6, 'Which major tech-company recently announced that it has planned to cut more than half of carbon emissions across its supply chain, by 2030?', 'Google', 'Microsoft', 'Infosys', 'IBM', 'B'),
(7, 'Kaamya Karthikeyan of Mumbai recently became the youngest girl in the world to summit Mt Aconcagua. Mt Aconcagua is the highest peak of South America, located in which country?', 'Brazil', 'Argentina', 'Peru', 'Chile', 'B'),
(8, 'Which bird is named the mascot of UN Convention of Conservation of Migratory Species (CMS) (COP 13)?', 'Great Indian Bustard', 'White-bellied heron', 'Forest owlet', 'Lesser Florican', 'A'),
(9, 'Corbett Tiger Reserve is located in which Indian state/ UT?', 'Rajasthan', 'Madhya Pradesh', 'Uttarakhand', 'West Bengal', 'C'),
(10, 'Which Indian state has recently radio-tagged an Indian Pangolin, on the occasion of World Pangolin Day?', 'Uttarakhand', 'Madhya Pradesh', 'Andhra Pradesh', 'Kerala', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `quiz1_answers`
--

CREATE TABLE `quiz1_answers` (
  `ques_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `explaination` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz1_answers`
--

INSERT INTO `quiz1_answers` (`ques_id`, `question`, `answer`, `explaination`) VALUES
(1, 'Which state is going to observe “No Vehicle Day” on the first day of every month in 2020?', 'Rajasthan', 'In order to promote road safety and reduce vehicular pollution, Rajasthan Transport department is going to observe a “No Vehicle Day” once a month in 2020. The employees of the transport department are to come to their offices as pedestrians, via bicycles or a public transport.'),
(2, 'According to the recent data from the Ministry of Forest Environment and Climate Change (MoEFCC), what is the total number of tiger deaths occurred in India during 2019?', '95', 'According to the recent data from the Ministry of Forest Environment and Climate Change (MoEFCC), the total number of tiger deaths was under 100 after three years. In the year 2019, 95 tigers were dead in total, among them 84 tigers were actually dead and 11 of them were presumed dead by identifying their body parts. In the previous year 2018, there were 100 deaths of tigers in total and in 2017, the count was 115.'),
(3, 'A one-horned rhinoceros calf was recently born at the Manas National Park. The National park is situated in which state?', 'Assam', 'The Manas National Park is a UNESCO World Heritage site and a biosphere reserve is situated in Assam. Recently a one-horned rhinoceros of the national park named R3A gave birth to its calf. The R3A was also born in the same park to the elder rhino ‘Laisri’ in 2013.\r\nThe One-horned rhinoceros or the Indian rhinoceros is an endangered species and is listed as ‘Vulnerable’ in the IUCN Red list of threatened species. At present, the national park is home to 42 rhinos.'),
(4, 'According to the recent IMD report, which state had the highest number of deaths due to unusual weather conditions?', 'Bihar', 'The India Meteorological Department (IMD) recently released a report titled ‘Statement on Climate of India During 2019’. According to the report, almost 1560 people died in 2019 due to unusual weather events including heavy rain and floods, heat wave, lightning and thunderstorm.\r\nWith nearly 650 deaths, Bihar had the highest number of people who died due to extremities in weather. The report also cited that five of the eight cyclones that hit India, were on the Arabian Sea, which was against the normal count of 1 cyclone on the west.'),
(5, 'Which national park recorded 96 unique species of wetland birds, recently?', 'Kaziranga National Park', 'According to the second wetland bird count conducted by the officials of the Kaziranga National Park and avian specialists, ithe park recorded 96 species of wetland birds. This count is one of the highest among the other national parks with birdlife.\r\nKaziranga National Park is a UNESCO World Heritage Site and is located in the state of Assam. It has the world’s largest population of Indian rhinoceros also called as the one-horned rhinoceros. Several migratory birds visit the park attracting many tourists.'),
(6, 'Which major tech-company recently announced that it has planned to cut more than half of carbon emissions across its supply chain, by 2030?', 'Microsoft', 'The Chief Executive of Microsoft Corporation, Satya Nadella recently announced that the company has set a new ambition to address climate change and promised to remove the carbon emissions the company has made.\r\nMicrosoft has planned to cut more than half of carbon emissions across its supply chain by 2030. The plan also includes the creation of a “Climate Innovation Fund,” which will invest $1 billion for developing technologies to remove carbon. The company aims to remove the entire direct and indirect carbon emissions it had made since 1975 (founding year of Microsoft), by 2050.'),
(7, 'Kaamya Karthikeyan of Mumbai recently became the youngest girl in the world to summit Mt Aconcagua. Mt Aconcagua is the highest peak of South America, located in which country?', 'Argentina', 'A 12-year old Mumbai student, Kaamya Karthikeyan has set a record of becoming the youngest in the world to summit Mt. Aconcagua, the highest peak of the Andes Mountains in Argentina, South America, an official said here on Sunday.\r\nKaamya is a Class VII student of Navy Children School, achieved the feat atop the 6962 metres tall mountain on February 1 where she unfurled the Indian Tricolour.\r\nNo stranger to tall mountains, Kaamya had summited Ladakh\'s 6,260 metres Mt. Mentok Kangri II, under extreme cold weather conditions on August 24, 2019.'),
(8, 'Which bird is named the mascot of UN Convention of Conservation of Migratory Species (CMS) (COP 13)?', 'Great Indian Bustard', 'The Union Government has announced the Great Indian Bustard (GIB) as the mascot for the 13th Conference of Parties (COP) of the UN Convention on the conservation of migratory species (CMS) to be held in Gujarat next year.\r\nThe logo, mascot and the website for the 13th Conference of Parties (COP) was launched by the Union Minister for Environment, Forests and Climate Change Harsh Vardhan. The mascot for the event, Great Indian Bustard has been fondly named as ‘Gibi’.'),
(9, 'Corbett Tiger Reserve is located in which Indian state/ UT?', 'Uttarakhand', 'Corbett Tiger Reserve is located in the Indian state of Uttarakhand. The Jim Corbett National park is known for its rich flora and fauna, especially Bengal tigers.\r\nRecently, the state cabinet of Uttarakhand approved an area of 377 sq km for the eco-sensitive zone (ESZ), which is proposed for the Corbett Tiger Reserve (CTR). As per the approval, the maximum area of the ESZ is 7.96 km. The proposal is set to be forwarded to the Central Government.'),
(10, 'Which Indian state has recently radio-tagged an Indian Pangolin, on the occasion of World Pangolin Day?', 'Madhya Pradesh', 'The Madhya Pradesh (MP) forest department & Wildlife Conservation Trust (WCT) has radio-tagged an Indian Pangolin (Manis crassicaudata) for the first time in order to know its ecology and develop an effective conservation plan.');

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `s_no` int(11) NOT NULL,
  `quiz_no` varchar(11) NOT NULL,
  `marks_scored` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scorecard`
--

INSERT INTO `scorecard` (`s_no`, `quiz_no`, `marks_scored`, `total`, `datetime`) VALUES
(6, 'Quiz 1', '0', 10, '2020-12-07 18:22:48'),
(7, 'Quiz 1', '0', 10, '2020-12-07 18:23:20'),
(8, 'Quiz 1', '0', 10, '2020-12-07 20:50:33'),
(9, 'Quiz 1', '1', 10, '2021-05-15 15:14:42'),
(10, 'Quiz 1', '0', 10, '2021-07-10 19:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `version_state`
--

CREATE TABLE `version_state` (
  `s_no` int(11) NOT NULL,
  `image` varchar(20) NOT NULL,
  `version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `version_state`
--

INSERT INTO `version_state` (`s_no`, `image`, `version`) VALUES
(1, '1(1).png', 1),
(2, '1(2).png', 1),
(3, '1(3).png', 1),
(4, '1(4).png', 1),
(5, '2(1).png', 2),
(6, '2(2).png', 2),
(7, '2(3).png', 2),
(8, '2(4).png', 2),
(9, '2(5).png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz1`
--
ALTER TABLE `quiz1`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `scorecard`
--
ALTER TABLE `scorecard`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `version_state`
--
ALTER TABLE `version_state`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz1`
--
ALTER TABLE `quiz1`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scorecard`
--
ALTER TABLE `scorecard`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `version_state`
--
ALTER TABLE `version_state`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
