<!DOCTYPE html>
<html lang="en">

<head>
  <title>SmartCare | Sign Up </title>
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
    
            <form  method="post">
    
              <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last NAme <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname" placeholder="">
                  </div>                
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_tel" class="text-black">Contect No <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="c_tel" name="c_tel">
                  </div>
                  <div class="col-md-6">
                    <label for="c_add" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_add" name="c_add" placeholder="">
                  </div>
                 
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_uname" class="text-black">User Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_uname" name="c_uname">
                  </div>
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                  <div class="col-md-12">
                    <label for="c_pass" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_pass" name="c_pass">
                  </div>
                </div>

                
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block " value="Sign up">
                  </div>
                </div>
                
                <p>Do you have an account? <button type="button" class="btn" style="color: blue;" onclick="newDoc()"> Sign In</button></p>
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
<script>
function newDoc() {
  window.location.assign("login.php")
}
</script>

</body>

</html>