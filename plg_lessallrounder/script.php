<?php
/**
 * @package         Lessallrounder
 * @subpackage      Plugin
 * @author          Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license         GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;
use Joomla\CMS\Installer\InstallerScript;

/**
 * Script to enable the plugin after installation/update
 *
 * @since  1.0
 */
class PlgSystemLessallrounderInstallerScript extends InstallerScript
{
	/**
	 * Minimum Joomla! version required to install the extension
	 *
	 * @var    string
	 * @since  3.0
	 */
	protected $minimumJoomla = '4.0.0';


	/**
	 * Method to update the plugin
	 *
	 * @param   object  $parent  JInstallerAdapterPlugin class calling this method
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function update($parent)
	{
		$this->install($parent);
	}

	/**
	 * Method to install the plugin
	 *
	 * @param   object  $parent  JInstallerAdapterPlugin class calling this method
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function install($parent)
	{
		// Enable plugin
		$db    = Factory::getDbo();
		$query = $db->getQuery(true);
		$query->update('#__extensions');
		$query->set($db->quoteName('enabled') . ' = 1');
		$query->where($db->quoteName('element') . ' = ' . $db->quote('lessallrounder'));
		$query->where($db->quoteName('type') . ' = ' . $db->quote('plugin'));

		$db->setQuery($query);
		$db->execute();
	}
}
