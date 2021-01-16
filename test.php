
<form action="" method = "post">
	Email:<br>
	<input type="text" name="Email">  <br>
	Password:<br>
	<input type="Password" name="Password"><br>
	<input type="submit" value="Submit" name="Submit">
	<input type="reset">
</form>
<?php
if(isset($_POST["Submit"])){ 
	if(strpos($_POST["Email"], 'admin') > -1 ){
		
		echo "true";
	}
	else echo"Not true";
}
	?>
	