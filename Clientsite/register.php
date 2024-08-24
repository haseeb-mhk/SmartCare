<?php
include("includes/Connection.php");

if(isset($_POST['btnregister'])){
  
$user_name = $_POST['c_uname'];
$user_email = $_POST['c_email'];
$user_password = $_POST['c_pass'];



$insert_user = mysqli_query($con,"INSERT INTO `users`( `username`, `email`, `password`, `user_type`)
 VALUES ('$user_name','$user_email','$user_password','patient')" );
 if($insert_user){

  // echo "Data inserted successfully";
  header('location:login.php');

 }
 else{
  echo mysqli_errno($con);
 }



}





?>









<!DOCTYPE html>
<html lang="en">

<head>
  <title>SmartCare | Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include('includes/links.php');  ?>

</head>

<body>

  <div class="site-wrap">


	  
	  
	  
<!--	  Section Main-->
	  
	 <div class="main-content">
		 
		 
		
    

    <div class="site-section">
      <div class="container">
       
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Register your Account</h2>
          </div>
          <div class="col-md-12">
    
            <form method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">User Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_uname" name="c_uname">
                  </div>
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                  <div class="col-md-12">
                    <label for="c_lname" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_pass" name="c_pass">
                  </div>
                </div>
                
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block " value="Sign up" name="btnregister">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-md-12">
                  <label for="c_lname" class="text-black">Do you have an account? <span class="text-danger">*</span></label>
                  <a href="login.php" class="btn btn-primary btn-lg btn-block ">Sign in</a>
                    
                  </div>
                </div>
          </div>
               
              </div>
            </form>
            
            
          
          
        </div>
      </div>
    </div>





 
		 
	  
	  
	  </div>
<!--End section main-->
	  
	  
	  
	  
   
  </div>
<?php include('includes/jslinks.php')  ?>

</body>

</html>