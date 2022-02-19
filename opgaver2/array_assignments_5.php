<?php

// Set error reporting to true!
ini_set('error_reporting', E_ALL);

// 1.0  Create an array based on the following textstring
//      "Before diving into creating and using arrays, its 
//       worth taking a moment to explore the concept of an array. 
//       Powerful though they are, arrays in PHP are easy to create."
$string = "Before diving into creating and using arrays, its worth taking a moment to explore the concept of an array. Powerful though they are, arrays in PHP are easy to create. explode";

$arr = explode(' ', $string);
print_r($arr);
echo '<br>';


       
// 1.1  Figure out if the word: explode exists in the array
if(in_array('explode', $arr)) {
    echo 'Explode exists in array.';
} else {
    echo 'Explode does NOT exist in array.';
}
echo '<br>';


// 1.2  Sort the array alphabetically and print it on screen
natcasesort($arr);
print_r($arr);
echo '<br>';



// 1.3  Print the amount of words in the array
echo count($arr);
echo '<br>';

// 1.4  Print only the first 5 words in the array
for($i = 0; $i < 5; $i++){
    echo $arr[$i].' ';
}

echo '<br>';

// 1.5  Create a list of unique words in the text.
$arr = array_unique($arr);
print_r($arr);
echo '<br>';

// 1.6  Bonus assignment:
//      Display which words exist in the above text, that do not exists in the following:
//      "As a developer, arrays are a very Powerful tool at our disposal"

$string2 = "As a developer, arrays are a very Powerful tool at our disposal";
$arr2 = explode(' ', $string2);

foreach($arr2 as $word){
    if(in_array($word, $arr)){
        echo $word.' ';
    }
}


