<?php

namespace PrimeTables\Hakim;

Class PrimeTable {
	
        /**
         * 
         * @var int
         */
	private $numericInput;
        
        /**
         *
         * @var string[]
         */
	private $cmdLineArgs;
        
	const ERROR_MSG_INVALID_NUMERIC = "No argument supplied.  Please give an integer (whole number), 1 or greater.";
        
	public function __construct(int $n, array $argv)
        {
            $this->numericInput = $n;
            $this->cmdLineArgs = $argv;
	}
        
        /**
         * 
         * @param string $arg
         * @return bool
         */
        public static function validNumeric(string $arg) : bool
        {
            if(empty($arg) || !is_numeric($arg) || $arg < 1){
                return false;
            }
            return true;
        }
        
        /**
         * adapted from https://gist.github.com/lawlesst/2731888
         * and https://pthree.org/2007/09/05/prime-numbers-in-python/
         * @param int $n
         */
        public static function isPrime(int $n) : bool
        {
            $i = 2;
            while ($i <= sqrt($n))
            {
                if ($n % $i == 0) {
                    return false;
                }
                $i++;
            }
            return true;
        }
        
        /**
         * Using != is faster than <= and incrementing the totalFound and 
         * checking its value is faster than counting the array size (count() 
         * or .size) each iteration.
         * @param int $n
         * @return array
         */
        public static function generatePrimes(int $n) : array
        {
            if ($n === 1) {
                return [2];
            }
            $primes = []; $totalFound = 0; $i=2;
            while ($totalFound !== $n) {        
                if (self::isPrime($i)) {
                   $primes[] = $i;
                   $totalFound++;
                }
                $i++;
            }
            return $primes;
        }
        
        public static function createPrimeMultiTable(int $n) : array
        {
            $primes = self::generatePrimes($n);
            $numberOfPrimes = count($primes);
            $primeTable = [];$primeTable[0][0]= null;
            for ($i=1; $i<= $numberOfPrimes;$i++) {
                $primeTable[0][$i] = $primes[$i-1];
                $primeTable[$i][0] = $primes[$i-1];
                $primeTable[$i][$i] = $primes[$i-1]*$primes[$i-1];
                for ($j=1; $j<=$i-1;$j++) {
                    $result = $primes[$i-1]*$primes[$i-$j-1];
                    $primeTable[$i][$i-$j] = $result;
                    $primeTable[$i-$j][$i] = $result;
                }
            }
            return $primeTable;
        }
        
        public static function get2dArraySquareString(array $arr) : string 
        {
            $length = count($arr);
            $str = "";
            for ($i=0; $i< $length;$i++) {
                $str.= '| ';
                for ($j = 0; $j < $length; $j++) {
                    $str.= "{$arr[$i][$j]} |";
                }
                $str .= PHP_EOL;
            }
            return $str;
        }
}