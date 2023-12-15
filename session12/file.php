<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" >
        <br>
        <input type="submit" value="click to upload file" name="upload">
    </form>
</body>
</html>


<?php
    if(isset($_POST['upload'])){
        echo "<pre>";
            print_r($_FILES);
        echo "</pre>";

        $filename = $_FILES['file']['name'];
        $filetype = $_FILES['file']['type'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileError = $_FILES['file']['error'];
        $fileSize = $_FILES['file']['size'];
        
        echo $filename;
        echo "<br>";
        echo $filetype;
        echo "<br>";  
        echo $fileTmpName;
        echo "<br>";
        echo $fileError;
        echo "<br>";
        echo $fileSize;

        if(move_uploaded_file($fileTmpName, 'uploads/' . $filename)){
            echo "Successfully Uploaded";
        }
    }

?>