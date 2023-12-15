<?php
    // echo $name;
    // echo "<br>";

    // echo $password;

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        echo "<h2>$name</h2>";
        echo "<h2>$password</h2>";
    }

?>


<a href="session6bPart3.php">go to third file</a>