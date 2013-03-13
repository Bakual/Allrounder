<?php if ($this->countModules('afterhead1 or afterhead2 or afterhead3')) : ?>
	<div id="afterhead123">
		<?php if ($this->countModules('afterhead1')) : ?>
			<div id="afterhead1">
				<jdoc:include type="modules" name="afterhead1" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('afterhead2')) : ?>
			<div id="afterhead2">
				<jdoc:include type="modules" name="afterhead2" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('afterhead3')) : ?>
			<div id="afterhead3">
				<jdoc:include type="modules" name="afterhead3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('afterhead4 or afterhead5')) : ?>
	<div id="afterhead45">
		<?php if($this->countModules('afterhead4')) : ?>
			<div id="afterhead4">
				<jdoc:include type="modules" name="afterhead4" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('afterhead5')) : ?>
			<div id="afterhead5">
				<jdoc:include type="modules" name="afterhead5" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('afterhead6')) : ?>
	<div id="afterhead6out">
		<?php if ($this->countModules('afterhead6')) : ?>
			<div id="afterhead6">
				<jdoc:include type="modules" name="afterhead6" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;