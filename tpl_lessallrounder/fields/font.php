<?php
/**
 * @package     Lessallrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

JFormHelper::loadFieldClass('list');

/**
 * Font Field class for the Allrounder Template to select from a list of fonts or define an own.
 *
 * @package  Lessallrounder
 * @since    1.0
 */
class JFormFieldFont extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $type = 'Font';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string  The field input markup.
	 * @since   1.0
	 */
	protected function getInput()
	{
		JHtml::_('formbehavior.chosen', 'select');
		$size	= $this->element['size'] ? ' size="' . (int) $this->element['size'] . '"' : '';
		$class	= $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';
		$html	= '<div class="input-prepend">'
				. '<div type="text" id="'.$this->fieldname . '_text_icon" class="btn add-on icon-checkmark" onclick="toggleElement(\'' . $this->fieldname . '\', 0);"> </div>'
				. '<input type="text" name="' . $this->name . '" id="' . $this->id . '_text" value="' . htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8') . '"'
				. $class.$size.' /></div><br />'
				. '<div class="input-prepend">'
				. '<div id="' . $this->fieldname . '_icon" class="btn add-on icon-cancel" onclick="toggleElement(\'' . $this->fieldname . '\', 1);"> </div>';
		$html	.= parent::getInput();
		$html	.= '</div>';

		return $html;
	}
}
