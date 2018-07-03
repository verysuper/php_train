-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-07-03 03:11:57
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
-- 資料表結構 `xxx`
--

CREATE TABLE `xxx` (
  `xxx_seq` int(10) UNSIGNED NOT NULL,
  `xxx_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `xxx_tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `xxx_con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `xxx_del` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `xxx`
--

INSERT INTO `xxx` (`xxx_seq`, `xxx_name`, `xxx_tel`, `xxx_con`, `xxx_del`) VALUES
(1, '張三', '0123456789', '台北4大安區', 0),
(2, '李四', '0987654321', '台北4407', 0),
(3, '王五', '0123321123321', '台北4萬華區', 0),
(4, '王八', '6549879', '新台北4', 0),
(5, 'QoQ', '987456789', '777', 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `xxx`
--
ALTER TABLE `xxx`
  ADD PRIMARY KEY (`xxx_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `xxx`
--
ALTER TABLE `xxx`
  MODIFY `xxx_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
