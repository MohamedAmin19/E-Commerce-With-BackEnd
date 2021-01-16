<html>
  <?php ob_start();?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet"href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <div class="container">
          <div class="row upper-nav justify-content-center align-items-center">
            <div class="col-lg-6">
              <div class="icons text-muted text-center text-lg-left">
                <i class="fa fa-facebook-f mr-2"></i>
                <i class="fa fa-twitter mr-2"></i>
                <i class="fa fa-instagram mr-2"></i>
                <i class="fa fa-youtube mr-2"></i>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="upper-links text-muted text-right">
             
              
             <?php if(!empty($_SESSION['Email'])) { ?>
              
          <span class="d-inline-block p-3"><?php echo "Welcome ".$_SESSION['Name']; ?></span>
                <span class="d-inline-block p-3 border-right border-left"><a class="account"href="editprofile.php">Edit Profile</a></span>
                
                <span class="d-inline-block p-3 border-right border-left"><a class="account"href="signout.php">Sign Out</a></span>
                <span class="d-inline-block py-3 bg-light text-uppercase"><i class="fa fa-shopping-cart"></i>
                  <a href="cart.php">Cart</a></span>
		<?php		} else { ?>
      <span class="d-inline-block p-3"><a class="account"href="signup.php">Sign up</a></span>
                <span class="d-inline-block p-3 border-right border-left"><a class="account"href="login.php">Log in</a></span>
                
                <span class="d-inline-block py-3 bg-light text-uppercase"><i class="fa fa-shopping-cart"></i>
                  <a href="cart.php">Cart</a></span>
                  
                  <?php } ?>
              
               
              </div>
            </div>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-0">
            <a class="navbar-brand" href="#">
              <img src="Media/logo.webp" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item p-3">
                  <a class="nav-link active" href="homeee.php">Home</a>
                </li>
                <?php if(!empty($_SESSION['Email'])&&strpos($_SESSION['Email'],'admin') > -1 ) { ?>
<li class="nav-item p-3">
<a class="nav-link" href="ViewUsers.php">View Users </a>
</li>
<li class="nav-item p-3">
<a class="nav-link " href="admins.php">Administrators</a>

</li>
<li class="nav-item p-3">
<a class="nav-link " href="manageproducts.php">Manage Products</a>
</li>
<li class="nav-item p-3">
<a class="nav-link " href="complaints.php">Complaints</a>
</li>
</a>


               <?php }
               else { 
               if(!empty($_SESSION['Email'])){
                 ?>
               <li class="nav-item p-3">
              <a class="nav-link"href="contactus.php">Contact Us</a>
              </li>
              <?php }?>
                
                <li class="nav-item p-3">
                  <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item p-3">
                  <a class="nav-link " href="products.php">Products</a>
                </li>
                
                <li class="nav-item dropdown p-3 position-static">
                  <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                  </a>
                  <?php }?>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <div class="container">
    
                      <div class="row">
                        <div class="col-3">
                          <a href="men.html" class="dropdown-item my-3">
                            <h6 class="mb-3">Men</h6>
                            <img src="Media/promotion_men_img.jpg" class="img-fluid" alt="">
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#" class="dropdown-item my-3">
                            <h6 class="mb-3">Women</h6>
                            <img src="Media/promotion_women_img.jpg" class="img-fluid" alt="">
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#" class="dropdown-item my-3">
                            <h6 class="mb-3">Accessories</h6>
                            <img src="Media/promotion_accessories_img.jpg" class="img-fluid" alt="">
                          </a>
                        </div>
                        <div class="col-3">
                          <a href="#" class="dropdown-item my-3">
                            <h6 class="mb-3">Promotion</h6>
                            <img src="Media/sidebar_promotion_img.jpg" class="img-fluid" alt="">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                
                <li class="nav-item p-3">
                  <a class=" nav-link btn-primary text-light rounded-pill" href="#">shop now!</a>
                </li>
                <li class="nav-item p-3">
                  <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
</div>
<?php ob_end_flush();?>


</html>