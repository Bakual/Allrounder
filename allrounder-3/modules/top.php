<?php if ($this->countModules('top1 or top2 or top3')) : ?>
	<div id="top">
		<?php if ($this->countModules('top1')) : ?>
			<div id="top1" class="row-fluid">
				<jdoc:include type="modules" name="top1" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('top2')) : ?>
			<div id="top2" class="row-fluid">
				<jdoc:include type="modules" name="top2" style="lvround" />
			</div>
		<?php endif;
		if ($this->countModules('top3')) : ?>
			<div id="top3" class="row-fluid">
				<jdoc:include type="modules" name="top3" style="lvround" />
			</div>
		<?php endif; ?>
	</div>
<?php endif;