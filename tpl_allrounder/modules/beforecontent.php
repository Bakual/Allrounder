<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('beforecontent1 or beforecontent2 or beforecontent3')) : ?>
	<div id="beforecontent">
		<?php if ($this->countModules('beforecontent1')) : ?>
			<div id="beforecontent1" class="row-fluid">
				<jdoc:include type="modules" name="beforecontent1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('beforecontent2')) : ?>
			<div id="beforecontent2" class="row-fluid">
				<jdoc:include type="modules" name="beforecontent2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('beforecontent3')) : ?>
			<div id="beforecontent3" class="row-fluid">
				<jdoc:include type="modules" name="beforecontent3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;

// Advert positions are deprecated. Will be removed with 2.0
if ($this->countModules('advert1 or advert2 or advert3')) : ?>
	<div id="beforecontent">
		<?php if ($this->countModules('advert1')) : ?>
			<div id="beforecontent1" class="row-fluid">
				<jdoc:include type="modules" name="advert1" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('advert2')) : ?>
			<div id="beforecontent2" class="row-fluid">
				<jdoc:include type="modules" name="advert2" style="allrounder" />
			</div>
		<?php endif;
		if ($this->countModules('advert3')) : ?>
			<div id="beforecontent3" class="row-fluid">
				<jdoc:include type="modules" name="advert3" style="allrounder" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
