-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: יוני 12, 2021 בזמן 06:53 PM
-- גרסת שרת: 5.6.51
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `einater_casting`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `cart`
--

INSERT INTO `cart` (`cart_id`, `id`, `user_id`, `date`) VALUES
(1, 1, 1, '2021-05-24'),
(2, 0, 2, '2021-05-24'),
(3, 1, 2, '2021-05-24'),
(4, 1, 3, '2021-05-24'),
(5, 4, 3, '2021-05-24'),
(6, 4, 2, '2021-05-24'),
(7, 4, 1, '2021-05-24'),
(8, 5, 3, '2021-05-24'),
(9, 5, 2, '2021-05-24'),
(10, 5, 1, '2021-05-24'),
(11, 6, 3, '2021-05-24'),
(12, 6, 1, '2021-05-24'),
(13, 6, 2, '2021-05-24'),
(14, 1, 5, '2021-05-25'),
(15, 1, 6, '2021-05-25'),
(16, 8, 6, '2021-05-25'),
(17, 8, 5, '2021-05-25'),
(18, 1, 7, '2021-05-25'),
(19, 9, 5, '2021-05-26'),
(25, 7, 6, '2021-06-02'),
(26, 7, 5, '2021-06-02'),
(27, 7, 7, '2021-06-02'),
(30, 9, 11, '2021-06-02'),
(31, 1, 11, '2021-06-02'),
(33, 14, 19, '2021-06-03'),
(34, 9, 12, '2021-06-03'),
(35, 14, 10, '2021-06-05'),
(47, 21, 28, '2021-06-07'),
(49, 21, 6, '2021-06-07'),
(50, 21, 33, '2021-06-07'),
(51, 21, 32, '2021-06-07'),
(52, 2, 8, '2021-06-07'),
(53, 2, 7, '2021-06-07'),
(54, 2, 0, '2021-06-07'),
(55, 23, 7, '2021-06-07'),
(56, 21, 17, '2021-06-07'),
(57, 9, 19, '2021-06-08'),
(59, 9, 7, '2021-06-09'),
(60, 15, 7, '2021-06-12'),
(61, 15, 8, '2021-06-12'),
(62, 15, 12, '2021-06-12');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `facebook` varchar(350) NOT NULL,
  `eye` varchar(150) NOT NULL,
  `hair` varchar(150) NOT NULL,
  `skin` varchar(150) NOT NULL,
  `height` varchar(150) NOT NULL,
  `languages` varchar(150) NOT NULL,
  `hobbies` varchar(150) NOT NULL,
  `Licence` varchar(150) NOT NULL,
  `Other` varchar(1000) NOT NULL,
  `country` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `dob`, `address`, `email`, `password`, `mobile`, `facebook`, `eye`, `hair`, `skin`, `height`, `languages`, `hobbies`, `Licence`, `Other`, `country`) VALUES
