<?php
/**
 * @package     Lessallrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

/**
 * Module Chrome "allroundersidebar" used in sidebars
 *
 * @param   object  $module    The module object
 * @param   object  &$params   JRegistry object containing module parameters
 * @param   object  &$attribs  Additional attributes
 *
 * @return  void
 *
 * @since   1.1
 */
function ModChrome_AllrounderSidebar($module, &$params, &$attribs)
{
	$moduleTag      = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES, 'UTF-8');
	$moduleSuffix   = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES, 'UTF-8');
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$bootstrapClass = $bootstrapSize ? ' span' . $bootstrapSize : ''; ?>
	<<?php echo $moduleTag; ?> class="module-outer<?php echo $moduleSuffix . $bootstrapClass; ?>">
		<?php if ($module->showtitle) : ?>
			<<?php echo $headerTag; ?> class="<?php echo htmlspecialchars($params->get('header_class', 'moduleh3-sidebar'), ENT_COMPAT, 'UTF-8'); ?>">
				<?php echo $module->title; ?>
				<span class="h3eck">&nbsp;</span>
			</<?php echo $headerTag; ?>>
		<?php endif; ?>
		<div class="module<?php echo $moduleSuffix; ?>">
			<div class="module-inner">
				<?php echo $module->content; ?>
			</div>
		</div>
		<span class="shadow-left">&nbsp;</span>
		<span class="shadow-right">&nbsp;</span>
	</<?php echo $moduleTag; ?>>
<?php }

/**
 * Module Chrome "allrounder"
 *
 * @param   object  $module    The module object
 * @param   object  &$params   JRegistry object containing module parameters
 * @param   object  &$attribs  Additional attributes
 *
 * @return  void
 *
 * @since   1.0
 */
function ModChrome_Allrounder($module, &$params, &$attribs)
{
	$moduleTag      = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES, 'UTF-8');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES, 'UTF-8');
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$bootstrapClass = $bootstrapSize ? ' span' . $bootstrapSize : ''; ?>
	<<?php echo $moduleTag; ?> class="module<?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8'); ?><?php echo $bootstrapClass; ?>">
		<div class="module-content chrome-border left-top">
			<div class="chrome-border right-top">
				<div class="chrome-border right-bottom">
					<div class="module-inner chrome-border left-bottom">
						<?php if ($module->showtitle != 0) : ?>
							<<?php echo $headerTag; ?> class="<?php echo htmlspecialchars($params->get('header_class', 'moduleh3'), ENT_COMPAT, 'UTF-8'); ?>">
								<?php echo $module->title; ?>
							<<?php echo '/' . $headerTag; ?>>
						<?php endif; ?>
						<?php echo $module->content; ?>
					</div>
				</div>
			</div>
		</div>
		<span class="shadow-left">&nbsp;</span>
		<span class="shadow-right">&nbsp;</span>
	<<?php echo '/' . $moduleTag; ?>>
<?php }
