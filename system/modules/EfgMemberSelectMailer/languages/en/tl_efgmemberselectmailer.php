<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2011 Cliff Parnitzky
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
 * @copyright  Cliff Parnitzky 2012
 * @author     Cliff Parnitzky
 * @package    EfgMemberSelectMailer
 * @license    LGPL
 */

$this->loadLanguageFile('tl_form_field');
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form']                     = array('Form', 'Please select the form that should send the e-mails.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_field_member']        = array('Form field for members selection', 'Please select the form field, which provides the member selection.<br/><b>IMPORTANT:</b> The field must be of type <i>"' . $GLOBALS['TL_LANG']['FFL']['efgMemberSelect'][0] . '"</i>.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_use_send_mail_check'] = array('Confirm sending the e-mail', 'Please select whether your form uses a field to confirm the sending of the e-mail.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_field_send_mail']     = array('Form field to confirm the e-mail sending', 'Please select the form field, which is used to confirm sending the e-mail<br/><b>IMPORTANT:</b> The field must be of type <i>"' . $GLOBALS['TL_LANG']['FFL']['radio'][0] . '"</i> or <i>"' . $GLOBALS['TL_LANG']['FFL']['checkbox'][0] . '"</i> or <i>"' . $GLOBALS['TL_LANG']['FFL']['hidden'][0] . '"</i>.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_value_send_mail']     = array('Valid value for sending the e-mail', 'Please enter the value, the form field must contain, to execute sending the e-mail.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['sender']                   = array('Senderaddress', 'Please enter the e-mail address for the sender.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['senderName']               = array('Sendername', 'Please enter a individual name for the sender.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailCopy']                 = array('Copy to (CC)', 'Please enter a comma-separated list of e-mail addresses that should receive a copy of the e-mail.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailBlindCopy']            = array('Blind copy (BCC)', 'Please enter a comma-separated list of e-mail addresses that should receive a blind copy of the e-mail.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailSubject']              = array('E-mail subject', 'Please enter the subject for the e-mail.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']             = array('E-mail text type', 'Please select the text type that should be used or sending the email.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailPlainText']            = array('Plain text', 'Please enter the plain text for the e-mail.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailHtmlText']             = array('HTML text', 'Please enter the HTML text for the e-mail.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['config_legend'] = 'Configuration';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['email_legend']  = 'E-mail settings';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['text_legend']   = 'E-mail texts';

/**
 * E-mail text types
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']['text'] = 'Text';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']['html'] = 'HTML';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']['text_html'] = 'Text and HTML';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['new']    = array('New configuration', 'Create a new configuration for e-mails');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['show']   = array('Configuration details', 'Show the details of configuration ID %s');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['edit']   = array('Edit configuration', 'Edit configuration ID %s');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['copy']   = array('Duplicate configuration', 'Duplicate configuration ID %s');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['delete'] = array('Delete configuration', 'Delete configuration ID %s');

/**
 * help messages
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['headline'] = array('<u>Inserttags</u>', 'The following inserttags could be used:');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['member']   = array('<i>{{member::*}}</i>', 'This tag returns all values of the current member (replace * with any attribute of the member, for example <i>firstname</i> or <i>company</i>, the attribute <i>password</i> is not allowed).');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['form']     = array('<i>{{form::*}}</i>', 'This tag returns all values of the form (replace * with any attribute of the form, for example <i>id</i> or <i>title</i>).'); 
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['sender']   = array('<i>{{sender::*}}</i>', 'This tag returns the settings of the sender (replace * with one of the following attributes of the sender: <i>email</i>, <i>name</i>).'); 
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['post']     = array('<i>{{post::*}}</i>', 'This tag returns all submitted field values of the form (replace * with any field name of the form).'); 

?>