# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19)
# Database: jarvis
# Generation Time: 2018-05-11 10:40:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table j_note
# ------------------------------------------------------------

DROP TABLE IF EXISTS `j_note`;

CREATE TABLE `j_note` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) DEFAULT NULL,
  `content` text,
  `created` int(11) DEFAULT NULL COMMENT '创建时间',
  `priority` int(11) DEFAULT NULL COMMENT '优先级',
  `is_todo` int(11) DEFAULT NULL COMMENT '是否待办',
  `start_time` int(11) DEFAULT NULL COMMENT '开始时间',
  `end_time` int(11) DEFAULT NULL COMMENT '结束时间',
  `is_completed` int(11) DEFAULT NULL COMMENT '是否完成',
  `completed_time` int(11) DEFAULT NULL COMMENT '完成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

LOCK TABLES `j_note` WRITE;
/*!40000 ALTER TABLE `j_note` DISABLE KEYS */;

INSERT INTO `j_note` (`id`, `uid`, `content`, `created`, `priority`, `is_todo`, `start_time`, `end_time`, `is_completed`, `completed_time`)
VALUES
	(1,'1','测试小纸条功能',1526009288,1,1,1525405627,1525406627,0,NULL),
	(2,'1','测试小纸条',1525405945,1,1,1525405627,1525406627,0,NULL),
	(3,'1','测试小纸条',1525838563,1,1,0,0,0,NULL);

/*!40000 ALTER TABLE `j_note` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table j_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `j_user`;

CREATE TABLE `j_user` (
  `uid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用户uid',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '用户名称',
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '用户密码',
  `gander` tinyint(4) DEFAULT NULL COMMENT '性别，0=未知，1=男，2=女',
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '手机号码',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='用户表';

LOCK TABLES `j_user` WRITE;
/*!40000 ALTER TABLE `j_user` DISABLE KEYS */;

INSERT INTO `j_user` (`uid`, `name`, `password`, `gander`, `mobile`)
VALUES
	('1','tony','e10adc3949ba59abbe56e057f20f883e',1,'18817380129');

/*!40000 ALTER TABLE `j_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
