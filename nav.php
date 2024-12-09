<?php 
error_reporting(0);
?>
<!-- Navbar & Hero Start -->
   <div class="container-xxl position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
         <a href="" class="navbar-brand p-0">
 <h1 class="text-primary m-0"><img src="img/logo.jpg" alt="Logo" style="height: 75px; width: 75px; border-radius:50%; margin: 4%"><!--i class="fa fa-utensils me-3 "></i--><big>RetroTown</big></i></h1>

            <!--img src="img/logo.png" alt="Logo"-->
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
               <a href="index.php" class="nav-item nav-link active">Home</a>
               <a href="menu.php" class="nav-item nav-link">Menu</a>
               <a href="gallery.php" class="nav-item nav-link">Gallery</a>
               <a href="about.php" class="nav-item nav-link">About Us</a>
		   <a href="contact.php" class="nav-item nav-link">Contact Us</a>
               <a href="feedback.php" class="nav-item nav-link">Feedback</a>
            </div>
		

	<?php
include'connection.php';
      session_start();
//$user=$_SESSION['name'];
      $select_rows = mysqli_query($con, "SELECT * FROM `cart` WHERE user='$user'") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

 

      ?>
            <div class="service-item rounded pt-1 px-3">
               <a href="cart.php" class="fa fa-2x fa-cart-plus text-primary"></a>
			   <span style="color: #FEA116; margin-top:-3.5%;margin-left:-0.1%;"><?php echo $row_count;?></span>
            </div>

			<?php
			error_reporting(0);
             session_start();
			   if($_SESSION['name']){
				  
				?>
				
            <div class="service-item rounded pt-1 px-3">
			   <a href="profile.php"><span style="color: #FEA116"><?php echo "Hello, ".$_SESSION['name'];?></span></a>
            
			   </div>		<?php }?>
			
            <div class="service-item rounded pt-1 px-3">
               <a href="profile.php" class="fa fa-2x fa-user-circle text-primary"></a>
            </div>   
         </div>
      </nav>