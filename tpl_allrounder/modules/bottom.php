<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2021 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('bottom1 or bottom2 or bottom3')) : ?>
	<div id="bottom">
		<?php if ($this->countModules('bottom1')) : ?>
			<div id="bottom1" class="row">
				<jdoc:include type="modules" name="bottom1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('bottom2')) : ?>
			<div id="bottom2" class="row">
				<jdoc:include type="modules" name="bottom2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('bottom3')) : ?>
			<div id="bottom3" class="row">
				<jdoc:include type="modules" name="bottom3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
