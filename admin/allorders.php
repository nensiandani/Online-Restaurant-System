<html>
<?php error_reporting(0);?>
<body style="font-family: courier new">
<?php
session_start();
	if($_SESSION["nm"]){

include 'connection.php';
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE `orders`, `cart` FROM orders JOIN cart ON orders.first = cart.user WHERE orders.first = '$delete_id'") or die('query failed');
   if($delete_query){
      header('location:allorders.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:allorders.php');
      $message[] = 'product could not be deleted';
   };
};
include 'header.php';
include 'sidebar.php';
include 'navigation.php';
?>

 </br>
 </br>
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded p-4">
                            <h5 class="mb-4"style="text-align: center; font-family: courier"><b><i>ALL ORDERS </i></b></h5>
		
						  <table class="table table-hover" style="text-align: center; font-family: courier new">
                                <thead >
                                    <tr>
                                        <th scope="col">NAME</th>
                                        <th scope="col">ADDRESS</th>
                                        <th scope="col">PHONE</th>
                                        <th scope="col">DATE</th>
					<th scope="col">PAYMENT MODE</th>
					<th scope="col">UPI Id</th>
					<th scope="col">NAME ON CARD</th>
					<th scope="col">CARD NUMBER</th>
					<th scope="col">CVV</th>
                                        <th scope ="col" colspan="2">ACTION</th>
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
		<td><?php echo $row['phone']; ?></td>
               <td><?php echo $row['date']; ?></td>        
               <td><?php echo $row['payment']; ?></td>        
		<td><?php echo $row['upi_id']; ?></td>
		<td><?php echo $row['card_nm']; ?></td>
		<td><?php echo $row['card_no']; ?></td>
		<td><?php echo $row['cvv']; ?></td>
<td><a href="eachorder.php?view=<?php echo $row['first'];?>"><i class="fa fa-eye"></i> View</td>
		   <td><a href="allorders.php?delete=<?php echo $row['first']; ?>" class="delete-btn" onclick="return confirm('Do you want to delete this order?');"> <i class="fas fa-trash"></i> Delete </a></td>
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




<?php
  }
  else{
	  echo "<script>alert('Sign in to proceed.'); window.href.location('../login.php');</script>";
  }
include 'footer.php';

include 'javascript.php';
?>