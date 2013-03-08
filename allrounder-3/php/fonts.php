<style type="text/css">

	/* Template fonts */
	
	body {
		font-size:<?php echo  htmlspecialchars($this->params->get('fontSize'));?>;

		<?php if (($this->params->get('ownFont')) !=1) : ?>
			font-family:<?php echo  htmlspecialchars($this->params->get('fontFamily'));?>;
		<?php endif;?>
		<?php if (($this->params->get('ownFont')) ==1) : ?>
			font-family:<?php echo  htmlspecialchars($this->params->get('ownfontFamily'));?>;
		<?php endif;?>
		line-height:<?php echo  htmlspecialchars($this->params->get('lineHeight'));?>;
	}

</style>