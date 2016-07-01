-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-04-13 16:50:18
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- 表的结构 `diningcar`
--

CREATE TABLE IF NOT EXISTS `diningcar` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '点餐编号',
  `userId` int(11) NOT NULL COMMENT '用户编号',
  `foodId` int(11) NOT NULL COMMENT '菜品编号',
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `foodId` (`foodId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '菜品编号',
  `foodName` varchar(20) NOT NULL,
  `feature` varchar(100) DEFAULT NULL COMMENT '特色',
  `material` varchar(100) DEFAULT NULL COMMENT '食材',
  `price` int(11) NOT NULL COMMENT '价格',
  `type` int(11) NOT NULL COMMENT '分类',
  `picture` varchar(40) DEFAULT NULL COMMENT '图片',
  `hits` int(11) NOT NULL COMMENT '点餐率',
  `comment` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `foodtype`
--

CREATE TABLE IF NOT EXISTS `foodtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类编号',
  `typeName` varchar(20) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`),
  KEY `typeName` (`typeName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `messageboard`
--

CREATE TABLE IF NOT EXISTS `messageboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言编号',
  `userId` int(11) NOT NULL COMMENT '用户编号',
  `title` varchar(20) NOT NULL COMMENT '留言标题',
  `content` varchar(500) NOT NULL COMMENT '留言内容',
  `dtime` datetime NOT NULL COMMENT '留言时间',
  `reply` varchar(500) DEFAULT NULL COMMENT '管理员回复内容',
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `userName` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(16) NOT NULL COMMENT '密码',
  `ident` char(1) NOT NULL COMMENT '用户身份',
  `telephone` varchar(12) NOT NULL COMMENT '手机号码',
  `address` varchar(50) NOT NULL COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `userName`, `password`, `ident`, `telephone`, `address`) VALUES
(37, 'ch123', 'ch123', '0', '18319862288', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
