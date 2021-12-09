<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('top1 or top2 or top3')) : ?>
	<div id="top">
		<?php if ($this->countModules('top1')) : ?>
			<div id="top1" class="row-fluid">
				<jdoc:include type="modules" name="top1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('top2')) : ?>
			<div id="top2" class="row-fluid">
				<jdoc:include type="modules" name="top2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('top3')) : ?>
			<div id="top3" class="row-fluid">
				<jdoc:include type="modules" name="top3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
