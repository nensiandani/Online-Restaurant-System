<?php
include("connection.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($con,"DELETE FROM booking WHERE id = '".$_GET['reservation_delete']."'"); 
header("location:viewreservation.php"); 

?>