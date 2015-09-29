/*
 Navicat MySQL Data Transfer

 Source Server         : local
 Source Server Version : 50614
 Source Host           : localhost
 Source Database       : gl

 Target Server Version : 50614
 File Encoding         : utf-8

 Date: 09/29/2015 09:35:56 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usrname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `admin`
-- ----------------------------
BEGIN;
INSERT INTO `admin` VALUES ('1', 'admin', '202cb962ac59075b964b07152d234b70');
COMMIT;

-- ----------------------------
--  Table structure for `cn_city`
-- ----------------------------
DROP TABLE IF EXISTS `cn_city`;
CREATE TABLE `cn_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cn_city`
-- ----------------------------
BEGIN;
INSERT INTO `cn_city` VALUES ('1', '香港'), ('2', '台北'), ('3', '日本'), ('4', '新加坡');
COMMIT;

-- ----------------------------
--  Table structure for `cn_department`
-- ----------------------------
DROP TABLE IF EXISTS `cn_department`;
CREATE TABLE `cn_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cn_department`
-- ----------------------------
BEGIN;
INSERT INTO `cn_department` VALUES ('1', '儿科'), ('2', 'xxx');
COMMIT;

-- ----------------------------
--  Table structure for `cn_doctor`
-- ----------------------------
DROP TABLE IF EXISTS `cn_doctor`;
CREATE TABLE `cn_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `charge` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `operate` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cn_doctor`
-- ----------------------------
BEGIN;
INSERT INTO `cn_doctor` VALUES ('1', '123123', '123123', '', '', '123', '123', '123', '5', '123', '123', 'wss', 'ssss', 'sss', 'ss', '5'), ('2', '123123', '123123', '', '', '1231', '1231', '123', '', '12313', '12312', '12313', '12312', '123123', '12312', '1442837587'), ('3', 'qqqq', '123123', '20150927/screen-9f24088aff634d880301b5acc22e0039.jpg', '儿科', '1231', '1231', '123', '台北', '12313', '12312', '12313', '12312', '123123', '12312', '1442837624');
COMMIT;

-- ----------------------------
--  Table structure for `cn_faq`
-- ----------------------------
DROP TABLE IF EXISTS `cn_faq`;
CREATE TABLE `cn_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cn_faq`
-- ----------------------------
BEGIN;
INSERT INTO `cn_faq` VALUES ('1', '1', '1', '1', '10'), ('2', '1', '1442768663', '啊实打实大adasd     \r\n阿达sa打\r\n的 啊实打实大adasd     \r\n阿达sa打\r\n的 啊实打实大adasd     \r\n阿达sa打\r\n的 啊实打实大adasd     \r\n阿达sa打\r\n的 啊实打实大adasd     \r\n阿达sa打\r\n的 啊实打实大adasd     \r\n阿达sa打\r\n的 ', '1');
COMMIT;

-- ----------------------------
--  Table structure for `cn_hospital`
-- ----------------------------
DROP TABLE IF EXISTS `cn_hospital`;
CREATE TABLE `cn_hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `web_site` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cn_hospital`
-- ----------------------------
BEGIN;
INSERT INTO `cn_hospital` VALUES ('1', '123123', '123123', '', '', '123', '123', '123', '5', '', ''), ('2', '123123', '123123', '', '123123', '1231', '123123', '123', '1442837587', '新加坡', '123123'), ('3', 'qqqq', '123123', '20150927/screen-39234e9f968a8d730802c8e58c11709e.jpg', '123123', '1231', '123123', '123', '1442837624', '台北', '123123');
COMMIT;

-- ----------------------------
--  Table structure for `cn_news`
-- ----------------------------
DROP TABLE IF EXISTS `cn_news`;
CREATE TABLE `cn_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `cn_news`
-- ----------------------------
BEGIN;
INSERT INTO `cn_news` VALUES ('1', '1', '1123', 'dsadasd', '20150928/screen-6d7b2707e0c9bdf726f9be5c0129fb90.jpg'), ('3', '12312', '1442766993', '12312', ''), ('4', 'sss12312', '1442766994', '12312', ''), ('5', '12312', '1442767006', '<span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\"><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span><span style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;line-height:22.5px;background-color:#FFFFFF;\">一份来自国内大行的报告显示，今年7月份以来，国内中产家庭境外资产投资的意愿大幅增长了10%以上。渣打银行中国有限公司(下称“渣打中国”)行长张晓蕾表示：“如何合理地搭建家庭财富管理的结构、有效避免利率和汇率风险、在风险与收益之间取得最适合个人及家庭需要的平衡点，成为投资者开始认真考虑</span></span>', '20150928/screen-51fba80f5ba7d412f56012acc69452dc.jpg'), ('6', 'xxxx', '1442767031', 'asdadasdadasdasd asdasdasd ad asd as das das das as das das as das as asd as dasd as das dasd asd asdas da dasdasda', '20150928/screen-810277abcb5ffb2908f234a4e74891b5.jpg');
COMMIT;

-- ----------------------------
--  Table structure for `en_city`
-- ----------------------------
DROP TABLE IF EXISTS `en_city`;
CREATE TABLE `en_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `en_city`
-- ----------------------------
BEGIN;
INSERT INTO `en_city` VALUES ('1', 'HongKong');
COMMIT;

-- ----------------------------
--  Table structure for `en_department`
-- ----------------------------
DROP TABLE IF EXISTS `en_department`;
CREATE TABLE `en_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `en_doctor`
-- ----------------------------
DROP TABLE IF EXISTS `en_doctor`;
CREATE TABLE `en_doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `charge` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `operate` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `en_faq`
-- ----------------------------
DROP TABLE IF EXISTS `en_faq`;
CREATE TABLE `en_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `en_faq`
-- ----------------------------
BEGIN;
INSERT INTO `en_faq` VALUES ('1', '1', '1', '1', '10');
COMMIT;

-- ----------------------------
--  Table structure for `en_hospital`
-- ----------------------------
DROP TABLE IF EXISTS `en_hospital`;
CREATE TABLE `en_hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cn_name` varchar(255) NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `web_site` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `en_hospital`
-- ----------------------------
BEGIN;
INSERT INTO `en_hospital` VALUES ('1', 'ZHONGWEN', 'YINGWEN', '20150921/screen-2ea777ae52f14893a827d48e75f94c0d.jpg', '1', '112312', 'AAA', 'ASDASD', '1442839061', 'HongKong', '123123');
COMMIT;

-- ----------------------------
--  Table structure for `en_news`
-- ----------------------------
DROP TABLE IF EXISTS `en_news`;
CREATE TABLE `en_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
