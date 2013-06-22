<?php
/**
 * @package System Plugin - automatic Less compiler - for Allrounder template
 * @version 0.1
 * @author Thomas Hunziker
 * @copyright (C) 2013 - Thomas Hunziker
 * Loosely based on https://github.com/ndeet/plg_system_less
 * @author Andreas Tasch 
 * @copyright (C) 2012 - Andreas Tasch
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

// no direct access
defined( '_JEXEC' ) or die();

/**
 * Plugin compiles .less files on template style save.
 * Less compiler lessphp; see http://leafo.net/lessphp/
 */
class plgSystemLessallrounder extends JPlugin
{
	/**
	 * Compile .less files on change
	 */
	function onExtensionAfterSave($context, $table, $isNew)
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

		//path to less file
		$client			= ($table->client_id) ? JPATH_ADMINISTRATOR : JPATH_SITE;
		$templatePath	= $client.'/templates/'.$table->template;
		$lessFile		= $templatePath.'/less/template.less';
		$cssFile		= $templatePath.'/css/template'.$table->id.'.css';
		//check if .less file exists and is readable
		if (is_readable($lessFile))
		{
			require_once('lessc.inc.php');
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

			// Sanityzing params for LESS
			foreach ($params_array as &$value)
			{
				// Adding quotes around variable so it's threated as string if a slash is in it.
				if (strpos($value, '/') !== false)
				{
					$value	= '"'.$value.'"';
				}
				// Quoting empty values as they break the compiler
				if ($value == '')
				{
					$value	= '""';
				}
			}

			// Adding templatepath to params
			$basePath					= ($table->client_id) ? JURI::base(true) : JURI::root(true);
			$params_array['basePath']	= '"'.$basePath.'/"';

			$less->setVariables($params_array);

			if (is_readable($templatePath.'/less/custom.less') || is_readable($templatePath.'/css/custom.css'))
			{
				$less->setImportDir(array($templatePath.'/less/'));
				jimport('joomla.filesystem.file');
				$lessString	= JFile::read($lessFile);
				if (is_readable($templatePath.'/less/custom.less'))
				{
					$lessString	.= JFile::read($templatePath.'/less/custom.less');
				}
				if (is_readable($templatePath.'/css/custom.css'))
				{
					$lessString	.= JFile::read($templatePath.'/css/custom.css');
				}

				try {
					$cssString = $less->compile($lessString);
				} 
				catch(Exception $e) 
				{
					JError::raiseWarning(100, 'lessphp error: '.$e->getMessage());
				}
				JFile::write($cssFile, $cssString);
			}
			else
			{
				try {
					$less->compileFile($lessFile, $cssFile);
				} 
				catch(Exception $e) 
				{
					JError::raiseWarning(100, 'lessphp error: '.$e->getMessage());
				}
			}

			$this->loadLanguage();
			JFactory::getApplication()->enqueueMessage(JText::sprintf('PLG_SYSTEM_LESSALLROUNDER_SUCCESS', $cssFile), 'message');
		}
	}
}