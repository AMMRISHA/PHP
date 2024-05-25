<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .container{
            width:300px;
            margin: 100px auto;
            justify-content:center;
            align-items:center;
            /* text-align:center; */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn about php</h1>
        <p>Your party status is here:</p>
        <?php
          $age = 6;
          if($age>18){
            echo "you can go to party";
          }
          else if($age==7){
            echo " you are 7 years old";

          }
          else if($age==6){
          echo "you are 6 years old";
          }
          else{
            echo "you are not go to the party";
          }
          echo"<br>";
 //arrays in php       
         $languages = ['java','python','c++'];
         echo $languages[0];
         echo"<br>";
        // find the no of elements are prsent in array
         $languages = ['java','python','c++'];
         echo count($languages);
          echo"<br>";
         $languages = array("java","python","c++");
         echo $languages[0];
  //loops
        $a =0;
        while ($a <= 10) {
        echo "value of a is:";
        echo $a;
        echo"<br>";
        $a++;
        }       
//iterating arrays in while loop
        $a =0;
        while ($a < count($languages)) {
        echo "value of languages is:";
        echo $languages[$a];
        echo"<br>";
        $a++;
        }  
 //do while loop
        $a =0;
        do{
            echo "value of a is:";
            echo $a;
            echo"<br>";
            $a++;
        } 
        while ($a <10);   
        echo"<br>";
 //for loop
        $a = 20;
        for ($a=0; $a <10 ; $a++) { 
            echo "value of a is:";
            echo $a;
            echo"<br>";
        }  
        
//foreach
         foreach($languages as $value){
            echo "The value is :";
            echo $value;
            echo"<br>";
         }    
        ?>
    </div>
</body>
</html>