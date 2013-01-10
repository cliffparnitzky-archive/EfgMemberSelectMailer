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

/**
 * Table tl_efgmemberselectmailer
 */
$GLOBALS['TL_DCA']['tl_efgmemberselectmailer'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'           => 'Table',
		'enableVersioning'        => true
	),

	// List
	'list' => array
	(
		'sorting' => array (
			'panelLayout'           => 'filter,limit',
			'mode'                  => 2,
			'disableGrouping'       => true
		),
		'label' => array
		(
			'fields'                => array('form:tl_form.title'),
			'label_callback'        => array('tl_efgmemberselectmailer', 'addIcon')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__' => array('form_use_send_mail_check', 'mailTextType'),
		'default'      => '{config_legend},form,form_field_member,form_use_send_mail_check;{email_legend},sender,senderName,mailCopy,mailBlindCopy;{text_legend},mailSubject,mailTextType;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'form_use_send_mail_check' => 'form_field_send_mail,form_value_send_mail',
		'mailTextType_text'        => 'mailPlainText',
		'mailTextType_html'        => 'mailHtmlText',
		'mailTextType_text_html'   => 'mailPlainText,mailHtmlText'
	),

	// Fields
	'fields' => array
	(
		'form' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form'],
			'exclude'               => true,
			'inputType'             => 'select',
			'foreignKey'            => 'tl_form.title',
			'filter'                => true,
			'eval'                  => array('mandatory'=>true, 'unique'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50', 'submitOnChange'=>true)
		),
		'form_field_member' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_field_member'],
			'exclude'               => true,
			'inputType'             => 'select',
			'options_callback'      => array('tl_efgmemberselectmailer', 'getFormMemberFields'),
			'filter'                => true,
			'eval'                  => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50')
		),
		'form_use_send_mail_check' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_use_send_mail_check'],
			'exclude'               => true,
			'inputType'             => 'checkbox',
			'filter'                => true,
			'eval'                  => array('submitOnChange'=>true, 'tl_class'=>'w50 clr')
		),
		'form_field_send_mail' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_field_send_mail'],
			'exclude'               => true,
			'inputType'             => 'select',
			'options_callback'      => array('tl_efgmemberselectmailer', 'getFormSendMailFields'),
			'filter'                => true,
			'eval'                  => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50 clr')
		),
		'form_value_send_mail' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['form_value_send_mail'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('mandatory'=>true, 'tl_class'=>'w50')
		),
		'sender' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['sender'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('mandatory'=>true, 'rgxp' => 'email','maxlength'=>128, 'tl_class'=>'w50')
		),
		'senderName' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['senderName'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('rgxp' => 'extnd','maxlength'=>128, 'tl_class'=>'w50')
		),
		'mailCopy' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailCopy'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('rgxp' => 'emailList','maxlength'=>255, 'tl_class'=>'w50')
		),
		'mailBlindCopy' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailBlindCopy'],
			'exclude'               => true,
			'inputType'             => 'text',
			'eval'                  => array('rgxp' => 'emailList','maxlength'=>255, 'tl_class'=>'w50')
		),
		'mailSubject' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailSubject'],
			'exclude'               => true,
			'inputType'             => 'text',
			'reference'             => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags'],
			'eval'                  => array('mandatory'=>true, 'rgxp' => 'extnd','maxlength'=>512, 'tl_class'=>'long', 'helpwizard'=>true)
		),
		'mailTextType' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType'],
			'default'               => 'text', 
			'exclude'               => true,
			'inputType'             => 'select',
			'options'               => array('text', 'html', 'text_html'),
			'reference'             => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailTextType'],
			'eval'                  => array('mandatory'=>true, 'includeBlankOption'=>false, 'tl_class'=>'w50 clr', 'submitOnChange'=>true)
		),
		'mailPlainText' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailPlainText'],
			'exclude'               => true,
			'inputType'             => 'textarea',
			'reference'             => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags'],
			'eval'                  => array('mandatory'=>true, 'tl_class'=>'clr', 'helpwizard'=>true)
		),
		'mailHtmlText' => array
		(
			'label'                 => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['mailHtmlText'],
			'exclude'               => true,
			'inputType'             => 'textarea',
			'reference'             => &$GLOBALS['TL_LANG']['tl_efgmemberselectmailer']['help']['inserttags'],
			'eval'                  => array('mandatory'=>true, 'tl_class'=>'clr', 'rte'=>'tinyMCE', 'helpwizard'=>true)
		),
	)
);

/**
 * Class tl_efgmemberselectmailer
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * PHP version 5
 * @copyright  Cliff Parnitzky 2012
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class tl_efgmemberselectmailer extends Backend
{
	/**
	 * Add an image to each record
	 * @param array
	 * @param string
	 * @return string
	 */
	public function addIcon($row, $label)
	{
		return sprintf('<div class="list_icon" style="background-image:url(\'system/themes/%s/images/form.gif\');">%s</div>', $this->getTheme(), $label);
	}
	
	/**
	 * Returns the member fields of the given form
	 */
	public function getFormMemberFields(DataContainer $dc)
	{
		return $this->getFormFields($dc->activeRecord->form, array('efgMemberSelect'));
	}
	
	/**
	 * Returns the send mail fields if the given form
	 */
	public function getFormSendMailFields(DataContainer $dc)
	{
		return $this->getFormFields($dc->activeRecord->form, array('radio', 'checkbox', 'hidden'));
	}
	
	/**
	 * Returns the fields of the given types from the given form
	 */
	public function getFormFields($formId, $arrTypes)
	{
		$obForm = $this->Database->prepare("SELECT * FROM tl_form WHERE id = ?")
										->execute($formId);

		$dca = 'fd_' . str_replace('-', '_', standardize($obForm->title));
							
		if (strlen($obForm->formID)) {
			$dca = 'fd_' . $obForm->formID;
		}
		
		$this->loadDataContainer($dca);
		
		$arrReturn = array();
		
		if (count($GLOBALS['TL_DCA']['tl_formdata']['fields']) > 0)
		{
			foreach ($GLOBALS['TL_DCA']['tl_formdata']['fields'] as $k => $v)
			{
				if (strlen($GLOBALS['TL_DCA']['tl_formdata']['fields'][$k]['ff_id'])> 0 && in_array($GLOBALS['TL_DCA']['tl_formdata']['fields'][$k]['inputType'], $arrTypes))
				{
					$arrReturn[$k] = (strlen($GLOBALS['TL_DCA']['tl_formdata']['fields'][$k]['label'][0]) ? $GLOBALS['TL_DCA']['tl_formdata']['fields'][$k]['label'][0] . ' [' . $k . ']' : $k);
				}
			}
		}
		
		return $arrReturn;
	}
}

?>