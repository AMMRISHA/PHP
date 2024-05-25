<?php


echo $Name = $_POST['Name'];

echo $Projecttype=$_POST['Projecttype'];
echo $Total_Amount =$_POST['Total_Amount'];
echo $Payment =$_POST['Payment'];
echo $Phone_number =$_POST['Phone_number'];

$conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
    $sql = "INSERT INTO customer_details ( `Name`, `Projecttype`, `Total_Amount`, `Payment`, `Phone_number`) VALUES('{$Name}' ,'{$Projecttype}','{$Total_Amount }','{$Payment}','{$Phone_number}')";

   $result= mysqli_query($conn , $sql) or die("query unsuccessful");

   header("location:http://localhost/PHP_tutorial/customer_credentials.php");

?>