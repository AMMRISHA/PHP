<?php


$conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");

if(isset($_POST['submit']))
{
 echo   $image_name=$_POST['image_name'];
 echo     $image_heading=$_POST['image_heading'];
 echo      $image_des=$_POST['image_des'];
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
        header("location:upload.php");
       
    }
    else{
        echo "Please Select file with the extensions .('jpg','png','jpeg','webp')";
           // header("location:upload.php");
    }

    
}

?>

