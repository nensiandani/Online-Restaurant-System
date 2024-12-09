<?php
 error_reporting(0);
 include 'connection.php';

if(isset($_POST['submit']))
{	
	$name=$_POST['name'];
	$email=$_POST['email'];	
	$subject=$_POST['subject'];
	$message=$_POST['message'];

$sql="insert into contact(name,email,subject,message)values('$name','$email','$subject','$message')";

if(mysqli_query($con,$sql))
{
	echo "<script> alert('Query submitted....'); window.location.href='contact.php';</script>";
}
else
{
	echo "error:".mysqli_error($con);
}
mysqli_close($con);
}
?>