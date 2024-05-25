<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];  ?>" action="POST">

    <input type="text" name="search_keyword" placeholder="Search Keyword">
    <input type="submit" name="submit" >
</form>
    <table>
        <thead>
            <th>Client Id</th>
            <th>Client Name</th>
            <th>Project</th>
            <th>Total Budget</th>
            <th>Already Payment</th>
            <th>Phone</th>

        </thead>

        <tbody>

        <?php
        $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
        if(isset($_POST['submit']))
        {
            echo "yes";
        }



        ?>
        </tbody>



    </table>
</body>
</html>