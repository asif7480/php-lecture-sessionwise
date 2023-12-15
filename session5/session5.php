<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Full Name: <input type="text" name="fullName">
        <br>
        password: <input type="text" name="password">
        <br>
        <input type="submit" value="click me">
    </form>
    

</body>
</html>



<?php
    // post
    // if(isset($_POST['submit'])){
    //     $fullName = $_POST['fullName'];
    //     $password = $_POST['password'];
    
    //     echo "Fullname is: $fullName and password is $password";
        
    // }

    // get
    // if(isset($_GET['submit'])){
    //     $fullName = $_GET['fullName'];
    //     $password = $_GET['password'];
    
    //     echo "Fullname is: $fullName and password is $password";
    // }


    // request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullName = $_REQUEST['fullName'];
        $password = $_REQUEST['password'];
    
        echo "Fullname is: $fullName and password is $password";
    }

?>