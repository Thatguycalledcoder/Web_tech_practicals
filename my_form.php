<?php
    include "sqlcontroller.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" 
    src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  </script>
        <title>Form stuff</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php        
       
        session_start();
        $search1 = "";
        // Checking whether submit is in the global get method: This is done so that the form will not automatically submit when 
        //you first load the page
        if(isset($_GET["submit"])){
            //Print result to the screen
            $_SESSION["searchresult"]=$_GET["searchresult"];
            $search1=$_SESSION["searchresult"];
        }
        ?>
         <form>
             <input type="text" id="searchresult" name="searchresult" style="width: 300px;">
             <small id="smallError" style="color: red; font-size: 12px; font-weight: bold;"></small>
             <input type="submit" value="submit" name="submit">
         </form>
         <?php
          #gets the fname from the form; $_REQUEST/$_GET/$_POST gets the value from the webpage
          #isset checks to remove any undefined key array warnings
            (isset($_GET["searchresult"]) ? $search1 = $_GET['searchresult'] : "Null");
            if (empty($search1)) {
                
            } else {
                echo $search1;
            }    
?>


            <h2>Second box</h2>
            <form id="form" action="" method="GET" target="" >
             <input type="text" id="searchee2" name="searchee2" style="width: 300px;">
             <input type="submit" value="submit" name="submit" onclick="validate(event)">
            </form>

         <h2>Upload</h2>
            <form action="image_uploader.php" method="POST" enctype="multipart/form-data">
             <input type="file" name="image_file">
             <input type="submit" value="submit" name="submit">
         </form>

         <h1>Gallery</h1>
            <ul class="list-group" style="list-style-type: none;">
                <?php
                    //Gets all current values from database
                    $posts = displayall();
                    if($posts == false)
                        echo "Nothing to display here";
                    else
                        foreach($posts as $key => $value){
                        $path = str_replace("\\","/",$value["User_image"]);
                ?>
                    <li class="list-group-item" style="margin-bottom: 10px;">
                    
                        <img src="<?= $value["User_image"]?>" style="max-width: 500px;">
                    </li>
                <?php
                    }
                ?>
            </ul>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
         <script src="regexpres.js"></script>

         
    </body>
</html>