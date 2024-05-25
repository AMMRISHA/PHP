<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table{
            width:100%;
        }
    </style>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <h1>All images with heading and description</h1>
    <table cellpadding="5px" cellspacing="0px" border="2px solid black">
        <thead>
            <th>Serial No.</th>
            <th>Image Id</th>
            <th>Image Name</th>
            <th>Image</th>
            <th>Image heading</th>
            <th>Image Description</th>
        </thead>
        <tbody>
            <?php

            $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");

            
                $imgfet="SELECT * FROM `image_upload`";
                $fetchquery=mysqli_query($conn ,$imgfet);
                $sno=1;
                    if(mysqli_num_rows( $fetchquery)>0)
                    {
                    
                            while($row=mysqli_fetch_array($fetchquery))
                            {

                        
            ?>
            <tr>
                <td><?php echo $sno ?></td>
                <td><?php echo $row['img_id']; ?>  </td>
                <td><?php echo $row['image_name'];  ?>  </td>
                <td><img src="<?php echo $row['image'];  ?>">  </td>
                <td><?php echo $row['image_heading'];  ?>  </td>
                <td><?php echo $row['image_description'];  ?>  </td>
                <?php
                        $sno=$sno+1;
                        }

                    }
                ?>
            </tr>
        </tbody>

    </table>
</body>
</html>