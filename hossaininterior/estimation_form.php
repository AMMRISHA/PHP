<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Estimation Quickly</title>

    <link rel="stylesheet" href="estimation_form_style.css">
</head>
<body>
    


<form class="estimation-form" action="savedata.php" method="POST">

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="Name" placeholder="Enter your Name">
    </div>
    <div class="form-group">
        <label>Projecttype</label>
        
        <select name="Projecttype" >
            <option value="" selected disabled> Select Project Type</option>

                <?php
                    $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
                    $sql = "SELECT * FROM   project_type ";
                    $cid=1;
                   $result= mysqli_query($conn , $sql) or die("query unsuccessful");

                   while($row=mysqli_fetch_assoc($result))
                   {

                   
                ?>
            <option id="<?php  echo $row['Pid']; ?>" value="<?php  echo $row['Pname']; ?>"><?php echo $row['Pname'];?></option>

            <?php
                }

            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label>Total_Amount</label>
        <input type="text" name="Total_Amount" placeholder="Enter the total amount">
    </div>

    <div class="form-group">
        <label>Payment</label>
        <input type="text" name="Payment" placeholder="EnterThe total payment">
    </div>

    <div class="form-group">
        <label>Phone_number</label>
        <input type="text" name="Phone_number" placeholder="Enter Your phone number">
    </div>

    <input type="submit" value="save" class="submit">
</form>

</body>
</html>