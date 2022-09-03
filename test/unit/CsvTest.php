<?php

use App\Csv;
use PHPUnit\Framework\TestCase;

class CsvTest extends TestCase
{


    /** @test */
    public function it_compute_the_totals()
    {
        $csv = new Csv();
        $path = __DIR__ . '/../mock/TEST_MOCK_DATA.csv';
        $file = file($path);
        $csv->setSheet(array_map('str_getcsv', $file));
        $csv->computeTotals();


        $this->assertNotEquals(0, $csv->getRates());
        $this->assertEquals(47550, $csv->getRates());
        $this->assertNotEquals(0, $csv->getTaxes());
        $this->assertEquals(4319, $csv->getTaxes());
        $this->assertNotEquals(0, $csv->getTotal());
        $this->assertEquals(51869, $csv->getTotal());
    }
}
