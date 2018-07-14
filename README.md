
# PrimeTables

## Business requirements
Write an application that takes numeric input (N) from a user and outputs a multiplication table of (N)
prime numbers.
* Do not use brute force / trial division algorithm
* Should have a test for a performant prime algorithm that can generate a list of 20,000+ primes
* Write an algorithm to solve the prime number generation - do not use a library method to
generate your primes
* the user should input a whole number N, where is N is at least 1
* the application should output an N+1 x N+1 grid of numbers

## Requirements

* PHP 7.1.
* composer

## To install:
    git clone https://github.com/hakim-miah/prime-tables.git
    cd prime-tables
    composer install

## To run tests: 
    ./vendor/bin/phpunit   

## or you may need to try (Windwos/cygwin):
    ./vendor/phpunit/phpunit/phpunit

## To run (where integer should be 1 or greater):
    php index.php <integer>

# Hakim's code
Inside 
* src/Hakim
* tests/Hakim