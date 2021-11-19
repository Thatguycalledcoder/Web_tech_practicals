<?php
include "sqlcontroller.php";

$post = "";
if(isset($_GET['Lab_id'])){
    $post = read($_GET['Lab_id']);
}else{
    header("location: results_page.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update Result</title>

    
  </head>
  <body>
    <div>
    <a class="btn btn-primary" href="results_page.php">Back to Results Page</a> 
        <h1>Update Record</h1>
        <h4>Current value => <?=$post['Search_result']?></h4>
        <form action="update-post.php">
            <div style="margin-bottom: 10px;">
                <p>New Value</p>
                <input type="text" name="Search_result" value=<?=$post['Search_result']?> required>
            </div>
            <input type="hidden" name="Lab_id" value=<?=$post["Lab_id"]?>>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>