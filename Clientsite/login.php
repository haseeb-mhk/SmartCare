<!DOCTYPE html>
<html lang="en">

<head>
  <title>SmartCare | Sign In</title>
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
            <h2 class="h3 mb-5 text-black">Login To Account</h2>
          </div>
          <div class="col-md-12">
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_fname" class="text-black">User Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_uname" name="c_uname">
                  </div>
                  <div class="col-md-12">
                    <label for="c_lname" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_pass" name="c_pass">
                  </div>
                </div>
                
                
                <div class="form-group row">
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block " value="Sign In">
                  </div>
                </div>
                
                <p>Don't have an account? <button type="button" class="btn" style="color: blue;" onclick="newDoc1()"> Sign Up</button></p>
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
function newDoc1() {
  window.location.assign("register.php")
}
</script>
</body>

</html>