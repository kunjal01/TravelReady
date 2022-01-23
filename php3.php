<?php

$server="localhost";
$user="root";
$pw="";
$dbname="signuppage";
$name=$_POST["name"];
$email=$_POST["email"];
$pwd=$_POST["pass"];
$rpwd=$_POST["rpass"];

$conn=mysqli_connect($server,$user,$pw,$dbname);
if(!$conn)
echo "Was unable to connect";
else
{
$sql1="SELECT * FROM signup Where email='$email'";
$res=mysqli_query($conn,$sql1);
if (mysqli_num_rows($res)>0)
	echo " Email already exists. Please register using another email.";
else
     {
	$sql="INSERT INTO signup(name,email,pass,rpass) VALUES('$name','$email','$pwd','$rpwd')";
	if (mysqli_multi_query($conn,$sql))
		echo "Value insertion successful";			
	else 
		echo "Value insertion unsuccessful";
     }
}
header("location:thankyou.html");
mysqli_close($conn);
?>