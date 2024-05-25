<?php

echo $cus_id=$_POST['Cid'];
echo $Name = $_POST['Name'];
echo $Projecttype=$_POST['Projecttype'];
echo $Total_Amount =$_POST['Total_Amount'];
echo $Payment =$_POST['Payment'];
echo $Phone_number =$_POST['Phone_number'];

$conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
    $sql = "UPDATE customer_details SET Name='{$Name}' , Projecttype='{$Projecttype}' ,Total_Amount='{$Total_Amount}',Payment='{$Payment}',Phone_number='{$Phone_number}' WHERE Cid={$cus_id} ";
   $result= mysqli_query($conn , $sql) or die("query unsuccessful");

  header("location:http://localhost/PHP_tutorial/customer_credentials.php");

?>