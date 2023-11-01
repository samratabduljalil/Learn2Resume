-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2023 at 03:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int NOT NULL,
  `course_code` varchar(50) DEFAULT NULL,
  `course_name` varchar(250) DEFAULT NULL,
  `student_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `course_code`, `course_name`, `student_id`) VALUES
(4, 'web001', 'Web devolopment', 7),
(5, 'web001', 'Web devolopment', 10),
(6, 'web001', 'Web devolopment', 11),
(7, 'web001', 'Web devolopment', 12),
(8, 'web001', 'Web devolopment', 6),
(9, 'web001', 'Web devolopment', 15);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `complete` int DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `img` varchar(1200) DEFAULT NULL,
  `fee` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `Name`, `complete`, `course_code`, `img`, `fee`) VALUES
(6, 'Web devolopment', NULL, 'web001', NULL, 210),
(7, 'Data Science', NULL, 'cse1110', NULL, 256),
(11, 'Data Analist', 1, 'cse556', NULL, 780),
(12, 'sam id s dam', NULL, 'sam', 'C:fakepath1.png', 1245);

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `ID` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_video`
--

CREATE TABLE `course_video` (
  `ID` int NOT NULL,
  `course_id` varchar(50) DEFAULT NULL,
  `video_link` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `R_p` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_video`
--

INSERT INTO `course_video` (`ID`, `course_id`, `video_link`, `R_p`) VALUES
(1, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=VKi6ZVnnB84OWkRc&amp;list=PLDzeHZWIZsTo0wSBcg4-NMIbC0L8evLrD\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(2, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rb00g_CPY6U?si=jrz1Ryj5ZSferiTi\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(3, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=nl_RLU0O6esbsQgw&amp;list=PLfqMhTWNBTe3H6c9OGXb5_6wcc1Mca52n\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(4, '5314', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=nl_RLU0O6esbsQgw&amp;list=PLfqMhTWNBTe3H6c9OGXb5_6wcc1Mca52n\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(5, '5123', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=nl_RLU0O6esbsQgw&amp;list=PLfqMhTWNBTe3H6c9OGXb5_6wcc1Mca52n\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(6, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JUwePydwbUI?si=dQiPrDig7JIwsQKB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(7, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XU0FYlY9_E0?si=nVMFTd_AG7HocRga\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(8, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=VKowidW9mbbbm4Ug&amp;list=PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(9, 'CSE-420', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=aK2EMwO1VaO51kEG&amp;list=PL82D6HIBQ19_FFz0fEcEuit0VZ9jz94pg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cv_admin`
--

CREATE TABLE `cv_admin` (
  `UserID` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cv_admin`
--

INSERT INTO `cv_admin` (`UserID`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Samrat admin', NULL, 'admin@gmail.com', '1234'),
(2, 'Samrat Abdul Jalil', NULL, 'm/j4oWZHhBBen+/QtE3aww==', '/Ang/wa521yOxI13xCkQ2A=='),
(3, 'admin', NULL, 'hJ59r5f/he01dJ0ZCStvYQ==', '/Ang/wa521yOxI13xCkQ2A==');

-- --------------------------------------------------------

--
-- Table structure for table `cv_template`
--

CREATE TABLE `cv_template` (
  `UserID` int NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `css` varchar(200) DEFAULT NULL,
  `qr` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cv_template`
--

INSERT INTO `cv_template` (`UserID`, `link`, `image`, `css`, `qr`) VALUES
(16, 'temp/1546985463777.php', 'temp/967475892Screenshot (291).png', 'temp/434154873style.css', 'temp/1546985463777.php6719924294.png'),
(17, 'temp/1041691121777.php', 'temp/467514115Screenshot (289).png', 'temp/1766855054style.css', 'temp/1041691121777.php91247000097.png'),
(19, 'temp/979454862777.php', 'temp/1472693218Screenshot (290).png', 'temp/798764281style.css', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cv_user`
--

CREATE TABLE `cv_user` (
  `UserID` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `edu_1` varchar(100) DEFAULT NULL,
  `edu_2` varchar(100) DEFAULT NULL,
  `degree_1` varchar(100) DEFAULT NULL,
  `degree_2` varchar(100) DEFAULT NULL,
  `cgpa_1` varchar(100) DEFAULT NULL,
  `cgpa_2` varchar(100) DEFAULT NULL,
  `c_name_1` varchar(100) DEFAULT NULL,
  `c_name_2` varchar(100) DEFAULT NULL,
  `c_position_1` varchar(100) DEFAULT NULL,
  `c_position_2` varchar(100) DEFAULT NULL,
  `c_year_1` varchar(100) DEFAULT NULL,
  `c_year_2` varchar(100) DEFAULT NULL,
  `skills_1` varchar(100) DEFAULT NULL,
  `skills_2` varchar(100) DEFAULT NULL,
  `skills_3` varchar(100) DEFAULT NULL,
  `skills_4` varchar(100) DEFAULT NULL,
  `skills_5` varchar(100) DEFAULT NULL,
  `skills_6` varchar(100) DEFAULT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image_co` varchar(500) DEFAULT NULL,
  `active` int DEFAULT NULL,
  `qr` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cv_user`
--

INSERT INTO `cv_user` (`UserID`, `name`, `phone`, `position`, `edu_1`, `edu_2`, `degree_1`, `degree_2`, `cgpa_1`, `cgpa_2`, `c_name_1`, `c_name_2`, `c_position_1`, `c_position_2`, `c_year_1`, `c_year_2`, `skills_1`, `skills_2`, `skills_3`, `skills_4`, `skills_5`, `skills_6`, `img`, `email`, `about`, `address`, `password`, `image_co`, `active`, `qr`) VALUES
(6, 'Samrat Abdul Jalil', 'Software Engineer', 'asfas', 'asdasfsa', 'dff', 'asfsa', 'dfdfdsff', 'f', 'dsfdsf', 'dfdsfds', 'dddd', 'dsvfdsfdfdf', 'ddd', 'sss', 'ddd', 'c++', 'ss', 'sss', 'ss', 'sss', 'sss', 'upload/1692674373773.jpg', 'samrat@gmail.com', 'I am very Bad Boy', 'sdaf', '1234', 'upload/Copy of IMG_6587.jpg', 1, NULL),
(7, 'Ovie', '01731049538', 'Student', 'UIU', 'KPC', 'CSE', 'HSC', '3.22', '5.00', 'VivaSoft', 'therap', 'Senior Q&A tester', 'Jr. Executive', '01-02-2023 to 01-02-2024', '20111', 'CSS', 'PHP', 'HTML', 'PYthon', 'JAVAScript', '', 'upload/4.jpg', 'ovierahaman1@gmail.com', 'I am a student of UIU.', 'Badda, 102, Dhaka', '1234', 'upload/10615232583.jpg', 0, NULL),
(8, 'Samrat Abdul Jalil', '01777777777', 'Software Engineer', 'United International University', 'Khulna Public College', 'Bsc in Computer Science and Engineering', 'Higher secondary certificate ', '2.00', '4.00', 'VivaSoft', 'Therap BD', 'Junior Software Engineer', 'Senior Software Engineer', '2020-2022', '2022-running', 'C++', 'HTML', 'C#', 'CSS', 'JAVA', 'Sass', 'upload/1692674373773.jpg', 'samratabduljalil@gmail.com', 'I am very bad boy .', 'DIU Goli,Satarku, Badda, Dhaka', '1234', 'upload/Copy of IMG_6587.jpg', 0, NULL),
(9, 'Brohi', '01790771834', 'Bekar', 'United International University', 'Brahmanbaria Govt. College', 'Bsc in CSE', 'Higher Secondary Certificate ', '1', '4', 'VivaSoft', 'Therap (bd) Ltd.', 'Junior Software Engineer', 'Senior Software Engineer', '2020-2022', '2022-running', 'C/C++', 'HTML', 'Python', 'Deep Learning', 'Java', 'NLP', 'upload/1692674373773.jpg', 'amirulbrohi@gmail.com', 'Nothing to write', 'Dhaka', '01790771834', 'upload/Copy of IMG_6587.jpg', 0, NULL),
(10, 'Abdur Rahman', '01567458943', 'Part time Engineer', 'United International University', 'Khulna Public Collage', 'Bsc in CSE', 'Higher Secondary Certificate ', '4.00', '5.00', 'XYZ', 'Therap (bd) Ltd.', 'Junior Software Engineer', 'Senior Software Engineer', '2020-2022', '2022-Running', 'C/C++', 'oop', 'Python', 'Deep Learning', 'Mobile snatching', 'NLP', 'upload/1692674373773.jpg', 'arahman202260@bscse.uiu.ac.bd', 'Myself Ar7 ,fan of Cr7', 'DIU Goli, Badda,Dhaka.', '1234', 'upload/Copy of IMG_6587.jpg', 0, NULL),
(11, 'Simon', '60457043216', 'rlgf lakdfael', 'United International University', 'hjkh', 'lifjkkjb', 'Higher Secondary Certificate ', '4.00', '2.00', 'Vivasoft Ltd', 'Therap (bd) Ltd.', 'Junior Software Engineer', 'ddd', '2020-2022', '2022-Running', 'C/C++', 'HTML', 'Python', 'Deep Learning', 'JAVA', 'NLP', 'upload/1692674373773.jpg', 'simon@gmail.com', 'ufafeiaefljesfl', 'udlfg js', '1234', 'upload/Copy of IMG_6587.jpg', 1, NULL),
(12, 'samrat', '01777777777', 'Software engineer', 'United International University', 'Khulna Public Collage', 'Bsc in Computer science and Engineering', 'Higher Secondary Certificate ', '4.00', '2.00', 'VivaSoft', 'Therap (bd) Ltd.', 'Junior Software Engineer', 'Senior Software Engineer', '2020-2022', '2022-Running', 'C/C++', 'HTML', 'Python', 'Deep Learning', 'JAVA', 'NLP', 'upload/1692674373773.jpg', 's@gmail.com', 'my name is samrat', 'DIU Goli, Badda,Dhaka.', '1234', 'upload/Copy of IMG_6587.jpg', 0, NULL),
(13, 'Samrat Abdul Jalil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'samratabduljalil@gmail.com', NULL, NULL, '1234', NULL, NULL, NULL),
(14, 'tom', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tol@gmail.com', NULL, NULL, '1234', NULL, 1, NULL),
(15, 'Samrat Abdul Jalil', '01777777777', 'Student', 'United International University', 'Khulna Public College', 'Bsc in Computer Science and Engineering', 'Higher secondary certificate ', '3.29', '4.08', 'VivaSoft', 'Therap BD', 'Junior Software Engineer', 'Senior Software Engineer', '2020-2022', '2022-running', 'C++', 'PHP', 'HTML', 'PYthon', 'JAVAScript', 'Sass', 'upload/0.jpg', 'hJ59r5f/he01dJ0ZCStvYQ==', 'I am very passionate guy. I love to Learn And implement.', 'DIU Goli,Satarku, Badda, Dhaka', '/Ang/wa521yOxI13xCkQ2A==', 'upload/004.jpg', 0, NULL),
(16, 'Samrat Abdul Jalil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '/Ang/wa521yOxI13xCkQ2A==', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `option_`
--

CREATE TABLE `option_` (
  `id` int NOT NULL,
  `option_id` varchar(700) DEFAULT NULL,
  `option_` varchar(700) DEFAULT NULL,
  `question_id` varchar(20) DEFAULT NULL,
  `course_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_course`
--

CREATE TABLE `payment_course` (
  `id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `payment_money` int DEFAULT NULL,
  `Current_d` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payment_course`
--

INSERT INTO `payment_course` (`id`, `course_id`, `user_id`, `payment_money`, `Current_d`) VALUES
(1, 12, 12, 1270, '2023-10-31'),
(2, 12, 12, 1270, '2023-10-31'),
(3, 12, 12, 1270, '2023-10-31'),
(4, 12, 12, 1270, '2023-10-31'),
(5, 12, 12, 1270, '2023-10-31'),
(6, 12, 12, 1270, '2023-10-31'),
(7, 12, 12, 1270, '2023-10-31'),
(8, 12, 12, 1270, '2023-10-31'),
(9, 12, 12, 1270, '2023-10-31'),
(10, 12, 12, 1270, '2023-10-31'),
(11, 12, 12, 1270, '2023-10-31'),
(12, 12, 12, 1270, '2023-10-31'),
(13, 12, 15, 1270, '2023-10-31'),
(14, 6, 15, 214, '2023-11-01'),
(15, 6, 15, 214, '2023-11-01'),
(16, 6, 15, 214, '2023-11-01'),
(17, 7, 15, 261, '2023-11-01'),
(18, 6, 15, 214, '2023-11-01'),
(19, 11, 15, 796, '2023-11-01'),
(20, 6, 15, 214, '2023-11-01'),
(21, 11, 15, 796, '2023-11-01'),
(22, 11, 15, 796, '2023-11-01'),
(23, 11, 15, 796, '2023-11-01'),
(24, 11, 15, 796, '2023-11-01'),
(25, 11, 15, 796, '2023-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `qr`
--

CREATE TABLE `qr` (
  `id` int NOT NULL,
  `qr` varchar(450) DEFAULT NULL,
  `user_id` varchar(450) DEFAULT NULL,
  `template_id` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `qr`
--

INSERT INTO `qr` (`id`, `qr`, `user_id`, `template_id`) VALUES
(1, 'temp/1041691121777.php91090073919.png', '9', 'temp/1041691121777.php'),
(2, 'temp/1041691121777.php101444190433.png', '10', 'temp/1041691121777.php'),
(3, 'temp/793828683777.php101501486412.png', '10', 'temp/793828683777.php'),
(4, 'temp/1546985463777.php111915039905.png', '11', 'temp/1546985463777.php'),
(5, 'temp/1546985463777.php12449726880.png', '12', 'temp/1546985463777.php'),
(6, 'temp/1041691121777.php61808583629.png', '6', 'temp/1041691121777.php'),
(7, 'temp/1546985463777.php151400975227.png', '15', 'temp/1546985463777.php');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int NOT NULL,
  `question` varchar(700) DEFAULT NULL,
  `answer` int DEFAULT NULL,
  `question_id` varchar(20) DEFAULT NULL,
  `course_code` varchar(50) DEFAULT NULL,
  `op1` varchar(800) DEFAULT NULL,
  `op2` varchar(800) DEFAULT NULL,
  `op3` varchar(800) DEFAULT NULL,
  `op4` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `question_id`, `course_code`, `op1`, `op2`, `op3`, `op4`) VALUES
(11, 'Which of the following programming languages is mainly used for adding interactivity and dynamic behavior to websites?', 3, NULL, 'web001', 'HTML', ' CSS', 'JavaScript', 'Python'),
(12, 'Which HTML tag is used to link an external CSS file to an HTML document?', 2, NULL, 'web001', 'script', 'link', 'css', 'style'),
(13, 'Which of the following HTTP status codes indicates that a resource was not found on the server?', 2, NULL, 'web001', '200 OK', '404 Not Found', '500 Internal Server Error', ' 302 Found'),
(14, 'What is the purpose of a responsive web design?', 4, NULL, 'web001', 'To create websites that only work on mobile devices', 'To make websites load faster', 'To design websites that look exactly the same on all devices', 'To create websites that adapt and display well on various screen sizes and devices'),
(15, 'What does HTML stand for?', 1, NULL, 'web001', 'Hyper Text Markup Language', 'High Technical Modern Language', 'Hyperlink and Text Markup Language', 'Home Tool Markup Language');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int DEFAULT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(221, 776);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course_video`
--
ALTER TABLE `course_video`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cv_admin`
--
ALTER TABLE `cv_admin`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `cv_template`
--
ALTER TABLE `cv_template`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `cv_user`
--
ALTER TABLE `cv_user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `option_`
--
ALTER TABLE `option_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_course`
--
ALTER TABLE `payment_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`total`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_video`
--
ALTER TABLE `course_video`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cv_admin`
--
ALTER TABLE `cv_admin`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cv_template`
--
ALTER TABLE `cv_template`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cv_user`
--
ALTER TABLE `cv_user`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `option_`
--
ALTER TABLE `option_`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_course`
--
ALTER TABLE `payment_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `qr`
--
ALTER TABLE `qr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `total` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=777;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
