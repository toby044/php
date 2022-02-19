<?php
    ini_set('error_reporting', E_ALL);
// Single line
/* Multiline comment */

/* 
// Data typer

    Integers 100 -10
    Boolean true false, 1, 0 
    Array []
    Object {}
    String ''
    Null
    Floats 1.445


// Php beskeder  

    error_reporting(E_ALL) slår fejlmeldinger til, brugt til debugging

    1. Notice
    2. Warning
    3. Fatal Error / Parse Error - Terminator dit php når det rammer sådan en error, scriptet stopper på linjen felen kommer


*/

echo "<h2>Der er tråd igennem</h2>";
$br = "<br>";

// Variables 
/* 
    Du må gerne ændre datatyper i variabler
    Variabler er case sensitive
    var_dump(variable) // indbygget funktion til at debug og vise datatyper og værdier af variabler
    const variabel = define("name", værdi) // define("MEDIA_PATH", '/media/img');

*/

// Strings

// "Double quotes" tillader at man kan putte variabler ind i koden, 'Single quotes' tillader ikke dette
// String Concatination - sammensætning af strings
// $firstName = "Anton";
// $lastName = "Berg";
// $fullName = $firstName . " " . $lastName;
// // echo $fullName;

// $imagePath = "image.png";
// echo MEDIA_PATH . "/" . $imagePath;

// Arithmetic Operators
/* 
    +
    -
    *
    /   
    % 10 % 7 = 3 //remainder
*/

// Arithmetic Assignment Operators
/* 
    +=
    -=
    *=
    /=
    .=
    ++
    -- 
*/

// $value1 = 10;
// $value2 = 10;
// $value2 .= $value1;

// $x=10;
// $y=7;

// echo "$x - $y = " . ($x+$y).$br;
// echo "$x - $y = " . ($x - $y).$br;
// echo "$x * $y = " . ($x * $y).$br;
// echo "$x / $y = " . ($x / $y).$br;
// echo "$x % $y = " . ($x % $y).$br;

// Control Structures // Conditionals & Loops
/* 
    If-else
    
    Switch
    
$value = "x";
switch($value){
    case 1:
        echo $value;
        break;

    case 2:
        echo $value;
        break;

    default:
        break;
}

*/


//Ternary operator
// $error = "Error";
// $firstName = "Tobias";
// $lastName = "Olesen";
// $value = ($firstName = "Tobias") ? : $error;

// echo $value;

// Loops
/*
    while
    for
    foreach
    dowhile //kører mindst 1 gang
*/

// foreach
// $arr = [1,2,3,4,5,6,7,8,9,10];

// foreach($arr as $i) {
//     echo $i.$br;
// }


// Arrays

$colors = array('blue','red','yellow');

// Figure out if a variable is an array

print is_array($colors).$br;

// Figure out if a value is in the array ('Needle', $haystack);

print in_array('blue',$colors).$br;

// How many value does an array have?

print count($colors).$br;

// Extract a portion of an array

$arr = array_slice($colors,2,2);
var_dump($arr);

// Shuffle array
var_dump($colors);
shuffle($colors);
var_dump($colors);

// Return first element of array and remove it from the array
$first = array_shift($colors);

// Return last element of array and remove it from the array
$last = array_pop($colors);

// Remove duplicate values
$not_unique = array(10,2,5,1,5,10,6);
var_dump($not_unique);

$unique_array = array_unique($not_unique);
var_dump($unique_array);
