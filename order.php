<?php
session_start();
 error_reporting(0);
if($_SESSION['name']){
	
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
      <?php
		 		error_reporting(0);
      ?>
   <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <link href="css/main.css" rel="stylesheet">


<style>
.myDiv{
	display:none;
}  
#showCash{
    border:1px solid blue;
    padding:10px;
  width: 35%;
  margin-left: 5%;
  text-align: center;
margin-top: 1%;
}
#showCard{
margin-top: 1%;
    border:1px solid blue;
  width: 45%;
    padding:10px;
margin-left: 20%;
}
#showUPI{
margin-top: 1%;
   width: 30%;
    border:1px solid blue;
    padding:10px;
margin-left: 45%;
}
</style>

<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script>
   </head>

   <body>

<?php
         include 'header.php';
         include 'nav.php';
include 'connection.php';
$user=$_SESSION['name'];
     		  $sql=mysqli_query($con, "SELECT * from `register` where name='$user'");
		  if(mysqli_num_rows($sql)>0){
			  while($row=mysqli_fetch_assoc($sql)){
   ?>



   <div class="container-xxl py-5 bg-dark hero-header mb-5">
      <div class="container text-center my-5 pt-5 pb-4">
         <h1 class="display-3 text-white mb-3 animated slideInDown">Checkout</h1>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
               <li class="breadcrumb-item text-white"></li>
			   
            </ol>
         </nav>
      </div>
	  </div>
<!-- cart -->
<div class="cart-section mt-100 mb-150">
   <div class="container-xxl">
         <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				<h3 class="section-title ff-secondary text-center text-primary fw-normal" style="margin-bottom: 3%">Order Details</h3>
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
                        <th class="product-image"><b>CUSTOMER DETAILS</b></th>
                     </tr>
                  </thead>
                  <tbody>

               </table>
            </div>


			                     <form style="" method="Post" action="processorder.php">
                     <div class="row g-3"  style="padding-top: 20px;">

                          <div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" id="name" value="<?php echo $row['name'];?>" placeholder="First Name" name="first" >
		</div>
                        </div>
<div class="col-md-6">
                           <div class="form-floating">
                              <input type="hidden" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $row['email'];?>" required/>
	               </div>
                        </div>           
<?php }} ?>
<div class="col-12" style="margin: 2%"><label>Payment Mode: </label>
   <input style="margin-left: 5%;"type="radio" name="mod" value="Cash" required/> Cash On Delivery
   <input style="margin-left: 5%;"type="radio" name="mod" value="Card" required/> Credit/ Debit Card
   <input style="margin-left: 5%;"type="radio" name="mod" value="UPI" required/> UPI
   <div id="showCash" class="myDiv">
      <form id="MyForm" action="" method="post">
         <h5>You have selected payment type as 'Cash on Delivery'.</h5>
      </form>
   </div>
   <div id="showCard" class="myDiv">
      <form id="MyForm" method="post"><h6>
  		<div><label>Name on Card:</label>
		<input type="text" name="name" placeholder="Name as per card" value="<?php echo $_POST['name'];?>"required/></br>
  		</div><div><label>Card No.:</label>
		<input type="tel" name="card_no" placeholder="XXXXXXXXXXXX" maxlength="16" minlength="16" value="<?php echo $_POST['card_no'];?>"required/></br>
  		</div><div><label>CVV:</label>
		<input type="tel" name="cvv" placeholder="XXX" value="<?php echo $_POST['cvv'];?>"style="width: 30%;" maxlength="3" minlength="3" required/></br>
  		<center><input type="submit"></center></h6>
	</form>
</div>
<input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
<input type="hidden" value="<?php echo $_POST['card_no'];?>" name="card_no">
<input type="hidden" value="<?php echo $_POST['cvv'];?>" name="cvv">
<div id="showUPI" class="myDiv">
	<form id="MyForm" action="" method="post"><h6>
  		<label>Enter UPI ID:</label>
		<input type="text" name="upi_id" placeholder="UPI ID" value="<?php echo$_POST['upi_id'];?>"/></br>
  		<center><input type="submit"></center>
  	</h6>
	</form>
<input type="hidden" value="<?php echo $_POST['upi_id']; ?>" name="upi_id">
</div>
</div>
                          <div class="col-md-6">
                           <div class="form-floating">
                              <input type="tel" class="form-control" id="number" placeholder="Phone Number" name="phone" minlength="10" maxlength="10" required>
                              <label for="number">Phone Number</label>
                           </div>
                        </div>
<div class="col-md-6">
                           <div class="form-floating">
                              <input type="tel" class="form-control" id="number" placeholder="Phone Number" name="zipcode" minlength="6" maxlength="6" required/>
                              <label for="number">Zipcode</label>
                           </div>
                        </div>
	
                           
	 <div class="col-12" >
                      
                           <div class="form-floating"  style="padding-top: 9px;">
                              <textarea class="form-control" placeholder="Address" id="message" style="height: 150px" verify name="address" required/></textarea>
	<label for="address">Address</label>
</div>

</div>
<?php 
   $select_cart = mysqli_query($con, "SELECT * FROM `cart` where user='$user'");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($row= mysqli_fetch_assoc($select_cart)){
				$subtotal=$row['total'];
				$grandtotal+=$subtotal;
?>
<input type="hidden" name="grandtotal" value="<?php echo $grandtotal; ?>">
<?php }} ?>	
<button type="submit" name="order" style="width: 30%; padding: 10px; border-radius: 10px; color: #fff; background-color: #FEA116; margin-left: 35%">Order Now</button>
		 
	</div>
</form>

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
						
                        <td><?php echo "Rs. ".$grandtotal;
?></td>
                     </tr>
                     <tr class="total-data">
                        <td><strong>Shipping: </strong></td>
                        <td>Rs. 000/-</td>
                     </tr>
                     <tr class="total-data">
                        <td><strong>Total amount <br/>(including all taxes & charges) </strong></td>
                        <td> <?php echo "Rs. ".$grandtotal;
?></td>
                     </tr>
		 
                  </tbody>
               </table>

            
         </div>
      </div>
   </div>
</div>
<!-- end cart -->
</div>
</div>
</div>

<?php	
	
  }
	  else {echo "<script>alert('Sign in to proceed'); window.location.href='login.php';</script>";}
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

