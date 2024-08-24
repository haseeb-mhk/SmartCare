<?php 

include("includes/Connection.php");
if(isset($_GET['CID'])){
  $category_id = $_GET['CID'];
  $product_query =  mysqli_query($con,"Select * from products where category_id = '$category_id'");
}

else{
  $product_query =  mysqli_query($con,"Select * from products ");

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>SmartCare | Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include('includes/links.php');  ?>

</head>

<body>

  <div class="site-wrap">

<?php include('includes/header.php')  ?>
	  
	  
	  
<!--	  Section Main-->
	  
	 <div class="main-content">
	
		 
		 
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
 
    
        <div class="row">

          <?php  while ($row = mysqli_fetch_assoc($product_query)){  ?>


          <div class="col-sm-6 col-lg-4 text-center item mb-4">
          
            <a href="single_product.php?PID=<?php echo $row['product_id'];  ?>"> <img src="../Adminsite/assets/img/product_images/<?php echo $row['image']   ?>" alt="Image" style="max-width: 200px;max-height: 200px;min-width: 200px; min-height: 200px;"></a>
            <h3 class="text-dark"><a href="single_product.php?PID=<?php echo $row['product_id'];  ?>"><?php echo $row['name']  ?></a></h3>
            <p class="price"> <?php echo $row['price']  ?></p>
          </div>

          <?php }  ?>
  
      </div>
    </div>

    
    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

		 
		 
		 
	  </div>
<!--End section main-->
	  
	  
	  
	  
   <?php include('includes/footer.php');  ?>
  </div>
<?php include('includes/jslinks.php')  ?>

</body>

</html>