/*
Navicat MySQL Data Transfer

Source Server         : Mysql57
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : db_shop

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2019-12-26 23:34:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', '123456', '123456');

-- ----------------------------
-- Table structure for tb_bbs
-- ----------------------------
DROP TABLE IF EXISTS `tb_bbs`;
CREATE TABLE `tb_bbs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(20000) DEFAULT NULL,
  `INTime` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_bbs
-- ----------------------------
INSERT INTO `tb_bbs` VALUES ('1', '双十一活动', '双十一活动，部分商品8折，限时1小时。', null);
INSERT INTO `tb_bbs` VALUES ('2', '双十二活动', '全场买三免一', null);

-- ----------------------------
-- Table structure for tb_brand
-- ----------------------------
DROP TABLE IF EXISTS `tb_brand`;
CREATE TABLE `tb_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `order` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='品牌表';

-- ----------------------------
-- Records of tb_brand
-- ----------------------------
INSERT INTO `tb_brand` VALUES ('1', 'IT类', 'brand/20191125\\8c6de92f7406ea7e9b4d8bd060a03747.jpg', '2019-11-25 20:28:54', '0');
INSERT INTO `tb_brand` VALUES ('2', '文学类', 'brand/20191125\\7436781240a2edfa87465e5bf39ce44b.jpg', '2019-11-25 20:29:08', '0');
INSERT INTO `tb_brand` VALUES ('3', '王先国C', 'brand/20191125\\7ff42b570483e6dc2e01684c609bbd73.jpg', '2019-11-25 20:29:18', '0');
INSERT INTO `tb_brand` VALUES ('4', 'c程序设计谭浩强程序设计', 'brand/20191125\\34575b6778b8d7f6a590e7c7ee3be1ac.jpg', '2019-11-25 21:54:41', '0');
INSERT INTO `tb_brand` VALUES ('5', 'c++程序设计谭浩强程序设计', 'brand/20191125\\d29b6945c8ae68c23cd627aa9bdc0314.jpg', '2019-11-25 21:54:51', '0');
INSERT INTO `tb_brand` VALUES ('6', 'c程序谭浩强程序设计', 'brand/20191125\\12bb7735f8444be1b48084c42c05d2de.jpg', '2019-11-25 21:55:08', '0');

-- ----------------------------
-- Table structure for tb_car
-- ----------------------------
DROP TABLE IF EXISTS `tb_car`;
CREATE TABLE `tb_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_car
-- ----------------------------
INSERT INTO `tb_car` VALUES ('26', '10', '1', '1');
INSERT INTO `tb_car` VALUES ('30', '15', '2', null);

-- ----------------------------
-- Table structure for tb_goods
-- ----------------------------
DROP TABLE IF EXISTS `tb_goods`;
CREATE TABLE `tb_goods` (
  `id` bigint(8) NOT NULL AUTO_INCREMENT,
  `superType` int(10) DEFAULT NULL,
  `typeID` int(4) DEFAULT NULL,
  `goodsname` varchar(200) DEFAULT NULL,
  `introduce` text,
  `nums` varchar(100) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `nowPrice` decimal(8,2) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `INTime` datetime(6) DEFAULT NULL,
  `bid` int(6) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tid` int(6) DEFAULT NULL,
  `newGoods` varchar(4) DEFAULT NULL,
  `sale` varchar(4) DEFAULT NULL,
  `hit` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_goods
-- ----------------------------
INSERT INTO `tb_goods` VALUES ('10', '24', '12', '断舍离', '日本山下英子创作的家庭生活类著作，首次出版于2009年。', '2', '30.00', '28.00', 'goods1.JPG', '2019-11-13 21:13:38.000000', '1', '1', '2', '0', '1', null);
INSERT INTO `tb_goods` VALUES ('11', '24', '12', '人间值得', '日本作家中村恒子和奥田弘美编写的，由北京日报出版社出版。', '2', '28.00', '23.00', 'goods2.JPG', '2019-11-12 21:13:47.000000', '1', '1', '2', '0', '1', null);
INSERT INTO `tb_goods` VALUES ('13', '24', '12', '人性的弱点', '2014年9月天津人民出版社出版的书籍，作者戴尔?卡耐基。', '3', '40.00', '33.00', 'goods3.JPG', '2019-11-15 21:50:26.000000', '1', '1', '2', '0', '1', null);
INSERT INTO `tb_goods` VALUES ('15', '26', '15', 'Java面向对象编程（第2版）', '孙卫琴编著，电子工业出版社。', '2', '98.00', '88.50', 'goods7.jpg', '2019-11-17 22:04:16.000000', '2', '1', '1', '1', '1', null);
INSERT INTO `tb_goods` VALUES ('16', '26', '15', '第一行代码Android（第2版）', '作者郭霖，由人民邮电出版社于2016年11月出版。', '2', '75.00', '65.50', 'goods8.jpg', '2019-11-17 22:08:23.000000', '2', '1', '1', '1', '1', null);
INSERT INTO `tb_goods` VALUES ('17', null, null, '朝花夕拾', '鲁迅的散文集', '2', '50.00', '42.00', 'goods6.jpg', null, '1', '1', '2', null, null, null);

-- ----------------------------
-- Table structure for tb_member
-- ----------------------------
DROP TABLE IF EXISTS `tb_member`;
CREATE TABLE `tb_member` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `truename` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `cardNO` varchar(24) DEFAULT NULL,
  `cardType` varchar(20) DEFAULT NULL,
  `grade` int(4) DEFAULT NULL,
  `Amount` decimal(8,2) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `freeze` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tb_member
-- ----------------------------
INSERT INTO `tb_member` VALUES ('1', 'cloud', '王五', '123321', '广东深圳', '518001', '441254199708282654', '中国居民身份证', '3', '25000.00', '13825469514', '15265284@qq.com', '0');
INSERT INTO `tb_member` VALUES ('2', 'windy', '刘六', '123456', '广东韶关', '518000', '442118199802263527', '中国居民身份证', '2', '10000.00', '13528785269', '45865378@qq.com', '0');

-- ----------------------------
-- Table structure for tb_number
-- ----------------------------
DROP TABLE IF EXISTS `tb_number`;
CREATE TABLE `tb_number` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `truename` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `cardNO` varchar(24) DEFAULT NULL,
  `cardType` varchar(20) DEFAULT NULL,
  `grade` int(4) DEFAULT NULL,
  `Amount` decimal(8,2) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `freeze` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_number
-- ----------------------------
INSERT INTO `tb_number` VALUES ('1', 'windy', '张三', '123456', '东莞麻涌', '517446', '441254199901282654', '中国居民身份证', '5', '200000.00', '13825469514', '15265284@qq.com', '0');
INSERT INTO `tb_number` VALUES ('2', 'sunny', '王五', '152365', '深圳宝安', '518000', '441526199203251254', '中国居民身份证', '2', '15000.00', '15012536852', '52874156@qq.com', '0');

-- ----------------------------
-- Table structure for tb_order
-- ----------------------------
DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE `tb_order` (
  `id` bigint(8) NOT NULL,
  `bnumber` smallint(2) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `truename` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `pay` varchar(20) DEFAULT NULL,
  `carry` varchar(20) DEFAULT NULL,
  `rebate` float(8,0) DEFAULT NULL,
  `OrderDate` datetime(4) DEFAULT NULL,
  `enforce` int(4) DEFAULT NULL,
  `bz` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_order
-- ----------------------------
INSERT INTO `tb_order` VALUES ('10001', '1', 'windy', '张三', '东莞麻涌', '517445', '13825469514', '支付宝', '顺丰', '0', '2019-11-17 09:30:04.0000', '1', '快件');
INSERT INTO `tb_order` VALUES ('10002', '2', 'runny', '李四', '广东深圳', '518000', '13528965741', '微信', '中通', '0', '2019-11-07 11:20:48.0000', '1', '慢件');

-- ----------------------------
-- Table structure for tb_orderes
-- ----------------------------
DROP TABLE IF EXISTS `tb_orderes`;
CREATE TABLE `tb_orderes` (
  `name` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `send_time` datetime DEFAULT NULL,
  `receive_time` datetime DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL COMMENT '1待发货2.待收货3.待评价4，已评价',
  `evaluate` varchar(200) DEFAULT NULL,
  `revaluate` varchar(200) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `total` decimal(8,0) DEFAULT NULL,
  `price` decimal(8,0) DEFAULT NULL,
  `realname` varchar(30) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_orderes
-- ----------------------------
INSERT INTO `tb_orderes` VALUES ('android第一行代码', '12', '1', '1', '2019-11-25 20:36:04', '2019-11-25 20:37:33', '2019-11-25 20:37:56', '1', '适合学的人', '请给发评！谢谢！！', '2', '170', '85', '张三', 'windy');
INSERT INTO `tb_orderes` VALUES ('断舍离', '13', '1', '2', '2019-11-25 20:36:04', '2019-11-25 20:37:34', '2019-11-25 20:37:57', '3', '还行', '请给发评！谢谢！！', '3', '135', '56', '李四', 'sunny');
INSERT INTO `tb_orderes` VALUES ('朝花夕拾', '14', '1', '3', '2019-11-25 20:36:04', '2019-11-25 20:37:36', '2019-12-26 14:49:57', '4', '好看', '请给发评！谢谢！！', '1', '61', '61', '王五', 'coldy');
INSERT INTO `tb_orderes` VALUES ('人间值得', '15', '2', '5', '2019-11-25 21:59:14', '2019-11-25 22:07:18', '2019-12-26 23:29:59', '3', '懂很多', '请给发评！谢谢！！', '4', '51', '51', '刘六', 'total');
INSERT INTO `tb_orderes` VALUES ('人性的弱点', '16', '2', '2', '2019-11-25 21:59:29', '2019-11-25 22:07:20', '2019-11-25 22:09:47', '1', '发现新东西', '请给发评！谢谢！！', '2', '130', '65', '七七', 'ending');

-- ----------------------------
-- Table structure for tb_orders
-- ----------------------------
DROP TABLE IF EXISTS `tb_orders`;
CREATE TABLE `tb_orders` (
  `id` bigint(8) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `orderid` bigint(8) DEFAULT NULL,
  `goodsname` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `number` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_orders
-- ----------------------------
INSERT INTO `tb_orders` VALUES ('10', 'windy', '10001', '断离舍', '50.00', '2');
INSERT INTO `tb_orders` VALUES ('11', 'runny', '10002', '人间值得', '69.00', '3');

-- ----------------------------
-- Table structure for tb_type
-- ----------------------------
DROP TABLE IF EXISTS `tb_type`;
CREATE TABLE `tb_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_type
-- ----------------------------
INSERT INTO `tb_type` VALUES ('1', 'IT类', '1', '2019-11-25 20:52:14');
INSERT INTO `tb_type` VALUES ('2', '文学类', '2', '2019-11-25 20:52:18');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('11', '13727545983', '123456');

-- ----------------------------
-- Table structure for tb_users
-- ----------------------------
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `realname` varchar(50) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_users
-- ----------------------------
INSERT INTO `tb_users` VALUES ('12', '17053133', '123456', '1381352878', '中大新华', '林茂森', '2019-12-25 20:26:17');
