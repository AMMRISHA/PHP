<?php

    // $conn = mysqli_connect("servername","username","password","database_name")
     // if($conn)
    // {
    //     echo "connection successul";
    // }
    
    $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
    $sql = "SELECT * FROM  customer_details where Name='Ammrisha Chowdhury' ";

   $result= mysqli_query($conn , $sql) or die("query unsuccessful");
    
        if(mysqli_num_rows($result)>0)
        {      
?>

<table cellpadding="10px" cellspacing="0px">

        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Project Type</th>
            <th>Total Amount</th>
            <th>Payment</th>
            <th>Remaining Payment</th>
            <th>Phone Number</th>
            <th>Action</th>

        </thead>
        <tbody>
            <?php

                    while($row=mysqli_fetch_assoc($result))
                    {      
               
            ?>
        <tr>
            <td><?php 
                
                echo  $row['Cid'] ; ?></td>
            <td><?php echo  $row['Name'] ;   ?></td>
            <td><?php echo  $row['Projecttype'] ; ?></td>
            <td><?php echo  $row['Total_Amount'] ; ?></td>
            <td><?php echo  $row['Payment'] ; ?></td>
            <td><?php echo $row['Total_Amount']-$row['Payment']   ; ?></td>
            <td><?php echo  $row['Phone_number'] ; ?></td>
            <td>
                <a href='edit.php?id=<?php  echo  $row['Cid'] ;  ?>'>EDIT</a>
                <a href='delete.php?id=<?php  echo  $row['Cid'] ;  ?>'>Delete</a>
            </td>
        </tr>

        <?php
                 }
        ?>
        </tbody>

</table>


<?php }else{
    echo "<h2>No record Found</h2>";
} 

mysqli_close($conn);?>
