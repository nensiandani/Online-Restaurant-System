<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head
   <?php
      include 'header.php';
   ?>
</head>

<body>
 <?php
    if($_SESSION["name"]){
		include 'connection.php';
		$user=$_SESSION['name'];
		$sql=mysqli_query($con, "SELECT * from `register` where name='$user'");
		if(mysqli_num_rows($sql)>0){
		  while($row=mysqli_fetch_assoc($sql)){
  ?>
<!-- Navbar & Hero Start -->
   <?php
		include 'nav.php';
   ?>
         <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
               <h1 class="display-3 text-white mb-3 animated slideInDown">Talk to Us</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center text-uppercase">
                     <li class="breadcrumb-item text-white">Any kind of query for Retrotown. contact us here...</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
<!-- Navbar & Hero End -->

<!-- Contact Start -->
   <div class="container-xxl py-5">
      <div class="container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
            <h1 class="mb-5">Contact For Any Query</h1>
         </div>
         <div class="row g-4">
            <div class="col-12">
               <div class="row gy-4">
                  <div class="col-md-4">
                     <h5 class="section-title ff-secondary fw-normal text-start text-primary">Booking</h5>
                     <p><i class="fa fa-envelope-open text-primary me-2"></i>reservation@gmail.com</p>
                  </div>
                  <div class="col-md-4">
                     <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                     <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                  </div>
                  <div class="col-md-4">
                     <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                     <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s" >
               <iframe class="position-relative rounded w-100 h-100"  src="img/contact_img.png" ></iframe>
            </div>
            <div class="col-md-6">
               <div class="wow fadeInUp" data-wow-delay="0.2s">
                  <form action="processcon.php" method="Post">
                     <div class="row g-3">
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" value="<?php echo $row['name']; ?>" id="name" placeholder="Your Name" name="name">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" id="email" placeholder="Your Email" value="<?php echo $row['email'];?>"name="email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-floating">
                              <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required/>
                              <label for="subject">Subject: </label>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" varify name="message" required/></textarea>
                              <label for="message">Message: </label>
                           </div>
                        </div>
                        <div class="col-12">
                           <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Send Message</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
<!-- Contact End -->
<?php
		};};
	}  
	    else {
                echo "<script>alert('Sign in to proceed'); window.location.href='login.php';</script>";

    }
    ?>

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