(6, 'gal', 'gadot', 'Female', '2000-06-10', 'galgadot', 'goligoli@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0529999999', 'facebook.com', 'black', 'black', 'white', '180', 'english hebrew', 'Singing', 'Yes', 'i was acting in few films', 'israel'),
(7, 'tomer', 'kapon', 'Male', '1987-10-15', 'hjh', 'tomerkapon@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0508888888', 'facebook.com', 'black', 'black', 'white', '180', 'english hebrew', 'Dancing', 'Yes', 'i was acting in 2 big films.', 'israel'),
(8, 'oz', 'zehavi', 'Male', '1986-07-21', 'ozzehavi', 'ozzehavi@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0528888888', 'facebook.com', 'green', 'brown', 'white', '180', 'english hebrew', 'Dancing', 'Yes', 'i like to sing. i was acting in disnet channel', 'israel'),
(9, 'amanda', 'fox', 'Female', '1992-07-22', 'amandafox', 'amandafox@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0509999999', 'facebook.com', 'green', 'blonde', 'white', '154', 'english hebrew', 'Dancing', 'No', 'i like very acting', 'israel'),
(10, 'Gal', 'Elkobi', 'Male', '1994-10-11', 'galelkobi', 'galielkobi@gmail.com', '0e92b302cc81d98d68b63fea8a78ea46', '0523078026', 'gal elkobi', 'brown', 'black', 'white', '162', 'hebrew, english', 'Dancing', 'Yes', 'im verrrrrrrrrrrrrry talented', 'israel'),
(12, 'Ana', 'Rozovtzky', 'Female', '1992-03-28', 'ANAR', 'ANAR@GMAIL.COM', '25f9e794323b453885f5181f1b624d0b', '0509984871', 'ANA ROZOVTZKY', 'blue', 'brown', 'white', '178', 'HEBREW', 'Dancing', 'Yes', 'i am a model in new york.now living in israel', 'israel'),
(13, 'tomer', 'levinshtein', 'Male', '2010-08-30', 'tomerlevi', 'tomerlevi@gmail.com', '25f9e794323b453885f5181f1b624d0b', '05098111213', 'NO', 'brown', 'brown', 'white', '122', 'HEBREW', 'Dancing', 'NO', 'i was playing on kids films', 'ISRAEL'),
(14, 'dani', 'kucher', 'Male', '1999-09-18', 'dani555', 'dani@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0549815565', 'NO', 'blue', 'blue', 'white', '180', 'russian hebrew', 'other', 'Licence1', 'daniel\r\nactor\r\nlove action\r\n', 'russia'),
(15, 'LEV', 'BORIN', 'Male', '1991-12-12', 'LEVBOR9', 'LEVVV@GMAIL.COM', '25f9e794323b453885f5181f1b624d0b', '0506888989', 'LEV BORIN', 'brown', 'black', 'white', '160', '×¢×‘×¨×™×ª, ×× ×’×œ×™×ª', 'Dancing', 'Licence1', '×¨×§×“×Ÿ\r\n×©×™×—×§×ª×™ ×‘×ª× ×• ×œ×¨×§×•×“ ×›×ž×• ×—×•×¤×©×™×™×\r\n', 'israel'),
(16, 'linda', 'ariba', 'Female', '1997-01-13', 'linadada', 'lindaaa@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0549000181', 'NO', 'black', 'black', 'black', '178', '×”×ž××¨×™×ª, ×¢×‘×¨×™×ª, ×× ×’×œ×™×ª', 'other', 'Licence2', '×œ×™× ×“×” ×‘×ª 24\r\n××•×”×‘×ª ×œ×“×’×ž×Ÿ ×•×œ×©×—×§\r\n×¡×™×™×ž×ª×™ ×œ×™×ž×•×“×™× ×‘×™×•×¨× ×œ×•×™× ×©×˜×™×™×Ÿ ×©× ×” ×©×¢×‘×¨×”\r\n', 'ETHIOPIA'),
(17, 'shira', 'ron', 'Female', '2008-04-29', 'shira_ron', 'shiraron@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0523453110', 'NO', 'green', 'brown', 'white', '139', 'HEBREW', 'Singing', 'NO', '×©×™×—×§×ª×™ ×‘×ž×¡×¤×¨ ×¡×“×¨×•×ª ×›×ž×•\r\n×¢×¡×¤×•×¨, ×”×™×›×Ÿ ××ª× ×—×‘×¨×™×™?, ×œ×™×œ×™ ×•×”×ž×§×§×™×', 'israel'),
(18, 'JESICA', 'SHEFERD', 'Female', '1990-02-19', 'JESS0', 'JESS@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0502332100', 'JESICA SHEF', 'brown', 'black', 'black', '181', '×× ×’×œ×™×ª', 'other', 'Licence1', '×’×¡×™×§×”\r\n× ×•×œ×“×ª×™ ×‘××¤×¨×™×§×” ×œ×ž×“×ª×™ ×‘× ×™×• ×™×•×¨×§ ×œ×™×ž×•×“×™ ×ž×©×—×§\r\n×‘××ª×™ ×œ×™×©×¨××œ ×‘×¢×§×‘×•×ª ×”×¦×¢×ª ×¢×‘×•×“×” ×‘×¡×¨×˜ ×—×“×© ×©×”×•×œ×š ×œ×¦××ª', '××¤×¨×™×§×”'),
(19, 'rozi', 'roz', 'Female', '2001-07-09', 'roziroz', 'roziroz@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0587655388', 'NO', 'black', 'black', 'white', '172', '×§×•×¨×™×× ×™×ª, ×× ×’×œ×™×ª', '', '', 'im rozi\r\nactor and model', 'KOREA'),
(20, 'dima', 'gashin', 'Male', '2000-05-22', 'dimidu', 'DIMA@GMAIL.COM', '25f9e794323b453885f5181f1b624d0b', '0587797797', 'NO', 'green', 'blue', 'white', '174', '×× ×’×œ×™×ª', 'Dancing', 'Licence1', 'dancer\r\nlove life', 'moldova'),
(21, 'LIOR', 'COHEN', 'Trans', '1998-08-29', 'LIORIC', 'LIORC@GMAIL.COM', '25f9e794323b453885f5181f1b624d0b', '0542000909', 'NO', 'green', 'blue', 'white', '168', '×¢×‘×¨×™×ª, ×× ×’×œ×™×ª', 'Dancing', 'Licence1', 'PROUD TRANS!!!!!!', 'israel'),
(22, 'liel', 'royal', 'Trans', '1995-07-17', 'lielroyal', 'lielroyal@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0508891233', 'liel royal', 'gray', '', 'white', '156', 'hebrew, english', 'Other', 'Yes', '×”×™×™\r\n×× ×™ ×œ×™××œ\r\n×× ×™ ×˜×¨× ×¡×™×ª ×’××” ×›×‘×¨ 5 ×©× ×™×\r\n×¢×‘×¨×ª×™ ×©×™× ×•×™ ×ž×”×•×ª×™ ×‘×—×™×™ ×•×™×©×¨ ×”×ª×—×œ×ª×™ ×œ×œ×ž×•×“ ×ž×©×—×§ ×‘×—×™×¤×”\r\n', 'israel'),
(23, 'Daniel', 'asher', 'Male', '1990-06-21', 'Daniel_Asher', 'daniel-asher@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0547837358', 'daniel asher', 'blue', 'blue', 'white', '182', 'hebrew', 'Dancing', 'Licence1', 'hello! my name is Daniel Asher and im 30 years old.\r\nim dancing since i was 6 years old.\r\nlove to playing the guitar and hanging out with friends.', 'Israel'),
(25, 'Jason', 'Smith', 'Male', '1994-10-20', 'JasonS_94', 'Jason_Smith@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0504245013', 'Jason Smith', 'green', 'brown', 'white', '186', 'english, hebrew', '', '', '×ž× ×” ×§×•×¨×”', 'Unaited Kingdom'),
(26, 'tony', 'johnson', 'Male', '1995-08-19', 'tonyJ', 'tonyjohnson@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0546784854', 'tony johnson', 'brown', 'black', 'black', '191', 'english, hebrew', '', 'Licence1', 'my name is Tony, i was born in Africa.\r\nsince i was a young child i always had the pasion to dance and sing.\r\nhope you wil choose me.', 'Africa'),
(27, 'danis', 'rudman', 'Male', '1993-08-20', 'danis_rudman', 'danis_rudman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '052345678', 'danis rudman', 'brown', 'brown', 'white', '181', 'russian, hebrew, english', 'Dancing', 'Licence1', 'my name is Denis.\r\nmy dream is to be the dancer of famous singers.\r\nplease help me fulfil my dream', 'russia'),
(28, 'michael', 'lewis', 'Male', '1994-03-02', 'michael_lewis', 'michael_lewis@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0507896754', 'michael lewis', 'blue', 'blue', 'white', '189', 'english, hebrew', '', 'Licence1', 'michael,27,Tel aviv.\r\nmy inspiration is beyonce.\r\nlove to dance for her some day.\r\nwaiting for your message.', 'USA'),
(29, 'Yael', 'Levi', 'Female', '1999-02-19', 'yaeLevi', 'yaelLevi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0523456876', 'yael levi', 'blue', 'black', 'white', '174', 'english, hebrew', 'other', 'Licence2', 'my name is yael levi, 20 years from Hod Asharon.\r\ni am a model.\r\nused to modeling for hair salons.', 'Israel'),
(30, 'Christina', 'ivanova', 'Female', '1994-01-01', 'ChrisiIvan', 'christinaivanova@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 'blue', 'brown', 'white', '177', 'russian, hebrew, english', 'other', 'Licence2', 'christina ivanova,27,tel aviv.\r\nborn i russia.\r\nim a modeling.\r\nright now study acting.', 'russia'),
(33, 'Natalie', 'Shif', 'Female', '0000-00-00', 'Pines st.', 'natalia.shif@gmail.com', '7fc56270e7a70fa81a5935b72eacbe29', '+972545215403', 'Natalie Shif', 'green', 'brown', 'white', '164', 'Hebrew, Russian, English', 'Other', 'No', '', 'Russia'),
(34, 'Avi', 'Shif', 'Male', '0000-00-00', 'Pines st.', 'avi.abraham.shif@gmail.com', '7fc56270e7a70fa81a5935b72eacbe29', '+972545215403', 'Natalie Shif', 'blue', 'blonde', 'white', '120', 'Hebrew, Russian', '', 'NO', '', 'Israel'),
(36, 'eliana', 'tidahr', 'Female', '1993-11-25', 'eliana_tidhar', 'elianatidhar@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0525555555', 'eliana', 'brown', 'brown', 'white', '160', 'hebrew', 'Dancing', 'Licence1', 'i was in \"Galis\" and i was performing on all Festigals.', 'Israel'),
(37, 'ninet', 'Tayeb', 'Female', '2005-07-20', 'ninet tayeb', 'einater@mta.ac.il', 'e10adc3949ba59abbe56e057f20f883e', '0526676444', 'ninettayeb', 'green', 'black', 'white', '170', 'english hebrew', 'Singing', 'Yes', 'i was acting in \"hashir shelano\" and i a singing.', 'Israel'),
(38, 'din', 'cohen', 'Male', '1970-11-10', 'dincohen', 'dincohen@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '0547837358', 'din cohen', 'blue', 'green', 'white', '180', 'hebrew', 'Singing', 'Yes', 'singing since i was 10', 'Israel'),
(39, 'shir', 'levi', 'Female', '1990-11-10', 'shirlevi', 'shirlevi@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '0547837345', 'shirlebi', 'brown', 'brown', 'white', '175', 'english, hebrew', 'other', 'Yes', 'love to model', 'Israel'),
(40, 'mazal', 'tagon', 'Female', '1989-10-10', 'mazlt', 'mazal@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '0547837354', 'mazal t', 'black', 'black', 'black', '180', 'english, hebrew', 'other', 'No', 'love to model', 'africa'),
(41, 'ron', 'lev', 'Female', '1995-12-11', 'rovl', 'rovl@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '054783853', 'ron ron', 'brown', 'brown', 'white', '181', 'hebrew', 'other', 'Yes', 'modeling', 'Israel'),
(43, 'gini', 'gordon', 'Male', '2021-06-03', 'gini gordon', 'gini@gmail.com', '25f9e794323b453885f5181f1b624d0b', '056222222', 'ginigordon', 'black', 'black', 'black', '175', 'english', 'Dancing', 'Yes', 'good actor', 'usa'),
(44, 'mark', 'jacov', 'Male', '1995-10-25', 'markjacov', 'mark@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0534444444', 'mark jakov', 'green', 'brown', 'white', '180', 'english', 'Dancing', 'Yes', 'great actor!', 'usa');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users_director`
--

CREATE TABLE `users_director` (
  `id` int(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `facebook` varchar(350) NOT NULL,
  `y_experience` varchar(150) NOT NULL,
  `Other` varchar(1000) NOT NULL,
  `country` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `users_director`
--

INSERT INTO `users_director` (`id`, `fname`, `lname`, `gender`, `dob`, `address`, `email`, `password`, `mobile`, `facebook`, `y_experience`, `Other`, `country`) VALUES
(1, 'gal', 'baruch', 'Female', '1994-02-10', 'goren 12', 'galbaruch@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0526666666', 'facebook.com', '12', 'big director of films', 'israel'),
(2, 'hadae', 'weinerg', 'Female', '1994-10-20', 'fsdfsf', 'sffsfssfsf@walla.aco', 'e10adc3949ba59abbe56e057f20f883e', '0547837358', 'fsfsff', '', '', 'israel'),
(3, 'F', 'F', 'Male', '2021-05-31', 'F', 'omeromer@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1112345', 'Fa', '1', '1', 'Isreal'),
(4, 'Dana', 'Cohen', 'Female', '1987-01-01', 'golir', 'danacohen@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0567777777', 'facebook.com', '12', 'a lot of experience', 'israel'),
(5, 'loren', 'oren', 'Female', '1980-06-19', 'gigi', 'lorenoren@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0578777777', 'facebook.com', '', '', ''),
(6, 'mark', 'lili', 'Male', '1980-05-14', 'njk jjk', 'marllili@gmail.com', '25f9e794323b453885f5181f1b624d0b', '05244444444', 'facebook.com', '5', 'i have a lot of films', 'france'),
(7, 'director', 'test', 'Male', '2021-05-21', 'test test test', 'director@test.com', '098f6bcd4621d373cade4e832627b4f6', '0532654784', 'test', '15', 'fdbfdbdf', 'France'),
(8, 'ran', 'rom', 'Male', '1988-06-09', 'hjk', 'ranrom@gmail.com', '25f9e794323b453885f5181f1b624d0b', '05266556656', 'facebook.com', '12', '6565', 'israel'),
(9, 'alex', 'rozen', 'Female', '2021-05-26', 'jkkj ', 'alexrozen@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0507676767', 'facebook.com', '20', 'great director', 'israel'),
(10, 'ROB', 'BOWMAN', 'Male', '1981-09-09', 'TEL AVIV', 'ROBB@GMAIL.COM', '25f9e794323b453885f5181f1b624d0b', '053245670', 'NO', '20', 'GRAET DIRECTOR!', 'NYC'),
(12, 'avital', 'margalit', 'Female', '1990-09-11', 'rishon lezion', 'avitali@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0589243098', 'avital margalit', '10', 'mmm', 'israel'),
(13, '×©×ž×•×œ×™×§', '×œ×‘×™×™××‘', 'Male', '1950-02-09', '×ª×œ ××‘×™×‘ ×”×¨××©×•×Ÿ 13', 'shmulik@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0523453221', 'smuel lev', '50', '×‘×ž××™ ×”×ž×•×Ÿ ×–×ž×Ÿ\r\n×œ×™×”×§×ª×™ ××ª ×›×œ ×¡×“×¨×•×ª ×”×¢×©×•×¨ ×”××—×¨×•× ×•×ª\r\n×‘×™× ×™×”×\r\n×¢×¡×¤×•×¨, ×‘× ×™ ××•×¨, ×ž×©×¤×—×ª ×–×’×•×¨×™\r\n×•×¢×•×“', 'israel'),
(14, 'Evyatar', 'Banay', 'Male', '1970-01-18', '××©×“×•×“', 'evyatar@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0542234234', 'NO', '21', 'ahalan', 'israel'),
(15, 'Doron', 'Atias', 'Male', '1992-10-17', 'Eilat', 'doronn@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0584456767', 'NO', '7', '×× ×™ ×“×•×¨×•×Ÿ\r\n×—×“×© ×™×—×¡×™×ª ×‘×ª×—×•× ××‘×œ ×ª×•×ª×—', 'israel'),
(16, 'ariel', 'sapir', 'Male', '1960-09-01', 'tel aviv', 'arielsapir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0547898564', 'ariel sapir', '10', 'hello!\r\nmy name is ariel.\r\ndirector for 10 years, Directing\r\na romantic movies.', 'Israel'),
(17, 'nir', 'berman', 'Male', '1975-08-19', 'ramat gan', 'nir_bergman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0546787453', 'nir bergman', '8', 'Israeli film director and screenwriter.\r\nIn 1993 I started studying film at the Sam Spiegel School', ''),
(18, 'shemi', 'cohen', 'Male', '1950-09-17', 'rishon leziyyon', 'shemi_cohen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0506784536', 'shemi cohen', '17', 'I was born and raised in Tiberias, an Israeli film director, screenwriter and writer. Winner of three Ophir Awards and the Ministry of Education and Culture Award for Film for 1996.', 'Israel'),
(19, 'dani', 'sirkin', 'Male', '1960-03-02', 'tel aviv', 'dani_sirkin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0507898567', 'dani sirkin', '19', 'director and an Israeli screenwriter, winner of the TV Awards Ceremony in 2021.\r\nHe was born in Moscow, the capital of the Soviet Union, and when I was less than two years old I immigrated to Israel with my family, who settled in Jerusalem. I studied at the Rene Cassin School in my hometown, where I also participated in the \"Katron\" theater class.', 'Israel'),
(20, 'micky', 'dan', 'Male', '1968-05-07', 'haifa', 'einaterlich123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '050678945', 'micky dan', '11', 'Director, writer, producer, journalist, presenter, host member of the Association of Film and Television Directors and lecturer at the Business College of the Chamber of Commerce, Tel Aviv and the Center', 'Israel'),
(21, 'Natalie', 'Shif', 'Female', '2021-06-02', 'Pines st.', 'natalia.shif@gmail.com', 'aecbaba1baaa76670c9c85e4ac7d132b', '+972545215403', '', '5', '', 'Israel'),
(22, 'dsadas', 'dsaasd', 'Female', '2021-06-07', 'dsadsadas', 'dashjkadshjk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dsadas', 'hjkdashk', 'dsadasads', 'dsadsa', 'israel'),
(23, 'dsadsa', 'dsadas', 'Female', '2021-06-07', 'fdasfdsa', '123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dasdsaasdfdsaad', 'dfsafads', 'dsadsa', 'dsadas', ''),
(24, 'roei', 'wein', 'Male', '1979-12-20', 'tel aviv ', 'roeiwein@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '050-7837358', 'roei wein', '5', 'romen and horror movies', 'Israel'),
(25, 'din', 'cohen', 'Male', '1980-11-11', 'tel aviv', 'dincohen@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '0547898564', 'din cohen', '5', 'looking for actors and singers', 'Israel'),
(26, '×¢×™× ×ª', '××¨×œ×™×š', 'Male', '2021-07-06', '×“×‘ ×ž×ž×–×¨×™×¥', 'einater@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0526676254', 'fw', '12', 'efd', 'fd'),
(27, 'Jason', 'dd', 'Trans', '2021-06-04', 'ddd', 'rfjf@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '0547837358', 'jkdf', '3', 'fff', 'Unaited Kingdom');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users_director_photo`
--

CREATE TABLE `users_director_photo` (
  `id` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `users_director_photo`
--

INSERT INTO `users_director_photo` (`id`, `id_user`, `photo`) VALUES
(1, 1, 'portal2_page1287_media001.jpg'),
(2, 2, ''),
(3, 3, ''),
(4, 4, 'F0_0320_0000_Michikobuter.jpg'),
(5, 5, 'gig.jpg'),
(6, 6, 'Refael-Mizrahi-Fashion-Photography-203-scaled-e1592232571119.jpg'),
(7, 7, 'logo - Copie.jpg'),
(8, 8, 'Refael-Mizrahi-Fashion-Photography-203-scaled-e1592232571119.jpg'),
(12, 7, 'actortest.jpg'),
(13, 10, 'Director_Rob_Bowman.jpg'),
(14, 11, 'Director_Rob_Bowman.jpg'),
(15, 12, 'director-of-photography.jpg'),
(16, 13, 'thumb_463_blogs_big.jpeg'),
(17, 14, 'Director_Rob_Bowman.jpg'),
(18, 15, 'Film-Director.jpg'),
(19, 16, '46428650100395408508no.jpg'),
(20, 17, 'Nir_Bergman_Tokyo_Intl_Filmfest_2010.jpg'),
(21, 18, '250px-Shenizarhinbyohadromano.jpg'),
(22, 19, '×“× ×™_(×“× ×™××œ)_×¡×™×¨×§×™×Ÿ,_×‘×ž××™.jpg'),
(23, 20, '330px-Micky_joseph.jpg'),
(24, 21, ''),
(25, 21, 'photo_actor02.JPG'),
(26, 22, '85f3a8986fc8.jpg'),
(27, 23, ''),
(28, 24, 'nivmagar1x1.jpg'),
(29, 25, 'niv_sit_1x1lr.jpg'),
(30, 26, 'eli.jpg'),
(31, 27, 'nivmagar1x1.jpg');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users_photo`
--

CREATE TABLE `users_photo` (
  `id` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `users_photo`
--

INSERT INTO `users_photo` (`id`, `id_user`, `photo`) VALUES
(2, 2, 'GettyImages-462862934_36.jpg'),
(3, 3, '×”×•×¨×“×” (1).jpg'),
(4, 4, 'Yon_Tumarkin_2017_cropped.jpg'),
(5, 5, 'actortest.jpg'),
(6, 6, 'GalGadotHeadline_480_2021_Or_autoOrient_g.jpg'),
(7, 0, 'F0_0320_0000_Michikobuter.jpg'),
(8, 0, 'F0_0320_0000_Michikobuter.jpg'),
(9, 7, 'TomerKapon1.jpg'),
(11, 9, 'amanda-seyfried_g.jpg'),
(12, 10, 'WhatsApp Image 2019-12-10 at 13.50.44.jpeg'),
(18, 8, 'sq8381_48209.jpg'),
(20, 12, 'B6553.jpg'),
(21, 13, '438f7c_148b92c990c7468dbd731787baac9b6f_mv2.webp'),
(22, 14, '852752-800w.jpg'),
(23, 15, 'shutterstock_124432573-683x1024.jpg'),
(24, 16, 'oakImage-1536507536831-articleLarge.jpg'),
(25, 17, '3505b88db3ef98484d1e009edbe0678c.jpg'),
(26, 18, '5e38494bab49fd614557fcb4.jpg'),
(27, 19, 'singapore-models-2-cc-768x1152.jpg'),
(28, 20, '482523-800w.jpg'),
(29, 21, 'pamela-cover-curvy-mode-agency-look-streetwear-agency-shooting-blond.jpg'),
(30, 22, 'Art-Director.jpg'),
(31, 23, '5e4af211721887f1e267b585979f17c31e01effd.jpeg'),
(32, 24, 'stenmark-thum76e5d3cd4abf73d0d0604a59b115a1aa_thumb.jpg'),
(34, 26, 'Screen-Shot-2018-12-07-at-7.43.12-PM.png'),
(35, 27, '×”×•×¨×“×”.jpg'),
(36, 28, 'malemodel6.jpg'),
(37, 29, '1611085012-1609881742604438-modelo.jpg'),
(38, 30, 'original.jpg'),
(39, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(40, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(41, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(42, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(43, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(44, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(45, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(46, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(47, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(48, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(49, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(50, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(51, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(52, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(53, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(54, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(55, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(56, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(57, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(58, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(59, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(60, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(61, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(62, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(63, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(64, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(65, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(66, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(67, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(68, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(69, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(70, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(71, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(72, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(73, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(74, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(75, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(76, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(77, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(78, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(79, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(80, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(81, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(82, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(83, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(84, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(85, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(86, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(87, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(88, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(89, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(90, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(91, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(92, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(93, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(94, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(95, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(96, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(97, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(98, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(99, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(100, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(101, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(102, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(103, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(104, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(105, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(106, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(107, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(108, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(109, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(110, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(111, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(112, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(113, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(114, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(115, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(116, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(117, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(118, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(119, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(120, 31, ''),
(121, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(122, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(123, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(124, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(125, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(126, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(127, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(128, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(129, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(130, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(131, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(132, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(133, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(134, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(135, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(136, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(137, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(138, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(139, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(140, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(141, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(142, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(143, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(144, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(145, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(146, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(147, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(148, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(149, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(150, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(151, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(152, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(153, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(154, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(155, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(156, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(157, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(158, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(159, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(160, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(161, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(162, 0, '1a2921012c7c36bf9aee008b93b207f4.jpg'),
(165, 33, 'photo_actor02.JPG'),
(166, 33, 'photo_actor01.JPG'),
(168, 34, 'actor_sword.JPG'),
(169, 25, '×©×—×§×Ÿ×.jpg'),
(170, 35, '×¦×™×œ×•× ×ž×¡×š 2020-10-16 194746.png'),
(171, 36, 'v.jpg'),
(172, 37, '×”×•×¨×“×” (3).jpg'),
(173, 38, 'meser_1x1.jpg'),
(174, 39, '06a.jpg'),
(175, 40, 'large-1604487471-b4183093ce8857e749e8bac22b37d861.jpg'),
(176, 41, 'large-1608135295-953e39f1d9af50da2f18d6f3483078cb.jpg'),
(177, 42, '×”×•×¨×“×” (3).jpg'),
(179, 43, 'shutterstock_545882644.jpg'),
(180, 44, 'Actors-You-Thought-Were-American.jpg');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- אינדקסים לטבלה `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `users_director`
--
ALTER TABLE `users_director`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `users_director_photo`
--
ALTER TABLE `users_director_photo`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `users_photo`
--
ALTER TABLE `users_photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users_director`
--
ALTER TABLE `users_director`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users_director_photo`
--
ALTER TABLE `users_director_photo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users_photo`
--
ALTER TABLE `users_photo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
