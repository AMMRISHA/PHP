<?php
//foreach loop for indexed array
$color =[
    "red",
    "blue",
    "green"
];

foreach($color as $value)
{
    echo $value ."<br>";
}


// foreach loop for associative array

$age=[
    "Abdul"=>45,
    "Apela"=>38,
    "Ammrisha" =>20,
    "Ayesha"=> 16
];


foreach($age as $key=> $value)
{
    // echo $key."=>".$value."<br>";

    if($key == "Ammrisha")
    {
        echo $key."=".$value."<br>";
    }
}
?>