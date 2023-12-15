<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <h2>Form</h2>
    <form action="session4b.php" method="get">
        fname: <input type="text" name="fname">
        <br>
        password <input type="text" name="password">
        <br>
        <input type="submit" value="click me" name="submit">
    </form>
</body>
</html>



<?php
    if(isset($_REQUEST['submit'])){
        echo $_REQUEST['fname'];
        echo "<br>";
        echo "Password is: ". $_REQUEST['password'];        
    }


?>