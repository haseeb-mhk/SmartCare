<?php
include("../Connection.php");

if(isset($_GET['Pid'])){
    $pid = $_GET['Pid'];
    $query_products = mysqli_query($con, "SELECT * from products where product_id = '$pid'");
    $row_product = mysqli_fetch_assoc($query_products);
    


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
                    <li class="breadcrumb-item active">Manage Products</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

<!-- product details  -->


<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/product_images/<?php echo $row_product['image']  ?>" alt="Profile" class="">
              <h2><?php echo $row_product['name']  ?></h2>
              <h3><?php echo $row_product['formula']  ?></h3>
             
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"><?php echo $row_product['description']  ?></p>

              

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Formula</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_product['formula']   ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">quantity</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_product['quantity']  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Price</div>
                    <div class="col-lg-9 col-md-8">Rs. <?php echo $row_product['price']  ?></div>
                  </div>
                    <h5  class="card-title">Strengths</h5>
                  <div class="row">
                  <div class="col-lg-3 col-md-4 label"><b>#</b></div>
                  <div class="col-lg-9 col-md-8"><b>Strength</b></div>
                  <br>
                  <br>
                            <?php   
                            $k = 1;
                            $query_Strength = mysqli_query($con, "select * from strengths where product_id = '$pid'");
                            while($row_product_strength = mysqli_fetch_assoc($query_Strength)){

                            
                            
                            
                            ?>


                    <div class="col-lg-3 col-md-4 label"><?php echo $k;  ?></div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_product_strength['strength']  ?></div>
                    <?php  
                $k++;
                }  ?>
                  </div>


                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('includes/footer.php');  ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php include('includes/jslinks.php');  ?>


</body>

</html>