

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `cart` (
  `cart_id` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `users` (
  `id` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
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


CREATE TABLE `users_director` (
  `id` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
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


CREATE TABLE `users_director_photo` (
  `id` int(15) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_user` int(15) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `users_photo` (
  `id` int(15) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_user` int(15) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


