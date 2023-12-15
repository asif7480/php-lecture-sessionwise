<?php
    session_start();


    echo $_POST['nameWithPost'];


    echo "<br>";


    echo $_SESSION['nameWithSession'];

    session_destroy();


?>

<a href="session6aPart3.php">Go to another page</a>