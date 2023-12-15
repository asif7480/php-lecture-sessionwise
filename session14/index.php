<?php
  // Include database connection file
  require_once('config.php');
  if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name     = $_POST['name'];
    $role     = $_POST['role'];
    $query  = "INSERT INTO admins (name,username,password,role) VALUES ('$name','$username','$password','$role')";
    $result = mysqli_query($conn, $query);
    if ($result==true) {
      header("Location:login.php");
      die();
    }else{
      $errorMsg  = "You are not Registred..Please Try again";
    }   
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multi user role based application login in php mysqli</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

    <div class="card text-center" style="padding:20px;">
        <h3>Multi user role based application login in php mysqli</h3>
    </div>
    
    <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- for error -->
                        <?php if (isset($errorMsg)) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $errorMsg; ?>
                        </div>
                        <?php } ?>

                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
                            </div>
                            <div class="form-group">  
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter Username" required="">
                            </div>
                            <div class="form-group">  
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
                            </div>
                            <div class="form-group">  
                                <label for="role">Role:</label>
                                <select class="form-control" name="role" required="">
                                    <option value="">Select Role</option>
                                    <option value="super_admin">Super admin</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p>Already have account ?<a href="login.php"> Login</a></p>
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>