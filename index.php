<?php
$servername = "localhost";
$username ="root";
$password ="";
$database = "trip";
$conn = mysqli_connect($servername,$username,$password,$database);


if(isset($_POST['submit']))
{

$name = $_POST['name'];
$age= $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

if(!$conn){
    die("connection to this database due to".mysqli_connect_error());
}
//echo "successfully connected to the database";


$sql = "INSERT INTO `trip` ( `name`, `age`, `gender`, `email`, `phone`, `desc`) 
VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc')";
echo $sql;
if($conn->query($sql) == TRUE){
    echo "succesfully inserted";

}
else{
    echo "ERROR". $sql."<br>".$conn->error;
    echo "<br>";
}
$conn->close();
    
}    
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="bg"src="Victoria.jpg" alt="image not found">
    <div class="container">
        <h1>WELCOME TO OUR IIT KHARAKPUR</h1>
        <p>Enter your details to conform your participation</p>
        <p class="submitmsg">Thanks for submitting the form . We are happy to see you joining us for the USA trip.</p>
        <form action="index.php" method ="POST">
       <input type="text" name="name" id="name" placeholder="Enter your name">
       <input type="text" name="age" id="age" placeholder="enter your age">
       <input type="text" name="gender" id="gender" placeholder="Enter your gender">
       <input type="email" name="email" id="email" placeholder="Enter your email">
       <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
       <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other informatin here"></textarea>
       <button name="submit" type="btn">Submit</button>
       
        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno.`, `name`, `age`, `gender`, `email`, `phone`, `others`, `dt`) VALUES (NULL, 'name2', '2', 'female', 'test@gmail.com', '2345678901', 'abcd', current_timestamp()); -->
</body>
</html>