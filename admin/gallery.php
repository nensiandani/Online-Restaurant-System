<?php
 error_reporting(0);
session_start();
	if($_SESSION["nm"]){

include'connection.php';

if(isset($_POST['add_image'])){
    $pro_id = $_POST['pro_id'];
    $pro_nm = $_POST['pro_nm'];
    $pro_img = $_FILES['pro_img']['name'];
    $pro_img_tmp_name = $_FILES['pro_img']['tmp_name'];
    $pro_img_folder = 'uploaded_img/'.$pro_img;
 
    $insert_qry=mysqli_query($con,"INSERT INTO `gallery`(id,g_name,g_img)VALUES ('$pro_id','$pro_nm','$pro_img')")or die('query failed');

    if($insert_qry){
        move_uploaded_file( $pro_img_tmp_name,$pro_img_folder);
        header('location:gallery.php');
        $message[] = 'photo add succesfully';
     }else{
        $message[] = 'could not add the photo';
     }
  };

  if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `gallery` WHERE id = $delete_id ") or die('query failed');    
    if($delete_qry){
       header('location:gallery.php');
       $message[] = 'photo has been deleted';
    }else{
       header('location:gallery.php');
       $message[] = 'photo could not be deleted';
    };
 };

 include 'header.php';
 include 'sidebar.php';
 include 'navigation.php';
?>

</br>
</br>
<body style="font-family: courier new">
<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>Want to add Image</h3>
   <input type="text" name="pro_nm" placeholder="Name" class="box" required>
    <input type="file" name="pro_img" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="Add Image" name="add_image" class="btn">
</form>
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h4 class="mb-4" style="text-align: center; font-family: courier new"><b><i>IMAGES</i></b></h4>
		
						  <table class="table table-hover" style="text-align: center">
                                <thead >
                                    <tr>
			
			
			<th>Product_image</th>
            <th>Product_name</th>
           
            <th>Action</th>
			
                                    </tr>
                                </thead>
								<?php
$query_select="SELECT *from gallery";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{

?>
<tbody style="padding=left:100px;">
                                   <tr>
          
           
			
			 <td><img src="uploaded_img/<?php echo $row['g_img'];?>" height="150" width="150" alt=""></td>
			 <td><?php echo $row['g_name']; ?></td>
               <td><a href="gallery.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a></td>
         </tr>

<?php
}
}
?>
                              
                            </table>

   





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