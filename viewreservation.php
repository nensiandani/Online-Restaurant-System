<!DOCTYPE html>
<html lang="en">

<head>
   <?php
session_start();
      include 'header.php';
	  include 'connection.php';
if(isset($_GET['deleteall'])){
   $delete_id = $_GET['deleteall'];
    $delete_query = mysqli_query($con, "DELETE FROM `booking` WHERE id= '$delete_id' ") or die('query failed');
   if($delete_query){
      header('location:viewreservation.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:viewreservation.php');
      $message[] = 'product could not be deleted';
   };
};

      if($_SESSION["name"]){
		  $C=($_SESSION["name"]);

   ?>


	  </head>

<body>
 
<!-- Navbar & Hero Start -->
<?php
include 'nav.php';




?>


      <div class="container-xxl py-5 bg-dark hero-header mb-5">
         <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Your Reservations</h1>
            <nav aria-label="breadcrumb">
		   <ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item text-white">you can see your reservations....</li>
		   </ol>
            </nav>
         </div>
      </div>
   </div>
<!-- Navbar & Hero End -->
<div>
	
  <section class="restaurants-page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div class="col-xs-12">
                        <div class="bg-gray">
                            <div class="row">
								
                                <table class="table table-bordered table-hover"  style="text-align: center">
                                    <thead style="background: #404040; color:white;">
                                        <tr>

                                            <th>Name</th>
                                            <th>Email</th>
											<th>Date</th>
                                            <th>Time</th>
                                            
                                            <th>People</th>
                                            <th>Phone</th>
						<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								
<?php 
				
$query_res= mysqli_query($con,"select * from booking WHERE full='$C'");						
$show=mysqli_num_rows($query_res);
if(!$show)
{
	echo "<a href='booking.php'><h1 style='text-align: center' class='display-3 mb-3 animated slideInDown'>Place Your Reservations</h1></a>";

}
else{
	
foreach($query_res as $row)
{
						
							?>
  
                                        <tr>
                                            <td data-column="Item"> <?php echo $row['full']; ?></td>
                                            <td data-column="Quantity"> <?php echo $row['email']; ?></td>
		       <td data-column="price"><?php echo $row['date']; ?></td>
                                            <td data-column="price"><?php echo $row['time']; ?></td>
		     <td data-column="price"><?php echo $row['people']; ?></td>
		    <td data-column="price"><?php echo $row['phone']; ?></td>
                              <td data-column="Action"> <a href="viewreservation.php?deleteall=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to cancel your reservation?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i>CANCEL</a>
</td>
                                        </tr>


<?php }} ?>




                                    </tbody>

                                </table>
</form>

                            </div>

                        </div>



                    </div>



                </div>
            </div>
    </div>
    </section>
			<div>
				<br/><h5 style="text-align:center"><i><u>Currently to make any changes to your reservations, Contact the restaurant.</u></i></h5>
			</div>


<?php

	}  
	    else {
                echo "<script>alert('Sign in to proceed'); window.location.href='login.php';</script>";

    }
    ?>


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
