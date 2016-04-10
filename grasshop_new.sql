-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2014 at 08:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grasshop_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities_a`
--

CREATE TABLE IF NOT EXISTS `activities_a` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `activities_a`
--

INSERT INTO `activities_a` (`sno`, `business_id`, `activity`, `date_created`) VALUES
(1, '2', '<span class=''actinguser''>Crossroad</span> changed <span class=''actingparam''> Password </span>', '2014-10-29 07:27:35'),
(2, '1', '<span class=''actinguser''>Ktminfotech</span> changed <span class=''actingparam''> City </span> to <span class=''actingvalue''>Kathmandu </span>', '2014-11-08 19:04:57'),
(3, '1', '<span class=''actinguser''>Ktminfotech</span> changed <span class=''actingparam''> City </span> to <span class=''actingvalue''>Los Angels </span>', '2014-11-09 18:41:25'),
(4, '1', '<span class=''actinguser''>Ktminfotech</span> changed <span class=''actingparam''> Postal </span> to <span class=''actingvalue''> 44602 </span>', '2014-11-09 18:48:49'),
(5, '2', '<span class="actinguser"> ktminfotech </span>changed<span class="actingparam"> username to </span><span class="actingvalue"> ioesandeep </span> on 2014/11/10 01:50:33', '2014-11-09 20:05:33'),
(6, '1', '<span class=''actinguser''>Ioesandeep</span> changed <span class=''actingparam''> City </span> to <span class=''actingvalue''>Los Angeles </span>', '2014-11-15 09:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `activities_b`
--

CREATE TABLE IF NOT EXISTS `activities_b` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_c`
--

CREATE TABLE IF NOT EXISTS `activities_c` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `activities_c`
--

