-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2016 at 11:18 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `knowlegde`
--
CREATE DATABASE IF NOT EXISTS `knowlegde` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `knowlegde`;

-- --------------------------------------------------------

--
-- Table structure for table `ans_like_tbl`
--

CREATE TABLE IF NOT EXISTS `ans_like_tbl` (
  `fk_ans_id` int(11) DEFAULT NULL,
  `fk_email_id` varchar(50) DEFAULT NULL,
  `ans_like` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ans_tbl`
--

CREATE TABLE IF NOT EXISTS `ans_tbl` (
  `pk_ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ans_desc` varchar(500) DEFAULT NULL,
  `fk_email_id` varchar(50) DEFAULT NULL,
  `fk_q_id` int(11) DEFAULT NULL,
  `ans_date` varchar(20) DEFAULT NULL,
  `ans_ex` varchar(200) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `ans_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pk_ans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `pk_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  `cat_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pk_cat_id`),
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE IF NOT EXISTS `comment_tbl` (
  `fk_d_id` int(11) DEFAULT NULL,
  `fk_email_id` varchar(50) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `pk_c_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pk_c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `discussion_tbl`
--

CREATE TABLE IF NOT EXISTS `discussion_tbl` (
  `pk_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_cat_id` int(11) DEFAULT NULL,
  `d_title` varchar(30) DEFAULT NULL,
  `d_desc` varchar(500) DEFAULT NULL,
  `fk_email_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pk_d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE IF NOT EXISTS `feedback_tbl` (
  `f_cat` varchar(20) NOT NULL,
  `fk_email_id` varchar(50) DEFAULT NULL,
  `f_desc` varchar(200) DEFAULT NULL,
  `pk_f_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `que_tbl`
--

CREATE TABLE IF NOT EXISTS `que_tbl` (
  `pk_q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_title` varchar(50) NOT NULL,
  `q_desc` varchar(100) NOT NULL,
  `q_img` varchar(100) DEFAULT NULL,
  `q_date` varchar(20) DEFAULT NULL,
  `fk_email_id` varchar(50) DEFAULT NULL,
  `fk_cat_id` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`pk_q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `que_view_tbl`
--

CREATE TABLE IF NOT EXISTS `que_view_tbl` (
  `fk_que_id` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcat_tbl`
--

CREATE TABLE IF NOT EXISTS `subcat_tbl` (
  `pk_s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(50) NOT NULL,
  `fk_cat_id` int(11) DEFAULT NULL,
  `s_desc1` varchar(500) DEFAULT NULL,
  `s_desc2` varchar(500) DEFAULT NULL,
  `s_desc3` varchar(500) DEFAULT NULL,
  `s_img1` varchar(100) DEFAULT NULL,
  `s_img2` varchar(100) DEFAULT NULL,
  `s_img3` varchar(100) DEFAULT NULL,
  `s_file1` varchar(500) DEFAULT NULL,
  `s_file2` varchar(500) DEFAULT NULL,
  `s_file3` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`pk_s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test_details_tbl`
--

CREATE TABLE IF NOT EXISTS `test_details_tbl` (
  `fk_email_id` varchar(50) DEFAULT NULL,
  `fk_cat_id` int(11) DEFAULT NULL,
  `t_marks` int(11) DEFAULT NULL,
  `t_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_tbl`
--

CREATE TABLE IF NOT EXISTS `test_tbl` (
  `t_que` varchar(500) NOT NULL,
  `t_option1` varchar(500) DEFAULT NULL,
  `t_option2` varchar(500) DEFAULT NULL,
  `t_option3` varchar(500) DEFAULT NULL,
  `t_option4` varchar(500) DEFAULT NULL,
  `t_answer` varchar(500) DEFAULT NULL,
  `fk_cat_id` int(11) DEFAULT NULL,
  `pk_t_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pk_t_id`),
  KEY `t_que` (`t_que`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `u_name` varchar(20) NOT NULL,
  `pk_email_id` varchar(50) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(6) DEFAULT NULL,
  `u_city` varchar(20) DEFAULT NULL,
  `u_pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pk_email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
