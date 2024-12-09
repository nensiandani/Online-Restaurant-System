<?php
 error_reporting(0);
include 'connection.php';
if(isset($_POST['send']))
{
	$first=$_POST['first'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];	
      $message=$_POST['message'];
	$rate=$_POST['rate'];
	
$sql="INSERT into `feedback`(first,phone,email,message,rate) values('$first','$phone','$email','$message','$rate')";

if(mysqli_query($con,$sql))
{
         echo "<script>alert('Your feedback submitted successfully.'); window.location.href='feedback.php';</script>";}
else
{
	echo "error:".mysqli_error($con);
}
mysqli_close($con);
}
?>