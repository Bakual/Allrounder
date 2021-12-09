<?php
/**
 * @package     Lessallrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('aftercontent1 or aftercontent2 or aftercontent3')) : ?>
	<div id="aftercontent">
		<?php if ($this->countModules('aftercontent1')) : ?>
			<div id="aftercontent1" class="row-fluid">
				<jdoc:include type="modules" name="aftercontent1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('aftercontent2')) : ?>
			<div id="aftercontent2" class="row-fluid">
				<jdoc:include type="modules" name="aftercontent2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('aftercontent3')) : ?>
			<div id="aftercontent3" class="row-fluid">
				<jdoc:include type="modules" name="aftercontent3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;

// Advert positions are deprecated. Will be removed with 2.0
if ($this->countModules('advert4 or advert5 or advert6')) : ?>
	<div id="aftercontent">
		<?php if ($this->countModules('advert4')) : ?>
			<div id="aftercontent1" class="row-fluid">
				<jdoc:include type="modules" name="advert4" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('advert5')) : ?>
			<div id="aftercontent2" class="row-fluid">
				<jdoc:include type="modules" name="advert5" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('advert6')) : ?>
			<div id="aftercontent3" class="row-fluid">
				<jdoc:include type="modules" name="advert6" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
