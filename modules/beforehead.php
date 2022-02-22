<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2022 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('beforehead1') or $this->countModules('beforehead2') or $this->countModules('beforehead3')) : ?>
	<div id="beforehead">
		<?php if ($this->countModules('beforehead1')) : ?>
			<div id="beforehead1" class="row">
				<jdoc:include type="modules" name="beforehead1" style="Allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('beforehead2')) : ?>
			<div id="beforehead2" class="row">
				<jdoc:include type="modules" name="beforehead2" style="Allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('beforehead3')) : ?>
			<div id="beforehead3" class="row">
				<jdoc:include type="modules" name="beforehead3" style="Allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
