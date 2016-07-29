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
	$moduleTag      = $params->get('module_tag', 'div');
	$moduleSuffix   = htmlspecialchars($params->get('moduleclass_sfx'));
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$bootstrapClass = $bootstrapSize ? ' span' . $bootstrapSize : ''; ?>
	<<?php echo $moduleTag; ?> class="module-outer<?php echo $moduleSuffix . $bootstrapClass; ?>">
		<?php if ($module->showtitle) : ?>
			<?php if (strpos($moduleSuffix,'mobile_fold') !== false) : ?>
				<input class="hackbox" id="<?php echo 'hackbox_mod' . $module->id; ?>" type="checkbox">
				<label for="<?php echo 'hackbox_mod' . $module->id; ?>">
			<?php endif; ?>
			<<?php echo $headerTag; ?> class="<?php echo $params->get('header_class', 'moduleh3-sidebar'); ?>">
				<?php echo $module->title; ?>
				<span class="h3eck">&nbsp;</span>
			</<?php echo $headerTag; ?>>
			<?php if (strpos($moduleSuffix,'mobile_fold') !== false) : ?>
				</label>
			<?php endif; ?>
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
	$moduleTag      = $params->get('module_tag', 'div');
	$moduleSuffix   = htmlspecialchars($params->get('moduleclass_sfx'));
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$bootstrapClass = $bootstrapSize ? ' span' . $bootstrapSize : ''; ?>
	<<?php echo $moduleTag; ?> class="module<?php echo $moduleSuffix; ?><?php echo $bootstrapClass; ?>">
		<div class="module-content chrome-border left-top">
			<div class="chrome-border right-top">
				<div class="chrome-border right-bottom">
					<div class="module-inner chrome-border left-bottom">
						<?php if ($module->showtitle != 0) : ?>
							<?php if (strpos($moduleSuffix,'mobile_fold') !== false) : ?>
								<input class="hackbox" id="<?php echo 'hackbox_mod' . $module->id; ?>" type="checkbox">
								<label for="<?php echo 'hackbox_mod' . $module->id; ?>">
							<?php endif; ?>
							<<?php echo $headerTag; ?> class="<?php echo $params->get('header_class', 'moduleh3'); ?>">
								<?php echo $module->title; ?>
							<<?php echo '/' . $headerTag; ?>>
							<?php if (strpos($moduleSuffix,'mobile_fold') !== false) : ?>
								</label>
							<?php endif; ?>
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
