-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-28 09:53:55
-- 伺服器版本: 10.1.32-MariaDB
-- PHP 版本： 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `hw02`
--

-- --------------------------------------------------------

--
-- 資料表結構 `block_log`
--

CREATE TABLE `block_log` (
  `seq` int(10) UNSIGNED NOT NULL COMMENT '序號',
  `u_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ip',
  `open_block` datetime NOT NULL COMMENT '解除時間',
  `type` int(1) NOT NULL COMMENT '類型'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `login_log`
--

CREATE TABLE `login_log` (
  `seq` int(10) UNSIGNED NOT NULL COMMENT '序號',
  `u_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `status_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '登入' COMMENT '狀態類型',
  `uip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ip',
  `status_time` datetime NOT NULL COMMENT '狀態時間',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `login_log`
--

INSERT INTO `login_log` (`seq`, `u_id`, `status_type`, `uip`, `status_time`, `status`) VALUES
(1, 'admin', '封鎖帳號:bbb', '::1', '2018-06-28 15:37:02', 0),
(2, 'admin', '封鎖帳號:aaa', '::1', '2018-06-28 15:37:18', 0),
(3, 'admin', '登出', '::1', '2018-06-28 15:37:33', 0),
(4, 'aaa', '帳號被鎖定', '::1', '2018-06-28 15:37:33', 0),
(5, 'aaa', '帳號被鎖定', '::1', '2018-06-28 15:37:39', 0),
(6, 'aaa', '帳號被鎖定', '::1', '2018-06-28 15:37:44', 0),
(7, 'ccc', '登入成功', '::1', '2018-06-28 15:38:31', 0),
(8, 'ccc', '登入成功', '::1', '2018-06-28 15:38:31', 0),
(9, 'ccc', '登出', '::1', '2018-06-28 15:38:48', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `seq` int(10) UNSIGNED NOT NULL COMMENT '序號',
  `u_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_pw` char(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_created` datetime NOT NULL COMMENT '創建時間',
  `u_updated` datetime NOT NULL COMMENT '更新時間',
  `u_del` tinyint(1) NOT NULL DEFAULT '0' COMMENT '刪除',
  `u_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '後臺權限'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`seq`, `u_id`, `u_pw`, `u_email`, `u_created`, `u_updated`, `u_del`, `u_admin`) VALUES
(11, 'admin', 'admin', 'admin@admin.admin', '2018-06-28 00:00:00', '0000-00-00 00:00:00', 0, 1),
(12, 'aaa', 'aaa', 'aaa', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(13, 'bbb', 'bbb', 'bbb', '2018-06-28 14:38:06', '0000-00-00 00:00:00', 1, 0),
(14, 'ccc', 'ccc', 'ccc', '2018-06-28 15:38:16', '2018-06-28 15:38:16', 0, 0);

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
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `block_log`
--
ALTER TABLE `block_log`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號';

--
-- 使用資料表 AUTO_INCREMENT `login_log`
--
ALTER TABLE `login_log`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=10;

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
