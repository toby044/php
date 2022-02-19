<?php

/*
*
1.  Skriv en funktion der kan udregne arealet af en firkant. Funktionen skal have to parametre, længde og bredde.
*
*/

function calc($l, $b)
{
    $res = $l * $b;
    echo 'Firkantens areal er: ' . $res . 'cm';
}

calc(231, 487);
