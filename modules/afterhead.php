<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2023 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('afterhead1') or $this->countModules('afterhead2') or $this->countModules('afterhead3')) : ?>
	<div id="afterhead">
		<?php if ($this->countModules('afterhead1')) : ?>
			<div id="afterhead1" class="row">
				<jdoc:include type="modules" name="afterhead1" style="Allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('afterhead2')) : ?>
			<div id="afterhead2" class="row">
				<jdoc:include type="modules" name="afterhead2" style="Allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('afterhead3')) : ?>
			<div id="afterhead3" class="row">
				<jdoc:include type="modules" name="afterhead3" style="Allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
