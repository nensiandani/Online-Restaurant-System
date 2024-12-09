<?php
error_reporting(0);
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php
      include 'header.php';
   ?>
   </head>

   <body>
   <?php
      if($_SESSION['name']){
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
         <h1 class="display-3 text-white mb-3 animated slideInDown">Reserve Your Seats</h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
               <li class="breadcrumb-item text-white">To get best view and place reserve your seats with retrotown</li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- Navbar & Hero End -->

   <!-- Reservation Start -->
      <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
         <div class="row g-0">
            <div class="col-md-6">
               <div class="video"></div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
               <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                  <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                  <h1 class="text-white mb-4">Book A Table Online</h1>
                  <form method="Post" action="processbook.php">
                     <div class="row g-3">
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" value="<?php echo $row['name']?>" id="name" placeholder="first Name" name="full" required/>
                              
                           </div>
                        </div>
  <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" value="<?php echo $row['phone']; ?>" id="number" placeholder="number" name="phone" required/ >
                            
                           </div>
                        </div>
                      
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" value="<?php echo $row['email'] ?>" id="email" placeholder="your email" name="email" required/>
                           
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-floating">
                              <input type="date" class="form-control" id="name" placeholder="date" name="date" required >
                              <label for="name">Date</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-floating date" id="date3" data-target-input="nearest">
                              <input type="time" class="form-control datetimepicker-input" id="time" placeholder="time" name="time" required  />
                              <label for="datetime">Time</label>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="number" class="form-control" id="number" placeholder="number" name="people" required >
                              <label for="number">No. Of People</label>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-floating">
                              <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px" name="message" required ></textarea>
                              <label for="message">Special Request</label>
                           </div>
                        </div>
                        <div class="col-12">
                           <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Book Now</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content rounded-0">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="ratio ratio-16x9">
                     <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
   <!-- Reservation end -->
   <?php
	  };};
      }  
      else
      {
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

   <!-- JavaScript Libraries -->
   <?php
     include 'javascript.php';
   ?>
   
   </body>
</html>