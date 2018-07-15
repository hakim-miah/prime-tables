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
        
	const ERROR_MSG = "";
        
	public function __construct(int $n, array $argv)
        {
            $this->numericInput = $n;
            $this->cmdLineArgs = $arvg;
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