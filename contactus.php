<?php 
session_start();
include "nav.php" 
?>
<html>
  <head>
      <style>
body{
    height: 800px;
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
    color:white
    
}
h4{
    color:white;
    position:relative;
    bottom:25px;

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
                <h2 class="head">ContactUs</h2>
                <form action="" method="post">
                    <div class="form">
                      <input type="Name"class="form-control mb-4 border-0 py-4 "id="fname" name="Complaint" placeholder="The complaint or suggestion.."><br> 
                      <h4>Add a picture to illustrate your problem/suggestion:</h4>
                      <i class="fa fa-upload icon"></i>
                      <input type="file" class=" inputfile btn w-100 py-3" id="img" name="Image" accept="image/*" ><br><br>
                      <input type="submit"class="inputfile btn w-100 py-3" value="Send" name="Submit">
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
    if(!empty($_POST["Complaint"]))
    {
        $sql="INSERT INTO contactus (Name,Complain,Email,Picture) values('".$_SESSION["Name"]."','".$_POST["Complaint"]."','".$_SESSION["Email"]."','".$_POST["Image"]."' )";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo"Your complaint have been received";
        }
    }
        else echo "Please fill in your complaint";
}
?>