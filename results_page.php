<?php
  require "sqlcontroller.php";
  $search2 = "";
  (isset($_POST["searchee2"]) ? $search2 = $_POST['searchee2'] : "Null");
  echo $search2 . "<br>";

  //Inserts search result from previous page into database
  $regex = "/[^0-9]+$/";
  
    if(preg_match($regex, $search2))  {
        create($search2);
        return $search2;
        
    }
    
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
            <h1>Results</h1>
            <ul class="list-group">
                <?php
                    //Gets all current values from database
                    $posts = readall();
                    foreach($posts as $key => $value){
                ?>
                    <li class="list-group-item" style="margin-bottom: 10px;">
                        <?= $value["Search_result"] ?>
                        <span style="margin-left: 10px;">[</span><a href="delete-post.php?Lab_id=<?= $value["Lab_id"] ?>">Delete</a><span style="margin-right: 10px;">]</span>
                        <span style="margin-left: 10px;">[</span><a href="edit_form.php?Lab_id=<?= $value["Lab_id"] ?>">Update</a><span style="margin-right: 10px;">]</span>
                        </form>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </body>
    </html>
    
