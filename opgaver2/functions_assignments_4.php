<?php

/*
*
4:  Skriv Fakultetsfunktionen som en funktion i PHP. 
        Man tager fakultetsfunktionen til et tal ved at gange tallet med det tal, der er 1 mindre, 
        og gange med det, der er 1 mindre end det, osv. indtil man når ned til at gange med 1.

        F.eks. er fakultetsfunktionen for 6:
        6*5*4*3*2*1 = 720
        
        eller for 10
        10*9*8*7*6*5*4*3*2*1 = 3.628.800

        Funktionen skal bruge ét tal som parameter.
*
*/

function fak($num)
{
        $faku = 1;
        for ($i = $num; $i >= 1; $i--) {
                $faku = $faku * $i;
        }
        echo "Fakultetsfunktionen for $num er: " . $faku;
}

fak(10);
