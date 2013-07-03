<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JFormHelper::loadFieldClass('list');

/**
 * Font Field class for the Allrounder Template to select from a list of fonts or define an own.
 *
 * @package		Allroudner
 * @since		4.0
 */
class JFormFieldFont extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type		= 'Font';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
		JHtml::_('formbehavior.chosen', 'select');
		$size	= $this->element['size'] ? ' size="' . (int) $this->element['size'] . '"' : '';
		$class	= $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';
		$html	= '<div class="input-prepend">'
				.'<div type="text" id="'.$this->fieldname.'_text_icon" class="btn add-on icon-checkmark" onclick="toggleElement(\''.$this->fieldname.'\', 0);"> </div>'
				.'<input type="text" name="'.$this->name.'" id="'.$this->id.'_text" value="'.htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8').'"'
				.$class.$size.' /></div><br />'
				.'<div class="input-prepend">'
				.'<div id="'.$this->fieldname.'_icon" class="btn add-on icon-cancel" onclick="toggleElement(\''.$this->fieldname.'\', 1);"> </div>';
		$html	.= parent::getInput();
		$html	.= '</div>';

		return $html;
	}
}
