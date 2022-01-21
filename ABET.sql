-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28 نوفمبر 2021 الساعة 22:56
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ABET`
--

-- --------------------------------------------------------

--
-- بنية الجدول `Clo`
--

CREATE TABLE `Clo` (
  `name` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `outcome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `Clo`
--

INSERT INTO `Clo` (`name`, `section`, `outcome`) VALUES
('هاب  455', 'هندسة برمجيات', 'k;kjklkl'),
('SWE 455', 'هندسة برمجيات', 'jkjjkkj'),
('SWE 455', 'هندسة برمجيات', 'bbbbbb'),
('SWE 455', 'هندسة برمجيات', 'jjjjjjjj'),
('SWE 455', 'هندسة برمجيات', 'klklklkl'),
('SWE 455', 'هندسة برمجيات', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu'),
('هاب  455', 'هندسة برمجيات', 'محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام'),
('نال  209', ' نظم المعلومات', 'hgjvjgjvjvjg'),
('هاب  455', 'هندسة برمجيات', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr'),
('هاب  455', 'هندسة برمجيات', 'محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام'),
('هاب  455', 'هندسة برمجيات', 'Clo');

-- --------------------------------------------------------

--
-- بنية الجدول `corrective`
--

CREATE TABLE `corrective` (
  `name` varchar(500) NOT NULL,
  `cor_action` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `corrective`
--

INSERT INTO `corrective` (`name`, `cor_action`) VALUES
('هاب  455', 'clo 1 need more uml'),
('هاب  455', 'clo 1 need more uml'),
('هاب  455', 'clo 1 need more uml'),
('هاب  455', 'clo 1 need more uml'),
('هاب  455', 'no no');

-- --------------------------------------------------------

--
-- بنية الجدول `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `collage` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `course`
--

INSERT INTO `course` (`id`, `name`, `collage`, `section`) VALUES
(1, 'هاب ٤٥٥', '', ''),
(2, 'هاب ٤٥٥', '', ''),
(3, 'عال ٢١٤', '', ''),
(4, 'ff 4', '', ''),
(5, 'عال ٤٤٤', '', ''),
(6, 'نال ٢٢٢', '1', ''),
(7, 'كيم ١٠١', '1', ''),
(8, 'ت ٧٧', '1', ''),
(9, 'نال ٣٣٣', '1', ''),
(10, 'jk 88', '1', ''),
(11, 'هاب ٥٥', '1', '1'),
(12, 'ات ٨٨', '1', '1'),
(13, 'تاا ٨٨', '1', '3'),
(14, 'jj 99', '1', '1'),
(15, 'tt 66', '12', '52'),
(16, 'تنن ٧٨', '1', ''),
(17, 'نتنن ٨٨٨', '1', ''),
(18, 'تاا ٩٩٩٩', '1', '1'),
(19, 'نتنتت ٧٨', '1', '1'),
(20, 'uhg jkj9', '41', '144'),
(21, 'ij ioio', '1', '1'),
(22, 'hh 00', '1', '1'),
(23, 'gg 11', '1', '1'),
(24, 'jj 77', '1', '1'),
(25, 'ff 44', '1', ''),
(26, 'bb 99', '1', ''),
(27, 'kk 77', '1', ''),
(28, 'mm 88', '1', '1'),
(29, 'jl hhh', '1', '1'),
(30, 'kkk 777', '1', '1'),
(31, 'hjk kjn', '1', '1'),
(32, 'kl;k 888888', '1', '1'),
(33, 'تر ٩٨', '1', ''),
(34, 'jjkn kijjj', '1', '1'),
(35, 'nnn 3333', '1', '1'),
(36, 'kl 11111', '1', '1'),
(37, ',kk. 898989', '1', '1'),
(38, 'hhhh 4444', '1', 'هندسة برمجيات'),
(39, 'kkll 9090', '11', '37'),
(40, 'فيز  ١٠٥', 'كلية علوم الحاسب والمعلومات', '[object HTMLDivElement]'),
(41, 'نت ٧٨', 'كلية علوم الحاسب والمعلومات', '[object HTMLDivElement]'),
(42, 'كيم ١٠٩', 'كلية علوم الحاسب والمعلومات', '4'),
(43, 'اااا ١١١١١', 'كلية طب الأسنان', '54'),
(44, 'تتت ٦٦٦٦', 'كلية علوم الحاسب والمعلومات', 'هندسة حاسب'),
(45, 'خحخ ٦٧٦٧', 'كلية علوم الحاسب والمعلومات', 'هندسة برمجيات'),
(46, 'للللل ٤٤٤٤', 'كلية علوم الحاسب والمعلومات', ' تقنية المعلومات'),
(47, 'mmmm 77777', 'كلية علوم الحاسب والمعلومات', 'هندسة حاسب'),
(48, 'SWE 455', 'كلية علوم الحاسب والمعلومات', 'هندسة برمجيات'),
(49, 'نال  209', 'كلية علوم الحاسب والمعلومات', ' نظم المعلومات'),
(50, 'hjhh bhhbk', '', '[object HTMLDivElement]'),
(51, 'هاب  455', '', 'هندسة برمجيات');

-- --------------------------------------------------------

--
-- بنية الجدول `map`
--

CREATE TABLE `map` (
  `name` varchar(200) NOT NULL,
  `student_outcome` varchar(500) NOT NULL,
  `outcome` varchar(200) NOT NULL,
  `con` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `map`
--

INSERT INTO `map` (`name`, `student_outcome`, `outcome`, `con`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', 'HHHHHHHH', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', ''),
('', 'the student should be attractive', 'محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام', ''),
('هاب  455', 'the student', 'محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام', ''),
('هاب  455', 'the student', 'محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام محمد عتيق ال سبيت يروح للمسجد يصلي الظهر مع الام', ''),
('هاب  455', 'mmmm', 'hgjvjgjvjvjg', 'H'),
('هاب  455', 'UML', 'Clo', 'H'),
('هاب  455', 'kkkkkk', 'klklklkl', 'L');

-- --------------------------------------------------------

--
-- بنية الجدول `marks`
--

CREATE TABLE `marks` (
  `clo` varchar(500) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `marks`
--

INSERT INTO `marks` (`clo`, `mark`) VALUES
('', 4),
('', 8);

-- --------------------------------------------------------

--
-- بنية الجدول `So`
--

CREATE TABLE `So` (
  `collage` varchar(500) NOT NULL,
  `section` varchar(500) NOT NULL,
  `student_outcome` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `So`
--

INSERT INTO `So` (`collage`, `section`, `student_outcome`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('كلية علوم الحاسب والمعلومات', 'هندسة برمجيات', 'HHHHHHHH'),
('كلية علوم الحاسب والمعلومات', ' نظم المعلومات', 'the student should be attractive'),
('كلية علوم الحاسب والمعلومات', ' نظم المعلومات', 'kkkkkk'),
('كلية علوم الحاسب والمعلومات', ' نظم المعلومات', 'mmmm'),
('', 'هندسة برمجيات', 'the student'),
('', '', ''),
('', 'هندسة برمجيات', 'UML');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
