-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

--
-- Table `tl_efgmemberselectmailer`
--
CREATE TABLE `tl_efgmemberselectmailer` (
	`id` int(10) unsigned NOT NULL auto_increment,
	`tstamp` int(10) unsigned NOT NULL default '0',
	`form` int(10) unsigned NOT NULL default '0',
	`form_field_member` varchar(64) NOT NULL default '',
	`form_use_send_mail_check` char(1) NOT NULL default '', 
	`form_field_send_mail` varchar(64) NOT NULL default '',
	`form_value_send_mail` varchar(64) NOT NULL default '',
	`sender` varchar(128) NOT NULL default '',
	`senderName` varchar(128) NOT NULL default '',
	`mailCopy` varchar(255) NOT NULL default '',
	`mailBlindCopy` varchar(255) NOT NULL default '',
	`mailSubject` varchar(512) NOT NULL default '',
	`mailTextType` varchar(10) NOT NULL default '',
	`mailPlainText` text NULL,
	`mailHtmlText` text NULL,
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
