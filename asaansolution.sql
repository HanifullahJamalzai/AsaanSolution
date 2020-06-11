-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 03:49 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `asaansolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_description` text NOT NULL,
  `project_bid` varchar(11) NOT NULL,
  `post_date` date NOT NULL,
  `post_user_pn` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_description`, `project_bid`, `post_date`, `post_user_pn`) VALUES
(1, 'dsafdsfadfg', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document', '200', '2019-07-24', 'PN1255'),
(2, 'asdasd', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document  			\r\n  		', '2000', '2019-07-18', 'PN1310'),
(3, 'sdasda', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document  			\r\n  		', '1900', '2019-07-10', 'PN5517'),
(4, 'Test', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document  			\r\n  		', '18000', '2019-07-02', 'PN3701'),
(5, 'asfasfasf', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document  			\r\n  		', '800', '2019-07-02', 'PN8019'),
(6, 'Android app for GYM', 'abcd', '230', '2019-07-03', 'PN8019'),
(7, 'Android app for GYM', '\r\nVideo provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document\r\nVideo provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document', '123', '2019-07-03', 'PN8019'),
(8, 'qwertyui', 'qwertyu', '1234567', '2019-07-03', 'PN8019'),
(9, 'ahmad', 'ahmad', '1234567', '2019-07-03', 'PN8019'),
(10, 'what', 'asdfhdsagdsg', '2345', '2019-07-03', 'PN1255'),
(11, 'Android app for GYM', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your documentVideo provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document', '1234567', '2019-07-03', 'PN1680'),
(12, 'Database', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document', '5000-10000', '2019-07-04', 'PN6229'),
(13, 'computer app', 'dsafdsfadfg\r\nVideo provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document', '6000', '2019-07-04', 'PN2766'),
(14, 'I need a website for hospital', 've your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your documentve your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document', '400-600', '2019-07-10', 'PN7163'),
(15, 'Database for hospital', 'gfghfydfhg', '1000', '2019-07-10', 'PN5978'),
(16, 'low managment system', 'some text here', '1000', '2019-07-10', 'PN7639'),
(17, 'I need a Logo for my company', 'e your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your documentve your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document\r\nWhen you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your documentve your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document\r\n\r\n', '200-600', '2019-07-11', 'PN7860'),
(18, 'A database for my library', 'must be shine, and very flexible', '1200$', '2019-07-13', 'PN2094'),
(19, 'Website for Stock', ' code for the video you want to add. You can also type a keyword to search online for the video that best fits your documentve your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your documentve your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fit', '123', '2019-08-08', 'PN2367');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_kind` smallint(2) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_pn` varchar(11) DEFAULT NULL,
  `user_image` varchar(32) NOT NULL,
  `user_join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_kind`, `user_password`, `user_pn`, `user_image`, `user_join_date`) VALUES
(3, 'Ghulam Rasul', 'rasul@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN7604', 'file_51401.jpg', '2019-06-30'),
(4, 'Zabiallah Muslimy', 'zabi@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN1255', 'file_73605.jpg', '2019-07-01'),
(5, 'Muhib Hakimi', 'muhib@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN8019', 'file_42160.jpg', '2019-07-01'),
(6, 'Sayed Nezamudin', 'naeem@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN3701', 'file_13516.jpg', '2019-07-02'),
(7, 'obaidullah ebrahimy', 'obaid@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN5517', 'file_76834.jpg', '2019-07-02'),
(8, 'Hanifullah', 'Hanifullah@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN1310', 'file_81427.jpg', '2019-07-02'),
(9, 'mahmood', 'mahmood@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN1680', 'file_74974.jpg', '2019-07-02'),
(10, 'khabib', 'khabib@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN6714', 'file_84992.jpg', '2019-07-02'),
(11, 'mahmood', 'mahmood@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN4770', 'file_49751.jpg', '2019-07-03'),
(12, 'abcd', 'abcd@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN4941', 'file_8879.jpg', '2019-07-03'),
(13, 'Ahmad', 'ahmad@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN6229', 'file_11971.jpg', '2019-07-03'),
(14, 'qwer', 'qwer@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN8129', 'file_85338.jpg', '2019-07-03'),
(15, 'samsung', 'samsung@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN5394', 'file_21366.jpg', '2019-07-03'),
(16, 'bottle', 'bottle@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN4119', 'file_27665.jpg', '2019-07-03'),
(17, 'muhib alokozay', 'muhib@yahoo.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN2766', 'file_89482.jpg', '2019-07-04'),
(18, 'hedayatullah', 'hedayat@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN2780', 'file_48227.jpg', '2019-07-10'),
(19, 'samir rahimy', 'samir@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN1549', 'file_22900.jpg', '2019-07-10'),
(20, 'zakir hussaini', 'zakir@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN7163', 'file_55789.jpg', '2019-07-10'),
(21, 'Parandoosh', 'qwew@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN5978', 'file_85141.jpg', '2019-07-10'),
(22, 'zabih', 'zabihullah7861@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN7639', 'file_47372.jpg', '2019-07-10'),
(23, 'khan', 'khan@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN7860', 'file_18279.jpg', '2019-07-11'),
(24, 'ahmad', 'ahmad@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN2492', 'file_55804.jpg', '2019-07-13'),
(25, 'rasul', 'rasul@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN2405', 'file_56349.jpg', '2019-07-13'),
(26, 'Obaidullah ', 'obaidullah.ebrahimy1995@gmail.com', 2, '202cb962ac59075b964b07152d234b70', 'PN2094', 'file_55194.jpg', '2019-07-13'),
(27, 'rasul', 'rasul@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'PN2213', 'file_38125.jpg', '2019-07-13'),
(28, 'Farid', 'farid@gmail.com', 1, 'e10adc3949ba59abbe56e057f20f883e', 'PN2367', 'file_98838.jpg', '2019-08-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
