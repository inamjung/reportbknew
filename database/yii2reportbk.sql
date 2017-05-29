/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : yii2reportbk

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-05-29 20:05:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `properties` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('administrator', '1', '1490865074');
INSERT INTO `auth_assignment` VALUES ('manager', '2', '1490865093');
INSERT INTO `auth_assignment` VALUES ('user', '3', '1490865104');
INSERT INTO `auth_assignment` VALUES ('user', '4', '1490865118');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`) USING BTREE,
  KEY `idx-auth_item-type` (`type`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/gridview/export/download', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/gridview/export/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/gridview/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/index', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/create', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/update', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/update-profile', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/info', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/switch', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/assignments', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/confirm', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/delete', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/block', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/resend-password', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/admin/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/profile/index', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/profile/show', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/profile/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/recovery/request', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/recovery/reset', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/recovery/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/registration/register', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/registration/connect', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/registration/confirm', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/registration/resend', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/registration/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/security/auth', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/security/login', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/security/logout', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/security/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/settings/profile', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/settings/account', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/settings/confirm', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/settings/networks', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/settings/disconnect', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/settings/delete', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/settings/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/user/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/assignment/assign', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/assignment/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/permission/index', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/permission/create', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/permission/update', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/permission/delete', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/permission/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/role/index', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/role/create', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/role/update', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/role/delete', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/role/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/rule/index', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/rule/create', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/rule/update', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/rule/delete', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/rule/search', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/rule/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/rbac/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1490864687', '1490864687');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/hosxp/default/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/hosxp/default/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/hosxp/report/report1', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/hosxp/report/indivreport1', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/hosxp/report/report2', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/hosxp/report/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/hosxp/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/captcha', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/contact', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/about', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/signup', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/request-password-reset', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/reset-password', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1490864688', '1490864688');
INSERT INTO `auth_item` VALUES ('ดูแลระบบแจ้งซ่อม', '2', null, null, null, '1490864766', '1490950638');
INSERT INTO `auth_item` VALUES ('ผู้ดูแลระบบ', '2', null, null, null, '1490864875', '1490950571');
INSERT INTO `auth_item` VALUES ('สมาชิก', '2', null, null, null, '1490864910', '1490950592');
INSERT INTO `auth_item` VALUES ('administrator', '1', null, null, null, '1490864969', '1490864969');
INSERT INTO `auth_item` VALUES ('manager', '1', null, null, null, '1490865025', '1490865025');
INSERT INTO `auth_item` VALUES ('user', '1', null, null, null, '1490865048', '1490865048');
INSERT INTO `auth_item` VALUES ('/inven/default/index', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/default/*', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/departments/index', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/departments/view', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/departments/create', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/departments/update', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/departments/delete', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/departments/*', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invendetails/index', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invendetails/view', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invendetails/create', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invendetails/update', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invendetails/delete', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invendetails/*', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/indexuser', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/index', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/view', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/create', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/update', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/delete', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/report', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/invenmains/*', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/products/index', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/products/view', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/products/create', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/products/update', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/products/delete', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/products/*', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/types/index', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/types/view', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/types/create', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/types/update', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/types/delete', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/types/*', '2', null, null, null, '1490950556', '1490950556');
INSERT INTO `auth_item` VALUES ('/inven/*', '2', null, null, null, '1490950556', '1490950556');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('administrator', 'ผู้ดูแลระบบ');
INSERT INTO `auth_item_child` VALUES ('manager', 'ดูแลระบบแจ้งซ่อม');
INSERT INTO `auth_item_child` VALUES ('user', 'สมาชิก');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/hosxp/*');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/hosxp/default/*');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/hosxp/default/index');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/hosxp/report/*');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/hosxp/report/indivreport1');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/hosxp/report/report1');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/hosxp/report/report2');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/inven/invenmains/create');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/inven/invenmains/indexuser');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/inven/invenmains/update');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/site/index');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/user/security/login');
INSERT INTO `auth_item_child` VALUES ('ดูแลระบบแจ้งซ่อม', '/user/security/logout');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/debug/default/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/debug/default/db-explain');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/debug/default/download-mail');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/debug/default/toolbar');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gii/default/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gii/default/action');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gii/default/diff');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gii/default/preview');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gridview/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gridview/export/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/gridview/export/download');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/hosxp/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/hosxp/default/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/hosxp/default/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/hosxp/report/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/hosxp/report/indivreport1');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/hosxp/report/report1');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/hosxp/report/report2');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/default/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/default/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/departments/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/departments/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/departments/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/departments/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/departments/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/departments/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invendetails/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invendetails/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invendetails/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invendetails/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invendetails/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invendetails/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/indexuser');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/report');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/invenmains/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/products/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/products/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/products/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/products/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/products/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/products/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/types/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/types/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/types/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/types/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/types/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/inven/types/view');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/assignment/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/permission/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/permission/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/permission/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/permission/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/permission/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/role/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/role/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/role/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/role/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/role/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/rule/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/rule/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/rule/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/rule/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/rule/search');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/rbac/rule/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/about');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/captcha');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/contact');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/error');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/login');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/reset-password');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/site/signup');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/assignments');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/block');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/confirm');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/create');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/info');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/resend-password');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/switch');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/update');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/admin/update-profile');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/profile/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/profile/index');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/profile/show');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/recovery/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/recovery/request');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/recovery/reset');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/registration/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/registration/confirm');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/registration/connect');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/registration/register');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/registration/resend');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/security/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/security/auth');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/security/login');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/security/logout');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/settings/*');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/settings/account');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/settings/confirm');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/settings/delete');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/settings/disconnect');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/settings/networks');
INSERT INTO `auth_item_child` VALUES ('ผู้ดูแลระบบ', '/user/settings/profile');
INSERT INTO `auth_item_child` VALUES ('สมาชิก', '/inven/invenmains/create');
INSERT INTO `auth_item_child` VALUES ('สมาชิก', '/inven/invenmains/indexuser');
INSERT INTO `auth_item_child` VALUES ('สมาชิก', '/inven/invenmains/update');
INSERT INTO `auth_item_child` VALUES ('สมาชิก', '/site/index');
INSERT INTO `auth_item_child` VALUES ('สมาชิก', '/user/security/login');
INSERT INTO `auth_item_child` VALUES ('สมาชิก', '/user/security/logout');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for bkopdscreen
-- ----------------------------
DROP TABLE IF EXISTS `bkopdscreen`;
CREATE TABLE `bkopdscreen` (
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
  PRIMARY KEY (`Vn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bkopdscreen
-- ----------------------------

-- ----------------------------
-- Table structure for departments
-- ----------------------------
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departments
-- ----------------------------
INSERT INTO `departments` VALUES ('1', 'งานบริหารทั่วไป');
INSERT INTO `departments` VALUES ('2', 'งานบริการผู้ป่วยนอก');
INSERT INTO `departments` VALUES ('3', 'เภสัชกรรม');

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

-- ----------------------------
-- Table structure for excel_upload
-- ----------------------------
DROP TABLE IF EXISTS `excel_upload`;
CREATE TABLE `excel_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_file` varchar(255) DEFAULT NULL,
  `detail_file` text,
  `upload_date` datetime DEFAULT NULL COMMENT 'วันเวลาอับโหลด',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of excel_upload
-- ----------------------------

-- ----------------------------
-- Table structure for file_upload
-- ----------------------------
DROP TABLE IF EXISTS `file_upload`;
CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debit_file` varchar(255) DEFAULT NULL,
  `detail_file` text,
  `upload_date` datetime DEFAULT NULL COMMENT 'วันเวลาอับโหลด',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of file_upload
-- ----------------------------
INSERT INTO `file_upload` VALUES ('1', 'ic.xls', '', '2017-05-09 04:05:24');

-- ----------------------------
-- Table structure for grouplab
-- ----------------------------
DROP TABLE IF EXISTS `grouplab`;
CREATE TABLE `grouplab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of grouplab
-- ----------------------------
INSERT INTO `grouplab` VALUES ('1', 'เบาหวาน');
INSERT INTO `grouplab` VALUES ('2', 'การำงานของไต');
INSERT INTO `grouplab` VALUES ('3', 'ภาวะเสี่ยงโรคเกาต์');
INSERT INTO `grouplab` VALUES ('4', 'การทำงานของตับ');
INSERT INTO `grouplab` VALUES ('5', 'ไขมันเลือด');
INSERT INTO `grouplab` VALUES ('6', 'ความสมบูรณ์ของเลือด');
INSERT INTO `grouplab` VALUES ('7', 'ตรวจปัสสาวะ');
INSERT INTO `grouplab` VALUES ('8', 'ตรวจอุจจาระ');
INSERT INTO `grouplab` VALUES ('9', 'ความผิดปกติของทรวงอก');
INSERT INTO `grouplab` VALUES ('10', 'อื่นๆ');

