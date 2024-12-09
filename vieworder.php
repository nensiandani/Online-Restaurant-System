 	<!DOCTYPE html>
<html lang="en">

<head>
   <?php
session_start();
      include 'header.php';
	  include 'connection.php';
if(isset($_GET['deleteall'])){
   $delete_id = $_GET['deleteall'];
    $delete_query = mysqli_query($con, "DELETE FROM `cart` WHERE id= '$delete_id' ") or die('query failed');
   if($delete_query){
      header('location:vieworder.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:vieworder.php');
      $message[] = 'product could not be deleted';
   };
};
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
	$user=$_SESSION['name'];
    $delete_query = mysqli_query($con,"DELETE `orders`, `cart` FROM orders JOIN cart ON orders.first = cart.user WHERE orders.first = '$delete_id'") or die('query failed');
   if($delete_query){
      header('location:vieworder.php');
      $message[] = 'Order has been deleted';
   }else{
      header('location:vieworder.php');
      $message[] = 'Order could not be deleted';
   };
};


      if($_SESSION["name"]){
$c=$_SESSION['name'];
   ?>


	  </head>

<body>
 
<!-- Navbar & Hero Start -->
<?php
include 'nav.php';




?>


      <div class="container-xxl py-5 bg-dark hero-header mb-5">
         <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Your Order</h1>
            <nav aria-label="breadcrumb">
		   <ol class="breadcrumb justify-content-center text-uppercase">
                  <li class="breadcrumb-item text-white">you can see your orders....</li>
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
<?php 
$select=mysqli_query($con, "SELECT * from `orders` where first='$c'");
if(mysqli_num_rows($select)>0){
foreach($select as $rows){

?>
<div style="margin-bottom:1%;margin-left: 2%"> 
 <a href="vieworder.php?delete=<?php echo $rows['first'];?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i>CANCEL ORDER</a>
</div>
<?php }} ?>	
                                <table class="table table-bordered table-hover"  style="text-align: center">
                                    <thead style="background: #404040; color:white;">
                                        <tr>

                                            <th>Item</th>
                                            <th>Quantity</th>
		<th>Unit Price</th>
                                            <th>Total Price</th>
                                            <!--th>Status</th-->
                                            <th>Date</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
			                                    <tbody>
						<?php 
				
$query_res= mysqli_query($con,"select * from cart where user='$c'");						
$show=mysqli_num_rows($query_res);
if(!$show)
{
	echo "<a href='menu.php'><h1 style='text-align: center' class='display-3 mb-3 animated slideInDown'>Place Your Order</h1></a>";
}
							

else{

foreach($query_res as $row)
{
						

?>


                                        <tr>
                                            <td data-column="Item"> <?php echo $row['name']; ?></td>
                                            <td data-column="Quantity"> <?php echo $row['quantity']; ?></td>
						<td data-column="price">Rs. <?php echo $row['price']; ?></td>
                                            <td data-column="price">Rs. <?php echo $row['total']; ?></td>
											
<?php 
$select=mysqli_query($con, "SELECT * from `orders` where first='$c'");
if(mysqli_num_rows($select)>0){
foreach($select as $rows){

?> 
<td data-column="Date"><?php echo $row['date']; ?></td>
<?php }} ?>
                              <td data-column="Action"> <a href="vieworder.php?deleteall=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i>CANCEL</a>
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
</div>
    </section>




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
