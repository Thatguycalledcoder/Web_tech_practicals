<?php
    require "database_connection_test.php";
   

    class CRUD extends Database{ 
        
        //Insert SQL function
        function create($search_result) {
            $sql = $sql = "INSERT INTO practical_lab_table(Search_result)
            VALUES ('$search_result')";
            return $this->run_query($sql);
        }

        //Select all SQL function
        function read() {
            $sql = "SELECT * FROM practical_lab_table";   
            return $this->run_query($sql);   
        }

        //Select SQL function
        function readone($id) {
            $sql = "SELECT * FROM practical_lab_table WHERE Lab_id = '$id'";   
            return $this->run_query($sql);   
        }

        function readterm($search_result) {
            $sql = "SELECT * FROM practical_lab_table WHERE Search_result = '$search_result'";   
            return $this->run_query($sql);   
        }

        //Update SQL function
        function update($id, $search_result) {
            $sql = "UPDATE practical_lab_table SET Search_result = '$search_result' WHERE Lab_id = '$id'";
            return $this->run_query($sql);
        }

        //Delete SQL function
        function delete($id) {
            $sql = "DELETE FROM practical_lab_table WHERE Lab_id = '$id'";
            return $this->run_query($sql);
        }

        function create_upload($search_result) {
            $sql = $sql = "INSERT INTO practical_upload_table(User_image)
            VALUES ('$search_result')";
            return $this->run_query($sql);
        }

        function display_images() {
            $sql = "SELECT * FROM practical_upload_table";   
            return $this->run_query($sql);  
        }
    }

?>