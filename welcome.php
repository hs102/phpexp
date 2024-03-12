<?php
// single line comment
/* 
multi line comment
*/

echo "hello world <br>" ;
print "test <br>"  ;



//Variables
$x = 10;
$y = true;
$z = 12.5;
$s = "string";
$color = ["red", "green", "blue", "yellow", "purple", "orange"];


// concatenation 

echo "the value of z is" . $z. "<br>";
echo "the value of z is $z <br>";
echo "the value of z is {$z} <br>";
echo 'the value of z is {$z} <br>';

//for loop

for($i = 0; $i < count($color); $i++)
{
    echo "<h" . ($i+1) . " style='color: " . $color[$i] . ";'> hello " . ($i+1) . "</h" . ($i+1) . "> "; 
}

// for loop

for($i = 1; $i <=6; ++$i)
{
    echo "<h$i> hello $i </h$i> "; 
}


var_dump($y);


?>