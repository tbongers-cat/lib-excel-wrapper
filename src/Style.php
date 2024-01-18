<?php

namespace CaT\Libs\ExcelWrapper;

/**
 * Immutable class for styling a column.
 * This describes functions to style a column in a sheet.
 *
 * @author Stefan Hecken 	<stefan.hecken@concepts-and-training.de>
 */
class Style {
	const ORIENTATION_LEFT = "left";
	const ORIENTATION_RIGHT = "right";
	const ORIENTATION_CENTER = "center";
	const ORIENTATION_BLOCK = "block";
	const COLOR_REG_EXP = "/^[A-Fa-f0-9]{6}$/i";

	protected string $font_family;
	protected int $font_size;
	protected bool $bold;
	protected bool $italic;
	protected bool $underline;
	protected string $text_color;
	protected string $background_color;
	protected bool $horizontal_line;
    protected bool $vertical_line;
	protected string $orientation;

	public function __construct(
        string $font_family = "Arial",
        int $font_size = 10,
        bool $bold = false,
        bool $italic = false,
        bool $underline = false,
        string $text_color = "000000",
        string $background_color = "ffffff",
        bool $horizontal_line = false,
        string $orientation = self::ORIENTATION_LEFT,
        bool $vertical_line = false
	) {
		$this->font_family = $font_family;
		$this->font_size = $font_size;
		$this->bold = $bold;
		$this->italic = $italic;
		$this->underline = $underline;
		$this->text_color = $text_color;
		$this->background_color = $background_color;
		$this->horizontal_line = $horizontal_line;
		$this->orientation = $orientation;
        $this->vertical_line = $vertical_line;
	}

	public function getFontFamily(): string
    {
		return $this->font_family;
	}

	public function getFontSize(): int
    {
		return $this->font_size;
	}

	public function getBold(): bool
    {
		return $this->bold;
	}

	public function getItalic(): bool
    {
		return $this->italic;
	}

	public function getUnderline(): bool
    {
		return $this->underline;
	}

	public function getTextColor(): string
    {
		return $this->text_color;
	}

	public function getBackgroundColor(): string
    {
		return $this->background_color;
	}

	public function getVerticalLine(): bool
    {
		return $this->vertical_line;
	}

	public function getOrientation(): string
    {
		return $this->orientation;
	}

	public function withFontFamily(string $font_family): self
    {
		$clone = clone $this;
		$clone->font_family = $font_family;
		return $clone;
	}

	public function withFontSize(int $font_size): self
    {
		$clone = clone $this;
		$clone->font_size = $font_size;
		return $clone;
	}

	public function withBold(bool $bold): self
    {
		$clone = clone $this;
		$clone->bold = $bold;
		return $clone;
	}

	public function withItalic(bool $italic): self
    {
		$clone = clone $this;
		$clone->italic = $italic;
		return $clone;
	}

	public function withUnderline(bool $underline): self
    {
		$clone = clone $this;
		$clone->underline = $underline;
		return $clone;
	}

	public function withTextColor(string $text_color): self
    {
		assert('$this->validateColor($text_color)');
		$clone = clone $this;
		$clone->text_color = $text_color;
		return $clone;
	}

	public function withBackgroundColor(string $background_color): self
    {
		assert('$this->validateColor($background_color)');
		$clone = clone $this;
		$clone->background_color = $background_color;
		return $clone;
	}

	public function withVerticalLine(bool $vertical_line): self
    {
		$clone = clone $this;
		$clone->vertical_line = $vertical_line;
		return $clone;
	}

	public function withOrientation(string $orientation): self
    {
		assert('$this->validateOrientation($orientation)');
		$clone = clone $this;
		$clone->orientation = $orientation;
		return $clone;
	}

	protected function validateColor(string $color_code): bool
    {
		return (bool) preg_match(self::COLOR_REG_EXP, $color_code);
	}

	protected function validateOrientation(string $orientation): bool
    {
		return in_array($orientation,  [self::ORIENTATION_LEFT, self::ORIENTATION_RIGHT, self::ORIENTATION_CENTER, self::ORIENTATION_BLOCK]);
	}
}