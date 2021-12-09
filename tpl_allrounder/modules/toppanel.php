<?php
/**
 * @package     Allrounder
 * @subpackage  Template
 * @author      Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2014 - Thomas Hunziker
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

if ($this->countModules('toppanel')) : ?>
	<div id="toppanel">
		<jdoc:include type="modules" name="toppanel" style="allrounder" />
	</div>
	<a href="#" title="Toggle in / out" id="toppanel-toggle"></a>
<?php endif;
