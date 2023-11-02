-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2023 at 02:34 PM
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
(10, 'j0023', 'Javascript', 17);

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
(17, 'Data Analysis', NULL, 'DAtA002', NULL, 5000),
(18, 'Data Visualization', NULL, 'DAtA002', NULL, 5000),
(19, 'Blockchain', NULL, 'B0023', NULL, 3500),
(20, 'PHP', NULL, 'P0023', NULL, 2300),
(21, 'Javascript', NULL, 'j0023', NULL, 4000),
(22, 'React JS', NULL, 'rj113', NULL, 5000),
(23, 'Next.JS', NULL, 'nj113', NULL, 5000),
(24, 'Deep Learning', NULL, 'deep001', NULL, 7500);

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
(6, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JUwePydwbUI?si=dQiPrDig7JIwsQKB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(7, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XU0FYlY9_E0?si=nVMFTd_AG7HocRga\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(8, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=VKowidW9mbbbm4Ug&amp;list=PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(10, 'web001', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zJSY8tbf_ys?si=lihb3zXFLdeXIN6x\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(11, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AWSMXQEqZvo?si=URmdXftRPY8XIB3H\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(12, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SGGgr4c5LM8?si=Mfw2J2HiW2q82ELA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(13, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nBOeg0TkzCg?si=PGWEcXhZJYVTZ2Ll\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(14, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/EH3vGeqeIAo?si=KC1xoDMF8LRS2mE7\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 0),
(15, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/htznIeWKgg8?si=xRfKwVYOly_1HFeN\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(16, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8dWL3wF_OMw?si=m5LllXAz63T9RxZ9\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(17, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sscX432bMZo?si=-WdvwT_D1WYEQfzQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1),
(18, 'j0023', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/videoseries?si=nj8HXBmlhzHhvXej&amp;list=PLu0W_9lII9ahR1blWXxgSlL4y9iQBnLpR\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1);

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
(4, 'Samrat Abdul Jalil Admin', NULL, 'ZYrrZHETLhkTkkvB0jowtoD0Flk7+q4WTIXskBn+8O0=', '/Ang/wa521yOxI13xCkQ2A=='),
(6, 'Samrat Admin', NULL, 'XWeTKwBSpNaq06SbtZO2AvRWGnMNd7MLmXgUHcp3/qc=', '0Y8pDuDA6IchVTifc3/dyA==');

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
(20, 'temp/704619821979454862777.php', 'temp/7882241551472693218Screenshot (290).png', 'temp/18072752798764281style.css', NULL);

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
(17, 'Samrat Abdul Jalil', '01511111111', 'Machine Learning Enginner', 'United International University', 'Khulna Public College', 'Bsc in Computer Science and Engineering', 'Higher Secondary Certificate', '3.29', '4.08', 'Well Dev', 'SEO Tech LTD', 'Software Enginner', 'senior SEO Engineer', '2020-2021', '2021-2023', 'Python', 'CSS', 'Java', 'HTML', 'C/C++', 'Javascript', 'upload/1619722329IMG_20230601_170006.jpg', '4MHnFbCqHeZ9pkBhugFV0AnA2BL6CbognPGPtQOGbc0=', 'I am passionate about programming.I love to learn new technology. ', 'Satarkul,Badda,Dhaka.', 'QveeXGyJEe+tDgwvEy/rvg==', 'upload/1.JPG', 0, NULL);

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
(26, 17, 17, 5100, '2023-11-02'),
(27, 21, 17, 4080, '2023-11-02');

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
(13, 'temp/704619821979454862777.php171814214265.png', '17', 'temp/704619821979454862777.php');

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
(16, 'Which programming language is commonly used for client-side scripting in web development?', 4, NULL, 'web001', 'Python', 'Java', 'PHP', 'JavaScript'),
(17, 'In web development, what does the term \"HTTP\" stand for?', 1, NULL, 'web001', 'HyperText Transfer Protocol', 'High Tech Text Presentation', 'Hyper Transfer Text Process', 'Hypertext To The Page'),
(18, 'Which of the following is a popular version control system used in web development to track changes in code and collaborate with team members?', 4, NULL, 'web001', ' HTML', ' CSS', 'JavaScript', ' Git'),
(19, 'Which of the following is NOT a commonly used web development framework or library?', 4, NULL, 'web001', 'Angular', 'Django', 'Node.js', 'JSON'),
(20, 'What is the primary purpose of CSS (Cascading Style Sheets) in web development?', 3, NULL, 'web001', 'To create interactive JavaScript elements', 'To define the structure and layout of a web page', 'To format and style the visual presentation of a web page', 'To store data on the server'),
(21, 'What keyword is used to declare a variable in JavaScript?', 1, NULL, 'j0023', 'var', 'let', 'const', 'variable'),
(22, ' What is the purpose of the \"document.getElementById()\" method in JavaScript?', 3, NULL, 'j0023', 'To retrieve the current date and time.', 'To access the properties and methods of an object.', 'To access elements in the HTML document by their unique IDs.', 'To create a new HTML element.'),
(23, 'Which of the following is an example of a JavaScript data type?', 2, NULL, 'j0023', 'Loop', 'Array', 'CSS', 'HTML'),
(24, 'What is the purpose of the JavaScript \"setTimeout()\" function?', 1, NULL, 'j0023', 'To execute code at a specified time interval.', 'To pause the execution of code.', 'To reload the web page.', 'To clear the console.'),
(25, 'What is the primary purpose of JavaScript in web development?', 4, NULL, 'j0023', 'To define the structure and layout of a web page.', 'To format and style the visual presentation of a web page.', ' To manage server-side scripting and database operations.', 'To create interactive and dynamic functionality on web pages.');

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
(NULL, 3978),
(NULL, 4973);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_video`
--
ALTER TABLE `course_video`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cv_admin`
--
ALTER TABLE `cv_admin`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cv_template`
--
ALTER TABLE `cv_template`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cv_user`
--
ALTER TABLE `cv_user`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `option_`
--
ALTER TABLE `option_`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_course`
--
ALTER TABLE `payment_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `qr`
--
ALTER TABLE `qr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `total` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4974;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
