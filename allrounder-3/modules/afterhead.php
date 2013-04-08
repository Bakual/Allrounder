<?php if ($this->countModules('afterhead1 or afterhead2 or afterhead3')) : ?>
	<div id="afterhead">
		<?php if ($this->countModules('afterhead1')) : ?>
			<div id="afterhead1" class="row-fluid">
				<jdoc:include type="modules" name="afterhead1" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('afterhead2')) : ?>
			<div id="afterhead2" class="row-fluid">
				<jdoc:include type="modules" name="afterhead2" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('afterhead3')) : ?>
			<div id="afterhead3" class="row-fluid">
				<jdoc:include type="modules" name="afterhead3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;