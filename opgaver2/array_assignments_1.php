<?php

// Set error reporting to true!
ini_set('error_reporting', E_ALL);

// 1.0  Create an indexed array containing the following:
//      blue, red, yellow, brown, black
//      Print out the yellow

$colors = ['blue', 'red', 'yellow', 'brown', 'black'];
echo $colors[2];

// 1.1  Remove the red color from the array, and print out the array
unset($colors[1]);
echo '<br>';
print_r($colors);

// 1.2  Change the brown color to purple, and print out the array
$newValue = 'purple';
$newPosition = 3;

array_splice($colors, $newPosition, 0, $newValue);
echo '<br>';
echo $colors[3] . '<br>';

// 1.3  Add cyan to the array
$colors[] = 'cyan';
print_r($colors);
echo '<br>';

// 1.4  Create an associative array containing the following:
//      bus = greyhound, 
//      train = ic4, 
//      plane = boing 747, 
//      bicycle = kildemoes, 
//      car = ford
//      Print out the car
$assArray = array(
    'bus' => 'greyhound',
    'train' => 'ic4',
    'plane' => 'boing 747',
    'bicycle' => 'kildemoes',
    'car' => 'ford'
);

echo 'The new car is a ' . $assArray['car'];
echo '<br>';

// 1.5  Change car to be a toyota, and print out the array
$assArray['car'] = 'toyota';
print_r($assArray);
echo '<br>';

// 1.6  Re-add the ford to the array
unset($assArray['car']);
$assArray['cars'] = ['toyota','ford'];
print_r($assArray);
echo '<br>';



// Bonus assignments
// 1.7  Add an array to the bus, containing three busses: 
//      greyhound, citybus and xbus.
$assArray['bus'] = ['greyhound', 'citybus', 'xbus'];
print_r($assArray);
echo '<br>';

// 1.8  Print out only the busses
print_r($assArray['bus']);
echo '<br>';

foreach($assArray['bus'] as $bus) {
    echo $bus.'<br>';
}

