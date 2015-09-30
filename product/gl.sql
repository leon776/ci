-- MySQL dump 10.13  Distrib 5.6.16, for Linux (x86_64)
--
-- Host: localhost    Database: gl
-- ------------------------------------------------------
-- Server version	5.6.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usrname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cn_city`
--

DROP TABLE IF EXISTS `cn_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cn_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cn_city`
--

LOCK TABLES `cn_city` WRITE;
/*!40000 ALTER TABLE `cn_city` DISABLE KEYS */;
INSERT INTO `cn_city` VALUES (1,'香港'),(2,'台北'),(3,'日本'),(4,'新加坡');
/*!40000 ALTER TABLE `cn_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cn_department`
--

DROP TABLE IF EXISTS `cn_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cn_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cn_department`
--

LOCK TABLES `cn_department` WRITE;
/*!40000 ALTER TABLE `cn_department` DISABLE KEYS */;
INSERT INTO `cn_department` VALUES (1,'儿科'),(3,'内科'),(4,'外科'),(5,'耳鼻喉科'),(6,'心脏科'),(7,'生殖科'),(8,'肾科'),(9,'肿瘤科'),(10,'骨科'),(11,'妇产科'),(12,'泌尿科');
/*!40000 ALTER TABLE `cn_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cn_doctor`
--

DROP TABLE IF EXISTS `cn_doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cn_doctor`
--

LOCK TABLES `cn_doctor` WRITE;
/*!40000 ALTER TABLE `cn_doctor` DISABLE KEYS */;
INSERT INTO `cn_doctor` VALUES (1,'李大仁','LIDAREN','20150928/screen-b96d0781f201061d494a9b8f714c16a8.jpg','儿科','2356-4562','台北市','500','台北','台北大学医疗学士',' 星期五：16：00','wss','ssss','sss','ss','5'),(2,'簡耀庭醫生','jianyaoting','20150928/screen-f5d2df4b16f67a92c1b47bc51e409523.jpg','儿科','5632-01253','新加坡','500','新加坡','香港大学理疗学士','星期一：9：30-10：00','呼吸道','新加坡中央医院','123123','12312','1442837587'),(3,'簡耀庭醫生','Dr KAN YIU TING','20150928/screen-ca624a9a0afd14166a42df98c8a56485.jpg','xxx','2782 0222','九龍彌敦道301號嘉賓大廈1412室','500','香港','香港理工大学物理疗学士1995','星期一：9:30-10:00','Minor Operation under Local Anaesthesia  Wound Care','香港浸信會醫院；聖德肋撒醫院','Consultation ','Cardiac Surgery (Adults and Paediatrics','1442837624');
/*!40000 ALTER TABLE `cn_doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cn_faq`
--

DROP TABLE IF EXISTS `cn_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cn_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `content` longtext,
  `place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cn_faq`
--

