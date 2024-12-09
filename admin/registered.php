<?php
 error_reporting(0);
session_start();
	if($_SESSION["nm"]){
include 'connection.php';
include 'header.php';
include 'sidebar.php';
include 'navigation.php';
?>

 </br>
 </br>
 <body style="font-family: courier new">
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h5 class="mb-4" style="text-align: center"><b><i>REGISTERED USER</i></b></h5>


<table class="table table-hover" style="text-align: center">


		 <thead >
                                    <tr>
                                        
                                        <th scope="col">Full Name</th>
		<th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
<?php
$query_select="SELECT *from register";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{

?>
<tbody style="padding=left:100px;">
                                    <tr>

                    
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
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
      $edit_query = mysqli_query($con, "SELECT * FROM `register` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($row = mysqli_fetch_assoc($edit_query)){
   ?>

<form action="" method="post" enctype="multipart/form-data">
      
      <input type="hidden" name="update_id" value="<?php echo $row['id']; ?>">
      <input type="text" class="box" required name="update_name" value="<?php echo $row['name']; ?>">
      <input type="number" class="box" required name="update_phone" value="<?php echo $row['phone']; ?>">
      <input type="email" min="0" class="box" required name="update_email" value="<?php echo $row['email']; ?>">
      <input type="text" class="box" required name="update_pw"  value="<?php echo $row['pw']; ?>">
      <input type="submit" value="Update" name="update_product" class="btn btn-primary">
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