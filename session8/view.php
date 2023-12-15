<?php
    require_once 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>All data from database is shown here</h2>
    <a href="insert.php">Click here to add data</a>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            // print_r($row);
            
    ?>
        <p>Id is: <?php echo $row['id']; ?> </p>
        <p>username is: <?php echo $row['username']; ?> </p>
        <p>Email is: <?php echo $row['email']; ?> </p>
        <p>Password is: <?php echo $row['password']; ?> </p>
        <p>Date is: <?php echo $row['date']; ?> </p>
        <hr>
        <?php
    }}else{
        echo "No record found";
    }
    ?>
</body>
</html>