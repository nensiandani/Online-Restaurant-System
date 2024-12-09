<?php
session_start();
 error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
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
         <h1 class="display-3 text-white mb-3 animated slideInDown">FeedBack</h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
               <li class="breadcrumb-item text-white">Your Feedback awaits RetroTown to improve services..</li>
            </ol>
         </nav>
      </div>
      <div class="container-xxl">
         <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
               <div class="col-md-6" style="margin-left: 26%;">
                     <form style="margin-left: 0%;" method="Post" action="processfeed.php">
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" value="<?php echo $row['name']?>"id="name" placeholder="First Name" name="first">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" value="<?php echo $row['phone']?>" id="number" placeholder="Phone Number" name="phone">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" id="email" value="<?php echo $row['email'] ?>" placeholder="Email" name="email">
                           </div>
                        </div>
                        <div class="col-12" >
                           <h2 class="section-title ff-secondary text-center text-primary fw-normal">Your Experience with RetroTown</h2>
                           <div class="form-floating"  style="padding-top: 20px;">
                              <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" verify name="message" required/></textarea>
                           </div>
                        </div>
                        <div align="center" style="padding-top:20px;">
                           <h2 class="section-title ff-secondary text-center text-primary fw-normal">Would like to rate RetroTown ?</h2>
                        </div>
                        <div class="rating" >
                           <input type="radio" id="star5" name="rate" value="5" required / ><label for="star5"></label>
                           <input type="radio" id="star4" name="rate" value="4" required /><label for="star4"></label>
                           <input type="radio" id="star3" name="rate" value="3" required /><label for="star3"></label>
                           <input type="radio" id="star2" name="rate" value="2" required /><label for="star2"></label>
                           <input type="radio" id="star1" name="rate" value="1" required /><label for="star1"></label>
                        </div>
                        <div class="col-12" style="padding-top: 20px;">
                           <button class="btn btn-primary w-100 py-3" type="submit" name="send">Send FeedBack</button>
                        </div>
                     </div>
                  </form>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Navbar & Hero End -->
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