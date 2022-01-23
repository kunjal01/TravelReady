<?php
$server="localhost";
$user="root";
$pw="";
	$conn=mysqli_connect($server,$user,$pw);
	if (!($conn))
		echo "Could not establish the connection";
	else {
			echo "Connection established <br>";
			$sql="CREATE DATABASE signuppage";
			   if (mysqli_query($conn,$sql))
				echo "Database created sucessfully <br>";
			    else
				echo "<br> Database could not be created";

		mysqli_close($conn);
}
?>