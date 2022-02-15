<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2021 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('foot1') or $this->countModules('foot2') or $this->countModules('foot3')) : ?>
	<div id="foot">
		<?php if ($this->countModules('foot1')) : ?>
			<div id="foot1" class="row">
				<jdoc:include type="modules" name="foot1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('foot2')) : ?>
			<div id="foot2" class="row">
				<jdoc:include type="modules" name="foot2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('foot3')) : ?>
			<div id="foot3" class="row">
				<jdoc:include type="modules" name="foot3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
