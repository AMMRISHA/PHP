<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Estimation Quickly</title>

    <link rel="stylesheet" href="estimation_form_style.css">

    <style>

        .pinput{
            width: 233px;
    display: flex;
    margin: 20px;
    padding: 20px;
        }
    </style>
</head>
<body>


<form class="projecttype-select" method="POST" action="room_to_design.php">
    <div class="form-div">
            <?php
            $conn = mysqli_connect("localhost","root","","hossian_interior") or die("Connection failed");
            $sql = "SELECT * FROM  project_type";

            $result= mysqli_query($conn , $sql) or die("query unsuccessful");

                if(mysqli_num_rows($result)>0)
                {
                    
                while($row=mysqli_fetch_assoc($result))
                {

            ?>
                    <div class="pinput">
                    
                            <input type="radio" name="Pname" value="<?php echo  $row['Pname'];  ?>">
                            <label for="projecttype">
                                <div class="underlabel">
                                    <?php echo $row['Pname'];  ?>
                                
                                <?php
                                    if($row['Pid']>10)
                                    {
                                    ?>
                                    <div class="click" onclick="myfun()"><span>&#8595;</span></div>
                                        
                                        <div id="fetch-project-type-size">
                                            <input type="radio" >
                                            <label for="">small</label>
                                        </div>
                                        <div id="fetch-project-type-size">
                                            <input type="radio" >
                                            <label for="">small</label>
                                        </div>
                                    <?php
                                        }
                                    ?>
                            
                            </div>

                            
                            </label>
                    </div>
                    
                <?php
                }
                }
                ?>
    </div>   

    <?php

                if(isset($_POST['']))

    ?>
                    <input type="submit" value="save" class="submit">

    ?>
        
 </form>



<script>
   // document.getElementByClassName("fetch-project-type-size").style.display="none";
    // function myfun(){
    //     document.getElementById("Menuitems").style.display="block";
    // }
</script>
</body>
</html>