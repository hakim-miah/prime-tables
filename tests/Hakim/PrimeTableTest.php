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
    
    public function testGeneratePrimes()
    {
        //given N, create array of N primes (starting from 2)
        $result = PrimeTable::generatePrimes(3);
        $this->assertEquals($result,[2,3,5]);
        
        $result = PrimeTable::generatePrimes(1);
        $this->assertEquals($result,[]);
    }
    
    public function testIsPrime()
    {
        $result = PrimeTable::isPrime(3);
        $this->assertEquals($result,true);
        
        $result = PrimeTable::isPrime(4);
        $this->assertEquals($result,false);
    }
    
    public function testCreatePrimeMultiplicationTable()
    {
        $result = PrimeTable::createPrimeMultiTable(3);
        $expectedOutput = [
            [null, 2, 3, 5 ],
            [  2,  4, 6, 10],
            [  3,  6, 9, 15],                
            [  5, 10,15, 25]
        ];
        $this->assertEquals($result,$expectedOutput);
    }
    
    public function testGet2dArraySquareString()
    {
        $expectedResult ='|  |2 |3 |'.PHP_EOL
                        .'| 2 |4 |6 |'.PHP_EOL
                        .'| 3 |6 |9 |'.PHP_EOL;
        $result = PrimeTable::get2dArraySquareString(PrimeTable::createPrimeMultiTable(2));
        $this->assertEquals($result,$expectedResult);
    }
    
    public function testGeneratePrimes20000()
    {
        $result = PrimeTable::generatePrimes(20000);
        $this->assertEquals(count($result),20000);
        
    }
}