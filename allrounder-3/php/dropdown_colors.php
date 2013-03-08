<style type="text/css">

	/* Dropdown menu colors */

	#topmenu ul.menu {
		background-color:#<?php echo  htmlspecialchars($this->params->get('ddBackground'));?> !important;
		border-top:3px double #<?php echo  htmlspecialchars($this->params->get('ddBorderTop'));?> !important;
		border-bottom:3px double #<?php echo  htmlspecialchars($this->params->get('ddBorderBottom'));?> !important;
	}
	#topmenu ul.menu li {
		border-right:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiBorderRight'));?> !important;
	}
	#topmenu ul.menu li a, #topmenu ul.menu li span.separator {
		border-top:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiaBorderTop'));?> !important;
		border-right:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiaBorderRight'));?> !important;
		border-left:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiaBorderLeft'));?> !important;
		border-bottom:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiaBorderBottom'));?> !important;
		color:#<?php echo  htmlspecialchars($this->params->get('ulLiaColor'));?>;
		background-color:#<?php echo  htmlspecialchars($this->params->get('ulLiaBackground'));?>;
	}
	#topmenu ul.menu a:hover {
		color:#<?php echo  htmlspecialchars($this->params->get('ulLiaHoverColor'));?>;
	}
	
	/** LEVEL 2 **/
	#topmenu ul.menu ul {
		border:2px solid #<?php echo  htmlspecialchars($this->params->get('ululBorder'));?> !important;
		background-color:#<?php echo  htmlspecialchars($this->params->get('ululBackground'));?>;
	}
	#topmenu ul.menu li ul li a, #topmenu ul.menu li ul li span.separator {
		border-top:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiliaBorderTop'));?> !important;
		border-right:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiliaBorderRight'));?> !important;
		border-left:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiliaBorderLeft'));?> !important;
		border-bottom:1px solid #<?php echo  htmlspecialchars($this->params->get('ulLiliaBorderBottom'));?> !important;
		color:#<?php echo  htmlspecialchars($this->params->get('ulLiliaColor'));?>;
	}
	#topmenu ul.menu li ul li a:hover {
		color:#<?php echo  htmlspecialchars($this->params->get('ulLiliaHoverColor'));?>;
	}
	#topmenu ul.menu li li {
		background-color:#<?php echo  htmlspecialchars($this->params->get('ulLiliBackground'));?>;
	}
	#topmenu ul.menu li li:hover {
		background-color:#<?php echo  htmlspecialchars($this->params->get('ulLiliHoverBackground'));?>;
	}

</style>