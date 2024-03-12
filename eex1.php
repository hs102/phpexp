<?php

$color = ["red", "green", "blue", "yellow", "purple", "orange"];

for ($i = 1 ; $i <= 6 ; $i++)

{
    $y=$i-1;
    echo  "<h$i style ='color:$color[$y]'> Hello Php</h$i>";
}




?>