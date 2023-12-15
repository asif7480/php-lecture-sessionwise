<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name:
        <input type="text" name="username" >
        <br>
        <input type="submit" value="click to submit name" name="nameSubmit">
    </form>    
</body>
</html>


<?php
    if(isset($_POST['nameSubmit'])){
        $_SESSION['username'] = $_POST['username'];

        echo $_SESSION['username'];
    }

?>


<a href="session6dPart2.php">Go to second page</a>