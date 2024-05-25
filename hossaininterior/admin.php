<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>



<div class="admin-navbar">
     <ul class="admin-ul">
         <a href="index.php"><li>Home</li></a> 
         <a href="#"><li>Admin-Dashboard</li></a> 
         <a href="customer_credentials.php"> <li>All Customers</li></a>
         <a href="show_all_image.php"> <li>All uploaded images</li></a>
          <li><div class="usernamediv">
        <?php
             $adminname = $_GET['adminname'];
          $arr = str_split($adminname); 

          echo "<div class='fstchar_admin_name'>$arr[0]</div>";
          echo $adminname;

        ?>
          </div></li>

     </ul>
</div>

   <div class="admin_dashboard_container">
        <div class="admin-div">
            <img src="upload/Capture.JPG" alt="">
                 <a href="uploadimage.php">   <h2>Add New Image</h2></a>
        </div>
        <div class="admin-div">
            <img src="upload/Capture.JPG" alt="">
                 <a href="show_all_image.php">   <h2>Check All the Image</h2></a>
        </div>
        <div class="admin-div">
            <img src="upload/Capture.JPG" alt="">
                 <a href="add-admin.php">   <h2>Add New admin</h2></a>
        </div>
   </div> 
</body>
</html>