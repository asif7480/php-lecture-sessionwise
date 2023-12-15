<?php
  require_once 'includes/header.php';

  if(isset($_POST['update-clothes'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $fileName = $_FILES['image']['name'];
    $fileTempName = $_FILES['image']['tmp_name'];
    $UPLOADPATH = 'uploads/' . $fileName;

      move_uploaded_file($fileTempName, $UPLOADPATH);
      $sql = "UPDATE clothes 
              SET 
                name='$name', 
                price='$price', 
                description='$description', 
                image='$fileName' 
              WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);

      if($result){
        echo "<script>window.location.href = 'clothes.php'</script>";
      }
    
  }


  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM clothes WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
        $image = $row['image'];
?>
    <main id="main" class="main">

          <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item">Clothes</li>
                <li class="breadcrumb-item active">Update Clothes</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->

          <section class="section profile">
            <div class="row">

              <h2 class="text-center">Update product</h2>
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="mb-3">
                  Product name: <br>
                  <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
                  <br>
                </div>
                
                <div class="mb-3">
                  Price: <br>
                  <input class="form-control" type="text" name="price" value="<?php echo $price; ?>" id="">
                  <br>
                </div>
                
                <div class="mb-3">
                  Description <br>
                  <!-- <input class="form-control" type="text" name="password" id=""> -->
                  <textarea class="form-control" name="description" id="" cols="30" rows="5">
                      <?php echo $description; ?>
                  </textarea>
                  <br>
                </div>
                
                <div class="mb-3">
                  Image: <br>
                  <img src="<?php echo 'uploads/'.$image; ?>" height="100" width="100"alt="">
                  <input class="form-control" type="file" name="image" id="">
                  <br>
                </div>

                <input type="submit" class="btn btn-success" name="update-clothes" value="Click to update data">
              </form>
            </div>
          </section>

    </main><!-- End #main -->
<?php
      }
    }
  }

?>


 <?php
  require_once 'includes/footer.php';

?>