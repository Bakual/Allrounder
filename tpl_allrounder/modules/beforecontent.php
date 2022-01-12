<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2021 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('beforecontent1') or $this->countModules('beforecontent2') or $this->countModules('beforecontent3')) : ?>
	<div id="beforecontent">
		<?php if ($this->countModules('beforecontent1')) : ?>
			<div id="beforecontent1" class="row">
				<jdoc:include type="modules" name="beforecontent1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('beforecontent2')) : ?>
			<div id="beforecontent2" class="row">
				<jdoc:include type="modules" name="beforecontent2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('beforecontent3')) : ?>
			<div id="beforecontent3" class="row">
				<jdoc:include type="modules" name="beforecontent3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
