/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : yii2reportbk

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-05-15 23:02:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for drinking_type
-- ----------------------------
DROP TABLE IF EXISTS `drinking_type`;
CREATE TABLE `drinking_type` (
  `drinking_type_id` int(11) NOT NULL,
  `drinking_type_name` varchar(150) DEFAULT NULL,
  `hos_guid` char(38) DEFAULT NULL,
  `nhso_code` char(1) DEFAULT NULL,
  PRIMARY KEY (`drinking_type_id`),
  UNIQUE KEY `ix_drinking_type_name` (`drinking_type_name`),
  KEY `ix_hos_guid` (`hos_guid`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of drinking_type
-- ----------------------------
INSERT INTO `drinking_type` VALUES ('0', null, null, null);
INSERT INTO `drinking_type` VALUES ('1', 'ไม่ดื่ม', null, null);
INSERT INTO `drinking_type` VALUES ('2', 'ดื่ม', null, null);
INSERT INTO `drinking_type` VALUES ('3', 'เคยดื่ม แต่เลิกแล้ว', null, null);
