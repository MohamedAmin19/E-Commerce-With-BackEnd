<?php
session_start();
ob_start();
include "nav.php" 

?>
<head>
<style>
h5{
  color:red;
  font-size:30px;
}
.details{
  font-size:20px;
}
</style>
</head>
  <div class="featured py-100">
     <div class="container">
            <div class="row">
<?php
  
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "web";
              
       // Create connection
       $conn = mysqli_connect($servername,$username,$password,$dbname);
       $sql="SELECT * from products";
       $result = mysqli_query($conn,$sql);	
  
	while($row=mysqli_fetch_array($result))	
	{
              $ID=$row[0];
              $Name=$row[1];
              $Description=$row[2];
              $Price=$row[3];
              $Image=$row[4];
?>

       <div class=col-md-3>  
              <div class="image position-relative mb-2">
                     <img src=<?php echo ($Image); ?> class="img-fluid">
                     <div class="inner d-flex justify-content-center align-items-center flex-column">
                            <span> <button class="home-addtocart">Add to cart</button></span>
                            <span> Details</span>
                     </div>
              </div>
              <h5 class="font-weight-bolder product-home-name"><?php echo ($Name);?></h5>
              <span class="d-block details"><?php echo ($Description);?></span>
              <span class="d-block product-home-price details"><?php echo ($Price);?></span>
       </div>
           
                         
<?php
 }
 ?>
                     </div>
              </div>
       </div>

<?php
 ob_end_flush(); 
?>