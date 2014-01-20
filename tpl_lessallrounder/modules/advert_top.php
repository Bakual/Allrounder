<?php if ($this->countModules('advert1 or advert2 or advert3')) : ?>
	<div id="advert-tp">
		<?php if ($this->countModules('advert1')) : ?>
			<div id="advert-tp1" class="row-fluid">
				<jdoc:include type="modules" name="advert1" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert2')) : ?>
			<div id="advert-tp2" class="row-fluid">
				<jdoc:include type="modules" name="advert2" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert3')) : ?>
			<div id="advert-tp3" class="row-fluid">
				<jdoc:include type="modules" name="advert3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
