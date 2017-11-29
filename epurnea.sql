-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 10:11 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epurnea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_slug` varchar(100) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `subcat_slug` varchar(100) NOT NULL,
  `cat_slug` varchar(100) NOT NULL,
  `descrip` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `contact2` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `rate` varchar(100) NOT NULL,
  `premium` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `nameofuser` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `title_slug`, `subcat`, `subcat_slug`, `cat_slug`, `descrip`, `contact`, `contact2`, `email`, `website`, `address`, `img1`, `img2`, `img3`, `date`, `rate`, `premium`, `status`, `user`, `nameofuser`) VALUES
(22, 'Puja Jewellers', 'puja-jewellers', 'Jewellery Shop', 'jewellery-shop', 'showroom', '', '9523510235', '9523510235', 'kartik@gmail.com', 'kartik.com', 'purnea city, chandni chowk', 'ecafe.png', '', 'face3.jpg', '2017-06-27 17:34:59.941367', '1000', 'Free', '1', 'kartikkr555@gmail.com', ''),
(26, 'R.P.C High School', 'rpc-high-school', 'Goverment School', 'goverment-school', 'school', '', '89529865', '89529865', 'k@gmail.com', 'k.com', 'htdfjh hfu', '', '', '', '2017-06-27 05:06:50.544594', '', '', '1', 'amit1@gmail.com', ''),
(27, 'S.K Sharma Classes', 'sk-sharma-classes', 'Commerce Classes', 'commerce-classes', 'classes', '', '895623', '895623', 'kartik@gmail.com', 'k.com', 'nkugsdiv dfbvkjhdfiuv dfbkhkdvj', 'k (2).jpg', 'k (4).jpg', 'k (8).jpg', '2017-07-08 08:23:55.436935', '200', 'Free', '1', 'amit@gmail.com', ''),
(29, 'Karthik Swarnkar', 'karthik-swarnkar', 'Web Designer', 'web-designer', 'passionate-people', 'bjfhxgcjhkvknlgifydutfxhcgjvhk vfdyrtufigjlk', '7277570364', '7277570364', 'kartikkr555@gmail.com', 'kartikkr555@gmail.com', 'Purnea city chandni chowk, Purnea', 'k (3).png', 'k (4).jpeg', 'k (8).jpeg', '2017-07-08 08:24:01.301125', '1000', 'Paid', '1', 'raj@gmail.com', ''),
(30, 'Purnea College Purnea', 'purnea-college-purnea', 'Degree College', 'degree-college', 'college-and-university', '', '7277570364', '7277570364', 'kartikkr555@gmail.com', 'kartikkr555@gmail.com', 'Purnea city chandni chowk, Purnea', 'Wallmax-3186.jpg', 'Wallmax-18349.jpg', 'Wallmax-57239.jpg', '2017-06-26 15:12:05.551759', '', '', '1', 'raj@gmail.com', ''),
(31, 'Uphar Medikal', 'upkar-medical', 'Medical Store', 'medical-store', 'shops', '', '9523510265', '9523510265', 'kartikkr555@gmail.com', 'kartikkr555@gmail.com', 'Purnea city chandni chowk, Purnea', 'Wallmax-65027.jpg', 'Wallmax-57239.jpg', '', '2017-06-26 16:19:22.784254', '1000', '', '1', 'raj@gmail.com', ''),
(32, 'Vikash Electronics', 'vikash-electronics', 'Electronic Shop', 'electronic-shop', 'shops', 'klkhgutyrd trdyguvjhbk ytugvjhbk trdycfgvjhb  rycgvjhb n ycgvjhb n fghb yuvhj buyh bugfvyu fvgu tfvtufv fvtu vfgvj jg dytcugvjh bnh juftd cuv gyuft7 ytfv uyfut fdtf ugfyt dt dytgv hgf ytdc vndh d fjdb j hd h ', '8745621654321', '8745621654321', 'k@gmail.com', 'k@gmail.com', 'Kasba purnea', '', '', 'Wallmax-57239.jpg', '2017-07-08 08:32:00.435824', '', 'Paid', '1', 'amit@gmail.com', ''),
(33, 'Raja Stores', '', 'General Store', '', 'shops', 'dtfjygkuhijk', '9523521023', '7894567894', 'k@gmail.com', 'k@gmail.com', 'purnea city', 'Wallmax-227256.jpg', 'Wallmax-157514.jpg', 'Wallmax-84838.jpg', '2017-07-08 08:32:05.017842', '', 'Paid', '', 'kartikkr555@gmail.com', ''),
(34, 'Raja Icecream', 'raja-icecream', 'General Store', 'general-store', 'shops', '.khkugsugv kjgfiy ', '98562', '98562', 'k@gmail.com', 'k@gmail.com', 'ctjgvhkbjlkn', 'k1.jpeg', 'k6.png', 'k2.jpg', '2017-06-27 12:43:40.673032', '', '', '1', 'raj@gmail.com', ''),
(35, 'Code Classes', 'code-classes', 'Computer Classes', 'computer-classes', 'classes', 'vhhkjkh', '78452', '78452', 'k@gmail.com', 'k@gmail.com', '7845612', 'best-love-status.jpeg', 'imagghjsfd.jpeg', 'karthik-swarnkar_608deb69.jpeg', '2017-06-27 12:48:34.510864', '', '', '1', 'raj@gmail.com', ''),
(36, 'Computroneex', 'computroneex', 'Computer Shop', 'computer-shop', 'school', 'uivsfjdhviosfnv fjxbvodf bvdjfb ion biuhg iuj bjh bjkbiu8f uyhghb iuy fgv jio vuy hjhb iu o9gyi hh nkmbv gobjdkvncbuobjk,nvcnjidbvkn bhdfv cnvigvj erkfdvc jhnm,dcvxjk,m', '89654321', '89654321', 'k@gmail.com', 'k@gmail.com', 'purnea bhatta', 'IMG_20160205_105855_570.jpeg', 'IMG_20160205_110117_063.jpeg', 'IMG_20160205_115841_754.jpeg', '2017-06-29 10:44:29.090584', '1000', 'Free', '1', 'amit@gmail.com', ''),
(37, 'Aziz componder', '', 'Hospital', '', 'doctors', 'fhgkjkl', '9599', '958952', 'k@gmail.com', 'k@gmail.com', 'hfgjvbnuhbvj', 'a2.png', 'a3.png', 'a4.png', '2017-07-08 02:26:54.890713', '', '', '', 'raj@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_slug` varchar(100) NOT NULL,
  `maincat` varchar(100) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `parent_id` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_slug`, `maincat`, `descrip`, `parent_id`, `icon`) VALUES
(3, 'School', 'school', '1', 'All School in purnea', '0', 'id-badge'),
(4, 'Classes', 'classes', '2', 'All Classes in purnea', '0', 'pencil'),
(5, 'Colleges & University', 'college-and-university', '3', 'All Colleges in purnea', '0', 'graduation-cap'),
(7, 'Shops', 'shops', '4', 'All types of Shops', '0', 'shopping-basket'),
(8, 'Showroom', 'showroom', '5', 'All types of Showroom', '0', 'shopping-bag'),
(10, 'Hospital', 'hospital', '6', 'All Hospital in Purnea', '0', 'h-square'),
(11, 'Passionate People', 'passionate-people', '7', 'All Press in Purnea', '0', 'user'),
(15, 'Repairing Services', 'repairing-services', '8', 'All Types of Repairing Services in Purnea', '0', 'cog'),
(16, 'Tour & Travels', 'tour-and-travels', '9', 'All Types of Tour & Travel in Purnea', '0', 'plane'),
(17, 'Restaurants', 'restaurants', '10', 'All Types of Restaurants in Purnea', '0', 'cutlery'),
(18, 'Entertainment', 'entertainment', '11', 'All Types of Repairing Services in Purnea', '0', 'film'),
(20, 'Doctors', 'doctors', '12', 'All Doctors are here', '0', 'user-md'),
(21, 'Interner Services', 'interner-services', '13', '', '0', 'globe'),
(22, 'Fashion & Style', 'fashion-and-style', '14', '', '0', 'glass'),
(23, 'Distributor', 'distributor', '15', '', '0', 'hdd-o'),
(24, 'Bank & Security', 'bank-and-security', '16', '', '0', 'credit-card'),
(25, 'Services', 'services', '17', '', '0', 'cogs'),
(26, 'Play School', 'play-school', 'school', 'ygjhk', '1', 'id-badge'),
(27, 'Goverment School', 'goverment-school', 'school', 'All Types of Goverment School in Purnea', '1', 'id-badge'),
(28, 'Private School', 'private-school', 'school', 'All School are here', '1', 'id-badge'),
(29, 'Computer Classes', 'computer-classes', 'classes', '', '2', 'pencil'),
(30, 'Science Classes', 'science-classes', 'classes', '', '2', 'pencil'),
(31, 'Commerce Classes', 'commerce-classes', 'classes', '', '2', 'pencil'),
(32, 'Arts Classes', 'arts-classes', 'classes', '', '2', 'pencil'),
(33, 'Music Classes', 'music-classes', 'classes', 'utdg', '2', 'pencil'),
(35, 'Engineering College', 'engineering-college', 'college-and-university', 'utdg', '3', 'graduation-cap'),
(36, 'Intermediate College', 'intermediate-college', 'college-and-university', 'lkgjkjck', '3', 'graduation-cap'),
(37, 'Medical College', 'medical-college', 'college-and-university', 'fdttuhjgu', '3', 'graduation-cap'),
(38, 'Degree College', 'degree-college', 'college-and-university', '', '3', 'graduation-cap'),
(39, 'Law College', 'law-college', 'college-and-university', '', '3', 'graduation-cap'),
(40, 'Electronic Shop', 'electronic-shop', 'shops', '', '4', 'shopping-basket'),
(41, 'General Store', 'general-store', 'shops', '', '4', 'shopping-basket'),
(42, 'Medical Store', 'medical-store', 'shops', 'All types of Medical Store Available Here', '4', 'medkit'),
(43, 'Jewellery Shop', 'jewellery-shop', 'showroom', 'All types of Jewellery Shop Available Here', '4', 'shopping-bag'),
(44, 'Bike Showroom', 'bike-showroom', 'showroom', 'All types of Bike Showrrom Available Here', '5', 'car'),
(45, 'Car Showroom', 'car-showroom', 'showroom', 'All types of CarShowrrom Available Here', '5', 'car'),
(46, 'Big Vehicles Showroom', 'big-vehicles-showroom', 'showroom', 'All types of Big Vehicles Showroom Available Here', '5', 'truck'),
(47, 'Web Designer', 'web-designer', 'passionate-people', '', '6', 'code'),
(48, 'Goverment College', 'goverment College', 'college-and-university', '', '3', 'graduation-cap'),
(49, 'Book Store', 'book-store', 'shops', 'All Book Store available here', '4', 'book'),
(50, 'Advocate', 'advocate', 'passionate-people', 'Advocate for I tax And law', '7', 'user'),
(51, 'Home Decor', 'home-decor', 'passionate-people', 'All Home Decorator available here', '7', 'home'),
(52, 'Artist', 'artist', 'passionate-people', '', '7', 'paint-brush'),
(53, 'Web Develoaper', 'web-develoaper', 'passionate-people', '', '7', 'codepen'),
(54, 'Mobile & Tablet Repairing', 'mobile-and-tablet-repairing', 'repairing-services', '', '8', 'mobile'),
(55, 'Electronic Repairing', 'electronic-repairing', 'repairing-services', '', '8', 'exclamation'),
(56, 'Computer Shop', 'computer-shop', 'shops', '', '4', 'desktop');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `contact2` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `contact`, `contact2`, `email`, `password`, `gender`, `address`, `dist`, `state`, `img`, `date`) VALUES
(5, 'Karthik Swarnkar', '9523510235', '', 'kartikkr555@gmail.com', '1fb4852382c067e8a04be801a6a7e1828816599c', '', 'Purnea City', 'Purnea ', 'Bihar', '', '2017-06-23 14:52:37.289480'),
(6, 'Raj Shekhar', '8787878787', '', 'raj@gmail.com', '1fb4852382c067e8a04be801a6a7e1828816599c', 'Male', 'Line Bazaar', 'Purnea', 'Bihar', 'AKZNHx.jpg', '2017-07-08 08:33:52.936232'),
(7, 'Amit Singh1', '9523510235', '', 'amit@gmail.com', '1fb4852382c067e8a04be801a6a7e1828816599c', 'Male', 'Purnea City', 'Purnea', 'Bihar', 'IMG_20160205_105855_570.jpeg', '2017-06-29 11:03:53.203156'),
(8, 'Amit Kumar Gupta', '9523510235', '', 'amit1@gmail.com', '1fb4852382c067e8a04be801a6a7e1828816599c', 'Female', 'dtfyguhjk', 'yufig', 'ydguhk', '', '2017-06-26 06:03:38.010295');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
