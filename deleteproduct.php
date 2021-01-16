<?php
ob_start();
include "nav.php" 
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

   $sql="DELETE FROM products where Id ='".$_GET['X']."'";
$result = mysqli_query($conn,$sql);
if($result)	
       {
           header("Location:manageproducts.php");
       }
       else
       {
           echo $sql;
       }
   





?>




<?php ob_end_flush(); ?>