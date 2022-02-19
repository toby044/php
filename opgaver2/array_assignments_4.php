<?php

$color = array(4 => 'white', 6 => 'green', 11=> 'red');

/*
*
3.  Lav et script der udskriver det første element fra $color, løsningen skal være uafhængig af index dvs du må ikke bruge $color[0]
*
*/
foreach($color as $key => $value) {
    if($value == 'white') {
        echo 'The first element has the key: '.$key.' and the value of: '.$value;
    }
}
echo '<br>';

echo array_shift($color);


