<?php
 error_reporting(0);
session_start();
unset($_SESSION["id"]);
unset($_SESSION["cf"]);
header("location: index.php");
?>