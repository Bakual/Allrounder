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
		// Check if parameter "styleID" is set
		if (!$table->params->get('styleID', 0))
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
			require_once('lessc.php');
			$less = new lessc;

/*			if ($table->params->get('cssCompress', 0))
			{
				$less->setFormatter('compressed');
			}
			else
			{ */
				// Joomla way
				$formatter = new lessc_formatter_classic;
				$formatter->disableSingle = true;
				$formatter->breakSelectors = true;
				$formatter->assignSeparator = ": ";
				$formatter->selectorSeparator = ",";
				$formatter->indentChar = "\t";
				$less->setFormatter($formatter);
//			}
			$params_array	= $table->params->toArray();
			// workaround because bootstrap has same variable name and template stores colors without preceding '#'
			$params_array['linkColorTemplate']	= '#'.$params_array['linkColor'];
			unset($params_array['linkColor']);

			$less->setVariables($params_array);
			$less->unsetVariable('contentheadingImage');
			$less->unsetVariable('contentheadingImageMedia');
			$less->unsetVariable('copyText');
			$less->unsetVariable('customCssCode');
			$less->unsetVariable('mediaLogo');
			$less->unsetVariable('slogan');
			$less->unsetVariable('textLogo');

			try {
				$less->compileFile($lessFile, $cssFile);
			} 
			catch(Exception $e) 
			{
				JError::raiseWarning(100, 'lessphp error: '.$e->getMessage());
			}
		}
	}
}