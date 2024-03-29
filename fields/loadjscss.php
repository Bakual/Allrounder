<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2023 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Form\Field\RadioField;
use Joomla\CMS\HTML\HTMLHelper;

/**
 * LoadJsCSS Field class for the Allrounder Template to load custom Javascript and CSS
 *
 * @package  Allrounder
 * @since    4.0
 */
class JFormFieldLoadjscss extends RadioField
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
		HtmlHelper::script('media/templates/site/allrounder/js/params.js');
		HtmlHelper::stylesheet('media/templates/site/allrounder/css/params.css');

		return parent::getInput();
	}
}
