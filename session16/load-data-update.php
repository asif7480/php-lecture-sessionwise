<?php
    require_once 'config.php';

    $id = $_POST['id'];
    $sql = "SELECT * FROM users WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $username = $row['username'];
            $fullname = $row['fullname'];
            $password = $row['password'];
?>
        <h2>Update form</h2>
        <input type="hidden" id="updatedId" value="<?php echo $id;?>">
        <br>
        Username: <br>
        <input type="text" id="updatedUsername" value="<?php echo $username;?>">
        <br>
        Fullname: <br>
        <input type="text" id="updatedFullname" value="<?php echo $fullname;?>">
        <br>
        Password: <br>
        <input type="text" id="updatedPassword" value="<?php echo $password;?>">
        <br>
        <button id="updateData">Click to update data</button>

<?php
        }
    }



?>