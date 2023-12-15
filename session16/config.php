<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exampleAjax";

    $conn= mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Error: ". mysqli_connect_error());
    }

    echo "Connected";




?>