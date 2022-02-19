<?php

/*
*

        Lav et script der gengiver spillet FizzBuzz. FizzBuzz er et tællespil som bruges til at lære børn om division.
        Man skiftes til at tælle fra 1 og op, og når der kommer et tal der går op i 3, siger man "Fizz", og når det går op i 5 siger man "Buzz"
        og når det går op i både 3 og 5 siger man FizzBuzz.

        Det ser f.eks. sådan ud:
        1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17, Fizz

        Udskriv de første 100 FizzBuzz tal.
        
*
*/


for ($i = 1; $i <= 100; $i++) {
        if ($i % 5 == 0 && $i % 3 == 0) {
                echo "FizzBuzz" . '<br>';
        } else if ($i % 5 == 0) {
                echo "Buzz" . '<br>';
        } else if ($i % 3 == 0) {
                echo "Fizz" . '<br>';
        } else {
                echo $i . '<br>';
        }
}
