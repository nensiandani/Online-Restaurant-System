<html>
 <?phperror_reporting(0);?>
<body style="font-family: courier new">
<?php
session_start();
	if($_SESSION["cf"]){
include 'connection.php';
include 'header.php';
include 'sidebar.php';
include 'navigation.php';
?>


 </br>
 </br>
 <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
<a href="index.php" class="btn">go back!</a>
                            <h5 class="mb-4"style="text-align: center; font-family: courier"><b><i><?php echo $_GET['view'];?>'s Order </i></b></h5>
		
						  <table class="table table-hover" style="text-align: center; font-family: courier new">
                                <thead >
                                    <tr>
		
                                        <th scope="col">ITEM</th>
		<th scope="col">QUANTITY</th>  
		<th scope="col">UNIT PRICE</th>                                      
		<th scope="col">TOTAL</th>
<th></th>
                                    </tr>
                                </thead>

  <tbody style="padding=left:100px;">
                                    <tr>

 <?php
if(isset($_GET['view'])){
$query_select="SELECT *from cart where user='".$_GET['view']."'";
$query_run=mysqli_query($con,$query_select);
if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{

?>
                              
		
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['quantity']; ?></td>  
										<td><?php echo $row['price'];?></td>
		   <td><?php echo $row['total']; ?></td>     
		</tr>	
    <?php
}
}
}
//}
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