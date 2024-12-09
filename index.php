<?php
error_reporting(0);
?>
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
session_start();
$user=$_SESSION['name'];
include 'nav.php';
?>
      <div class="container-xxl py-5 bg-dark hero-header mb-5">
         <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
               <div class="col-lg-6 text-center text-lg-start">
                  <h1 class="display-3 text-white animated slideInLeft">Rain or Shine</h1>
                  <h1 class="display-5 text-white animated slideInLeft"> a fine time to Dine</h1>
                  <p class="text-white animated slideInLeft mb-4 pb-2">We serve you the best cuisines that makes you feel like heaven and Our chefs will never make you disappointed.<br>
                     <b><strong>FLAVORS FOR ROYALTY UNDER ONE ROOF</strong></b>
                  </p>
                  <a href="booking.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
               </div>
               <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                  <img class="img-fluid" src="img\home_image.jpg" alt="">
               </div>
            </div>
        </div>
     </div>
  </div>
<!-- Navbar & Hero End -->

<!-- Service Start -->
   <div class="container-xxl py-5">
      <div class="container">
         <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="service-item rounded pt-3">
                  <div class="p-4">
                     <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                     <h5>Master Chefs</h5>
                     <p><b>"Cooking is art to show love towards people. Cooking is the ultimate giving"<br>"As chefs, we cook to please people, to nourish people."</b></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
               <div class="service-item rounded pt-3">
                  <div class="p-4">
                     <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                     <h5>Quality Food</h5>
                     <p><b>"Our meal will definitely make you remind of home food because,<br/>We believe in Quality not in Quantity"</b></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
               <div class="service-item rounded pt-3">
                  <div class="p-4">
                     <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                     <h5>Food Court</h5>
                     <p><b>RetroTown arranges different food courts for different type of food,<br/>So customers can enjoy everything at one place</b></p>   
	            </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
               <div class="service-item rounded pt-3">
                  <div class="p-4">
                     <i class="fa fa-3x fa-truck text-primary mb-4"></i>
                     <h5>Home Delivery</h5>
                     <p><b>RetroTown delivers food to customer's requested address on time.<br/> Giving good quality and delicious food is assured by us.</b></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<!-- Service End -->

<!-- Menu Start -->
   <div class="container-xxl py-5">
      <div class="container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Food Menu</h1>
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Most Popular Items</h5>
         </div>
   <!--Starters start-->
   <div class="container-xxl py-5 wow fadeInUp" align="center">
      <div class="container">
         <div class="owl-carousel testimonial-carousel">
		 <?php 
		 include 'connection.php';
		   $select=mysqli_query($con, "SELECT * FROM `categories`");
		         if(mysqli_num_rows($select) > 0){
        while( $row = mysqli_fetch_assoc($select)){
		 ?>
            <div class="testimonial-item bg-transparent border rounded p-4">
               <a href="menu.php">
                  <img src="admin/uploaded_img/<?php echo $row['image']?>" height="200" alt="Categories">
                  <p><h5><?php echo $row['name'];?></h5></p>
               </a>
            </div>
				 <?php }}?>

         </div>
         <i style="color: #FEA116;">
         <p style="padding-top: 50px;">For our Guests with the allergies.Please feel free to make special request. Above prices exclude 10.5% tax and 5% service charges. All our items are freshly made ans might take 20-30 mins during rush hours.</p></i>
      </div>
   </div>
   <!-- Menu End -->
      </div>
   </div>
<!-- Menu End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img\montano.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img\starter.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>RetroTown</h1>
                        <p class="mb-4">RetroTown strives to source local, sustainable and organic when possible. We work hard to source premium ingredients and we cook everything from scratch with love.</p>
                        <p class="mb-4"> We also do our best to pay our employees living wages (tips are shared with all employees, including kitchen staff) and to reduce our environmental footprint wherever we can.</p>
                        <p class="mb-4">Overall, these factors translate to higher menu prices, but we hope that you find value and feel a sense of comfort in knowing that we aim to get better everyday at doing what is important to us.</p>
                        
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        
<!-- Team Start -->
   <div class="container-xxl pt-5 pb-3">
      <div class="container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
         </div>
         <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="team-item text-center rounded overflow-hidden">
                  <div class="rounded-circle overflow-hidden m-4">
                     <img class="img-fluid" src="img/team-1.jpg" alt="">
                  </div>
                  <h5 class="mb-0">Kiran Jethwa</h5>
                  <small>Indian Head chef</small>
                  <div class="d-flex justify-content-center mt-3">
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
               <div class="team-item text-center rounded overflow-hidden">
                  <div class="rounded-circle overflow-hidden m-4">
                     <img class="img-fluid" src="img/team-2.jpg" alt="">
                  </div>
                  <h5 class="mb-0">Vikas Khanna</h5>
                  <small>Continental Head chef</small>
                  <div class="d-flex justify-content-center mt-3">
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
               <div class="team-item text-center rounded overflow-hidden">
                  <div class="rounded-circle overflow-hidden m-4">
                     <img class="img-fluid" src="img/team-3.jpg" alt="">
                  </div>
                  <h5 class="mb-0">Kunal Kapoor</h5>
                  <small>Chinese Head chef</small>
                  <div class="d-flex justify-content-center mt-3">
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
               <div class="team-item text-center rounded overflow-hidden">
                  <div class="rounded-circle overflow-hidden m-4">
                     <img class="img-fluid" src="img/team-4.jpg" alt="">
                  </div>
                  <h5 class="mb-0">Ranveer Brar</h5>
                  <small>Dessert chef</small>
                  <div class="d-flex justify-content-center mt-3">
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<!-- Team End -->

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
					 <small>
						<?php 
							for($k=0;$k<$row['rate'];$k++){
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>