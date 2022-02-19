<?php

/*
*
2.  Skriv en funktion der kan finde ud af om et tal er et primtal. Funktionen skal bruget et tal som parametre.
*
*/

function prime($num)
{
    if ($num == 1)
        return $num . ' is not a prime number';
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0)
            return $num . ' is not a prime number';
    }
    return $num . ' is a prime number';
}

echo prime(4);
