<?php if($this->countModules('bottom1 or bottom2 or bottom3')) : ?>
	<div id="bottom123">
		<?php if($this->countModules('bottom1')) : ?>
			<div id="bottom1">
	           <jdoc:include type="modules" name="bottom1" style="lvround" />
			</div>
		<?php endif; ?>			
		<?php if($this->countModules('bottom2')) : ?>
			<div id="bottom2">
	           <jdoc:include type="modules" name="bottom2" style="lvround" />
			</div>
		<?php endif; ?>			
		<?php if($this->countModules('bottom3')) : ?>
			<div id="bottom3">
	           <jdoc:include type="modules" name="bottom3" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>	
<?php if($this->countModules('bottom4 or bottom5')) : ?>
	<div id="bottom45">
		<?php if($this->countModules('bottom4')) : ?>
			<div id="bottom4">
	           <jdoc:include type="modules" name="bottom4" style="lvround" />
			</div>
		<?php endif; ?>			
		<?php if($this->countModules('bottom5')) : ?>
			<div id="bottom5">
	           <jdoc:include type="modules" name="bottom5" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>		
<?php if($this->countModules('bottom6')) : ?>
	<div id="bottom6out">
		<?php if($this->countModules('bottom6')) : ?>
			<div id="bottom6">
	           <jdoc:include type="modules" name="bottom6" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>		
