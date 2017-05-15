/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : yii2reportbk

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-05-15 23:01:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for insys
-- ----------------------------
DROP TABLE IF EXISTS `insys`;
CREATE TABLE `insys` (
  `Vstdate` varchar(255) DEFAULT NULL,
  `Vn` varchar(255) NOT NULL,
  `Hn` varchar(255) DEFAULT NULL,
  `Pt` varchar(255) DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `Age_y` varchar(255) DEFAULT NULL,
  `Pttype` varchar(255) DEFAULT NULL,
  `Clinic` varchar(255) DEFAULT NULL,
  `Drugallergy` varchar(255) DEFAULT NULL,
  `Pdx` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Bw` varchar(255) DEFAULT NULL,
  `Waist` varchar(255) DEFAULT NULL,
  `Cc` varchar(255) DEFAULT NULL,
  `Bpd` varchar(255) DEFAULT NULL,
  `Bps` varchar(255) DEFAULT NULL,
  `Drinking_type_id` varchar(255) DEFAULT NULL,
  `Smoking_type_id` varchar(255) DEFAULT NULL,
  `Hr` varchar(255) DEFAULT NULL,
  `Pe` varchar(255) DEFAULT NULL,
  `Pulse` varchar(255) DEFAULT NULL,
  `Temperature` varchar(255) DEFAULT NULL,
  `Rr` varchar(255) DEFAULT NULL,
  `Fbs` varchar(255) DEFAULT NULL,
  `Bmi` varchar(255) DEFAULT NULL,
  `Tg` varchar(255) DEFAULT NULL,
  `Hdl` varchar(255) DEFAULT NULL,
  `Glucurine` varchar(255) DEFAULT NULL,
  `Bun` varchar(255) DEFAULT NULL,
  `Creatinine` varchar(255) DEFAULT NULL,
  `Ua` varchar(255) DEFAULT NULL,
  `Hba1c` varchar(255) DEFAULT NULL,
  `Tc` varchar(255) DEFAULT NULL,
  `Ldl` varchar(255) DEFAULT NULL,
  `Ast` varchar(255) DEFAULT NULL,
  `Alt` varchar(255) DEFAULT NULL,
  `Cholesterol` varchar(255) DEFAULT NULL,
  `Gfr_ckd` varchar(255) DEFAULT NULL,
  `Hct_cbc` varchar(255) DEFAULT NULL,
  `Wbc_count_cbc` varchar(255) DEFAULT NULL,
  `Eo_cbc` varchar(255) DEFAULT NULL,
  `Urine_proteine_ua` varchar(255) DEFAULT NULL,
  `Urine_gluose_ua` varchar(255) DEFAULT NULL,
  `Rbc_ua` varchar(255) DEFAULT NULL,
  `Wbc_ua` varchar(255) DEFAULT NULL,
  `Parasite` varchar(255) DEFAULT NULL,
  `Occountblood` varchar(255) DEFAULT NULL,
  `Dx_doctor` varchar(255) DEFAULT NULL,
  `Dname` varchar(255) DEFAULT NULL,
  `ic_confirm` smallint(6) DEFAULT '0',
  `ic_insys` smallint(6) DEFAULT '0',
  `ic_report` smallint(6) DEFAULT '0',
  PRIMARY KEY (`Vn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
