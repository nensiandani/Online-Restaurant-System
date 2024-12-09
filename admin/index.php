<?php
 error_reporting(0);
session_start();
	if($_SESSION["nm"]){
	include 'header.php';
	include 'connection.php';
	include 'sidebar.php';
	include 'navigation.php';
	
?>
<body style="font-family: courier new">
    <!-- Overview Start -->
    <div class="container-fluid pt-4 px-4">
       <div class="row g-4"  style="text-align: center">
          <div class="col-sm-6 col-xl-3">
			<a href="registered.php">
             <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user-plus fa-3x text-primary"></i>
                <div class="ms-3">
                   <p class="mb-2"><b><i>TOTAL USERS</i></b></p>
                   <?php
                      $sql="SELECT * FROM register";
                      if($result=mysqli_query($con,$sql))
                      {
						  $rowcount=mysqli_num_rows($result);
						  echo '<h1>'.$rowcount.'</h1>';
                      }
                   ?>
               </div>
            </div></a>
         </div>
         <div class="col-sm-6 col-xl-3">
		<a href="category.php">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-bars me-2 fa-3x text-primary "></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>CATEGORIES</i></b></p>
                  <?php
				     $sql="SELECT * FROM categories";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }
                  ?>
               </div>
            </div></a>
         </div>
         <div class="col-sm-6 col-xl-3">
		<a href="booking.php">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-table fa-3x text-primary"></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>RESERVATIONS</i></b></p>
                  <?php
					 $sql="SELECT * FROM booking";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }
                  ?>
               </div>
            </div></a>
         </div>
         <div class="col-sm-6 col-xl-3">
		<a href="feedback.php">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-comments fa-3x text-primary"></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>FEEDBACKS</i></b></p>
				  <?php
				     $sql="SELECT * FROM feedback";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }
				  ?>
			   </div>
            </div></a>
         </div>
<div class="col-sm-6 col-xl-3">
		<a href="contact.php">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-phone-alt me-2l fa-3x text-primary "></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>QUERIES</i></b></p>
                  <?php
				     $sql="SELECT * FROM contact";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }
                  ?>
               </div>
            </div></a>
         </div>

<div class="col-sm-6 col-xl-3">
		<a href="menu.php">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-concierge-bell fa-3x text-primary "></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>MENU</i></b></p>
                  <?php
				     $sql="SELECT * FROM menu";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }
                  ?>
               </div>
            </div></a>
         </div>
