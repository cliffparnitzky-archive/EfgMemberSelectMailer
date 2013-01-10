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

class EfgMemberSelectMailer extends Frontend {
	/**
	 * Check if mails should be send and execute it.
	 */
	public function processEfgFormData($arrSubmitted, $arrFiles, $intOldId, $arrForm) {
		$config = $this->Database->prepare("SELECT DISTINCT * FROM tl_efgmemberselectmailer WHERE form = ?")
												 ->execute(intval($arrForm[id]));
		if ($config->numRows) {
			if (!$config->form_use_send_mail_check || (strlen($config->form_field_send_mail) > 0 && $arrSubmitted[$config->form_field_send_mail] == $config->form_value_send_mail)) {
				$memberIds = $arrSubmitted[$config->form_field_member];
				if (is_array($memberIds)) {
					$memberIds = implode(", ", $memberIds);
				};
				
				if (strlen($memberIds) > 0) {
					$member = $this->Database->prepare("SELECT * FROM tl_member WHERE id IN (" . $memberIds . ")")
												 ->execute();
					while ($member->next()) {
						$this->sendMail($member, $arrForm, $config, $arrSubmitted);
					}
				}
			}
		}
		
		return $arrSubmitted;
	}
	
	/**
	 * Sending the email
	 */
	private function sendMail($member, $form, $config, $post) {
		// first check if required extension 'ExtendedEmailRegex' is installed
		if (!in_array('extendedEmailRegex', $this->Config->getActiveModules())) {
			$this->log('EfgMemberSelectMailer: Extension "ExtendedEmailRegex" is required!', 'EfgMemberSelectMailer sendMail()', TL_ERROR);
			return false;
		}
		$this->import('ExtendedEmailRegex', 'Base');
		
		$objEmail = new Email();
		$objEmail->logFile = 'EfgMemberSelectMailer.log';
		$objEmail->from = $config->sender;
		if (strlen($config->senderName) > 0) {
			$objEmail->fromName = $config->senderName;
		}
		
		$objEmail->subject = $this->replaceEmailInsertTags($config->mailSubject, $member, $form, $config, $post);
		
		if ($config->mailTextType == 'text') {
			$objEmail->text = $this->replaceEmailInsertTags($config->mailPlainText, $member, $form, $config, $post);
		} else if ($config->mailTextType == 'html') {
			$objEmail->html = $this->replaceEmailInsertTags($config->mailHtmlText, $member, $form, $config, $post);
			$objEmail->text = $this->transformEmailHtmlToText($objEmail->html);
		} else {
			$objEmail->text = $this->replaceEmailInsertTags($config->mailPlainText, $member, $form, $config, $post);
			$objEmail->html = $this->replaceEmailInsertTags($config->mailHtmlText, $member, $form, $config, $post);
		}
		
		try {
			$emailTo = $member->email;
			
			if ($GLOBALS['TL_CONFIG']['efgMemberSelectMailerDeveloperMode']) {
				$emailTo = $GLOBALS['TL_CONFIG']['efgMemberSelectMailerDeveloperModeEmail'];
			} else {
				if (strlen($config->mailCopy) > 0) {
					$emailCC = ExtendedEmailRegex::getEmailsFromList($config->mailCopy);
					$objEmail->sendCc($emailCC);
				}
				
				if (strlen($config->mailBlindCopy) > 0) {
					$emailBCC = ExtendedEmailRegex::getEmailsFromList($config->mailBlindCopy);
					$objEmail->sendBcc($emailBCC);
				}
				
				$emailTo = $member->email;
			}
			return $objEmail->sendTo($emailTo);
		} catch (Swift_RfcComplianceException $e) {
			$this->log("Mail could not be send: " . $e->getMessage(), "EfgMemberSelectMailer sendMail()", TL_ERROR);
			return false;
		}
	}	
	/**
	 * Replaces all insert tags for the email text.
	 */
	private function replaceEmailInsertTags ($text, $member, $form, $config, $post) {
		$textArray = preg_split('/\{\{([^\}]+)\}\}/', $text, -1, PREG_SPLIT_DELIM_CAPTURE);
		
		for ($count = 0; $count < count($textArray); $count++) {
			$parts = explode("::", $textArray[$count]);
			if ($parts[0] == "member") {
				if ($parts[1] == "password") {
					$textArray[$count] = '';
				} else if ($parts[1] == "dateOfBirth") {
					$textArray[$count] = date($GLOBALS['TL_CONFIG']['dateFormat'], $member->$parts[1]);
				} else if ($parts[1] == "gender") {
					$textArray[$count] = $GLOBALS['TL_LANG']['MSC'][$member->$parts[1]];
				} else if ($parts[1] == "name") {
					$textArray[$count] = $member->firstname . " " . $member->lastname;
				} else {
					$textArray[$count] = $member->$parts[1];
				}
			} else if ($parts[0] == "form") {
				$textArray[$count] = $form[$parts[1]];
			} else if ($parts[0] == "sender") {
				switch ($parts[1]) {
						case 'email': $textArray[$count] = $config->sender; break;
						case 'name': $textArray[$count] = $config->senderName; break;
				} 
			} else if ($parts[0] == "post") {
				$textArray[$count] = $post[$parts[1]];
			} else if ($parts[0] == "user") {
				if (FE_USER_LOGGED_IN) {
					$this->import('FrontendUser', 'User');
					if ($parts[1] == "password") {
						$textArray[$count] = '';
					} else if ($parts[1] == "dateOfBirth") {
						$textArray[$count] = date($GLOBALS['TL_CONFIG']['dateFormat'], $this->User->$parts[1]);
					} else if ($parts[1] == "gender") {
						$textArray[$count] = $GLOBALS['TL_LANG']['MSC'][$this->User->$parts[1]];
					} else if ($parts[1] == "name") {
						$textArray[$count] = $this->User->firstname . " " . $this->User->lastname;
					} else {
						$textArray[$count] = $this->User->$parts[1];
					}
				} 
			}
		}
		
		return implode('', $textArray);
	}
	
	
	/**
	 * Creates the text from the html for the email.
	 */
	private function transformEmailHtmlToText ($emailHtml) {
		$emailText = $emailHtml;
		$emailText = str_replace("</p> ", "\n\n", $emailText);
		$emailText = str_replace("</ul> ", "\n", $emailText);
		$emailText = str_replace(" <li>", " - ", $emailText);
		$emailText = str_replace("</li>", "\n", $emailText);
		$emailText = strip_tags($emailText);
		return $emailText;
	}
}

?>