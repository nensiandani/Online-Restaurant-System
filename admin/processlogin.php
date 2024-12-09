<?php
 error_reporting(0);
  session_start();
   include("connection.php");
   if(isset($_POST['login']))
   {
      /* User value */
      $email=$_POST['email'];
      $pw=$_POST['pw'];

      /* Admin value */
      $e='admin@gmail.com';
      $p='admin0201';

      /* chef value 
      $ec='chef@gmail.com';
      $pc='chefside0201';*/
      
      /* Admin side login */
      if($email==$e && $pw==$p)
      {
       
         $_SESSION['name']=$data['$email'];
         $_SESSION['start']=time();
         $_SESSION['expire']=$_SESSION['start']+400;
         echo "<script>alert('Logged in Successful as admin.'); window.location.href='admin/index.php';</script>";
      }
/*chefside login*/
	else($email=='chef@gmail.com' && $pw=='chef0201')
{
          $_SESSION['name']=$data['$email'] ;
         $_SESSION['start']=time();
         $_SESSION['expire']=$_SESSION['start']+400;
         echo "<script>alert('Logged in Successful as chef.'); window.location.href='chef/index.php';</script>";



      /* User side Login*/
      else{
         $sql=("select * from register where email='$email' && pw='$pw'");
         $result=mysqli_query($con, $sql);
         if(!$result){
            echo "Error: ".mysqli_error();        
         }


         else{
            $row=mysqli_num_rows($result);
            if($row==0){
               echo "<script>alert('Email or password is invalid. If not registered, register to login successfully.'); window.location.href='register.php';</script>";
            }
            else{
               $data=mysqli_fetch_array($result);
               session_start();
               $_SESSION['name']=$data['$email'];
               $_SESSION['start']=time();
               $_SESSION['expire']=$_SESSION['start']+400;
               echo "<script>alert('Login Successful.'); window.location.href='index.php';</script>";
            }
         }
      }
   }


?>