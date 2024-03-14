<?php


$ITstudents["202007647"]=[3.5, "ali khalid", "CE"];
$ITstudents["202007648"]=[3.7, "noor khalid", "Cy"];



$ITstudents2["202007647"]=["gpa"=>3.5, "name"=> "Yaseen mustafa","major"=> "CC"];
$ITstudents2["202007642"]=["gpa"=>3.7, "name"=> "noor khalid","major"=> "Cy"];
$ITstudents2["202007648"]=["gpa"=>2.7, "name"=> "Ahmad khalid","major"=> "CS"];
$ITstudents2["202007671"]=["gpa"=>3.5, "name"=> "Ahmad mustafa","major"=> "SE"];
$ITstudents2["202007652"]=["gpa"=>2.7, "name"=> "Noora khalid","major"=> "Cy"];
$ITstudents2["202007632"]=["gpa"=>3.7, "name"=> "mohamad khalid","major"=> "CS"];

echo "<ol>" ;


// nested foreach loop

foreach($ITstudents2 as $sid => $info){

    echo "<li>$sid";
    echo "<ul>";

        foreach($info as $v)

            echo  "<li>$v</li>";
            echo "</ul></li>";

}

echo " </ol>"





?>

<?php
echo count($ITstudents2)."<br>";
echo count($ITstudents2["202007647"])."<br>";









// Question: write a php function that finds the highest gpa average 

//use isset($value['22']) // does this value exist ? print yes or no

# make a summary that takes the gpa of a major and sums it and also takes the count and to find the average divide the total gpa on the count

?>



