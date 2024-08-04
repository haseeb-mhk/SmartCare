<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
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

<div class="row">

<div class="col-12">

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Product</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>


</div>


</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include('includes/footer.php');  ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php include('includes/jslinks.php');  ?>


</body>

</html>