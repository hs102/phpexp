<?php

$N= 15;


if ($N < 2 || $N > 100)
    die("Invalid input");


    echo "<table> \n ";

    for ($r=1; $r<=$N; $r++)
    {
        echo "<tr> \n";
        for ($c=1; $c<=$N; $c++)
        {
            $rs = ($r*$c);

            echo "<td  ";
            if ($rs % 3 == 0)
            {
            
                echo "style='background-color: yellow;'";}

            echo "> $rs </td> \n"; 
            }
            echo "</tr> \n";
        
        }
        echo "</table> \n"
    






?>