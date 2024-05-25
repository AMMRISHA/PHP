<?php

//associate array:: An array where each key elements associate with a value


$age= array(

    "Abdul"=>45,
    "Apela"=>38,
    "Ammrisha" =>20,
    "Ayesha"=> 16
);

echo "<br>".$age["Abdul"];
echo "<br>".$age["Apela"];
echo "<br>".$age["Ammrisha"];
echo "<br>".$age["Ayesha"];

//update the key value

$age["Ammrisha"]=3;
echo "<br>".$age["Ammrisha"];
// use var_dump function to show the array elements with datatypes
echo "<pre>";
var_dump($age);
echo "</pre>";

//creating a food items array with price


$food=[
    "Biryani"=>220,
    "Fride Rice"=>180,
    "Puchka"=>150

];

echo "<br>" .$food["Biryani"];

// get input from the user and get back the outputs

$q=readline("Enter your string");

echo $q;



?>