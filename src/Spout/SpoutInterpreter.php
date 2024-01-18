<?php

namespace CaT\Libs\ExcelWrapper\Spout;

use \CaT\Libs\ExcelWrapper\Style as CatStyle;
use Box\Spout\Common\Entity\Style\Style as SpoutStyle;
use Box\Spout\Common\Entity\Style\Border;
use Box\Spout\Common\Entity\Style\BorderPart;

class SpoutInterpreter
{
	/**
	 * Interpret a style object
	 */
	public function interpret(CatStyle $style): SpoutStyle
    {
        $spout_style = (new SpoutStyle())
        ->setFontName($style->getFontFamily())
        ->setFontSize($style->getFontSize())
        ->setFontColor($style->getTextColor())
        ->setBackgroundColor($style->getBackgroundColor())
        ->setCellAlignment($style->getOrientation());

        if ($style->getBold()) {
            $spout_style = $spout_style->setFontBold();
        }

        if ($style->getItalic()) {
            $spout_style = $spout_style->setFontItalic();
        }

        if ($style->getUnderline()) {
            $spout_style = $spout_style->setFontUnderline();
        }

        if ($style->getVerticalLine()) {
            $border_right = new BorderPart('right');
            $border = new Border([$border_right]);
            $spout_style = $spout_style->setBorder($border);
        }

        return $spout_style;
	}
}