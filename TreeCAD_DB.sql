-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2024 at 05:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TreeCAD_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `Chapter_ID` char(10) NOT NULL,
  `Chapter_Name` varchar(60) DEFAULT NULL,
  `Course_ID` char(10) NOT NULL,
  `Chapter_Url` varchar(2000) NOT NULL,
  `Chapter_briefing` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`Chapter_ID`, `Chapter_Name`, `Course_ID`, `Chapter_Url`, `Chapter_briefing`) VALUES
('M001', 'Quadratic Function and Equation in One Variable', 'SUB1', 'Tutorial_Chapter_1.php', 'In this math chapter, you will delve into quadratic functions and equations in one variable. Quadratic functions involve expressions with variables raised to the second power and represent parabolic shapes. You\'ll learn how to graph quadratic functions, identify key features such as vertex and axis of symmetry, solve quadratic equations using various methods like factoring, completing the square, and using the quadratic formula. Additionally, you\'ll explore applications of quadratic functions in real-world scenarios, such as modeling projectile motion and solving optimization problems.'),
('M002', 'Number Base', 'SUB1', 'Tutorial_Chapter_2.php', 'In this math chapter, you\'ll delve into the concept of number bases. Number bases, also known as radix or numeral systems, are fundamental to understanding how numbers are represented and manipulated in different contexts. You\'ll explore the familiar base 10 system, as well as other bases like binary (base 2), octal (base 8), and hexadecimal (base 16). Through this exploration, you\'ll gain insight into how numbers are structured, how to convert between different bases, and how these concepts are applied in various mathematical and computational contexts.'),
('M003', 'Logical Reasoning', 'SUB1', 'Tutorial_Chapter_3.php', 'In this math chapter, you will delve into logical reasoning, which involves the systematic process of making deductions and conclusions based on given premises or conditions. You\'ll explore different types of logical arguments, such as deductive reasoning, inductive reasoning, and conditional statements. Additionally, you\'ll learn about logical operators like \"and,\" \"or,\" and \"not,\" and how they are used to construct logical statements and analyze their truth values. Understanding logical reasoning is essential for problem-solving and critical thinking in various mathematical contexts.'),
('M004', 'Operations Sets', 'SUB1', 'Tutorial_Chapter_4.php', 'In this math chapter, you will delve into the fundamental concepts of operations on sets. You\'ll explore how to combine sets through operations like union, intersection, and complement. These operations are crucial in understanding how to manipulate and analyze sets, which are foundational structures in mathematics. Through practical examples and exercises, you\'ll gain a comprehensive understanding of how to perform these operations and apply them in various mathematical contexts.'),
('M005', 'Network in Graph', 'SUB1', 'Tutorial_Chapter_5.php', 'In this math chapter, you will delve into the concept of networks in graph theory. You\'ll explore the fundamental elements of graphs, such as nodes and edges, and learn how to represent various real-world systems using graphs. Topics covered may include different types of networks (like social networks, transportation networks, and communication networks), graph properties and structures, algorithms for analyzing networks, and applications in fields such as computer science, sociology, and biology. Through this study, you\'ll gain insight into the interconnected nature of systems and how to analyze and model them mathematically.'),
('M006', 'Linear Inequalities in 2 variable', 'SUB1', 'Tutorial_Chapter_6.php', 'In this chapter, you will delve into the realm of linear inequalities in two variables. You\'ll explore how to graphically represent and solve these inequalities, understanding the regions of the coordinate plane that satisfy the given conditions. Additionally, you\'ll learn techniques to interpret and apply these concepts in real-world scenarios, gaining valuable skills in problem-solving and mathematical modeling.\r\n\r\n'),
('M007', 'Motion graph', 'SUB1', 'Tutorial_Chapter_7.php', 'In this math chapter, you will learn about motion graphs. Motion graphs are graphical representations that depict the movement of objects over time. Specifically, you will explore position-time graphs, velocity-time graphs, and acceleration-time graphs. These graphs provide valuable insights into an object\'s motion, allowing you to analyze its speed, direction, and changes in motion over time. Understanding motion graphs is fundamental in physics and engineering, as they help in solving problems related to motion and predicting future movements of objects.'),
('M008', 'Measures of dispersion for Ungrouped Data', 'SUB1', 'Tutorial_Chapter_8.php', 'In this math chapter, you\'ll delve into measures of dispersion for ungrouped data. Dispersion refers to the extent to which data points in a dataset spread out or deviate from the central tendency. Measures of dispersion provide valuable insights into the variability or spread of data points. Specifically focusing on ungrouped data means dealing with raw data points rather than categorized or grouped data sets. You\'ll likely explore techniques such as range, mean deviation, variance, and standard deviation to quantify the spread of ungrouped data points. These measures help in understanding the distribution and variability within the dataset, offering crucial information for analysis and decision-making in various fields.'),
('M009', 'Probability of Combined Events', 'SUB1', 'Tutorial_Chapter_9.php', 'In this math chapter, you\'ll delve into the concept of the probability of combined events. You\'ll explore how to calculate the likelihood of multiple events occurring together, whether they\'re independent or dependent. This includes understanding the fundamental principles of probability, such as the multiplication rule and the addition rule, and applying them to real-world scenarios. By the end of this chapter, you\'ll be equipped to analyze and solve problems involving the probability of combined events with confidence.'),
('M010', 'Consumer Mathematics: Financial', 'SUB1', 'Tutorial_Chapter_10.php', 'In this chapter on Consumer Mathematics: Financial, you will learn essential concepts and practical skills related to managing personal finances. Topics may include calculating interest rates, understanding loans and mortgages, budgeting, analyzing investments, and evaluating various aspects of financial decision-making such as taxes and insurance. This chapter aims to equip you with the mathematical tools and knowledge necessary for making informed financial choices in everyday life.'),
('M011', 'Final Exam A', 'SUB1', 'Final_Exam_A.php', 'ITSS EXAM TIMEEE. THIS IS THE FIRST EXAM YOU HAVE 45 MINUTE TO ANSWER THE QUESTION'),
('M012', 'Final Exam B', 'SUB1', 'Final_Exam_B.php', 'ITSS EXAM TIMEEE. THIS IS THE SECOND EXAM YOU HAVE 45 MINUTE TO ANSWER THE QUESTION'),
('M013', '', 'SUB1', '', 'END. CONGRATULATIONS, YOU HAVE SUCCEEDED IN ANSWERING ALL THE QUESTIONS');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_ID` char(10) NOT NULL,
  `Course_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_ID`, `Course_Name`) VALUES
('SUB1', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `Exercise_Num` varchar(9) NOT NULL,
  `Chapter_ID` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`Exercise_Num`, `Chapter_ID`) VALUES
('EXM001', 'M001'),
('EXM002', 'M002'),
('EXM003', 'M003'),
('EXM004', 'M004'),
('EXM005', 'M005'),
('EXM006', 'M006'),
('EXM007', 'M007'),
('EXM008', 'M008'),
('EXM009', 'M009'),
('EXM010', 'M010');

-- --------------------------------------------------------

--
-- Table structure for table `exer_answer`
--

CREATE TABLE `exer_answer` (
  `Ex_A_ID` varchar(10) NOT NULL,
  `Ex_Q_ID` int(11) NOT NULL,
  `Ex_Answer` varchar(8000) NOT NULL,
  `Correct_Answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exer_answer`
--

INSERT INTO `exer_answer` (`Ex_A_ID`, `Ex_Q_ID`, `Ex_Answer`, `Correct_Answer`) VALUES
('A1', 1, '<p>a= 2, b = -5, c = 1</p>', 1),
('A10', 3, '<p>C = 5</p>', 1),
('A100', 25, '<p>{1,2,3,5,6,7,9}</p>', 0),
('A101', 26, '<p>5</p>', 0),
('A102', 26, '<p>12</p>', 0),
('A103', 26, '<p>24</p>', 0),
('A104', 26, '<p>40</p>', 1),
('A105', 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&lt;</mo><mn>20</mn></math></p>\r\n', 0),
('A106', 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>&lt;</mo><mn>20</mn></math></p>\r\n', 0),
('A107', 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&lt;</mo><mn>20</mn></math></p>\r\n', 1),
('A108', 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>-</mo><mi>y</mi><mo>&lt;</mo><mn>20</mn></math>\r\n</p>\r\n', 0),
('A109', 28, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mi>y</mi><mo>&gt;</mo><mn>40</mn></math></p>\r\n', 0),
('A11', 3, '<p>C = 8</p>', 0),
('A110', 28, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2265;</mo><mn>40</mn></math></p>\r\n', 1),
('A111', 28, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mi>y</mi><mo>&lt;</mo><mn>40</mn></math></p>\r\n', 0),
('A112', 28, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2264;</mo><mn>40</mn></math></p>\r\n', 0),
('A113', 29, '<p>(2,2)</p>\r\n', 0),
('A114', 29, '<p>(5,3)</p>\r\n', 0),
('A115', 29, '<p>(-2,-7)</p>\r\n', 1),
('A116', 29, '<p>(-1,-3)</p>\r\n', 0),
('A117', 30, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2264;</mo><mn>24</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>6</mn><mi>x</mi><mo>+</mo><mn>5</mn><mi>y</mi><mo>&#x2265;</mo><mn>160</mn></math>\n<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#x2264;</mo><mn>2</mn><mi>x</mi></math></p>\n', 0),
('A118', 30, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&lt;</mo><mn>24</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>5</mn><mi>x</mi><mo>+</mo><mn>6</mn><mi>y</mi><mo>&#x2264;</mo><mn>160</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>&#x2265;</mo><mn>2</mn><mi>y</mi></math></p>\r\n', 0),
('A119', 30, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2265;</mo><mn>24</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>6</mn><mi>x</mi><mo>+</mo><mn>5</mn><mi>y</mi><mo>&#x2264;</mo><mn>160</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#x2265;</mo><mn>2</mn><mi>x</mi></math></p>\n', 1),
('A12', 3, '<p>C = 7</p>', 0),
('A120', 30, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&gt;</mo><mn>24</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>5</mn><mi>x</mi><mo>+</mo><mn>6</mn><mi>y</mi><mo>&#x2264;</mo><mn>160</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#x2264;</mo><mn>2</mn><mi>x</mi></math></p>\n', 0),
('A121', 31, '<p>(0,-2)</p>\r\n', 0),
('A122', 31, '<p>(4,3)</p>\r\n', 0),
('A123', 31, '<p>(-1,6)</p>\r\n', 0),
('A124', 31, '<p>(-3,2)</p>\r\n', 1),
('A125', 32, '<p>(3,1) and (1,-1)</p>', 0),
('A126', 32, '<p>(1,-1) and (2,3)</p>\r\n', 0),
('A127', 32, '<p>(2,3) and (4,2)</p>\r\n', 0),
('A128', 32, '<p>(3,1) and (4,2)</p>\r\n', 1),
('A129', 33, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#x2265;</mo><mn>3</mn><mi>x</mi></math></p>\n', 1),
('A13', 4, '<p>5</p>', 0),
('A130', 33, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>&#x2265;</mo><mn>2</mn><mi>y</mi></math></p>\r\n', 0),
('A131', 33, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>&#x2264;</mo><mn>3</mn><mi>y</mi></math></p>\r\n', 0),
('A132', 33, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2264;</mo><mn>75</mn></math></p>\r\n', 0),
('A133', 34, '<p>7,4,5,8,9,5</p>\r\n', 0),
('A134', 34, '<p>6,1,7,6,2,3</p>\r\n', 0),
('A135', 34, '<p>5,5,5,5,5,5</p>\r\n', 1),
('A136', 34, '<p>4,9,3,6,2,3</p>\r\n', 0),
('A137', 35, '<p>2,9,6,1,7,4</p>\r\n', 0),
('A138', 35, '<p>4,3,4,4,3,3</p>\r\n', 1),
('A139', 35, '<p>8,3,7,2,9,3</p>\r\n', 0),
('A14', 4, '<p>1</p>', 0),
('A140', 35, '<p>3,6,2,8,7,8</p>\r\n', 0),
('A141', 36, '<p>34</p>\r\n', 0),
('A142', 36, '<p>47</p>\r\n', 0),
('A143', 36, '<p>51</p>\r\n', 0),
('A144', 36, '<p>62</p>\r\n', 1),
('A145', 37, '<p>5.39</p>\r\n', 0),
('A146', 37, '<p>5.58</p>\r\n', 0),
('A147', 37, '<p>29.2</p>\r\n', 1),
('A148', 37, '<p>31.3</p>\r\n', 0),
('A149', 38, '<p>The range of the new data set is 23.8</p>\r\n', 1),
('A15', 4, '<p>2</p>', 0),
('A150', 38, '<p>The interquartile range of the new data set is 17.7</p>\r\n', 0),
('A151', 38, '<p>The variance of the new data set is 1.69</p>\r\n', 0),
('A152', 38, '<p>The standard deviation of the new data set is 1.3</p>\r\n', 0),
('A153', 39, '<p>5.39</p>\r\n', 0),
('A154', 39, '<p>5.58</p>\r\n', 0),
('A155', 39, '<p>29.2</p>\r\n', 1),
('A156', 39, '<p>31.3</p>\r\n', 0),
('A157', 40, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>m</mi></math> = 2,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>n</mi></math> = 5</p>\r\n', 0),
('A158', 40, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>m</mi></math> = 3,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>n</mi></math> = 5</p>\r\n', 1),
('A159', 40, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>m</mi></math> = 4,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>n</mi></math> = 5</p>\r\n', 0),
('A16', 4, '<p>4</p>', 1),
('A160', 40, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>m</mi></math> = 5,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>n</mi></math> = 5</p>\r\n', 0),
('A161', 41, '<p>2.64</p>\r\n', 0),
('A162', 41, '<p>2.76</p>\r\n', 0),
('A163', 41, '<p>2.84</p>\r\n', 1),
('A164', 41, '<p>2.96</p>\r\n', 0),
('A165', 42, '<p>{(A,S),(A,T),(A,R),(S,O),(T,O),(R,O)}</p>\r\n', 0),
('A166', 42, '<p>{(S,A),(T,A),(R,A),(O,S),(O,T),(O,R)}</p>\r\n', 0),
('A167', 42, '<p>{(A,S),(A,T),(A,R),(O,S),(O,T),(0,R)}</p>\r\n', 1),
('A168', 42, '<p>{(S,A),(T,A),(R,A),(S,O),(T,O),(R,O)}</p>\r\n', 0),
('A169', 43, '<p>{2,3,5,7}</p>\r\n', 0),
('A17', 5, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>9</mn><mi>x</mi><mo>-</mo><mn>8</mn><mo>&#xA0;</mo><mo>=</mo><mn>0</mn></math>', 0),
('A170', 43, '<p>{2,3,5,7,9}</p>\r\n', 1),
('A171', 43, '<p>{3,5,7,9}</p>\r\n', 0),
('A172', 43, '<p>{3,5,7,8,9}</p>\r\n', 0),
('A173', 44, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>9</mn></mfrac></math></p>\r\n', 1),
('A174', 44, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>4</mn></mfrac></math></p>\r\n', 0),
('A175', 44, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></p>\r\n', 0),
('A176', 44, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>2</mn><mn>3</mn></mfrac></math></p>\r\n', 0),
('A177', 45, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>36</mn></mfrac></math></p>\r\n', 0),
('A178', 45, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>6</mn></mfrac></math></p>\r\n', 1),
('A179', 45, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>5</mn><mn>13</mn></mfrac></math></p>\r\n', 0),
('A18', 5, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>14</mn><mi>x</mi><mo>+</mo><mn>15</mn><mo>=</mo><mn>0</mn></math>', 1),
('A180', 45, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>35</mn><mn>36</mn></mfrac></math></p>\r\n', 0),
('A181', 46, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">I</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi></math></p>\r\n', 0),
('A182', 46, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">I</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">IV</mi></math></p>\r\n', 0),
('A183', 46, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">III</mi></math</p>\r\n', 0),
('A184', 46, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">IV</mi></math></p>\r\n', 1),
('A185', 47, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>3</mn><mn>10</mn></mfrac></math></p>\r\n', 1),
('A186', 47, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>3</mn><mn>20</mn></mfrac></math></p>\r\n', 0),
('A187', 47, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>3</mn><mn>25</mn></mfrac></math></p>\r\n', 0),
('A188', 47, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>3</mn><mn>50</mn></mfrac></math></p>\r\n', 0),
('A189', 48, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>20</mn></mfrac></math></p>\r\n', 0),
('A19', 5, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>4</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>12</mn><mo>=</mo><mn>0</mn></math>', 0),
('A190', 48, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>10</mn></mfrac></math></p>\r\n', 0),
('A191', 48, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>3</mn><mn>20</mn></mfrac></math></p>\r\n', 1),
('A192', 48, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>5</mn></mfrac></math></p>\r\n', 0),
('A193', 49, '<p>Allowance</p>\r\n', 0),
('A194', 49, '<p>Commission</p>\r\n', 0),
('A195', 49, '<p>Salary</p>\r\n', 0),
('A196', 49, '<p>Dividend</p>\r\n', 1),
('A197', 50, '<p>Buy a residential house</p>\r\n', 1),
('A198', 50, '<p>Invest shares in Bursa Malaysia</p>\r\n', 0),
('A199', 50, '<p>Buy the latest model of Apple smart phone</p>\r\n', 0),
('A2', 1, '<p>a= 3, b = 0, c = 3</p>', 0),
('A20', 5, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>12</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>11</mn><mi>x</mi><mo>+</mo><mn>2</mn><mo>=</mo><mn>0</mn></math>', 0),
('A200', 50, '<p>Vacation in other countries for 10 days</p>\r\n', 0),
('A201', 51, '<p>RM2115</p>\r\n', 0),
('A202', 51, '<p>RM5380</p>\r\n', 1),
('A203', 51, '<p>RM5430</p>\r\n', 0),
('A204', 51, '<p>RM7495</p>\r\n', 0),
('A205', 52, '<p>RM2367</p>\r\n', 1),
('A206', 52, '<p>RM2435</p>\r\n', 0),
('A207', 52, '<p>RM3203</p>\r\n', 0),
('A208', 52, '<p>RM3230</p>\r\n', 0),
('A209', 68, 'Tie Set', 1),
('A21', 6, '<p>x = -5 or x =8</p>', 1),
('A210', 68, 'Incidence', 0),
('A211', 68, 'Reduce Incidence', 0),
('A212', 68, 'Cutset', 0),
('A213', 70, '3.0 m/s', 0),
('A214', 70, '5.0 m/s', 0),
('A215', 70, '50 m/s', 1),
('A216', 70, '60 m/s', 0),
('A22', 6, '<p>x = 5 or x =4</p>', 0),
('A23', 6, '<p>x = -5 or x =-8</p>', 0),
('A24', 6, '<p>x = -5 or x =2</p>', 0),
('A25', 7, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1023</mn><mn>5</mn></msub></math>', 0),
('A26', 7, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>2404</mn><mn>5</mn></msub></math>', 1),
('A27', 7, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>3201</mn><mn>5</mn></msub></math>', 0),
('A28', 7, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>4042</mn><mn>5</mn></msub></math>', 0),
('A29', 8, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>100011</mn><mn>2</mn></msub></math>', 0),
('A3', 1, '<p>a = 2, b = 5, c = -1</p>', 0),
('A30', 8, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>101011</mn><mn>2</mn></msub></math>', 0),
('A31', 8, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>110001</mn><mn>2</mn></msub></math>', 0),
('A32', 8, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>110011</mn><mn>2</mn></msub></math>', 1),
('A33', 9, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>100201</mn><mn>3</mn></msub></math>', 0),
('A34', 9, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>101101</mn><mn>3</mn></msub></math>', 0),
('A35', 9, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>101201</mn><mn>3</mn></msub></math>', 1),
('A36', 9, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>102101</mn><mn>3</mn></msub></math>', 0),
('A37', 10, '<p>x = 532, y = 346</p>', 0),
('A38', 10, '<p>x = 632, y = 410</p>', 0),
('A39', 10, '<p>x = 643, y = 419</p>', 0),
('A4', 1, '<p>a = -1, b =5, c = 3</p>', 0),
('A40', 10, '<p>x = 652, y = 426</p>', 1),
('A41', 11, '<p>X = 537, Y =1031</p>', 1),
('A42', 11, '<p>X = 537, Y =1301</p>', 0),
('A43', 11, '<p>X = 542, Y =1036</p>', 0),
('A44', 11, '<p>X = 542, Y =6301</p>', 0),
('A45', 12, '<p>648</p>', 0),
('A46', 12, '<p>1296</p>', 1),
('A47', 12, '<p>7128</p>', 0),
('A48', 12, '<p>11664</p>', 0),
('A49', 13, '<p>2</p>', 0),
('A5', 2, '<p> a = -1, b =2, c =0</p>', 0),
('A50', 13, '<p>4</p>', 0),
('A51', 13, '<p>6</p>', 1),
('A52', 13, '<p>8</p>', 0),
('A53', 14, '<p>127</p>', 1),
('A54', 14, '<p>69</p>', 0),
('A55', 14, '<p>128</p>', 0),
('A56', 14, '<p>-127</p>', 0),
('A57', 15, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>17</mn><mo>&#xd7;</mo><msup><mn>10</mn><mrow><mo>-</mo><mn>3</mn></mrow></msup><mo>=</mo><mn>0.017</mn></math>', 0),
('A58', 15, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>38000</mn><mo>=</mo><mn>3.8</mn><mo>&#xd7;</mo><msup><mn>10</mn><mn>3</mn></msup></math>', 0),
('A59', 15, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>2</mn><mn>2</mn></msup><mo>+</mo><msup><mn>2</mn><mn>3</mn></msup><mo>=</mo><msup><mn>5</mn><mn>2</mn></msup></math>', 0),
('A6', 2, ' <p>a = 1, b =2, c =0</p>', 0),
('A60', 15, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>7</mn><mn>10</mn></mfrac><mo>&gt;</mo><mfrac><mn>3</mn><mn>5</mn></mfrac></math>', 1),
('A61', 16, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>5</mn><mo>-</mo><mn>6</mn><mo>=</mo><mn>1</mn><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><mo>-</mo><mn>8</mn><mo>+</mo><mn>3</mn><mo>=</mo><mo>-</mo><mn>11</mn></math>', 0),
('A62', 16, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>0</mn><mo>&#xf7;</mo><mn>1</mn><mo>=</mo><mn>0</mn><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><mn>1</mn><mo>&#xf7;</mo><mn>0</mn><mo>=</mo><mn>0</mn></math>', 1),
('A63', 16, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>4</mn><mo>&#xd7;</mo><mo>(</mo><mo>-</mo><mn>2</mn><mo>)</mo><mo>=</mo><mo>-</mo><mn>6</mn><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><mo>(</mo><mo>-</mo><mn>3</mn><mo>)</mo><mo>&#xd7;</mo><mo>(</mo><mo>-</mo><mn>1</mn><mo>)</mo><mo>=</mo><mo>-</mo><mn>3</mn></math>', 0),
('A64', 16, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mn>3</mn><mn>2</mn></msup><mo>=</mo><mn>6</mn><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><msup><mn>2</mn><mn>3</mn></msup><mo>=</mo><mn>9</mn></math>', 0),
('A65', 17, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">I</mi><mo>&#xA0;</mo><mi>a</mi><mi>n</mi><mi>d</mi><mo>&#xA0;</mo><mi mathvariant=\"double-struck\">II</mi></math>', 0),
('A66', 17, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi><mo>&#xA0;</mo><mi>a</mi><mi>n</mi><mi>d</mi><mo>&#xA0;</mo><mi mathvariant=\"double-struck\">III</mi></math>', 0),
('A67', 17, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi><mo>&#xA0;</mo><mi>a</mi><mi>n</mi><mi>d</mi><mo>&#xA0;</mo><mi mathvariant=\"double-struck\">IV</mi></math>', 1),
('A68', 17, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">III</mi><mo>&#xA0;</mo><mi>a</mi><mi>n</mi><mi>d</mi><mo>&#xA0;</mo><mi mathvariant=\"double-struck\">IV</mi></math>', 0),
('A69', 18, '<p>If w + 8 = 9,then w = 1</p>', 0),
('A7', 2, ' <p>a= 1, b= -2, c= 0</p>', 1),
('A70', 18, '<p>If <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>&gt;</mo><mi>y</mi></math>, then<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>-</mo><mi>y</mi><mo>&gt;</mo><mn>0</mn></math></p>', 0),
('A71', 18, '<p>If <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>a</mi><mo>=</mo><mo>-</mo><mn>4</mn></math>, then<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>a</mi><mn>2</mn></msup><mo>=</mo><mn>16</mn></math></p>', 1),
('A72', 18, '<p>If <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>=</mo><mn>25</mn></math>, then<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>=</mo><mn>25</mn></math></p>', 0),
('A73', 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>:</mo><mi>x</mi><mo>=</mo><mn>4</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>q</mi><mo>:</mo><msup><mi>x</mi><mn>2</mn></msup><mo>=</mo><mn>16</mn></math></p>', 0),
('A74', 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>:</mo><mfrac><mn>1</mn><mi>x</mi></mfrac><mo>=</mo><mi>x</mi></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>q</mi><mo>:</mo><mi>x</mi><mo>=</mo><mn>1</mn></math></p>', 0),
('A75', 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>:</mo><msqrt><mrow><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn></mrow></msqrt><mo>=</mo><mn>1</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>q</mi><mo>:</mo><mi>x</mi><mo>=</mo><mo>-</mo><mn>1</mn></math></p>', 1),
('A76', 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>:</mo><mi>x</mi><mo>=</mo><msup><mn>45</mn><mi>o</mi></msup><mo>&#xA0;</mo></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>q</mi><mo>:</mo><mi>tan</mi><mi>x</mi><mo>=</mo><mn>1</mn></math></p>', 0),
('A77', 20, '<p>Set of integers from 3 to 5</p>', 1),
('A78', 20, '<p>Set of integers from 3 to 6</p>', 0),
('A79', 20, '<p>Set of integers between 3 to 5</p>', 0),
('A8', 2, '<p> a = 3, b = 1, c = 3</p>', 0),
('A80', 20, '<p>Set of integers between 3 to 6</p>', 0),
('A81', 21, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>{</mo><mi>x</mi><mo>:</mo><mn>4</mn><mo>&#x2264;</mo><mi>x</mi><mo>&lt;</mo><mn>12</mn><mo>,</mo><mi>x</mi></math>is an odd number}</p>', 0),
('A82', 21, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>{</mo><mi>x</mi><mo>:</mo><mn>4</mn><mo>&#x2264;</mo><mi>x</mi><mo>&#x2264;</mo><mn>13</mn><mo>,</mo><mi>x</mi></math>is a whole number}</p>', 0),
('A83', 21, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>{</mo><mi>x</mi><mo>:</mo><mn>5</mn><mo>&#x2264;</mo><mi>x</mi><mo>&#x2264;</mo><mn>12</mn><mo>,</mo><mi>x</mi></math>is an even number}</p>', 0),
('A84', 21, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>{</mo><mi>x</mi><mo>:</mo><mn>5</mn><mo>&#x2264;</mo><mi>x</mi><mo>&#x2264;</mo><mn>13</mn><mo>,</mo><mi>x</mi></math>is a prime number}</p>', 1),
('A85', 22, '<p>{4,8}</p>', 1),
('A86', 22, '<p>{6,8}</p>', 0),
('A87', 22, '<p>{4,6,8}</p>', 0),
('A88', 22, '<p>{4,8,10}</p>', 0),
('A89', 23, '<p>8</p>', 0),
('A9', 3, '<p>C = 3</p>', 0),
('A90', 23, '<p>9</p>', 0),
('A91', 23, '<p>11</p>', 1),
('A92', 23, '<p>13</p>', 0),
('A93', 24, '<p>{D,I,U,P}</p>', 0),
('A94', 24, '<p>{A,E,M,W}</p>', 0),
('A95', 24, '<p>{A,D,E,I,M,P,U,W}</p>', 0),
('A96', 24, '<p>{A,D,E,H,I,M,P,U,W}</p>', 1),
('A97', 25, '<p>{2,6}</p>', 1),
('A98', 25, '<p>{2,4,6,8}</p>', 0),
('A99', 25, '<p>{1,3,5,7,9}</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exer_subq`
--

