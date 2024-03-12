<?php


$color = ["red", "green", "blue", "yellow", "purple", "orange"];


for($i = 0; $i < count($color); $i++)
{
    echo "<h" . ($i+1) . " style='color: " . $color[$i] .  ";'> hello php </h" . ($i+1) . "> "; 
}








?>