<div class="col-sm-6 col-xl-3">
		<a href="allorders.php">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-cart-plus me-2 fa-3x text-primary "></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>ORDERS</i></b></p>
                  <?php
				     $sql="SELECT * FROM orders";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }
                  ?>
               </div>
            </div></a>
         </div>

         <div class="col-sm-6 col-xl-3">
		<a href="gallery.php">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-images fa-3x text-primary "></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>GALLERY</i></b></p>
                  <?php
				     $sql="SELECT * FROM gallery";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }
                  ?>
               </div>
            </div></a>
         </div>



      </div>
   </div>
   <!-- Overview End -->
   
   <!--Reservation Start-->
   <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
      <div class="bg-secondary rounded h-100 p-4">
         <h6 class="mb-4"   style="text-align: center;"><b><i>RESERVATIONS</i> </b></h6>
		
		 <table class="table table-hover"   style="text-align: center;">
            <thead>
               <tr>
                
                  
                  <th scope="col">Full Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Date</th>
                  <th scope="col">Time</th>
                  <th scope="col">No. of People </th>
                  <th scope="col">Mobile No.</th>
                  <th scope="col">Request</th>
               </tr>
            </thead>
            <?php
			   $query_select="SELECT *from booking";
			   $query_run=mysqli_query($con,$query_select);
			   if(mysqli_num_rows($query_run) > 0){
				   foreach($query_run as $row){
				   ?>
				   <tbody style="padding=left:100px;">
				      <tr>
				       
				  
				         <td><?php echo $row['full']; ?></td>
				         <td><?php echo $row['email']; ?></td>
				         <td><?php echo $row['date']; ?></td>
				         <td><?php echo $row['time']; ?></td>
				         <td><?php echo $row['people']; ?></td>
				         <td><?php echo $row['phone']; ?></td>
				         <td><?php echo $row['message']; ?></td>
				      </tr>
				   <?php
			       }
			   }
			?>
         </table>
      </div>
   </div>
   <!--Reservation End-->
   
   <!--Contact Us Start-->
   <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
      <div class="bg-secondary rounded h-100 p-4">
         <h6 class="mb-4" style="text-align: center"><b><i>USER QUERIES</i></b> </h6>
        
         <table class="table table-hover"   style="text-align: center;">
         <thead>
            <tr>
        
               
               <th scope="col">Full Name</th>
               <th scope="col">Email</th>
               <th scope="col">Subject</th>
               <th scope="col">Query</th>
            </tr>
         </thead>
         <?php
		    $query_select="SELECT *from contact";
		    $query_run=mysqli_query($con,$query_select);
		    if(mysqli_num_rows($query_run) > 0){
				foreach($query_run as $row){
				?>
				<tbody style="padding=left:100px;">
				   <tr>
				     
				      
                      <td><?php echo $row['name']; ?></td>            
				      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['subject']; ?></td>
                      <td><?php echo $row['message']; ?></td>
				   </tr>
				   <?php
				}
	        }
	     ?>
	  </table>
   </div>
   <!--Contact Us End-->
   
   <!--Feedback Start-->
   <div class="col-sm-12 col-xl-12" style="margin-top: 5%;">
      <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4" style="text-align: center"><b><i>USER FEEDBACKS</i></b></h6>

        <table class="table table-hover"   style="text-align: center;">
           <thead >
              <tr>

                 
                 <th scope="col">Full Name</th>
                 
                 <th scope="col">Mobile No.</th>
                 <th scope="col">Email</th>
                 <th scope="col">Date </th>
                 <th scope="col">Message</th>
                 <th scope="col">Rating</th>
              </tr>
           </thead>
           <?php
		      $query_select="SELECT *from feedback";
			  $query_run=mysqli_query($con,$query_select);
			  if(mysqli_num_rows($query_run) > 0){
				  foreach($query_run as $row){
				  ?>
				  <tbody style="padding=left:100px;">
                     <tr>

                        
                        <td><?php echo $row['first']." ".$row['last']; ?></td>
                        
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['rate']; ?></td>
                     </tr>
                  <?php
				  }
			  }
		   ?>
		   </table>
        </div>
     </div>
     <!--Feedback End-->
	 
	 <!--Registration Start-->
	 <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
        <div class="bg-secondary rounded h-100 p-4">
           <h6 class="mb-4" style="text-align: center"><b><i>REGISTERED USERS</i></b></h6>

           <table class="table table-hover"  style="text-align: center;">
              <thead >
                 <tr>
                    
                    <th scope="col">Full Name</th>
                    <th scope="col">Mobile No.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                 </tr>
              </thead>
              <?php
			     $query_select="SELECT *from register";
				 $query_run=mysqli_query($con,$query_select);
				 if(mysqli_num_rows($query_run) > 0){
					 foreach($query_run as $row){
			         ?>
			         <tbody style="padding=left:100px;">
                        <tr>

                    
                           <td><?php echo $row['name']; ?></td>
                           <td><?php echo $row['phone']; ?></td>
                           <td><?php echo $row['email']; ?></td>
                           <td><?php echo $row['pw']; ?></td>
                        </tr>
                        <?php
                     }
                  }
               ?>
            </tbody>
         </table>
      </div>
   </div>
   <!--Registration End-->
<?php
	}  
	    else {
                echo "<script>alert('Sign in to proceed'); window.location.href='../login.php';</script>";

    }
   include 'footer.php';
   include 'javascript.php';
?>