INSERT INTO `activities_c` (`sno`, `business_id`, `activity`, `date_created`) VALUES
(1, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> State </span> to <span class=''actingvalue''>florida </span>', '2014-10-28 06:59:34'),
(2, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> City </span> to <span class=''actingvalue''>miami </span>', '2014-10-28 06:59:39'),
(3, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> Country </span> to <span class=''actingvalue''> dade </span>', '2014-10-28 06:59:44'),
(4, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> Mobile </span> to <span class=''actingvalue''> 245454 </span>', '2014-10-28 06:59:47'),
(5, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> Fax </span> to <span class=''actingvalue''>246436345454 </span>', '2014-10-28 06:59:51'),
(6, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> Postal </span> to <span class=''actingvalue''> west side compton foo </span>', '2014-10-28 07:00:02'),
(7, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> Website </span> to <span class=''actingvalue''> www.yousucklondon.com </span>', '2014-10-28 07:00:30'),
(8, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> About </span> to <span class=''actingvalue''> the best ever </span>', '2014-10-28 07:00:36'),
(9, '23', '<span class=''actinguser''>Castro</span> changed <span class=''actingparam''> Password </span>', '2014-10-28 07:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `activities_d`
--

CREATE TABLE IF NOT EXISTS `activities_d` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `activities_d`
--

INSERT INTO `activities_d` (`sno`, `business_id`, `activity`, `date_created`) VALUES
(1, '6', '<span class=''actinguser''>Darby</span> changed <span class=''actingparam''> State </span> to <span class=''actingvalue''>California </span>', '2014-10-28 03:44:29'),
(2, '6', '<span class=''actinguser''>Darby</span> changed <span class=''actingparam''> City </span> to <span class=''actingvalue''>West Hollywood  </span>', '2014-10-28 03:44:40'),
(3, '6', '<span class=''actinguser''>Darby</span> changed <span class=''actingparam''> Country </span> to <span class=''actingvalue''> USA </span>', '2014-10-28 03:44:54'),
(4, '6', '<span class=''actinguser''>Darby</span> changed <span class=''actingparam''> Website </span> to <span class=''actingvalue''> www.darby.com </span>', '2014-10-28 03:46:25'),
(5, '6', '<span class=''actinguser''>Darby</span> changed <span class=''actingparam''> About </span> to <span class=''actingvalue''> we how we how we how we how we how we how we how we how we how w how we how we how  </span>', '2014-10-28 03:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `activities_e`
--

CREATE TABLE IF NOT EXISTS `activities_e` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_f`
--

CREATE TABLE IF NOT EXISTS `activities_f` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_g`
--

CREATE TABLE IF NOT EXISTS `activities_g` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_h`
--

CREATE TABLE IF NOT EXISTS `activities_h` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_i`
--

CREATE TABLE IF NOT EXISTS `activities_i` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_j`
--

CREATE TABLE IF NOT EXISTS `activities_j` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_k`
--

CREATE TABLE IF NOT EXISTS `activities_k` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_l`
--

CREATE TABLE IF NOT EXISTS `activities_l` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `activities_l`
--

INSERT INTO `activities_l` (`sno`, `business_id`, `activity`, `date_created`) VALUES
(1, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> State </span> to <span class=''actingvalue''>texas </span>', '2014-10-31 03:15:19'),
(2, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> City </span> to <span class=''actingvalue''>tyler </span>', '2014-10-31 03:15:45'),
(3, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Country </span> to <span class=''actingvalue''> weston </span>', '2014-10-31 03:15:56'),
(4, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Mobile </span> to <span class=''actingvalue''> 456-989-0909 </span>', '2014-10-31 03:16:04'),
(5, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Fax </span> to <span class=''actingvalue''>4566789876 </span>', '2014-10-31 03:16:13'),
(6, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Postal </span> to <span class=''actingvalue''> weston king rd </span>', '2014-10-31 03:16:21'),
(7, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Mobile </span> to <span class=''actingvalue''> 567-900-9009 </span>', '2014-10-31 03:18:34'),
(8, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Fax </span> to <span class=''actingvalue''>789-090-9098 </span>', '2014-10-31 03:18:41'),
(9, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Mobile </span> to <span class=''actingvalue''> 890-090-9876 </span>', '2014-10-31 03:21:23'),
(10, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Fax </span> to <span class=''actingvalue''>567-988-0909 </span>', '2014-10-31 03:21:30'),
(11, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Website </span> to <span class=''actingvalue''> the.com </span>', '2014-10-31 03:21:46'),
(12, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> About </span> to <span class=''actingvalue''> the best in the world. nobody can mess with us </span>', '2014-10-31 03:22:03'),
(13, '25', '<span class=''actinguser''>Lakewood</span> changed <span class=''actingparam''> Password </span>', '2014-10-31 04:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `activities_m`
--

CREATE TABLE IF NOT EXISTS `activities_m` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_n`
--

CREATE TABLE IF NOT EXISTS `activities_n` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_numeric`
--

CREATE TABLE IF NOT EXISTS `activities_numeric` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_o`
--

CREATE TABLE IF NOT EXISTS `activities_o` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `activities_o`
--

INSERT INTO `activities_o` (`sno`, `business_id`, `activity`, `date_created`) VALUES
(1, '8', '<span class=''actinguser''>Oak grove</span> changed <span class=''actingparam''> State </span> to <span class=''actingvalue''>cali </span>', '2014-10-28 06:08:40'),
(2, '8', '<span class=''actinguser''>Oak grove</span> changed <span class=''actingparam''> City </span> to <span class=''actingvalue''>san jo </span>', '2014-10-28 06:08:46'),
(3, '8', '<span class=''actinguser''>Oak grove</span> changed <span class=''actingparam''> Country </span> to <span class=''actingvalue''> us </span>', '2014-10-28 06:08:55'),
(4, '8', '<span class=''actinguser''>Oak grove</span> changed <span class=''actingparam''> Website </span> to <span class=''actingvalue''> www.www.com </span>', '2014-10-28 06:09:25'),
(5, '8', '<span class=''actinguser''>Oak grove</span> changed <span class=''actingparam''> About </span> to <span class=''actingvalue''> we erh sdh dfh rh h h fg adh zh zh s sj rj j srj srj sjs tj sj jj yjyjyjyjjhj dxg j hjgnnbnb g gh g ghg gj xgfj xghghghghghghgh ghg g ', '2014-10-28 06:18:31'),
(6, '8', '<span class=''actinguser''>Oak grove</span> changed <span class=''actingparam''> Password </span>', '2014-10-28 06:50:23'),
(7, '11', '<span class=''actinguser''>Oliveintl</span> changed <span class=''actingparam''> State </span> to <span class=''actingvalue''>Kathmandu </span>', '2014-11-09 23:19:52'),
(8, '11', '<span class=''actinguser''>Oliveintl</span> changed <span class=''actingparam''> State </span> to <span class=''actingvalue''>Bagmati </span>', '2014-11-09 23:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `activities_p`
--

CREATE TABLE IF NOT EXISTS `activities_p` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_q`
--

CREATE TABLE IF NOT EXISTS `activities_q` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_r`
--

CREATE TABLE IF NOT EXISTS `activities_r` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_s`
--

CREATE TABLE IF NOT EXISTS `activities_s` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_t`
--

CREATE TABLE IF NOT EXISTS `activities_t` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_u`
--

CREATE TABLE IF NOT EXISTS `activities_u` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_v`
--

CREATE TABLE IF NOT EXISTS `activities_v` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_w`
--

CREATE TABLE IF NOT EXISTS `activities_w` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_x`
--

CREATE TABLE IF NOT EXISTS `activities_x` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_y`
--

CREATE TABLE IF NOT EXISTS `activities_y` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `activities_z`
--

CREATE TABLE IF NOT EXISTS `activities_z` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE IF NOT EXISTS `admin_post` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('A','B') NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`sno`, `title`, `name`, `content`, `image`, `status`, `date_added`) VALUES
(4, 'about-us', 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget lobortis lorem, a vulputate justo. Sed vitae consectetur lacus. Cras placerat suscipit elit, vel ullamcorper turpis placerat a. Suspendisse a sollicitudin sapien, vitae efficitur orci. Praesent ac porta dolor, eget malesuada lectus. Maecenas accumsan arcu a elit facilisis eleifend. Cras ac mauris magna. Pellentesque porta metus vitae dolor mattis tristique. Integer pretium tincidunt risus, a condimentum turpis. Cras lacinia tempor est vel pharetra. Aliquam id lacus pulvinar, efficitur augue sed, aliquet erat. Vestibulum dignissim elit venenatis magna posuere, at sodales mauris tincidunt. Cras id placerat urna. Nam eget hendrerit leo. Nam consequat at libero et pretium. Proin convallis sollicitudin sem vel finibus. ', 'saffersmall_72NFP1NYFABP1USC5F8D.jpg', 'B', '2014-10-30 13:27:23'),
(5, 'contact-us', 'Contact Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget lobortis lorem, a vulputate justo. Sed vitae consectetur lacus. Cras placerat suscipit elit, vel ullamcorper turpis placerat a. Suspendisse a sollicitudin sapien, vitae efficitur orci. Praesent ac porta dolor, eget malesuada lectus. Maecenas accumsan arcu a elit facilisis eleifend. Cras ac mauris magna. Pellentesque porta metus vitae dolor mattis tristique. Integer pretium tincidunt risus, a condimentum turpis. Cras lacinia tempor est vel pharetra. Aliquam id lacus pulvinar, efficitur augue sed, aliquet erat. Vestibulum dignissim elit venenatis magna posuere, at sodales mauris tincidunt. Cras id placerat urna. Nam eget hendrerit leo. Nam consequat at libero et pretium. Proin convallis sollicitudin sem vel finibus.', 'saffersmall_72NFP1NYFABP1USC5F8D.jpg', 'A', '2014-10-30 13:28:21'),
(6, 'privacy-policy', 'Privacy Policy', 'This is privacy policy page. ', 'saffersmall_X4P2WMA1PQP8TCU24F50.jpg', 'A', '2014-10-30 13:29:27'),
(7, 'terms-and-condition', 'Terms and Conditions', 'This is terms and condition page.', 'saffersmall_8NWE7BWZQVOJPKG17HR_.jpg', 'B', '2014-10-30 13:36:15'),
(8, 'contact-cookies', 'Contact Cookies', 'This is contact cookies page.', 'saffersmall_T8OMPR285WL96_UFO56B.jpg', 'B', '2014-10-30 13:38:49'),
(9, 'bolg', 'Blog', '<p>\r\n This is blog page</p>\r\n', 'saffersmall_3HMG_VRDUE0D_S7GGB1I.jpg', 'B', '2014-10-30 13:40:41'),
(10, 'advertising', 'Advertising', '<p>\r\n This is advertising page.</p>\r\n', 'saffersmall_72NFP1NYFABP1USC5F8D.jpg', 'B', '2014-10-30 13:43:26'),
(12, 'fdgfgd', 'hgkhkjh', 'qwrwer', 'saffersmall_RZRBX7JG64TF4MTIHPR_.jpg', 'B', '2014-10-30 13:45:37'),
(13, 'xfvxcvc', 'fgfhg', 'gjghjhg', 'saffersmall_X4P2WMA1PQP8TCU24F50.jpg', 'B', '2014-10-30 13:46:38'),
(14, 'new post', 'new post', '<p>\r\n sdfjl flkdsfl sdjflsjf lsdjljbkvjbh foi eof l bcn.c.v hewog h v.v ovhco fo sdovhxjchv,xz z.j ofvdjo lcx ncvhgroeuuotueru0p dfjb98ugrethfdbvc bv z. cjvbczbx nbkdhff hlfbvcbfgldfdofdldf.dfdsof dfofdgueo</p>\r\n', 'saffersmall__Q77AWMXSM_UGYPKE1CW.jpg', 'B', '2014-10-30 13:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `app_email`
--

CREATE TABLE IF NOT EXISTS `app_email` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `message` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `app_email`
--

INSERT INTO `app_email` (`sno`, `name`, `email`, `message`, `date_added`) VALUES
(1, 'campaigns', 'always.sumit07@gmail.com', 'this is a test.', '2014-11-08 17:41:27'),
(2, 'campaigns', 'always.sumit07@gmail.com', 'this is a test.', '2014-11-08 17:42:27'),
(3, 'campaigns', 'always.sumit07@gmail.com', 'this is a test.', '2014-11-08 17:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(256) NOT NULL,
  `status` enum('A','B','W') NOT NULL DEFAULT 'A',
  `pin` int(11) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`sno`, `name`, `username`, `password`, `email`, `status`, `pin`, `verified`, `date_added`) VALUES
(1, 'Hello Foundation', 'hellof', 'b9a689f66d4a5c586232df42d14e0bd2', 'admin@hellofoundation.com', 'A', 753894, 0, '0000-00-00 00:00:00'),
(2, 'Arjun', 'arjun', 'bfca45888f75d2ce5cb30de60455e741', 'arjun10c@many.any', 'A', 159722, 1, '0000-00-00 00:00:00'),
(3, 'John ', 'Fresh Brothers', 'edbea4cfe16525110127157c9a41ef9f', 'freshbrothers@hulu.com', 'A', 485704, 0, '2014-10-26 17:23:03'),
(4, 'east', 'east', '1f4c77bf229719c74b599a178129dd19', 'east@gmail.com', 'A', 694872, 0, '2014-10-28 06:54:51'),
(5, 'shsgh', 'tyler', '61a40acf9cf1af28124214d510d6442f', 'tyler@fgsdfg', 'A', 468877, 0, '2014-10-29 06:05:20'),
(6, 'tyler', 'burgerking', '5cf7618d89dbf5c8c23be413d5fb32f4', 'burgerking@we', 'A', 946982, 0, '2014-10-31 03:52:05'),
(7, 'Love Monkey', 'Love ', 'edbea4cfe16525110127157c9a41ef9f', 'lovemonkey@gmail.com', 'A', 433641, 0, '2014-10-31 05:06:37'),
(8, 'hotsauce', 'hotsauce', 'd608a389f87ab8914878d81d654912ac', 'kashleighcorp@gmail.com', 'A', 184538, 0, '2014-10-31 05:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `business_a`
--

CREATE TABLE IF NOT EXISTS `business_a` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `business_a`
--

INSERT INTO `business_a` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Alien Arts Pvt. Ltd.', 'California', 'Los Angeles', ' USA', '+1433674839', '+16789377787', '+16789377787', 44602, 'support@mybusiness.com', '#foods#pubs', 'a#b#c#d#e#f', 'We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. We are who we are. ', NULL, 'grasshopit_S7MRR3XQQROWDYOFW_3RXHPRP0IXP8G6H5IVHLI3ZFF3K771.jpg', 0, ' http://www.ktminfotech.com', 1, 0, 3, 0, '2014-08-12 05:24:12'),
(2, 'Angie Foundations', 'New York', 'Ora Park', '   Nepal', '+1433674839', '+16789377787', '+16789377787', 53396, 'support@mybusiness.com', '#food#drinks#party', 'a#b#c', 'We are who we are', NULL, 'grasshopit_BR_CQFN7_3DR518XHTRRJRO7HBP3L0FDW8U5KE05__MF6EEW.jpg', 0, ' http://www.crossroad.com', 1, 0, 3, 0, '2014-08-12 05:24:12'),
(3, 'Azimuth Business Pvt. Ltd.', 'California', 'Enguich Park', '   America', ' +143367483774', ' +16789377784', '+16789377787', 53396, 'support@mybusiness.com', '', 'a#b#c', 'We are who we are', NULL, '', 2, 'http://www.mybusiness.com ', 1, 0, 3, 0, '2014-08-12 05:24:12'),
(4, 'Apolo Media corporation', 'Thamel', 'Kathmandu\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(5, 'Alex&#39;s Bar', '2913 E Anaheim St', 'Long Beach', NULL, NULL, NULL, NULL, 90804, NULL, NULL, NULL, NULL, '2913 E Anaheim St', NULL, 0, 'http://www.alexsbar.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(6, 'Alex&amp;#39;s Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 434-8292', NULL, 90804, NULL, 'Music Venues, Karaoke, Dive Bars', NULL, NULL, '2913 E Anaheim St', NULL, 0, 'http://www.alexsbar.com', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(7, 'Agaves Kitchen and Tequila', 'CA', 'Long Beach', 'usa', NULL, '(562) 435-7700', NULL, 90802, NULL, 'Mexican, Bars', NULL, NULL, '200 Pine Ave', NULL, 0, 'http://agavesbar.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(8, 'Art Du Vin Wine Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 987-3076', NULL, 90814, NULL, 'Wine Bars', NULL, NULL, '2027 E 4th St', NULL, 0, 'http://artduvinwinebar.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(9, 'Ashley&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 495-5700', NULL, 90802, NULL, 'Dive Bars, American (Traditional)', NULL, NULL, '1731 E 4th St', NULL, 0, 'http://www.ashleysbarandgrill.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(10, 'AnandamidePsychedelicatessen', 'CA', 'Long Beach', 'usa', NULL, '(562) 438-1427', NULL, 90814, NULL, 'Vegan, Chocolatiers & Shops, Vegetarian', NULL, NULL, '2040 E 4th St', NULL, 0, 'http://www.blisscompound.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(11, 'Ashley&#39;s', '1731 E 4th St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(12, 'Aesthetics By Bernadette', 'CA', 'El Segundo', 'usa', NULL, '(424) 225-2570', NULL, 90245, NULL, 'Skin Care, Hair Removal', NULL, NULL, '504 Center St', NULL, 0, 'http://www.aestheticsbybernadette.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(13, 'AQUA Thai Spa &amp; Massage', '1279 Westwood Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:57'),
(14, 'Anantara Thai Spa', 'CA', 'Los Angeles', 'usa', NULL, '(818) 506-6989', NULL, 91602, NULL, 'Day Spas, Massage, Skin Care', NULL, NULL, '4650 Lankershim Blvd', NULL, 0, 'http://www.anantara-spa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(15, 'Awe Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 466-0066', NULL, 90004, NULL, 'Massage, Day Spas, Skin Care, Vegan, Live/Raw Food', NULL, NULL, '578 N Larchmont Blvd', NULL, 0, 'http://awe-spa.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(16, 'AQUA Thai Spa &amp;amp; Massage', 'CA', 'Los Angeles', 'usa', NULL, '(310) 478-6680', NULL, 90024, NULL, 'Massage, Day Spas, Cosmetics & Beauty Supply, Thai', NULL, NULL, '1279 Westwood Blvd', NULL, 0, 'http://www.aquathaispa.com/', 1, 0, 1, 1, '2014-10-28 08:55:53'),
(17, 'American Tire Depot', '5206 Hollywood Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(18, 'All Brake &amp; Lube', '6065 Melrose Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(19, 'Aqua Link', 'Dock at Los Alamitos Landing', 'Long Beach', 'Nepal', '', '', '', 0, '', NULL, NULL, '', '', 'saffersmall_47Q3XVD9M85VGNRYHORG.jpg', 0, '', 1, 0, 1, 1, '2014-10-29 06:40:23'),
(20, 'Alamitos Bay Yacht Club', '7201 E Ocean Blvd', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_b`
--

CREATE TABLE IF NOT EXISTS `business_b` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `business_b`
--

INSERT INTO `business_b` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'BO-beau Kitchen &amp; Roof Tap', '144 Pine Ave', 'Long Beach', NULL, NULL, NULL, NULL, 90802, NULL, NULL, NULL, NULL, '144 Pine Ave', NULL, 0, 'http://www.cohnrestaurants.com/bobeaukitchenrooftap', 0, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'BO-beau Kitchen &amp;amp; Roof Tap', 'CA', 'Long Beach', 'usa', NULL, '(562) 983-0056', NULL, 90802, NULL, 'Tapas/Small Plates, American (New), French', NULL, NULL, '144 Pine Ave', NULL, 0, 'http://www.cohnrestaurants.com/bobeaukitchenrooftap', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(3, 'Brix at The Shore', 'CA', 'Long Beach', 'usa', NULL, '(562) 343-5998', NULL, 90803, NULL, 'Gastropubs, Delis, Wine Bars', NULL, NULL, '5372 E 2nd St', NULL, 0, 'http://www.letsdobrix.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, 'Blondie&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 498-2661', NULL, 90815, NULL, 'Dive Bars', NULL, NULL, '2259 N Lakewood Blvd', NULL, 0, 'http://www.blondieslb.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'Baddeley&amp;#39;s Pourhouse', 'CA', 'Long Beach', 'usa', NULL, '(562) 439-7220', NULL, 90803, NULL, 'Sports Bars, Pool Halls', NULL, NULL, '3348 E Broadway', NULL, 0, 'http://www.baddeleyspourhouse.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(6, 'Bottoms Up Tavern', 'CA', 'Long Beach', 'usa', NULL, '(562) 900-9370', NULL, 90805, NULL, 'Pubs, Lounges, Cocktail Bars', NULL, NULL, '1739 E Artesia Blvd', NULL, 0, 'http://bsuptavern.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(7, 'Bull Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-6282', NULL, 90804, NULL, 'Bars', NULL, NULL, '3316 E 7th St', NULL, 0, 'http://www.bullbarlongbeach.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(8, 'Beachwood Brewing &amp;amp; BBQ', 'CA', 'Long Beach', 'usa', NULL, '(562) 436-4020', NULL, 90802, NULL, 'Barbeque, Breweries, Gastropubs', NULL, NULL, '210 E 3rd St', NULL, 0, 'http://www.beachwoodbbq.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(9, 'Belmont Brewing Co.', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-3891', NULL, 90803, NULL, 'Breweries, American (Traditional)', NULL, NULL, '25 39th Pl', NULL, 0, 'http://www.belmontbrewing.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(10, 'Boomer&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 421-9847', NULL, 90808, NULL, 'Bars', NULL, NULL, '5456 E Del AMO Blvd', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(11, 'BlackLight District', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-5823', NULL, 90804, NULL, 'Dive Bars, Music Venues, Lounges', NULL, NULL, '2500 E Anaheim St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(12, 'Baja Sonora Mexican Restaurant', 'CA', 'Long Beach', 'usa', NULL, '(562) 421-5120', NULL, 90815, NULL, 'Mexican', NULL, NULL, '2940 Clark Ave', NULL, 0, 'http://www.bajasonora.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(13, 'Blondie&#39;s', '2259 N Lakewood Blvd', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(14, 'Baddeley&#39;s Pourhouse', '3348 E Broadway', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(15, 'Beachwood Brewing &amp; BBQ', '210 E 3rd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(17, 'BO beau Kitchen &amp;amp; Roof Tap', 'CA', 'Long Beach', 'usa', NULL, '(562) 983-0056', NULL, 90802, NULL, 'Tapas/Small Plates, American (New), French', NULL, NULL, '144 Pine Ave', NULL, 0, 'http://www.cohnrestaurants.com/bobeaukitchenrooftap', 1, 0, 1, 1, '2014-10-27 14:36:33'),
(18, 'Boomer&#39;s', '5456 E Del AMO Blvd', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-27 18:17:14'),
(19, 'Blossom Spa Hollywood', 'CA', 'Los Angeles', 'usa', NULL, '(323) 380-6252', NULL, 90028, NULL, 'Day Spas', NULL, NULL, '1354 N Highland', NULL, 0, 'http://blossomspahollywood.com/', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(20, 'Brentwood Retreat', 'CA', 'Los Angeles', 'usa', NULL, '(310) 472-1311', NULL, 90049, NULL, 'Skin Care, Day Spas, Hair Removal', NULL, NULL, '126 S Barrington Pl', NULL, 0, 'http://www.brentwoodretreat.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(21, 'Beverly Hot Springs Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 734-7000', NULL, 90004, NULL, 'Massage, Skin Care, Day Spas', NULL, NULL, '308 N Oxford Ave', NULL, 0, 'http://www.beverlyhotsprings.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(22, 'Bai-Po Spa &amp; Thai Massage', '4716 Franklin Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(23, 'Bronz Body Tan', 'CA', 'Los Angeles', 'usa', NULL, '(213) 747-3301', NULL, 90007, NULL, 'Tanning, Skin Care, Day Spas', NULL, NULL, '2236 S Figueroa St', NULL, 0, 'http://www.bronzbodytan.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(24, 'Beauty Utopia', 'CA', 'Los Angeles', 'usa', NULL, '(323) 340-8888', NULL, 90041, NULL, 'Skin Care, Eyelash Service, Hair Removal', NULL, NULL, '2501 Colorado Blvd Ste E', NULL, 0, 'http://www.beautyutopia.net/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(25, 'Buddha Thai Massage', 'CA', 'Los Angeles', 'usa', NULL, '(310) 207-0802', NULL, 90025, NULL, 'Massage', NULL, NULL, '12138 Santa Monica Blvd', NULL, 0, 'http://www.buddhathaimassage.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(26, 'Bella Mia Salon And Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 257-1623', NULL, 90041, NULL, 'Day Spas, Nail Salons, Hair Stylists, Hotels', NULL, NULL, '1110 Colorado Blvd', NULL, 0, '', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(27, 'Body Zone Beauty Clinic', 'CA', 'Los Angeles', 'usa', NULL, '(213) 365-9290', NULL, 90020, NULL, 'Massage, Skin Care, Acupuncture', NULL, NULL, '3407 W 6th St Ste 604', NULL, 0, 'http://bodyzoneusa.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(28, 'Beba Beauty', 'CA', 'Los Angeles', 'usa', NULL, '(310) 474-2524', NULL, 90025, NULL, 'Skin Care, Hair Removal, Eyelash Service, Pizza', NULL, NULL, '2041 Westwood Blvd', NULL, 0, 'http://www.bebabeauty.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(29, 'Bai Po Spa &amp;amp; Thai Massage', 'CA', 'Los Angeles', 'usa', NULL, '(323) 661-1988', NULL, 90027, NULL, 'Massage, Skin Care, Day Spas', NULL, NULL, '4716 Franklin Ave', NULL, 0, 'http://www.baipospa.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(30, 'Baizer &amp; Grimmett Automotive Repair', '11717 Santa Monica Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(31, 'Brake Center', '4732 Manhattan Beach Blvd', 'Lawndale', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(32, 'Bussard&#39;s All Pro Automotive Center', '5312 York Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(33, 'Battambang Auto Repair', '716 N Alvarado St Ste G', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(34, 'Balboa Boat Rentals', '510 E Edgewater Ave', 'Newport Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_c`
--

CREATE TABLE IF NOT EXISTS `business_c` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `business_c`
--

INSERT INTO `business_c` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'computer', NULL, NULL, NULL, NULL, '8907654321', NULL, NULL, 'google', 'pub', NULL, NULL, '1235 fibvohd rd', NULL, 0, NULL, 1, 0, 0, 0, '2014-10-22 18:04:16'),
(2, 'Congregation Ale House', 'CA', 'Long Beach', 'usa', NULL, '(562) 432-2337', NULL, 90802, NULL, 'Pubs, Gastropubs, Bars, American (Traditional), Seafood, Seafood, Steakhouses, Music Venues, Spanish, Tapas Bars, Wine Bars, Tap', NULL, NULL, '201 E Broadway Ave', NULL, 0, 'http://www.congregationalehouse.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(3, 'Cloud 9 Sports Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 422-7500', NULL, 90805, NULL, 'Sports Bars, Beer, Wine & Spirits, Italian, Dive Bars, Pubs, Seafood, Steakhouses, Dive Bars', NULL, NULL, '1740 E Artesia Blvd', NULL, 0, 'http://www.cloud9sportsbar.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, 'Cirivello&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 421-0222', NULL, 90808, NULL, 'Pizza, Italian, Sports Bars', NULL, NULL, '4115 N Viking Way', NULL, 0, 'http://www.cirivelloslongbeach.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'Club Ripples', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-0357', NULL, 90803, NULL, 'Gay Bars, Dance Clubs', NULL, NULL, '5101 E Ocean Blvd', NULL, 0, 'http://www.clubripples.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(6, 'Crow&amp;#39;s Nest', 'CA', 'Long Beach', 'usa', NULL, '(562) 988-5963', NULL, 90810, NULL, 'Dive Bars', NULL, NULL, '1912 W Willow St', NULL, 0, 'http://www.crowsnest1912.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(7, 'Cowboy Country Saloon', 'CA', 'Long Beach', 'usa', NULL, '(562) 630-3007', NULL, 90805, NULL, 'Dance Clubs, Bars, American (New)', NULL, NULL, '3321 E South St', NULL, 0, 'http://www.cowboycountry.mu/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(8, 'Clancy&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-1836', NULL, 90802, NULL, 'Irish, Pubs, Music Venues', NULL, NULL, '803 E Broadway', NULL, 0, 'http://www.clancyslbpub.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(9, 'Cuban Pete&amp;#39;s Mojito Lounge And Nightclub', 'CA', 'Long Beach', 'usa', NULL, '(562) 646-7294', NULL, 90802, NULL, 'Dance Clubs, Lounges', NULL, NULL, '245 Pine Ave Ste 290', NULL, 0, 'http://www.cubanpeteslongbeach.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(10, 'Cirivello&#39;s', '4115 N Viking Way', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(11, 'Crow&#39;s Nest', '1912 W Willow St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(12, 'Clancy&#39;s', '803 E Broadway', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(13, 'Cuban Pete&#39;s Mojito Lounge And Nightclub', '245 Pine Ave Ste 290', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(14, 'campaigns', NULL, NULL, NULL, NULL, '9849806771', NULL, NULL, 'dipesh_fren@hotmail.com', 'help', NULL, NULL, 'kathmandu', NULL, 0, NULL, 1, 0, 0, 0, '2014-10-27 22:14:54'),
(15, 'campaigns', NULL, NULL, NULL, NULL, '9849806771', NULL, NULL, 'ioesandeep@gmail.com', 'help', NULL, NULL, 'kathmandu', NULL, 0, NULL, 1, 0, 2, 0, '2014-10-27 22:51:56'),
(16, 'Carasoin Day Spa &amp; Skin Clinic', '120 N Robertson Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:57'),
(17, 'Century Day &amp; Night Spa', '4120 W Olympic Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:57'),
(18, 'Crystal Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 487-5600', NULL, 90020, NULL, 'Day Spas, Massage', NULL, NULL, '3500 W 6th St Ste 321', NULL, 0, 'http://www.crystalspala.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(19, 'Ciel Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 246-5560', NULL, 90048, NULL, 'Day Spas', NULL, NULL, 'SLS Hotel 465 S La Cienega Blvd', NULL, 0, 'http://www.cielatsls.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(20, 'Chakra Integration Massage Therapy', 'CA', 'Los Angeles', 'usa', NULL, '(424) 901-1056', NULL, 90232, NULL, 'Massage, Massage Therapy', NULL, NULL, '', NULL, 0, 'http://www.chakraintegration.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(21, 'Courtney Corvan Skin Studio', 'CA', 'Los Angeles', 'usa', NULL, '(323) 899-2185', NULL, 90035, NULL, 'Makeup Artists, Hair Removal, Skin Care, Eyelash Service, Photographers', NULL, NULL, 'Salon Republic 9911 Pico Blvd, Studio 46', NULL, 0, '', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(22, 'Cosmetic Gallery - Skin Care Spa &amp; Beauty Store', '134 S Onizuka St', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(23, 'castro', 'florida', 'miami', ' dade', ' 245454', '408-999-0000', '246436345454', 0, 'castro@gmail.com', 'food', NULL, ' the best ever', 'castro', 'grasshopit_V_ECUW6ZBYVAL1E75F8JKO_FX7MO2NPZ_1CW_GW9ERL0T08Y.jpg', 0, ' www.yousucklondon.com', 1, 0, 1, 0, '2014-10-28 06:58:30'),
(24, 'Carasoin Day Spa &amp;amp; Skin Clinic', 'CA', 'Los Angeles', 'usa', NULL, '(310) 855-0105', NULL, 90048, NULL, 'Skin Care, Day Spas', NULL, NULL, '120 N Robertson Blvd', NULL, 0, 'http://www.carasoin.com', 1, 0, 1, 1, '2014-10-28 08:55:53'),
(25, 'Century Day &amp;amp; Night Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 954-1020', NULL, 90019, NULL, 'Gyms, Day Spas, Skin Care, Tires, Korean, Bars, Barbeque, Health Markets, Home Decor, Gift Shops', NULL, NULL, '4120 W Olympic Blvd', NULL, 0, 'http://www.centurydayandnightspa.com', 1, 0, 1, 1, '2014-10-28 08:55:53'),
(26, 'Cosmetic Gallery   Skin Care Spa &amp;amp; Beauty Store', 'CA', 'Los Angeles', 'usa', NULL, '(213) 680-7720', NULL, 90012, NULL, 'Skin Care, Cosmetics & Beauty Supply', NULL, NULL, '134 S Onizuka St', NULL, 0, 'http://cosmeticgallery.blogspot.com/', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(27, 'Carotech Auto Motive', '8687 W Pico Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(28, 'Collision Consultants Auto Body &amp; Paint', '2627 La Cienega Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(29, 'California Tire', '10950 W Pico Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(30, 'Catalina Adventure Tours', '4101 N Long Beach Blvd', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(31, 'Catalina Express', '95 Berth', 'San Pedro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_d`
--

CREATE TABLE IF NOT EXISTS `business_d` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `business_d`
--

INSERT INTO `business_d` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'District Wine', 'CA', 'Long Beach', 'usa', NULL, '(562) 612-0411', NULL, 90802, NULL, 'Wine Bars, Tapas/Small Plates, American (New)', NULL, NULL, '144 Linden Ave', NULL, 0, 'http://www.districtwine.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Dipiazza Restaurant &amp;amp; Lounge', 'CA', 'Long Beach', 'usa', NULL, '(562) 498-2461', NULL, 90804, NULL, 'Lounges, Italian, Pizza', NULL, NULL, '5205 E Pacific Coast Hwy', NULL, 0, 'http://www.dipiazzas.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, 'Dipiazza Restaurant &amp; Lounge', '5205 E Pacific Coast Hwy', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(4, 'Dtox Day Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 665-3869', NULL, 90039, NULL, 'Day Spas, Massage, Skin Care', NULL, NULL, '3206 Los Feliz Blvd', NULL, 0, 'http://www.dtoxdayspa.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(5, 'Dara Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 663-6313', NULL, 90029, NULL, 'Day Spas', NULL, NULL, '4369 Melrose Ave', NULL, 0, 'http://www.daraspa.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(6, 'Darby Inc ', 'California', 'West Hollywood ', ' USA', NULL, '5677657878', NULL, NULL, 'darby@gmail.com', 'Spa#bar', NULL, ' we how we how we how we how we how we how we how we how we how w how we how we how ', '5656 Spoke Street ', 'grasshopit_O2HNMXSCOF09V8GNXUSRKU08T79R_00X1ILOAD02T1BK9R06.jpg', 0, ' www.darby.com', 1, 0, 3, 0, '2014-10-28 03:41:05'),
(7, 'Dockside Boat &amp; Bed', 'Dock 5 Rainbow Harbor', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(8, 'Deep Blue Scuba &amp; Swim Center', '11 39th Pl', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_e`
--

CREATE TABLE IF NOT EXISTS `business_e` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `business_e`
--

INSERT INTO `business_e` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Eldorado Bar and Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 421-4590', NULL, 90808, NULL, 'Sports Bars, American (Traditional), South African', NULL, NULL, '3014 N Studebaker Rd Ste C', NULL, 0, 'http://eldobar.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'E J Malloy&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 424-5000', NULL, 90807, NULL, 'Sports Bars, American (New)', NULL, NULL, '4306 Atlantic Ave', NULL, 0, 'http://www.ejmalloyspub.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, 'E.J. Malloy&amp;#39;s- Broadway', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-3769', NULL, 90803, NULL, 'Sports Bars, American (Traditional), Breakfast & Brunch', NULL, NULL, '3411 E Broadway', NULL, 0, 'http://www.ejmalloyspub.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, 'E J Malloy&#39;s', '4306 Atlantic Ave', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(5, 'E.J. Malloy&#39;s- Broadway', '3411 E Broadway', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(6, 'E.J. Malloy&amp;#39;s  Broadway', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-3769', NULL, 90803, NULL, 'Sports Bars, American (Traditional), Breakfast & Brunch', NULL, NULL, '3411 E Broadway', NULL, 0, 'http://www.ejmalloyspub.com', 1, 0, 1, 1, '2014-10-27 14:36:33'),
(7, 'European Wax Center', 'CA', 'Westlake Village', 'usa', NULL, '(805) 248-7420', NULL, 91361, NULL, 'Hair Removal', NULL, NULL, '2871 Agoura Rd', NULL, 0, 'http://www.waxcenter.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(8, 'El LeÃ³n Spa', '8217 Beverly Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:57'),
(9, 'Eve Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 860-6096', NULL, 90048, NULL, 'Massage', NULL, NULL, '6221 Wilshire Blvd Ste LL2', NULL, 0, 'http://www.evespa.la', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(10, 'Enliven Massage &amp; Spa', '4006 Eagle Rock Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(11, 'Eagle Rock Thai Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 982-1320', NULL, 90041, NULL, 'Massage', NULL, NULL, '2501 Colorado Blvd Ste A1', NULL, 0, 'http://www.eaglerockthaispa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(12, 'Exhale Hollywood', 'CA', 'Los Angeles', 'usa', NULL, '(323) 491-1376', NULL, 90028, NULL, 'Day Spas', NULL, NULL, '1755 North Highland Ave', NULL, 0, 'http://www.exhalespa.com/hollywood', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(13, 'El Le&Atilde;&sup3;n Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 782-9582', NULL, 90048, NULL, 'Massage, Day Spas', NULL, NULL, '8217 Beverly Blvd', NULL, 0, 'http://www.elleonspa.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(14, 'Enliven Massage &amp;amp; Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 250-2882', NULL, 90065, NULL, 'Massage, Reflexology, Massage Therapy', NULL, NULL, '4006 Eagle Rock Blvd', NULL, 0, 'http://enlivenmassagespa.com', 1, 0, 1, 1, '2014-10-28 08:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `business_f`
--

CREATE TABLE IF NOT EXISTS `business_f` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `business_f`
--

INSERT INTO `business_f` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Fresh Corn Grill', '8714 Santa Monica Blvd', 'West Hollywood CA 90069', NULL, NULL, '(310) 855-9592\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Five O&amp;#39; Clock Wine Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 810-5452', NULL, 90803, NULL, 'Wine Bars, Tapas/Small Plates, Tapas Bars', NULL, NULL, '194 Marina Dr Ste 101', NULL, 0, 'http://www.fivewinebar.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, 'Fern&amp;#39;s Cocktails', 'CA', 'Long Beach', 'usa', NULL, '(562) 436-6694', NULL, 90802, NULL, 'Dive Bars', NULL, NULL, '1253 E 4th St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, 'Five O&#39; Clock Wine Bar', '194 Marina Dr Ste 101', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(5, 'Fern&#39;s Cocktails', '1253 E 4th St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(6, 'Forty Winks', 'CA', 'Los Angeles', 'usa', NULL, '(310) 740-4041', NULL, 90045, NULL, 'Day Spas, Massage Therapy', NULL, NULL, '8632 S Sepulveda Blvd Ste 105', NULL, 0, 'http://www.fortywinksla.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(7, 'Full Moon Thai Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 663-6558', NULL, 90029, NULL, 'Massage, Day Spas, Health & Medical', NULL, NULL, '4781 Santa Monica Blvd', NULL, 0, 'http://www.fullmoonspala.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(8, 'From Head To Toe', 'CA', 'Los Angeles', 'usa', NULL, '(323) 306-4333', NULL, 90036, NULL, 'Skin Care, Acupuncture, Massage Therapy', NULL, NULL, '7466 Beverly Blvd Ste 203', NULL, 0, 'http://www.fromheadtotoela.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(9, 'Footssage', 'CA', 'Los Angeles', 'usa', NULL, '(310) 341-3001', NULL, 90024, NULL, 'Massage, Hair Salons, Laser Hair Removal, Medical Spas', NULL, NULL, '1798 Kelton Ave', NULL, 0, 'http://www.footssage.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(10, 'Five Speed Auto', '1407 N La Brea Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(11, 'Full Service Automotive', '1787 N Highland Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(12, 'Frio Automotive', '6575 W Manchester Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `business_g`
--

CREATE TABLE IF NOT EXISTS `business_g` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `business_g`
--

INSERT INTO `business_g` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'GET', NULL, NULL, NULL, NULL, '9493800345', NULL, NULL, 'kvanbird@gettrx.com', 'PUB', NULL, NULL, '970 W. 190th Street', NULL, 0, NULL, 1, 0, 0, 0, '2014-10-22 19:48:37'),
(2, 'Gallagher&#39;s Pub &amp; Grill', '2751 E Broadway', 'Long Beach', NULL, NULL, NULL, NULL, 90803, NULL, NULL, NULL, NULL, '2751 E Broadway', NULL, 0, 'http://www.gallagherslongbeach.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(3, 'Gallagher&amp;#39;s Pub &amp;amp; Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 856-8000', NULL, 90803, NULL, 'Pubs', NULL, NULL, '2751 E Broadway', NULL, 0, 'http://www.gallagherslongbeach.com', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(4, 'Gaslamp Restaurant &amp;amp; Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 596-4718', NULL, 90803, NULL, 'Bars, Music Venues, American (New)', NULL, NULL, '6251 E Pacific Coast Hwy', NULL, 0, 'http://www.thegaslamprestaurant.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'Gaslamp Restaurant &amp; Bar', '6251 E Pacific Coast Hwy', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(6, 'Grand Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 380-8889', NULL, 90020, NULL, 'Skin Care, Massage, Day Spas', NULL, NULL, '2999 W 6th St', NULL, 0, 'http://grandspala-hub.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(7, 'Greenleaf Waxing Studio', 'CA', 'Los Angeles', 'usa', NULL, '(818) 720-6292', NULL, 90068, NULL, 'Skin Care, Waxing', NULL, NULL, '3487 Cahuenga Blvd W Ste B', NULL, 0, 'http://greenleafwaxingstudio.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(8, 'Goddess Beauty &amp; Spa', '14755 Ventura Blvd Unit E', 'Sherman Oaks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(9, 'Goddess Beauty &amp;amp; Spa', 'CA', 'Sherman Oaks', 'usa', NULL, '(818) 433-6600', NULL, 91403, NULL, 'Hair Salons, Day Spas, Spray Tanning', NULL, NULL, '14755 Ventura Blvd Unit E', NULL, 0, 'http://goddessbeautyandspa.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(10, 'Gondola Getaway', '5437 E Ocean Blvd', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(11, 'Gondola Romance', '3400 Via Oporto Suite 202', 'Newport Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_h`
--

CREATE TABLE IF NOT EXISTS `business_h` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `business_h`
--

INSERT INTO `business_h` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'House of Hayden', 'CA', 'Long Beach', 'usa', NULL, '(562) 435-5699', NULL, 90802, NULL, 'Bars', NULL, NULL, '421 E 1st St', NULL, 0, '', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Hol&Atilde;&copy; Mol&Atilde;&copy;', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-0878', NULL, 90802, NULL, 'Mexican', NULL, NULL, '1327 E 4th St', NULL, 0, 'http://www.holemole.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, 'HolÃ© MolÃ©', '1327 E 4th St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(4, 'Hugh Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 365-1268', NULL, 90006, NULL, 'Day Spas, Massage, Skin Care', NULL, NULL, '1101 S Vermont Ave', NULL, 0, 'http://www.hughspa.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(5, 'Hankook Sauna &amp; Spa', '3121 W Olympic Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:57'),
(6, 'Hollywood Beauty Bar', 'CA', 'Los Angeles', 'usa', NULL, '(424) 234-8877', NULL, 90028, NULL, 'Massage, Skin Care, Nail Salons, Hair Extensions, Hair Stylists, Blow Dry/Out Services', NULL, NULL, '1771 N McCadden Pl Ste 205', NULL, 0, 'http://hollywoodbeautybar.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(7, 'Healing Art - Special Therapy Massage', '2500 W 8th St Unit 202', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(8, 'Heavena Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 312-3031', NULL, 90025, NULL, 'Massage, Reflexology', NULL, NULL, '11053 Santa Monica Blvd', NULL, 0, 'http://www.heavenaspa.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(9, 'Healing Hands Wellness Center', 'CA', 'Los Angeles', 'usa', NULL, '(323) 461-7876', NULL, 90004, NULL, 'Massage, Acupuncture, Chiropractors, Massage, Acupuncture, Chiropractors', NULL, NULL, '414 N Larchmont Blvd', NULL, 0, 'http://www.healinghandswc.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(10, 'Hankook Sauna &amp;amp; Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 388-8899', NULL, 90006, NULL, 'Day Spas', NULL, NULL, '3121 W Olympic Blvd', NULL, 0, 'http://www.hankookspa.com', 1, 0, 1, 1, '2014-10-28 08:55:53'),
(11, 'Healing Art   Special Therapy Massage', 'CA', 'Los Angeles', 'usa', NULL, '(213) 739-3112', NULL, 90057, NULL, 'Massage', NULL, NULL, '2500 W 8th St Unit 202', NULL, 0, 'http://www.HealingArtLA.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(12, 'Hana Auto Service', '4305 W Beverly Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(13, 'Hugo&#39;s Auto Electric', '4800 W Washington Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(14, 'Hi Tech Automotive', '4000 Fountain Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(15, 'Huntington Harbor Boat Rentals', '16732 Pacific Coast Hwy', 'Sunset Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(16, 'Harbor Breeze Cruises', '100 Aquarium Way Dock 2', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_i`
--

CREATE TABLE IF NOT EXISTS `business_i` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `business_i`
--

INSERT INTO `business_i` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Iguana Kelley&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 434-0447', NULL, 90804, NULL, 'Dive Bars, Sports Bars', NULL, NULL, '4306 E Anaheim St', NULL, 0, 'http://www.iguanakelleys.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'Iguana Kelley&#39;s', '4306 E Anaheim St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(3, 'Illume Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 442-4646', NULL, 90049, NULL, 'Day Spas, Skin Care, Hair Removal', NULL, NULL, '11677 San Vicente Blvd Ste 300', NULL, 0, 'http://illumespa.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(4, 'In Thai Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 882-6818', NULL, 90046, NULL, 'Massage', NULL, NULL, '7300 W Sunset Blvd Unit F', NULL, 0, 'http://www.inthaispaonsunset.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(5, 'Icon Image', 'CA', 'Los Angeles', 'usa', NULL, '(310) 877-1706', NULL, 90046, NULL, 'Makeup Artists, Tanning, Skin Care', NULL, NULL, '1710 Camino Palmero Ave', NULL, 0, 'http://www.iconimage.net', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(6, 'IKonic Auto Garage', '4206 Fountain Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(7, 'ISE Automotive', '1774 Hillhurst Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(8, 'Island Express Helicopters', '1175 Queens Hwy', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_j`
--

CREATE TABLE IF NOT EXISTS `business_j` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `business_j`
--

INSERT INTO `business_j` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Joe Jost&#39;s', '2803 E Anaheim St', 'Long Beach', NULL, NULL, NULL, NULL, 90804, NULL, NULL, NULL, NULL, '2803 E Anaheim St', NULL, 0, 'http://www.joejosts.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Joe Jost&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 439-5446', NULL, 90804, NULL, 'Bars, Sandwiches', NULL, NULL, '2803 E Anaheim St', NULL, 0, 'http://www.joejosts.com', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(3, 'James Republic', 'CA', 'Long Beach', 'usa', NULL, '(562) 901-0235', NULL, 90802, NULL, 'American (New)', NULL, NULL, '500 E 1st St', NULL, 0, 'http://www.jamesrepublic.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, 'Jack&amp;#39;s Place', 'CA', 'Long Beach', 'usa', NULL, '(562) 633-2924', NULL, 90805, NULL, 'Bars, American (Traditional)', NULL, NULL, '3109 E South St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'Jongewaard&amp;#39;s Bake n Broil', 'CA', 'Long Beach', 'usa', NULL, '(562) 595-0396', NULL, 90807, NULL, 'American (Traditional), Bakeries', NULL, NULL, '3697 Atlantic Ave', NULL, 0, 'http://www.bakenbroil.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(6, 'Jack&#39;s Place', '3109 E South St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(7, 'Jongewaard&#39;s Bake n Broil', '3697 Atlantic Ave', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(8, 'Jim Matson Automotive', '4320 W Pico Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(9, 'Jetpack America', '2600 Newport Blvd Ste 122', 'Newport Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(10, 'J &amp; S Co', '19120 Pioneer Blvd', 'Cerritos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_k`
--

CREATE TABLE IF NOT EXISTS `business_k` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `business_k`
--

INSERT INTO `business_k` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'K.C. Branaghan&amp;#39;s Irish Pub &amp;amp; Restaurant', 'CA', 'Long Beach', 'usa', NULL, '(562) 434-3600', NULL, 90803, NULL, 'Irish, Pubs', NULL, NULL, '5734 E 2nd St', NULL, 0, 'http://www.kcbranaghans.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'K.C. Branaghan&#39;s Irish Pub &amp; Restaurant', '5734 E 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(3, 'Kenya At Studio 41', 'CA', 'Los Angeles', 'usa', NULL, '(310) 866-0928', NULL, 90035, NULL, 'Hair Removal, Skin Care', NULL, NULL, 'SalonRepublic 9911 W Pico Blvd', NULL, 0, 'http://bewellgroomed.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(4, 'Kate Somerville Skin Health Experts', 'CA', 'Los Angeles', 'usa', NULL, '(323) 655-7546', NULL, 90069, NULL, 'Skin Care, Day Spas, Hair Removal', NULL, NULL, '8428 Melrose Pl Ste C', NULL, 0, 'http://www.katesomerville.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(5, 'Kure Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 668-1234', NULL, 90039, NULL, 'Nail Salons, Massage, Hair Removal', NULL, NULL, '2378 Glendale Blvd', NULL, 0, 'http://www.kurespa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(6, 'Kinara Skin Care Clinic', 'CA', 'Los Angeles', 'usa', NULL, '(310) 657-9188', NULL, 90069, NULL, 'Day Spas, Hair Salons, Skin Care', NULL, NULL, '656 North Robertson Blvd', NULL, 0, '', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(7, 'Kalologie Brentwood', 'CA', 'Los Angeles', 'usa', NULL, '(310) 442-9588', NULL, 90049, NULL, 'Massage, Skin Care', NULL, NULL, '11924 San Vicente Blvd', NULL, 0, 'http://www.kalologie.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(8, 'Keson Massage Spaah', 'CA', 'Los Angeles', 'usa', NULL, '(310) 996-0123', NULL, 90064, NULL, 'Massage', NULL, NULL, '11915 W Olympic Blvd', NULL, 0, 'http://www.kesonmassage.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(9, 'Kayaks On the Water', '5411 E Ocean Blvd', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(10, 'ktm_abish_xbandwidth', NULL, NULL, NULL, NULL, '9849806771', NULL, NULL, 'dipesh_fren@hotmail.com', 'help', NULL, NULL, 'kathmandu', NULL, 0, NULL, 1, 0, 3, 0, '2014-11-09 22:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `business_l`
--

CREATE TABLE IF NOT EXISTS `business_l` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `business_l`
--

INSERT INTO `business_l` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'LA Buns & Company', '8787 Santa Monica Blvd', 'West Hollywood CA 90069', NULL, NULL, '(310) 659-3745\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Los Tacos', '7954 Santa Monica Blvd', 'W Hollywood CA 90046', NULL, NULL, '(323) 848-9141\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(3, 'Los Tacos Mexican Restaurant', '7954 Santa Monica Blvd', 'Los Angeles County CA 90046', NULL, NULL, '(323) 848-9141\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(4, 'Liquid Lounge', 'CA', 'Long Beach', 'usa', NULL, '(562) 494-7564', NULL, 90804, NULL, 'Dive Bars, Adult Entertainment', NULL, NULL, '3522 E Anaheim St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'Los Compadres', 'CA', 'Long Beach', 'usa', NULL, '(562) 961-0061', NULL, 90804, NULL, 'Mexican', NULL, NULL, '3229 E Anaheim St', NULL, 0, 'http://www.loscompadreslbc.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(6, 'Legends', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-5743', NULL, 90803, NULL, 'Sports Bars, Chicken Wings', NULL, NULL, '5236 E 2nd St', NULL, 0, 'http://www.legendssportsbar.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(7, 'La Traviata', 'CA', 'Long Beach', 'usa', NULL, '(562) 432-8022', NULL, 90802, NULL, 'Italian, Mediterranean, Venues & Event Spaces', NULL, NULL, '301 N Cedar Ave', NULL, 0, 'http://www.latraviata301.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(8, 'Leelavadee Thai Wellness Center', 'CA', 'Los Angeles', 'usa', NULL, '(310) 216-7999', NULL, 90045, NULL, 'Massage, Day Spas', NULL, NULL, '8732-8736 S Sepulveda Blvd', NULL, 0, 'http://www.laxdayspa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(9, 'Let&#39;s Relax', '5001 Wilshire Blvd Ste 204', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(10, 'Le Pink &amp; Co.', '3820 W Sunset Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(11, 'LA Face &amp; Mind', '4850 Hollywood Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(12, 'Let&amp;#39;s Relax', 'CA', 'Los Angeles', 'usa', NULL, '(323) 933-2039', NULL, 90036, NULL, 'Massage', NULL, NULL, '5001 Wilshire Blvd Ste 204', NULL, 0, 'http://www.letsrelaxmassage.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(13, 'Le Pink &amp;amp; Co.', 'CA', 'Los Angeles', 'usa', NULL, '(323) 661-7465', NULL, 90026, NULL, 'Cosmetics & Beauty Supply, Skin Care', NULL, NULL, '3820 W Sunset Blvd', NULL, 0, 'http://www.lovelepink.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(14, 'LA Face &amp;amp; Mind', 'CA', 'Los Angeles', 'usa', NULL, '(323) 668-1885', NULL, 90027, NULL, 'Massage', NULL, NULL, '4850 Hollywood Blvd', NULL, 0, 'http://www.lafaceandmind.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(15, 'Legit Automotive', '1065 N Gower St', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(16, 'Lextech', '4300 W Sunset Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(17, 'Long Automotive', '2801 Rowena Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(18, 'Lucy&#39;s Auto Center', '5601 W Pico Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(19, 'Long Beach Boat Rentals', '401 Shoreline Village Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(20, 'LA River Expeditions', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(21, 'Long Beach Marina Sport Fishing', '180 N Marina Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(22, 'Leeway Sailing Center', '5437 E. Ocean Blvd', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(23, 'Long Beach Hydrobikes', '110 N Marina Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(24, 'Long Beach Dragon Boat Festival', 'Marine Stadium in Long Beach 5839 Appian Way', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(25, 'lakewood', 'texas', 'tyler', ' weston', ' 890-090-9876', '408-555-6666', '567-988-0909', 0, 'lakewood@gmail.com', '', NULL, ' the best in the world. nobody can mess with us', 'lakewood', 'grasshopit_N5NW5CPQJ0EAVE6AW73LJZGV2FAKKET0KG7PSZGCZUNP_V08.jpg', 0, ' the.com', 1, 0, 1, 0, '2014-10-31 03:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `business_login`
--

CREATE TABLE IF NOT EXISTS `business_login` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `package` smallint(6) NOT NULL,
  `business_id` varchar(25) NOT NULL,
  `package_start` varchar(16) DEFAULT NULL,
  `package_end` varchar(16) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `validated` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `business_views` bigint(20) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `business_login`
--

INSERT INTO `business_login` (`sno`, `name`, `username`, `password`, `email`, `package`, `business_id`, `package_start`, `package_end`, `pin`, `validated`, `date_added`, `business_views`) VALUES
(2, 'Nurakan Technologies Pvt. Ltd.', 'ioesandeep', 'b9a689f66d4a5c586232df42d14e0bd2', 'ioesandeep@gmail.com', 1, 'a_1', '2014/11/16', '2014/12/16', 0, 1, '2014-11-06 18:15:00', 12),
(3, 'Angie Foundation', 'crossroad', '1f56828a38daa0e08c9f1e55b5cd0476', 'support@crossroad.com', 2, 'a_2', NULL, NULL, 660508, 1, '0000-00-00 00:00:00', 13),
(4, 'Hello Foundation', 'hellofoundation', 'bfca45888f75d2ce5cb30de60455e741', 'admin@hellofoundation.com', 3, 'a_3', NULL, NULL, 243625, 1, '0000-00-00 00:00:00', 0),
(5, 'Arjun', 'apple', 'appleball', 'arjun10c@yahoo.com', 3, 'a_3', NULL, NULL, 529106, 0, '0000-00-00 00:00:00', 0),
(7, 'Stark Foundation Pvt. Ltd.', 'stark', 'stark123', 'support@stark.com', 1, 'S_3', NULL, NULL, 549207, 1, '0000-00-00 00:00:00', 27),
(12, 'Sathi Sanga Man Ka Kaura', 'sathi', 'bfca45888f75d2ce5cb30de60455e741', 'ssmkk@gmail.com', 0, 'S_10', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 3),
(16, 'Suchana', 'suchana', 'e41dd1235e2a499b14f684b825d581da', 'suchana@prabidhi.com', 0, 'S_14', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 3),
(17, 'Sunkoshi Hp', 'sunkoshi', '1a401a8e397c2483f23da69ab6c94648', 'sun@koshi.com', 0, 'S_15', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 2),
(18, 'Sunshine Traders', 'sunshine', '7ea6ca5119a0d27412387f048de22d75', 'sunshine@traders.com', 0, 's_16', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 4),
(19, 'Sample Run Foundation', 'temple', '2113f42986bd6219170c1c763987d72d', 'arjun10c@hotmail.com', 1, 's_17', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 4),
(20, 'computer', 'login', 'ef12899200121a2945e162e590af2013', 'google', 0, 'c_1', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 0),
(21, 'GET', 'cyberagent', '02bc71c1db0b13a222b4ea6019c479b5', 'kvanbird@gettrx.com', 0, 'g_1', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 2),
(22, 'Nitelife Ent', 'tester123', '4fe0608f50c1b7bc6ad4256c8ab9ba1f', 'Testme@gmail.com', 0, 'n_2', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 7),
(23, 'Nitelife Ent', 'tester456', '41072fe7da5878ee80646fb09c949933', 'Testme@gmail.com', 0, 'n_3', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 0),
(24, 'Sumit Modi', 'helloyou', '1f56828a38daa0e08c9f1e55b5cd0476', 'rabinlfc@live.com', 0, 's_18', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 0),
(25, 'ttt', 'ttt', '3e48f86dcce6c858bde837a15c6a7bb4', 'ttt@rrr', 0, 't_35', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 0),
(26, 'campaigns', 'helpedyou', '1f56828a38daa0e08c9f1e55b5cd0476', 'dipesh_fren@hotmail.com', 0, 'c_14', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 2),
(27, 'campaigns', 'campaign', '1f56828a38daa0e08c9f1e55b5cd0476', 'ioesandeep@gmail.com', 0, 'c_15', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 2),
(28, 'Darby Inc ', 'darby', 'edbea4cfe16525110127157c9a41ef9f', 'darby@gmail.com', 0, 'd_6', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 6),
(29, 'oak grove', 'oak grove', '44f8a2d1eb4d58c90823922c1f4db195', 'oakgrove@gmail.com', 0, 'o_8', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 5),
(30, 'castro', 'castro', '78917edf3a65660a0d0fc655a5c64252', 'castro@gmail.com', 0, 'c_23', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 5),
(31, 'lakewood', 'lakewood', 'c7a70e104afc6c5d52859f850095eec9', 'lakewood@gmail.com', 0, 'l_25', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 3),
(32, 'Thursday 23rd April 2015', 'computer', 'b55ec3af40df8c80ad7fc4a951ae6707', 'cwilliams300hp@gmail.com', 0, 't_59', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 2),
(33, 'Test Mens grooming product', 'fuckyou', '26f9b8ba3916ac477bee8e52c1e12584', 'accounting@grasshopit.com', 0, 't_60', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 0),
(34, 'sandeep', 'lololol', 'bf1ac28b203d06b9af7e7b2f3b5d4db6', 'c@ntech.com', 0, 's_57', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', 0),
(35, 'Sandeep Giri', 'laptop', 'b9a689f66d4a5c586232df42d14e0bd2', 'sumit@cms.co.uk', 0, 's_58', NULL, NULL, 483968, 1, '0000-00-00 00:00:00', 1),
(36, 'ktm_abish_xbandwidth', 'pendriver', '1f56828a38daa0e08c9f1e55b5cd0476', 'dipesh_fren@hotmail.com', 0, 'k_10', NULL, NULL, 824563, 1, '0000-00-00 00:00:00', 1),
(37, 'Olive Infosys', 'oliveintl', 'b9a689f66d4a5c586232df42d14e0bd2', 'cooldude_ar2006@yahoo.com', 1, 'o_11', NULL, NULL, 635412, 1, '2014-11-09 23:09:24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `business_m`
--

CREATE TABLE IF NOT EXISTS `business_m` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `business_m`
--

INSERT INTO `business_m` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Murphy&#39;s Pub At the Belmont', '4918 E 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, 90803, NULL, NULL, NULL, NULL, '4918 E 2nd St', NULL, 0, 'http://www.belmontathleticclub.com/index.php%3Foption%3Dcom_content%26view%3Darticle%26id%3D45%26Itemid%3D33', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Murphy&amp;#39;s Pub At the Belmont', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-6338', NULL, 90803, NULL, 'Pubs', NULL, NULL, '4918 E 2nd St', NULL, 0, 'http://www.belmontathleticclub.com/index.php%3Foption%3Dcom_content%26view%3Darticle%26id%3D45%26Itemid%3D33', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(3, 'Maya Hookah Lounge', 'CA', 'Long Beach', 'usa', NULL, '(714) 306-0455', NULL, 90802, NULL, 'Hookah Bars, Lounges', NULL, NULL, '700 QueensWay Dr', NULL, 0, 'http://www.socalhookahs.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, 'Malarkey&amp;#39;s Grill and One Hell of an Irish Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 449-3526', NULL, 90803, NULL, 'Irish, American (New), Music Venues', NULL, NULL, '168 N Marina Dr', NULL, 0, 'http://www.malarkeysgrill.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'Malarkey&#39;s Grill and One Hell of an Irish Bar', '168 N Marina Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(6, 'Modem Salon &amp; Spa', '1712 Silver Lake Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:57'),
(7, 'Massage Therapy Center', 'CA', 'Los Angeles', 'usa', NULL, '(310) 444-8989', NULL, 90025, NULL, 'Massage, Day Spas, Skin Care, Ice Cream & Frozen Yogurt', NULL, NULL, '2130 S Sawtelle Blvd Ste 207', NULL, 0, 'http://www.massagenow.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(8, 'Meridian Day Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 601-7633', NULL, 90069, NULL, 'Massage, Skin Care, Chiropractors', NULL, NULL, '808 Hilldale Ave', NULL, 0, 'http://www.meridiandayspa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(9, 'Massage Place', 'CA', 'Los Angeles', 'usa', NULL, '(310) 204-3004', NULL, 90064, NULL, 'Massage', NULL, NULL, '2516 Overland Ave', NULL, 0, 'http://www.themassageplaces.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(10, 'Ms Glen&#39;s Therapeutic Manicures &amp; Pedicures', '8632 S Sepulveda Blvd Ste 101', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(11, 'Massage For Your Health', 'CA', 'Los Angeles', 'usa', NULL, '(310) 822-3668', NULL, 90293, NULL, 'Massage', NULL, NULL, '8416 Pershing Dr', NULL, 0, 'http://massagesforyourhealth.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(12, 'Modem Salon &amp;amp; Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 662-1888', NULL, 90026, NULL, 'Hair Salons, Massage, Skin Care', NULL, NULL, '1712 Silver Lake Blvd', NULL, 0, 'http://modemsalon.com', 1, 0, 1, 1, '2014-10-28 08:55:53'),
(13, 'Ms Glen&amp;#39;s Therapeutic Manicures &amp;amp; Pedicures', 'CA', 'Los Angeles', 'usa', NULL, '(310) 729-9749', NULL, 90045, NULL, 'Nail Salons, Massage', NULL, NULL, '8632 S Sepulveda Blvd Ste 101', NULL, 0, 'http://www.msglen.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(14, 'Mulholland Motorsports', '8630 W Pico Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(15, 'Magic Touch Automotive', '1337 S La Brea Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(16, 'Montri Auto Repair', '1701 Silver Lake Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(17, 'Marina Del Rey Parasailing', '13717 Fiji Way', 'Marina Del Rey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(18, 'Marina Del Rey Boat Rentals', '13717 Fiji Way', 'Marina Del Rey', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(19, 'McKenna&#39;s Boat Club', '190 N Marina Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(20, 'Marine Stadium', '5225 E Paoli Way', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(21, 'Marina Sailing', '429 Shoreline Village Dr Ste M', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(22, 'Mother&#39;s Beach', 'Appian Way Below 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_n`
--

CREATE TABLE IF NOT EXISTS `business_n` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `business_n`
--

INSERT INTO `business_n` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Name', 'State', 'City', 'usa', NULL, 'Phone', NULL, 0, NULL, 'Category', NULL, NULL, 'Street Address', NULL, 0, 'Website', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Nitelife Ent', NULL, NULL, NULL, NULL, '8889767070', NULL, NULL, 'Testme@gmail.com', 'Bar', NULL, NULL, '2300 jackson st', NULL, 0, NULL, 1, 0, 0, 0, '2014-10-25 16:09:49'),
(3, 'Nitelife Ent', NULL, NULL, NULL, NULL, '8889767070', NULL, NULL, 'Testme@gmail.com', 'Bar', NULL, NULL, '2300 jackson st', NULL, 0, NULL, 1, 0, 0, 0, '2014-10-25 16:13:38'),
(4, 'Nick&amp;#39;s On 2nd', 'CA', 'Long Beach', 'usa', NULL, '(562) 856-9000', NULL, 90803, NULL, 'American (Traditional), American (New), Breakfast & Brunch', NULL, NULL, '4901 E 2nd St', NULL, 0, 'http://www.nicksrestaurants.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'Nico&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 434-4479', NULL, 90803, NULL, 'American (New)', NULL, NULL, '5760 E 2nd St', NULL, 0, 'http://www.nicosrestaurant.com/nr/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(6, 'Nana&amp;#39;s Cocktails', 'CA', 'Long Beach', 'usa', NULL, '(562) 595-7926', NULL, 90806, NULL, 'Dive Bars', NULL, NULL, '329 W Willow St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(7, 'Nick&#39;s On 2nd', '4901 E 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(8, 'Nico&#39;s', '5760 E 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(9, 'Nana&#39;s Cocktails', '329 W Willow St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(10, 'Natura Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 381-2288', NULL, 90010, NULL, 'Day Spas, Skin Care', NULL, NULL, '3240 Wilshire Blvd', NULL, 0, 'http://www.natura-spa.com/', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(11, 'Nitespa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 390-5122', NULL, 90066, NULL, 'Day Spas', NULL, NULL, '12024 Venice Blvd Ste D', NULL, 0, 'http://nitespa.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(12, 'N T Auto Repair', '810 E 1st St', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(13, 'Naples Christmas Boat Parade', 'Naples Canals', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_numeric`
--

CREATE TABLE IF NOT EXISTS `business_numeric` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `business_numeric`
--

INSERT INTO `business_numeric` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, '49rs Tavern &amp;amp; Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 494-4449', NULL, 90814, NULL, 'Burgers, Sports Bars, Arts & Entertainment', NULL, NULL, '5660 E Pacific Coast Hwy Ste B', NULL, 0, 'http://www.49rstavernandgrill.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, '3636 Club', 'CA', 'Long Beach', 'usa', NULL, '(562) 438-5365', NULL, 90803, NULL, 'Dive Bars', NULL, NULL, '3636 E Broadway', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, '555 East', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-0626', NULL, 90802, NULL, 'Steakhouses, American (Traditional)', NULL, NULL, '555 E Ocean Blvd', NULL, 0, 'http://www.555east.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, '39 Degrees', 'CA', 'Long Beach', 'usa', NULL, '(562) 439-4025', NULL, 90814, NULL, 'Japanese, Sushi Bars', NULL, NULL, '665 Redondo Ave', NULL, 0, 'http://www.sushiby39degrees.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, '49rs Tavern &amp; Grill', '5660 E Pacific Coast Hwy Ste B', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(6, '10 Minute Oil &amp; General Mechanic', '3901 Beverly Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `business_o`
--

CREATE TABLE IF NOT EXISTS `business_o` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `business_o`
--

INSERT INTO `business_o` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Observation Bar - Queen Mary', '1126 Queens Hwy The Queen Mary', 'Long Beach', 'usa', NULL, '(562) 499-1740', NULL, 90802, NULL, 'Bars, Hotels, Tours, Lounges, Steakhouses, Seafood, Breakfast & Brunch, Seafood, Lounges', NULL, NULL, '1126 Queens Hwy The Queen Mary', NULL, 0, 'https://www.queenmary.com/dining-bars/observation-bar/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'O&amp;#39;Connell&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-5068', NULL, 90814, NULL, 'Dive Bars, Pubs', NULL, NULL, '2746 E 4th St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, 'O&#39;Connell&#39;s', '2746 E 4th St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(4, 'Observation Bar   Queen Mary', 'CA', 'Long Beach', 'usa', NULL, '(562) 499-1740', NULL, 90802, NULL, 'Bars, Hotels, Tours, Lounges, Steakhouses, Seafood, Breakfast & Brunch, Seafood, Lounges', NULL, NULL, '1126 Queens Hwy The Queen Mary', NULL, 0, 'https://www.queenmary.com/dining-bars/observation-bar/', 1, 0, 1, 1, '2014-10-27 14:36:33'),
(5, 'Olympic Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 857-0666', NULL, 90019, NULL, 'Massage, Day Spas, Skin Care', NULL, NULL, '3915 W Olympic Blvd', NULL, 0, 'http://www.olympicspala.com/', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(6, 'O Skin Care', 'CA', 'Los Angeles', 'usa', NULL, '(323) 317-0025', NULL, 90041, NULL, 'Skin Care, Day Spas, Day Spas, Skin Care', NULL, NULL, 'Eagle Rock Plaza Mall 2700 Colorado Blvd, Ste 103', NULL, 0, 'http://www.oskincarespa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(7, 'Oasis Relax Spa', 'CA', 'Los Angeles', 'usa', NULL, '(818) 919-9669', NULL, 90046, NULL, 'Massage', NULL, NULL, '8178 W. Sunset Blvd', NULL, 0, 'http://www.oasisrelaxspa.com/index.htm', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(8, 'oak grove', 'cali', 'san jo', ' us', NULL, '408-923-4956', NULL, NULL, 'oakgrove@gmail.com', 'shopping#fgdfhh#cmjcn', NULL, ' we erh sdh dfh rh h h fg adh zh zh s sj rj j srj srj sjs tj sj jj yjyjyjyjjhj dxg j hjgnnbnb g gh g ghg gj xgfj xghghghghghghgh ghg g ghghghgh gh ghg ghghghghg ghgh  gghghdfh h ', '1111 oak grove', 'grasshopit_BJ2ASQFU__SBXWO3HFKTP056P5Z4TMC54CFY5VO3WHFPE6UV.jpg', 0, ' www.www.com', 1, 0, 2, 0, '2014-10-28 05:59:14'),
(9, 'Ori&#39;s Automotive Service Center', '1301 N Highland Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(10, 'Old Plank Sailing Adventures', '14003 Palawan Way', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(11, 'Olive Infosys', 'Bagmati', NULL, NULL, NULL, '9849806771', NULL, NULL, 'cooldude_ar2006@yahoo.com', 'IT', NULL, NULL, 'kathmandu', 'grasshopit_0TAG0B6CMGV3X7R7UV9G4IUGYJ1W1_4JF0M46V061SOE2VZO.jpg', 0, NULL, 1, 0, 3, 0, '2014-11-09 23:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `business_p`
--

CREATE TABLE IF NOT EXISTS `business_p` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `business_p`
--

INSERT INTO `business_p` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Public Beer Wine Shop', 'CA', 'Long Beach', 'usa', NULL, '(562) 499-0415', NULL, 90802, NULL, 'Beer, Wine & Spirits, Pubs, Barbeque, Breweries, Gastropubs', NULL, NULL, '121 W 4th St', NULL, 0, 'http://www.publicbeerwineshop.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'Pints Sports Bar and Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 494-7593', NULL, 90803, NULL, 'Sports Bars', NULL, NULL, '5755 E Pacific Coast Hwy', NULL, 0, 'http://www.pintslb.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, 'Parkers&amp;#39; Lighthouse', 'CA', 'Long Beach', 'usa', NULL, '(562) 432-6500', NULL, 90802, NULL, 'Seafood, Bars, American (Traditional)', NULL, NULL, '435 Shoreline Village Dr', NULL, 0, 'http://www.parkerslighthouse.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(4, 'PBS Pub &amp;amp; Company', 'CA', 'Long Beach', 'usa', NULL, '(562) 427-9646', NULL, 90806, NULL, 'Pubs', NULL, NULL, '464 W Willow St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(5, 'PCH Club', 'CA', 'Long Beach', 'usa', NULL, '(562) 596-2332', NULL, 90803, NULL, 'Lounges', NULL, NULL, '6285 Pacific Coast Hwy', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(6, 'Poor Richard&amp;#39;s Cocktails', 'CA', 'Long Beach', 'usa', NULL, '(562) 596-0882', NULL, 90815, NULL, 'Dive Bars', NULL, NULL, '6412 E Stearns St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(7, 'Paradise LB', 'CA', 'Long Beach', 'usa', NULL, '(562) 423-9221', NULL, 90805, NULL, 'Cocktail Bars', NULL, NULL, '4911 Long Beach Blvd', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(8, 'Panama Joe&amp;#39;s Grill &amp;amp; Cantina', 'CA', 'Long Beach', 'usa', NULL, '(562) 434-7417', NULL, 90803, NULL, 'Mexican, Sports Bars', NULL, NULL, '5100 E 2nd St', NULL, 0, 'http://www.panamajoescantina.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(9, 'Papalucci&amp;#39;s Italian Ristorante', 'CA', 'Long Beach', 'usa', NULL, '(562) 434-4454', NULL, 90803, NULL, 'Italian, Bars, Pizza', NULL, NULL, '4611 E 2nd St', NULL, 0, 'http://www.papaluccis.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(10, 'Panvimarn Thai Cuisine', 'CA', 'Long Beach', 'usa', NULL, '(562) 425-2601', NULL, 90808, NULL, 'Thai', NULL, NULL, '4101 Bellflower Blvd Ste C', NULL, 0, 'http://panvimarn.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(11, 'Parkers&#39; Lighthouse', '435 Shoreline Village Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(12, 'PBS Pub &amp; Company', '464 W Willow St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(13, 'Poor Richard&#39;s Cocktails', '6412 E Stearns St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(14, 'Panama Joe&#39;s Grill &amp; Cantina', '5100 E 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(15, 'Papalucci&#39;s Italian Ristorante', '4611 E 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(16, 'Pho-Siam Thai Spa', '1525 Pizarro St', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:57'),
(17, 'Pho Siam Thai Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 484-8484', NULL, 90026, NULL, 'Skin Care, Day Spas', NULL, NULL, '1525 Pizarro St', NULL, 0, 'http://www.phosiam.com', 1, 0, 1, 1, '2014-10-28 08:55:53'),
(18, 'Piechowski John Automotive', '3625 Overland Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(19, 'Pacific Auto Service', '4225 Santa Monica Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(20, 'Palmer Tire and Auto Repair', '6128 N Figueroa St', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(21, 'Piechowski Auto Center', '3664 Overland Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(22, 'Pacific Sailing &amp; Catalina Charters', '419 Shoreline Village Dr Ste S', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(23, 'Pelican Joe&#39;s Boat Rentals', '186 N Marina Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(24, 'Port&#39;s O Call Spirit Cruises', '1199 Nagoya Way 77 Berth', 'San Pedro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(25, 'Piranha Jet Ski Rental Service', '15310 Lakewood Blvd Ste A', 'Bellflower', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_packages`
--

CREATE TABLE IF NOT EXISTS `business_packages` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `nickname` varchar(16) DEFAULT NULL,
  `price` smallint(6) NOT NULL DEFAULT '39',
  `business_info` tinyint(1) NOT NULL DEFAULT '1',
  `cats` tinyint(4) NOT NULL DEFAULT '1',
  `social_links` tinyint(4) NOT NULL DEFAULT '1',
  `images` smallint(6) NOT NULL DEFAULT '3',
  `resolve_hours` tinyint(4) NOT NULL DEFAULT '24',
  `videos` tinyint(4) DEFAULT '0',
  `announcements` tinyint(1) NOT NULL DEFAULT '0',
  `featured_bar` tinyint(1) NOT NULL DEFAULT '0',
  `open_hours` tinyint(1) NOT NULL DEFAULT '0',
  `allow_competitor_ads` tinyint(1) NOT NULL DEFAULT '1',
  `targeted_ads` tinyint(1) NOT NULL DEFAULT '0',
  `price_indicator` tinyint(1) NOT NULL DEFAULT '0',
  `highlighted` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `business_packages`
--

INSERT INTO `business_packages` (`sno`, `name`, `nickname`, `price`, `business_info`, `cats`, `social_links`, `images`, `resolve_hours`, `videos`, `announcements`, `featured_bar`, `open_hours`, `allow_competitor_ads`, `targeted_ads`, `price_indicator`, `highlighted`, `date_added`) VALUES
(1, 'Founder', 'founder', 39, 1, 1, 1, 3, 24, 0, 0, 0, 0, 0, 0, 0, 0, '2014-11-01 19:17:26'),
(2, 'Early Adopter', 'adopter', 69, 1, 3, 3, 20, 48, 1, 1, 1, 1, 0, 1, 1, 0, '2014-11-01 19:17:26'),
(3, 'Early Ambassador', 'ambassador', 139, 1, 4, 5, 1024, 72, 3, 1, 1, 1, 0, 1, 1, 1, '2014-11-01 19:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `business_q`
--

CREATE TABLE IF NOT EXISTS `business_q` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `business_q`
--

INSERT INTO `business_q` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Quinn&amp;#39;s Pub and Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 434-2606', NULL, 90803, NULL, 'Pubs, American (Traditional), Burgers', NULL, NULL, '200 Nieto Ave Ste A', NULL, 0, 'http://quinnslongbeach.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'Que Sera', 'CA', 'Long Beach', 'usa', NULL, '(562) 599-6170', NULL, 90804, NULL, 'Dive Bars, Wine Bars', NULL, NULL, '1923 E 7th St', NULL, 0, 'http://www.thequesera.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(3, 'Quinn&#39;s Pub and Grill', '200 Nieto Ave Ste A', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(4, 'Quality Plus &amp; Kevork Body Shop', '7551 Beverly Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `business_r`
--

CREATE TABLE IF NOT EXISTS `business_r` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `business_r`
--

INSERT INTO `business_r` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Rato Pati', 'Baneshwor', ' Kathmandu\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Roundin&#39; 3rd', '4133 E Anaheim St', 'Long Beach', NULL, NULL, NULL, NULL, 90804, NULL, NULL, NULL, NULL, '4133 E Anaheim St', NULL, 0, 'http://www.roundin3rd.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(3, 'Riley&#39;s Belmont Shore', '5331 E Second St', 'Long Beach', NULL, NULL, NULL, NULL, 90803, NULL, NULL, NULL, NULL, '5331 E Second St', NULL, 0, 'http://www.rileyslb.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(4, 'Roxanne&#39;s Cocktail Lounge &amp; Latin Grill', '1115 E Wardlow Rd', 'Long Beach', NULL, NULL, NULL, NULL, 90807, NULL, NULL, NULL, NULL, '1115 E Wardlow Rd', NULL, 0, 'http://www.roxanneslounge.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(5, 'Roundin&amp;#39; 3rd', 'CA', 'Long Beach', 'usa', NULL, '(562) 498-9900', NULL, 90804, NULL, 'American (Traditional), Sports Bars', NULL, NULL, '4133 E Anaheim St', NULL, 0, 'http://www.roundin3rd.com', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(6, 'Riley&amp;#39;s Belmont Shore', 'CA', 'Long Beach', 'usa', NULL, '(562) 856-1612', NULL, 90803, NULL, 'Burgers, Bars, American (Traditional)', NULL, NULL, '5331 E Second St', NULL, 0, 'http://www.rileyslb.com', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(7, 'Roxanne&amp;#39;s Cocktail Lounge &amp;amp; Latin Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 426-4777', NULL, 90807, NULL, 'Lounges, Latin American, Cocktail Bars, Cocktail Bars, Piano Bars', NULL, NULL, '1115 E Wardlow Rd', NULL, 0, 'http://www.roxanneslounge.com', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(8, 'Red Room', 'CA', 'Long Beach', 'usa', NULL, '(562) 432-4241', NULL, 90802, NULL, 'Sports Bars', NULL, NULL, '1227 E 4th St', NULL, 0, 'http://www.redroomrocks.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(9, 'Rebel Bite', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-0555', NULL, 90802, NULL, 'Pizza, American (New), Pubs', NULL, NULL, '649 E Broadway', NULL, 0, 'http://www.rebelbite.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(10, 'Reno Room', 'CA', 'Long Beach', 'usa', NULL, '(562) 438-4590', NULL, 90803, NULL, 'Dive Bars, Mexican', NULL, NULL, '3400 E Broadway', NULL, 0, 'http://www.therenoroom.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(11, 'Rocks', 'CA', 'Long Beach', 'usa', NULL, '(562) 427-8023', NULL, 90807, NULL, 'Lounges, Dive Bars, Cocktail Bars', NULL, NULL, '3445 Long Beach Blvd', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(12, 'Rooftop 360', 'CA', 'Long Beach', 'usa', NULL, '(562) 436-1047', NULL, 90802, NULL, 'Swimming Pools, Lounges, Venues & Event Spaces', NULL, NULL, 'Avia Hotel 285 Bay St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(13, 'Raindrop Bodyworks', 'CA', 'Los Angeles', 'usa', NULL, '(310) 202-0056', NULL, 90034, NULL, 'Massage, Day Spas, Skin Care', NULL, NULL, '3500 Overland Ave Ste 230', NULL, 0, 'http://www.raindropbodyworks.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(14, 'Royal Thai Massage', 'CA', 'Los Angeles', 'usa', NULL, '(323) 734-0662', NULL, 90019, NULL, 'Massage', NULL, NULL, '3600 W Olympic Blvd Ste 3', NULL, 0, 'http://www.royalthaimassage.net', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(15, 'Rest &amp; Relax Bodyworks', '11257 National Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(16, 'Refuge Salon and Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 684-6451', NULL, 90026, NULL, 'Hair Salons, Skin Care, Nail Salons, American (New), Pizza, Bakeries, American (New), Coffee & Tea', NULL, NULL, '1815 W Sunset Blvd', NULL, 0, 'http://www.refugebeauty.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(17, 'Renew Thai spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 380-7524', NULL, 90028, NULL, 'Day Spas, Massage', NULL, NULL, '5638 Hollywood Blvd', NULL, 0, 'http://www.renewthaispa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(18, 'RobertsonBLVD Medspa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 276-1080', NULL, 90048, NULL, 'Medical Spas, Skin Care, Laser Hair Removal', NULL, NULL, '317 S Robertson Blvd', NULL, 0, 'http://www.robertsonblvdmedspa.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(19, 'Rest &amp;amp; Relax Bodyworks', 'CA', 'Los Angeles', 'usa', NULL, '(310) 479-1234', NULL, 90064, NULL, 'Massage, Chiropractors, Skin Care', NULL, NULL, '11257 National Blvd', NULL, 0, 'http://www.restandrelaxbodyworks.com/', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(20, 'RDBLA Five Star Tires', '7318 W Sunset Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(21, 'Right Solution', '8664 Venice Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(22, 'Rick&#39;s Auto Body', '1804 Hyperion Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(23, 'Rocket Boat', '423 Shoreline Village Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(24, 'Rubber Duck Tours', 'Shoreline Drive and Pine Ave', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(25, 'Rainbow Harbor and Marina', '200 Aquarium Way', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_s`
--

CREATE TABLE IF NOT EXISTS `business_s` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `business_s`
--

INSERT INTO `business_s` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(3, 'Stark Foundation Pvt. Ltd.', 'NC', 'Charlotte', ' US', NULL, NULL, NULL, NULL, ' info@stark.com', NULL, NULL, ' About Us', '', 'grasshopit_3YVFFD0BYNJSSV0HNB91K8N8HOJOATL62Z1BN0CRVX3_U0LL.jpg', 0, ' http://www.starkfoundation.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(4, 'Sikhar Shoe', ' Banasthali', ' Kathmandu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(5, 'Seoulos Fusion Grille', '8915 W Sunset Blvd', 'West Hollywood CA 90069', NULL, NULL, '(310) 360-0155', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, NULL, 0, 0, 1, 1, '0000-00-00 00:00:00'),
(15, 'Sunkoshi Hp', NULL, NULL, NULL, NULL, '9841187158', NULL, NULL, 'sun@koshi.com', 'hydropower', NULL, NULL, 'Kathmandu, Nepal', NULL, 0, NULL, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(16, 'Sunshine Traders', NULL, NULL, NULL, NULL, '9841187158', NULL, NULL, 'sunshine@traders.com', 'trading', NULL, NULL, 'Kathmandu, Nepal', NULL, 0, NULL, 1, 0, 0, 0, '0000-00-00 00:00:00'),
(17, 'Sample Run Foundation', NULL, NULL, NULL, NULL, '9841187158', NULL, NULL, 'arjun10c@hotmail.com', 'gaming', NULL, NULL, 'Kathmandu, Nepal', NULL, 0, NULL, 1, 0, 2, 0, '0000-00-00 00:00:00'),
(19, 'Simmzy&amp;#39;s Long Beach', 'CA', 'Long Beach', 'usa', NULL, '(562) 439-5590', NULL, 90803, NULL, 'Gastropubs', NULL, NULL, '5271 E 2nd St', NULL, 0, 'http://www.simmzys.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(20, 'Sababa Restaurant &amp;amp; Lounge', 'CA', 'Long Beach', 'usa', NULL, '(562) 252-3572', NULL, 90803, NULL, 'Lounges, Mediterranean, American (New)', NULL, NULL, '6527 E Pacific Coast Hwy', NULL, 0, 'http://www.gosababa.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(21, 'Sgt Pepper&amp;#39;s Dueling Pianos', 'CA', 'Long Beach', 'usa', NULL, '(562) 499-4600', NULL, 90802, NULL, 'Music Venues, Bars, American (Traditional)', NULL, NULL, '91 S Pine Ave', NULL, 0, 'http://www.pepperspianos.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(22, 'Sir Winston&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 499-1657', NULL, 90802, NULL, 'Lounges, Steakhouses, Seafood, Hotels, Tours, Bars, Breakfast & Brunch, Seafood, Lounges', NULL, NULL, '1126 Queens Hwy The Queen Mary', NULL, 0, 'http://www.queenmary.com/dining-bars/sir-winstons-restaurant-lounge/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(23, 'Shenanigans Irish Pub and Grille', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-3734', NULL, 90802, NULL, 'Irish, Pubs', NULL, NULL, '423-A Shoreline Village Dr', NULL, 0, 'http://shenaniganslb.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(24, 'Shillelagh', 'CA', 'Long Beach', 'usa', NULL, '(562) 916-3288', NULL, 90814, NULL, 'American (New)', NULL, NULL, '2742 E 4th St', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(25, 'SIP', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-5900', NULL, 90802, NULL, 'Lounges', NULL, NULL, '111 E Ocean Blvd', NULL, 0, 'http://www.siplongbeach.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(26, 'Shannon&amp;#39;s on Pine', 'CA', 'Long Beach', 'usa', NULL, '(562) 436-4363', NULL, 90802, NULL, 'Pubs, American (Traditional)', NULL, NULL, '209 Pine Ave', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(27, 'Sweetwater Saloon', 'CA', 'Long Beach', 'usa', NULL, '(562) 432-7044', NULL, 90802, NULL, 'Gay Bars, Dive Bars', NULL, NULL, '1201 E Broadway', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(28, 'Simmzy&#39;s Long Beach', '5271 E 2nd St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(29, 'Sababa Restaurant &amp; Lounge', '6527 E Pacific Coast Hwy', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(30, 'Sgt Pepper&#39;s Dueling Pianos', '91 S Pine Ave', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(31, 'Sir Winston&#39;s', '1126 Queens Hwy The Queen Mary', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(32, 'Shannon&#39;s on Pine', '209 Pine Ave', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(33, 'Spaahbulous and More', 'CA', 'Los Angeles', 'usa', NULL, '(213) 596-7421', NULL, 90012, NULL, 'Massage, Reflexology, Day Spas', NULL, NULL, '668 N Spring St Ste 223', NULL, 0, 'http://spanmore.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(34, 'Shape House', 'CA', 'Los Angeles', 'usa', NULL, '(855) 567-2346', NULL, 90004, NULL, 'Day Spas', NULL, NULL, '434 N Larchmont Blvd', NULL, 0, 'http://www.shapehouse.com/', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(35, 'Sparadise La Brea', 'CA', 'Los Angeles', 'usa', NULL, '(323) 857-0228', NULL, 90019, NULL, 'Massage, Day Spas, Massage Therapy', NULL, NULL, '1251 S La Brea Ave', NULL, 0, 'http://www.sparadiseonlabrea.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(36, 'Sparadise', 'CA', 'Los Angeles', 'usa', NULL, '(323) 465-2833', NULL, 90028, NULL, 'Massage, Day Spas', NULL, NULL, '5909 Hollywood Blvd', NULL, 0, 'http://www.sparadisethaispa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(37, 'Sugar Me', 'CA', 'Los Angeles', 'usa', NULL, '(310) 430-5157', NULL, 90046, NULL, 'Hair Removal, Skin Care, Eyelash Service, Massage, Reflexology, Counseling & Mental Health', NULL, NULL, '8000 Sunset Blvd 3rd Fl', NULL, 0, 'http://www.lasugaring.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(38, 'Sassy Ladies Beauty Bar', 'CA', 'Los Angeles', 'usa', NULL, '(424) 227-9505', NULL, 90045, NULL, 'Hair Removal, Skin Care', NULL, NULL, '6218 B Manchester Ave', NULL, 0, 'http://www.sassyladiesbeautybar.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(39, 'Spa Essencia', 'CA', 'Los Angeles', 'usa', NULL, '(323) 733-8889', NULL, 90019, NULL, 'Day Spas, Massage, Mexican', NULL, NULL, '3523 W Olympic Blvd', NULL, 0, 'http://essenciala.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(40, 'Self Indulgence Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 839-8322', NULL, 90064, NULL, 'Massage, Eyelash Service, Skin Care, Hair Removal, Massage, Skin Care', NULL, NULL, '10602 W Pico Blvd', NULL, 0, 'http://www.selfindulgence-spa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(41, 'Spa at the Omni Los Angeles Hotel', 'CA', 'Los Angeles', 'usa', NULL, '(213) 300-0456', NULL, 90012, NULL, 'Day Spas', NULL, NULL, '251 S Olive St', NULL, 0, 'http://www.omnihotels.com/FindAHotel/LosAngelesCaliforniaPlaza/Spa.aspx', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(42, 'Serene Thai Massage', 'CA', 'Los Angeles', 'usa', NULL, '(213) 739-9990', NULL, 90010, NULL, 'Massage', NULL, NULL, '3959 Wilshire Blvd Ste B27', NULL, 0, '', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(43, 'Skin Camp', 'CA', 'Los Angeles', 'usa', NULL, '(310) 753-3442', NULL, 90048, NULL, 'Skin Care, Day Spas', NULL, NULL, '6530 Orange St', NULL, 0, 'http://www.skincamp.net', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(44, 'Season Day Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 660-0505', NULL, 90039, NULL, 'Massage', NULL, NULL, '3131 Glendale Blvd', NULL, 0, 'http://www.seasondayspa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(45, 'Soothe', '', '', 'usa', NULL, '(310) 889-0200', NULL, 0, NULL, 'Massage, Massage Therapy', NULL, NULL, '', NULL, 0, 'http://soothe.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(46, 'Satin Soles', 'CA', 'Los Angeles', 'usa', NULL, '(310) 601-7534', NULL, 90048, NULL, 'Nail Salons, Massage', NULL, NULL, '7924 W 3rd St', NULL, 0, 'http://www.satinsolessalon.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(47, 'S &amp; S Auto Repair - Honda &amp; Acura', '1512 S La Cienega Blvd Ste 4', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(48, 'Seng&#39;s Auto Repair', '1165 W Sunset Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(49, 'Sunset Gondola', '16370 Pacific Coast Hwy', 'Huntington Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(50, 'Shoreliner Cruises', '141 W 22nd St', 'San Pedro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(51, 'Sunset Kayak Rentals', '16862 Pacific Coast Hwy', 'Sunset Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(52, 'Schooner Tiama Sailing Adventures', '6475 E Pacific Coast Hwy Ste 422', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(53, 'Shoreline Park', 'Aquarium Way', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(54, 'Shoreline Village', '401-435 Shoreline Village Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(55, 'Spirit Cruises At Shoreline Village', '429 Shoreline Village Dr Ste 100', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(56, 'Sailing Pro Shop', '885 W 16th St', 'Newport Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(57, 'sandeep', NULL, NULL, NULL, NULL, '9841775909', NULL, NULL, 'c@ntech.com', 'food', NULL, NULL, 'Milijuli Chwok, Shantinagar Kathmandu', NULL, 0, NULL, 1, 0, 2, 0, '2014-11-08 14:27:37'),
(58, 'Sandeep Giri', NULL, NULL, NULL, NULL, '9849806771', NULL, NULL, 'sumit@cms.co.uk', 'help', NULL, NULL, 'kathmandu', NULL, 0, NULL, 1, 0, 2, 0, '2014-11-09 22:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `business_t`
--

CREATE TABLE IF NOT EXISTS `business_t` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `business_t`
--

INSERT INTO `business_t` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'The Stache', 'CA', 'Long Beach', 'usa', NULL, '(562) 606-2529', NULL, 90802, NULL, 'Bars', NULL, NULL, '941 E 4th St', NULL, 0, 'http://www.thestachebar.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'The Blind Donkey', 'CA', 'Long Beach', 'usa', NULL, '(562) 247-1511', NULL, 90802, NULL, 'Cocktail Bars, Pubs, Wine Bars', NULL, NULL, '149 Linden Ave Ste B100', NULL, 0, 'http://www.theblinddonkey.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(3, 'The Attic', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-0153', NULL, 90803, NULL, 'American (Traditional), Bars', NULL, NULL, '3441 E Broadway', NULL, 0, 'http://www.theatticonbroadway.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(4, 'The Red Leprechaun', 'CA', 'Long Beach', 'usa', NULL, '(562) 343-5560', NULL, 90804, NULL, 'Pubs, Breakfast & Brunch, Fish & Chips', NULL, NULL, '4000 E Anaheim St', NULL, 0, 'http://redleprechaun.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(5, 'The Stinkin Possum Tavern', 'CA', 'Long Beach', 'usa', NULL, '', NULL, 90808, NULL, 'Karaoke, Pubs', NULL, NULL, '6700 Parapet', NULL, 0, '', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(6, 'Thirsty Isle', 'CA', 'Long Beach', 'usa', NULL, '(562) 421-3571', NULL, 90808, NULL, 'Pubs, Dive Bars', NULL, NULL, '4317 E Carson St', NULL, 0, 'http://www.thirstyisle.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(7, 'The Exhibition Room', 'CA', 'Long Beach', 'usa', NULL, '(562) 826-2940', NULL, 90807, NULL, 'Cocktail Bars, Piano Bars', NULL, NULL, '1101 E Wardlow Rd', NULL, 0, 'http://www.theexhibitionroom.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(8, 'The Federal Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 435-2000', NULL, 90802, NULL, 'Bars, American (New)', NULL, NULL, '102 Pine Ave', NULL, 0, 'http://www.thefederalbar.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(9, 'The Annex', 'CA', 'Long Beach', 'usa', NULL, '(562) 597-0560', NULL, 90815, NULL, 'Bars', NULL, NULL, '4300 E Stearns St', NULL, 0, '', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(10, 'The Pike Bar &amp; Fish Grill', '1836 E 4th St', 'Long Beach', NULL, NULL, NULL, NULL, 90802, NULL, NULL, NULL, NULL, '1836 E 4th St', NULL, 0, 'http://www.pikelongbeach.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(11, 'The Auld Dubliner', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-8300', NULL, 90802, NULL, 'Irish, Pubs, Music Venues', NULL, NULL, '71 S Pine Ave', NULL, 0, 'http://www.aulddubliner.com', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(12, 'Tavern On 2', 'CA', 'Long Beach', 'usa', NULL, '(562) 856-4000', NULL, 90803, NULL, 'Gastropubs, American (New), Burgers', NULL, NULL, '5110 E 2nd St', NULL, 0, 'http://www.tavernon2.com/', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(13, 'The Pike Bar &amp;amp; Fish Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-4453', NULL, 90802, NULL, 'Bars, American (Traditional), Seafood', NULL, NULL, '1836 E 4th St', NULL, 0, 'http://www.pikelongbeach.com/', 1, 0, 1, 1, '2014-10-26 16:59:45'),
(14, 'The Red Barrel', 'CA', 'Long Beach', 'usa', NULL, '(562) 494-6400', NULL, 90815, NULL, 'Tapas/Small Plates, American (New), Wine Bars', NULL, NULL, '1940 Ximeno Ave', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(15, 'The Stave Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 612-4750', NULL, 90802, NULL, 'Pubs', NULL, NULL, '170 The Promenade N', NULL, 0, 'http://www.thestavebar.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(16, 'The Prospector', 'CA', 'Long Beach', 'usa', NULL, '(562) 438-3839', NULL, 90804, NULL, 'Dive Bars, Music Venues, American (New)', NULL, NULL, '2400 E 7th St', NULL, 0, 'http://www.prospectorlongbeach.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(17, 'The Social List', 'CA', 'Long Beach', 'usa', NULL, '(562) 433-5478', NULL, 90814, NULL, 'Modern European, Gastropubs, Tapas Bars', NULL, NULL, '2105 E 4th St', NULL, 0, 'http://www.thesociallistlb.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(18, 'Tantalum Restaurant', 'CA', 'Long Beach', 'usa', NULL, '(562) 431-1414', NULL, 90803, NULL, 'American (New), Bars', NULL, NULL, '6272 Pacific Coast Hwy', NULL, 0, 'http://www.tantalumrestaurant.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(19, 'The Pit Stop', 'CA', 'Long Beach', 'usa', NULL, '(562) 495-1475', NULL, 90899, NULL, 'Dive Bars', NULL, NULL, 'Pacific Coast Hwy and Magnolia', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(20, 'The Factory Gastrobar', 'CA', 'Long Beach', 'usa', NULL, '(562) 595-4020', NULL, 90807, NULL, 'Gastropubs, Spanish, American (New)', NULL, NULL, '4020 Atlantic Ave', NULL, 0, 'http://www.thefactorylb.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(21, 'Tequila Jack&amp;#39;s', 'CA', 'Long Beach', 'usa', NULL, '(562) 628-0454', NULL, 90802, NULL, 'Bars, Mexican', NULL, NULL, '407 Shoreline Village Dr', NULL, 0, 'http://www.tequilajacks.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(22, 'Tilted Kilt Pub &amp;amp; Eatery', 'CA', 'Long Beach', 'usa', NULL, '(562) 795-0163', NULL, 90803, NULL, 'American (Traditional), Pubs, Sports Bars', NULL, NULL, '6575 E Pacific Coast Hwy', NULL, 0, 'http://www.tiltedkilt.com/locations/longbeach/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(23, 'The Sky Room', 'CA', 'Long Beach', 'usa', NULL, '(562) 983-2703', NULL, 90802, NULL, 'Seafood, Steakhouses, Music Venues', NULL, NULL, '40 S Locust Ave', NULL, 0, 'http://www.theskyroom.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(24, 'The Gayborhood', 'CA', 'Long Beach', 'usa', NULL, '', NULL, 90802, NULL, 'Gay Bars', NULL, NULL, '760-1969 East Broadway', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(25, 'The Interlude', 'CA', 'Long Beach', 'usa', NULL, '(562) 597-2963', NULL, 90815, NULL, 'Dive Bars', NULL, NULL, '1710 Clark Ave', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(26, 'The Silver Fox', 'CA', 'Long Beach', 'usa', NULL, '(562) 439-6343', NULL, 90814, NULL, 'Gay Bars, Karaoke', NULL, NULL, '411 Redondo Ave', NULL, 0, 'http://www.silverfoxlongbeach.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(27, 'Tracy&amp;#39;s Bar &amp;amp; Grill', 'CA', 'Long Beach', 'usa', NULL, '(562) 421-1726', NULL, 90808, NULL, 'Karaoke, American (Traditional)', NULL, NULL, '5511 E Spring St', NULL, 0, 'http://www.tracysbarandgrill.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(28, 'The Crooked Duck', 'CA', 'Long Beach', 'usa', NULL, '(562) 494-5118', NULL, 90804, NULL, 'American (New), Breakfast & Brunch', NULL, NULL, '5096 E Pacific Coast Hwy', NULL, 0, 'http://www.thecrookedduck.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(29, 'The Mirage Cafe', 'CA', 'Long Beach', 'usa', NULL, '(562) 424-4774', NULL, 90807, NULL, 'Hookah Bars, Mediterranean', NULL, NULL, '539 E Bixby Rd', NULL, 0, 'http://www.themiragecafelb.com', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(30, 'The Breakfast Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 726-1700', NULL, 90802, NULL, 'Breakfast & Brunch', NULL, NULL, '70 Atlantic Ave', NULL, 0, 'http://www.the-breakfast-bar.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(31, 'The Boathouse on the Bay', 'CA', 'Long Beach', 'usa', NULL, '(562) 493-1100', NULL, 90803, NULL, 'Steakhouses, Seafood', NULL, NULL, '190 N Marina Dr', NULL, 0, 'http://boathouseonthebay.com/', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(32, 'Tequila Jack&#39;s', '407 Shoreline Village Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(33, 'Tilted Kilt Pub &amp; Eatery', '6575 E Pacific Coast Hwy', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(34, 'Tracy&#39;s Bar &amp; Grill', '5511 E Spring St', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-26 19:09:55'),
(35, 'ttt', NULL, NULL, NULL, NULL, '444', NULL, NULL, 'ttt@rrr', 'ttt', NULL, NULL, 'ttt', 'grasshopit__D03Q_MAV3779S_TJ5P2HEWKSN4EG8KHLXIC77M0_T6JMG04.jpg', 0, NULL, 1, 0, 0, 0, '2014-10-27 01:56:01'),
(36, 'The Raven', 'CA', 'Los Angeles', 'usa', NULL, '(323) 644-0240', NULL, 90039, NULL, 'Massage, Day Spas, Yoga', NULL, NULL, '2910 Rowena Ave', NULL, 0, 'http://www.theravenspa.com', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(37, 'Trilogy Spa', 'CA', 'Manhattan Beach', 'usa', NULL, '(310) 760-0044', NULL, 90266, NULL, 'Day Spas, Massage, Personal Shopping', NULL, NULL, '451 Manhattan Beach Blvd', NULL, 0, 'http://www.trilogyspa.com/', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(38, 'The Sweat Shop LA', 'CA', 'Los Angeles', 'usa', NULL, '(310) 956-2307', NULL, 90028, NULL, 'Day Spas', NULL, NULL, '1503 N Cahuenga Blvd', NULL, 0, 'http://www.thesweatshopla.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(39, 'The Delight Day Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 284-8678', NULL, 90039, NULL, 'Massage', NULL, NULL, '2334 Fletcher Dr', NULL, 0, 'http://www.thedelightdayspa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(40, 'Tao of Venus Wellness Center &amp; Spa', '3037 W Sunset Blvd', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(41, 'The Barai Day Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 644-1051', NULL, 90027, NULL, 'Day Spas', NULL, NULL, '2316 Hyperion Ave Ste A', NULL, 0, 'http://www.thebaraispa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(42, 'The Spa InterContinental', 'CA', 'Los Angeles', 'usa', NULL, '(310) 552-0425', NULL, 90067, NULL, 'Day Spas, Massage', NULL, NULL, 'Intercontinental Los Angeles 2151 Ave of the Stars, 2nd Fl', NULL, 0, 'http://www.interconspala.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(43, 'Thai Friendly Massage', 'CA', 'Los Angeles', 'usa', NULL, '(213) 394-4210', NULL, 90026, NULL, 'Massage', NULL, NULL, '1518 W Sunset Blvd', NULL, 0, '', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(44, 'Thai Sabai', 'CA', 'Los Angeles', 'usa', NULL, '(310) 801-3912', NULL, 90064, NULL, 'Massage, Medical Spas, Day Spas', NULL, NULL, '2306 Westwood Blvd', NULL, 0, 'http://www.thaisabai.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(45, 'TORQ', 'CA', 'Los Angeles', 'usa', NULL, '(323) 545-3868', NULL, 90042, NULL, 'Massage, Yoga, Nutritionists, Hair Salons, Massage, Day Spas, Acupuncture, Chiropractors, Chiropractors, Sports Medicine', NULL, NULL, '622 Milo Ter', NULL, 0, 'http://www.torqenterprises.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(46, 'TikitibÃ¼', '5560 S Centinela Ave Ste D', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 02:52:58'),
(47, 'Thai Aroma Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 446-7988', NULL, 90025, NULL, 'Massage', NULL, NULL, '1951 Westwood Blvd 2nd Fl', NULL, 0, 'http://www.thaiaromaspamassage.com/index.html', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(48, 'Top Thai Massage', 'CA', 'Los Angeles', 'usa', NULL, '(323) 663-3439', NULL, 90027, NULL, 'Massage, Day Spas', NULL, NULL, '5123 W Sunset Blvd Ste 213', NULL, 0, 'http://www.topthaimassage.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(49, 'Tranquility Body Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 842-9561', NULL, 90034, NULL, 'Massage, Waxing', NULL, NULL, '9925 Venice Blvd', NULL, 0, 'http://www.tranquilitybodyspa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(50, 'The Art Of You Holistic Center', 'CA', 'Los Angeles', 'usa', NULL, '(323) 906-1100', NULL, 90039, NULL, 'Day Spas, Massage, Skin Care', NULL, NULL, '2820 Glendale Blvd', NULL, 0, 'http://www.theartofyouhc.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(51, 'Touch Massage', 'CA', 'Los Angeles', 'usa', NULL, '(310) 659-8559', NULL, 90035, NULL, 'Massage, Skin Care', NULL, NULL, '822 S Robertson Blvd Ste 106', NULL, 0, 'http://www.touchmassage.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(52, 'Thai Massage Therapy', 'CA', 'Los Angeles', 'usa', NULL, '(323) 217-3962', NULL, 90210, NULL, 'Massage', NULL, NULL, '400 S. Beverly Dr. #102', NULL, 0, '', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(53, 'Thai House Massage', 'CA', 'Los Angeles', 'usa', NULL, '(213) 388-1555', NULL, 90006, NULL, 'Massage', NULL, NULL, '900 S Westmoreland Ave Suite 201', NULL, 0, '', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(54, 'Tao of Venus Wellness Center &amp;amp; Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 660-1200', NULL, 90026, NULL, 'Massage, Acupuncture, Fertility', NULL, NULL, '3037 W Sunset Blvd', NULL, 0, 'http://www.taoofvenus.com', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(55, 'Tikitib&Atilde;&frac14;', 'CA', 'Los Angeles', 'usa', NULL, '(310) 562-8228', NULL, 90066, NULL, 'Hair Removal, Skin Care, Massage', NULL, NULL, '5560 S Centinela Ave Ste D', NULL, 0, 'http://www.tikitibu.net', 1, 0, 1, 1, '2014-10-28 08:55:54'),
(56, 'Tilly&#39;s Marine, Inc', '16214 Pacific Coast Hwy', 'Huntington Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(57, 'The Queen Mary', '1126 Queens Hwy The Queen Mary', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(58, 'The Queen Mary&#39;s Dark Harbor', '1126 Queens Hwy The Queen Mary', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(59, 'Thursday 23rd April 2015', NULL, NULL, NULL, NULL, '9841775909', NULL, NULL, 'cwilliams300hp@gmail.com', 'food', NULL, NULL, 'Milijuli Chwok, Shantinagar Kathmandu', NULL, 0, NULL, 1, 0, 0, 0, '2014-11-08 13:14:28'),
(60, 'Test Mens grooming product', NULL, NULL, NULL, NULL, '9849806771', NULL, NULL, 'accounting@grasshopit.com', 'pubs', NULL, NULL, 'Shantinagar, Kathmandu', NULL, 0, NULL, 1, 0, 0, 0, '2014-11-08 14:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `business_u`
--

CREATE TABLE IF NOT EXISTS `business_u` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `business_u`
--

INSERT INTO `business_u` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Up Lounge', 'CA', 'Long Beach', 'usa', NULL, '(562) 983-2703', NULL, 90802, NULL, 'Lounges, Tapas Bars, Dance Clubs', NULL, NULL, '40 S Locust Ave', NULL, 0, 'http://www.theuplounge.com', 1, 0, 1, 1, '2014-10-26 17:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `business_v`
--

CREATE TABLE IF NOT EXISTS `business_v` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `business_v`
--

INSERT INTO `business_v` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'V Room', 'CA', 'Long Beach', 'usa', NULL, '(562) 437-4396', NULL, 90802, NULL, 'Pubs, Dive Bars', NULL, NULL, '918 E 4th St', NULL, 0, '', 1, 0, 1, 1, '0000-00-00 00:00:00'),
(2, 'Vermont Auto Center', '2241 S Vermont Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `business_w`
--

CREATE TABLE IF NOT EXISTS `business_w` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `business_w`
--

INSERT INTO `business_w` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Willmore Wine Bar', 'CA', 'Long Beach', 'usa', NULL, '(562) 492-5951', NULL, 90807, NULL, 'Wine Bars', NULL, NULL, '3848 Atlantic Ave', NULL, 0, '', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'Wi Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 487-2700', NULL, 90057, NULL, 'Day Spas, Massage, Skin Care', NULL, NULL, '2700 Wilshire Blvd', NULL, 0, 'http://www.wispausa.com/', 1, 0, 1, 1, '2014-10-28 02:52:57'),
(3, 'Wax Candy', 'CA', 'Los Angeles', 'usa', NULL, '(213) 228-2639', NULL, 90014, NULL, 'Day Spas, Waxing', NULL, NULL, '756 S Main St', NULL, 0, 'http://www.waxcandy.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(4, 'Wadee Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 938-0985', NULL, 90036, NULL, 'Massage', NULL, NULL, '637 S Fairfax Ave', NULL, 0, 'http://www.wadeespa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(5, 'Wilshire Massage', 'CA', 'Los Angeles', 'usa', NULL, '(323) 634-0835', NULL, 90036, NULL, 'Massage', NULL, NULL, '5474 Wilshire Blvd', NULL, 0, 'http://www.wilshiremassage.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(6, 'Wellness Spa', 'CA', 'Los Angeles', 'usa', NULL, '(323) 665-1937', NULL, 90027, NULL, 'Day Spas, Skin Care, Massage', NULL, NULL, '1937 Hillhurst Ave', NULL, 0, 'http://www.wellnesspa.us', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(7, 'Wilshire Spa', 'CA', 'Los Angeles', 'usa', NULL, '(213) 387-0281', NULL, 90010, NULL, 'Massage', NULL, NULL, '3442 Wilshire Blvd Ste 100', NULL, 0, 'http://www.wilshirespa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(8, 'Wat Po Thai Spa', 'CA', 'Los Angeles', 'usa', NULL, '(310) 652-8424', NULL, 90069, NULL, 'Massage, Massage, Day Spas, Massage', NULL, NULL, '848 N La Cienega Blvd Ste 201', NULL, 0, 'http://watpothaispa.com', 1, 0, 1, 1, '2014-10-28 02:52:58'),
(9, 'West Hollywood Automotive Service Center', '5570 Melrose Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(10, 'WM Auto Service', '4810 McConnell Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33'),
(11, 'Wayward Captain Watersports', '2406 Newport Blvd', 'Newport Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23'),
(12, 'West Marine', '251 N Marina Dr', 'Long Beach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-29 06:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `business_x`
--

CREATE TABLE IF NOT EXISTS `business_x` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `business_y`
--

CREATE TABLE IF NOT EXISTS `business_y` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `business_y`
--

INSERT INTO `business_y` (`sno`, `name`, `state`, `city`, `country`, `mobile`, `telephone`, `fax`, `postal`, `email`, `categories`, `tags`, `about`, `address`, `logo`, `price_range`, `website`, `is_published`, `is_suspended`, `package_id`, `admin_added`, `date_added`) VALUES
(1, 'Yard House', 'CA', 'Long Beach', 'usa', NULL, '(562) 628-0455', NULL, 90802, NULL, 'American (New)', NULL, NULL, '401 Shoreline Village Dr', NULL, 0, 'http://www.yardhouse.com/Default.aspx', 1, 0, 1, 1, '2014-10-26 17:00:28'),
(2, 'Yosemite Auto Body Shop', '1923 S Vermont Ave', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:32'),
(3, 'Yoon&#39;s Auto Center Inc.', '3824 W 6th St', 'Los Angeles', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, 1, '2014-10-28 09:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `business_z`
--

CREATE TABLE IF NOT EXISTS `business_z` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `state` varchar(512) DEFAULT NULL,
  `city` varchar(64) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `mobile` varchar(128) DEFAULT NULL,
  `telephone` varchar(128) DEFAULT NULL,
  `fax` varchar(128) DEFAULT NULL,
  `postal` int(11) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `about` text,
  `address` text,
  `logo` varchar(64) DEFAULT NULL,
  `price_range` smallint(6) NOT NULL DEFAULT '0',
  `website` varchar(256) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `package_id` smallint(6) NOT NULL DEFAULT '1',
  `admin_added` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_a`
--

CREATE TABLE IF NOT EXISTS `media_a` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `media_a`
--

INSERT INTO `media_a` (`sno`, `business_id`, `media_type`, `media_name`, `date_created`) VALUES
(5, '2', 'images', 'grasshopit_OVIOIL2L_9MYTP95NV8RJNO285YO06ZWDQ46DMI0R_DUELW0.jpg', '2014-09-14 14:48:29'),
(6, '2', 'images', 'grasshopit_TG81WJLB2Q4D801M_9KE0DU71F0HOCAOSW05W87GM42XWJW3.png', '2014-09-14 14:48:58'),
(7, '2', 'images', 'grasshopit_LHZ4SJT0I1K52_UHMYAYG7MENNPXBOX_XO8KC86RWMFLWFU3.jpg', '2014-09-14 14:49:12'),
(8, '2', 'images', 'grasshopit_9HNDEZT40OAURTH0F3KZKML908T8AVCAAJJ2J7HUPNF0M_H5.jpg', '2014-09-14 14:54:14'),
(27, '2', 'images', 'grasshopit_WJTPQWTL55WR5WS3_FBMU81ATSN39EZT9RHG01Z2RS6DLFRJ.gif', '2014-10-10 12:11:41'),
(28, '2', 'images', 'grasshopit_PGB_FAOOR_EP1_84FQT10_Y_289USTEQ9C2QT3ZSIIS0N796.jpg', '2014-10-10 12:11:41'),
(29, '2', 'images', 'grasshopit_BFYAPOQ04D22MYUMHZLTVM2NYK02W71YZUW_9360Y0O0ATYA.jpg', '2014-10-10 12:11:41'),
(30, '2', 'images', 'grasshopit_K0VRQYZ06B_YYXLHC3I2F0EILW_ORFUNBATAE0KO5YOHTGUU.jpg', '2014-10-10 12:11:41'),
(31, '2', 'images', 'grasshopit_I1XMH7BOVC06_WKWW7KPPTXPV63SCQVUBTZW7Y3QYITDXYXR.jpg', '2014-10-10 12:11:42'),
(32, '2', 'images', 'grasshopit_UP3KWNQ0_9GFVTJFLILY3M0B967L1FL7EKMY8TRFF9BC56YL.jpg', '2014-10-13 10:51:52'),
(33, '2', 'images', 'grasshopit_3R0J04U5OJ_Y54TLO3WZ9MDHQ_14394EAP4_7EELUOK0ZLXV.jpg', '2014-10-13 10:52:07'),
(34, '2', 'images', 'grasshopit_B3ICRIJ1J27LY8473F0N61JTCMJSXIHFZ56SS00MEIIZ37GQ.gif', '2014-10-19 17:41:23'),
(35, '2', 'images', 'grasshopit_M9L3_NGIB171A_TZVCNUX4P2WMA1PQP8TCU24F5072NFP1NY.gif', '2014-10-19 18:25:06'),
(56, '1', 'images', 'grasshopit_3ZTJBQ2PJO4046N74KFHSDYY634MM1EFBQODDJK8_ZQ0DDWN.jpg', '2014-11-15 17:40:07'),
(57, '1', 'images', 'grasshopit_N9R661VCY63B932V08DW60XG5V5KA_XZ1ORLCFLLI0UQLWCX.jpg', '2014-11-15 17:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `media_b`
--

CREATE TABLE IF NOT EXISTS `media_b` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_c`
--

CREATE TABLE IF NOT EXISTS `media_c` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media_c`
--

INSERT INTO `media_c` (`sno`, `business_id`, `media_type`, `media_name`, `date_created`) VALUES
(1, '23', 'images', 'grasshopit_FDI02EGZN0ONQ_NMD_J_GAJU23UV30PLD8MGM0GA02XQELCR.jpg', '2014-10-28 07:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `media_d`
--

CREATE TABLE IF NOT EXISTS `media_d` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `media_d`
--

INSERT INTO `media_d` (`sno`, `business_id`, `media_type`, `media_name`, `date_created`) VALUES
(1, '6', 'images', 'grasshopit_MZV7UVGN3N_DPAART_F7AG84EJOQ9_TTZP1OLHCP4M5U_HGV.PNG', '2014-10-28 03:48:01'),
(2, '6', 'images', 'grasshopit_EVZTC7YRRMHYHARH0T6LBIAG5H85ZQXDMW5Z41QWN5U5DMND.jpg', '2014-10-28 03:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `media_e`
--

CREATE TABLE IF NOT EXISTS `media_e` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_f`
--

CREATE TABLE IF NOT EXISTS `media_f` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_g`
--

CREATE TABLE IF NOT EXISTS `media_g` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_h`
--

CREATE TABLE IF NOT EXISTS `media_h` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_i`
--

CREATE TABLE IF NOT EXISTS `media_i` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_j`
--

CREATE TABLE IF NOT EXISTS `media_j` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_k`
--

CREATE TABLE IF NOT EXISTS `media_k` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_l`
--

CREATE TABLE IF NOT EXISTS `media_l` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `media_l`
--

INSERT INTO `media_l` (`sno`, `business_id`, `media_type`, `media_name`, `date_created`) VALUES
(1, '25', 'images', 'grasshopit_3VWZP0S2NNAH0X9B35Q_BG0QZ3X4JP6MK0LA0D_O0P61NFEO.PNG', '2014-10-31 03:34:54'),
(2, '25', 'images', 'grasshopit_I2OTLPKLQHN90VWWVC5WQHGR5MUP27EK92DUS1BJL1SSUJPP.jpg', '2014-10-31 03:36:57'),
(3, '25', 'images', 'grasshopit__RHR90IBO_4RHKBQNPGASXT_VM4P6QF5IXURZD5JL8A3TMUB.jpg', '2014-10-31 03:37:09'),
(4, '25', 'images', 'grasshopit_R3OBSSVCD55MMP8OSU4_E1PLBPNMWN7IRTTJLP_YU3LHTT5M.jpg', '2014-10-31 03:38:39'),
(5, '25', 'images', 'grasshopit_O0J0_9NKZA7QYB_P76_VXAUREA684_USLEPUNDFHOM_M0MC7.jpg', '2014-10-31 03:38:47'),
(6, '25', 'images', 'grasshopit_QL1NVSA96IH0R0ZDMO792MRQ_3_BNKJD8I04AABITSPL3OYR.jpg', '2014-10-31 03:39:07'),
(7, '25', 'images', 'grasshopit_D6_FTT65TEEG1YY9GZAW9QA3J3OKTMC7T_MM2TUW08CB6BKN.jpg', '2014-10-31 03:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `media_m`
--

CREATE TABLE IF NOT EXISTS `media_m` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_n`
--

CREATE TABLE IF NOT EXISTS `media_n` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_numeric`
--

CREATE TABLE IF NOT EXISTS `media_numeric` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_o`
--

CREATE TABLE IF NOT EXISTS `media_o` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media_o`
--

INSERT INTO `media_o` (`sno`, `business_id`, `media_type`, `media_name`, `date_created`) VALUES
(1, '8', 'images', 'grasshopit_N_K_MPEBUEDO0QT558094PD_9TQL0FGLU1YBQDMLR39SV0ZX.jpg', '2014-10-28 06:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `media_p`
--

CREATE TABLE IF NOT EXISTS `media_p` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_q`
--

CREATE TABLE IF NOT EXISTS `media_q` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_r`
--

CREATE TABLE IF NOT EXISTS `media_r` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_s`
--

CREATE TABLE IF NOT EXISTS `media_s` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `media_s`
--

INSERT INTO `media_s` (`sno`, `business_id`, `media_type`, `media_name`, `date_created`) VALUES
(1, '3', 'images', 'grasshopit_J_ACFYUKQPILJMM1P2TO45A8S1L_NZ0JP1NTPG4MUJ8NTCCR.gif', '2014-09-08 15:51:29'),
(2, '3', 'images', 'grasshopit_L5YHB2CORB8RS1VPHFMYVS4BJ8NJUVT9E_V30SAUCCL1OW5J.gif', '2014-09-08 15:51:50'),
(3, '3', 'images', 'grasshopit_5QGWLWUY4KV7L4_FWLHDY6YOS3M2AH74JO_N8PB7GSUJ24XE.jpg', '2014-09-08 15:52:24'),
(4, '3', 'images', 'grasshopit_3YVFFD0BYNJSSV0HNB91K8N8HOJOATL62Z1BN0CRVX3_U0LL.jpg', '2014-09-08 15:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `media_t`
--

CREATE TABLE IF NOT EXISTS `media_t` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_u`
--

CREATE TABLE IF NOT EXISTS `media_u` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_v`
--

CREATE TABLE IF NOT EXISTS `media_v` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_w`
--

CREATE TABLE IF NOT EXISTS `media_w` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_x`
--

CREATE TABLE IF NOT EXISTS `media_x` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_y`
--

CREATE TABLE IF NOT EXISTS `media_y` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media_z`
--

CREATE TABLE IF NOT EXISTS `media_z` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_id` varchar(50) NOT NULL,
  `media_type` varchar(10) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_a`
--

CREATE TABLE IF NOT EXISTS `reviews_a` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `reviews_a`
--

INSERT INTO `reviews_a` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(14, '2', '1', 'This is some kind of exciting business in its kind.', 5, 'grasshopit_BMWCNOAPRN4POTU0BBZDO_RLKZU35LJQ68E7N5R5EJ09JJR7.png', NULL, 1, '2014-10-17 09:29:07'),
(16, '2', '2', 'Its okay.', 2, NULL, NULL, 1, '2014-10-19 16:53:57'),
(17, '2', '2', 'this is a test.', 4, 'grasshopit__BZ_JM80WF871Y3Y0VTEM5J757LK434DE1EXLK_H26M44P0E.jpg', NULL, 1, '2014-10-30 07:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_b`
--

CREATE TABLE IF NOT EXISTS `reviews_b` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_c`
--

CREATE TABLE IF NOT EXISTS `reviews_c` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reviews_c`
--

INSERT INTO `reviews_c` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(1, '5', '23', 'all the other people in the world go there', 1, NULL, 'grasshopit_NQJ3WW9SW_H820XBW7JQ7LPAHRZJ4L_SBSS8O20KDHUGJSRB.mov', 0, '2014-10-29 06:07:18'),
(2, '5', '23', 'gsdgsgsgsgsgasgsdgzsgszg', 5, NULL, 'grasshopit_WB54WSBDJBWOW5B6X7CM8C0MZ11EUVVR4XSYQ7BAF6YC_9G9.mov', 1, '2014-10-29 06:08:07'),
(3, '5', '23', 'rghrghzsfghzsgzsgzs', 3, 'grasshopit_L1HN4ZBMGRQ9IPMY_CVVESBQBTT7E_G_BYNFXZ2_QSK8I55I.jpg', NULL, 1, '2014-10-29 06:12:52'),
(4, '5', '23', 'dfhdzshdhhdfhf', 5, 'grasshopit_E0ETQQJ1ED8TNPT1NCJGBLU0EA9WHDFWAUP4G95_MBT91I_O.jpg', NULL, 1, '2014-10-29 06:13:29'),
(5, '5', '23', 'dbvbndnnn', 2, 'grasshopit_ZR49CZ8RAEOSS2O6TE9ANCA7S2ETMRDHJISVH_ISG6F983C2.jpg', NULL, 0, '2014-10-29 06:14:08'),
(6, '5', '23', 'adgsgzsgszdgzsvg', 5, NULL, NULL, 1, '2014-10-29 06:41:48'),
(7, '5', '23', 'Sgfd', 4, NULL, NULL, 1, '2014-10-29 06:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_d`
--

CREATE TABLE IF NOT EXISTS `reviews_d` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reviews_d`
--

INSERT INTO `reviews_d` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(1, '7', '6', 'Love this day spa a great day to relax....', 5, NULL, NULL, 1, '2014-10-31 05:09:09'),
(2, '7', '6', 'This place is so boring.', 1, NULL, NULL, 0, '2014-10-31 05:10:08'),
(3, '7', '6', 'Would love to go there again ', 3, 'grasshopit_0SVE0ZFTV_2PR1Y8SRKB2U8QMJY5L5KMXF1UAGO8CR_6SYEL.jpg', NULL, 1, '2014-10-31 05:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_e`
--

CREATE TABLE IF NOT EXISTS `reviews_e` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_f`
--

CREATE TABLE IF NOT EXISTS `reviews_f` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_g`
--

CREATE TABLE IF NOT EXISTS `reviews_g` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews_g`
--

INSERT INTO `reviews_g` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(1, '2', '1', 'Its awesome.', 5, 'grasshopit_VE9QDHEKFC9329T_GIK60XL4VVAG6HIYVOP763ULG2MJ_FKO.gif', NULL, 1, '2014-10-23 03:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_h`
--

CREATE TABLE IF NOT EXISTS `reviews_h` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_i`
--

CREATE TABLE IF NOT EXISTS `reviews_i` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_j`
--

CREATE TABLE IF NOT EXISTS `reviews_j` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_k`
--

CREATE TABLE IF NOT EXISTS `reviews_k` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_l`
--

CREATE TABLE IF NOT EXISTS `reviews_l` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `reviews_l`
--

INSERT INTO `reviews_l` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(1, '6', '25', 'the worst in the world', 4, NULL, 'grasshopit_5QP79ZN2K8G_T0LV3BP7_7LEY7_A_NN4DDBJCYNW7480BQWF.mov', 1, '2014-10-31 03:56:21'),
(2, '6', '25', 'the best every ', 3, 'grasshopit_2GMCO0RNH2XEMLKZYWJ8U75_BD0N4U57AUK22BMJFKY23J2Y.jpg', NULL, 1, '2014-10-31 03:57:03'),
(3, '6', '25', 'wetwertrt', 1, NULL, NULL, 0, '2014-10-31 04:02:03'),
(4, '6', '25', 'great place to eat', 3, 'grasshopit__AIURWIIWF7KITJZQISTM3AL74_WOYCX8US0RBINQP87JR69.jpg', NULL, 1, '2014-10-31 04:03:41'),
(5, '6', '25', 'sdgsdg', 3, NULL, NULL, 1, '2014-10-31 04:32:41'),
(6, '6', '25', 'the best', 5, NULL, NULL, 1, '2014-10-31 05:47:34'),
(7, '6', '25', 'the', 0, NULL, NULL, 1, '2014-10-31 05:47:56'),
(8, '6', '25', 'hiohiohi', 0, NULL, NULL, 1, '2014-10-31 05:48:05'),
(9, '6', '25', 'the', 5, NULL, NULL, 1, '2014-10-31 05:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_m`
--

CREATE TABLE IF NOT EXISTS `reviews_m` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_n`
--

CREATE TABLE IF NOT EXISTS `reviews_n` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_numeric`
--

CREATE TABLE IF NOT EXISTS `reviews_numeric` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_o`
--

CREATE TABLE IF NOT EXISTS `reviews_o` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews_o`
--

INSERT INTO `reviews_o` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(1, '4', '8', 'this place is the best place in the world to eat, I love it', 1, 'grasshopit_A3VYWF_2C0USTCNNZ407DHLIQ4FQV2S54I411D3GDU877WV4.jpg', NULL, 0, '2014-10-28 06:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_p`
--

CREATE TABLE IF NOT EXISTS `reviews_p` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_q`
--

CREATE TABLE IF NOT EXISTS `reviews_q` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_r`
--

CREATE TABLE IF NOT EXISTS `reviews_r` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_s`
--

CREATE TABLE IF NOT EXISTS `reviews_s` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reviews_s`
--

INSERT INTO `reviews_s` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(1, '2', '17', 'This is awesome..', 5, 'grasshopit_01_7_C2326ONBIF9B0CESCTGEUV1_KTE1GP0_DTBJI0XCI_Y.gif', NULL, 1, '2014-10-15 13:02:37'),
(2, '2', '17', 'hello', 5, 'grasshopit_EH53HEWM02S5EF1YHLUJFA9FOIIX5C_G_ILHZ4SJT0I1K52_.gif', NULL, 1, '2014-10-15 13:05:41'),
(3, '2', '16', 'Its awesome to be here..', 5, 'grasshopit_I1K52_UHMYAYG7MENNPXBOX_XO8KC86RWMFLWFU30XX9FOD_.jpg', NULL, 1, '2014-10-20 13:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_t`
--

CREATE TABLE IF NOT EXISTS `reviews_t` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_u`
--

CREATE TABLE IF NOT EXISTS `reviews_u` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_v`
--

CREATE TABLE IF NOT EXISTS `reviews_v` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reviews_v`
--

INSERT INTO `reviews_v` (`sno`, `user_id`, `business_id`, `comment`, `rating`, `images`, `videos`, `is_published`, `date`) VALUES
(1, '3', '1', 'Love this local spot', 4, 'grasshopit_D43D3FHUZD59_PMRV62MNRSN8A5Q2BNGINTI5AC1OFB_8XO0.jpg', NULL, 1, '2014-10-26 17:24:33'),
(2, '3', '1', 'Had a great time there last night cindy was great ..', 3, NULL, NULL, 1, '2014-10-26 17:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_w`
--

CREATE TABLE IF NOT EXISTS `reviews_w` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_x`
--

CREATE TABLE IF NOT EXISTS `reviews_x` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_y`
--

CREATE TABLE IF NOT EXISTS `reviews_y` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_z`
--

CREATE TABLE IF NOT EXISTS `reviews_z` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `business_id` varchar(50) NOT NULL,
  `comment` text,
  `rating` tinyint(4) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `videos` varchar(255) DEFAULT NULL,
  `is_published` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_events`
--

CREATE TABLE IF NOT EXISTS `site_events` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `organizer` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `coupon_id` varchar(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `site_events`
--

INSERT INTO `site_events` (`sno`, `title`, `date`, `venue`, `address`, `organizer`, `contact`, `description`, `image`, `coupon_id`, `date_created`) VALUES
(1, 'Grasshopit Inaguration', '2014-08-30', 'Emily Park', 'Emily Road, St. 1408 California, USA', 'Grasshopit', '+1 678 787 7783', 'Grasshopit Inaguration Program', 'inaguration_event.jpg', '1', '2014-08-20 14:07:49'),
(2, 'Into The Business', '2014-09-11', 'Emily Park', 'Emily Road, St. 1408 California, USA', 'Grasshopit', '+1 678 787 7783', 'Grasshopit Inaguration Program', 'inaguration_event.jpg', '2', '2014-08-20 14:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `site_main`
--

CREATE TABLE IF NOT EXISTS `site_main` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `info_slug` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `overview` text NOT NULL,
  `mission` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_main`
--

INSERT INTO `site_main` (`sno`, `name`, `contact_no`, `email`, `address`, `info_slug`, `about`, `overview`, `mission`, `logo`) VALUES
(1, 'grasshopit', '', 'info@grasshopit.com', '', 'We are the voice of the community facilitating positive communication between small businesses and their customers.', 'Grasshopit was conceptualized in 2012 and launched in 2014. We are the voice of the community facilitating positive communication between small businesses and their customers. We are considered a “tech” company but we refuse to sit back and hide behind the “cloud”. We pride ourselves on being tangible and having a direct impact on the communities we are apart of.\n', '', '', 'grasshopit_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `site_sliders`
--

CREATE TABLE IF NOT EXISTS `site_sliders` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `published` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `site_sliders`
--

INSERT INTO `site_sliders` (`sno`, `image`, `title`, `description`, `published`, `date_created`) VALUES
(1, 'grow_business.jpeg', 'Grow Your Business', 'Connect with grasshopit and grow your business', 1, '2014-08-20 16:07:57'),
(2, 'make_profits.jpeg', 'Flourish your business', 'Increase your profits just by staying in touch with us', 1, '2014-08-20 16:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_info`
--

CREATE TABLE IF NOT EXISTS `transaction_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `payment_method` enum('paypal','bluepay') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'paypal',
  `bid` varchar(11) DEFAULT NULL,
  `gross_amount` double(20,2) DEFAULT NULL,
  `package_id` smallint(3) DEFAULT NULL,
  `received_amount` double(10,2) DEFAULT NULL,
  `payment_status` enum('R','P','C','F') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `reason` varchar(32) DEFAULT NULL,
  `pay_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `transaction_info`
--

INSERT INTO `transaction_info` (`id`, `payment_method`, `bid`, `gross_amount`, `package_id`, `received_amount`, `payment_status`, `reason`, `pay_time`) VALUES
(1, 'paypal', 's_58', 69.00, 2, 69.00, 'R', NULL, '2014-11-09 22:42:25'),
(3, 'paypal', 'k_10', 139.00, 3, 139.00, 'R', NULL, '2014-11-09 23:02:52'),
(4, 'paypal', 'k_10', 139.00, 3, 139.00, 'R', NULL, '2014-11-09 23:03:10'),
(5, 'paypal', 'o_11', 139.00, 3, 139.00, 'R', NULL, '2014-11-09 23:17:15'),
(6, 'paypal', '_', 69.00, 2, 69.00, 'R', NULL, '2014-11-09 23:21:25'),
(7, 'paypal', '_', 69.00, 2, 69.00, 'R', NULL, '2014-11-15 15:55:45'),
(8, 'paypal', 'a_1', 69.00, 2, 69.00, 'R', NULL, '2014-11-15 16:01:19'),
(9, 'paypal', 'a_1', 69.00, 2, 69.00, 'R', NULL, '2014-11-15 16:01:36'),
(10, 'paypal', 'a_1', 139.00, 3, 139.00, 'R', 'Upgrade', '2014-11-15 16:11:05'),
(11, 'paypal', 'a_1', 69.00, 2, 69.00, 'R', 'Upgrade', '2014-11-15 18:02:47'),
(12, 'paypal', 'a_1', 69.00, 2, 69.00, 'R', 'Upgrade', '2014-11-15 18:07:28'),
(13, 'paypal', 'a_1', 69.00, 2, 69.00, 'R', 'Upgrade', '2014-11-15 18:21:48'),
(14, 'paypal', 'a_1', 139.00, 3, 139.00, 'R', 'Upgrade', '2014-11-15 18:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `unique_category`
--

CREATE TABLE IF NOT EXISTS `unique_category` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `business_id` text NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(64) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `icon_class` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=889 ;

--
-- Dumping data for table `unique_category`
--

INSERT INTO `unique_category` (`sno`, `name`, `business_id`, `date_modified`, `image`, `logo`, `icon_class`) VALUES
(1, 'category', 'n_1', '2014-10-27 23:56:03', '', '', ''),
(2, 'wine bars', 'd_1,f_2,w_1,a_8', '2014-10-27 23:56:03', '', '', ''),
(3, 'tapas/small plates', 'd_1,b_17,t_14', '2014-10-27 23:56:03', '', '', ''),
(4, 'american (new)', 'd_1,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(5, 'bars', 't_1,j_2,t_8,t_9,t_13,h_1,o_4,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(6, 'music venues', 'a_6,s_21', '2014-10-27 23:56:03', '', '', ''),
(7, 'karaoke', 'a_6,t_5,t_27', '2014-10-27 23:56:03', '', '', ''),
(8, 'dive bars', 'a_6,b_4,t_16,r_10,l_4,t_19,q_2,i_1,o_2,numeric_2,p_6,t_25,a_9,f_3,c_6,b_11,n_6', '2014-10-27 23:56:03', '', '', ''),
(9, 'pubs', 'c_2,m_2,v_1,t_4,t_6,g_3,q_1,t_15,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(10, 'gastropubs', 'c_2,t_12,b_3,s_19,t_20', '2014-10-27 23:56:03', '', '', ''),
(11, 'bars', 'c_2,j_2,t_8,t_9,t_13,h_1,o_4,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(12, 'american (traditional)', 'c_2,t_3,r_5,n_4,t_22,j_5', '2014-10-27 23:56:03', '', '', ''),
(13, 'seafood', 'c_2,p_3,t_23', '2014-10-27 23:56:03', '', '', ''),
(14, 'seafood', 'c_2,p_3,t_23', '2014-10-27 23:56:03', '', '', ''),
(15, 'steakhouses', 'c_2,numeric_3,t_31', '2014-10-27 23:56:03', '', '', ''),
(16, 'music venues', 'c_2,s_21', '2014-10-27 23:56:03', '', '', ''),
(17, 'spanish', 'c_2', '2014-10-27 23:56:03', '', '', ''),
(18, 'tapas bars', 'c_2', '2014-10-27 23:56:03', '', '', ''),
(19, 'wine bars', 'c_2,f_2,w_1,a_8', '2014-10-27 23:56:03', '', '', ''),
(20, 'tapas/small plates', 'c_2,b_17,t_14', '2014-10-27 23:56:03', '', '', ''),
(21, 'asian fusion', 'c_2', '2014-10-27 23:56:03', '', '', ''),
(22, 'chinese', 'c_2', '2014-10-27 23:56:03', '', '', ''),
(23, 'japanese', 'c_2,numeric_4', '2014-10-27 23:56:03', '', '', ''),
(24, 'cocktail bars', 't_2,t_7,p_7', '2014-10-27 23:56:03', '', '', ''),
(25, 'pubs', 't_2,m_2,v_1,t_4,t_6,g_3,q_1,t_15,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(26, 'wine bars', 't_2,f_2,w_1,a_8', '2014-10-27 23:56:03', '', '', ''),
(27, 'sandwiches', 'j_2', '2014-10-27 23:56:03', '', '', ''),
(28, 'bars', 't_3,t_8,t_9,t_13,h_1,o_4,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(29, 'sports bars', 'r_5,r_8,e_1,c_3,p_2,b_5,e_2,e_6,l_6', '2014-10-27 23:56:03', '', '', ''),
(30, 'burgers', 'r_6,numeric_1', '2014-10-27 23:56:03', '', '', ''),
(31, 'bars', 'r_6,t_8,t_9,t_13,h_1,o_4,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(32, 'american (traditional)', 'r_6,n_4,t_22,j_5', '2014-10-27 23:56:03', '', '', ''),
(33, 'dive bars', 'v_1,b_4,t_16,r_10,l_4,t_19,q_2,i_1,o_2,numeric_2,p_6,t_25,a_9,f_3,c_6,b_11,n_6', '2014-10-27 23:56:03', '', '', ''),
(34, 'breakfast & brunch', 't_4,t_30', '2014-10-27 23:56:03', '', '', ''),
(35, 'fish & chips', 't_4', '2014-10-27 23:56:03', '', '', ''),
(36, 'lounges', 'r_7,s_20,d_2,s_22,r_11,s_25,p_5,u_1', '2014-10-27 23:56:03', '', '', ''),
(37, 'latin american', 'r_7', '2014-10-27 23:56:03', '', '', ''),
(38, 'cocktail bars', 'r_7,t_7,p_7', '2014-10-27 23:56:03', '', '', ''),
(39, 'cocktail bars', 'r_7,t_7,p_7', '2014-10-27 23:56:03', '', '', ''),
(40, 'piano bars', 'r_7', '2014-10-27 23:56:03', '', '', ''),
(41, 'pubs', 't_5,t_6,g_3,q_1,t_15,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(42, 'dive bars', 't_6,b_4,t_16,r_10,l_4,t_19,q_2,i_1,o_2,numeric_2,p_6,t_25,a_9,f_3,c_6,b_11,n_6', '2014-10-27 23:56:03', '', '', ''),
(43, 'piano bars', 't_7', '2014-10-27 23:56:03', '', '', ''),
(44, 'american (new)', 't_8,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(45, 'american (traditional)', 't_13,n_4,t_22,j_5', '2014-10-27 23:56:03', '', '', ''),
(46, 'seafood', 't_13,p_3,t_23', '2014-10-27 23:56:03', '', '', ''),
(47, 'irish', 't_11,k_1,s_23,m_4,c_8', '2014-10-27 23:56:03', '', '', ''),
(48, 'pubs', 't_11,q_1,t_15,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(49, 'music venues', 't_11,s_21', '2014-10-27 23:56:03', '', '', ''),
(50, 'american (new)', 'b_17,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(51, 'french', 'b_17', '2014-10-27 23:56:03', '', '', ''),
(52, 'american (new)', 't_12,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(53, 'burgers', 't_12,numeric_1', '2014-10-27 23:56:03', '', '', ''),
(54, 'sports bars', 'numeric_1,r_8,e_1,c_3,p_2,b_5,e_2,e_6,l_6', '2014-10-27 23:56:03', '', '', ''),
(55, 'arts & entertainment', 'numeric_1', '2014-10-27 23:56:03', '', '', ''),
(56, 'delis', 'b_3', '2014-10-27 23:56:03', '', '', ''),
(57, 'wine bars', 'b_3,f_2,w_1,a_8', '2014-10-27 23:56:03', '', '', ''),
(58, 'american (new)', 't_14,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(59, 'wine bars', 't_14,f_2,w_1,a_8', '2014-10-27 23:56:03', '', '', ''),
(60, 'american (traditional)', 'q_1,n_4,t_22,j_5', '2014-10-27 23:56:03', '', '', ''),
(61, 'burgers', 'q_1', '2014-10-27 23:56:03', '', '', ''),
(62, 'pubs', 'k_1,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(63, 'music venues', 't_16,s_21', '2014-10-27 23:56:03', '', '', ''),
(64, 'american (new)', 't_16,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(65, 'american (traditional)', 'e_1,n_4,t_22,j_5', '2014-10-27 23:56:03', '', '', ''),
(66, 'south african', 'e_1', '2014-10-27 23:56:03', '', '', ''),
(67, 'hotels', 'o_4', '2014-10-27 23:56:03', '', '', ''),
(68, 'tours', 'o_4', '2014-10-27 23:56:03', '', '', ''),
(69, 'lounges', 'o_4,s_20,d_2,s_22,r_11,s_25,p_5,u_1', '2014-10-27 23:56:03', '', '', ''),
(70, 'steakhouses', 'o_4,numeric_3,t_31', '2014-10-27 23:56:03', '', '', ''),
(71, 'seafood', 'o_4,p_3,t_23', '2014-10-27 23:56:03', '', '', ''),
(72, 'breakfast & brunch', 'o_4,t_30', '2014-10-27 23:56:03', '', '', ''),
(73, 'seafood', 'o_4,p_3,t_23', '2014-10-27 23:56:03', '', '', ''),
(74, 'lounges', 'o_4,s_20,d_2,s_22,r_11,s_25,p_5,u_1', '2014-10-27 23:56:03', '', '', ''),
(75, 'pizza', 'r_9,c_4', '2014-10-27 23:56:03', '', '', ''),
(76, 'american (new)', 'r_9,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(77, 'pubs', 'r_9,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(78, 'beer', 'p_1', '2014-10-27 23:56:03', '', '', ''),
(79, 'wine & spirits', 'p_1', '2014-10-27 23:56:03', '', '', ''),
(80, 'pubs', 'p_1,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(81, 'barbeque', 'p_1,b_8', '2014-10-27 23:56:03', '', '', ''),
(82, 'breweries', 'p_1,b_9', '2014-10-27 23:56:03', '', '', ''),
(83, 'gastropubs', 'p_1,t_20', '2014-10-27 23:56:03', '', '', ''),
(84, 'modern european', 't_17', '2014-10-27 23:56:03', '', '', ''),
(85, 'gastropubs', 't_17,t_20', '2014-10-27 23:56:03', '', '', ''),
(86, 'tapas bars', 't_17', '2014-10-27 23:56:03', '', '', ''),
(87, 'mediterranean', 's_20', '2014-10-27 23:56:03', '', '', ''),
(88, 'american (new)', 's_20,t_18,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(89, 'bars', 't_18,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(90, 'bars', 's_21,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(91, 'american (traditional)', 's_21,n_4,t_22,j_5', '2014-10-27 23:56:03', '', '', ''),
(92, 'mexican', 'r_10,a_7,l_5,p_8,h_2,b_12', '2014-10-27 23:56:03', '', '', ''),
(93, 'tapas/small plates', 'f_2', '2014-10-27 23:56:03', '', '', ''),
(94, 'tapas bars', 'f_2', '2014-10-27 23:56:03', '', '', ''),
(95, 'beer', 'c_3', '2014-10-27 23:56:03', '', '', ''),
(96, 'wine & spirits', 'c_3', '2014-10-27 23:56:03', '', '', ''),
(97, 'italian', 'c_3,p_9,l_7', '2014-10-27 23:56:03', '', '', ''),
(98, 'dive bars', 'c_3,l_4,t_19,q_2,i_1,o_2,numeric_2,p_6,t_25,a_9,f_3,c_6,b_11,n_6', '2014-10-27 23:56:03', '', '', ''),
(99, 'pubs', 'c_3,p_4,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(100, 'seafood', 'c_3,p_3,t_23', '2014-10-27 23:56:03', '', '', ''),
(101, 'steakhouses', 'c_3,numeric_3,t_31', '2014-10-27 23:56:03', '', '', ''),
(102, 'dive bars', 'c_3,l_4,t_19,q_2,i_1,o_2,numeric_2,p_6,t_25,a_9,f_3,c_6,b_11,n_6', '2014-10-27 23:56:03', '', '', ''),
(103, 'italian', 'c_4,p_9,l_7', '2014-10-27 23:56:03', '', '', ''),
(104, 'sports bars', 'c_4,p_2,b_5,e_2,e_6,l_6', '2014-10-27 23:56:03', '', '', ''),
(105, 'pool halls', 'b_5', '2014-10-27 23:56:03', '', '', ''),
(106, 'adult entertainment', 'l_4', '2014-10-27 23:56:03', '', '', ''),
(107, 'italian', 'd_2,p_9,l_7', '2014-10-27 23:56:03', '', '', ''),
(108, 'pizza', 'd_2', '2014-10-27 23:56:03', '', '', ''),
(109, 'bars', 'p_3,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(110, 'american (traditional)', 'p_3,n_4,t_22,j_5', '2014-10-27 23:56:03', '', '', ''),
(111, 'american (new)', 'e_2,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(112, 'steakhouses', 's_22,numeric_3,t_31', '2014-10-27 23:56:03', '', '', ''),
(113, 'seafood', 's_22,t_23', '2014-10-27 23:56:03', '', '', ''),
(114, 'hotels', 's_22', '2014-10-27 23:56:03', '', '', ''),
(115, 'tours', 's_22', '2014-10-27 23:56:03', '', '', ''),
(116, 'bars', 's_22,g_4,t_21,b_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(117, 'breakfast & brunch', 's_22,t_30', '2014-10-27 23:56:03', '', '', ''),
(118, 'seafood', 's_22,t_23', '2014-10-27 23:56:03', '', '', ''),
(119, 'lounges', 's_22,r_11,s_25,p_5,u_1', '2014-10-27 23:56:03', '', '', ''),
(120, 'wine bars', 'q_2,a_8', '2014-10-27 23:56:03', '', '', ''),
(121, 'dive bars', 'r_11,i_1,o_2,numeric_2,p_6,t_25,a_9,f_3,c_6,b_11,n_6', '2014-10-27 23:56:03', '', '', ''),
(122, 'cocktail bars', 'r_11,p_7', '2014-10-27 23:56:03', '', '', ''),
(123, 'pubs', 's_23,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(124, 'sports bars', 'i_1,e_6,l_6', '2014-10-27 23:56:03', '', '', ''),
(125, 'spanish', 't_20', '2014-10-27 23:56:03', '', '', ''),
(126, 'american (new)', 't_20,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(127, 'music venues', 'g_4', '2014-10-27 23:56:03', '', '', ''),
(128, 'american (new)', 'g_4,s_24,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(129, 'mexican', 't_21,a_7,l_5,p_8,h_2,b_12', '2014-10-27 23:56:03', '', '', ''),
(130, 'pubs', 'o_2,b_6,s_26', '2014-10-27 23:56:03', '', '', ''),
(131, 'lounges', 'b_6,s_25,p_5,u_1', '2014-10-27 23:56:03', '', '', ''),
(132, 'cocktail bars', 'b_6,p_7', '2014-10-27 23:56:03', '', '', ''),
(133, 'american (new)', 'n_4,y_1,j_3,t_28,n_5', '2014-10-27 23:56:03', '', '', ''),
(134, 'breakfast & brunch', 'n_4,t_30', '2014-10-27 23:56:03', '', '', ''),
(135, 'pubs', 't_22,s_26', '2014-10-27 23:56:03', '', '', ''),
(136, 'sports bars', 't_22,e_6,l_6', '2014-10-27 23:56:03', '', '', ''),
(137, 'bars', 'a_7,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(138, 'steakhouses', 't_23,numeric_3,t_31', '2014-10-27 23:56:03', '', '', ''),
(139, 'music venues', 't_23', '2014-10-27 23:56:03', '', '', ''),
(140, 'american (traditional)', 's_26,j_5', '2014-10-27 23:56:03', '', '', ''),
(141, 'gay bars', 't_24,s_27,c_5,t_26', '2014-10-27 23:56:03', '', '', ''),
(142, 'dive bars', 's_27,a_9,f_3,c_6,b_11,n_6', '2014-10-27 23:56:03', '', '', ''),
(143, 'american (traditional)', 'e_6,j_5', '2014-10-27 23:56:03', '', '', ''),
(144, 'breakfast & brunch', 'e_6,t_30', '2014-10-27 23:56:03', '', '', ''),
(145, 'american (traditional)', 'a_9,j_5', '2014-10-27 23:56:03', '', '', ''),
(146, 'tapas bars', 'u_1', '2014-10-27 23:56:03', '', '', ''),
(147, 'dance clubs', 'u_1,c_7,c_9', '2014-10-27 23:56:03', '', '', ''),
(148, 'hookah bars', 'm_3,t_29', '2014-10-27 23:56:03', '', '', ''),
(149, 'lounges', 'm_3', '2014-10-27 23:56:03', '', '', ''),
(150, 'american (traditional)', 'numeric_3,j_5', '2014-10-27 23:56:03', '', '', ''),
(151, 'dance clubs', 'c_5,c_7,c_9', '2014-10-27 23:56:03', '', '', ''),
(152, 'breweries', 'b_8,b_9', '2014-10-27 23:56:03', '', '', ''),
(153, 'gastropubs', 'b_8', '2014-10-27 23:56:03', '', '', ''),
(154, 'karaoke', 't_26,t_27', '2014-10-27 23:56:03', '', '', ''),
(155, 'sports bars', 'p_8,l_6', '2014-10-27 23:56:03', '', '', ''),
(156, 'american (traditional)', 'b_9,j_5', '2014-10-27 23:56:03', '', '', ''),
(157, 'bars', 'p_9,b_10,j_4', '2014-10-27 23:56:03', '', '', ''),
(158, 'pizza', 'p_9', '2014-10-27 23:56:03', '', '', ''),
(159, 'american (traditional)', 't_27,j_5', '2014-10-27 23:56:03', '', '', ''),
(160, 'sushi bars', 'numeric_4', '2014-10-27 23:56:03', '', '', ''),
(161, 'chicken wings', 'l_6', '2014-10-27 23:56:03', '', '', ''),
(162, 'breakfast & brunch', 't_28,t_30', '2014-10-27 23:56:03', '', '', ''),
(163, 'mediterranean', 't_29', '2014-10-27 23:56:03', '', '', ''),
(164, 'swimming pools', 'r_12', '2014-10-27 23:56:03', '', '', ''),
(165, 'lounges', 'r_12', '2014-10-27 23:56:03', '', '', ''),
(166, 'venues & event spaces', 'r_12', '2014-10-27 23:56:03', '', '', ''),
(167, 'american (new)', 'm_4,n_5', '2014-10-27 23:56:03', '', '', ''),
(168, 'music venues', 'm_4', '2014-10-27 23:56:03', '', '', ''),
(169, 'bars', 'c_7,j_4', '2014-10-27 23:56:03', '', '', ''),
(170, 'american (new)', 'c_7,n_5', '2014-10-27 23:56:03', '', '', ''),
(171, 'music venues', 'b_11', '2014-10-27 23:56:03', '', '', ''),
(172, 'lounges', 'b_11', '2014-10-27 23:56:03', '', '', ''),
(173, 'pubs', 'c_8', '2014-10-27 23:56:03', '', '', ''),
(174, 'music venues', 'c_8', '2014-10-27 23:56:03', '', '', ''),
(175, 'american (traditional)', 'j_4,j_5', '2014-10-27 23:56:03', '', '', ''),
(176, 'thai', 'p_10', '2014-10-27 23:56:03', '', '', ''),
(177, 'mediterranean', 'l_7', '2014-10-27 23:56:03', '', '', ''),
(178, 'venues & event spaces', 'l_7', '2014-10-27 23:56:03', '', '', ''),
(179, 'bakeries', 'j_5', '2014-10-27 23:56:03', '', '', ''),
(180, 'seafood', 't_31', '2014-10-27 23:56:03', '', '', ''),
(181, 'vegan', 'a_10', '2014-10-27 23:56:03', '', '', ''),
(182, 'chocolatiers & shops', 'a_10', '2014-10-27 23:56:03', '', '', ''),
(183, 'vegetarian', 'a_10', '2014-10-27 23:56:03', '', '', ''),
(184, 'lounges', 'c_9', '2014-10-27 23:56:03', '', '', ''),
(185, '', 'n_1,d_1,t_1,a_5,c_2,t_2,j_1,t_3,r_2,r_3,m_1,v_1,t_4,r_4,t_5,t_6,t_7,g_2,t_8,t_9,t_10,t_11,h_1,b_1,t_12,numeric_5,b_3,t_14,r_8,q_3,t_15,k_2,b_13,s_28,t_16,e_1,o_1,r_9,p_1,t_17,s_29,t_18,s_30,r_10,f_4,c_3,c_10,p_2,b_14,l_4,d_3,w_1,p_11,e_4,s_31,t_19,q_2,r_11,p_12,s_23,i_2,t_20,g_5,t_32,o_3,b_6,b_7,s_24,n_7,t_33,s_25,a_7,numeric_2,t_23,p_5,p_13,s_32,t_24,a_8,t_25,s_27,l_5,e_5,a_11,u_1,m_3,numeric_3,y_1,c_5,j_3,p_7,b_15,t_26,p_14,b_9,f_5,p_15,b_18,t_34,numeric_4,l_6,t_28,c_11,t_29,r_12,m_5,c_7,b_11,c_12,j_6,t_30,p_10,l_7,j_7,n_8,n_9,h_3,t_31,a_10,b_12,c_13,e_7,a_12,c_16,o_5,b_19,h_4,t_36,s_33,n_10,d_4,a_13,s_34,w_2,p_16,s_35,m_6,f_6,h_5,c_17,m_7,r_13,e_8,d_5,c_18,t_37,f_7,i_3,f_8,m_8,a_14,t_38,s_36,l_8,w_3,c_19,k_3,t_39,t_40,w_4,w_5,r_14,b_20,h_6,a_15,s_37,t_41,b_21,c_20,g_6,t_42,s_38,s_39,r_15,s_40,t_43,t_44,e_9,b_22,i_4,b_23,m_9,t_45,b_24,t_46,e_10,r_16,t_47,b_25,n_11,b_26,e_11,s_41,w_6,i_5,f_9,s_42,w_7,s_43,k_4,t_48,w_8,s_44,s_45,h_7,l_9,t_49,k_5,g_7,g_8,m_10,o_6,o_7,t_50,h_8,r_17,t_51,m_11,c_21,r_18,t_52,h_9,b_27,s_46,t_53,k_6,c_22,e_12,l_10,l_11,k_7,b_28,k_8,r_20,f_10,r_21,p_18,l_15,b_30,p_19,y_2,c_27,p_20,f_11,a_17,b_31,p_21,o_9,b_32,i_6,i_7,w_9,y_3,h_12,h_13,j_8,r_22,v_2,l_16,f_12,c_28,s_47,w_10,m_14,b_33,l_17,numeric_6,c_29,m_15,m_16,s_48,h_14,l_18,a_18,n_12,q_4,a_1', '2014-10-28 01:17:14', '', '', ''),
(186, 'tapas/small plates', 'd_1', '2014-10-28 05:12:23', '', '', ''),
(187, 'american (new)', 'd_1', '2014-10-28 05:12:23', '', '', ''),
(188, 'karaoke', 'a_6', '2014-10-28 05:12:23', '', '', ''),
(189, 'dive bars', 'a_6', '2014-10-28 05:12:23', '', '', ''),
(190, 'gastropubs', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(191, 'bars', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(192, 'american (traditional)', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(193, 'seafood', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(194, 'seafood', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(195, 'steakhouses', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(196, 'music venues', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(197, 'spanish', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(198, 'tapas bars', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(199, 'wine bars', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(200, 'tapas/small plates', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(201, 'asian fusion', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(202, 'chinese', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(203, 'japanese', 'c_2', '2014-10-28 05:12:23', '', '', ''),
(204, 'pubs', 't_2', '2014-10-28 05:12:23', '', '', ''),
(205, 'wine bars', 't_2', '2014-10-28 05:12:23', '', '', ''),
(206, 'sandwiches', 'j_2', '2014-10-28 05:12:23', '', '', ''),
(207, 'bars', 't_3', '2014-10-28 05:12:23', '', '', ''),
(208, 'sports bars', 'r_5', '2014-10-28 05:12:23', '', '', ''),
(209, 'bars', 'r_6', '2014-10-28 05:12:23', '', '', ''),
(210, 'american (traditional)', 'r_6', '2014-10-28 05:12:23', '', '', ''),
(211, 'dive bars', 'v_1', '2014-10-28 05:12:23', '', '', ''),
(212, 'breakfast & brunch', 't_4', '2014-10-28 05:12:23', '', '', ''),
(213, 'fish & chips', 't_4', '2014-10-28 05:12:23', '', '', ''),
(214, 'latin american', 'r_7', '2014-10-28 05:12:23', '', '', ''),
(215, 'cocktail bars', 'r_7', '2014-10-28 05:12:23', '', '', ''),
(216, 'cocktail bars', 'r_7', '2014-10-28 05:12:23', '', '', ''),
(217, 'piano bars', 'r_7', '2014-10-28 05:12:23', '', '', ''),
(218, 'pubs', 't_5', '2014-10-28 05:12:23', '', '', ''),
(219, 'dive bars', 't_6', '2014-10-28 05:12:23', '', '', ''),
(220, 'piano bars', 't_7', '2014-10-28 05:12:23', '', '', ''),
(221, 'american (new)', 't_8', '2014-10-28 05:12:23', '', '', ''),
(222, 'american (traditional)', 't_13', '2014-10-28 05:12:23', '', '', ''),
(223, 'seafood', 't_13', '2014-10-28 05:12:23', '', '', ''),
(224, 'pubs', 't_11', '2014-10-28 05:12:23', '', '', ''),
(225, 'music venues', 't_11', '2014-10-28 05:12:23', '', '', ''),
(226, 'american (new)', 'b_17', '2014-10-28 05:12:23', '', '', ''),
(227, 'french', 'b_17', '2014-10-28 05:12:23', '', '', ''),
(228, 'american (new)', 't_12', '2014-10-28 05:12:23', '', '', ''),
(229, 'burgers', 't_12', '2014-10-28 05:12:23', '', '', ''),
(230, 'sports bars', 'numeric_1', '2014-10-28 05:12:23', '', '', ''),
(231, 'arts & entertainment', 'numeric_1', '2014-10-28 05:12:23', '', '', ''),
(232, 'delis', 'b_3', '2014-10-28 05:12:23', '', '', ''),
(233, 'wine bars', 'b_3', '2014-10-28 05:12:23', '', '', ''),
(234, 'american (new)', 't_14', '2014-10-28 05:12:23', '', '', ''),
(235, 'wine bars', 't_14', '2014-10-28 05:12:23', '', '', ''),
(236, 'american (traditional)', 'q_1', '2014-10-28 05:12:23', '', '', ''),
(237, 'burgers', 'q_1', '2014-10-28 05:12:23', '', '', ''),
(238, 'pubs', 'k_1', '2014-10-28 05:12:23', '', '', ''),
(239, 'music venues', 't_16', '2014-10-28 05:12:23', '', '', ''),
(240, 'american (new)', 't_16', '2014-10-28 05:12:23', '', '', ''),
(241, 'american (traditional)', 'e_1', '2014-10-28 05:12:23', '', '', ''),
(242, 'south african', 'e_1', '2014-10-28 05:12:23', '', '', ''),
(243, 'hotels', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(244, 'tours', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(245, 'lounges', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(246, 'steakhouses', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(247, 'seafood', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(248, 'breakfast & brunch', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(249, 'seafood', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(250, 'lounges', 'o_4', '2014-10-28 05:12:23', '', '', ''),
(251, 'american (new)', 'r_9', '2014-10-28 05:12:23', '', '', ''),
(252, 'pubs', 'r_9', '2014-10-28 05:12:23', '', '', ''),
(253, 'wine & spirits', 'p_1', '2014-10-28 05:12:23', '', '', ''),
(254, 'pubs', 'p_1', '2014-10-28 05:12:23', '', '', ''),
(255, 'barbeque', 'p_1', '2014-10-28 05:12:23', '', '', ''),
(256, 'breweries', 'p_1', '2014-10-28 05:12:23', '', '', ''),
(257, 'gastropubs', 'p_1', '2014-10-28 05:12:23', '', '', ''),
(258, 'gastropubs', 't_17', '2014-10-28 05:12:23', '', '', ''),
(259, 'tapas bars', 't_17', '2014-10-28 05:12:23', '', '', ''),
(260, 'mediterranean', 's_20', '2014-10-28 05:12:23', '', '', ''),
(261, 'american (new)', 's_20', '2014-10-28 05:12:23', '', '', ''),
(262, 'bars', 't_18', '2014-10-28 05:12:23', '', '', ''),
(263, 'bars', 's_21', '2014-10-28 05:12:23', '', '', ''),
(264, 'american (traditional)', 's_21', '2014-10-28 05:12:23', '', '', ''),
(265, 'mexican', 'r_10', '2014-10-28 05:12:23', '', '', ''),
(266, 'tapas/small plates', 'f_2', '2014-10-28 05:12:23', '', '', ''),
(267, 'tapas bars', 'f_2', '2014-10-28 05:12:23', '', '', ''),
(268, 'beer', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(269, 'wine & spirits', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(270, 'italian', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(271, 'dive bars', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(272, 'pubs', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(273, 'seafood', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(274, 'steakhouses', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(275, 'dive bars', 'c_3', '2014-10-28 05:12:23', '', '', ''),
(276, 'italian', 'c_4', '2014-10-28 05:12:23', '', '', ''),
(277, 'sports bars', 'c_4', '2014-10-28 05:12:23', '', '', ''),
(278, 'pool halls', 'b_5', '2014-10-28 05:12:23', '', '', ''),
(279, 'adult entertainment', 'l_4', '2014-10-28 05:12:23', '', '', ''),
(280, 'italian', 'd_2', '2014-10-28 05:12:23', '', '', ''),
(281, 'pizza', 'd_2', '2014-10-28 05:12:23', '', '', ''),
(282, 'bars', 'p_3', '2014-10-28 05:12:23', '', '', ''),
(283, 'american (traditional)', 'p_3', '2014-10-28 05:12:23', '', '', ''),
(284, 'american (new)', 'e_2', '2014-10-28 05:12:23', '', '', ''),
(285, 'steakhouses', 's_22', '2014-10-28 05:12:23', '', '', ''),
(286, 'seafood', 's_22', '2014-10-28 05:12:23', '', '', ''),
(287, 'hotels', 's_22', '2014-10-28 05:12:23', '', '', ''),
(288, 'tours', 's_22', '2014-10-28 05:12:23', '', '', ''),
(289, 'bars', 's_22', '2014-10-28 05:12:23', '', '', ''),
(290, 'breakfast & brunch', 's_22', '2014-10-28 05:12:23', '', '', ''),
(291, 'seafood', 's_22', '2014-10-28 05:12:23', '', '', ''),
(292, 'lounges', 's_22', '2014-10-28 05:12:23', '', '', ''),
(293, 'wine bars', 'q_2', '2014-10-28 05:12:23', '', '', ''),
(294, 'dive bars', 'r_11', '2014-10-28 05:12:23', '', '', ''),
(295, 'cocktail bars', 'r_11', '2014-10-28 05:12:23', '', '', ''),
(296, 'pubs', 's_23', '2014-10-28 05:12:23', '', '', ''),
(297, 'sports bars', 'i_1', '2014-10-28 05:12:23', '', '', ''),
(298, 'spanish', 't_20', '2014-10-28 05:12:23', '', '', ''),
(299, 'american (new)', 't_20', '2014-10-28 05:12:23', '', '', ''),
(300, 'music venues', 'g_4', '2014-10-28 05:12:23', '', '', ''),
(301, 'american (new)', 'g_4', '2014-10-28 05:12:23', '', '', ''),
(302, 'mexican', 't_21', '2014-10-28 05:12:23', '', '', ''),
(303, 'pubs', 'o_2', '2014-10-28 05:12:23', '', '', ''),
(304, 'lounges', 'b_6', '2014-10-28 05:12:23', '', '', ''),
(305, 'cocktail bars', 'b_6', '2014-10-28 05:12:23', '', '', ''),
(306, 'american (new)', 'n_4', '2014-10-28 05:12:23', '', '', ''),
(307, 'breakfast & brunch', 'n_4', '2014-10-28 05:12:23', '', '', ''),
(308, 'pubs', 't_22', '2014-10-28 05:12:23', '', '', ''),
(309, 'sports bars', 't_22', '2014-10-28 05:12:23', '', '', ''),
(310, 'bars', 'a_7', '2014-10-28 05:12:23', '', '', ''),
(311, 'steakhouses', 't_23', '2014-10-28 05:12:23', '', '', ''),
(312, 'music venues', 't_23', '2014-10-28 05:12:23', '', '', ''),
(313, 'american (traditional)', 's_26', '2014-10-28 05:12:23', '', '', ''),
(314, 'dive bars', 's_27', '2014-10-28 05:12:23', '', '', ''),
(315, 'american (traditional)', 'e_6', '2014-10-28 05:12:23', '', '', ''),
(316, 'breakfast & brunch', 'e_6', '2014-10-28 05:12:23', '', '', ''),
(317, 'american (traditional)', 'a_9', '2014-10-28 05:12:23', '', '', ''),
(318, 'tapas bars', 'u_1', '2014-10-28 05:12:23', '', '', ''),
(319, 'dance clubs', 'u_1', '2014-10-28 05:12:23', '', '', ''),
(320, 'lounges', 'm_3', '2014-10-28 05:12:23', '', '', ''),
(321, 'american (traditional)', 'numeric_3', '2014-10-28 05:12:23', '', '', ''),
(322, 'dance clubs', 'c_5', '2014-10-28 05:12:23', '', '', ''),
(323, 'breweries', 'b_8', '2014-10-28 05:12:23', '', '', ''),
(324, 'gastropubs', 'b_8', '2014-10-28 05:12:23', '', '', ''),
(325, 'karaoke', 't_26', '2014-10-28 05:12:23', '', '', ''),
(326, 'sports bars', 'p_8', '2014-10-28 05:12:23', '', '', ''),
(327, 'american (traditional)', 'b_9', '2014-10-28 05:12:23', '', '', ''),
(328, 'bars', 'p_9', '2014-10-28 05:12:23', '', '', ''),
(329, 'pizza', 'p_9', '2014-10-28 05:12:23', '', '', ''),
(330, 'american (traditional)', 't_27', '2014-10-28 05:12:23', '', '', ''),
(331, 'sushi bars', 'numeric_4', '2014-10-28 05:12:23', '', '', ''),
(332, 'chicken wings', 'l_6', '2014-10-28 05:12:23', '', '', ''),
(333, 'breakfast & brunch', 't_28', '2014-10-28 05:12:23', '', '', ''),
(334, 'mediterranean', 't_29', '2014-10-28 05:12:23', '', '', ''),
(335, 'lounges', 'r_12', '2014-10-28 05:12:23', '', '', ''),
(336, 'venues & event spaces', 'r_12', '2014-10-28 05:12:23', '', '', ''),
(337, 'american (new)', 'm_4', '2014-10-28 05:12:23', '', '', ''),
(338, 'music venues', 'm_4', '2014-10-28 05:12:23', '', '', ''),
(339, 'bars', 'c_7', '2014-10-28 05:12:23', '', '', ''),
(340, 'american (new)', 'c_7', '2014-10-28 05:12:23', '', '', ''),
(341, 'music venues', 'b_11', '2014-10-28 05:12:23', '', '', ''),
(342, 'lounges', 'b_11', '2014-10-28 05:12:23', '', '', ''),
(343, 'pubs', 'c_8', '2014-10-28 05:12:23', '', '', ''),
(344, 'music venues', 'c_8', '2014-10-28 05:12:23', '', '', ''),
(345, 'american (traditional)', 'j_4', '2014-10-28 05:12:23', '', '', ''),
(346, 'mediterranean', 'l_7', '2014-10-28 05:12:23', '', '', ''),
(347, 'venues & event spaces', 'l_7', '2014-10-28 05:12:23', '', '', ''),
(348, 'bakeries', 'j_5', '2014-10-28 05:12:24', '', '', ''),
(349, 'seafood', 't_31', '2014-10-28 05:12:24', '', '', ''),
(350, 'chocolatiers & shops', 'a_10', '2014-10-28 05:12:24', '', '', ''),
(351, 'vegetarian', 'a_10', '2014-10-28 05:12:24', '', '', ''),
(352, 'lounges', 'c_9', '2014-10-28 05:12:24', '', '', ''),
(353, 'help', 'c_14,c_15', '2014-10-28 05:14:54', '', '', ''),
(354, 'Spa', 'd_6', '2014-10-28 10:41:05', '', '', ''),
(355, 'bar', 'd_6', '2014-10-28 10:49:15', '', '', ''),
(356, 'shopping', 'o_8', '2014-10-28 12:59:14', '', '', ''),
(357, 'fgdfhh', 'o_8', '2014-10-28 13:48:50', '', '', ''),
(358, 'cmjcn', 'o_8', '2014-10-28 13:48:53', '', '', ''),
(359, 'food', 'c_23,a_1', '2014-10-28 13:58:30', '', '', ''),
(360, 'hair removal', 'e_7,k_3,s_37,s_38,t_55', '2014-10-28 15:55:53', '', '', ''),
(361, 'skin care', 'a_12,c_24,p_17,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(362, 'hair removal', 'a_12,k_3,s_37,s_38,t_55', '2014-10-28 15:55:53', '', '', ''),
(363, 'day spas', 'c_24,b_19,h_4,n_10,d_4,s_34,w_2,f_6,h_10,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(364, 'massage', 'o_5,t_36,s_33,a_16,s_35,m_7,r_13,e_13,f_7,m_8,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:53', '', '', ''),
(365, 'day spas', 'o_5,b_19,h_4,n_10,d_4,s_34,w_2,f_6,h_10,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(366, 'skin care', 'o_5,p_17,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(367, 'massage', 'h_4,t_36,s_33,a_16,s_35,m_7,r_13,e_13,f_7,m_8,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:53', '', '', ''),
(368, 'skin care', 'h_4,p_17,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(369, 'day spas', 't_36,n_10,d_4,s_34,w_2,f_6,h_10,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(370, 'yoga', 't_36', '2014-10-28 15:55:53', '', '', ''),
(371, 'reflexology', 's_33', '2014-10-28 15:55:53', '', '', ''),
(372, 'day spas', 's_33,n_10,d_4,s_34,w_2,f_6,h_10,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(373, 'skin care', 'n_10,p_17,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(374, 'massage', 'd_4,a_16,s_35,m_7,r_13,e_13,f_7,m_8,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:53', '', '', ''),
(375, 'skin care', 'd_4,p_17,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(376, 'day spas', 'a_16,s_34,w_2,f_6,h_10,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(377, 'cosmetics & beauty supply', 'a_16,l_13', '2014-10-28 15:55:53', '', '', ''),
(378, 'thai', 'a_16', '2014-10-28 15:55:53', '', '', ''),
(379, 'massage', 'w_2,s_35,m_7,r_13,e_13,f_7,m_8,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:53', '', '', ''),
(380, 'skin care', 'w_2,p_17,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(381, 'day spas', 'p_17,f_6,h_10,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(382, 'day spas', 's_35,f_6,h_10,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(383, 'massage therapy', 's_35', '2014-10-28 15:55:53', '', '', ''),
(384, 'hair salons', 'm_12,r_16,g_9', '2014-10-28 15:55:53', '', '', ''),
(385, 'massage', 'm_12,m_7,r_13,e_13,f_7,m_8,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:53', '', '', ''),
(386, 'skin care', 'm_12,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(387, 'massage therapy', 'f_6', '2014-10-28 15:55:53', '', '', ''),
(388, 'gyms', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(389, 'day spas', 'c_25,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(390, 'skin care', 'c_25,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(391, 'tires', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(392, 'korean', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(393, 'bars', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(394, 'barbeque', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(395, 'health markets', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(396, 'home decor', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(397, 'gift shops', 'c_25', '2014-10-28 15:55:53', '', '', ''),
(398, 'day spas', 'm_7,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(399, 'skin care', 'm_7,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:53', '', '', ''),
(400, 'ice cream & frozen yogurt', 'm_7', '2014-10-28 15:55:53', '', '', ''),
(401, 'day spas', 'r_13,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:53', '', '', ''),
(402, 'skin care', 'r_13,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(403, 'day spas', 'e_13,d_5,c_18,t_37,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(404, 'massage', 'c_18,f_7,m_8,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(405, 'massage', 't_37,f_7,m_8,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(406, 'personal shopping', 't_37', '2014-10-28 15:55:54', '', '', ''),
(407, 'day spas', 'f_7,i_3,a_14,t_38,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(408, 'health & medical', 'f_7', '2014-10-28 15:55:54', '', '', ''),
(409, 'skin care', 'i_3,f_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(410, 'hair removal', 'i_3,k_3,s_37,s_38,t_55', '2014-10-28 15:55:54', '', '', ''),
(411, 'acupuncture', 'f_8', '2014-10-28 15:55:54', '', '', ''),
(412, 'massage therapy', 'f_8', '2014-10-28 15:55:54', '', '', ''),
(413, 'skin care', 'm_8,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(414, 'chiropractors', 'm_8', '2014-10-28 15:55:54', '', '', ''),
(415, 'massage', 'a_14,s_36,l_8,t_39,t_54,w_4,w_5,r_14,h_6,a_15,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(416, 'skin care', 'a_14,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(417, 'day spas', 's_36,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(418, 'day spas', 'l_8,w_3,c_19,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(419, 'waxing', 'w_3', '2014-10-28 15:55:54', '', '', ''),
(420, 'skin care', 'k_3,b_20,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(421, 'acupuncture', 't_54', '2014-10-28 15:55:54', '', '', ''),
(422, 'fertility', 't_54', '2014-10-28 15:55:54', '', '', ''),
(423, 'day spas', 'b_20,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(424, 'hair removal', 'b_20,s_37,s_38,t_55', '2014-10-28 15:55:54', '', '', ''),
(425, 'skin care', 'h_6,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(426, 'nail salons', 'h_6,k_5,m_13,s_46', '2014-10-28 15:55:54', '', '', ''),
(427, 'hair extensions', 'h_6', '2014-10-28 15:55:54', '', '', ''),
(428, 'hair stylists', 'h_6', '2014-10-28 15:55:54', '', '', ''),
(429, 'blow dry/out services', 'h_6', '2014-10-28 15:55:54', '', '', ''),
(430, 'day spas', 'a_15,t_41,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(431, 'skin care', 'a_15,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(432, 'vegan', 'a_15', '2014-10-28 15:55:54', '', '', ''),
(433, 'live/raw food', 'a_15', '2014-10-28 15:55:54', '', '', ''),
(434, 'skin care', 's_37,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(435, 'eyelash service', 's_37', '2014-10-28 15:55:54', '', '', ''),
(436, 'massage', 's_37,b_21,c_20,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(437, 'reflexology', 's_37', '2014-10-28 15:55:54', '', '', ''),
(438, 'counseling & mental health', 's_37', '2014-10-28 15:55:54', '', '', ''),
(439, 'skin care', 'b_21,g_6,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(440, 'day spas', 'b_21,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(441, 'massage therapy', 'c_20', '2014-10-28 15:55:54', '', '', ''),
(442, 'massage', 'g_6,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(443, 'day spas', 'g_6,t_42,s_39,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(444, 'massage', 't_42,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(445, 'skin care', 's_38,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(446, 'massage', 's_39,r_19,s_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(447, 'mexican', 's_39', '2014-10-28 15:55:54', '', '', ''),
(448, 'chiropractors', 'r_19', '2014-10-28 15:55:54', '', '', ''),
(449, 'skin care', 'r_19,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(450, 'eyelash service', 's_40', '2014-10-28 15:55:54', '', '', ''),
(451, 'skin care', 's_40,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(452, 'hair removal', 's_40,t_55', '2014-10-28 15:55:54', '', '', ''),
(453, 'massage', 's_40,t_43,t_44,e_9,b_29,i_4,m_9,t_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(454, 'skin care', 's_40,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(455, 'medical spas', 't_44,r_18', '2014-10-28 15:55:54', '', '', ''),
(456, 'day spas', 't_44,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(457, 'skin care', 'b_29,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(458, 'day spas', 'b_29,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(459, 'tanning', 'b_23', '2014-10-28 15:55:54', '', '', ''),
(460, 'skin care', 'b_23,b_24,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(461, 'day spas', 'b_23,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(462, 'yoga', 't_45', '2014-10-28 15:55:54', '', '', ''),
(463, 'nutritionists', 't_45', '2014-10-28 15:55:54', '', '', ''),
(464, 'hair salons', 't_45,r_16,g_9', '2014-10-28 15:55:54', '', '', ''),
(465, 'massage', 't_45,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(466, 'day spas', 't_45,n_11,b_26,s_41,w_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(467, 'acupuncture', 't_45', '2014-10-28 15:55:54', '', '', ''),
(468, 'chiropractors', 't_45', '2014-10-28 15:55:54', '', '', ''),
(469, 'chiropractors', 't_45', '2014-10-28 15:55:54', '', '', ''),
(470, 'sports medicine', 't_45', '2014-10-28 15:55:54', '', '', ''),
(471, 'eyelash service', 'b_24', '2014-10-28 15:55:54', '', '', ''),
(472, 'hair removal', 'b_24,t_55', '2014-10-28 15:55:54', '', '', ''),
(473, 'skin care', 't_55,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(474, 'massage', 't_55,e_14,t_47,b_25,e_11,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(475, 'reflexology', 'e_14', '2014-10-28 15:55:54', '', '', ''),
(476, 'massage therapy', 'e_14', '2014-10-28 15:55:54', '', '', ''),
(477, 'skin care', 'r_16,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(478, 'nail salons', 'r_16,k_5,m_13,s_46', '2014-10-28 15:55:54', '', '', ''),
(479, 'american (new)', 'r_16', '2014-10-28 15:55:54', '', '', ''),
(480, 'pizza', 'r_16', '2014-10-28 15:55:54', '', '', ''),
(481, 'bakeries', 'r_16', '2014-10-28 15:55:54', '', '', ''),
(482, 'american (new)', 'r_16', '2014-10-28 15:55:54', '', '', ''),
(483, 'coffee & tea', 'r_16', '2014-10-28 15:55:54', '', '', ''),
(484, 'nail salons', 'b_26,k_5,m_13,s_46', '2014-10-28 15:55:54', '', '', ''),
(485, 'hair stylists', 'b_26', '2014-10-28 15:55:54', '', '', ''),
(486, 'hotels', 'b_26', '2014-10-28 15:55:54', '', '', ''),
(487, 'skin care', 'w_6,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(488, 'massage', 'w_6,f_9,s_42,w_7,t_48,w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(489, 'makeup artists', 'i_5,c_21', '2014-10-28 15:55:54', '', '', ''),
(490, 'tanning', 'i_5', '2014-10-28 15:55:54', '', '', ''),
(491, 'skin care', 'i_5,s_43,k_4,g_7,o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(492, 'hair salons', 'f_9,g_9', '2014-10-28 15:55:54', '', '', ''),
(493, 'laser hair removal', 'f_9', '2014-10-28 15:55:54', '', '', ''),
(494, 'medical spas', 'f_9,r_18', '2014-10-28 15:55:54', '', '', ''),
(495, 'day spas', 's_43,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(496, 'day spas', 'k_4,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(497, 'hair removal', 'k_4', '2014-10-28 15:55:54', '', '', ''),
(498, 'day spas', 't_48,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(499, 'massage', 'w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(500, 'day spas', 'w_8,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(501, 'massage', 'w_8,s_44,s_45,h_11,l_12,t_49,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(502, 'massage therapy', 's_45', '2014-10-28 15:55:54', '', '', ''),
(503, 'waxing', 't_49', '2014-10-28 15:55:54', '', '', ''),
(504, 'massage', 'k_5,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(505, 'hair removal', 'k_5', '2014-10-28 15:55:54', '', '', ''),
(506, 'waxing', 'g_7', '2014-10-28 15:55:54', '', '', ''),
(507, 'day spas', 'g_9,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(508, 'spray tanning', 'g_9', '2014-10-28 15:55:54', '', '', ''),
(509, 'massage', 'm_13,o_7,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(510, 'day spas', 'o_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(511, 'day spas', 'o_6,t_50,r_17,k_6,e_12', '2014-10-28 15:55:54', '', '', ''),
(512, 'skin care', 'o_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(513, 'massage', 't_50,h_8,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(514, 'skin care', 't_50,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(515, 'reflexology', 'h_8', '2014-10-28 15:55:54', '', '', ''),
(516, 'massage', 'r_17,t_51,m_11,t_52,h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(517, 'skin care', 't_51,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(518, 'hair removal', 'c_21', '2014-10-28 15:55:54', '', '', ''),
(519, 'skin care', 'c_21,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(520, 'eyelash service', 'c_21', '2014-10-28 15:55:54', '', '', ''),
(521, 'photographers', 'c_21', '2014-10-28 15:55:54', '', '', ''),
(522, 'skin care', 'r_18,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(523, 'laser hair removal', 'r_18', '2014-10-28 15:55:54', '', '', ''),
(524, 'acupuncture', 'h_9', '2014-10-28 15:55:54', '', '', ''),
(525, 'chiropractors', 'h_9', '2014-10-28 15:55:54', '', '', ''),
(526, 'massage', 'h_9,b_27,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(527, 'acupuncture', 'h_9', '2014-10-28 15:55:54', '', '', ''),
(528, 'chiropractors', 'h_9', '2014-10-28 15:55:54', '', '', ''),
(529, 'skin care', 'b_27,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(530, 'acupuncture', 'b_27', '2014-10-28 15:55:54', '', '', ''),
(531, 'massage', 's_46,t_53,l_14,k_7,k_8', '2014-10-28 15:55:54', '', '', ''),
(532, 'hair salons', 'k_6', '2014-10-28 15:55:54', '', '', ''),
(533, 'skin care', 'k_6,c_26,b_28', '2014-10-28 15:55:54', '', '', ''),
(534, 'cosmetics & beauty supply', 'c_26,l_13', '2014-10-28 15:55:54', '', '', ''),
(535, 'skin care', 'l_13,b_28', '2014-10-28 15:55:54', '', '', ''),
(536, 'skin care', 'k_7,b_28', '2014-10-28 15:55:54', '', '', ''),
(537, 'hair removal', 'b_28', '2014-10-28 15:55:54', '', '', ''),
(538, 'eyelash service', 'b_28', '2014-10-28 15:55:54', '', '', ''),
(539, 'pizza', 'b_28', '2014-10-28 15:55:54', '', '', ''),
(540, 'hair removal', 'a_12', '2014-10-28 16:40:49', '', '', ''),
(541, 'day spas', 'c_24', '2014-10-28 16:40:49', '', '', ''),
(542, 'day spas', 'o_5', '2014-10-28 16:40:49', '', '', ''),
(543, 'skin care', 'o_5', '2014-10-28 16:40:49', '', '', ''),
(544, 'massage', 'h_4', '2014-10-28 16:40:49', '', '', ''),
(545, 'skin care', 'h_4', '2014-10-28 16:40:49', '', '', ''),
(546, 'day spas', 't_36', '2014-10-28 16:40:49', '', '', ''),
(547, 'yoga', 't_36', '2014-10-28 16:40:49', '', '', ''),
(548, 'reflexology', 's_33', '2014-10-28 16:40:49', '', '', ''),
(549, 'day spas', 's_33', '2014-10-28 16:40:49', '', '', ''),
(550, 'skin care', 'n_10', '2014-10-28 16:40:49', '', '', ''),
(551, 'massage', 'd_4', '2014-10-28 16:40:49', '', '', ''),
(552, 'skin care', 'd_4', '2014-10-28 16:40:49', '', '', ''),
(553, 'day spas', 'a_16', '2014-10-28 16:40:49', '', '', ''),
(554, 'cosmetics & beauty supply', 'a_16', '2014-10-28 16:40:49', '', '', ''),
(555, 'thai', 'a_16', '2014-10-28 16:40:49', '', '', ''),
(556, 'massage', 'w_2', '2014-10-28 16:40:49', '', '', ''),
(557, 'skin care', 'w_2', '2014-10-28 16:40:49', '', '', ''),
(558, 'day spas', 'p_17', '2014-10-28 16:40:49', '', '', ''),
(559, 'day spas', 's_35', '2014-10-28 16:40:49', '', '', ''),
(560, 'massage therapy', 's_35', '2014-10-28 16:40:49', '', '', ''),
(561, 'massage', 'm_12', '2014-10-28 16:40:49', '', '', ''),
(562, 'skin care', 'm_12', '2014-10-28 16:40:49', '', '', ''),
(563, 'massage therapy', 'f_6', '2014-10-28 16:40:49', '', '', ''),
(564, 'day spas', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(565, 'skin care', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(566, 'tires', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(567, 'korean', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(568, 'bars', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(569, 'barbeque', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(570, 'health markets', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(571, 'home decor', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(572, 'gift shops', 'c_25', '2014-10-28 16:40:49', '', '', ''),
(573, 'day spas', 'm_7', '2014-10-28 16:40:49', '', '', ''),
(574, 'skin care', 'm_7', '2014-10-28 16:40:49', '', '', ''),
(575, 'ice cream & frozen yogurt', 'm_7', '2014-10-28 16:40:49', '', '', ''),
(576, 'day spas', 'r_13', '2014-10-28 16:40:49', '', '', ''),
(577, 'skin care', 'r_13', '2014-10-28 16:40:49', '', '', ''),
(578, 'day spas', 'e_13', '2014-10-28 16:40:49', '', '', ''),
(579, 'massage', 'c_18', '2014-10-28 16:40:49', '', '', ''),
(580, 'massage', 't_37', '2014-10-28 16:40:49', '', '', ''),
(581, 'personal shopping', 't_37', '2014-10-28 16:40:49', '', '', ''),
(582, 'day spas', 'f_7', '2014-10-28 16:40:49', '', '', ''),
(583, 'health & medical', 'f_7', '2014-10-28 16:40:49', '', '', ''),
(584, 'skin care', 'i_3', '2014-10-28 16:40:49', '', '', ''),
(585, 'hair removal', 'i_3', '2014-10-28 16:40:49', '', '', ''),
(586, 'acupuncture', 'f_8', '2014-10-28 16:40:49', '', '', ''),
(587, 'massage therapy', 'f_8', '2014-10-28 16:40:49', '', '', ''),
(588, 'skin care', 'm_8', '2014-10-28 16:40:49', '', '', ''),
(589, 'chiropractors', 'm_8', '2014-10-28 16:40:49', '', '', ''),
(590, 'massage', 'a_14', '2014-10-28 16:40:49', '', '', ''),
(591, 'skin care', 'a_14', '2014-10-28 16:40:49', '', '', ''),
(592, 'day spas', 's_36', '2014-10-28 16:40:49', '', '', ''),
(593, 'day spas', 'l_8', '2014-10-28 16:40:49', '', '', ''),
(594, 'waxing', 'w_3', '2014-10-28 16:40:49', '', '', ''),
(595, 'skin care', 'k_3', '2014-10-28 16:40:49', '', '', ''),
(596, 'Shopping', 't_54', '2014-10-28 16:40:50', 'saffersmall_112E11BXKN_GW8IR7_S_.jpg', 'saffersmall_KBDVCO2FJSHNJ19FA15S.jpg', 'fa fa-shopping-cart'),
(597, 'Fitness & Sports', 't_54', '2014-10-28 16:40:50', 'saffersmall_11V4K8_O6JA_4Q_1WGU5.jpg', 'saffersmall__ISDTBP3OVP_9PMCREE_.jpg', 'fa fa-bicycle'),
(598, 'aUTOMOBILE', 'b_20', '2014-10-28 16:40:50', 'saffersmall_VX1ESPCU0HGS133B_2BX.jpg', 'saffersmall_860I816CPDNL8_JL4CJC.jpg', 'fa fa-car'),
(599, 'Beauty & Spa', 'b_20', '2014-10-28 16:40:50', 'saffersmall_TAT4WG82JHOEH82EZ6G2.jpg', 'saffersmall_D5MRBQQG9SGMGR_8DK2H.jpg', 'fa fa-leaf'),
(600, 'Creative & Digital', 'h_6', '2014-10-28 16:40:50', 'saffersmall_NQG56G7FN0W9XDSWFHZZ.jpg', 'saffersmall_08MRCL_R2K9BY2J4KY7C.jpg', 'fa fa-paint-brush'),
(601, 'coffee & Tea ', 'h_6', '2014-10-28 16:40:50', 'saffersmall_REE_VX1ESPCU0HGS133B.jpg', 'saffersmall__2BX860I816CPDNL8_JL.jpg', 'fa fa-coffee'),
(602, 'hair extensions', 'h_6', '2014-10-28 16:40:50', '', '', ''),
(603, 'hair stylists', 'h_6', '2014-10-28 16:40:50', '', '', ''),
(604, 'blow dry/out services', 'h_6', '2014-10-28 16:40:50', '', '', ''),
(605, 'day spas', 'a_15', '2014-10-28 16:40:50', '', '', ''),
(606, 'skin care', 'a_15', '2014-10-28 16:40:50', '', '', ''),
(607, 'vegan', 'a_15', '2014-10-28 16:40:50', '', '', ''),
(608, 'live/raw food', 'a_15', '2014-10-28 16:40:50', '', '', ''),
(609, 'skin care', 's_37', '2014-10-28 16:40:50', '', '', ''),
(610, 'eyelash service', 's_37', '2014-10-28 16:40:50', '', '', ''),
(611, 'massage', 's_37', '2014-10-28 16:40:50', '', '', ''),
(612, 'reflexology', 's_37', '2014-10-28 16:40:50', '', '', ''),
(613, 'counseling & mental health', 's_37', '2014-10-28 16:40:50', '', '', ''),
(614, 'skin care', 'b_21', '2014-10-28 16:40:50', '', '', ''),
(615, 'day spas', 'b_21', '2014-10-28 16:40:50', '', '', ''),
(616, 'massage therapy', 'c_20', '2014-10-28 16:40:50', '', '', ''),
(617, 'massage', 'g_6', '2014-10-28 16:40:50', '', '', ''),
(618, 'day spas', 'g_6', '2014-10-28 16:40:50', '', '', ''),
(619, 'massage', 't_42', '2014-10-28 16:40:50', '', '', ''),
(620, 'skin care', 's_38', '2014-10-28 16:40:50', '', '', ''),
(621, 'massage', 's_39', '2014-10-28 16:40:50', '', '', ''),
(622, 'mexican', 's_39', '2014-10-28 16:40:50', '', '', ''),
(623, 'chiropractors', 'r_19', '2014-10-28 16:40:50', '', '', ''),
(624, 'skin care', 'r_19', '2014-10-28 16:40:50', '', '', ''),
(625, 'eyelash service', 's_40', '2014-10-28 16:40:50', '', '', ''),
(626, 'skin care', 's_40', '2014-10-28 16:40:50', '', '', ''),
(627, 'hair removal', 's_40', '2014-10-28 16:40:50', '', '', ''),
(628, 'massage', 's_40', '2014-10-28 16:40:50', '', '', ''),
(629, 'skin care', 's_40', '2014-10-28 16:40:50', '', '', ''),
(630, 'medical spas', 't_44', '2014-10-28 16:40:50', '', '', ''),
(631, 'day spas', 't_44', '2014-10-28 16:40:50', '', '', ''),
(632, 'skin care', 'b_29', '2014-10-28 16:40:50', '', '', ''),
(633, 'day spas', 'b_29', '2014-10-28 16:40:50', '', '', ''),
(634, 'skin care', 'b_23', '2014-10-28 16:40:50', '', '', ''),
(635, 'day spas', 'b_23', '2014-10-28 16:40:50', '', '', ''),
(636, 'yoga', 't_45', '2014-10-28 16:40:50', '', '', ''),
(637, 'nutritionists', 't_45', '2014-10-28 16:40:50', '', '', ''),
(638, 'hair salons', 't_45', '2014-10-28 16:40:50', '', '', '');
INSERT INTO `unique_category` (`sno`, `name`, `business_id`, `date_modified`, `image`, `logo`, `icon_class`) VALUES
(639, 'massage', 't_45', '2014-10-28 16:40:50', '', '', ''),
(640, 'day spas', 't_45', '2014-10-28 16:40:50', '', '', ''),
(641, 'acupuncture', 't_45', '2014-10-28 16:40:50', '', '', ''),
(642, 'chiropractors', 't_45', '2014-10-28 16:40:50', '', '', ''),
(643, 'chiropractors', 't_45', '2014-10-28 16:40:50', '', '', ''),
(644, 'sports medicine', 't_45', '2014-10-28 16:40:50', '', '', ''),
(645, 'eyelash service', 'b_24', '2014-10-28 16:40:50', '', '', ''),
(646, 'hair removal', 'b_24', '2014-10-28 16:40:50', '', '', ''),
(647, 'skin care', 't_55', '2014-10-28 16:40:50', '', '', ''),
(648, 'massage', 't_55', '2014-10-28 16:40:50', '', '', ''),
(649, 'reflexology', 'e_14', '2014-10-28 16:40:50', '', '', ''),
(650, 'massage therapy', 'e_14', '2014-10-28 16:40:50', '', '', ''),
(651, 'skin care', 'r_16', '2014-10-28 16:40:50', '', '', ''),
(652, 'nail salons', 'r_16', '2014-10-28 16:40:50', '', '', ''),
(653, 'american (new)', 'r_16', '2014-10-28 16:40:50', '', '', ''),
(654, 'pizza', 'r_16', '2014-10-28 16:40:50', '', '', ''),
(655, 'bakeries', 'r_16', '2014-10-28 16:40:50', '', '', ''),
(656, 'american (new)', 'r_16', '2014-10-28 16:40:50', '', '', ''),
(657, 'coffee & tea', 'r_16', '2014-10-28 16:40:50', '', '', ''),
(658, 'nail salons', 'b_26', '2014-10-28 16:40:50', '', '', ''),
(659, 'hair stylists', 'b_26', '2014-10-28 16:40:50', '', '', ''),
(660, 'hotels', 'b_26', '2014-10-28 16:40:50', '', '', ''),
(661, 'skin care', 'w_6', '2014-10-28 16:40:50', '', '', ''),
(662, 'massage', 'w_6', '2014-10-28 16:40:50', '', '', ''),
(663, 'tanning', 'i_5', '2014-10-28 16:40:50', '', '', ''),
(664, 'skin care', 'i_5', '2014-10-28 16:40:50', '', '', ''),
(665, 'hair salons', 'f_9', '2014-10-28 16:40:50', '', '', ''),
(666, 'laser hair removal', 'f_9', '2014-10-28 16:40:50', '', '', ''),
(667, 'medical spas', 'f_9', '2014-10-28 16:40:50', '', '', ''),
(668, 'day spas', 's_43', '2014-10-28 16:40:50', '', '', ''),
(669, 'day spas', 'k_4', '2014-10-28 16:40:50', '', '', ''),
(670, 'hair removal', 'k_4', '2014-10-28 16:40:50', '', '', ''),
(671, 'day spas', 't_48', '2014-10-28 16:40:50', '', '', ''),
(672, 'massage', 'w_8', '2014-10-28 16:40:50', '', '', ''),
(673, 'day spas', 'w_8', '2014-10-28 16:40:50', '', '', ''),
(674, 'massage', 'w_8', '2014-10-28 16:40:50', '', '', ''),
(675, 'massage therapy', 's_45', '2014-10-28 16:40:50', '', '', ''),
(676, 'waxing', 't_49', '2014-10-28 16:40:50', '', '', ''),
(677, 'massage', 'k_5', '2014-10-28 16:40:50', '', '', ''),
(678, 'hair removal', 'k_5', '2014-10-28 16:40:50', '', '', ''),
(679, 'waxing', 'g_7', '2014-10-28 16:40:50', '', '', ''),
(680, 'day spas', 'g_9', '2014-10-28 16:40:50', '', '', ''),
(681, 'spray tanning', 'g_9', '2014-10-28 16:40:50', '', '', ''),
(682, 'massage', 'm_13', '2014-10-28 16:40:50', '', '', ''),
(683, 'day spas', 'o_6', '2014-10-28 16:40:50', '', '', ''),
(684, 'day spas', 'o_6', '2014-10-28 16:40:50', '', '', ''),
(685, 'skin care', 'o_6', '2014-10-28 16:40:50', '', '', ''),
(686, 'massage', 't_50', '2014-10-28 16:40:50', '', '', ''),
(687, 'skin care', 't_50', '2014-10-28 16:40:50', '', '', ''),
(688, 'reflexology', 'h_8', '2014-10-28 16:40:50', '', '', ''),
(689, 'massage', 'r_17', '2014-10-28 16:40:50', '', '', ''),
(690, 'skin care', 't_51', '2014-10-28 16:40:50', '', '', ''),
(691, 'hair removal', 'c_21', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(692, 'skin care', 'c_21', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(693, 'eyelash service', 'c_21', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(694, 'photographers', 'c_21', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(695, 'skin care', 'r_18', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(696, 'laser hair removal', 'r_18', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(697, 'acupuncture', 'h_9', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(698, 'chiropractors', 'h_9', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(699, 'massage', 'h_9', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(700, 'acupuncture', 'h_9', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(701, 'chiropractors', 'h_9', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(702, 'skin care', 'b_27', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(703, 'acupuncture', 'b_27', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(704, 'massage', 's_46', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(705, 'hair salons', 'k_6', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(706, 'skin care', 'k_6', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(707, 'cosmetics & beauty supply', 'c_26', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(708, 'skin care', 'l_13', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(709, 'skin care', 'k_7', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(710, 'hair removal', 'b_28', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(711, 'eyelash service', 'b_28', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(712, 'pizza', 'b_28', '2014-10-28 16:40:50', '', '', 'fa fa-cutlery'),
(713, 'Nightlife', '', '2014-10-31 10:07:49', 'saffersmall__9TPYIE_L5UN6P8X00FA.jpg', 'saffersmall_9KB0L9Y9NO47ZEY0YC7Z.jpg', 'fa fa-glass'),
(714, 'Resturant ', 's_57', '2014-11-09 15:40:43', 'saffersmall_KGFN9AXY0WTIA14NHBP_.png', 'saffersmall_6EIVO5GAF2L2UVS6G_ZU.png', 'fa fa-cutlery'),
(715, 'hair removal', 'a_12', '2014-11-10 12:37:32', NULL, NULL, NULL),
(716, 'day spas', 'c_24', '2014-11-10 12:37:32', NULL, NULL, NULL),
(717, 'day spas', 'o_5', '2014-11-10 12:37:32', NULL, NULL, NULL),
(718, 'skin care', 'o_5', '2014-11-10 12:37:32', NULL, NULL, NULL),
(719, 'massage', 'h_4', '2014-11-10 12:37:32', NULL, NULL, NULL),
(720, 'skin care', 'h_4', '2014-11-10 12:37:32', NULL, NULL, NULL),
(721, 'day spas', 't_36', '2014-11-10 12:37:32', NULL, NULL, NULL),
(722, 'yoga', 't_36', '2014-11-10 12:37:32', NULL, NULL, NULL),
(723, 'reflexology', 's_33', '2014-11-10 12:37:32', NULL, NULL, NULL),
(724, 'day spas', 's_33', '2014-11-10 12:37:33', NULL, NULL, NULL),
(725, 'skin care', 'n_10', '2014-11-10 12:37:33', NULL, NULL, NULL),
(726, 'massage', 'd_4', '2014-11-10 12:37:33', NULL, NULL, NULL),
(727, 'skin care', 'd_4', '2014-11-10 12:37:33', NULL, NULL, NULL),
(728, 'day spas', 'a_16', '2014-11-10 12:37:33', NULL, NULL, NULL),
(729, 'cosmetics & beauty supply', 'a_16', '2014-11-10 12:37:33', NULL, NULL, NULL),
(730, 'thai', 'a_16', '2014-11-10 12:37:33', NULL, NULL, NULL),
(731, 'massage', 'w_2', '2014-11-10 12:37:33', NULL, NULL, NULL),
(732, 'skin care', 'w_2', '2014-11-10 12:37:33', NULL, NULL, NULL),
(733, 'day spas', 'p_17', '2014-11-10 12:37:33', NULL, NULL, NULL),
(734, 'day spas', 's_35', '2014-11-10 12:37:33', NULL, NULL, NULL),
(735, 'massage therapy', 's_35', '2014-11-10 12:37:33', NULL, NULL, NULL),
(736, 'massage', 'm_12', '2014-11-10 12:37:33', NULL, NULL, NULL),
(737, 'skin care', 'm_12', '2014-11-10 12:37:33', NULL, NULL, NULL),
(738, 'massage therapy', 'f_6', '2014-11-10 12:37:33', NULL, NULL, NULL),
(739, 'day spas', 'c_25', '2014-11-10 12:37:33', NULL, NULL, NULL),
(740, 'skin care', 'c_25', '2014-11-10 12:37:33', NULL, NULL, NULL),
(741, 'tires', 'c_25', '2014-11-10 12:37:33', NULL, NULL, NULL),
(742, 'korean', 'c_25', '2014-11-10 12:37:33', NULL, NULL, NULL),
(743, 'bars', 'c_25', '2014-11-10 12:37:34', NULL, NULL, NULL),
(744, 'barbeque', 'c_25', '2014-11-10 12:37:34', NULL, NULL, NULL),
(745, 'health markets', 'c_25', '2014-11-10 12:37:34', NULL, NULL, NULL),
(746, 'home decor', 'c_25', '2014-11-10 12:37:34', NULL, NULL, NULL),
(747, 'gift shops', 'c_25', '2014-11-10 12:37:34', NULL, NULL, NULL),
(748, 'day spas', 'm_7', '2014-11-10 12:37:34', NULL, NULL, NULL),
(749, 'skin care', 'm_7', '2014-11-10 12:37:34', NULL, NULL, NULL),
(750, 'ice cream & frozen yogurt', 'm_7', '2014-11-10 12:37:34', NULL, NULL, NULL),
(751, 'day spas', 'r_13', '2014-11-10 12:37:34', NULL, NULL, NULL),
(752, 'skin care', 'r_13', '2014-11-10 12:37:34', NULL, NULL, NULL),
(753, 'day spas', 'e_13', '2014-11-10 12:37:34', NULL, NULL, NULL),
(754, 'massage', 'c_18', '2014-11-10 12:37:34', NULL, NULL, NULL),
(755, 'massage', 't_37', '2014-11-10 12:37:35', NULL, NULL, NULL),
(756, 'personal shopping', 't_37', '2014-11-10 12:37:35', NULL, NULL, NULL),
(757, 'day spas', 'f_7', '2014-11-10 12:37:35', NULL, NULL, NULL),
(758, 'health & medical', 'f_7', '2014-11-10 12:37:35', NULL, NULL, NULL),
(759, 'skin care', 'i_3', '2014-11-10 12:37:35', NULL, NULL, NULL),
(760, 'hair removal', 'i_3', '2014-11-10 12:37:35', NULL, NULL, NULL),
(761, 'acupuncture', 'f_8', '2014-11-10 12:37:35', NULL, NULL, NULL),
(762, 'massage therapy', 'f_8', '2014-11-10 12:37:35', NULL, NULL, NULL),
(763, 'skin care', 'm_8', '2014-11-10 12:37:35', NULL, NULL, NULL),
(764, 'chiropractors', 'm_8', '2014-11-10 12:37:35', NULL, NULL, NULL),
(765, 'massage', 'a_14', '2014-11-10 12:37:35', NULL, NULL, NULL),
(766, 'skin care', 'a_14', '2014-11-10 12:37:35', NULL, NULL, NULL),
(767, 'day spas', 's_36', '2014-11-10 12:37:36', NULL, NULL, NULL),
(768, 'day spas', 'l_8', '2014-11-10 12:37:36', NULL, NULL, NULL),
(769, 'waxing', 'w_3', '2014-11-10 12:37:36', NULL, NULL, NULL),
(770, 'skin care', 'k_3', '2014-11-10 12:37:36', NULL, NULL, NULL),
(771, 'acupuncture', 't_54', '2014-11-10 12:37:37', NULL, NULL, NULL),
(772, 'fertility', 't_54', '2014-11-10 12:37:37', NULL, NULL, NULL),
(773, 'day spas', 'b_20', '2014-11-10 12:37:37', NULL, NULL, NULL),
(774, 'hair removal', 'b_20', '2014-11-10 12:37:37', NULL, NULL, NULL),
(775, 'skin care', 'h_6', '2014-11-10 12:37:37', NULL, NULL, NULL),
(776, 'nail salons', 'h_6', '2014-11-10 12:37:38', NULL, NULL, NULL),
(777, 'hair extensions', 'h_6', '2014-11-10 12:37:38', NULL, NULL, NULL),
(778, 'hair stylists', 'h_6', '2014-11-10 12:37:38', NULL, NULL, NULL),
(779, 'blow dry/out services', 'h_6', '2014-11-10 12:37:38', NULL, NULL, NULL),
(780, 'day spas', 'a_15', '2014-11-10 12:37:38', NULL, NULL, NULL),
(781, 'skin care', 'a_15', '2014-11-10 12:37:38', NULL, NULL, NULL),
(782, 'vegan', 'a_15', '2014-11-10 12:37:38', NULL, NULL, NULL),
(783, 'live/raw food', 'a_15', '2014-11-10 12:37:38', NULL, NULL, NULL),
(784, 'skin care', 's_37', '2014-11-10 12:37:38', NULL, NULL, NULL),
(785, 'eyelash service', 's_37', '2014-11-10 12:37:38', NULL, NULL, NULL),
(786, 'massage', 's_37', '2014-11-10 12:37:39', NULL, NULL, NULL),
(787, 'reflexology', 's_37', '2014-11-10 12:37:39', NULL, NULL, NULL),
(788, 'counseling & mental health', 's_37', '2014-11-10 12:37:39', NULL, NULL, NULL),
(789, 'skin care', 'b_21', '2014-11-10 12:37:39', NULL, NULL, NULL),
(790, 'day spas', 'b_21', '2014-11-10 12:37:40', NULL, NULL, NULL),
(791, 'massage therapy', 'c_20', '2014-11-10 12:37:40', NULL, NULL, NULL),
(792, 'massage', 'g_6', '2014-11-10 12:37:40', NULL, NULL, NULL),
(793, 'day spas', 'g_6', '2014-11-10 12:37:40', NULL, NULL, NULL),
(794, 'massage', 't_42', '2014-11-10 12:37:41', NULL, NULL, NULL),
(795, 'skin care', 's_38', '2014-11-10 12:37:41', NULL, NULL, NULL),
(796, 'massage', 's_39', '2014-11-10 12:37:41', NULL, NULL, NULL),
(797, 'mexican', 's_39', '2014-11-10 12:37:41', NULL, NULL, NULL),
(798, 'chiropractors', 'r_19', '2014-11-10 12:37:41', NULL, NULL, NULL),
(799, 'skin care', 'r_19', '2014-11-10 12:37:41', NULL, NULL, NULL),
(800, 'eyelash service', 's_40', '2014-11-10 12:37:42', NULL, NULL, NULL),
(801, 'skin care', 's_40', '2014-11-10 12:37:42', NULL, NULL, NULL),
(802, 'hair removal', 's_40', '2014-11-10 12:37:42', NULL, NULL, NULL),
(803, 'massage', 's_40', '2014-11-10 12:37:42', NULL, NULL, NULL),
(804, 'skin care', 's_40', '2014-11-10 12:37:42', NULL, NULL, NULL),
(805, 'medical spas', 't_44', '2014-11-10 12:37:42', NULL, NULL, NULL),
(806, 'day spas', 't_44', '2014-11-10 12:37:42', NULL, NULL, NULL),
(807, 'skin care', 'b_29', '2014-11-10 12:37:42', NULL, NULL, NULL),
(808, 'day spas', 'b_29', '2014-11-10 12:37:43', NULL, NULL, NULL),
(809, 'skin care', 'b_23', '2014-11-10 12:37:43', NULL, NULL, NULL),
(810, 'day spas', 'b_23', '2014-11-10 12:37:43', NULL, NULL, NULL),
(811, 'yoga', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(812, 'nutritionists', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(813, 'hair salons', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(814, 'massage', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(815, 'day spas', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(816, 'acupuncture', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(817, 'chiropractors', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(818, 'chiropractors', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(819, 'sports medicine', 't_45', '2014-11-10 12:37:43', NULL, NULL, NULL),
(820, 'eyelash service', 'b_24', '2014-11-10 12:37:43', NULL, NULL, NULL),
(821, 'hair removal', 'b_24', '2014-11-10 12:37:43', NULL, NULL, NULL),
(822, 'skin care', 't_55', '2014-11-10 12:37:43', NULL, NULL, NULL),
(823, 'massage', 't_55', '2014-11-10 12:37:43', NULL, NULL, NULL),
(824, 'reflexology', 'e_14', '2014-11-10 12:37:43', NULL, NULL, NULL),
(825, 'massage therapy', 'e_14', '2014-11-10 12:37:43', NULL, NULL, NULL),
(826, 'skin care', 'r_16', '2014-11-10 12:37:43', NULL, NULL, NULL),
(827, 'nail salons', 'r_16', '2014-11-10 12:37:43', NULL, NULL, NULL),
(828, 'american (new)', 'r_16', '2014-11-10 12:37:43', NULL, NULL, NULL),
(829, 'pizza', 'r_16', '2014-11-10 12:37:44', NULL, NULL, NULL),
(830, 'bakeries', 'r_16', '2014-11-10 12:37:44', NULL, NULL, NULL),
(831, 'american (new)', 'r_16', '2014-11-10 12:37:44', NULL, NULL, NULL),
(832, 'coffee & tea', 'r_16', '2014-11-10 12:37:44', NULL, NULL, NULL),
(833, 'nail salons', 'b_26', '2014-11-10 12:37:44', NULL, NULL, NULL),
(834, 'hair stylists', 'b_26', '2014-11-10 12:37:44', NULL, NULL, NULL),
(835, 'hotels', 'b_26', '2014-11-10 12:37:44', NULL, NULL, NULL),
(836, 'skin care', 'w_6', '2014-11-10 12:37:44', NULL, NULL, NULL),
(837, 'massage', 'w_6', '2014-11-10 12:37:44', NULL, NULL, NULL),
(838, 'tanning', 'i_5', '2014-11-10 12:37:44', NULL, NULL, NULL),
(839, 'skin care', 'i_5', '2014-11-10 12:37:44', NULL, NULL, NULL),
(840, 'hair salons', 'f_9', '2014-11-10 12:37:44', NULL, NULL, NULL),
(841, 'laser hair removal', 'f_9', '2014-11-10 12:37:44', NULL, NULL, NULL),
(842, 'medical spas', 'f_9', '2014-11-10 12:37:44', NULL, NULL, NULL),
(843, 'day spas', 's_43', '2014-11-10 12:37:45', NULL, NULL, NULL),
(844, 'day spas', 'k_4', '2014-11-10 12:37:45', NULL, NULL, NULL),
(845, 'hair removal', 'k_4', '2014-11-10 12:37:45', NULL, NULL, NULL),
(846, 'day spas', 't_48', '2014-11-10 12:37:45', NULL, NULL, NULL),
(847, 'massage', 'w_8', '2014-11-10 12:37:45', NULL, NULL, NULL),
(848, 'day spas', 'w_8', '2014-11-10 12:37:45', NULL, NULL, NULL),
(849, 'massage', 'w_8', '2014-11-10 12:37:45', NULL, NULL, NULL),
(850, 'massage therapy', 's_45', '2014-11-10 12:37:45', NULL, NULL, NULL),
(851, 'waxing', 't_49', '2014-11-10 12:37:45', NULL, NULL, NULL),
(852, 'massage', 'k_5', '2014-11-10 12:37:45', NULL, NULL, NULL),
(853, 'hair removal', 'k_5', '2014-11-10 12:37:45', NULL, NULL, NULL),
(854, 'waxing', 'g_7', '2014-11-10 12:37:45', NULL, NULL, NULL),
(855, 'day spas', 'g_9', '2014-11-10 12:37:45', NULL, NULL, NULL),
(856, 'spray tanning', 'g_9', '2014-11-10 12:37:45', NULL, NULL, NULL),
(857, 'massage', 'm_13', '2014-11-10 12:37:46', NULL, NULL, NULL),
(858, 'day spas', 'o_6', '2014-11-10 12:37:46', NULL, NULL, NULL),
(859, 'day spas', 'o_6', '2014-11-10 12:37:46', NULL, NULL, NULL),
(860, 'skin care', 'o_6', '2014-11-10 12:37:46', NULL, NULL, NULL),
(861, 'massage', 't_50', '2014-11-10 12:37:46', NULL, NULL, NULL),
(862, 'skin care', 't_50', '2014-11-10 12:37:46', NULL, NULL, NULL),
(863, 'reflexology', 'h_8', '2014-11-10 12:37:46', NULL, NULL, NULL),
(864, 'massage', 'r_17', '2014-11-10 12:37:46', NULL, NULL, NULL),
(865, 'skin care', 't_51', '2014-11-10 12:37:46', NULL, NULL, NULL),
(866, 'hair removal', 'c_21', '2014-11-10 12:37:46', NULL, NULL, NULL),
(867, 'skin care', 'c_21', '2014-11-10 12:37:46', NULL, NULL, NULL),
(868, 'eyelash service', 'c_21', '2014-11-10 12:37:46', NULL, NULL, NULL),
(869, 'photographers', 'c_21', '2014-11-10 12:37:46', NULL, NULL, NULL),
(870, 'skin care', 'r_18', '2014-11-10 12:37:46', NULL, NULL, NULL),
(871, 'laser hair removal', 'r_18', '2014-11-10 12:37:46', NULL, NULL, NULL),
(872, 'acupuncture', 'h_9', '2014-11-10 12:37:46', NULL, NULL, NULL),
(873, 'chiropractors', 'h_9', '2014-11-10 12:37:46', NULL, NULL, NULL),
(874, 'massage', 'h_9', '2014-11-10 12:37:47', NULL, NULL, NULL),
(875, 'acupuncture', 'h_9', '2014-11-10 12:37:47', NULL, NULL, NULL),
(876, 'chiropractors', 'h_9', '2014-11-10 12:37:47', NULL, NULL, NULL),
(877, 'skin care', 'b_27', '2014-11-10 12:37:47', NULL, NULL, NULL),
(878, 'acupuncture', 'b_27', '2014-11-10 12:37:47', NULL, NULL, NULL),
(879, 'massage', 's_46', '2014-11-10 12:37:47', NULL, NULL, NULL),
(880, 'hair salons', 'k_6', '2014-11-10 12:37:47', NULL, NULL, NULL),
(881, 'skin care', 'k_6', '2014-11-10 12:37:47', NULL, NULL, NULL),
(882, 'cosmetics & beauty supply', 'c_26', '2014-11-10 12:37:47', NULL, NULL, NULL),
(883, 'skin care', 'l_13', '2014-11-10 12:37:47', NULL, NULL, NULL),
(884, 'skin care', 'k_7', '2014-11-10 12:37:47', NULL, NULL, NULL),
(885, 'hair removal', 'b_28', '2014-11-10 12:37:48', NULL, NULL, NULL),
(886, 'eyelash service', 'b_28', '2014-11-10 12:37:48', NULL, NULL, NULL),
(887, 'pizza', 'b_28', '2014-11-10 12:37:48', NULL, NULL, NULL),
(888, 'cats', 'a_1', '2014-11-15 10:52:55', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `pin` int(5) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `username`, `email`, `password`, `status`, `pin`, `date_created`) VALUES
(2, 'Sandeep', 'ioesandeep', 'ioesandeep@gmail.com', 'b9a689f66d4a5c586232df42d14e0bd2', 1, 0, '2014-11-10 11:43:29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
