<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Creative Commons 3.0" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />


<!--- ADD CSS Files -->

<?php if ($this->params->get('cssCompress')) : ?>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template<?php echo $this->params->get('styleid'); ?>.css" rel="stylesheet" type="text/css" media="all" />
	<?php if (!$this->params->get('css3effects')) : ?>
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/css3-effects.css" rel="stylesheet" type="text/css" media="all" />
	<?php endif; ?>
<?php else: ?>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colors.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/lvdropdown.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/typo.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/modules.css" rel="stylesheet" type="text/css" media="all" />
	<?php if (!$this->params->get('css3effects')) : ?>
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/css3-effects.css" rel="stylesheet" type="text/css" media="all" />
	<?php endif; ?>
<?php endif; ?>

<!--- Older Browser CSS -->
<!--[if IE 7]>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->

<!--- ADD JavaScript Files -->

<?php if ($this->params->get('jsCompress')) : ?>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/js_compress.php"></script>
<?php else : ?>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		var jq = jQuery.noConflict();
	</script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/lv-dropdown.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jq.easy-tooltip.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jq.easy-caption.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/reflection.js"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/effects.js"></script>
<?php endif; ?>


<!-- Layout parameters -->
	<?php require("php/layout.php"); ?>

<!-- Define fonts -->
	<?php require("php/fonts.php"); ?>

<!-- ADD own template colors -->
<?php if (($this->params->get('ownColors')) !=0) : ?>
	<?php require("php/template_colors.php"); ?>
<?php endif;?>

<!-- ADD own dropdown-menu colors -->
<?php if (($this->params->get('dropdownColors')) !=0) : ?>
	<?php require("php/dropdown_colors.php"); ?>
<?php endif;?>

<?php if (($this->params->get('ribbonsOnOff')) !=0) : ?>
	<?php require("php/ribbons.php"); ?>
<?php endif;?>


<?php 
	// check if the 3 columns are enabled
	$contentwidth = '';
	if($this->countModules("position-7")&&!$this->countModules("position-8")){ $contentwidth="left"; }
	if($this->countModules("position-8")&&!$this->countModules("position-7")){ $contentwidth="right"; }
	if($this->countModules("position-7")&&$this->countModules("position-8")) { $contentwidth="middle"; }

	//parameter shortys
	$whatWidth = $this->params->get('whatWidth'); // dynamic or fixed width
if (!$this->params->get('cssCompress')) :
	$leftcolWidth = ($this->params->get('leftcolWidth'));
	$rightcolWidth = ($this->params->get('rightcolWidth'));
?>
<!-- math the width of the 3 columns -->
<style type="text/css">
	#leftcol {width: <?php echo $leftcolWidth;?>%;}
	#rightcol {width: <?php echo $rightcolWidth;?>%;}
	#content_outmiddle {width: <?php echo 98 - $rightcolWidth - $leftcolWidth;?>%;}
	#content_outright {width: <?php echo 99 - $rightcolWidth;?>%;}
	#content_outleft {width: <?php echo 99 - $leftcolWidth;?>%;}
</style>
<?php endif;
if ($this->params->get('customCss')) : ?>
	<style rel="stylesheet" type="text/css" media="all"><?php echo htmlspecialchars($this->params->get('customCssCode'));?>;</style>	
<?php endif; ?>