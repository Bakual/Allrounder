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
 * Module Chrome used in sidebars
 *
 * @param   object  $module    The module object
 * @param   object  &$params   JRegistry object containing module parameters
 * @param   object  &$attribs  Additional attributes
 *
 * @return  void
 *
 * @since   1.1
 */
function ModChrome_RoundSidebar($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$moduleSuffix   = htmlspecialchars($params->get('moduleclass_sfx'));
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$bootstrapClass = $bootstrapSize ? ' span' . $bootstrapSize : ''; ?>
	<<?php echo $moduleTag; ?> class="module-outer<?php echo $moduleSuffix . $bootstrapClass; ?>">
		<?php if ($module->showtitle) : ?>
			<<?php echo $headerTag; ?> class="<?php echo $params->get('header_class', 'moduleh3'); ?>">
				<strong><?php echo $module->title; ?></strong>
				<span class="h3eck">&nbsp;</span>
			</<?php echo $headerTag; ?>>
		<?php endif; ?>
		<div class="module<?php echo $moduleSuffix; ?>">
			<div class="lvround-inner">
				<?php echo $module->content; ?>
			</div>
		</div>
		<span class="shadow-left">&nbsp;</span>
		<span class="shadow-right">&nbsp;</span>
	</<?php echo $moduleTag; ?>>
<?php }

/**
 * Module Chrome "lvround"
 *
 * @param   object  $module    The module object
 * @param   object  &$params   JRegistry object containing module parameters
 * @param   object  &$attribs  Additional attributes
 *
 * @return  void
 *
 * @since   1.0
 */
function ModChrome_lvRound($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$bootstrapClass = $bootstrapSize ? ' span' . $bootstrapSize : ''; ?>
	<<?php echo $moduleTag; ?> class="module<?php echo $params->get('moduleclass_sfx'); ?><?php echo $bootstrapClass; ?>">
		<div class="module-content">
			<div>
				<div>
					<div class="lvround-inner">
						<?php if ($module->showtitle != 0) : ?>
							<h3 class="moduleh3"><strong><?php echo $module->title; ?></strong></h3>
						<?php endif; ?>
						<?php echo $module->content; ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<span class="shadow-left">&nbsp;</span>
		<span class="shadow-right">&nbsp;</span>
	</div>
<?php }
