<?php if ($this->countModules('beforehead1 or beforehead2 or beforehead3')) : ?>
	<div id="beforehead">
		<?php if ($this->countModules('beforehead1')) : ?>
			<div id="beforehead1" class="row-fluid">
				<jdoc:include type="modules" name="beforehead1" style="lvround" />
			</div>
		<?php endif;
		if($this->countModules('beforehead2')) : ?>
			<div id="beforehead2" class="row-fluid">
				<jdoc:include type="modules" name="beforehead2" style="lvround" />
			</div>
		<?php endif;
		if($this->countModules('beforehead3')) : ?>
			<div id="beforehead3" class="row-fluid">
				<jdoc:include type="modules" name="beforehead3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;