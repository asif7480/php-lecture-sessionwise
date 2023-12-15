<?php
    require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Insert data in the database</h2>
    <a href="view.php">Click to see all data</a>
    <form action="" method="post">
        firstname: <input type="text" name="firstname" id="">
        <br>
        lastname: <input type="text" name="lastname" id="">
        <br>
        email: <input type="text" name="email" id="">
        <br>
        password: <input type="text" name="password" id="">
        <br>
        Gender: 
        <input type="radio" name="gender" value="Male" id="">Male
        <input type="radio" name="gender" value="Female" id="">Female
        <br>
        <input type="submit" name="submit" value="Click here to insert data in database">
    </form>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO users 
                (firstname, lastname, email, password, gender) 
                VALUES
                ('$firstname', '$lastname', '$email', '$password', '$gender')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: view.php");
            // echo "Data inserted successfully";
        }else{
            echo "Error: " . mysqli_error($conn);
        }
    }
?>