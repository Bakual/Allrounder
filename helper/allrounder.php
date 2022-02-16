<?php
/**
 * @package         Allrounder
 * @subpackage      Template
 * @author          Thomas Hunziker <bakual@bakual.net>
 * @copyright   (C) 2022 - Thomas Hunziker
 * @license         GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

class AllrounderHelper
{
	/**
	 * Lightens RGB colors
	 *
	 * @param   string   $hexcolor
	 * @param   numeric  $percent
	 *
	 * @return string
	 *
	 * @since 4.0.0
	 */
	public static function luminance(string $hexcolor, $percent)
	{
		if (strlen($hexcolor) < 6)
		{
			$hexcolor = $hexcolor[0] . $hexcolor[0] . $hexcolor[1] . $hexcolor[1] . $hexcolor[2] . $hexcolor[2];
		}
		$hexcolor = array_map('hexdec', str_split(str_pad(str_replace('#', '', $hexcolor), 6, '0'), 2));

		foreach ($hexcolor as $i => $color)
		{
			$from         = $percent < 0 ? 0 : $color;
			$to           = $percent < 0 ? $color : 255;
			$pvalue       = ceil(($to - $from) * $percent);
			$hexcolor[$i] = str_pad(dechex($color + $pvalue), 2, '0', STR_PAD_LEFT);
		}

		return '#' . implode($hexcolor);
	}
}
