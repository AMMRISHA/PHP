<?php

// connect to the server
$servername ="localhost";
$username="root";
$password="";
$database="dbAmmrisha";

// check connetion successful or not
$name = "Ammrisha ";
$conn = mysqli_connect($servername , $username , $password, $database);
//  if(!$conn)
//  {

//  die ("Connection was not successful".mysqli_connect_error());
//  }

// else{

//  die("Welcome".$name."Your  Connection was successful and database created successfully.");
//  }
////////////////////////////////////////////////////


////////////////////////////

//create table

$sql = "CREATE TABLE `dbammrisha`.`XYZ` ( `sno.` INT(6) NOT NULL AUTO_INCREMENT , `nam` INT NOT NULL , PRIMARY KEY (`sno.`))";
$result =mysqli_query($conn, $sql);

if(!$result)
{
    echo "Hello ".$name ."  Your table is created successfully";
}
else
{
echo"Your database is not created successfully because of this error ". mysqli_error();
}


?>

