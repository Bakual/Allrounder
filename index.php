<?php
/**
 * @package         Allrounder
 * @subpackage      Template
 * @author          Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2023 - Thomas Hunziker
 * @license         GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Helper\MediaHelper as MediaHelperAlias;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

require_once 'helper/allrounder.php';

// Shortcuts
$app = Factory::getApplication();
$wa  = $this->getWebAssetManager();

// Enable assets
$wa->usePreset('template.allrounder.' . ($this->direction === 'rtl' ? 'rtl' : 'ltr'))
		->useStyle('template.active.language')
		->useStyle('template.user')
		->useScript('template.user');

// Override 'template.active' asset to set correct ltr/rtl dependency
$wa->registerStyle('template.active', '', [], [], ['template.allrounder.' . ($this->direction === 'rtl' ? 'rtl' : 'ltr')]);

// Browsers support SVG favicons
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon.svg', '', [], true, 1), 'icon', 'rel', ['type' => 'image/svg+xml']);
$this->addHeadLink(HTMLHelper::_('image', 'favicon.ico', '', [], true, 1), 'alternate icon', 'rel', ['type' => 'image/vnd.microsoft.icon']);
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon-pinned.svg', '', [], true, 1), 'mask-icon', 'rel', ['color' => '#000']);

// Don't use $this->template as the files are not copied to child templates.
$modules = JPATH_ROOT . '/templates/allrounder/modules/';

$params = $this->params;

// Get values from template style.
$bodyBackground            = $params->get('bodyBackground', 'rgb(162, 205, 253)');
$bodyBackgroundImage       = MediaHelperAlias::getCleanMediaFieldValue($params->get('bodyBackgroundImage', 'media/templates/site/allrounder/images/background.png'));
$bodyBackgroundImageRepeat = $params->get('bodyBackgroundImageRepeat', 1) ? 'repeat' : 'no-repeat';
$textColor                 = $params->get('textColor', 'rgb(33, 37, 41)');
$sansFontFamily            = ($sansFontFamily = $params->get('sansFontFamily')) ? '--bs-font-sans-serif: ' . $sansFontFamily : '';
$contentHeadingImage       = $params->get('contentheadingImage', 1);
$ribbon                    = $params->get('ribbonsOnOff', 1);
if ($contentHeadingImage == 1)
{
	$contentHeadingImageValue = 'url(' . HTMLHelper::_('image', 'balloon.png', '', null, true, 1) . ')';
}
elseif ($contentHeadingImage == 2)
{
	$contentHeadingImageValue = 'url(' . Uri::root() . MediaHelperAlias::getCleanMediaFieldValue($params->get('contentheadingImageMedia')) . ')';
}
else
{
	$contentHeadingImageValue = '';
}

$wa->addInlineStyle(':root {
  --bs-body-bg: ' . $bodyBackground . ';
  --bs-body-bg-rgb: ' . str_replace(['rgb(', ')'], '', $bodyBackground) . ';
  --bs-body-color: ' . $textColor . ';
  --bs-body-color-rgb: ' . str_replace(['rgb(', ')'], '', $textColor) . ';
  --bs-body-font-size: ' . $params->get('baseFontSize', '1rem') . ';
  --bs-body-line-height: ' . $params->get('baseLineHeight', '1.5') . ';
  ' . $sansFontFamily . ';
  --allrounder-link-color: ' . $params->get('linkColor', '#a52a2a') . ';
  --allrounder-logo-color: ' . $params->get('logoColor', '#0299DC') . ';
  --allrounder-slogan-color: ' . $params->get('sloganColor', '#FF2402') . ';
  --allrounder-wrapper-bg-color: ' . $params->get('wrapperBgColor', 'rgba(239, 239, 239, 1)') . ';
  --allrounder-wrapper-bg-opacity: ' . $params->get('wrapperBgOpacity', '100') / 100 . ';
  --allrounder-wrapper-border-color: ' . $params->get('wrapperBorderColor', '#FFFFFF') . ';
  --allrounder-header-bg-color: ' . $params->get('headBgColor', '#383838') . ';
  --allrounder-header-bg-color-light: ' . AllrounderHelper::luminance($params->get('headBgColor', '#383838'), 0.4) . ';
  --allrounder-header-border-color: ' . $params->get('headBorderColor', '#000000') . ';
  --allrounder-header-ribbon-color: ' . $params->get('headRibbonColor', '#222222') . ';
  --allrounder-subhead-bg-color: ' . $params->get('subheadBgColor', '#f9f9f9') . ';
  --allrounder-subhead-bg-color-dark: ' . AllrounderHelper::luminance($params->get('subheadBgColor', '#f9f9f9'), -0.15) . ';
  --allrounder-subhead-border-color: ' . $params->get('subheadBorderColor', '#ffffff') . ';
  --allrounder-subhead-font-color: ' . $params->get('subheadFontColor', '#555555') . ';
  --allrounder-content-bg-color: ' . $params->get('contentBgColor', '#f9f9f9') . ';
  --allrounder-content-border-color: ' . $params->get('contentBorderColor', '#E9E9E9') . ';
  --allrounder-article-bg-color: ' . $params->get('articleBgColor', '#ffffff') . ';
  --allrounder-article-border-color: ' . $params->get('articleBorderColor', '#e9e9e9') . ';
  --allrounder-article-font-color: ' . $params->get('articleTitleColor', '#484848') . ';
  --allrounder-left-sidebar-width: ' . $params->get('leftcolWidth', '20%') . ';
  --allrounder-right-sidebar-width: ' . $params->get('rightcolWidth', '20%') . ';
  --allrounder-margin-top: ' . $params->get('wrapperMarginTop', '10px') . ';
  --allrounder-margin-bottom: ' . $params->get('wrapperMarginBottom', '5px') . ';
  --allrounder-padding-top: ' . $params->get('wrapperPaddingTop', '15px') . ';
  --allrounder-padding-bottom: ' . $params->get('wrapperPaddingBottom', '10px') . ';
  --allrounder-subfoot-bg-color: ' . $params->get('subfootBgColor', '#313131') . ';
  --allrounder-subfoot-font-color: ' . $params->get('subfootColor', '#5b6c71') . ';
  --allrounder-subfoot-border-top-color: ' . $params->get('subfootBorderTopColor', '#ffffff') . ';
  --allrounder-subfoot-border-bottom-color: ' . $params->get('subfootBorderBottomColor', '#222222') . ';
  --allrounder-footer-bg-color: ' . $params->get('footBgColor', '#222222') . ';
  --allrounder-footer-bg-color-light: ' . AllrounderHelper::luminance($params->get('footBgColor', '#222222'), 0.4) . ';
  --allrounder-footer-font-color: ' . $params->get('footColor', '#5B6C71') . ';
  --allrounder-footer-border-color: ' . $params->get('footBorderColor', '#444444') . ';
  --allrounder-footer-ribbon-color: ' . $params->get('footCornerColor', '#222222') . ';
  --allrounder-footer-gotop-color: ' . $params->get('gotopLinkColor', '#ffffff') . ';
  --allrounder-sidebar-module-title-bg-color: ' . $params->get('moduleh3BgColor', '#383838') . ';
  --allrounder-sidebar-module-title-bg-color-light: ' . AllrounderHelper::luminance($params->get('moduleh3BgColor', '#383838'), 0.15) . ';
  --allrounder-sidebar-module-title-border-color-top: ' . $params->get('moduleh3BorderTopColor', '#555555') . ';
  --allrounder-sidebar-module-title-border-color-inner: ' . $params->get('moduleh3BorderInnerColor', '#555555') . ';
  --allrounder-sidebar-module-title-border-color-outer: ' . $params->get('moduleh3BorderOuterColor', '#999999') . ';
  --allrounder-sidebar-module-title-font-color: ' . $params->get('moduleh3Color', '#dddddd') . ';
  --allrounder-sidebar-module-title-ribbon-color: ' . $params->get('moduleh3CornerColor', '#222222') . ';
  --allrounder-sidebar-module-content-bg-color: ' . $params->get('moduleBgColor', '#f9f9f9') . ';
  --allrounder-sidebar-module-content-border-color-inner: ' . $params->get('moduleBorderInnerColor', '#dddddd') . ';
  --allrounder-sidebar-module-content-border-color-outer: ' . $params->get('moduleBorderOuterColor', '#ffffff') . ';
  --allrounder-sidebar-module-content-font-color: ' . $params->get('moduleColor', '#505050') . ';
  --allrounder-module-font-color: ' . $params->get('moduletableFont', '#505050') . ';
  --allrounder-module-bg-color: ' . $params->get('moduletableBg', '#ffffff') . ';
  --allrounder-module-border-color: ' . $params->get('moduletableBorder', '#dddddd') . ';
  --allrounder-module-title-bg-color: ' . $params->get('moduletableh3Bg', '#efefef') . ';
  --allrounder-module-title-bg-color-light: ' . AllrounderHelper::luminance($params->get('moduletableh3Bg', '#efefef'), 0.15) . ';
  --allrounder-module-title-border-color: ' . $params->get('moduletableh3Border', '#dddddd') . ';
  --allrounder-menu-font-color: ' . $params->get('mainMenuFont', '#333333') . ';
  --allrounder-menu-border-bottom-color: ' . $params->get('mainMenuBorderBottom', '#cccccc') . ';
  --allrounder-menu-font-hover-color: ' . $params->get('mainMenuFontHover', '#000000') . ';
  --allrounder-menu-font-current-color: ' . $params->get('mainMenuFontCurrent', '#000000') . ';
  --allrounder-menu-font-submenu-color: ' . $params->get('mainMenuLiLiFont', '#000000') . ';
  --allrounder-input-font-color: ' . $params->get('inputFontColor', '#555555') . ';
  --allrounder-input-bg-color: ' . $params->get('inputBackground', '#efefef') . ';
  --allrounder-input-font-hover-color: ' . $params->get('inputHoverFontColor', '#555555') . ';
  --allrounder-input-bg-hover-color: ' . $params->get('inputHoverBgColor', '#f9f9f9') . ';
  --allrounder-input-border-left-color: ' . $params->get('inputBorderLeftColor', '#cccccc') . ';
  --allrounder-input-border-top-color: ' . $params->get('inputBorderTopColor', '#cccccc') . ';
  --allrounder-input-border-right-color: ' . $params->get('inputBorderRightColor', '#ffffff') . ';
  --allrounder-input-border-bottom-color: ' . $params->get('inputBorderBottomColor', '#ffffff') . ';
  --allrounder-button-font-color: ' . $params->get('buttonColor', '#555555') . ';
  --allrounder-button-bg-color: ' . $params->get('buttonBgColor', '#efefef') . ';
  --allrounder-button-bg-color-light: ' . AllrounderHelper::luminance($params->get('buttonBgColor', '#efefef'), .3) . ';
  --allrounder-button-font-hover-color: ' . $params->get('buttonHoverColor', '#555555') . ';
  --allrounder-button-bg-hover-color: ' . $params->get('buttonBgHoverColor', '#efefef') . ';
  --allrounder-button-bg-hover-color-light: ' . AllrounderHelper::luminance($params->get('buttonBgHoverColor', '#efefef'), .3) . ';
  --allrounder-button-border-left-color: ' . $params->get('buttonBorderLeft', '#cccccc') . ';
  --allrounder-button-border-top-color: ' . $params->get('buttonBorderTop', '#cccccc') . ';
  --allrounder-button-border-right-color: ' . $params->get('buttonBorderRight', '#ffffff') . ';
  --allrounder-button-border-bottom-color: ' . $params->get('buttonBorderBottom', '#ffffff') . ';
  --allrounder-tooltip-font-color: ' . $params->get('tooltipFont', '#800000') . ';
  --allrounder-tooltip-bg-color: ' . $params->get('tooltipBg', '#F2F3F5') . ';
  --allrounder-tooltip-border-color: ' . $params->get('tooltipBorder', '#A6A7AB') . ';
  --allrounder-dropdown-bg-image: url(../images/menu/dropdown-' . $params->get('dropdownImage', 'smooth') . '.png);
  --allrounder-dropdown-bg-image-parent: url(../images/menu/menu-parent-' . $params->get('dropdownImage', 'smooth') . '.png);
  --allrounder-dropdown-bg-image-parent-hover: url(../images/menu/menu-parent-hover-' . $params->get('dropdownImage', 'smooth') . '.png);
  --allrounder-dropdown-bg-color: ' . $params->get('ddBackground', '#222222') . ';
  --allrounder-dropdown-border-top-color: ' . $params->get('ddBorderTop', '#ffffff') . ';
  --allrounder-dropdown-border-bottom-color: ' . $params->get('ddBorderBottom', '#ffffff') . ';
  --allrounder-dropdown-li-border-right-color: ' . $params->get('ulLiBorderRight', '#555555') . ';
  --allrounder-dropdown-li-a-border-left-color: ' . $params->get('ulLiaBorderLeft', '#000000') . ';
  --allrounder-dropdown-li-a-border-top-color: ' . $params->get('ulLiaBorderTop', '#000000') . ';
  --allrounder-dropdown-li-a-border-right-color: ' . $params->get('ulLiaBorderRight', '#222222') . ';
  --allrounder-dropdown-li-a-border-bottom-color: ' . $params->get('ulLiaBorderBottom', '#333333') . ';
  --allrounder-dropdown-li-a-font-color: ' . $params->get('ulLiaColor', '#cccccc') . ';
  --allrounder-dropdown-li-a-bg-color: ' . $params->get('ulLiaBackground', '#222222') . ';
  --allrounder-dropdown-li-a-font-hover-color: ' . $params->get('ulLiaHoverColor', '#ffffff') . ';
  --allrounder-dropdown-li-a-font-hover-color: ' . $params->get('ulLiaHoverColor', '#ffffff') . ';
  --allrounder-dropdown-l2-ul-bg-color: ' . $params->get('ululBackground', '#222222') . ';
  --allrounder-dropdown-l2-ul-border-color: ' . $params->get('ululBorder', '#000000') . ';
  --allrounder-dropdown-l2-ul-li-a-border-left-color: ' . $params->get('ulLiliaBorderLeft', '#333333') . ';
  --allrounder-dropdown-l2-ul-li-a-border-top-color: ' . $params->get('ulLiliaBorderTop', '#000000') . ';
  --allrounder-dropdown-l2-ul-li-a-border-right-color: ' . $params->get('ulLiliaBorderRight', '#333333') . ';
  --allrounder-dropdown-l2-ul-li-a-border-bottom-color: ' . $params->get('ulLiliaBorderBottom', '#333333') . ';
  --allrounder-dropdown-l2-ul-li-a-font-color: ' . $params->get('ulLiliaColor', '#999999') . ';
  --allrounder-dropdown-l2-ul-li-a-font-hover-color: ' . $params->get('ulLiliaHoverColor', '#ffffff') . ';
  --allrounder-dropdown-l2-ul-li-a-bg-color: ' . $params->get('ulLiliBackground', '#171717') . ';
  --allrounder-dropdown-l2-ul-li-a-bg-hover-color: ' . $params->get('ulLiliHoverBackground', '#212121') . ';
}
body {
  background-image: url(' . Uri::root() . $bodyBackgroundImage . ');
  background-repeat: ' . $bodyBackgroundImageRepeat . ';
}'
);

if ($contentHeadingImageValue)
{
	$this->addStyleDeclaration('
	.page-header h2,
	h2.item-title,
	.page-header h1[itemprop] {
		background-image: ' . $contentHeadingImageValue . ';
		background-repeat: no-repeat;
		padding-left: 40px;
	}');
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<jdoc:include type="metas"/>
		<jdoc:include type="styles"/>
		<jdoc:include type="scripts"/>
		<?php if ($customCssCode = $params->get('customCssCode')) : ?>
			<style><?php echo htmlspecialchars($customCssCode, ENT_NOQUOTES); ?></style>
		<?php endif; ?>
	</head>
	<body>
		<div id="wrapper" class="container-md<?php echo $params->get('ribbonsOnOff', 1) ? ' has-ribbons' : ''; ?>">
			<?php require $modules . 'toppanel.php'; ?>
			<?php require $modules . 'beforehead.php'; ?>
			<div id="header_container">
				<?php if ($params->get('showHeader', 1)) : ?>
					<div id="header">
						<?php if ($this->countModules('headermodule1')) : ?>
							<div id="headermodule1">
								<jdoc:include type="modules" name="headermodule1" style="none"/>
								<div class="clearfix"></div>
							</div>
						<?php endif; ?>
						<?php if ($this->countModules('banner')) : ?>
							<div id="banner_outer">
								<div id="banner">
									<jdoc:include type="modules" name="banner" style="none"/>
								</div>
							</div>
						<?php endif; ?>
						<div id="logo">
							<?php if ($params->get('showimgLogo', 1)) : ?>
								<a class="imglogo"
								   href="index.php"><?php echo HTMLHelper::_('image', 'logo/' . $params->get('imgLogo', 'logo-transparent.png'), 'Logo', null, true); ?></a>
							<?php endif; ?>
							<?php if ($params->get('showMediaLogo')) : ?>
								<a class="medialogo" href="index.php"><img alt="Logo"
																		   src="<?php echo Uri::root() . htmlspecialchars($params->get('mediaLogo')); ?>"/></a>
							<?php endif; ?>
							<?php if ($params->get('showtextLogo')) : ?>
								<a class="logo"
								   href="index.php"><?php echo htmlspecialchars($params->get('textLogo', $app->get('sitename'))); ?></a>
							<?php endif; ?>
							<?php if ($params->get('showSlogan')) : ?>
								<div class="slogan"><?php echo htmlspecialchars($params->get('slogan')); ?></div>
							<?php endif; ?>
						</div>
						<?php if ($this->countModules('headermodule2')) : ?>
							<div id="headermodule2">
								<jdoc:include type="modules" name="headermodule2" style="none"/>
								<div class="clearfix"></div>
							</div>
						<?php endif; ?>
						<span class="ribbon left">&nbsp;</span>
						<span class="ribbon right">&nbsp;</span>
					</div>
				<?php endif; ?>
				<?php require $modules . 'afterhead.php'; ?>
				<?php if ($this->countModules('position-1')) : ?>
					<div id="topmenu">
						<jdoc:include type="modules" name="position-1" style="none"/>
					</div>
				<?php endif; ?>
				<?php if ($this->countModules('position-1-1')) : ?>
					<jdoc:include type="modules" name="position-1-1" style="none"/>
				<?php endif; ?>
			</div>
			<?php if ($this->countModules('breadcrumbs') or $this->countModules('position-0')) : ?>
				<div id="subhead">
					<?php if ($this->countModules('breadcrumbs')) : ?>
						<jdoc:include type="modules" name="breadcrumbs" style="none"/>
					<?php endif; ?>
					<?php if ($this->countModules('position-0')) : ?>
						<div id="search">
							<jdoc:include type="modules" name="position-0" style="none"/>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div id="foot_container">
				<?php require $modules . 'foot.php'; ?>
				<?php if ($this->countModules('footer')) : ?>
					<div id="footermodule">
						<jdoc:include type="modules" name="footer" style="none"/>
					</div>
				<?php endif; ?>
				<?php if ($params->get('showSubfoot', 1)) : ?>
					<div id="subfoot">
						<?php if ($copyText = $params->get('copyText')) : ?>
							<div class="copytext">&copy; <?php echo htmlspecialchars($copyText); ?></div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<div class="clearfix"></div>
				<div id="footer">
					<div class="footer-inner">
						<span class="ribbon left">&nbsp;</span>
						<span class="ribbon right">&nbsp;</span>
						<div id="scroll_up">
							<a href="#" id="gotop" title="<?php echo Text::_('TPL_ALLROUNDER_SCROLL_TOP_TIP'); ?>">
								<?php echo Text::_('TPL_ALLROUNDER_SCROLL_TOP_TEXT'); ?>
							</a>
						</div>
						<?php require $modules . 'footermodules.php'; ?>
					</div>
					<div class="footer-bottom">
						<?php if ($params->get('showDate', 1)) : ?>
							<span id="date"><?php echo HTMLHelper::_('date', 'now', Text::_('DATE_FORMAT_LC1')); ?></span>
						<?php endif; ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="container">
				<?php if ($this->countModules('slider')) : ?>
					<div id="slider">
						<jdoc:include type="modules" name="slider" style="none"/>
					</div>
					<div class="clearfix"></div>
				<?php endif; ?>
				<?php require $modules . 'top.php'; ?>
				<div class="row">
					<?php if ($this->countModules('sidebar-left')) : ?>
						<div id="leftcol" class="order-md-1 order-<?php echo $params->get('leftcolMobilePosition', '1'); ?>">
							<jdoc:include type="modules" name="sidebar-left" style="AllrounderSidebar"/>
						</div>
					<?php endif; ?>
					<?php if ($this->countModules('sidebar-right')) : ?>
						<div id="rightcol" class="order-md-5 order-<?php echo $params->get('rightcolMobilePosition', '5'); ?>">
							<jdoc:include type="modules" name="sidebar-right" style="AllrounderSidebar"/>
						</div>
					<?php endif; ?>
					<div id="content" class="col order-3">
						<?php require $modules . 'beforecontent.php'; ?>
						<div id="maincontent" class="row shadowed">
							<jdoc:include type="message"/>
							<jdoc:include type="component"/>
						</div>
						<?php require $modules . 'aftercontent.php'; ?>
					</div>
				</div>
				<?php require $modules . 'bottom.php'; ?>
			</div>
		</div>
		<jdoc:include type="modules" name="debug" style="none"/>
	</body>
	<?php require $modules . 'sidepanel.php'; ?>
</html>
