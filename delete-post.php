<?php
    include "sqlcontroller.php";

    //Checks if Lab-id is undefined
    if(isset($_GET['Lab_id'])){
        $delete_request = delete($_GET['Lab_id']); //deletes request

        if($delete_request){
            header("Location: results_page.php");
        }else{
            echo "Delete unsuccessful";
        }
    }
?>