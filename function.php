<?php

function  hello()
{
    echo "hello everybody";
}

function  amm()
{
    echo "<br>Hello Ammrisha";
}
//call by value
function sum($a , $b)
{
    $sum = $a + $b;

    echo "<br>".$sum;
}
function pro($a,$b)
{
    $p=$a * $b;
    echo "<br>".$p;
}

function name_con($firstname , $midname , $lastname)
{
    $name = $firstname . $midname . $lastname ;
    echo $name;
}
hello();
amm();
sum(2,4);
pro(4,3);


name_con("Ammrisha"  , " Chowdhury"," Hossain");

// call by reference

function great(&$num)

{
    $number=45;
    echo "<br><br><br>This is evaluted using call by reference number value:". $number;
}

great($number);



//using variable function

function wow()
{
    echo "<br><br> Hello variable function";
}

$func="wow";

$func();


//anonomus function

$sayHello = function($name){
    echo "<br>Store the fuction value in a variable<br>".$name;
};

$sayHello("Ammrisha");

//function using different parameter


function nhello($fname ="First" , $lname ="Last")
{
    echo  "<br>" .$fname." " . $lname. "<br>";

}

nhello();
nhello("Ammrisha" , "Chowdhury");



//passing value to the function

function s($a , $b)
{
    echo  $a + $b;

}

$one = 10;
$two = 20.55;

s($one , $two);

//function with returning value 

function add($math , $eng , $sc)
{
    $s = $math + $eng + $sc;

    return $s;
}

function percentage($st)
{
    $per = $st/3;

    echo "<br>"."The average is". $per."%"."<br>";
}

$total = add(90,80,93);
echo "The total value is:".$total."<br>";
percentage($total);



//



?>

