<?php   session_start();
include "nav.php"?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet"href="CSS/style.css">
    <title>E-commerce</title>
  </head>
  <body>
  <header>     
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Media/slide1.webp" class="d-block w-100">
                <div class="carousel-caption  d-md-block">
                    <h1>Avada Classic Shop</h1>
                    <p>SHOW YOUR PRODUCTS WITH STYLE</p>
                    <button>Get Avada now</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Media/slide2.jpg" class="d-block w-100">
                <div class="carousel-caption d-md-block">
                    <h1>Lookbook 2015</h1>
                    <p>SHOW YOUR PRODUCTS WITH STYLE</p>
                    <button>Men</button>
                    <button>Women</button>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Media/slide3.jpg" class="d-block w-100">
                <div class="carousel-caption d-md-block">
                    <h1>Brand New Arrivals</h1>
                    <p>NEW COLLECTION FROM NEW YORK</p>
                    <button>View All</button>
                    <button>Lookbook</button>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>

      </header>
        <div class="featured py-100">
          <div class="container">
                <div class="sec-title text-center mb-5">
                    <h1 class="position-relative font-weight-bolder mb-3 d-inline-block">Featured Products</h1>
                    <span class="d-block">Must have products from our top sellers</span>
                </div>
                <div class="filter text-center ">
                    <ul class="d-flex justify-content-between align-items-center">
                        <li class="active test">Men</li>
                        <li class="test">Women</li>
                        <li class="test">Children</li>
                    </ul>
                </div>
  <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT * from men";
    $result = mysqli_query($conn,$sql);	
	while($row=mysqli_fetch_array($result))	
	{
        $name=$row[0];
        $price=$row[2];
        $Description=$row[1];
        $image=$row[3];
  ?>
    <div class="products mt-5 men ">
        <div class="row">
            <div class="col-sm-6 col-md-3 ">
                <div class="image position-relative mb-2">
                    <img src=<?php echo ($image); ?> class="img-fluid">
                    <div class="inner d-flex justify-content-center align-items-center flex-column">
                        <span><button class="home-addtocart">Add to cart</button></span>
                        <span> Details</span>
                    </div>
                </div>
                <h5 class="font-weight-bolder product-home-name"><?php echo ($name);?></h5>
                <span class="d-block"><?php echo ($Description);?></span>
                <span class="d-block product-home-price"><?php echo ($price);?></span>
            </div>
        </div>
    </div>
                
<?php
    }?>
    <?php
    $sql="SELECT * from women";
    $result = mysqli_query($conn,$sql);	
	while($row=mysqli_fetch_array($result))	
	{
        $name=$row[0];
        $price=$row[2];
        $Description=$row[1];
        $image=$row[3];
  ?>
    <div class="products mt-5 women">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="image position-relative mb-2">
                    <img src=<?php echo ($image); ?> class="img-fluid">
                    <div class="inner d-flex justify-content-center align-items-center flex-column">
                        <span><button class="home-addtocart">Add to cart</button></span>
                        <span> Details</span>
                    </div>
                </div>
                <h5 class="font-weight-bolder product-home-name"><?php echo ($name);?></h5>
                <span class="d-block"><?php echo ($Description);?></span>
                <span class="d-block product-home-price"><?php echo ($price);?></span>
            </div>
        </div>
    </div>
                
<?php
    }?>
    <?php
    $sql="SELECT * from children";
    $result = mysqli_query($conn,$sql);	
	while($row=mysqli_fetch_array($result))	
	{
        $name=$row[0];
        $price=$row[2];
        $Description=$row[1];
        $image=$row[3];
  ?>
    <div class="products mt-5 children">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="image position-relative mb-2">
                    <img src=<?php echo ($image); ?> class="img-fluid">
                    <div class="inner d-flex justify-content-center align-items-center flex-column">
                        <span><button class="home-addtocart">Add to cart</button></span>
                        <span> Details</span>
                    </div>
                </div>
                <h5 class="font-weight-bolder product-home-name"><?php echo ($name);?></h5>
                <span class="d-block"><?php echo ($Description);?></span>
                <span class="d-block product-home-price"><?php echo ($price);?></span>
            </div>
        </div>
    </div>
                
<?php
    }?>
            </div> 
        </div>   


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="JS/progressbar.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="JS/home.js"></script>
  </body>
</html>