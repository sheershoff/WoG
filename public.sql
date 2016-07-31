/*
Navicat PGSQL Data Transfer

Source Server         : hashaton
Source Server Version : 90408
Source Host           : 192.168.77.19:5432
Source Database       : wog
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90408
File Encoding         : 65001

Date: 2016-07-31 13:59:04
*/


-- ----------------------------
-- Sequence structure for wog_Action_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_Action_id_seq";
CREATE SEQUENCE "public"."wog_Action_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;
SELECT setval('"public"."wog_Action_id_seq"', 4, true);

-- ----------------------------
-- Sequence structure for wog_ActionCurrency_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_ActionCurrency_id_seq";
CREATE SEQUENCE "public"."wog_ActionCurrency_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 3
 CACHE 1;
SELECT setval('"public"."wog_ActionCurrency_id_seq"', 3, true);

-- ----------------------------
-- Sequence structure for wog_ActionTrancaction_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_ActionTrancaction_id_seq";
CREATE SEQUENCE "public"."wog_ActionTrancaction_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for wog_Balance_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_Balance_id_seq";
CREATE SEQUENCE "public"."wog_Balance_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 207
 CACHE 1;
SELECT setval('"public"."wog_Balance_id_seq"', 207, true);

-- ----------------------------
-- Sequence structure for wog_Currency_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_Currency_id_seq";
CREATE SEQUENCE "public"."wog_Currency_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 6
 CACHE 1;
SELECT setval('"public"."wog_Currency_id_seq"', 6, true);

-- ----------------------------
-- Sequence structure for wog_CurrencyTrancaction_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_CurrencyTrancaction_id_seq";
CREATE SEQUENCE "public"."wog_CurrencyTrancaction_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for wog_CurrencyTypes_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_CurrencyTypes_id_seq";
CREATE SEQUENCE "public"."wog_CurrencyTypes_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 3
 CACHE 1;
SELECT setval('"public"."wog_CurrencyTypes_id_seq"', 3, true);

-- ----------------------------
-- Sequence structure for wog_jobs_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_jobs_id_seq";
CREATE SEQUENCE "public"."wog_jobs_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for wog_MailTemplate_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_MailTemplate_id_seq";
CREATE SEQUENCE "public"."wog_MailTemplate_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;
SELECT setval('"public"."wog_MailTemplate_id_seq"', 2, true);

-- ----------------------------
-- Sequence structure for wog_pages_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_pages_id_seq";
CREATE SEQUENCE "public"."wog_pages_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for wog_Quest_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_Quest_id_seq";
CREATE SEQUENCE "public"."wog_Quest_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 5
 CACHE 1;
SELECT setval('"public"."wog_Quest_id_seq"', 5, true);

-- ----------------------------
-- Sequence structure for wog_Role_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_Role_id_seq";
CREATE SEQUENCE "public"."wog_Role_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;
SELECT setval('"public"."wog_Role_id_seq"', 4, true);

-- ----------------------------
-- Sequence structure for wog_RoleUser_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_RoleUser_id_seq";
CREATE SEQUENCE "public"."wog_RoleUser_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 379
 CACHE 1;
SELECT setval('"public"."wog_RoleUser_id_seq"', 379, true);

-- ----------------------------
-- Sequence structure for wog_Skill_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_Skill_id_seq";
CREATE SEQUENCE "public"."wog_Skill_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 8
 CACHE 1;
SELECT setval('"public"."wog_Skill_id_seq"', 8, true);

-- ----------------------------
-- Sequence structure for wog_TeamUser_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_TeamUser_id_seq";
CREATE SEQUENCE "public"."wog_TeamUser_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 34
 CACHE 1;
SELECT setval('"public"."wog_TeamUser_id_seq"', 34, true);

-- ----------------------------
-- Sequence structure for wog_User_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_User_id_seq";
CREATE SEQUENCE "public"."wog_User_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 70
 CACHE 1;
SELECT setval('"public"."wog_User_id_seq"', 70, true);

-- ----------------------------
-- Sequence structure for wog_UserProfile_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_UserProfile_id_seq";
CREATE SEQUENCE "public"."wog_UserProfile_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for wog_UserQuest_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_UserQuest_id_seq";
CREATE SEQUENCE "public"."wog_UserQuest_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 23
 CACHE 1;
SELECT setval('"public"."wog_UserQuest_id_seq"', 23, true);

-- ----------------------------
-- Sequence structure for wog_UserQuestStatus_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_UserQuestStatus_id_seq";
CREATE SEQUENCE "public"."wog_UserQuestStatus_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 2
 CACHE 1;
SELECT setval('"public"."wog_UserQuestStatus_id_seq"', 2, true);

-- ----------------------------
-- Sequence structure for wog_UserSkill_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_UserSkill_id_seq";
CREATE SEQUENCE "public"."wog_UserSkill_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 108
 CACHE 1;
SELECT setval('"public"."wog_UserSkill_id_seq"', 108, true);

