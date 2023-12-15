<?php
    require_once 'config.php';

    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($conn, $sql);



?>