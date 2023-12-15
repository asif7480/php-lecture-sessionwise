<?php
    require_once 'config.php';

    $updatedId = $_POST['updatedId'];
    $updatedUsername = $_POST['updatedUsername'];
    $updatedFullname = $_POST['updatedFullname'];
    $updatedPassword = $_POST['updatedPassword'];

    $sql = "UPDATE users SET 
            username = '$updatedUsername',  
            fullname= '$updatedFullname', 
            password = '$updatedPassword'
            WHERE id = '$updatedId'";

    $result = mysqli_query($conn, $sql);

?>

