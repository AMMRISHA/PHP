<?php

    $conn=mysqli_connect("localhost","root","","hossian_interior") or die("connection failed");
    echo $cus_id=$_GET['id'];

    $sql= "DELETE FROM customer_details WHERE Cid={$cus_id}";
    $result = mysqli_query($conn , $sql);

    if($result)
    {
        echo "Record deleted successsfully";
        header("location:http://localhost/PHP_tutorial/customer_credentials.php");
    }
    else{
        echo "Unsuccesssful to delete the record";
    }
   


?>