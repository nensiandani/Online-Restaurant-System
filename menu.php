<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
error_reporting(0);

?>

<head>
<link href="css/style3.css" rel="stylesheet">
   <?php
	include 'header.php';      
include 'connection.php';
$user=$_SESSION['name'];	
   	
	if(isset($_POST['add_to_cart'])){
		if($_SESSION['name']){

			$product_name = $_POST['product_name'];
			$product_price = $_POST['product_price'];
			$product_image = $_POST['product_image'];
			$product_quantity = 1;
			$user=$_SESSION['name'];
			$select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$product_name' && user='$user'");

			if(mysqli_num_rows($select_cart) > 0){
				echo "<script>alert('Item already added.');</script>";
			}
			else{
				$insert_product = mysqli_query($con, "INSERT INTO `cart`(name, price, image, quantity,user,total) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity','$user','$product_price')");
				echo "<script>alert('Item added.');window.location.href='select.php';</script>";
			}
		}
		else{
			echo "<script>alert('Sign-in to proceed'); window.location.href='login.php';</script>";
		}
	}


?>
    
</head>

<body>
  <?php

/*if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
*/
?>

<!-- Navbar & Hero Start -->
 <?php
include 'nav.php';	 
  ?>


      <div class="container-xxl py-5 bg-dark hero-header mb-5">
         <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
            <nav aria-label="breadcrumb">
		   <ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item text-white">Retrotown brings you with Our Special Menu with New Recipes..</li>
               </ol>
               
            </nav>
         </div>
      </div>
   </div>
<!-- Navbar & Hero End -->

<!--Menu Start-->

   <!--Starters start-->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            <h1 class="mb-5">Special Meals!!!</h1>
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Starters</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Starter'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Starter">
			<p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
           <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart"/>
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
         </div>
   </div>

<!--starter end-->

<!--soup start -->
<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Soups</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Soup'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Soup">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 
      </div>
   </div>
<!-- soup ends -->

 <!-- Appetizers Start -->
<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Indonesian Appetizers</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Appetizer'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Appetizer">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
        
      </div>
   </div>
<!-- Appetizers ends -->

<!-- Indonesian Delicacy Start -->
<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Indonesian Delicacy</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Indo_delicacy'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Indonesian Delicacy">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
         
      </div>
   </div>
<!-- Indonesian Delicacy ends -->


<!-- South Indian Delicacy Start -->
<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">South Indian Delicacy</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='South_indian'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="South Indian">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
         
      </div>
   </div>
<!-- South Indian Delicacy ends -->


<!-- Street Food - Any Time Delicacy Start -->
<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Street Food - Any Time Delicacy</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Street_food'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Street Food">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
        
      </div>
   </div>
<!-- Street Food - Any Time Delicacy ends -->


<!-- Main Course Start -->
<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Main Course</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Main_course'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Main Course">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
       
      </div>
   </div>
<!-- Main Course ends -->



<!--Rice & Noodles Start -->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Rice & Noodles</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Rice_noodle'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Rice & Noodles">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
      </div>
   </div>
<!-- Rice & Noodles ends -->


<!--Tandoor & Roti Start -->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Tandoor & Roti</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Tandoor_roti'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Tandoor & Roti">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
       
      </div>
   </div>
<!-- Tandoor & Roti ends -->


<!--Desserts Start -->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Desserts</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Dessert'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Desserts">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
       
      </div>
   </div>
<!-- Desserts ends -->


<!--Beverages Start -->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Beverages</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Beverage'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Beverages">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
       
      </div>
   </div>
<!--Beverages ends -->


<!--Can & Bottle Start -->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Can & Bottle</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Can_bottle'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Soft drink Can & Bottles">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
       
      </div>
   </div>
<!-- Can & Bottle ends -->


<!--Cafe Licious Start -->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Cafe Licious</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Cafe_licious'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Cafe licious">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
        
      </div>
   </div>
<!-- Cafe Licious ends -->



<!--Tea Bar Start -->

<form action="menu.php?action=add_to_cart=<?php echo $row["product_id"]; ?>" method="post">
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Tea Bar</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Tea_bar'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Tea Bar">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div>
 <i style="color: #FEA116;">
        
      </div>
   </div>
<!-- Tea Bar ends -->



<!--Fresh Juice Start -->

v
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="text-center">
            
            <h2 class="section-title ff-secondary text-center text-primary fw-normal">Fresh Juice</h2>
 </div>
              <div class="owl-carousel testimonial-carousel">
<?php
      
      $select_products = mysqli_query($con, "SELECT * FROM `menu` WHERE product_cat_nm='Fresh_juice'");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>     
            <div class="testimonial-item bg-transparent border rounded p-4"> 

 <form action="" method="post">
         
            <img src="admin/uploaded_img/<?php echo $row['product_image']; ?>" alt="Fresh Juice">
            <p><h5><?php echo $row['product_name']; ?></h5></p>
            <p><i>Rs.<?php echo " ".$row['product_price']; ?>/-</i></p>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
            <i class="fas fa-shopping-cart"></i><input type="submit" class="btn" value="add to cart" name="add_to_cart">
         
      </form>
  </div>    
<?php };};?>      
   </div><marquee>
 <i style="color: #FEA116;">
        <i style="color: #FEA116;">
         <p style="padding-top: 50px;">For our Guests with the allergies.Please feel free to make special request. Above prices exclude 10.5% tax and 5% service charges. All our items are freshly made and might take 20-30 mins during rush hours.</p></i></marquee>
      </div>
   </div>
<!-- Fresh Juice ends -->




  </div>

<!--Menu End-->

<!-- Footer Start -->
   <?php
      include 'footer.php';
   ?>
<!-- Footer End -->


<!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   </div>

<!-- JavaScript Libraries -->
   <?php
      include 'javascript.php';
   ?>

</body>
</html>