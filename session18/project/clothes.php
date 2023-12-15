<?php
    require_once 'includes/header.php';

    $sql = "SELECT * FROM clothes";
    $result = mysqli_query($conn, $sql);


?>
<main id="main" class="main">

<div class="pagetitle">
<h1>Profile</h1>
<nav>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item">Products</li>
    <li class="breadcrumb-item active">Clothes</li>
    </ol>
</nav>
</div><!-- End Page Title -->

<h2 class="text-center">Clothes</h2>

<a class="btn btn-primary mb-3" href="create-clothes.php">Add new cloth</a>

<table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Product Name</th>
    <th scope="col">Price</th>
    <th scope="col">Description</th>
    <th scope="col">Image</th>
    <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
<?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $price = $row['price'];
            $description = $row['description'];
            $image = $row['image'];
    ?>
    <tr>
        <th scope="row"><?php echo $id; ?></th>
        <td><?php echo $name; ?></td>
        <td><?php echo $price; ?></td>
        <td><?php echo $description; ?></td>
        <td>
            <img src="<?php echo 'uploads/'.$image; ?>" width="100" height="100">
        </td>

        <td>
            <a class="btn btn-info" href="update-clothes.php?id=<?php echo $id; ?>">Update</a>
            <a class="btn btn-danger" href="delete-clothes.php?id=<?php echo $id; ?>">Delete</a>
        </td>
    </tr>
<?php
        }
    }
?>

<!--     
    <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    <td>
        <img src="" alt="">
    </td>

    <td>
        <a class="btn btn-info" href="update-clothes.php">Update</a>
        <a class="btn btn-danger" href="delete-clothes.php">Delete</a>
    </td>
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
    <td>@twitter</td>
    </tr> -->
</tbody>
</table>

</main><!-- End #main -->

<?php
    require_once 'includes/footer.php';
?>