<?php
include("../Connection.php");

if(isset($_POST['btnAdd'])){

    // Retrieve form data
    $name = $_POST['p_name'];
    $formula = $_POST['p_formula'];
    $quantity = $_POST['p_quantity'];
    $price = $_POST['p_price'];
    $description = $_POST['product_description'];
    // // echo $description;
    // header("location:add_products.php?Desc=".$description);
    $strengths = $_POST['p_strengths']; // This will be an array of strengths
    $category_id = $_POST['p_category'];

    // Handle file upload
    $image = $_FILES['p_image']['name'];
    $target_dir = "assets/img/product_images/";
    $target_file = $target_dir . basename($image);
    
    if (move_uploaded_file($_FILES['p_image']['tmp_name'], $target_file)) {
        // Insert product into Products table
        $insert_product = mysqli_query($con, "INSERT INTO Products (name, formula, category_id, description, price, quantity, image) VALUES ('$name', '$formula', '$category_id', '$description', '$price', '$quantity', '$image')");

        if($insert_product){
            $product_id = mysqli_insert_id($con);

            // Insert strengths into Strengths table
            foreach ($strengths as $strength) {
                $insert_strength = mysqli_query($con, "INSERT INTO Strengths (product_id, strength) VALUES ('$product_id', '$strength')");
                if (!$insert_strength) {
                    echo "Error inserting strength: " . mysqli_error($con);
                }
            }
            
            echo "Product added successfully!";
        } else {
            echo "Error inserting product: " . mysqli_error($con);
        }
    } else {
        echo "Error uploading file.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include('includes/links.php'); ?>

</head>

<body>

  <?php include('includes/header.php'); ?>
  <!-- ======= Sidebar ======= -->
  <?php include('includes/sidepanel.php'); ?>
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
      <div class="col-1"></div>

      <div class="col-10">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Product</h5>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="post" enctype="multipart/form-data">

              <div class="col-md-6">
                <label for="product_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="product_name" name="p_name" placeholder="Enter product Name" >
              </div>
              <div class="col-md-6">
                <label for="product_formula" class="form-label">Formula</label>
                <input type="text" class="form-control" id="product_formula" placeholder="Enter Product Formula" name="p_formula" >
              </div>
              <div class="col-md-6">
                <label for="product_quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="product_quantity" name="p_quantity" placeholder="Enter product quantity" >
              </div>
              <div class="col-md-6">
                <label for="product_price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" id="product_price" name="p_price" placeholder="Enter Product Price" >
              </div>
              <div class="col-md-6">
                <label for="product_image" class="form-label">Image</label>
                <input type="file" class="form-control-file" id="product_image" name="p_image" >
              </div>
              <div class="col-md-6">
                <label for="product_category" class="form-label">Category</label>
                <select class="form-control" name="p_category" id="product_category">
                  <option value="">Select Category</option>
                  <?php
                  $select_categories = mysqli_query($con, "SELECT * FROM categories");

                  while ($row_categories = mysqli_fetch_array($select_categories)) {
                  ?>
                    <option value="<?php echo $row_categories['category_id']; ?>"><?php echo $row_categories['name']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-12">
                <label for="product_strengths" class="form-label">Strengths</label>
                <div id="strengths_container">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="p_strengths[]" placeholder="Enter Product Strength">
                    <button type="button" class="btn btn-success" onclick="addStrengthField()">Add</button>
                  </div>
                </div>
              </div>
              <div class="col-12">
              <label for="exampleFormControlTextarea1">description</label>
                                            <textarea class="form-control" id="product_description" rows="3" name="product_description" placeholder="Enter product Description"></textarea>
                                       </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="btnAdd">Submit</button>
                <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
              </div>
            </form><!-- End Multi Columns Form -->

          </div>
        </div>

      </div>
      <div class="col-1"></div>

    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('includes/footer.php'); ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include('includes/jslinks.php'); ?>

  <script>
    function addStrengthField() {
      const container = document.getElementById('strengths_container');
      const inputGroup = document.createElement('div');
      inputGroup.className = 'input-group mb-3';
      inputGroup.innerHTML = `
        <input type="text" class="form-control" name="p_strengths[]" placeholder="Enter Product Strength">
        <button type="button" class="btn btn-danger" onclick="removeStrengthField(this)">Remove</button>
      `;
      container.appendChild(inputGroup);
    }

    function removeStrengthField(button) {
      button.parentElement.remove();
    }
  </script>

</body>

</html>
