<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
	<?php require("head_includes.php"); ?>
	<jdoc:include type="head" />
</head>
<body>
	<?php if($whatWidth == 1) : ?>
		<div id="wrapper" style="max-width:<?php echo htmlspecialchars($this->params->get('pageMaxWidth'));?>;">
	<?php endif;?>
	<?php if($whatWidth == 0) : ?>
		<div id="wrapper" style="width:<?php echo htmlspecialchars($this->params->get('pageWidth'));?>;">
	<?php endif;?>
		<?php require("modules/toppanel.php"); ?>
		<?php require("modules/beforehead.php"); ?>
		<div id="header_container">
			<?php if (($this->params->get('showHeader')) !=0) : ?>	
				<div id="header">
					<?php if($this->countModules('headermodule1')) : ?>
						<div id="headermodule1">
							<jdoc:include type="modules" name="headermodule1" />
							<div class="clr"></div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('banner')) : ?>
						<div id="banner_outer">
							<div id="banner">
					             <jdoc:include type="modules" name="banner"/>
							</div>
						</div>
					<?php endif; ?>			
					<div id="logo">
						<?php if (($this->params->get('showimgLogo')) !=0) : ?>				
							<a class="imglogo" href="index.php"><img alt="Logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo/<?php echo htmlspecialchars($this->params->get('imgLogo'));?>"/></a>
						<?php endif;?>
						<?php if (($this->params->get('showMediaLogo')) !=0) : ?>				
							<a class="medialogo" href="index.php"><img alt="Logo" src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($this->params->get('mediaLogo'));?>"/></a>
						<?php endif;?>
						<?php if (($this->params->get('showtextLogo')) !=0) : ?>				
							<a style="color:#<?php echo htmlspecialchars($this->params->get('logoColor'));?>;" class="logo" href="index.php"><?php echo htmlspecialchars($this->params->get('textLogo'));?></a>
						<?php endif;?>
						<?php if (($this->params->get('showSlogan')) !=0) : ?>				
							<div style="color:#<?php echo htmlspecialchars($this->params->get('sloganColor'));?>;" class="slogan"><?php echo htmlspecialchars($this->params->get('slogan'));?></div>
						<?php endif;?>
					</div>	
					<?php if($this->countModules('headermodule2')) : ?>
						<div id="headermodule2">
							<jdoc:include type="modules" name="headermodule2" />
							<div class="clr"></div>
						</div>
					<?php endif; ?>			
					<span class="heckl">&nbsp;</span>
					<span class="heckr">&nbsp;</span>
				</div>
			<?php endif; ?>			
			<?php require("modules/afterhead.php"); ?>
			<?php if($this->countModules('position-1')) : ?>
				<div id="topmenu_container">
					<div id="topmenu">
			             <jdoc:include type="modules" name="position-1" />
					</div>
					<div class="clr"></div>
				</div>
			<?php endif; ?>
			<?php if($this->countModules('position-1-1')) : ?>
	             <jdoc:include type="modules" name="position-1-1" />
				<div class="clr"></div>
			<?php endif; ?>
		</div>
		<?php if($this->countModules('position-2 or position-0')) : ?>
			<div id="subhead">
				<?php if($this->countModules('position-2')) : ?>
	            	<jdoc:include type="modules" name="position-2" />
				<?php endif; ?>
				<?php if($this->countModules('position-0')) : ?>
					<div id="search">
			             <jdoc:include type="modules" name="position-0" />
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div id="container">
			<?php if($this->countModules('slider')) : ?>
				<div id="slider">
					<jdoc:include type="modules" name="slider" />
				</div>
				<div class="clr"></div>
			<?php endif; ?>
			<?php require("modules/top.php"); ?>
			<?php if($this->countModules('position-7')) : ?>
				<div id="leftcol">
		             <jdoc:include type="modules" name="position-7" style="lvround_left" />
				</div>
			<?php endif; ?>		
		    <div id="content_out<?php echo $contentwidth; ?>">
				<?php require("modules/advert_top.php"); ?>
				<div id="maincontent">
					<jdoc:include type="message" />						
					<jdoc:include type="component" />
				</div>
				<div class="clr"></div>
				<span class="shadow-left">&nbsp;</span>
				<span class="shadow-right">&nbsp;</span>
				<?php require("modules/advert_btm.php"); ?>
			</div>
			<?php if($this->countModules('position-8')) : ?>
				<div id="rightcol">
		             <jdoc:include type="modules" name="position-8" style="lvround_right" />
				</div>
			<?php endif; ?>	
			<div class="clr"></div>
		</div>
		<?php require("modules/bottom.php"); ?>
		<div class="clr"></div>
	</div>
	<?php if($whatWidth == 1) : ?>
		<div id="foot_container" style="max-width:<?php echo htmlspecialchars($this->params->get('pageMaxWidth'));?>;">
	<?php endif;?>
	<?php if($whatWidth == 0) : ?>
		<div id="foot_container" style="width:<?php echo htmlspecialchars($this->params->get('pageWidth'));?>;">
	<?php endif;?>
		<?php require("modules/foot.php"); ?>
				<?php if($this->countModules('footer')) : ?>
					<div id="footermodule">
						<jdoc:include type="modules" name="footer" />
					</div>
				<?php endif; ?>			
	
		<?php if (($this->params->get('showSubfoot')) !=0) : ?>	
			<div id="subfoot">
				<?php if (($this->params->get('showCopy')) !=0) : ?>				
					<div class="copytext">&copy; <?php echo htmlspecialchars($this->params->get('copyText'));?></div>
				<?php endif;?>
			</div>
		<?php endif; ?>			
	
		<div class="clr"></div>
			<div id="footer">
				<div class="footer-inner">
					<span class="feckl">&nbsp;</span>
					<span class="feckr">&nbsp;</span>
					<div id="scroll_up"> <a href="#" class="lv-tooltip" id="gotop" title="Scroll to top">&uarr;&uarr;&uarr;</a></div>
					<?php require("modules/footermodules.php"); ?>
				</div>
				<div class="footer-bottom">
					<?php if (($this->params->get('showDate')) !=0) : ?>				
				  		<span id="date"><?php $format =''; echo JHTML::_('date', 'now', $format ? $format : JText::_('DATE_FORMAT_LC1')); ?></span>
					<?php endif;?>
			  		<span id="copy"><a href="http://www.lernvid.com" title="Joomla Templates" target="_blank">Template designed by LernVid.com</a></span>
				</div>
			</div>		
		<div class="clr"></div>
	</div>	
	<?php require("modules/sidepanel.php"); ?>
	<jdoc:include type="modules" name="debug" />
</body>
</html>