LOCK TABLES `cn_faq` WRITE;
/*!40000 ALTER TABLE `cn_faq` DISABLE KEYS */;
INSERT INTO `cn_faq` VALUES (1,'上传头像如何进行删除？','1','Long press head can be drag and drop or delete',2),(2,'1: how do I contact GREY MEDICAL','1442768663','1.Tel:+86 0755 26008787\r\n2.mail :info@grey.com\r\n3.5.postcode ：518000\r\n4.Address: shenzhen shennan avenue diwang\r\n',1);
/*!40000 ALTER TABLE `cn_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cn_hospital`
--

DROP TABLE IF EXISTS `cn_hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cn_hospital`
--

LOCK TABLES `cn_hospital` WRITE;
/*!40000 ALTER TABLE `cn_hospital` DISABLE KEYS */;
INSERT INTO `cn_hospital` VALUES (2,'香港大学医院','The Introduction of Peking University Shenzhen Hosp...','20150928/screen-cf83c157a00373809bc5d5ad05739195.jpg','3','0755-86913399','The Introduction of Peking University Shenzhen Hosp...','Hong Kong university shenzhen hospital is fully invested by the shenzhen municipal government, undertake comprehensive public hospitals, medical, scientific research and teaching is to promote the pilot reform of public hospitals of shenzhen ','1442837587','香港','The Introduction of Peking University Shenzhen Hosp...'),(3,'台大医院','NTU Hospital','20150929/screen-2c47815262e203f0415bf11ba187608e.png','3','2335-9669','NTU Hospital','Created so far for many years, national Taiwan university hospital to foster their profession talents are many, including medical students, specialist physicians, pharmacists, nurses and other medical personnel, etc., distribution of students around the w','1442837624','台北','NTU Hospital'),(4,'新加坡国立大学医院 ','(NUH)','20150929/screen-6a981f6279be78d26465af91e0e9df1b.png','3','3562-5868','(NUH)','Singapore national university hospital (NUH) was founded in 1985, is one of the largest national hospital in Singapore, also it is the first restructuring in Singapore hospitals. Hospital environment elegant, comfortable, with 31 units, 900 beds, waiting ','1442893666','新加坡','(NUH)');
/*!40000 ALTER TABLE `cn_hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cn_news`
--

DROP TABLE IF EXISTS `cn_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cn_news` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8,
  `thumb` longtext CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cn_news`
--

LOCK TABLES `cn_news` WRITE;
/*!40000 ALTER TABLE `cn_news` DISABLE KEYS */;
INSERT INTO `cn_news` VALUES (0,' 海外医疗更受重病患者欢迎','1443530970','<span style=\"color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\">想必出国整形、保健、体检等等都已经轮番的上过舆论轰炸了，然而事实上是，海外医疗里的重症治疗才是最贴近群众基本利益的。作为国内最大的海外医疗转诊服务机构，2014年5月，与美国排名第一的医院梅奥诊所签订了绿色通道协议，开始为中国患者提供快速、便捷的转诊预约服务。梅奥诊所国际部主任古德温女士称，过去一年，来自中国的求医人数增加了一倍多。</span>','20150929/screen-ed24e02eaf959c6454aadf7142b74eb0.png'),(0,'国外医疗的靶向药物和患者匹配','1443535118','<span style=\"color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\">所有的癌症医疗研究都是在为提高存活率而奋斗，从而达到彻底治愈的目标。当然，对于癌症医疗研究，国内目前还远远不如国外的进度深刻。据盛诺一家了解，目前美国对癌症的医学研究已经迈向了靶向药物和患者匹配的阶段，这项研究的突出成果，可能使更多的中国癌症患者聚焦国外医疗。</span>','20150929/screen-d0a8bedb95a265aea28f333b1c0fecde.png'),(0,'海外医疗更受重病患者欢迎','1443535138','<span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:13px;line-height:20px;background-color:#FFFFFF;\">海外医疗更受重病患者欢迎</span>','20150929/screen-b387b77aa30e7543f723f1c96c81acf0.jpg'),(0,'海外医疗：2015年骨髓瘤领域最新进展','1443535227','<span style=\"font-family:微软雅黑;font-size:16px;line-height:28px;background-color:#FFFFFF;\"> 今年5月29日至6月2日，美国临床肿瘤学会(ASCO)第51届年会在芝加哥如期召开，会上公布了几项骨髓瘤领域的重要研究结果，以下是盛诺一家研发部的编译和汇总整理：\r\n<p style=\"font-family:微软雅黑;font-size:16px;background-color:#FFFFFF;\">\r\n	一种靶向自然杀伤(NK)细胞的创新性试验药治疗多发性骨髓瘤显示获益，这是首次显示免疫疗法对这一疾病有效的药物。\r\n</p>\r\n<p style=\"font-family:微软雅黑;font-size:16px;background-color:#FFFFFF;\">\r\n	这种新药——elotuzumab是一种靶向细胞表面蛋白SLAMF7（它存在于骨髓瘤细胞和NK细胞表面）的单克隆抗体。它通过直接靶向骨髓瘤细胞、增加NK细胞杀伤骨髓瘤细胞的能力，提供了对癌症的双重攻击。\r\n</p>\r\n</span>','20150929/screen-34f48d5a073d738759a45875807c24de.png');
/*!40000 ALTER TABLE `cn_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `en_city`
--

DROP TABLE IF EXISTS `en_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `en_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `en_city`
--

LOCK TABLES `en_city` WRITE;
/*!40000 ALTER TABLE `en_city` DISABLE KEYS */;
INSERT INTO `en_city` VALUES (1,'HongKong'),(3,'Taibei'),(4,'Japan'),(5,'Singapore');
/*!40000 ALTER TABLE `en_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `en_department`
--

DROP TABLE IF EXISTS `en_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `en_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `en_department`
--

LOCK TABLES `en_department` WRITE;
/*!40000 ALTER TABLE `en_department` DISABLE KEYS */;
INSERT INTO `en_department` VALUES (1,'Pediatrics'),(2,'Medicine'),(3,'Surgery'),(4,'Otolaryngology'),(5,'Cardiology'),(6,'Fertility'),(7,'Renal diseases'),(8,'Obstetrics and Gynecology'),(9,'Oncology'),(10,'Urology');
/*!40000 ALTER TABLE `en_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `en_doctor`
--

DROP TABLE IF EXISTS `en_doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `en_doctor`
--

LOCK TABLES `en_doctor` WRITE;
/*!40000 ALTER TABLE `en_doctor` DISABLE KEYS */;
INSERT INTO `en_doctor` VALUES (1,'簡耀庭','Grece','20150929/screen-bf86635fb2764064daa6a5a28f65a513.jpg','Urology','25112622','九龙佐敦彌敦道335高怡医务中心3楼B室','星普通科門診$500起藥費另計 ','HongKong','Hongkong理工大学物理治疗学士 1995 · 澳洲麦格理大学脊科医学硕士 2009 · Hongkong注册脊医','星期一：9：30-10：00 10：30-11：00， 星期五：16：00',' Cardiac Surgery (Adults and Paediatrics)',' Cardiac Surgery (Adults and Paediatrics)',' Cardiac Surgery (Adults and Paediatrics)','Grece博士毕业以来，持续从事骨科医疗工作12年，2010年获北京协和医院邀请，共同研究\"骨髓移植\"案例研究，并于同年在医疗杂志上发表10篇相关论文Grece博士毕业以来，持续从事骨科医疗工作12年，2010年获北京协和医院邀请，共同研究\"骨髓移植\"案例研究，并于同年在医疗杂志上发表10篇相关论文Grece博Grece博士毕业以来，持续从事骨科医疗工作12年，2010年获北京协和医院邀请，共同研究\"骨髓移植\"案例研究，并于同年在医疗杂志上发表10篇相关论文士毕业以来，持续从事骨科医疗工作12年.\r\n','1443540778');
/*!40000 ALTER TABLE `en_doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `en_faq`
--

DROP TABLE IF EXISTS `en_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `en_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `content` longtext,
  `place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `en_faq`
--

LOCK TABLES `en_faq` WRITE;
/*!40000 ALTER TABLE `en_faq` DISABLE KEYS */;
INSERT INTO `en_faq` VALUES (1,'1','1','1',10);
/*!40000 ALTER TABLE `en_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `en_hospital`
--

DROP TABLE IF EXISTS `en_hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `en_hospital`
--

LOCK TABLES `en_hospital` WRITE;
/*!40000 ALTER TABLE `en_hospital` DISABLE KEYS */;
INSERT INTO `en_hospital` VALUES (1,'ZHONGWEN','YINGWEN','20150921/screen-2ea777ae52f14893a827d48e75f94c0d.jpg','1','112312','AAA','ASDASD','1442839061','HongKong','123123');
/*!40000 ALTER TABLE `en_hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `en_news`
--

DROP TABLE IF EXISTS `en_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `en_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  `content` longtext,
  `thumb` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `en_news`
--

LOCK TABLES `en_news` WRITE;
/*!40000 ALTER TABLE `en_news` DISABLE KEYS */;
INSERT INTO `en_news` VALUES (1,'Overseas have A shares and popular rate of medical insurance','1123','<p style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;background-color:#FFFFFF;text-indent:2em;\">\r\n	<span style=\"font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;font-size:16px;line-height:1.5;\">\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Overseas medical industry is changing, including foreign medical institutions participation of the medical service market in China, overseas medical service institutions, the transformation of medical institution to the entity on the Internet platform of mobile medical companies into overseas medical care.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Our reporter Liu Chong Reporting from Beijing\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Every bag lay the book on to the Mayo clinic (Mayo\'s a-clinic) learning management of books, it has almost become standard about Mayo event in recent years. The medical institution is located in the town of rochester, admired in China has been full of the famed as \"mecca\" of medicine.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Mayo has made a show of all the more to China\'s medical service market. On August 19, Mayo was formally established the Chinese Referral Office (China Referral Office). \"This is our after Canada, Mexico and the Middle East, and set up a referral office.\" Mayo global sales executive director Peter Streit reporter said on the 21st century economy.\r\n	</p>\r\n</span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','20150928/screen-98ab41aa766e3ad0b8e159768c129344.jpg'),(3,'In 2015 in overseas medical blowout','1442766993','<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Have, according to data from 2003 to 2012, the eight years, Chinese patients overseas medical expenditure increase year by year, increase 400%. Some people predict that in the next decade may exceed tens of billions of overseas medical market, development prospect is very big, will usher in 2015 overseas medical explosive growth. Why there are so many patients considering overseas treatment? This has to do with China and the United States and other developed countries differences in the levels of medical treatment.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Overseas medical industry is changing, including foreign medical institutions participation of the medical service market in China, overseas medical service institutions, the transformation of medical institution to the entity on the Internet platform of mobile medical companies into overseas medical care.\r\n	</p>\r\n</p>\r\n<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','20150928/screen-5e5fc790f941b0001428a51ad185abd4.jpg'),(4,'Overseas medical divisions','1442766994','<p>\r\n	<span style=\"font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;font-size:16px;line-height:1.5;\">\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Overseas medical industry is changing, including foreign medical institutions participation of the medical service market in China, overseas medical service institutions, the transformation of medical institution to the entity on the Internet platform of mobile medical companies into overseas medical care.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Our reporter Liu Chong Reporting from Beijing\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Every bag lay the book on to the Mayo clinic (Mayo\'s a-clinic) learning management of books, it has almost become standard about Mayo event in recent years. The medical institution is located in the town of rochester, admired in China has been full of the famed as \"mecca\" of medicine.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Mayo has made a show of all the more to China\'s medical service market. On August 19, Mayo was formally established the Chinese Referral Office (China Referral Office). \"This is our after Canada, Mexico and the Middle East, and set up a referral office.\" Mayo global sales executive director Peter Streit reporter said on the 21st century economy.\r\n	</p>\r\n</span>\r\n</p>\r\n<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<br />\r\n</p>\r\n<br />\r\n<p>\r\n	<br />\r\n</p>','20150928/screen-36c84d4639283bbc62e033d1472366ca.jpg'),(5,'Two American \"star\" on the Chinese overseas medical hospital market upgrade again','1442767006','<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<span style=\"font-family:宋体, Arial, Tahoma, Helvetica, sans-serif;font-size:14px;line-height:28px;background-color:#FFFFFF;\"><span style=\"color:#2B2B2B;font-family:arial, sans-serif;font-size:14px;line-height:21px;background-color:#FAFAFA;\">Folk prescription of traditional Chinese medicine (TCM), dietary supplements, fujin made, together we can say is protean, formula for treating patients, measuring way, and even may be based on personal experience old doctor of traditional Chinese medicine is very different, this can be said to be five thousand years of Chinese traditional characteristics. That prompted the development of modern medical out of the \"Chinese medicine\", however, western medicine combined treatment is the lack of traditional Chinese medicine (TCM) in one thousand summary of flexible regularity, especially in recent years to the development of cancer chemotherapy, many ChengNuo a reception of cancer patients are after multiple cycles of chemotherapy of patients with severe, some patients switching frequency is quite fast, but not really achieve the efficacy of treatment.</span></span> \r\n</p>','20150928/screen-10f1b15be7f4b27ecf07adb006d8b33a.jpg'),(6,'Overseas medical handles more welcomed by patients','1442767031','<div style=\"text-align:center;\">\r\n	<div style=\"text-align:left;\">\r\n		<span style=\"background-color:#FFFFFF;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;\"><span style=\"color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#2B2B2B;font-family:arial, sans-serif;font-size:14px;line-height:21px;background-color:#FAFAFA;\">Must go abroad cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion,<span style=\"color:#2B2B2B;font-family:arial, sans-serif;font-size:14px;line-height:21px;background-color:#FAFAFA;\">Must go abroad cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion,</span></span></span><span style=\"color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\"></span></span> \r\n	</div>\r\n</div>','20150928/screen-77a1c4efbfc436f910068b63172d9db8.jpg');
/*!40000 ALTER TABLE `en_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp`
--

DROP TABLE IF EXISTS `tmp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8,
  `thumb` longtext CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp`
--

LOCK TABLES `tmp` WRITE;
/*!40000 ALTER TABLE `tmp` DISABLE KEYS */;
INSERT INTO `tmp` VALUES (1,'Overseas have A shares and popular rate of medical insurance','1123','<p style=\"color:#666666;font-family:Arial, 微软雅黑, 宋体;font-size:15px;background-color:#FFFFFF;text-indent:2em;\">\r\n	<span style=\"font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;font-size:16px;line-height:1.5;\">\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Overseas medical industry is changing, including foreign medical institutions participation of the medical service market in China, overseas medical service institutions, the transformation of medical institution to the entity on the Internet platform of mobile medical companies into overseas medical care.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Our reporter Liu Chong Reporting from Beijing\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Every bag lay the book on to the Mayo clinic (Mayo\'s a-clinic) learning management of books, it has almost become standard about Mayo event in recent years. The medical institution is located in the town of rochester, admired in China has been full of the famed as \"mecca\" of medicine.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Mayo has made a show of all the more to China\'s medical service market. On August 19, Mayo was formally established the Chinese Referral Office (China Referral Office). \"This is our after Canada, Mexico and the Middle East, and set up a referral office.\" Mayo global sales executive director Peter Streit reporter said on the 21st century economy.\r\n	</p>\r\n</span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','20150928/screen-98ab41aa766e3ad0b8e159768c129344.jpg'),(3,'In 2015 in overseas medical blowout','1442766993','<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Have, according to data from 2003 to 2012, the eight years, Chinese patients overseas medical expenditure increase year by year, increase 400%. Some people predict that in the next decade may exceed tens of billions of overseas medical market, development prospect is very big, will usher in 2015 overseas medical explosive growth. Why there are so many patients considering overseas treatment? This has to do with China and the United States and other developed countries differences in the levels of medical treatment.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Overseas medical industry is changing, including foreign medical institutions participation of the medical service market in China, overseas medical service institutions, the transformation of medical institution to the entity on the Internet platform of mobile medical companies into overseas medical care.\r\n	</p>\r\n</p>\r\n<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','20150928/screen-5e5fc790f941b0001428a51ad185abd4.jpg'),(4,'Overseas medical divisions','1442766994','<p>\r\n	<span style=\"font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;font-size:16px;line-height:1.5;\">\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Overseas medical industry is changing, including foreign medical institutions participation of the medical service market in China, overseas medical service institutions, the transformation of medical institution to the entity on the Internet platform of mobile medical companies into overseas medical care.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Our reporter Liu Chong Reporting from Beijing\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Every bag lay the book on to the Mayo clinic (Mayo\'s a-clinic) learning management of books, it has almost become standard about Mayo event in recent years. The medical institution is located in the town of rochester, admired in China has been full of the famed as \"mecca\" of medicine.\r\n	</p>\r\n	<p class=\"tgt\" style=\"font-size:14px;color:#2B2B2B;font-family:arial, sans-serif;background-color:#FAFAFA;\">\r\n		Mayo has made a show of all the more to China\'s medical service market. On August 19, Mayo was formally established the Chinese Referral Office (China Referral Office). \"This is our after Canada, Mexico and the Middle East, and set up a referral office.\" Mayo global sales executive director Peter Streit reporter said on the 21st century economy.\r\n	</p>\r\n</span>\r\n</p>\r\n<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<br />\r\n</p>\r\n<br />\r\n<p>\r\n	<br />\r\n</p>','20150928/screen-36c84d4639283bbc62e033d1472366ca.jpg'),(5,'Two American \"star\" on the Chinese overseas medical hospital market upgrade again','1442767006','<p style=\"font-size:16px;font-family:\'Microsoft YaHei\', u5FAEu8F6Fu96C5u9ED1, Arial, SimSun, u5B8Bu4F53;\">\r\n	<span style=\"font-family:宋体, Arial, Tahoma, Helvetica, sans-serif;font-size:14px;line-height:28px;background-color:#FFFFFF;\"><span style=\"color:#2B2B2B;font-family:arial, sans-serif;font-size:14px;line-height:21px;background-color:#FAFAFA;\">Folk prescription of traditional Chinese medicine (TCM), dietary supplements, fujin made, together we can say is protean, formula for treating patients, measuring way, and even may be based on personal experience old doctor of traditional Chinese medicine is very different, this can be said to be five thousand years of Chinese traditional characteristics. That prompted the development of modern medical out of the \"Chinese medicine\", however, western medicine combined treatment is the lack of traditional Chinese medicine (TCM) in one thousand summary of flexible regularity, especially in recent years to the development of cancer chemotherapy, many ChengNuo a reception of cancer patients are after multiple cycles of chemotherapy of patients with severe, some patients switching frequency is quite fast, but not really achieve the efficacy of treatment.</span></span> \r\n</p>','20150928/screen-10f1b15be7f4b27ecf07adb006d8b33a.jpg'),(6,'Overseas medical handles more welcomed by patients','1442767031','<div style=\"text-align:center;\">\r\n	<div style=\"text-align:left;\">\r\n		<span style=\"background-color:#FFFFFF;color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;\"><span style=\"color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\"><span style=\"color:#2B2B2B;font-family:arial, sans-serif;font-size:14px;line-height:21px;background-color:#FAFAFA;\">Must go abroad cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion,<span style=\"color:#2B2B2B;font-family:arial, sans-serif;font-size:14px;line-height:21px;background-color:#FAFAFA;\">Must go abroad cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion, but the fact is that the intensive cure must go abroad in the overseas medical cosmetic, health care, medical and so on have repeatedly been bombed by public opinion,</span></span></span><span style=\"color:#2B2B2B;font-family:simsun, arial, helvetica, clean, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;\"></span></span> \r\n	</div>\r\n</div>','20150928/screen-77a1c4efbfc436f910068b63172d9db8.jpg');
/*!40000 ALTER TABLE `tmp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-29 19:42:38
