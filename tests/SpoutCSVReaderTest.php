<?php

use \CaT\Libs\ExcelWrapper\Spout\SpoutCSVReader;
use PHPUnit\Framework\TestCase;

class SpoutCSVReaderTest extends TestCase
{
    protected SpoutCSVReader $reader;
    protected string $filename;
    protected string $filename2;

    protected function setUp(): void
    {
        $this->reader = new SpoutCSVReader();
        $this->filename = __DIR__ . '/sample_data.csv';
        $this->filename2 = __DIR__ . '/sample_data_2.csv';
    }

    public function test_setFieldDelimiter()
    {
        $this->reader->setFieldDelimiter(',');
        $this->reader->open($this->filename);
        $this->assertEquals(['Firstname','Lastname','E-Mail'], $this->reader->getRow());
        $this->reader->close();


        $this->reader->setFieldDelimiter(';');
        $this->reader->open($this->filename);
        $this->assertEquals(['Firstname,Lastname,E-Mail'], $this->reader->getRow());
        $this->reader->close();
    }

    public function test_setFieldEnclosure()
    {
        // test file with enclosure
        $this->reader->setFieldEnclosure('"');
        $this->reader->open($this->filename2);
        $this->assertEquals(['Firstname','Lastname','E-Mail'], $this->reader->getRow());
        $this->reader->close();

        // test if enclosure is optional
        $this->reader->setFieldEnclosure('"');
        $this->reader->open($this->filename);
        $this->assertEquals(['Firstname','Lastname','E-Mail'], $this->reader->getRow());
        $this->reader->close();
    }

    public function test_setEncoding()
    {
        $this->reader->setEncoding('UTF-8');
        $this->reader->open($this->filename);
        $this->reader->getRow();
        $row = $this->reader->getRow();
        $this->assertEquals('Müller', $row[1]);
        $this->reader->close();

        // test with incorrect encoding
        $this->reader->setEncoding('ISO-8859-1');
        $this->reader->open($this->filename);
        $this->reader->getRow();
        $row = $this->reader->getRow();
        $this->assertNotEquals('Müller', $row[1]);
        $this->reader->close();
    }
}