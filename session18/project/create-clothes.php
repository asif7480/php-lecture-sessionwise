<?php
  require_once 'includes/header.php';

  if(isset($_POST['add_clothes'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $fileName = $_FILES['image']['name'];
    $fileTempName = $_FILES['image']['tmp_name'];
    $UPLOADPATH = 'uploads/' . $fileName;

    if(move_uploaded_file($fileTempName, $UPLOADPATH)){
      $sql = "INSERT INTO clothes(name, price, description, image) 
              VALUES('$name', '$price', '$description', '$fileName')";

      $result = mysqli_query($conn, $sql);
    }
  }

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item">Products</li>
          <li class="breadcrumb-item active">Clothes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
    <a class="btn btn-primary" href="clothes.php">Click to see all product</a>
    <div class="row">


        <h2 class="text-center">Add new product</h2>

        <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            Product name: <br>
            <input class="form-control" type="text" name="name" id="">
            <br>
          </div>
          
          <div class="mb-3">
            Price: <br>
            <input class="form-control" type="text" name="price" id="">
            <br>
          </div>
          
          <div class="mb-3">
            Description <br>
            <!-- <input class="form-control" type="text" name="password" id=""> -->
            <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
            <br>
          </div>
          
          <div class="mb-3">
            Image: <br>
            <input class="form-control" type="file" name="image" id="">
            <br>
          </div>

          <input type="submit" class="btn btn-success" name="add_clothes" value="Click to add data">
        </form>
      </div>
    </section>

  </main><!-- End #main -->

 <?php
  require_once 'includes/footer.php';

?>