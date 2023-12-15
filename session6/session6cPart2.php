<?php
    session_start();

    echo "Name in previous page was:" . $_SESSION['name'];
    echo "<br>";
    echo "Password in previous page was:" . $_SESSION['password'];

?>

