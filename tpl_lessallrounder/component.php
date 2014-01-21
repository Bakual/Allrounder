<?php
/**
 * @package     Lessallrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

$tpl	= JFactory::getApplication()->getTemplate(true);
$path	= $this->baseurl . '/templates/' . $tpl->template;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
	<meta name="licence" content="Creative Commons 3.0" />
	<link href="<?php echo $path; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<jdoc:include type="head" />
	<link href="<?php echo $path; ?>/css/template<?php echo $this->params->get('useLESS') ? $tpl->id : ''; ?>.css" rel="stylesheet" type="text/css" media="all" />
<!--	<link href="<?php // echo $this->baseurl ?>/templates/<?php // echo $this->template ?>/css/print.css" rel="stylesheet" type="text/css" media="all" /> -->
	<?php // Load optional rtl Bootstrap css and Bootstrap bugfixes
	JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction); ?>
</head>
<body class="contentpane modal row-fluid">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>
