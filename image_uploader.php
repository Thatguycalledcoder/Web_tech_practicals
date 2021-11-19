<?php
    include "sqlcontroller.php";
    if (!isset($_POST["submit"])) {
        return false;
    }

    if(isset($_FILES["image_file"])) {
        $root_dir = "C:\\xampp\\htdocs\\";
        $upload_root_dir = "http://localhost/";
        $file = $_FILES["image_file"];
        $file_dest = $root_dir . basename($file["name"]);
        $upload_file_dest = $upload_root_dir . basename($file["name"]);
        $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

        echo $file_dest;

        if($file_type != "jpg" && $file_type != "png" && $file_type != "gif"){
            echo "Filetype error... only jpg, png, gif allowed";
        }
        else{
            $upload_image = move_uploaded_file($file["tmp_name"], $file_dest);
            if($upload_image)
                $status = upload($upload_file_dest);
                if($status)
                    echo "Upload successful";
        }
    }
    
?>