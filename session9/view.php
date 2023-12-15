<?php
    require_once 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View all data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
    <h2 class="text-center">All data available in the database</h2>
    <a class="btn btn-primary" href="insert.php">Add another data</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td>
                    <a
                    class="btn btn-info"
                    href="update.php?id=<?php echo $row['id']; ?>" >
                        Update
                    </a>
                    <a
                    class="btn btn-danger" 
                    href="delete.php?id=<?php echo $row['id'];  ?>" >
                        Delete
                    </a>
                </td>
            </tr>
            
            <?php
                }
                }else{
                    echo "No record found";
                }
            ?>
            
        </tbody>
    </table>
    </div>

</body>
</html>