-- ----------------------------
-- Table structure for inresult
-- ----------------------------
DROP TABLE IF EXISTS `inresult`;
CREATE TABLE `inresult` (
  `Vstdate` varchar(255) DEFAULT NULL,
  `Cid` varchar(13) DEFAULT NULL,
  `Vn` varchar(255) NOT NULL,
  `Hn` varchar(255) DEFAULT NULL,
  `Pt` varchar(255) DEFAULT NULL,
  `Age_y` varchar(255) DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `Cc` mediumtext,
  `Bp` varchar(255) DEFAULT NULL,
  `Bp1` varchar(20) DEFAULT NULL,
  `Waist` varchar(255) DEFAULT NULL,
  `Waist1` varchar(20) DEFAULT NULL,
  `Bmi` varchar(255) DEFAULT NULL,
  `Bmi1` varchar(20) DEFAULT NULL,
  `Fbs` varchar(255) DEFAULT NULL,
  `Fbs1` varchar(20) DEFAULT NULL,
  `Tg` varchar(255) DEFAULT NULL,
  `Tg1` varchar(20) DEFAULT NULL,
  `Hdl` varchar(255) DEFAULT NULL,
  `Hdl1` varchar(20) DEFAULT NULL,
  `Bun` varchar(255) DEFAULT NULL,
  `Bun1` varchar(255) DEFAULT NULL,
  `Creatinine` varchar(255) DEFAULT NULL,
  `Creatinine1` varchar(20) DEFAULT NULL,
  `Ldl` varchar(255) DEFAULT NULL,
  `Ldl1` varchar(20) DEFAULT NULL,
  `Ast` varchar(255) DEFAULT NULL,
  `Ast1` varchar(255) DEFAULT NULL,
  `Alt` varchar(255) DEFAULT NULL,
  `Alt1` varchar(255) DEFAULT NULL,
  `Cholesterol` varchar(255) DEFAULT NULL,
  `Cholesterol1` varchar(20) DEFAULT NULL,
  `Gfr_ckd` varchar(255) DEFAULT NULL,
  `Gfr_ckd1` varchar(20) DEFAULT NULL,
  `Hct_cbc` varchar(255) DEFAULT NULL,
  `Hct_cbc1` varchar(20) DEFAULT NULL,
  `Wbc_count_cbc` varchar(255) DEFAULT NULL,
  `Wbc_count_cbc1` varchar(20) DEFAULT NULL,
  `Eo_cbc` varchar(255) DEFAULT NULL,
  `Eo_cbc1` varchar(20) DEFAULT NULL,
  `Urine_proteine_ua` varchar(255) DEFAULT NULL,
  `Urine_proteine_ua1` varchar(20) DEFAULT NULL,
  `Urine_gluose_ua` varchar(255) DEFAULT NULL,
  `Urine_gluose_ua1` varchar(20) DEFAULT NULL,
  `Rbc_ua` varchar(255) DEFAULT NULL,
  `Rbc_ua1` varchar(20) DEFAULT NULL,
  `Wbc_ua` varchar(255) DEFAULT NULL,
  `Wbc_ua1` varchar(20) DEFAULT NULL,
  `Parasite` varchar(255) DEFAULT NULL,
  `Parasite1` varchar(20) DEFAULT NULL,
  `Occountblood` varchar(255) DEFAULT NULL,
  `Occountblood1` varchar(20) DEFAULT NULL,
  `Uric` varchar(255) DEFAULT NULL,
  `Uric1` varchar(20) DEFAULT NULL,
  `ic_confirm` smallint(6) DEFAULT '0',
  `ic_insys` smallint(6) DEFAULT '0',
  `ic_report` smallint(6) DEFAULT '0',
  PRIMARY KEY (`Vn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inresult
-- ----------------------------

-- ----------------------------
-- Table structure for insys
-- ----------------------------
DROP TABLE IF EXISTS `insys`;
CREATE TABLE `insys` (
  `Vstdate` date DEFAULT NULL,
  `Cid` varchar(13) DEFAULT NULL,
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
  `Bp` varchar(255) DEFAULT NULL,
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
  `Uric` varchar(255) DEFAULT NULL,
  `Dx_doctor` varchar(255) DEFAULT NULL,
  `Dname` varchar(255) DEFAULT NULL,
  `ic_confirm` smallint(6) DEFAULT '0',
  `ic_insys` smallint(6) DEFAULT '0',
  `ic_report` smallint(6) DEFAULT '0',
  PRIMARY KEY (`Vn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of insys
-- ----------------------------

-- ----------------------------
-- Table structure for invendetails
-- ----------------------------
DROP TABLE IF EXISTS `invendetails`;
CREATE TABLE `invendetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL COMMENT 'รายการ',
  `qty` int(11) DEFAULT NULL COMMENT 'จำนวน',
  `remark` varchar(255) DEFAULT NULL COMMENT 'หมายเหตุ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of invendetails
-- ----------------------------
INSERT INTO `invendetails` VALUES ('1', '1', '1', '10', '');
INSERT INTO `invendetails` VALUES ('2', '1', '2', '5', '');
INSERT INTO `invendetails` VALUES ('4', '2', '1', '2', '');
INSERT INTO `invendetails` VALUES ('5', '2', '2', '2', '');
INSERT INTO `invendetails` VALUES ('6', '2', '3', '2', '');

-- ----------------------------
-- Table structure for invenmains
-- ----------------------------
DROP TABLE IF EXISTS `invenmains`;
CREATE TABLE `invenmains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL COMMENT 'วันที่เบิก',
  `department_id` int(11) DEFAULT NULL COMMENT 'แผนก',
  `user_id` int(11) DEFAULT NULL COMMENT 'ผู้บันทึก',
  `create_at` date DEFAULT NULL COMMENT 'วันที่บันทึก',
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of invenmains
-- ----------------------------
INSERT INTO `invenmains` VALUES ('1', '2017-03-31 00:00:00', '1', null, null, null);
INSERT INTO `invenmains` VALUES ('2', '2017-03-29 00:00:00', '2', '4', '2017-03-31', null);

-- ----------------------------
-- Table structure for itemlab
-- ----------------------------
DROP TABLE IF EXISTS `itemlab`;
CREATE TABLE `itemlab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `dafault` varchar(255) DEFAULT NULL,
  `grouplab_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of itemlab
-- ----------------------------
INSERT INTO `itemlab` VALUES ('1', 'Fbs', '<=100', '1');
INSERT INTO `itemlab` VALUES ('2', 'Bun', '8-20', '2');
INSERT INTO `itemlab` VALUES ('3', 'Creatinine', '0.7-1.5', '2');
INSERT INTO `itemlab` VALUES ('4', 'Uric', '2.5-7.7', '3');

-- ----------------------------
-- Table structure for labvalue
-- ----------------------------
DROP TABLE IF EXISTS `labvalue`;
CREATE TABLE `labvalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labname` varchar(255) DEFAULT NULL,
  `values` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `default` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of labvalue
-- ----------------------------

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1490843021');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1490843029');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'รายการ',
  `detail` varchar(255) DEFAULT NULL COMMENT 'รายละเอียด',
  `type_id` int(11) DEFAULT NULL COMMENT 'ประเภท',
  `price` double DEFAULT NULL COMMENT 'ราคา',
  `qty` int(11) DEFAULT NULL COMMENT 'จำนวน',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'aa', 'aaa', '1', '50', '5');
