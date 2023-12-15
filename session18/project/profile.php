<?php
  require_once 'includes/header.php';



?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <!-- <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>Kevin Anderson</h2>
              <h3>Web Designer</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div> -->
        <h2 class="text-center">Update Admin Profile</h2>
        <form action="" method="post">
          <div class="mb-3">
            Name: <br>
            <input class="form-control" type="text" name="name" value="<?php echo $profileName; ?>" id="">
            <br>
          </div>
          
          <div class="mb-3">
            Username: <br>
            <input class="form-control" type="text" name="username" value="<?php echo $profileUsername; ?>" id="">
            <br>
          </div>
          
          <div class="mb-3">
            Password: <br>
            <input class="form-control" type="text" name="password" value="<?php echo $profilePassword; ?>" id="">
            <br>
          </div>
          
          <input type="submit" class="btn btn-success" value="Click to update admin data">
        </form>
      </div>
    </section>

  </main><!-- End #main -->

 <?php
  require_once 'includes/footer.php';

?>