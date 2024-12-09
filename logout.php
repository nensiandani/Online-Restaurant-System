<?php
 error_reporting(0);
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("location: login.php");
?>