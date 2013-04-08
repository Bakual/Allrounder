<?php if ($this->countModules('foot1 or foot2 or foot3')) : ?>
	<div id="foot">
		<?php if ($this->countModules('foot1')) : ?>
			<div id="foot1" class="row-fluid">
				<jdoc:include type="modules" name="foot1" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('foot2')) : ?>
			<div id="foot2" class="row-fluid">
				<jdoc:include type="modules" name="foot2" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('foot3')) : ?>
			<div id="foot3" class="row-fluid">
				<jdoc:include type="modules" name="foot3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;