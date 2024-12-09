<?php
session_start();
include'connection.php';
?>
<html>
<head>
<script>
	function show(){
		var x=document.getElementById("myInput");
		if(x.type === "password"){
			x.type="text";
		}
		else{
			x.type="password";
		}
	}
</script>
<?php
include 'header.php';
?>
<style>
.body{
   background-color: #0F172B;;
   text-align: center;
}
.body h2{
  margin-top: 10px;
  color: #FEA116;
  font-family: 'Pacifico', cursive;
}
.body label{
  color: #FEA116;
  font-family: 'Pacifico', cursive;
  font-size: 22;
  margin: 5px;
}
.body img{
 margin-top: 100px;
 width: 150px;
 border-radius: 50%;
 border: 5px solid #FEA116;
}
.body input{
	background-color: #fff;
	color: #0F172B;
  margin: 5px;
  padding: 10px;
  border-radius: 10px;
  width: 20%;
  font-size: 18;
}
.body button{
	border-radius: 50px;
	line-height: 0;
	font-size: 20;
	font-family: 'Pacifico', cursive;
	background-color: #FEA116; 
	margin-top: 20px;
	padding: 10px;
	width: 15%;
	color: #fff;
	height: 50px;
	cursor: pointer;
}
</style>
</head>
<title>Profile</title>
<body class="body">
<?php
    if($_SESSION["name"]){
		$e=$_SESSION["name"];
  ?>
 <?php
  if(isset($_POST['update'])){
	  //$name=$_POST['name'];
	  $phone=$_POST['phone'];
	  $email=$_POST['email'];
	  $id=$_SESSION['name'];
	  
	  
   if( empty($phone)|| empty($email)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE register SET phone='$phone', email='$email' where name='$id'";
      $upload = mysqli_query($con, $update_data);
	  $message[]='Details updated successfully..';
	  //echo "<script>window.href.location('profile.php');</script>";
   }
};
?>
<img src="img/avt.jpg">
<h2>Profile</h2>
<?php
$query_select="SELECT *from register where name='$e'";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{

?>
	<form action="" method="post">
	<div>
	<label>Username: </label>
	<input type="text" value="<?php echo $row['name'];?>" name="name" disabled>
	</div>
	<div>
	<label>Phone No.: </label>
	<input type="text" value="<?php echo $row['phone'];?>" name="phone" minlength="10" maxlength="10">
	</div>
	<div>
	<label>  Email-Id : </label>
	<input type="text" value="<?php echo $row['email'];?>" name="email">
	</div>
	<?php
	}
	}
	?>
	<div style="margin-top: 1%;">
	<a href="vieworder.php">
	<i class="fa fa-cart-plus" style="margin: 0.5%"></i>View Orders</a>
	<a href="viewreservation.php"><i class="fa fa-table" style="margin: 0.5%; margin-left: 3%"></i>Reservations</a>
	</div>
	<div>
	<input type="submit" name="update" value="Update" style="font-family: 'Pacifico', cursive; width: 10%; border-radius: 30px; color: #fff; background-color:#FEA116">

	<a href="logout.php">
	<button type="button">Sign-out</button>
	</a>
	</div>
<?php
	}  
	    else {
                echo "<script>alert('Sign in to proceed'); window.location.href='login.php';</script>";

    }
    ?>
</body>
</html>