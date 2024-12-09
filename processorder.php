	<?php
	 error_reporting(0);
include 'connection.php';
if(isset($_POST['order']))
{
        $upi_id=$_POST['upi_id'];
        $name=$_POST['name'];
        $c_no=$_POST['card_no'];
        $cvv=$_POST['cvv'];
	$first=$_POST['first'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];	
      $address=$_POST['address'];
	$zipcode=$_POST['zipcode'];
	$mod=$_POST['mod'];
	$user=$_SESSION['name'];
$sql="INSERT into `orders` (first,phone,email,address,zipcode,payment,upi_id,card_nm,card_no,cvv) values('$first','$phone','$email','$address','$zipcode','$mod','$upi_id','$name','$c_no','$cvv')";

if(mysqli_query($con,$sql))
{
         echo "<script>alert('Order Placed successfully.'); window.location.href='vieworder.php';</script>"; $rowcount=0;}
else
{
	echo "error:".mysqli_error($con);
}
mysqli_close($con);
}
?>