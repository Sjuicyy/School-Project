-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2023 at 05:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `School`
--

-- --------------------------------------------------------

--
-- Table structure for table `ANotice`
--

CREATE TABLE `ANotice` (
  `Id` int(11) NOT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` varchar(1000) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ANotice`
--

INSERT INTO `ANotice` (`Id`, `Subject`, `Message`, `Photo`, `Date`) VALUES
(14, 'aaa', '(क) कक्षाकोठा थप कम्तिमा ४ वटा', 'pic_sammy1.jpg', '2023-02-02'),
(15, 'hello', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(16, 'hello', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(17, 'hello', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(18, 'aaa', 'aaaLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'pic_sammy1.jpg', '2023-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Id` int(255) NOT NULL,
  `Pid` varchar(255) NOT NULL,
  `Subject` varchar(1000) NOT NULL,
  `Date` date NOT NULL,
  `Message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Id`, `Pid`, `Subject`, `Date`, `Message`) VALUES
(80, '9867867207', 'hello', '2023-02-11', 'i am teacher'),
(81, '9867867207', 'hello', '2023-02-11', '1234567'),
(85, '98678672012', 'hello', '2023-02-15', 'i am diku student \r\n'),
(86, '9867867207', 'hello', '2023-02-15', 'i am 1 teacher'),
(88, '98678672012', 'hello', '2023-02-17', 'world');

-- --------------------------------------------------------

--
-- Table structure for table `Photos`
--

CREATE TABLE `Photos` (
  `Id` int(255) NOT NULL,
  `Photos` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Photos`
--

INSERT INTO `Photos` (`Id`, `Photos`) VALUES
(8, '290821747_2205524539599977_794677673475804567_n.jpg'),
(14, '302068147_1242887569587041_6741160895894565085_n.jpg'),
(16, 'pritam_sir.jpg'),
(17, 'pic_sammy1.jpg'),
(18, 'IMG_20230108_093020.jpg'),
(21, 'Photo on 04-08-2022 at 4.50 PM.jpg'),
(22, 'Photo on 04-08-2022 at 4.51 PM.jpg'),
(23, '298804202_596006535574964_3130435837806572826_n-1.jpg'),
(24, '298804202_596006535574964_3130435837806572826_n-1.jpg'),
(25, '298804202_596006535574964_3130435837806572826_n-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Pmc`
--

CREATE TABLE `Pmc` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `Since` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pmc`
--

INSERT INTO `Pmc` (`Id`, `Name`, `Post`, `Since`, `Image`) VALUES
(5, 'तुलसीनारायण दाहाल ', 'अध्यक्ष', '2023-02-02', 'pritam_sir.jpg'),
(6, 'धनमान गोले', 'उपाध्यक्ष', '2023-02-01', 'pic_sammy1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Smc`
--

CREATE TABLE `Smc` (
  `Id` int(30) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `Since` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Smc`
--

INSERT INTO `Smc` (`Id`, `Name`, `Post`, `Since`, `Image`) VALUES
(31, 'धनमान गोले', 'उपाध्यक्ष', '2023-02-03', '2022-05-27 2.05.13 PM.jpg'),
(32, 'तुलसीनारायण दाहाल ', 'अध्यक्ष', '2023-02-16', 'pritam_sir.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Contact` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Profession` varchar(255) DEFAULT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Batch` varchar(255) DEFAULT NULL,
  `Photo` varchar(500) DEFAULT NULL,
  `Facebook` varchar(500) DEFAULT NULL,
  `Pwd` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `About` varchar(10000) DEFAULT NULL,
  `Emsg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `Address`, `Contact`, `Email`, `Profession`, `Fname`, `Batch`, `Photo`, `Facebook`, `Pwd`, `Status`, `About`, `Emsg`) VALUES
('Diku Khadka', 'Imadol,lalitpur,Nepal', '98678672012', 'diku@gmail.com', 'Engineeer', 'Ins Khadka', '2013', 'pic_sammy1.jpg', 'f.com', '123456789', '2', 'good man', NULL),
('Shyam Joshi', 'Imadol,lalitpur,Nepal', '9867867202', 'sjuicyy@gmail.com', 'Computer Engineeer', 'Narad P. Joshi', '2013', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', '2', 'a good boy 111', NULL),
('Pritam Dczar', 'Imadol,lalitpur,Nepal', '9867867203', 'pritamdczar@gmail.com', 'manager', 'Fname', '2012', 'pritam_sir.jpg', 'https://www.facebook.com/sammy.juicyy/aaa', '1234567890', '2', 'good boy hoooo', 'fake'),
('keshav Joshi', 'Imadol,lalitpur,Nepal', '9867867205', 'keshav@gmail.com', 'Computer Engineeer', 'Narad P. Joshi', '2013', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', '2', 'a good boy ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Contact` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Education` varchar(255) DEFAULT NULL,
  `Fdate` varchar(255) DEFAULT NULL,
  `Tdate` date DEFAULT NULL,
  `Photo` varchar(500) DEFAULT NULL,
  `Facebook` varchar(500) DEFAULT NULL,
  `Pwd` varchar(255) DEFAULT NULL,
  `Twitter` varchar(500) DEFAULT NULL,
  `Instagram` varchar(500) DEFAULT NULL,
  `Linkedin` varchar(500) DEFAULT NULL,
  `About` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Name`, `Address`, `Subject`, `Contact`, `Email`, `Education`, `Fdate`, `Tdate`, `Photo`, `Facebook`, `Pwd`, `Twitter`, `Instagram`, `Linkedin`, `About`) VALUES
('Shyam Joshi1', 'Imadol,lalitpur,Nepal', 'computer', '9867867207', 'sjuicyy1@gmail.com', 'master', '2023-02-01', '2023-02-02', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', 't.com', 'i.com', 'l.com', 'genious to be'),
('Shyam Joshi2', 'Imadol,lalitpur,Nepal', 'computer', '9867867208', 'sjuicyy2@gmail.com', 'master', '2023-02-01', '2023-02-02', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', 't.com', 'i.com', 'l.com', 'genious to be'),
('Shyam Joshi3', 'Imadol,lalitpur,Nepal', 'computer', '9867867209', 'sjuicyy3@gmail.com', 'master', '2023-02-01', '2023-02-02', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', 't.com', 'i.com', 'l.com', 'genious to be');

-- --------------------------------------------------------

--
-- Table structure for table `Testimony`
--

CREATE TABLE `Testimony` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Message` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Testimony`
--

INSERT INTO `Testimony` (`Id`, `Name`, `Post`, `Image`, `Message`) VALUES
(4, 'श्री ईन्द्रमणि दाहाल ', 'प्रमुख सल्लाहकार तथा पूर्व शिक्षक', 'pritam_sir.jpg', 'यस श्री सरस्वती विद्याश्रम मा.वि. को म पूर्व शिक्षक ईन्द्रमणि दाहाल यो विद्यालयदेखि धेरै नै सन्तुष्ट छ । सन्तुष्ट यो मनेकि पहिला छाप्रोबाट सुरु गरेको विद्यालय अहिले आएर यतिका विद्यालयका भवन र पहिला विद्यालयको लागि केही जमिन नभएको र अहिले आएर यस विद्यालयको नाममा ७ रोपनि ८ आना जमिन, पहिला आपूm एक्लैले विद्यार्थीलाई अध्यापन गराएको अहिले प्रसस्त मात्रामा शिक्षक, शिक्षिका भएको देख्दा र पहिला १ देखि ३ कक्षा सम्म भएको विद्यालय अहिले १० कक्षासम्म भएको र आगामी शैक्षिक वर्षदेखि १०+२ सम्म चलाउने भनी व्यवस्थापन हृदयदेखि खुसी हुदै अवका दिन पनि खुसीले रमाउन पाइयोस् । यस विद्यालयको उन्नति प्रगति देख्न पाइयोस् । यस विद्यालयका शिक्षक शिक्षिकाको प्रगति होस् । विद्यार्थी भाइबहिनीहरूको पनि प्रगति उन्नति होस् । यस विद्यालयमा अध्ययन गर्ने अनुशासित भई देशको भलो चिताऊन् म ईश्वरसँग यही कामना गर्दछु ।  '),
(5, 'shyam joshi', 'president', 'pic_sammy1.jpg', 'best school');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ANotice`
--
ALTER TABLE `ANotice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Photos`
--
ALTER TABLE `Photos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Pmc`
--
ALTER TABLE `Pmc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Smc`
--
ALTER TABLE `Smc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Contact`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Contact`);

--
-- Indexes for table `Testimony`
--
ALTER TABLE `Testimony`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ANotice`
--
ALTER TABLE `ANotice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `Photos`
--
ALTER TABLE `Photos`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `Pmc`
--
ALTER TABLE `Pmc`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Smc`
--
ALTER TABLE `Smc`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `Testimony`
--
ALTER TABLE `Testimony`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
