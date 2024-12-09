<!--DOCTYPE html-->
<html lang="en">
 <?phperror_reporting(0);?>

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
      .loginform h3{
         font-family: 'Pacifico', cursive;
         margin-top: 5px;
         padding-bottom: 10px;
         position: center;
         margin-bottom: 0px;
         color:white;
         text-align: center;
		 color: #FEA116;
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

<script>
   function showModal(){
      document.querySelector('.loginform').classList.add('showloginform');
   }
   function closeModal(){
      document.querySelector('.loginform').classList.remove('showloginform');
   }

//show Password
var a;
function pass(){
	if(a==1){
		document.getElementById('password').type='password';
		//document.getElementById('pass-icon');
		a=0;
	}
	else{
		document.getElementById('password').type='text';
		//document.getElementById('pass-icon');
		a=1;
	}
}
</script>
</head>

<body onload="setTimeout('showModal()',1000)">

<!--Login Form Start-->
   <div class="overlay"></div>
   <div class="loginform">
      <a href="index.php"><span type="button" class="b" onclick="closeModal()">&times;</span></a>
      <form action="processlogin.php" method="Post">
         <div><h3>SIGN-IN</h3></div>
         <div>
            <label for="">Email :</label>
            <input type="username" id="username" placeholder="Email" name="email" required/>
         </div>
         <div>
            <label for="">Password :</label>
            <input type="password" placeholder="Password" name="pw" id="password" required/>
			<span onclick="pass()" id="pass-icon" class="fa fa-fw fa-eye" style="margin-left:-10%; border-left: solid 0.5px;padding-left: 5px;cursor: pointer;"></span>
         </div>
		 <a href="pass_process.php" style="margin-left: 20px">Forget Password ?</a>
         <button class="button" name="login">Sign In</button>
         <p>Not a member?<a href="register.php">Sign Up</a></p>
      </form>
   </div>
<!--Login Form End-->

</body>
</html>