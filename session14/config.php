<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dashboard";


    $conn = mysqli_connect($serverName, $username, $password, $dbname);

    if(!$conn){
        die("Connect Error:" . mysqli_connect_error());
    }

    echo "Connected successfully";

?>
