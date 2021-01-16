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
                <h1 class="head">Add</h1>
                <form action="" method="post">
                    <div class="form">
                        <input type="text"class="form-control mb-4 border-0 py-4 "id="fname" name="name" placeholder="Your name.."><br> 
                        <input type="text"class="form-control mb-4 border-0 py-4 " id="mail" name="desc" placeholder="Description"><br>
                        <input type="text"class="form-control mb-4 border-0 py-4 " name="price"placeholder="Price"><br>
                        <i class="fa fa-upload icon"></i>
                        <input type="file" class=" inputfile btn w-100 py-3" id="img" name="img" accept="image/*" ><br><br>
                        <input type="submit"class="inputfile btn w-100 py-3" value="Add" name="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<style>
    h5{
        color:red;
        position:relative;
        bottom:450px;
        left:350px;
    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST["Submit"]))
{
    if(empty($_POST['name']) || empty($_POST['desc']) || empty($_POST['price']) || empty($_POST['img']))
	{
		echo "<h5>*Missing fields</h5>";
    }
    else
    {
        $sql="INSERT INTO products (Name,Description,Price,Image) values('".$_POST["name"]."','".$_POST["desc"]."','".$_POST["price"]."','".$_POST["img"]."')";
        $result=mysqli_query($conn,$sql);
        if($result)	
        {
            header("Location:manageproducts.php");
        }
    }
}

?>  

<?
 ob_end_flush();
?>