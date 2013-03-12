<?php
defined('_JEXEC') or die('No direct access');
// Shortcuts
$tpl	= JFactory::getApplication()->getTemplate(true);
$path	= $this->baseurl.'/templates/'.$tpl->template;
$params	= $tpl->params;
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Creative Commons 3.0" />
<link href="<?php echo $path; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!--- ADD CSS Files -->
<?php if ($params->get('useLESS')) : ?>
	<link href="<?php echo $path; ?>/css/template<?php echo $tpl->id; ?>.css" rel="stylesheet" type="text/css" media="all" />
	<?php // Load optional rtl Bootstrap css and Bootstrap bugfixes
	JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction);
else :
	if ($params->get('cssCompress')) : ?>
		<link href="<?php echo $path; ?>/css/css_compress.php" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo $path; ?>/css/lvdropdown.css" rel="stylesheet" type="text/css" media="all" />
	<?php else : ?>
		<link href="<?php echo $path; ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
	<!--
		<link href="<?php echo $path; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	-->
		<link href="<?php echo $path; ?>/css/joomla.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo $path; ?>/css/colors.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo $path; ?>/css/lvdropdown.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo $path; ?>/css/typo.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo $path; ?>/css/modules.css" rel="stylesheet" type="text/css" media="all" />
	<?php endif;
endif;
if ($params->get('css3effects')) : ?>
	<link href="<?php echo $path; ?>/css/css3-effects.css" rel="stylesheet" type="text/css" media="all" />
<?php endif; ?>

<!--- Older Browser CSS -->
<!--[if IE 7]>
	<link href="<?php echo $path; ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<!--- ADD JavaScript Files -->

<?php if ($params->get('jsCompress')) : ?>
	<script type="text/javascript" src="<?php echo $path; ?>/js/js_compress.php"></script>
<?php else :
	$doc = JFactory::getDocument();
	if ($params->get('useLESS')) :
		// Add JavaScript Frameworks
		JHtml::_('jquery.framework');
	else :
		$doc->addScript($path.'/js/jquery-1.7.2.min.js');
		$doc->addScriptDeclaration('var jq = jQuery.noConflict();');
	endif;
	$doc->addScript($path.'/js/lv-dropdown.js');
	$doc->addScript($path.'/js/jq.easy-tooltip.min.js');
	$doc->addScript($path.'/js/jq.easy-caption.min.js');
	$doc->addScript($path.'/js/reflection.js');
	$doc->addScript($path.'/js/effects.js');
endif;

// Layout parameters
require("php/layout.php");

// Define fonts
require("php/fonts.php");

// ADD own template colors
if ($params->get('ownColors') and !$params->get('useLESS')) :
	require("php/template_colors.php");
endif;

// ADD own dropdown-menu colors
if ($params->get('dropdownColors') and !$params->get('useLESS')) :
	require("php/dropdown_colors.php");
endif;

if ($params->get('ribbonsOnOff')) :
	require("php/ribbons.php");
endif;

// check if the 3 columns are enabled
$contentwidth = '';
if($this->countModules("position-7")&&!$this->countModules("position-8")){ $contentwidth="left"; }
if($this->countModules("position-8")&&!$this->countModules("position-7")){ $contentwidth="right"; }
if($this->countModules("position-7")&&$this->countModules("position-8")) { $contentwidth="middle"; }

//parameter shortys
$whatWidth = $params->get('whatWidth'); // dynamic or fixed width

if (!$params->get('useLESS')) :
	$leftcolWidth = ($params->get('leftcolWidth'));
	$rightcolWidth = ($params->get('rightcolWidth')); ?>
	<!-- math the width of the 3 columns -->
	<style type="text/css">
		#leftcol {width: <?php echo $leftcolWidth;?>%;}
		#rightcol {width: <?php echo $rightcolWidth;?>%;}
		#content_outmiddle {width: <?php echo 98 - $rightcolWidth - $leftcolWidth;?>%;}
		#content_outright {width: <?php echo 99 - $rightcolWidth;?>%;}
		#content_outleft {width: <?php echo 99 - $leftcolWidth;?>%;}
	</style>
<?php endif;

if ($customCss = $params->get('customCss')) :
	$doc->addStyleDeclaration(htmlspecialchars($customCss));
endif;