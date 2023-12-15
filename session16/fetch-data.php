<?php
    require_once 'config.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $username = $row['username'];
            $fullname = $row['fullname'];
            $password = $row['password'];
?>
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $fullname;?></td>
            <td><?php echo $password;?></td>
            <td>
                <button id="deleteBtn" row-id='<?php echo $id;?>'>delete</button>
                <button id="updateBtn" row-id='<?php echo $id;?>'>update</button>
            </td>
        </tr>

<?php
        }
    }else{
        echo "no data available";
    }

?>