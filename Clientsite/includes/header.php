
  <div class="site-navbar py-2" style="background-color: #00FCFF">
  <div class="search-wrap">
    
  </div>

  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <div class="logo" style="width: 200px;">
        <div class="site-logo">
          <a href="index.html" class="js-logo-clone"><img src="images/mainlogo.png" alt="image not found" width="100%" height="auto"></a>
        </div>
      </div>
      
      <div class="flex-grow-1 mx-3" >
        <div class="input-group" >
          <div class="form-outline" data-mdb-input-init>
            <input type="search" id="form1" class="form-control" style="width: 100%" placeholder="Search keyword" />
 
          </div>
        </div>
      </div>
      
      <div class="icons d-flex align-items-center">
        <a href="cart.php" class="icons-btn d-inline-block bag">
          <span class="icon-shopping-bag"></span>
          <span class="number" style="background-color: #FF8F00">2</span>
        </a>
        <a href="login.php" class="icons-btn d-inline-block "><span class="icon-user"></span></a>
        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
      </div>
    </div>
  </div>
</div>

    <div class="site-navbar py-2">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          
          <div class="main-nav d-none d-lg-block " style="margin: auto"  >
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class=""><a href="index.php">Home</a></li>
                <li><a href="shop.php">Store</a></li>
                <li class="has-children">
                  <a href="shop.php">Categories</a>
                  <ul class="dropdown">

                    <?php 
                    include("Connection.php");
                    $categories = mysqli_query($con,"select * from categories");
                    while($row_category = mysqli_fetch_assoc($categories)){
                    
                    ?>

                    <li><a href="shop.php?CID=<?php echo $row_category['category_id'];  ?>"><?php echo $row_category['name'];  ?></a></li>
                  <?php   
                    }
                  
                  ?>
                    
                  </ul>
                </li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="asanorder.php">Asan Order</a></li>
              </ul>
            </nav>
          </div>
      
        </div>
      </div>
    </div>