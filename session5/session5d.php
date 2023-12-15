<?php 
    if(isset($_POST['submit'])){
        $fullName = $_POST['fullName'];

        setcookie("NameOfCookie", $fullName, time() + 3600);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Full Name: <input type="text" name="fullName">
        <br>
        <input type="submit" name="submit" value="click me">
    </form>
</body>
</html>

<?php
    if(isset($_COOKIE['NameOfCookie'])){
        $cookieValue = $_COOKIE['NameOfCookie'];
        echo "Cookie Value is: $cookieValue";
    }


?>
