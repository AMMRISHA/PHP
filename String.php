<?php

$str ="This";
$lenn = strlen($str);
echo $lenn . "is the string length of".$str;// concatination using dot operator
echo "<br>";
echo strrev($str). "<br>".str_replace("is","at",$str)."<br>". strpos($str,"is");
echo "<br>";

?>