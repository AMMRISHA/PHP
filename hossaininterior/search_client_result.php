<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="estimation_form_style.css">
</head>
<body>
<table cellpadding="7px" cellspacing="0px" border="1px solid black">
        <thead>
            <th>Image Id</th>
            <th>Image Name</th>
            <th>Image Heading</th>
            <th>Image</th>
            <th>Image Description</th>
            <th>Price</th>
         
        </thead>

        <tbody>

        <?php
        $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
        if($conn)
        {
            echo "Successful";
        }
        if(isset($_POST['submit']))
        {
            echo  $keyword=$_POST['search_keyword'];
            $sql="SELECT * FROM image_upload WHERE image_heading='{$keyword}'OR image_description='{$keyword}' ";
            $result= mysqli_query($conn , $sql) or die("query unsuccessful");

            if(mysqli_num_rows($result)>0)
            {
                while($search_row=mysqli_fetch_assoc($result))
                {


                    ?>
                    <tr>
                        <td><?php echo $search_row['img_id'];  ?></td>
                        <td><?php echo $search_row['image_name'];  ?></td>
                        <td><?php echo $search_row['image_heading'];  ?></td>
                        <td><img src="<?php echo $search_row['image'];  ?>" alt=""></td>
                         <td><?php echo $search_row['image_description'];  ?></td>
                    </tr>   
                    



                    <?php
                }
            }
        }
       ?>

        </tbody>

    </table>
</body>
</html>
