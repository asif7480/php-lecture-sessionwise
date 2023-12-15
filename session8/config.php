<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "session8Crud";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if(!$connection){
        die("Connection Error: " . mysqli_connect_error());
    }

    // echo "Successfully connected";

?>