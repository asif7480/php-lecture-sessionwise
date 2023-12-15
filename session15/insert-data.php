<?php
    require_once 'config.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];

    $sql = "INSERT INTO info(name, email, number, address)
            VALUES ('$name', '$email', '$number', '$address')";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Data inserted in the database";
    }else{
        echo mysqli_error($conn);
    }


?>