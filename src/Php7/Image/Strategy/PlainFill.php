<?php
namespace Php7\Image\Strategy;
// https://www.php.net/manual/en/function.imagettftext.php
/**
 * Fills image
 */
class PlainFill
{
	/**
	 * Writes text onto image following this strategy
	 *
	 * @param int $x1
	 * @param int $y1
	 * @param int $x2
	 * @param int $y2
	 * @param int $color
	 * @return bool
	 */
	public static function writeFill(
		&$image,
		int $x1,
		int $y1,
		int $x2,
		int $y2,
		int $color) : bool
	{
		return \imagefilledrectangle($image, $x1, $y1, $x2, $y2, $color);
	}
}