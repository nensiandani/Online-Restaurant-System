<!DOCTYPE html>
<html lang="en">
<?php error_reporting(0);?>
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
         <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item text-white">All the information about retrotown is provided here..</li>
               </ol>
            </nav>
         </div>
      </div>
      <!-- Navbar & Hero End -->

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
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/montano.jpg">
                     </div>
                     <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/starter.jpg">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                  <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>RetroTown</h1>
                  <p class="mb-4">RetroTown strives to source local, sustainable and organic when possible. We work hard to source premium ingredients and we cook everything from scratch with love.</p>
                  <p class="mb-4"> We also do our best to pay our employees living wages (tips are shared with all employees, including kitchen staff) and to reduce our environmental footprint wherever we can.</p>
                  <p class="mb-4">Overall, these factors translate to higher menu prices, but we hope that you find value and feel a sense of comfort in knowing that we aim to get better everyday at doing what is important to us.</p>
                  <p class="mb-4">When RetroTown opened it's First restaurant in 2008,the idea was simple : show that food served fast and didn't have to be a "Fast-food" experience.</p>
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
            </div>
         </div>
      </div>
      <div class="container-xxl py-5">
         <div class="container">
            <div class="row g-5 align-items-center">
               <div class="col-lg-6">
                  <div class="row g-3">
                     <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/image1.jpg" style="margin-left: 350%;">
                     </div>
                     <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/pizza_3.jpg" style="margin-top: -15%;margin-left:162%;">
                     </div>
                     <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/pastery.jpg" style="margin-left: 350%; margin-top:-15%;">
                     </div>
                     <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img\image3.jpg" style="margin-left: 137%;">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6" style="margin-right: 500%;margin-top: -35%;">
                  <p class="mb-4">Using high-quality raw ingredients,classic cooking techniques, and distinctive interior design , we brought feature from the realm of the fine dinning to the world of quick service restaurant.</p>
                  <p class="mb-4">Over 15 years later , our devotion to finding the very best ingredients we can-with respect  for animals,farmers,and the environment - is shown through our food with integrity  commitment.</p>
                  <p class="mb-4">And as we grow ,our dedication to creating an exceptional experience for our customers is the natural result of cultivating a culture of genuine , rewarding opportunities for our employees.</p>
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
                     <h5 class="mb-0">Karan Jethwa</h5>
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
   </div>
   <!-- Team End -->
        
   <!-- Footer Start -->
   <?php
      include 'footer.php';
   ?>
   <!-- Footer End -->

   <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

   <!-- JavaScript Libraries -->
   <?php
      include 'javascript.php';
   ?>

   </body>
</html>