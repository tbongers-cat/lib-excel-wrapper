<?php

namespace CaT\Libs\ExcelWrapper;

/**
 * Interface for a Spout CSV reader
 */
interface CSVReader extends Reader
{
    /**
     * Set the field delimiter of the file to be opened
     * (must be set BEFORE opening a file)
     * Default: comma
     */
    public function setFieldDelimiter(string $fieldDelimiter): void;

    /**
     * Set the (optional) field enclosure of the file to be opened
     * (must be set BEFORE opening a file)
     * Default: double quotation marks
     */
    public function setFieldEnclosure(string $fieldEnclosure): void;

    /**
     * Set the encoding of the file to be opened
     * (must be set BEFORE opening a file)
     * Default: UTF-8
     */
    public function setEncoding(string $encoding): void;
}