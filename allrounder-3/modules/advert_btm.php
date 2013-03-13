<?php if ($this->countModules('advert7 or advert8 or advert9')) : ?>
	<div id="advert789">
		<?php if ($this->countModules('advert7')) : ?>
			<div id="advert7">
				<jdoc:include type="modules" name="advert7" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert8')) : ?>
			<div id="advert8">
				<jdoc:include type="modules" name="advert8" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert9')) : ?>
			<div id="advert9">
				<jdoc:include type="modules" name="advert9" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('advert10 or advert11')) : ?>
	<div id="advert1011">
		<?php if ($this->countModules('advert10')) : ?>
			<div id="advert10">
				<jdoc:include type="modules" name="advert10" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('advert11')) : ?>
			<div id="advert11">
				<jdoc:include type="modules" name="advert11" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('advert12')) : ?>
	<div id="advert12out">
		<?php if ($this->countModules('advert12')) : ?>
			<div id="advert12">
				<jdoc:include type="modules" name="advert12" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;