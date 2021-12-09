<?php
/**
 * @copyright  Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Form\FormField;
use Joomla\CMS\HTML\HTMLHelper;

/**
 * LoadJsCSS Field class for the Allrounder Template to load custom Javascript and CSS
 *
 * @package  Allrounder
 * @since    4.0
 */
class JFormFieldLoadjscss extends FormField
{
	/**
	 * The form field type.
	 *
	 * @var        string
	 * @since    4.0
	 */
	protected $type = 'Loadjscss';

	/**
	 * Method to get the field input markup.
	 *
	 * @return    string    The field input markup.
	 * @since    4.0
	 */
	protected function getInput()
	{
		HtmlHelper::script('templates/allrounder/js/params.js');
		HtmlHelper::stylesheet('templates/allrounder/css/params.css');

		return '<input type="hidden" name="' . $this->name . '" id="' . $this->id . '" value="1" />';
	}
}
