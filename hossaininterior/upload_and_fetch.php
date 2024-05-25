<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>All images with heading and description</h1>
    <table cellpadding="5px" cellspacing="0px" border="2px solid black">
        <thead>
            <th>Image Id</th>
            <th>Image Name</th>
            <th>Image</th>
            <th>Image heading</th>
            <th>Image Description</th>
        </thead>
        <tbody>
            <?php

            $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");

            if(isset($_POST['submit']))
            {
             echo   $image_name=$_POST['image_name'];
             echo   $image_heading=$_POST['image_heading'];
             echo   $image_des=$_POST['image_des'];
                    $image=$_FILES['image'];
                    $file_name=$image['name'];
                print_r($file_name);
                $file_tem=$image['tmp_name'];
                print_r($file_tem);

                //55.webp

                $fileext=explode('.',$file_name);
                $filecheck = strtolower(end($fileext));

                $fileextstored= array('jpg','png','jpeg','webp');

                if(in_array($filecheck,$fileextstored ))
                {
                    $destfolder='upload/'.$file_name;
                    move_uploaded_file($file_tem ,$destfolder);

                    $imgqurey="INSERT INTO `image_upload`(`image_name`, `image`, `image_heading`, `image_description`) VALUES ('$image_name','$destfolder','$image_heading','$image_des')";

                    $query=mysqli_query($conn , $imgqurey) or die("There is an error");
                }
                else{
                    echo "Please Select file with the extensions .(
                        $fileextstored= array('jpg','png','jpeg','webp')";
                        header("location:upload.php");
                }


            }
            
                $imgfet="SELECT * FROM `image_upload`";
                $fetchquery=mysqli_query($conn ,$imgfet);
                    if(mysqli_num_rows( $fetchquery)>0)
                    {
                    
                            while($row=mysqli_fetch_array($fetchquery))
                            {

                        
            ?>
            <tr>
                
                <td><?php echo $row['img_id']  ?>  </td>
                <td><?php echo $row['image_name']  ?>  </td>
                <td><?php echo $row['image']  ?>  </td>
                <td><?php echo $row['image_heading']  ?>  </td>
                <td><?php echo $row['image_description']  ?>  </td>
                <?php
                        
                        }

                    }
                ?>
            </tr>
        </tbody>

    </table>
</body>
</html>