<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2023 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('sidepanel')) : ?>
	<div id="sidepanel-outer">
		<div id="sidepanel">
			<jdoc:include type="modules" name="sidepanel" style="Allrounder" />
		</div>
		<a href="#" title="Toggle in / out" id="sidepanel-toggle"></a>
	</div>
<?php endif;
