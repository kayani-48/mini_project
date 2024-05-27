<?php

require_once("header.php");
require_once("connection.php");
 
if(isset( $_GET ["update_button"] )){
    $product_id=$_GET['product_id'];
    $product_name=$_GET['product_name'];
    $product_price=$_GET['product_price'];
    $product_description=$_GET['product_description'];
    $product_category=$_GET['product_category'];

    $update_query = "UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price',`product_description`='$product_description',`product_category`='$product_category'  WHERE `product_id` = '$product_id' ";

    $result = mysqli_query($connection , $update_query);
    if( $result ){
        header("location: show_all_products.php?update_product");
      }else{ 
        echo "Data ";
      }  
}

$product_id=$_GET['product_id'];
$select_query="SELECT * FROM  `products` WHERE `product_id`='$product_id'";
$result = mysqli_query($connection , $select_query);
$row = mysqli_fetch_assoc($result);

?>

<form method="GET">
    
  <div class="mb-3">
    <label for="product_name">Name</label>
    <input type="text" class="d-none" name="product_id" value="<?php echo $row['product_id'];?>">
    <input type="text" value="<?php echo$row['product_name']?>" name="product_name" id="product_name" class="form-control">
  </div>
  <div class="mb-3">
    <label for="product_price" class="form-label"> product_price</label>
    <input type="number" value="<?php echo $row['product_price']?>" name="product_price" class="form-control" id="product_price" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="product_description" class="form-label">product_description </label>
    <input type="text" value="<?php echo $row['product_description']?>" class="form-control" name="product_description" id="product_description" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="product_category" class="form-label">product_category</label>
    <input type="text"   value="<?php echo $row['product_category']?>" name="product_category" class="form-control" id="product_category">
  </div>
  <button type="submit" name="update_button" class="btn btn-primary">Submit</button>
</form>

<?php
require_once("footer.php");
?>
