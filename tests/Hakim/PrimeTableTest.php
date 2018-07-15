<?php
namespace PrimeTables\Test\Hakim;

use PrimeTables\Hakim\PrimeTable;
use PHPUnit\Framework\TestCase;

class PrimeTableTest extends TestCase
{
    public function testArgumentGiven()
    {
        $output = exec('php main.php');
        $this->assertEquals($output,'No argument supplied.  Please give an integer (whole number), 1 or greater.'); 
    }

}