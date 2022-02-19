<?php

// Set error reporting to true!
ini_set('error_reporting', E_ALL);

// 1. Create the code that displays the 3 to the power table. ie. 3,6,9,12 ....
// up to 100

echo "<h2>Assignment 1</h2>";

for($i = 0; $i < 100; $i += 3) {
    echo $i.'<br>';
}


// 2. Create the code that creates the following
// *
// **
// ***
// ****
// *****
// ******
// *******
// ********
// *********
// **********

echo "<h2>Assignment 2</h2>";

for($i = 0; $i < 11; $i++){
    echo str_repeat('*', $i).'<br>';
}

// for($i = 0; $i < 10; $i++){
//     for($i2 = 0; $i2 < $i; $i2++){
//         echo '*';
//     }
    
//     echo '<br>';
// }

// 3. Create the code that creates
// *+++++++++
// **++++++++
// ***+++++++
// ****++++++
// *****+++++
// ******++++
// *******+++
// ********++
// *********+

echo "<h2>Assignment 3</h2>";

for($i = 1; $i < 10; $i++){
    for($i2 = 0; $i2 < $i; $i2++){
        echo '*';
    }
    for($i3 = 10; $i3 > $i; $i3--){
        echo '+';
    }
    
    echo '<br>';
}


// 4. Create the code that creates
// ++++++++++
// **********
// ++++++++++
// **********
// ++++++++++
// **********
// ++++++++++
// **********
// ++++++++++
// **********

echo "<h2>Assignment 4</h2>";

for($i = 0; $i < 11; $i++){
    if($i % 2 == 0){
        echo str_repeat('+' , 10).'<br>';
    } else {
        echo str_repeat('*' , 10).'<br>';
    }
}


// 5. Create the code that displays 4 to the power table up to 100, but skips all numbers divisible by 10. Ie. 4,8,12,16, 24, 28 ...

echo "<h2>Assignment 5</h2>";

for($i = 0; $i < 100; $i += 4) {
    if($i % 10 == true){
        echo $i.'<br>';
    }
}



// 6. Bonus assignment
// Create the code that creates the fibonacci order
// 1 1 2 3 5 8 13 21 34 55 89 etc. up to 500

echo "<h2>Assignment 5</h2>";

$num = 0;
$n1 = 0;
$n2 = 1;

while($num < 500) {
    $n3 = $n1 + $n2;
    echo $n3."<br>";
    $n1 = $n2;
    $n2 = $n3;
    $num = $num + $n3;
};
