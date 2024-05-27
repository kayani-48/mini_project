<?php
require_once("header.php");
require_once("connection.php");
if( !isset( $_SESSION['user'] ) ){
  header("location: index.php?not_login");
}


?>

<div class="container">
    <div class="row">
        <h1 class="display-3 text-center my-4">ALL PRODUCTS</h1>
        
        <?php
            $select_query="SELECT * FROM `products`";
            $result=mysqli_query($connection,$select_query);
            while($row=mysqli_fetch_assoc($result)){
                ?>
                <div class="col-lg-3 my-1">
                    <div class="card">
                        <img src="images/product_images/<?php echo $row['product_image']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']?></h5>
                            <p class="card-text"><?php echo $row['product_description']?></p>
                            <h5 class="card-title">RS : <?php echo $row['product_price']?></h5>
                            <h5 class="card-title lead">Category : <?php echo $row['product_category']?></h5>
                            <a href="product_details.php?product_id=<?php echo $row['product_id']?>" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            <?php
            }


        ?>
            



    </div>
</div>


<?php
require_once("footer.php");
?>