-- ----------------------------
-- Sequence structure for wog_UserStatus_id_seq
-- ----------------------------
DROP SEQUENCE "public"."wog_UserStatus_id_seq";
CREATE SEQUENCE "public"."wog_UserStatus_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Table structure for wog_Action
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_Action";
CREATE TABLE "public"."wog_Action" (
"id" int4 DEFAULT nextval('"wog_Action_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"description" text COLLATE "default",
"questId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_Action
-- ----------------------------
INSERT INTO "public"."wog_Action" VALUES ('1', 'Взятие квеста игроком', '', '1', null, null, null);
INSERT INTO "public"."wog_Action" VALUES ('2', 'Выполнение квеста игроком', '', '1', null, null, null);
INSERT INTO "public"."wog_Action" VALUES ('3', 'Взятие квеста Заполни профиль', null, '2', null, null, null);
INSERT INTO "public"."wog_Action" VALUES ('4', 'Завершение квеста Заполни профиль', null, '2', null, null, null);

-- ----------------------------
-- Table structure for wog_ActionCurrency
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_ActionCurrency";
CREATE TABLE "public"."wog_ActionCurrency" (
"id" int4 DEFAULT nextval('"wog_ActionCurrency_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"description" text COLLATE "default",
"currencyId" int4 NOT NULL,
"actionId" int4 NOT NULL,
"value" int4 NOT NULL,
"transactionUser" bool NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_ActionCurrency
-- ----------------------------
INSERT INTO "public"."wog_ActionCurrency" VALUES ('2', 'Повысить карму', null, '3', '4', '5', 't', null, null, null);
INSERT INTO "public"."wog_ActionCurrency" VALUES ('3', 'Повысить голду', null, '4', '4', '10', 't', null, null, null);

-- ----------------------------
-- Table structure for wog_ActionTransaction
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_ActionTransaction";
CREATE TABLE "public"."wog_ActionTransaction" (
"id" int4 DEFAULT nextval('"wog_ActionTrancaction_id_seq"'::regclass) NOT NULL,
"userId" int4 NOT NULL,
"actionId" int4 NOT NULL,
"mailTemplateId" int4 NOT NULL,
"message" json,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_ActionTransaction
-- ----------------------------

-- ----------------------------
-- Table structure for wog_Balance
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_Balance";
CREATE TABLE "public"."wog_Balance" (
"id" int4 DEFAULT nextval('"wog_Balance_id_seq"'::regclass) NOT NULL,
"value" int4 NOT NULL,
"currencyId" int4 NOT NULL,
"userId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_Balance
-- ----------------------------
INSERT INTO "public"."wog_Balance" VALUES ('1', '13', '3', '7', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('2', '45', '4', '7', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('55', '100', '4', '2', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('56', '100', '4', '3', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('57', '100', '4', '5', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('58', '100', '4', '6', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('60', '100', '4', '8', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('61', '100', '4', '9', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('62', '100', '4', '10', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('63', '100', '4', '16', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('64', '100', '4', '17', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('65', '100', '4', '18', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('66', '100', '4', '19', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('67', '100', '4', '20', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('68', '100', '4', '21', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('69', '100', '4', '22', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('70', '100', '4', '23', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('71', '100', '4', '24', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('72', '100', '4', '25', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('73', '100', '4', '26', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('74', '100', '4', '27', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('75', '100', '4', '28', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('76', '100', '4', '30', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('77', '100', '4', '32', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('78', '100', '4', '33', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('79', '100', '4', '34', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('80', '100', '4', '35', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('81', '100', '4', '36', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('82', '100', '4', '37', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('83', '100', '4', '38', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('84', '100', '4', '39', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('85', '100', '4', '40', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('86', '100', '4', '42', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('87', '100', '4', '43', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('88', '100', '4', '45', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('89', '100', '4', '47', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('90', '100', '4', '48', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('91', '100', '4', '49', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('92', '100', '4', '50', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('93', '100', '4', '52', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('94', '100', '4', '53', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('95', '100', '4', '54', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('96', '100', '4', '55', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('97', '100', '4', '56', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('98', '100', '4', '57', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('99', '100', '4', '59', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('100', '100', '4', '60', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('101', '100', '4', '61', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('102', '100', '4', '62', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('103', '100', '4', '63', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('104', '100', '4', '64', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('105', '100', '4', '65', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('106', '5', '3', '2', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('107', '5', '3', '3', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('108', '5', '3', '5', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('109', '5', '3', '6', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('111', '5', '3', '8', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('112', '5', '3', '9', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('113', '5', '3', '10', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('114', '5', '3', '16', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('115', '5', '3', '17', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('116', '5', '3', '18', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('117', '5', '3', '19', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('118', '5', '3', '20', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('119', '5', '3', '21', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('120', '5', '3', '22', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('121', '5', '3', '23', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('122', '5', '3', '24', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('123', '5', '3', '25', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('124', '5', '3', '26', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('125', '5', '3', '27', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('126', '5', '3', '28', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('127', '5', '3', '30', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('128', '5', '3', '32', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('129', '5', '3', '33', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('130', '5', '3', '34', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('131', '5', '3', '35', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('132', '5', '3', '36', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('133', '5', '3', '37', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('134', '5', '3', '38', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('135', '5', '3', '39', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('136', '5', '3', '40', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('137', '5', '3', '42', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('138', '5', '3', '43', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('139', '5', '3', '45', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('140', '5', '3', '47', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('141', '5', '3', '48', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('142', '5', '3', '49', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('143', '5', '3', '50', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('144', '5', '3', '52', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('145', '5', '3', '53', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('146', '5', '3', '54', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('147', '5', '3', '55', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('148', '5', '3', '56', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('149', '5', '3', '57', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('150', '5', '3', '59', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('151', '5', '3', '60', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('152', '5', '3', '61', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('153', '5', '3', '62', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('154', '5', '3', '63', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('155', '5', '3', '64', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('156', '5', '3', '65', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('157', '88', '6', '2', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('158', '88', '6', '3', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('159', '88', '6', '5', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('160', '88', '6', '6', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('161', '88', '6', '7', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('162', '88', '6', '8', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('163', '88', '6', '9', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('164', '88', '6', '10', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('165', '88', '6', '16', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('166', '88', '6', '17', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('167', '88', '6', '18', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('168', '88', '6', '19', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('169', '88', '6', '20', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('170', '88', '6', '21', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('171', '88', '6', '22', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('172', '88', '6', '23', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('173', '88', '6', '24', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('174', '88', '6', '25', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('175', '88', '6', '26', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('176', '88', '6', '27', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('177', '88', '6', '28', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('178', '88', '6', '30', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('179', '88', '6', '32', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('180', '88', '6', '33', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('181', '88', '6', '34', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('182', '88', '6', '35', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('183', '88', '6', '36', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('184', '88', '6', '37', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('185', '88', '6', '38', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('186', '88', '6', '39', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('187', '88', '6', '40', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('188', '88', '6', '42', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('189', '88', '6', '43', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('190', '88', '6', '45', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('191', '88', '6', '47', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('192', '88', '6', '48', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('193', '88', '6', '49', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('194', '88', '6', '50', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('195', '88', '6', '52', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('196', '88', '6', '53', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('197', '88', '6', '54', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('198', '88', '6', '55', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('199', '88', '6', '56', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('200', '88', '6', '57', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('201', '88', '6', '59', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('202', '88', '6', '60', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('203', '88', '6', '61', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('204', '88', '6', '62', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('205', '88', '6', '63', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('206', '88', '6', '64', null, null);
INSERT INTO "public"."wog_Balance" VALUES ('207', '88', '6', '65', null, null);

-- ----------------------------
-- Table structure for wog_Currency
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_Currency";
CREATE TABLE "public"."wog_Currency" (
"id" int4 DEFAULT nextval('"wog_Currency_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"description" text COLLATE "default",
"function" varchar(255) COLLATE "default",
"options" json,
"photo" bytea,
"topMenu" bool DEFAULT false NOT NULL,
"roleId" int4 NOT NULL,
"currencyTypesId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_Currency
-- ----------------------------
INSERT INTO "public"."wog_Currency" VALUES ('3', 'Карма', 'Опыт', null, null, null, 'f', '1', '1', null, null, null);
INSERT INTO "public"."wog_Currency" VALUES ('4', 'Голда', 'Золото', null, null, null, 'f', '1', '2', null, null, null);
INSERT INTO "public"."wog_Currency" VALUES ('6', 'Сноровка', null, null, null, null, 'f', '1', '3', null, null, null);

-- ----------------------------
-- Table structure for wog_CurrencyTransaction
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_CurrencyTransaction";
CREATE TABLE "public"."wog_CurrencyTransaction" (
"id" int4 DEFAULT nextval('"wog_CurrencyTrancaction_id_seq"'::regclass) NOT NULL,
"value" int4 NOT NULL,
"currencyId" int4 NOT NULL,
"userId" int4 NOT NULL,
"actionCurrencyId" int4 NOT NULL,
"actionTransactionId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_CurrencyTransaction
-- ----------------------------

-- ----------------------------
-- Table structure for wog_CurrencyTypes
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_CurrencyTypes";
CREATE TABLE "public"."wog_CurrencyTypes" (
"id" int4 DEFAULT nextval('"wog_CurrencyTypes_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"unit" varchar(255) COLLATE "default" NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_CurrencyTypes
-- ----------------------------
INSERT INTO "public"."wog_CurrencyTypes" VALUES ('1', 'Карма', 'СуперМегаСпасибо', null, null, null);
INSERT INTO "public"."wog_CurrencyTypes" VALUES ('2', 'Голда', 'Тугриков', null, null, null);
INSERT INTO "public"."wog_CurrencyTypes" VALUES ('3', 'Навык', 'Звезд', null, null, null);

-- ----------------------------
-- Table structure for wog_jobs
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_jobs";
CREATE TABLE "public"."wog_jobs" (
"id" int8 DEFAULT nextval('wog_jobs_id_seq'::regclass) NOT NULL,
"queue" varchar(255) COLLATE "default" NOT NULL,
"payload" text COLLATE "default" NOT NULL,
"attempts" int2 NOT NULL,
"reserved" int2 NOT NULL,
"reserved_at" int4,
"available_at" int4 NOT NULL,
"created_at" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for wog_MailTemplate
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_MailTemplate";
CREATE TABLE "public"."wog_MailTemplate" (
"id" int4 DEFAULT nextval('"wog_MailTemplate_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"body" text COLLATE "default",
"size" int4 DEFAULT 1 NOT NULL,
"actionId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_MailTemplate
-- ----------------------------
INSERT INTO "public"."wog_MailTemplate" VALUES ('1', 'Взятие квеста игроком', 'Дорогой игрок! Вы участвуете в квесте "Заполни профиль"

Описание квеста: необходимо ответственно и вдумчиво заполнить профиль своего персонажа

Награда за выполнение не заставить себя ждать.', '1', '3', null, null, null);
INSERT INTO "public"."wog_MailTemplate" VALUES ('2', 'Выполнение квеста игроком', 'Дорогой игрок! Квест "Заполни профиль" успешно выполнен. Вы - большой молодец!

Ваша награда: карма повышена на 5 супермегаспасибо, а голда - на 10 тугриков  ', '1', '4', null, null, null);

-- ----------------------------
-- Table structure for wog_migrations
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_migrations";
CREATE TABLE "public"."wog_migrations" (
"migration" varchar(255) COLLATE "default" NOT NULL,
"batch" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_migrations
-- ----------------------------
INSERT INTO "public"."wog_migrations" VALUES ('2014_10_12_000000_create_user_status_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2014_10_12_000000_create_users_table', '2');
INSERT INTO "public"."wog_migrations" VALUES ('2014_10_12_100000_create_password_resets_table', '2');
INSERT INTO "public"."wog_migrations" VALUES ('2014_10_12_100000_create_user_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2014_10_12_200000_create_user_profile_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2014_10_12_400000_create_team_user_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_030404_create_role_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_030407_create_role_user_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035800_create_currency_types_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035830_create_currency_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035835_create_quest_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035840_create_user_quest_status_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035845_create_user_quest_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035850_create_action_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035855_create_action_currency_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035860_create_mail_template_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035865_create_balance_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035870_create_action_trancaction_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_22_035875_create_currency_trancaction_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_23_035900_create_skill_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_23_035950_create_user_skill_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_25_035411_create_jobs_table', '1');
INSERT INTO "public"."wog_migrations" VALUES ('2016_07_28_072111_Pages', '1');

-- ----------------------------
-- Table structure for wog_pages
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_pages";
CREATE TABLE "public"."wog_pages" (
"id" int4 DEFAULT nextval('wog_pages_id_seq'::regclass) NOT NULL,
"title" varchar(255) COLLATE "default" NOT NULL,
"content" text COLLATE "default" NOT NULL,
"meta_description" varchar(255) COLLATE "default",
"meta_keywords" varchar(255) COLLATE "default",
"public" bool NOT NULL,
"created_at" timestamp,
"updated_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_pages
-- ----------------------------

-- ----------------------------
-- Table structure for wog_password_resets
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_password_resets";
CREATE TABLE "public"."wog_password_resets" (
"email" varchar(255) COLLATE "default" NOT NULL,
"token" varchar(255) COLLATE "default" NOT NULL,
"created_at" timestamp NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for wog_Quest
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_Quest";
CREATE TABLE "public"."wog_Quest" (
"id" int4 DEFAULT nextval('"wog_Quest_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"description" text COLLATE "default",
"roleId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_Quest
-- ----------------------------
INSERT INTO "public"."wog_Quest" VALUES ('1', 'Расскажи о себе миру', 'Необходимо ответственно и вдумчиво заполнить 5 твоих профессиональных навыков', '1', null, null, null);
INSERT INTO "public"."wog_Quest" VALUES ('2', 'Заполни профиль', 'Дорогой друг, заполни профиль своего персонажа. Награда ждет тебя.', '1', null, null, null);
INSERT INTO "public"."wog_Quest" VALUES ('3', 'Закрыть 10 багов', 'Дорогой игрок! Твоя задача - закрыть 10 багов по своему проекту. Твои усилия не останутся без поощрения, а награда не заставит себя ждать', '1', null, null, null);
INSERT INTO "public"."wog_Quest" VALUES ('4', 'Оцени 3-х игроков', 'Выбери 3-х любых игроков знакомых тебе и поставь оценку по трем их навыкам. 
', '1', null, null, null);
INSERT INTO "public"."wog_Quest" VALUES ('5', 'Пригласи игрока', 'Отправь инвайт любому сотруднику в системе. Если он зарегистрируется в игре - ты получишь +5 в карму', '1', null, null, null);

-- ----------------------------
-- Table structure for wog_Role
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_Role";
CREATE TABLE "public"."wog_Role" (
"id" int4 DEFAULT nextval('"wog_Role_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_Role
-- ----------------------------
INSERT INTO "public"."wog_Role" VALUES ('1', 'Дух', null, null, null);
INSERT INTO "public"."wog_Role" VALUES ('2', 'Солдат', null, null, null);
INSERT INTO "public"."wog_Role" VALUES ('3', 'Эксперт', null, null, null);
INSERT INTO "public"."wog_Role" VALUES ('4', 'Командир', null, null, null);

-- ----------------------------
-- Table structure for wog_RoleUser
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_RoleUser";
CREATE TABLE "public"."wog_RoleUser" (
"id" int4 DEFAULT nextval('"wog_RoleUser_id_seq"'::regclass) NOT NULL,
"roleId" int4 NOT NULL,
"userId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_RoleUser
-- ----------------------------
INSERT INTO "public"."wog_RoleUser" VALUES ('1', '4', '2', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('2', '3', '3', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('3', '2', '7', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('4', '3', '5', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('5', '2', '4', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('6', '2', '6', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('7', '2', '8', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('335', '2', '9', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('336', '2', '10', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('337', '2', '16', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('338', '2', '17', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('339', '2', '18', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('340', '2', '19', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('341', '2', '20', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('342', '2', '21', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('343', '2', '22', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('344', '2', '23', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('345', '2', '24', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('346', '2', '25', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('347', '2', '26', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('348', '2', '27', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('349', '2', '28', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('350', '2', '30', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('351', '2', '32', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('352', '2', '33', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('353', '2', '34', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('354', '2', '35', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('355', '2', '36', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('356', '2', '37', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('357', '2', '38', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('358', '2', '39', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('359', '2', '40', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('360', '2', '42', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('361', '2', '43', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('362', '2', '45', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('363', '2', '47', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('364', '2', '48', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('365', '2', '49', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('366', '2', '50', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('367', '2', '52', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('368', '2', '53', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('369', '2', '54', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('370', '2', '55', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('371', '2', '56', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('372', '2', '57', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('373', '2', '59', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('374', '2', '60', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('375', '2', '61', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('376', '2', '62', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('377', '2', '63', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('378', '2', '64', null, null, null);
INSERT INTO "public"."wog_RoleUser" VALUES ('379', '2', '65', null, null, null);

-- ----------------------------
-- Table structure for wog_Skill
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_Skill";
CREATE TABLE "public"."wog_Skill" (
"id" int4 DEFAULT nextval('"wog_Skill_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"description" text COLLATE "default",
"options" json,
"currencyId" int4 NOT NULL,
"skillId" int4,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_Skill
-- ----------------------------
INSERT INTO "public"."wog_Skill" VALUES ('1', 'Спикер', 'Навык красиво говорить', null, '6', null, null, null, null);
INSERT INTO "public"."wog_Skill" VALUES ('4', 'Слушатель', 'Навык внимательно слушать и не перебивать', null, '6', null, null, null, null);
INSERT INTO "public"."wog_Skill" VALUES ('5', 'Powerpoint', 'Навык красиво рисовать презентации', null, '6', null, null, null, null);
INSERT INTO "public"."wog_Skill" VALUES ('6', ' Бэкэнд', null, null, '6', null, null, null, null);
INSERT INTO "public"."wog_Skill" VALUES ('8', 'Фронтэнд', null, null, '6', null, null, null, null);

-- ----------------------------
-- Table structure for wog_TeamUser
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_TeamUser";
CREATE TABLE "public"."wog_TeamUser" (
"id" int4 DEFAULT nextval('"wog_TeamUser_id_seq"'::regclass) NOT NULL,
"userId" int4 NOT NULL,
"teamUserId" int4 NOT NULL,
"isLeader" bool,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_TeamUser
-- ----------------------------
INSERT INTO "public"."wog_TeamUser" VALUES ('1', '2', '4', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('2', '3', '4', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('3', '5', '4', 't', null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('4', '6', '4', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('5', '7', '4', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('6', '8', '4', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('7', '9', '4', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('8', '10', '4', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('9', '26', '66', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('10', '30', '66', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('11', '35', '66', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('12', '37', '66', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('13', '40', '66', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('14', '22', '67', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('15', '23', '67', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('16', '27', '67', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('17', '50', '67', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('18', '60', '67', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('19', '24', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('20', '33', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('21', '34', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('22', '36', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('23', '38', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('24', '39', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('25', '42', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('26', '43', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('27', '47', '68', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('28', '16', '58', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('29', '17', '58', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('30', '18', '58', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('31', '19', '58', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('32', '20', '58', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('33', '21', '58', null, null, null, null);
INSERT INTO "public"."wog_TeamUser" VALUES ('34', '48', '4', null, null, null, null);

-- ----------------------------
-- Table structure for wog_UserProfile
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_UserProfile";
CREATE TABLE "public"."wog_UserProfile" (
"id" int4 DEFAULT nextval('"wog_UserProfile_id_seq"'::regclass) NOT NULL,
"description" varchar(255) COLLATE "default" NOT NULL,
"status" varchar(255) COLLATE "default" NOT NULL,
"userId" int4 NOT NULL,
"photo" bytea NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_UserProfile
-- ----------------------------

-- ----------------------------
-- Table structure for wog_UserQuest
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_UserQuest";
CREATE TABLE "public"."wog_UserQuest" (
"id" int4 DEFAULT nextval('"wog_UserQuest_id_seq"'::regclass) NOT NULL,
"questId" int4 NOT NULL,
"questType" int4 NOT NULL,
"userId" int4 NOT NULL,
"userQuestStatusId" int4 NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_UserQuest
-- ----------------------------
INSERT INTO "public"."wog_UserQuest" VALUES ('2', '1', '1', '2', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('4', '1', '1', '7', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('5', '1', '1', '5', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('6', '1', '1', '48', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('7', '1', '1', '7', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('8', '1', '1', '48', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('9', '1', '1', '48', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('10', '1', '1', '48', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('11', '1', '1', '48', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('12', '1', '1', '48', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('13', '1', '1', '48', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('14', '1', '1', '7', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('15', '1', '1', '7', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('16', '1', '1', '10', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('17', '1', '1', '6', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('18', '1', '1', '9', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('19', '1', '1', '3', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('20', '1', '1', '9', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('21', '1', '1', '9', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('22', '1', '1', '9', '1', null, null, null);
INSERT INTO "public"."wog_UserQuest" VALUES ('23', '1', '1', '9', '1', null, null, null);

-- ----------------------------
-- Table structure for wog_UserQuestStatus
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_UserQuestStatus";
CREATE TABLE "public"."wog_UserQuestStatus" (
"id" int4 DEFAULT nextval('"wog_UserQuestStatus_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_UserQuestStatus
-- ----------------------------
INSERT INTO "public"."wog_UserQuestStatus" VALUES ('1', 'Активен', null, null, null);
INSERT INTO "public"."wog_UserQuestStatus" VALUES ('2', 'Завершен', null, null, null);

-- ----------------------------
-- Table structure for wog_users
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_users";
CREATE TABLE "public"."wog_users" (
"id" int4 DEFAULT nextval('"wog_User_id_seq"'::regclass) NOT NULL,
"login" varchar(255) COLLATE "default",
"name" varchar(255) COLLATE "default",
"email" varchar(255) COLLATE "default",
"password" varchar(60) COLLATE "default",
"userType" int4 DEFAULT 1 NOT NULL,
"userStatusId" int4 DEFAULT 1 NOT NULL,
"psLogin" varchar(255) COLLATE "default",
"phoneNumber" varchar(255) COLLATE "default",
"tabNumber" varchar(255) COLLATE "default",
"remember_token" varchar(100) COLLATE "default",
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_users
-- ----------------------------
INSERT INTO "public"."wog_users" VALUES ('2', 'Vladimir.Khonin', 'Владимир Хонин', 'Vladimir.Khonin@Megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('3', 'Anna.Protko', 'Анна Протько', 'Anna.Protko@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('4', null, 'В Десаточку', null, null, '2', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('5', 'yuriy.berezin', 'Юрий Березин', 'yuriy.berezin@Megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'yberezin', '89201234567', '123456', null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('6', 'sergey.kadilenko', 'Сергей Кадиленко', 'sergey.kadilenko@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'skadilenko', '89201234567', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('7', 'ruslan.revel', 'Руслан Ревель', 'ruslan.revel@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, '9247274966', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('8', 'yuri.tsay', 'Юрий Цай', 'yuri.tsay@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'ytsay', '89221234567', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('9', 'alexey.y.zverev', 'Алексей Зверев', 'alexey.y.zverev@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('10', 'yuri.trigub', 'Юрий Тригуб', 'yuri.trigub@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'ytrigub', '9381113331', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('16', 'anton.khlevitsky', 'Антон Хлевицкий', 'anton.khlevitsky@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, '9242581163', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('17', 'nikolay.bagrov', 'Николай Багров', 'nikolay.bagrov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, '9247368055', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('18', 'edgar.rubtsov', 'Эдгар Рубцов', 'edgar.rubtsov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, '9264304300', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('19', 'dmitry.litokh', 'Дмитрий Литох', 'dmitry.litokh@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, '9241257955', null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('20', 'Vyacheslav.Sitnikov', 'Вячеслав Ситников', 'Vyacheslav.Sitnikov@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, '9265033074', null, 'za2qHqX09fTnUnzCeJOLCojjVFAn6FfSu1GAvYWPjsyFpaLE4JmVtXK9ozSE', null, '2016-07-30 08:46:49', null);
INSERT INTO "public"."wog_users" VALUES ('21', 'Dmitriy.Orlov', 'Дмитрий Орлов', 'Dmitriy.Orlov@billing.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('22', 'Egor.Mamontov', 'Егор Мамонтов', 'Egor.Mamontov@billing.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('23', 'igor.a.romanov', 'Игорь Романов', 'igor.a.romanov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('24', 'Varvara.Pyatkova', 'Варвара Пяткова', 'Varvara.Pyatkova@billing.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('25', 'alexander.fetisov', 'Александр Фетисов', 'alexander.fetisov@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'afetisov', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('26', 'Mikhail.Vysokolian', 'Михаил Высоколян', 'Mikhail.Vysokolian@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'MVysokolian', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('27', 'Alexander.Mikhaylov', 'Александр Михайлов', 'Alexander.Mikhaylov@billing.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('28', 'sergey.grishaev', 'Сергей Гришаев', 'sergey.grishaev@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'sgrishaev', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('30', 'alexander.a.grischenko', 'Александр Грищенко', 'alexander.a.grischenko@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('32', 'sergey.rzhevsky', 'Сергей Ржевский', 'sergey.rzhevsky@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('33', 'eduard.pavlov', 'Эдуард Павлов', 'eduard.pavlov@Megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'epavlov', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('34', 'Fedor.Volokhin', 'Федор Волохин', 'Fedor.Volokhin@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'FVolokhin', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('35', 'alexander.karpachev', 'Александр Карпачев', 'alexander.karpachev@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('36', 'Oleg.Skorobogaty', 'Олег Скоробогатый', 'Oleg.Skorobogaty@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'OSkorobogaty', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('37', 'egor.kovalchuk', 'Егор Ковальчук', 'egor.kovalchuk@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('38', 'egor.budrin', 'Егор Будрин', 'egor.budrin@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'ebudrin', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('39', 'Alexey.Vyunnikov', 'Алексей Вьюнников', 'Alexey.Vyunnikov@Megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('40', 'Denis.Sorokovik', 'Денис Сороковик', 'Denis.Sorokovik@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'DSorokovik', null, null, 'ALg50cov1rAw6mRBC5rFcVRD8VRMRHu0A21WqcVd9czLhEAOdhg5SvWpssLO', null, '2016-07-31 03:16:12', null);
INSERT INTO "public"."wog_users" VALUES ('42', 'sergey.batin', 'Сергей Батин', 'sergey.batin@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('43', 'Evgeny.Beliakov', 'Евгений Беляков', 'Evgeny.Beliakov@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', 'EBeliakov', null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('45', 'Gennady.Martyushov', 'Геннадий Мартюшов', 'Gennady.Martyushov@billing.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('47', 'Sergey.Semka', 'Сергей Семка', 'Sergey.Semka@billing.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('48', 'Egor.Vershinin', 'Егор Вершинин', 'Egor.Vershinin@billing.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, 'rsujwMdGChVRfknHVfAJ3Biz29MNyFd1owx3FUP64tAZC42I2pcdQh2lFGLO', null, '2016-07-31 02:14:44', null);
INSERT INTO "public"."wog_users" VALUES ('49', 'roman.pyatyshev', 'Роман Пятышев', 'roman.pyatyshev@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('50', 'denis.lykov', 'Денис Лыков', 'denis.lykov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('52', 'Valentin.Kovalchuk', 'Валентин Ковальчук', 'Valentin.Kovalchuk@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('53', 'mikhail.pavlov', 'Михаил Павлов', 'mikhail.pavlov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('54', 'anna.y.aleshina', 'Анна Алешина', 'anna.y.aleshina@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('55', 'alexander.surkov', 'Александр Сурков', 'alexander.surkov@Megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('56', 'sergey.gomzyakov', 'Сергей Гомзяков', 'sergey.gomzyakov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('57', 'yana.baranova', 'Яна Баранова', 'yana.baranova@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('58', '', '-=GoodWin=-', null, null, '2', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('59', 'dmitry.v.tarasov', 'Дмитрий Тарасов', 'dmitry.v.tarasov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('60', 'ruslan.kazimukhometo', 'Руслан Казимухометов', 'ruslan.kazimukhometo@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('61', 'artem.trikashny', 'Артем Трикашный', 'artem.trikashny@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('62', 'svetlana.a.kuznetsova', 'Светлана Кузнецова', 'svetlana.a.kuznetsova@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('63', 'evgeny.fomenko', 'Евгений Фоменко', 'evgeny.fomenko@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('64', 'Irina.Imaykina', 'Ирина Имайкина', 'Irina.Imaykina@megafon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('65', 'grigory.osipenkov', 'Григорий Осипенков', 'grigory.osipenkov@MegaFon.ru', '$2y$10$Iwe6HiQA2RD67Bi6ZAfyreLTuq45Ni5kmHVeyfZPjSAjp1m1ozh/G', '1', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('66', null, 'M-Team', null, null, '2', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('67', null, 'Я Команда Миру-Мир ПС', null, null, '2', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('68', null, 'VeryFine', null, null, '2', '1', null, null, null, null, null, null, null);
INSERT INTO "public"."wog_users" VALUES ('69', null, 'Vyuacheslav', 'Vyacjeslav.Sitnikov@megafon.ru', '$2y$10$mkVLQ69UWlfPeu933N2ceu.wJLbTtDTJzTpRHfO.NCe4SAv5YpYL6', '1', '1', null, null, null, null, '2016-07-30 08:43:50', '2016-07-30 08:43:50', null);
INSERT INTO "public"."wog_users" VALUES ('70', null, 'den', 'denis.lykov@megafon.ru', '$2y$10$BZZK0RLqtzSDPrk6aVSeROmsUr3Por/yGOkCA11Wp4Yl6UAp9ivVe', '1', '1', null, null, null, null, '2016-07-31 03:08:17', '2016-07-31 03:08:17', null);

-- ----------------------------
-- Table structure for wog_UserSkill
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_UserSkill";
CREATE TABLE "public"."wog_UserSkill" (
"id" int4 DEFAULT nextval('"wog_UserSkill_id_seq"'::regclass) NOT NULL,
"userId" int4 NOT NULL,
"skillId" int4 NOT NULL,
"valueUser" int4 NOT NULL,
"valueExpert" int4,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_UserSkill
-- ----------------------------
INSERT INTO "public"."wog_UserSkill" VALUES ('1', '7', '1', '4', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('3', '7', '4', '3', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('4', '7', '5', '2', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('5', '7', '6', '2', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('7', '2', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('8', '3', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('9', '5', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('10', '6', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('12', '8', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('13', '9', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('14', '10', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('15', '16', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('16', '17', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('17', '18', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('18', '19', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('19', '20', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('20', '21', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('21', '22', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('22', '23', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('23', '24', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('24', '25', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('25', '26', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('26', '27', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('27', '28', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('28', '30', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('29', '32', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('30', '33', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('31', '34', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('32', '35', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('33', '36', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('34', '37', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('35', '38', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('36', '39', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('37', '40', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('38', '42', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('39', '43', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('40', '45', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('41', '47', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('42', '48', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('43', '49', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('44', '50', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('45', '52', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('46', '53', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('47', '54', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('48', '55', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('49', '56', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('50', '57', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('51', '59', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('52', '60', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('53', '61', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('54', '62', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('55', '63', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('56', '64', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('57', '65', '1', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('58', '2', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('59', '3', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('60', '5', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('61', '6', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('63', '8', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('64', '9', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('65', '10', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('66', '16', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('67', '17', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('68', '18', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('69', '19', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('70', '20', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('71', '21', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('72', '22', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('73', '23', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('74', '24', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('75', '25', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('76', '26', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('77', '27', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('78', '28', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('79', '30', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('80', '32', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('81', '33', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('82', '34', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('83', '35', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('84', '36', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('85', '37', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('86', '38', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('87', '39', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('88', '40', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('89', '42', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('90', '43', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('91', '45', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('92', '47', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('93', '48', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('94', '49', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('95', '50', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('96', '52', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('97', '53', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('98', '54', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('99', '55', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('100', '56', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('101', '57', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('102', '59', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('103', '60', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('104', '61', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('105', '62', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('106', '63', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('107', '64', '4', '5', null, null, null, null);
INSERT INTO "public"."wog_UserSkill" VALUES ('108', '65', '4', '5', null, null, null, null);

-- ----------------------------
-- Table structure for wog_UserStatus
-- ----------------------------
DROP TABLE IF EXISTS "public"."wog_UserStatus";
CREATE TABLE "public"."wog_UserStatus" (
"id" int4 DEFAULT nextval('"wog_UserStatus_id_seq"'::regclass) NOT NULL,
"name" varchar(255) COLLATE "default" NOT NULL,
"created_at" timestamp,
"updated_at" timestamp,
"deleted_at" timestamp
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of wog_UserStatus
-- ----------------------------
INSERT INTO "public"."wog_UserStatus" VALUES ('1', 'В Игре', null, null, null);
INSERT INTO "public"."wog_UserStatus" VALUES ('2', 'Game over', null, null, null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "public"."wog_Action_id_seq" OWNED BY "wog_Action"."id";
ALTER SEQUENCE "public"."wog_ActionCurrency_id_seq" OWNED BY "wog_ActionCurrency"."id";
ALTER SEQUENCE "public"."wog_ActionTrancaction_id_seq" OWNED BY "wog_ActionTransaction"."id";
ALTER SEQUENCE "public"."wog_Balance_id_seq" OWNED BY "wog_Balance"."id";
ALTER SEQUENCE "public"."wog_Currency_id_seq" OWNED BY "wog_Currency"."id";
ALTER SEQUENCE "public"."wog_CurrencyTrancaction_id_seq" OWNED BY "wog_CurrencyTransaction"."id";
ALTER SEQUENCE "public"."wog_CurrencyTypes_id_seq" OWNED BY "wog_CurrencyTypes"."id";
ALTER SEQUENCE "public"."wog_jobs_id_seq" OWNED BY "wog_jobs"."id";
ALTER SEQUENCE "public"."wog_MailTemplate_id_seq" OWNED BY "wog_MailTemplate"."id";
ALTER SEQUENCE "public"."wog_pages_id_seq" OWNED BY "wog_pages"."id";
ALTER SEQUENCE "public"."wog_Quest_id_seq" OWNED BY "wog_Quest"."id";
ALTER SEQUENCE "public"."wog_Role_id_seq" OWNED BY "wog_Role"."id";
ALTER SEQUENCE "public"."wog_RoleUser_id_seq" OWNED BY "wog_RoleUser"."id";
ALTER SEQUENCE "public"."wog_Skill_id_seq" OWNED BY "wog_Skill"."id";
ALTER SEQUENCE "public"."wog_TeamUser_id_seq" OWNED BY "wog_TeamUser"."id";
ALTER SEQUENCE "public"."wog_User_id_seq" OWNED BY "wog_users"."id";
ALTER SEQUENCE "public"."wog_UserProfile_id_seq" OWNED BY "wog_UserProfile"."id";
ALTER SEQUENCE "public"."wog_UserQuest_id_seq" OWNED BY "wog_UserQuest"."id";
ALTER SEQUENCE "public"."wog_UserQuestStatus_id_seq" OWNED BY "wog_UserQuestStatus"."id";
ALTER SEQUENCE "public"."wog_UserSkill_id_seq" OWNED BY "wog_UserSkill"."id";
ALTER SEQUENCE "public"."wog_UserStatus_id_seq" OWNED BY "wog_UserStatus"."id";

-- ----------------------------
-- Primary Key structure for table wog_Action
-- ----------------------------
ALTER TABLE "public"."wog_Action" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_ActionCurrency
-- ----------------------------
ALTER TABLE "public"."wog_ActionCurrency" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_ActionTransaction
-- ----------------------------
ALTER TABLE "public"."wog_ActionTransaction" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_Balance
-- ----------------------------
ALTER TABLE "public"."wog_Balance" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table wog_Currency
-- ----------------------------
ALTER TABLE "public"."wog_Currency" ADD UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table wog_Currency
-- ----------------------------
ALTER TABLE "public"."wog_Currency" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_CurrencyTransaction
-- ----------------------------
ALTER TABLE "public"."wog_CurrencyTransaction" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table wog_CurrencyTypes
-- ----------------------------
ALTER TABLE "public"."wog_CurrencyTypes" ADD UNIQUE ("name");
ALTER TABLE "public"."wog_CurrencyTypes" ADD UNIQUE ("unit");

-- ----------------------------
-- Primary Key structure for table wog_CurrencyTypes
-- ----------------------------
ALTER TABLE "public"."wog_CurrencyTypes" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table wog_jobs
-- ----------------------------
CREATE INDEX "jobs_queue_reserved_reserved_at_index" ON "public"."wog_jobs" USING btree (queue, reserved, reserved_at);

-- ----------------------------
-- Primary Key structure for table wog_jobs
-- ----------------------------
ALTER TABLE "public"."wog_jobs" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table wog_MailTemplate
-- ----------------------------
ALTER TABLE "public"."wog_MailTemplate" ADD UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table wog_MailTemplate
-- ----------------------------
ALTER TABLE "public"."wog_MailTemplate" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table wog_pages
-- ----------------------------
ALTER TABLE "public"."wog_pages" ADD UNIQUE ("title");

-- ----------------------------
-- Primary Key structure for table wog_pages
-- ----------------------------
ALTER TABLE "public"."wog_pages" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table wog_password_resets
-- ----------------------------
CREATE INDEX "password_resets_email_index" ON "public"."wog_password_resets" USING btree (email);
CREATE INDEX "password_resets_token_index" ON "public"."wog_password_resets" USING btree (token);

-- ----------------------------
-- Primary Key structure for table wog_Quest
-- ----------------------------
ALTER TABLE "public"."wog_Quest" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table wog_Role
-- ----------------------------
ALTER TABLE "public"."wog_Role" ADD UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table wog_Role
-- ----------------------------
ALTER TABLE "public"."wog_Role" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table wog_RoleUser
-- ----------------------------
CREATE INDEX "roleuser_roleid_index" ON "public"."wog_RoleUser" USING btree (roleId);
CREATE INDEX "roleuser_userid_index" ON "public"."wog_RoleUser" USING btree (userId);

-- ----------------------------
-- Primary Key structure for table wog_RoleUser
-- ----------------------------
ALTER TABLE "public"."wog_RoleUser" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table wog_Skill
-- ----------------------------
ALTER TABLE "public"."wog_Skill" ADD UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table wog_Skill
-- ----------------------------
ALTER TABLE "public"."wog_Skill" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_TeamUser
-- ----------------------------
ALTER TABLE "public"."wog_TeamUser" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_UserProfile
-- ----------------------------
ALTER TABLE "public"."wog_UserProfile" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_UserQuest
-- ----------------------------
ALTER TABLE "public"."wog_UserQuest" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_UserQuestStatus
-- ----------------------------
ALTER TABLE "public"."wog_UserQuestStatus" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table wog_users
-- ----------------------------
ALTER TABLE "public"."wog_users" ADD UNIQUE ("psLogin");
ALTER TABLE "public"."wog_users" ADD UNIQUE ("login");
ALTER TABLE "public"."wog_users" ADD UNIQUE ("name");
ALTER TABLE "public"."wog_users" ADD UNIQUE ("email");

-- ----------------------------
-- Primary Key structure for table wog_users
-- ----------------------------
ALTER TABLE "public"."wog_users" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_UserSkill
-- ----------------------------
ALTER TABLE "public"."wog_UserSkill" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table wog_UserStatus
-- ----------------------------
ALTER TABLE "public"."wog_UserStatus" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Key structure for table "public"."wog_Action"
-- ----------------------------
ALTER TABLE "public"."wog_Action" ADD FOREIGN KEY ("questId") REFERENCES "public"."wog_Quest" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_ActionCurrency"
-- ----------------------------
ALTER TABLE "public"."wog_ActionCurrency" ADD FOREIGN KEY ("currencyId") REFERENCES "public"."wog_Currency" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_ActionCurrency" ADD FOREIGN KEY ("actionId") REFERENCES "public"."wog_Action" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_ActionTransaction"
-- ----------------------------
ALTER TABLE "public"."wog_ActionTransaction" ADD FOREIGN KEY ("actionId") REFERENCES "public"."wog_Action" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_ActionTransaction" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_ActionTransaction" ADD FOREIGN KEY ("mailTemplateId") REFERENCES "public"."wog_MailTemplate" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_Balance"
-- ----------------------------
ALTER TABLE "public"."wog_Balance" ADD FOREIGN KEY ("currencyId") REFERENCES "public"."wog_Currency" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_Balance" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_Currency"
-- ----------------------------
ALTER TABLE "public"."wog_Currency" ADD FOREIGN KEY ("currencyTypesId") REFERENCES "public"."wog_CurrencyTypes" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_Currency" ADD FOREIGN KEY ("roleId") REFERENCES "public"."wog_Role" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_CurrencyTransaction"
-- ----------------------------
ALTER TABLE "public"."wog_CurrencyTransaction" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_CurrencyTransaction" ADD FOREIGN KEY ("currencyId") REFERENCES "public"."wog_Currency" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_CurrencyTransaction" ADD FOREIGN KEY ("actionCurrencyId") REFERENCES "public"."wog_ActionCurrency" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_CurrencyTransaction" ADD FOREIGN KEY ("actionTransactionId") REFERENCES "public"."wog_ActionTransaction" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_MailTemplate"
-- ----------------------------
ALTER TABLE "public"."wog_MailTemplate" ADD FOREIGN KEY ("actionId") REFERENCES "public"."wog_Action" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_Quest"
-- ----------------------------
ALTER TABLE "public"."wog_Quest" ADD FOREIGN KEY ("roleId") REFERENCES "public"."wog_Role" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_RoleUser"
-- ----------------------------
ALTER TABLE "public"."wog_RoleUser" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_RoleUser" ADD FOREIGN KEY ("roleId") REFERENCES "public"."wog_Role" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_Skill"
-- ----------------------------
ALTER TABLE "public"."wog_Skill" ADD FOREIGN KEY ("currencyId") REFERENCES "public"."wog_Currency" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_TeamUser"
-- ----------------------------
ALTER TABLE "public"."wog_TeamUser" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_TeamUser" ADD FOREIGN KEY ("teamUserId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_UserProfile"
-- ----------------------------
ALTER TABLE "public"."wog_UserProfile" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_UserQuest"
-- ----------------------------
ALTER TABLE "public"."wog_UserQuest" ADD FOREIGN KEY ("userQuestStatusId") REFERENCES "public"."wog_Quest" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_UserQuest" ADD FOREIGN KEY ("questId") REFERENCES "public"."wog_Quest" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_UserQuest" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_users"
-- ----------------------------
ALTER TABLE "public"."wog_users" ADD FOREIGN KEY ("userStatusId") REFERENCES "public"."wog_UserStatus" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."wog_UserSkill"
-- ----------------------------
ALTER TABLE "public"."wog_UserSkill" ADD FOREIGN KEY ("userId") REFERENCES "public"."wog_users" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."wog_UserSkill" ADD FOREIGN KEY ("skillId") REFERENCES "public"."wog_Skill" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
