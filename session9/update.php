<?php
    require_once 'config.php';

    // getting and handling url data and then displaying it
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM users WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender'];
            }
        }
?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Document</title>
        </head>
        <body>
            <h2>Update your data</h2>
            <a href="view.php">Go to see all data</a>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                firstname: <br>
                <input type="text" name="firstname" value="<?php echo $firstname; ?>">
                <br>
                lastname: <br>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>">
                <br>
                email: <br>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <br>
                password: <br>
                <input type="text" name="password" value="<?php echo $password; ?>">
                <br>
                gender: <br>
                <input 
                    type="radio" 
                    name="gender"  
                    value="Male"
                    <?php if($gender == 'Male') {echo 'checked';} ?> 
                >Male
                <input 
                    type="radio" 
                    name="gender"  
                    value="Male"
                    <?php if($gender == 'Female'){echo 'checked';} ?> 
                >Female
                <br>
                <input type="submit" value="click here to update your data" name="update">
            </form>
        </body>
        </html>

<?php
    }

    // handling the updated form data  
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "UPDATE users SET
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                password = '$password',
                gender = '$gender'
                WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: view.php");
            // echo "Record Updated Successfully.";
        }else{
            echo "Error: ".mysqli_error($conn);
        }
    }

?>