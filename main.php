<?php
namespace PrimeTables\Hakim;
require "vendor/autoload.php";

if(empty($argv[1]) || !PrimeTable::validNumeric($argv[1])){
    echo PrimeTable::ERROR_MSG_INVALID_NUMERIC;
    exit(-1);
}

