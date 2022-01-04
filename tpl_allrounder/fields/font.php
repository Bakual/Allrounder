<?php
/**
 * @package         Allrounder
 * @subpackage      Template
 * @author          Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2021 - Thomas Hunziker
 * @license         GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Form\Field\ListField;
use Joomla\CMS\Form\FormHelper;
use Joomla\CMS\HTML\HTMLHelper;

FormHelper::loadFieldClass('list');

/**
 * Font Field class for the Allrounder Template to select from a list of fonts or define an own.
 *
 * @package  Allrounder
 * @since    1.0
 */
class JFormFieldFont extends ListField
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
	 *
	 * @since   1.0
	 */
	protected function getInput()
	{
		$html  = '<div class="input-group">
						<button class="btn btn-secondary"
							type="button" onclick="toggleElement(\'' . $this->fieldname . '\', 0);">
							<span id="' . $this->fieldname . '_text_icon" class="icon-radio-checked text-success"></span>
						</button>
						<input type="text" name="' . $this->name . '" id="' . $this->id . '_text" class="form-control ' . $this->class . '" value="'
							. htmlspecialchars($this->value, ENT_COMPAT) . '">
					</div>
					<div class="input-group">
						<button class="btn btn-secondary"
							type="button" onclick="toggleElement(\'' . $this->fieldname . '\', 1);">
							<span id="' . $this->fieldname . '_icon" class="icon-radio-unchecked text-danger"></span>
						</button>';

		// This needs to be disabled here and not in the XML due to a security fix in J3.8.12
		$this->disabled = true;

		$html .= parent::getInput();
		$html .= '</div>';

		return $html;
	}
}
