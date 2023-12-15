<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "Login successfully";
            $_SESSION['username'] = $username;
            header("location: home.php");
        }else{
            echo "No record found. Register yourself";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login Form</h2>
    <a href="registration.php">CLick here to sign up</a>
    <form action="" method="post">
        Username: <br>
        <input type="text" name="username" >
        <br>
        Password: <br>
        <input type="text" name="password" >
        <br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>