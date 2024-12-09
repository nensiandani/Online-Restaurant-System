<?php
include 'connection.php';
 error_reporting(0);
if (isset($_POST['submit'])) {
	$email=$_POST['email'];

	$cfpw=($_POST['cfpw']);
	$npw=($_POST['npw']);
    $result = mysqli_query($con, "SELECT *from register WHERE email='$email'");
    $row = mysqli_fetch_array($result);
    if ($npw=$cfpw) {
        mysqli_query($con, "UPDATE register set pw=md5('$npw') WHERE email='$email'");
         echo "<script>alert('Password Updated Successfully.'); window.location.href='login.php';</script>";
    } else
         echo "<script>alert('Password Updation Failed.'); window.location.href='forget_pass.php';</script>";
}
?>
<html lang="en">

<head>
   <?php
      include 'header.php';
   ?>
<style>
      .overlay{
         width: 100%;
         height: 100vh;
         position: fixed;
         top: 0%;
         background: rgba(0, 0, 0, 0.7);
         z-index: 1;
         opacity: 1;
         transition: .10s;
      }
      .loginform{
         font-family: 'Pacifico', cursive;
         width: 400px;
         padding: 20px;
         background-color: #0F172B;
         position: absolute;
         transition: .12s;
         z-index: 9;
         left: 50%;
         top: -50%;
         box-shadow: 0px 0px 5px 3px #FEA116;
         transform: translate(-50%, -50%);
      }
      .showloginform{
         top: 50%;
         transition: .10s;
      }
      .loginform input{
         margin-left: 20px;
         width: 90%;
         margin-bottom: 10px;
         height: 35px;
      }
      .loginform button{
         margin-left: 125px;
         margin-top: 10px;
         background-color: #FEA116;
         color: white;
         padding: 10px 15px;
         width: 30%;
         cursor: pointer;
      }
      .loginform label{
         color: #FEA116;
         margin-left: 20px;
         margin-bottom: 3px;
      }
      .loginform p{
         margin-top: 15px;
         margin-right: 30px;
         margin-bottom: 0px;
         color:white;
         text-align: right;
      }
      .loginform h5{
         font-family: 'Pacifico', cursive;
         margin: 20px;
         padding-bottom: 10px;
         position: center;
         color:#FEA116;
         text-align: left;
      }   
      .b{
         position: absolute;
         right: 0px;
         width: 30px;
         color: white;
         line-height: 30px;
         height: 30px;
         background-color: #FEA116;
         text-align: center;
         top: 0px;
         pointer: cursor;
      } 
      body{
         background-image: url("img/l6.jpg");  
      }
</style>

<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script>
function showModal(){
      document.querySelector('.loginform').classList.add('showloginform');
   }
   function closeModal(){
      document.querySelector('.loginform').classList.remove('showloginform');
   }

   var c=document.querySelector("span");
   c.addEventListener("click",closeModal);

</script>
</head>
<body onload="setTimeout('showModal()',1000)">
<!--Login Form Start-->
   <div class="overlay"></div>
   <div class="loginform">
      <a href="login.php"><span type="button" class="b" onclick="closeModal()">&times;</span></a>
      <form action="#" method="Post">
         <div><h5><b><i>Change Password...</i></b></h5></div>
         <div>
            <label for="">Email :</label>
            <input type="username" id="username" placeholder="Email" name="email" required/>
         </div>
         <div>
            <label for=""> New Password :</label>
            <input  type="password" id="pw" placeholder=" New Password" name="npw" required/>
         </div>
         <div>
            <label for=""> Confirm Password :</label>
            <input  type="password" id="pw" placeholder=" Confirm Password" name="cfpw" required/>
         </div>
         <button class="button" name="submit">Update</button>
      </form>
   </div>
<!--Login Form End-->
</body>
</html>