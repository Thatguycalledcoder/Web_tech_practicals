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