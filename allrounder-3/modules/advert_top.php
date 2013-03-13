<?php if ($this->countModules('advert1 or advert2 or advert3')) : ?>
	<div id="advert123">
		<?php if ($this->countModules('advert1')) : ?>
			<div id="advert1">
				<jdoc:include type="modules" name="advert1" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert2')) : ?>
			<div id="advert2">
				<jdoc:include type="modules" name="advert2" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert3')) : ?>
			<div id="advert3">
				<jdoc:include type="modules" name="advert3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('advert4 or advert5')) : ?>
	<div id="advert45">
		<?php if ($this->countModules('advert4')) : ?>
			<div id="advert4">
				<jdoc:include type="modules" name="advert4" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert5')) : ?>
			<div id="advert5">
				<jdoc:include type="modules" name="advert5" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('advert6')) : ?>
	<div id="advert6out">
		<?php if ($this->countModules('advert6')) : ?>
			<div id="advert6">
				<jdoc:include type="modules" name="advert6" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;