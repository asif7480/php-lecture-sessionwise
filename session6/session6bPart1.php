<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="session6bPart2.php" method="post">
        Name: <input type="text" name="name">
        <br>
        Password: <input type="text" name="password">
        <br>
        <input type="submit" value="click to see your data" name="submit">
    </form>   
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];

        echo "<h2>$name</h2>";
        echo "<h2>$password</h2>";
    }


?>


<a href="session6bPart2.php">go to second file</a>