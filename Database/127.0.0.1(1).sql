-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2013 at 07:44 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adbms`
--
CREATE DATABASE `adbms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adbms`;

-- --------------------------------------------------------

--
-- Table structure for table `akki`
--

CREATE TABLE IF NOT EXISTS `akki` (
  `cl_id` int(10) NOT NULL AUTO_INCREMENT,
  `cl_movie_name` varchar(30) NOT NULL,
  `cl_ticket_no` int(100) DEFAULT NULL,
  `cl_time` datetime NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `akki`
--

INSERT INTO `akki` (`cl_id`, `cl_movie_name`, `cl_ticket_no`, `cl_time`) VALUES
(1, 'JHA.TWO', 99, '2013-10-02 07:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) NOT NULL,
  `c_user` varchar(30) NOT NULL,
  `c_pwd` varchar(30) NOT NULL,
  `c_mail` varchar(30) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_user`, `c_pwd`, `c_mail`) VALUES
(4, 'testbud2', 'testbud2', 'yo', 'akshay78661@gmail.com'),
(6, 'guest', 'guest', 'null', 'null'),
(7, 'testbud3', 'testbud3', 'yoyo', 'test@test.com'),
(15, 'akki', 'akki', 'akki78661', 'akki78661@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `movie_counter`
--

CREATE TABLE IF NOT EXISTS `movie_counter` (
  `m_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_tickets` int(100) NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `FK_MOVIE_COUNTER` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_counter`
--

INSERT INTO `movie_counter` (`m_id`, `t_id`, `m_name`, `m_tickets`) VALUES
(1, 1, 'JHA.TWO', 99),
(2, 2, 'BARFI', 100),
(3, 3, 'THE INCREDIBLE HALKAT', 100),
(4, 4, 'BLACK IN MEN', 100);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(10) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(50) NOT NULL,
  `movie_type` varchar(20) NOT NULL,
  `movie_leadactor` varchar(30) NOT NULL,
  `movie_director` varchar(30) NOT NULL,
  `movie_review` varchar(500) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_type`, `movie_leadactor`, `movie_director`, `movie_review`) VALUES
(1, 'JHA.TWO', 'Action', 'Smith More', 'Mars Perreira', 'To begin with ;this movie has nothing to do with the actor nor the producer. This movie is all about a crazy guy with his obsession of being better than SRK led to him saving the world with his ultimate powers of desi Jha2'),
(2, 'BARFI', 'Silent...LOL', 'RodRoy', 'Ben Varghese', 'PS. No Comments -Femina'),
(3, 'THE INCREDIBLE HALKAT', 'Action', 'Tyson', 'Ajit Pan', 'A cheap remake of the incredible hulk by our great indian producers. This is a story of a guy who fell of the ledge into green smudge while dancing with his gf in a yet unknown location thats how the great HULKAT was born'),
(4, 'BLACK IN MEN', 'Action/Comedy', 'RodRoy Ajit Pan Tyran ', 'Clinton', 'This is a story of a group of young men working for a secret organization to make this world a better place with their mission :BOMB XIE '),
(5, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_movie_id` int(50) DEFAULT NULL,
  `review_date` datetime NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_reviewer_name` varchar(255) NOT NULL,
  `review_comment` varchar(255) NOT NULL,
  `review_rating` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_movie_id`, `review_date`, `review_name`, `review_reviewer_name`, `review_comment`, `review_rating`) VALUES
(1, '2013-10-02 06:51:10', 'This movie rocks..!', 'Akshay P', 'I thought this was a great movie even though       my girlfriend made me see it against my will.', 4),
(1, '2013-10-02 06:54:06', 'An okay movie..', 'Kingsley', 'This was an okay movie. I liked Eraserhead       better.', 3),
(1, '2013-10-02 06:55:55', 'This is awesome', 'Peppermint', 'Wish I''d have seen it sooner', 5),
(2, '2013-10-02 06:57:15', 'My favourite movie', 'Marvin Mar', 'I didn''t wear my flair to the movie but       I loved it anyway.', 4),
(2, '2013-10-02 06:58:24', 'An awesome time', 'Marian MAry', 'I liked this movie, even though I thought it       was an informational video from our travel agent.', 4),
(3, '2013-10-02 06:59:38', 'Saali yeh halkat jawani', 'Mars Perreira', 'I wonder how his gf died and not his bf..Huuuhhhh...Halkat Indian cinema', 3),
(3, '2013-10-02 07:00:35', 'Fantastic...awesome movie', 'Akshay P', 'I''d push the whole staff of the ledge if i was there', 5),
(4, '2013-10-02 07:01:38', 'Pissed', 'Armani', 'How come they get to bomb the place n not us', 3),
(4, '2013-10-02 07:02:31', 'Dream come true', 'Devangar Chetti', 'Dream come true', 5);

-- --------------------------------------------------------

--
-- Table structure for table `testbud2`
--

CREATE TABLE IF NOT EXISTS `testbud2` (
  `cl_id` int(10) NOT NULL AUTO_INCREMENT,
  `cl_movie_name` varchar(30) NOT NULL,
  `cl_ticket_no` int(100) DEFAULT NULL,
  `cl_time` datetime NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `testbud2`
--

INSERT INTO `testbud2` (`cl_id`, `cl_movie_name`, `cl_ticket_no`, `cl_time`) VALUES
(1, 'Resource id #4', 1, '0000-00-00 00:00:00'),
(2, 'Resource id #4', 2, '2013-10-01 13:17:19'),
(3, 'Resource id #4', 0, '2013-10-01 13:18:55'),
(4, 'chennai', 0, '2013-10-01 13:40:12'),
(5, 'chennai', 95, '2013-10-01 14:02:03'),
(6, 'khan', 96, '2013-10-01 14:06:43'),
(7, 'khan', 95, '2013-10-01 14:09:13'),
(8, 'khan', 94, '2013-10-01 14:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `testbud3`
--

CREATE TABLE IF NOT EXISTS `testbud3` (
  `cl_id` int(10) NOT NULL AUTO_INCREMENT,
  `cl_movie_name` varchar(30) NOT NULL,
  `cl_ticket_no` int(100) DEFAULT NULL,
  `cl_time` datetime NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE IF NOT EXISTS `theatre` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(30) NOT NULL,
  `t_loc` varchar(30) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`t_id`, `t_name`, `t_loc`) VALUES
(1, 'EROS', 'CHURCHGATE'),
(2, 'BIG CINEMA', 'ANDHERI'),
(3, 'INOX', 'NARIMAN POINT'),
(4, 'STERLING COMPLEX', 'FORT');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_counter`
--
ALTER TABLE `movie_counter`
  ADD CONSTRAINT `FK_MOVIE_COUNTER` FOREIGN KEY (`t_id`) REFERENCES `theatre` (`t_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
