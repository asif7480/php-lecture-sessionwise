<?php
    require_once 'config.php';

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo "Already Registered";
        }else{
            $sql = "INSERT INTO users
                    (username, password) 
                    VALUES ('$username' , '$password')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "Successfully Registered";
            }
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
    <h2>Registration Form</h2>
    <a href="login.php">Already have an account</a>
    <form action="" method="post">
        Username: <br>
        <input type="text" name="username" >
        <br>
        Password: <br>
        <input type="text" name="password" >
        <br>
        <input type="submit" value="register" name="register">
    </form>
</body>
</html>