-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 06 月 18 日 19:21
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `hw1`
--

-- --------------------------------------------------------

--
-- 資料表結構 `block_log`
--

CREATE TABLE `block_log` (
  `seq` int(10) UNSIGNED NOT NULL COMMENT '序號',
  `uip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ip',
  `open_block` datetime NOT NULL COMMENT '解除時間',
  `type` int(1) NOT NULL COMMENT '類型'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `block_log`
--

INSERT INTO `block_log` (`seq`, `uip`, `open_block`, `type`) VALUES
(1, '::1', '2018-06-18 19:48:14', 1),
(2, '::1', '2018-06-18 20:13:29', 1),
(3, '::1', '2018-06-19 00:49:33', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `login_log`
--

CREATE TABLE `login_log` (
  `seq` int(10) UNSIGNED NOT NULL COMMENT '序號',
  `uid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '狀態',
  `uip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ip',
  `status_time` datetime NOT NULL COMMENT '狀態時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `login_log`
--

INSERT INTO `login_log` (`seq`, `uid`, `status`, `uip`, `status_time`) VALUES
(1, 'aaa', 0, '127.0.0.1', '1978-11-02 00:00:00'),
(2, 'aaa', 0, '::1', '2018-06-18 18:35:22'),
(3, 'aaa', 0, '::1', '2018-06-18 18:41:22'),
(4, 'aaa', 0, '::1', '2018-06-18 18:41:22'),
(5, 'aaa1', 0, '::1', '2018-06-18 18:44:58'),
(6, 'aaa1', 0, '::1', '2018-06-18 18:47:28'),
(7, 'aaa1', 0, '::1', '2018-06-18 18:47:28'),
(8, 'aaa1', 0, '::1', '2018-06-18 18:48:10'),
(9, 'aaa', 1, '::1', '2018-06-18 19:05:39'),
(10, 'aaa', 1, '::1', '2018-06-18 19:36:09'),
(11, 'aaa', 1, '::1', '2018-06-18 19:36:14'),
(12, 'aaa', 1, '::1', '2018-06-18 19:38:05'),
(13, 'aaa', 1, '::1', '2018-06-18 20:02:09'),
(14, 'aaa', 1, '::1', '2018-06-18 20:02:13'),
(15, 'aaa', 0, '::1', '2018-06-18 20:02:17'),
(16, 'aaa', 1, '::1', '2018-06-18 20:03:09'),
(17, 'aaa', 1, '::1', '2018-06-18 20:03:13'),
(18, 'aaa', 1, '::1', '2018-06-18 20:03:21'),
(19, 'aaa', 0, '::1', '2018-06-18 20:26:05'),
(20, 'aaa', 0, '::1', '2018-06-18 20:36:06'),
(21, 'aaa', 0, '::1', '2018-06-18 21:12:31'),
(22, 'aaa', 0, '::1', '2018-06-18 21:47:28'),
(23, 'aaa', 0, '::1', '2018-06-18 21:48:31'),
(24, 'aaa', 0, '::1', '2018-06-18 21:49:38'),
(25, 'aaa', 0, '::1', '2018-06-18 23:06:20'),
(26, 'aaa', 0, '::1', '2018-06-18 23:42:55'),
(27, 'aaa', 0, '::1', '2018-06-19 00:06:08'),
(28, 'aaa', 0, '::1', '2018-06-19 00:13:39'),
(29, 'aaa', 0, '::1', '2018-06-19 00:30:10'),
(30, 'aaa', 1, '::1', '2018-06-19 00:39:05'),
(31, 'aaa', 1, '::1', '2018-06-19 00:39:15'),
(32, 'aaa', 1, '::1', '2018-06-19 00:39:24'),
(33, 'aaa', 0, '::1', '2018-06-19 00:55:27'),
(34, 'aaa', 0, '::1', '2018-06-19 01:05:38');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '序號',
  `uid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` char(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL COMMENT '創建時間',
  `updated` datetime NOT NULL COMMENT '更新時間',
  `del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '刪除'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `uid`, `pw`, `email`, `created`, `updated`, `del`) VALUES
(6, 'aaa', 'aaa', 'aaa231', '2018-06-18 17:03:12', '2018-06-19 01:10:00', 0),
(7, 'aaa1', 'aaa1', 'aaa1', '2018-06-18 17:04:23', '2018-06-19 01:18:48', 0),
(8, 'aaa2', '123', 'aaa', '2018-06-18 17:05:21', '0000-00-00 00:00:00', 1),
(9, 'aaa3', '123', 'aaa', '2018-06-18 17:06:09', '2018-06-19 01:18:17', 0),
(10, 'aaa4', '123', 'aaa', '2018-06-18 17:07:13', '0000-00-00 00:00:00', 0),
(11, 'aaa6', '123', 'aaa', '2018-06-18 17:07:34', '0000-00-00 00:00:00', 0),
(12, 'aaa01', '123', 'aaa', '2018-06-18 17:54:07', '0000-00-00 00:00:00', 0),
(13, 'aaa02', '123', 'aaa', '2018-06-18 17:55:25', '0000-00-00 00:00:00', 0),
(14, 'aaa03', 'aaa', 'aaa', '2018-06-19 00:23:52', '2018-06-19 00:23:52', 0),
(15, 'aaa04', 'aaa04', 'aaa04', '2018-06-19 00:26:53', '2018-06-19 01:18:34', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `block_log`
--
ALTER TABLE `block_log`
  ADD PRIMARY KEY (`seq`);

--
-- 資料表索引 `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`seq`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `block_log`
--
ALTER TABLE `block_log`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `login_log`
--
ALTER TABLE `login_log`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=35;

--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
