<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Estimation Quickly</title>

    <link rel="stylesheet" href="estimation_form_style.css">
</head>
<body>
    

<?php

    // $conn = mysqli_connect("servername","username","password","database_name")
     // if($conn)
    // {
    //     echo "connection successul";
    // }

    $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
    echo $Cus_id = $_GET['id'];
    $sql ="SELECT * FROM customer_details WHERE Cid={$Cus_id}";
    
    $result=mysqli_query($conn , $sql) or die("unsuccessful");
        
        if(mysqli_num_rows($result)>0)

        {
            while($row=mysqli_fetch_assoc($result))
            {
         
      ?>


<form class="estimation-form" action="updatedata.php" method="POST">

    
    <div class="form-group">
        <label>Name</label>
        <input type="hidden" name="Cid" value="<?php echo $row['Cid'] ; ?>"/>
        <input type="text" name="Name" value="<?php echo $row['Name'] ; ?>"/>
    </div>
    <div class="form-group">
        <label>Projecttype</label>
        
                <?php
                    $sql1 = "SELECT * FROM   project_type ";
                    
                   $result1= mysqli_query($conn , $sql1) or die("query unsuccessful");

                   if(mysqli_num_rows($result1)>0)

        {

            echo '<select name="Projecttype">';
            while($row1=mysqli_fetch_assoc($result1))
            {    
                if($row['Projecttype']==$row1['Pname'])
                {
                    $select = "selected";

                }
                else{
                    $select="";
                }
                 echo "<option {$select} value='{$row1['Pname']}'>{$row1['Pname']}</option>";

            }

       

          
             echo "</select>";
        }
        ?>
    </div>
    <div class="form-group">
        <label>Total_Amount</label>
        <input type="text" name="Total_Amount" value="<?php echo $row['Total_Amount']  ?>">
    </div>

    <div class="form-group">
        <label>Payment</label>
        <input type="text" name="Payment" value="<?php echo $row['Payment']  ?>">
    </div>

    <div class="form-group">
        <label>Phone_number</label>
        <input type="text" name="Phone_number" value="<?php echo $row['Phone_number']  ?>">
    </div>
    
    <input type="submit" value="update" class="submit">
</form>
   

<?php

       
}
}

?>
</body>
</html>