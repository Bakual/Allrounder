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
 * Module Chrome used in left sidebar
 *
 * @param   object  $module    The module object
 * @param   object  &$params   JRegistry object containing module parameters
 * @param   object  &$attribs  Additional attributes
 *
 * @return  void
 *
 * @since   1.0
 */
function ModChrome_lvRoundLeft($module, &$params, &$attribs)
{ ?>
	<div class="module-outer<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($module->showtitle != 0) : ?>
			<h3 class="moduleh3"><strong><?php echo $module->title; ?></strong>
				<span class="h3eckl">&nbsp;</span>
			</h3>
		<?php endif; ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
			<div>
				<div>
					<div class="lvround-inner">
						<?php echo $module->content; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<span class="shadow-left">&nbsp;</span>
		<span class="shadow-right">&nbsp;</span>
	</div>
<?php }

/**
 * Module Chrome used in right sidebar
 *
 * @param   object  $module    The module object
 * @param   object  &$params   JRegistry object containing module parameters
 * @param   object  &$attribs  Additional attributes
 *
 * @return  void
 *
 * @since   1.0
 */
function ModChrome_lvRoundRight($module, &$params, &$attribs)
{ ?>
	<div class="module-outer<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($module->showtitle != 0) : ?>
			<h3 class="moduleh3"><strong><?php echo $module->title; ?></strong>
				<span class="h3eckr">&nbsp;</span>
			</h3>
		<?php endif; ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
			<div>
				<div>
					<div class="lvround-inner">
						<?php echo $module->content; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<span class="shadow-left">&nbsp;</span>
		<span class="shadow-right">&nbsp;</span>
	</div>
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
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = ($bootstrapSize) ? ' span' . $bootstrapSize : '';
?>
	<div class="module<?php echo $params->get('moduleclass_sfx'); ?><?php echo $moduleClass; ?>">
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
