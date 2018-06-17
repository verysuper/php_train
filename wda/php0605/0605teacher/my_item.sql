-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-05 10:27:18
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
-- 資料表結構 `my_item`
--

CREATE TABLE `my_item` (
  `m_i_seq` int(10) UNSIGNED NOT NULL,
  `m_i_name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品名稱',
  `m_i_cont` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品介紹',
  `m_i_sell` int(10) NOT NULL COMMENT '產品售價',
  `m_i_v` int(10) NOT NULL COMMENT '產品廠商',
  `m_i_pic` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產品圖片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `my_item`
--
ALTER TABLE `my_item`
  ADD PRIMARY KEY (`m_i_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `my_item`
--
ALTER TABLE `my_item`
  MODIFY `m_i_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
