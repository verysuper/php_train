-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-05-31 10:33:15
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
-- 資料庫： `myphp_2018_05`
--

-- --------------------------------------------------------

--
-- 資料表結構 `new_list`
--

CREATE TABLE `new_list` (
  `nl_seq` int(10) UNSIGNED NOT NULL,
  `nl_title` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `nl_pic` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `nl_cont` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '內文',
  `nl_time` datetime NOT NULL COMMENT '上傳時間',
  `nl_who` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '建立者',
  `nl_open` int(1) NOT NULL COMMENT '開啟'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `new_list`
--

INSERT INTO `new_list` (`nl_seq`, `nl_title`, `nl_pic`, `nl_cont`, `nl_time`, `nl_who`, `nl_open`) VALUES
(2, 'XX', '20180531153727.jpg', 'QQ', '2018-05-31 15:37:27', 'QAQ', 0),
(3, 'QAQ', '20180531160134.jpg', 'AQ', '2018-05-31 16:01:34', 'QAQ', 0),
(4, '72', '20180531160143.jpg', 'rewrfsda', '2018-05-31 16:01:43', 'QAQ', 0),
(5, 'aaa123', '20180531162522.jpg', '1\r\n2\r\n3\r\n4\r\n5\r\n6', '2018-05-31 16:25:22', 'QAQ', 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `new_list`
--
ALTER TABLE `new_list`
  ADD PRIMARY KEY (`nl_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `new_list`
--
ALTER TABLE `new_list`
  MODIFY `nl_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
