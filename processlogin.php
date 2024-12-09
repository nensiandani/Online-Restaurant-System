<?php

//error_reporting(0);
session_start();
$message="";
if(count($_POST)>0){
	include"connection.php";
	/* Admin value */
      $e='admin@gmail.com';
      $p='admin0201';
      
    /* Admin side login */
      if($_POST["email"]==$e && $_POST["pw"]==$p)
      {
         $_SESSION['nm']=$e;
         echo "<script>alert('Logged in Successful as admin.'); window.location.href='admin/index.php';</script>";
      }
	/* Chef value */
      $c='chef@gmail.com';
      $ps='chef0201';	  
	   /* Chef side login */
      if($_POST["email"]==$c && $_POST["pw"]==$ps)
      {
         $_SESSION['cf']=$c;
         echo "<script>alert('Logged in Successful as chef.'); window.location.href='chef/index.php';</script>";
      }
   
    /*User Side Login */
	$result=mysqli_query($con, "SELECT * from register WHERE email='".$_POST["email"]."' and pw='".md5($_POST['pw'])."'");
	$row=mysqli_fetch_array($result);
	$r=mysqli_fetch_assoc($result);
            $name = $r['name'];
            $phone = $r['phone'];
            $email = $r['email'];
            $pw = $r['pw'];
            
	if(is_array($row)){
		$_SESSION["id"]=$row["id"];
		$_SESSION["name"]=$row["name"];
		$_SESSION["email"]=$row["email"];
	}
	else{
               echo "<script>alert('Email or password is invalid. If not registered, register to login successfully.'); window.location.href='register.php';</script>";	}
}
if(isset($_SESSION["id"])){
                echo "<script>alert('Login Successful.');window.location.href='index.php';</script>";
}
?>