<!doctype html>
<html lang="en">
<?php  include 'header.php'; include 'nav.php';?>
<head>
<title>jQuery Show Different HTML Form on Radio Button Selection</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style>
.myDiv{
	display:none;
}  
#showOne{
	color:red;
    border:1px solid red;
    padding:10px;
}
#showTwo{
	color:green;
    border:1px solid green;
    padding:10px;
}
#showThree{
	color:blue;
    border:1px solid blue;
    padding:10px;
}
</style>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script>
</head>
<body>
<h2>jQuery Show Different HTML Form on Radio Button Selection</h2>
<input type="radio" name="demo" value="One"/> Subscriber Login
<input type="radio" name="demo" value="Two"/> Employee Login
<input type="radio" name="demo" value="Three"/> Manager Login
<div id="showOne" class="myDiv">
	<strong>Subscriber Login Form</strong>
	<form id="MyForm" action="" method="post">
  		<label>Enter Name</label>
		<input type="text" name="name" placeholder="Enter your name"/></br>
  		<label>Enter Email</label>
		<input type="email" name="email" placeholder="Enter your email"/></br>
  		<input type="button" class="btn btn-default" name="submit" value="Submit"/>
	</form>
</div>
<div id="showTwo" class="myDiv">
  	<strong>Employee Login Form</strong>
	<form id="MyForm" action="" method="post">
  		<label>Enter Name</label>
		<input type="text" name="name" placeholder="Enter your name"/></br>
  		<label>Enter Email</label>
		<input type="email" name="email" placeholder="Enter your email"/></br>
  		<input type="button" class="btn btn-default" name="submit" value="Submit"/>
	</form>
</div>
<div id="showThree" class="myDiv">
  	<strong>Manager Login Form</strong>
	<form id="MyForm" action="" method="post">
  		<label>Enter Name</label>
		<input type="text" name="name" placeholder="Enter your name"/></br>
  		<label>Enter Email</label>
		<input type="email" name="email" placeholder="Enter your email"/></br>
  		<input type="button" class="btn btn-default" name="submit" value="Submit"/>
	</form>
</div>
</body>
</html>              
