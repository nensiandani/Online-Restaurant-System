<?php
 error_reporting(0);
session_start();
	if($_SESSION["nm"]){
include 'connection.php';

if(isset($_POST['add_category'])){
   $category_name = $_POST['category_name'];
   //$category_price = $_POST['category_price'];
   $category_image = $_FILES['category_image']['name'];
   $category_image_tmp_name = $_FILES['category_image']['tmp_name'];
   $category_image_folder = 'uploaded_img/'.$category_image;

   $insert_query = mysqli_query($con, "INSERT INTO `categories`(name,image) VALUES('$category_name','$category_image')") 
   or die('query failed');

   if($insert_query){
      move_uploaded_file($category_image_tmp_name, $category_image_folder);
	  header('location:category.php');
      $message[] = 'category added succesfully';
   }else{
      $message[] = 'could not add the category';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `categories` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:category.php');
      $message[] = 'category has been deleted';
   }else{
      header('location:category.php');
      $message[] = 'category could not be deleted';
   };
};


//$id = $_GET['edit'];

//$id = $_GET['update_category'];

if(isset($_POST['update_category'])){
	$category_id=$_POST['$category_id'];
   $category_name = $_POST['category_name'];
   //$category_price = $_POST['category_price'];
   $category_image = $_FILES['category_image']['name'];
   $category_image_tmp_name = $_FILES['category_image']['tmp_name'];
   $category_image_folder = 'uploaded_img/'.$category_image;

   if(empty($category_name)|| empty($category_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE categories SET name='$category_name', image='$category_image'  WHERE id = '$category_id'";
      $upload = mysqli_query($con, $update_data);

      if($upload){
         move_uploaded_file($category_image_tmp_name, $category_image_folder);
         header('location:category.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};


include 'header.php';
include 'sidebar.php';
include 'navigation.php';
?>


</br>
 </br>
 <body style="font-family: courier new">
 <form action="" method="post" class="add-category-form" enctype="multipart/form-data" style="font-family: courier new">
   <h3>New Category</h3>
   <input type="text" name="category_name" placeholder="Category name" class="box" required>
   <input type="file" name="category_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="Add" name="add_category" class="btn">
</form>
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h5 class="mb-4" style="text-align: center; font-family: courier"><b><i>CATEGORIES</i></b></h6>
		
						  <table class="table table-hover" style="text-align: center; font-family: courier new">
                                <thead >
                                    <tr>
			<!--<th>Category_id</th>-->
			<th>Category_name</th>
			<th>Category_image</th>
            <th colspan=2>Action</th>
                                    </tr>
                                </thead>
								<?php
$query_select="SELECT *from categories";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{

?>
<tbody style="padding=left:100px;">
                                   <tr>
          
            <td><?php echo $row['name']; ?></td>
			 <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
			 
			 
            <td><a href="cat_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a></td>
               <td><a href="category.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a></td>
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