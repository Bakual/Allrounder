<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2021 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

use Joomla\Utilities\ArrayHelper;

/** @var Array $displayData */
$module  = $displayData['module'];
$params  = $displayData['params'];
$attribs = $displayData['attribs'];

if ($module->content === null || $module->content === '')
{
	return;
}

$moduleTag              = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES);
$moduleAttribs          = [];
$moduleAttribs['class'] = $module->position . ' allrounderchrome ' . htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_QUOTES);
$bootstrapSize           = (int) $params->get('bootstrap_size', 0);
$moduleAttribs['class'] .= $bootstrapSize ? ' col-' . $bootstrapSize : '';
$chromeDesign            = (int) $params->get('allrounder_chrome_design', 0);
$moduleAttribs['class'] .= $chromeDesign ? ' module-style' . $chromeDesign : '';
$headerTag              = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES);
$headerClass            = htmlspecialchars($params->get('header_class', 'moduleh3'), ENT_QUOTES);
$headerAttribs          = [];

// Only output a header class if one is set
if ($headerClass !== '')
{
	$headerAttribs['class'] = $headerClass;
}

// Only add aria if the moduleTag is not a div
if ($moduleTag !== 'div')
{
	if ($module->showtitle) :
		$moduleAttribs['aria-labelledby'] = 'mod-' . $module->id;
		$headerAttribs['id']              = 'mod-' . $module->id;
	else:
		$moduleAttribs['aria-label'] = $module->title;
	endif;
}
?>
<<?php echo $moduleTag; ?> <?php echo ArrayHelper::toString($moduleAttribs); ?>>
	<div class="module-content shadowed">
		<div class="chrome-border">
			<div class="module-inner">
				<?php if ($module->showtitle) : ?>
					<<?php echo $headerTag; ?> <?php echo ArrayHelper::toString($headerAttribs); ?>>
						<?php echo $module->title; ?>
					<<?php echo '/' . $headerTag; ?>>
				<?php endif; ?>
				<?php echo $module->content; ?>
			</div>
		</div>
	</div>
<<?php echo '/' . $moduleTag; ?>>
