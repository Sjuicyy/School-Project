-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 03, 2023 at 08:19 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

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
-- Table structure for table `anotice`
--

CREATE TABLE `anotice` (
  `Id` int(11) NOT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` varchar(1000) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anotice`
--

INSERT INTO `anotice` (`Id`, `Subject`, `Message`, `Photo`, `Date`) VALUES
(14, 'subject for notice1', 'कक्षाकोठा थप कम्तिमा ४ वटा', 'pic_sammy1.jpg', '2023-02-02'),
(15, 'subject for notice 2', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(17, 'subject for notice 4', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(18, 'subject for notice 5', 'aaaLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'pic_sammy1.jpg', '2023-02-02'),
(19, 'subject for notice 2', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(20, 'subject for notice1', 'कक्षाकोठा थप कम्तिमा ४ वटा', 'pic_sammy1.jpg', '2023-02-02'),
(21, 'subject for notice 2', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(22, 'subject for notice 4', 'qwertyuiopLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'IMG_202203122_134415.jpeg', '2023-02-06'),
(23, 'subject for notice 5', 'aaaLorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur ea dolore atque eius dignissimos veritatis doloribus perspiciatis delectus officia praesentium, enim odit? Sunt id harum voluptatibus maiores quidem eveniet nemo fuga rem, porro commodi quas tenetur? Quas fuga, libero praesentium nostrum quos quam consequatur deserunt dignissimos rem! Praesentium itaque vitae, est recusandae expedita at ullam nisi, tempora inventore fugiat, a voluptas. Dolorum, neque eveniet? Nemo, dolor aliquid culpa ullam nihil minus sapiente nostrum voluptates praesentium excepturi similique porro repellendus dignissimos assumenda reiciendis beatae. Sequi fugiat ratione molestiae ut, iste natus corporis provident velit unde harum ullam quod illum? Eius explicabo est asperiores exercitationem.', 'pic_sammy1.jpg', '2023-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `S_id` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `Date`, `S_id`, `Type`, `Post`, `Status`, `Remarks`) VALUES
(11, '2023-02-23', '123456789 ', 'basic', NULL, 'active', '111111'),
(14, '2023-02-23', '9867867203', 'basic', NULL, 'active', '12345'),
(15, '2023-02-23', '9867867205 ', 'basic', NULL, 'active', '123456789'),
(17, '2023-02-23', '98678672012 ', 'basic', NULL, 'active', '1234567890'),
(18, '2023-05-03', '9867867202 ', 'basic', NULL, 'active', '12345'),
(19, '2023-05-03', '12345 ', 'basic', NULL, 'pending', 'sfasfdsf');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Id`, `Pid`, `Subject`, `Date`, `Message`) VALUES
(80, '9867867207', 'hello', '2023-02-11', 'i am teacher'),
(81, '9867867207', 'hello', '2023-02-11', '1234567'),
(85, '98678672012', 'hello', '2023-02-15', 'i am diku student \r\n'),
(86, '9867867207', 'hello', '2023-02-15', 'i am 1 teacher');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Id` int(255) NOT NULL,
  `Photos` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`Id`, `Photos`) VALUES
(8, '290821747_2205524539599977_794677673475804567_n.jpg'),
(14, '302068147_1242887569587041_6741160895894565085_n.jpg'),
(16, 'pritam_sir.jpg'),
(17, 'pic_sammy1.jpg'),
(23, '298804202_596006535574964_3130435837806572826_n-1.jpg'),
(24, '298804202_596006535574964_3130435837806572826_n-1.jpg'),
(25, '298804202_596006535574964_3130435837806572826_n-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pmc`
--

CREATE TABLE `pmc` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `Since` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pmc`
--

INSERT INTO `pmc` (`Id`, `Name`, `Post`, `Since`, `Image`) VALUES
(5, 'तुलसीनारायण दाहाल ', 'अध्यक्ष', '2023-02-02', 'pritam_sir.jpg'),
(6, 'धनमान गोले', 'उपाध्यक्ष', '2023-02-01', 'pic_sammy1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `smc`
--

CREATE TABLE `smc` (
  `Id` int(30) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `Since` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smc`
--

INSERT INTO `smc` (`Id`, `Name`, `Post`, `Since`, `Image`) VALUES
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
  `Emsg` varchar(255) DEFAULT NULL,
  `IsAdmin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `Address`, `Contact`, `Email`, `Profession`, `Fname`, `Batch`, `Photo`, `Facebook`, `Pwd`, `Status`, `About`, `Emsg`, `IsAdmin`) VALUES
('Hello', 'Hello Address', '12345', 'hello@gmail.com', 'adfhdais;', 'Hello Father', '2012', '342838948_3448163668847034_743265438024356953_n.jpg', 'dfha;ilf', 'hello', '1', 'hello about', NULL, NULL),
('Aaa Jjjj', 'Imadol,lalitpur,Nepal', '123456789', 'aarju123@gmail.com', 'qreghtwr', 'A J Father', '2012', 'Laxman Joshi.jpg', 'https://www.facebook.com/sammy.juicyy/aaa', '123456789', '2', 'hey', NULL, '1'),
('Diku Khadka', 'Imadol,lalitpur,Nepal', '98678672012', 'diku@gmail.com', 'Engineeer', 'Ins Khadka', '2013', 'pic_sammy1.jpg', 'f.com', '123456789', '2', 'good man', NULL, '1'),
('Shyam Joshi', 'Imadol,lalitpur,Nepal', '9867867202', 'sjuicyy@gmail.com', 'Computer Engineeer', 'Narad P. Joshi', '2013', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', '2', 'a good boy 111', NULL, '1'),
('Keshav Joshi', 'Imadol,lalitpur,Nepal', '986786720211', 'keshav1@gmail.com', 'hero', 'Narad P. Joshi12', '2012', '26941065_1117182161770679_2016111291_n.png', 'https://www.facebook.com/sammy.juicyy/aaa', '123456789', '2', 'good man112', NULL, NULL),
('Shyam ', '423', '98678672024321567', 'aarju12345@gmail.com', '14253', '1451', '2013', '295657.jpg', 'facebook', '123456789', '1', '1245', NULL, NULL),
('Shyam Joshi', 'Imadol,lalitpur,Nepal', '98678672025314', 'aarju12@gmail.com', 'demo profession', 'P Father', '2012', '310462680_2929179720717460_5851847500842744745_n.jpg', 'facebook', '123456789', '2', 'w', NULL, 'lifetime'),
('Aarju', 'Imadol,lalitpur,Nepal', '98678672026789', 'aarju1@gmail.com', 'qreghtwr', 'Fname', '2012', '277861480_792600371967137_5740644828172946368_n (1).jpg', 'https://www.facebook.com/sammy.juicyy/huigy', '123456789', '1', 'good girl', NULL, NULL),
('Pritam Dczar', 'Imadol,lalitpur,Nepal', '9867867203', 'pritamdczar@gmail.com', 'manager', 'Fname', '2012', 'pritam_sir.jpg', 'https://www.facebook.com/sammy.juicyy/aaa', '123456789', '2', 'good boy hoooo', 'fake', NULL),
('keshav Joshi', 'Imadol,lalitpur,Nepal', '9867867205', 'keshav@gmail.com', 'Computer Engineeer', 'Narad P. Joshi', '2013', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', '2', 'a good boy ', NULL, NULL),
(NULL, NULL, 'newuser@gmail.com', 'newuser@gmail.com', NULL, NULL, NULL, NULL, NULL, 'newuser', NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Name`, `Address`, `Subject`, `Contact`, `Email`, `Education`, `Fdate`, `Tdate`, `Photo`, `Facebook`, `Pwd`, `Twitter`, `Instagram`, `Linkedin`, `About`) VALUES
('Shyam Joshi1', 'Imadol,lalitpur,Nepal', 'computer', '9867867207', 'sjuicyy1@gmail.com', 'master', '2023-02-01', '2023-02-02', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', 't.com', 'i.com', 'l.com', 'genious to be'),
('Shyam Joshi2', 'Imadol,lalitpur,Nepal', 'computer', '9867867208', 'sjuicyy2@gmail.com', 'master', '2023-02-01', '2023-02-02', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', 't.com', 'i.com', 'l.com', 'genious to be'),
('Shyam Joshi3', 'Imadol,lalitpur,Nepal', 'computer', '9867867209', 'sjuicyy3@gmail.com', 'master', '2023-02-01', '2023-02-02', 'pic_sammy1.jpg', 'https://www.facebook.com/sammy.juicyy', '123456789', 't.com', 'i.com', 'l.com', 'genious to be');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Post` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Message` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`Id`, `Name`, `Post`, `Image`, `Message`) VALUES
(4, 'श्री ईन्द्रमणि दाहाल ', 'प्रमुख सल्लाहकार तथा पूर्व शिक्षक', 'pritam_sir.jpg', 'यस श्री सरस्वती विद्याश्रम मा.वि. को म पूर्व शिक्षक ईन्द्रमणि दाहाल यो विद्यालयदेखि धेरै नै सन्तुष्ट छ । सन्तुष्ट यो मनेकि पहिला छाप्रोबाट सुरु गरेको विद्यालय अहिले आएर यतिका विद्यालयका भवन र पहिला विद्यालयको लागि केही जमिन नभएको र अहिले आएर यस विद्यालयको नाममा ७ रोपनि ८ आना जमिन, पहिला आपूm एक्लैले विद्यार्थीलाई अध्यापन गराएको अहिले प्रसस्त मात्रामा शिक्षक, शिक्षिका भएको देख्दा र पहिला १ देखि ३ कक्षा सम्म भएको विद्यालय अहिले १० कक्षासम्म भएको र आगामी शैक्षिक वर्षदेखि १०+२ सम्म चलाउने भनी व्यवस्थापन हृदयदेखि खुसी हुदै अवका दिन पनि खुसीले रमाउन पाइयोस् । यस विद्यालयको उन्नति प्रगति देख्न पाइयोस् । यस विद्यालयका शिक्षक शिक्षिकाको प्रगति होस् । विद्यार्थी भाइबहिनीहरूको पनि प्रगति उन्नति होस् । यस विद्यालयमा अध्ययन गर्ने अनुशासित भई देशको भलो चिताऊन् म ईश्वरसँग यही कामना गर्दछु ।  '),
(5, 'shyam joshi', 'president', 'pic_sammy1.jpg', 'best school');

-- --------------------------------------------------------

--
-- Table structure for table `touch`
--

CREATE TABLE `touch` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `touch`
--

INSERT INTO `touch` (`Id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(12, 'shyam ', 'sjuicyy@gmail.com', 'hello', 'aaaa'),
(13, 'shyam ', 'sjuicyy@gmail.com', 'hello', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anotice`
--
ALTER TABLE `anotice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pmc`
--
ALTER TABLE `pmc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `smc`
--
ALTER TABLE `smc`
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
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `touch`
--
ALTER TABLE `touch`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anotice`
--
ALTER TABLE `anotice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pmc`
--
ALTER TABLE `pmc`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smc`
--
ALTER TABLE `smc`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `touch`
--
ALTER TABLE `touch`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
