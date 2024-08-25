<?php

include("includes/Connection.php");



$popular_products = mysqli_query($con, "SELECT * FROM products WHERE quantity >= 15 LIMIT 6");




?>





<!DOCTYPE html>
<html lang="en">

<head>
  <title>SmartCare | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include('includes/links.php');  ?>

</head>

<body>

  <div class="site-wrap">


<?php include('includes/header.php')  ?>
	  
	  
	  
	  
	  
<!--	  Section Main-->
	  
    <div class="main-content" >
	  
	    
		 
	 

    <div class="site-blocks-cover" style="background-image: url('images/hero.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center"  style="height: 300px;">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome To SMART CARE</h1>
              <p>
                <a href="shop.php" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--
    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="uploadprescription.php" class="h-100">
                <h5 style="color: black">Upload Prescription</h5>
                <p>
                  Upload your prescription and we will create your order
                </p>
			  <button class="btn btn-success"> Upload </button>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Season <br> Sale 50% Off</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Buy <br> A Gift Card</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
-->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">
          <?php    
          
          while($row_popular = mysqli_fetch_assoc($popular_products)){
          
          
          ?>


          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            
          <a href="single_product.php?PID=<?php echo $row_popular['product_id'];  ?>"> <img src="../Adminsite/assets/img/product_images/<?php echo $row_popular['image']   ?>" alt="Image" style="max-width: 200px;max-height: 200px;min-width: 200px; min-height: 200px;"></a>
          <h3 class="text-dark"><a href="shop-single.html"><?php  echo $row_popular['name'];  ?></a></h3>
            <p class="price">Rs. <?php  echo $row_popular['price'];  ?></p>
          </div>
        <?php }  ?>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.php" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              
<?php   


$new_products = mysqli_query($con, "SELECT * FROM products WHERE quantity < 10 LIMIT 4");

while ($row_new_products = mysqli_fetch_assoc($new_products)){

?>



              <div class="text-center item mb-4">
              <a href="single_product.php?PID=<?php echo $row_new_products['product_id'];  ?>"> <img src="../Adminsite/assets/img/product_images/<?php echo $row_new_products['image']   ?>" alt="Image" style="max-width: 350px;max-height: 270px;min-width: 350px; min-height: 270px;"></a>
              <h3 class="text-dark"><a href="shop-single.html"><?php  echo $row_new_products['name'];  ?></a></h3>
                <p class="price">Rs. <?php  echo $row_new_products['price'];  ?></p>
              </div>

         <?php  }  ?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      
		<div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="images/girl1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>“I have been a loyal customer of Smart Care for over five years. The staff is always friendly and knowledgeable, and they go above and beyond to ensure I get the medications I need. Their service is top-notch!”</p>
                </blockquote>

                <p>&mdash; Aisha Khan</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/boy1.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>“The convenience and efficiency of Smart Care are unmatched. I can easily refill my prescriptions online, and they offer quick delivery services. Highly recommended!”
                  </p>
                </blockquote>
              
                <p>&mdash; Ahmed Latif</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/girl2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>“I appreciate the personalized care I receive at Smart Care. The pharmacists take the time to explain my medications and answer all my questions. It’s a relief to have such a reliable pharmacy.”
                  </p>
                </blockquote>
              
                <p>&mdash; Fatima Shah</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="images/boy2.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>“Switching to Smart Care was the best decision I made for my health. Their prices are competitive, and they offer a wide range of health products. The customer service is exceptional!”
                  </p>
                </blockquote>
              
                <p>&mdash; Omar Rafi</p>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p> Your Health, Our Priority: Explore Our Range of Quality Pharma Products.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p> Trusted by Experts: Quality Pharma Products You Can Rely On.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
 
    </div>
<!--End section main-->
	  
	  
	  <br>
	  
   <?php include('includes/footer.php');  ?>
  </div>
<?php include('includes/jslinks.php')  ?>

</body>

</html>