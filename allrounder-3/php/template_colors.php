<style type="text/css">

	/* Template colors */

	body {
		background-color: #<?php echo  htmlspecialchars($this->params->get('bodyBgColor'));?>;
		color: #<?php echo  htmlspecialchars($this->params->get('fontColor'));?>;
	}
	span#copy a {
		color: #<?php echo  htmlspecialchars($this->params->get('fontColor'));?>;
	}
	a, a:link, a:visited, a:active, a:focus {
		color: #<?php echo  htmlspecialchars($this->params->get('linkColor'));?>;
	}

	#wrapper, #foot_container {
		background-color: #<?php echo  htmlspecialchars($this->params->get('wrapperBgColor'));?>;
		border: 1px solid #<?php echo  htmlspecialchars($this->params->get('wrapperBorderColor'));?>;
	}

	
	#header {
		background-color: #<?php echo  htmlspecialchars($this->params->get('headBgColor'));?>;
		border-top:1px solid #<?php echo  htmlspecialchars($this->params->get('headBorderColor'));?>;
		border-left:1px solid #<?php echo  htmlspecialchars($this->params->get('headBorderColor'));?>;	
		border-right:1px solid #<?php echo  htmlspecialchars($this->params->get('headBorderColor'));?>;	
	}
	.heckl, .heckr {  
		border-top: 10px solid #<?php echo  htmlspecialchars($this->params->get('headCornerColor'));?>;
	}

	#footer {
		background-color: #<?php echo  htmlspecialchars($this->params->get('footBgColor'));?>;
		border:1px solid #<?php echo  htmlspecialchars($this->params->get('footBorderColor'));?>;
		border-bottom:2px solid #<?php echo  htmlspecialchars($this->params->get('footBorderColor'));?>;
	}
	.feckl, .feckr {  
		border-bottom: 10px solid #<?php echo  htmlspecialchars($this->params->get('footCornerColor'));?>;
	}
	#footer a#gotop {
		color: #<?php echo  htmlspecialchars($this->params->get('gotopLinkColor'));?>;
	}
	#footermodule1234, #footermodule1234 a, #footermodule1234 ul.menu, #footermodule5, #footermodule5 a {
		color: #<?php echo  htmlspecialchars($this->params->get('footColor'));?>;
	}
	#subfoot {
		background-color: #<?php echo  htmlspecialchars($this->params->get('subfootBgColor'));?>;
		border-top:1px solid #<?php echo  htmlspecialchars($this->params->get('subfootBorderTopColor'));?>;
		border-bottom:1px solid #<?php echo  htmlspecialchars($this->params->get('subfootBorderBottomColor'));?>;
	}
	.copytext {
		color: #<?php echo  htmlspecialchars($this->params->get('subfootColor'));?>;
	}

	#maincontent {
		background-color: #<?php echo  htmlspecialchars($this->params->get('contentBgColor'));?>;
		border: 3px double #<?php echo  htmlspecialchars($this->params->get('contentBorderColor'));?>;
	}
	
	.item-page, .item, .leading-0, .leading-1, .leading-2, .leading-3, .leading-4, .leading-5, .contact {
		background-color:#<?php echo  htmlspecialchars($this->params->get('articleBgColor'));?>;
		border: 1px solid #<?php echo  htmlspecialchars($this->params->get('articleBorderColor'));?>;
	}

	.page-header h2, .page-header h2 a {
		color: #<?php echo  htmlspecialchars($this->params->get('articletitleColor'));?> !important;
	}
	div.item-separator {
		border-bottom:3px double #<?php echo  htmlspecialchars($this->params->get('itemSeparatorColor'));?> !important;
	}

	#wrapper #leftcol h3.moduleh3, #wrapper #rightcol h3.moduleh3	 {
		background-color: #<?php echo  htmlspecialchars($this->params->get('moduleh3BgColor'));?>;
		border-top:	1px solid #<?php echo  htmlspecialchars($this->params->get('moduleh3BorderTopColor'));?>;
		color: #<?php echo  htmlspecialchars($this->params->get('moduleh3Color'));?>;
	}
	#wrapper #leftcol h3.moduleh3	 {
		border-left: 1px solid #<?php echo  htmlspecialchars($this->params->get('moduleh3BorderOuterColor'));?>;
		border-right: 1px solid #<?php echo  htmlspecialchars($this->params->get('moduleh3BorderInnerColor'));?>;
	}
	#wrapper #rightcol h3.moduleh3	 {
		border-right: 1px solid #<?php echo  htmlspecialchars($this->params->get('moduleh3BorderOuterColor'));?>;
		border-left: 1px solid #<?php echo  htmlspecialchars($this->params->get('moduleh3BorderInnerColor'));?>;
	}
	.h3eckl, .h3eckr {  
		border-top: 10px solid #<?php echo  htmlspecialchars($this->params->get('moduleh3CornerColor'));?>;
	}

	#leftcol .module div.lvround-inner, #leftcol .module_menu div.lvround-inner, #leftcol .module_text div.lvround-inner, 
	#rightcol .module div.lvround-inner, #rightcol .module_menu div.lvround-inner, #rightcol .module_text div.lvround-inner {
		background-color: #<?php echo  htmlspecialchars($this->params->get('moduleBgColor'));?>;
		border: 1px solid #<?php echo  htmlspecialchars($this->params->get('moduleBorderInnerColor'));?>;
		color: #<?php echo  htmlspecialchars($this->params->get('moduleColor'));?>;
	}
	#subhead {
		background-color: #<?php echo  htmlspecialchars($this->params->get('subheadBgColor'));?>;
		border: 1px solid #<?php echo  htmlspecialchars($this->params->get('subheadBorderColor'));?>;
	}
	.breadcrumbs, .breadcrumbs span {
		color: #<?php echo  htmlspecialchars($this->params->get('breadcrumbColor'));?>;
	}
	#leftcol .module div div, #leftcol .module_menu div div, #leftcol .module_text div div, 
	#rightcol .module div div, #rightcol .module_menu div div, #rightcol .module_text div div {
		border: 1px solid #<?php echo  htmlspecialchars($this->params->get('moduleBorderOuterColor'));?>;
	}

	/**** Global Modules ****/

	div.module {
		color:#<?php echo  htmlspecialchars($this->params->get('moduletableFont'));?>;
		background-color:#<?php echo  htmlspecialchars($this->params->get('moduletableBg'));?>;
		border:1px solid #<?php echo  htmlspecialchars($this->params->get('moduletableBorder'));?>;
	}
	div.module h3.moduleh3 {
		background-color:#<?php echo  htmlspecialchars($this->params->get('moduletableh3Bg'));?>;
		border:1px solid #<?php echo  htmlspecialchars($this->params->get('moduletableh3Border'));?>;
	}


	.input, .inputbox {
		color: #<?php echo  htmlspecialchars($this->params->get('inputFontColor'));?>;
		background-color: #<?php echo  htmlspecialchars($this->params->get('inputBgColor'));?>;
		border-top: 1px solid #<?php echo  htmlspecialchars($this->params->get('inputBorderTopColor'));?>;
		border-left: 1px solid #<?php echo  htmlspecialchars($this->params->get('inputBorderLeftColor'));?>;
		border-right: 1px solid #<?php echo  htmlspecialchars($this->params->get('inputBorderRightColor'));?>;
		border-bottom: 1px solid #<?php echo  htmlspecialchars($this->params->get('inputBorderBottomColor'));?>;
	}
	.input:hover, .inputbox:hover {
		color: #<?php echo  htmlspecialchars($this->params->get('inputHoverFontColor'));?>;
		background-color: #<?php echo  htmlspecialchars($this->params->get('inputHoverBgColor'));?>;
	}

	input.button, button.button, button.validate, .pagenav, ul.pagenav li a {
		color: #555;
		background-color: #efefef;
		color: #<?php echo  htmlspecialchars($this->params->get('buttonColor'));?>;
		background-color: #<?php echo  htmlspecialchars($this->params->get('buttonBgColor'));?>;
		border-top: 1px solid #<?php echo  htmlspecialchars($this->params->get('buttonBorderTop'));?>;
		border-left: 1px solid #<?php echo  htmlspecialchars($this->params->get('buttonBorderLeft'));?>;
		border-right: 1px solid #<?php echo  htmlspecialchars($this->params->get('buttonBorderRight'));?>;
		border-bottom: 1px solid #<?php echo  htmlspecialchars($this->params->get('buttonBorderBottom'));?>;
	}
	input.button:hover, button.button:hover, button.validate:hover, .pagenav, ul.pagenav li a:hover {
		color: #<?php echo  htmlspecialchars($this->params->get('buttonHoverColor'));?>;
		background-color: #<?php echo  htmlspecialchars($this->params->get('buttonBgHoverColor'));?>;
	}

	/**** Mainmenu with suffix: _menu ****/
	
	.module_menu ul.menu li a, .module_menu ul.menu li span.separator {
		color: #<?php echo  htmlspecialchars($this->params->get('mainMenuFont'));?>;
		border-bottom:1px dotted #<?php echo  htmlspecialchars($this->params->get('mainMenuBorderBottom'));?>;
	}
	.module_menu ul.menu li a:hover, .module_menu ul.menu li a:active, .module_menu ul.menu li a:focus {
		color: #<?php echo  htmlspecialchars($this->params->get('mainMenuFontHover'));?>!important;
	}
	.module_menu ul.menu li.current a {
		color: #<?php echo  htmlspecialchars($this->params->get('mainMenuFontCurrent'));?>;
	}
	.module_menu ul.menu li.current ul li a {
		color: #<?php echo  htmlspecialchars($this->params->get('mainMenuLiLiFont'));?>;
	}

	/**** Default Tooltips ****/

	.easy-tooltip-default {
		border: 1px solid #<?php echo  htmlspecialchars($this->params->get('tooltipBorder'));?>; 
		background-color: #<?php echo  htmlspecialchars($this->params->get('tooltipBg'));?>; 
		color: #<?php echo  htmlspecialchars($this->params->get('tooltipFont'));?>;
	}


</style>