<?php if ($this->countModules('advert4 or advert5 or advert6')) : ?>
	<div id="advert-btm">
		<?php if ($this->countModules('advert4')) : ?>
			<div id="advert-btm1" class="row-fluid">
				<jdoc:include type="modules" name="advert4" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert5')) : ?>
			<div id="advert-btm2" class="row-fluid">
				<jdoc:include type="modules" name="advert5" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert6')) : ?>
			<div id="advert-btm3" class="row-fluid">
				<jdoc:include type="modules" name="advert6" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
