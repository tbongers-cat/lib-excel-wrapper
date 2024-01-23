<?php

use \CaT\Libs\ExcelWrapper\Spout\SpoutXLSXReader;
use PHPUnit\Framework\TestCase;

class SpoutXLSXReaderTest extends TestCase
{
    protected SpoutXLSXReader $reader;
    protected string $filename;

    protected function setUp(): void
    {
        $this->reader = new SpoutXLSXReader();
        $this->filename = __DIR__ . '/sample_data.xlsx';
    }

    public function test_selectSheet()
    {
        $this->reader->open($this->filename);
        $this->assertEquals(['Firstname', 'Lastname', 'E-Mail'], $this->reader->getRow());
        $this->reader->selectSheet(2);
        $this->assertEquals(['Name', 'ID', 'Quantity', 'Date'], $this->reader->getRow());
        $this->reader->selectSheet(1);
        $this->assertEquals(['Firstname', 'Lastname', 'E-Mail'], $this->reader->getRow());
        $this->reader->close();
    }

    public function test_selectSheet_nonexistent()
    {
        $this->reader->open($this->filename);
        $this->expectException('Exception');
        $this->reader->selectSheet(3);
        $this->reader->close();
    }

    public function test_selectNextSheet()
    {
        $this->reader->open($this->filename);
        $this->assertTrue($this->reader->selectNextSheet());
        $this->assertEquals(['Name', 'ID', 'Quantity', 'Date'], $this->reader->getRow());
        $this->assertFalse($this->reader->selectNextSheet());
        $this->reader->close();
    }
}