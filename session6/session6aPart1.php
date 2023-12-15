<?php
    session_start();

    $_POST['nameWithPost'] = "abc";
    echo "This value is printed using post variable: " . $_POST['nameWithPost'];

    echo "<br>";

    $_SESSION['nameWithSession'] = "value stored in session variable";
    echo $_SESSION['nameWithSession'];
?>



<a href="session6aPart2.php">Go to another page</a>