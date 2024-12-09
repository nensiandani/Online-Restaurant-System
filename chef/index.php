<?php
 error_reporting(0);
session_start();
	if($_SESSION["cf"]){
	include 'header.php';
	include 'connection.php';
	include 'sidebar.php';
	include 'navigation.php';
	
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con,"DELETE `orders`, `cart` FROM orders JOIN cart ON orders.first = cart.user WHERE orders.first = '$delete_id'");
   if($delete_query){
      header('location:allorders.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:allorders.php');
      $message[] = 'product could not be deleted';
   };
};

?>
<body style="font-family: courier new">
<div class="container-fluid pt-4 px-4">
       <div class="row g-4"  style="text-align: center">
          
<!--div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
               <i class="fa fa-cart-plus me-2 fa-3x text-primary "></i>
               <div class="ms-3">
                  <p class="mb-2"><b><i>ORDERS</i></b></p>
                  <?php
				     /*$sql="SELECT * FROM orders";
					 if($result=mysqli_query($con,$sql)){
						 $rowcount=mysqli_num_rows($result);
						 echo '<h1>'.$rowcount.'</h1>';
					 }*/
                  ?>
               </div>
            </div>
         </div-->

</div>
</div>

<!--order Start-->
   <div class="col-sm-12 col-xl-12" style="margin-top: 5%">
      <div class="bg-secondary rounded h-100 p-4">
       
		
	 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h5 class="mb-4"style="text-align: center; font-family: courier"><b><i>ALL ORDERS </i></b></h5>
		
						  <table class="table table-hover" style="text-align: center; font-family: courier new">
                                <thead >
                                    <tr>
                                        <th scope="col">NAME</th>
                                        <th scope="col">ADDRESS</th>
		
                                     
                                        <th scope="col">DATE</th>
                                        <th scope ="col"colspan="2">ACTION</th>
<th></th>
                                    </tr>
                                </thead>

  <tbody style="padding=left:100px;">
                                    <tr>

<?php
$query_select="SELECT *from orders";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
	foreach($query_run as $row)
{
?>	
		 <td><?php echo $row['first']; ?></td>
		<td><?php echo $row['address']; ?></td>                                          
                                        <td><?php echo $row['date']; ?></td>                                         
										<td><a href="eachorder.php?view=<?php echo $row['first'];?>"><i class="fa fa-eye"></i> View</td>
		   <td><a href="index.php?delete=<?php echo $row['first']; ?>" class="delete-btn" onclick="return confirm('Do you want to delete this order?');"> <i class="fas fa-trash"></i> Delete </a></td>
		</tr>	
    <?php
}
}


?>


                 


                                </tbody>
 
                            </table>

                        </div>
                    </div>
					</div>




      </div>
   </div>
   <!--order End-->
   



   <?php
	}  
	    else {
                echo "<script>alert('Sign in to proceed'); window.location.href='../login.php';</script>";

    }
  
   include 'javascript.php';
?>