/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2017-08-30 18:27:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for love_user
-- ----------------------------
DROP TABLE IF EXISTS `love_user`;
CREATE TABLE `love_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '路由id',
  `username` varchar(255) DEFAULT NULL COMMENT '姓名',
  `city` varchar(255) DEFAULT NULL COMMENT '家乡',
  `nowcity` varchar(255) DEFAULT NULL COMMENT '所在城市',
  `tel` varchar(255) DEFAULT NULL COMMENT '联系方式',
  `dream` varchar(255) DEFAULT NULL COMMENT '心愿',
  `need` varchar(255) DEFAULT NULL COMMENT '期望',
  `born` varchar(255) DEFAULT NULL COMMENT '出生日期',
  `grow` varchar(255) DEFAULT NULL COMMENT '成长环境',
  `likes` varchar(255) DEFAULT NULL COMMENT '爱好',
  `consume` varchar(255) DEFAULT NULL COMMENT '消费观',
  `add_date` datetime DEFAULT '2000-01-01 00:00:00' COMMENT 'post创建日期',
  `ip` varchar(50) DEFAULT '' COMMENT '提交ip',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态，1：启用 ;0：不启用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='url路由表';
