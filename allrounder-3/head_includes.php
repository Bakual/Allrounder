<?php
defined('_JEXEC') or die('No direct access');
// Shortcut to Templatepath
$path	= $this->baseurl.'/templates/'.$this->template;
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Creative Commons 3.0" />
<link href="<?php echo $path; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!--- ADD CSS Files -->
<?php if ($this->params->get('useLESS') and $styleID = $this->params->get('styleID')) : ?>
	<link href="<?php echo $path; ?>/css/template<?php echo $styleID; ?>.css" rel="stylesheet" type="text/css" media="all" />
<?php else :
	if ($this->params->get('cssCompress')) : ?>
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
if ($this->params->get('css3effects')) : ?>
	<link href="<?php echo $path; ?>/css/css3-effects.css" rel="stylesheet" type="text/css" media="all" />
<?php endif; ?>

<!--- Older Browser CSS -->
<!--[if IE 7]>
	<link href="<?php echo $path; ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<!--- ADD JavaScript Files -->

<?php if ($this->params->get('jsCompress')) : ?>
	<script type="text/javascript" src="<?php echo $path; ?>/js/js_compress.php"></script>
<?php else :
	// Add JavaScript Frameworks
	JHtml::_('bootstrap.framework');
	JHtml::_('jquery.framework');

	// Load optional rtl Bootstrap css and Bootstrap bugfixes
	JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction);

	$doc = JFactory::getDocument();
	$doc->addScript($path.'/js/lv-dropdown.js');
	$doc->addScript($path.'/js/jq.easy-tooltip.min.js');
	$doc->addScript($path.'/js/jq.easy-caption.min.js');
	$doc->addScript($path.'/js/reflection.js');
	$doc->addScript($path.'/js/effects.js');
/*	<script type="text/javascript" src="<?php echo $path; ?>/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		var jq = jQuery.noConflict();
	</script> */
endif;

// Layout parameters
require("php/layout.php");

// Define fonts
require("php/fonts.php");

// ADD own template colors
if ($this->params->get('ownColors') and !$this->params->get('useLESS')) :
	require("php/template_colors.php");
endif;

// ADD own dropdown-menu colors
if ($this->params->get('dropdownColors') and !$this->params->get('useLESS')) :
	require("php/dropdown_colors.php");
endif;

if ($this->params->get('ribbonsOnOff')) :
	require("php/ribbons.php");
endif;

// check if the 3 columns are enabled
$contentwidth = '';
if($this->countModules("position-7")&&!$this->countModules("position-8")){ $contentwidth="left"; }
if($this->countModules("position-8")&&!$this->countModules("position-7")){ $contentwidth="right"; }
if($this->countModules("position-7")&&$this->countModules("position-8")) { $contentwidth="middle"; }

//parameter shortys
$whatWidth = $this->params->get('whatWidth'); // dynamic or fixed width

if (!$this->params->get('useLESS')) :
	$leftcolWidth = ($this->params->get('leftcolWidth'));
	$rightcolWidth = ($this->params->get('rightcolWidth')); ?>
	<!-- math the width of the 3 columns -->
	<style type="text/css">
		#leftcol {width: <?php echo $leftcolWidth;?>%;}
		#rightcol {width: <?php echo $rightcolWidth;?>%;}
		#content_outmiddle {width: <?php echo 98 - $rightcolWidth - $leftcolWidth;?>%;}
		#content_outright {width: <?php echo 99 - $rightcolWidth;?>%;}
		#content_outleft {width: <?php echo 99 - $leftcolWidth;?>%;}
	</style>
<?php endif;

if ($customCss = $this->params->get('customCss')) :
	$doc->addStyleDeclaration(htmlspecialchars($customCss));
endif;