<?php
    session_start();
    echo "Name is:" .$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">      
        City:
        <input type="text" name="city" >
        <br>
        <input type="submit" value="click to submit city" name="citySubmit">
    </form>    
</body>
</html>


<?php
    if(isset($_POST['citySubmit'])){
        $_SESSION['city'] = $_POST['city'];

        echo $_SESSION['city'];
    }

?>


<a href="session6dPart3.php">Go to third page</a>