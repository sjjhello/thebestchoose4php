/*
Navicat MySQL Data Transfer

Source Server         : sjj
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : thebestshop

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-05-06 20:45:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bs_admin
-- ----------------------------
DROP TABLE IF EXISTS `bs_admin`;
CREATE TABLE `bs_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_admin
-- ----------------------------
INSERT INTO `bs_admin` VALUES ('1', 'sufuring', '123456');
INSERT INTO `bs_admin` VALUES ('2', 'sjj_hello', '123456');
INSERT INTO `bs_admin` VALUES ('3', 'wow', '123456');

-- ----------------------------
-- Table structure for bs_category
-- ----------------------------
DROP TABLE IF EXISTS `bs_category`;
CREATE TABLE `bs_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cName` (`cName`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_category
-- ----------------------------
INSERT INTO `bs_category` VALUES ('2', '零食');
INSERT INTO `bs_category` VALUES ('1', '饮料');

-- ----------------------------
-- Table structure for bs_pro
-- ----------------------------
DROP TABLE IF EXISTS `bs_pro`;
CREATE TABLE `bs_pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pName` varchar(255) DEFAULT NULL,
  `pTitle` varchar(255) DEFAULT NULL,
  `pUrl` varchar(255) DEFAULT NULL,
  `bPrice` decimal(10,2) DEFAULT NULL,
  `nPrice` decimal(10,2) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `isShow` tinyint(1) DEFAULT '1',
  `sId` int(11) DEFAULT NULL,
  `cId` int(11) DEFAULT NULL,
  `pic_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pTitle` (`pTitle`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_pro
-- ----------------------------
INSERT INTO `bs_pro` VALUES ('96', '板栗', '食栗派 2017年新栗子迁西板栗3斤/5斤包邮板栗 生 新鲜2500g', 'https://item.taobao.com/item.htm?id=42371436101', '65.90', '39.90', '河北 唐山', '1', '1', '2', '//g-search3.alicdn.com/img/bao/uploaded/i4/i3/875528476/TB2pWRff97PL1JjSZFHXXcciXXa_!!875528476.jpg');
INSERT INTO `bs_pro` VALUES ('97', '板栗', '浔隐山| 甘栗仁 迁西板栗 熟栗子 零食特产低卡低热 袋装100gX2袋', 'https://item.taobao.com/item.htm?id=558668336185', '28.00', '25.20', '安徽 黄山', '1', '1', '2', '//g-search3.alicdn.com/img/bao/uploaded/i4/i1/391646692/TB2vCE2eBUSMeJjy1zjXXc0dXXa_!!391646692.jpg');
INSERT INTO `bs_pro` VALUES ('98', '板栗', '罗田板栗生新鲜现剥去壳仁迁真空包装西板栗肉500g零食甘栗子5斤', 'https://item.taobao.com/item.htm?id=563957546778', '21.90', '17.90', '湖北 黄冈', '1', '1', '2', '//g-search3.alicdn.com/img/bao/uploaded/i4/i4/2589619090/TB2OMS7bfuSBuNkHFqDXXXfhVXa_!!2589619090.jpg');
INSERT INTO `bs_pro` VALUES ('99', '板栗', '金贵子油栗子仁500g真贵子油栗仁即食板栗甘栗仁新鲜去皮坚果仁', 'https://item.taobao.com/item.htm?id=537605501917', '38.00', '30.00', '山东 临沂', '1', '1', '2', '//g-search3.alicdn.com/img/bao/uploaded/i4/i1/2232091104/TB1ijmnXuuSBuNjSsplXXbe8pXa_!!0-item_pic.jpg');
INSERT INTO `bs_pro` VALUES ('100', '板栗', '口口福板栗仁500g山东糖炒甘栗仁泰山熟栗子仁美栗零食即食坚果', 'https://item.taobao.com/item.htm?id=549939350039', '69.90', '26.90', '浙江 杭州', '1', '1', '1', '//g-search3.alicdn.com/img/bao/uploaded/i4/i1/33935307/TB2MQc0k8TH8KJjy0FiXXcRsXXa_!!33935307.jpg');
INSERT INTO `bs_pro` VALUES ('101', '板栗', '【粒上皇】板栗仁80g*3 甘栗仁零食迁西特产栗子仁熟栗油子栗坚果', 'https://item.taobao.com/item.htm?id=530596277896', '53.80', '26.90', '广东 广州', '1', '1', '1', '//g-search3.alicdn.com/img/bao/uploaded/i4/i3/2750423132/TB2jCsmfwmTBuNjy1XbXXaMrVXa_!!2750423132.jpg');

-- ----------------------------
-- Table structure for bs_user
-- ----------------------------
DROP TABLE IF EXISTS `bs_user`;
CREATE TABLE `bs_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_user
-- ----------------------------
INSERT INTO `bs_user` VALUES ('0', 'hello', '123456');
