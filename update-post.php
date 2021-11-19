<?php
    include "sqlcontroller.php";

    //Checks if Lab-id and Search_result are not undefined
    if(isset($_GET['Lab_id']) && isset($_GET['Search_result'])){
        $update_request = update($_GET['Lab_id'], $_GET['Search_result']);

        if($update_request){
            header("Location: results_page.php");
        }else{
            echo "Update unsuccessful";
        }
    }
?>