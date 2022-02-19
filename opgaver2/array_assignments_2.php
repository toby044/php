<?php

$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

/*
*
2.  Lav et script der udskriver landene og deres respektive hovedstæder fra $ceu
*
*/
foreach ($ceu as $country => $value) {
    echo $country . ' hovedstad er ' . $value . '<br>' . '<br>';
}

echo '<br>';

function checkIt($n, $ceu)
{
    if (array_key_exists($n, $ceu)) {
        echo $ceu[$n];
    }
}

checkIt("Italy", $ceu);
