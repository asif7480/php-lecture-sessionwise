<?php
    require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        username: <br>
        <input type="text" name="username" id="">
        <br>
        file: <br>
        <input type="file" name="fileInfo" id="">
        <br>
        <input type="submit" value="click here to upload file" name="submit">
    </form>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];

        print_r($_FILES);
        $filename = $_FILES['fileInfo']['name'];
        $fileTmpName = $_FILES['fileInfo']['tmp_name'];
        $UPLOAD_PATH = 'uploads/'. $filename;

        $sql = "INSERT INTO info (username, filename) VALUES ('$username', '$filename')";
        $result = mysqli_query($conn, $sql);
        if($result){
            move_uploaded_file($fileTmpName, $UPLOAD_PATH);
            echo "file has been uploaded in the server and info has been saved in the db";
        }



    }


?>