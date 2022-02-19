<?php

// Sæt error_reporting til E_ALL så i kan se alle php fejl!
error_reporting(E_ALL);
$br = "<br>";

// 1a.  Lav en variabel der indeholder dit fornavn. 
//      Udskriv variablen
$firstName = "Tobias";
echo $firstName.$br;

// 1b.  Lav en variabel der indeholder dit efternavn.
//      Udskriv variablen

$lastName = "Olesen";
echo $lastName.$br;

// 1c. Udskriv hele dit navn ved at sammenkæde (concatinate) dine to variabler 
echo $firstName." ".$lastName.$br;

// 1d.  Ændre dit efternavn og udskriv hele dit navn igen.
$lastName = "Neergaard";
echo $firstName." ".$lastName;
