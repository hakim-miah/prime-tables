
# PrimeTables


## Requirements

* PHP 7.x
* composer

## To install:
    git clone https://github.com/hakim-miah/prime-tables.git
    cd prime-tables
    composer install

## To run tests: 
    ./vendor/bin/phpunit   

## or you may need to try (Windows/Cygwin):
    ./vendor/phpunit/phpunit/phpunit

## To run (where integer should be 1 or greater):
    php main.php <integer>

#### Install and run tested on Windows 7 x64, with PHP 7.1, Composer and Cygwin terminal

# If I had more time...
I approached this as a Utility class and hence made static functions (you may want to just check if a number is prime or generate a list of prime numbers, print a 2D array, but not really need an object).  With more time:
* I think I could split this into 2/3 classes, especially for rendering a nice view on the terminal.
* with an Object approach, I could "cache" the number of primes generated in a field variable.  So I won't have to recount the total number of primes before going into any loop. Helpful if there are huge numbers of primes.
* The prime multiplication table is mirrored along the line [i,i].  It may be possible to only create half the table and copy/mirror flip the rest.  This should give a speed boost for large numbers, as you only need to "make" half the table.  
* Check to see if there's an addition/sum pattern between cells in the table, and addition is less computationally expensive than multiplication. Maybe there's a way to build the prime multiplication table through addition between n and n-1, n-2, n-x cells?
* Look deeper into different Prime number generating algorithms, in particular Agrawal–Kayal–Saxena [1]
 
# Hakim's code
Inside 
* src/Hakim
* tests/Hakim

## Exercise requirements
Write an application that takes numeric input (N) from a user and outputs a multiplication table of (N)
prime numbers.
* Do not use brute force / trial division algorithm
* Should have a test for a performant prime algorithm that can generate a list of 20,000+ primes
* Write an algorithm to solve the prime number generation - do not use a library method to
generate your primes
* the user should input a whole number N, where is N is at least 1
* the application should output an N+1 x N+1 grid of numbers

[1](https://en.wikipedia.org/wiki/AKS_primality_test#History_and_running_time)
