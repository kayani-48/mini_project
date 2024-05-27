<?php

    require_once("sidebar.php");
    require_once("header.php");
   
    require_once('../connection.php');

    if(isset($_POST['product_form'])){
        $product_name=$_POST['product_name'];
        $product_price=$_POST['product_price'];
        $product_description=$_POST['product_description'];
        $product_category=$_POST['product_category'];

        $file_name = rand(0,1000000000000) . $_FILES["product_image"]['name'];
        $file_tmp_path = $_FILES["product_image"]['tmp_name'];

        $insert_query="INSERT INTO `products`(`product_name`, `product_price`, `product_description`, `product_category` , `product_image`) VALUES ('$product_name','$product_price', '$product_description',' $product_category' , '$file_name')";
        $result =mysqli_query($connection,$insert_query);
        
        if( $result ){
            move_uploaded_file($file_tmp_path,'../images/product_images/'  . $file_name);
            header("location: show_all_products.php?product_register");
          }
    }

?>

    
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-2 text-center my-5"> Product Form </h1>

                    <form method="POST" enctype='multipart/form-data'>
                        <div class="mb-3">
                            <label for=" product_name"> product name </label>
                            <input type="text" name="product_name" id="product_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="product_price">product_price</label>
                            <input type="number" name="product_price" class="form-control" required id="product_price">
                        </div>
                        
                        <div class="mb-3">
                            <label for="product_description" class="form-label">product_description</label>
                            <input type="text" name="product_description" class="form-control" required id="product_description" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="product_category" class="form-label">product_category</label>
                            <input type="text" name="product_category"class="form-control" required id="product_category">
                        </div>
                        <div class="mb-3">
                            <label for="product_image" class="form-label">product_image</label>
                            <input type="file" name="product_image"class="form-control" required id="product_image">
                        </div>
                        <button type="submit" name="product_form"class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>


<?php
    require_once("footer.php");
?>