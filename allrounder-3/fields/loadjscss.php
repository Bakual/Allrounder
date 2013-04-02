<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * LoadJsCSS Field class for the Allrounder Template to load custom Javascript and CSS
 *
 * @package		Allroudner
 * @since		4.0
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
	 * Method to get the field label markup.
	 *
	 * @return  string  The field label markup.
	 *
	 * @since   11.1
	 */
	protected function getLabel()
	{
		$label = parent::getLabel();
		if (!JPluginHelper::isEnabled('system', 'lessallrounder'))
		{
			$label .= '<br />';
			$label .= JText::_('TPL_ALLROUNDER_PLUGIN_NOT_PUBLISHED');
		}
		return $label;
	}

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
		JHtml::Script('templates/allrounder-3/js/jscolor/jscolor.js');
		JHtml::Stylesheet('templates/allrounder-3/css/params.css');
		$html	= '<input type="hidden" name="'.$this->name.'" id="'.$this->id.'" value="1" />';
		return $html;
	}
}
