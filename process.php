<?php
    session_start();

    if( isset( $_GET['add_to_cart'] ) ){

        require_once("connection.php");

        $product_id=$_GET['product_id'];
        $select_query="SELECT * FROM  `products` WHERE `product_id`='$product_id'";
        $result = mysqli_query($connection , $select_query);
        $row = mysqli_fetch_assoc($result);

        if( isset( $_SESSION['cart'] ) ){

            $_SESSION['cart'][] = $row;
            
        }else{
            $_SESSION['cart'] = array($row);
        }

        header("location: product_details.php?product_id=$product_id");
    }

    if( isset($_GET['remove_from_cart']) ){
        $product_id = $_GET['product_id'];
        
        foreach( $_SESSION['cart'] as $index => $value ){
            if( $value['product_id'] == $product_id ){
                unset( $_SESSION['cart'][$index] );
                // echo $index;
            }
        }
        // var_dump($_SESSION['cart'][0]);

        header("location: add_to_cart.php?item_removed");

    }

?>