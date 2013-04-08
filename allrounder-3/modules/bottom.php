<?php if ($this->countModules('bottom1 or bottom2 or bottom3')) : ?>
	<div id="bottom">
		<?php if ($this->countModules('bottom1')) : ?>
			<div id="bottom1" class="row-fluid">
				<jdoc:include type="modules" name="bottom1" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('bottom2')) : ?>
			<div id="bottom2" class="row-fluid">
				<jdoc:include type="modules" name="bottom2" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('bottom3')) : ?>
			<div id="bottom3" class="row-fluid">
				<jdoc:include type="modules" name="bottom3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
