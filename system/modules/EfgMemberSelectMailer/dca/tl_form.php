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

// fields
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerActive'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerActive'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerMemberFormField'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMemberFormField'],
	'exclude'               => true,
	'inputType'             => 'select',
	'options_callback'      => array('tl_form_efgmemberselectmailer', 'getFormMemberFields'),
	'filter'                => true,
	'eval'                  => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerConfirmSendMailActive'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailActive'],
	'exclude'               => true,
	'inputType'             => 'checkbox',
	'filter'                => true,
	'eval'                  => array('submitOnChange'=>true, 'tl_class'=>'w50 clr')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerConfirmSendMailFormField'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailFormField'],
	'exclude'               => true,
	'inputType'             => 'select',
	'options_callback'      => array('tl_form_efgmemberselectmailer', 'getFormSendMailFields'),
	'filter'                => true,
	'eval'                  => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50 clr')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerConfirmSendMailValue'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerConfirmSendMailValue'],
	'exclude'               => true,
	'inputType'             => 'text',
	'eval'                  => array('mandatory'=>true, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerMailSenderEmail'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSenderEmail'],
	'exclude'               => true,
	'inputType'             => 'text',
	'eval'                  => array('mandatory'=>true, 'rgxp' => 'email','maxlength'=>128, 'tl_class'=>'w50 clr')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerMailSenderName'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSenderName'],
	'exclude'               => true,
	'inputType'             => 'text',
	'eval'                  => array('rgxp' => 'extnd','maxlength'=>128, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerMailCopy'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailCopy'],
	'exclude'               => true,
	'inputType'             => 'text',
	'eval'                  => array('rgxp' => 'emailList','maxlength'=>255, 'tl_class'=>'w50 clr')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerMailBlindCopy'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailBlindCopy'],
	'exclude'               => true,
	'inputType'             => 'text',
	'eval'                  => array('rgxp' => 'emailList','maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerMailSubject'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailSubject'],
	'exclude'               => true,
	'inputType'             => 'text',
	'reference'             => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags'],
	'eval'                  => array('mandatory'=>true, 'rgxp' => 'extnd','maxlength'=>512, 'tl_class'=>'long clr', 'helpwizard'=>true)
);
$GLOBALS['TL_DCA']['tl_form']['fields']['efgMemberSelectMailerMailText'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailerMailText'],
	'exclude'               => true,
	'inputType'             => 'textarea',
	'reference'             => &$GLOBALS['TL_LANG']['tl_form']['efgMemberSelectMailer']['help']['inserttags'],
	'eval'                  => array('mandatory'=>true, 'tl_class'=>'clr', 'rte'=>'tinyMCE', 'helpwizard'=>true, 'allowHtml'=>true)
);

// Palettes
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'efgMemberSelectMailerActive';
$GLOBALS['TL_DCA']['tl_form']['palettes']['__selector__'][] = 'efgMemberSelectMailerConfirmSendMailActive';

$GLOBALS['TL_DCA']['tl_form']['palettes']['default'] =  str_replace(array('{expert_legend:hide}'), array('{efgMemberSelectMailer_legend:hide},efgMemberSelectMailerActive;{expert_legend:hide}'), $GLOBALS['TL_DCA']['tl_form']['palettes']['default'] );

// Subpalettes
array_insert($GLOBALS['TL_DCA']['tl_form']['subpalettes'], count($GLOBALS['TL_DCA']['tl_form']['subpalettes']),
	array('efgMemberSelectMailerActive' => 'efgMemberSelectMailerMemberFormField,efgMemberSelectMailerConfirmSendMailActive,efgMemberSelectMailerMailSenderEmail,efgMemberSelectMailerMailSenderName,efgMemberSelectMailerMailCopy,efgMemberSelectMailerMailBlindCopy,efgMemberSelectMailerMailSubject,efgMemberSelectMailerMailText')
);
array_insert($GLOBALS['TL_DCA']['tl_form']['subpalettes'], count($GLOBALS['TL_DCA']['tl_form']['subpalettes']),
	array('efgMemberSelectMailerConfirmSendMailActive' => 'efgMemberSelectMailerConfirmSendMailFormField,efgMemberSelectMailerConfirmSendMailValue')
);

/**
 * Class tl_form_efgmemberselectmailer
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * PHP version 5
 * @copyright  Cliff Parnitzky 2012
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class tl_form_efgmemberselectmailer extends Backend {
	/**
	 * Returns the member fields of the actual form
	 */
	public function getFormMemberFields(DataContainer $dc) {
		return $this->getFormFields($dc->activeRecord->id, array('efgMemberSelect', 'hidden'));
	}
	
	/**
	 * Returns the send mail fields if the actual form
	 */
	public function getFormSendMailFields(DataContainer $dc) {
		return $this->getFormFields($dc->activeRecord->id, array('radio', 'checkbox', 'hidden'));
	}
	
	/**
	 * Returns the fields of the given types from the actual form
	 */
	public function getFormFields($formId, $arrTypes) {
		$this->loadLanguageFile('tl_form_field');
		
		$obFormFields = $this->Database->prepare("SELECT * FROM tl_form_field WHERE pid = ? AND type IN ('" . implode("', '", $arrTypes) . "') ORDER BY label, name")
										->execute($formId);
		
		$arrReturn = array();
		while ($obFormFields->next()) {
			$arrReturn[$obFormFields->name] = ((strlen($obFormFields->label) > 0) ? $obFormFields->label . " [" . $GLOBALS['TL_LANG']['tl_form_field']['name'][0] . ": " . $obFormFields->name . " / " : $obFormFields->name . " [") . $GLOBALS['TL_LANG']['tl_form_field']['type'][0] . ": " . $GLOBALS['TL_LANG']['FFL'][$obFormFields->type][0] . "]";
		}
		return $arrReturn;
	}
}

?>