<?php

// connect to the server

$servername ="localhost";
$password="blank";
$database = "";
// create a connection 
$conn = my_squli($servername , $password , $database);

if($conn)
{

    echo "Connction successful";
}
else
{
    echo "not connected";
}






?>