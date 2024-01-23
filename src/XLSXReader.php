<?php

namespace CaT\Libs\ExcelWrapper;

/**
 * Interface for a Spout XLSX reader
 */
interface XLSXReader extends Reader
{
    /**
     * Select a sheet in an XLSX file and
     * set the row iterator to its first row
     * First sheet: 1
     */
    public function selectSheet(int $sheet_number): void;
}