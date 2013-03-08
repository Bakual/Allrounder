<style type="text/css">

	/* Template layout parameters */
	

	#wrapper {
		margin-top:<?php echo  htmlspecialchars($this->params->get('wrapperMarginTop'));?>;
	}
	#foot_container {
		margin-bottom:<?php echo  htmlspecialchars($this->params->get('footerMarginBottom'));?>;
	}
	#topmenu ul.menu, #topmenu ul.menu li a, #topmenu ul.menu li span.separator {
		background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/dropdown-<?php echo  htmlspecialchars($this->params->get('dropdownImage'));?>.png');
	}
	#topmenu ul.menu li.parent a, #topmenu ul.menu li.parent span.separator {
		background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/menu-parent-<?php echo  htmlspecialchars($this->params->get('dropdownImage'));?>.png');
	}
	#topmenu ul.menu li.parent a:hover, #topmenu ul.menu li.parent span.separator:hover, 
	#topmenu ul.menu li#current.parent a, #topmenu ul.menu li#current.parent span.separator {
		background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/menu-parent-hover-<?php echo  htmlspecialchars($this->params->get('dropdownImage'));?>.png');
	}
	<?php if (($this->params->get('contentheadingImage')) ==1) : ?>
		.page-header h2, h2.item-title {
			background-image: url('<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($this->params->get('contentheadingImageMedia'));?>');
		}
	<?php endif;?>
	<?php if (($this->params->get('contentheadingImage')) ==2) : ?>
		.page-header h2, h2.item-title {
			background-image: none !important;
		    padding-left: 0px !important;
		    line-height: normal !important;
		}
	<?php endif;?>
	
</style>