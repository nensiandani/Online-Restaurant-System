<?php
 error_reporting(0);
session_start();
	if($_SESSION["nm"]){
include 'connection.php';

if(isset($_POST['add_product'])){
   $product_name = $_POST['product_name'];
   $category_name=$_POST['category_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   $insert_query = mysqli_query($con, "INSERT INTO `menu`(product_name, product_price, product_image,product_cat_nm) VALUES('$product_name', '$product_price', '$product_image', '$category_name')") 
   or die('query failed');

   if($insert_query){
      move_uploaded_file($product_image_tmp_name, $product_image_folder);
	  header('location:menu.php');
      $message[] = 'menu add succesfully';
   }else{
      $message[] = 'could not add the food';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($con, "DELETE FROM `menu` WHERE product_id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:menu.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:menu.php');
      $message[] = 'product could not be deleted';
   };
};


//$id = $_GET['edit'];

//$id = $_GET['update_product'];

if(isset($_POST['update_product'])){
	$product_id=$_POST['$product_id'];
   $product_name = $_POST['product_name'];
   $category_name=$_POST['category_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($category_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE menu SET product_name='$product_name', product_price='$product_price', product_image='$product_image', product_cat_nm='$category_name'  WHERE product_id = '$product_id'";
      $upload = mysqli_query($con, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:menu.php');
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
 <form action="" method="post" class="add-product-form" enctype="multipart/form-data" style="font-family: courier new">
   <h3 style="">Want to add item</h3>
   <input type="text" name="product_name" placeholder="Name" class="box" required>
   <input type="number" name="product_price" min="0" placeholder="Price" class="box" required>
								<select name="category_name" id="category_name" class="custom-select browser-default" required>
								<option hidden disabled selected value>Category</option>
											<?php
                                    $catsql = "SELECT * FROM `categories`"; 
                                    $catresult = mysqli_query($con, $catsql);
                                    while($row = mysqli_fetch_assoc($catresult)){
                                        //$category_id = $row['id'];
                                        $category_name = $row['name'];
                                        echo '<option value="' .$category_name. '">' .$category_name. '</option>';
                                    }
                                ?>
								</select>
   <input type="file" name="product_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="Add product" name="add_product" class="btn">
</form>
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h5 class="mb-4" style="text-align: center; font-family: courier new"><b><i>ITEMS</i></b></h5>
		
						  <table class="table table-hover" style="text-align: center">
                                <thead >
                                    <tr>
			<th>Category</th>
			<th>Product_image</th>
            <th>Product_name</th>
            <th>Product_price</th>
            <th colspan="2">Action</th>
			
                                    </tr>
                                </thead>
								<?php
$query_select="SELECT *from menu";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{

?>
<tbody style="padding=left:100px;">
                                   <tr>
          
			<td><?php echo $row['product_cat_nm']; ?></td>
			 <td><img src="uploaded_img/<?php echo $row['product_image']; ?>" height="100" alt=""></td>
			 <td><?php echo $row['product_name']; ?></td>
            <td>Rs. <?php echo $row['product_price']; ?>/-</td>
			 
            <td><a href="menu_update.php?edit=<?php echo $row['product_id']; ?>" class="btn"> <i class="fa fa-edit"></i> edit </a></td>
               <td><a href="menu.php?delete=<?php echo $row['product_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a></td>
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