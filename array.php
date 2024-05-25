<?php

// define array using the array function

$colors=array("red", "green","blue","white");
$array_count =count($colors);

echo $array_count."<br>";
echo "<br>".$colors[0]."<br>";



//print the array using print_r function in php

print_r($colors);


// define array using second bracket   && also store different types of elements

$Color =["red", 20 ," blue"];

// using pre tag

echo "<pre>";
print_r($Color);

echo "</pre>";

//array using for loop

$colors=array("red", "green","blue","white");


echo "<ul>";
for($i=0;$i<4;$i++)
{
    echo "<li> $colors[$i] </li>";
}
echo "</ul>";


//
?>