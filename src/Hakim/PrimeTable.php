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
            if(empty($arg) || !is_numeric($arg)){
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
}