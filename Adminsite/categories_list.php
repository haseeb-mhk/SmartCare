<?php  
include("../Connection.php");


$query_category = mysqli_query($con,"Select * from categories");

if(isset($_GET['CID'])){

  $Did = $_GET['CID'];
$delete_product = mysqli_query($con, "DELETE FROM `categories` WHERE `categories`.`category_id`= '$Did'");
if($delete_product){
  header('location:categories_list.php');
}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include('includes/links.php');  ?>


</head>

<body>

    <?php include('includes/header.php'); ?>
    <!-- ======= Sidebar ======= -->
    <?php include('includes/sidepanel.php')   ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Manage Categories</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="row">
        <div class="col-2"></div>

            <div class="col-8">

            <div class="card">
            <div class="card-body">
              <h5 class="card-title">Categories List</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col"> Delete</th>
                  </tr>
                </thead>
                <tbody>

                <?php $i = 1;
                
                while($row = mysqli_fetch_assoc($query_category)){
                
                ?>
                  <tr>
                    <th scope="row"><?php echo $i;   ?></th>
                    <td><?php echo $row['name'];  ?></td>
                    <td><?php echo $row['description'];  ?></td>
                    <td>
                            <a href="add_category.php?CID=<?php echo $row['category_id'];  ?>" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                            <a href="categories_list.php?CID=<?php echo $row['category_id'];  ?>" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
               <?php $i++; } ?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
</div>


            </div>
            <div class="col-2"></div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('includes/footer.php');  ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php include('includes/jslinks.php');  ?>


</body>

</html>