CREATE TABLE `exer_subq` (
  `Ex_Q_ID` int(11) NOT NULL,
  `Exercise_Question` varchar(8000) NOT NULL,
  `Exercise_Num` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exer_subq`
--

INSERT INTO `exer_subq` (`Ex_Q_ID`, `Exercise_Question`, `Exercise_Num`) VALUES
(1, '<p>Determine the values of a, b and c for each of the following quadratic expressions.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>5</mn><mi>x</mi><mo>+</mo><mn>1</mn></math></p> ', 'EXM001'),
(2, '<p>Determine the values of a, b and c for each of the following quadratic expressions.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>2</mn><mi>x</mi></math></p>', 'EXM001'),
(3, '<p>The quadratic functions below pass through the points stated. Calculate the value of C for each case.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>7</mn><mi>x</mi><mo>+</mo><mi>c</mi></math>, passes through point(0, 5).</p>', 'EXM001'),
(4, '<p>The quadratic functions below pass through the points stated. Calculate the value of C.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mn>-2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>x</mi><mo>+</mo><mi>c</mi></math>, y-intercept = 4.</p>', 'EXM001'),
(5, '<p>Which of the following quadratic equation can be solve by the method of factorisation?</p>', 'EXM001'),
(6, '<p>Solve the quadratic equations.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>40</mn><mo>=</mo><mn>0</mn></math></p>', 'EXM001'),
(7, '<p>Express <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>111010</mn><mn>3</mn></msub></math>as a number in base five</p>', 'EXM002'),
(8, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>111010</mn><mn>2</mn></msub><mo>-</mo><msub><mn>111</mn><mn>2</mn></msub><mo>=</mo></math>', 'EXM002'),
(9, '<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>12010</mn><mn>3</mn></msub><mo>+</mo><msub><mn>12121</mn><mn>3</mn></msub><mo>=</mo></math>', 'EXM002'),
(10, '<p>Given <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>110101010</mn><mn>2</mn></msub><mo>=</mo><msub><mi>x</mi><mn>8</mn></msub><mo>=</mo><msub><mi>y</mi><mn>10</mn></msub></math>,determine the value of x and y</p>', 'EXM002'),
(11, '<p>Given <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mi>x</mi><mn>10</mn></msub><mo>=</mo><msub><mn>4122</mn><mn>5</mn></msub><mo>=</mo><msub><mi>y</mi><mn>8</mn></msub></math>, find the value of x and y</p>', 'EXM002'),
(12, '<p>Calculate the sum of the values of the digits 1 and 7, in base ten, for the number <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1745</mn><mn>9</mn></msub></math>.</p>', 'EXM002'),
(13, '<p>Given <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>8</mn><mi>k</mi><msub><mn>31</mn><mn>9</mn></msub></math><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>0</mn><mo>&#x2264;</mo><mi>k</mi><mo>&lt;</mo><mn>9</mn></math>.<br>The value of the digit is 18 times the value of the digit 3 in the number <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>8</mn><mi>k</mi><msub><mn>31</mn><mn>9</mn></msub></math>.Find the value of k</p>', 'EXM002'),
(14, '<p>Find the value of x such that <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>20101</mn><mn>3</mn></msub><mo>-</mo><msub><mi>x</mi><mn>8</mn></msub><mo>=</mo><mn>320</mn></math> </p>', 'EXM002'),
(15, '<p> Which of the following statement is true?</p>', 'EXM003'),
(16, '<p> Which of the following compound statements is true?</p>', 'EXM003'),
(17, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">I</mi><mo>.</mo><mo>&#xA0;</mo><mn>0.0028</mn><mo>=</mo><mn>2.8</mn><mo>&#xd7;</mo><msup><mn>10</mn><mrow><mo>-</mo><mn>2</mn></mrow></msup><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><mn>7.03</mn><mo>&#xd7;</mo><msup><mn>10</mn><mn>4</mn></msup><mo>=</mo><mn>70300</mn></math>\r\n        <br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi><mo>.</mo><mn>1</mn><mo>:</mo><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>=</mo><mn>2</mn><mo>:</mo><mn>3</mn><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><mn>40</mn><mo>:</mo><mn>56</mn><mo>=</mo><mn>5</mn><mo>:</mo><mn>8</mn></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">III</mi><mo>.</mo><mo>(</mo><mi>x</mi><mo>-</mo><mn>3</mn><mo>)</mo><mo>(</mo><mn>2</mn><mi>x</mi><mo>+</mo><mn>1</mn><mo>)</mo><mo>=</mo><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>5</mn><mi>x</mi><mo>-</mo><mn>3</mn><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>4</mn><mi>x</mi><mo>+</mo><mn>4</mn><mo>=</mo><mo>(</mo><mi>x</mi><mo>-</mo><mn>2</mn><msup><mo>)</mo><mn>2</mn></msup></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">IV</mi><mo>.</mo><mn>30</mn><mo>&#xf7;</mo><mn>0.01</mn><mo>=</mo><mn>300</mn><mo>&#xA0;</mo><mi>o</mi><mi>r</mi><mo>&#xA0;</mo><mn>0.006</mn><mo>&#xd7;</mo><mn>1000</mn><mo>=</mo><mn>60</mn></math><br><strong>Determine the false compound statement.</strong></p>', 'EXM003'),
(18, '<p> Which of following implications has it converse <strong>false?</strong></p>', 'EXM003'),
(19, '<p> Which of the following pairs of statements p and q has the correct implications \"p if and only if q\"?</p>', 'EXM003'),
(20, '<p>Given set A = {1,2,3,4,7,9} and set B = {2,3,4,5,6,8,10}.<br>which of the following decribes the intersection of sets A and B?</p>', 'EXM004'),
(21, '<p>Given set A = {5,7,11,13} and set B = {4,5,6,7,8,9,10,11,12,13}.<br>Determine <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi><mo>&#x2229;</mo><mi>B</mi></math> in the set builder notation.</p>', 'EXM004'),
(22, '<p>Given set A = {2,4,6,8,10,12}, set B = {1,3,4,6,8,9} and set C = {3,4,5,7,8,10,11}.<br>Find <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi><mo>&#x2229;</mo><mi>B</mi><mo>&#x2229;</mo><mi>C</mi></math>.</p>\r\n', 'EXM004'),
(23, '<p>A school has 33 teachers. An interview was carried out to find out the number of teachers who have visited Hokkaido in Japan and Jeju Isand in Korea. In the interview, it was found that each teacher has visited at least one of the tourist places. A total of 18 teachers have visited Hokkaido and 26 teachers have visited Jeju Island. Find the number of teachers who have visited Hokkaido and Jeju Island </p>', 'EXM004'),
(24, '<p> Given G = {letters of the word HIDUP} and R = {letters of the word MEWAH}. List down the elements of G ∪ R.</p>', 'EXM004'),
(25, '<p>Given the universal set ξ ={x:1 ≤ x ≤ 10, x is an integer}, set P={3,4,8,9,10}, set Q ={1,4,5,7,8,10} and set R={multiples of 4}. Find (P ∪ Q ∪ R)</p>', 'EXM004'),
(26, '<p>In a study, a total of 52 children were asked whether they liked to eat apples, oranges or mangoes. The result of the study shown that 19 children liked to eat apples, 23 children liked to eat oranges, 19 children liked to eat mangoes, 7 children liked to eat apples and oranges only, 1 child liked to eat apples and mangoes only, 3 children liked to eat oranges and mangoes only whereas 6 children liked to eat apples and mangoes. How many children liked to eat apples or oranges or mangoes?</p>', 'EXM004'),
(27, '<p>A team containing less than 20 students is chosen to climb Mount Tahan. If <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math>represents the number of male students and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi></math> represents the number of female students, form a linear inequality in terms of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math> and/or <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi></math></p>\r\n', 'EXM006'),
(28, '<p>The prices of a kilogram of fish and prawn are RM <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math> and RM <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi></math> respectively. A seller is able to achieve an income of at least RM400 with 30kg of fish and 10kg of prawn that are sold. Form a linear inequality form the information.</p>\r\n', 'EXM006'),
(29, '<p>Which of the following points satisfies the linear inequality <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&lt;</mo><mi>x</mi><mo>-</mo><mn>3</mn></math>?</p>\r\n', 'EXM006'),
(30, '<p>A club wanted to buy at least 24 pieces of T-shirts to carry out its activities. The club only has the means to spend as much as RM800. The price of a piece of L size T-shirt is RM30 and the price of a piece of S size T-shirt is RM25. The number of S size T-shirts is at least two times the number of L size T-shirts. If <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math> pieces of L size T-shirts and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi></math> pieces of S size T-shirts were bought, represent the information in the form of system of linear inequalities.</p>\r\n', 'EXM006'),
(31, '<p>Determine the point that satisfies both of the linear inequalities <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&gt;</mo><mi>x</mi><mo>+</mo><mn>2</mn></math>and<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&#x2264;</mo><mo>-</mo><mi>x</mi><mo>+</mo><mn>4</mn></math>.</p>\r\n', 'EXM006'),
(32, '<p>Which of the following points lie in the region represented by the system of linear inequalities below? <br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&lt;</mo><mn>5</mn></math>, <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&lt;</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>5</mn></math>,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>&gt;</mo><mfrac><mn>1</mn><mn>2</mn></mfrac><mi>x</mi><mo>-</mo><mn>1</mn></math></p>\r\n', 'EXM006'),
(33, '<p>A worker used <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math>kg of cement and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi></math>kg of sands to construct a concrete path in the garden of his house. <br><ul><li> The mass of cement used must be at least two time the mass of sands.</li><li> The mass of cement used is not exceeding three times the mass of sands</li><li> The total mass of cement and sands used must not exceeds 75 kg.</li>\r\n</ul>which of the following is <strong>not</strong> the system of the linear inequalities?</p>\r\n', 'EXM006'),
(34, '<p>Which of the following data sets does <strong>not</strong> have dispersion?\r\n</p>\r\n\r\n', 'EXM008'),
(35, '<p>Which of the following data sets has a small dispersion?</p>\r\n\r\n', 'EXM008'),
(36, '<p>Data below shows the marks of English essays for 10 students<br><ul><li>49 ,63 ,34 ,81 ,55 ,68 ,19 ,41 ,70 ,48</li></ul>Determine the range mark.</p>\r\n\r\n', 'EXM008'),
(37, '<p>In a set containing 15 numbers, <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>&#x2211;</mo><mo>(</mo><mi>x</mi><mo>-</mo><mi>x</mi><mo></mo><msup><mo>)</mo><mn>2</mn></msup><mo>=</mo><mn>438</mn></math>.Determine the variance of the numbers</p>\r\n', 'EXM008'),
(38, '<p><ul><li>Range = 21.2</li><li>Interquartile range = 17.7</li><li>Variance = 1.69</li></ul>\r\nBased on the measures of dispersion for the data set above, determine the measure of dispersion that is <strong>not</strong>correct about the data set when each of the data is added by 2.5</p>\r\n', 'EXM008'),
(39, '<p>For a set consisting of 12 numbers, <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>&#x2211;</mo><mi>x</mi><mo>=</mo><mn>7.4</mn></math>and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>&#x2211;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>=</mo><mn>415.3</mn></math>.Two numbers 14 and 3 are added in the set. Determine the variance of the 14 numbers.</p>\r\n', 'EXM008'),
(40, '<p><ul><li>2,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>m</mi></math>,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>n</mi></math>,7,8</li></ul>The data set above is arranged in the ascending order.Given the median and variance of the data are 5 and 5.2 respectively. Determine the values <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>m</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>n</mi></math>.</p>\r\n', 'EXM008'),
(41, '<p>Table below shows the information for two data sets<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Q</mi></math><table border=\"1\"><tr><th>Set</th><th>Number of Data</th><th>Mean</th><th>Variance</th></tr><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi></math></td><td>15</td><td>8</td><td>5</td></tr><tr><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Q</mi></math></td><td>10</td><td>4</td><td>3</td></tr></table>Find The standard Deviation of the 25 data.</p>\r\n', 'EXM008'),
(42, '<p>Two letters are chosen at random from the letters of the word ASTRO. Given <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>H</mi></math>is the event of choosing a vowel as the first letter and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>K</mi></math> is the event of choosing a consonant as the second letter. List down the outcomes for the combined event <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>H</mi><mo>&#x2229;</mo><mi>K</mi></math>.</p>\r\n', 'EXM009'),
(43, '<p>Eight cards numbered 2, 3, 4, 5, 6, 7, 8 and 9 are placed inside a box. A card is drawn at random from the box. Given <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi></math>is the event of choosing a prime number and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>q</mi></math>is the event of choosing an odd number. Determine <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>&#x222a;</mo><mi>q</mi></math>.</p>\r\n', 'EXM009'),
(44, '<p>A red dice and a blue dice are thrown. <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>M</mi></math> is the event of getting a number greater than 4 on the red dice. <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>N</mi></math>is the event of getting a number less than 3. Determine <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>M</mi><mo>&#x2229;</mo><mi>N</mi><mo>)</mo></math>. </p>\r\n', 'EXM009'),
(45, '<p>Two events <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math>are independent such that <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>A</mi><mo>)</mo><mo>=</mo><mfrac><mn>2</mn><mn>9</mn></mfrac></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mrow><mo>(</mo><mi>B</mi><mo>)</mo></mrow><mo>=</mo><mfrac><mn>3</mn><mn>4</mn></mfrac></math>. Find <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi></math>(<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math>).</p>\r\n', 'EXM009'),
(46, '<p>Two events <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math>are independent such that <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>A</mi><mo>)</mo><mo>=</mo><mfrac><mn>3</mn><mn>8</mn></mfrac></math>,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>B</mi><mo>)</mo><mo>=</mo><mfrac><mn>1</mn><mn>4</mn></mfrac></math>and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>A</mi><mo>&#x222a;</mo><mi>B</mi><mo>)</mo><mo>=</mo><mfrac><mn>17</mn><mn>32</mn></mfrac></math><br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">I</mi></math>. <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math> are dependent events.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi></math>. <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math> are independent events.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">III</mi></math> .<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math> are Muually exclusive events.<br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">IV</mi></math>.<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math> are not-mutually exclusive events. <br><strong>Which of the following shows the properties for the events  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math>? </strong></p>\r\n', 'EXM009'),
(47, '<p>Given <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>B</mi><mo>)</mo><mo>=</mo><mfrac><mn>2</mn><mn>5</mn></mfrac></math>,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>A</mi><mo>&#x2229;</mo><mi>B</mi><mo>)</mo><mo>=</mo><mfrac><mn>11</mn><mn>25</mn></mfrac></math> and<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>A</mi><mo>&#x222a;</mo><mi>B</mi><mo>)</mo><mo>=</mo><mfrac><mn>13</mn><mn>50</mn></mfrac></math>. Find<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>A</mi><mo>)</mo></math>.</p>\r\n', 'EXM009'),
(48, '<p>A number is chosen at random from the set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>U</mi></math> = {20,30,40,50,60} and a number is chosen at random from the set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>V</mi></math> = {4,5,6,7}. By listing down the possible outcomes, determine the probability that the sum of the numbers is a perfect square. </p>\r\n', 'EXM009'),
(49, '<p>Which of the following is <strong>not</strong> an active income?</p>\r\n', 'EXM010'),
(50, '<p>Which of the following is a long-term financial goal?</p>\r\n', 'EXM010'),
(51, '<p>The information below shows Zakis incomes in October.<ul><li>Net salary ------------ RM4530</li><li>Saving interest-------- RM765</li><li>Living Cost allowance-- RM300</li><li>House rental----------- RM900</li><li>Sale commission-------- RM550</li><li>Share dividend--------- RM450</li></ul>Determine the active incomes of Zaki in that month.</p>\r\n', 'EXM010'),
(52, '<p>The net income of Mr Wong in April is RM418. If his total monthly incomes is RM2785, find the total expenditures of Mr Wong in that month.</p>\r\n', 'EXM010'),
(68, '<p>If we want to represent a relation between number of link current and number of branch currents in a directional graph, we should use:</p>', 'EXM005'),
(70, '<p>A train begins a journey from a station and travels 60 km in a time of 20 minutes.\r\nWhat is the average speed of the train?</p>', 'EXM007');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(255) NOT NULL,
  `Feedback` text NOT NULL,
  `R_date` date NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `R_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Feedback`, `R_date`, `user_email`, `R_type`) VALUES
(14, 'i want my tree back', '2024-01-27', 'SoonChuan2004@gmail.com', 'Exam Feedback'),
(17, 'sad for my tree', '2024-02-01', 'SoonChuan2004@gmail.com', 'Exam Feedback'),
(18, 'i want my tree back', '2024-01-03', 'SoonChuan2004@gmail.com', 'Exam Feedback'),
(19, 'Question issue', '2024-04-01', 'SoonChuan2004@gmail.com', 'Exercise Issue'),
(20, 'in the option no correct answer', '2024-03-08', 'aziz@gmail.com', 'Exercise Issue'),
(23, 'sssss', '2024-04-07', 'SoonChuan2004@gmail.com', 'Exercise Issue'),
(24, 'bdlldcod', '2024-04-07', 'SoonChuan2004@gmail.com', 'Exam Feedback'),
(26, 'Nice Tree but the time for answer the question is too less', '2024-04-07', 'SoonChuan2004@gmail.com', 'Exam Feedback'),
(27, 'error on selection', '2024-04-07', 'SoonChuan2004@gmail.com', 'Exercise Issue'),
(28, 'The quadratic functions below pass through the points stated. Calculate the value of C for each case. � ( � ) = � 2 + 7 � + � , passes through point(0, 5). this question have a issue', '2024-04-07', 'SoonChuan2004@gmail.com', 'Exercise Issue'),
(29, 'Determine the values of a, b and c for each of the following quadratic expressions. � 2 - 2 � have problem', '2024-04-08', 'SoonChuan2004@gmail.com', 'Exercise Issue'),
(30, 'a= 2, b = -5, c = 1 option wrong', '2024-04-08', 'SoonChuan2004@gmail.com', 'Exercise Issue'),
(31, 'damn the question is so hard to answer i can handle it', '2024-04-08', 'SoonChuan2004@gmail.com', 'Exam Feedback'),
(32, 'question quite easy to answer can have more harder answer or not??', '2024-04-08', 'SoonChuan2004@gmail.com', 'Exercise Issue');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `Final_Exam_ID` varchar(10) NOT NULL,
  `Final_Exam_Type` varchar(20) NOT NULL,
  `Course_ID` char(10) NOT NULL,
  `Chapter` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`Final_Exam_ID`, `Final_Exam_Type`, `Course_ID`, `Chapter`) VALUES
('MATHEND01', 'A', 'SUB1', 'M011'),
('MATHEND02', 'B', 'SUB1', 'M012');

-- --------------------------------------------------------

--
-- Table structure for table `final_a_answer`
--

CREATE TABLE `final_a_answer` (
  `F_A_Answer_ID` int(11) NOT NULL,
  `QID_A` int(11) NOT NULL,
  `Final_Answer_A` varchar(8000) NOT NULL,
  `Correct_Answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_a_answer`
--

INSERT INTO `final_a_answer` (`F_A_Answer_ID`, `QID_A`, `Final_Answer_A`, `Correct_Answer`) VALUES
(1, 1, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>8</mn></math></p>\r\n', 0),
(2, 1, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>1</mn></math></p>', 1),
(3, 1, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>1</mn></math></p>', 0),
(4, 1, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>2</mn></math></p>', 0),
(5, 2, '<p>(0,-8)</p>', 0),
(6, 2, '<p>(0,3)</p>', 0),
(7, 2, '<p>  (0,7)  </p>', 0),
(8, 2, '<p>  (0,-7)  </p>', 0),
(9, 3, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>(</mo><mi>x</mi><mo>+</mo><mn>3</mn><mo>)</mo><mo>(</mo><mi>x</mi><mo>+</mo><mn>10</mn><mo>)</mo></math>  </p>', 1),
(10, 3, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>(</mo><mi>x</mi><mo>+</mo><mn>5</mn><mo>)</mo><mo>(</mo><mi>x</mi><mo>+</mo><mn>6</mn><mo>)</mo></math>  </p>', 0),
(11, 3, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>(</mo><mi>x</mi><mo>+</mo><mn>2</mn><mo>)</mo><mo>(</mo><mi>x</mi><mo>+</mo><mn>15</mn><mo>)</mo></math>  </p>', 0),
(12, 3, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>(</mo><mi>x</mi><mo>+</mo><  mn>1</mn><mo>)</mo><mo>(</mo><mi>x</mi><mo>+</mo><mn>30</mn><mo>)</mo></math>  </p>', 0),
(13, 4, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>2</mn></math>,  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>6</mn></math>  </p>', 0),
(14, 4, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>3</mn></math>,  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>4</mn></math>  </p>', 1),
(15, 4, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>1</mn></math>,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>12</mn></math></p>', 0),
(16, 4, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>2</mn></math>,  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>6</mn></math>  </p>', 0),
(17, 5, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mfrac><mn>7</mn><mn>2</mn></mfrac></math>,  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mn>6</mn></math>  </p>', 0),
(18, 5, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mfrac><mn>5</mn><mn>2</mn></mfrac></math>,<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>5</mn></math></p>', 0),
(19, 5, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mfrac><mn>3</mn><mn>7</mn></mfrac></math>,  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>6</mn></math>  </p>', 0),
(20, 5, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mo>-</mo><mfrac><mn>5</mn><mn>2</mn></mfrac></math>,  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>=</mo><mn>7</mn></math>  </p>', 1),
(21, 6, '<p>  -8  </p>', 0),
(22, 6, '<p>  3  </p>', 0),
(23, 6, '<p>  7  </p>', 0),
(24, 6, '<p>  -7  </p>', 1),
(25, 7, '<p>  18  </p>', 0),
(26, 7, '<p>  123  </p>', 0),
(27, 7, '<p>  27  </p>', 1),
(28, 7, '<p>  25  </p>', 0),
(29, 8, '<p>  45  </p>', 0),
(30, 8, '<p>  34  </p>', 0),
(31, 8, '<p>  43  </p>', 1),
(32, 8, '<p>  86  </p>', 0),
(33, 9, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>100011</mn><mn>2</mn></msub></math>  </p>', 0),
(34, 9, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>111001</mn><mn>2</mn></msub></math>  </p>', 0),
(35, 9, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>101111</mn><mn>2</mn></msub></math>  </p>', 0),
(36, 9, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>101011</mn><mn>2</mn></msub></math></p>', 1),
(37, 10, '<p>  47  </p>', 1),
(38, 10, '<p>  67  </p>', 0),
(39, 10, '<p>77</p>', 0),
(40, 10, '<p>  11  </p>', 0),
(41, 11, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2560</mn></math>  </p>', 1),
(42, 11, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2480</mn></math>  </p>', 0),
(43, 11, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>512</mn></math>  </p>', 0),
(44, 11, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>320</mn></math>  </p>', 0),
(45, 12, '<p>  2  </p>', 0),
(46, 12, '<p>  3  </p>', 0),
(47, 12, '<p>  4  </p>', 0),
(48, 12, '<p>  5  </p>', 1),
(49, 13, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1000</mn><mn>2</mn></msub></math>  </p>', 0),
(50, 13, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1001</mn><mn>2</mn></msub></math>  </p>', 0),
(51, 13, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1011</mn><mn>2</mn></msub></math>  </p>', 0),
(52, 13, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1100</mn><mn>2</mn></msub></math>  </p>', 1),
(53, 14, '<p>  A square not rhombus  </p>', 0),
(54, 14, '<p>  A square is a rhombus  </p>', 1),
(55, 14, '<p>Parallelograms is a square</p>', 0),
(56, 14, '<p>Parallelogram is not a square</p>', 0),
(57, 15, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x222a;</mo><mi>Q</mi><mo>=</mo><mi>Q</mi></math>  </p>', 0),
(58, 15, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x2229;</mo><mi>Q</mi><mo>=</mo><mi>P</mi></math>  </p>', 0),
(59, 15, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x2229;</mo><mi>Q</mi><mo>&#x2260;</mo><mi>P</mi></math>  </p>', 1),
(60, 15, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x222a;</mo><mi>Q</mi><mo>&#x2260;</mo><mi>P</mi></math></p>', 0),
(61, 16, '<p>{a,c,d}</p>', 1),
(62, 16, '<p>{a,b,c,d,e,f}</p>', 0),
(63, 16, '<p>{b.e}</p>', 0),
(64, 16, '<p>{f}</p>', 0),
(65, 17, '<p>  {2,4,5}  </p>', 0),
(66, 17, '<p>  {2,3,4,5,6}  </p>', 1),
(67, 17, '<p>  {3}  </p>', 0),
(68, 17, '<p>  {6}  </p>', 0),
(69, 18, '<p>  {a, b, c, d, e, f, g, i}  </p>', 0),
(70, 18, '<p>  {b, d, f, h}  </p>', 0),
(71, 18, '<p>  {a, g, h, i, j}  </p>', 1),
(72, 18, '<p>  {c, e}  </p>', 0),
(73, 19, '<p>  Complement of a Set  </p>', 0),
(74, 19, '<p>  Difference of Two Sets  </p>', 0),
(75, 19, '<p>  Intersection of Sets  </p>', 1),
(76, 19, '<p>  Union Sets  </p>', 0),
(85, 20, '<p>  (3,1)  </p>', 0),
(86, 20, '<p>  (-5,5)  </p>', 1),
(87, 20, '<p>  (2,-1)  </p>', 0),
(88, 20, '<p>  (-1,-6)  </p>', 0),
(89, 21, '<p>  (-1,1)  </p>', 0),
(90, 21, '<p>  (1.5,0)  </p>', 0),
(91, 21, '<p>  (1,-1)  </p>', 1),
(92, 21, '<p>  (2,2)  </p>', 0),
(93, 22, '<p>  (-4,2)  </p>', 0),
(94, 22, '<p>  (3,-1)  </p>', 1),
(95, 22, '<p>  (1,3)  </p>', 0),
(96, 22, '<p>  (0,4)  </p>', 0),
(97, 23, '<p>  (0,3)  </p>', 1),
(98, 23, '<p>  (2,3)  </p>', 0),
(99, 23, '<p>  (-1,5)  </p>', 0),
(100, 23, '<p>  (6,0)  </p>', 0),
(101, 24, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>14</mn><mi>x</mi><mo>+</mo><mn>30</mn><mo>&#x2265;</mo><mn>240</mn></math>  </p>', 1),
(102, 24, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>14</mn><mi>x</mi><mo>+</mo><mn>30</mn><mo>&#x2264;</mo><mn>240</mn></math>  </p>', 0),
(103, 24, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>30</mn><mi>x</mi><mo>+</mo><mn>14</mn><mo>&#x2265;</mo><mn>240</mn></math>  </p>', 0),
(104, 24, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>30</mn><mi>x</mi><mo>+</mo><mn>14</mn><mo>&#x2264;</mo><mn>240</mn></math>  </p>', 0),
(105, 25, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2265;</mo><mn>3000</mn></math>  </p>', 0),
(106, 25, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2264;</mo><mn>3000</mn></math>  </p>', 1),
(107, 25, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&gt;</mo><mn>3000</mn></math>  </p>', 0),
(108, 25, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>+</mo><mi>y</mi><mo>&lt;</mo><mn>3000</mn></math>  </p>', 0),
(109, 26, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&lt;</mo><mn>24</mn></math>  </p>', 0),
(110, 26, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&gt;</mo><mn>24</mn></math>  </p>', 0),
(111, 26, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&#x2264;</mo><mn>24</mn></math>  </p>', 1),
(112, 26, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&#x2265;</mo><mn>24</mn></math>  </p>', 0),
(113, 27, '<p>  30, 24, 40, 25, 22, 34  </p>', 0),
(114, 27, '<p>  23, 20, 44, 26, 45, 39  </p>', 1),
(115, 27, '<p>  36,49,55,38,58,42  </p>', 0),
(116, 27, '<p>  64, 48, 50, 46, 44, 62  </p>', 0),
(117, 28, '<p>  1  </p>', 0),
(118, 28, '<p>  2  </p>', 0),
(119, 28, '<p>  5  </p>', 1),
(120, 28, '<p>  6  </p>', 0),
(121, 29, '<p>  6.89  </p>', 1),
(122, 29, '<p>  10.1  </p>', 0),
(123, 29, '<p>  7.26  </p>', 0),
(124, 29, '<p>  9  </p>', 0),
(125, 30, '<p>  2  </p>', 0),
(126, 30, '<p>  16  </p>', 1),
(127, 30, '<p>  4  </p>', 0),
(128, 30, '<p>  7  </p>', 0),
(129, 31, '<p>  (A, J)  </p>', 0),
(130, 31, '<p>  (J, J)  </p>', 1),
(131, 31, '<p>  (I, N)  </p>', 0),
(132, 31, '<p>  (R, A)  </p>', 0),
(133, 32, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>6</mn><mn>13</mn></mfrac></math>  </p>', 0),
(134, 32, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>7</mn><mn>13</mn></mfrac></math>  </p>', 1),
(135, 32, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>8</mn><mn>13</mn></mfrac></math>  </p>', 0),
(136, 32, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>9</mn><mn>13</mn></mfrac></math>  </p>', 0),
(137, 33, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>43</mn><mn>200</mn></mfrac></math>  </p>', 1),
(138, 33, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>61</mn><mn>200</mn></mfrac></math>  </p>', 0),
(139, 33, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>61</mn><mn>100</mn></mfrac></math>  </p>', 0),
(140, 33, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>39</mn><mn>200</mn></mfrac></math>  </p>', 0),
(141, 34, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>3</mn><mn>10</mn></mfrac></math>  </p>', 0),
(142, 34, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>10</mn></mfrac></math>  </p>', 0),
(143, 34, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>4</mn><mn>5</mn></mfrac></math>  </p>', 0),
(144, 34, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>2</mn><mn>5</mn></mfrac></math>  </p>', 1),
(145, 35, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>8</mn></mfrac></math>  </p>', 0),
(146, 35, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>4</mn></mfrac></math></p>', 0),
(147, 35, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>12</mn></mfrac></math>  </p>', 1),
(148, 35, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>  </p>', 0),
(149, 36, '<p>  RM15000  </p>', 1),
(150, 36, '<p>  RM12000  </p>', 0),
(151, 36, '<p>  RM10000  </p>', 0),
(152, 36, '<p>  RM7500  </p>', 0),
(153, 37, '<p>  RM1111.78  </p>', 0),
(154, 37, '<p>  RM900.00  </p>', 0),
(155, 37, '<p>  RM1000.78  </p>', 0),
(156, 37, '<p>  RM902.78  </p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `final_b_answer`
--

CREATE TABLE `final_b_answer` (
  `F_B_Answer_ID` int(11) NOT NULL,
  `QID_B` int(11) NOT NULL,
  `Final_Answer_B` varchar(8000) NOT NULL,
  `Correct_Answer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_b_answer`
--

INSERT INTO `final_b_answer` (`F_B_Answer_ID`, `QID_B`, `Final_Answer_B`, `Correct_Answer`) VALUES
(1, 1, '<p>(0,-8)</p>', 0),
(2, 1, '<p>(0,3)</p>', 0),
(3, 1, '<p>(0,7)</p>', 0),
(4, 1, '<p>(0,-7)</p>', 1),
(5, 2, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><mn>-3</mn><msup><mi>x</mi><mn>2</mn></msup></math></p>', 0),
(6, 2, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>f</mi><mrow><mo>(</mo><mi>x</mi><mo>)</mo></mrow><mo>=</mo><mn>-5</mn><mi>x</mi><mo>-</mo><msup><mi>x</mi><mn>2</mn></msup></math></p>', 0),
(7, 2, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>=</mo><mn>3</mn><msup><mi>x</mi><mn>3</mn></msup><mo>-</mo><mn>4</mn><mi>x</mi><mo>+</mo><mn>5</mn></math></p>', 1),
(8, 2, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi><mo>=</mo><mi>p</mi><mi>i</mi><mo>.</mo><msup><mi>r</mi><mn>2</mn></msup></math></p>', 0),
(9, 3, '<p>a = 4, b = -8, c = 3</p>', 0),
(10, 3, '<p>a = 4, b = -8, c = -3</p>', 1),
(11, 3, '<p>a = 4, b = 8, c = 3</p>', 0),
(12, 3, '<p>a = 4, b = 8, c = -3</p>', 0),
(13, 4, '<p>x=3, minimum point</p>', 0),
(14, 4, '<p>x=-3, minimum point</p>', 0),
(15, 4, '<p>x=3, maximum point</p>', 0),
(16, 4, '<p>x=-3, maximum point</p>', 1),
(17, 5, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1000</mn><mn>2</mn></msub></math></p>', 0),
(18, 5, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1011</mn><mn>2</mn></msub></math></p>', 0),
(19, 5, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1001</mn><mn>2</mn></msub></math></p>', 0),
(20, 5, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>1100</mn><mn>2</mn></msub></math></p>', 1),
(21, 6, '<p>15</p>', 0),
(22, 6, '<p>16</p>', 0),
(23, 6, '<p>17</p>', 0),
(24, 6, '<p>18</p>', 1),
(25, 7, '<p>3645</p>', 1),
(26, 7, '<p>45</p>', 0),
(27, 7, '<p>3697</p>', 0),
(28, 7, '<p>81</p>', 0),
(29, 8, '<p>If x is even number, then x can be divided by 2.</p>', 1),
(30, 8, '<p>If x can be divided by 2, then x is even number.</p>', 0),
(31, 8, '<p>If x cannot be divided by 2, then x is not even number.</p>', 0),
(32, 8, '<p>If x is not even number, then x cannot be divided by 2.</p>', 0),
(33, 9, '<p>I only</p>', 0),
(34, 9, '<p>I and II only.</p>', 0),
(35, 9, '<p>I and III only</p>', 1),
(36, 9, '<p>II and III only</p>', 0),
(37, 10, '<p>If you win the league trophy, then you win the championship game.</p>', 0),
(38, 10, '<p>If you don\'t win the league trophy, then you don\'t win the championship game.</p>', 0),
(39, 10, '<p>If you don\'t win the championship game, then you don\'t win the league trophy.</p>', 1),
(40, 10, '<p>If you don\'t play the game, you can\'t win a trophy.</p>', 0),
(41, 11, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x222a;</mo><mi>Q</mi><mo>=</mo><mi>Q</mi></math></p>', 0),
(42, 11, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x2229;</mo><mi>Q</mi><mo>=</mo><mi>P</mi></math></p>', 0),
(43, 11, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x2229;</mo><mi>Q</mi><mo>&#x2260;</mo><mi>P</mi></math></p>', 1),
(44, 11, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x222a;</mo><mi>Q</mi><mo>&#x2260;</mo><mi>P</mi></math></p>', 0),
(45, 12, '<p>Intersection</p>', 0),
(46, 12, '<p>Union</p>', 1),
(47, 12, '<p>Disjointed</p>', 0),
(48, 12, '<p>Subset</p>', 0),
(49, 13, '<p>{1, 2, 3, 4, 5, 6, 7, 9}</p>', 0),
(50, 13, '<p>{1, 2, 3, 5}</p>', 1),
(51, 13, '<p>{4, 6, 7, 9}</p>', 0),
(52, 13, '<p>{}</p>', 0),
(53, 14, '<p>{3, 5, 7}</p>', 0),
(54, 14, '<p>{2, 3, 5, 7}</p>', 0),
(55, 14, '<p>{2, 3, 5, 7, 9}</p>', 0),
(56, 14, '<p>{1, 2, 3, 5, 7, 9}</p>', 1),
(57, 15, '<p>10</p>', 0),
(58, 15, '<p>9</p>', 1),
(59, 15, '<p>8</p>', 0),
(60, 15, '<p>7</p>', 0),
(61, 16, '<p>(-2,1)</p>', 0),
(62, 16, '<p>(0,-1)</p>', 0),
(63, 16, '<p>(2,1)</p>', 1),
(64, 16, '<p>(4,-1)</p>', 0),
(65, 17, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>-</mo><mi>r</mi><mo>&#x2265;</mo><mn>150</mn></math></p>', 0),
(66, 17, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi><mo>-</mo><mi>r</mi><mo>&lt;</mo><mn>150</mn></math></p>', 0),
(67, 17, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>r</mi><mo>-</mo><mi>p</mi><mo>&lt;</mo><mn>150</mn></math></p>', 1),
(68, 17, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>r</mi><mo>-</mo><mi>p</mi><mo>&#x2264;</mo><mn>150</mn></math></p>', 0),
(69, 18, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>11</mn><mi>x</mi><mo>+</mo><mn>26</mn><mi>y</mi><mo>&#x2265;</mo><mn>130</mn></math></p>', 1),
(70, 18, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>11</mn><mi>x</mi><mo>+</mo><mn>26</mn><mi>y</mi><mo>&gt;</mo><mn>130</mn></math></p>', 0),
(71, 18, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>11</mn><mi>x</mi><mo>+</mo><mn>26</mn><mi>y</mi><mo>&#x2264;</mo><mn>130</mn></math></p>', 0),
(72, 18, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>11</mn><mi>x</mi><mo>+</mo><mn>26</mn><mi>y</mi><mo>&lt;</mo><mn>130</mn></math></p>', 0),
(73, 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>7</mn><mi>x</mi><mo>+</mo><mn>13</mn><mi>y</mi><mo>&lt;</mo><mn>81</mn></math></p>', 0),
(74, 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>7</mn><mi>x</mi><mo>+</mo><mn>13</mn><mi>y</mi><mo>&#x2264;</mo><mn>81</mn></math></p>', 1),
(75, 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>7</mn><mi>x</mi><mo>+</mo><mn>13</mn><mi>y</mi><mo>&#x2265;</mo><mn>81</mn></math></p>', 0),
(76, 19, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>7</mn><mi>x</mi><mo>+</mo><mn>13</mn><mi>y</mi><mo>&gt;</mo><mn>81</mn></math></p>', 0),
(77, 20, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&lt;</mo><mn>24</mn></math></p>', 0),
(78, 20, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&gt;</mo><mn>24</mn></math></p>', 0),
(79, 20, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&#x2264;</mo><mn>24</mn></math></p>', 1),
(80, 20, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>3</mn><mi>x</mi><mo>+</mo><mn>2</mn><mi>y</mi><mo>&#x2265;</mo><mn>24</mn></math></p>', 0),
(81, 21, '<p>x = 3, y = 7</p>', 0),
(82, 21, '<p>x = 3, y = 11</p>', 1),
(83, 21, '<p>x = 9, y = 10</p>', 0),
(84, 21, '<p>x = 10, y = 11</p>', 0),
(85, 22, '<p>34.0</p>', 1),
(86, 22, '<p>33.0</p>', 0),
(87, 22, '<p>34.5</p>', 0),
(88, 22, '<p>35.5</p>', 0),
(89, 23, '<p>Variance = 3.25, Standard Deviation = 1.80</p>', 0),
(90, 23, '<p>Variance = 1.64, Standard Deviation = 1.28</p>', 1),
(91, 23, '<p>Variance = 9.95, Standard Deviation = 2.99</p>', 0),
(92, 23, '<p>Variance = 12.2, Standard Deviation = 3.29</p>', 0),
(93, 24, '<p>6</p>', 0),
(94, 24, '<p>8</p>', 0),
(95, 24, '<p>12</p>', 1),
(96, 24, '<p>11</p>', 0),
(97, 25, '<p>0.90</p>', 0),
(98, 25, '<p>0.55</p>', 0),
(99, 25, '<p>0.3025</p>', 0),
(100, 25, '<p>0.2025</p>', 1),
(101, 26, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>36</mn></mfrac></math></p>', 0),
(102, 26, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>66</mn></mfrac></math></p>', 1),
(103, 26, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>15</mn><mn>22</mn></mfrac></math></p>', 0),
(104, 26, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>25</mn><mn>36</mn></mfrac></math></p>', 0),
(105, 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>4</mn><mn>7</mn></mfrac></math></p>', 1),
(106, 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>12</mn><mn>49</mn></mfrac></math></p>', 0),
(107, 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>3</mn><mn>7</mn></mfrac></math></p>', 0),
(108, 27, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>37</mn><mn>49</mn></mfrac></math></p>', 0),
(109, 28, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>43</mn><mn>200</mn></mfrac></math></p>', 1),
(110, 28, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>35</mn><mn>200</mn></mfrac></math></p>', 0),
(111, 28, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>105</mn><mn>200</mn></mfrac></math></p>', 0),
(112, 28, '<p>None of the above</p>', 0),
(113, 29, '<p>Save RM5 000 as registration fees of college after 2 years</p>', 0),
(114, 29, '<p>Buy a new watch worth RM500 by next year</p>', 0),
(115, 29, '<p>Save RM2 000 to buy video games by next year</p>', 0),
(116, 29, '<p>Save RM5 000 to bring parents on vacation to Japan.</p>', 1),
(121, 31, '<p>-800(Deficit)</p>', 0),
(122, 31, '<p>1000(Surplus)</p>', 0),
(123, 31, '<p>800(Surplus)</p>', 1),
(124, 31, '<p>-1000(Deficit)</p>', 0),
(125, 32, '10', 0),
(126, 32, '180', 1),
(127, 32, '34', 0),
(128, 32, '421', 0),
(129, 33, '160', 1),
(130, 33, '60', 0),
(131, 33, '200', 0),
(132, 33, '160.1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `final_question_a`
--

CREATE TABLE `final_question_a` (
  `QID_A` int(11) NOT NULL,
  `Question_A` varchar(8000) NOT NULL,
  `Final_Exam_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_question_a`
--

INSERT INTO `final_question_a` (`QID_A`, `Question_A`, `Final_Exam_ID`) VALUES
(1, '<p>What is the axis of symmetry for the following equation? <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>=</mo><mn>4</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>8</mn><mi>x</mi><mo>+</mo><mn>9</mn></math></p>', 'MATHEND01'),
(2, '<p>What is the y-intercept for the equation <br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>=</mo><mn>-8</mn><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>7</mn></math></p>', 'MATHEND01'),
(3, '<p>Factorise: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>13</mn><mi>x</mi><mo>+</mo><mn>30</mn></math></p>', 'MATHEND01'),
(4, '<p>Solve the following quadratic equation...... <br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>7</mn><mi>x</mi><mo>+</mo><mn>12</mn><mo>=</mo><mn>0</mn></math></p>', 'MATHEND01'),
(5, '<p>  Solve: <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>9</mn><mi>x</mi><mo>=</mo><mn>35</mn></math>  </p>', 'MATHEND01'),
(6, '<p>  What is the <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi></math> intercept?  <br>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>=</mo><mo>-</mo><mn>8</mn><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>7</mn></math>  </p>', 'MATHEND01'),
(7, '<p>  Convert <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>123</mn><mn>4</mn></msub></math>  to base 10  </p>', 'MATHEND01'),
(8, '<p>  What is the value in base 10?  <br>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>(</mo><mn>101011</mn><msub><mo>)</mo><mn>2</mn></msub></math>  </p>', 'MATHEND01'),
(9, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>11101</mn><mn>2</mn></msub><mo>+</mo><msub><mn>1110</mn><mn>2</mn></msub><mo>=</mo></math>  </p>', 'MATHEND01'),
(10, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>100111</mn><mn>2</mn></msub><mo>=</mo><msub><mo>?</mo><mn>8</mn></msub></math>  </p>', 'MATHEND01'),
(11, '<p>  Find the value of digit 5, in base ten, of the number  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>5430</mn><mn>8</mn></msub></math>.  </p>', 'MATHEND01'),
(12, '<p>  Given <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>6</mn><mi>n</mi><mn>4</mn></math>is a three digits number in base eight.<br>If <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>6</mn><mi>n</mi><mn>4</mn></math> = <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>110101100</mn><mn>2</mn></msub></math>, find the value of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>n</mi></math>.</p>', 'MATHEND01'),
(13, '<p>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>101</mn><mn>2</mn></msub><mo>+</mo><msub><mn>111</mn><mn>2</mn></msub><mo>=</mo></math>  </p>', 'MATHEND01'),
(14, '<p>  Premise 1: All rhombuses are parallelgrams.  <br>  Premise 2:_______________________.  <br>  Conclusion: A square is a parallelogram.  </p>', 'MATHEND01'),
(15, '<p>  Complete the premise in the following argument.  <br>  Premise 1 : If set P is a subset of set Q, then <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x2229;</mo><mi>Q</mi><mo>=</mo><mi>P</mi></math>.  <br>  Premise 2 : ________________________.  <br>  Premise 3: Set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi></math> is not a subset of set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Q</mi></math>.  </p>', 'MATHEND01'),
(16, '<p>  Given the sets <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> = {a, b, c, d, e} and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math> = {a, c, d, f}  <br>  What is <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi><mo>&#x2229;</mo><mi>B</mi></math>?  </p>', 'MATHEND01'),
(17, '<p>  Given the sets <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math> = {2, 3, 4, 5} and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math> = {2, 4, 5, 6}  <br>  What is <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi><mo>&#x2229;</mo><mi>B</mi></math>?  </p>', 'MATHEND01'),
(18, '<p>  Given the sets <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>U</mi></math> = {a, b, c, d, e, f, g, h, i, j}  <br>  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi></math>= {a, c, e, g, i} and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B</mi></math> = {b, c, d, e, f}  <br>  What is <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>B\'</mi></math> ?  </p>', 'MATHEND01'),
(19, '<p>  It is an operation on sets that contains elements that are common to both sets.  </p>', 'MATHEND01'),
(20, '<p>  Verify if each ordered pair is a solution of  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><mi>x</mi><mo>-</mo><mi>y</mi><mo>&lt;</mo><mn>3</mn></math>.  </p>', 'MATHEND01'),
(21, '<p>  Which of the following is the solution to the given system of linear inequality  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi><mo>-</mo><mn>2</mn><mi>y</mi><mo>&gt;</mo><mn>1</mn></math>  and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><mi>x</mi><mo>+</mo><mi>y</mi><mo>&#x2264;</mo><mn>2</mn></math>.  </p>', 'MATHEND01'),
(22, '<p>  Verify if each ordered pair is a solution of  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>-</mo><mi>x</mi><mo>+</mo><mn>4</mn><mi>y</mi><mo>&lt;</mo><mn>8</mn></math>.  </p>', 'MATHEND01'),
(23, '<p>  Find the solution of the inequality  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn><mi>y</mi><mo>&lt;</mo><mn>12</mn></math>.  </p>', 'MATHEND01'),
(24, '<p>  Lea needs at least $240 to buy new headphones. She has already saved $30. She earns $14 per car that she washes.  Which inequality below can be used to determine how many cars she has to wash to have enough money?  </p>', 'MATHEND01'),
(25, '<p>  The total amount of electric (<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math>) and water (<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi></math>) bill is at most 3000 person. which of the following correctly represents this situation?</p>', 'MATHEND01'),
(26, '<p>  Aleris is sending a fancy organic fruit basket to her grandma for her birthday.  Apples cost RM3 and oranges cost RM2. Aleris can spend <strong>no more than</strong> RM24 on the gift.  Write an inequality that describes the situation.  </p>', 'MATHEND01'),
(27, '<p>  Which set of data has the largest range?  </p>', 'MATHEND01'),
(28, '<p>  <table border=\"1\">  <tr>  <th>Score</th>  <th>Frequency</th>  </tr>  <tr>  <td>1</td>  <td>4</td>  </tr>  <tr>  <td>2</td>  <td>3</td>  </tr>  <tr>  <td>3</td>  <td>2</td>  </tr>  <tr>  <td>4</td>  <td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math></td>  </tr>  <tr>  <td>5</td>  <td>1</td>  </tr>  </table>  The frequency table shows the scores obtained by a group of pupils in a competition. If the interquartile range is 3, state one possible value of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math>.  </p>', 'MATHEND01'),
(29, '<p>  What is the standard deviation for the data given: 5, 10, 7, 12, 0, 20, 15, 22, 8, 2.  </p>', 'MATHEND01'),
(30, '<p>  If the standard deviation of a data set is 4, what is the variance?  </p>', 'MATHEND01'),
(31, '<p>  Five cards labelled with the letters “R, A, J, I, N” are put into a box. Two cards are taken out at random from the box one by one without replacement.  Which of the following is not the possible outcome for the event?  </p>', 'MATHEND01'),
(32, '<p>  <ul>  <li><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>R</mi></math>: Event of getting a vowel </li>  <li><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>T</mi></math>: Event of getting letter J</li>  </ul>  The cards labelled with the letters “K, E, B, O, L, E, H, J, A, D, I, A, N” are put in a container. Determine  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>(</mo><mi>R</mi><mo>&#x222a;</mo><mi>T</mi><mo>)</mo></math>.  </p>', 'MATHEND01'),
(33, '<p>  Edwin has eight shirts and three of them are blue shirts. 40% of the shirts that Zaki has are blue.  <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>5</mn></mfrac></math> of the shirts that Gopal has are blue.  Edwin, Zaki and Gopal each chooses a shirt at random to attend a meeting. Calculate the probability that two of them wear blue shirts.  </p>', 'MATHEND01'),
(34, '<p>  Two prefects are chosen at random from five prefects, where 3 of them are in Form 5 and 2 are in Form 4.  Calculate the probability that both prefects chosen are in the same form.  </p>', 'MATHEND01'),
(35, '<p>  A coin and a number cube with the numbers 1 through 6 are tossed.  What is the probability of the coin showing tails and the number cube showing the number 3?  </p>', 'MATHEND01'),
(36, '<p>  Mr Patrick spends RM2 500 for household expenses every month. How much is the minimum emergency fund needed by him based on Bank Negara Malaysia suggestion?  <br>  (Hint: Emergency fund is the amount Mr Patrick should have to spend on household if he suddenly doesn\'t have any income)  </p>', 'MATHEND01'),
(37, '<p>  How much is Puan Sofia \'s monthly saving if she wanted to pay the down payment for a RM650 000 house in six years?  </p>', 'MATHEND01');

-- --------------------------------------------------------

--
-- Table structure for table `final_question_b`
--

CREATE TABLE `final_question_b` (
  `QID_B` int(11) NOT NULL,
  `Question_B` varchar(8000) NOT NULL,
  `Final_Exam_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `final_question_b`
--

INSERT INTO `final_question_b` (`QID_B`, `Question_B`, `Final_Exam_ID`) VALUES
(1, '<p> What is the y intercept for the equation: <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>y</mi><mo>=</mo><mn>-8</mn><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>7</mn></math></p>', 'MATHEND02'),
(2, '<p> Which of the following is NOT a quadratic function ?</p>', 'MATHEND02'),
(3, '<p>Determine the values of a, b, and c for the quadratic equation: <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>4</mn><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>8</mn><mi>x</mi><mo>=</mo><mn>3</mn></math></p>', 'MATHEND02'),
(4, '<p>Find the equation of the axis of symmetry and determine the minimum point or maximum point of the quadratic equation <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>f</mi><mo>(</mo><mi>x</mi><mo>)</mo><mo>=</mo><msup><mi>-x</mi><mn>2</mn></msup><mo>&#x2212;</mo><mn>6</mn><mi>x</mi><mo>&#x2212;</mo><mn>10</mn></math></p', 'MATHEND02'),
(5, '<p><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mn>101</mn><mn>2</mn></msub><mo>+</mo><msub><mn>111</mn><mn>2</mn></msub><mo>=</mo></math></p>', 'MATHEND02'),
(6, '<p>Given that <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mi>x</mi><mn>10</mn></msub><mo>=</mo><msub><mn>11</mn><mn>2</mn></msub><mo>+</mo><msub><mn>11</mn><mn>5</mn></msub><mo>+</mo><msub><mn>11</mn><mn>8</mn></msub></math>, find the value of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math></p>', 'MATHEND02'),
(7, '<p>State the value of the underlined digit. <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><munder accentunder=\'true\'><mn>5</mn><mo>_</mo></munder><msub><mn>037</mn><mn>9</mn></msub></math></p>', 'MATHEND02'),
(8, '<p>p : x is even number. <br> q : x can be divided by 2. <br> is the implication for the statements above?</p>', 'MATHEND02'),
(9, '<p>Which of the following statement is true? <br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">I</mi></math> Some quadratic equations have two roots. <br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">II</mi></math> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>0.25</mn><mo>&#xd7;</mo><msup><mn>10</mn><mn>4</mn></msup></math> is a number in standard form. <br><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi mathvariant=\"double-struck\">III</mi></math> &Phi; is a subset of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>M</mi><mo>&#x2229;</mo><mi>N</mi></math> </p>', 'MATHEND02'),
(10, '<p>Inverse of: <strong>If you win the championship game, then you win the league trophy.</strong></p>', 'MATHEND02'),
(11, '<p>Complete the premise in the following argument.<br> Premise 1 : If set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi></math> is a subset of set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Q</mi></math>, then <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi><mo>&#x2229;</mo><mi>Q</mi><mo>&#xA0;</mo><mo>=</mo><mi>P</mi></math>. <br> Premise 2 : ......................................................................... <br> Premise 3 : Set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>P</mi></math> is not a subset of set <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>Q</mi></math>. </p>', 'MATHEND02'),
(12, '<p>What does this symbol (<math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mo>&#x222a;</mo></math>) represent in set theory?</p>', 'MATHEND02'),
(13, '<p> If A = {1, 2, 3, 4, 5, 6} and B = {1, 2, 3, 5, 7, 9} What is <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi><mo>&#x2229;</mo><mi>B</mi></math> ? </p>', 'MATHEND02'),
(14, '<p> If A = {1, 3, 5, 7, 9} and B = {2, 3, 5, 7}, what is <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>A</mi><mo>&#x222a;</mo><mi>B</mi></math> ? </p>', 'MATHEND02'),
(15, '<p>What is the cardinal of the set, H ={w, o, n, d, e, r, f, u, l}</p>', 'MATHEND02'),
(16, '<p>Which point does not satisfy the linear inequality <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn><mi>y</mi><mo>&#x2264;</mo><mn>5</mn></math>?</p>', 'MATHEND02'),
(17, '<p> A factory produces <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi></math> handphones of model X and <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>r</mi></math> handphones of model Y. <br>The number of handphones of model Y cannot exceed the number of handphones of model X by more than 150. <br>Which linear inequality represents the situation? </p>', 'MATHEND02'),
(18, '<p><strong>Justin charges RM11 to mow a small lawn and RM26 to mow a large lawn. He would like to make at least RM130.</strong> <br>Write an inequality that describes the situation.<br>Let x = # of small lawns mowed and Let y = # of large lawns mowed</p>', 'MATHEND02'),
(19, '<p>Write the linear inequality in standard form for this situation: Ms. Savva is ordering pizzas and breadsticks for a school party and has a budget of no more than RM81. <br> An order of breadsticks costs RM7 and a pizza costs RM13.</p>', 'MATHEND02'),
(20, '<p>Aleris is sending a fancy organic fruit basket to her grandma for her birthday. Apples cost RM3 and oranges cost RM2. Aleris can spend no more than RM24 on the gift.<br>Write an inequality that describes the situation. <br> Let x = # of apples <br> Let y = # of oranges </p>', 'MATHEND02'),
(21, '<p><table border=\"1\"><tr><td>9</td><td>11</td><td>3</td><td>5</td><td>9</td><td>10</td><td>9</td><td>7</td><td>7</td><td>10</td></tr> <br></table>The data above is the score of environment quiz for 10 participants. <br> It is found that the scores obtained can be written in the form x ≤ scores marks ≤ y. Find the values of x and y </p>', 'MATHEND02'),
(22, '<p>Given the height, in cm, of 5 studnets in a kindergarten is as follow: <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mo>&#x2211;</mo><mi>x</mi></msub></math> = 515 <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><msub><mo>&#x2211;</mo><mrow><msup><mi>x</mi><mn>2</mn></msup></mrow></msub></math> = 53215 <br> <strong>Find The Varians</strong></p>', 'MATHEND02'),
(23, '<p><table border=\"1\"><tr><th>Score</th><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr><tr><th>Frequency</th><td>5</td><td>6</td><td>11</td><td>10</td><td>8</td></tr></table>Calculate the variance and the standard deviation of the set of the data</p>', 'MATHEND02'),
(24, '<p><table border=\"1\"><tr><th>Frequency</th><td>3</td><td>3</td><td>2</td><td>1</td><td>1</td></tr><tr><th><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>x</mi></math></th><td>10</td><td>15</td><td><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi></math></td><td>16</td><td>14</td></tr></table>Calculate the value of <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mi>p</mi></math></p>', 'MATHEND02'),
(25, '<p>According to an investigation, the probability of rainfall on Mountain X in May is 0.45. <br>Calculate the probability that Mountain X will have two consecutive rainy days in May.</p', 'MATHEND02'),
(26, '<p>A box contains 12 bulbs where two of the bulbs are burnt. Two bulbs are selected at random from the box. <br>Calculate the probability of getting two burnt bulbs.</p>', 'MATHEND02'),
(27, '<p>Seven cards labelled with the letters \"G,E,M,B,I,R,A\" are put in a box. A card is chosen at random from the box.<br> Calculate the probability that the card chosen is labelled with a vowel or letter \"R\".</p>', 'MATHEND02'),
(28, '<p>Jacky has eight shirt three of them are blue shirts. 40% if the shirts that Halim has are blue. <br> <math xmlns=\"http://www.w3.org/1998/Math/MathML\"><mfrac><mn>1</mn><mn>5</mn></mfrac></math> of the shirts that Kumar has are blue. Jacky, Halim and Kumar each chooses a shirt at random to attend a meeting. <br> Calculate the probability that two of them wear blue shirts. </p>', 'MATHEND02'),
(29, '<p>Which of the following financial goals does not meet the SMART concept?</p>', 'MATHEND02'),
(31, '<p>Calculate the cash flow for Mr. Rabbani <br>Active Income : RM3,000<br>Passive Income : RM350<br>Fixed Expenses : RM 2,300<br>Variable Expenses : RM 250<br>Then, determine whether it is Deficit or Surplus.</p>', 'MATHEND02'),
(32, '90+90', 'MATHEND02'),
(33, '180-20', 'MATHEND02');

-- --------------------------------------------------------

--
-- Table structure for table `progression`
--

CREATE TABLE `progression` (
  `Progression_ID` varchar(10) NOT NULL,
  `Progression_Rate` varchar(100) DEFAULT NULL,
  `Tree_Stage_url` varchar(2000) NOT NULL,
  `Chapter_ID` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progression`
--

INSERT INTO `progression` (`Progression_ID`, `Progression_Rate`, `Tree_Stage_url`, `Chapter_ID`) VALUES
('P_01', 'STAGE_0', '/idle/stage_0_idle.gif', 'M001'),
('P_02', 'STAGE_1', '/idle/stage_1_idle.gif', 'M002'),
('P_03', 'STAGE_2', '/idle/stage_2_idle.gif', 'M003'),
('P_04', 'STAGE_3', '/idle/stage_3_idle.gif', 'M004'),
('P_05', 'STAGE_4', '/idle/stage_4_idle.gif', 'M005'),
('P_06', 'STAGE_5', '/idle/stage_5_idle.gif', 'M006'),
('P_07', 'STAGE_6', '/idle/stage_6_idle.gif', 'M007'),
('P_08', 'STAGE_7', '/idle/stage_7_idle.gif', 'M008'),
('P_09', 'STAGE_8', '/idle/stage_8_idle.gif', 'M009'),
('P_10', 'STAGE_9', '/idle/stage_9_idle.gif', 'M010'),
('P_11', 'STAGE_10', '/idle/stage_10_idle.gif', 'M011'),
('P_12', 'STAGE_11', '/idle/stage_11_idle.gif', 'M012'),
('P_13', 'STAGE_12', '/idle/stage_12_idle.gif', 'M013');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `Tree_ID` int(100) NOT NULL,
  `type_ID` varchar(20) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `Progression_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`Tree_ID`, `type_ID`, `user_email`, `Progression_ID`) VALUES
(1, 'Tree_A', 'aziz@gmail.com', 'P_01'),
(2, 'Tree_B', 'SoonChuan2004@gmail.com', 'P_11'),
(3, 'Tree_B', 'Yew@gmail.com', 'P_01'),
(5, 'Tree_B', 'limtingwei203@gmail.com', 'P_06'),
(6, 'Tree_A', 'tingwei2@gmail.com', 'P_03'),
(7, 'Tree_A', 'melvinchen123@gmail.com', 'P_01'),
(8, 'Tree_B', 'sgdfudfahi@gmail.com', 'P_01'),
(9, 'Tree_B', 'leesoonchuan0602@gmail.com', 'P_01'),
(10, 'Tree_A', 'limtingwei2003@gmail.com', 'P_01');

-- --------------------------------------------------------

--
-- Table structure for table `tree_types`
--

CREATE TABLE `tree_types` (
  `type_ID` varchar(20) NOT NULL,
  `type_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tree_types`
--

INSERT INTO `tree_types` (`type_ID`, `type_name`) VALUES
('Tree_A', 'Mango Tree'),
('Tree_B', 'Apple Tree');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `user_roles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_email`, `user_password`, `Username`, `user_roles`) VALUES
('aziz@gmail.com', 'aziz123', 'azizkaripap', 0),
('leesoonchuan0602@gmail.com', '123456789', 'Soon Soon', 0),
('limtingwei2003@gmail.com', '1234abcd', 'tw', 0),
('limtingwei203@gmail.com', '88888888', 's', 0),
('melvinchen123@gmail.com', 'melvin123', 'Melvin Chan', 0),
('sgdfudfahi@gmail.com', '12345678', 'Soon', 0),
('SoonChuan2004@gmail.com', '987654321', 'Soon Chuan', 0),
('tingwei2@gmail.com', '123456789', 'q', 0),
('tingwei@gmail.com', 'ting123', 'tingtingwei', 1),
('Yew@gmail.com', '11111111', 'Chin Yew', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`Chapter_ID`),
  ADD KEY `Course_ID` (`Course_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_ID`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`Exercise_Num`),
  ADD KEY `Chapter_ID` (`Chapter_ID`);

--
-- Indexes for table `exer_answer`
--
ALTER TABLE `exer_answer`
  ADD PRIMARY KEY (`Ex_A_ID`),
  ADD KEY `Ex_Q_ID` (`Ex_Q_ID`);

--
-- Indexes for table `exer_subq`
--
ALTER TABLE `exer_subq`
  ADD PRIMARY KEY (`Ex_Q_ID`),
  ADD KEY `Exercise_Num` (`Exercise_Num`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`Final_Exam_ID`),
  ADD KEY `Course_ID` (`Course_ID`),
  ADD KEY `Chapter_ID` (`Chapter`);

--
-- Indexes for table `final_a_answer`
--
ALTER TABLE `final_a_answer`
  ADD PRIMARY KEY (`F_A_Answer_ID`),
  ADD KEY `QID_A` (`QID_A`);

--
-- Indexes for table `final_b_answer`
--
ALTER TABLE `final_b_answer`
  ADD PRIMARY KEY (`F_B_Answer_ID`),
  ADD KEY `QID_B` (`QID_B`);

--
-- Indexes for table `final_question_a`
--
ALTER TABLE `final_question_a`
  ADD PRIMARY KEY (`QID_A`),
  ADD KEY `Final_Exam_ID` (`Final_Exam_ID`);

--
-- Indexes for table `final_question_b`
--
ALTER TABLE `final_question_b`
  ADD PRIMARY KEY (`QID_B`),
  ADD KEY `Final_Exam_ID` (`Final_Exam_ID`);

--
-- Indexes for table `progression`
--
ALTER TABLE `progression`
  ADD PRIMARY KEY (`Progression_ID`),
  ADD KEY `Chapter_ID` (`Chapter_ID`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`Tree_ID`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `type_ID` (`type_ID`),
  ADD KEY `Progression_ID` (`Progression_ID`);

--
-- Indexes for table `tree_types`
--
ALTER TABLE `tree_types`
  ADD PRIMARY KEY (`type_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exer_subq`
--
ALTER TABLE `exer_subq`
  MODIFY `Ex_Q_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `final_a_answer`
--
ALTER TABLE `final_a_answer`
  MODIFY `F_A_Answer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `final_b_answer`
--
ALTER TABLE `final_b_answer`
  MODIFY `F_B_Answer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `final_question_a`
--
ALTER TABLE `final_question_a`
  MODIFY `QID_A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `final_question_b`
--
ALTER TABLE `final_question_b`
  MODIFY `QID_B` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `Tree_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `exercise`
--
ALTER TABLE `exercise`
  ADD CONSTRAINT `exercise_ibfk_1` FOREIGN KEY (`Chapter_ID`) REFERENCES `chapter` (`Chapter_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `exer_answer`
--
ALTER TABLE `exer_answer`
  ADD CONSTRAINT `exer_answer_ibfk_1` FOREIGN KEY (`Ex_Q_ID`) REFERENCES `exer_subq` (`Ex_Q_ID`);

--
-- Constraints for table `exer_subq`
--
ALTER TABLE `exer_subq`
  ADD CONSTRAINT `exer_subq_ibfk_1` FOREIGN KEY (`Exercise_Num`) REFERENCES `exercise` (`Exercise_Num`) ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `users` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `final`
--
ALTER TABLE `final`
  ADD CONSTRAINT `final_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `course` (`Course_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `final_a_answer`
--
ALTER TABLE `final_a_answer`
  ADD CONSTRAINT `final_a_answer_ibfk_1` FOREIGN KEY (`QID_A`) REFERENCES `final_question_a` (`QID_A`);

--
-- Constraints for table `final_b_answer`
--
ALTER TABLE `final_b_answer`
  ADD CONSTRAINT `final_b_answer_ibfk_1` FOREIGN KEY (`QID_B`) REFERENCES `final_question_b` (`QID_B`);

--
-- Constraints for table `final_question_a`
--
ALTER TABLE `final_question_a`
  ADD CONSTRAINT `final_question_a_ibfk_1` FOREIGN KEY (`Final_Exam_ID`) REFERENCES `final` (`Final_Exam_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `final_question_b`
--
ALTER TABLE `final_question_b`
  ADD CONSTRAINT `final_question_b_ibfk_1` FOREIGN KEY (`Final_Exam_ID`) REFERENCES `final` (`Final_Exam_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `progression`
--
ALTER TABLE `progression`
  ADD CONSTRAINT `progression_ibfk_1` FOREIGN KEY (`Chapter_ID`) REFERENCES `chapter` (`Chapter_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `tree`
--
ALTER TABLE `tree`
  ADD CONSTRAINT `tree_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `users` (`user_email`),
  ADD CONSTRAINT `tree_ibfk_2` FOREIGN KEY (`Progression_ID`) REFERENCES `progression` (`Progression_ID`),
  ADD CONSTRAINT `tree_ibfk_3` FOREIGN KEY (`type_ID`) REFERENCES `tree_types` (`type_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