INSERT INTO `products` VALUES ('2', 'bb', 'bbb', '1', '2', '5');
INSERT INTO `products` VALUES ('3', 'cc', 'ccc', '2', '5', '5');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', null, null, null, null, null, null, null, null, null);
INSERT INTO `profile` VALUES ('2', null, null, null, null, null, null, null, null, null);
INSERT INTO `profile` VALUES ('3', null, null, null, null, null, null, null, null, null);
INSERT INTO `profile` VALUES ('4', null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for pttype
-- ----------------------------
DROP TABLE IF EXISTS `pttype`;
CREATE TABLE `pttype` (
  `pttype` char(2) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `editmask` varchar(100) DEFAULT NULL,
  `isuse` char(1) DEFAULT NULL,
  `pcode` char(2) DEFAULT NULL,
  `requirecode` char(1) DEFAULT NULL,
  `doctor_fee` char(1) DEFAULT NULL,
  `fee_code` varchar(7) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `contract` char(1) DEFAULT NULL,
  `paidst` char(2) DEFAULT NULL,
  `in_region` char(1) DEFAULT NULL,
  `uc` char(1) DEFAULT NULL,
  `require_hcode` char(1) DEFAULT NULL,
  `oldcode` varchar(5) DEFAULT NULL,
  `fee_code2` varchar(7) DEFAULT NULL,
  `price_type` int(11) DEFAULT NULL,
  `debtor` char(1) DEFAULT NULL,
  `noexpire` char(1) DEFAULT NULL,
  `hipdata_code` varchar(6) DEFAULT NULL,
  `min_age` int(11) DEFAULT NULL,
  `max_age` int(11) DEFAULT NULL,
  `bill_sss` char(1) DEFAULT NULL,
  `bill_type` int(11) DEFAULT NULL,
  `hipdata_pttype` char(3) DEFAULT NULL,
  `use_contract_id` char(1) DEFAULT NULL,
  `yearly_charge` char(1) DEFAULT NULL,
  `yearly_charge_icode1` varchar(7) DEFAULT NULL,
  `yearly_charge_icode2` varchar(7) DEFAULT NULL,
  `region_type` int(11) DEFAULT NULL,
  `pttype_group1` char(3) DEFAULT NULL,
  `pttype_group2` char(3) DEFAULT NULL,
  `pttype_guid` varchar(38) DEFAULT NULL,
  `max_debt_money` double(15,3) DEFAULT NULL,
  `allow_finance_edit` char(1) DEFAULT NULL,
  `print_csmb_statement` char(1) DEFAULT NULL,
  `pttype_information` longtext,
  `fee_code_paidst` char(2) DEFAULT NULL,
  `fee_code2_paidst` char(2) DEFAULT NULL,
  `debt_due_day` int(11) DEFAULT NULL,
  `rx_pay_debit_tr` char(1) DEFAULT NULL,
  `separate_rcpno` char(1) DEFAULT NULL,
  `rcp_bookno` int(11) DEFAULT NULL,
  `separate_debt_id` char(1) DEFAULT NULL,
  `admit_fee_code` varchar(7) DEFAULT NULL,
  `use_package` char(1) DEFAULT NULL,
  `charge_df_perday` char(1) DEFAULT NULL,
  `nhso_code` char(2) DEFAULT NULL,
  `ipd_hour_cut` int(11) DEFAULT NULL,
  `pttype_spp_id` int(11) DEFAULT NULL,
  `print_presc_ned` char(1) DEFAULT NULL,
  `hos_guid` varchar(38) DEFAULT NULL,
  `sks_benefit_plan_type_id` int(11) DEFAULT NULL,
  `pttype_std_code` char(4) DEFAULT NULL,
  `export_eclaim` char(1) DEFAULT NULL,
  `round_money` char(1) DEFAULT NULL,
  `pttype_price_policy_type_id` int(11) DEFAULT NULL,
  `emp_privilege` char(1) DEFAULT NULL,
  `is_pttype_plan` char(1) DEFAULT NULL,
  `finance_round_money` char(1) DEFAULT NULL,
  `emp_financial` char(1) DEFAULT NULL,
  `pttype_eclaim_id` varchar(2) DEFAULT NULL,
  `pttype_price_group_id` int(11) DEFAULT NULL,
  `calc_discount` char(1) DEFAULT NULL,
  `debt_finance_limit` double(15,3) DEFAULT NULL,
  `debt_finance_pttype` char(2) DEFAULT NULL,
  `opbkk_type_code` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`pttype`),
  KEY `name` (`name`),
  KEY `ix_ix_hipdata_code` (`hipdata_code`),
  KEY `ix_pcode` (`pcode`),
  KEY `ix_pttype_spp_id` (`pttype_spp_id`),
  KEY `ix_pttype_guid` (`pttype_guid`),
  KEY `ix_nhso_code` (`nhso_code`)
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of pttype
-- ----------------------------
INSERT INTO `pttype` VALUES ('06', '06:ผู้พิการ (นอกเขต)', '', 'Y', 'AD', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'Y', 'UCS', null, null, 'N', null, '74', 'N', 'N', null, null, '1', null, null, '{EB47F76F-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '74', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '03', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('07', '07:นักเรียน ม.ต้น (นอกเขต)', '', 'Y', 'AC', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '73', 'N', 'N', null, null, '1', null, null, '{EB47FA3C-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '01', null, null, null, null, null, null, null, null, 'Y', '73', '6', '4', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, '08', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('08', '08:ภิกษุ สามเณร(นอกเขต)', '', 'Y', 'AF', 'Y', 'Y', '3000047', null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '76', 'N', 'N', null, null, '1', null, null, '{EB47FB19-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '76', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '08', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('10', '10:ชำระเงิน(จ่ายสด)', '', 'Y', 'A1', 'N', 'Y', null, '0', 'N', '03', null, null, 'N', null, null, '0', 'N', null, 'UCS', null, null, 'N', '0', '10', 'N', 'N', null, null, '5', null, null, '{EB47FBC2-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '6', null, null, '1', null, 'Y', 'Y', null, null, null, null, null, '27', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('12', '12: ตรวจสุภาพแรงงานต่างด้าว', '', 'Y', 'A1', 'Y', 'N', null, null, 'N', '03', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '07', 'N', 'N', null, null, '1', null, null, '{EB47FC6B-3923-11E7-BC2E-0894EF2FC582}', null, 'N', null, null, null, null, null, null, null, null, null, null, null, 'Y', '07', '6', '5', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, '21', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('20', '20 : เบิกได้(จ่ายเงินสด)', '', 'Y', 'A2', 'Y', 'Y', null, '0', 'N', '01', null, null, 'N', null, null, '0', 'Y', 'Y', 'OFC', null, null, 'N', '0', '02', 'N', 'N', null, null, '1', null, null, '{EB47FD11-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, '16', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('21', '21:ลูกหนี้ค่าตรวจสุขภาพหน่วยงานภาครัฐ', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', 'Y', 'OFC', null, null, 'N', '0', '02', 'N', 'N', null, null, '1', null, null, '{EB47FDB0-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '02', '6', '1', 'Y', null, '2', null, 'Y', 'Y', null, null, null, null, null, '16', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('40', '40:ผู้มีสิทธิลดหย่อนตามระเบียบ สธ', '', 'N', 'AI', 'Y', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '40', 'N', 'N', null, null, '1', null, null, '{EB47FE4F-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, null, null, null, null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('45', '45:ผู้ป่วยในโครงการพระบรมราชานุเคราะห์', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '45', 'N', 'N', null, null, '1', null, null, '{EB47FEF0-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('50', '50:ผู้ป่วยใช้ พ.ร.บ.', '', 'Y', 'A9', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '50', 'N', 'N', null, null, '2', null, null, '{EB47FFB8-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'N', '06', '6', '6', null, null, '7', null, 'Y', 'Y', null, null, null, null, null, '28', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('60', '60:อาสาสมัครมาเลเรีย', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '60', 'N', 'N', null, null, '1', null, null, '{EB48005C-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '60', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('61', '61:ครอบครัวอาสาสมัครมาเลเรีย', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '61', 'N', 'N', null, null, '1', null, null, '{EB4800F1-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '61', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('62', '62:ช่างสุขภัณฑ์หมู่บ้าน', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '62', 'N', 'N', null, null, '1', null, null, '{EB480188-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('63', '63:ครอบครัวของช่างสุขภัณฑ์หมู่บ้าน', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '78', 'N', 'N', null, null, '1', null, null, '{EB480224-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '78', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('64', '64:ผู้บริหารและครูของโรงเรียนเอกชนที่สอนศาสนาอิสลาม', '', 'N', 'A7', 'Y', 'Y', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', null, 'N', 'N', null, null, '1', null, null, '{EB4802C1-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '16', '6', '2', null, null, '4', null, null, null, null, null, null, null, null, '16', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('65', '65:ครอบครัวผู้บริหารร.ร.และครูสอนศาสนาอิสลาม', '', 'N', 'A7', 'Y', 'N', null, '0', 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{EB480364-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, null, '16', '6', '2', null, null, '4', null, null, null, null, null, null, null, null, '16', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('66', '66:ผู้ได้รับพระราชทานเหรียญชายแดน', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '66', 'N', 'N', null, null, '2', null, null, '{EB480401-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '66', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('67', '67:ผู้ได้รับพระราชทานเหรียญเสรีชน', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '67', 'N', 'N', null, null, '2', null, null, '{EB48049B-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '67', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('68', '68:ผู้บริจาคโลหิตครบ 18ครั้ง', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '68', 'N', 'N', null, null, '3', null, null, '{EB4805C3-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '68', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('71', '71:เด็ก 0-12ปี (ในเขต)', '', 'Y', 'AA', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '71', 'N', 'N', null, null, '1', null, null, '{EB480673-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('72', '72:ผู้ป่วยรายได้น้อย(ในเขต)', '', 'Y', 'AB', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '72', 'N', 'N', null, null, '1', null, null, '{EB48070B-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '72', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('73', '73:นักเรียน ม.ต้น (ในเขต)', '', 'Y', 'AC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '73', 'N', 'N', null, null, '1', null, null, '{EB48079F-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '73', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('74', '74:ผู้พิการ (ในเขต)', '', 'Y', 'AD', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'Y', 'UCS', null, null, 'N', '0', '74', 'N', 'N', null, null, '1', null, null, '{EB480833-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '74', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('75', '75:ทหารผ่านศึก', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '75', 'N', 'N', null, null, '1', null, null, '{EB4808C6-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('76', '76:ภิกษุ สามเณร(ในเขต)', '', 'Y', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '76', 'N', 'N', null, null, '1', null, null, '{EB480959-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '76', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('77', '77:ผู้สูงอายุ(ในเขต) 60 ปีขึ้นไป', '', 'Y', 'AG', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'Y', 'UCS', null, null, 'N', null, '77', 'N', 'N', null, null, '1', null, null, '{EB4809F3-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '77', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('78', '78:ผู้สูงอายุ(นอกเขต) 60 ปีขึ้นไป', '', 'Y', 'AG', 'Y', 'Y', null, '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'Y', 'UCS', null, null, 'N', '0', '78', 'N', 'N', null, null, '1', null, null, '{EB480A8B-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '01', null, null, null, null, null, null, null, null, 'Y', '77', '6', '4', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, '08', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('79', '79:เด็ก 0-12ปี (นอกเขต)', '', 'Y', 'AA', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '71', 'N', 'N', null, null, '1', null, null, '{EB480B26-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '08', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('80', '80:ครอบครัวทหารผ่านศึก', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '80', 'N', 'N', null, null, '1', null, null, '{EB480BB9-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('81', '81:ผู้นำชุมชน', '', 'Y', 'AK', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '81', 'N', 'N', null, null, '1', null, null, '{EB480C4E-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '81', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('82', '82: อสม.(ในเขต)', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '82', 'N', 'N', null, null, '1', null, null, '{EB480CE2-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('83', '83:ผู้นำศาสนาอิสลามที่มีการรับรอง', '', 'N', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{EB480D79-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '83', '6', '4', null, null, '3', null, null, null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('84', '84:ครอบครัวผู้นำศาสนาอิสลาม', '', 'N', 'AF', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, null, 'N', 'N', null, null, '1', null, null, '{EB480E12-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '83', '6', '4', null, null, '3', null, null, null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('85', '85:ผู้ได้รับพระราชทานเหรียญงานสงครามยุโรป', '', 'N', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '85', 'N', 'N', null, null, '2', null, null, '{EB480EA5-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('86', '86:ครอบครัวเหรียญสงครามยุโรป', '', 'N', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '86', 'N', 'N', null, null, '2', null, null, '{EB480F4A-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '98', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('87', '87:บุคคลในครอบครัวผู้นำชุมชน', '', 'Y', 'AK', 'Y', 'Y', '', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '87', 'N', 'N', null, null, '1', null, null, '{EB480FF2-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '87', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('88', '88:บุคคลในครอบครัวอสม.', '', 'Y', 'AJ', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '88', 'N', 'N', null, null, '1', null, null, '{EB481086-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '02', null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('89', '89:บัตรทอง(ในเขต) 12-59 ปี', '', 'Y', 'UC', 'Y', 'Y', '3000225', '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'UCS', null, null, 'N', '0', '89', 'N', 'N', null, null, '1', null, null, '{EB48115F-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, '03', null, null, null, null, null, null, null, null, 'N', '89', '6', '3', null, null, '3', null, 'Y', null, null, null, null, null, null, '02', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('90', '90:ทหารเกณฑ์', '', 'Y', 'AE', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '90', 'N', 'N', null, null, '1', null, null, '{EB481203-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '90', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '09', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('91', '91:ผู้ที่อยู่ภายใต้การดูแลของกรมราชทัณฑ์', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '91', 'N', 'N', null, null, '1', null, null, '{EB48129B-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '91', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('92', '92:ผู้ที่อยู่ในสถานพินิจ/สงเคราะห์', '', 'Y', 'AI', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', null, '91', 'N', 'N', null, null, '1', null, null, '{EB481338-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '91', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('93', '93:นักเรียนทหาร', '', 'Y', 'AC', 'Y', 'Y', null, '0', 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '93', 'N', 'N', null, null, '1', null, null, '{EB4813D4-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '93', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '01', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('94', '94:ต่างด้าวขึ้นทะเบียน 30 บาท', '', 'Y', 'AL', 'Y', 'Y', '3004569', '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'UCS', '0', '0', 'N', '0', '94', 'N', 'N', null, null, '1', null, null, '{EB481466-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, 'Y', null, null, null, null, null, 'Y', '07', '6', '5', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, '21', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('95', '95:บัตรทอง(นอกเขต) 12-59 ปี', '', 'Y', 'UC', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '89', 'N', 'N', null, null, '1', null, null, '{EB4814FE-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, '3', null, 'Y', null, null, null, null, null, null, '08', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('96', '96:ผู้ป่วยรายได้น้อย(นอกเขต)', '', 'Y', 'AB', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '72', 'N', 'N', null, null, '1', null, null, '{EB4815D1-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '72', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '08', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('97', '97:อสม.(นอกเขต)', '', 'Y', 'AJ', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '82', 'N', 'N', null, null, '1', null, null, '{EB48166B-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '82', '6', '4', null, null, '3', null, 'Y', 'Y', null, null, null, null, null, '08', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('98', '98:เด็กแรกเกิด', '', 'Y', 'AA', 'N', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '71', 'N', 'N', null, null, '1', null, null, '{EB481703-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '71', '6', '4', null, null, '3', null, 'Y', null, null, null, null, null, null, '03', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('99', '99:สิทธิว่าง', '', 'Y', 'UC', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', '89', 'N', 'N', null, null, '1', null, null, '{EB481795-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '89', '6', '3', null, null, '3', null, 'Y', null, null, null, null, null, null, '03', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B1', 'B1:จ่ายตรง กทม.(ข้าราชการ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B1', 'N', 'N', null, null, '4', null, null, '{EB481828-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '19', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B2', 'B2:จ่ายตรง กทม.(ลูกจ้างประจำ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B2', 'N', 'N', null, null, '4', null, null, '{EB4818C6-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '19', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B3', 'B3:จ่ายตรง กทม.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B3', 'N', 'N', null, null, '4', null, null, '{EB481959-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '19', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B4', 'B4:จ่ายตรง กทม.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B4', 'N', 'N', null, null, '4', null, null, '{EB4819EF-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '19', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('B5', 'B5:จ่ายตรง กทม.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'B5', 'N', 'N', null, null, '4', null, null, '{EB481A84-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '19', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L1', 'L1:จ่ายตรง-อปท.(ข้าราชการ/พนักงาน/ลูกจ้างประจำ/ครูผู้ดูแลเด็ก/ครูผู้ช่วย)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L1', 'N', 'N', null, null, '4', null, null, '{EB481B20-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '18', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L2', 'L2:จ่ายตรง-อปท.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L2', 'N', 'N', null, null, '4', null, null, '{EB481BC2-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '18', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L3', 'L3:จ่ายตรง-อปท.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L3', 'N', 'N', null, null, '4', null, null, '{EB481C59-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '18', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L4', 'L4:จ่ายตรง-อปท.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'LGO', null, null, 'N', '0', 'L4', 'N', 'N', null, null, '4', null, null, '{EB481CEB-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '18', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L5', 'L5:จ่ายตรง-อปท.(ข้าราชการการเมือง)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'LGO', null, null, 'N', '0', 'L5', 'N', 'N', null, null, '4', null, null, '{EB481D82-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '18', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('L6', 'L6:จ่ายตรง-อปท.(บุคคลในครอบครัวข้าราชการการเมือง)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'LGO', null, null, 'N', '0', 'L6', 'N', 'N', null, null, '4', null, null, '{EB481E16-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '18', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O1', 'O1:จ่ายตรง-สกส.(ข้าราชการ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', 'N', 'OFC', null, null, 'N', '0', 'O1', 'N', 'N', null, null, '4', null, null, '{EB481EAE-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', 'O1', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '17', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O2', 'O2:จ่ายตรง-สกส.(ลูกจ้างประจำ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O2', 'N', 'N', null, null, '4', null, null, '{EB481F4B-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '17', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O3', 'O3:จ่ายตรง-สกส.(ผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O2', 'N', 'N', null, null, '4', null, null, '{EB481FDE-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '17', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O4', 'O4:จ่ายตรง-สกส.(บุคคลในครอบครัว)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O4', 'N', 'N', null, null, '4', null, null, '{EB482071-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '17', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('O5', 'O5:จ่ายตรง-สกส.(บุคคลในครอบครัวผู้รับเบี้ยหวัดบำนาญ)', '', 'Y', 'A2', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'OFC', null, null, 'N', '0', 'O5', 'N', 'N', null, null, '4', null, null, '{EB482106-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '02', '6', '1', 'Y', null, '2', null, 'Y', null, null, null, null, null, null, '17', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S1', 'S1:ปกส. ในเขต(ผู้ประกันตน)', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'SSS', null, null, 'N', '0', 'S1', 'N', 'N', null, null, '4', null, null, '{EB4821B6-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', 'S1', '6', '2', 'Y', null, '4', null, 'Y', 'Y', null, null, null, null, null, '10', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S4', 'S4:ประกันสังคมทุพลภาพ', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'N', null, null, '0', 'Y', null, 'SSS', null, null, 'N', null, 'S4', 'N', 'N', null, null, '4', null, null, '{EB482249-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, 'Y', 'Y', null, null, null, null, null, '15', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S5', 'S5:ประกันสังคมกองทุนทดแทน', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'SSS', null, null, 'N', null, 'S5', 'N', 'N', null, null, '1', null, null, '{EB4822DC-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, 'Y', 'Y', null, null, null, null, null, '13', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('S6', 'S6:ประกันสังคม 72 ชั่วโมง', '', 'Y', 'A7', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'SSS', null, null, 'N', null, 'S6', 'N', 'N', null, null, '1', null, null, '{EB48236F-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', null, null, '4', null, 'Y', 'Y', null, null, null, null, null, '14', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('SS', 'SS:ประกันสังคม(นอกเขต)', '', 'Y', 'A7', 'Y', 'Y', null, '0', 'N', '02', 'Y', null, 'Y', null, '', '0', 'Y', 'N', 'SSS', '0', '0', 'N', '0', 'SS', 'N', 'N', null, null, '1', null, null, '{EB482401-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '01', '6', '2', 'Y', null, '4', null, 'Y', 'Y', null, null, null, null, null, '11', null, null, null, null, null);
INSERT INTO `pttype` VALUES ('ST', 'ST:บุคคลที่มีปัญหาสถานะสิทธิ', '', 'Y', 'UC', 'Y', 'Y', null, null, 'N', '02', null, null, 'Y', null, null, '0', 'Y', null, 'UCS', null, null, 'N', '0', 'ST', 'N', 'N', null, null, '4', null, null, '{EB482497-3923-11E7-BC2E-0894EF2FC582}', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Y', '06', '6', '2', 'N', null, '4', null, 'Y', 'Y', null, null, null, null, null, '25', null, null, null, null, null);

-- ----------------------------
-- Table structure for query
-- ----------------------------
DROP TABLE IF EXISTS `query`;
CREATE TABLE `query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sql` text,
  `user_id` int(11) DEFAULT NULL,
  `createdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of query
-- ----------------------------
INSERT INTO `query` VALUES ('1', 'Opd-visit ผลตรวจสุขภาพ จนท. ', 'select v.vstdate,v.vn ,p.hn,CONCAT(p.pname,p.fname,\'  \',p.lname) as pt\r\n,p.sex,v.age_y,o.waist,p.pttype,p.clinic,p.drugallergy\r\n,v.pdx,o.bpd,o.bps,o.bw,o.cc,o.drinking_type_id,o.smoking_type_id\r\n,o.hr,o.pe,o.pulse,o.temperature,o.height,o.rr,o.fbs\r\n,o.bmi,o.tg,o.hdl,o.glucurine,o.bun,o.creatinine,o.ua,o.hba1c,o.tc,o.ldl,o.ast,o.alt,o.cholesterol\r\n,pg.gfr_ckd\r\n,(select lo.lab_order_result\r\nfrom lab_head lh\r\nleft outer join lab_order lo on lo.lab_order_number=lh.lab_order_number\r\nwhere lo.lab_items_code =\'5\' and lh.vn=v.vn) as wbc\r\n,(select lo.lab_order_result\r\nfrom lab_head lh\r\nleft outer join lab_order lo on lo.lab_order_number=lh.lab_order_number\r\nwhere lo.lab_items_code =\'6\' and lh.vn=v.vn) as rbc\r\n,(select lo.lab_order_result\r\nfrom lab_head lh\r\nleft outer join lab_order lo on lo.lab_order_number=lh.lab_order_number\r\nwhere lo.lab_items_code =\'101\' and lh.vn=v.vn) as alk\r\n,(select lo.lab_order_result\r\nfrom lab_head lh\r\nleft outer join lab_order lo on lo.lab_order_number=lh.lab_order_number\r\nwhere lo.lab_items_code =\'21\' and lh.vn=v.vn) as eo\r\n,(select lo.lab_order_result\r\nfrom lab_head lh\r\nleft outer join lab_order lo on lo.lab_order_number=lh.lab_order_number\r\nwhere lo.lab_items_code =\'4\' and lh.vn=v.vn) as hct\r\n,v.dx_doctor\r\n,(select name from doctor where code=v.dx_doctor)as dname\r\nfrom vn_stat v\r\ninner join opdscreen o on o.vn=v.vn\r\ninner join patient p on p.hn=v.hn\r\ninner join patient_hospital_officer ph on ph.hn=v.hn\r\nleft outer join pcrh_gfr pg on pg.hn=v.hn\r\nwhere  p.hn=\'$hn\'\r\nand ph.is_officer=\'Y\'\r\nand v.dx_doctor  is not null\r\ngroup by v.vn order by v.vstdate desc limit 10', null, null);

-- ----------------------------
-- Table structure for resultlab
-- ----------------------------
DROP TABLE IF EXISTS `resultlab`;
CREATE TABLE `resultlab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `default` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `consult` text,
  `picconsult` varchar(255) DEFAULT NULL,
  `grouplab_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resultlab
-- ----------------------------
INSERT INTO `resultlab` VALUES ('1', 'bmi01', 'BMI', '<18.5', '<23', 'ผอม', '-เพิ่มมื้ออาหารว่างระหว่างมื้ออาจจะเป็นช่วงระหว่างมื้อเช้า - เที่ยง และก่อนนอนคือ  เวลาประมาณ 10 โมง \r\nหรือระหว่างอาหารมื้อเที่ยง\r\n - เย็นก็ได้หรือจะทานทั้ง 3 มื้อเลยยิ่งดี\r\n - เลือกอาหารว่าง หรืออาหารระหว่างมื้อที่ให้พลังงานสูง และการเพิ่มน้ำหนักนั้นคุณควรเพิ่มทีละน้อย \r\n- โดยเริ่มจากการรับประทานอาหารว่างทุกวัน ประกอบกับการดื่มนมหรือน้ำผลไม้ อีกวันละ 1 แก้ว\r\n - เพิ่มไขมันในอาหาร โดยเลือกอาหารที่มีไขมันสูง เช่น ข้าวมันไก่ ข้าวหมกไก่ ขนมที่ใส่กะทิ\r\n และอย่าลืมรับประทานอาหารประเภทผัก ผลไม้ ประกอบกันด้วยเพื่อให้ได้สารอาหารที่ครบหมู่ \r\n- การออกกำลังก็สำคัญ ควรทำอย่างเป็นประจำ จะทำให้เกิดความอยากอาหารมากขึ้นแต่คงไม่ต้องหักโหม\r\nจะทำให้ร่างกายยิ่งทรุดหนักขึ้น ผอมมากไปอีก', 'picbmi01.png', null);
INSERT INTO `resultlab` VALUES ('2', 'bmi02', 'BMI', '18.5-22.9', '<23', 'ปกติ', '- กินอาหารให้ครบ 5  หมู่', 'picbmi02.png', null);
INSERT INTO `resultlab` VALUES ('3', 'bmi03', 'BMI', '23-24.9', '<23', 'น้ำหนักเกิน,อวบ', 'ลดหวาน   ', 'picbmi03.png', null);
INSERT INTO `resultlab` VALUES ('4', 'bmi04', 'BMI', '25-29.9', '<23', 'อ้วน', '-หวานพอดีที่  4  กรัม ใน1วันไม่ควรกินน้ำตาลเกิน  4  ช้อนชา ', 'picbmi04.png', null);
INSERT INTO `resultlab` VALUES ('5', 'bmi05', 'BMI', '>=30', '<23', 'อ้วนมาก', 'กาแฟดำโดยที่ไม่ต้องใส่น้ำตาล หรือหากต้องการหวานก็ให้ใส่น้ำตาลเทียม', 'picbmi05.png', null);
INSERT INTO `resultlab` VALUES ('6', 'waist01', 'Waist', '<=80', '<=80', 'ปกติ / หญิง', 'เมื่อรับน้ำอัดลมเลือกที่มีแคลอรีต่ำ', null, null);
INSERT INTO `resultlab` VALUES ('7', 'waist011', 'Waist', '<=90', '<=90', 'ปกติ / ชาย', 'เมื่อรับน้ำอัดลมเลือกที่มีแคลอรีต่ำ', null, null);
INSERT INTO `resultlab` VALUES ('8', 'waist02', 'Waist', '>80', '<=80', 'อ้วนลงพุง / หญิง', 'น้ำผลไม้ที่รับควรเป็นน้ำผลไม้ที่ไม่ใส่น้ำตาล', null, null);
INSERT INTO `resultlab` VALUES ('9', 'waist022', 'Waist', '>90', '<=90', 'อ้วนลงพุง / ชาย', 'น้ำผลไม้ที่รับควรเป็นน้ำผลไม้ที่ไม่ใส่น้ำตาล', null, null);
INSERT INTO `resultlab` VALUES ('10', 'bp010', 'BP', '<=11979', '<120/80', 'ปกติ', 'เลือกผลไม้กระป๋องที่ไม่ผสมน้ำหวาน', null, null);
INSERT INTO `resultlab` VALUES ('11', 'bp020', 'BP', '>=12080', '<120/80', 'เสี่ยงเป็นโรคความดันโลหิตสูง', 'ลดน้ำตาลลงครึ่งหนึ่งสำหรับการปรุงอาหาร', null, null);
INSERT INTO `resultlab` VALUES ('12', 'bp030', 'BP', '>=14090', '<120/80', 'เป็นโรคความดันโลหิตสูง', 'หลีกเลี่ยงไอศกรีม แยม นมข้นหวาน น้ำหวาน', null, null);
INSERT INTO `resultlab` VALUES ('13', 'fbs01', 'Glucose', '<100', '<100', 'ปกติ  ไม่เสี่ยงเบาหวาน', 'หลีกเลี่ยงเค้ก ขนมปังกรอบ โชกโกเลต', null, '1');
INSERT INTO `resultlab` VALUES ('14', 'fbs02', 'Glucose', '100-125', '<100', 'กลุ่มเสี่ยงเบาหวาน', 'ให้เลือกรับประทานอาหารที่มีน้ำตาลต่ำ', null, '1');
INSERT INTO `resultlab` VALUES ('15', 'fbs03', 'Glucose', '>126', '<100', 'เป็นโรคเบาหวาน', 'ลดไขมัน โดยใน 1 วันไม่ควรกินน้ำมันเกิน 6 ช้อนชา', null, '1');
INSERT INTO `resultlab` VALUES ('16', 'cho01', 'Cholesterol', '<200', '<200', 'ปกติ', 'หลีกเลี่ยงอาหารี่มีไขมันสูง เช่น อาหารอดต่างๆ', null, '5');
INSERT INTO `resultlab` VALUES ('17', 'cho02', 'Cholesterol', '200-239', '<200', 'สูงปานกลาง', 'หลีกเลี่ยงเนื้อสัตว์ติดมันเช่น หนังเป็ด หนังไก่ ไข่แดง แฮม เบคอน และหมูยอ', null, '5');
INSERT INTO `resultlab` VALUES ('18', 'cho03', 'Cholesterol', '>=240', '<200', 'สูง', 'หลีกเลี่ยงอาหารทะเลบางชนิดเช่น ปลาหมึก และหอยนางรม', null, '5');
INSERT INTO `resultlab` VALUES ('19', 'ldl01', 'LDL', '<130', '100-130', 'ปกติ', null, null, '5');
INSERT INTO `resultlab` VALUES ('20', 'ldl02', 'LDL', '130-159', '100-130', 'สูงปานกลาง', null, null, '5');
INSERT INTO `resultlab` VALUES ('21', 'ldl03', 'LDL', '160-189', '100-130', 'สูง', null, null, '5');
INSERT INTO `resultlab` VALUES ('22', 'ldl04', 'LDL', '>=190', '100-130', 'สูงมาก', null, null, '5');
INSERT INTO `resultlab` VALUES ('23', 'hdl01', 'HDL', '<40', 'ช40-50 | ญ50-60', 'ผิดปกติ  (จะเพิ่มความสี่ยงของโรคหัวใจ)', 'ลดเค็ม', null, '5');
INSERT INTO `resultlab` VALUES ('24', 'hdl02', 'HDL', '40-59', 'ช40-50 | ญ50-60', 'ปกติ,(ยิ่งสูงยิ่งดี)', '-ใน1วันไม่ควรกินเครื่องปรุงที่มีรสเค็มเกิน  1  ช้อนชา', null, '5');
INSERT INTO `resultlab` VALUES ('25', 'hdl03', 'HDL', '>=60', 'ช40-50 | ญ50-60', 'ปกติ,ป้องกันการเกิดโรคหัวใจ', ' - เลือกอาหารที่มีเกลือต่ำ การลดอาหารเค็มจะช่วยป้องกันและลดความดันโลหิตได้  \r\n   โดยทั่วไปห้ามกินเกลือเกิน 6 กรัม(เท่ากับ โซเดียม 2400 มิลิกรัม)\r\n- ไม่ควรปรุงรสอาหารก่อนชิมอาหารหากปรุงรสอาหารเองต้องเติมเกลือให้น้อยที่สุด  ', '', '5');
INSERT INTO `resultlab` VALUES ('26', 'tg01', 'Triglyceride', '<150', '<149', 'ปกติ', 'ให้รับประทานอาหารสดเช่น ผัก ผลไม้ หรือเนื้อสัตว์สดหรือแข่เย็นหลีกเลี่ยง อาหารกระป๋อง', null, '5');
INSERT INTO `resultlab` VALUES ('27', 'tg02', 'Triglyceride', '150-199', '<149', 'สูง', ' เปลี่ยนพฤติกรรมในการปรุงรส', null, '5');
INSERT INTO `resultlab` VALUES ('28', 'tg03', 'Triglyceride', '>=200', '<149', 'สูงมาก', null, null, '5');
INSERT INTO `resultlab` VALUES ('29', 'uric01', 'Uric Acid', '2.5-7.7', '2.5-7.7', 'ปกติ', null, null, '3');
INSERT INTO `resultlab` VALUES ('30', 'uric02', 'Uric Acid', '>=7.7', '2.5-7.7', 'สูง/เสี่ยงต่อการเป็นโรคเก๊า', null, null, '3');
INSERT INTO `resultlab` VALUES ('31', 'uric03', 'Uric Acid', '<2.5', '2.5-7.7', 'ต่ำ', null, null, '3');
INSERT INTO `resultlab` VALUES ('32', 'bun01', 'BUN', '<7', '8-20', 'น้อย', null, null, '2');
INSERT INTO `resultlab` VALUES ('33', 'bun02', 'BUN', '7-24', '8-20', 'ปกติ', null, null, '2');
INSERT INTO `resultlab` VALUES ('34', 'bun03', 'BUN', '>=24', '8-20', 'ผิดปกติ', null, null, '2');
INSERT INTO `resultlab` VALUES ('35', 'cr01', 'Creatinine', '0.5-1.5', '0.7-1.5', 'ปกติ', null, null, '2');
INSERT INTO `resultlab` VALUES ('36', 'cr02', 'Creatinine', '>=1.5', '0.7-1.5', 'สูง', null, null, '2');
INSERT INTO `resultlab` VALUES ('37', 'ast01', 'AST(SGOT)', '0-35', '10-42', 'ปกติ', null, null, '4');
INSERT INTO `resultlab` VALUES ('38', 'ast02', 'AST(SGOT)', '>35', '10-42', 'สูง', null, null, '4');
INSERT INTO `resultlab` VALUES ('39', 'alt01', 'ALT(SGPT)', '0-41', '10-42', 'ปกติ', null, null, '4');
INSERT INTO `resultlab` VALUES ('40', 'alt02', 'ALT(SGPT)', '>41', '10-42', 'สูง', null, null, '4');
INSERT INTO `resultlab` VALUES ('41', 'alk01', 'ALP(Alk phos)', '<21', '21-128', 'ต่ำ', null, null, '4');
INSERT INTO `resultlab` VALUES ('42', 'alk02', 'ALP(Alk phos)', '21-128', '21-128', 'ปกติ', null, null, '4');
INSERT INTO `resultlab` VALUES ('43', 'alk03', 'ALP(Alk phos)', '>128', '21-128', 'สูง', null, null, '4');
INSERT INTO `resultlab` VALUES ('44', 'upro01', 'Urine Proteine', 'Negative', 'Negative', 'ปกติ', null, null, '7');
INSERT INTO `resultlab` VALUES ('45', 'upro02', 'Urine Proteine', 'Trace', 'Negative', 'ผิดปกติ ,เสี่ยงต่อการเป็นโรคไตวาย', null, null, '7');
INSERT INTO `resultlab` VALUES ('46', 'upro03', 'Urine Proteine', '1+', 'Negative', 'ผิดปกติ ,เสี่ยงต่อการเป็นโรคไตวาย', null, null, '7');
INSERT INTO `resultlab` VALUES ('47', 'upro04', 'Urine Proteine', '2+', 'Negative', 'ผิดปกติ ,เสี่ยงต่อการเป็นโรคไตวาย', null, null, '7');
INSERT INTO `resultlab` VALUES ('48', 'upro05', 'Urine Proteine', '3+', 'Negative', 'ผิดปกติ ,เสี่ยงต่อการเป็นโรคไตวาย', null, null, '7');
INSERT INTO `resultlab` VALUES ('49', 'usugar01', 'Urine Glucose', 'Negative', 'Negative', 'ปกติ', null, null, '7');
INSERT INTO `resultlab` VALUES ('50', 'usugar02', 'Urine Glucose', '1+', 'Negative', 'ผิดปกติ ,เสี่ยงต่อการเป็นโรคเบาหวาน', '', '', '7');
INSERT INTO `resultlab` VALUES ('51', 'usugar03', 'Urine Glucose', '2+', 'Negative', 'ผิดปกติ ,เสี่ยงต่อการเป็นโรคเบาหวาน', '', '', '7');
INSERT INTO `resultlab` VALUES ('52', 'usugar04', 'Urine Glucose', '3+', 'Negative', 'ผิดปกติ ,เสี่ยงต่อการเป็นโรคเบาหวาน', '', '', '7');
INSERT INTO `resultlab` VALUES ('53', 'bp01', 'BP', '<120/80', '<120/80', 'ปกติ', null, null, null);
INSERT INTO `resultlab` VALUES ('54', 'bp02', 'BP', '120/80-139/89', '<120/80', 'เสี่ยงHT', null, null, null);
INSERT INTO `resultlab` VALUES ('55', 'bp03', 'BP', '>=140/90', '<120/80', 'เป็นHT', null, null, null);
INSERT INTO `resultlab` VALUES ('56', 'fbs00', 'Glucose', '<=0', '<100', 'N/A', '', 'picfbs00.png', '1');
INSERT INTO `resultlab` VALUES ('57', 'waist00', 'Waist', '<=0', '<80', 'N/A', '', 'picwaist00.png', null);
INSERT INTO `resultlab` VALUES ('58', 'tg00', 'Triglyceride', '<=0', '<150', 'N/A', '', 'pictg00.png', '5');
INSERT INTO `resultlab` VALUES ('59', 'hdl00', 'HDL', '<=0', 'ช>40 | ญ>50', 'N/A', '', 'pichdl00.png', '5');
INSERT INTO `resultlab` VALUES ('60', 'cr00', 'Creatinine', '<=0', '0.7-1.5', 'N/A', '', 'piccr00.png', '2');
INSERT INTO `resultlab` VALUES ('61', 'cho00', 'Cholesterol', '<=0', '<200', 'N/A', null, null, '5');
INSERT INTO `resultlab` VALUES ('62', 'ldl00', 'LDL', '<=0', '100-130', 'N/A', null, null, '5');
INSERT INTO `resultlab` VALUES ('63', 'uric00', 'Uric Acid', '<=0', '2.5-7.7', 'N/A', null, null, '3');
INSERT INTO `resultlab` VALUES ('64', 'bun00', 'BUN', '<=0', '8-20', 'N/A', null, null, '2');
INSERT INTO `resultlab` VALUES ('65', 'upro00', 'Urine Proteine', '-', 'Negative', 'N/A', null, null, '7');
INSERT INTO `resultlab` VALUES ('66', 'usugar00', 'Urine Glucose', '-', 'Negative', 'N/A', null, null, '7');
INSERT INTO `resultlab` VALUES ('67', 'bp00', 'BP', '-', '<120/80', 'N/A', null, null, null);
INSERT INTO `resultlab` VALUES ('68', 'ast00', 'AST(SGOT)', '-', '10-42', 'N/A', null, null, '4');
INSERT INTO `resultlab` VALUES ('69', 'alt00', 'ALT(SGPT)', '-', '10-42', 'N/A', null, null, '4');
INSERT INTO `resultlab` VALUES ('70', 'hct01', 'Hct', '>48', '37-48%', 'สูง', null, null, '6');
INSERT INTO `resultlab` VALUES ('71', 'hct02', 'Hct', '37-48', '37-48%', 'ปกติ', null, null, '6');
INSERT INTO `resultlab` VALUES ('72', 'hct03', 'Hct', '<37', '37-48%', 'ต่ำ', null, null, '6');
INSERT INTO `resultlab` VALUES ('73', 'hct00', 'Hct', '-', '37-48%', 'N/A', null, null, '6');
INSERT INTO `resultlab` VALUES ('74', 'wbccbc01', 'WBC count', '>10000', '5000-10000', 'สูง', null, null, '6');
INSERT INTO `resultlab` VALUES ('75', 'wbccbc02', 'WBC count', '5000-10000', '5000-10000', 'ปกติ', null, null, '6');
INSERT INTO `resultlab` VALUES ('76', 'wbccbc03', 'WBC count', '<5000', '5000-10000', 'ต่ำ', null, null, '6');
INSERT INTO `resultlab` VALUES ('77', 'wbccbc00', 'WBC count', '-', '5000-10000', 'N/A', '', 'picwbccbc00.png', '6');
INSERT INTO `resultlab` VALUES ('78', 'eo01', 'Eos', '>3', '1-3%', 'สูง', null, null, '6');
INSERT INTO `resultlab` VALUES ('79', 'eo02', 'Eos', '1-3', '1-3%', 'ปกติ', null, null, '6');
INSERT INTO `resultlab` VALUES ('80', 'eo03', 'Eos', '<1', '1-3%', 'ต่ำ', null, null, '6');
INSERT INTO `resultlab` VALUES ('81', 'eo00', 'Eos', '-', '1-3%', 'N/A', '', 'piceo00.png', '6');
INSERT INTO `resultlab` VALUES ('82', 'bmi00', 'BMI', '-', '<23', 'N/A', '', 'picbmi00.png', null);
INSERT INTO `resultlab` VALUES ('83', 'alk00', 'ALP(Alk phos)', '-', '32-92', 'N/A', null, null, '4');
INSERT INTO `resultlab` VALUES ('84', 'para01', 'Parasite', 'Not found', 'Not  found', 'ปกติ', null, null, '8');
INSERT INTO `resultlab` VALUES ('85', 'para02', 'Parasite', '', 'Not  found', 'ไม่ปกติ', null, null, '8');
INSERT INTO `resultlab` VALUES ('86', 'papa03', 'Parasite', '-', 'Not  found', 'N/A', null, null, '8');
INSERT INTO `resultlab` VALUES ('87', 'para00', 'Parasite', null, 'Not  found', 'N/A', null, null, '8');
INSERT INTO `resultlab` VALUES ('88', 'occo01', 'Occount blood', 'Negative', 'Negative', 'ปกติ', null, null, '8');
INSERT INTO `resultlab` VALUES ('89', 'occo02', 'Occount blood', 'Positive', 'Negative', 'ไม่ปกติ', null, null, '8');
INSERT INTO `resultlab` VALUES ('90', 'occo03', 'Occount blood', null, 'Negative', 'N/A', null, null, '8');
INSERT INTO `resultlab` VALUES ('91', 'occo00', 'Occount blood', '-', 'Negative', 'N/A', null, null, '8');
INSERT INTO `resultlab` VALUES ('92', 'rbcua01', 'Rbc urine', 'Negative', 'Negative', 'ปกติ', null, null, '7');
INSERT INTO `resultlab` VALUES ('93', 'rbcua02', 'Rbc urine', '0-9', 'Negative', 'ไม่ปกติ', null, null, '7');
INSERT INTO `resultlab` VALUES ('94', 'rbcua03', 'Rbc urine', '-', 'Negative', 'N/A', null, null, '7');
INSERT INTO `resultlab` VALUES ('95', 'rbcua00', 'Rbc urine', null, 'Negative', 'N/A', null, null, '7');
INSERT INTO `resultlab` VALUES ('96', 'wbcua01', 'Wbc urine', 'Negative', 'Negative', 'ปกติ', null, null, '7');
INSERT INTO `resultlab` VALUES ('97', 'wbcua02', 'Wbc urine', '0-9', 'Negative', 'ไม่ปกติ', null, null, '7');
INSERT INTO `resultlab` VALUES ('98', 'wbcua03', 'Wbc urine', '-', 'Negative', 'N/A', null, null, '7');
INSERT INTO `resultlab` VALUES ('99', 'wbcua00', 'Wbc urine', '', 'Negative', 'N/A', null, null, '7');
INSERT INTO `resultlab` VALUES ('100', '3อ2ส1ฟ', 'คำแนะนำเรื่อง  3อ2ส1ฟ', '', '', '', '', '321.png', null);

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

-- ----------------------------
-- Table structure for social_account
-- ----------------------------
DROP TABLE IF EXISTS `social_account`;
CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `data` text,
  `code` varchar(32) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`) USING BTREE,
  UNIQUE KEY `account_unique_code` (`code`) USING BTREE,
  KEY `fk_user_account` (`user_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- ----------------------------
-- Records of social_account
-- ----------------------------

-- ----------------------------
-- Table structure for sqlscript
-- ----------------------------
DROP TABLE IF EXISTS `sqlscript`;
CREATE TABLE `sqlscript` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) DEFAULT NULL,
  `sql_script` text,
  `user` varchar(255) DEFAULT NULL,
  `d_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sqlscript
-- ----------------------------
INSERT INTO `sqlscript` VALUES ('23', 'อันดับการแสดงerror', 'DROP TABLE IF EXISTS err_chk_code;\r\nCREATE TABLE IF NOT EXISTS err_chk_code(\r\nhospcode varchar(5) NOT NULL,\r\nfile varchar(25) NOT NULL,\r\nerr_code varchar(15) NOT NULL,\r\ncount int(10) NOT NULL\r\n) ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_anc \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_charge_opd\r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_chronic \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_chronicfu \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_dental \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_diagnosis_opd \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_disability \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_drugallergy \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_drug_opd \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_epi \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_fp \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_functional\r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_icf \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_labfu\r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_labor \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_ncdscreen \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_newborn \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_newborncare \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_nutrition\r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_person \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_postnatal \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_prenatal \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_procedure_opd \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_provider \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_rehabilitation \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_service \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_specialpp \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nINSERT INTO err_chk_code (hospcode,file,err_code,count) \r\nselect HOSPCODE,FILE,ERR_CODE,count(ERR_CODE) \r\nfrom err_village \r\nGROUP BY HOSPCODE,ERR_CODE ;\r\nSELECT * from err_chk_code ORDER BY count desc;', 'chondlatit', '2016-04-05 04:46:49');
INSERT INTO `sqlscript` VALUES ('37', 'ขึ้นทะเบียนโรคเรื้อรั้งแต่คนไข้ไม่มารับบริการเกิน1ปี', 'select a.hospcode,a.pid,p.cid,p.hn,p.name,p.lname\r\n,a.date,a.chronic,a.typedisch\r\n,group_concat(distinct timestampdiff(year,a.date,s.date_serv)) year\r\n,max(date_serv) lastdate\r\nfrom (\r\nselect c.hospcode,c.pid,max(date_diag) date\r\n,group_concat(distinct chronic order by chronic) chronic\r\n,group_concat(distinct if(typedisch=03,\'03\',null)) typedisch\r\nfrom chronic c\r\ngroup by c.hospcode,c.pid) a\r\nleft join service s on s.hospcode=a.hospcode and s.pid=a.pid\r\njoin person p on p.hospcode=a.hospcode and p.pid=a.pid\r\nand s.date_serv>=a.date\r\nwhere a.pid<>\'\'\r\nand a.pid is not null\r\ngroup by a.hospcode,a.pid\r\nhaving typedisch=03;', 'admin', '2016-10-05 15:45:52');
INSERT INTO `sqlscript` VALUES ('38', 'รายงานเปรียบเทียบแฟ้ม chronic ระหว่าง CUP และ สสจ. ที่มีทะเบียนในพื้นที่', 'SELECT e.Hospcode,p.CID,e.Pid,p.NAME,p.LNAME,p.TYPEAREA,e.Sex,e.Dx,e.DateDx,e.SourceTb\r\n,if(c.pid<>\' \',\' Y : มีใน chronic \',\' N : ไม่มีใน CHRONIC ของพื้นที่ \') as \'  สถานะแฟ้ม CHRONIC \'\r\n,(select (case when c.TYPEDISCH=\' 10 \' then \' 10 : ออกจากพื้นที่ \' when c.TYPEDISCH=\' 01 \' then \' 01 : หาย \' when c.TYPEDISCH=\' 02 \' then \' 02 : ตาย \'\r\nwhen c.TYPEDISCH=\' 03 \' then \' 03 : ยังรักษาอยู่ \'  when c.TYPEDISCH=\' 04 \' then \' 04 : ไม่ทราบ(ไม่มีข้อมูล)\' when c.TYPEDISCH=\' 05 \' then \' 05 : รอจำหน่าย/เฝ้าระวัง \'    \r\nwhen c.TYPEDISCH=\' 06 \' then \' 06 :  ขาดการรักษาไม่มาติดต่ออีก \' when c.TYPEDISCH=\' 07 \' then \' 07 :  ครบการรักษา) \' when c.TYPEDISCH=\' 08 \' then \'  08 : โรคอยู่ในภาวะสงบ \' when c.TYPEDISCH=\' 09 \' then \' 09 : ปฏิเสธการรักษา \' when c.TYPEDISCH=\' 11 \' then \' 11 : กลับมาซ้ำ \'   end) ) as \'  สถานะ \'\r\nFROM err_chronic_diag_opd e\r\nleft outer join person p on p.PID=e.Pid and p.HOSPCODE=e.Hospcode\r\nleft outer join chronic c on c.HOSPCODE=e.Hospcode and c.pid=e.Pid\r\nwhere e.SourceTb like \'%chronic%\'  \r\norder by e.Hospcode,e.Pid ;', 'kang', '2016-10-06 08:28:48');
INSERT INTO `sqlscript` VALUES ('39', 'รายงานเปรียบเทียบแฟ้ม chronic ระหว่าง CUP และ สสจ. ที่ยังไม่ได้ทะเบียนในพื้นที่', 'SELECT e.Hospcode,p.CID,e.Pid,p.NAME,p.LNAME,p.TYPEAREA,e.Sex,e.Dx,e.DateDx,e.SourceTb\r\n,if(c.pid<>\'\',\' Y : มีใน chronic \',\' N : ไม่มีใน CHRONIC \') as \'  สถานะแฟ้ม CHRONIC \'\r\n,(select(case when c.TYPEDISCH=\'10\' then \' 10 : ออกจากพื้นที่ \' when c.TYPEDISCH=\' 01 \' then \'01 : หาย \' when c.TYPEDISCH=\' 02 \' then \' 02 : ตาย \'\r\nwhen c.TYPEDISCH=\' 03 \' then \'03 : ยังรักษาอยู่ \'  when c.TYPEDISCH=\' 04 \' then \'04 : ไม่ทราบ(ไม่มีข้อมูล)\' when c.TYPEDISCH=\' 05 \' then \' 05 : รอจำหน่าย/เฝ้าระวัง\'    \r\nwhen c.TYPEDISCH=\' 06 \' then \' 06 :  ขาดการรักษาไม่มาติดต่ออีก \'when c.TYPEDISCH=\' 07 \' then \' 07 :  ครบการรักษา) \' when c.TYPEDISCH=\' 08 \' then \'  08 : โรคอยู่ในภาวะสงบ \'\r\nwhen c.TYPEDISCH=\' 09 \' then \' 09 : ปฏิเสธการรักษา \' when c.TYPEDISCH=\' 11 \' then \'11 : กลับมาซ้ำ \'   end) ) as \'  สถานะ \'\r\nFROM err_chronic_diag_opd e\r\nleft outer join person p on p.PID=e.Pid and p.HOSPCODE=e.Hospcode\r\nleft outer join chronic c on c.HOSPCODE=e.Hospcode and c.pid=e.Pid\r\nwhere e.SourceTb not like \'%chronic%\'  order by e.Hospcode,e.Pid ;', 'kang', '2016-10-06 08:30:24');
INSERT INTO `sqlscript` VALUES ('42', 'ตรวจสอบ drg error (แฟ้ม admission)', 'select HOSPCODE,PID,SEQ,an,DATETIME_ADMIT as \'date_admit\',DATETIME_DISCH as \'date_disch\',drg,rw,ADJRW,error,WARNING,ACTLOS,GROUPER_VERSION \r\nfrom admission\r\nwhere HOSPCODE=11251 and ERROR<>\'0\' ;', 'kang', '2016-10-20 11:41:13');
INSERT INTO `sqlscript` VALUES ('48', 'qof 1.1 ร้อยละของประชากรไทยอายุ 35-74 ปี ได้รับการคัดกรองเบาหวานโดยการตรวจวัดระดับน้ำตาลในเลือด', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0001.1\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,targets.hospcode\r\n	,targets.right_new\r\n	,ifnull(works.work_t3, 0) work_t3\r\n	,ifnull(works.work_t4, 0) work_t4\r\n	,ifnull(works.work_t1, 0) work_t1\r\n	,ifnull(works.work_t2, 0) work_t2\r\n	,ifnull(works.sum_work, 0) sum_work\r\n	,targets.target\r\nfrom (\r\n  select hospcode\r\n	 ,right_new\r\n         ,count(cid) target\r\n  from nhso_tmpqof0011_person1\r\n  where (CHRONIC is null or (CHRONIC is not null and DATE_DIAG < DATE_SERV_NCDSCREEN))\r\n  group by hospcode, right_new\r\n) targets\r\n\r\nleft join \r\n\r\n(\r\n	select hospcode\r\n		,right_new\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t1_en then 1 end) work_t3\r\n		,count(case when DATE_SERV_NCDSCREEN between @t2_st and @t2_en then 1 end) work_t4\r\n		,count(case when DATE_SERV_NCDSCREEN between @t3_st and @t3_en then 1 end) work_t1\r\n		,count(case when DATE_SERV_NCDSCREEN between @t4_st and @t4_en then 1 end) work_t2\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t4_en then 1 end) sum_work\r\n		\r\n	from nhso_tmpqof0011_person1\r\n	where (CHRONIC is null or (CHRONIC is not null and DATE_DIAG < DATE_SERV_NCDSCREEN))\r\n		and bstest in (\'1\',\'2\',\'3\',\'4\') and bslevel > 0\r\n		and (DATE_SERV_DIAG is null or DATE_SERV_DIAG >= DATE_SERV_NCDSCREEN)\r\n	group by hospcode, right_new\r\n) works on works.hospcode = targets.hospcode and works.right_new = targets.right_new\r\norder by works.hospcode, works.right_new;', 'kang', '2017-01-27 13:05:08');
INSERT INTO `sqlscript` VALUES ('51', 'qof 1.2 ร้อยละของประชากรไทยอายุ 35-74 ปี ที่ได้รับการคัดกรองและวินิจฉัยเป็นเบาหวาน', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0001.2\';\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,targets.hospcode\r\n	,targets.right_new\r\n	,ifnull(works.work_t3, 0) work_t3\r\n	,ifnull(works.work_t4, 0) work_t4\r\n	,ifnull(works.work_t1, 0) work_t1\r\n	,ifnull(works.work_t2, 0) work_t2\r\n	,ifnull(works.sum_work, 0) sum_work\r\n	,targets.target\r\nfrom (\r\n  select hospcode\r\n	 ,right_new\r\n         ,count(cid) target\r\n  from nhso_tmpqof0012_person1\r\n  where (CHRONIC is null or (CHRONIC is not null and DATE_DIAG < DATE_SERV_NCDSCREEN))\r\n	and bstest in (\'1\',\'2\',\'3\',\'4\') and bslevel >= 100\r\n	and (DATE_SERV_DIAG is null or DATE_SERV_DIAG >= DATE_SERV_NCDSCREEN)\r\n  group by hospcode, right_new\r\n) targets\r\n\r\nleft join \r\n\r\n(\r\n	select hospcode\r\n		,right_new\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t1_en then 1 end) work_t3\r\n		,count(case when DATE_SERV_NCDSCREEN between @t2_st and @t2_en then 1 end) work_t4\r\n		,count(case when DATE_SERV_NCDSCREEN between @t3_st and @t3_en then 1 end) work_t1\r\n		,count(case when DATE_SERV_NCDSCREEN between @t4_st and @t4_en then 1 end) work_t2\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t4_en then 1 end) sum_work\r\n		\r\n	from nhso_tmpqof0012_person1\r\n	where ((CHRONIC is not null and DATE_DIAG >= DATE_SERV_NCDSCREEN)\r\n		or (DATE_SERV_DIAG is not null AND DATE_SERV_DIAG >= DATE_SERV_NCDSCREEN))\r\n		and bstest in (\'1\',\'2\',\'3\',\'4\') and bslevel >= 100\r\n		\r\n	group by hospcode, right_new\r\n) works on works.hospcode = targets.hospcode and works.right_new = targets.right_new\r\norder by targets.hospcode, works.right_new;', 'kang', '2017-01-27 13:04:32');
INSERT INTO `sqlscript` VALUES ('52', 'qof 2.1 ร้อยละของประชากรไทยอายุ 35-74ปี ได้รับการคัดกรองความดันโลหิตสูง', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0002.1\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,targets.hospcode\r\n	,targets.right_new\r\n	,ifnull(works.work_t3, 0) work_t3\r\n	,ifnull(works.work_t4, 0) work_t4\r\n	,ifnull(works.work_t1, 0) work_t1\r\n	,ifnull(works.work_t2, 0) work_t2\r\n	,ifnull(works.sum_work, 0) sum_work\r\n	,targets.target\r\nfrom (\r\n  select hospcode\r\n	 ,right_new\r\n         ,count(cid) target\r\n  from nhso_tmpqof0021_person1\r\n  where (CHRONIC is null or (CHRONIC is not null and DATE_DIAG < DATE_SERV_NCDSCREEN))\r\n  group by hospcode, right_new\r\n) targets\r\n\r\nleft join \r\n\r\n(\r\n	select hospcode\r\n		,right_new\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t1_en then 1 end) work_t3\r\n		,count(case when DATE_SERV_NCDSCREEN between @t2_st and @t2_en then 1 end) work_t4\r\n		,count(case when DATE_SERV_NCDSCREEN between @t3_st and @t3_en then 1 end) work_t1\r\n		,count(case when DATE_SERV_NCDSCREEN between @t4_st and @t4_en then 1 end) work_t2\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t4_en then 1 end) sum_work\r\n		\r\n	from nhso_tmpqof0021_person1\r\n	where (CHRONIC is null or (CHRONIC is not null and DATE_DIAG < DATE_SERV_NCDSCREEN))\r\n		and SBP_1 >= 30 and DBP_1 >= 20\r\n		and (DATE_SERV_DIAG is null or DATE_SERV_DIAG >= DATE_SERV_NCDSCREEN)\r\n	group by hospcode, right_new\r\n) works on works.hospcode = targets.hospcode and works.right_new = targets.right_new\r\norder by works.hospcode, works.right_new;\r\n', 'kang', '2017-01-27 13:07:00');
INSERT INTO `sqlscript` VALUES ('53', 'qof 2.2 ร้อยละของประชากรไทยอายุ 35-74 ปี ที่ได้รับการคัดกรองและวินิจฉัยเป็นความดันโลหิตสูง', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0002.2\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,targets.hospcode\r\n	,targets.right_new\r\n	,ifnull(works.work_t3, 0) work_t3\r\n	,ifnull(works.work_t4, 0) work_t4\r\n	,ifnull(works.work_t1, 0) work_t1\r\n	,ifnull(works.work_t2, 0) work_t2\r\n	,ifnull(works.sum_work, 0) sum_work\r\n	,targets.target\r\nfrom (\r\n  select hospcode\r\n	 ,right_new\r\n         ,count(cid) target\r\n  from nhso_tmpqof0022_person1\r\n  where (CHRONIC is null or (CHRONIC is not null and DATE_DIAG < DATE_SERV_NCDSCREEN))\r\n	and SBP_1 >= 140 and DBP_1 >= 90\r\n	and (DATE_SERV_DIAG is null or DATE_SERV_DIAG >= DATE_SERV_NCDSCREEN)\r\n  group by hospcode, right_new\r\n) targets\r\n\r\nleft join \r\n\r\n(\r\n	select hospcode\r\n		,right_new\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t1_en then 1 end) work_t3\r\n		,count(case when DATE_SERV_NCDSCREEN between @t2_st and @t2_en then 1 end) work_t4\r\n		,count(case when DATE_SERV_NCDSCREEN between @t3_st and @t3_en then 1 end) work_t1\r\n		,count(case when DATE_SERV_NCDSCREEN between @t4_st and @t4_en then 1 end) work_t2\r\n		,count(case when DATE_SERV_NCDSCREEN between @t1_st and @t4_en then 1 end) sum_work\r\n		\r\n	from nhso_tmpqof0022_person1\r\n	where ((CHRONIC is not null and DATE_DIAG >= DATE_SERV_NCDSCREEN)\r\n		or (DATE_SERV_DIAG is not null AND DATE_SERV_DIAG >= DATE_SERV_NCDSCREEN))\r\n		and SBP_1 >= 140 and DBP_1 >= 90\r\n	group by hospcode, right_new\r\n) works on works.hospcode = targets.hospcode and works.right_new = targets.right_new\r\norder by targets.hospcode, works.right_new;', 'kang', '2017-01-27 13:10:45');
INSERT INTO `sqlscript` VALUES ('55', 'qof 3. ร้อยละของหญิงมีครรภ์ (ทุกสิทธิ) ได้รับการฝากครรภ์ครั้งแรกก่อน 12 สัปดาห์ (QOF)', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0003\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,targets.hospcode\r\n	,ifnull(works.work_t3, 0) work_t3\r\n	,ifnull(works.work_t4, 0) work_t4\r\n	,ifnull(works.work_t1, 0) work_t1\r\n	,ifnull(works.work_t2, 0) work_t2\r\n	,ifnull(works.sum_work, 0) sum_work\r\n	,targets.target\r\nfrom (\r\n  select hospcode\r\n         ,count(distinct concat(pid, hospcode)) target\r\n  from nhso_tmpqof003_anc\r\n  group by hospcode\r\n) targets\r\n\r\nleft join \r\n\r\n(\r\n	select hospcode\r\n		,count(distinct case when DATE_SERV between @t1_st and @t1_en then concat(pid, hospcode) end) work_t3\r\n		,count(distinct case when DATE_SERV between @t2_st and @t2_en then concat(pid, hospcode) end) work_t4\r\n		,count(distinct case when DATE_SERV between @t3_st and @t3_en then concat(pid, hospcode) end) work_t1\r\n		,count(distinct case when DATE_SERV between @t4_st and @t4_en then concat(pid, hospcode) end) work_t2\r\n		,count(distinct case when DATE_SERV between @t1_st and @t4_en then concat(pid, hospcode) end) sum_work\r\n	from nhso_tmpqof003_anc\r\n	where ANCNO = 1 and GA <= 12\r\n	group by hospcode\r\n) works on works.hospcode = targets.hospcode;', 'kang', '2017-01-27 13:12:19');
INSERT INTO `sqlscript` VALUES ('56', 'qof  4. ร้อยละสะสมความครอบคลุมการตรวจคัดกรองมะเร็งปากมดลูกในสตรี 30-60 ปี  ภายใน 5  ปี', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0004\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,result.hospcode\r\n	,result.work_56\r\n	,result.work_57\r\n	,result.work_58\r\n	,result.work_59\r\n	,result.work_60\r\n	,result.work_56 + result.work_57 + result.work_58 + result.work_59 + result.work_60 work_sum\r\n	,result.target\r\nfrom (\r\n	select	hospcode\r\n		,count(case when (PAP56 = 1 or SPP56 = 1) then 1 end ) work_56 \r\n		,count(case when ((PAP56 = 0 and SPP56 = 0) and (PAP57 = 1 or SPP57 = 1)) then 1 end ) work_57\r\n		,count(case when ((PAP56 = 0 and SPP56 = 0 and PAP57 = 0 and SPP57 = 0) and (PAP58 = 1 or SPP58 = 1)) then 1 end ) work_58 \r\n		,count(case when ((PAP56 = 0 and SPP56 = 0 and PAP57 = 0 and SPP57 = 0 and PAP58 = 0 and SPP58 = 0) and (PAP59 = 1 or SPP59 = 1)) then 1 end ) work_59 \r\n		,count(case when ((PAP56 = 0 and SPP56 = 0 and PAP57 = 0 and SPP57 = 0 and PAP58 = 0 and SPP58 = 0 and PAP59 = 0 and SPP59 = 0) and (PAP60 = 1 or SPP60 = 1)) then 1 end ) work_60 \r\n		,count(distinct cid) target\r\n	from nhso_tmpqof004_person\r\n	group by hospcode\r\n) result;\r\n', 'kang', '2017-01-27 13:14:12');
INSERT INTO `sqlscript` VALUES ('57', 'qof 5.1 ร้อยละการใช้ยาปฏิชีวนะอย่างรับผิดชอบในผู้ป่วยนอกโรคอุจจาระร่วงเฉียบพลัน (Acute Diarrhea)', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0005.1\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,count( case when DATE_SERV between @t1_st and @t1_en and USEDRUG = 1 then pid end) work_t3\r\n	,count( case when DATE_SERV between @t2_st and @t2_en and USEDRUG = 1 then pid end) work_t4\r\n	,count( case when DATE_SERV between @t3_st and @t3_en and USEDRUG = 1 then pid end) work_t1\r\n	,count( case when DATE_SERV between @t4_st and @t4_en and USEDRUG = 1 then pid end) work_t2\r\n	,count( case when DATE_SERV between @t1_st and @t4_en and USEDRUG = 1 then pid end) sum_work\r\n	,count( pid) target\r\nfrom nhso_tmpqof0051_diag\r\ngroup by hospcode;', 'kang', '2017-01-27 13:15:58');
INSERT INTO `sqlscript` VALUES ('58', 'qof 5.2 ร้อยละการใช้ยาปฏิชีวนะอย่างรับผิดชอบในผู้ป่วยนอกโรคติดเชื้อระบบทางเดินหายใจ(Respiratory Infection(', 'SET	@t1_st:=\'20160401\',\r\n	@t1_en:=\'20160630\',\r\n\r\n	@t2_st:=\'20160701\',\r\n	@t2_en:=\'20160930\',\r\n\r\n	@t3_st:=\'20161001\',\r\n	@t3_en:=\'20161231\',\r\n\r\n	@t4_st:=\'20170101\',\r\n	@t4_en:=\'20170331\',\r\n\r\n	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0005.2\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,count( case when DATE_SERV between @t1_st and @t1_en and USEDRUG = 1 then pid end) work_t3\r\n	,count( case when DATE_SERV between @t2_st and @t2_en and USEDRUG = 1 then pid end) work_t4\r\n	,count( case when DATE_SERV between @t3_st and @t3_en and USEDRUG = 1 then pid end) work_t1\r\n	,count( case when DATE_SERV between @t4_st and @t4_en and USEDRUG = 1 then pid end) work_t2\r\n	,count( case when DATE_SERV between @t1_st and @t4_en and USEDRUG = 1 then pid end) sum_work\r\n	,count( pid) target\r\nfrom nhso_tmpqof0052_diag\r\ngroup by hospcode;\r\n', 'kang', '2017-01-27 13:17:48');
INSERT INTO `sqlscript` VALUES ('59', 'qof 6. การลดลงของอัตราการนอนโรงพยาบาลด้วยภาวะที่ควรควบคุมด้วยบริการผู้ป่วยนอก (ACSC) (QOF)', 'SET	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0006\';\r\n\r\nselect result.*\r\n	,ROUND((result.work_A2 - result.work_A1)*100000/result.target,2) percents\r\nfrom (\r\n	select @year_fiscal year_fiscal\r\n		,@codeprocess codeprocess\r\n		,now() process_time\r\n		,targets.hospcode\r\n		,ifnull(works.work_A1, 0) work_A1\r\n		,ifnull(works.work_A2, 0) work_A2\r\n		,targets.target\r\n	from (\r\n	  select hospcode\r\n		 ,count(pid) target\r\n	  from nhso_tmpqof006_person\r\n	  group by hospcode\r\n	) targets\r\n\r\n	left join \r\n\r\n	(\r\n		select hospcode\r\n			,count(case when DATETIME_ADMIT between concat(@A1, @time_st) AND concat(@A2, @time_en) \r\n					and (DIAGCODE in (\'G40\',\'G41\') #1\r\n					     OR ((DIAGCODE BETWEEN \'J12\' and \'J16\'  #2\r\n						OR DIAGCODE BETWEEN \'J41\' and\'J44\' \r\n						OR DIAGCODE in (\'J47\',\'J100\', \'J110\',\'J18\',\'J20\',\'J21\',\'J22\'))\r\n						AND SDX = 1)\r\n					     OR DIAGCODE in (\'J45\',\'J46\') #3\r\n					     OR (DIAGCODE in (\'I10\',\'I11\') AND PROCEDURES = 0) #4\r\n					     ) \r\n					then pid end) work_A1\r\n			,count(case when DATETIME_ADMIT between concat(@B1, @time_st) AND concat(@B2, @time_en) \r\n					and (DIAGCODE in (\'G40\',\'G41\') #1\r\n					     OR ((DIAGCODE BETWEEN \'J12\' and \'J16\'  #2\r\n						OR DIAGCODE BETWEEN \'J41\' and\'J44\' \r\n						OR DIAGCODE in (\'J47\',\'J100\', \'J110\',\'J18\',\'J20\',\'J21\',\'J22\'))\r\n						AND SDX = 1)\r\n					     OR DIAGCODE in (\'J45\',\'J46\') #3\r\n					     OR (DIAGCODE in (\'I10\',\'I11\') AND PROCEDURES = 0) #4\r\n					     )\r\n					then pid end) work_A2\r\n		from nhso_tmpqof006_diag_ipd_pdx\r\n		group by hospcode\r\n	) works on works.hospcode = targets.hospcode\r\n) result;', 'kang', '2017-01-27 13:19:42');
INSERT INTO `sqlscript` VALUES ('60', 'qof 7. สัดส่วนการใช้บริการที่หน่วยบริการปฐมภูมิต่อการใช้บริการที่โรงพยาบาล ', 'SET	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0007\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,sum(SERVICE_PRIMARY) primarys\r\n	,sum(SERVICE_SECONDARY) secondarys\r\nfrom nhso_tmpqof007_person\r\ngroup by hospcode;\r\n', 'kang', '2017-01-27 13:22:24');
INSERT INTO `sqlscript` VALUES ('61', 'qof 9. น้ำหนักทารกแรกคลอดต่ำกว่า 2500 กรัม', 'SET	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_0009\';\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,HOSPCODE_MOM hospcode\r\n	,count(distinct case when NATION_MOM = \'099\' AND bweight < 2500 then concat(HOSPCODE_MOM, mpid) when HOSPCODE_MOM is null then concat(hospcode,mpid) end) work\r\n	,count(distinct case when NATION_MOM = \'099\' then concat(HOSPCODE_MOM, mpid) when HOSPCODE_MOM is null then concat(hospcode,mpid) END) targets\r\nfrom nhso_tmpqof009_newborn\r\ngroup by HOSPCODE_MOM;\r\n', 'kang', '2017-01-27 13:24:36');
INSERT INTO `sqlscript` VALUES ('62', 'qof 10.1 ร้อยละของการคัดกรองพัฒนาการเด็ก', '\r\nSET	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_00010.1\';\r\n\r\nselect @year_fiscal year_fiscal\r\n	,\'QOF60_00010.1\' codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,count(distinct case when SCREENING = 1 then cid end) works\r\n	,count(distinct cid) targets\r\nfrom nhso_tmpqof00101_person\r\nwhere AGE_MONTH in (9, 18, 30, 42) \r\ngroup by hospcode \r\n\r\n\r\nunion\r\n\r\n\r\nselect @year_fiscal year_fiscal\r\n	,\'QOF60_00010.2\' codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,count(distinct case when SCREENING = 1 AND COMPLICATION = 1 then cid end) works\r\n	,count(distinct case when SCREENING = 1 then cid end) targets\r\nfrom nhso_tmpqof00101_person\r\nwhere AGE_MONTH in (9, 18, 30, 42) \r\ngroup by hospcode \r\n\r\nunion\r\n\r\nselect @year_fiscal year_fiscal\r\n	,\'QOF60_00010.3\' codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,count(distinct case when IS_1B262 = 1 AND MEET_DOCTOR = 1 then cid end) works\r\n	,count(distinct case when IS_1B262 = 1 then cid end) targets\r\nfrom nhso_tmpqof00101_person\r\nwhere AGE_MONTH in (9, 18, 30, 42) \r\ngroup by hospcode ORDER BY hospcode ;', 'kang', '2017-01-27 13:28:27');
INSERT INTO `sqlscript` VALUES ('63', 'qof 10.3 ร้อยละของการคัดกรองพัฒนาการเด็กสงสัยล่าช้า', 'SET	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_00010.2\';\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,count(distinct case when SCREENING = 1 AND COMPLICATION = 1 then cid end) works\r\n	,count(distinct case when SCREENING = 1 then cid end) targets\r\nfrom nhso_tmpqof00101_person\r\nwhere AGE_MONTH in (9, 18, 30, 42) \r\ngroup by hospcode ;', 'kang', '2017-01-27 13:32:49');
INSERT INTO `sqlscript` VALUES ('64', 'qof 10.5 ร้อยละของการคัดกรองพัฒนาการเด็กล่าช้าเข้าถึงบริการรักษา', 'SET	@year_fiscal:=\'2017\',\r\n	@codeprocess:=\'QOF60_00010.3\';\r\n\r\nselect @year_fiscal year_fiscal\r\n	,@codeprocess codeprocess\r\n	,now() process_time\r\n	,hospcode\r\n	,count(distinct case when IS_1B262 = 1 AND MEET_DOCTOR = 1 then cid end) works\r\n	,count(distinct case when IS_1B262 = 1 then cid end) targets\r\nfrom nhso_tmpqof00101_person\r\nwhere AGE_MONTH in (9, 18, 30, 42) \r\ngroup by hospcode ;\r\n', 'kang', '2017-01-27 13:34:17');
INSERT INTO `sqlscript` VALUES ('65', 'คนไม่มีบ้าน', 'select p.hospcode,p.pid,concat( left(p.cid,8),\'xxxxx\') as cid,concat( left(p.name,3),\'xxxxx\') as name,concat( left(p.lname,3),\'xxxxx\') as lname,p.nation,p.discharge,p.hid,p.typearea from person p\r\nwhere typearea in(1,3) and hid=00000 and discharge=9;', 'admin', '2017-04-11 14:04:14');

-- ----------------------------
-- Table structure for token
-- ----------------------------
DROP TABLE IF EXISTS `token`;
CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of token
-- ----------------------------
INSERT INTO `token` VALUES ('1', 't4x-3DL-WOH9q-CVEbne3vTBMpaQJn_e', '1490861913', '0');
INSERT INTO `token` VALUES ('2', 'L7BqwpEGQ8scRUwJIlIibzTZ4txSVyBb', '1490861946', '0');
INSERT INTO `token` VALUES ('3', 'Aty4hpM-Mc6F9kzvr14ICKAMjoBRlI_f', '1490861964', '0');
INSERT INTO `token` VALUES ('4', 'DrPREM5ORNC8V3t5f4Wqs6FaMf2xZTut', '1490861982', '0');

-- ----------------------------
-- Table structure for types
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'ประเภท',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of types
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `department_id` int(11) DEFAULT NULL,
  `role` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin@localhost.com', '$2y$12$VnY8dk3slz7rC/IN0kvheeyXMUKx0O8aX9lKot3ZVvzpJUgNbgisO', 'zy1nEUWguwfu0gkMFILtkIKLsWtkIA-M', null, null, null, '::1', '1490861913', '1490861913', '0', '1495530135', '10', '1', '10');
INSERT INTO `user` VALUES ('2', 'manager', 'manager@localhost.com', '$2y$12$b7rm8jnDAGxBS7qWJCcee.oF4v9Ne2QvX4ry2z9Nk.UjpXndwJOYK', 'LSsErX-TXoyxKrRMeIoUYAE5TKMfLDbs', null, null, null, '::1', '1490861946', '1490861946', '0', '1490865233', '10', '2', '20');
INSERT INTO `user` VALUES ('3', 'editor', 'editor@localhost.com', '$2y$12$a63pv1zyTsug7NYQWbhnhunRfPdwGddEojg/rYZ.t41yirCZnjxUi', '1cwKof3Wq0nm1jF7vXl-dyF6iMPeSbDp', null, null, null, '::1', '1490861964', '1490861964', '0', '1490865194', '10', '2', '10');
INSERT INTO `user` VALUES ('4', 'user', 'user@localhost.com', '$2y$12$C40sbvZWX9CbEKPfoVTUmerf2g.lWqXlGXEpuM5Rj7EelKhCPUG.m', '-yhX4nTgGnsIUSJUBiEvAF0CFqcUqWbt', null, null, null, '::1', '1490861982', '1490861982', '0', '1490950393', '10', '3', '30');

-- ----------------------------
-- Table structure for user1
-- ----------------------------
DROP TABLE IF EXISTS `user1`;
CREATE TABLE `user1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user1
-- ----------------------------
INSERT INTO `user1` VALUES ('1', 'admin', '_ropd7_caqhmRwKEuKhlfIbKOjTiKk3_', '$2y$13$y3rxX.b5g.jVYCXpdO/dD.VdV3tRbr57lO6TuEK9GczbwyRIJw.wS', null, 'admin@local.com', '10', '1490843077', '1490843077');
