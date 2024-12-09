<?php
 error_reporting(0);
   $servername="localhost";
   $username="root";
   $password="";
   $database="retrotown";
   $con=mysqli_connect($servername,$username,$password,$database);
   if(!$con)
   {
      die("Error deleting record;".mysqli_error($con));
   }
?>