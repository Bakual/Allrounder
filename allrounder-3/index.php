<?php
defined('_JEXEC') or die('Access to this location is RESTRICTED.');
// Shortcuts
$tpl	= JFactory::getApplication()->getTemplate(true);
$path	= $this->baseurl.'/templates/'.$tpl->template;
$params	= $tpl->params;
$doc	= JFactory::getDocument();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
	<meta name="licence" content="Creative Commons 3.0" />
	<link href="<?php echo $path; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="<?php echo $path; ?>/css/template<?php echo $tpl->id; ?>.css" rel="stylesheet" type="text/css" media="all" />
	<?php // Load optional rtl Bootstrap css and Bootstrap bugfixes
	JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction);
	// TODO: Switch param to make it more logical?
	if ($params->get('css3effects')) : ?>
		<link href="<?php echo $path; ?>/css/css3-effects.css" rel="stylesheet" type="text/css" media="all" />
	<?php endif;
	if ($params->get('jsCompress')) : ?>
		<script type="text/javascript" src="<?php echo $path; ?>/js/js_compress.php"></script>
	<?php else :
		JHtml::_('jquery.framework');
		$doc->addScript($path.'/js/lv-dropdown.js');
//		$doc->addScript($path.'/js/jq.easy-tooltip.min.js');
		$doc->addScript($path.'/js/jq.easy-caption.min.js');
		$doc->addScript($path.'/js/reflection.js');
		$doc->addScript($path.'/js/effects.js');
	endif;
	// check if the 3 columns are enabled
	$contentwidth	= '';
	if($this->countModules("position-7")&&!$this->countModules("position-8")){ $contentwidth="left"; }
	if($this->countModules("position-8")&&!$this->countModules("position-7")){ $contentwidth="right"; }
	if($this->countModules("position-7")&&$this->countModules("position-8")) { $contentwidth="middle"; }
	// dynamic or fixed width
	if ($params->get('whatWidth')) :
		$style	= 'max-width:'.htmlspecialchars($this->params->get('pageMaxWidth'));
	else :
		$style	= 'width:'.htmlspecialchars($this->params->get('pageWidth'));
	endif;
	$doc->addStyleDeclaration('#wrapper, #foot_container {'.$style.';}');
	if ($params->get('customCss')) :
		$doc->addStyleDeclaration(htmlspecialchars($params->get('customCssCode')));
	endif; ?>
	<jdoc:include type="head" />
</head>
<body>
	<div id="wrapper">
		<?php require('modules/toppanel.php'); ?>
		<?php require('modules/beforehead.php'); ?>
		<div id="header_container">
			<?php if ($this->params->get('showHeader')) : ?>
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
						<?php if ($this->params->get('showimgLogo')) : ?>
							<a class="imglogo" href="index.php"><img alt="Logo" src="<?php echo $path; ?>/images/logo/<?php echo htmlspecialchars($this->params->get('imgLogo')); ?>"/></a>
						<?php endif;?>
						<?php if ($this->params->get('showMediaLogo')) : ?>
							<a class="medialogo" href="index.php"><img alt="Logo" src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($this->params->get('mediaLogo')); ?>"/></a>
						<?php endif;?>
						<?php if ($this->params->get('showtextLogo')) :
							$style	= ($this->params->get('useLESS')) ? '' : 'style="color :#'.htmlspecialchars($this->params->get('logoColor')).';" ' ?>
							<a <?php echo $style; ?>class="logo" href="index.php"><?php echo htmlspecialchars($this->params->get('textLogo')); ?></a>
						<?php endif;?>
						<?php if ($this->params->get('showSlogan')) :
							$style	= ($this->params->get('useLESS')) ? '' : 'style="color :#'.htmlspecialchars($this->params->get('sloganColor')).';" ' ?>
							<div <?php echo $style; ?>class="slogan"><?php echo htmlspecialchars($this->params->get('slogan')); ?></div>
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
			<?php require('modules/afterhead.php'); ?>
			<?php if ($this->countModules('position-1')) : ?>
				<div id="topmenu_container">
					<div id="topmenu">
						<jdoc:include type="modules" name="position-1" />
					</div>
					<div class="clearfix"></div>
				</div>
			<?php endif; ?>
			<?php if ($this->countModules('position-1-1')) : ?>
				<jdoc:include type="modules" name="position-1-1" />
				<div class="clearfix"></div>
			<?php endif; ?>
		</div>
		<?php if ($this->countModules('position-2 or position-0')) : ?>
			<div id="subhead">
				<?php if ($this->countModules('position-2')) : ?>
					<jdoc:include type="modules" name="position-2" />
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
			<?php require('modules/top.php'); ?>
			<?php if ($this->countModules('position-7')) : ?>
				<div id="leftcol">
					<jdoc:include type="modules" name="position-7" style="lvround_left" />
				</div>
			<?php endif; ?>
			<div id="content_out<?php echo $contentwidth; ?>">
				<?php require('modules/advert_top.php'); ?>
				<div id="maincontent">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>
				<div class="clearfix"></div>
				<span class="shadow-left">&nbsp;</span>
				<span class="shadow-right">&nbsp;</span>
				<?php require('modules/advert_btm.php'); ?>
			</div>
			<?php if ($this->countModules('position-8')) : ?>
				<div id="rightcol">
					<jdoc:include type="modules" name="position-8" style="lvround_right" />
				</div>
			<?php endif; ?>
			<div class="clearfix"></div>
		</div>
		<?php require('modules/bottom.php'); ?>
		<div class="clearfix"></div>
	</div>
	<div id="foot_container">
		<?php require('modules/foot.php'); ?>
		<?php if($this->countModules('footer')) : ?>
			<div id="footermodule">
				<jdoc:include type="modules" name="footer" />
			</div>
		<?php endif; ?>
		<?php if ($this->params->get('showSubfoot')) : ?>
			<div id="subfoot">
				<?php if ($this->params->get('showCopy')) : ?>
					<div class="copytext">&copy; <?php echo htmlspecialchars($this->params->get('copyText')); ?></div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div class="clearfix"></div>
		<div id="footer">
			<div class="footer-inner">
				<span class="feckl">&nbsp;</span>
				<span class="feckr">&nbsp;</span>
				<div id="scroll_up"> <a href="#" class="lv-tooltip" id="gotop" title="Scroll to top">&uarr;&uarr;&uarr;</a></div>
				<?php require('modules/footermodules.php'); ?>
			</div>
			<div class="footer-bottom">
				<?php if ($this->params->get('showDate')) : ?>
					<span id="date"><?php echo JHTML::_('date', 'now', JText::_('DATE_FORMAT_LC1')); ?></span>
				<?php endif; ?>
				<span id="copy"><a href="http://www.lernvid.com" title="Joomla Templates" target="_blank">Template designed by LernVid.com</a></span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php require('modules/sidepanel.php'); ?>
	<jdoc:include type="modules" name="debug" />
</body>
</html>