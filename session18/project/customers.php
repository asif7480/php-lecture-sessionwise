<?php
    require_once 'includes/header.php';

    $sql = "SELECT * FROM customers";

    $result = mysqli_query($conn, $sql);
    
?>
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Customers</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <h2 class="text-center">Customers Info</h2>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Address</th>
        <th>Action</th>
        </tr>
    </thead>

    <tbody>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $username = $row['username'];
            $email = $row['email'];
            $contact = $row['contact'];
            $address = $row['address'];
    ?>
        <tr>
            <th scope="row"><?php echo $id;?></th>
            <td><?php echo $name;?></td>
            <td><?php echo $username;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $contact;?></td>
            <td><?php echo $address;?></td>
            <td>
                <a class="btn btn-info" href="edit-customer.php?id=<?php echo $id;?>">Edit</a>
                <a class="btn btn-danger" href="delete-customer.php?id=<?php echo $id;?>">Delete</a>
            </td>
        </tr>
    <?php
        }
    }
    ?>
        
        <!-- <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td> -->
        </tr>
    </tbody>
    </table>

</main><!-- End #main -->

<?php
    require_once 'includes/footer.php';

?>