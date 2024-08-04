<?php  
include("../Connection.php");


if(isset($_POST['btnSubmit'])){
    $name = $_POST['categoryname'];
    $description = $_POST['categorydescription'];



        $insert_category  = mysqli_query($con, "INSERT  into categories(name, description)  VALUES('$name','$description') ");
        if($insert_category){
            echo "data inserted successfully";
        }
            else{

                echo mysqli_errno($con);
            }
        // echo "yes working";
        // header('location:add_category.php?check=yes wroking');


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
            <div class="col-3"></div>
            <div class="col-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Category</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3"  method="post">
                            <div class="col-12">
                                <label for="categoryname" class="form-label"> Name</label>
                                <input type="text" class="form-control" id="inputNanme4" placeholder="Enter Category Name" name="categoryname">
                            </div>
                            <div class="col-12">
                                <label for="categoryname" class="form-label"> Description</label>
                                <input type="text" class="form-control" id="inputNanme4" placeholder="Enter Category Description" name="categorydescription">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="btnSubmit">Add</button>
                                <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>


            </div>

            <div class="col-3"></div>

        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('includes/footer.php');  ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php include('includes/jslinks.php');  ?>


</body>

</html>