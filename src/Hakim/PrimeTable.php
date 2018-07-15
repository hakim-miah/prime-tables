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
}