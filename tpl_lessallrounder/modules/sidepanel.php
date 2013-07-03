<?php if ($this->countModules('sidepanel')) : ?>
	<div id="sidepanel-outer">
		<div id="sidepanel">
			<jdoc:include type="modules" name="sidepanel" style="lvround" />
		</div>
		<a href="#" title="Toggle in / out" id="sidepanel-toggle"></a>
	</div>
<?php endif;