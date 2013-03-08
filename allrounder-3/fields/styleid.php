<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

/**
 * ID Field class for the Allrounder Template
 *
 * @package		Allroudner
 * @since		4.0
 */
class JFormFieldStyleid extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type		= 'Styleid';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
		$class = $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';

		$this->value = (int)$this->form->getValue('id', 0);

		$html	= '<input type="hidden" name="'.$this->name.'" id="'.$this->id.'" value="'
			.$this->value.'"'.$class.' />'; 

		return $html;
	}
}
