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
	  
	    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Asan Order</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class=" text-black">Asan Order</h1>
            <p>Ordering your medications has never been easier with Smart Care Pharmacy’s Asan Order service. Simply upload your prescription, enter your details, and let us handle the rest. Our team will process your order promptly and ensure your medications are delivered to your doorstep with care and efficiency. Your health and convenience are our top priorities!</p>
          </div>


        



          <div class="col-md-12">
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname" required>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_tel" class="text-black">Contact No </label>
                    <input type="tel" class="form-control" id="c_tel" name="c_tel" required>
                  </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_file" class="text-black">Upload Prescription File </label>
                    <input type="file" class="form-control" id="c_file" name="c_file" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block " value="Send Message">
                  </div>
                </div>
              </div>
            </form>
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