<!DOCTYPE html>
<html lang="en">

<head>
   <?php
      include 'header.php';
   ?>
</head>

<body>
    
<!-- Navbar & Hero Start -->
<?php
include 'nav.php';
?>

      <div class="container-xxl py-5 bg-dark hero-header mb-5">
         <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonials/Reviews</h1>
            <nav aria-label="breadcrumb">
		   <ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item text-white">Reviews about retrotown by customers..</li>
		   </ol>
               <!--ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Pages</a></li>
                  <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
               </ol-->
            </nav>
         </div>
      </div>
   </div>
<!-- Navbar & Hero End -->

<!-- Testimonial Start -->
   <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
         <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
         </div>
         <div class="owl-carousel testimonial-carousel">
		 		 		 <?php
      include 'connection.php';
      $select_products = mysqli_query($con, "SELECT * FROM `feedback`");
      if(mysqli_num_rows($select_products) > 0){
        while( $row = mysqli_fetch_assoc($select_products)){
      ?>      
            <div class="testimonial-item bg-transparent border rounded p-4">
               <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
               <p>"<?php echo $row["message"];?>"</p>
               <div class="d-flex align-items-center">
                  <div class="ps-3">
                     <h5 class="mb-1"><?php echo "".$row["first"]." ".$row["last"];?></h5>
					 <br/>
					 <small>
							<?php
								for($k=0;$k<$row['rate'];$k++)
								{
							?>
							<i class="fas fa-star fa-1x text-primary mb-3"></i>
							<?php
								}
							?>
					</small>
                  </div>
               </div>
			   					
            </div>
        <?php };};?>
	    </div>
</div>
</div>
<!-- Testimonial End -->
        
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