<?php 
session_start();
ob_start();
include "nav.php";
?>
<html>
  <head>
  <style>
  body{
    height: 1000px;
    overflow-x: hidden;
}
h5{
    position: relative;
    bottom:500px;
    left:50px;
    color : red;
}
.online{
    background-color:#86868b;
}

.head{
    position: absolute;
    text-align: center;
    left:560px;
    top:-40;
    transform: translate(-50%,-50%);
    color: white;
    font-size: 35px;
}
.form{
    position:relative;
    left:300px;
}
.inputfile{
    position: relative;
    bottom: 35px;
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: transparent;
    display: inline-block;
    cursor: pointer;
    border: 1px solid white;
}

.inputfile:focus,
.inputfile:hover {
    background-color: rgb(121, 117, 117);
}
.icon{
    position: relative;
    top:15px;
    z-index:11111111;
}
  </style>
  </head>
<body>
<div class="online py-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  <h1 class="head">Add</h1>
                  <form action="" method="post">
                    <div class="form">
                      <input type="text"class="form-control mb-4 border-0 py-4 "id="fname" name="Name" placeholder="Your name.."><br> 
                      <input type="text"class="form-control mb-4 border-0 py-4 " id="mail" name="Email" placeholder="Your Email.."><br>
                      <input type="Password"class="form-control mb-4 border-0 py-4 " name="Password"placeholder="Your Password.."><br>
                      <input type="Age" class="form-control mb-4 border-0 py-4 "name="Age"placeholder="Your age.."><br><br>
                      <i class="fa fa-upload icon"></i>
                      <input type="file" class=" inputfile btn w-100 py-3" id="img" name="Image" accept="image/*" ><br><br>
                      <input type="submit"class="inputfile btn w-100 py-3" value="Submit" name="Submit">
                      <input type="reset"class="inputfile btn w-100 py-3">
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

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST["Submit"]))
{
  if(empty($_POST['Email'])||empty($_POST['Password'])||empty($_POST['Name']))
	{
		echo "<h5>*Missing fields</h5>";
  }
  $sql= "SELECT * FROM admins where Email='".$_POST["Email"]."'";
  $result=mysqli_query($conn,$sql);
  $num_rows = mysqli_num_rows($result);
  if($num_rows >= 1)
  {
    echo "<h5>*Email already exists</h5>"; 
  }
  else if(strpos($_POST["Email"], 'admin') > -1 )
  {
    echo "<h5>*The Email cannot contain @admin in its format</h5>";
  }
  else if(filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL))
  {
    if(strlen($_POST["Password"])>=6)
    {
      if(filter_var($_POST["Age"],FILTER_VALIDATE_INT))
      {
        $sql="INSERT INTO customer (Name,Email,Password,Age,Image) values('".$_POST["Name"]."','".$_POST["Email"]."','".$_POST["Password"]."','".$_POST["Age"]."','".$_POST["Image"]."' )";
        $result=mysqli_query($conn,$sql);
        header("Location:homeee.php");
      }
      else echo "<h5>*Age must be a number</h5>";
    }
    else echo "<h5>*Password must be 6 charachters long</h5>";
  }
  else echo "<h5>*Email isn't in the correct format</h5>";
}
?>  
<?php
ob_end_flush();
?>
