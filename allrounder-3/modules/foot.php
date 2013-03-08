<?php if($this->countModules('foot1 or foot2 or foot3')) : ?>
	<div id="foot123">
		<?php if($this->countModules('foot1')) : ?>
			<div id="foot1">
	           <jdoc:include type="modules" name="foot1" style="lvround" />
			</div>
		<?php endif; ?>			
		<?php if($this->countModules('foot2')) : ?>
			<div id="foot2">
	           <jdoc:include type="modules" name="foot2" style="lvround" />
			</div>
		<?php endif; ?>			
		<?php if($this->countModules('foot3')) : ?>
			<div id="foot3">
	           <jdoc:include type="modules" name="foot3" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>	
<?php if($this->countModules('foot4 or foot5')) : ?>
	<div id="foot45">
		<?php if($this->countModules('foot4')) : ?>
			<div id="foot4">
	           <jdoc:include type="modules" name="foot4" style="lvround" />
			</div>
		<?php endif; ?>			
		<?php if($this->countModules('foot5')) : ?>
			<div id="foot5">
	           <jdoc:include type="modules" name="foot5" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>		
<?php if($this->countModules('foot6')) : ?>
	<div id="foot6out">
		<?php if($this->countModules('foot6')) : ?>
			<div id="foot6">
	           <jdoc:include type="modules" name="foot6" style="lvround" />
			</div>
		<?php endif; ?>			
	</div>					
<?php endif; ?>		
