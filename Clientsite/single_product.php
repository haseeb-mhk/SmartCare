<?php  
include ("includes/Connection.php");

if(isset($_GET['PID'])){

$pid = $_GET['PID'];
$product = mysqli_query($con, "Select * from products where product_id  = '$pid'");

$product_row = mysqli_fetch_assoc($product);

}



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <title>SmartCare | Single Product</title>
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="shop.php">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $product_row['name'];   ?></strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="../Adminsite/assets/img/product_images/<?php echo $product_row['image'];    ?>" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $product_row['name']  ?> 200mg</h2>
            <p>
              <?php echo $product_row['description'];   ?>




            </p>
            

            <p><del>RS.95.00</del>  <strong class="text-primary h4">Rs.<?php echo $product_row['price']  ?></strong></p>

            
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder=""
                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
    
            </div>
            <p><a href="cart.php" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

            <div class="mt-5">
           
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th><b>  Strengths</b></th>
                    
                    </thead>
                    <tbody>
                    <?php   
                      $strenghts = mysqli_query($con, "Select * from strengths where product_id = '$pid' ");
                      $i = 1;
                      while($strength_row = mysqli_fetch_assoc($strenghts)){
                      
                      ?>
                      <tr>
                        <td><?php echo $i;   ?></td>
                    
                      
                      <td scope="row"><?php echo $strength_row['strength'];  ?> mg</td>
                     
                      </tr>
                      <?php 
                    $i++;
                    }?>
                    </tbody>
                  </table>
                </div>
               
            
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