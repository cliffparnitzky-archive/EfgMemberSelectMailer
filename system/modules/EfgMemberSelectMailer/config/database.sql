-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

--
-- Table `tl_form`
--
CREATE TABLE `tl_form` (
  `efgMemberSelectMailerActive` char(1) NOT NULL default '',
  `efgMemberSelectMailerMemberFormField` varchar(64) NOT NULL default '',
  `efgMemberSelectMailerConfirmSendMailActive` char(1) NOT NULL default '', 
  `efgMemberSelectMailerConfirmSendMailFormField` varchar(64) NOT NULL default '',
  `efgMemberSelectMailerConfirmSendMailValue` varchar(64) NOT NULL default '',
  `efgMemberSelectMailerMailSenderEmail` varchar(128) NOT NULL default '',
  `efgMemberSelectMailerMailSenderName` varchar(128) NOT NULL default '',
  `efgMemberSelectMailerMailCopy` varchar(255) NOT NULL default '',
  `efgMemberSelectMailerMailBlindCopy` varchar(255) NOT NULL default '',
  `efgMemberSelectMailerMailSubject` varchar(512) NOT NULL default '',
  `efgMemberSelectMailerMailText` text NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
