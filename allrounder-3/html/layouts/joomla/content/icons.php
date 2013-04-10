<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('JPATH_BASE') or die;
$canEdit = $displayData['params']->get('access-edit');
?>
<?php if (empty($displayData['print'])) :
	if ($canEdit || $displayData['params']->get('show_print_icon') || $displayData['params']->get('show_email_icon')) : ?>
		<div class="btn-group pull-right">
			<ul class="actions">
				<?php if ($displayData['params']->get('show_print_icon')) : ?>
					<li class="print-icon"> <?php echo JHtml::_('icon.print_popup', $displayData['item'], $displayData['params']); ?> </li>
				<?php endif; ?>
				<?php if ($displayData['params']->get('show_email_icon')) : ?>
					<li class="email-icon"> <?php echo JHtml::_('icon.email', $displayData['item'], $displayData['params']); ?> </li>
				<?php endif; ?>
				<?php if ($canEdit) : ?>
					<li class="edit-icon"> <?php echo JHtml::_('icon.edit', $displayData['item'], $displayData['params']); ?> </li>
				<?php endif; ?>
			</ul>
		</div>
	<?php endif;
else : ?>
	<div class="pull-right">
		<?php echo JHtml::_('icon.print_screen', $displayData['item'], $displayData['params']); ?>
	</div>
<?php endif; ?>
