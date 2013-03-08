<?php if($this->countModules('top1 or top2 or top3')) : ?>
	<div id="top123">
			<?php if($this->countModules('top1')) : ?>
				<div id="top1">
		           <jdoc:include type="modules" name="top1" style="lvround" />
				</div>
			<?php endif; ?>			
			<?php if($this->countModules('top2')) : ?>
				<div id="top2">
		           <jdoc:include type="modules" name="top2" style="lvround" />
				</div>
			<?php endif; ?>			
			<?php if($this->countModules('top3')) : ?>
				<div id="top3">
		           <jdoc:include type="modules" name="top3" style="lvround" />
				</div>
			<?php endif; ?>			
	</div>					
<?php endif; ?>	
<?php if($this->countModules('top4 or top5')) : ?>
	<div id="top45">
		<?php if($this->countModules('top4')) : ?>
			<div id="top4">
	           <jdoc:include type="modules" name="top4" style="lvround" />
			</div>
		<?php endif; ?>			
		<?php if($this->countModules('top5')) : ?>
			<div id="top5">
	           <jdoc:include type="modules" name="top5" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>		
<?php if($this->countModules('top6')) : ?>
	<div id="top6out">
		<?php if($this->countModules('top6')) : ?>
			<div id="top6">
	           <jdoc:include type="modules" name="top6" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>