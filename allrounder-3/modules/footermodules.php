<?php if ($this->countModules('footermodule1 or footermodule2 or footermodule3 or footermodule4 or footermodule5')) : ?>
	<div id="footermodule1234">
		<?php if ($this->countModules('footermodule1')) : ?>
			<div id="footermodule1">
				<jdoc:include type="modules" name="footermodule1" style="xhtml" />
			</div>
		<?php endif;
		if ($this->countModules('footermodule2')) : ?>
			<div id="footermodule2">
				<jdoc:include type="modules" name="footermodule2" style="xhtml" />
			</div>
		<?php endif;
		if ($this->countModules('footermodule3')) : ?>
			<div id="footermodule3">
				<jdoc:include type="modules" name="footermodule3" style="xhtml" />
			</div>
		<?php endif;
		if ($this->countModules('footermodule4')) : ?>
			<div id="footermodule4">
				<jdoc:include type="modules" name="footermodule4" style="xhtml" />
			</div>
		<?php endif; ?>
	</div>
	<?php if ($this->countModules('footermodule5')) : ?>
		<div id="footermodule5">
			<jdoc:include type="modules" name="footermodule5" style="xhtml" />
		</div>
	<?php endif;
endif;