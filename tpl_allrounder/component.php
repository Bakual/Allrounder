<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\Helpers\Bootstrap;

$tpl	= Factory::getApplication()->getTemplate(true);
$path	= $this->baseurl . '/templates/' . $tpl->template;
$params	= $tpl->params;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<jdoc:include type="head" />
	<link href="<?php echo $path; ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
	<?php
	// Load optional rtl Bootstrap css and Bootstrap bugfixes
	Bootstrap::loadCss(true, $this->direction);

	if ($params->get('customCss')) : ?>
		<style type="text/css"><?php echo htmlspecialchars($params->get('customCssCode')); ?></style>
	<?php endif; ?>
</head>
<body class="modal">
	<div id="maincontent" class="row-fluid">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
</body>
</html>
