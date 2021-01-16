<?php ob_start();
session_start();
include "nav.php";
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
    color:white;
    font-size:40px;
    
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
  
<?php $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "web";
 
 // Create connection
 $conn = mysqli_connect($servername,$username,$password,$dbname);
 $sql="SELECT Complain from contactus WHERE ID='".$_GET['X']."'";
 $result = mysqli_query($conn,$sql);	
 $row=mysqli_fetch_array($result);
 ?>

<?php
 if(isset($_POST["Submit"]))
 {
     if(!empty($_POST['reply']))
     {
      $sql = "UPDATE contactus SET Reply='".$_POST["reply"]."' WHERE ID='".$_GET['X']."'";
      $result=mysqli_query($conn,$sql);
      echo "<h3>Reply sent to the user</h3>";
     } 
    else
    { 
      echo "<h3>Please enter a reply to the complaint</h3>";
    }
 }
 ?>
<body>
<div class="online py-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="head">Reply</h2>
                <form action="" method="post">
                    <div class="form">
                      <input type="text"class="form-control mb-4 border-0 py-4 "id="fname" value=" <?php echo $row["Complain"];?> " name="Complaint" placeholder="The complaint or suggestion.."><br> 
                      <input type="text" class="form-control mb-4 border-0 py-4 "name="reply" placeholder="Reply to the customer"><br>
                      <input type="submit"class="inputfile btn w-100 py-3" value="Reply" name="Submit">
                    </div>
                </form>
            </div>
         </div>
    </div>
</div>
</div>
</body>
</html>




