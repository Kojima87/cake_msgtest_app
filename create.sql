-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 2015 年 8 月 19 日 20:52
-- サーバのバージョン： 5.5.42-log
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cake_guestbook`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `message_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `message_id`, `name`, `mail`, `body`, `created`) VALUES
(1, 2, 'aaa', 'aaa@zzz.com', 'Hi', '2015-08-03 23:05:43'),
(2, 2, 'bbb', 'bbb@zzz.com', 'body-bbb', '2015-08-03 23:09:05'),
(3, 3, 'ccc', 'ccc@zzz.com', 'body-ccc', '2015-08-03 23:09:05'),
(6, 1, 'test', '', 'zzz', '2015-08-07 22:48:43'),
(9, 1, 'zzz', '', 'zzzzzzzz', '2015-08-07 22:58:00'),
(12, 1, 'yyy', '', 'yyyyy', '2015-08-07 23:15:58'),
(15, 1, 'uuu', '', 'uuuuu', '2015-08-07 23:16:48'),
(18, 1, 'test', '', 'testtest', '2015-08-07 23:17:48'),
(20, 1, 'uchida', '', 'zzz', '2015-08-07 23:22:26'),
(23, 1, 'enomoto', '', 'test', '2015-08-07 23:24:41'),
(31, 3, 'feno-com', '', 'hi', '2015-08-08 14:29:43'),
(37, 15, 'zzz', '', 'zzzzz', '2015-08-08 14:53:28'),
(41, 15, 'q', '', 'qqq', '2015-08-08 15:15:18'),
(44, 15, 'test', '', 'zzzz', '2015-08-08 19:06:31');

-- --------------------------------------------------------

--
-- テーブルの構造 `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `messages`
--

INSERT INTO `messages` (`id`, `name`, `mail`, `body`, `created`, `modified`) VALUES
(1, 'aoki', 'aoki@zzz.com', '青木です', '2015-07-31 11:46:10', '2015-07-31 11:46:10'),
(2, 'ito', 'ito@zzz.com', '伊藤です', '2015-07-31 11:46:20', '2015-07-31 11:46:10'),
(3, 'ueno', 'ueno@zzz.com', '上野です', '2015-07-31 11:46:30', '2015-07-31 11:46:10'),
(15, 'shibata', '', '柴田です', '2015-08-08 14:17:46', '2015-08-08 14:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;