<?php
  require "sqlcontroller.php";
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Results</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/style.css" rel="stylesheet">
        </head>
        <body>
        <?php 
            $search2 = "";
            (isset($_GET["searchee2"]) ? $search2 = $_GET['searchee2'] : "Null");
            echo $search2;

            if(isset($_GET['submit']))
                create($search2);
            ?>
            
            <h1>Results</h1>
            <ul class="list-group">
                <?php
                    $posts = readall();
                    foreach($posts as $key => $value){
                ?>
                    <li class="list-group-item" style="margin-bottom: 10px;">
                        <?= $value["Search_result"] ?>
                        <span style="margin-left: 10px;">[</span><a href="delete-post.php?Lab_id=<?= $value["Lab_id"] ?>" class="btn btn-danger">Delete</a><span style="margin-right: 10px;">]</span>
                        <form action="update-post.php" style="display: inline;">
                        <input type="text" name="Search_result">
                        <input type="hidden" name="Lab_id" value=<?=$value["Lab_id"]?>>
                        <input type="submit" name="submit" value="Update">
                        </form>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </body>
    </html>
    
