<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        file: <br>
        <input type="file" name="file" >
        <br>
        <input type="submit" value="cick here to submit form" name='submit'>

    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        echo "<pre>";
            print_r($_FILES);
        echo "</pre>";



        $filename = $_FILES['file']['name'];
        
        $filetype = $_FILES['file']['type'];
        
        $fileTmpName = $_FILES['file']['tmp_name'];
        
        $fileError = $_FILES['file']['error'];
        
        $fileSize = $_FILES['file']['size'];

        if($fileSize >= 3311 && $filetype == 'image/jpeg'){
            move_uploaded_file($fileTmpName, 'images/'. $filename); 
            echo "file uploaded";
        }else{
                echo "Upload image which has size greater than 783311";
            }
    }

?>

<img src="<?php echo 'images/' . $filename; ?>" width = '100' height = '100'alt="">


<?php
    if(move_uploaded_file($fileTmpName, 'images/'. $filename)){
        unlink('images/'. $filename);
        echo "file deleted";
    }

?>