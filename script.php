<?php
/**
 * Scriptfile for the Allrounder Template
 *
 * @package         Allrounder
 * @subpackage      Template
 * @author          Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2023 - Thomas Hunziker
 * @license         GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Installer\Adapter\TemplateAdapter;
use Joomla\CMS\Installer\InstallerScript;

/**
 * Class AllrounderInstallerScript
 *
 * @since  4.0.1
 */
class AllrounderInstallerScript extends InstallerScript
{
	/**
	 * The extension name. This should be set in the installer script.
	 *
	 * @var    string
	 * @since  4.0.1
	 */
	protected $extension = 'allrounder';

	/**
	 * Minimum PHP version required to install the extension
	 *
	 * @var    string
	 * @since  4.0.1
	 */
	protected $minimumPhp = '7.2.0';

	/**
	 * Minimum Joomla! version required to install the extension
	 *
	 * @var    string
	 * @since  4.0.1
	 */
	protected $minimumJoomla = '4.1.0';

	/**
	 * @var  string  During an update, it will be populated with the old release version
	 *
	 * @since 4.0.1
	 */
	private $oldRelease;

	/**
	 *  Constructor
	 *
	 * @since 4.0.1
	 */
	public function __construct()
	{
		$this->app = Factory::getApplication();
	}

	/**
	 * method to run before an install/update/uninstall method
	 *
	 * @param   string           $type    'install', 'update' or 'discover_install'
	 * @param   TemplateAdapter  $parent  Installerobject
	 *
	 * @return  boolean  false will terminate the installation
	 *
	 * @since 4.0.1
	 */
	public function preflight($type, $parent)
	{
		// Storing old release number for process in postflight
		if (strtolower($type) == 'update')
		{
			$manifest         = $this->getItemArray('manifest_cache', '#__extensions', 'element', $this->extension);
			$this->oldRelease = $manifest['version'];
		}

		return parent::preflight($type, $parent);
	}

	/**
	 * method to update the component
	 *
	 * @param   TemplateAdapter  $parent  Installerobject
	 *
	 * @return void
	 *
	 * @since 4.0.1
	 */
	public function update($parent)
	{
		if (version_compare($this->oldRelease, '4.0.2', '<'))
		{
			$this->deleteFolders[] = '/templates/allrounder/css';
			$this->deleteFolders[] = '/templates/allrounder/images';
			$this->deleteFolders[] = '/templates/allrounder/js';
			$this->deleteFiles[] = '/media/templates/site/allrounder/js/effects.js';

			$db    = Factory::getDbo();
			$query = $db->getQuery(true);
			$query->update('#__template_styles')
				->set($db->quoteName('inheritable') . ' = 1')
				->where($db->quoteName('template') . ' = ' . $db->quote('allrounder'));
			$db->setQuery($query);
			$db->execute();
		}
	}

	/**
	 * Function to perform changes during postflight
	 *
	 * @param   string           $type    The action being performed
	 * @param   TemplateAdapter  $parent  The class calling this method
	 *
	 * @return  void
	 *
	 * @since   4.0.1
	 */
	public function postflight(string $type, TemplateAdapter $parent): void
	{
		$this->removeFiles();
	}
}
