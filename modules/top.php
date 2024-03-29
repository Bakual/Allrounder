<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2023 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('top1') or $this->countModules('top2') or $this->countModules('top3')) : ?>
	<div id="top">
		<?php if ($this->countModules('top1')) : ?>
			<div id="top1" class="row">
				<jdoc:include type="modules" name="top1" style="Allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('top2')) : ?>
			<div id="top2" class="row">
				<jdoc:include type="modules" name="top2" style="Allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('top3')) : ?>
			<div id="top3" class="row">
				<jdoc:include type="modules" name="top3" style="Allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
