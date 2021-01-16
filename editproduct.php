<?php
session_start();
ob_start();
include "nav.php" 
?>
 <html>
  <head>
    <link rel="stylesheet"href="signup.css">
  </head>
<body>
<div class="online py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  <h1 class="head">Edit</h1>
                  <form action="" method="post">
                    <div class="form">
                      <input type="text"class="form-control mb-4 border-0 py-4 "id="fname" name="name" placeholder="Your name.."><br> 
                      <input type="text"class="form-control mb-4 border-0 py-4 " id="mail" name="desc" placeholder="Description"><br>
                      <input type="text"class="form-control mb-4 border-0 py-4 " name="Password"placeholder="Price"><br>
                      <i class="fa fa-upload icon"></i>
                      <input type="file" class=" inputfile btn w-100 py-3" id="img" name="img" accept="image/*" ><br><br>
                      <input type="submit"class="inputfile btn w-100 py-3" value="update" name="submit">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";


// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);



if(isset($_POST["submit"])){
    
        if(empty($_POST['name']) || empty($_POST['desc']) || empty($_POST['price']) || empty($_POST['img']))
        {
            $emailError="Please fill in all the required fields";
        }
        else
        {
            
            $sql = "UPDATE products SET Name='".$_POST["name"]."' , Description='".$_POST["desc"]."', Price='".$_POST["price"]."', Image='".$_POST["img"]."'WHERE Id='".$_GET['X']."'";

            $result=mysqli_query($conn,$sql);
            if($result)	
            {
                header("Location:manageproducts.php");
            }
            else
            {
                echo $sql;
            }
        }
    }
    
?>

 <?php ob_end_flush(); ?>