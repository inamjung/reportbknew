/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : yii2reportbk

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-03-31 16:03:15
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
INSERT INTO `user` VALUES ('1', 'admin', 'admin@localhost.com', '$2y$12$VnY8dk3slz7rC/IN0kvheeyXMUKx0O8aX9lKot3ZVvzpJUgNbgisO', 'zy1nEUWguwfu0gkMFILtkIKLsWtkIA-M', null, null, null, '::1', '1490861913', '1490861913', '0', '1490949086', '10', '1', '10');
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
