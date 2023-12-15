<?php
    require_once 'includes/header.php';

    if(isset($_POST['update-customer'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];

        $sql = "UPDATE customers SET name='$name', username='$username', email='$email', contact='$contact', address='$address' WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>window.location.href = 'customers.php'</script>";
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $username = $row['username'];
                $contact = $row['contact'];
                $email = $row['email'];
                $address = $row['address'];
?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item active">Update Customers</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <h2 class="text-center">Update Customer Record</h2>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                Name <br>
                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" id="">
                <br>
            </div>
            
            <div class="mb-3">
                Username: <br>
                <input class="form-control" type="text" name="username" value="<?php echo $username; ?>" id="">
                <br>
            </div>

            <div class="mb-3">
                Contact: <br>
                <input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>"id="">
                <br>
            </div>

            <div class="mb-3">
                Email: <br>
                <input class="form-control" type="text" name="email" value="<?php echo $email; ?>"id="">
                <br>
            </div>
            <div class="mb-3">
                Address: <br>
                <input class="form-control" type="text" name="address" value="<?php echo $address; ?>" id="">
                <br>
            </div>

            <input type="submit" class="btn btn-success" name="update-customer" value="Click to update data">
        </form>
    </main>
<?php
            }
        }
    }
    require_once 'includes/footer.php';
?>

    

<?php
    
?>


