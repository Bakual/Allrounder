<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colors.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/print.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/typo.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body class="contentpane">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>
