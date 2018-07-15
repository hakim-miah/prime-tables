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
    
    public function testValidNumeric()
    {
        $result = PrimeTable::validNumeric("foo");
        $this->assertEquals($result,false);
        
        $result = PrimeTable::validNumeric("3");
        $this->assertEquals($result,true);
        
        //etc
    }

}