-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-26 07:47:57
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `php2018_06`
--

-- --------------------------------------------------------

--
-- 資料表結構 `board_log`
--

CREATE TABLE `board_log` (
  `b_l_seq` int(10) UNSIGNED NOT NULL,
  `b_l_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_l_cont` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_l_no` bigint(14) NOT NULL,
  `b_l_time` datetime NOT NULL,
  `b_l_ip` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `board_log`
--

INSERT INTO `board_log` (`b_l_seq`, `b_l_name`, `b_l_cont`, `b_l_no`, `b_l_time`, `b_l_ip`) VALUES
(4, 'bz', 'ZXzxc', 20180621154321, '2018-06-21 15:56:32', '127.0.0.1'),
(5, 'bz', ' zxczx', 20180621154321, '2018-06-21 15:56:35', '127.0.0.1'),
(6, 'bz', '中文ㄅ會崩掉', 20180621154321, '2018-06-21 15:58:48', '127.0.0.1'),
(7, 'bz', 'VVV', 20180626131011, '2018-06-26 13:14:03', '127.0.0.1'),
(8, 'bz', 'qqq', 20180626131011, '2018-06-26 13:14:25', '127.0.0.1'),
(9, 'bz', 'ggg', 20180626131011, '2018-06-26 13:14:27', '127.0.0.1');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `board_log`
--
ALTER TABLE `board_log`
  ADD PRIMARY KEY (`b_l_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `board_log`
--
ALTER TABLE `board_log`
  MODIFY `b_l_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
