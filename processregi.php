<?php
 error_reporting(0);
 include 'connection.php';

if(isset($_POST['register']))
{
	
   $name =  $_POST['name'];
   $phone =  $_POST['phone'];
   $email = $_POST['email'];
   $pw = md5($_POST['pw']);
   $cpw = md5($_POST['cpw']);

      if($pw != $cpw){
         echo "<script>alert('Password does not match.'); window.location.href='register.php';</script>";
      }
      else{
         $insert = "INSERT INTO register(name,phone,email, pw) VALUES('$name','$phone','$email','$pw')";
         mysqli_query($con, $insert);
         echo "<script>alert('Registration Successful.'); window.location.href='login.php';</script>";
      }
mysqli_close($con);
}
?>

