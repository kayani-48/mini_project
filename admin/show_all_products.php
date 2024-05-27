<?php
require_once("sidebar.php");
require_once("header.php");
require_once("../connection.php");


if( isset( $_GET['delete_product'] ) ){
      
  $product_id =  $_GET['product_id'] ;

  $delete = "DELETE FROM `products` WHERE `product_id` = '$product_id'";

  $result = mysqli_query($connection,$delete);
  
  if( $result ){
    echo '
    <script>
        location.assign("show_all_products.php?deleted_product")
    </script>
    ';
  }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 table-responsive">
            <h1 class="display-3 text-center my-4">SHOW ALL PRODUCTS</h1>
            <table class="table table-stripted ">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Category</th>
      <th>Image</th>
      <th>Action</th>
     
    </tr>
  </thead>
  <tbody>
      <?php
        $select_query="SELECT * FROM `products`";
        $result=mysqli_query($connection,$select_query);
        while($row=mysqli_fetch_assoc($result)){
          ?>
            <tr>
              <th> <?php echo $row['product_id']?></th>
              <td> <?php echo $row['product_name']?></td>
              <td> <?php echo $row['product_price']?></td>  
              <td> <?php echo $row['product_description']?></td>
              <td> <?php echo $row['product_category']?></td>
              <td> <img src="../images/product_images/<?php echo $row['product_image']?>" alt=""></td>
              <td> <a href="update_product.php?update_product&product_id=<?php echo$row['product_id']?>" class="btn btn-sm btn-info" >Update </a></td>
              <td> <a href="show_all_products.php?delete_product&product_id=<?php echo $row['product_id']?>" class="btn btn-sm btn-danger">Delete </a></td>
              
            </tr>
          <?php
        }
          ?>
  </tbody>
</table>



        </div>
    </div>
</div>




















<?php
require_once("footer.php");
?>
