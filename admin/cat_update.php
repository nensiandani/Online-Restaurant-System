<?php
 error_reporting(0);
include 'header.php';
include 'sidebar.php';
include 'navigation.php';

include 'connection.php';

$category_id = $_GET['edit'];
if(isset($_POST['update_category'])){

   $category_name = $_POST['category_name'];
   //$category_price = $_POST['category_price'];
   $category_image = $_FILES['category_image']['name'];
   $category_image_tmp_name = $_FILES['category_image']['tmp_name'];
   $category_image_folder = 'uploaded_img/'.$category_image;

   if(empty($category_name) || empty($category_image)){
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

?>

<!--DOCTYPE html-->
<html lang="en">

<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-category-form-container centered">

   <?php
      
      $select = mysqli_query($con, "SELECT * FROM categories WHERE id = '$category_id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Update Categories</h3>
      <input type="text" class="box" name="category_name" value="<?php echo $row['name']; ?>" placeholder="enter the category name">
      <input type="file" class="box" name="category_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update category" name="update_category" class="btn">
      <a href="category.php" class="btn">Go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
