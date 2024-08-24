<?php   
session_start();
include("includes/Connection.php");



if (isset($_POST['btnSignin'])) {

echo "yes working";


  $username = $_POST['c_uname'];
	$password = $_POST['c_pass'];


	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);


	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($con, $query);

	if (mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_assoc($result);


		$_SESSION['user_id'] = $user['user_id'];
		$_SESSION['username'] = $user['username'];
		$_SESSION['role'] = $user['user_type'];

		$user_id = $user['user_id'];
		$role = $user['user_type'];


      if($role == 'patient'){
            header('location:index.php');
      }
      else{
        header('location:../Adminsite/index.php');
      }




	} else {
		$authentication_msg = "Invalid username or password.";
    echo $authentication_msg;

  }
}








?>




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
                    <input type="submit" class="btn btn-primary btn-lg btn-block " value="Sign In" name="btnSignin">
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