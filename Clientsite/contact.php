<?php  
include("../Connection.php");


if(isset($_POST['btnSubmit'])){
    $fname = $_POST['c_fname'];
    $lname = $_POST['c_lname']; 
    $email = $_POST['c_email'];
    $subject = $_POST['c_subject'];
    $message = $_POST['c_message'];

    
        $insert_contact = mysqli_query($con, "INSERT INTO contact (fname, lname, email, subject, message) VALUES ('$fname', '$lname', '$email', '$subject', '$message')");
        if($insert_contact){
          echo '<script>alert("Message Sended Successfully!")</script>'; 
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
  <title>SmartCare | Contact us</title>
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
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Contact</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-12">
    
            <form action="#" method="post" enctype="multipart/form-data">
    
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
                    <label for="c_subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject" required>
                  </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block " value="Send Message" name="btnSubmit">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Islamabad</span>
              <p class="mb-0">Plot No. 12, Sector G-10/4, Islamabad, Pakistan</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Karachi</span>
              <p class="mb-0">Shop No. 5, Block 7, Clifton, Karachi, Pakistan</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Swat</span>
              <p class="mb-0">Shop No. 23, Main Bazaar, Mingora, Swat, Pakistan</p>
            </div>
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