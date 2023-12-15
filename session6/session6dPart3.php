<?php
    session_start();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">      
        Job title:
        <input type="text" name="jobTitle" >
        <br>
        <input type="submit" value="click to submit city" name="jobSubmit">
    </form>    
</body>
</html>


<?php
    if(isset($_POST['jobSubmit'])){
        $_SESSION['jobTitle'] = $_POST['jobTitle'];

        echo $_SESSION['jobTitle'];
    }

?>


<a href="session6dPart4.php">Go to Fourth page</a>