<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2012-2013
 * @author     Cliff Parnitzky
 * @package    EfgMemberSelectMailer
 * @license    LGPL
 */

$this->loadLanguageFile('tl_form_field');
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerActive']                   = array('Use Member Select-Menu Mailer', 'Please select this option, if you want to use the mailer.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMemberFormField']          = array('Form field for members selection', 'Please select the form field, which provides the member selection.<br/><b>IMPORTANT:</b> The field must be of type <i>"' . $GLOBALS['TL_LANG']['FFL']['efgMemberSelect'][0] . '"</i> or <i>"' . $GLOBALS['TL_LANG']['FFL']['efgMemberHidden'][0] . '"</i>.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailActive']    = array('Confirm sending the e-mail', 'Please select whether your form uses a field to confirm the sending of the e-mail.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailFormField'] = array('Form field to confirm the e-mail sending', 'Please select the form field, which is used to confirm sending the e-mail<br/><b>IMPORTANT:</b> The field must be of type <i>"' . $GLOBALS['TL_LANG']['FFL']['radio'][0] . '"</i> or <i>"' . $GLOBALS['TL_LANG']['FFL']['checkbox'][0] . '"</i> or <i>"' . $GLOBALS['TL_LANG']['FFL']['hidden'][0] . '"</i>.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailValue']     = array('Valid value for sending the e-mail', 'Please enter the value, the form field must contain, to execute sending the e-mail.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSenderEmail']          = array('Senderaddress', 'Please enter the e-mail address for the sender.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSenderName']           = array('Sendername', 'Please enter a individual name for the sender.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailCopy']                 = array('Copy to (CC)', 'Please enter a comma-separated list of e-mail addresses that should receive a copy of the e-mail.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailBlindCopy']            = array('Blind copy (BCC)', 'Please enter a comma-separated list of e-mail addresses that should receive a blind copy of the e-mail.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSubject']              = array('E-mail subject', 'Please enter the subject for the e-mail.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailText']                 = array('E-mail text', 'Please enter the text for the e-mail.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer_legend'] = '(EFG) Member Select-Menu Mailer';

/**
 * help messages
 */
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['headline'] = array('<u>Inserttags</u>', 'The following inserttags could be used:');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['member']   = array('<i>{{member::*}}</i>', 'This tag returns all values of the current member (replace * with any attribute of the member, for example <i>firstname</i> or <i>company</i>, the attribute <i>password</i> is not allowed).');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['sender']   = array('<i>{{sender::*}}</i>', 'This tag returns the settings of the sender (replace * with one of the following attributes of the sender: <i>email</i>, <i>name</i>).'); 
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['post']     = array('<i>{{post::*}}</i>', 'This tag returns all submitted field values of the form (replace * with any field name of the form).'); 
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['user']     = array('<i>{{user::*}}</i>', 'This tag returns all field values of the actually logged frontend user (replace * with any field name of the user).'); 
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['ifnew']    = array('<i>{{ifnew::*}}</i>', 'This tag returns a special text, when the submitted form entry is new (initial creation of a new entry).</br></br>Example: <i>{{ifnew}}my special text{{endif}}</i></br></br>Using <i>{{else}}</i> offers the possibility to add an alternative text, if the form entry was edited.</br></br>Example: <i>{{ifnew}}creation info{{else}}edit info{{endif}}</i>'); 

?>