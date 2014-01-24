<?php
/**
 * @package     Lessallrounder
 * @subpackage  Plugin
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 *
 * Loosely based on https://github.com/ndeet/plg_system_less
 **/

defined('_JEXEC') or die();

/**
 * Plugin compiles .less files on template style save.
 * Less compiler lessphp; see http://leafo.net/lessphp/
 *
 * @since  1.0
 */
class PlgSystemLessallrounder extends JPlugin
{
	/**
	 * Compile .less files on template style change
	 *
	 * @param   string  $context  Context of the data
	 * @param   object  $table    Table object
	 * @param   bool    $isNew    New entry or edit
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onExtensionAfterSave($context, $table, $isNew)
	{
		if ($context != 'com_templates.style')
		{
			return;
		}
		// Convert the params to an object.
		if (is_string($table->params))
		{
			$registry = new JRegistry;
			$registry->loadString($table->params);
			$table->params = $registry;
		}
		// Check if parameter "useLESS" is set
		if (!$table->params->get('useLESS', 0))
		{
			return;
		}

		// Path to less file
		$client			= ($table->client_id) ? JPATH_ADMINISTRATOR : JPATH_SITE;
		$templatePath	= $client . '/templates/' . $table->template;
		$lessFile		= $templatePath . '/less/template.less';
		$cssFile		= $templatePath . '/css/template' . $table->id . '.css';

		// Check if .less file exists and is readable
		if (is_readable($lessFile))
		{
			require_once 'lessc.inc.php';
			$less = new lessc;

			if ($table->params->get('cssCompress', 0))
			{
				$less->setFormatter('compressed');
			}
			else
			{
				// Joomla way
				$formatter = new lessc_formatter_classic;
				$formatter->disableSingle = true;
				$formatter->breakSelectors = true;
				$formatter->assignSeparator = ": ";
				$formatter->selectorSeparator = ",";
				$formatter->indentChar = "\t";
				$less->setFormatter($formatter);
			}

			$params_array	= $table->params->toArray();

			// Unset the customCssCode parameter as it breaks the compiler if it starts with a dot (.) or hash (#).
			if (array_key_exists('customCssCode', $params_array))
			{
				unset($params_array['customCssCode']);
			}

			// Sanityzing params for LESS
			foreach ($params_array as &$value)
			{
				// Trim whitespaces
				$value	= trim($value);

				// Adding quotes around variable so it's threated as string if a slash is in it.
				if (strpos($value, '/') !== false)
				{
					$value	= '"' . $value . '"';
				}
				// Quoting empty values as they break the compiler
				if ($value == '')
				{
					$value	= '""';
				}
			}

			// Adding templatepath to params
			$basePath					= ($table->client_id) ? JURI::base(true) : JURI::root(true);
			$params_array['basePath']	= '"' . $basePath . '/"';

			$less->setVariables($params_array);

			$less->setImportDir(array($templatePath . '/less/'));
			jimport('joomla.filesystem.file');
			$lessString	= JFile::read($lessFile);

			// Check for custom files
			if (is_readable($templatePath . '/less/custom.less'))
			{
				$lessString	.= JFile::read($templatePath . '/less/custom.less');
			}

			if (is_readable($templatePath . '/css/custom.css'))
			{
				$lessString	.= JFile::read($templatePath . '/css/custom.css');
			}

			try
			{
				$cssString = $less->compile($lessString);
			}
			catch (Exception $e)
			{
				JError::raiseWarning(100, 'lessphp error: ' . $e->getMessage());
			}
			JFile::write($cssFile, $cssString);

			$this->loadLanguage();
			JFactory::getApplication()->enqueueMessage(JText::sprintf('PLG_SYSTEM_LESSALLROUNDER_SUCCESS', $cssFile), 'message');
		}
	}
}
