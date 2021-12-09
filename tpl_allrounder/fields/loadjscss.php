<?php
/**
 * @copyright  Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * LoadJsCSS Field class for the Allrounder Template to load custom Javascript and CSS
 *
 * @package  Allroudner
 * @since    4.0
 */
class JFormFieldLoadjscss extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type		= 'Loadjscss';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
		JHtml::Script('templates/allrounder/js/params.js');
		JHtml::Stylesheet('templates/allrounder/css/params.css');

		return '<input type="hidden" name="' . $this->name . '" id="' . $this->id . '" value="1" />';
	}
}
