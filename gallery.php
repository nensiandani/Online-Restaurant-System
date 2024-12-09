<!DOCTYPE html>
<html lang="en">
 <?phperror_reporting(0);?>
<head>
   <?php
      include 'header.php';
	  include 'connection.php';
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Gallery</h1>
            <nav aria-label="breadcrumb">
		   <ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item text-white">Retrotown adds gallery To get you more excited to visit our place..</li>
		   </ol>
            </nav>
         </div>
      </div>
   </div>
<!-- Navbar & Hero End -->
<!-- gallery start -->
<body style="background-color: black">
<?php
      
      $select_images = mysqli_query($con, "SELECT * FROM `gallery` ");
      if(mysqli_num_rows($select_images) > 0){
        while( $row = mysqli_fetch_assoc($select_images)){
      ?>  

		<img src="admin/uploaded_img/<?php echo $row['g_img']; ?>" alt="" style="border: solid 3px white; margin:1.2%;margin-bottom: 0%; width: 30%; border-radius: 30%">
	</div>
	
	<?php };};?>      

	
<!--gallery end -->

<!--Footer Start-->
   <?php
	include 'footer.php';
    ?>
<!--Footer End-->

<!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
   </div>

<!--Javascript Libraries-->
<?php
	include 'javascript.php';
?>

</body>
</html>

