<?php
 error_reporting(0);
session_start();
	if($_SESSION["nm"]){
include 'connection.php';
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `booking` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:booking.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:booking.php');
      $message[] = 'product could not be deleted';
   };
};

/*if(isset($_POST['update_product'])){
   $update_id = $_POST['update_id'];
   $update_full= $_POST['update_full'];
 $update_email = $_POST['update_email'];
   $update_date = $_POST['update_date'];
   $update_time = $_POST['update_time'];
   $update_people = $_POST['update_people'];
 $update_phone= $_POST['update_phone'];
   $update_message = $_POST['update_message'];

   

   $update_query = mysqli_query($con, "UPDATE `booking` SET full = '$update_full', email = '$update_email' , date = '$update_date' ,  time = '$update_time' ,  people = '$update_people' ,  phone = '$update_phone' ,  message= '$update_message'  WHERE id = '$update_id'");

   if($update_query){
    
      $message[] = 'product updated succesfully';
      header('location:booking.php');
   }
else{
      $message[] = 'product could not be updated';
      header('location:booking.php');
   }

}*/




include 'header.php';
include 'sidebar.php';

include 'navigation.php';
?>

 </br>
 </br>
 <body style="font-family: courier new">
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h4 class="mb-4" style="text-align: center; font-family: courier new"><b><i>RESERVATIONS</i></b></h4>
  <table class="table table-hover" style="text-align: center; font-family: courier new">
                                <thead >
                                    <tr>
		
                                        <th scope="col">Full Name</th>
		<th scope="col">Email</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
		<th scope="col">No. of People </th>
		<th scope="col">Phone</th>
		<th scope="col">Message</th>
		<th colspan=2>Action</th>
<th></th>
<th></th>
                                    </tr>
                                </thead>
                              <?php
$query_select="SELECT *from booking";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{

?>


<tbody style="padding=left:100px;">
                                    <tr style="text-align:center">
		
                                        
                                        <td><?php echo $row['full']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['time']; ?></td>
                                        <td><?php echo $row['people']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
		<td><a href="booking.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a></td>
                                                                                                             
</tr>

<?php
}
}
?>
</tbody>

                            </table>


<section class="edit-form-container">
<?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($con, "SELECT * FROM `booking` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($row = mysqli_fetch_assoc($edit_query)){
   ?>

<form action="" method="post" enctype="multipart/form-data">
      
      <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
      <input type="text" class="box" required name="update_full" value="<?php echo $row['full']; ?>">
      <input type="email" min="0" class="box" required name="update_email" value="<?php echo $row['email']; ?>">
      <input type="date" class="box" required name="update_date"  value="<?php echo $row['date']; ?>">
      <input type="time" class="box" required name="update_time" value="<?php echo $row['time']; ?>">
      <input type="int" class="box" required name="update_people" value="<?php echo $row['people']; ?>">
      <input type="int" class="box" required name="update_phone" value="<?php echo $row['phone']; ?>">
      <input type="text" class="box" required name="update_message"  value="<?php echo $row['message']; ?>">

      <input type="submit" value="update the prodcut" name="update_product" class="btn btn-primary">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">		
   </form>

<?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>



                        </div>
                    </div>




<?php
	}  
	    else {
                echo "<script>alert('Sign in to proceed'); window.location.href='../login.php';</script>";

    }
include 'footer.php';

include 'javascript.php';
?>						