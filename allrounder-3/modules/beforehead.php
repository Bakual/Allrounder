<?php if ($this->countModules('beforehead1 or beforehead2 or beforehead3')) : ?>
	<div id="beforehead123">
		<?php if ($this->countModules('beforehead1')) : ?>
			<div id="beforehead1">
				<jdoc:include type="modules" name="beforehead1" style="lvround" />
			</div>
		<?php endif;
		if($this->countModules('beforehead2')) : ?>
			<div id="beforehead2">
				<jdoc:include type="modules" name="beforehead2" style="lvround" />
			</div>
		<?php endif;
		if($this->countModules('beforehead3')) : ?>
			<div id="beforehead3">
				<jdoc:include type="modules" name="beforehead3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('beforehead4 or beforehead5')) : ?>
	<div id="beforehead45">
		<?php if ($this->countModules('beforehead4')) : ?>
			<div id="beforehead4">
				<jdoc:include type="modules" name="beforehead4" style="lvround" />
			</div>
		<?php endif;
		if($this->countModules('beforehead5')) : ?>
			<div id="beforehead5">
				<jdoc:include type="modules" name="beforehead5" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;
if ($this->countModules('beforehead6')) : ?>
	<div id="beforehead6out">
		<?php if($this->countModules('beforehead6')) : ?>
			<div id="beforehead6">
				<jdoc:include type="modules" name="beforehead6" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;