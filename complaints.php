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
  bottom:50px;
}
h1{
  position:relative;
  left:650px;
}

</style>
<?php 
ob_start();
session_start();
include "nav.php";

?>
<body>
  <h1>Users' complaints</h1>
  <table>
	  <tr>
      <th>Name</th>
      <th>The complaint</th>
      <th>Email</th>
      <th>Image</th>
      <th>Reply</th>
	  </tr>
</body>
                           
   <?php $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";
              
    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT * from contactus";
    $result = mysqli_query($conn,$sql);	

    while($row=mysqli_fetch_array($result))
    {
      echo"<tr>";
      echo" <td>$row[0]</td>";
      echo" <td>$row[1]</td>";
      echo" <td>$row[2]</td>";
    ?>
    
      <td> <img src="<?php echo $row[3];?>" width=200px alt="No image attached "> </td>
      <td><a href="reply.php?X=<?php echo $row["ID"]; ?>">Reply</a></td>
      <?php 

      echo"</tr>";
 
      echo "<br>";
    }
    echo"</table>";
    ?>
<?php
ob_end_flush();
?>

                        