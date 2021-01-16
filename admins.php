<html>
<style>
body{
  overflow-x: hidden;
}
table,th,td,tr{
  border:1px solid black;
}
th,td{
  padding: 15px;
  text-align: left;
}
th{
  background-color: grey;
  color: white;
}
table{
  width: 50%;
  position:relative;
  left:400px;
  top:10px;
}
h1{
  position:relative;
  left:650px;
}
h3{
  position:relative;
  left:400px;
  top:10px;
}
.button{
  position: relative;
  bottom: 35px;
  font-size: 1.25em;
  font-weight: 700;
  color: white;
  background-color: red;
  display: inline-block;
  cursor: pointer;
  border: 1px solid white;
  top:10px;
}

.button:focus,
.button:hover{
  background-color: rgb(121, 117, 117);
}

</style>
<?php
session_start(); 
ob_start();
include "nav.php";

?>

<h3>You can manage administrators accounts here</h3>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql="SELECT * from admins";
	$result = mysqli_query($conn,$sql);	

?>
   <table>
	<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Email</th>
	  <th>Password</th>
	  <th>Age</th>
	  <th>Delete</th>
	
</tr>
<form action="admins.php" method="post">
	<?php
	while($row=mysqli_fetch_array($result))	
	{
?>
<tr>
<td><?php echo $row["ID"];?></td>
 <td><?php echo $row['Name'];?></td>
 <td><?php echo $row["Email"];?></td>
 <td><?php echo $row["Password"];?></td>
 <td><?php echo $row["Age"];?></td>
 
<td><input type="checkbox" value="<?php echo $row['ID']; ?>" name="check[ ]"></td>

 </tr>
	<?php }?>
 <br>
</table><br>
<input type="submit" class="submit button btn w-100 py-3" name="Submit" value="Delete">
</form>
<?php
if(isset($_POST["Submit"])){

$checkbox = $_POST['check'];  
 
for ($i=0; $i<count($checkbox);$i++) { 
 $_SESSION["ID"]=$checkbox[$i];
$sql="DELETE FROM admins where ID =".$_SESSION["ID"]."";
$result=mysqli_query($conn,$sql); 
header("Location:admins.php");
} 
}
?>
<h3> To add a new administrator account</h3>
<form action="addadmin.php">
    <input type="submit" class="submit button btn w-100 py-3" value="Add an account" />
</form>

</html>
<?php
ob_end_flush();
?>
