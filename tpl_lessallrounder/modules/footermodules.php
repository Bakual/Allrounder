<?php if ($this->countModules('footermodule1 or footermodule2')) : ?>
	<div id="footermodules">
		<?php if ($this->countModules('footermodule1')) : ?>
			<div id="footermodule1" class="row-fluid">
				<jdoc:include type="modules" name="footermodule1" style="html5" />
			</div>
		<?php endif;
		if ($this->countModules('footermodule2')) : ?>
			<div id="footermodule2" class="row-fluid">
				<jdoc:include type="modules" name="footermodule2" style="html5" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;