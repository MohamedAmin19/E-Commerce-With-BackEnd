<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM user Where UserName='".$_POST['Name']."' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo("Name is already taken");
}
else{
    echo("Name is not taken");
}

?>