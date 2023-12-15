<?php
    require_once 'config.php';
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM customers WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>window.location.href = 'customers.php'</script>";
        }
    }


?>