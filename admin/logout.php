<?php
 error_reporting(0);
session_start();
unset($_SESSION["id"]);
unset($_SESSION["nm"]);
header("location: ../login.php");
?>