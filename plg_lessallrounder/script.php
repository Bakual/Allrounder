<?php defined('_JEXEC') or die('Restricted access');

class plgSystemLessallrounderInstallerScript
{ 
	function update($parent)
	{ 
		$this->install($parent);
	}

	function install($parent)
	{ 
		// Enable plugin
		$db		= JFactory::getDbo();
		$query	= $db->getQuery(true);
		$query->update('#__extensions');
		$query->set('`enabled` = 1');
		$query->where('`element` = '.$db->quote('lessallrounder'));
		$query->where('`type` = '.$db->quote('plugin'));

		$db->setQuery($query);
		$db->execute();
	} 
}