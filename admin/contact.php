<?php
 error_reporting(0);
session_start();
	if($_SESSION["nm"]){
include 'connection.php';



if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `contact` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:contact.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:contact.php');
      $message[] = 'product could not be deleted';
   };
};


include 'header.php';

include 'sidebar.php';
include 'navigation.php';

?>

<!--section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new product</h3>
   <input type="text" name="name" placeholder="enter name" class="box" required>
   <input type="number" name="email" min="0" placeholder="enter the email" class="box" required>
   <input type="text" name="sub" min="0" placeholder="enter subjectl" class="box" required>
 <input type="text" name="message" min="0" placeholder="enter message" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section-->

 </br>
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h5 class="mb-4" style="text-align: center; font-family: courier new"><b><i>QUERIES</b><i></h5>


	  <table class="table table-hover" style="text-align: center; font-family: courier new">
                                    <tr>
                                        <th scope="col">Full Name</th>
		<th scope="col">Email</th>
		<th scope="col">Sub</th>
		<th scope="col">Message</th>
		<th colspan=2>Action</th>
                                    </tr>
                                </thead>
<?php
 $query_select="SELECT *from contact";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{
?>    
<body style="font-family: courier new"> 
<form action="contact.php" method="Post">        
<tbody style="padding=left:100px;">
                                    <tr>
		
                            
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
		<td><a href="contact.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a></td>
<?php
}
}
?>
                                    </tr>
		</tbody>

		
		
                           </table>
<section class="edit-form-container">
<?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($con, "SELECT * FROM `contact` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($row = mysqli_fetch_assoc($edit_query)){
   ?>

<form action="" method="post" enctype="multipart/form-data">
      
      <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
      <input type="text" class="box" required name="update_name" value="<?php echo $row['name']; ?>">
      <input type="email" min="0" class="box" required name="update_email" value="<?php echo $row['email']; ?>">
      <input type="text" class="box" required name="update_sub"  value="<?php echo $row['sub']; ?>">
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
