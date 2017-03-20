<?php

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
	 * @param string 	$color
	 *
	 * @return null
	 */
	public function setColor($color);

	/**
	 * Set the background-color
	 *
	 * @param string 	$background_color
	 *
	 * @return null
	 */
	public function setBackgroundColor($background_color);

	/**
	 * Set the text orientation
	 *
	 * @param string 	$orientation
	 *
	 * @return null
	 */
	public function setOrientation($orientation);

	/**
	 * Set border of each cell in the column
	 *
	 * @param string 	$border
	 *
	 * @return null
	 */
	public function setBorder($border);

	/**
	 * Set border color
	 *
	 * @param string 	$border_color
	 *
	 * @return null
	 */
	public function setBorderColor($border_color);
}