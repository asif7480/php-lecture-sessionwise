<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginAndRegister";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Error: " . mysqli_connect_error($conn));
    }

    echo "Connected";


?>