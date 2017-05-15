/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : yii2reportbk

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-05-15 23:01:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for smoking_type
-- ----------------------------
DROP TABLE IF EXISTS `smoking_type`;
CREATE TABLE `smoking_type` (
  `smoking_type_id` int(11) NOT NULL,
  `smoking_type_name` varchar(150) DEFAULT NULL,
  `hos_guid` varchar(38) DEFAULT NULL,
  `nhso_code` char(1) DEFAULT NULL,
  PRIMARY KEY (`smoking_type_id`),
  UNIQUE KEY `ix_smoking_type_name` (`smoking_type_name`),
  KEY `ix_hos_guid` (`hos_guid`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of smoking_type
-- ----------------------------
INSERT INTO `smoking_type` VALUES ('1', 'ไม่เคยสูบ', '{15070179-F023-11E2-A10B-00FF8C046E8A}', '0');
INSERT INTO `smoking_type` VALUES ('2', 'ยังสูบอยู่ หรือเลิกสูบได้ยังไม่ถึง 1 เดือน', '{150706FD-F023-11E2-A10B-00FF8C046E8A}', '2');
INSERT INTO `smoking_type` VALUES ('3', 'เลิกสูบแล้วอย่างน้อย 1 เดือน', '{15070975-F023-11E2-A10B-00FF8C046E8A}', '1');
INSERT INTO `smoking_type` VALUES ('4', 'ไม่ได้ซัก', '{15070AEF-F023-11E2-A10B-00FF8C046E8A}', 'N');
