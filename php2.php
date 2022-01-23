<?php

$server="localhost";
$user="root";
$pw="";
$dbname="signuppage";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "could not connect";
else{
	$sql1="CREATE TABLE signup(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(20) NOT NULL,
	email VARCHAR(25) NOT NULL, 
        pass VARCHAR(10) NOT NULL,
        rpass VARCHAR(10) NOT NULL)";
    if (mysqli_query($conn,$sql1))
		echo "Table creation successful";

	else 
		echo "Table creation unsuccessful";

}
mysqli_close($conn);


?>