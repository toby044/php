<?php

/*
*   1.
*   Lav en funktion der kan tjekke om et ord er et palindrom. Et palindrom er en sætning eller et ord der kan læses fra begge retninger som f.eks. Anna, Regninger, "Den laks skal ned"
*   Eksempel: check_palindrome('anna') == true
*   Eksempel: check_palindrome('pølse') == false

*   Hint: er du i tvivl, så prøv at Google "php reverse string"
*/

function revStr($str)
{
    $prnt = $str;
    $rts = strrev($str);
    if ($str == $rts) {
        echo "$prnt is a palindrome";
    } else {
        echo "$prnt is not a palindrome";
    }
}

revStr("Anton Berg");

echo '<br>';

revStr("Anna");
echo '<br>';
echo '<br>';

/*
*
*   2.
*   Lav en funktion der kan capitalize hvert ord i en string
*   Eksempel: capitalize('hello world!') == 'Hello World'
*   Hint: Google er din ven
*/

function cW($capWrd)
{
    echo ucwords($capWrd);
    echo '<br>';
}

cW("anton berg");
echo '<br>';

/*
*
*   Bonus
*   Lav en funktion der kan tjekke om to sætninger eller ord et et anagram. Et anagram er når de samme bogstaver bliver brugt i to sætninger eller ord.
*
*   Eksempel: check_anagram('rail safety', 'fairy tales') == true
*   Eksempel: check_anagram('roast beef', 'goat roast') == false
*   Eksempel: check_anagram('Elvis, 'lives') == false
*   
*/

function check_anagram($a, $b)
{
    if (count_chars($a, 1) == count_chars($b, 1)) {
        echo "$a and " . $b . " are anagrams";
    } else {
        echo "$a and " . $b  . " are not anagrams";
    }
}

check_anagram('rail safety', 'fairy tales');
echo '<br>';
check_anagram('roast beef', 'goat roast');
