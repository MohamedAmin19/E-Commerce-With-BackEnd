<?php
ob_start();
include "nav.php";
?>
<html>
  <head>
	  <link rel="stylesheet"href="login.css">
  </head>
<body>
	<div class="online py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
					<h1 class="head">Login</h1>
					<form action="" method = "post">
						<div class="form">
							<input type="text"class="form-control mb-4 border-0 py-4 " name="Email"placeholder="Your email.."><br>
							<input type="password"class="form-control mb-4 border-0 py-4 "id="fname" name="Password" placeholder="Your password.."><br>
							<input type="submit"class="inputfile btn w-100 py-3" value="Submit" name="Submit">
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST["Submit"]))
{ 
	if(strpos($_POST["Email"], 'admin') > -1 )
	{
		$sql="SELECT * from admins where Email='".$_POST["Email"]."'and Password='".$_POST["Password"]."'";	
	}
	else{
	 $sql="SELECT * from customer where Email='".$_POST["Email"]."'and Password='".$_POST["Password"]."'";
	}
	$result = mysqli_query($conn,$sql);	
	if($row=mysqli_fetch_array($result))	
	{
		
		$_SESSION["ID"]=$row["ID"];
		$_SESSION["Name"]=$row["Name"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Password"]=$row["Password"];
		$_SESSION["Age"]=$row["Age"];
		$_SESSION["Image"]=$row[5];

		header("Location:homeee.php");
	}
	else	
	{
		echo "<h5>*Incorrect E-Mail or Password.</h5>";
	}
}
?>

<?php
ob_end_flush();
?>
