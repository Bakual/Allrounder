<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JFormHelper::loadFieldClass('radio');
/**
 * CustomRadio Field class for the Allrounder Template
 *
 * @package		Allroudner
 * @since		4.0
 */
class JFormFieldCustomradio extends JFormFieldRadio
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type		= 'Customradio';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
		$html	= parent::getInput();

		return $html;
	}
}
