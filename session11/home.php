<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }
?>

<h2>Welcome <?php echo $_SESSION['username'] ?></h2>
<a href="logout.php">logout</a>