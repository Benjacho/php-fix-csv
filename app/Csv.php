<?php

namespace App;

class Csv
{
    private $sheet = [];
    private $rates = 0;
    private $taxes = 0;
    private $total = 0;

    public function printTable(): void
    {
        include('../app/views/table.php');
    }

    //function to simplify test purposes
    public function setSheet($sheet) : void
    {
        $this->sheet = $sheet;
    }

    public function setFile(array $file): void
    {
        $this->sheet = array_map('str_getcsv', file($file['tmp_name']));
    }

    public function computeTotals(): void
    {
        foreach ($this->sheet as $row) {
            $this->rates += (int) $row[3];
            $this->taxes += (int) $row[4];
            $this->total += (int) $row[3] + (int) $row[4];
        }

        array_push($this->sheet, ['', '', 'Subtotal', $this->rates, $this->taxes]);
        array_push($this->sheet, ['', '', 'Total', '', $this->total]);
    }

    public function getRates() : Int
    {
        return $this->rates;
    }

    public function getTaxes(): Int
    {
        return $this->taxes;
    }

    public function getTotal(): Int
    {
        return $this->total;
    }
}
