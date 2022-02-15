<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2021 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('aftercontent1') or $this->countModules('aftercontent2') or $this->countModules('aftercontent3')) : ?>
	<div id="aftercontent">
		<?php if ($this->countModules('aftercontent1')) : ?>
			<div id="aftercontent1" class="row">
				<jdoc:include type="modules" name="aftercontent1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('aftercontent2')) : ?>
			<div id="aftercontent2" class="row">
				<jdoc:include type="modules" name="aftercontent2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('aftercontent3')) : ?>
			<div id="aftercontent3" class="row">
				<jdoc:include type="modules" name="aftercontent3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
