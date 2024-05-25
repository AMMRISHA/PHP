

<?php
//using while loop
    $a =1;

    while($a<=10)
    {
        echo $a.") Hello <br>";
        $a++;
    }


    //using for loop
    $b=0;

    for($b=0;$b<=10;$b++)
    {
        echo $b."times<br>";

    }

    //using dowhile loop
    do{
        echo $a ."<br>";
        $a++;   
    }
    while($a<=20);
    
    //table creation using for nested loop

    echo "create table using for nested loop<br>";

    for($i=0;  $i<10;  $i++)
    {
        $k = 10 * $i;
       
        for($j=1;  $j<=10;  $j++)
        {
            $l =$k +$j;
         echo $l."  " ;

        }
        echo "<br>";
    }



    //goto statement for set a label 

    for($a=0;$a<=20;$a++)
    {
        if($a == 3)
        {
            goto label;

        }
        echo $a;


    }

    label:
    echo "hello";


    
?>