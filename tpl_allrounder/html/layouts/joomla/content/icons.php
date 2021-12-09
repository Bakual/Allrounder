<?php
/**
 * @package     Lessallrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

$canEdit = $displayData['params']->get('access-edit');
?>
<?php if (empty($displayData['print'])) :
	if ($canEdit || $displayData['params']->get('show_print_icon') || $displayData['params']->get('show_email_icon')) : ?>
		<div class="pull-right">
			<ul class="actions inline">
				<?php if ($displayData['params']->get('show_print_icon')) : ?>
					<li class="print-icon">
						<?php echo JHtml::_('icon.print_popup', $displayData['item'], $displayData['params']); ?>
					</li>
				<?php endif;
				if ($displayData['params']->get('show_email_icon')) : ?>
					<li class="email-icon">
						<?php echo JHtml::_('icon.email', $displayData['item'], $displayData['params']); ?>
					</li>
				<?php endif;
				if ($canEdit) : ?>
					<li class="edit-icon">
						<?php echo JHtml::_('icon.edit', $displayData['item'], $displayData['params']); ?>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	<?php endif;
else : ?>
	<div class="pull-right">
		<?php echo JHtml::_('icon.print_screen', $displayData['item'], $displayData['params']); ?>
	</div>
<?php endif; ?>
