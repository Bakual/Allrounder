<?php
/**
 * @package         Allrounder
 * @subpackage      Template
 * @author          Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2022 - Thomas Hunziker
 * @license         GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\Form\FormField;
use Joomla\CMS\Form\FormHelper;

FormHelper::loadFieldClass('hidden');

/**
 * StyleID Field class for the Allrounder Template to store the id of the template style.
 *
 * @package  Allrounder
 * @since    1.0
 */
class JFormFieldStyleid extends FormField
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $type = 'Styleid';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string  The field input markup.
	 *
	 * @since   1.0
	 */
	protected function getInput()
	{
		$this->value = Factory::getApplication()->input->getInt('id');

		return parent::getInput();
	}
}
