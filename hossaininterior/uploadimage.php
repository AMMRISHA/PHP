
<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>

    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <a href="show_all_image.php">Checks all the images</a>
<div class="container-admin">
    <form class="admin-form" action="upload.php" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
                <label >Enter Image name</label>
                <input type="text" name="image_name" >
        </div>
        <div class="form-group">
                <label for="file">Select Image:</label>
                <input type="file" name="image">
        </div>
        <div class="form-group">
                <label >Enter Image Heading</label>
                <input type="text" name="image_heading">
        </div>
        <div class="form-group">
                <label >Enter Image Description</label>
                <input type="text" name="image_des">
        </div>
        <input type="submit" name="submit" value="submit" class="submit">
    </form>


</div>

    
</body>
</html>