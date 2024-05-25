<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin </title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>


<div class="admin-navbar">
     <ul class="admin-ul">
         <a href="index.php"><li>Home</li></a> 
         <a href="#"><li>Admin-Dashboard</li></a> 
         <a href="customer_credentials.php"> <li>All Customers</li></a>
         <a href="show_all_image.php"> <li>All uploaded images</li></a>
        

     </ul>
</div>

<div class="container-admin">
    <h2 class="admin-heading">Enter Admin Credentials for Login</h2>
    <form class="admin-form" action="<?php  $_SERVER['PHP_SELF'];  ?>" method="POST">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="Admin-name" required>
                </div>


                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="Admin-password" required >
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="text" name="Confirm-Password" required >
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="Admin-email" required>
                </div>

                <div class="form-group">
                    <label>Phone number</label>
                    <input type="text" name="Admin-phone-number" required>
                </div>

                <input type="submit" value="submit" name="submit" class="submit">
    </form>

</div>

<?php

    if(isset($_POST['submit']))
    {

        $Adminname=$_POST['Admin-name'];
        $Adminpassword=$_POST['Admin-password'];
        $Adminemail=$_POST['Admin-email'];
        $Adminphonenumber=$_POST['Admin-phone-number'];
     $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
     $sql = "SELECT * FROM `admin_details` WHERE Admin_name='$Adminname'";
                            
     $result= mysqli_query($conn , $sql) or die("query unsuccessful");
 
     if(mysqli_num_rows($result)>0)
                                    {

                                        while($row =mysqli_fetch_assoc($result))
                                        {
                                           // echo "<br>".$row['Aid'];

                                            if($row['Admin_name']==$Adminname  && $row['Admin_email']==$Adminemail && $row['Admin_ph_number']==$Adminphonenumber)
                                            {
                                                $message = "Admin alredy exists";
                                                echo "<script type='text/javascript'>alert('$message');</script>";

                                        
                                            }
                                            
                                        }
                                    }
                                    else{

                                        $sql1 = "INSERT INTO `admin_details` ( `Admin_name`, `Admin_password`, `Admin_email`, `Admin_ph_number`) VALUES('{$Adminname}' ,'{$Adminpassword}','{$Adminemail }','{$Adminphonenumber}')";
 
                                        $result1= mysqli_query($conn , $sql1) or die("query unsuccessful");

                                        header("location:add-admin.php");
                                    }
                                }

?>
</body>
</html>