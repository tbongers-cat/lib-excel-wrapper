# Excel wrapper

*A wrapper for a streaming excel-writer.*

**Contacts:** [Richard Klees](https://github.com/klees)

## Writing files

An excel-write has to implement a kind of functionality as defined.

* Create a writer object
* Define style for single column at any time
* Fill the sheet row by row
* Save to given folder and filename

To fill the sheet row by row is a recommended feature to increase the speed on mass export of data. It will not be possible to step back to rows or single columns to change values or something else.

```php
public function addRow(array $values) {
	$next_row = $values->writer->getCurrentSheet()->getNextRow();
	$column = "A";
	foreach($values as $value) {
		$values->writer->getCurrentSheet()->fillCell($next_row.$column);
		$column ++;
	}
}
```

For designing the sheet, it is possible to give any column at any time a new style. E.g. in row 1 to 5 the colum A is bold and left orientated. Starting with row 6 it will only left orientated and not longer bold. This gives the opportunity to design column headers or highlight special values.

### Examples
```php
public function setColumnStyle(Style $style, $column) {
	$this->writer->getCurrentSheet()->getColumn($column)->setStyle($style);
};
```

## Define Styles

A column can be styled in a lot of ways. This wrapper includes the mostly used.

* Font family
* Font size
* Bold
* Italic
* Underline
* Text color
* Background color
* Orientation
* Border
* Border color