<?php
 error_reporting(0);
include 'header.php';
include 'sidebar.php';
include 'navigation.php';

include 'connection.php';

$product_id = $_GET['edit'];

if(isset($_POST['update_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE menu SET product_name='$product_name', product_price='$product_price', product_image='$product_image'  WHERE product_id = '$product_id'";
      $upload = mysqli_query($con, $update_data);

      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
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


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($con, "SELECT * FROM menu WHERE product_id = '$product_id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['product_name']; ?>" placeholder="enter the product name">
      <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['product_price']; ?>" placeholder="enter the product price">
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="menu.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
