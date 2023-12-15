<?php
    require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username: <input type="text" name="username" id="">
        <br>
        email: <input type="text" name="email" id="">
        <br>
        password: <input type="text" name="password" id="">
        <br>
        <input type="submit" name="submit" value="Click on this button to store data in database">
    </form>

    <a href="view.php">Click here to see all inserted data</a>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users(username, email, password) 
                VALUES 
                ('$username', '$email', '$password')";

        $result = mysqli_query($connection, $sql);
    
        if($result){
            echo "data inserted succesfully";
        }else{
            echo "Error in submitting data". mysqli_error($connection);
        }
    }


?>