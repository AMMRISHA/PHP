<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define('pi',3.14);
    // variables
     echo "Hello world";
     echo "<h1>Hello world</h1>";
     $variable1= 34;
     $variable2=54;
     echo $variable1;
     echo "<br>";
     echo $variable2;
     echo "<br>";
     echo $variable1 + $variable2;
     //operators
    //  Arithmetic operator
    echo "The value of variable1 + variable2 , variable1 *variable2 , variable1 - variable2 , variable1 /variable2";
    echo "<br>";
    echo $variable1 + $variable2;
    echo "<br>";
    echo $variable1 * $variable2;
    echo "<br>";
    echo $variable1 - $variable2;
    echo "<br>";
    echo $variable1 / $variable2;
    echo "<br>";
    // Assignment operators
    $newVar = $variable1;
    $newVar += 1;
    echo $newVar;
    // comparison operator
    echo "The value 1==4 is";
    echo "<br>";
    echo var_dump(1==4);
    echo "<br>";
    echo var_dump(1>=4); 
    echo "<br>";
    echo var_dump(1<=4);
    echo "<br>";
    echo var_dump(1!=4);
    echo "<br>";
    // Increment/Decrement operator
   echo $variable1++;
   echo "<br>";
   echo $variable1;
   echo $variable2--;
   echo "<br>";
   echo $variable2;
   echo "<br>";
   echo ++$variable1;
   echo "<br>";
   echo $variable1;
   echo "<br>";
   echo --$variable2;
   echo "<br>";
   echo $variable2;
   echo "<br>";
    // Logical operator
        //  and(&&)
        $myvar = (true) and (true);
       
        echo var_dump($myvar);
        echo "<br>";
        $myvar = (true) and (false);
        echo var_dump($myvar);
        echo "<br>";
        $myvar = (false) and (true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar = (false) and (false);
        echo var_dump($myvar);
        echo "<br>";
        
      
        //  or(||)
        $myvar = (true or true);
        echo var_dump($myvar);
        echo "<br>";
        $myvar = (false || true);
        echo var_dump($myvar);
        echo "<br>";
        //  xor
 
        $myvar = (false xor true);
        echo var_dump($myvar);
        echo "<br>";

        //  not(!)

    
        $myvar = (!false);
        echo var_dump($myvar);
        echo "<br>";
    ?>

    <?php
    // datatypes
        // string
   echo"data types";
   echo "<br>";
   $var = "This is a string";
   echo "<br>";
   echo var_dump($var);
   echo "<br>";
  

        // integer

        $var =435;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";
        
        // float
        $var =43.5;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";
        echo pi;

        // Boolean

        // Array

        // object
?>
</body>
</html>