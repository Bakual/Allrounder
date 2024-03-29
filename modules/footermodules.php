<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2023 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('footermodule1') or $this->countModules('footermodule2')) : ?>
	<div id="footermodules">
		<?php if ($this->countModules('footermodule1')) : ?>
			<div id="footermodule1" class="row">
				<jdoc:include type="modules" name="footermodule1" style="html5" />
			</div>
		<?php endif;
		if ($this->countModules('footermodule2')) : ?>
			<div id="footermodule2" class="row">
				<jdoc:include type="modules" name="footermodule2" style="html5" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
