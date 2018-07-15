<?php
namespace PrimeTables\Hakim;
require "vendor/autoload.php";

if(!PrimeTable::validNumeric($argv[0])){
    echo PrimeTable::ERROR_MSG_INVALID_NUMERIC;
    exit(-1);
}

