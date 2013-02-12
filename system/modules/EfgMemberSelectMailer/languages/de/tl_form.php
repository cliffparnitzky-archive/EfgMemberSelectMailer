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
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerActive']                   = array('Mitglieder Select-Menü Mailer verwenden', 'Bitte wählen Sie diese Option, wenn sie den Mailer verwenden wollen.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMemberFormField']          = array('Formularfeld zur Mitgliederauswahl', 'Bitte wählen Sie das Formularfeld aus, welches die Mitgliederauswahl zur Verfügung stellt.<br/><b>WICHTIG:</b> Das Feld muss vom Typ <i>"' . $GLOBALS['TL_LANG']['FFL']['efgMemberSelect'][0] . '"</i> oder <i>"' . $GLOBALS['TL_LANG']['FFL']['efgMemberHidden'][0] . '"</i> sein.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailActive']    = array('Absenden der E-Mail bestätigen', 'Bitte wählen Sie ob ihr Formular ein Feld zur Bestätigung der Absendung der E-Mail verwendet.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailFormField'] = array('Formularfeld zum Bestätigen des E-Mail Versands', 'Bitte wählen Sie das Formularfeld aus, welches zum Bestätigen des E-Mail Versands genutzt wird.<br/><b>WICHTIG:</b> Das Feld muss vom Typ <i>"' . $GLOBALS['TL_LANG']['FFL']['radio'][0] . '"</i> oder <i>"' . $GLOBALS['TL_LANG']['FFL']['checkbox'][0] . '"</i> oder <i>"' . $GLOBALS['TL_LANG']['FFL']['hidden'][0] . '"</i> sein.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailValue']     = array('Gültiger Wert für den Versand der E-Mail', 'Bitte geben den Wert an, den das Formularfeld zum Bestätigen des E-Mail Versands enthalten muss, um das Versenden auszuführen.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSenderEmail']          = array('Absenderadresse', 'Bitte geben Sie die E-Mail-Adresse für den Absender ein.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSenderName']           = array('Absendername', 'Bitte geben Sie einen individuellen Namen für den Absender ein.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailCopy']                 = array('Kopie an (CC)', 'Bitte geben Sie eine Liste kommagetrennter E-Mail-Adressen an, die eine Kopie der E-Mail erhalten sollen.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailBlindCopy']            = array('Blindkopie an (BCC)', 'Bitte geben Sie eine Liste kommagetrennter E-Mail-Adressen an, die eine Blindkopie der E-Mail erhalten sollen.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSubject']              = array('E-Mail Betreff', 'Bitte geben Sie den Betreff für die E-Mail an.');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailText']                 = array('HTML Text', 'Bitte geben Sie den HTML Text für die E-Mail an.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer_legend'] = '(EFG) Mitglieder Select-Menü Mailer';

/**
 * help messages
 */
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['headline'] = array('<u>Inserttags</u>', 'Folgende Inserttags können verwendet werden:');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['member']   = array('<i>{{member::*}}</i>', 'Dieses Tag liefert alle Werte des aktuellen Mitglieds (ersetzen Sie * mit einem beliebigen Attribut des Mitglieds, z.B. <i>firstname</i> oder <i>company</i>, das Attribut <i>password</i> ist nicht erlaubt).');
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['sender']   = array('<i>{{sender::*}}</i>', 'Dieses Tag liefert die Einstellungen des Absenders (ersetzen Sie * mit einem der folgenden Attribute des Absenders: <i>email</i>, <i>name</i>).'); 
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['post']     = array('<i>{{post::*}}</i>', 'Dieses Tag liefert alle übermittelten Feldwerte des Formulars (ersetzen Sie * mit einem beliebigen Feldnamen des Formulars).'); 
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['user']     = array('<i>{{user::*}}</i>', 'Dieses Tag liefert alle Feldwert des aktuell eingeloggten Frontend Benutzers (ersetzen Sie * mit einem beliebigen Feldnamen des Benutzers).'); 
$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags']['ifnew']    = array('<i>{{ifnew::*}}</i>', 'Dieses Tag liefert einen speziellen Text, wennn der abgesendete Formular Eintrag neu ist (initiale Erzeugung einen neuen Eintrags).</br></br>Beispiel: <i>{{ifnew}}mein spezieller Text{{endif}}</i></br></br>Durch die Benutzung von <i>{{else}}</i> gibt es die Möglichkeit alternative Texte enzuzeigen, wenn der Formular Eintrag bearbeitet wurde.</br></br>Beispiel: <i>{{ifnew}}Info wenn neu{{else}}Info wenn bearbeitet{{endif}}</i>'); 

?>