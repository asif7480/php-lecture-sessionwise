<?php
    $servername = "localhost";
    $user = 'root';
    $password = "";
    $dbname = "connection";


    $conn = mysqli_connect($servername, $user, $password, $dbname);
    
    if(!$conn){
        die("connect error: " . mysqli_connect_error());
    }

    echo "Successfully connected.";

?>