<?php if ($this->countModules('advert1')) : ?>
	<div id="advert-top1" class="advert-top row-fluid">
		<jdoc:include type="modules" name="advert1" style="lvround" />
	</div>
<?php endif;
if ($this->countModules('advert2')) : ?>
	<div id="advert-top2" class="advert-top row-fluid">
		<jdoc:include type="modules" name="advert2" style="lvround" />
	</div>
<?php endif;
if ($this->countModules('advert3')) : ?>
	<div id="advert-top3" class="advert-top row-fluid">
		<jdoc:include type="modules" name="advert3" style="lvround" />
	</div>
<?php endif;