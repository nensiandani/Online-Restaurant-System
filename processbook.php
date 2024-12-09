<?php
 error_reporting(0);
 include 'connection.php';

if(isset($_POST['submit']))
{
	
	$full=$_POST['full'];
	$email=$_POST['email'];	
	$date=$_POST['date'];
	$time=$_POST['time'];
	$people=$_POST['people'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
$sql="insert into booking(full,email,date,time,people,phone,message) values('$full','$email','$date','$time','$people','$phone','$message')";

if(mysqli_query($con,$sql))
{
	echo "<script> alert('booking done....'); window.location.href='viewreservation.php';</script>";
}
else
{
	echo "error:".mysqli_error($con);
}
mysqli_close($con);
}
?>