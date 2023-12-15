<?php
    require_once 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = "DELETE FROM users WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: view.php");
            // echo "Record deleted successfully";
        }else{
            echo "Error: " . mysqli_error($conn);
        }
    }

?>