<?php
include("../Connection.php");

if(isset($_GET['Oid'])){
    $pid = $_GET['Oid'];
    $query_products = mysqli_query($con, "SELECT * from asanorder where order_id = '$pid'");
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
                    <li class="breadcrumb-item active">Manage Asan Orders</li>
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
              
             
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
             
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 

              

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_product['fname']  ?>&nbsp;<?php echo $row_product['lname']  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_product['email']  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row_product['contact']  ?></div>
                  </div>
                   
                  <div class="row">
                  <h5 class="card-title">Message</h5>
                  <p class="small fst-italic"><?php echo $row_product['message']  ?></p>
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



