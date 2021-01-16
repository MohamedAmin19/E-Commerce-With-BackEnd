

<style>
table,th,td,tr{
border:1px solid black;

}
table{
font-size:30px;


}
th{ 
padding-right:50px;
background-color:cyan;

}

td:hover{
background-color:green;
}
body{
	font-size:1px;
}
h1{
	font-size:25px;
}
</style>
<?php 
session_start(); 
ob_start();
include "nav.php";

?>
<h1>
This tables shows all the records found in database:
</h1>
<body>
<table>
	<tr>
  <th>Name</th>
   <th>Email</th>
   <th>Password</th>
	<th>Age</th>
    <th>Image</th>
	</tr>

</body>
                           
   <?php $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "web";
              
              // Create connection
              $conn = mysqli_connect($servername,$username,$password,$dbname);
              $sql="SELECT * from customer";
  $result = mysqli_query($conn,$sql);	

  while($row=mysqli_fetch_array($result))	{
    echo"<tr>";
    echo" <td>$row[0]</td>";
    echo" <td>$row[1]</td>";
    echo" <td>$row[2]</td>";
    echo"<td>$row[3]</td>";
    ?>
   <td> <img src="<?php echo $row[4];?>" width=200px> </td>
   <?php 

    echo"</tr>";
 
    echo "<br>";
  

  }
  echo"</table>";

  ?>
  <?php
ob_end_flush();
?>

                        