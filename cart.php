<!DOCTYPE html>
<html lang="en">
<?php error_reporting(0);?>
<head>
   <?php
include'connection.php';
      if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $price=$_POST['price'];
   $subtotal=$price * $update_value;
   $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value', total='$subtotal' WHERE id = '$update_id'");
   $user=$_SESSION['name'];
   
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `cart`");
   header('location:cart.php');
}


   ?>
   <link href="css/main.css" rel="stylesheet">
</head>

<body>

<?php
include 'header.php';
include'nav.php';
if($_SESSION['name']){
?>
         <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
               <h1 class="display-3 text-white mb-3 animated slideInDown">Place Your Order</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center text-uppercase">
                     <li class="breadcrumb-item text-white">to enjoy your meal, get meal from retrotown</li>
				  </ol>
               </nav>
            </div>
         </div>
      </div>
<!-- Navbar & Hero End -->


<!-- cart -->
	
    



 
<div class="cart-section mt-100 mb-150">
   <div class="container-xxl">
         <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				<h2 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-bottom: 3%">Billing</h2>
			</div>
		</div>
	</div>
   <div class="container">

   
      <div class="row">
         <div class="col-lg-8 col-md-12">
            <div class="cart-table-wrap">
               <table class="cart-table">
                  <thead class="cart-table-head">
	
                     <tr class="table-head-row">
 <th class="product-remove"><a href="cart.php?delete_all" onclick="return confirm('Do you want to delete all items?');"><i class="far fa-window-close"></i></a></th>
                        <th class="product-image"><b>IMAGE</b></th>
                        <th class="product-name"><b>NAME</b></th>
                        <th class="product-price"><b>PRICE</b></th>
                        <th class="product-quantity"><b>QUANTITY</b></th>
                        <th class="product-total"><b>TOTAL</b></th>
                     </tr>
                  </thead>
			  <?php 
         session_start();
		 $user=$_SESSION["name"];
         $select_cart = mysqli_query($con, "SELECT * FROM `cart` where user='$user'");
         $grand_total = 0;
         $show=mysqli_num_rows($select_cart);
if(!$show)
{
  echo "</br><a href='menu.php'><h1 style='text-align: center' class='display-3 mb-3 animated slideInDown'>Your Cart Is Empty</h1></a>";

}
else{
while($row= mysqli_fetch_assoc($select_cart)){

?>

                    <tbody>
                     <tr class="table-body-row">
                        <td class="product-remove"><a href="cart.php?remove=<?php echo $row['id']; ?>" ><i class="far fa-window-close"></i></a></td>
						<td class="product-image"><img src="admin/uploaded_img/<?php echo $row['image']; ?>" height="50"></td>
                        <td class="product-name"><?php echo $row['name']; ?></td>
                        <td class="product-price">Rs.<?php echo number_format($row['price']); ?></td>
<td>
			<form action="" method="post">
				<input type="hidden" name="user" value="<?php $_SESSION['name'] ?>">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $row['id']; ?>" >
                  <input type="number" name="update_quantity"  value="<?php echo $row['quantity']; ?>" >
			<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                  <input type="submit" value="update" name="update_update_btn">
               </form>   </td>
				  <?php $subtotal= $row['price'] * $row['quantity']; ?>			   
                         <td>Rs. <?php echo $subtotal; ?> /-</form></td>
                     </tr>
<?php
           $grand_total+=$subtotal;  
       
}
}



		 
         ?>
                  </tbody>
               </table>
            </div>
         </div>

         <div class="col-lg-4">
            <div class="total-section">
               <table class="total-table">
                  <thead class="total-table-head">
                     <tr class="table-total-row">
                        <th colspan="2" style="text-align: center"><b>ORDER SUMMARY</b></th>
                        
                     </tr>
                  </thead>
                  <tbody>

                     <tr class="total-data">
                        <td><strong>Total Price: </strong></td>
					<form method="post" action="">
						<input type="hidden" value="<?php echo $grand_total;?>" name="grand_total">
                        <td style="width: 30%">Rs. <?php echo $grand_total; ?> /-</td>
                     </tr>
                     <tr class="total-data">
                        <td><strong>Shipping: </strong></td>
                        <td>Rs. 000/-</td>
                     </tr>
                     <tr class="total-data">						
                        <td><strong>Total amount <br/>(including all taxes & charges) </strong></td>
                        <td>Rs. <?php echo $grand_total; ?> /-</td>
                     </tr>
                     
                  </tbody>
               </table>

               <div>
                       <a href="order.php"> <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#checkoutModal">Go to checkout</button></a>
						<a href="menu.php"><p style="margin-left: 5px;">Continue Shipping !!!</p></a>
               </div>
            </div>

            
         </div>
      </div>
   </div>
</div>

<!-- end cart -->
   <?php
}
else{ echo "<script>alert('Login to proceed'); window.location.href='login.php';</script>";}
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