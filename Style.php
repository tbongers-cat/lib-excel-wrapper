<?php

namespace CaT\Libs\ExcelWrapper;

/**
 * Interface for styling a column.
 * This describes functions to style a column in a sheet.
 *
 * @author Stefan Hecken 	<stefan.hecken@concepts-and-training.de>
 */
interface Style {
	/**
	 * Set the font family
	 *
	 * @param string 	$font_family
	 *
	 * @return null
	 */
	public function setFontFamily($font_family);

	/**
	 * Set the font size
	 *
	 * @param int 		$font_size
	 *
	 * @return null
	 */
	public function setFontSize($font_size);

	/**
	 * Set the text italic
	 *
	 * @param bool 		$italic
	 *
	 * @return null
	 */
	public function setItalic($italic);

	/**
	 * Set the text bold
	 *
	 * @param bool 		$bold
	 *
	 * @return null
	 */
	public function setBold($bold);

	/**
	 * Set the text underlined
	 *
	 * @param bool 		$underline
	 *
	 * @return null
	 */
	public function setUnderline($underline);

	/**
	 * Set the color of text
	 *
	 * @param string 	$color 	RGB Code
	 *
	 * @return null
	 */
	public function setColor($color);

	/**
	 * Set the background-color
	 *
	 * @param string 	$background_color 	RGB code
	 *
	 * @return null
	 */
	public function setBackgroundColor($background_color);

	/**
	 * Set a horizontal line
	 *
	 * @param string 	$style
	 *
	 * @return null
	 */
	public function setHorizontalLine();

	/**
	 * Set vertical line on each column cell
	 *
	 * @param string 	$style
	 *
	 * @return null
	 */
	public function setVerticalLine();

	/**
	 * Set the text orientation
	 *
	 * @param string 	$orientation
	 *
	 * @return null
	 */
	public function setOrientation($orientation);

	/**
	 * Set border color
	 *
	 * @param string 	$border_color 	RGB code
	 *
	 * @return null
	 */
	public function setBorderColor($border_color);
}