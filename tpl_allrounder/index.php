<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2021 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\Helpers\Bootstrap;
use Joomla\CMS\HTML\Helpers\Jquery;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

HTMLHelper::_('stylesheet', 'system/joomla-fontawesome.css', ['relative' => true]);

// Shortcuts
$app     = Factory::getApplication();
$tpl     = $app->getTemplate(true);
$path    = $this->baseurl . '/templates/' . $this->template . '/';
$modules = JPATH_ROOT . '/templates/' . $this->template . '/modules/';

/** @var $params Joomla\Registry\Registry */
$params = $tpl->params;

Jquery::framework();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<?php if ($params->get('mobileWidth', 767) || $params->get('viewport', 1)) : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php endif; ?>
	<jdoc:include type="head" />
	<link href="<?php echo $path; ?>css/template.css" rel="stylesheet" type="text/css" media="all" />
	<?php Bootstrap::loadCss(true, $this->direction); ?>

	<?php if ($params->get('customCss')) : ?>
		<style type="text/css"><?php echo htmlspecialchars($params->get('customCssCode')); ?></style>
	<?php endif; ?>
	<script src="<?php echo $path; ?>js/effects.js" type="text/javascript"></script>
	<?php // Check if the 3 columns are enabled
	$contentwidth = '';
	if ($this->countModules('sidebar-left') and $this->countModules('sidebar-right')) :
		$contentwidth = 'middle';
	elseif ($this->countModules('sidebar-left')) :
		$contentwidth = 'left';
	elseif ($this->countModules('sidebar-right')) :
		$contentwidth = 'right';
	endif; ?>
</head>
<body>
	<div id="wrapper">
		<?php require $modules . 'toppanel.php'; ?>
		<?php require $modules . 'beforehead.php'; ?>
		<div id="header_container">
			<?php if ($params->get('showHeader', 1)) : ?>
				<div id="header">
					<?php if ($this->countModules('headermodule1')) : ?>
						<div id="headermodule1">
							<jdoc:include type="modules" name="headermodule1" />
							<div class="clearfix"></div>
						</div>
					<?php endif; ?>
					<?php if ($this->countModules('banner')) : ?>
						<div id="banner_outer">
							<div id="banner">
								<jdoc:include type="modules" name="banner"/>
							</div>
						</div>
					<?php endif; ?>
					<div id="logo">
						<?php if ($params->get('showimgLogo', 1)) : ?>
							<a class="imglogo" href="index.php"><img alt="Logo" src="<?php echo $path; ?>images/logo/<?php echo htmlspecialchars($params->get('imgLogo', 'logo-transparent.png')); ?>"/></a>
						<?php endif;?>
						<?php if ($params->get('showMediaLogo')) : ?>
							<a class="medialogo" href="index.php"><img alt="Logo" src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($params->get('mediaLogo')); ?>"/></a>
						<?php endif;?>
						<?php if ($params->get('showtextLogo')) : ?>
							<a class="logo" href="index.php"><?php echo htmlspecialchars($params->get('textLogo', $app->get('sitename'))); ?></a>
						<?php endif;?>
						<?php if ($params->get('showSlogan')) : ?>
							<div class="slogan"><?php echo htmlspecialchars($params->get('slogan')); ?></div>
						<?php endif;?>
					</div>
					<?php if ($this->countModules('headermodule2')) : ?>
						<div id="headermodule2">
							<jdoc:include type="modules" name="headermodule2" />
							<div class="clearfix"></div>
						</div>
					<?php endif; ?>
					<span class="heckl">&nbsp;</span>
					<span class="heckr">&nbsp;</span>
				</div>
			<?php endif; ?>
			<?php require $modules . 'afterhead.php'; ?>
			<?php if ($this->countModules('position-1')) : ?>
				<nav id="topmenu_container" class="navigation" role="navigation">
					<div class="navbar">
						<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
							<div>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</div>
						</a>
					</div>
					<div id="topmenu" class="nav-collapse collapse">
						<jdoc:include type="modules" name="position-1" />
					</div>
					<div class="clearfix"></div>
				</nav>
			<?php endif; ?>
			<?php if ($this->countModules('position-1-1')) : ?>
				<jdoc:include type="modules" name="position-1-1" />
			<?php endif; ?>
		</div>
		<?php if ($this->countModules('breadcrumbs') or $this->countModules('position-0')) : ?>
			<div id="subhead">
				<?php if ($this->countModules('breadcrumbs')) : ?>
					<jdoc:include type="modules" name="breadcrumbs" />
				<?php endif; ?>
				<?php if ($this->countModules('position-0')) : ?>
					<div id="search">
						<jdoc:include type="modules" name="position-0" />
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div id="container">
			<?php if ($this->countModules('slider')) : ?>
				<div id="slider">
					<jdoc:include type="modules" name="slider" />
				</div>
				<div class="clearfix"></div>
			<?php endif; ?>
			<?php require $modules . 'top.php'; ?>
			<?php if ($this->countModules('sidebar-left')) : ?>
				<div id="leftcol">
					<jdoc:include type="modules" name="sidebar-left" style="allroundersidebar" />
				</div>
			<?php endif; ?>
			<?php if ($this->countModules('sidebar-right') and !$params->get('rightSidebarPosition', 1)) : ?>
				<div id="rightcol">
					<jdoc:include type="modules" name="sidebar-right" style="allroundersidebar" />
				</div>
			<?php endif; ?>
			<div id="content_out<?php echo $contentwidth; ?>">
				<?php require $modules . 'beforecontent.php'; ?>
				<div id="maincontent" class="row-fluid">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
				<span class="shadow-left">&nbsp;</span>
				<span class="shadow-right">&nbsp;</span>
				<?php require $modules . 'aftercontent.php'; ?>
			</div>
			<?php if ($this->countModules('sidebar-right') and $params->get('rightSidebarPosition', 1)) : ?>
				<div id="rightcol">
					<jdoc:include type="modules" name="sidebar-right" style="allroundersidebar" />
				</div>
			<?php endif; ?>
			<div class="clearfix"></div>
		</div>
		<?php require $modules . 'bottom.php'; ?>
		<div class="clearfix"></div>
	</div>
	<div id="foot_container">
		<?php require $modules . 'foot.php'; ?>
		<?php if($this->countModules('footer')) : ?>
			<div id="footermodule">
				<jdoc:include type="modules" name="footer" />
			</div>
		<?php endif; ?>
		<?php if ($params->get('showSubfoot', 1)) : ?>
			<div id="subfoot">
				<?php if ($params->get('showCopy', 1)) : ?>
					<div class="copytext">&copy; <?php echo htmlspecialchars($params->get('copyText', 'ALLROUNDER')); ?></div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div class="clearfix"></div>
		<div id="footer">
			<div class="footer-inner">
				<span class="feckl">&nbsp;</span>
				<span class="feckr">&nbsp;</span>
				<div id="scroll_up">
					<a href="#" id="gotop" title="<?php echo Text::_('TPL_ALLROUNDER_SCROLL_TOP'); ?>">
						&uarr;&uarr;&uarr;
					</a>
				</div>
				<?php require $modules . 'footermodules.php'; ?>
			</div>
			<div class="footer-bottom">
				<?php if ($params->get('showDate', 1)) : ?>
					<span id="date"><?php echo HTMLHelper::_('date', 'now', JText::_('DATE_FORMAT_LC1')); ?></span>
				<?php endif; ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php require $modules . 'sidepanel.php'; ?>
	<jdoc:include type="modules" name="debug" />
</body>
</html>
