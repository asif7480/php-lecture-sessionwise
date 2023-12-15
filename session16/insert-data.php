<?php
    require_once 'config.php';

    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username, fullname, password) 
            VALUES('$username', '$fullname', '$password')";

    $result = mysqli_query($conn, $sql);
?>