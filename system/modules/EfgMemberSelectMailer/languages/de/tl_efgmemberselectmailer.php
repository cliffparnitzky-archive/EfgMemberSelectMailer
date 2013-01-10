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
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form']                     = array('Formular', 'Bitte wählen Sie das Formular aus, für das E-Mails versendet werden sollen.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_field_member']        = array('Formularfeld zur Mitgliederauswahl', 'Bitte wählen Sie das Formularfeld aus, welches die Mitgliederauswahl zur Verfügung stellt.<br/><b>WICHTIG:</b> Das Feld muss vom Typ <i>"' . $GLOBALS['TL_LANG']['FFL']['efgMemberSelect'][0] . '"</i> sein.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_use_send_mail_check'] = array('Absenden der E-Mail bestätigen', 'Bitte wählen Sie ob ihr Formular ein Feld zur Bestätigung der Absendung der E-Mail verwendet.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_field_send_mail']     = array('Formularfeld zum Bestätigen des E-Mail Versands', 'Bitte wählen Sie das Formularfeld aus, welches zum Bestätigen des E-Mail Versands genutzt wird.<br/><b>WICHTIG:</b> Das Feld muss vom Typ <i>"' . $GLOBALS['TL_LANG']['FFL']['radio'][0] . '"</i> oder <i>"' . $GLOBALS['TL_LANG']['FFL']['checkbox'][0] . '"</i> oder <i>"' . $GLOBALS['TL_LANG']['FFL']['hidden'][0] . '"</i> sein.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_value_send_mail']     = array('Gültiger Wert für den Versand der E-Mail', 'Bitte geben den Wert an, den das Formularfeld zum Bestätigen des E-Mail Versands enthalten muss, um das Versenden auszuführen.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['sender']                   = array('Absenderadresse', 'Bitte geben Sie die E-Mail-Adresse für den Absender ein.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['senderName']               = array('Absendername', 'Bitte geben Sie einen individuellen Namen für den Absender ein.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailCopy']                 = array('Kopie an (CC)', 'Bitte geben Sie eine Liste kommagetrennter E-Mail-Adressen an, die eine Kopie der E-Mail erhalten sollen.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailBlindCopy']            = array('Blindkopie an (BCC)', 'Bitte geben Sie eine Liste kommagetrennter E-Mail-Adressen an, die eine Blindkopie der E-Mail erhalten sollen.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailSubject']              = array('E-Mail Betreff', 'Bitte geben Sie den Betreff für die E-Mail an.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']             = array('E-Mail Texttyp', 'Bitte geben Sie an mit welchen Texttypen die E-Mail versendet werden soll.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailPlainText']            = array('Plain Text', 'Bitte geben Sie den Plain Text für die E-Mail an.');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailHtmlText']             = array('HTML Text', 'Bitte geben Sie den HTML Text für die E-Mail an.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['config_legend'] = 'Konfiguration';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['email_legend']  = 'E-Mail-Einstellungen';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['text_legend']   = 'E-Mail Texte';

/**
 * E-mail text types
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']['text'] = 'Text';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']['html'] = 'HTML';
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType']['text_html'] = 'Text und HTML';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['new']    = array('Neue Konfiguration', 'Eine neue Konfiguration für E-Mails anlegen');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['show']   = array('Konfigurationsdetails', 'Details der Konfiguration ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['edit']   = array('Konfiguration bearbeiten', 'Konfiguration ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['copy']   = array('Konfiguration duplizieren', 'Konfiguration ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['delete'] = array('Konfiguration löschen', 'Konfiguration ID %s löschen');

/**
 * help messages
 */
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['headline'] = array('<u>Inserttags</u>', 'Folgende Inserttags können verwendet werden:');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['member']   = array('<i>{{member::*}}</i>', 'Dieses Tag liefert alle Werte des aktuellen Mitglieds (ersetzen Sie * mit einem beliebigen Attribut des Mitglieds, z.B. <i>firstname</i> oder <i>company</i>, das Attribut <i>password</i> ist nicht erlaubt).');
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['form']     = array('<i>{{form::*}}</i>', 'Dieses Tag liefert alle Werte des Formulars (ersetzen Sie * mit einem beliebigen Attribut des Formulars, z.B. <i>id</i> oder <i>title</i>).'); 
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['sender']   = array('<i>{{sender::*}}</i>', 'Dieses Tag liefert die Einstellungen des Absenders (ersetzen Sie * mit einem der folgenden Attribute des Absenders: <i>email</i>, <i>name</i>).'); 
$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags']['post']     = array('<i>{{post::*}}</i>', 'Dieses Tag liefert alle übermittelten Feldwerte des Formulars (ersetzen Sie * mit einem beliebigen Feldnamen des Formulars).'); 

?>