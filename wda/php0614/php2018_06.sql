-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-14 10:07:12
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
-- 資料表結構 `account_log`
--

CREATE TABLE `account_log` (
  `a_l_seq` int(10) UNSIGNED NOT NULL,
  `a_l_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_l_jago` int(1) NOT NULL,
  `a_l_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_l_ip` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `account_log`
--

INSERT INTO `account_log` (`a_l_seq`, `a_l_id`, `a_l_jago`, `a_l_time`, `a_l_ip`) VALUES
(7, 'wqwqw', 1, '2018-06-14 15:26:02', '::1'),
(8, 'wqwqw', 1, '2018-06-14 15:26:03', '::1'),
(9, 'wqwqw', 1, '2018-06-14 15:26:04', '::1'),
(10, 'asd', 1, '2018-06-14 16:01:58', '::1'),
(11, 'asd', 1, '2018-06-14 16:02:00', '::1'),
(12, 'asd', 1, '2018-06-14 16:02:01', '::1');

-- --------------------------------------------------------

--
-- 資料表結構 `block_ip`
--

CREATE TABLE `block_ip` (
  `b_l_seq` int(10) UNSIGNED NOT NULL,
  `b_l_ip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_l_t1` datetime NOT NULL,
  `b_l_t2` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `block_ip`
--

INSERT INTO `block_ip` (`b_l_seq`, `b_l_ip`, `b_l_t1`, `b_l_t2`) VALUES
(1, '::1', '2018-06-14 15:26:04', '2018-06-14 00:00:00'),
(2, '::1', '2018-06-14 16:02:01', '2018-06-14 16:32:01');

-- --------------------------------------------------------

--
-- 資料表結構 `my_account`
--

CREATE TABLE `my_account` (
  `m_a_seq` int(10) UNSIGNED NOT NULL,
  `m_a_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_a_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_a_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_a_tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_a_con` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `my_account`
--

INSERT INTO `my_account` (`m_a_seq`, `m_a_id`, `m_a_pw`, `m_a_name`, `m_a_tel`, `m_a_con`) VALUES
(1, 'QAQ', '9f6e6800cfae7749eb6c486619254b9c', 'aaa', 'sad', 'asd'),
(9, 'XoX', 'c6f057b86584942e415435ffb1fa93d4', '111', '222', '333'),
(10, 'xxx', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'xxx', 'xxx', 'xxx');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account_log`
--
ALTER TABLE `account_log`
  ADD PRIMARY KEY (`a_l_seq`);

--
-- 資料表索引 `block_ip`
--
ALTER TABLE `block_ip`
  ADD PRIMARY KEY (`b_l_seq`);

--
-- 資料表索引 `my_account`
--
ALTER TABLE `my_account`
  ADD PRIMARY KEY (`m_a_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `account_log`
--
ALTER TABLE `account_log`
  MODIFY `a_l_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表 AUTO_INCREMENT `block_ip`
--
ALTER TABLE `block_ip`
  MODIFY `b_l_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `my_account`
--
ALTER TABLE `my_account`
  MODIFY `m_a_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
