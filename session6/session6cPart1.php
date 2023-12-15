<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
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
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
        
        echo $_SESSION['name'];
        echo "<br>";
        echo $_SESSION['password'];
    }
    
    
    ?>

<a href="session6cPart2.php">go to second file</a>
