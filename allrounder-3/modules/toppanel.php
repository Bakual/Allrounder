<?php if ($this->countModules('toppanel')) : ?>
	<div id="toppanel" class="clearfix">
		<jdoc:include type="modules" name="toppanel" style="lvround" />
	</div>
	<a href="#" title="Toggle in / out" id="toppanel-toggle"></a>
<?php endif;